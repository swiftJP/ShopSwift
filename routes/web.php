<?php


/*Authentication*/
Auth::routes();

//Facebook Routes
Route::get('/auth/facebook', 'Auth\LoginController@redirectToProvider')->name('facebooklogin');
Route::get('/auth/facebook/callback', 'Auth\LoginController@redirectToProviderCallback')->name('facebookcallback');


/*Home Page*/
Route::get('/home',  function () {
    return view('layouts.index');
});

Route::get('/', function () {
    return view('layouts.index');
});

/*Sending Orders to Checkout*/
Route::post('/order', 'HomeController@mail')->name('order');

/*Checkout Routes*/
Route::get('/checkout', function(){
    return view('Checkout.Checkout');
})->name('getcheckout');

Route::post('/payment', 'PaymentController@StripePayment')->name('payment');
Route::get('/cart', 'PaymentController@AddToCart')->name('cart');

/*Store Routes*/
Route::get('/mcds', function () {
    return view('Stores.Mcd');
})->name('mcds'); //Mcdonalds

