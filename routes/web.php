<?php

Route::get('/', [
    'as' => 'customer.home',
    'uses' => 'PagesController@home'
]);

Route::group(['middleware' => ['web']], function() {


    Route::resource('customers', 'CustomerController');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
