<?php

use App\Filament\Resources\CustomerResource;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ADMIN\CustomerController as ADMINCustomerController;
use App\Http\Controllers\ADMIN\DashboardController;
use App\Http\Controllers\ADMIN\OrderController;
use App\Http\Controllers\AntiqueCutDiamondController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ColorDiamondController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DiamondController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NaturalDiamondController;
use App\Http\Controllers\WishlistController;
use App\Models\ColorDiamond;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/password-reset', function () {
    return view('account.password-reset-form');
});

// -------------------------------- Start Admin Routes --------------------------------
Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/order', [OrderController::class , 'index']);

// Route::get('/admin/customers', [ADMINCustomerController::class , 'index']);
Route::get('/admin/customers', [ADMINCustomerController::class, 'index'])->name('admin.customers.index');
Route::post('/admin/customers', [ADMINCustomerController::class, 'store'])->name('admin.customers.store');
Route::get('/customers/{id}/edit', [ADMINCustomerController::class, 'edit'])->name('admin.customers.edit');
Route::put('/customers/{id}', [ADMINCustomerController::class, 'update'])->name('admin.customers.update');
Route::delete('/customers/{id}', [ADMINCustomerController::class, 'destroy'])->name('admin.customers.destroy');


Route::get('/admin/fancy-color-diamonds', function () {
    return view('admin.fancy-color-diamonds');
});
Route::get('/admin/natural-diamonds', function () {
    return view('admin.natural-diamonds');
});
Route::get('/admin/lab-grown-diamonds', function () {
    return view('admin.lab-grown-diamonds');
});
Route::get('/admin/antique-cut-diamonds', function () {
    return view('admin.antique-cut-diamonds');
});
Route::get('/admin/precious-stone-diamonds', function () {
    return view('admin.precious-stone-diamonds');
});
// -------------------------------- End Admin Routes ----------------------------------


// -------------------------------- Diamond Lab Routes --------------------------------------------------
Route::get('/calibrated', function () {
    return view('lab-diamonds.calibrated');
})->name('calibrated');


Route::get('/fancy-shapes-diamonds', function () {
    return view('lab-diamonds.fancy-shapes-diamonds');
})->name('fancy-shapes-diamonds');





Route::get('/color-melee-diamonds', function () {
    return view('lab-diamonds.color-melee-diamonds');
})->name('color-melee-diamonds');
// -------------------------------- End Diamond Lab Routes ----------------------------------------------

// -------------------------------- Engagement Rings Routes --------------------------------------------
// Create Your Diamond Ring
Route::get('/build-a-ring', function () {
    return view('engagement-rings.build-a-ring');
})->name('build-a-ring');

Route::get('/bespoke-jewellery', function () {
    return view('engagement-rings.bespoke-jewellery');
})->name('bespoke-jewellery');

Route::get('/custom-engagement-rings', function () {
    return view('engagement-rings.custom-engagement-rings');
})->name('custom-engagement-rings');
// End Create Your Diamond Ring
// -------------------------------- End Engagement Rings Routes ------------------------------------------

// -------------------------------- Fine Jewellery Routes ------------------------------------------------

// Earrings
Route::get('/earrings', function () {
    return view('components.fine-jewellery.earrings.earrings');
})->name('earrings');

Route::get('/stud-earrings', function () {
    return view('components.fine-jewellery.earrings.stud');
})->name('stud-earrings');

Route::get('/hoops-and-drops', function () {
    return view('components.fine-jewellery.earrings.hoops-and-drops');
})->name('hoops-and-drops');

Route::get('/halo-earrings', function () {
    return view('components.fine-jewellery.earrings.halo');
})->name('halo-earrings');

Route::get('/cluster', function () {
    return view('components.fine-jewellery.earrings.cluster');
})->name('cluster');

Route::get('/wedding-rings', function () {
    return view('components.fine-jewellery.wedding-rings.wedding-rings');
})->name('wedding-rings');
// Wedding Rings
Route::get('/diamond', function () {
    return view('components.fine-jewellery.wedding-rings.diamond');
})->name('diamond');

