<?php


/*Authentication*/
Auth::routes();

/*Home Page*/
Route::get('/home',  function () {
    return view('layouts.index');
});

Route::get('/', function () {
    return view('layouts.index');
});

/*Mailing Orders*/
Route::post('/order', 'HomeController@mail')->name('order');


/*Checkout Routes*/
Route::get('/checkout', function(){
    return view('Checkout.Checkout');
})->name('getcheckout');

Route::post('/payment', 'PaymentController@StripePayment')->name('payment');

Route::get('/cart', 'PaymentController@AddToCart')->name('cart');