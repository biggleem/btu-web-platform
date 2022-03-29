<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getmain(){
        return Category::where('parentCategory','=',0)->get();
    }
    public function getsubs($id){
        return Category::where('parentCategory','=',$id)->where('status','=',true)->get();
    }
    public function getallcategories(){
        return Category::all();
    }
}
