<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            //    $table->id();
            $table->bigIncrements('id');
            
            // General Settings
            $table->string('title')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('loader')->nullable();
            $table->boolean('is_loader')->default(false);
            $table->string('whatsapp_number')->nullable();
            $table->string('feature_image')->nullable();
            $table->string('primary_color')->nullable()->default('#4f6df5');
            $table->text('overlay')->nullable();
            
            // Email Settings
            $table->boolean('snttp_check')->default(false);
            $table->string('email_host')->nullable();
            $table->string('email_port')->nullable();
            $table->string('email_encryption')->nullable();
            $table->string('email_user')->nullable();
            $table->string('email_pass')->nullable();
            $table->string('email_from')->nullable();
            $table->string('email_from_name')->nullable();
            $table->string('contact_email')->nullable();
            
            // SEO Settings
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_image')->nullable();
            $table->string('google_analytics_id')->nullable();
            
            // Page Visibility Settings
            $table->boolean('is_shop')->default(true);
            $table->boolean('is_blog')->default(true);
            $table->boolean('is_faq')->default(true);
            $table->boolean('is_contact')->default(true);
            
            // Social Login Settings
            $table->boolean('facebook_check')->default(false);
            $table->string('facebook_client_id')->nullable();
            $table->string('facebook_client_secret')->nullable();
            $table->string('facebook_redirect')->nullable();
            
            $table->boolean('google_check')->default(false);
            $table->string('google_client_id')->nullable();
            $table->string('google_client_secret')->nullable();
            $table->string('google_redirect')->nullable();
            
            // Price Range Settings
            $table->decimal('min_price', 10, 2)->nullable()->default(0);
            $table->decimal('max_price', 10, 2)->nullable()->default(1000);
            
            // Footer Settings
            $table->string('footer_phone')->nullable();
            $table->text('footer_address')->nullable();
            $table->string('footer_email')->nullable();
            $table->string('footer_gateway_img')->nullable();
            $table->text('social_link')->nullable();
            $table->text('copy_right')->nullable();
            $table->text('footer_about')->nullable();
            
            // Business Hours Settings
            $table->string('friday_start')->nullable();
            $table->string('friday_end')->nullable();
            $table->string('satureday_start')->nullable();
            $table->string('satureday_end')->nullable();
            
            // Homepage Section Visibility
            $table->boolean('is_slider')->default(true);
            $table->boolean('is_category')->default(true);
            $table->boolean('is_product')->default(true);
            $table->boolean('is_top_banner')->default(true);
            $table->boolean('is_recent')->default(true);
            $table->boolean('is_top')->default(true);
            $table->boolean('is_best')->default(true);
            $table->boolean('is_flash')->default(true);
            $table->boolean('is_brand')->default(true);
            $table->boolean('is_brands')->default(true);
            $table->boolean('is_blogs')->default(true);
            $table->boolean('is_campaign')->default(true);
            $table->boolean('is_bottom_banner')->default(true);
            $table->boolean('is_service')->default(true);
            
            // Campaign Settings
            $table->string('campaign_title')->nullable();
            $table->dateTime('campaign_end_date')->nullable();
            $table->boolean('campaign_status')->default(false);
            
            // Twilio SMS Settings
            $table->boolean('is_twilio')->default(false);
            $table->string('twilio_sid')->nullable();
            $table->string('twilio_token')->nullable();
            $table->string('twilio_form_number')->nullable();
            $table->string('twilio_country_code')->nullable();
            $table->text('twilio_section')->nullable();
            
            // Announcement & Maintenance
            $table->boolean('is_announcement')->default(false);
            $table->text('announcement')->nullable();
            $table->integer('announcement_delay')->nullable()->default(3000);
            $table->boolean('is_maintainance')->default(false);
            $table->string('maintainance_image')->nullable();
            $table->text('maintainance_text')->nullable();
            
            // Version
            $table->string('version')->nullable()->default('1.0.0');
            
            $table->timestamps();

               $table->boolean('is_three_c_b_first')->default(false);
            $table->boolean('is_popular_category')->default(false);
            $table->boolean('is_three_c_b_second')->default(false);
            $table->boolean('is_highlighted')->default(false);
            $table->boolean('is_two_column_category')->default(false);
            $table->boolean('is_popular_brand')->default(false);
            $table->boolean('is_featured_category')->default(false);
            $table->boolean('is_two_c_b')->default(false);
            
            // Theme & Design
            $table->string('theme')->nullable()->default('default');
            
            // Recaptcha Settings
            $table->string('google_recaptcha_site_key')->nullable();
            $table->string('google_recaptcha_secret_key')->nullable();
            $table->tinyInteger('recaptcha')->default(0);
            $table->tinyInteger('is_privacy_trams')->default(0);
            $table->tinyInteger('smtp_check')->default(0);
            
            // Currency Settings
            $table->string('currency_direction')->nullable()->default('left');
            
            // Analytics & Tracking
            $table->text('google_analytics')->nullable();
            $table->text('google_adsense')->nullable();
            $table->text('facebook_pixel')->nullable();
            $table->text('facebook_messenger')->nullable();
            $table->boolean('is_google_analytics')->default(false);
            $table->boolean('is_google_adsense')->default(false);
            $table->boolean('is_facebook_pixel')->default(false);
            $table->boolean('is_facebook_messenger')->default(false);
            
            // Announcement Settings
            $table->string('announcement_link')->nullable();
            $table->string('announcement_title')->nullable();
            $table->string('announcement_type')->nullable()->default('info');
            $table->text('announcement_details')->nullable();
            
            // Search Settings
            $table->boolean('is_attribute_search')->default(false);
            $table->boolean('is_range_search')->default(false);
            
            // Product Display
            $table->string('view_product')->nullable()->default('grid');
            $table->string('home_page_title')->nullable();
            
            // Legal Pages
            $table->boolean('is_privacy_trans')->default(false);
            $table->string('policy_link')->nullable();
            $table->string('terms_link')->nullable();
            
            // Checkout Settings
            $table->boolean('is_guest_checkout')->default(true);
            $table->boolean('is_single_checkout')->default(false);
            
            // Customization
            $table->text('custom_css')->nullable();
            
            // Cookie Consent
            $table->boolean('is_cookie')->default(false);
            $table->text('cookie_text')->nullable();
            
            // Number Formatting
            $table->string('decimal_separator')->nullable()->default('.');
            $table->string('thousand_separator')->nullable()->default(',');
            $table->boolean('is_decimal')->default(true);
            
            // Disqus Comments
            $table->text('disqus')->nullable();
            $table->boolean('is_disqus')->default(false);
            
            // Email Templates
            $table->boolean('order_mail')->default(true);
            $table->boolean('ticket_mail')->default(true);
            
            // Category Display
            $table->boolean('is_show_category')->default(true);
            
            // Queue System
            $table->boolean('is_queue_enabled')->default(false);
            
            // Business Hours
            $table->string('working_days_from_to')->nullable()->default('Monday-Friday');
            
            // Product Attributes
            $table->string('attribute_type')->nullable()->default('dropdown');
            
            // Email Verification
            $table->boolean('is_mail_verify')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
