<?php

namespace App\Http\Controllers\Front;

use Illuminate\{
    Http\Request,
    Support\Facades\Session
};

use App\{
    Models\Item,
    Models\Store,
    Models\Setting,
    Models\District,
    Models\Subscriber,
    Helpers\EmailHelper,
    Http\Controllers\Controller,
    Http\Requests\ReviewRequest,
    Http\Requests\SubscribeRequest,
    Repositories\Front\FrontRepository
};
use App\Jobs\EmailSendJob;
use App\Models\Brand;
use App\Models\ContactMessage;
use App\Models\Menu;
use App\Models\CampaignItem;
use App\Models\Category;
use App\Models\Fcategory;
use App\Models\HomeCutomize;
use App\Models\SocialMediaPost;
use App\Models\Order;
use App\Models\PaymentSetting;
use App\Models\Post;
use App\Models\Size;
use App\Models\Color;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Subcategory;
use App\Models\TrackOrder;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class FrontendController extends Controller
{

    /**
     * Constructor Method.
     *
     * @param  \App\Repositories\Front\FrontRepository $repository
     *
     */
    protected $repository;
    public function __construct(FrontRepository $repository)
    {
        $this->repository = $repository;
        $setting = Setting::first();
        if ($setting->recaptcha == 1) {
            Config::set('captcha.sitekey', $setting->google_recaptcha_site_key);
            Config::set('captcha.secret', $setting->google_recaptcha_secret_key);
        }

        $this->middleware('localize');
    }

    // -------------------------------- HOME ----------------------------------------
    public function findStore(){
         return view('front.pages.store_locator');
    }



    public function index()
    {
        $featured_items = Item::where('status', 1)->take(8)->get();
        $posts = Post::latest('id')->take(3)->get();
        $featuredCategories = Category::where('is_featured', 1)
                                  ->where('status', 1)
                                  ->orderBy('id', 'asc')
                                  ->get();

        $homeCustomize = HomeCutomize::first();
        $heroBanner = json_decode($homeCustomize->hero_banner, true);
        $thirdBanner  = json_decode($homeCustomize->banner_third, true);
        $socialPosts = SocialMediaPost::where('status', 1)->latest()->get();
        $newArrivalItems = Item::with('itemVariants.variant.color', 'itemVariants.variant.size')->where('status', 1)->where('is_type', 'new')->latest()->get();


        return view('front.pages.home',compact(
            'posts',
            'featured_items',
            'featuredCategories',
            'heroBanner',
            'thirdBanner',
            'socialPosts',
            'newArrivalItems'
        ));

    }



    public function review_submit()
    {
        return view('back.overlay.index');
    }

    public function slider_o_update(Request $request)
    {
        $setting = Setting::find(1);
        $setting->overlay = $request->slider_overlay;
        $setting->save();
        return redirect()->back();
    }


    public function product($slug)
    {
        $item_details = Item::with('brand')->where('slug', $slug)->first();
        // dd($item_details);
        return view('front.pages.product_detail', compact(
            'item_details'
        ));

    }
     public function wishlist()
    {
        return view('front.pages.wishlist');

    }
       public function cart()
    {
        return view('front.pages.wishlist');

    }
     public function categoryProduct($slug)
    {
        $subCategories = Subcategory::where('status',1)->latest()->get();
        $brands = Brand::where('status',1)->latest()->get();
        $products = Item::with('iteamVariant')->where('status',1)->latest()->paginate(20);
        $allSize = Size::where('status',1)->latest()->get();
        $allColor  = Color::where('status',1)->latest()->get();

        return view('front.pages.products',compact('subCategories','brands','products','allSize','allColor'));

    }

    //products filter 
    public function filterProducts(Request $request)
    {
        $query = Item::query()->where('status', 1);

        $query->when($request->subcategory_id, function ($q) use ($request) {
            return $q->where('subcategory_id', $request->subcategory_id);
        });

        $query->when($request->brand_id, function ($q) use ($request) {
            return $q->where('brand_id', $request->brand_id); 
        });


        $query->when($request->color, function ($q) use ($request) {
            return $q->whereJsonContains('variant_value', $request->color); 
        });

        $query->when($request->size, function ($q) use ($request) {
            return $q->whereJsonContains('variant_value', $request->size); 
        });

    
        if ($request->filled('sort_by')) {
            $sortOrder = $request->sort_by == '1' ? 'asc' : 'desc'; 
            $query->orderBy('discount_price', $sortOrder); 
        }

        $products = $query->paginate(20);

        return response()->json([
            'products'=> view('front.pages.partials.product_list', compact('products'))->render(),
            'pagination' => view('front.pages.partials.pagination', compact('products'))->render(),
        ]);
    }


    public function brands()
    {
        if (Setting::first()->is_brands == 0) {
            return back();
        }
        return view('front.brand', [
            'brands' => Brand::whereStatus(1)->get()
        ]);
    }


    public function blog(Request $request)
    {
        $tagz = '';
        $tags = null;
        $name = Post::pluck('tags')->toArray();
        foreach ($name as $nm) {
            $tagz .= $nm . ',';
        }
        $tags = array_unique(explode(',', $tagz));

        if (Setting::first()->is_blog == 0)
            return back();

        if ($request->ajax()){
           return view('front.blog.list', ['posts' => $this->repository->displayPosts($request)]);
        }
        return view('front.blog.index', [
            'posts' => $this->repository->displayPosts($request),
            'recent_posts' => Post::orderby('id', 'desc')->take(4)->get(),
            'categories' => \App\Models\Bcategory::withCount('posts')->whereStatus(1)->get(),
            'tags' => array_filter($tags)
        ]);
    }

    public function blogDetails($id)
    {
        $items = $this->repository->displayPost($id);

        return view('front.blog.show', [
            'post' => $items['post'],
            'categories' => $items['categories'],
            'tags' => $items['tags'],
            'posts' => $items['posts'],

        ]);
    }


    // -------------------------------- FAQ ----------------------------------------

    public function faq()
    {
        if (Setting::first()->is_faq == 0) {
            return back();
        }
        $fcategories = Fcategory::whereStatus(1)->withCount('faqs')->latest('id')->get();
        return view('front.faq.index', ['fcategories' => $fcategories]);
    }

    public function show($slug)
    {
        if (Setting::first()->is_faq == 0) {
            return back();
        }
        $category = Fcategory::whereSlug($slug)->first();
        return view('front.faq.show', ['category' => $category]);
    }

    // -------------------------------- FAQ ----------------------------------------

    // -------------------------------- CAMPAIGN ----------------------------------------

    public function compaignProduct()
    {
        if (Setting::first()->is_campaign == 0) {
            return back();
        }
        $compaign_items = CampaignItem::whereStatus(1)->orderby('id', 'desc')->get();
        return view('front.campaign', ['campaign_items' => $compaign_items]);
    }

    // -------------------------------- CAMPAIGN ----------------------------------------


    // -------------------------------- CURRENCY ----------------------------------------
    public function currency($id)
    {
        Session::put('currency', $id);
        return back();
    }
    // -------------------------------- CURRENCY ----------------------------------------


    // -------------------------------- LANGUAGE ----------------------------------------
    public function language($id)
    {
        Session::put('language', $id);
        return back();
    }
    // -------------------------------- LANGUAGE ----------------------------------------


    // -------------------------------- FAQ ----------------------------------------

    public function page($slug)
    {
        return view('front.page', [
            'page' => $this->repository->displayPage($slug)
        ]);
    }

    // -------------------------------- CONTACT ----------------------------------------

    public function contact()
    {
        if (Setting::first()->is_contact == 0) {
            return back();
        }

        
        $districts = District::orderBy('name')->get(['id', 'name']);
        $stores = Store::with('district:id,name')
            ->get(['id', 'district_id', 'name', 'area', 'address', 'mobile', 'latitude', 'longitude']);

        return view('front.contact', compact('districts', 'stores'));
    }

    public function getByDistrict($district_id = null)
    {
        $query = Store::query()->with('district:id,name');

        if ($district_id && $district_id !== 'all') {
            $query->where('district_id', $district_id);
        }

        $stores = $query->get(['id', 'district_id', 'name', 'area', 'address', 'mobile', 'latitude', 'longitude']);

        return response()->json($stores);
    }

    //contact message submit
    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name'        => 'required|max:50',
            'email'       => 'required|email|max:50',
            'phone'       => 'required|digits:11',
            'description' => 'required|max:250',
        ]);

        // Save to database
        $contact              = new ContactMessage();
        $contact->name        = $request->name;
        $contact->email       = $request->email;
        $contact->phone       = $request->phone;
        $contact->description = $request->description;
        $contact->save();

        Session::flash('success', __('Thank you for contacting with us, we will get back to you shortly.'));
        return redirect()->back();
    }


    public function contactEmail(Request $request)
    {
        $setting = Setting::first();

        $request->validate([
            'g-recaptcha-response' => $setting->recaptcha == 1 ? 'nullable|captcha' : '',
            'name' => 'required|max:50',
            'last_name' => 'nullable|max:50',
            'email' => 'required|email|max:50',
            'phone' => 'nullable|max:50',
            'message' => 'required|max:250',
        ]);

        $input = $request->all();
        $name = $input['name'];
        $subject = "Email From " . $name;
        $to = $setting->contact_email;
        $phone = $request->phone;
        $from = $request->email;
        $msg = "Name: " . $name . "<br/>Email: " . $from . "<br/>Phone: " . $phone . "<br/>Message: " . $request->message;

        $emailData = [
            'to' => $to,
            'subject' => $subject,
            'body' => $msg,
        ];



        $setting = Setting::first();
        if ($setting->is_queue_enabled == 1) {
            dispatch(new EmailSendJob($emailData));
        } else {
            $email = new EmailHelper();
            $email->sendCustomMail($emailData);
        }


        Session::flash('success', __('Thank you for contacting with us, we will get back to you shortly.'));
        return redirect()->back();
    }

    // -------------------------------- REVIEW ----------------------------------------

    public function reviews()
    {
        return view('front.reviews');
    }

    public function topReviews()
    {
        return view('front.top-reviews');
    }

    public function reviewSubmit(ReviewRequest $request)
    {
        return response()->json($this->repository->reviewSubmit($request));
    }



    // -------------------------------- SUBSCRIBE ----------------------------------------

    public function subscribeSubmit(SubscribeRequest $request)
    {
        Subscriber::create($request->all());
        return response()->json(__('You Have Subscribed Successfully.'));
    }


    // ---------------------------- TRACK ORDER ----------------------------------------//
    public function trackOrder()
    {
        return view('front.track_order');
    }

    public function track(Request $request)
    {
        $order = Order::where('transaction_number', $request->order_number)->first();

        if ($order) {
            return view('user.order.track', [
                'numbers' => 3,
                'track_orders' => TrackOrder::whereOrderId($order->id)->get()->toArray()
            ]);
        } else {
            return view('user.order.track', [
                'numbers' => 3,
                'error' => 1,
            ]);
        }
    }


    public function maintainance()
    {
        $setting = Setting::first();
        if ($setting->is_maintainance == 0) {
            return redirect(route('front.index'));
        }
        return view('front.maintainance');
    }



    public function finalize()
    {

        Artisan::call('migrate', ['--seed' => true]);
        copy(str_replace('core', '', base_path() . "updater/composer.json"), base_path('composer.json'));
        copy(str_replace('core', '', base_path() . "updater/composer.lock"), base_path('composer.lock'));

        $exists = PaymentSetting::where("unique_keyword", "paytabs")->exists();
        if (!$exists) {
            $jsonString = '{"profile_id":"159330","client_secret":"SNJ9BGGL9W-JKLRTKJ6DR-MTMZ2GMTNW","check_sandbox":1}';
            $gateway = new PaymentSetting();
            $gateway->name = "Paytabs";
            $gateway->unique_keyword = "paytabs";
            $gateway->information = $jsonString;
            $gateway->text = "Paytabs is the faster & safer way to send money. Make an online payment via Paytabs.";
            $gateway->status = 0;

            $gateway->save();
        }


        $menu = Menu::where('language_id', 1)->exists();

        if ($menu == false) {
            $menu = new Menu();
            $menu->language_id = 1;
            $menu->menus = '[{"text":"Home","href":"","icon":"empty","target":"_self","title":"","type":"home"},{"text":"Shop","href":"","icon":"empty","target":"_self","title":"","type":"shop"},{"text":"Campaign","href":"","icon":"empty","target":"_self","title":"","type":"campaign"},{"type":"blog","text":"Blog","href":"","target":"_self"},{"type":"pages","text":"Pages","href":"","target":"_self","children":[{"type":"7","text":"About Us","href":"","target":"_self"},{"type":"14","text":"How It Works","href":"","target":"_self"},{"type":"10","text":"Privacy Policy","href":"","target":"_self"},{"type":"11","text":"Terms & Service","href":"","target":"_self"},{"type":"12","text":"Return Policy","href":"","target":"_self"}]},{"text":"Contact","href":"","icon":"empty","target":"_self","title":"","type":"contact"}]';
            $menu->created_at = Carbon::now();
            $menu->save();
        }

        $setting = Setting::first();
        $setting->version = '6.2';
        $setting->save();


        $sourcePath = 'assets/images';
        $destinationPath = storage_path('app/public/images');



        // Ensure the destination exists
        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0777, true, true);
        }

        if (File::exists($sourcePath)) {
            // Move files and folders
            File::moveDirectory($sourcePath, $destinationPath, true);
        }


        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        // storage:link 
        Artisan::call('storage:unlink');
        Artisan::call('storage:link');

        return redirect(route('front.index'));
    }
}
