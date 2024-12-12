<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DiamondController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

// Header Menu  
// Route::get('/inventory', function () {
//     return view('components.inventory');
// })->name('inventory');

Route::get('/calibrated', function () {
    return view('lab-diamonds.calibrated');
})->name('calibrated');

Route::get('/fancy-shapes-diamonds', function () {
    return view('lab-diamonds.fancy-shapes-diamonds');
})->name('fancy-shapes-diamonds');

Route::get('/fancy-color-diamonds', function () {
    return view('lab-diamonds.fancy-color-diamonds');
})->name('fancy-color-diamonds');

Route::get('/color-melee-diamonds', function () {
    return view('lab-diamonds.color-melee-diamonds');
})->name('color-melee-diamonds');

// Engagement Rings
Route::get('/build-a-ring', function () {
    return view('engagement-rings.build-a-ring');
})->name('build-a-ring');

Route::get('/bespoke-jewellery', function () {
    return view('engagement-rings.bespoke-jewellery');
})->name('bespoke-jewellery');

Route::get('/custom-engagement-rings', function () {
    return view('engagement-rings.custom-engagement-rings');
})->name('custom-engagement-rings');

// Fine Jewellery
Route::get('/earrings', function () {
    return view('components.fine-jewellery.earrings.earrings');
});

Route::get('/stud-earrings', function () {
    return view('components.fine-jewellery.earrings.stud');
});

Route::get('/hoops-and-drops', function () {
    return view('components.fine-jewellery.earrings.hoops-and-drops');
});

Route::get('/halo', function () {
    return view('components.fine-jewellery.earrings.halo');
});

Route::get('/cluster', function () {
    return view('components.fine-jewellery.earrings.cluster');
});

Route::get('/wedding-rings', function () {
    return view('components.fine-jewellery.wedding-rings.wedding-rings');
});

Route::get('/diamond', function () {
    return view('components.fine-jewellery.wedding-rings.diamond');
});

Route::get('/anniversary', function () {
    return view('components.fine-jewellery.wedding-rings.anniversary');
});

Route::get('/eternity', function () {
    return view('components.fine-jewellery.wedding-rings.eternity');
});

Route::get('/stackable', function () {
    return view('components.fine-jewellery.wedding-rings.stackable');
});

Route::get('/pendants', function () {
    return view('components.fine-jewellery.pendants.pendants');
});

Route::get('/solitaire', function () {
    return view('components.fine-jewellery.pendants.solitaire');
});

Route::get('/halo', function () {
    return view('components.fine-jewellery.pendants.halo');
});

Route::get('/diamond-pendants', function () {
    return view('components.fine-jewellery.pendants.diamond-pendants');
});

Route::get('/chains', function () {
    return view('components.fine-jewellery.pendants.chains');
});

Route::get('/bracelets', function () {
    return view('components.fine-jewellery.bracelets.bracelets');
});

Route::get('/tennis-bracelets', function () {
    return view('components.fine-jewellery.bracelets.tennis-bracelets');
});

Route::get('/solitaire', function () {
    return view('components.fine-jewellery.bracelets.solitaire-bracelets');
});

Route::get('/all-diamond-necklaces', function () {
    return view('components.fine-jewellery.necklaces.all-diamond-necklaces');
});

Route::get('/diamond-necklaces', function () {
    return view('components.fine-jewellery.necklaces.diamond-necklaces');
});

Route::get('/tennis-necklaces', function () {
    return view('components.fine-jewellery.necklaces.tennis-necklaces');
});

// Ready To Ship
Route::get('/ready-to-ship', function () {
    return view('components.ready-to-ship');
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
// Route::get('/cart', function () {
//     return view('cart.cart');
// });

// Checkout
Route::get('/checkout', function () {
    return view('checkout.checkout');
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


// ---------------------------------- Cart Routes -----------------------------------------------------
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
// ---------------------------------- End    Routes -------------------------------------------------


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

// -------------------------------- Inventory & Diamond Routes ------------------------------------------
Route::get('/inventory', [DiamondController::class, 'index'])->name('inventory');
Route::get('/inventory/diamond/{diamond}', [DiamondController::class, 'details'])->name('diamonds.details');
// -------------------------------- End Inventory & Diamond Routes --------------------------------------

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