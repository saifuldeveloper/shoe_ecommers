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
use Auth;
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
use App\Models\Wishlist;
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
        $districts = District::latest('id')->get();
        $stores =Store::latest('id')->get();

         return view('front.pages.store_locator',compact('districts','stores'));
    }

    public function collectionAll()
    {
        $subCategories = Subcategory::where('status',1)->latest()->get();
        $brands = Brand::where('status',1)->latest()->get();
        $products = Item::with('iteamVariant')->where('status',1)->latest()->paginate(20);
        $allSize = Size::where('status',1)->latest()->get();
        $allColor  = Color::where('status',1)->latest()->get();

        return view('front.pages.collecton_all_products',compact('subCategories','brands','products','allSize','allColor'));
    }


    public function index()
    {
        $menuCategories = Category::where('is_in_menu', 1)
        ->where('status', 1)
        ->orderBy('menu_serial', 'asc')
        ->get();

        $menuCategoryIds = $menuCategories->pluck('id');

        $featured_items = Item::where('status', 1)
        ->where('is_type', 'feature')
        ->whereIn('category_id', $menuCategoryIds)
        ->latest()
        ->get();

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
            'newArrivalItems',
            'menuCategories'
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


    public function product(Request $request,$slug)
    {
        $item_details = Item::with('brand')->where('slug', $slug)->first();
        $related_products = Item::where('status', 1)
                        ->where('id', '!=', $item_details->id)
                        ->where(function ($query) use ($item_details) {
                            $query->where('category_id', $item_details->category_id)
                                ->orWhere('subcategory_id', $item_details->subcategory_id)
                                ->orWhere('childcategory_id', $item_details->childcategory_id)
                                ->orWhere('brand_id', $item_details->brand_id);
                        })
                        ->inRandomOrder()
                        ->take(8)
                        ->get();
        // Get existing viewed product IDs from session (or empty array)
        $viewed = session()->get('viewed_products', []);

        // Add this product ID if not already there
        if (!in_array($item_details->id, $viewed)) {
            $viewed[] = $item_details->id;
            session()->put('viewed_products', $viewed);
        }
        
        $recently_viewed = Item::where('id', '!=', $item_details->id)
            ->whereIn('id', session('viewed_products', []))
            ->where('status', 1)
            ->get();

        //selected size
        $item = Item::with('itemVariants.variant.size', 'itemVariants.variant.color')
                ->where('slug', $slug)
                ->firstOrFail();
     
       $size = $request->query('size'); 
      
        return view('front.pages.product_detail', compact(
            'item_details',
            'related_products',
            'recently_viewed',
            'item', 
            'size'
        ));

    }
     public function wishlist()
    {
        if(!Auth::check()){
            return redirect()->route('user.login');
        }
        $wishlists = Wishlist::whereUserId(Auth::user()->id)->pluck('item_id')->toArray();
        $wishlist_items = Item::where('status','=',1)->whereIn('id',$wishlists)->latest('id')->get();
       
        return view('front.pages.wishlist',compact('wishlist_items'));

    }
       public function cart()
    {
        return view('front.pages.wishlist');

    }
     public function categoryProduct($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $constraint = request()->get('constraint');

        $query = Item::with('itemVariants.variant.color', 'itemVariants.variant.size')
        ->where('category_id', $category->id)
        ->where('status', 1)
        ->orderBy('id', 'DESC');


        if ($constraint) {
            $query->where(function ($q) use ($constraint) {
                $q->where('discount_price', 'LIKE', "%{$constraint}%") 
                ->orWhere('discount_price', 'LIKE', "%{$constraint}%") 
                ->orWhereHas('itemVariants.variant.color', function ($color) use ($constraint) {
                    $color->where('name', 'LIKE', "%{$constraint}%");
                })
                ->orWhereHas('itemVariants.variant.size', function ($size) use ($constraint) {
                    $size->where('name', 'LIKE', "%{$constraint}%"); 
                });
            });
        }
         $products = $query->paginate(20);

         //sub categorys and brands
        $subCategories = Subcategory::where('status',1)->latest()->get();
        $brands = Brand::where('status',1)->latest()->get();
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

        // color filter
        $query->when($request->color, function ($q) use ($request) {
            $q->whereHas('itemVariants.variant', function ($subQ) use ($request) {
                $subQ->where('color_id', $request->color);
            });
        });

        // size filter
        $query->when($request->size, function ($q) use ($request) {
            $q->whereHas('itemVariants.variant', function ($subQ) use ($request) {
                $subQ->where('size_id', $request->size);
            });
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
        $compaign_items = CampaignItem::whereStatus(1)->orderby('id', 'desc')->with('item')->paginate(10);

        //sub categorys and brands
        $subCategories = Subcategory::where('status',1)->latest()->get();
        $brands = Brand::where('status',1)->latest()->get();
        $allSize = Size::where('status',1)->latest()->get();
        $allColor  = Color::where('status',1)->latest()->get();

        return view('front.campaign', ['products' => $compaign_items],compact('subCategories','brands','allSize','allColor'));
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

    /**
     * CategoryBased product search
     */
    public function categoryBaseProduct(Request $request){
        $query = $request->input('q');    
        $type = $request->input('type');  

        $category = Category::where('name','like','%'.$query. '%')->first();
        $products = [];
        if($category){
           $products =  Item::where('category_id',$category->id)->paginate(5);
        }

        return view('front.pages.search_products',compact('products'));
    }

     /**
      * Summary of productSearch
      * @param \Illuminate\Http\Request $request
      * @return \Illuminate\Http\JsonResponse
      */
     public function productSearch(Request $request){
        $query = $request->input('q');    

        if (empty($query)) {
            return response()->json([
                'products' => [],
                'totalCount' => 0,
            ]);
        }
        
        $products = Item::where('name','like','%'.$query. '%')->limit(3)->get();
        $totalCount = Item::where('name', 'like', '%' . $query . '%')->count();
      
         return response()->json([
                'products' => $products,
                'totalCount' => $totalCount, 
            ]);
    }
    
    /**
     * Summary of showSearchProducts
     * @return void
     */
    public function showSearchProducts(Request $request)
    {
        $query = $request->input('q');    

        $products = Item::where('name', 'like', '%' . $query . '%')->paginate(5);

        return view('front.pages.query_products',compact('products'));
    }



     /**
     * Summary of showSearchProducts
     * @return void
     */
    public function newArrivalProduct()
    {
        $products = Item::with('itemVariants.variant.color', 'itemVariants.variant.size')
              ->where('status', 1)->where('is_type', 'new')
                ->paginate(20);

        $subCategories = Subcategory::where('status',1)->latest()->get();
        $brands = Brand::where('status',1)->latest()->get();
        $allSize = Size::where('status',1)->latest()->get();
        $allColor  = Color::where('status',1)->latest()->get();

        return view('front.pages.new_arrival_products',compact('products','subCategories','brands','allSize','allColor'));
    }



}
