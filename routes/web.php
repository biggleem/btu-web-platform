<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [\App\Http\Controllers\ViewController::class, 'homePage'])->name('home');
// Auth part
Route::get('/login', [\App\Http\Controllers\ViewController::class, 'loginPage'])->name('loginPage');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/register', [\App\Http\Controllers\ViewController::class, 'registerPage'])->name('registerPage');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('/forgetPass', [\App\Http\Controllers\ViewController::class, 'forgetPassPage'])->name('forgetPassPage');
Route::post('/forgetPass', [\App\Http\Controllers\AuthController::class, 'forgetPass'])->name('forgetPass');
Route::get('/recoverPass', [\App\Http\Controllers\ViewController::class, 'recoverPassPage'])->name('recoverPassPage');
Route::post('/recoverPass', [\App\Http\Controllers\AuthController::class, 'recoverPass'])->name('recoverPass');


//User part
Route::get('/favoritesPage', [\App\Http\Controllers\ViewController::class, 'favoritesPage'])->name('favoritesPage');
Route::get('/getUserFavorites', [\App\Http\Controllers\ProductController::class, 'getUserFavorites'])->name('getUserFavorites');
Route::get('/profile', [\App\Http\Controllers\ViewController::class, 'profile'])->name('profile');
Route::get('/getUserProducts', [\App\Http\Controllers\ProductController::class, 'getUserProducts'])->name('getUserProducts');
Route::get('/getUserData', [\App\Http\Controllers\UserController::class, 'getUserData'])->name('getUserData');
Route::post('/editProfile', [\App\Http\Controllers\UserController::class, 'editProfile'])->name('editProfile');
Route::post('/changePassword', [\App\Http\Controllers\UserController::class, 'changePassword'])->name('changePassword');
Route::post('/changeavatar', [\App\Http\Controllers\UserController::class, 'changeavatar'])->name('changeavatar');



//Comment part
Route::post('/addComment', [\App\Http\Controllers\CommentController::class, 'addComment'])->name('addComment');
Route::post('/editComment', [\App\Http\Controllers\CommentController::class, 'editComment'])->name('editComment');
Route::get('/deleteComment/{id}', [\App\Http\Controllers\CommentController::class, 'deleteComment'])->name('deleteComment');
Route::get('/getmycomment/{id}', [\App\Http\Controllers\CommentController::class, 'getmycomment'])->name('getmycomment');
Route::get('/getproductcomments/{id}', [\App\Http\Controllers\CommentController::class, 'getproductcomments'])->name('getproductcomments');
//Product part
Route::post('/createProduct',[\App\Http\Controllers\ProductController::class, 'createProduct'])->name('createProduct');
Route::get('/addnewproduct',[\App\Http\Controllers\ViewController::class, 'addnewproductPage'])->name('addnewproductPage');
Route::get('/getProductsByCategoryId/{id}', [\App\Http\Controllers\ProductController::class, 'getProductsByCategoryId'])->name('getProductsByCategoryId');
Route::get('/getProductsByCategoryIdLiked/{id}', [\App\Http\Controllers\ProductController::class, 'getProductsByCategoryIdLiked'])->name('getProductsByCategoryIdLiked');
Route::get('/getDOP', [\App\Http\Controllers\ProductController::class, 'getDOP'])->name('getDOP');
Route::get('/setLike/{id}', [\App\Http\Controllers\ProductController::class, 'setLike'])->name('setLike');
Route::get('/getAllProducts', [\App\Http\Controllers\ProductController::class, 'getAllProducts'])->name('getAllProducts');
Route::get('/getAllProductsWithCategories', [\App\Http\Controllers\ProductController::class, 'getAllProductsWithCategories'])->name('getAllProductsWithCategories');
//Route::post('/editProduct',[\App\Http\Controllers\ProductController::class, 'editProduct'])->name('editProduct');
Route::get('/deleteProduct/{id}', [\App\Http\Controllers\ProductController::class, 'deleteProduct'])->name('deleteProduct');
Route::get('/restoreProduct/{id}', [\App\Http\Controllers\ProductController::class, 'restoreProduct'])->name('restoreProduct');

Route::get('/gotopage', [\App\Http\Controllers\ViewController::class, 'goto'])->name('gotopage');
Route::post('/changeProductWithoutImages', [\App\Http\Controllers\ProductController::class, 'changeProductWithoutImages'])->name('changeProductWithoutImages');

//Categories part
Route::get('/getmaincategories',[\App\Http\Controllers\CategoryController::class, 'getmain'])->name('getmaincategories');
Route::get('/getallcategories',[\App\Http\Controllers\CategoryController::class, 'getallcategories'])->name('getallcategories');
Route::get('/homegoods',[\App\Http\Controllers\ViewController::class, 'homegoods'])->name('homegoods');
Route::get('/faceandhair',[\App\Http\Controllers\ViewController::class, 'faceandhair'])->name('faceandhair');
Route::get('/edibles',[\App\Http\Controllers\ViewController::class, 'edibles'])->name('edibles');
Route::get('/amazonhurries',[\App\Http\Controllers\ViewController::class, 'amazonhurries'])->name('amazonhurries');
Route::get('/wydtyn',[\App\Http\Controllers\ViewController::class, 'wydtyn'])->name('wydtyn');

