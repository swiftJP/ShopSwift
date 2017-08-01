<?php
/*Authentication*/
Auth::routes();

/*Facebook Routes*/


/*Home Page*/
Route::get('/home',  function () {
    return view('layouts.index');
})->name('home')->middleware('LaunchRedirect');

Route::get('/', function () {
    return view('layouts.index');
})->middleware('LaunchRedirect');

/*Sending Orders to Checkout*/
Route::post('/send', 'ProductController@getCustom')->name('send');
Route::post('/custom', 'OrderController@customOrder')->name('custom');

/*Checkout Routes*/
Route::get('/checkout', function(){
    return view('Checkout.Checkout');
})->name('getcheckout')->middleware('LaunchRedirect');

Route::post('/payment', 'PaymentController@StripePayment')->name('payment');
Route::get('/cart', 'PaymentController@AddToCart')->name('cart')->middleware('LaunchRedirect');

/*Store Routes*/
Route::get('/stores', 'StoreController@getStores')->name('stores'); //All Stores
Route::get('/jd', 'StoreController@getJD')->name('jd'); // JD
Route::get('/zara', 'StoreController@getZara')->name('zara');
Route::get('/riverisland', 'StoreController@getRI')->name('RI'); //River Island
Route::get('/missselfridge', 'StoreController@getMS')->name('MS'); //Miss Selfridge
Route::get('/footlocker', 'StoreController@getFL')->name('FL'); //Primark
Route::get('/boots', 'StoreController@getBoots')->name('boots'); //Boots
Route::get('/bodyshop', 'StoreController@getBS')->name('body'); //Body Shop
Route::get('/apple', 'StoreController@getApple')->name('apple'); //Apple
Route::get('/custom', 'StoreController@getCustom')->name('custom'); //Custom Order

/*About Swift*/
Route::get('/about', function() {
  return view('layouts.about');
})->name('about');

/*Cart*/
Route::get('/cartjd/{id}', 'ProductController@getAddToCart')->name('addToCartJD'); //JD
Route::get('/shoppingcart', 'ProductController@getCart')->name('shoppingCart');
Route::get('/reduce/{id}', 'ProductController@getReduceByOne')->name('reduceByOne');
Route::get('/remove/{id}', 'ProductController@getRemoveItem')->name('removeItem');

Route::get('/cartzara/{id}', 'ProductController@getAddToCartZara')->name('addToCartZara'); //JD

Route::get('/remove', 'ProductController@getRemoveCustom')->name('removeCustom');

/*Landing Page*/
Route::get('/coming-soon', function() {
    return view('layouts.landing');
})->name('landing');
Route::post('/waiting-list', 'LandingController@addToList')->name('list');

/*Blog*/
Route::get('/blog', function(){
   return view('blog.blog');
})->name('blog');

Route::get('/blog/autumn-trends-2017', function(){
    return view('blog.blog2');
})->name('blog2');