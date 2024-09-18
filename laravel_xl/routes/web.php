<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product',[ProductController::class,'index']);

Route::get('/product_post/{post}/comments/{comment}',function(string $postId,string $commentId){
    return $commentId;
});

Route::post('/user/{id}/comments/{comment}/product/{mobile}',[ProductController::class,'user_pro'])->name('comments');

Route::get('/cat/{cat_id}/attr/{attr_id}/attr_val/{attr_val}',function(Request $request,$cat_id , $attr_id,$attr_val){
    return $attr_val;
})->name('category');

Route::prefix('admin')->group(function(){
    //routes are here
    Route::get('/product/{admin_id}',[AdminController::class,'index']);
});
Route::prefix('front')->group(function(){
    Route::get('/single_page/{singlePage}',[ProductController::class,'single'])->name('single');
});