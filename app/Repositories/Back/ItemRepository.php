<?php

namespace App\Repositories\Back;

use App\{
    Models\Item,
    Models\Color,
    Models\Size,
    Models\Variant,
    Models\ItemVariant,
    Helpers\ImageHelper
};
use App\Models\Currency;

class ItemRepository
{

    /**
     * Store item.
     *
     * @param  \App\Http\Requests\ItemRequest  $request
     * @return void
     */

    public function store($request)
    {
        
        $input = $request->all();
        if ($file = $request->file('photo')) {
            $images_name = ImageHelper::ItemhandleUploadedImage($request->file('photo'),'items');

            $input['photo'] = $images_name[0];
            $input['thumbnail'] = $images_name[1];
        }

        $curr = Currency::where('is_default',1)->first();
        $input['discount_price'] = $request->discount_price / $curr->value;
        $input['previous_price'] = $request->previous_price / $curr->value;

        if($request->has('meta_keywords')){
            $input['meta_keywords'] = str_replace(["value", "{", "}", "[","]",":","\""], '', $request->meta_keywords);
        }

        if($request->has('is_social')){
            $input['social_icons'] = json_encode($input['social_icons']);
            $input['social_links'] = json_encode($input['social_links']);
        }else{
            $input['is_social']    = 0;
            $input['social_icons'] = null;
            $input['social_links'] = null;
        }

        if($request->has('tags')){
            $input['tags'] = str_replace(["value", "{", "}", "[","]",":","\""], '', $request->tags);
        }

        if($request->has('is_specification')){
            $input['specification_name'] = json_encode($input['specification_name']);
            $input['specification_description'] = json_encode($input['specification_description']);
        }else{
            $input['is_specification']    = 0;
            $input['specification_name'] = null;
            $input['specification_description'] = null;
        }

        if($request->has('license_name') && $request->has('license_key')){
            $input['license_name'] = json_encode($input['license_name']);
            $input['license_key'] = json_encode($input['license_key']);
        }else{
            $input['license_name'] = null;
            $input['license_key'] = null;
        }

        // digital product file upload
        if($request->item_type == 'digital'){
            if($request->hasFile('file')){
                $file = $request->file;
                $name = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/files',$name);
                $input['file'] = $name;
            }
        }

        if($request->item_type == 'license'){
            if($request->hasFile('file')){
                $file = $request->file;
                $name = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/files',$name);
                $input['file'] = $name;
            }
        }


        $input['is_type'] = $request->is_type;

        // Detect if product has variants
        $hasVariants = isset($input['variants']) && count($input['variants']) > 0;

        if ($hasVariants) {
            $input['is_variant'] = 1;

            // Store variant option names (Color, Size)
            $variantOptions = [];
            if (!empty($input['colors'])) {
                $variantOptions[] = 'Color';
            }
            if (!empty($input['sizes'])) {
                $variantOptions[] = 'Size';
            }

            $input['variant_option'] = json_encode($variantOptions);

            // Store variant values (like Red, Blue, 42, 43)
            $variantValues = array_merge($input['colors'] ?? [], $input['sizes'] ?? []);
            $input['variant_value'] = json_encode($variantValues);
        } else {
            $input['is_variant'] = 0;
            $input['variant_option'] = null;
            $input['variant_value'] = null;
        }

        $item = Item::create($input);

        if(isset($input['galleries'])){
            $this->galleriesUpdate($request,$item->id);
        }

        // If product has variants
        if ($hasVariants) {
            foreach ($input['variants'] as $position => $variant) {

                $colorId = null;
                $sizeId = null;

                if (!empty($variant['color']) && !empty($input['colors'])) {
                    $colorId = Color::where('name', $variant['color'])->value('id');
                }

                if (!empty($variant['size']) && !empty($input['sizes'])) {
                    $sizeId = Size::where('name', $variant['size'])->value('id');
                }

                $variantModel = Variant::firstOrCreate(
                    [
                        'name' => $variant['name'],
                        'color_id' => $colorId,
                        'size_id'  => $sizeId,
                    ]
                );

                ItemVariant::create([
                    'item_id'          => $item->id,
                    'variant_sku'      => $variant['variant_sku'],
                    'variant_id'       => $variantModel->id,
                    'position'         => $position + 1,
                    'item_code'        => $variant['item_code'] ?? ($variant['name'] . '/' . $item->sku),
                    'additional_cost'  => $variant['additional_cost'] ?? 0,
                    'additional_price' => $variant['additional_price'] ?? 0,
                    'qty'              => $variant['qty'] ?? 0,
                ]);
            }
        }

        return $item->id;

    }

