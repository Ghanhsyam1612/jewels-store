<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('components.register');
});

Route::get('/login', function () {
    return view('components.login');
})->name('login');

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
    return view('components.account');
})->name('account');

// Cart
Route::get('/cart', function () {
    return view('cart.cart');
});

// Edit Shipping Address
Route::get('/edit-shipping-address', function () {
    return view('account.edit-shipping-address');
});

// Edit Billing Address
Route::get('/edit-billing-address', function () {
    return view('account.edit-billing-address');
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
Route::get('/account/wishlist', [AccountController::class, 'wishlist'])->name('account.wishlist');
Route::get('/account/addresses', [AccountController::class, 'addresses'])->name('account.addresses');


// Routes

// Customer Registration
Route::post('/register', [CustomerController::class, 'register'])->name('customer.store');

// Customer Login
Route::post('/login', [CustomerController::class, 'login'])->name('customer.login');

// Authenticated Routes
Route::middleware(['auth:customer'])->group(function () {
    // Customer Details
    Route::get('/account/details', [AccountController::class, 'details'])->name('account.details');
    // Update Customer Details
    Route::post('/account/details', [CustomerController::class, 'updateDetails'])->name('account.update');
    // Logout
    Route::get('/account/logout', [AccountController::class, 'logout'])->name('account.logout');

    // Customer Addresses
    // Route::get('/account/addresses', [AddressController::class, 'index'])->name('account.addresses.index');
    Route::post('/account/addresses', [AddressController::class, 'store'])->name('account.addresses.store');
    Route::put('/account/addresses/{address}', [AddressController::class, 'update'])->name('account.addresses.update');
    Route::delete('/account/addresses/{address}', [AddressController::class, 'destroy'])->name('account.addresses.destroy');
});
