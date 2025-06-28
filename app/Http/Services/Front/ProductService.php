<?php
namespace App\Http\Services\Front;

use App\Models\admin\Product;

class ProductService{
    public function getProductBySlug($slug){
        $product = Product::
        with('brand','category','images','ProductPreviews')
        ->where('slug',$slug)
        ->active()
        ->first();
        return $product;
    }

    public function getRelatedProductBySlug($slug,$limit = null){
        //dd($slug);
        $categoryId = Product::where('slug',$slug)->first()->category_id;
        $products = Product::query()->with('brand','category','images')
        ->active()
        ->where('category_id',$categoryId)
        ->select('id','name','slug','price','category_id','brand_id','has_variant','price','has_discount','discount')
        ->latest();
        if($limit){
            return $products->paginate($limit);
           }else{
            return $products->paginate(12);
           }
    }

    public function getNewArrivalsProducts($limit = null){
       $products = Product::query()->with('brand','category','images')
       ->active()
       ->select('id','name','slug','price','category_id','brand_id','has_variant','price','has_discount','discount')
       ->latest();
       if($limit){
        return $products->paginate($limit);
       }else{
        return $products->paginate(12);
       }
    }

    public function getFlashProducts($limit = null){
        $products = Product::with('brand','category','images')
       ->active()
       ->where('has_discount',1)
       ->select('id','name','slug','price','category_id','brand_id','has_variant','price','has_discount','discount')
       ->latest();
       if($limit){
        return $products->paginate($limit);
       }else{
        return $products->paginate(12);
       }
    }
    public function getFlashProductsWithTimer($limit = null){
        $products = Product::with('brand','category','images')
        ->active()
        ->where('available_for',date('Y-m-d'))->whereNotNull('available_for')
        ->where('has_discount',1)
        ->select('id','name','slug','price','category_id','brand_id','has_variant','price','has_discount','discount')
        ->latest();
        if($limit){
            return $products->paginate($limit);
           }else{
            return $products->paginate(12);
           }
    }
}
