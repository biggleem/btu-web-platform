<?php

namespace App\Http\Controllers;

use App\Models\MainImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PasswordReset;

class ViewController extends Controller
{
    public function homePage(){
//        if(!Auth::check()) return redirect()->route('login');
        return view('home');
    }
    public function adminPage(){
        if(!Auth::check() or Auth::user()->role != 'admin' or Auth::user()->status == 'blocked')return redirect()->route('home');
        return 'It\'s an admin page';
    }

    public function loginPage(){
        if(Auth::check())return redirect()->route('home');
        return view('login');
    }
    public function registerPage(){
        if(Auth::check())return redirect()->route('home');
        return view('sign');
    }

    public function forgetPassPage(){
        if(Auth::check())return redirect()->route('home');
        return view('ForgetPass');
    }
    public function recoverPassPage(Request $request){
        if(Auth::check())return redirect()->route('home');
        if(!isset($request->query()['email']) or !isset($request->query()['token'])) return 'Wrong data!';
        $reset = PasswordReset::where('email','=',$request->query()['email'])->where('token','=',$request->query()['token'])->first();
        if(!isset($reset)) return 'Wrong data!';
        return view('NewPass');
    }
    public function addnewproductPage(){
        if(!Auth::check())return redirect()->route('home');
        return view('Addnewproduct');
    }
    public function categoriesFooter(){
        return view('Categories');
    }
    public function FAQsPage(){
        return view('FAQspage');
    }
    public function TermsPage(){
        return view('Termspage');
    }

    public function homegoods(){
        return view('CategoriesPage')->with('category','1')->with('categorypage','homegoods')->with('title','Homegoods');
    }
    public function faceandhair(){
        return view('CategoriesPage')->with('category','2')->with('categorypage','faceandhair')->with('title','Face and Hair');
    }
    public function edibles(){
        return view('CategoriesPage')->with('category','3')->with('categorypage','edibles')->with('title','Edibles');
    }
    public function amazonhurries(){
        return view('CategoriesPage')->with('category','4')->with('categorypage','amazonhurries')->with('title','Amazon Hurries');
    }
    public function wydtyn(){
        return view('CategoriesPage')->with('category','5')->with('categorypage','wydtyn')->with('title','WYDTYN');
    }
    public function favoritesPage(){
        return (Auth::check() and Auth::user()->status != 'blocked') ? view('favoritesPage') : redirect()->route('home');
    }
    public function profile(){
        return (Auth::check() and Auth::user()->status != 'blocked') ? view('profile') : redirect()->route('home');
    }
    public function searchpage(){
        return view('Search');
    }
    public function goto(){
        return view('productpagewait');
    }

    public function adminallproducts(){
        if(!Auth::check() or Auth::user()->role != 'admin' or Auth::user()->status == 'blocked')return redirect()->route('home');
        return view('admin/AdminAllProducts');
    }

    public function admindashboard(){
        if(!Auth::check() or Auth::user()->role != 'admin' or Auth::user()->status == 'blocked')return redirect()->route('home');
        return view('admin/AdminDashboard');
    }

    public function adminmyproducts(){
        if(!Auth::check() or Auth::user()->role != 'admin' or Auth::user()->status == 'blocked')return redirect()->route('home');
        return view('admin/AdminMyProducts');
    }

    public function adminnotifications(){
        if(!Auth::check() or Auth::user()->role != 'admin' or Auth::user()->status == 'blocked')return redirect()->route('home');
        return view('admin/AdminNotifications');
    }

    public function adminprofile(){
        if(!Auth::check() or Auth::user()->role != 'admin' or Auth::user()->status == 'blocked')return redirect()->route('home');
        return view('admin/AdminMyProfile');
    }

    public function getmainimageext($name){
        $image = MainImage::where('id','=',($name+1))->first();
        if($image == null) return 'no part with this name';
        return $image->name.'.'.$image->ext;
    }

    public function faqs(){
        if(!Auth::check() or Auth::user()->role != 'admin' or Auth::user()->status == 'blocked')return redirect()->route('home');
        return view('admin/AdminFAQ,S');
    }

    public function terms(){
        if(!Auth::check() or Auth::user()->role != 'admin' or Auth::user()->status == 'blocked')return redirect()->route('home');
        return view('admin/AdminTermsandPolicy');
    }

    public function adminhomegoods(){
        return view('admin/AdminCategoriesPage')->with('category','1')->with('categorypage','homegoods')->with('title','Homegoods');
    }
    public function adminfaceandhair(){
        return view('admin/AdminCategoriesPage')->with('category','2')->with('categorypage','faceandhair')->with('title','Face and Hair');
    }
    public function adminedibles(){
        return view('admin/AdminCategoriesPage')->with('category','3')->with('categorypage','edibles')->with('title','Edibles');
    }
    public function adminamazonhurries(){
        return view('admin/AdminCategoriesPage')->with('category','4')->with('categorypage','amazonhurries')->with('title','Amazon Hurries');
    }
    public function adminwydtyn(){
        return view('admin/AdminCategoriesPage')->with('category','5')->with('categorypage','wydtyn')->with('title','WYDTYN');
    }

}