//Footer part
Route::get('/categories', [\App\Http\Controllers\ViewController::class,'categoriesFooter'])->name('categoriesFooter');
Route::get('/FAQs', [\App\Http\Controllers\ViewController::class,'FAQsPage'])->name('FAQsPage');
Route::get('/Terms', [\App\Http\Controllers\ViewController::class,'TermsPage'])->name('TermsPage');

//Filters
Route::get('/getsales', [\App\Http\Controllers\SaleController::class, 'getsales'])->name('getsales');
Route::get('/getsubs/{id}', [\App\Http\Controllers\CategoryController::class, 'getsubs'])->name('getsubs');


//For server
Route::get('/adminoptimize' , function(){
        \Artisan::call('optimize');
        dd('cache clear successfully');
});
Route::get('/adminmigrate' , function(){
    if(Auth::check() && Auth::user()->role =='admin' && Auth::user()->status != 'blocked') {
        \Artisan::call('migrate:fresh --seed');
        dd('migrated with seeding successfully');
    }
});

//Test

Route::get('/test/{id}', [\App\Http\Controllers\ProductController::class, 'getProductsByCategoryIdLiked']);
Route::get('/search', [\App\Http\Controllers\ViewController::class, 'searchpage'])->name('searchpage');

//Admin part
Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\ViewController::class, 'admindashboard'])->name('admindashboard');
    Route::get('/allproducts', [\App\Http\Controllers\ViewController::class, 'adminallproducts'])->name('adminallproducts');
    Route::get('/myproducts', [\App\Http\Controllers\ViewController::class, 'adminmyproducts'])->name('adminmyproducts');
    Route::get('/notifications', [\App\Http\Controllers\ViewController::class, 'adminnotifications'])->name('adminnotifications');
    Route::get('/profile', [\App\Http\Controllers\ViewController::class, 'adminprofile'])->name('adminprofile');
    Route::get('/faqs', [\App\Http\Controllers\ViewController::class, 'faqs'])->name('adminfaqs');
    Route::get('/terms', [\App\Http\Controllers\ViewController::class, 'terms'])->name('adminterms');

    Route::post('/addCategory',[\App\Http\Controllers\AdminController::class, 'addCategory'])->name('ADMINaddCategory');
    Route::get('/deleteCategory/{id}',[\App\Http\Controllers\AdminController::class, 'deleteCategory'])->name('ADMINdeleteCategory');
    Route::get('/deleteSale/{id}',[\App\Http\Controllers\AdminController::class, 'deleteSale'])->name('ADMINdeleteSale');
    Route::get('/editCategory',[\App\Http\Controllers\AdminController::class, 'editCategory'])->name('ADMINeditCategory');
    Route::post('/createProduct',[\App\Http\Controllers\AdminController::class, 'createProduct'])->name('ADMINcreateProduct');
    Route::get('/editProduct',[\App\Http\Controllers\AdminController::class, 'editProduct'])->name('ADMINeditProduct');
    Route::get('/deleteProduct/{id}',[\App\Http\Controllers\AdminController::class, 'deleteProduct'])->name('ADMINdeleteProduct');
    Route::get('/rejectProduct/{id}',[\App\Http\Controllers\AdminController::class, 'rejectProduct'])->name('ADMINrejectProduct');

    Route::get('/approveProduct/{id}',[\App\Http\Controllers\AdminController::class, 'approveProduct'])->name('ADMINapproveproduct');
    Route::get('/getQueueProducts', [\App\Http\Controllers\AdminController::class, 'getQueueProducts'])->name('getQueueProducts');

    Route::get('/homegoods', [\App\Http\Controllers\ViewController::class, 'adminhomegoods'])->name('adminhomegoods');
    Route::get('/faceandhair', [\App\Http\Controllers\ViewController::class, 'adminfaceandhair'])->name('adminfaceandhair');
    Route::get('/edibles', [\App\Http\Controllers\ViewController::class, 'adminedibles'])->name('adminedibles');
    Route::get('/amazonhurries', [\App\Http\Controllers\ViewController::class, 'adminamazonhurries'])->name('adminamazonhurries');
    Route::get('/wydtyn', [\App\Http\Controllers\ViewController::class, 'adminwydtyn'])->name('adminwydtyn');

    Route::get('/getlastnotifications/{count}', [\App\Http\Controllers\AdminController::class, 'getlastnotifications'])->name('getlastnotifications');
    Route::post('/changemainimage', [\App\Http\Controllers\AdminController::class, 'changemainimage'])->name('ADMINchangemainimage');

    Route::post('/createnewsale', [\App\Http\Controllers\AdminController::class, 'createnewsale'])->name('createnewsale');

    Route::post('/updateFaqs', [\App\Http\Controllers\FaqsController::class, 'update'])->name('updateFaqs');
    Route::post('/updateTerms', [\App\Http\Controllers\TermsController::class, 'update'])->name('updateTerms');

});

Route::get('/getmainimageext/{name}', [\App\Http\Controllers\ViewController::class, 'getmainimageext'])->name('getmainimageext');
Route::get('/faqslist', [\App\Http\Controllers\FaqsController::class, 'get'])->name('faqslist');
Route::get('/termslist', [\App\Http\Controllers\TermsController::class, 'get'])->name('termslist');




