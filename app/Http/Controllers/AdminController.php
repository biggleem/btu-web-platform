<?php

namespace App\Http\Controllers;

use App\Models\MainImage;
use App\Models\Product;
use App\Models\Category;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function addCategory(Request $request){
        if(!Auth::check() or Auth::user()->role != 'admin' or Auth::user()->status=='blocked')return['status'=>'error'];
        if(isset($request->parent) && isset($request->name)){
            if(strlen($request->name) > 255)return['status' => 'error'];
            if(!is_numeric($request->parent) or (int)$request->parent <0)return['status' =>'error'];
            $category = new Category;
            $category->categoryname = $request->name;
            $category->parentCategory = (int)$request->parent;
            $category->save();
            return 'success';
        }
        return['status' =>'error'];
    }

    public function createnewsale(Request $request){
        if(!Auth::check() or Auth::user()->role != 'admin' or Auth::user()->status=='blocked')return['status'=>'error'];
        if(isset($request->value1) && isset($request->value2)){
            if(!is_numeric($request->value1) or !is_numeric($request->value2))return['status' => 'error'];
            $value1 = intval($request->value1);
            $value2 = intval($request->value2);
            if($value1 < 0 or $value1 > 100)return['status' =>'error'];
            if($value2 <= 0 or $value2 > 100)return['status' =>'error'];
            $sale = new Sale;
            $sale->start = $value1;
            $sale->end = $value2;
            $sale->save();
            return 'success';
        }
        return['status' =>'error'];
    }

    public function deleteCategory($id){
        if(!Auth::check() or Auth::user()->role != 'admin' or Auth::user()->status=='blocked')return['status'=>'error'];
        $category = Category::where('id','=',(int)$id)->where('status','=',true)->first();
        if($category == null)return['status'=>'error'];
        $category->status = false;
        $category->save();
//        $categories = Category::where('parentCategory','=',(int)$id)->get();
//        if($categories != null){
//            foreach($categories as $deletecat){
//                $deletecat->status = false;
//                $deletecat->save();
//            }
//        }

        return['status' => 'success'];
    }
    public function deleteSale($id){
        if(!Auth::check() or Auth::user()->role != 'admin' or Auth::user()->status=='blocked')return['status'=>'error'];
        $sale = Sale::where('id','=',(int)$id)->where('status','=',true)->first();
        if($sale == null)return['status'=>'error'];
        $sale->status = false;
        $sale->save();
        $categories = Category::where('parentCategory','=',(int)$id)->get();
//        if($categories != null){
//            foreach($categories as $deletecat){
//                $deletecat->status = false;
//                $deletecat->save();
//            }
//        }

        return['status' => 'success'];
    }



    public function editCategory(){
        return 0;
    }

    public function createProduct(Request $request){
        if(!Auth::check() or Auth::user()->status == 'blocked' or Auth::user()->role != 'admin')return ['status'=>'Error, you can\'t do this'];
        if(isset($request->title) && isset($request->description) && isset($request->price) && isset($request->link) && isset($request->category) && $request->hasFile('mainImage')){
            if(strlen($request->title) > 255)return ['status' => 'error'];
            if(strlen($request->description) > 10000)return ['status' => 'error'];
            if(!is_numeric($request->price) or $request->price < 0)return ['status' => 'error'];
            if(!is_numeric($request->category) or $request->category <= 0)return ['status' => 'error'];
            if(isset($request->sale)){
                if(!is_numeric($request->sale) or $request->sale < 0 or $request->sale > 100) return ['status' => 'error'];
            }
            $mainImageext = $request->mainImage->extension();
            if(!in_array($mainImageext,['png','jpg','jpeg','gif ','svg'])){
                return ['status' => 'error'];
            }

            $newproduct = new Product;
            $newproduct->userId=Auth::user()->id;
            $newproduct->title=$request->tite;
            $newproduct->price=$request->price;
            $newproduct->description=$request->description;
            $newproduct->category=$request->category;
            $newproduct->sale=(isset($request->sale) ? $request->sale : 0);
            $newproduct->link=$request->link;
            $newproduct->status = 'approved';
            $newproduct->save();

            $request->mainImage->move(public_path('images/product'),$newproduct->id.'_mainImage_'.$request->mainImage->extension());
            return ['status' => 'success'];
        }
        return ['status'=>'error'];
    }

    public function editProduct(){
        return 0;
    }


    public function deleteProduct($id){
        if(!Auth::check() or Auth::user()->status == 'blocked' or Auth::user()->role != 'admin')return ['status'=>'error'];
        $product = Product::where('id','=',(int)$id)->where('status','!=','deleted')->first();
        if($product != null){
            $product->status='deleted';
            $product->save();
            return ['status'=>'success'];
        }
        return ['status'=>'error'];
    }

    public function rejectProduct($id){
        if(!Auth::check() or Auth::user()->status == 'blocked' or Auth::user()->role != 'admin')return ['status'=>'error'];
        $product = Product::where('id','=',(int)$id)->where('status','!=','deleted')->first();
        if($product != null){
            $product->status='rejected';
            $product->save();
            return ['status'=>'success'];
        }
        return ['status'=>'error'];
    }

    public function changemainimage(Request $request){
        if(!Auth::check() or Auth::user()->status == 'blocked' or Auth::user()->role != 'admin')return ['status'=>'error'];
        if(!$request->hasFile('newimage')) return 'wrong data';
        $newimage = $request->newimage;
        if(!in_array($newimage->extension(),['png','jpg','jpeg','gif','svg'])){
            return 'error';
        }
        $mainimage = MainImage::where('id','=',($request->name+1))->first();
        if($mainimage == null) return 'no part with this name';
        $mainimage->ext = $newimage->extension();
        if($mainimage->save() && $newimage->move(public_path('images/mainImages'),$mainimage->name.'.'.$newimage->extension())){
            return 'success';
        }
        return 'error';
    }

    public function approveProduct($id){
            if(!Auth::check() or Auth::user()->status == 'blocked' or Auth::user()->role != 'admin')return ['status'=>'error'];
            $product = Product::where('id','=',(int)$id);
            $product = $product->where(function($query){
            $query->where('status','=','queue')->orWhere('status','=','edited');
            })->first();
            if($product != null){
                $product->status='approved';
                $product->save();
                return ['status'=>'success'];
            }
            return ['status'=>'error'];
    }

    public function getQueueProducts(){
        if(!Auth::check() or Auth::user()->status == 'blocked' or Auth::user()->role != 'admin')return ['status'=>'error'];
        $products = Product::where(function($query){
            $query->where('products.status','=','queue')->orWhere('products.status','=','edited');
        })->join('users', 'users.id','=','products.userId')->select('products.*','users.name')->get();

        if($products != '[]') {
            foreach($products as $product){
                $product->imageextensions =  explode(',', $product->imageextensions);
            }
            return $products;
        }
        return 'No products';
    }

    public function getlastnotifications($count){
        if(!Auth::check() or Auth::user()->status == 'blocked' or Auth::user()->role != 'admin')return ['status'=>'error'];
        $products = Product::where(function($query){
            $query->where('products.status','=','queue')->orWhere('products.status','=','edited');
        })->join('users', 'users.id','=','products.userId')->select('products.*','users.name', 'users.avatarext')->orderBy('id', 'DESC')->limit($count)->get();

        if($products != '[]') {
            foreach($products as $product){
                $product->imageextensions =  explode(',', $product->imageextensions);
            }
            return $products;
        }
        return 'No products';

    }

}
