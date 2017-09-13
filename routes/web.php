<?php
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
////Route::get('/', function () {
////    echo"welcome";
////});
//Route::get('about',function (){
//    return view ("about");
//})->name('a');
//
//Route::get('/',function (){
//   return view('welcome');
//})->name('home');
//Route::get('contact',function (){
//    return view ("contact");
//})->name('c');
//
//Route::post('contact',function (){
//    echo ('welcome');
//});
//


//Route::get('/','UserController@index');
//Route::get('about','UserController@about');
//
////Route::group(['users'],function (){
////   Route::get('user','UserController@adduser')->name{'adduser'};
////
////
////});
//
//Route::group(['food'],function(){
//    Route::get('fooditems','FoodController@index')->name('additems');
//});

//Route::get('/',function (){
//    return view('welcome');
//});
//Route::get('home',function (){
//    echo "home";
//});
//
//

Route::group(['namespace'=>'Front'],function (){
   Route::any('/','ApplicationController@index');

});

Route::group(['namespace'=>'Back','prefix'=>'admin'],function (){
    Route::any('/','DashboardController@index');
});