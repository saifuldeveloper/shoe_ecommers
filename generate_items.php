<?php

for ($i = 1; $i <= 30; $i++) {
    $sku = "SKU" . str_pad($i, 4, '0', STR_PAD_LEFT);
    $discountPrice = rand(100, 200);
    $previousPrice = $discountPrice + rand(10, 50);
    $stock = rand(5, 20);

    echo "[
        'category_id' => 1,
        'subcategory_id' => 2,
        'childcategory_id' => null,
        'tax_id' => 3,
        'brand_id' => 2,
        'name' => 'Air Jordan Retro {$i}',
        'slug' => Str::slug(\"Air Jordan Retro {$i}\"),
        'sku' => '{$sku}',
        'code' => null,
        'tags' => 'sneaker, shoes',
        'photo' => \"seeder/product{$i}.jpeg\",
        'thumbnail' => \"seeder/thumb{$i}.jpeg\",
        'video' => null,
        'file' => null,
        'file_type' => null,
        'link' => null,
        'sort_details' => 'Short description of product {$i}',
        'details' => '<p>Details of product {$i}</p>',
        'specification_name' => '[null]',
        'specification_description' => '[null]',
        'is_specification' => 1,
        'discount_price' => {$discountPrice},
        'previous_price' => {$previousPrice},
        'stock' => {$stock},
        'license_name' => null,
        'license_key' => null,
        'item_type' => 'normal',
        'affiliate_link' => null,
        'meta_keywords' => 'air jordan, shoes',
        'meta_description' => 'Meta description for product {$i}',
        'is_variant' => 0,
        'variant_option' => null,
        'variant_value' => null,
        'status' => 1,
        'date' => now(),
        'is_type' => 'undefined',
        'created_at' => now(),
        'updated_at' => now(),
    ],\n";
}
