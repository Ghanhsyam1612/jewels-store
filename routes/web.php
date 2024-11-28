<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('components.register');
});

Route::get('/login', function () {
    return view('components.login');
});

// Header Menu  
Route::get('/inventory', function () {
    return view('components.inventory');
});

Route::get('/calibrated', function () {
    return view('components.lab-diamonds.calibrated');
});

Route::get('/fancy-shapes-diamonds', function () {
    return view('components.lab-diamonds.fancy-shapes-diamonds');
});

Route::get('/fancy-color-melee-diamonds', function () {
    return view('components.lab-diamonds.fancy-color-melee-diamonds');
});

// Engagement Rings
Route::get('/start-with-a-setting', function () {
    return view('components.engagement-rings.start-with-a-setting');
});

Route::get('/bespoke-jewellery', function () {
    return view('components.engagement-rings.bespoke-jewellery');
});

Route::get('/custom-engagement-rings', function () {
    return view('components.engagement-rings.custom-engagement-rings');
});

// Fine Jewellery
Route::get('/stud-earrings', function () {
    return view('components.fine-jewellery.stud');
});

// Product Display Pages
Route::get('/product', function () {
    return view('components.product.product');
});

// My Account
Route::get('/myaccount', function () {
    return view('components.account.myaccount');
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


