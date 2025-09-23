<?php

// ************************************ ADMIN PANEL **********************************************

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Back\FaqController;
use App\Http\Controllers\Back\TaxController;
use App\Http\Controllers\Back\ItemController;
use App\Http\Controllers\Back\MenuController;
use App\Http\Controllers\Back\PageController;
use App\Http\Controllers\Back\PostController;
use App\Http\Controllers\Back\RoleController;
use App\Http\Controllers\Back\SizeController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\BrandController;
use App\Http\Controllers\Back\ColorController;
use App\Http\Controllers\Back\OrderController;
use App\Http\Controllers\Back\StaffController;
use App\Http\Controllers\Back\StateController;
use App\Http\Controllers\Back\BackupController;
use App\Http\Controllers\Back\ReviewController;
use App\Http\Controllers\Back\SliderController;
use App\Http\Controllers\Back\SocialController;
use App\Http\Controllers\Back\StoresController;
use App\Http\Controllers\Back\TicketController;
use App\Http\Controllers\Back\FeatureController;
use App\Http\Controllers\Back\ServiceController;
use App\Http\Controllers\Back\SettingController;
use App\Http\Controllers\Back\SitemapController;
use App\Http\Controllers\Back\CampaignController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\CurrencyController;
use App\Http\Controllers\Back\DistrictController;
use App\Http\Controllers\Back\HomePageController;
use App\Http\Controllers\Back\LanguageController;
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\Back\AffiliateController;
use App\Http\Controllers\Back\AttributeController;
use App\Http\Controllers\Back\BcategoryController;
use App\Http\Controllers\Back\FcategoryController;
use App\Http\Controllers\Back\PromoCodeController;
use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\Back\BulkDeleteController;
use App\Http\Controllers\Back\CsvProductController;
use App\Http\Controllers\Back\SmsSettingController;
use App\Http\Controllers\Back\SubscriberController;
use App\Http\Controllers\Back\TranactionController;
use App\Http\Controllers\Auth\Back\ForgotController;
use App\Http\Controllers\Back\SubCategoryController;
use App\Http\Controllers\Back\EmailSettingController;
use App\Http\Controllers\Back\NotificationController;
use App\Http\Controllers\Auth\User\RegisterController;
use App\Http\Controllers\Back\ChieldCategoryController;
use App\Http\Controllers\Back\PaymentSettingController;
use App\Http\Controllers\Back\AttributeOptionController;
use App\Http\Controllers\Back\ShippingServiceController;
use App\Http\Controllers\Back\AccountController as BackAccountController;
use App\Http\Controllers\User\AccountController as UserAccountController;
use App\Http\Controllers\Auth\User\LoginController as UserLoginController;
use App\Http\Controllers\Auth\Back\LoginController  as BackLoginController;
use App\Http\Controllers\Front\UserDashboardController;


