<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function createProduct(Request $request){
        if(!Auth::check() or Auth::user()->status == 'blocked')return ['status'=>'Error, you can\'t do this'];
//        return isset($request->images);
        if(isset($request->name) && isset($request->description) && isset($request->price) && isset($request->link) && isset($request->category) && $request->hasFile('images')){
//            return 2;
            if(strlen($request->name) > 255)return ['status' => 'error'];
            if(strlen($request->description) > 10000)return ['status' => 'error'];
            if(!is_numeric($request->price) or $request->price < 0)return ['status' => 'error'];
            if(!is_numeric($request->category) or $request->category <= 0)return ['status' => 'error'];
            if(isset($request->sale)){
                if(!is_numeric($request->sale) or $request->sale < 0 or $request->sale > 100) return ['status' => 'error'];
            }
            if(!is_array($request->images)) return ['status' => 'error'];
            $imageextensions = '';
            foreach($request->images as $image){
                if(!in_array($image->extension(),['png','jpg','jpeg','gif','svg'])){
                    return ['status' => 'error'];
                }
                else{
                    $imageextensions.=$image->extension().',';
                }
            }
            $imageextensions = substr($imageextensions, 0, -1);

            $newproduct = new Product;
            $newproduct->userId=Auth::user()->id;
            $newproduct->title=$request->name;
            $newproduct->price=$request->price;
            $newproduct->description=$request->description;
            $newproduct->category=$request->category;
            $newproduct->sale=(isset($request->sale) ? $request->sale : 0);
            $newproduct->link=$request->link;
            $newproduct->imagecount = count($request->images);
            $newproduct->status = Auth::user()->role == 'admin' ? 'approved' : 'queue';
            $newproduct->imageextensions = $imageextensions;
            $newproduct->save();

            $imagecounter = 1;
            foreach($request->images as $image){
                $image->move(public_path('images/product'),$newproduct->id.'_'.$imagecounter.'.'.$image->extension());
                $imagecounter++;
            }

            return ['status' => 'success'];
        }
        return ['status'=>'error'];
    }