    /**
     * Update item.
     *
     * @param  \App\Http\Requests\ItemRequest  $request
     * @return void
     */

    public function update($item,$request)
    {
        $input = $request->all();

        if ( $request->file('photo')) {

            $images_name = ImageHelper::ItemhandleUpdatedUploadedImage($request->photo,'items',$item,'items','photo');
            $input['photo'] = $images_name[0];
            $input['thumbnail'] = $images_name[1];
        }


        if($request->has('meta_keywords')){
            $input['meta_keywords'] = str_replace(["value", "{", "}", "[","]",":","\""], '', $request->meta_keywords);
        }

        $curr = Currency::where('is_default',1)->first();
        $input['discount_price'] = $request->discount_price / $curr->value;
        $input['previous_price'] = $request->previous_price / $curr->value;


        if($request->has('is_social')){
            $input['social_icons'] = json_encode($input['social_icons']);
            $input['social_links'] = json_encode($input['social_links']);
        }else{
            $input['is_social']    = 0;
            $input['social_icons'] = null;
            $input['social_links'] = null;
        }

        if($request->has('tags')){
            $input['tags'] = str_replace(["value", "{", "}", "[","]",":","\""], '', $request->tags);
        }

        if($request->has('is_specification')){
            $input['specification_name'] = json_encode($input['specification_name']);
            $input['specification_description'] = json_encode($input['specification_description']);
        }else{
            $input['is_specification']    = 0;
            $input['specification_name'] = null;
            $input['specification_description'] = null;
        }

        if($request->has('license_name') && $request->has('license_key')){
            $input['license_name'] = json_encode($input['license_name']);
            $input['license_key'] = json_encode($input['license_key']);
        }else{
            $input['license_name'] = null;
            $input['license_key'] = null;
        }


        if($request->item_type == 'digital'){
            if(!$request->hasFile('file')){
                if($request->link){
                    if(file_exists('assets/files/'.$item->file)){
                        unlink('assets/files/'.$item->file);
                    }
                    $input['file'] = null;
                }
            }
        }
        // digital product file upload
        if($request->item_type == 'digital'){
            if($request->hasFile('file')){
                if($item->file){
                    if(file_exists('assets/files/'.$item->file)){
                        unlink('assets/files/'.$item->file);
                    }
                }

                $file = $request->file;
                $name = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/files',$name);
                $input['file'] = $name;
                $input['link'] = null;
            }
        }

        $item->update($input);
        if(isset($input['galleries'])){
            $this->galleriesUpdate($request,$item->id);
        }
    }

    public function highlight($item,$request)
    {
        $input = $request->all();
        if($request->is_type != 'flash_deal'){
            $input['date'] = null;
        }
        $item->update($input);
    }

    /**
     * Delete item.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($item)
    {
        if($item->galleries()->count() > 0){
            foreach($item->galleries as $gallery){
                $this->galleryDelete($gallery);
            }
        }

        if($item->campaigns->count() > 0){
            $item->campaigns()->delete();
        }
        if($item->reviews->count() > 0){
            $item->reviews()->delete();
        }

        if($item->attributes()->count() > 0){
            foreach($item->attributes as $attribute){
                $attribute->options()->delete();
            }
            $item->attributes()->delete();
        }

        ImageHelper::handleDeletedImage($item,'photo','items');
        ImageHelper::handleDeletedImage($item,'thumbnail','items');
        if($item->item_type == 'digital' && $item->file){
            ImageHelper::handleDeletedImage($item,'file','items');
        }
        $item->delete();
    }

    /**
     * Update gallery.
     *
     * @param  \App\Http\Requests\GalleryRequest  $request
     * @return void
     */

    public function galleriesUpdate($request,$item_id=null)
    {
        Gallery::insert($this->storeImageData($request,$item_id));
    }

    /**
     * Delete gallery.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function galleryDelete($gallery)
    {
        ImageHelper::handleDeletedImage($gallery,'photo','items');
        $gallery->delete();
    }

    /**
     * Custom Function.
     * @return void
     */

    public function storeImageData($request,$item_id=null)
    {
        $storeData = [];
        if ($galleries = $request->file('galleries')) {
            foreach($galleries as $key => $gallery){
                $storeData[$key] = [
                    'photo'=>  ImageHelper::handleUploadedImage($gallery,'items'),
                    'item_id' => $item_id ? $item_id : $request['item_id'],
                ];
            }
        }
        return $storeData;
    }

}
