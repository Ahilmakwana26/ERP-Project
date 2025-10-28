<?php


Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'user'],function(){
        Route::get('/','UserController@index');
        Route::get('/create','userController@create')->name('user.create');
        Route::post('/store','userController@store')->name('user.store');
        Route::get('/edit/{id}','userController@edit')->name('user.edit');
        Route::post('/update/{id}','userController@update')->name('user.update');
        Route::post('/delete/{id}','userController@destroy')->name('user.delete');

    });
    
});

Route::get('/demo','userController@demo');
