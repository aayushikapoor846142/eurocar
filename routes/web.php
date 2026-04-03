<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CarsController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\PaymentController;

// Test Route
Route::get('/test', function () {
    return 'Test route is working!';
});

// Home
Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

// Authentication Routes
Route::get('/sign-in', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/sign-in', [\App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/sign-up', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/sign-up', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Password Reset Routes...
Route::get('password/reset', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [\App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.reset');

// Email Verification Routes...
Route::get('email/verify', [\App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [\App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [\App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.resend');

// Logout Route
Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/get-started', [PageController::class, 'getStarted'])->name('get.started');
Route::post('/my-account/update-profile', [PageController::class, 'updateProfile'])->name('account.update');
// Car Related Routes
Route::middleware(['auth'])->group(function () {
    // Other authenticated routes...
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/bookings/{booking}', [BookingController::class, 'show'])->name('bookings.show');
    Route::post('/bookings/{booking}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');
    
    // Payment Routes
    Route::post('/payments/process', [PaymentController::class, 'process'])->name('payments.process');
    Route::get('/payments/success', [PaymentController::class, 'success'])->name('payments.success');
    Route::get('/payments/cancel', [PaymentController::class, 'cancel'])->name('payments.cancel');

    Route::post('/password/update', [PageController::class, 'updatePassword'])->name('password.update');
});

Route::prefix('cars')->name('cars.')->group(function () {
    Route::get('/', [PageController::class, 'carsGrid'])->name('grid');
    Route::get('/grid-4', [PageController::class, 'carsGrid4'])->name('grid4');
    Route::get('/hourly', [PageController::class, 'carsGridHourly'])->name('hourly');
    Route::get('/multiday', [PageController::class, 'carsGridMultiDay'])->name('multiday');
    Route::get('/detail/{id}', [CarsController::class, 'show'])->name('detail');
    Route::get('/search', [CarsController::class, 'search'])->name('search');
    Route::post('/enquiry', [\App\Http\Controllers\Frontend\CarEnquiryController::class, 'store'])->name('enquiry.store');
});
// Booking Routes

// Booking Routes
Route::prefix('booking')->group(function () {
    Route::get('/{id}', [PageController::class, 'bookingDetail'])->name('booking.detail');
    Route::get('/passenger-details', [PageController::class, 'passengerDetails'])->name('booking.passenger.details');
    Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');
    Route::get('/cart', [PageController::class, 'cart'])->name('cart');
});


// Blog Routes
Route::prefix('blog')->group(function () {
      Route::get('/', [BlogController::class, 'index'])->name('blog.index');
      Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');
      Route::get('/tag/{tag}', [BlogController::class, 'tag'])->name('blog.tag');
});

// Static Pages
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/terms-and-conditions', [PageController::class, 'termsConditions'])->name('termsConditions');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/conditions', [PageController::class, 'conditions'])->name('conditions');

// Language & Currency Switching
Route::get('/locale/{locale}', function ($locale) {
    if (in_array($locale, config('app.available_locales'))) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('locale.switch');

Route::get('/currency/{currency}', function ($currency) {
    if (in_array($currency, config('app.available_currencies'))) {
        session(['currency' => $currency]);
    }
    return redirect()->back();
})->name('currency.switch');

// User Account Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/my-account', [PageController::class, 'myAccount'])->name('account');
    Route::get('/my-bookings', [PageController::class, 'myBookings'])->name('bookings');
    Route::get('/profile', [PageController::class, 'profile'])->name('profile');
});

// Multi-day Trip Routes
Route::get('/multiday-trip/{id}', [PageController::class, 'multiDayTripDetail'])->name('multiday.trip.detail');

// Contact Form Routes
Route::get('/contact-us', [\App\Http\Controllers\ContactController::class, 'create'])->name('contact');
Route::post('/contact-us', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

// Admin Routes (must be after auth middleware is defined)
require __DIR__.'/admin.php';
