<?php

use App\Http\Controllers\Auth\Buyer\AuthenticatedSessionController;
use App\Http\Controllers\Auth\Buyer\NewPasswordController;
use App\Http\Controllers\Auth\Buyer\PasswordResetLinkController;
use Illuminate\Support\Facades\Route;




Route::get('buyer/purchase', function () {
    return view("buyer.purchase.index");
});

Route::prefix('buyer')
    ->name('buyer.')
    ->group(function () {
    Route::get("/", function () {
        return redirect()->route('buyer.dashboard');
    });

    // Login & Logout
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // Password Reset
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');


    // Dashboard (Protected)
    Route::middleware(['buyer'])->group(function () {

        Route::get('dashboard', function () {
            return view('buyer.dashboard');
        })->name('dashboard');

    });
});

Route::get('buyer/purchase', function () {
    return view("buyer.purchase.index");
})->name('buyer.purchase.index');

Route::get('buyer/payments-installments', function () {
    return view("buyer.payments-installments.index");
})->name('buyer.payments-installments.index');

Route::get('buyer/purchase/shop-details', function () {
    return view("buyer.purchase.shop-details");
})->name('buyer.purchase.shop-details');

Route::get('buyer/reports', function () {
    return view("buyer.reports.index");
})->name('buyer.reports.index');

Route::get('buyer/reports/purchase-report', function () {
    return view("buyer.reports.purchase-report");
})->name('buyer.reports.purchase-report');

Route::get('buyer/reports/agreement-report', function () {
    return view("buyer.reports.agreement-report");
})->name('buyer.reports.agreement-report');

Route::get('buyer/reports/installment-report', function () {
    return view("buyer.reports.installment-report");
})->name('buyer.reports.installment-report');



Route::get('buyer/settings', function () {
    return view("buyer.settings.index");
})->name('buyer.settings.index');