Route::get('/anniversary', function () {
    return view('components.fine-jewellery.wedding-rings.anniversary');
})->name('anniversary');

Route::get('/eternity', function () {
    return view('components.fine-jewellery.wedding-rings.eternity');
})->name('eternity');


Route::get('/stackable', function () {
    return view('components.fine-jewellery.wedding-rings.stackable');
})->name('stackable');

Route::get('/pendants', function () {
    return view('components.fine-jewellery.pendants.pendants');
})->name('pendants');

Route::get('/solitaire-pendants', function () {
    return view('components.fine-jewellery.pendants.solitaire');
})->name('solitaire-pendants');

Route::get('/halo-pendants', function () {
    return view('components.fine-jewellery.pendants.halo');
})->name('halo-pendants');

Route::get('/diamond-pendants', function () {
    return view('components.fine-jewellery.pendants.diamond-pendants');
})->name('diamond-pendants');

Route::get('/chains', function () {
    return view('components.fine-jewellery.pendants.chains');
})->name('chains');

Route::get('/bracelets', function () {
    return view('components.fine-jewellery.bracelets.bracelets');
})->name('bracelets');

// Tennis Bracelets
Route::get('/tennis-bracelets', function () {
    return view('components.fine-jewellery.bracelets.tennis-bracelets');
})->name('tennis-bracelets');

// Solitaire Bracelets
Route::get('/solitaire-bracelets', function () {
    return view('components.fine-jewellery.bracelets.solitaire-bracelets');
})->name('solitaire-bracelets');

Route::get('/all-diamond-necklaces', function () {
    return view('components.fine-jewellery.necklaces.all-diamond-necklaces');
});

// Diamond Necklaces
Route::get('/diamond-necklaces', function () {
    return view('components.fine-jewellery.necklaces.diamond-necklaces');
})->name('diamond-necklaces');

// Tennis Necklaces
Route::get('/tennis-necklaces', function () {
    return view('components.fine-jewellery.necklaces.tennis-necklaces');
})->name('tennis-necklaces');

// Ready To Ship
Route::get('/ready-to-ship', function () {
    return view('components.ready-to-ship');
});

// Membership
Route::get('/membership', function () {
    return view('components.membership');
});

