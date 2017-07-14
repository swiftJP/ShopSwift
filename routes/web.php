<?php
/*Authentication*/
Auth::routes();

//Facebook Routes
Route::get('/auth/facebook', 'Auth\LoginController@redirectToProvider')->name('facebooklogin');
Route::get('/auth/facebook/callback', 'Auth\LoginController@redirectToProviderCallback')->name('facebookcallback');


/*Home Page*/
Route::get('/home',  function () {
    return view('layouts.index');
})->middleware('LaunchRedirect');

Route::get('/', function () {
    return view('layouts.index');
})->middleware('LaunchRedirect');

/*Sending Orders to Checkout*/
Route::post('/send', 'OrderController@newOrder')->name('send');
Route::post('/custom', 'OrderController@customOrder')->name('custom');

/*Checkout Routes*/
Route::get('/checkout', function(){
    return view('Checkout.Checkout');
})->name('getcheckout');

Route::post('/payment', 'PaymentController@StripePayment')->name('payment');
Route::get('/cart', 'PaymentController@AddToCart')->name('cart');

/*Store Routes*/
Route::get('/stores', function(){
   return view('Stores.stores');
})->name('stores')->middleware('LaunchRedirect'); //All Stores

Route::get('/aldi', function () {
    return view('Stores.Aldi');
})->name('aldi'); //Aldi

Route::get('/riverisland', function () {
    return view('Stores.RiverIsland');
})->name('rive'); //Sainsburys

Route::get('/tesco', function () {
    return view('Stores.Tesc');
})->name('tesc'); //Tesco

Route::get('/mcdonalds', function () {
    return view('Stores.Mcd');
})->name('mcdo'); //Mcdonalds

Route::get('/bodyshop', function () {
    return view('Stores.bodyshop');
})->name('body'); //KFC

Route::get('/primark', function () {
    return view('Stores.Primark');
})->name('prim'); //Primark

Route::get('/jd', function () {
return view('Stores.Jd');
})->name('jd'); //JD Sports

Route::get('/99pstore', function () {
    return view('Stores.99stores');
})->name('99'); //99 Sports

Route::get('/sportsdirect', function () {
    return view('Stores.Sports-direct');
})->name('SD'); //Sports Direct

Route::get('/zara', function () {
    return view('Stores.Zara');
})->name('zara'); //Sports Direct

//About Swift
Route::get('/about', function() {
  return view('layouts.about');
})->name('about');

//Landing Page
Route::get('/coming-soon', function() {
    return view('layouts.landing');
})->name('landing');

Route::post('/waiting-list', 'LandingController@addToList')->name('list');