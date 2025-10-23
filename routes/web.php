<?php


Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'user'],function(){
        Route::get('/','UserController@index');
        Route::get('/create','userController@create')->name('user.create');
        Route::post('/store','userController@store')->name('user.store');
    });
    
});