public function changeProductWithoutImages(Request $request){
    if(!Auth::check() or Auth::user()->status == 'blocked')return ['status'=>'Error, you can\'t do this'];
//        return isset($request->images);

    if(isset($request->name) && isset($request->description) && isset($request->price) && isset($request->link) && isset($request->category) && isset($request->id)){
//            return 2;
        if(strlen($request->name) > 255)return ['status' => 'error'];
        if(strlen($request->description) > 10000)return ['status' => 'error'];
        if(!is_numeric($request->price) or $request->price < 0)return ['status' => 'error'];
        if(!is_numeric($request->category) or $request->category <= 0)return ['status' => 'error'];
        if(isset($request->sale)){
            if(!is_numeric($request->sale) or $request->sale < 0 or $request->sale > 100) return ['status' => 'error'];
        }
//        if(!is_array($request->images)) return ['status' => 'error'];
//        $imageextensions = '';
//        foreach($request->images as $image){
//            if(!in_array($image->extension(),['png','jpg','jpeg','gif','svg'])){
//                return ['status' => 'error'];
//            }
//            else{
//                $imageextensions.=$image->extension().',';
//            }
//        }
//        $imageextensions = substr($imageextensions, 0, -1);

        $product = Product::where('id','=',$request->id)->where('userId','=',Auth::user()->id)->first();
        if($product == null){
            return ['status' => 'error'];
        }

        $product->title=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->category=$request->category;
        $product->sale=(isset($request->sale) ? $request->sale : 0);
        $product->link=$request->link;
        $product->status = Auth::user()->role == 'admin' ? 'approved' : 'queue';
        $product->save();

        return ['status' => 'success'];
    }
    return ['status'=>'error'];
}
//    public function editProduct(Request $request){
//        if(!Auth::check() or Auth::user()->status == 'blocked' or Auth::user()->role != 'user')return ['status'=>'Error, you can\'t do this'];
//        if(isset($request->title) && isset($request->description) && isset($request->price) && isset($request->link) && isset($request->category) && $request->hasFile('mainImage')){
//            if(strlen($request->title) > 255)return ['status' => 'error'];
//            if(strlen($request->description) > 10000)return ['status' => 'error'];
//            if(!is_numeric($request->price) or $request->price < 0)return ['status' => 'error'];
//            if(!is_numeric($request->category) or $request->category <= 0)return ['status' => 'error'];
//            if(isset($request->sale)){
//                if(!is_numeric($request->sale) or $request->sale < 0 or $request->sale > 100) return ['status' => 'error'];
//            }
//            $mainImageext = $request->mainImage->extension();
//            if(!in_array($mainImageext,['png','jpg','jpeg','gif','svg'])){
//                return ['status' => 'error'];
//            }
//
//            $newproduct = new Product;
//            $newproduct->userId=Auth::user()->id;
//            $newproduct->title=$request->tite;
//            $newproduct->price=$request->price;
//            $newproduct->description=$request->description;
//            $newproduct->category=$request->category;
//            $newproduct->sale=(isset($request->sale) ? $request->sale : 0);
//            $newproduct->link=$request->link;
//            $newproduct->save();
//
//            $request->mainImage->move(public_path('images/product'),$newproduct->id.'_mainImage_'.$request->mainImage->extension());
//              return ['status' => 'success'];
//        }
//    }


    public function deleteProduct($id){

        if(!Auth::check() or Auth::user()->status == 'blocked')return ['status'=>'error'];

        $product = Product::where('id','=',(int)$id)->where('userId','=',Auth::user()->id)->where('status','!=','deleted')->where('status', '!=', 'removedByUser')->first();
        if($product != null){
            $product->status='removedByUser';
            $product->save();
            return ['status'=>'success'];
        }
        return ['status'=>'error'];
    }

    public function restoreProduct($id){
        if(!Auth::check() or Auth::user()->status == 'blocked' or Auth::user()->role != 'user')return ['status'=>'error'];
        $product = Product::where('id','=',(int)$id)->where('userId','=',Auth::user()->id)->where('status','=','removedByUser')->first();
        if($product != null){
            $product->status='queue';
            $product->save();
            return ['status'=>'success'];
        }
        return ['status'=>'error'];
    }

    public function getProductsByCategoryId($id){
        $products = DB::table('products')->join('users', 'users.id','=','products.userId')->select('products.*','users.name')->where('products.category','=',$id)->where('products.status','=','approved')->get();
        if($products != '[]') {
            foreach($products as $product){
                $product->imageextensions =  explode(',', $product->imageextensions);
                $product->liked = false;
            }
            return $products;
        }
        return 'No products';
    }

    public function getProductsByCategoryIdLiked($id){
//        $products = DB::table('products')->join('users', 'users.id','=','products.userId')->where('products.status','=','approved')->join('categories','products.category','=','categories.id')->where('products.category','=',$id)->orWhere('categories.parentCategory','=',$id)->select('products.*','users.name','categories.categoryname')->get();
        $products = DB::table('products')->join('users', 'users.id','=','products.userId')->where('products.status','=','approved')->join('categories','products.category','=','categories.id');
        $products = $products->where(function($query) use ($id){
           $query->where('products.category','=',$id)->orWhere('categories.parentCategory','=',$id);
        })->select('products.*','users.name','categories.categoryname')->get();
        if($products != '[]') {
            if(Auth::check()){
                $likes = Like::where('userId','=',Auth::user()->id)->get();
                if($likes != '[]'){

                    foreach($products as $product){
//                    $product->liked = $likes::where('productId','=',$product->id)->first()->status ?? false;
                        $product->liked = false;
                        $product->imageextensions =  explode(',', $product->imageextensions);
                        foreach($likes as $like){
                            if($like['productId'] == $product->id){
                                $product->liked = $like['status'];
                                break;
                            }
                        }
                    }
                }
                else{
                    foreach($products as $product){
                        $product->imageextensions =  explode(',', $product->imageextensions);
                        $product->liked = false;
                    }
                }
            }
            else{
                foreach($products as $product){
                    $product->imageextensions =  explode(',', $product->imageextensions);
                    $product->liked = false;
                }
            }
            return $products;
        }
        return 'No products';
    }

    public function getAllProducts(){
        $products = DB::table('products')->join('users', 'users.id','=','products.userId')->where('products.status','=','approved')->select('products.*','users.name')->get();
        if($products != '[]') {
            if(Auth::check()){
                $likes = Like::where('userId','=',Auth::user()->id)->get();
                if($likes != '[]'){

                    foreach($products as $product){
//                    $product->liked = $likes::where('productId','=',$product->id)->first()->status ?? false;
                        $product->liked = false;
                        $product->imageextensions =  explode(',', $product->imageextensions);
                        foreach($likes as $like){
                            if($like['productId'] == $product->id){
                                $product->liked = $like['status'];
                                break;
                            }
                        }
                    }
                }
                else{
                    foreach($products as $product){
                        $product->imageextensions =  explode(',', $product->imageextensions);
                        $product->liked = false;
                    }
                }
            }
            else{
                foreach($products as $product){
                    $product->imageextensions =  explode(',', $product->imageextensions);
                    $product->liked = false;
                }
            }
            return $products;
        }
        return 'No products';
    }
    public function getAllProductsWithCategories(){
        $products = DB::table('products')->join('users', 'users.id','=','products.userId')->where('products.status','=','approved')->join('categories','products.category','=','categories.id')->select('products.*','users.name','categories.parentCategory')->get();
        if($products != '[]') {
            if(Auth::check()){
                $likes = Like::where('userId','=',Auth::user()->id)->get();
                if($likes != '[]'){

                    foreach($products as $product){
//                    $product->liked = $likes::where('productId','=',$product->id)->first()->status ?? false;
                        $product->liked = false;
                        $product->imageextensions =  explode(',', $product->imageextensions);
                        foreach($likes as $like){
                            if($like['productId'] == $product->id){
                                $product->liked = $like['status'];
                                break;
                            }
                        }
                    }
                }
                else{
                    foreach($products as $product){
                        $product->imageextensions =  explode(',', $product->imageextensions);
                        $product->liked = false;
                    }
                }
            }
            else{
                foreach($products as $product){
                    $product->imageextensions =  explode(',', $product->imageextensions);
                    $product->liked = false;
                }
            }
            return $products;
        }
        return 'No products';
    }

    public function setLike($id){
        if(!Auth::check() or Auth::user()->status == 'blocked') return 'error';

        $like = Like::where('userId','=',Auth::user()->id)->where('productId','=',$id)->first();
        if($like == null){
            $newlike = new Like;
            $newlike->productId = $id;
            $newlike->userId = Auth::user()->id;
            $newlike->status = 1;
            if ($newlike->save())
                return 'success';
            else return 'error';
        }
        else {
            $like->status = !$like->status;
            if ($like->save())
                return 'success';
            else return 'error';
        }
    }
    public function getUserFavorites(){
        if(!Auth::check() or Auth::user()->status == 'blocked') return 'error';
//        $products = DB::table('likes')->where('userId','=',Auth::user()->id)->where('status','=',1)->join('products', 'likes.productId','=','products.id')->select('products.*')->where('products.status','=','approved')->get();
        $products = DB::table('likes')->where('likes.userId','=',Auth::user()->id)->where('likes.status','=',1)->join('products', 'likes.productId','=','products.id')->where('products.status','=','approved')->join('users', 'products.userId','=','users.id')->select('products.*','users.name')->get();

            if ($products != '[]') {
                foreach ($products as $product) {
                    $product->imageextensions =  explode(',', $product->imageextensions);
                    $product->liked = true;
                }
                return $products;
            }
            return 'No products';
    }
    public function getUserProducts(){
        if(!Auth::check() or Auth::user()->status == 'blocked') return 'error';
        $products = Product::where('products.userId','=',Auth::user()->id)->where('products.status','!=','removedByUser')->where('products.status','!=','deleted')->where('products.status','!=','removedByUser')->join('users', 'users.id','=','products.userId')->select('products.*','users.name')->get();
        if($products != '[]') {
            foreach($products as $product){
                $product->imageextensions =  explode(',', $product->imageextensions);
            }
            return $products;
        }
        return 'No products';
    }

    public function getDOP(){
        // Admin accounts default id is 1
         $products = DB::table('likes')->where('likes.userId','=',1)->where('likes.status','=',1)->join('products', 'likes.productId','=','products.id')->where('products.status','=','approved')->join('users', 'products.userId','=','users.id')->select('products.*','users.name')->get();

        if ($products != '[]') {
            if(Auth::check()){
                $likes = Like::where('userId','=',Auth::user()->id)->get();
                if($likes != '[]') {
                    foreach ($products as $product) {
                        $product->liked = false;
                        $product->imageextensions =  explode(',', $product->imageextensions);
                        foreach($likes as $like){
                            if($like['productId'] == $product->id){
                                $product->liked = $like['status'];
                                break;
                            }
                        }
                    }
                }
                else{
                    foreach ($products as $product) {
                        $product->liked = false;
                        $product->imageextensions =  explode(',', $product->imageextensions);
                    }
                }
            }
            else{
                foreach ($products as $product) {
                    $product->liked = false;
                    $product->imageextensions =  explode(',', $product->imageextensions);
                }
            }

            return $products;
        }
        return 'No products';
    }
}
