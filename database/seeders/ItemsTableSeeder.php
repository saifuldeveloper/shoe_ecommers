<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items')->delete();
        
        \DB::table('items')->insert(array (
            0 => 
            array (
                'id' => 24,
                'category_id' => 2,
                'subcategory_id' => 5,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Ladies Wedge Sandal',
                'slug' => 'ladies-wedge-sandal',
                'sku' => 'A-3a3e',
                'code' => NULL,
                'tags' => 'Ladies comfort sandal,ladies wedge sandal,women comfort sandals,women casual sandal,ladies daily wear sandal,ladies office sandal,comfort wedge heel sandal,women soft footbed sandal,ladies slip-on sandal,floral design sandal,women walking sandal,ladies brown sandal,synthetic ladies sandal,women comfortable footwear,everyday wear ladies sandal,ladies low wedge sandal,women casual footwear,comfort sandal for women',
                'photo' => 'OM_1769945354KKTLhxwJ.jpg',
                'thumbnail' => 'OM_1769945354eXTyC4LZ.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Crafted for everyday comfort and durability, this ladies wedge sandal is designed to support regular use while maintaining a neat, elegant appearance.',
                'details' => '<h3><strong data-start="964" data-end="978">Type:</strong> Wedge Heel</h3><h3>Material Details</h3><ul><li><strong data-start="827" data-end="837">Upper:</strong> Premium Synthetic</li><li><strong data-start="935" data-end="947">Outsole:</strong> Durable PVC</li></ul><p>The sandal features a premium synthetic upper with a refined floral cut design. A soft synthetic lining enhances comfort, and the durable outsole provides reliable traction and long-lasting performance. The easy slip-on construction offers convenience for daily wear, office use, and casual occasions.</p><h3 data-start="828" data-end="845"><strong data-start="828" data-end="845">Key Features:</strong></h3>
<p>
</p><p><ul></ul>
</p><ul><li>Ergonomically cushioned footbed for sustained comfort</li><li>
<ul></ul>
</li><li>Supportive wedge heel for improved stability</li><li>
<ul></ul>
</li><li>High-quality synthetic upper material</li><li>
<ul></ul>
</li><li>Elegant floral cut detailing</li><li>
<ul></ul>
</li><li>Easy slip-on design for convenience</li><li>
<ul></ul></li><li>Durable outsole suitable for everyday wear</li></ul>',
                'specification_name' => '[null]',
                'specification_description' => '[null]',
                'is_specification' => 1,
                'discount_price' => 825.0,
                'previous_price' => 925.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Ladies comfort sandal,ladies wedge sandal,women comfort sandals,women casual sandal,ladies daily wear sandal,ladies office sandal,comfort wedge heel sandal,women soft footbed sandal,ladies slip-on sandal,floral design sandal,women walking sandal,ladies brown sandal,synthetic ladies sandal,women comfortable footwear,everyday wear ladies sandal,ladies low wedge sandal,women casual footwear,comfort sandal for women',
                'meta_description' => 'Ladies comfort sandal, ladies wedge sandal, women comfort sandals, women casual sandal, ladies daily wear sandal, ladies office sandal, comfort wedge heel sandal, women soft footbed sandal, ladies slip-on sandal, floral design sandal, women walking sandal, ladies brown sandal, synthetic ladies sandal, women comfortable footwear, everyday wear ladies sandal, ladies low wedge sandal, women casual footwear, comfort sandal for women',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Cream","38","37","36","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-01 17:29:15',
                'updated_at' => '2026-02-01 18:28:48',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            1 => 
            array (
                'id' => 25,
                'category_id' => 2,
                'subcategory_id' => 5,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Ladies Comfort Wedge Sandal',
                'slug' => 'ladies-comfort-wedge-sandal',
                'sku' => 'A-48b6',
                'code' => NULL,
                'tags' => 'Ladies comfort sandal,ladies wedge sandal,women comfort sandals,women casual sandal,ladies daily wear sandal,ladies office sandal,comfort wedge heel sandal,women soft footbed sandal,ladies slip-on sandal,floral design sandal,women walking sandal,ladies brown sandal,synthetic ladies sandal,women comfortable footwear,everyday wear ladies sandal,ladies low wedge sandal,women casual footwear,comfort sandal for women',
                'photo' => 'OM_1769947680UgRIt0b8.jpg',
                'thumbnail' => 'OM_1769947680ZfqIPwBi.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'This ladies comfort wedge sandal is designed to provide everyday ease and reliable support.',
                'details' => '<p></p><p>Material Details</p><ul><li><strong data-start="825" data-end="835">Upper:</strong> Premium Synthetic</li><li><strong data-start="933" data-end="945">Outsole:</strong> Durable PVC</li></ul><p><br></p><h3><strong data-start="962" data-end="976">Type:</strong> Wedge Heel</h3><p><br></p><p>The soft cushioned footbed helps absorb impact and reduces foot fatigue, making it suitable for prolonged wear. A stable wedge heel ensures balanced walking, while the durable outsole offers improved grip and long-lasting performance.</p><h3 data-start="993" data-end="1009">Key Features</h3>
<p>
</p><p>
</p><p></p><p></p><ul></ul>
<p>
</p><p></p><ul></ul>
<ul></ul>
<ul></ul>
<ul></ul><ul><li>Ergonomic cushioning for all-day comfort</li><li>Supportive wedge heel for better stability</li><li>Elegant floral cut design</li><li>Easy slip-on construction</li><li>Suitable for regular and long-term use</li></ul><p><br></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 995.0,
                'previous_price' => 1095.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Ladies comfort sandal,ladies wedge sandal,women comfort sandals,women casual sandal,ladies daily wear sandal,ladies office sandal,comfort wedge heel sandal,women soft footbed sandal,ladies slip-on sandal,floral design sandal,women walking sandal,ladies brown sandal,synthetic ladies sandal,women comfortable footwear,everyday wear ladies sandal,ladies low wedge sandal,women casual footwear,comfort sandal for women',
                'meta_description' => 'Ladies comfort sandal, ladies wedge sandal, women comfort sandals, women casual sandal, ladies daily wear sandal, ladies office sandal, comfort wedge heel sandal, women soft footbed sandal, ladies slip-on sandal, floral design sandal, women walking sandal, ladies brown sandal, synthetic ladies sandal, women comfortable footwear, everyday wear ladies sandal, ladies low wedge sandal, women casual footwear, comfort sandal for women',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Cream","38","37","36","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-01 18:08:01',
                'updated_at' => '2026-02-01 18:28:40',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            2 => 
            array (
                'id' => 26,
                'category_id' => 2,
                'subcategory_id' => 5,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Women’s Stylish Comfort Sandal',
                'slug' => 'womens-stylish-comfort-sandal',
                'sku' => 'A-33ee',
                'code' => NULL,
                'tags' => 'Ladies comfort sandal,ladies wedge sandal,women comfort sandals,women casual sandal,ladies daily wear sandal,ladies office sandal,comfort wedge heel sandal,women soft footbed sandal,ladies slip-on sandal,floral design sandal,women walking sandal,ladies brown sandal,synthetic ladies sandal,women comfortable footwear,everyday wear ladies sandal,ladies low wedge sandal,women casual footwear,comfort sandal for women',
                'photo' => 'OM_1769948724CSzrMuOT.jpg',
                'thumbnail' => 'OM_1769948724tqJzo6ac.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'The cushioned footbed and lightweight wedge sole provide excellent support and stability, ensuring comfort during prolonged wear.',
                'details' => '<p></p><p></p><ul></ul><h3 data-start="802" data-end="822">Material Details</h3>
<p>
</p><p><ul></ul></p><ul><li><strong data-start="825" data-end="835">Upper:</strong> Synthetic</li><li><b>Sole</b>: Durable rubber/PVC</li></ul><h3>Type: Slip-on comfort sandal</h3><h5 data-start="848" data-end="863"></h5><h5 data-start="848" data-end="863">Its easy slip-on construction and open-toe design make it suitable for 
daily use, office wear, and casual occasions. Built for durability and 
comfort, this sandal is an ideal choice for women seeking a balance 
between style and everyday ease.</h5><h3 data-start="848" data-end="863">Key Features</h3>
<p>
</p><p></p><ul></ul>
<p></p><ul></ul><p></p><ul></ul>
<ul></ul>
<ul></ul>
<ul></ul>
<ul><li>Elegant and comfortable ladies sanda</li><li>Soft synthetic upper with decorative buckle</li><li>Cushioned insole for all-day comfort</li><li>Lightweight, durable wedge sole</li><li>Slip-on design for easy wear</li><li>Suitable for daily, casual, and office use</li></ul>',
                'specification_name' => '[null]',
                'specification_description' => '[null]',
                'is_specification' => 1,
                'discount_price' => 755.0,
                'previous_price' => 855.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Ladies comfort sandal,ladies wedge sandal,women comfort sandals,women casual sandal,ladies daily wear sandal,ladies office sandal,comfort wedge heel sandal,women soft footbed sandal,ladies slip-on sandal,floral design sandal,women walking sandal,ladies brown sandal,synthetic ladies sandal,women comfortable footwear,everyday wear ladies sandal,ladies low wedge sandal,women casual footwear,comfort sandal for women',
                'meta_description' => NULL,
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Maroon","38","37","36","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-01 18:25:25',
                'updated_at' => '2026-02-01 18:25:25',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            3 => 
            array (
                'id' => 27,
                'category_id' => 2,
                'subcategory_id' => 5,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Ladies Comfort Slide Sandal',
                'slug' => 'ladies-comfort-slide-sandal',
                'sku' => 'A-4b07',
                'code' => NULL,
                'tags' => 'Ladies comfort sandal,ladies wedge sandal,women comfort sandals,women casual sandal,ladies daily wear sandal,ladies office sandal,comfort wedge heel sandal,women soft footbed sandal,ladies slip-on sandal,floral design sandal,women walking sandal,ladies brown sandal,synthetic ladies sandal,women comfortable footwear,everyday wear ladies sandal,ladies low wedge sandal,women casual footwear,comfort sandal for women',
                'photo' => 'OM_1769949614omc9fydk.jpg',
                'thumbnail' => 'OM_1769949614xXD1MVda.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Designed for everyday comfort and understated elegance, this sandal features a soft synthetic upper with refined cross-strap detailing and subtle decorative trim.',
                'details' => '<h3 data-start="256" data-end="533">Material</h3><ul><li><b>Upper</b>: Synthetic</li><li><b>Sole</b>: Durable rubber/PVC</li></ul><h3>Type: Slip-on comfort sandal</h3><p><br></p><p data-start="256" data-end="533">The clean silhouette offers a balanced combination of style and practicality, making it suitable for regular wear.</p>
<p data-start="535" data-end="785">The cushioned footbed provides enhanced comfort, while the lightweight wedge sole ensures stability and ease of movement throughout the day. Its slip-on construction allows convenient wear, and the open design supports breathability for extended use.</p><h3 data-start="535" data-end="785">Key Features</h3><p></p><p><ul></ul></p><p></p><p><ul></ul>
</p><ul><li>Comfortable cushioned footbed</li><li>
<ul></ul>
</li><li>Lightweight wedge sole for support</li><li>
<ul></ul>
</li><li>Easy slip-on construction</li><li>
<ul></ul>
</li><li>Durable build for regular use</li><li>
<ul></ul></li><li>Suitable for daily and casual wear</li></ul><p><br></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 675.0,
                'previous_price' => 775.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Ladies comfort sandal,ladies wedge sandal,women comfort sandals,women casual sandal,ladies daily wear sandal,ladies office sandal,comfort wedge heel sandal,women soft footbed sandal,ladies slip-on sandal,floral design sandal,women walking sandal,ladies brown sandal,synthetic ladies sandal,women comfortable footwear,everyday wear ladies sandal,ladies low wedge sandal,women casual footwear,comfort sandal for women',
                'meta_description' => 'Ladies comfort sandal, ladies wedge sandal, women comfort sandals, women casual sandal, ladies daily wear sandal, ladies office sandal, comfort wedge heel sandal, women soft footbed sandal, ladies slip-on sandal, floral design sandal, women walking sandal, ladies brown sandal, synthetic ladies sandal, women comfortable footwear, everyday wear ladies sandal, ladies low wedge sandal, women casual footwear, comfort sandal for women',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Maroon","38","37","36","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-01 18:40:15',
                'updated_at' => '2026-02-01 18:40:15',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            4 => 
            array (
                'id' => 28,
                'category_id' => 2,
                'subcategory_id' => 5,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Ladies Comfort Slide Sandal',
                'slug' => 'ladies-comfort-slide-sandal-1',
                'sku' => 'A-4b06',
                'code' => NULL,
                'tags' => 'Ladies comfort sandal,ladies wedge sandal,women comfort sandals,women casual sandal,ladies daily wear sandal,ladies office sandal,comfort wedge heel sandal,women soft footbed sandal,ladies slip-on sandal,floral design sandal,women walking sandal,ladies brown sandal,synthetic ladies sandal,women comfortable footwear,everyday wear ladies sandal,ladies low wedge sandal,women casual footwear,comfort sandal for women',
                'photo' => 'OM_1769950012NXsaybGp.jpg',
                'thumbnail' => 'OM_1769950012reVE9Nic.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Designed for everyday comfort and understated elegance, this sandal features a soft synthetic upper with refined cross-strap detailing and subtle decorative trim.',
                'details' => '<h3 data-start="256" data-end="533">Material</h3><ul><li><b>Upper</b>: Synthetic</li><li><b>Sole</b>: Durable rubber/PVC</li></ul><h3>Type: Slip-on comfort sandal</h3><p><br></p><p data-start="256" data-end="533">The clean silhouette offers a balanced combination of style and practicality, making it suitable for regular wear.</p>
<p data-start="535" data-end="785">The cushioned footbed provides enhanced comfort, while the lightweight wedge sole ensures stability and ease of movement throughout the day. Its slip-on construction allows convenient wear, and the open design supports breathability for extended use.</p><h3 data-start="535" data-end="785">Key Features</h3><p></p><p><ul></ul></p><p></p><p><ul></ul>
</p><ul><li>Comfortable cushioned footbed</li><li>
<ul></ul>
</li><li>Lightweight wedge sole for support</li><li>
<ul></ul>
</li><li>Easy slip-on construction</li><li>
<ul></ul>
</li><li>Durable build for regular use</li><li>
<ul></ul></li><li>Suitable for daily and casual wear</li></ul><p><br></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 675.0,
                'previous_price' => 775.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Ladies comfort sandal,ladies wedge sandal,women comfort sandals,women casual sandal,ladies daily wear sandal,ladies office sandal,comfort wedge heel sandal,women soft footbed sandal,ladies slip-on sandal,floral design sandal,women walking sandal,ladies brown sandal,synthetic ladies sandal,women comfortable footwear,everyday wear ladies sandal,ladies low wedge sandal,women casual footwear,comfort sandal for women',
                'meta_description' => 'Ladies comfort sandal, ladies wedge sandal, women comfort sandals, women casual sandal, ladies daily wear sandal, ladies office sandal, comfort wedge heel sandal, women soft footbed sandal, ladies slip-on sandal, floral design sandal, women walking sandal, ladies brown sandal, synthetic ladies sandal, women comfortable footwear, everyday wear ladies sandal, ladies low wedge sandal, women casual footwear, comfort sandal for women',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","38","37","36","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-01 18:46:53',
                'updated_at' => '2026-02-01 18:46:53',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            5 => 
            array (
                'id' => 29,
                'category_id' => 2,
                'subcategory_id' => 5,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Women\'s Beige Laser-Cut Comfort Wedge Sandal',
                'slug' => 'womens-beige-laser-cut-comfort-wedge-sandal',
                'sku' => 'A-45ac',
                'code' => NULL,
                'tags' => 'Ladies comfort sandal,ladies wedge sandal,women comfort sandals,women casual sandal,ladies daily wear sandal,ladies office sandal,comfort wedge heel sandal,women soft footbed sandal,ladies slip-on sandal,floral design sandal,women walking sandal,ladies brown sandal,synthetic ladies sandal,women comfortable footwear,everyday wear ladies sandal,ladies low wedge sandal,women casual footwear,comfort sandal for women',
                'photo' => 'OM_176995104566R7VuFw.jpg',
                'thumbnail' => 'OM_1769951045sbswB91B.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Step into everyday elegance with these Premium Beige Wedge Sandals.',
                'details' => '<p><!--[if gte mso 9]><xml>
<o:OfficeDocumentSettings>
<o:RelyOnVML/>
<o:AllowPNG/>
</o:OfficeDocumentSettings>
</xml><![endif]--><!--[if gte mso 9]><xml>
<w:WordDocument>
<w:View>Normal</w:View>
<w:Zoom>0</w:Zoom>
<w:TrackMoves/>
<w:TrackFormatting/>
<w:PunctuationKerning/>
<w:ValidateAgainstSchemas/>
<w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
<w:IgnoreMixedContent>false</w:IgnoreMixedContent>
<w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
<w:DoNotPromoteQF/>
<w:LidThemeOther>EN-US</w:LidThemeOther>
<w:LidThemeAsian>X-NONE</w:LidThemeAsian>
<w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
<w:Compatibility>
<w:BreakWrappedTables/>
<w:SnapToGridInCell/>
<w:WrapTextWithPunct/>
<w:UseAsianBreakRules/>
<w:DontGrowAutofit/>
<w:SplitPgBreakAndParaMark/>
<w:EnableOpenTypeKerning/>
<w:DontFlipMirrorIndents/>
<w:OverrideTableStyleHps/>
</w:Compatibility>
<m:mathPr>
<m:mathFont m:val="Cambria Math"/>
<m:brkBin m:val="before"/>
<m:brkBinSub m:val="&#45;-"/>
<m:smallFrac m:val="off"/>
<m:dispDef/>
<m:lMargin m:val="0"/>
<m:rMargin m:val="0"/>
<m:defJc m:val="centerGroup"/>
<m:wrapIndent m:val="1440"/>
<m:intLim m:val="subSup"/>
<m:naryLim m:val="undOvr"/>
</m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
<w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
DefSemiHidden="false" DefQFormat="false" DefPriority="99"
LatentStyleCount="376">
<w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 9"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 1"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 2"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 3"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 4"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 5"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 6"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 7"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 8"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 9"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footnote text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="header"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footer"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index heading"/>
<w:LsdException Locked="false" Priority="35" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="caption"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="table of figures"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="envelope address"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="envelope return"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footnote reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="line number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="page number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="endnote reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="endnote text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="table of authorities"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="macro"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="toa heading"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 5"/>
<w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Closing"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Signature"/>
<w:LsdException Locked="false" Priority="1" SemiHidden="true"
UnhideWhenUsed="true" Name="Default Paragraph Font"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Message Header"/>
<w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Salutation"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Date"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text First Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text First Indent 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Note Heading"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Block Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Hyperlink"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="FollowedHyperlink"/>
<w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
<w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Document Map"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Plain Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="E-mail Signature"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Top of Form"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Bottom of Form"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal (Web)"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Acronym"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Address"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Cite"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Code"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Definition"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Keyboard"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Preformatted"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Sample"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Typewriter"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Variable"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal Table"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation subject"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="No List"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Contemporary"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Elegant"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Professional"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Subtle 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Subtle 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Balloon Text"/>
<w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Theme"/>
<w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
<w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
<w:LsdException Locked="false" Priority="61" Name="Light List"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
<w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
<w:LsdException Locked="false" Priority="34" QFormat="true"
Name="List Paragraph"/>
<w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
<w:LsdException Locked="false" Priority="30" QFormat="true"
Name="Intense Quote"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
<w:LsdException Locked="false" Priority="19" QFormat="true"
Name="Subtle Emphasis"/>
<w:LsdException Locked="false" Priority="21" QFormat="true"
Name="Intense Emphasis"/>
<w:LsdException Locked="false" Priority="31" QFormat="true"
Name="Subtle Reference"/>
<w:LsdException Locked="false" Priority="32" QFormat="true"
Name="Intense Reference"/>
<w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
<w:LsdException Locked="false" Priority="37" SemiHidden="true"
UnhideWhenUsed="true" Name="Bibliography"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
<w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
<w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
<w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
<w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
<w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
<w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
<w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
<w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
<w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 1"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 2"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 3"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 4"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 5"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 6"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
<w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
<w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 1"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 2"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 3"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 4"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 5"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 6"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Mention"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Smart Hyperlink"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Hashtag"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Unresolved Mention"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Smart Link"/>
</w:LatentStyles>
</xml><![endif]--><!--[if gte mso 10]>
<style>
/* Style Definitions */
table.MsoNormalTable
{mso-style-name:"Table Normal";
mso-tstyle-rowband-size:0;
mso-tstyle-colband-size:0;
mso-style-noshow:yes;
mso-style-priority:99;
mso-style-parent:"";
mso-padding-alt:0in 5.4pt 0in 5.4pt;
mso-para-margin-top:0in;
mso-para-margin-right:0in;
mso-para-margin-bottom:8.0pt;
mso-para-margin-left:0in;
line-height:107%;
mso-pagination:widow-orphan;
font-size:11.0pt;
font-family:"Calibri",sans-serif;
mso-ascii-font-family:Calibri;
mso-ascii-theme-font:minor-latin;
mso-hansi-font-family:Calibri;
mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]-->

</p><br><h3><strong data-start="964" data-end="978">Type:</strong> Wedge Heel</h3><h3>Material Details</h3><ul><li><strong data-start="827" data-end="837">Upper:</strong>&nbsp;Artificial Leather / PU</li><li><strong data-start="935" data-end="947">Outsole:</strong>&nbsp;PU (Polyurethane)</li></ul><p><br></p><p>Designed for the modern woman who values both style and comfort, this pair features a soft synthetic upper with a stylish laser-cut perforated design that ensures breathability. The cushioned insole provides superior support for all-day wear, while the sturdy black wedge sole adds a touch of height without compromising stability. Perfect for casual outings, office wear, or daily use.</p><p data-path-to-node="5"><b data-path-to-node="5" data-index-in-node="0">Key Features:</b></p><p></p><p><ul></ul></p><ul><li>&nbsp;Made from high-quality soft synthetic leather (PU) for long-lasting durability.</li><li><ul></ul></li><li> The laser-cut perforated upper keeps your feet cool and airy.</li><li><ul></ul></li><li>&nbsp;Features a padded footbed that reduces unmatched comfort during long walks.</li><li><ul></ul></li><li>&nbsp;The slip-resistant PU outsole ensures a firm grip and durability.</li><li><ul></ul></li><li> The neutral beige color pairs perfectly with shalwar kameez, kurtis, or western outfits.</li></ul><p><br></p><p><br></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1095.0,
                'previous_price' => 1195.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Ladies comfort sandal,ladies wedge sandal,women comfort sandals,women casual sandal,ladies daily wear sandal,ladies office sandal,comfort wedge heel sandal,women soft footbed sandal,ladies slip-on sandal,floral design sandal,women walking sandal,ladies brown sandal,synthetic ladies sandal,women comfortable footwear,everyday wear ladies sandal,ladies low wedge sandal,women casual footwear,comfort sandal for women',
                'meta_description' => 'Ladies comfort sandal, ladies wedge sandal, women comfort sandals, women casual sandal, ladies daily wear sandal, ladies office sandal, comfort wedge heel sandal, women soft footbed sandal, ladies slip-on sandal, floral design sandal, women walking sandal, ladies brown sandal, synthetic ladies sandal, women comfortable footwear, everyday wear ladies sandal, ladies low wedge sandal, women casual footwear, comfort sandal for women',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Cream","38","37","36","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-01 19:04:06',
                'updated_at' => '2026-02-01 19:04:06',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            6 => 
            array (
                'id' => 30,
                'category_id' => 3,
                'subcategory_id' => 9,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Boys Black Textured Strap Sandal',
                'slug' => 'boys-black-textured-strap-sandal',
                'sku' => 'A-3a9c',
                'code' => NULL,
                'tags' => 'Boys Sandals,Kids Footwear,Casual Sandals for Boys,Children Shoes,Boys Black Sandals,Kids Summer Sandals,Boys Formal Sandals,Back Strap Sandals,Artificial Leather Sandals,Comfortable Kids Shoes,Velcro Sandals for Boys,Anti-Slip Kids Sandals,Soft Sole Sandals,Adjustable Strap Shoes,Everyday Wear,School Sandals,Party Wear Kids Shoes,Trendy Kids Fashion,Black and Grey Sandals,Stylish Boys Footwear',
                'photo' => 'OM_1770281217ASgtY3my.jpg',
                'thumbnail' => 'OM_1770281217aMlGUZsJ.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Give your little one the perfect mix of style and comfort.',
                'details' => '<p><!--[if gte mso 9]><xml>
<o:OfficeDocumentSettings>
<o:RelyOnVML/>
<o:AllowPNG/>
</o:OfficeDocumentSettings>
</xml><![endif]--><!--[if gte mso 9]><xml>
<w:WordDocument>
<w:View>Normal</w:View>
<w:Zoom>0</w:Zoom>
<w:TrackMoves/>
<w:TrackFormatting/>
<w:PunctuationKerning/>
<w:ValidateAgainstSchemas/>
<w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
<w:IgnoreMixedContent>false</w:IgnoreMixedContent>
<w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
<w:DoNotPromoteQF/>
<w:LidThemeOther>EN-US</w:LidThemeOther>
<w:LidThemeAsian>X-NONE</w:LidThemeAsian>
<w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
<w:Compatibility>
<w:BreakWrappedTables/>
<w:SnapToGridInCell/>
<w:WrapTextWithPunct/>
<w:UseAsianBreakRules/>
<w:DontGrowAutofit/>
<w:SplitPgBreakAndParaMark/>
<w:EnableOpenTypeKerning/>
<w:DontFlipMirrorIndents/>
<w:OverrideTableStyleHps/>
</w:Compatibility>
<m:mathPr>
<m:mathFont m:val="Cambria Math"/>
<m:brkBin m:val="before"/>
<m:brkBinSub m:val="&#45;-"/>
<m:smallFrac m:val="off"/>
<m:dispDef/>
<m:lMargin m:val="0"/>
<m:rMargin m:val="0"/>
<m:defJc m:val="centerGroup"/>
<m:wrapIndent m:val="1440"/>
<m:intLim m:val="subSup"/>
<m:naryLim m:val="undOvr"/>
</m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
<w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
DefSemiHidden="false" DefQFormat="false" DefPriority="99"
LatentStyleCount="376">
<w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 9"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 1"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 2"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 3"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 4"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 5"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 6"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 7"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 8"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 9"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footnote text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="header"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footer"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index heading"/>
<w:LsdException Locked="false" Priority="35" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="caption"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="table of figures"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="envelope address"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="envelope return"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footnote reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="line number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="page number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="endnote reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="endnote text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="table of authorities"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="macro"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="toa heading"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 5"/>
<w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Closing"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Signature"/>
<w:LsdException Locked="false" Priority="1" SemiHidden="true"
UnhideWhenUsed="true" Name="Default Paragraph Font"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Message Header"/>
<w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Salutation"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Date"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text First Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text First Indent 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Note Heading"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Block Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Hyperlink"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="FollowedHyperlink"/>
<w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
<w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Document Map"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Plain Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="E-mail Signature"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Top of Form"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Bottom of Form"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal (Web)"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Acronym"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Address"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Cite"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Code"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Definition"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Keyboard"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Preformatted"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Sample"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Typewriter"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Variable"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal Table"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation subject"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="No List"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Contemporary"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Elegant"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Professional"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Subtle 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Subtle 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Balloon Text"/>
<w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Theme"/>
<w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
<w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
<w:LsdException Locked="false" Priority="61" Name="Light List"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
<w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
<w:LsdException Locked="false" Priority="34" QFormat="true"
Name="List Paragraph"/>
<w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
<w:LsdException Locked="false" Priority="30" QFormat="true"
Name="Intense Quote"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
<w:LsdException Locked="false" Priority="19" QFormat="true"
Name="Subtle Emphasis"/>
<w:LsdException Locked="false" Priority="21" QFormat="true"
Name="Intense Emphasis"/>
<w:LsdException Locked="false" Priority="31" QFormat="true"
Name="Subtle Reference"/>
<w:LsdException Locked="false" Priority="32" QFormat="true"
Name="Intense Reference"/>
<w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
<w:LsdException Locked="false" Priority="37" SemiHidden="true"
UnhideWhenUsed="true" Name="Bibliography"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
<w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
<w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
<w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
<w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
<w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
<w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
<w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
<w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
<w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 1"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 2"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 3"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 4"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 5"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 6"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
<w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
<w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 1"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 2"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 3"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 4"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 5"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 6"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Mention"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Smart Hyperlink"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Hashtag"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Unresolved Mention"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Smart Link"/>
</w:LatentStyles>
</xml><![endif]--><!--[if gte mso 10]>
<style>
/* Style Definitions */
table.MsoNormalTable
{mso-style-name:"Table Normal";
mso-tstyle-rowband-size:0;
mso-tstyle-colband-size:0;
mso-style-noshow:yes;
mso-style-priority:99;
mso-style-parent:"";
mso-padding-alt:0in 5.4pt 0in 5.4pt;
mso-para-margin-top:0in;
mso-para-margin-right:0in;
mso-para-margin-bottom:8.0pt;
mso-para-margin-left:0in;
line-height:107%;
mso-pagination:widow-orphan;
font-size:11.0pt;
font-family:"Calibri",sans-serif;
mso-ascii-font-family:Calibri;
mso-ascii-theme-font:minor-latin;
mso-hansi-font-family:Calibri;
mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]-->

</p><h3 class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-outline-level:3"><span style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 13.5pt; font-family: &quot;Open Sans&quot;;"><span style="font-weight: bold;">Type</span>:&nbsp;</span>Casual / Open-toe</span></h3><h3><span style="font-family: &quot;Open Sans&quot;; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-weight: normal;">

</span></h3><h3 class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-outline-level:3"><span style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"><span style="font-size: 13.5pt; font-family: &quot;Open Sans&quot;;">Material
Details</span></span></h3><h3><span style="font-family: &quot;Open Sans&quot;; background-color: rgb(255, 255, 255); font-weight: normal; color: rgb(0, 0, 0);">

</span></h3><ul type="disc"><li class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list .5in"><h3><span style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;"><span style="font-weight: normal;"><span style="font-weight: bold;">Upper</span>:</span></span><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;"><span style="font-weight: normal;">&nbsp;</span></span><span style="font-family: &quot;Open Sans&quot;;"><span style="font-weight: normal;">Artificial Leather with textured finish</span></span></span></h3></li><li class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list .5in"><h3><span style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;"><span style="font-weight: normal;"><span style="font-weight: bold;">Outsole</span>:</span></span><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;"><span style="font-weight: normal;">
Durable PVC</span></span></span></h3></li></ul>

<p>These boys\' sandals feature a textured black finish with a secure back strap, ensuring they stay on during playtime. The soft, cushioned sole provides all-day support, while the bright yellow accents add a fun, modern touch. Perfect for casual outings or daily wear.</p><p data-path-to-node="8"><b data-path-to-node="8" data-index-in-node="0">Key Features:</b></p><p></p><p><ul></ul></p><ul><li>The textured upper material is resistant to scratches and scuffs, making it ideal for active kids.</li><li><ul></ul></li><li>Features a soft inner lining (beige) that prevents shoe bites and keeps feet cool.</li><li><ul></ul></li><li>The heel strap ensures the sandal doesn\'t slip off while running or walking.</li><li><ul></ul></li><li>Includes a decorative yellow buckle and "TREND" branding tag for a smart look.</li><li><ul></ul></li><li>The grey outsole is flexible and lightweight, reducing fatigue during long walks.</li></ul><p><br></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 795.0,
                'previous_price' => 895.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Boys Sandals,Kids Footwear,Casual Sandals for Boys,Children Shoes,Boys Black Sandals,Kids Summer Sandals,Boys Formal Sandals,Everyday Wear,School Sandals,Party Wear Kids Shoes,Trendy Kids Fashion,Black and Grey Sandals,Stylish Boys Footwear,Back Strap Sandals,Artificial Leather Sandals,Comfortable Kids Shoes,Velcro Sandals for Boys,Anti-Slip Kids Sandals,Soft Sole Sandals,Adjustable Strap Shoes',
                'meta_description' => 'Everyday Wear, School Sandals, Party Wear Kids Shoes, Trendy Kids Fashion, Black and Grey Sandals, Stylish Boys Footwear, Back Strap Sandals, Artificial Leather Sandals, Comfortable Kids Shoes, Velcro Sandals for Boys, Anti-Slip Kids Sandals, Soft Sole Sandals, Adjustable Strap Shoes, Boys Sandals, Kids Footwear, Casual Sandals for Boys, Children Shoes, Boys Black Sandals, Kids Summer Sandals, Boys Formal Sandals,Boys Sandals, Kids Footwear, Casual Sandals for Boys, Children Shoes, Boys Black Sandals, Kids Summer Sandals, Boys Formal Sandals',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","4","3","2","1"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-05 14:46:58',
                'updated_at' => '2026-02-05 14:46:58',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            7 => 
            array (
                'id' => 31,
                'category_id' => 3,
                'subcategory_id' => 9,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Boys Triple-Strap Casual Sandal',
                'slug' => 'boys-triple-strap-casual-sandal',
                'sku' => 'A-3fc8',
                'code' => NULL,
                'tags' => 'Everyday Wear,School Sandals,Party Wear Kids Shoes,Trendy Kids Fashion,Black and Grey Sandals,Stylish Boys Footwear,Back Strap Sandals,Artificial Leather Sandals,Comfortable Kids Shoes,Velcro Sandals for Boys,Anti-Slip Kids Sandals,Soft Sole Sandals,Adjustable Strap Shoes,Boys Sandals,Kids Footwear,Casual Sandals for Boys,Children Shoes,Boys Black Sandals,Kids Summer Sandals,Boys Formal Sandals',
                'photo' => 'OM_17702820122F6D7SAd.jpg',
                'thumbnail' => 'OM_1770282012JErPqkkD.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Upgrade your child\'s wardrobe with these stylish triple-strap sandals.',
                'details' => '<p><p><!--[if gte mso 9]><xml>
<o:OfficeDocumentSettings>
<o:RelyOnVML/>
<o:AllowPNG/>
</o:OfficeDocumentSettings>
</xml><![endif]--><!--[if gte mso 9]><xml>
<w:WordDocument>
<w:View>Normal</w:View>
<w:Zoom>0</w:Zoom>
<w:TrackMoves/>
<w:TrackFormatting/>
<w:PunctuationKerning/>
<w:ValidateAgainstSchemas/>
<w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
<w:IgnoreMixedContent>false</w:IgnoreMixedContent>
<w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
<w:DoNotPromoteQF/>
<w:LidThemeOther>EN-US</w:LidThemeOther>
<w:LidThemeAsian>X-NONE</w:LidThemeAsian>
<w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
<w:Compatibility>
<w:BreakWrappedTables/>
<w:SnapToGridInCell/>
<w:WrapTextWithPunct/>
<w:UseAsianBreakRules/>
<w:DontGrowAutofit/>
<w:SplitPgBreakAndParaMark/>
<w:EnableOpenTypeKerning/>
<w:DontFlipMirrorIndents/>
<w:OverrideTableStyleHps/>
</w:Compatibility>
<m:mathPr>
<m:mathFont m:val="Cambria Math"/>
<m:brkBin m:val="before"/>
<m:brkBinSub m:val="&#45;-"/>
<m:smallFrac m:val="off"/>
<m:dispDef/>
<m:lMargin m:val="0"/>
<m:rMargin m:val="0"/>
<m:defJc m:val="centerGroup"/>
<m:wrapIndent m:val="1440"/>
<m:intLim m:val="subSup"/>
<m:naryLim m:val="undOvr"/>
</m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
<w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
DefSemiHidden="false" DefQFormat="false" DefPriority="99"
LatentStyleCount="376">
<w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 9"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 1"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 2"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 3"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 4"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 5"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 6"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 7"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 8"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 9"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footnote text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="header"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footer"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index heading"/>
<w:LsdException Locked="false" Priority="35" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="caption"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="table of figures"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="envelope address"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="envelope return"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footnote reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="line number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="page number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="endnote reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="endnote text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="table of authorities"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="macro"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="toa heading"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 5"/>
<w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Closing"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Signature"/>
<w:LsdException Locked="false" Priority="1" SemiHidden="true"
UnhideWhenUsed="true" Name="Default Paragraph Font"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Message Header"/>
<w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Salutation"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Date"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text First Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text First Indent 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Note Heading"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Block Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Hyperlink"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="FollowedHyperlink"/>
<w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
<w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Document Map"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Plain Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="E-mail Signature"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Top of Form"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Bottom of Form"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal (Web)"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Acronym"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Address"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Cite"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Code"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Definition"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Keyboard"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Preformatted"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Sample"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Typewriter"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Variable"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal Table"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation subject"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="No List"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Contemporary"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Elegant"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Professional"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Subtle 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Subtle 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Balloon Text"/>
<w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Theme"/>
<w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
<w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
<w:LsdException Locked="false" Priority="61" Name="Light List"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
<w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
<w:LsdException Locked="false" Priority="34" QFormat="true"
Name="List Paragraph"/>
<w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
<w:LsdException Locked="false" Priority="30" QFormat="true"
Name="Intense Quote"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
<w:LsdException Locked="false" Priority="19" QFormat="true"
Name="Subtle Emphasis"/>
<w:LsdException Locked="false" Priority="21" QFormat="true"
Name="Intense Emphasis"/>
<w:LsdException Locked="false" Priority="31" QFormat="true"
Name="Subtle Reference"/>
<w:LsdException Locked="false" Priority="32" QFormat="true"
Name="Intense Reference"/>
<w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
<w:LsdException Locked="false" Priority="37" SemiHidden="true"
UnhideWhenUsed="true" Name="Bibliography"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
<w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
<w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
<w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
<w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
<w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
<w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
<w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
<w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
<w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 1"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 2"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 3"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 4"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 5"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 6"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
<w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
<w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 1"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 2"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 3"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 4"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 5"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 6"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Mention"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Smart Hyperlink"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Hashtag"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Unresolved Mention"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Smart Link"/>
</w:LatentStyles>
</xml><![endif]--><!--[if gte mso 10]>
<style>
/* Style Definitions */
table.MsoNormalTable
{mso-style-name:"Table Normal";
mso-tstyle-rowband-size:0;
mso-tstyle-colband-size:0;
mso-style-noshow:yes;
mso-style-priority:99;
mso-style-parent:"";
mso-padding-alt:0in 5.4pt 0in 5.4pt;
mso-para-margin-top:0in;
mso-para-margin-right:0in;
mso-para-margin-bottom:8.0pt;
mso-para-margin-left:0in;
line-height:107%;
mso-pagination:widow-orphan;
font-size:11.0pt;
font-family:"Calibri",sans-serif;
mso-ascii-font-family:Calibri;
mso-ascii-theme-font:minor-latin;
mso-hansi-font-family:Calibri;
mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]-->

</p><h3 class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-outline-level:3"><b><span style="font-size: 13.5pt; font-family: &quot;Open Sans&quot;;">Type:&nbsp;</span></b>Semi-Formal / Urban Casual</h3></p><h3><span style="font-family: &quot;Open Sans&quot;;">

</span></h3><p><h3 class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-outline-level:3"><b><span style="font-size: 13.5pt; font-family: &quot;Open Sans&quot;;">Material
Details</span></b></h3></p><h3><span style="font-family: &quot;Open Sans&quot;;"></span></h3><p><ul type="disc"><li class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list .5in"><h3><b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">Upper:</span></b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">&nbsp;</span>Premium Matte Synthetic Leather</h3></li><li class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list .5in"><h3><b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">Outsole:</span></b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">&nbsp;</span>Anti-slip Rubberized Sole</h3></li></ul>Designed for both comfort and durability, these sandals feature a smooth black upper paired with a rich brown cushioned footbed. The three-buckle design with vibrant yellow accents ensures a secure fit while making a bold fashion statement. Ideal for family gatherings, outings, or casual weekend wear.</p><p data-path-to-node="8"><b data-path-to-node="8" data-index-in-node="0">Key Features:</b></p><p></p><p><ul></ul></p><ul><li>Three adjustable-look straps provide a snug fit and a rugged, adventurous look.</li><li><ul></ul></li><li>The contoured brown insole is designed to support the natural arch of a child\'s foot, reducing strain during long walks.</li><li><ul></ul></li><li>The classic Black-Brown-Yellow color combination makes it easy to match with both denim and gabardine pants.</li><li><ul></ul></li><li>Features silver-tone rivets and durable buckles designed to withstand active daily use.</li><li><ul></ul></li><li>The textured black outsole provides excellent traction on various surfaces, preventing slips.</li></ul>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 750.0,
                'previous_price' => 850.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Everyday Wear,School Sandals,Party Wear Kids Shoes,Trendy Kids Fashion,Black and Grey Sandals,Stylish Boys Footwear,Back Strap Sandals,Artificial Leather Sandals,Comfortable Kids Shoes,Velcro Sandals for Boys,Anti-Slip Kids Sandals,Soft Sole Sandals,Adjustable Strap Shoes,Boys Sandals,Kids Footwear,Casual Sandals for Boys,Children Shoes,Boys Black Sandals,Kids Summer Sandals,Boys Formal Sandals',
                'meta_description' => 'Everyday Wear, School Sandals, Party Wear Kids Shoes, Trendy Kids Fashion, Black and Grey Sandals, Stylish Boys Footwear, Back Strap Sandals, Artificial Leather Sandals, Comfortable Kids Shoes, Velcro Sandals for Boys, Anti-Slip Kids Sandals, Soft Sole Sandals, Adjustable Strap Shoes, Boys Sandals, Kids Footwear, Casual Sandals for Boys, Children Shoes, Boys Black Sandals, Kids Summer Sandals, Boys Formal Sandals,Boys Sandals, Kids Footwear, Casual Sandals for Boys, Children Shoes, Boys Black Sandals, Kids Summer Sandals, Boys Formal Sandals',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","4","3","2","1"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'undefined',
                'created_at' => '2026-02-05 15:00:13',
                'updated_at' => '2026-02-05 15:00:13',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            8 => 
            array (
                'id' => 32,
                'category_id' => 3,
                'subcategory_id' => 10,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Girls\' Silver Floral Embellished Party Shoes',
                'slug' => 'girls-silver-floral-embellished-party-shoes',
                'sku' => 'A-3ded',
                'code' => NULL,
                'tags' => 'Girls Party Shoes,Kids Fancy Ballerinas,Silver Shoes for Girls,Children Party Wear Footwear,Girls Wedding Shoes,Baby Girl Dress Shoes,Pearl Embellished Kids Shoes,Girls Bellies,Birthday Party Shoes for Girls,Eid Collection Footwear,Wedding Guest Shoes for Kids,Festive Wear Ballerinas,Girls Performance Shoes,Flower Girl Shoes,Silver Metallic Ballerinas,Rhinestone Kids Shoes,Floral Detail Girls Shoes,Soft Sole Party Shoes,Anti-Slip Girls Pumps,Bling Kids Footwear,Princess Style Shoes,Pearl Decorated Ballerinas',
                'photo' => 'OM_1770283031j19vLveg.jpg',
                'thumbnail' => 'OM_17702830315q9zZIrx.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Make her feel like a princess with these stunning silver party ballerinas.',
                'details' => '<p><!--[if gte mso 9]><xml>
<o:OfficeDocumentSettings>
<o:RelyOnVML/>
<o:AllowPNG/>
</o:OfficeDocumentSettings>
</xml><![endif]--><!--[if gte mso 9]><xml>
<w:WordDocument>
<w:View>Normal</w:View>
<w:Zoom>0</w:Zoom>
<w:TrackMoves/>
<w:TrackFormatting/>
<w:PunctuationKerning/>
<w:ValidateAgainstSchemas/>
<w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
<w:IgnoreMixedContent>false</w:IgnoreMixedContent>
<w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
<w:DoNotPromoteQF/>
<w:LidThemeOther>EN-US</w:LidThemeOther>
<w:LidThemeAsian>X-NONE</w:LidThemeAsian>
<w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
<w:Compatibility>
<w:BreakWrappedTables/>
<w:SnapToGridInCell/>
<w:WrapTextWithPunct/>
<w:UseAsianBreakRules/>
<w:DontGrowAutofit/>
<w:SplitPgBreakAndParaMark/>
<w:EnableOpenTypeKerning/>
<w:DontFlipMirrorIndents/>
<w:OverrideTableStyleHps/>
</w:Compatibility>
<m:mathPr>
<m:mathFont m:val="Cambria Math"/>
<m:brkBin m:val="before"/>
<m:brkBinSub m:val="&#45;-"/>
<m:smallFrac m:val="off"/>
<m:dispDef/>
<m:lMargin m:val="0"/>
<m:rMargin m:val="0"/>
<m:defJc m:val="centerGroup"/>
<m:wrapIndent m:val="1440"/>
<m:intLim m:val="subSup"/>
<m:naryLim m:val="undOvr"/>
</m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
<w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
DefSemiHidden="false" DefQFormat="false" DefPriority="99"
LatentStyleCount="376">
<w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 9"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 1"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 2"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 3"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 4"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 5"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 6"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 7"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 8"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 9"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footnote text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="header"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footer"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index heading"/>
<w:LsdException Locked="false" Priority="35" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="caption"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="table of figures"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="envelope address"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="envelope return"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footnote reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="line number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="page number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="endnote reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="endnote text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="table of authorities"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="macro"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="toa heading"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 5"/>
<w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Closing"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Signature"/>
<w:LsdException Locked="false" Priority="1" SemiHidden="true"
UnhideWhenUsed="true" Name="Default Paragraph Font"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Message Header"/>
<w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Salutation"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Date"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text First Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text First Indent 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Note Heading"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Block Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Hyperlink"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="FollowedHyperlink"/>
<w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
<w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Document Map"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Plain Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="E-mail Signature"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Top of Form"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Bottom of Form"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal (Web)"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Acronym"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Address"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Cite"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Code"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Definition"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Keyboard"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Preformatted"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Sample"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Typewriter"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Variable"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal Table"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation subject"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="No List"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Contemporary"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Elegant"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Professional"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Subtle 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Subtle 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Balloon Text"/>
<w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Theme"/>
<w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
<w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
<w:LsdException Locked="false" Priority="61" Name="Light List"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
<w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
<w:LsdException Locked="false" Priority="34" QFormat="true"
Name="List Paragraph"/>
<w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
<w:LsdException Locked="false" Priority="30" QFormat="true"
Name="Intense Quote"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
<w:LsdException Locked="false" Priority="19" QFormat="true"
Name="Subtle Emphasis"/>
<w:LsdException Locked="false" Priority="21" QFormat="true"
Name="Intense Emphasis"/>
<w:LsdException Locked="false" Priority="31" QFormat="true"
Name="Subtle Reference"/>
<w:LsdException Locked="false" Priority="32" QFormat="true"
Name="Intense Reference"/>
<w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
<w:LsdException Locked="false" Priority="37" SemiHidden="true"
UnhideWhenUsed="true" Name="Bibliography"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
<w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
<w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
<w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
<w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
<w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
<w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
<w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
<w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
<w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 1"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 2"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 3"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 4"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 5"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 6"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
<w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
<w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 1"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 2"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 3"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 4"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 5"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 6"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Mention"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Smart Hyperlink"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Hashtag"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Unresolved Mention"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Smart Link"/>
</w:LatentStyles>
</xml><![endif]--><!--[if gte mso 10]>
<style>
/* Style Definitions */
table.MsoNormalTable
{mso-style-name:"Table Normal";
mso-tstyle-rowband-size:0;
mso-tstyle-colband-size:0;
mso-style-noshow:yes;
mso-style-priority:99;
mso-style-parent:"";
mso-padding-alt:0in 5.4pt 0in 5.4pt;
mso-para-margin-top:0in;
mso-para-margin-right:0in;
mso-para-margin-bottom:8.0pt;
mso-para-margin-left:0in;
line-height:107%;
mso-pagination:widow-orphan;
font-size:11.0pt;
font-family:"Calibri",sans-serif;
mso-ascii-font-family:Calibri;
mso-ascii-theme-font:minor-latin;
mso-hansi-font-family:Calibri;
mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]-->

</p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-outline-level:3"><b><span style="font-size: 13.5pt; font-family: &quot;Open Sans&quot;;">Type:
Wedge Heel</span></b></p><span style="font-family: &quot;Open Sans&quot;;">

</span><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-outline-level:3"><b><span style="font-size: 13.5pt; font-family: &quot;Open Sans&quot;;">Material
Details</span></b></p><span style="font-family: &quot;Open Sans&quot;;">

</span><ul type="disc"><li class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list .5in"><b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">Upper:</span></b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">
Premium Synthetic Leather</span></li><li class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list .5in"><b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">Outsole:</span></b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">&nbsp;Non-slip Rubber Outsole</span></li></ul>

<p>Perfectly crafted for weddings, birthdays, and festive occasions, these shoes feature intricate pearl and rhinestone embellishments with a charming floral side detail. The secure bridge strap and cushioned insole ensure she stays comfortable while she shines.</p><p data-path-to-node="8"><b data-path-to-node="8" data-index-in-node="0">Key Features:</b></p><p></p><p><ul></ul></p><ul><li>Decorated with a mix of pearls and high-shine crystals on the toe box for a luxurious festive look.</li><li><ul></ul></li><li>Includes a padded footbed to support little feet during long events or ceremonies.</li><li><ul></ul></li><li>The shimmering strap across the midfoot prevents the shoe from slipping off while walking or dancing.</li><li><ul></ul></li><li>A beautifully crafted white flower on the side adds a touch of elegance and uniqueness.</li><li><ul></ul></li><li>The durable outsole is designed to provide traction on polished floors (common in community centers and party halls).</li></ul><p><br></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 950.0,
                'previous_price' => 1050.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Silver Metallic Ballerinas,Rhinestone Kids Shoes,Floral Detail Girls Shoes,Soft Sole Party Shoes,Anti-Slip Girls Pumps,Bling Kids Footwear,Princess Style Shoes,Pearl Decorated Ballerinas Birthday Party Shoes for Girls,Eid Collection Footwear,Wedding Guest Shoes for Kids,Festive Wear Ballerinas,Girls Performance Shoes,Flower Girl Shoes Girls Party Shoes,Kids Fancy Ballerinas,Silver Shoes for Girls,Children Party Wear Footwear,Girls Wedding Shoes,Baby Girl Dress Shoes,Pearl Embellished Kids Shoes,Girls Bellies',
                'meta_description' => 'Silver Metallic Ballerinas, Rhinestone Kids Shoes, Floral Detail Girls Shoes, Soft Sole Party Shoes, Anti-Slip Girls Pumps, Bling Kids Footwear, Princess Style Shoes, Pearl Decorated Ballerinas Birthday Party Shoes for Girls, Eid Collection Footwear, Wedding Guest Shoes for Kids, Festive Wear Ballerinas, Girls Performance Shoes, Flower Girl Shoes Girls Party Shoes, Kids Fancy Ballerinas, Silver Shoes for Girls, Children Party Wear Footwear, Girls Wedding Shoes, Baby Girl Dress Shoes, Pearl Embellished Kids Shoes, Girls Bellies',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Silver","35","34","33","32"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-05 15:17:12',
                'updated_at' => '2026-02-05 15:17:12',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            9 => 
            array (
                'id' => 33,
                'category_id' => 3,
                'subcategory_id' => 10,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Girls\' Rose Blossom Crystal Party Ballerina',
                'slug' => 'girls-rose-blossom-crystal-party-ballerina',
                'sku' => 'A-40c7',
                'code' => NULL,
                'tags' => 'Silver Metallic Ballerinas,Rhinestone Kids Shoes,Floral Detail Girls Shoes,Soft Sole Party Shoes,Anti-Slip Girls Pumps,Bling Kids Footwear,Princess Style Shoes,Pearl Decorated Ballerinas Birthday Party Shoes for Girls,Eid Collection Footwear,Wedding Guest Shoes for Kids,Festive Wear Ballerinas,Girls Performance Shoes,Flower Girl Shoes Girls Party Shoes,Kids Fancy Ballerinas,Silver Shoes for Girls,Children Party Wear Footwear,Girls Wedding Shoes,Baby Girl Dress Shoes,Pearl Embellished Kids Shoes,Girls Bellies',
                'photo' => 'OM_17702841865hpXnvPx.jpg',
                'thumbnail' => 'OM_1770284186f8tGt0Ri.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Add a touch of floral magic to her special day.',
                'details' => '<p><!--[if gte mso 9]><xml>
<o:OfficeDocumentSettings>
<o:RelyOnVML/>
<o:AllowPNG/>
</o:OfficeDocumentSettings>
</xml><![endif]--><!--[if gte mso 9]><xml>
<w:WordDocument>
<w:View>Normal</w:View>
<w:Zoom>0</w:Zoom>
<w:TrackMoves/>
<w:TrackFormatting/>
<w:PunctuationKerning/>
<w:ValidateAgainstSchemas/>
<w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
<w:IgnoreMixedContent>false</w:IgnoreMixedContent>
<w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
<w:DoNotPromoteQF/>
<w:LidThemeOther>EN-US</w:LidThemeOther>
<w:LidThemeAsian>X-NONE</w:LidThemeAsian>
<w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
<w:Compatibility>
<w:BreakWrappedTables/>
<w:SnapToGridInCell/>
<w:WrapTextWithPunct/>
<w:UseAsianBreakRules/>
<w:DontGrowAutofit/>
<w:SplitPgBreakAndParaMark/>
<w:EnableOpenTypeKerning/>
<w:DontFlipMirrorIndents/>
<w:OverrideTableStyleHps/>
</w:Compatibility>
<m:mathPr>
<m:mathFont m:val="Cambria Math"/>
<m:brkBin m:val="before"/>
<m:brkBinSub m:val="&#45;-"/>
<m:smallFrac m:val="off"/>
<m:dispDef/>
<m:lMargin m:val="0"/>
<m:rMargin m:val="0"/>
<m:defJc m:val="centerGroup"/>
<m:wrapIndent m:val="1440"/>
<m:intLim m:val="subSup"/>
<m:naryLim m:val="undOvr"/>
</m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
<w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
DefSemiHidden="false" DefQFormat="false" DefPriority="99"
LatentStyleCount="376">
<w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 9"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 1"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 2"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 3"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 4"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 5"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 6"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 7"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 8"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 9"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footnote text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="header"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footer"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index heading"/>
<w:LsdException Locked="false" Priority="35" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="caption"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="table of figures"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="envelope address"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="envelope return"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footnote reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="line number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="page number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="endnote reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="endnote text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="table of authorities"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="macro"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="toa heading"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 5"/>
<w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Closing"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Signature"/>
<w:LsdException Locked="false" Priority="1" SemiHidden="true"
UnhideWhenUsed="true" Name="Default Paragraph Font"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Message Header"/>
<w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Salutation"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Date"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text First Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text First Indent 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Note Heading"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Block Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Hyperlink"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="FollowedHyperlink"/>
<w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
<w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Document Map"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Plain Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="E-mail Signature"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Top of Form"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Bottom of Form"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal (Web)"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Acronym"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Address"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Cite"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Code"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Definition"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Keyboard"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Preformatted"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Sample"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Typewriter"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Variable"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal Table"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation subject"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="No List"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Contemporary"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Elegant"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Professional"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Subtle 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Subtle 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Balloon Text"/>
<w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Theme"/>
<w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
<w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
<w:LsdException Locked="false" Priority="61" Name="Light List"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
<w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
<w:LsdException Locked="false" Priority="34" QFormat="true"
Name="List Paragraph"/>
<w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
<w:LsdException Locked="false" Priority="30" QFormat="true"
Name="Intense Quote"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
<w:LsdException Locked="false" Priority="19" QFormat="true"
Name="Subtle Emphasis"/>
<w:LsdException Locked="false" Priority="21" QFormat="true"
Name="Intense Emphasis"/>
<w:LsdException Locked="false" Priority="31" QFormat="true"
Name="Subtle Reference"/>
<w:LsdException Locked="false" Priority="32" QFormat="true"
Name="Intense Reference"/>
<w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
<w:LsdException Locked="false" Priority="37" SemiHidden="true"
UnhideWhenUsed="true" Name="Bibliography"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
<w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
<w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
<w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
<w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
<w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
<w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
<w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
<w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
<w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 1"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 2"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 3"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 4"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 5"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 6"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
<w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
<w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 1"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 2"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 3"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 4"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 5"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 6"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Mention"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Smart Hyperlink"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Hashtag"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Unresolved Mention"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Smart Link"/>
</w:LatentStyles>
</xml><![endif]--><!--[if gte mso 10]>
<style>
/* Style Definitions */
table.MsoNormalTable
{mso-style-name:"Table Normal";
mso-tstyle-rowband-size:0;
mso-tstyle-colband-size:0;
mso-style-noshow:yes;
mso-style-priority:99;
mso-style-parent:"";
mso-padding-alt:0in 5.4pt 0in 5.4pt;
mso-para-margin-top:0in;
mso-para-margin-right:0in;
mso-para-margin-bottom:8.0pt;
mso-para-margin-left:0in;
line-height:107%;
mso-pagination:widow-orphan;
font-size:11.0pt;
font-family:"Calibri",sans-serif;
mso-ascii-font-family:Calibri;
mso-ascii-theme-font:minor-latin;
mso-hansi-font-family:Calibri;
mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]-->

</p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-outline-level:3"><b><span style="font-size: 13.5pt; font-family: &quot;Open Sans&quot;;">Type:
Wedge Heel</span></b></p><span style="font-family: &quot;Open Sans&quot;;">

</span><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-outline-level:3"><b><span style="font-size: 13.5pt; font-family: &quot;Open Sans&quot;;">Material
Details</span></b></p><span style="font-family: &quot;Open Sans&quot;;">

</span><ul type="disc"><li class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list .5in"><b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">Upper:</span></b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">&nbsp;Soft Synthetic Matte Leathe</span></li><li class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list .5in"><b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">Outsole:</span></b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">&nbsp;Non-slip TPR Rubber</span></li></ul>

<p>These enchanting pink ballerinas feature a stunning 3D rose accent and a dazzling rhinestone-encrusted toe and bow. Designed for comfort and high-shine appeal, they are the perfect companion for weddings, birthday parties, and festive celebrations.</p><p data-path-to-node="8"><b data-path-to-node="8" data-index-in-node="0">Key Features:</b></p><p></p><p><ul></ul></p><ul><li>Features a beautiful 3D layered flower on the side and a glittery bow on the front, making these shoes a true statement piece.</li><li><ul></ul></li><li>The front half is encrusted with high-quality rhinestones that catch the light beautifully during evening events.</li><li><ul></ul></li><li>The shimmering mid-foot strap ensures the shoes stay securely on her feet while she moves and plays.</li><li><ul></ul></li><li>Extra padding in the footbed prevents fatigue, allowing her to stay comfortable throughout long parties.</li><li><ul></ul></li><li>The soft blush pink color is versatile, easily matching with frocks, gowns, or traditional lehengas.</li></ul><p><br></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 795.0,
                'previous_price' => 895.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Silver Metallic Ballerinas,Rhinestone Kids Shoes,Floral Detail Girls Shoes,Soft Sole Party Shoes,Anti-Slip Girls Pumps,Bling Kids Footwear,Princess Style Shoes,Pearl Decorated Ballerinas Birthday Party Shoes for Girls,Eid Collection Footwear,Wedding Guest Shoes for Kids,Festive Wear Ballerinas,Girls Performance Shoes,Flower Girl Shoes Girls Party Shoes,Kids Fancy Ballerinas,Silver Shoes for Girls,Children Party Wear Footwear,Girls Wedding Shoes,Baby Girl Dress Shoes,Pearl Embellished Kids Shoes,Girls Bellies',
                'meta_description' => 'Silver Metallic Ballerinas, Rhinestone Kids Shoes, Floral Detail Girls Shoes, Soft Sole Party Shoes, Anti-Slip Girls Pumps, Bling Kids Footwear, Princess Style Shoes, Pearl Decorated Ballerinas Birthday Party Shoes for Girls, Eid Collection Footwear, Wedding Guest Shoes for Kids, Festive Wear Ballerinas, Girls Performance Shoes, Flower Girl Shoes Girls Party Shoes, Kids Fancy Ballerinas, Silver Shoes for Girls, Children Party Wear Footwear, Girls Wedding Shoes, Baby Girl Dress Shoes, Pearl Embellished Kids Shoes, Girls Bellies',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Pink","28","27","26","25","24","23","18","17"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-05 15:36:27',
                'updated_at' => '2026-02-05 15:49:42',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            10 => 
            array (
                'id' => 34,
                'category_id' => 3,
                'subcategory_id' => 10,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Girls\' Crystal Blossom Party Ballerina',
                'slug' => 'girls-crystal-blossom-party-ballerina',
                'sku' => 'A-40c8',
                'code' => NULL,
                'tags' => 'Silver Metallic Ballerinas,Rhinestone Kids Shoes,Floral Detail Girls Shoes,Soft Sole Party Shoes,Anti-Slip Girls Pumps,Bling Kids Footwear,Princess Style Shoes,Pearl Decorated Ballerinas Birthday Party Shoes for Girls,Eid Collection Footwear,Wedding Guest Shoes for Kids,Festive Wear Ballerinas,Girls Performance Shoes,Flower Girl Shoes Girls Party Shoes,Kids Fancy Ballerinas,Silver Shoes for Girls,Children Party Wear Footwear,Girls Wedding Shoes,Baby Girl Dress Shoes,Pearl Embellished Kids Shoes,Girls Bellies',
                'photo' => 'OM_1770285590VNhQI89k.jpg',
                'thumbnail' => 'OM_1770285590gPqMaKNM.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Add a touch of vintage elegance to her festive look.',
                'details' => '<p><!--[if gte mso 9]><xml>
<o:OfficeDocumentSettings>
<o:RelyOnVML/>
<o:AllowPNG/>
</o:OfficeDocumentSettings>
</xml><![endif]--><!--[if gte mso 9]><xml>
<w:WordDocument>
<w:View>Normal</w:View>
<w:Zoom>0</w:Zoom>
<w:TrackMoves/>
<w:TrackFormatting/>
<w:PunctuationKerning/>
<w:ValidateAgainstSchemas/>
<w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
<w:IgnoreMixedContent>false</w:IgnoreMixedContent>
<w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
<w:DoNotPromoteQF/>
<w:LidThemeOther>EN-US</w:LidThemeOther>
<w:LidThemeAsian>X-NONE</w:LidThemeAsian>
<w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
<w:Compatibility>
<w:BreakWrappedTables/>
<w:SnapToGridInCell/>
<w:WrapTextWithPunct/>
<w:UseAsianBreakRules/>
<w:DontGrowAutofit/>
<w:SplitPgBreakAndParaMark/>
<w:EnableOpenTypeKerning/>
<w:DontFlipMirrorIndents/>
<w:OverrideTableStyleHps/>
</w:Compatibility>
<m:mathPr>
<m:mathFont m:val="Cambria Math"/>
<m:brkBin m:val="before"/>
<m:brkBinSub m:val="&#45;-"/>
<m:smallFrac m:val="off"/>
<m:dispDef/>
<m:lMargin m:val="0"/>
<m:rMargin m:val="0"/>
<m:defJc m:val="centerGroup"/>
<m:wrapIndent m:val="1440"/>
<m:intLim m:val="subSup"/>
<m:naryLim m:val="undOvr"/>
</m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
<w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
DefSemiHidden="false" DefQFormat="false" DefPriority="99"
LatentStyleCount="376">
<w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 9"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 1"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 2"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 3"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 4"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 5"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 6"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 7"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 8"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 9"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footnote text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="header"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footer"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index heading"/>
<w:LsdException Locked="false" Priority="35" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="caption"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="table of figures"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="envelope address"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="envelope return"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footnote reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="line number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="page number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="endnote reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="endnote text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="table of authorities"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="macro"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="toa heading"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 5"/>
<w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Closing"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Signature"/>
<w:LsdException Locked="false" Priority="1" SemiHidden="true"
UnhideWhenUsed="true" Name="Default Paragraph Font"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Message Header"/>
<w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Salutation"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Date"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text First Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text First Indent 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Note Heading"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Block Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Hyperlink"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="FollowedHyperlink"/>
<w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
<w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Document Map"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Plain Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="E-mail Signature"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Top of Form"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Bottom of Form"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal (Web)"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Acronym"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Address"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Cite"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Code"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Definition"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Keyboard"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Preformatted"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Sample"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Typewriter"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Variable"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal Table"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation subject"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="No List"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Contemporary"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Elegant"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Professional"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Subtle 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Subtle 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Balloon Text"/>
<w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Theme"/>
<w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
<w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
<w:LsdException Locked="false" Priority="61" Name="Light List"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
<w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
<w:LsdException Locked="false" Priority="34" QFormat="true"
Name="List Paragraph"/>
<w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
<w:LsdException Locked="false" Priority="30" QFormat="true"
Name="Intense Quote"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
<w:LsdException Locked="false" Priority="19" QFormat="true"
Name="Subtle Emphasis"/>
<w:LsdException Locked="false" Priority="21" QFormat="true"
Name="Intense Emphasis"/>
<w:LsdException Locked="false" Priority="31" QFormat="true"
Name="Subtle Reference"/>
<w:LsdException Locked="false" Priority="32" QFormat="true"
Name="Intense Reference"/>
<w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
<w:LsdException Locked="false" Priority="37" SemiHidden="true"
UnhideWhenUsed="true" Name="Bibliography"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
<w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
<w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
<w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
<w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
<w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
<w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
<w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
<w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
<w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 1"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 2"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 3"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 4"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 5"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 6"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
<w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
<w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 1"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 2"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 3"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 4"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 5"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 6"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Mention"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Smart Hyperlink"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Hashtag"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Unresolved Mention"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Smart Link"/>
</w:LatentStyles>
</xml><![endif]--><!--[if gte mso 10]>
<style>
/* Style Definitions */
table.MsoNormalTable
{mso-style-name:"Table Normal";
mso-tstyle-rowband-size:0;
mso-tstyle-colband-size:0;
mso-style-noshow:yes;
mso-style-priority:99;
mso-style-parent:"";
mso-padding-alt:0in 5.4pt 0in 5.4pt;
mso-para-margin-top:0in;
mso-para-margin-right:0in;
mso-para-margin-bottom:8.0pt;
mso-para-margin-left:0in;
line-height:107%;
mso-pagination:widow-orphan;
font-size:11.0pt;
font-family:"Calibri",sans-serif;
mso-ascii-font-family:Calibri;
mso-ascii-theme-font:minor-latin;
mso-hansi-font-family:Calibri;
mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]-->

</p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-outline-level:3"><b><span style="font-size: 13.5pt; font-family: &quot;Open Sans&quot;;">Type: Decorative, closed-toe</span></b></p><span style="font-family: &quot;Open Sans&quot;;">

</span><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-outline-level:3"><b><span style="font-size: 13.5pt; font-family: &quot;Open Sans&quot;;">Material
Details</span></b></p><span style="font-family: &quot;Open Sans&quot;;">

</span><ul type="disc"><li class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list .5in"><b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">Upper:</span></b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">
Premium Synthetic Leather</span></li><li class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal;mso-list:l0 level1 lfo1;tab-stops:list .5in"><b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">Outsole:</span></b><span style="font-size: 12pt; font-family: &quot;Open Sans&quot;;">&nbsp;Anti-slip, Flexible TPR Rubber</span></li></ul>

<p>These champagne-toned ballerinas feature a sophisticated matte finish, a 3D floral accent, and a dazzling rhinestone-encrusted front. With a cushioned insole and secure shimmering strap, these shoes are the perfect choice for weddings, Eid celebrations, and formal parties.</p><p><br></p><p data-path-to-node="8"><b data-path-to-node="8" data-index-in-node="0">Key Features:</b></p><p></p><p><ul></ul></p><ul><li>The champagne/beige hue offers a versatile, high-end look that pairs beautifully with gold, cream, and pastel-colored outfits.</li><li><ul></ul></li><li>A beautifully crafted fabric flower on the side provides a unique, boutique-style aesthetic.</li><li><ul></ul></li><li>The front section is heavily embellished with crystals and stones that provide a premium shine under party lights.</li><li><ul></ul></li><li>Designed with a soft interior and a padded heel to prevent blisters and discomfort during long events.</li><li><ul></ul></li><li>The durable rubber outsole is engineered to provide stability on smooth or slippery surfaces like marble or tiles.</li></ul><p><br></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 795.0,
                'previous_price' => 895.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Silver Metallic Ballerinas,Rhinestone Kids Shoes,Floral Detail Girls Shoes,Soft Sole Party Shoes,Anti-Slip Girls Pumps,Bling Kids Footwear,Princess Style Shoes,Pearl Decorated Ballerinas Birthday Party Shoes for Girls,Eid Collection Footwear,Wedding Guest Shoes for Kids,Festive Wear Ballerinas,Girls Performance Shoes,Flower Girl Shoes Girls Party Shoes,Kids Fancy Ballerinas,Silver Shoes for Girls,Children Party Wear Footwear,Girls Wedding Shoes,Baby Girl Dress Shoes,Pearl Embellished Kids Shoes,Girls Bellies',
                'meta_description' => 'Silver Metallic Ballerinas, Rhinestone Kids Shoes, Floral Detail Girls Shoes, Soft Sole Party Shoes, Anti-Slip Girls Pumps, Bling Kids Footwear, Princess Style Shoes, Pearl Decorated Ballerinas Birthday Party Shoes for Girls, Eid Collection Footwear, Wedding Guest Shoes for Kids, Festive Wear Ballerinas, Girls Performance Shoes, Flower Girl Shoes Girls Party Shoes, Kids Fancy Ballerinas, Silver Shoes for Girls, Children Party Wear Footwear, Girls Wedding Shoes, Baby Girl Dress Shoes, Pearl Embellished Kids Shoes, Girls Bellies',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Cream","28","27","26","25","24","23","18","17"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-05 15:59:51',
                'updated_at' => '2026-02-05 15:59:51',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            11 => 
            array (
                'id' => 36,
                'category_id' => 2,
                'subcategory_id' => 5,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Women\'s Imperial Sunburst Beaded Flats',
                'slug' => 'womens-imperial-sunburst-beaded-flats',
                'sku' => 'A-1b1c',
                'code' => NULL,
                'tags' => 'Women\'s Festive Flats,Gold Beaded Sandals,Black and Gold Ladies Shoes,Ethnic Wear Flat Sandals,Hand-Embellished Ladies Slides,Wedding Wear Flats,Shimmering Thong Sandals,Party Wear Flats for Women,Designer Style Festive Shoes,Traditional Beaded Sandals,Comfortable Party Slides,Trendy Ladies Festive Wear,Black Sandals with Gold Detail,Heavy Work Ladies Sandals,Anti-Slip Festive Flats.',
                'photo' => 'OM_1771311891J9Qo5tO1.jpg',
                'thumbnail' => 'OM_1771311891EWeinjVT.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'A regal thong-style sandal featuring a hand-embellished sunburst design for premium festive elegance.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Festive / Party Wear Flat Sandal
</h3><h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="52">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="4,0,0" data-index-in-node="0">Upper:</b> Premium Satin-Finish Synthetic Leather with High-Density Beadwork</li><li><ul></ul></li><li><b data-path-to-node="4,1,0" data-index-in-node="0">Outsole:</b> Flexible, Anti-Slip Rubber with Sporty Contrast Detailing</li></ul><p data-path-to-node="5">Make a grand entrance with these opulent black and gold sandals, designed to bring royal sophistication to your ethnic and festive wardrobe. The wide, comfortable strap serves as a canvas for a stunning "sunburst" motif, meticulously crafted with shimmering gold micro-beads and deep onyx stones. These flats offer a high-fashion, jewelry-like aesthetic, making them the perfect choice for weddings, Eid celebrations, or evening parties where you want the glamour of a heel with the effortless comfort of a flat.</p><p data-path-to-node="6"><b data-path-to-node="6" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="7"><li><p data-path-to-node="7,0,0"><b data-path-to-node="7,0,0" data-index-in-node="0">Regal Beaded Artistry:</b> Features a handcrafted sunburst pattern of gold and black beads that offer a rich tactile feel and exceptional brilliance.</p></li><li><p data-path-to-node="7,1,0"><b data-path-to-node="7,1,0" data-index-in-node="0">Modern Sporty Contrast:</b> The durable black outsole is accented with a sharp red-line rim, adding a contemporary, energetic twist to the traditional design.</p></li><li><p data-path-to-node="7,2,0"><b data-path-to-node="7,2,0" data-index-in-node="0">Comfort-Fit Thong Strap:</b> Engineered with a smooth toe-post and a wide, soft-lined bridge for a secure fit that prevents rubbing.</p></li><li><p data-path-to-node="7,3,0"><b data-path-to-node="7,3,0" data-index-in-node="0">Plush Padded Footbed:</b> The interior is lined with a soft-touch cushioned insole, providing all-day comfort for your soles during long events.</p></li><li><p data-path-to-node="7,4,0"><b data-path-to-node="7,4,0" data-index-in-node="0">Durable Traction:</b> The textured rubber outsole ensures a steady grip on polished floors, providing confidence with every step.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 595.0,
                'previous_price' => 695.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Women\'s Festive Flats,Gold Beaded Sandals,Black and Gold Ladies Shoes,Ethnic Wear Flat Sandals,Hand-Embellished Ladies Slides,Wedding Wear Flats,Shimmering Thong Sandals,Party Wear Flats for Women,Designer Style Festive Shoes,Traditional Beaded Sandals,Comfortable Party Slides,Trendy Ladies Festive Wear,Black Sandals with Gold Detail,Heavy Work Ladies Sandals,Anti-Slip Festive Flats.',
                'meta_description' => 'Women\'s Festive Flats, Gold Beaded Sandals, Black and Gold Ladies Shoes, Ethnic Wear Flat Sandals, Hand-Embellished Ladies Slides, Wedding Wear Flats, Shimmering Thong Sandals, Party Wear Flats for Women, Designer Style Festive Shoes, Traditional Beaded Sandals, Comfortable Party Slides, Trendy Ladies Festive Wear, Black Sandals with Gold Detail, Heavy Work Ladies Sandals, Anti-Slip Festive Flats.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","38","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 13:04:52',
                'updated_at' => '2026-02-18 11:17:24',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            12 => 
            array (
                'id' => 37,
                'category_id' => 2,
                'subcategory_id' => 6,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Women\'s Crystal Bow Royale Sculpted Heels',
                'slug' => 'womens-crystal-bow-royale-sculpted-heels',
                'sku' => 'A-2b6e',
                'code' => NULL,
                'tags' => 'Women\'s Luxury Heels,Crystal Bow Mules,Ivory Wedding Shoes,Designer Jewel Heels,Party Wear Sandals for Women,Rhinestone Encrusted Heels,Formal White Mules,Sculpted Heel Sandals,High-Fashion Bridal Shoes,Pointed Toe Party Heels,Shimmering Wedding Footwear,Premium Ladies Mules,Gold Accent Jewel Heels,Elegant Celebration Shoes,Boutique Style Ladies Footwear.',
                'photo' => 'OM_1771312336TQVyMjHe.jpg',
                'thumbnail' => 'OM_177131233629ovdsFj.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'A breathtaking statement of luxury featuring a crystal-encrusted bow and a stunning architectural jewel heel.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> High-Glamour Party / Wedding Mule</h3><h3 data-path-to-node="4"><b data-path-to-node="4" data-index-in-node="0">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="5,0,0" data-index-in-node="0">Upper:</b> Premium Micro-Pleated Synthetic Silk-Finish Leather</li><li><ul></ul></li><li><b data-path-to-node="5,1,0" data-index-in-node="0">Outsole:</b> Slip-Resistant, Slim-Profile Synthetic Rubber</li></ul><p data-path-to-node="6">Exude pure opulence with these masterpiece ivory mules, designed for the most grand celebrations. This pair features an exquisite micro-pleated upper that offers a rich, tactile depth, perfectly balanced by a magnificent oversized bow. The bow and the topline are meticulously hand-set with high-brilliance crystals that create a radiant shimmer with every movement. The true highlight is the architectural "Jewel Heel"—a gold-tone sculpted cone encrusted with large-cut crystals—making these shoes a true work of art from every angle.</p><p data-path-to-node="7"><b data-path-to-node="7" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="8"><li><p data-path-to-node="8,0,0"><b data-path-to-node="8,0,0" data-index-in-node="0">Crystal-Encrusted Bow:</b> Features a dramatic, hand-finished bow adorned with hundreds of micro-rhinestones for a dazzling focal point.</p></li><li><p data-path-to-node="8,1,0"><b data-path-to-node="8,1,0" data-index-in-node="0">Architectural Jewel Heel:</b> A unique, gold-tone sculpted heel set with oversized geometric crystals, offering both a stable 2.5-inch lift and a boutique aesthetic.</p></li><li><p data-path-to-node="8,2,0"><b data-path-to-node="8,2,0" data-index-in-node="0">Luxury Pleated Texture:</b> The ivory upper is finished with fine, vertical pleats that provide a high-end, sophisticated sheen.</p></li><li><p data-path-to-node="8,3,0"><b data-path-to-node="8,3,0" data-index-in-node="0">Pointed-Toe Elegance:</b> The sharp, closed-toe silhouette provides a slimming, formal look that pairs perfectly with high-fashion gowns or luxury sarees.</p></li><li><p data-path-to-node="8,4,0"><b data-path-to-node="8,4,0" data-index-in-node="0">Cushioned Insole:</b> Equipped with a soft, neutral-toned padded footbed to ensure you stay comfortable during long wedding receptions or evening events.</p></li></ul><br><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1495.0,
                'previous_price' => 1595.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Women\'s Luxury Heels,Crystal Bow Mules,Ivory Wedding Shoes,Designer Jewel Heels,Party Wear Sandals for Women,Rhinestone Encrusted Heels,Formal White Mules,Sculpted Heel Sandals,High-Fashion Bridal Shoes,Pointed Toe Party Heels,Shimmering Wedding Footwear,Premium Ladies Mules,Gold Accent Jewel Heels,Elegant Celebration Shoes,Boutique Style Ladies Footwear.',
                'meta_description' => 'Women\'s Luxury Heels, Crystal Bow Mules, Ivory Wedding Shoes, Designer Jewel Heels, Party Wear Sandals for Women, Rhinestone Encrusted Heels, Formal White Mules, Sculpted Heel Sandals, High-Fashion Bridal Shoes, Pointed Toe Party Heels, Shimmering Wedding Footwear, Premium Ladies Mules, Gold Accent Jewel Heels, Elegant Celebration Shoes, Boutique Style Ladies Footwear.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["White","38","37","36","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 13:12:17',
                'updated_at' => '2026-02-18 11:13:51',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            13 => 
            array (
                'id' => 38,
                'category_id' => 2,
                'subcategory_id' => 5,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Women’s Imperial Gold-Beaded Festive Flats',
                'slug' => 'womens-imperial-gold-beaded-festive-flats',
                'sku' => 'A-2e6f',
                'code' => NULL,
                'tags' => 'Women\'s Festive Flats,Gold Beaded Sandals,Black and Gold Ladies Shoes,Ethnic Wear Flat Sandals,Hand-Embellished Ladies Slides,Wedding Wear Flats,Shimmering Thong Sandals,Party Wear Flats for Women,Designer Style Festive Shoes,Traditional Beaded Sandals,Comfortable Party Slides,Trendy Ladies Festive Wear,Black Sandals with Gold Detail,Heavy Work Ladies Sandals,Anti-Slip Festive Flats.',
                'photo' => 'OM_17713124954h4G1eJm.jpg',
                'thumbnail' => 'OM_1771312495oclkwQxU.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'A regal and radiant thong-style sandal featuring intricate gold beadwork for a premium festive look.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Festive / Celebration Flat Sandal
</h3><h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="53">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="4,0,0" data-index-in-node="0">Upper:</b> Soft Satin-Finish Synthetic Fabric with Hand-Applied Beadwork</li><li><ul></ul></li><li><b data-path-to-node="4,1,0" data-index-in-node="0">Outsole:</b> Durable Rubber with Sporty Contrast Accents</li></ul><p data-path-to-node="5">Make a bold statement with these opulent black and gold sandals, designed to add a touch of royal elegance to your festive attire. The upper is defined by a wide, comfortable strap heavily embellished with shimmering gold beads and black stones, creating a sunburst-inspired pattern that serves as a stunning focal point. Designed for the woman who loves to stand out at weddings or evening gatherings, these flats offer a glamorous alternative to heels without compromising on style.</p><p data-path-to-node="6"><b data-path-to-node="6" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="7"><li><p data-path-to-node="7,0,0"><b data-path-to-node="7,0,0" data-index-in-node="0">Intricate Beadwork:</b> Features a high-density arrangement of gold and black beads that offer a rich, artisanal texture and brilliant shine.</p></li><li><p data-path-to-node="7,1,0"><b data-path-to-node="7,1,0" data-index-in-node="0">Sporty Edge Detailing:</b> The outsole features a unique red-line contrast, adding a modern, energetic twist to a traditional festive design.</p></li><li><p data-path-to-node="7,2,0"><b data-path-to-node="7,2,0" data-index-in-node="0">Comfort Thong Construction:</b> Designed with a smooth toe-post and wide side straps to ensure a secure fit and minimize irritation.</p></li><li><p data-path-to-node="7,3,0"><b data-path-to-node="7,3,0" data-index-in-node="0">Cushioned Footbed:</b> The soft-touch black insole provides a plush feel underfoot, making them perfect for long hours of celebration.</p></li><li><p data-path-to-node="7,4,0"><b data-path-to-node="7,4,0" data-index-in-node="0">Low-Profile Stability:</b> Completely flat with a textured bottom, providing maximum stability on tiled or marble event floors.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 650.0,
                'previous_price' => 750.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Women\'s Festive Flats,Gold Beaded Sandals,Black and Gold Ladies Shoes,Ethnic Wear Flat Sandals,Hand-Embellished Ladies Slides,Wedding Wear Flats,Shimmering Thong Sandals,Party Wear Flats for Women,Designer Style Festive Shoes,Traditional Beaded Sandals,Comfortable Party Slides,Trendy Ladies Festive Wear,Black Sandals with Gold Detail,Heavy Work Ladies Sandals,Anti-Slip Festive Flats.',
                'meta_description' => 'Women\'s Festive Flats, Gold Beaded Sandals, Black and Gold Ladies Shoes, Ethnic Wear Flat Sandals, Hand-Embellished Ladies Slides, Wedding Wear Flats, Shimmering Thong Sandals, Party Wear Flats for Women, Designer Style Festive Shoes, Traditional Beaded Sandals, Comfortable Party Slides, Trendy Ladies Festive Wear, Black Sandals with Gold Detail, Heavy Work Ladies Sandals, Anti-Slip Festive Flats.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","38","37","36","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 13:14:55',
                'updated_at' => '2026-02-18 11:11:45',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            14 => 
            array (
                'id' => 39,
                'category_id' => 2,
                'subcategory_id' => 7,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Women’s Minimalist Pearl-Grey Jewel Ballerina',
                'slug' => 'womens-minimalist-pearl-grey-jewel-ballerina',
                'sku' => 'A-2e85',
                'code' => NULL,
                'tags' => 'Women\'s Flat Ballerinas,Grey Pointed-Toe Flats,Jewel Encrusted Ballerinas,Ladies Formal Flat Shoes,Elegant Party Wear Flats,Pearl Grey Ladies Shoes,Comfortable Wedding Flats,Minimalist Ladies Ballerinas,Designer Style Flat Shoes,Soft Grey Festive Footwear,Premium Quality Ladies Flats,Trendy Office Wear for Women,Slip-on Formal Ballerinas,Crystal Accent Ladies Shoes,Stylish Daily Wear Flats.',
                'photo' => 'OM_1771312681T6JBlm2h.jpg',
                'thumbnail' => 'OM_1771312681tgmHKvSE.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Elegant pointed-toe flats with a pleated vamp and a shimmering crystal crown accent.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Formal / Party Wear Flat Ballerina</h3><h3 data-path-to-node="4"><b data-path-to-node="4" data-index-in-node="0">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="5,0,0" data-index-in-node="0">Upper:</b> Premium Matte-Finish Synthetic Leather</li><li><ul></ul></li><li><b data-path-to-node="5,1,0" data-index-in-node="0">Outsole:</b> Ultra-Flexible, Slip-Resistant Synthetic Rubber</li></ul><p data-path-to-node="6">Step into effortless sophistication with these minimalist pearl-grey ballerinas. Designed for the woman who appreciates subtle luxury, this pair features a clean, matte upper with a delicate pleated design on the toe box. The highlight of the shoe is a sophisticated gold-tone brooch set with three brilliant crystals, adding just the right amount of sparkle for festive or formal occasions. Its neutral, soft-grey palette makes it an incredibly versatile choice that pairs beautifully with everything from office trousers to traditional sarees and salwar kameez.</p><p data-path-to-node="7"><b data-path-to-node="7" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="8"><li><p data-path-to-node="8,0,0"><b data-path-to-node="8,0,0" data-index-in-node="0">Jeweled Crown Accent:</b> Features a premium gold-tone hardware piece encrusted with high-clarity crystals for a refined, boutique look.</p></li><li><p data-path-to-node="8,1,0"><b data-path-to-node="8,1,0" data-index-in-node="0">Pointed-Toe Elegance:</b> The sleek pointed-toe silhouette provides a slimming effect for the feet and an instant formal upgrade to any outfit.</p></li><li><p data-path-to-node="8,2,0"><b data-path-to-node="8,2,0" data-index-in-node="0">Pleated Vamp Detail:</b> The gentle pleating on the side adds texture and depth, setting this pair apart from standard flat shoes.</p></li><li><p data-path-to-node="8,3,0"><b data-path-to-node="8,3,0" data-index-in-node="0">All-Day Comfort Insole:</b> Lined with a smooth, breathable interior and a padded footbed to ensure comfort during long hours of wear.</p></li><li><p data-path-to-node="8,4,0"><b data-path-to-node="8,4,0" data-index-in-node="0">Lightweight Construction:</b> Specifically engineered to be light on the feet, allowing for a natural and effortless stride.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 995.0,
                'previous_price' => 1095.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Women\'s Flat Ballerinas,Grey Pointed-Toe Flats,Jewel Encrusted Ballerinas,Ladies Formal Flat Shoes,Elegant Party Wear Flats,Pearl Grey Ladies Shoes,Comfortable Wedding Flats,Minimalist Ladies Ballerinas,Designer Style Flat Shoes,Soft Grey Festive Footwear,Premium Quality Ladies Flats,Trendy Office Wear for Women,Slip-on Formal Ballerinas,Crystal Accent Ladies Shoes,Stylish Daily Wear Flats.',
                'meta_description' => 'Women\'s Flat Ballerinas, Grey Pointed-Toe Flats, Jewel Encrusted Ballerinas, Ladies Formal Flat Shoes, Elegant Party Wear Flats, Pearl Grey Ladies Shoes, Comfortable Wedding Flats, Minimalist Ladies Ballerinas, Designer Style Flat Shoes, Soft Grey Festive Footwear, Premium Quality Ladies Flats, Trendy Office Wear for Women, Slip-on Formal Ballerinas, Crystal Accent Ladies Shoes, Stylish Daily Wear Flats.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Cream","38","37","36","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 13:18:01',
                'updated_at' => '2026-02-18 11:10:09',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            15 => 
            array (
                'id' => 40,
                'category_id' => 2,
                'subcategory_id' => 6,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Women\'s Onyx Executive Ribbed Block Heels',
                'slug' => 'womens-onyx-executive-ribbed-block-heels',
                'sku' => 'A-2ed0',
                'code' => NULL,
                'tags' => 'Women\'s Block Heels,Black Formal Sandals,Textured Ladies Heels,Office Wear for Women,Executive Block Heels,Black Ribbed Sandals,Ladies Mid-Heel Sandals,Formal Party Wear Heels,Comfortable Office Heels,Designer Style Block Heels,Gold Buckle Sandals,Trendy Ladies Footwear,Professional Women\'s Shoes,Black Semi-Formal Sandals,Stable Walking Heels.',
                'photo' => 'OM_1771312810ytLPOk52.jpg',
                'thumbnail' => 'OM_1771312810bbnTB9Pg.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Command attention with these sophisticated textured block heels, where professional structure meets modern elegance.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Formal / Semi-formal Block Heel Sandal
</h3><h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="58">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="4,0,0" data-index-in-node="0">Upper:</b> Premium Ribbed-Texture Synthetic Leather</li><li><ul></ul></li><li><b data-path-to-node="4,1,0" data-index-in-node="0">Outsole:</b> Stable, High-Traction Synthetic Rubber</li></ul><p data-path-to-node="5">Step into the boardroom or your next social event with unwavering confidence. These Onyx Black block heels are designed for the modern woman who balances a busy professional life with a sharp sense of style. The upper features a unique, linear ribbed texture that offers a refined matte finish, beautifully contrasted by a bold, gold-rimmed buckle. With a sturdy mid-height block heel, this pair provides the perfect amount of elevation while ensuring all-day stability and comfort.</p><p data-path-to-node="6"><b data-path-to-node="6" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="7"><li><p data-path-to-node="7,0,0"><b data-path-to-node="7,0,0" data-index-in-node="0">Textured Ribbed Finish:</b> The upper is crafted with a high-definition linear texture, giving the sandal a premium, designer-inspired look.</p></li><li><p data-path-to-node="7,1,0"><b data-path-to-node="7,1,0" data-index-in-node="0">Signature Buckle Accent:</b> Features a large, polished gold-tone buckle with a black enamel inlay, serving as a sophisticated focal point.</p></li><li><p data-path-to-node="7,2,0"><b data-path-to-node="7,2,0" data-index-in-node="0">Supportive Block Heel:</b> The wide, matching-textured block heel ensures even weight distribution, making these ideal for long hours of wear.</p></li><li><p data-path-to-node="7,3,0"><b data-path-to-node="7,3,0" data-index-in-node="0">Cushioned Executive Insole:</b> Lined with a soft, cream-toned padded footbed to provide superior comfort and arch support.</p></li><li><p data-path-to-node="7,4,0"><b data-path-to-node="7,4,0" data-index-in-node="0">Versatile Open-Toe Design:</b> The elegant crossover strap construction offers a breathable and secure fit, perfect for both western and ethnic formal attire.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 995.0,
                'previous_price' => 1095.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Women\'s Block Heels,Black Formal Sandals,Textured Ladies Heels,Office Wear for Women,Executive Block Heels,Black Ribbed Sandals,Ladies Mid-Heel Sandals,Formal Party Wear Heels,Comfortable Office Heels,Designer Style Block Heels,Gold Buckle Sandals,Trendy Ladies Footwear,Professional Women\'s Shoes,Black Semi-Formal Sandals,Stable Walking Heels.',
                'meta_description' => 'Women\'s Block Heels, Black Formal Sandals, Textured Ladies Heels, Office Wear for Women, Executive Block Heels, Black Ribbed Sandals, Ladies Mid-Heel Sandals, Formal Party Wear Heels, Comfortable Office Heels, Designer Style Block Heels, Gold Buckle Sandals, Trendy Ladies Footwear, Professional Women\'s Shoes, Black Semi-Formal Sandals, Stable Walking Heels.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","38","37","36","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 13:20:11',
                'updated_at' => '2026-02-18 11:07:45',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            16 => 
            array (
                'id' => 41,
                'category_id' => 2,
                'subcategory_id' => 5,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Women\'s Serene Sky Ankle-Strap Sandals',
                'slug' => 'womens-serene-sky-ankle-strap-sandals',
                'sku' => 'A-2f0a',
                'code' => NULL,
                'tags' => 'Women\'s Pastel Blue Sandals,Light Blue Party Flats,Crystal Embellished Sandals,Ladies Evening Footwear,Sky Blue Formal Sandals,Shimmering Ankle Strap Flats,Wedding Guest Sandals,Rhinestone Ladies Flats,Square Toe Party Wear,Designer Style Sandals,Comfortable Festive Sandals,Soft Blue Slides,Premium Quality Ladies Shoes,Trendy Summer Party Wear,Anti-Slip Ladies Sandals.',
                'photo' => 'OM_1771313427fKfxXCfr.jpg',
                'thumbnail' => 'OM_1771313427ji07CKck.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'A breath of fresh air for your festive wardrobe, combining soft pastel tones with a brilliant crystal shimmer.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Party Wear / Evening Flat Sandal</h3><h3 data-path-to-node="4"><b data-path-to-node="4" data-index-in-node="0">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="5,0,0" data-index-in-node="0">Upper:</b> Premium Soft-Finish Synthetic Leather with Crystal-Mesh Detailing</li><li><ul></ul></li><li><b data-path-to-node="5,1,0" data-index-in-node="0">Outsole:</b> Slim-Profile, High-Traction Synthetic Rubber</li></ul><p data-path-to-node="6">Infuse your ensemble with a touch of ethereal charm in these pastel blue sandals. Designed for the modern woman who loves a pop of color, this pair features a sophisticated dual-strap design. The front strap is encrusted with high-brilliance micro-crystals that provide a jewelry-like sparkle, beautifully complementing the cool sky-blue hue. With a trend-right square toe and a secure ankle strap, these flats offer a high-fashion look that remains comfortable throughout weddings, parties, or social gatherings.</p><p data-path-to-node="7"><b data-path-to-node="7" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="8"><li><p data-path-to-node="8,0,0"><b data-path-to-node="8,0,0" data-index-in-node="0">Vibrant Crystal Embellishment:</b> The wide front strap features a dense crystal-mesh finish for maximum light reflection and glamour.</p></li><li><p data-path-to-node="8,1,0"><b data-path-to-node="8,1,0" data-index-in-node="0">Cool Pastel Palette:</b> The soft blue upper adds a refreshing, youthful touch that pairs perfectly with silver, white, or floral outfits.</p></li><li><p data-path-to-node="8,2,0"><b data-path-to-node="8,2,0" data-index-in-node="0">Modern Square-Toe Design:</b> Features a contemporary square-cut front for a sophisticated silhouette and a comfortable fit.</p></li><li><p data-path-to-node="8,3,0"><b data-path-to-node="8,3,0" data-index-in-node="0">Secure Ankle Support:</b> Equipped with a slim, matching blue ankle strap and a polished gold-tone buckle for a customized fit.</p></li><li><p data-path-to-node="8,4,0"><b data-path-to-node="8,4,0" data-index-in-node="0">Metallic Trim Finish:</b> The outsole is accented with a sleek silver metallic rim, elevating the overall premium feel of the sandal.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 895.0,
                'previous_price' => 995.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Women\'s Pastel Blue Sandals,Light Blue Party Flats,Crystal Embellished Sandals,Ladies Evening Footwear,Sky Blue Formal Sandals,Shimmering Ankle Strap Flats,Wedding Guest Sandals,Rhinestone Ladies Flats,Square Toe Party Wear,Designer Style Sandals,Comfortable Festive Sandals,Soft Blue Slides,Premium Quality Ladies Shoes,Trendy Summer Party Wear,Anti-Slip Ladies Sandals.',
                'meta_description' => 'Women\'s Pastel Blue Sandals, Light Blue Party Flats, Crystal Embellished Sandals, Ladies Evening Footwear, Sky Blue Formal Sandals, Shimmering Ankle Strap Flats, Wedding Guest Sandals, Rhinestone Ladies Flats, Square Toe Party Wear, Designer Style Sandals, Comfortable Festive Sandals, Soft Blue Slides, Premium Quality Ladies Shoes, Trendy Summer Party Wear, Anti-Slip Ladies Sandals.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Sky Blue","38","37","36","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 13:30:28',
                'updated_at' => '2026-02-18 11:05:47',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            17 => 
            array (
                'id' => 42,
                'category_id' => 2,
                'subcategory_id' => 5,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Women\'s Starlight Glamour Ankle-Strap Sandals',
                'slug' => 'womens-starlight-glamour-ankle-strap-sandals',
                'sku' => 'A-2f0b',
                'code' => NULL,
                'tags' => 'Women\'s Black Party Sandals,Crystal Embellished Flats,Ladies Evening Sandals,Shimmering Ankle Strap Flats,Formal Black Sandals,Wedding Guest Footwear,Rhinestone Ladies Sandals,Square Toe Party Flats,Elegant Black Slides,Designer Style Sandals,Comfortable Festive Footwear,Shiny Midnight Black Sandals,Ladies Minimalist Heels,Premium Party Wear,Stylish Ankle Strap Sandals.',
                'photo' => 'OM_1771313544356FCon0.jpg',
                'thumbnail' => 'OM_1771313544JsmgLds3.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Minimalist elegance meets shimmering sophistication for your next evening out.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Party Wear / Evening Flat Sandal</h3><h3 data-path-to-node="4"><b data-path-to-node="4" data-index-in-node="0">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="5,0,0" data-index-in-node="0">Upper:</b> Smooth Synthetic Leather with Crystal-Mesh Detailing</li><li><ul></ul></li><li><b data-path-to-node="5,1,0" data-index-in-node="0">Outsole:</b> Slim-Profile, High-Traction Synthetic Rubber</li></ul><p data-path-to-node="6">Elevate your formal look with these stunning midnight black sandals, designed to provide a perfect blend of high-fashion shimmer and all-night comfort. Featuring a sophisticated dual-strap design, the front is adorned with a dense array of shimmering micro-crystals that capture and reflect light with every step. The clean, modern square-toe silhouette and slender ankle strap create a refined profile that complements everything from elegant sarees to contemporary western evening gowns.</p><p data-path-to-node="7"><b data-path-to-node="7" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="8"><li><p data-path-to-node="8,0,0"><b data-path-to-node="8,0,0" data-index-in-node="0">Crystal-Mesh Embellishment:</b> A wide front strap encrusted with high-brilliance crystals for a luxurious, jewelry-inspired finish.</p></li><li><p data-path-to-node="8,1,0"><b data-path-to-node="8,1,0" data-index-in-node="0">Sleek Ankle Support:</b> Designed with a slim, adjustable ankle strap and a polished metallic buckle to ensure a secure and graceful fit.</p></li><li><p data-path-to-node="8,2,0"><b data-path-to-node="8,2,0" data-index-in-node="0">Modern Square-Toe Bed:</b> Features a trend-forward square-toe design that offers a contemporary look and a comfortable, spacious fit for the toes.</p></li><li><p data-path-to-node="8,3,0"><b data-path-to-node="8,3,0" data-index-in-node="0">Two-Tone Contrast Insole:</b> A soft, beige-toned padded footbed provides a chic visual contrast while offering superior underfoot cushioning.</p></li><li><p data-path-to-node="8,4,0"><b data-path-to-node="8,4,0" data-index-in-node="0">Metallic Edge Detailing:</b> The outsole is finished with a subtle silver-metallic rim, adding an extra layer of premium detail and sophistication.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 895.0,
                'previous_price' => 995.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Women\'s Black Party Sandals,Crystal Embellished Flats,Ladies Evening Sandals,Shimmering Ankle Strap Flats,Formal Black Sandals,Wedding Guest Footwear,Rhinestone Ladies Sandals,Square Toe Party Flats,Elegant Black Slides,Designer Style Sandals,Comfortable Festive Footwear,Shiny Midnight Black Sandals,Ladies Minimalist Heels,Premium Party Wear,Stylish Ankle Strap Sandals.',
                'meta_description' => 'Women\'s Black Party Sandals, Crystal Embellished Flats, Ladies Evening Sandals, Shimmering Ankle Strap Flats, Formal Black Sandals, Wedding Guest Footwear, Rhinestone Ladies Sandals, Square Toe Party Flats, Elegant Black Slides, Designer Style Sandals, Comfortable Festive Footwear, Shiny Midnight Black Sandals, Ladies Minimalist Heels, Premium Party Wear, Stylish Ankle Strap Sandals.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","38","37","36","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 13:32:24',
                'updated_at' => '2026-02-18 11:03:32',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            18 => 
            array (
                'id' => 43,
                'category_id' => 2,
                'subcategory_id' => 5,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Women\'s Pearlescent Ribbon Charm Flat Sandals',
                'slug' => 'womens-pearlescent-ribbon-charm-flat-sandals',
                'sku' => 'A-2f3a',
                'code' => NULL,
                'tags' => 'Women\'s Flat Sandals,Off-White Thong Sandals,Jewel Embellished Slides,Ladies Casual Footwear,Elegant White Sandals,Thong Sandals with Bow,Crystal Charm Sandals,Comfortable Summer Flats,Women\'s Ethnic Wear Sandals,Designer Style Flats,Premium Ladies Sandals,Trendy Thong Slides,White Party Wear Flats,Anti-Slip Ladies Sandals,Modern Textured Footwear.',
                'photo' => 'OM_1771313713GUzmlwfM.jpg',
                'thumbnail' => 'OM_1771313713hpK9D7Vu.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'A touch of modern chic featuring a refined textured finish and shimmering metallic detail.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Casual / Semi-formal Thong Sandal</h3><h3 data-path-to-node="3">
<b data-path-to-node="3" data-index-in-node="53">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="4,0,0" data-index-in-node="0">Upper:</b> Premium Textured Synthetic Leather</li><li><ul></ul></li><li><b data-path-to-node="4,1,0" data-index-in-node="0">Outsole:</b> Lightweight, Durable Synthetic Rubber</li></ul><p data-path-to-node="5">Step into effortless style with these sophisticated off-white thong sandals. Designed with a unique linear texture on the straps, this pair features a beautifully structured bow-inspired accent. The center is adorned with a gold-tone "H" emblem encrusted with shimmering crystals, offering a high-end boutique aesthetic. Whether you are pairing them with traditional ethnic wear or a relaxed casual outfit, these sandals provide a polished look with the all-day comfort of a flat profile.</p><p data-path-to-node="6"><b data-path-to-node="6" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="7"><li><p data-path-to-node="7,0,0"><b data-path-to-node="7,0,0" data-index-in-node="0">Metallic Jewel Accent:</b> Features a premium gold-finish "H" charm with inlaid rhinestones for a touch of luxury.</p></li><li><p data-path-to-node="7,1,0"><b data-path-to-node="7,1,0" data-index-in-node="0">Distinctive Textured Straps:</b> The upper boasts a modern pleated-style texture that adds depth and a contemporary feel to the classic white palette.</p></li><li><p data-path-to-node="7,2,0"><b data-path-to-node="7,2,0" data-index-in-node="0">Contoured Comfort Insole:</b> The soft, beige-toned footbed is designed to provide gentle cushioning for your feet during daily wear.</p></li><li><p data-path-to-node="7,3,0"><b data-path-to-node="7,3,0" data-index-in-node="0">Minimalist Thong Design:</b> A sleek and breathable silhouette that ensures maximum comfort during warm weather.</p></li><li><p data-path-to-node="7,4,0"><b data-path-to-node="7,4,0" data-index-in-node="0">Steady Grip Outsole:</b> The durable tan outsole is engineered to provide reliable traction on various surfaces.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 825.0,
                'previous_price' => 925.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Women\'s Flat Sandals,Off-White Thong Sandals,Jewel Embellished Slides,Ladies Casual Footwear,Elegant White Sandals,Thong Sandals with Bow,Crystal Charm Sandals,Comfortable Summer Flats,Women\'s Ethnic Wear Sandals,Designer Style Flats,Premium Ladies Sandals,Trendy Thong Slides,White Party Wear Flats,Anti-Slip Ladies Sandals,Modern Textured Footwear.',
                'meta_description' => 'Women\'s Flat Sandals, Off-White Thong Sandals, Jewel Embellished Slides, Ladies Casual Footwear, Elegant White Sandals, Thong Sandals with Bow, Crystal Charm Sandals, Comfortable Summer Flats, Women\'s Ethnic Wear Sandals, Designer Style Flats, Premium Ladies Sandals, Trendy Thong Slides, White Party Wear Flats, Anti-Slip Ladies Sandals, Modern Textured Footwear.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["White","38","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 13:35:14',
                'updated_at' => '2026-02-18 11:01:32',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            19 => 
            array (
                'id' => 44,
                'category_id' => 2,
                'subcategory_id' => 5,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Women\'s Midnight Noir Floral Wedge Sandals',
                'slug' => 'womens-midnight-noir-floral-wedge-sandals',
                'sku' => 'A-2f50',
                'code' => NULL,
                'tags' => 'Women\'s Wedge Sandals,Black Thong Sandals,Floral Accent Ladies Shoes,Laser-Cut Wedge Sandals,Comfortable Party Wear Sandals,Ladies Casual Wedges,Black and Cream Sandals,Festive Wear for Women,Daily Wear Wedge Footwear,Elegant Thong Slides,Summer Sandals for Women,Cushioned Wedge Sandals,Trendy Ladies Footwear,Anti-Slip Wedge Shoes,Premium Quality Ladies Sandals.',
                'photo' => 'OM_1771313866I63KKory.jpg',
                'thumbnail' => 'OM_1771313866m3RvEHK5.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Elegant black wedges featuring an intricate floral laser-cut design for a touch of feminine charm.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Casual / Semi-Formal Wedge Sandal</h3><h3 data-path-to-node="3">
<b data-path-to-node="3" data-index-in-node="53">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="4,0,0" data-index-in-node="0">Upper:</b> High-Quality Perforated Synthetic Leather</li><li><ul></ul></li><li><b data-path-to-node="4,1,0" data-index-in-node="0">Outsole:</b> Lightweight, Slip-Resistant Polyurethane (PU)</li></ul><p data-path-to-node="5">Step out in style and comfort with these sophisticated black thong-style wedge sandals. Designed for the modern woman who values both aesthetics and ease, this pair features a beautifully detailed laser-cut upper adorned with a delicate 3D floral accent. The neutral cream-toned footbed provides a sharp visual contrast, while the modest wedge heel offers just the right amount of lift for all-day wear. Whether you\'re heading to a casual brunch or a festive gathering, these sandals ensure a polished and graceful look.</p><p data-path-to-node="6"><b data-path-to-node="6" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="7"><li><p data-path-to-node="7,0,0"><b data-path-to-node="7,0,0" data-index-in-node="0">Artisanal Floral Accent:</b> Features a multi-layered, laser-cut floral ornament with a central gold-tone stud for a premium, boutique finish.</p></li><li><p data-path-to-node="7,1,0"><b data-path-to-node="7,1,0" data-index-in-node="0">Perforated Breathability:</b> The intricate laser-cut pattern on the straps not only adds visual interest but also ensures excellent airflow to keep feet cool.</p></li><li><p data-path-to-node="7,2,0"><b data-path-to-node="7,2,0" data-index-in-node="0">Ergonomic Wedge Heel:</b> The steady, low-profile wedge provides comfortable height and superior arch support for extended walking.</p></li><li><p data-path-to-node="7,3,0"><b data-path-to-node="7,3,0" data-index-in-node="0">Quilted Comfort Footbed:</b> Engineered with a soft, diamond-quilted insole to provide plush cushioning and prevent foot fatigue.</p></li><li><p data-path-to-node="7,4,0"><b data-path-to-node="7,4,0" data-index-in-node="0">Traction-Enhanced Sole:</b> The durable outsole is designed with a specialized grip pattern to provide stability on smooth and slippery surfaces.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 795.0,
                'previous_price' => 895.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Women\'s Wedge Sandals,Black Thong Sandals,Floral Accent Ladies Shoes,Laser-Cut Wedge Sandals,Comfortable Party Wear Sandals,Ladies Casual Wedges,Black and Cream Sandals,Festive Wear for Women,Daily Wear Wedge Footwear,Elegant Thong Slides,Summer Sandals for Women,Cushioned Wedge Sandals,Trendy Ladies Footwear,Anti-Slip Wedge Shoes,Premium Quality Ladies Sandals.',
                'meta_description' => 'Women\'s Wedge Sandals, Black Thong Sandals, Floral Accent Ladies Shoes, Laser-Cut Wedge Sandals, Comfortable Party Wear Sandals, Ladies Casual Wedges, Black and Cream Sandals, Festive Wear for Women, Daily Wear Wedge Footwear, Elegant Thong Slides, Summer Sandals for Women, Cushioned Wedge Sandals, Trendy Ladies Footwear, Anti-Slip Wedge Shoes, Premium Quality Ladies Sandals.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","38","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 13:37:46',
                'updated_at' => '2026-02-18 10:57:15',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            20 => 
            array (
                'id' => 45,
                'category_id' => 2,
                'subcategory_id' => 7,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Women\'s Blush Radiance Pleated Ballerina',
                'slug' => 'womens-blush-radiance-pleated-ballerina',
                'sku' => 'A-2fdb',
                'code' => NULL,
                'tags' => 'Women\'s Party Ballerinas,Blush Pink Flat Shoes,Pointed Toe Ballerinas,Pleated Leather Flats,Ladies Formal Ballerinas,Rhinestone Embellished Flats,Elegant Party Wear Shoes,Comfortable Wedding Flats,Designer Style Ballerinas,Pink Festive Footwear,Premium Ladies Pumps,Slip-on Party Flats,Trendy Women\'s Shoes,Soft Cushioned Ballerinas,Anti-Slip Ladies Flats.',
                'photo' => 'OM_177131412676RLyDwr.jpg',
                'thumbnail' => 'OM_1771314126vv0MQJhz.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Effortless grace meets modern texture in these stunning pleated party ballerinas.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Formal / Party Wear Pointed-Toe Ballerina
</h3><h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="61">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="4,0,0" data-index-in-node="0">Upper:</b> Premium Micro-Pleated Synthetic Leather</li><li><ul></ul></li><li><b data-path-to-node="4,1,0" data-index-in-node="0">Outsole:</b> Ultra-Flexible, Anti-Slip TPR Rubber</li></ul><p data-path-to-node="5">Step into a world of refined elegance with these blush pink ballerinas, designed to be the crowning jewel of your festive wardrobe. Featuring a sophisticated pointed-toe silhouette and a unique micro-pleated texture, these shoes offer a high-fashion aesthetic inspired by boutique designer labels. The exquisite knotted front is highlighted by a delicate band of shimmering rhinestones, providing a subtle yet luxurious sparkle that catches the light with every step. Perfect for weddings, corporate events, or celebratory dinners, these ballerinas offer a polished look without the fatigue of high heels.</p><p data-path-to-node="6"><b data-path-to-node="6" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="7"><li><p data-path-to-node="7,0,0"><b data-path-to-node="7,0,0" data-index-in-node="0">Designer Pleated Texture:</b> The upper is crafted with fine, consistent pleats that provide a premium tactile feel and a modern, trendy look.</p></li><li><p data-path-to-node="7,1,0"><b data-path-to-node="7,1,0" data-index-in-node="0">Shimmering Stone Detail:</b> Features a crisscross rhinestone-encrusted band that adds a touch of jewelry-like brilliance to the neutral blush tone.</p></li><li><p data-path-to-node="7,2,0"><b data-path-to-node="7,2,0" data-index-in-node="0">Pointed-Toe Silhouette:</b> A sleek, elongated toe design that visually lengthens the legs and adds an instant executive touch to any outfit.</p></li><li><p data-path-to-node="7,3,0"><b data-path-to-node="7,3,0" data-index-in-node="0">Cushioned Heel Support:</b> Engineered with a soft, padded interior and a reinforced heel cup to ensure all-day comfort and prevent rubbing.</p></li><li><p data-path-to-node="7,4,0"><b data-path-to-node="7,4,0" data-index-in-node="0">Durable Traction Sole:</b> The slim, flexible rubber outsole is designed for long-lasting wear and provides excellent grip on polished surfaces.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 995.0,
                'previous_price' => 1095.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Women\'s Party Ballerinas,Blush Pink Flat Shoes,Pointed Toe Ballerinas,Pleated Leather Flats,Ladies Formal Ballerinas,Rhinestone Embellished Flats,Elegant Party Wear Shoes,Comfortable Wedding Flats,Designer Style Ballerinas,Pink Festive Footwear,Premium Ladies Pumps,Slip-on Party Flats,Trendy Women\'s Shoes,Soft Cushioned Ballerinas,Anti-Slip Ladies Flats.',
                'meta_description' => 'Women\'s Party Ballerinas, Blush Pink Flat Shoes, Pointed Toe Ballerinas, Pleated Leather Flats, Ladies Formal Ballerinas, Rhinestone Embellished Flats, Elegant Party Wear Shoes, Comfortable Wedding Flats, Designer Style Ballerinas, Pink Festive Footwear, Premium Ladies Pumps, Slip-on Party Flats, Trendy Women\'s Shoes, Soft Cushioned Ballerinas, Anti-Slip Ladies Flats.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Pink","38","37","36","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 13:42:06',
                'updated_at' => '2026-02-17 17:39:47',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            21 => 
            array (
                'id' => 46,
                'category_id' => 2,
                'subcategory_id' => 5,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Women\'s Radiant Glamour Stone-Encrusted Flat Sandals',
                'slug' => 'womens-radiant-glamour-stone-encrusted-flat-sandals',
                'sku' => 'A-2fe4',
                'code' => NULL,
                'tags' => 'Women\'s Party Flat Sandals,Stone-Studded Ladies Sandals,Elegant Festive Footwear,Laser-Cut Designer Sandals,Shimmering Ladies Slides,Comfortable Party Flats,Black and Champagne Sandals,Wedding Guest Footwear,Rhinestone Embellished Sandals,Trendy Ladies Flats,Ethnic Wear Sandals,Premium Quality Ladies Shoes,Gents Style Boutique Sandals,Shine-Finish Flat Sandals,Slip-Resistant Party Wear.',
                'photo' => 'OM_17713182999nqRN289.jpg',
                'thumbnail' => 'OM_1771318299Al4zwgGm.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Elegant low-profile sandals featuring a dazzling stone-studded laser-cut design for an effortless festive glow.',
                'details' => '<p data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Festive / Party Wear Flat Sandal</p><p data-path-to-node="3">
<b data-path-to-node="3" data-index-in-node="52">Material Details:</b></p><p></p><p><ul></ul></p><ul><li><b data-path-to-node="4,0,0" data-index-in-node="0">Upper:</b> Premium Shimmer-Finish Synthetic Leather with Laser-Cut Detailing</li><li><ul></ul></li><li><b data-path-to-node="4,1,0" data-index-in-node="0">Outsole:</b> Slip-Resistant, Durable TPR Rubber</li></ul><p data-path-to-node="5">Step into elegance with these exquisitely designed flat sandals, crafted for the woman who seeks both glamour and comfort. Featuring a sophisticated laser-cut upper inspired by organic lace patterns, this pair is heavily embellished with high-quality stones that shimmer beautifully under any light. The minimalist thong-style silhouette is elevated by a sleek champagne and black contrast, making it a versatile choice for weddings, evening parties, or festive celebrations. With a subtle block heel for stability, these sandals ensure you stay stylishly on your feet from day to night.</p><p data-path-to-node="6"><b data-path-to-node="6" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="7"><li><p data-path-to-node="7,0,0"><b data-path-to-node="7,0,0" data-index-in-node="0">Intricate Laser-Cut Artistry:</b> The upper features a unique, scalloped laser-cut design that provides a boutique-style, high-end aesthetic.</p></li><li><p data-path-to-node="7,1,0"><b data-path-to-node="7,1,0" data-index-in-node="0">Premium Stone Embellishment:</b> Dozens of micro-stones are meticulously placed across the straps to offer a premium, jewelry-like shine.</p></li><li><p data-path-to-node="7,2,0"><b data-path-to-node="7,2,0" data-index-in-node="0">Ergonomic Flat Silhouette:</b> Designed with a slight 0.5-inch block heel to provide better posture and support than completely flat footwear.</p></li><li><p data-path-to-node="7,3,0"><b data-path-to-node="7,3,0" data-index-in-node="0">Contrast Cushioned Insole:</b> Equipped with a soft, padded footbed in a neutral champagne tone to ensure all-day comfort for your soles.</p></li><li><p data-path-to-node="7,4,0"><b data-path-to-node="7,4,0" data-index-in-node="0">Anti-Slip Grip:</b> The durable outsole is engineered with a textured pattern to provide confident traction on smooth event floors like marble or tile.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 850.0,
                'previous_price' => 950.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Women\'s Party Flat Sandals,Stone-Studded Ladies Sandals,Elegant Festive Footwear,Laser-Cut Designer Sandals,Shimmering Ladies Slides,Comfortable Party Flats,Black and Champagne Sandals,Wedding Guest Footwear,Rhinestone Embellished Sandals,Trendy Ladies Flats,Ethnic Wear Sandals,Premium Quality Ladies Shoes,Gents Style Boutique Sandals,Shine-Finish Flat Sandals,Slip-Resistant Party Wear.',
                'meta_description' => 'Women\'s Party Flat Sandals, Stone-Studded Ladies Sandals, Elegant Festive Footwear, Laser-Cut Designer Sandals, Shimmering Ladies Slides, Comfortable Party Flats, Black and Champagne Sandals, Wedding Guest Footwear, Rhinestone Embellished Sandals, Trendy Ladies Flats, Ethnic Wear Sandals, Premium Quality Ladies Shoes, Gents Style Boutique Sandals, Shine-Finish Flat Sandals, Slip-Resistant Party Wear.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","38","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 14:51:39',
                'updated_at' => '2026-02-17 17:37:05',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            22 => 
            array (
                'id' => 47,
                'category_id' => 2,
                'subcategory_id' => 6,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Women\'s Blush Grace Butterfly Kitten Heels',
                'slug' => 'womens-blush-grace-butterfly-kitten-heels',
                'sku' => 'A-3bc4',
                'code' => NULL,
                'tags' => 'Women\'s Kitten Heels,Blush Pink Sandals,Butterfly Accent Heels,Party Wear Sandals for Women,Formal Ladies Footwear,Square Toe Heels,Pastel Pink Sandals,Comfortable Party Heels,Elegant Wedding Sandals,Ladies Dress Shoes,Shimmering Butterfly Sandals,Textured Leather Heels,Designer Style Sandals,Trendy Ladies Footwear,Festive Wear Sandals.',
                'photo' => 'OM_1771319278Id2QDiXT.jpg',
                'thumbnail' => 'OM_1771319278pNGFuNyl.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Elegant pastel kitten heels featuring a charming butterfly accent for a sophisticated feminine look.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Party / Formal Kitten Heel Sandal</h3><h3 data-path-to-node="4"><b data-path-to-node="4" data-index-in-node="0">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="5,0,0" data-index-in-node="0">Upper:</b> Premium Textured Synthetic Leather</li><li><ul></ul></li><li><b data-path-to-node="5,1,0" data-index-in-node="0">Outsole:</b> Non-slip, Durable Synthetic Rubber</li></ul><p data-path-to-node="6">Embrace timeless femininity with these stunning blush-toned kitten heels. Designed for elegance and all-day wearability, this pair features a delicately textured upper with a modern square-toe silhouette. The standout feature is a beautifully crafted circular emblem adorned with a shimmering crystal butterfly, adding a boutique-style finish to your ensemble. Whether you\'re attending a wedding, a festive celebration, or a formal dinner, these sandals provide the perfect balance of height and comfort to keep you graceful on your feet.</p><p data-path-to-node="7"><b data-path-to-node="7" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="8"><li><p data-path-to-node="8,0,0"><b data-path-to-node="8,0,0" data-index-in-node="0">Chic Kitten Heel:</b> The uniquely shaped, modest kitten heel offers a gentle lift while ensuring maximum stability and walking comfort.</p></li><li><p data-path-to-node="8,1,0"><b data-path-to-node="8,1,0" data-index-in-node="0">Artisanal Butterfly Accent:</b> Features a sparkling rhinestone-encrusted butterfly button that serves as a sophisticated focal point.</p></li><li><p data-path-to-node="8,2,0"><b data-path-to-node="8,2,0" data-index-in-node="0">Textured Linear Pattern:</b> The soft pastel upper is finished with a fine linear texture, giving the shoe a premium, high-end aesthetic.</p></li><li><p data-path-to-node="8,3,0"><b data-path-to-node="8,3,0" data-index-in-node="0">Secure Fit:</b> Designed with a slender ankle strap and an adjustable metallic buckle for a customized and secure fit.</p></li><li><p data-path-to-node="8,4,0"><b data-path-to-node="8,4,0" data-index-in-node="0">Padded Footbed:</b> Equipped with a soft, cushioned insole to prevent foot fatigue during long social events.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 890.0,
                'previous_price' => 990.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Women\'s Kitten Heels,Blush Pink Sandals,Butterfly Accent Heels,Party Wear Sandals for Women,Formal Ladies Footwear,Square Toe Heels,Pastel Pink Sandals,Comfortable Party Heels,Elegant Wedding Sandals,Ladies Dress Shoes,Shimmering Butterfly Sandals,Textured Leather Heels,Designer Style Sandals,Trendy Ladies Footwear,Festive Wear Sandals.',
                'meta_description' => 'Women\'s Kitten Heels, Blush Pink Sandals, Butterfly Accent Heels, Party Wear Sandals for Women, Formal Ladies Footwear, Square Toe Heels, Pastel Pink Sandals, Comfortable Party Heels, Elegant Wedding Sandals, Ladies Dress Shoes, Shimmering Butterfly Sandals, Textured Leather Heels, Designer Style Sandals, Trendy Ladies Footwear, Festive Wear Sandals.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Pink","38","37","36","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 15:07:58',
                'updated_at' => '2026-02-17 17:34:45',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            23 => 
            array (
                'id' => 48,
                'category_id' => 1,
                'subcategory_id' => 2,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Men\'s Executive Elite Textured Loafer',
                'slug' => 'mens-executive-elite-textured-loafer',
                'sku' => 'A-1aaa',
                'code' => NULL,
                'tags' => 'Men\'s Formal Loafers,Pebble Grain Leather Shoes,Black Penny Loafers,Gents Executive Shoes,Professional Slip-ons,Office Wear for Men,Textured Black Loafers,Smart Formal Footwear,Men\'s Dress Shoes,Premium Business Loafers,Comfortable Formal Shoes,Classic Black Moccasins,Men\'s Corporate Footwear,Trendy Office Shoes,Durable Formal Loafers.',
                'photo' => 'OM_17713226252LRQOFrA.jpg',
                'thumbnail' => 'OM_1771322625wTSvwrJA.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'A sophisticated essential for the modern professional, offering timeless style and premium texture.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Formal Loafer / Slip-on
</h3><h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="43">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="4,0,0" data-index-in-node="0">Upper:</b> Premium Pebble-Grain Synthetic Leather</li><li><ul></ul></li><li><b data-path-to-node="4,1,0" data-index-in-node="0">Outsole:</b> Flexible, Impact-Absorbing Textured Rubber</li></ul><p data-path-to-node="5">Redefine your professional wardrobe with these meticulously crafted black loafers. Featuring a distinct pebble-grain texture and a sleek, streamlined silhouette, these shoes offer a rich, tactile aesthetic that stands out in any boardroom. The elegant moc-toe stitching provides a sharp, clean look, while the soft interior ensures breathable comfort throughout the longest workdays. Whether paired with a tailored suit or smart trousers, these loafers represent the pinnacle of executive style and reliability.</p><p data-path-to-node="6"><b data-path-to-node="6" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="7"><li><p data-path-to-node="7,0,0"><b data-path-to-node="7,0,0" data-index-in-node="0">Pebble-Grain Finish:</b> The unique textured upper provides a high-end, luxury feel while offering increased resistance to visible scuffs and creases.</p></li><li><p data-path-to-node="7,1,0"><b data-path-to-node="7,1,0" data-index-in-node="0">Precision Stitching:</b> Features reinforced moccasin-style stitching for enhanced durability and a premium, hand-finished look.</p></li><li><p data-path-to-node="7,2,0"><b data-path-to-node="7,2,0" data-index-in-node="0">Ergonomic Slip-on Fit:</b> Designed for a secure yet flexible fit, allowing for easy wear without sacrificing formal structure.</p></li><li><p data-path-to-node="7,3,0"><b data-path-to-node="7,3,0" data-index-in-node="0">Impact-Absorbing Outsole:</b> The segmented rubber sole provides superior flexibility and a steady grip for both walking and driving.</p></li><li><p data-path-to-node="7,4,0"><b data-path-to-node="7,4,0" data-index-in-node="0">Breathable Interior:</b> Lined with high-quality materials to ensure airflow and comfort during extended wear.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1595.0,
                'previous_price' => 1695.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Men\'s Formal Loafers,Pebble Grain Leather Shoes,Black Penny Loafers,Gents Executive Shoes,Professional Slip-ons,Office Wear for Men,Textured Black Loafers,Smart Formal Footwear,Men\'s Dress Shoes,Premium Business Loafers,Comfortable Formal Shoes,Classic Black Moccasins,Men\'s Corporate Footwear,Trendy Office Shoes,Durable Formal Loafers.',
                'meta_description' => 'Men\'s Formal Loafers, Pebble Grain Leather Shoes, Black Penny Loafers, Gents Executive Shoes, Professional Slip-ons, Office Wear for Men, Textured Black Loafers, Smart Formal Footwear, Men\'s Dress Shoes, Premium Business Loafers, Comfortable Formal Shoes, Classic Black Moccasins, Men\'s Corporate Footwear, Trendy Office Shoes, Durable Formal Loafers.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 16:03:45',
                'updated_at' => '2026-02-17 17:31:45',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            24 => 
            array (
                'id' => 49,
                'category_id' => 1,
                'subcategory_id' => 4,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Men\'s Urban Comfort Suede Thong Sandals',
                'slug' => 'mens-urban-comfort-suede-thong-sandals',
                'sku' => 'A-1c8a',
                'code' => NULL,
                'tags' => 'Men\'s Thong Sandals,Casual Flip-Flops for Men,Suede Leather Sandals,Charcoal Brown Sandals,Daily Wear Flip-Flops,Lightweight Men\'s Sandals,Comfortable Thong Slides,Gents Summer Footwear,Beach Wear for Men,Soft Strap Sandals,Durable Men\'s Slides,Minimalist Men\'s Footwear,Anti-Slip Thong Sandals,Brown Casual Sandals,Premium Men\'s Flip-Flops.',
                'photo' => 'OM_1771322915h1MbdaSi.jpg',
                'thumbnail' => 'OM_1771322915zhNCUl4l.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Minimalist design meets rugged comfort for your everyday casual adventures.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Casual Thong Sandal / Flip-Flop</h3><h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="51">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="4,0,0" data-index-in-node="0">Upper:</b> Premium Soft Suede Synthetic Leather</li><li><ul></ul></li><li><b data-path-to-node="4,1,0" data-index-in-node="0">Outsole:</b> High-Density, Slip-Resistant EVA Rubber</li></ul><p data-path-to-node="5">Embrace a relaxed yet refined look with these essential charcoal brown thong sandals. Engineered for the modern man who values simplicity, this pair features a soft suede-finish strap that feels gentle against the skin while offering a rugged, earthy aesthetic. Whether you\'re heading to the beach, running errands, or enjoying a casual weekend at home, these sandals provide a lightweight and breathable experience. The clean silhouette and subtle contrast stitching make them a versatile staple that complements any casual outfit.</p><p data-path-to-node="6"><b data-path-to-node="6" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="7"><li><p data-path-to-node="7,0,0"><b data-path-to-node="7,0,0" data-index-in-node="0">Soft Suede Straps:</b> Crafted with a premium suede texture that minimizes friction and provides a luxurious, comfortable feel.</p></li><li><p data-path-to-node="7,1,0"><b data-path-to-node="7,1,0" data-index-in-node="0">Handcrafted Stitching Detail:</b> Features intricate, reinforced contrast stitching along the straps for added durability and a touch of artisanal style.</p></li><li><p data-path-to-node="7,2,0"><b data-path-to-node="7,2,0" data-index-in-node="0">Cushioned Footbed:</b> The ergonomic, textured footbed is designed to provide light arch support and all-day underfoot comfort.</p></li><li><p data-path-to-node="7,3,0"><b data-path-to-node="7,3,0" data-index-in-node="0">Traction-Ready Outsole:</b> The flat, durable rubber outsole features a specialized grip pattern to ensure stability on various surfaces.</p></li><li><p data-path-to-node="7,4,0"><b data-path-to-node="7,4,0" data-index-in-node="0">Ultra-Lightweight Build:</b> Specifically constructed to be exceptionally light, reducing foot fatigue during extended wear in warm weather.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 725.0,
                'previous_price' => 825.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Men\'s Thong Sandals,Casual Flip-Flops for Men,Suede Leather Sandals,Charcoal Brown Sandals,Daily Wear Flip-Flops,Lightweight Men\'s Sandals,Comfortable Thong Slides,Gents Summer Footwear,Beach Wear for Men,Soft Strap Sandals,Durable Men\'s Slides,Minimalist Men\'s Footwear,Anti-Slip Thong Sandals,Brown Casual Sandals,Premium Men\'s Flip-Flops.',
                'meta_description' => 'Men\'s Thong Sandals, Casual Flip-Flops for Men, Suede Leather Sandals, Charcoal Brown Sandals, Daily Wear Flip-Flops, Lightweight Men\'s Sandals, Comfortable Thong Slides, Gents Summer Footwear, Beach Wear for Men, Soft Strap Sandals, Durable Men\'s Slides, Minimalist Men\'s Footwear, Anti-Slip Thong Sandals, Brown Casual Sandals, Premium Men\'s Flip-Flops.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Chocolate","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 16:08:35',
                'updated_at' => '2026-02-17 17:28:11',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            25 => 
            array (
                'id' => 50,
                'category_id' => 1,
                'subcategory_id' => 2,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Men\'s Executive Heritage Leather Half-Loafer',
                'slug' => 'mens-executive-heritage-leather-half-loafer',
                'sku' => 'A-1da9',
                'code' => NULL,
                'tags' => 'Men\'s Brown Half Loafers,Formal Mules for Men,Mahogany Leather Slip-ons,Penny Loafer Mules,Gents Executive Half-Shoes,Easy-Wear Formal Footwear,Men\'s Office Mules,Professional Backless Loafers,Brown Semi-Formal Mules,Comfortable Dress Mules,Smart Casual Half Shoes,Breathable Formal Footwear,Men\'s Prayer Shoes,Trendy Men\'s Mules,Premium Brown Slides.',
                'photo' => 'OM_1771323096nY7Lmtyi.jpg',
                'thumbnail' => 'OM_1771323096I8FEP1DB.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'A sophisticated blend of traditional formality and modern slip-on convenience.',
            'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Formal / Semi-formal Half-Loafer (Mule)</h3><h3 data-path-to-node="3">
<b data-path-to-node="3" data-index-in-node="59">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="4,0,0" data-index-in-node="0">Upper:</b> Premium Textured Synthetic Leather</li><li><ul></ul></li><li><b data-path-to-node="4,1,0" data-index-in-node="0">Outsole:</b> Flexible, Anti-slip Synthetic Rubber</li></ul><p data-path-to-node="5">Elevate your professional attire with the effortless elegance of these Mahogany Brown half-loafers. Designed for the discerning gentleman, this pair features a rich, deep-toned upper with a refined grain texture that exudes executive class. The backless mule silhouette offers unparalleled ease for transitions between the office, social gatherings, or prayer, all while maintaining a sharp, polished look under trousers. With meticulous moc-toe stitching and a classic penny strap, these loafers are the ultimate solution for style-conscious individuals who prioritize both appearance and comfort.</p><p data-path-to-node="6"><b data-path-to-node="6" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="7"><li><p data-path-to-node="7,0,0"><b data-path-to-node="7,0,0" data-index-in-node="0">Rich Mahogany Finish:</b> The deep brown hue and subtle leather texture provide a high-end, versatile look that pairs perfectly with navy, grey, or earth-toned outfits.</p></li><li><p data-path-to-node="7,1,0"><b data-path-to-node="7,1,0" data-index-in-node="0">Effortless Slip-On Design:</b> The half-shoe construction allows for quick wear and removal without sacrificing a formal front-facing aesthetic.</p></li><li><p data-path-to-node="7,2,0"><b data-path-to-node="7,2,0" data-index-in-node="0">Classic Penny Strap Detail:</b> Features a traditional saddle strap across the vamp, adding a timeless touch of professional sophistication.</p></li><li><p data-path-to-node="7,3,0"><b data-path-to-node="7,3,0" data-index-in-node="0">Durable Moc-Toe Construction:</b> Reinforced pleated stitching ensures structural longevity and provides a classic, handcrafted feel.</p></li><li><p data-path-to-node="7,4,0"><b data-path-to-node="7,4,0" data-index-in-node="0">Contrast Comfort Sole:</b> The light-toned, textured outsole offers a modern visual contrast and reliable grip on smooth surfaces.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1550.0,
                'previous_price' => 1650.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Men\'s Brown Half Loafers,Formal Mules for Men,Mahogany Leather Slip-ons,Penny Loafer Mules,Gents Executive Half-Shoes,Easy-Wear Formal Footwear,Men\'s Office Mules,Professional Backless Loafers,Brown Semi-Formal Mules,Comfortable Dress Mules,Smart Casual Half Shoes,Breathable Formal Footwear,Men\'s Prayer Shoes,Trendy Men\'s Mules,Premium Brown Slides.',
                'meta_description' => 'Men\'s Brown Half Loafers, Formal Mules for Men, Mahogany Leather Slip-ons, Penny Loafer Mules, Gents Executive Half-Shoes, Easy-Wear Formal Footwear, Men\'s Office Mules, Professional Backless Loafers, Brown Semi-Formal Mules, Comfortable Dress Mules, Smart Casual Half Shoes, Breathable Formal Footwear, Men\'s Prayer Shoes, Trendy Men\'s Mules, Premium Brown Slides.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Chocolate","43","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 16:11:36',
                'updated_at' => '2026-02-17 17:24:14',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            26 => 
            array (
                'id' => 51,
                'category_id' => 1,
                'subcategory_id' => 2,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Men\'s Executive Pebble-Grain Formal Loafer',
                'slug' => 'mens-executive-pebble-grain-formal-loafer',
                'sku' => 'A-2a8d',
                'code' => NULL,
                'tags' => 'Men\'s Formal Loafers,Pebble Grain Leather Shoes,Black Penny Loafers,Gents Executive Shoes,Professional Slip-ons,Office Wear for Men,Textured Black Loafers,Smart Formal Footwear,Men\'s Dress Shoes,Premium Business Loafers,Comfortable Formal Shoes,Classic Black Moccasins,Men\'s Corporate Footwear,Trendy Office Shoes,Durable Formal Loafers.',
                'photo' => 'OM_17713232678pYgCubo.jpg',
                'thumbnail' => 'OM_1771323267m8Z4Jm6Q.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'A sophisticated essential for the modern professional, offering timeless style and premium texture.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Formal Loafer / Slip-on</h3><h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="43">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="4,0,0" data-index-in-node="0">Upper:</b> Premium Pebble-Grain Synthetic Leather</li><li><ul></ul></li><li><b data-path-to-node="4,1,0" data-index-in-node="0">Outsole:</b> Flexible, Impact-Absorbing Textured Rubber</li></ul><p data-path-to-node="5">Redefine your professional wardrobe with these meticulously crafted black loafers. Featuring a distinct pebble-grain texture and a classic penny-strap detail, these shoes offer a rich, tactile aesthetic that stands out in any boardroom. The streamlined silhouette and elegant moc-toe stitching provide a sharp, clean look, while the soft interior ensures breathable comfort throughout the longest workdays. Whether paired with a tailored suit or smart trousers, these loafers represent the pinnacle of executive style and reliability.</p><p data-path-to-node="6"><b data-path-to-node="6" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="7"><li><p data-path-to-node="7,0,0"><b data-path-to-node="7,0,0" data-index-in-node="0">Pebble-Grain Finish:</b> The unique textured upper provides a high-end, luxury feel while offering increased resistance to visible scuffs and creases.</p></li><li><p data-path-to-node="7,1,0"><b data-path-to-node="7,1,0" data-index-in-node="0">Refined Penny Strap:</b> Adorned with a traditional saddle strap that adds a layer of classic sophistication to the modern design.</p></li><li><p data-path-to-node="7,2,0"><b data-path-to-node="7,2,0" data-index-in-node="0">Precision Stitching:</b> Features reinforced moccasin-style stitching for enhanced durability and a premium, hand-finished look.</p></li><li><p data-path-to-node="7,3,0"><b data-path-to-node="7,3,0" data-index-in-node="0">Ergonomic Slip-on Fit:</b> Designed for a secure yet flexible fit, allowing for easy wear without sacrificing formal structure.</p></li><li><p data-path-to-node="7,4,0"><b data-path-to-node="7,4,0" data-index-in-node="0">Driver-Inspired Outsole:</b> The segmented rubber sole provides superior flexibility and a steady grip for both walking and driving.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1495.0,
                'previous_price' => 1595.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Men\'s Formal Loafers,Pebble Grain Leather Shoes,Black Penny Loafers,Gents Executive Shoes,Professional Slip-ons,Office Wear for Men,Textured Black Loafers,Smart Formal Footwear,Men\'s Dress Shoes,Premium Business Loafers,Comfortable Formal Shoes,Classic Black Moccasins,Men\'s Corporate Footwear,Trendy Office Shoes,Durable Formal Loafers.',
                'meta_description' => 'Men\'s Formal Loafers, Pebble Grain Leather Shoes, Black Penny Loafers, Gents Executive Shoes, Professional Slip-ons, Office Wear for Men, Textured Black Loafers, Smart Formal Footwear, Men\'s Dress Shoes, Premium Business Loafers, Comfortable Formal Shoes, Classic Black Moccasins, Men\'s Corporate Footwear, Trendy Office Shoes, Durable Formal Loafers.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","44","43","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 16:14:28',
                'updated_at' => '2026-02-17 17:22:26',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            27 => 
            array (
                'id' => 52,
                'category_id' => 1,
                'subcategory_id' => 2,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Men\'s Executive Elite Leather Half-Loafer',
                'slug' => 'mens-executive-elite-leather-half-loafer',
                'sku' => 'A-2be7',
                'code' => NULL,
                'tags' => 'Men\'s Half Loafers,Formal Mules for Men,Black Leather Slip-ons,Penny Loafer Mules,Gents Executive Footwear,Easy-Wear Formal Shoes,Men\'s Office Mules,Professional Backless Loafers,Black Semi-Formal Mules,Comfortable Dress Mules,Smart Casual Half Shoes,Breathable Formal Footwear,Men\'s Prayer Shoes,Trendy Men\'s Mules,Premium Black Slides.',
                'photo' => 'OM_17713244636dOKzhLp.jpg',
                'thumbnail' => 'OM_1771324463eso706UO.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'Redefine formal convenience with these sleek, slip-on half-loafers designed for effortless style.',
            'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Formal / Semi-formal Half-Loafer (Mule)
</h3><h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="59">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="4,0,0" data-index-in-node="0">Upper:</b> High-Grade Polished Synthetic Leather</li><li><ul></ul></li><li><b data-path-to-node="4,1,0" data-index-in-node="0">Outsole:</b> Lightweight, High-Traction Synthetic Rubber</li></ul><p data-path-to-node="5">Experience the perfect fusion of traditional executive aesthetics and modern ease. These Onyx Black half-loafers are crafted for the professional who values time and comfort without compromising on a sharp, authoritative appearance. Featuring a classic penny-loafer strap and sophisticated moc-toe stitching, this backless design allows for quick transitions while maintaining a full formal look under trousers. Whether it\'s a long day at the office or a prayer gathering, these mules offer the ultimate breathable alternative to standard dress shoes.</p><p data-path-to-node="6"><b data-path-to-node="6" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="7"><li><p data-path-to-node="7,0,0"><b data-path-to-node="7,0,0" data-index-in-node="0">Convenient Backless Design:</b> The mule-style silhouette allows for easy slip-on and off functionality, perfect for frequent transitions.</p></li><li><p data-path-to-node="7,1,0"><b data-path-to-node="7,1,0" data-index-in-node="0">Classic Penny Loafer Detail:</b> Features a traditional saddle strap across the vamp, providing a timeless and versatile formal aesthetic.</p></li><li><p data-path-to-node="7,2,0"><b data-path-to-node="7,2,0" data-index-in-node="0">Moc-Toe Craftsmanship:</b> Detailed pleated stitching around the toe box adds structural integrity and a refined touch of texture.</p></li><li><p data-path-to-node="7,3,0"><b data-path-to-node="7,3,0" data-index-in-node="0">Contoured Comfort Footbed:</b> Designed with a soft, padded insole to provide support and prevent foot fatigue during extended wear.</p></li><li><p data-path-to-node="7,4,0"><b data-path-to-node="7,4,0" data-index-in-node="0">Low-Profile Professional Sole:</b> The slim, flexible outsole offers a discreet lift and steady grip on office floors and smooth surfaces.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 950.0,
                'previous_price' => 1050.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Men\'s Half Loafers,Formal Mules for Men,Black Leather Slip-ons,Penny Loafer Mules,Gents Executive Footwear,Easy-Wear Formal Shoes,Men\'s Office Mules,Professional Backless Loafers,Black Semi-Formal Mules,Comfortable Dress Mules,Smart Casual Half Shoes,Breathable Formal Footwear,Men\'s Prayer Shoes,Trendy Men\'s Mules,Premium Black Slides.',
                'meta_description' => 'Men\'s Half Loafers, Formal Mules for Men, Black Leather Slip-ons, Penny Loafer Mules, Gents Executive Footwear, Easy-Wear Formal Shoes, Men\'s Office Mules, Professional Backless Loafers, Black Semi-Formal Mules, Comfortable Dress Mules, Smart Casual Half Shoes, Breathable Formal Footwear, Men\'s Prayer Shoes, Trendy Men\'s Mules, Premium Black Slides.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","43","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 16:34:23',
                'updated_at' => '2026-02-17 17:20:29',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            28 => 
            array (
                'id' => 53,
                'category_id' => 1,
                'subcategory_id' => 4,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Men\'s Premium Heritage Textured Leather Sandal',
                'slug' => 'mens-premium-heritage-textured-leather-sandal',
                'sku' => 'A-2ddc',
                'code' => NULL,
                'tags' => 'Men\'s Leather Sandals,Heritage Style Sandals,Cross-Strap Gents Footwear,Premium Casual Sandals,Brown Textured Sandals,Men\'s Semi-Formal Footwear,Daily Wear Leather Sandals,Distressed Leather Look,Smart Casual Sandals,Adjustable Heel Strap Sandals,Comfortable Men\'s Slides,Anti-Slip Men\'s Sandals,Boutique Style Footwear,Vintage Inspired Sandals,Men\'s Fashion 2026.',
                'photo' => 'OM_1771324752WhKzsOaB.jpg',
                'thumbnail' => 'OM_1771324752QrNcPJrk.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'A timeless blend of classic craftsmanship and rugged modern style.',
                'details' => '<h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="13">Type:</b> Semi-formal / Casual back-strap sandal
</h3><h3 data-path-to-node="3"><b data-path-to-node="3" data-index-in-node="58">Material Details:</b></h3><p></p><p><ul></ul></p><ul><li><b data-path-to-node="4,0,0" data-index-in-node="0">Upper:</b> Premium Textured Synthetic Leather</li><li><ul></ul></li><li><b data-path-to-node="4,1,0" data-index-in-node="0">Outsole:</b> Durable, Non-slip Vulcanized Rubber</li></ul><p data-path-to-node="5">Step into a world of sophisticated comfort with these heritage-inspired sandals. Featuring a unique distressed, burnished finish and an elegant cross-strap design, this pair captures a vintage aesthetic while maintaining a modern edge. Perfect for those who appreciate the finer details of craftsmanship, these sandals transition effortlessly from a day at the office to an evening social gathering. The deep, rich tones and metallic rivet accents offer a masculine look that pairs perfectly with both ethnic attire and casual western wear.</p><p data-path-to-node="6"><b data-path-to-node="6" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="7"><li><p data-path-to-node="7,0,0"><b data-path-to-node="7,0,0" data-index-in-node="0">Artisanal Finish:</b> The upper features a multi-tonal, textured patina that mimics the look of premium aged leather for a high-end boutique feel.</p></li><li><p data-path-to-node="7,1,0"><b data-path-to-node="7,1,0" data-index-in-node="0">Cross-Strap Stability:</b> The wide, overlapping strap construction provides superior foot stability and a secure, supportive grip.</p></li><li><p data-path-to-node="7,2,0"><b data-path-to-node="7,2,0" data-index-in-node="0">Secure Heel Support:</b> Equipped with a sturdy back-strap and an adjustable hook-and-loop closure to ensure a perfect fit for any foot shape.</p></li><li><p data-path-to-node="7,3,0"><b data-path-to-node="7,3,0" data-index-in-node="0">Metallic Accents:</b> Reinforced with polished metallic rivets that add both structural durability and a touch of rugged elegance.</p></li><li><p data-path-to-node="7,4,0"><b data-path-to-node="7,4,0" data-index-in-node="0">All-Terrain Grip:</b> The sleek black rubber outsole is designed with a specialized tread pattern for maximum traction on various surfaces.</p></li></ul><p></p>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1050.0,
                'previous_price' => 1150.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Men\'s Leather Sandals,Heritage Style Sandals,Cross-Strap Gents Footwear,Premium Casual Sandals,Brown Textured Sandals,Men\'s Semi-Formal Footwear,Daily Wear Leather Sandals,Distressed Leather Look,Smart Casual Sandals,Adjustable Heel Strap Sandals,Comfortable Men\'s Slides,Anti-Slip Men\'s Sandals,Boutique Style Footwear,Vintage Inspired Sandals,Men\'s Fashion 2026.',
                'meta_description' => 'Men\'s Leather Sandals, Heritage Style Sandals, Cross-Strap Gents Footwear, Premium Casual Sandals, Brown Textured Sandals, Men\'s Semi-Formal Footwear, Daily Wear Leather Sandals, Distressed Leather Look, Smart Casual Sandals, Adjustable Heel Strap Sandals, Comfortable Men\'s Slides, Anti-Slip Men\'s Sandals, Boutique Style Footwear, Vintage Inspired Sandals, Men\'s Fashion 2026.',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Brown","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 16:39:12',
                'updated_at' => '2026-02-17 17:17:49',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            29 => 
            array (
                'id' => 54,
                'category_id' => 1,
                'subcategory_id' => 4,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'Men\'s Premium Leather Semi-Formal Sandal',
                'slug' => 'mens-premium-leather-semi-formal-sandal',
                'sku' => 'A-2ef6',
                'code' => NULL,
                'tags' => 'Men\'s Leather Sandals,Semi-Formal Sandals for Men,Premium Casual Sandals,Brown Leather Slides,Gents Fashion Sandals,Smart Casual Footwear,Daily Wear Sandals,Office Casual Shoes,Adjustable Back-strap Sandals,Outdoor Summer Footwear,Cushioned Footbed Sandals,Anti-slip Rubber Sole,Lightweight Walking Sandals,Durable Synthetic Leather,Buckle Strap Design,Men\'s Comfort Sandals,Trendy Men\'s Footwear,Urban Style Sandals,Tan Brown Gents Sandal,Premium Quality Men\'s Shoes,Stylish Men\'s Sandals,Casual Leather Footwear.',
                'photo' => 'OM_1771324894DCFmB4c2.jpg',
                'thumbnail' => 'OM_1771324894J2ZfAtub.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'A perfect blend of rugged durability and modern semi-formal elegance.',
                'details' => '<p><!--[if gte mso 9]><xml>
<o:OfficeDocumentSettings>
<o:RelyOnVML/>
<o:AllowPNG/>
</o:OfficeDocumentSettings>
</xml><![endif]--><!--[if gte mso 9]><xml>
<w:WordDocument>
<w:View>Normal</w:View>
<w:Zoom>0</w:Zoom>
<w:TrackMoves/>
<w:TrackFormatting/>
<w:PunctuationKerning/>
<w:ValidateAgainstSchemas/>
<w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
<w:IgnoreMixedContent>false</w:IgnoreMixedContent>
<w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
<w:DoNotPromoteQF/>
<w:LidThemeOther>EN-US</w:LidThemeOther>
<w:LidThemeAsian>X-NONE</w:LidThemeAsian>
<w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
<w:Compatibility>
<w:BreakWrappedTables/>
<w:SnapToGridInCell/>
<w:WrapTextWithPunct/>
<w:UseAsianBreakRules/>
<w:DontGrowAutofit/>
<w:SplitPgBreakAndParaMark/>
<w:EnableOpenTypeKerning/>
<w:DontFlipMirrorIndents/>
<w:OverrideTableStyleHps/>
</w:Compatibility>
<m:mathPr>
<m:mathFont m:val="Cambria Math"/>
<m:brkBin m:val="before"/>
<m:brkBinSub m:val="&#45;-"/>
<m:smallFrac m:val="off"/>
<m:dispDef/>
<m:lMargin m:val="0"/>
<m:rMargin m:val="0"/>
<m:defJc m:val="centerGroup"/>
<m:wrapIndent m:val="1440"/>
<m:intLim m:val="subSup"/>
<m:naryLim m:val="undOvr"/>
</m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
<w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
DefSemiHidden="false" DefQFormat="false" DefPriority="99"
LatentStyleCount="376">
<w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
<w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
<w:LsdException Locked="false" Priority="9" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index 9"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 1"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 2"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 3"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 4"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 5"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 6"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 7"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 8"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" Name="toc 9"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footnote text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="header"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footer"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="index heading"/>
<w:LsdException Locked="false" Priority="35" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="caption"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="table of figures"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="envelope address"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="envelope return"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="footnote reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="line number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="page number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="endnote reference"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="endnote text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="table of authorities"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="macro"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="toa heading"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Bullet 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Number 5"/>
<w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Closing"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Signature"/>
<w:LsdException Locked="false" Priority="1" SemiHidden="true"
UnhideWhenUsed="true" Name="Default Paragraph Font"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="List Continue 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Message Header"/>
<w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Salutation"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Date"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text First Indent"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text First Indent 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Note Heading"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Body Text Indent 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Block Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Hyperlink"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="FollowedHyperlink"/>
<w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
<w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Document Map"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Plain Text"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="E-mail Signature"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Top of Form"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Bottom of Form"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal (Web)"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Acronym"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Address"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Cite"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Code"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Definition"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Keyboard"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Preformatted"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Sample"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Typewriter"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="HTML Variable"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Normal Table"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="annotation subject"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="No List"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Outline List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Simple 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Classic 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Colorful 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Columns 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Grid 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 4"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 5"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 7"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table List 8"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table 3D effects 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Contemporary"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Elegant"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Professional"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Subtle 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Subtle 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 1"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 2"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Web 3"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Balloon Text"/>
<w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Table Theme"/>
<w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
<w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
<w:LsdException Locked="false" Priority="61" Name="Light List"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
<w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
<w:LsdException Locked="false" Priority="34" QFormat="true"
Name="List Paragraph"/>
<w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
<w:LsdException Locked="false" Priority="30" QFormat="true"
Name="Intense Quote"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
<w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
<w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
<w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
<w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
<w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
<w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
<w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
<w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
<w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
<w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
<w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
<w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
<w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
<w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
<w:LsdException Locked="false" Priority="19" QFormat="true"
Name="Subtle Emphasis"/>
<w:LsdException Locked="false" Priority="21" QFormat="true"
Name="Intense Emphasis"/>
<w:LsdException Locked="false" Priority="31" QFormat="true"
Name="Subtle Reference"/>
<w:LsdException Locked="false" Priority="32" QFormat="true"
Name="Intense Reference"/>
<w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
<w:LsdException Locked="false" Priority="37" SemiHidden="true"
UnhideWhenUsed="true" Name="Bibliography"/>
<w:LsdException Locked="false" Priority="39" SemiHidden="true"
UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
<w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
<w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
<w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
<w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
<w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
<w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
<w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
<w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
<w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 1"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 2"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 3"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 4"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 5"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="46"
Name="Grid Table 1 Light Accent 6"/>
<w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
<w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
<w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
<w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
<w:LsdException Locked="false" Priority="51"
Name="Grid Table 6 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="52"
Name="Grid Table 7 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
<w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
<w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 1"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 1"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 2"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 2"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 3"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 3"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 4"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 4"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 5"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 5"/>
<w:LsdException Locked="false" Priority="46"
Name="List Table 1 Light Accent 6"/>
<w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
<w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
<w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
<w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
<w:LsdException Locked="false" Priority="51"
Name="List Table 6 Colorful Accent 6"/>
<w:LsdException Locked="false" Priority="52"
Name="List Table 7 Colorful Accent 6"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Mention"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Smart Hyperlink"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Hashtag"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Unresolved Mention"/>
<w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
Name="Smart Link"/>
</w:LatentStyles>
</xml><![endif]--><!--[if gte mso 10]>
<style>
/* Style Definitions */
table.MsoNormalTable
{mso-style-name:"Table Normal";
mso-tstyle-rowband-size:0;
mso-tstyle-colband-size:0;
mso-style-noshow:yes;
mso-style-priority:99;
mso-style-parent:"";
mso-padding-alt:0in 5.4pt 0in 5.4pt;
mso-para-margin-top:0in;
mso-para-margin-right:0in;
mso-para-margin-bottom:8.0pt;
mso-para-margin-left:0in;
line-height:107%;
mso-pagination:widow-orphan;
font-size:11.0pt;
font-family:"Calibri",sans-serif;
mso-ascii-font-family:Calibri;
mso-ascii-theme-font:minor-latin;
mso-hansi-font-family:Calibri;
mso-hansi-theme-font:minor-latin;
mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]-->

</p><p data-path-to-node="2"><b data-path-to-node="2" data-index-in-node="13">Type:</b> Semi-formal / Casual back-strap sandal
</p><p><b data-path-to-node="2" data-index-in-node="58">Material Details:</b></p><p></p><p><ul></ul></p><ul><li><b data-path-to-node="3,0,0" data-index-in-node="0">Upper:</b> High-Grade Premium Synthetic Leather</li><li><ul></ul></li><li><b data-path-to-node="3,1,0" data-index-in-node="0">Outsole:</b> Ultra-Lightweight, Slip-Resistant Phylon/Rubber Compound</li></ul><p data-path-to-node="4">Elevate your daily ensemble with this sophisticated coffee-brown sandal, designed for the man who refuses to compromise on style or comfort. Featuring a rich, matte-finish upper and contemporary dual-tone hardware, this pair seamlessly bridges the gap between relaxed weekend wear and smart-casual office attire. The ergonomic construction ensures a natural stride, while the adjustable heel strap provides a personalized, secure fit for all-day adventures.</p><p data-path-to-node="5"><b data-path-to-node="5" data-index-in-node="0">Key Features:</b></p><ul data-path-to-node="6"><li><p data-path-to-node="6,0,0"><b data-path-to-node="6,0,0" data-index-in-node="0">Contrast Hardware:</b> Features unique black and yellow-rimmed buckles that add a vibrant, modern touch to a classic silhouette.</p></li><li><p data-path-to-node="6,1,0"><b data-path-to-node="6,1,0" data-index-in-node="0">Ergonomic Footbed:</b> The contoured, chocolate-brown footbed is engineered to support the natural arch of the foot, reducing fatigue during long walks.</p></li><li><p data-path-to-node="6,2,0"><b data-path-to-node="6,2,0" data-index-in-node="0">Dual-Strap Support:</b> The wide-strap design ensures maximum grip and stability, keeping the foot comfortably in place.</p></li><li><p data-path-to-node="6,3,0"><b data-path-to-node="6,3,0" data-index-in-node="0">Advanced Sole Technology:</b> The thick, textured off-white outsole provides superior shock absorption and reliable traction on various urban surfaces.</p></li><li><p data-path-to-node="6,4,0"><b data-path-to-node="6,4,0" data-index-in-node="0">Versatile Styling:</b> The deep earthy tones make it an ideal match for denim, chinos, or traditional ethnic wear.</p></li></ul>',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1555.0,
                'previous_price' => 1655.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'Men\'s Leather Sandals,Semi-Formal Sandals for Men,Premium Casual Sandals,Brown Leather Slides,Gents Fashion Sandals,Smart Casual Footwear,Daily Wear Sandals,Office Casual Shoes,Adjustable Back-strap Sandals,Outdoor Summer Footwear,Cushioned Footbed Sandals,Anti-slip Rubber Sole,Lightweight Walking Sandals,Durable Synthetic Leather,Buckle Strap Design,Men\'s Comfort Sandals,Trendy Men\'s Footwear,Urban Style Sandals,Tan Brown Gents Sandal,Premium Quality Men\'s Shoes,Stylish Men\'s Sandals,Casual Leather Footwear.',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Brown","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-17 16:41:35',
                'updated_at' => '2026-02-17 17:14:46',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            30 => 
            array (
                'id' => 55,
                'category_id' => 1,
                'subcategory_id' => 2,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv',
                'sku' => 'A-2efc',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_1771395158Dv9u0BrN.jpg',
                'thumbnail' => 'OM_1771395158fuBGiuJs.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1395.0,
                'previous_price' => 1495.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","43","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-18 12:12:39',
                'updated_at' => '2026-02-18 12:12:39',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            31 => 
            array (
                'id' => 56,
                'category_id' => 1,
                'subcategory_id' => 4,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-1',
                'sku' => 'A-2f12',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_1771395412rl7GxcmY.jpg',
                'thumbnail' => 'OM_1771395412Wiz1aiIp.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 855.0,
                'previous_price' => 955.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-18 12:16:52',
                'updated_at' => '2026-02-18 12:16:52',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            32 => 
            array (
                'id' => 57,
                'category_id' => 1,
                'subcategory_id' => 4,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-2',
                'sku' => 'A-2f13',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_1771395516gqqVhBB6.jpg',
                'thumbnail' => 'OM_1771395516iQNyO1wb.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 855.0,
                'previous_price' => 955.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Brown","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'feature',
                'created_at' => '2026-02-18 12:18:37',
                'updated_at' => '2026-02-18 12:18:37',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            33 => 
            array (
                'id' => 58,
                'category_id' => 1,
                'subcategory_id' => 4,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-3',
                'sku' => 'A-3b66',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_1771395928u4ZXyKUI.jpg',
                'thumbnail' => 'OM_17713959282STiZCMw.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1195.0,
                'previous_price' => 1295.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Chocolate","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'new',
                'created_at' => '2026-02-18 12:25:28',
                'updated_at' => '2026-02-18 12:25:28',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            34 => 
            array (
                'id' => 59,
                'category_id' => 1,
                'subcategory_id' => 4,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-4',
                'sku' => 'A-3bec',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_1771396073hfByJ408.jpg',
                'thumbnail' => 'OM_1771396073ZLvf6c51.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1050.0,
                'previous_price' => 1150.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Chocolate","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'new',
                'created_at' => '2026-02-18 12:27:54',
                'updated_at' => '2026-02-18 12:27:54',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            35 => 
            array (
                'id' => 60,
                'category_id' => 1,
                'subcategory_id' => 4,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-5',
                'sku' => 'A-3c51',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_17713963456lGgOQEu.jpg',
                'thumbnail' => 'OM_1771396345OgRjwIGK.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 695.0,
                'previous_price' => 795.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Chocolate","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'new',
                'created_at' => '2026-02-18 12:32:26',
                'updated_at' => '2026-02-18 12:32:26',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            36 => 
            array (
                'id' => 61,
                'category_id' => 1,
                'subcategory_id' => 4,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-6',
                'sku' => 'A-3c87',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_1771396514QLHEEWWJ.jpg',
                'thumbnail' => 'OM_1771396514dURKJt8W.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1495.0,
                'previous_price' => 1595.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Chocolate","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'new',
                'created_at' => '2026-02-18 12:35:14',
                'updated_at' => '2026-02-18 12:35:14',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            37 => 
            array (
                'id' => 62,
                'category_id' => 1,
                'subcategory_id' => 4,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-7',
                'sku' => 'A-3ccb',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_1771397206FOna8I7s.jpg',
                'thumbnail' => 'OM_1771397206kmwQDdxD.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1455.0,
                'previous_price' => 1555.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'new',
                'created_at' => '2026-02-18 12:46:46',
                'updated_at' => '2026-02-18 12:46:46',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            38 => 
            array (
                'id' => 63,
                'category_id' => 1,
                'subcategory_id' => 2,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-8',
                'sku' => 'A-3e9e',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_1771397299SKjO5C3Y.jpg',
                'thumbnail' => 'OM_1771397299beITz4Cu.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1595.0,
                'previous_price' => 1695.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'new',
                'created_at' => '2026-02-18 12:48:20',
                'updated_at' => '2026-02-18 12:48:20',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            39 => 
            array (
                'id' => 64,
                'category_id' => 1,
                'subcategory_id' => 3,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-9',
                'sku' => 'A-3f4b',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_17713974626fHjtKun.jpg',
                'thumbnail' => 'OM_1771397462kJ4ifbud.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 2450.0,
                'previous_price' => 2550.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Brown","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'new',
                'created_at' => '2026-02-18 12:51:02',
                'updated_at' => '2026-02-18 12:51:02',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            40 => 
            array (
                'id' => 65,
                'category_id' => 1,
                'subcategory_id' => 3,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-10',
                'sku' => 'A-4a86',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_177139762553Wok3TQ.jpg',
                'thumbnail' => 'OM_1771397625AdoPEXQb.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1950.0,
                'previous_price' => 2050.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Chocolate","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'new',
                'created_at' => '2026-02-18 12:53:46',
                'updated_at' => '2026-02-18 12:53:46',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            41 => 
            array (
                'id' => 66,
                'category_id' => 1,
                'subcategory_id' => 3,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-11',
                'sku' => 'A-4a87',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_1771397735q4bauKm0.jpg',
                'thumbnail' => 'OM_17713977354vmGpCvh.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1950.0,
                'previous_price' => 2050.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'new',
                'created_at' => '2026-02-18 12:55:35',
                'updated_at' => '2026-02-18 12:55:35',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            42 => 
            array (
                'id' => 67,
                'category_id' => 1,
                'subcategory_id' => 4,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-12',
                'sku' => 'A-21bf',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_1771397889w8GBDmic.jpg',
                'thumbnail' => 'OM_1771397889wwcsvR2m.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 695.0,
                'previous_price' => 795.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'top',
                'created_at' => '2026-02-18 12:58:09',
                'updated_at' => '2026-02-18 12:58:09',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            43 => 
            array (
                'id' => 68,
                'category_id' => 1,
                'subcategory_id' => 4,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-13',
                'sku' => 'A-22bb',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_1771397996P72mMwXh.jpg',
                'thumbnail' => 'OM_1771397996IT2Y3zH6.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 925.0,
                'previous_price' => 1025.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'top',
                'created_at' => '2026-02-18 12:59:57',
                'updated_at' => '2026-02-18 12:59:57',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            44 => 
            array (
                'id' => 69,
                'category_id' => 1,
                'subcategory_id' => 2,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-14',
                'sku' => 'A-22cd',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_1771398236e6wJjJAH.jpg',
                'thumbnail' => 'OM_1771398236QzH0Gt0c.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1555.0,
                'previous_price' => 1655.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'top',
                'created_at' => '2026-02-18 13:03:56',
                'updated_at' => '2026-02-18 13:03:56',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
            45 => 
            array (
                'id' => 70,
                'category_id' => 1,
                'subcategory_id' => 2,
                'childcategory_id' => NULL,
                'tax_id' => 3,
                'brand_id' => 1,
                'name' => 'fdfv',
                'slug' => 'fdfv-15',
                'sku' => 'A-24b2',
                'code' => NULL,
                'tags' => 'fe',
                'photo' => 'OM_1771398425mNcsMAc9.jpg',
                'thumbnail' => 'OM_1771398425qUTBEAvi.jpg',
                'video' => NULL,
                'file' => NULL,
                'file_type' => NULL,
                'link' => NULL,
                'sort_details' => 'cc dcf',
                'details' => 'vfgr',
                'specification_name' => NULL,
                'specification_description' => NULL,
                'is_specification' => 0,
                'discount_price' => 1595.0,
                'previous_price' => 1695.0,
                'stock' => 0,
                'license_name' => NULL,
                'license_key' => NULL,
                'item_type' => 'normal',
                'affiliate_link' => NULL,
                'meta_keywords' => 'dfd',
                'meta_description' => 'cvdf',
                'is_variant' => 1,
                'variant_option' => '["Color","Size"]',
                'variant_value' => '["Black","42","41","40","39"]',
                'status' => 1,
                'date' => NULL,
                'is_type' => 'top',
                'created_at' => '2026-02-18 13:07:06',
                'updated_at' => '2026-02-18 13:07:06',
                'deleted_at' => NULL,
                'deleted_by' => NULL,
            ),
        ));
        
        
    }
}