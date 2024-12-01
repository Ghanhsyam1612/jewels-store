<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

// Header Menu  
Route::get('/inventory', function () {
    return view('components.inventory');
});

Route::get('/calibrated', function () {
    return view('lab-diamonds.calibrated');
});

Route::get('/fancy-shapes-diamonds', function () {
    return view('lab-diamonds.fancy-shapes-diamonds');
});

Route::get('/fancy-color-melee-diamonds', function () {
    return view('lab-diamonds.fancy-color-melee-diamonds');
});

// Engagement Rings
Route::get('/start-with-a-setting', function () {
    return view('engagement-rings.start-with-a-setting');
});

Route::get('/bespoke-jewellery', function () {
    return view('engagement-rings.bespoke-jewellery');
});

Route::get('/custom-engagement-rings', function () {
    return view('engagement-rings.custom-engagement-rings');
});

// Fine Jewellery
Route::get('/stud-earrings', function () {
    return view('components.fine-jewellery.stud');
});

// Product Display Pages
Route::get('/product', function () {
    return view('product.product');
});

// My Account
Route::get('/my-account', function () {
    return view('account.my-account');
})->name('account.my-account');

// Login-Register
Route::get('/account', function () {
    return view('account.account');
})->name('account');

// Cart
Route::get('/cart', function () {
    return view('cart.cart');
});





// Footer Help
Route::get('/about-us', function () {
    return view('components.help.about');
});

Route::get('/compare-us', function () {
    return view('components.help.compare-us');
});

Route::get('/why-choose-us', function () {
    return view('components.help.why-choose-us');
});

Route::get('/diamond-size-chart', function () {
    return view('components.help.diamond-size-chart');
});

Route::get('/faq', function () {
    return view('components.help.faq');
});

Route::get('/contact-us', function () {
    return view('components.help.contact-us');
});

Route::get('/account/orders', [AccountController::class, 'orders'])->name('account.orders');


// ------------------------------- Addresses -----------------------------------------------------------
Route::get('/shipping-address', [AddressController::class, 'shipping'])->name('account.addresses.shipping');
Route::get('/billing-address', [AddressController::class, 'billing'])->name('account.addresses.billing');
Route::get('/account/addresses', [AddressController::class, 'addresses'])->name('account.addresses');
// -------------------------------- End Addresses ------------------------------------------------------

// -------------------------------- Customer Registration -----------------------------------------------
Route::get('/register', [CustomerController::class, 'index'])->name('customer.index');
Route::post('/register', [CustomerController::class, 'register'])->name('customer.store');
// -------------------------------- End Customer Registration -------------------------------------------


// -------------------------------- Customer Login ------------------------------------------------------
Route::get('/login', [CustomerController::class, 'loginIndex'])->name('customer.login.index');
Route::post('/login', [CustomerController::class, 'login'])->name('customer.login');
// -------------------------------- End Customer Login --------------------------------------------------


// -------------------------------- Authenticated Routes ------------------------------------------------
Route::middleware(['auth:customer'])->group(function () {
    // Customer Details
    Route::get('/account/details', [AccountController::class, 'details'])->name('account.details');
    // Update Customer Details
    Route::post('/account/details', [CustomerController::class, 'updateDetails'])->name('account.update');
    // Logout
    Route::get('/account/logout', [AccountController::class, 'logout'])->name('account.logout');

    // Customer Addresses
    Route::post('/account/addresses', [AddressController::class, 'store'])->name('account.addresses.store');
    Route::put('/account/addresses/{address}', [AddressController::class, 'update'])->name('account.addresses.update');
    Route::delete('/account/addresses/{address}', [AddressController::class, 'destroy'])->name('account.addresses.destroy');
    Route::post('/account/addresses/{address}/set-default', [AddressController::class, 'setDefault'])->name('account.addresses.setDefault');

    // Wishlist
    Route::get('/account/wishlist', [AccountController::class, 'wishlist'])->name('account.wishlist');
});
// -------------------------------- End Authenticated Routes ---------------------------------------------