Route::group(['middleware' => ['adminlocalize', 'demo']], function () {
    Route::prefix('admin')->group(function () {
        //------------ AUTH ------------
        Route::get('/login', [BackLoginController::class, 'showForm'])->name('back.login');
        Route::post('/login-submit', [BackLoginController::class, 'login'])->name('back.login.submit');
        Route::get('/logout', [BackLoginController::class, 'logout'])->name('back.logout');

        //------------ FORGOT ------------
        Route::get('/forgot', [ForgotController::class, 'showForm'])->name('back.forgot');
        Route::post('/forgot-submit', [ForgotController::class, 'forgot'])->name('back.forgot.submit');
        Route::get('/change-password/{token}', [ForgotController::class, 'showChangePassForm'])->name('back.change.token');
        Route::post('/change-password-submit', [ForgotController::class, 'changepass'])->name('back.change.password');

        //------------ DASHBOARD & PROFILE ------------

        Route::get('/contact/messages', [BackAccountController::class, 'contactMessage'])->name('back.contact-message');
        Route::get('/', [BackAccountController::class, 'index'])->name('back.dashboard');
        Route::get('/profile', [BackAccountController::class, 'profileForm'])->name('back.profile');
        Route::post('/profile/update', [BackAccountController::class, 'updateProfile'])->name('back.profile.update');
        Route::get('/password', [BackAccountController::class, 'passwordResetForm'])->name('back.password');
        Route::post('/password/update', [BackAccountController::class, 'updatePassword'])->name('back.password.update');
        Route::get('bulk/deletes', [BulkDeleteController::class, 'bulkDelete'])->name('back.bulk.delete');

        Route::group(['middleware' => 'permissions:Manage Orders'], function () {
            //------------ ORDER ------------
            Route::get('orders', [OrderController::class, 'index'])->name('back.order.index');
            Route::delete('/order/delete/{id}', [OrderController::class, 'delete'])->name('back.order.delete');
            Route::get('/order/edit/{id}', [OrderController::class, 'edit'])->name('back.order.edit');
            Route::post('/order/update/{id}', [OrderController::class, 'update'])->name('back.order.update');
            Route::get('/order/print/{id}', [OrderController::class, 'printOrder'])->name('back.order.print');
            Route::get('/order/invoice/{id}', [OrderController::class, 'invoice'])->name('back.order.invoice');
            Route::get('/order/status/{id}/{field}/{value}', [OrderController::class, 'status'])->name('back.order.status');
        });


        Route::group(['middleware' => 'permissions:Manage Products'], function () {
            //------------ ITEM ------------
            Route::get('item/add', [ItemController::class, 'add'])->name('back.item.add');
            Route::get('item/status/{item}/{status}', [ItemController::class, 'status'])->name('back.item.status');
            Route::get('get/subcategory', [ItemController::class, 'getsubCategory'])->name('back.get.subcategory');
            Route::get('get/childcategory', [ItemController::class, 'getChildCategory'])->name('back.get.childcategory');
            Route::get('stock/out/product', [ItemController::class, 'stockOut'])->name('back.item.stock.out');
            Route::resource('item', ItemController::class)->except(['show'])->names('back.item');
            Route::get('item/highlight/{item}', [ItemController::class, 'highlight'])->name('back.item.highlight');
            Route::post('item/highlight/update/{item}', [ItemController::class, 'highlight_update'])->name('back.item.highlight.update');
            Route::get('item/galleries/{item}', [ItemController::class, 'galleries'])->name('back.item.gallery');
            Route::post('item/galleries/update', [ItemController::class, 'galleriesUpdate'])->name('back.item.galleries.update');
            Route::delete('item/gallery/{gallery}/delete', [ItemController::class, 'galleryDelete'])->name('back.item.gallery.delete');
            // Bulk product upload
            Route::get('/product/csv/export', [CsvProductController::class, 'export'])->name('back.csv.export');
            Route::get('bulk/product/index', [CsvProductController::class, 'index'])->name('back.bulk.product.index');
            Route::post('csv/import', [CsvProductController::class, 'import'])->name('back.csv.import');
            Route::get('transaction/csv/export', [CsvProductController::class, 'transactionExport'])->name('back.csv.transaction.export');
            Route::get('order/csv/export', [CsvProductController::class, 'orderExport'])->name('back.csv.order.export');

            // summernote image upload 
            Route::post('/summernote/image/upload', [ItemController::class, 'summernoteUpload'])->name('back.summernote.image.upload');

            // Campaign offer
            Route::resource('/campaign', CampaignController::class)->except(['show'])->names('back.campaign');
            Route::get('campaign/status/{id}/{status}/{type}', [CampaignController::class, 'status'])->name('back.campaign.status');

            // --------- DIGITAL PRODUCT -----------//
            Route::get('/digital/create', [ItemController::class, 'deigitalItemCreate'])->name('back.digital.item.create');
            Route::post('/digital/store', [ItemController::class, 'deigitalItemStore'])->name('back.digital.item.store');
            Route::get('/digital/edit/{id}', [ItemController::class, 'deigitalItemEdit'])->name('back.digital.item.edit');

            // --------- LICENSE PRODUCT -----------//
            Route::get('/license/create', [ItemController::class, 'licenseItemCreate'])->name('back.license.item.create');
            Route::post('/license/store', [ItemController::class, 'licenseItemStore'])->name('back.license.item.store');
            Route::get('/license/edit/{id}', [ItemController::class, 'licenseItemEdit'])->name('back.license.item.edit');

            // ----------- AFFILIATE PRODUCT -----------//
            Route::resource('affiliate', AffiliateController::class)->names('back.affiliate');

            // Nested resources under item
            Route::prefix('{item}')->group(function () {
                //------------ ATTRIBUTE ------------
                Route::resource('attribute', AttributeController::class)->except(['show'])->names('back.attribute');
                //------------ ATTRIBUTE OPTION ------------
                Route::resource('option', AttributeOptionController::class)->except(['show'])->names('back.option');
            });

            //------------ BRAND ------------
            Route::get('brand/status/{id}/{status}/{type}', [BrandController::class, 'status'])->name('back.brand.status');
            Route::resource('brand', BrandController::class)->except(['show'])->names('back.brand');

             //------------ COLOR ------------
            Route::get('color/status/{id}/{status}/{type}', [ColorController::class, 'status'])->name('back.color.status');
            Route::resource('color', ColorController::class)->except(['show'])->names('back.color');

              //------------ SIZE ------------
            Route::get('size/status/{id}/{status}/{type}', [SizeController::class, 'status'])->name('back.size.status');
            Route::resource('size', SizeController::class)->except(['show'])->names('back.size');

            //------------ REVIEW ----------------//
            Route::get('review/status/{id}/{status}', [ReviewController::class, 'status'])->name('back.review.status');
            Route::resource('review', ReviewController::class)->except(['create', 'store', 'edit', 'update'])->names('back.review');
        });

        //------------ NOTIFICATIONS ------------
        Route::get('/notifications', [NotificationController::class, 'notifications'])->name('back.notifications');
        Route::get('/notifications/view', [NotificationController::class, 'view_notification'])->name('back.view.notification');
        Route::get('/notification/delete/{id}', [NotificationController::class, 'delete'])->name('back.notification.delete');
        Route::get('/notifications/clear', [NotificationController::class, 'clear_notf'])->name('back.notifications.clear');


        Route::group(['middleware' => 'permissions:Manage Categories'], function () {
            //------------ CATEGORY ------------
            Route::get('category/status/{id}/{status}', [CategoryController::class, 'status'])->name('back.category.status');
            Route::get('category/feature/{id}/{status}', [CategoryController::class, 'feature'])->name('back.category.feature');

            Route::as('back.')->group(function () {
                Route::resource('category', CategoryController::class)->except(['show']);
            });
            //------------ SUB CATEGORY ------------
            Route::get('subcategory/status/{id}/{status}', [SubCategoryController::class, 'status'])->name('back.subcategory.status');
            Route::resource('subcategory', SubCategoryController::class)->except(['show'])->names('back.subcategory');

            //------------ CHILD CATEGORY ------------
            Route::get('childcategory/status/{id}/{status}', [ChieldCategoryController::class, 'status'])->name('back.childcategory.status');
            Route::resource('childcategory', ChieldCategoryController::class)->except(['show'])->names('back.childcategory');
        });

        Route::group(['middleware' => 'permissions:Customer List'], function () {
            //------------ USER ------------
            Route::resource('user', UserController::class)
                ->except(['create', 'store', 'edit'])
                ->names('back.user');
        });

        Route::group(['middleware' => 'permissions:Ecommerce'], function () {
            //------------ PROMO CODE ------------
            Route::get('code/status/{id}/{status}', [PromoCodeController::class, 'status'])->name('back.code.status');
            Route::resource('code', PromoCodeController::class)->except(['show'])->names('back.code');
            //------------ TAX SETTING ------------
            Route::get('tax/status/{id}/{status}', [TaxController::class, 'status'])->name('back.tax.status');
            Route::resource('tax', TaxController::class)->except(['show'])->names('back.tax');

            Route::get('state/status/{id}/{status}', [StateController::class, 'status'])->name('back.state.status');
            Route::resource('state', StateController::class)->except(['show'])->names('back.state');

            //------------ SHIPPING SERVICE ------------
            Route::get('shipping/status/{id}/{status}', [ShippingServiceController::class, 'status'])->name('back.shipping.status');
            Route::resource('shipping', ShippingServiceController::class)->except(['show'])->names('back.shipping');

            //------------ CURRENCY ------------
            Route::get('currency/status/{id}/{status}', [CurrencyController::class, 'status'])->name('back.currency.status');
            Route::resource('currency', CurrencyController::class)->except(['show'])->names('back.currency');

            //------------ PAYMENT SETTING ------------
            Route::get('/setting/payment', [PaymentSettingController::class, 'payment'])->name('back.setting.payment');
            Route::post('/setting/payment/update', [PaymentSettingController::class, 'update'])->name('back.setting.payment.update');
        });

        Route::group(['middleware' => 'permissions:System Backup'], function () {
            // -------------- SYSTEM BACKUP ---------------//
            Route::get('system/backup', [BackupController::class, 'systemBackup'])->name('back.system.backup');
            Route::get('database/backup', [BackupController::class, 'databaseBackup'])->name('back.database.backup');
        });

        //------------ TICKETS ------------
        Route::group(['middleware' => 'permissions:Manages Tickets'], function () {
            Route::resource('ticket', TicketController::class)
                ->except(['show'])
                ->names('back.ticket');
            Route::get('ticket/status/{id}', [TicketController::class, 'status'])->name('back.ticket.status');
        });

        //------------ BLOGS ------------
        Route::group(['middleware' => 'permissions:Manage Blogs'], function () {
            // CATEGORY
            Route::get('bcategory/status/{id}/{status}', [BcategoryController::class, 'status'])->name('back.bcategory.status');
            Route::resource('bcategory', BcategoryController::class)
                ->except(['show'])
                ->names('back.bcategory');

            // POST
            Route::resource('post', PostController::class)
                ->except(['show'])
                ->names('back.post');
            Route::delete('post/delete/{key}/{id}', [PostController::class, 'delete'])->name('back.post.photo.delete');
        });

        //------------ TRANSACTIONS ------------
        Route::group(['middleware' => 'permissions:Transactions'], function () {
            Route::get('/transactions', [TranactionController::class, 'index'])->name('back.transaction.index');
            Route::delete('/transaction/delete/{id}', [TranactionController::class, 'delete'])->name('back.transaction.delete');
        });


        //------------ FAQS ------------
        Route::group(['middleware' => 'permissions:Manage Faqs Contents'], function () {
            // FAQ CATEGORY
            Route::get('faq-category/status/{id}/{status}', [FcategoryController::class, 'status'])->name('back.fcategory.status');
            Route::resource('fcategory', FcategoryController::class)
                ->except(['show'])
                ->names('back.fcategory');

            // FAQ
            Route::resource('faq', FaqController::class)
                ->except(['show'])
                ->names('back.faq');
        });

        //------------ SYSTEM USERS ------------
        Route::group(['middleware' => 'permissions:Manage System User'], function () {
            // ROLE
            Route::resource('role', RoleController::class)
                ->except(['show'])
                ->names('back.role');

            // STAFF
            Route::resource('staff', StaffController::class)
                ->except(['show'])
                ->names('back.staff');
        });

        //------------ PAGES ------------
        Route::group(['middleware' => 'permissions:Manages Pages'], function () {
            // PAGE
            Route::get('page/pos/{id}/{pos}', [PageController::class, 'pos'])->name('back.page.pos');
            Route::resource('page', PageController::class)
                ->except(['show'])
                ->names('back.page');
        });
        Route::group(['middleware' => 'permissions:Manage Site'], function () {
            //------------ SOCIAL ------------
            Route::resource('social', SocialController::class)->except(['show'])->names('back.social');
            //------------ FEATURE ------------
            Route::get('feature/image', [FeatureController::class, 'featureImage'])->name('back.feature.image');
            Route::resource('feature', FeatureController::class)->except(['show'])->names('back.feature');
            //------------ SETTING ------------
            Route::get('/setting/menu', [SettingController::class, 'menu'])->name('back.setting.menu');
            Route::get('/setting/social', [SettingController::class, 'social'])->name('back.setting.social');
            Route::get('/setting/system', [SettingController::class, 'system'])->name('back.setting.system');
            Route::post('/setting/update', [SettingController::class, 'update'])->name('back.setting.update');
            Route::post('/setting/update/visiable', [SettingController::class, 'visiable'])->name('back.setting.visible.update');
            Route::get('/announcement', [SettingController::class, 'announcement'])->name('back.subscribers.announcement');
            Route::get('/cookie/alert', [SettingController::class, 'cookie'])->name('back.cookie.alert');
            Route::get('/maintainance', [SettingController::class, 'maintainance'])->name('back.setting.maintainance');

            //------ Menu Builder 
            Route::get('/menu', [MenuController::class, 'index'])->name('back.menu.index');
            Route::post('/menu/update', [MenuController::class, 'update'])->name('back.menu.update');

            //------ Home Page Customizations
            Route::get('home-page', [HomePageController::class, 'index'])->name('back.homePage');
            Route::post('home-page/hero/banner/update', [HomePageController::class, 'hero_banner_update'])->name('back.hero.banner.update');
            Route::post('home-page/first/banner/update', [HomePageController::class, 'first_banner_update'])->name('back.first.banner.update');
            Route::post('home-page/secend/banner/update', [HomePageController::class, 'secend_banner_update'])->name('back.secend.banner.update');
            Route::post('home-page/third/banner/update', [HomePageController::class, 'third_banner_update'])->name('back.third.banner.update');
            Route::post('home-page/popular/category/update', [HomePageController::class, 'popular_category_update'])->name('back.popular.category.update');
            Route::post('home-page/tree/cloumn/category/update', [HomePageController::class, 'tree_column_category_update'])->name('back.tree.column.category.update');
            Route::post('home-page/feature/category/category/update', [HomePageController::class, 'feature_category_update'])->name('back.feature.category.update');
            Route::post('home-page4/banner/update', [HomePageController::class, 'homepage4update'])->name('back.home_page4.banner.update');
            Route::post('home-page4/category/update', [HomePageController::class, 'homepage4categoryupdate'])->name('back.home4.category.update');

            //----------- SECTION SETTING -----------//
            Route::get('/setting/section', [SettingController::class, 'section'])->name('back.setting.section');
            Route::get('/setting/storage', [SettingController::class, 'storage'])->name('back.setting.storage');
            Route::post('/setting/storage/link', [SettingController::class, 'storageLink'])->name('back.setting.storage.link');

            //------------ EMAIL TEMPLATE ------------
            Route::get('/setting/email', [EmailSettingController::class, 'email'])->name('back.setting.email');
            Route::post('/setting/email/update', [EmailSettingController::class, 'emailUpdate'])->name('back.email.update');
            Route::get('email/template/{template}/edit', [EmailSettingController::class, 'edit'])->name('back.template.edit');
            Route::put('email/template/update/{template}', [EmailSettingController::class, 'update'])->name('back.template.update');

            // ----------- SMS SETTING ---------------//
            Route::get('/setting/configuration/sms', [SmsSettingController::class, 'sms'])->name('back.setting.sms');
            Route::post('/setting/sms/update', [SmsSettingController::class, 'smsUpdate'])->name('back.sms.update');

            //------------ LANGUAGE SETTING ------------
            Route::resource('language', LanguageController::class)->names('back.language');
            Route::get('language/status/{id}/{status}', [LanguageController::class, 'status'])->name('back.language.status');
            //------------ SLIDER ------------
            Route::resource('slider', SliderController::class)->except(['show'])->names('back.slider');

            //------------ SERVICE ------------
            Route::resource('service', ServiceController::class)->except(['show'])->names('back.service');
            // --------- Generate Sitemap ---------
            Route::get('/sitemap', [SitemapController::class, 'index'])->name('admin.sitemap.index');
            Route::get('/sitemap/add', [SitemapController::class, 'add'])->name('admin.sitemap.add');
            Route::post('/sitemap/store', [SitemapController::class, 'store'])->name('admin.sitemap.store');
            Route::delete('/sitemap/delete/{id}/', [SitemapController::class, 'delete'])->name('admin.sitemap.delete');
            Route::post('/sitemap/download', [SitemapController::class, 'download'])->name('admin.sitemap.download');
        });

        Route::group(['middleware' => 'permissions:Subscribers List'], function () {
            //------------ SUBSCRIBER ------------
            Route::get('/subscribers', [SubscriberController::class, 'index'])->name('back.subscribers.index');
            Route::delete('/subscriber/delete/{id}', [SubscriberController::class, 'delete'])->name('back.subscriber.delete');
            Route::get('/subscribers/send-mail', [SubscriberController::class, 'sendMail'])->name('back.subscribers.mail');
            Route::post('/subscribers/send-mail/submit', [SubscriberController::class, 'sendMailSubmit'])->name('back.subscribers.mail.submit');
        });

        //-------------------------------- STORES MANAGEMENT ---------------------------------
       
        Route::resource('districts', DistrictController::class)->names('back.districts');
       
        Route::resource('stores', StoresController::class)->names('back.stores');

    });
});


