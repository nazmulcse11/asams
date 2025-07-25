<?php


use App\Http\Controllers\Agent\AgentUnitController;
use App\Http\Controllers\Agent\ShopReservationController;
use App\Http\Controllers\Auth\Agent\AuthenticatedSessionController;
use App\Http\Controllers\Auth\Agent\NewPasswordController;
use App\Http\Controllers\Auth\Agent\PasswordResetLinkController;
use App\Http\Controllers\Auth\Agent\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::prefix('agent')->name('agent.')->group(function () {
    Route::get("/", function () {
        return redirect()->route('agent.dashboard');
    });

    // registration routes
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

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
    Route::middleware(['agent'])->group(function () {

        Route::get('/dashboard', function () {

            $breadcrumbsItems = [
                [
                    'name' => 'Home',
                    'url' => '/',
                    'active' => true
                ],
            ];

            return view('agent.dashboard', [
                'pageTitle' => 'Agent Dashboard',
                'breadcrumbItems' => $breadcrumbsItems
            ]);
        })->name('dashboard');

        Route::get('/reserved-shop/new-reservation', function () {
            return view('agent.reserved-shop.reserved-property');
        })->name('reserved-property');

        Route::get('/payment-commission', function () {
            return view('agent.payment-commission.index');
        })->name('payment-commission');



        Route::get('/reports', function () {
            return view('agent.reports.index');
        })->name('reports');

        Route::get('/settings', function () {
            return view('agent.settings.index');
        })->name('settings');


        // shop routes
        Route::get('/shop/new', [\App\Http\Controllers\Agent\ShopController::class, 'getReservationBody'])->name('shop.reservation.body');
        Route::get('/shop/search', [\App\Http\Controllers\Agent\ShopController::class, 'search'])->name('shop.search');
        Route::get('/shop/{shop}', [\App\Http\Controllers\Agent\ShopController::class, 'show'])->name('shop.show');

        // shop reserved routes
        Route::get('/reserved-shop', [ShopReservationController::class, 'index'])->name('reserved-shop.index');
        Route::post('/reserved-shop/market', [ShopReservationController::class, 'market'])->name('reserved-shop.market');
        Route::get('/reserved-shop/floor-plan/{property}', [ShopReservationController::class, 'floorPlan'])->name('reserved-shop.floor-plan');
        Route::post('/reserved-shop', [ShopReservationController::class, 'reserve'])->name('reserved-shop.reserve');

        Route::resource('buyer', \App\Http\Controllers\Agent\BuyerController::class)
            ->names("buyer")
            ->only(["index", "store", "show"]);
    });
});