// Subscription Plan
Route::get('/subscription-plan', function () {
    return view('components.subscription-plan');
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





// Footer Categories
Route::get('/categories/custom-shape-diamonds', function () {
    return view('categories.custom-shape-diamonds');
})->name('custom-shape-diamonds');




// Footer Help
Route::get('/about-us', function () {
    return view('components.help.about');
})->name('about-us');

Route::get('/compare-us', function () {
    return view('components.help.compare-us');
})->name('compare-us');

Route::get('/why-choose-us', function () {
    return view('components.help.why-choose-us');
})->name('why-choose-us');

// Route::get('/diamond-size-chart', function () {
//     return view('components.help.diamond-size-chart');
// })->name('diamond-size-chart');

Route::get('/faq', function () {
    return view('components.help.faq');
})->name('faq');

Route::get('/contact-us', function () {
    return view('components.help.contact-us');
})->name('contact-us');

Route::get('/education', function () {
    return view('components.help.education');
})->name('help.education');

// Footer Privacy
Route::get('/shipping-policy', function () {
    return view('privacy.shipping-policy');
})->name('shipping-policy');

Route::get('/return-refund-policy', function () {
    return view('privacy.return-refund-policy');
})->name('return-refund-policy');

Route::get('/price-match-policy', function () {
    return view('privacy.price-match-policy');
})->name('price-match-policy');

Route::get('/feedback', function () {
    return view('privacy.feedback');
})->name('feedback');

Route::get('/privacy-policy', function () {
    return view('privacy.privacy-policy');
})->name('privacy-policy');

Route::get('/terms-of-use', function () {
    return view('privacy.terms-of-use');
})->name('terms-of-use');



Route::get('/account/orders', [AccountController::class, 'orders'])->name('account.orders');


// ---------------------------------- Cart Routes -----------------------------------------------------
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
// ---------------------------------- End Cart Routes -------------------------------------------------

// ---------------------------------- Checkout Routes -------------------------------------------------
Route::get('/checkout/shipping', [CheckoutController::class, 'shipping'])->name('checkout.shipping');
Route::post('/checkout/shipping', [CheckoutController::class, 'storeShipping'])->name('checkout.shipping.store');
Route::get('/checkout/payment', [CheckoutController::class, 'payment'])->name('checkout.payment');
Route::post('/checkout/process', [CheckoutController::class, 'checkoutProcess'])->name('checkout.process');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/checkout/cancel', [CheckoutController::class, 'cancel'])->name('checkout.cancel');
Route::get('/checkout/complete', [CheckoutController::class, 'complete'])->name('checkout.complete');
// ---------------------------------- End Checkout Routes -------------------------------------------------

// ------------------------------- Addresses -----------------------------------------------------------
Route::get('/shipping-address', [AddressController::class, 'shipping'])->name('account.addresses.shipping');
Route::get('/billing-address', [AddressController::class, 'billing'])->name('account.addresses.billing');
Route::get('/account/addresses', [AddressController::class, 'addresses'])->name('account.addresses');
// -------------------------------- End Addresses ------------------------------------------------------

// -------------------------------- Customer Registration -----------------------------------------------
Route::get('/register', [CustomerController::class, 'index'])->name('customer.index');
Route::post('/register', [CustomerController::class, 'register'])->name('customer.store');
// -------------------------------- End Customer Registration -------------------------------------------

// -------------------------------- Password Reset ------------------------------------------------------
Route::post('/password-reset', [CustomerController::class, 'passwordReset'])->name('customer.password-reset');
Route::get('/password-reset/{token}', [CustomerController::class, 'showResetForm'])->name('password.reset.form');
Route::post('/password-reset/update', [CustomerController::class, 'updatePassword'])->name('password.update');
// -------------------------------- End Password Reset --------------------------------------------------

// -------------------------------- Customer Login ------------------------------------------------------
Route::get('/login', [CustomerController::class, 'loginIndex'])->name('customer.login.index');
Route::post('/login', [CustomerController::class, 'login'])->name('customer.login');
// -------------------------------- End Customer Login --------------------------------------------------

// -------------------------------- Inventory & Diamond Routes ------------------------------------------
Route::get('/inventory', [DiamondController::class, 'index'])->name('inventory');
Route::get('/inventory/diamond/{diamond}', [DiamondController::class, 'details'])->name('diamonds.details');
// -------------------------------- End Inventory & Diamond Routes --------------------------------------

// -------------------------------- Fancy Color Diamond Routes ------------------------------------------
Route::get('/fancy-color-diamonds', [ColorDiamondController::class , 'index'])->name('color.diamond');
Route::get('/color/diamond/{colorDiamond}', [ColorDiamond::class, 'details'])->name('color.diamonds.details');
// --------------------------------  End Fancy Color Diamond Routes ------------------------------------------



// -------------------------------- Natural Diamond Routes ------------------------------------------
Route::get('/natural-diamond', [NaturalDiamondController::class , 'index'] )->name('natural-diamond');
Route::get('/natural/diamond/{naturalDiamond}', [NaturalDiamondController::class, 'details'])->name('natural.diamonds.details');
// -------------------------------- End Natural Diamond Routes --------------------------------------

// -------------------------------- Antique Cut Diamond Routes ------------------------------------------
Route::get('/antique-cut-diamond', [AntiqueCutDiamondController::class , 'index'] )->name('antique.cut.diamond');
Route::get('/antique/cut/diamond/{naturalDiamond}', [AntiqueCutDiamondController::class, 'details'])->name('antique.cut.diamonds.details');
// -------------------------------- Antique Cut Diamond Routes ------------------------------------------




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

    // // Wishlist
    // Route::get('/account/wishlist', [AccountController::class, 'wishlist'])->name('account.wishlist');

    // Wishlist routes
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/toggle', [WishlistController::class, 'toggle'])->name('wishlist.toggle');
    Route::delete('/wishlist/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove');
});
// -------------------------------- End Authenticated Routes ---------------------------------------------