// ************************************ ADMIN PANEL ENDS**********************************************



// ************************************ GLOBAL LOCALIZATION **********************************************

Route::group(['middleware' => 'maintainance'], function () {
    Route::group(['middleware' => 'localize'], function () {

        // ************************************ USER PANEL **********************************************

        Route::prefix('user')->group(function () {

            //------------ AUTH ------------
            Route::get('/verify', [UserLoginController::class, 'showVerifyForm'])->name('user.verify');
            Route::post('/email/verify/submit/asdfasdf', [UserLoginController::class, 'verifySubmit'])->name('user.verify.submit');
            Route::get('/login', [UserLoginController::class, 'showForm'])->name('user.login');
            Route::post('/login-submit', [UserLoginController::class, 'login'])->name('user.login.submit');
            Route::get('/logout', [UserLoginController::class, 'logout'])->name('user.logout');
            Route::get('/remove/account', [UserAccountController::class, 'removeAccount'])->name('user.account.remove');

            //------------ REGISTER ------------
           Route::get('/register', [RegisterController::class, 'showForm'])->name('user.register');
            Route::post('/register-submit', [RegisterController::class, 'register'])->name('user.register.submit');
            Route::get('/verify-link/{token}', [RegisterController::class, 'verify'])->name('user.account.verify');

            //------------ FORGOT ------------
            Route::get('/forgot', [ForgotController::class, 'showForm'])->name('user.forgot');
            Route::post('/forgot-submit', [ForgotController::class, 'forgot'])->name('user.forgot.submit');
            Route::get('/change-password/{token}', [ForgotController::class, 'showChangePassForm'])->name('user.change.token');
            Route::post('/change-password-submit', [ForgotController::class, 'changepass'])->name('user.change.password');


            //------------ DASHBOARD ------------
            Route::get('/dashboard', [UserAccountController::class, 'index'])->name('user.dashboard');
            Route::get('/profile', [UserAccountController::class, 'profile'])->name('user.profile');

             //USER UPDATE
            Route::controller(UserDashboardController::class)->group(function(){
                Route::get('account/profile','userProfile')->name('custom.profile');
                Route::get('account/orders','orders')->name('custom.orders');
                Route::get('account/order/details','orderDetails')->name('custom.order-details');
                Route::get('account/edit/profile','editProfile')->name('custom.edit-profile');
                Route::get('account/change/password','passwordChange')->name('custom.change-password');
            });
            //------------ SETTING ------------
            Route::post('/profile/update', [UserAccountController::class, 'profileUpdate'])->name('user.profile.update');
            Route::get('/addresses', [UserAccountController::class, 'addresses'])->name('user.address');
            Route::post('/billing/addresses', [UserAccountController::class, 'billingSubmit'])->name('user.billing.submit');
            Route::post('/shipping/addresses', [UserAccountController::class, 'shippingSubmit'])->name('user.shipping.submit');

            // ----------- TICKET ---------------//
            Route::get('/ticket', [TicketController::class, 'ticket'])->name('user.ticket');
            Route::get('/ticket/new', [TicketController::class, 'ticketNew'])->name('user.ticket.create');
            Route::post('/ticket/store', [TicketController::class, 'ticketStore'])->name('user.ticket.store');
            Route::get('/ticket/view/{id}', [TicketController::class, 'ticketView'])->name('user.ticket.view');
            Route::post('/ticket/reply/store', [TicketController::class, 'ticketReply'])->name('user.ticket.reply');
            Route::get('/ticket/delete/{id}', [TicketController::class, 'ticketDelete'])->name('user.ticket.delete');

         
            //------------ ORDER ------------
            Route::get('/orders', [OrderController::class, 'index'])->name('user.order.index');
            Route::get('/order/print/{id}', [OrderController::class, 'printOrder'])->name('user.order.print');
            Route::get('/order/invoice/{id}', [OrderController::class, 'details'])->name('user.order.invoice');
            //------------ WISHLIST ------------
            Route::get('/wishlists', [WishlistController::class, 'index'])->name('user.wishlist.index');
            Route::get('/wishlist/store/{id}', [WishlistController::class, 'store'])->name('user.wishlist.store');
            Route::get('/wishlist/delete/{id}', [WishlistController::class, 'delete'])->name('user.wishlist.delete');
            Route::get('/wishlista/delete/all', [WishlistController::class, 'alldelete'])->name('user.wishlist.delete.all');
        });


        Route::get('auth/{provider}', 'User\SocialLoginController@redirectToProvider')->name('social.provider');
        Route::get('auth/{provider}/callback', 'User\SocialLoginController@handleProviderCallback');

        // ************************************ USER PANEL ENDS**********************************************



        // ************************************ FRONTEND **********************************************

        Route::get('/store-locator', [FrontendController::class, 'findStore'])->name('front.findStore');
        Route::get('/', [FrontendController::class, 'index'])->name('front.index');
        Route::get('/extra-index', [FrontendController::class, 'extraIndex'])->name('front.extraindex');
        Route::get('/product/details/{slug}', [FrontendController::class, 'product'])->name('front.product');

        Route::get('/category/product/{slug}', [FrontendController::class, 'categoryProduct'])->name('front.categories.products');
        Route::get('/campaign/products', [FrontendController::class, 'compaignProduct'])->name('front.campaign');

        Route::get('/wishlist', [FrontendController::class, 'wishlist'])->name('front.wishlist');
        Route::get('/cart', [FrontendController::class, 'cart'])->name('frontd.mycarts');

        Route::get('/blog', [FrontendController::class, 'blog'])->name('front.blog');
        Route::get('/brands', [FrontendController::class, 'brands'])->name('front.brand');
        Route::get('/blog/{slug}', [FrontendController::class, 'blogDetails'])->name('front.blog.details');

        Route::get('/faq', [FrontendController::class, 'faq'])->name('front.faq');
        Route::get('/faq/{slug}', [FrontendController::class, 'show'])->name('front.faq.details');
        Route::get('/contact', [FrontendController::class, 'contact'])->name('front.contact');
        Route::post('/contact', [FrontendController::class, 'contactSubmit'])->name('front.contact-message.submit');
        Route::post('/contact/submit', [FrontendController::class, 'contactEmail'])->name('front.contact.submit');
        Route::get('/reviews', [FrontendController::class, 'reviews'])->name('front.reviews');
        Route::get('/review/page', [FrontendController::class, 'review_submit'])->name('front.rev.page');
        Route::get('/review/sub', [FrontendController::class, 'slider_o_update'])->name('front.rev.subbmit');
        Route::get('/top-reviews', [FrontendController::class, 'topReviews'])->name('front.top.reviews');
        Route::post('/review/submit', [FrontendController::class, 'reviewSubmit'])->name('front.review.submit');
        Route::post('/subscriber/submit', [FrontendController::class, 'subscribeSubmit'])->name('front.subscriber.submit');
        Route::get('set/currency/{id}', [FrontendController::class, 'currency'])->name('front.currency.setup');
        Route::get('set/language/{id}', [FrontendController::class, 'language'])->name('front.language.setup');



        // ---------- EXTRA INDEX ROUTE ----------//
        Route::get('popular/category/get/{slug}/{type}/{check}', 'Front\HomeCustomizeController@CategoryGet')->name('front.popular.category');
        Route::get('product/get/type/{type}', 'Front\HomeCustomizeController@productGet')->name('front.get.product');
        //------------ COMPARE PRODUCT ------------//

        Route::get('compare/product/{id}', 'Front\CompareController@compare')->name('fornt.compare.product');
        Route::get('compare/remove/{id}', 'Front\CompareController@compareRemove')->name('front.compare.remove');
        Route::get('compare/products/', 'Front\CompareController@compare_product')->name('fornt.compare.index');

        // Vendor Routes
        Route::get('/vendor', 'Vendor\VendorController@index')->name('vendor.profile');

        //------------ CART ------------
        Route::get('/cart', 'Front\CartController@index')->name('front.cart');
        Route::get('/front/cart/clear', 'Front\CartController@cartClear')->name('front.cart.clear');
        Route::get('/header/cart/load', 'Front\CartController@headerCartLoad')->name('front.header.cart');
        Route::get('/main/cart/load', 'Front\CartController@CartLoad')->name('cart.get.load');
        Route::post('/cart/submit', 'Front\CartController@store')->name('front.cart.submit');
        Route::get('product/add/cart', 'Front\CartController@addToCart')->name('product.addcart');
        Route::get('/product/cart/update/{id}', 'Front\CartController@update')->name('product.update.single');

        Route::post('/promo/submit', 'Front\CartController@promoStore')->name('front.promo.submit');
        Route::get('/promo/destroy', 'Front\CartController@promoDelete')->name('front.promo.destroy');
        Route::get('/cart/destroy/{id}', 'Front\CartController@destroy')->name('front.cart.destroy');
        Route::post('/shipping/submit', 'Front\CartController@shippingStore')->name('front.shipping.submit');
        Route::post('/shipping/charge/get', 'Front\CartController@shippingCharge')->name('front.shipping.charge');

        //------------ CATALOG ------------
        Route::get('/catalog', 'Front\CatalogController@index')->name('front.catalog');
        Route::get('/search/suggest', 'Front\CatalogController@suggestSearch')->name('front.search.suggest');
        Route::get('/catalog/view/{type}', 'Front\CatalogController@viewType')->name('front.catalog.view');


        //------------ CHECKOUT ------------
        Route::get('/checkout/billing/address', 'Front\CheckoutController@ship_address')->name('front.checkout.billing');
        Route::post('/checkout/billing/store', 'Front\CheckoutController@billingStore')->name('front.checkout.store');
        Route::get('/checkout/shpping/address', 'Front\CheckoutController@shipping')->name('front.checkout.shipping');
        Route::post('/checkout/shpping/store', 'Front\CheckoutController@shippingStore')->name('front.checkout.shipping.store');
        Route::get('/checkout/review/payment', 'Front\CheckoutController@payment')->name('front.checkout.payment');
        Route::get('/checkout/state/setup', 'Front\CheckoutController@stateSetUp')->name('front.state.setup');
        Route::get('/checkout/shipping/setup', 'Front\CheckoutController@shippingSetUp')->name('front.shipping.setup');
        Route::post('/checkout-submit', 'Front\CheckoutController@checkout')->name('front.checkout.submit');
        Route::get('/checkout/success', 'Front\CheckoutController@paymentSuccess')->name('front.checkout.success');
        Route::get('/checkout/cancle', 'Front\CheckoutController@paymentCancle')->name('front.checkout.cancle');
        Route::get('/checkout/redirect', 'Front\CheckoutController@paymentRedirect')->name('front.checkout.redirect');
        Route::get('/checkout/mollie/notify', 'Front\CheckoutController@mollieRedirect')->name('front.checkout.mollie.redirect');

        Route::get('/checkout', 'Front\CheckoutController@checkoutPage')->name('front.checkout');

        Route::post('/paytm/notify', 'Payment\PaytmController@notify')->name('front.paytm.notify');
        Route::post('/paytm/submit', 'Payment\PaytmController@store')->name('front.paytm.submit');
        Route::post('/razorpay/notify', 'Payment\RazorpayController@notify')->name('front.razorpay.notify');
        Route::post('/razorpay/submit', 'Payment\RazorpayController@store')->name('front.razorpay.submit');
        Route::post('/flutterwave/notify', 'Payment\FlutterwaveController@notify')->name('front.flutterwave.notify');
        Route::post('/flutterwave/submit', 'Payment\FlutterwaveController@store')->name('front.flutterwave.submit');
        Route::post('/mercadopago/submit', 'Payment\MercadopagoController@store')->name('front.mercadopago.submit');
        Route::post('/authorize/submit', 'Payment\AuthorizeController@store')->name('front.authorize.submit');

        Route::post('/sslcommerz/notify', 'Payment\SslCommerzController@notify')->name('front.sslcommerz.notify');
        Route::post('/sslcommerz/submit', 'Payment\SslCommerzController@store')->name('front.sslcommerz.submit');
        Route::post('/paytab/submit', 'Payment\PaytabsCheckout@store')->name('front.paytab.submit');
        Route::post('/paytab/callback', 'Payment\PaytabsCheckout@paytabCallback')->name('paytab.callback');

        // ----------- TRACK ORDER ----------//
        Route::get('/track/order', 'Front\FrontendController@trackOrder')->name('front.order.track');
        Route::get('/order/track/submit', 'Front\FrontendController@track')->name('front.order.track.submit');

        Route::get('/cache/clear', function () {
            Artisan::call('cache:clear');
            Artisan::call('config:clear');
            Artisan::call('route:clear');
            Artisan::call('view:clear');
            return redirect()->route('back.dashboard')->withSuccess(__('System Cache Has Been Removed.'));
        })->name('front.cache.clear');

        //------------ PAGE ------------
        Route::get('/{slug}', 'Front\FrontendController@page')->name('front.page');

        // ************************************ FRONTEND ENDS**********************************************

        // ************************************ GLOBAL LOCALIZATION ENDS **********************************************

    });
});
Route::get('/website/maintainance', 'Front\FrontendController@maintainance')->name('front.maintainance');
Route::get('/updater/finalize', 'Front\FrontendController@finalize');


// run queue word route after finish all task then stop
Route::get('/run/queue', function () {
    Artisan::call('queue:work --stop-when-empty');
    return "Queue is running";
});
