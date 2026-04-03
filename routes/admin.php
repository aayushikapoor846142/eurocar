<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\BlogTagController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\VehicleCategoryController;

Route::prefix('admin')
     ->name('admin.')
     ->middleware(['auth', 'admin'])
     ->group(function () {
         // Dashboard
         Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
         // routes/web.php
         // Users Management
         Route::resource('users', UserController::class);
        Route::resource('blogs', BlogController::class);
         Route::resource('blog-tags', BlogTagController::class)->except(['show']);
        Route::resource('cars', CarController::class);
        Route::resource('cities', CityController::class);
        Route::resource('car-enquiries', \App\Http\Controllers\Admin\CarEnquiryController::class)->only(['index', 'show', 'destroy']);
        Route::patch('car-enquiries/{carEnquiry}/status', [\App\Http\Controllers\Admin\CarEnquiryController::class, 'updateStatus'])->name('car-enquiries.update-status');
         // Contact Messages Management
         Route::resource('countries', CountryController::class);
         Route::resource('vehicle-categories', VehicleCategoryController::class);

         Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
         Route::get('contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
         Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
         Route::post('contacts/{contact}/mark-as-read', [ContactController::class, 'markAsRead'])->name('contacts.mark-as-read');
     });
