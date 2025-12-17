<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Avijatry',
                'logo' => 'OM_17561720314UFA7P9L.png',
                'favicon' => '1629651232pre.png',
                'loader' => '16388581681_D-ZiKd0B00tdifaB2X3tKQ.gif',
                'is_loader' => 1,
                'feature_image' => '1600622296topic.jpg',
                'primary_color' => '#FF0707',
                'overlay' => NULL,
                'snttp_check' => 0,
                'email_host' => 'smtp.mailtrap.io',
                'email_port' => '2525',
                'email_encryption' => 'tls',
                'email_user' => 'ab7d3fde364e5f',
                'email_pass' => 'aac3f52ada3308',
                'email_from' => 'Avijatryshop@email.com',
                'email_from_name' => 'Magicshop',
                'contact_email' => 'contact@email.com',
                'meta_keywords' => 'Lorem,ipsum,dolor,amet',
                'meta_description' => 'Avijatry- Multipurpose eCommerce  Shopping Platform Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from BC, making it over .',
                'meta_image' => 'OM_1742724577mrX18QWY.png',
                'google_analytics_id' => '',
                'is_shop' => 1,
                'is_blog' => 1,
                'is_faq' => 1,
                'is_contact' => 1,
                'facebook_check' => 1,
                'facebook_client_id' => '',
                'facebook_client_secret' => '',
                'facebook_redirect' => 'https://localhost/my/Avijatry/auth/facebook/callback',
                'google_check' => 1,
                'google_client_id' => '',
                'google_client_secret' => '',
                'google_redirect' => 'http://localhost/my/Avijatry/auth/google/callback',
                'min_price' => '0.00',
                'max_price' => '10000.00',
                'footer_phone' => '453876234',
                'footer_address' => '514 S. Magnolia St. Orlando, FL 32806, USA',
                'footer_email' => 'demoemail123@gmail.com',
                'footer_gateway_img' => 'sslc.png',
                'social_link' => '{"icons":["fab fa-facebook-f","fab fa-twitter","fab fa-youtube","fab fa-linkedin-in"],"links":["https:\\/\\/www.facebook.com","https:\\/\\/www.twitter.com","https:\\/\\/www.youtube.com","https:\\/\\/www.linkedin.com"]}',
                'copy_right' => 'Avijatry© All rights reserved.',
                'footer_about' => 'Welcome to Avijatry, your one-stop shop for the latest footwear trends. Quality, comfort, and style delivered to your doorstep.',
                'friday_start' => '9:27 PM',
                'friday_end' => '9:27 PM',
                'satureday_start' => '9:27 PM',
                'satureday_end' => '9:27 PM',
                'is_slider' => 1,
                'is_category' => 0,
                'is_product' => 0,
                'is_top_banner' => 0,
                'is_recent' => 0,
                'is_top' => 0,
                'is_best' => 0,
                'is_flash' => 0,
                'is_brand' => 0,
                'is_brands' => 1,
                'is_blogs' => 1,
                'is_campaign' => 1,
                'is_bottom_banner' => 0,
                'is_service' => 1,
                'campaign_title' => 'Deals Of The Week',
                'campaign_end_date' => '0000-00-00 00:00:00',
                'campaign_status' => 1,
                'is_twilio' => 1,
                'twilio_sid' => '',
                'twilio_token' => '',
                'twilio_form_number' => '+',
                'twilio_country_code' => '+880',
                'twilio_section' => '{"\'purchase\'":"Your Order Purchase Successfully. your order number is {order_number}","\'order_status\'":"Your Order status update. Order number is {order_number}"}',
                'is_announcement' => 1,
                'announcement' => '1638791990Untitled-1.jpg',
                'announcement_delay' => 1,
                'is_maintainance' => 0,
                'maintainance_image' => '16323327831619241714761747856.jpg',
                'maintainance_text' => 'We are upgrading our site.  We will come back soon.  
Please stay with us. 
Thank you.',
                'version' => '6.2',
                'created_at' => NULL,
                'updated_at' => NULL,
                'is_three_c_b_first' => 1,
                'is_popular_category' => 1,
                'is_three_c_b_second' => 1,
                'is_highlighted' => 1,
                'is_two_column_category' => 1,
                'is_popular_brand' => 1,
                'is_featured_category' => 1,
                'is_two_c_b' => 1,
                'theme' => 'theme1',
                'google_recaptcha_site_key' => NULL,
                'google_recaptcha_secret_key' => NULL,
                'recaptcha' => 0,
                'is_privacy_trams' => 1,
                'smtp_check' => 1,
                'currency_direction' => '1',
                'google_analytics' => NULL,
                'google_adsense' => NULL,
                'facebook_pixel' => NULL,
                'facebook_messenger' => '<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
var chatbox = document.getElementById(\'fb-customer-chat\');
chatbox.setAttribute("page_id", "");
chatbox.setAttribute("attribution", "");
window.fbAsyncInit = function() {
FB.init({
xfbml            : true,
version          : \'v11.0\'
});
};

(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = \'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js\';
fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));
</script>',
                'is_google_analytics' => 0,
                'is_google_adsense' => 0,
                'is_facebook_pixel' => 0,
                'is_facebook_messenger' => 0,
                'announcement_link' => '#',
                'announcement_title' => 'Get 50% Discount.',
                'announcement_type' => 'newletter',
                'announcement_details' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, facere nesciunt doloremque nobis debitis sint?',
                'is_attribute_search' => 1,
                'is_range_search' => 1,
                'view_product' => '16',
                'home_page_title' => 'Ecommerce Shopping Platform',
                'is_privacy_trans' => 0,
                'policy_link' => 'http://localhost/my/Avijatry3/privacy-policy',
                'terms_link' => 'http://localhost/my/Avijatry3/terms-and-service',
                'is_guest_checkout' => 1,
                'is_single_checkout' => 1,
                'custom_css' => NULL,
                'is_cookie' => 1,
                'cookie_text' => 'Your experience on this site will be improved by allowing cookies.',
                'decimal_separator' => '.',
                'thousand_separator' => ',',
                'is_decimal' => 1,
                'disqus' => '<div id="disqus_thread"></div>
<script>
/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page\'s canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page\'s unique identifier variable
};
*/
(function() { // DON\'T EDIT BELOW THIS LINE
var d = document, s = d.createElement(\'script\');
s.src = \'https://Avijatry.disqus.com/embed.js\';
s.setAttribute(\'data-timestamp\', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>',
                'is_disqus' => 1,
                'order_mail' => 0,
                'ticket_mail' => 0,
                'is_show_category' => 1,
                'is_queue_enabled' => 0,
                'working_days_from_to' => 'Saturday-Sunday :',
                'attribute_type' => 'selectbox',
                'is_mail_verify' => 0,
            ),
        ));
        
        
    }
}