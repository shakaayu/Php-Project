<?php
Route::group(['namespace'=>'Front'],function (){
   Route::any('/','ApplicationController@index');

});

Route::group(['namespace'=>'Back'],function(){
    Route::any('login','UserController@login')->name('login');
});

Route::group(['namespace'=>'Back','prefix'=>'admin'],function () {
    Route::any('/', 'DashboardController@index')->name('admin');

    Route::group(['prefix' => 'users'], function () {
        Route::any('users', 'UserController@index')->name('users');
        Route::any('addUser', 'UserController@addUser')->name('addUser');
    });
    Route::group(['prefix' => 'menu'], function () {
        Route::any('addMenu', 'MenuController@addMenu')->name('addMenu');
    });
    Route::group(['prefix' => 'gallery'], function () {
        Route::any('  addImage', 'GalleryController@index')->name('addImage');
    });
    Route::group(['prefix' => 'description'], function () {
//        Route::any('description', 'DescriptionController@index')->name('users');
        Route::any('addDescription', 'DescriptionController@addDescription')->name('addDescription');
    });

    });



