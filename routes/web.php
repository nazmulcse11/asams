<?php

use App\Http\Controllers\DropdownController;
use App\Http\Controllers\FloorPlanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SetLocaleController;
use App\Models\RfidSession;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;


Route::get('/test-rfid', function () {
    $pcName = 'Sozan';

    $session = RfidSession::active()
        ->where('pc_name', $pcName)
        ->latest()
        ->first();

    if ($session) {
        echo "✅ Card is active. UID: {$session->uid}, Connected at: {$session->connected_at->format('H:i:s')}";
    } else {
        echo "❌ No card connected or session ended.";
    }
});



Route::get('/', function () {
    return view("website.index");
})->name("home");

Route::middleware(['any.auth'])->group(function () {
    Route::get('/dropdowns/{type}', [DropdownController::class, 'fetch'])->name("dropdowns");

    // set locale route
    Route::get('setlocale/{locale}', SetLocaleController::class)->name('setlocale');

    // user property routes
    Route::post("user-property-link", \App\Http\Controllers\UserPropertyController::class)->name("user-property-link");


    Route::name('any.')->group(function () {
        // floor routes
        Route::get('/floor-body', [\App\Http\Controllers\Any\FloorController::class, "body"])->name("floor.body");

        // shop routes
        Route::get('/shop/search', [\App\Http\Controllers\Agent\ShopController::class, 'search'])->name('shop.search');

        Route::get("shop-reserve", [\App\Http\Controllers\Any\ShopReserveController::class, "reserveForm"])->name("shop-reservation.reserve");
        Route::post("shop-reserve/verify", [\App\Http\Controllers\Any\ShopReserveController::class, "verifyRequest"])->name("shop-reservation.verify");
        Route::post("shop-reserve/approve", [\App\Http\Controllers\Any\ShopReserveController::class, "approveRequest"])->name("shop-reservation.approve");
        Route::post("shop-reserve/reject", [\App\Http\Controllers\Any\ShopReserveController::class, "rejectRequest"])->name("shop-reservation.reject");
        Route::get("shop-reserve/security-form", [\App\Http\Controllers\Any\ShopReserveController::class, "securityForm"])->name("shop-reservation.security-form");
        Route::post("shop-reserve/security-deposit", [\App\Http\Controllers\Any\ShopReserveController::class, "securityDeposit"])->name("shop-reservation.security-deposit");
        Route::get("shop-reserve/security-approve-modal", [\App\Http\Controllers\Any\ShopReserveController::class, "securityApproveModal"])->name("shop-reservation.security-approve-modal");
        Route::post("shop-reserve/security-verify", [\App\Http\Controllers\Any\ShopReserveController::class, "securityVerify"])->name("shop-reservation.security-verify");
        Route::post("shop-reserve/security-approve", [\App\Http\Controllers\Any\ShopReserveController::class, "securityApprove"])->name("shop-reservation.security-approve");
        Route::post("shop-reserve/security-reject", [\App\Http\Controllers\Any\ShopReserveController::class, "securityReject"])->name("shop-reservation.security-reject");

        Route::get("sale-request", [\App\Http\Controllers\Any\ShopSaleController::class, "saleForm"])->name("shop-request.show");
        Route::post("sale-request", [\App\Http\Controllers\Any\ShopSaleController::class, "store"])->name("shop-request.store");
        Route::get("sale-request/modal-form", [\App\Http\Controllers\Any\ShopSaleController::class, "modalForm"])->name("shop-request.modal-form");
        Route::post("sale-request/reject", [\App\Http\Controllers\Any\ShopSaleController::class, "rejectRequest"])->name("shop-request.reject");
        Route::post("sale-request/approve", [\App\Http\Controllers\Any\ShopSaleController::class, "approveRequest"])->name("shop-request.approve");
        Route::post("sale-request/verify", [\App\Http\Controllers\Any\ShopSaleController::class, "verifyRequest"])->name("shop-request.verify");
    });
});



Route::get("/floor-plan/floor/{id}", [FloorPlanController::class, "floor"])
    ->name("floor-plan.floor");

Route::get("/floor-plan/floor/{floor}/agent/{agent}", [FloorPlanController::class, "agentShops"])
    ->name("floor-plan.agent.shops");

Route::put("/floor-plan/unit-position", [FloorPlanController::class, "updatePosition"])
    ->name("floor-plan.update-position");

Route::delete("/floor-plan/unit/{id}", [FloorPlanController::class, "delete"])
    ->name("floor-plan.delete-shop");

Route::post("floor-plan/component", [FloorPlanController::class, "storeComponent"])
    ->name("floor-plan.store-component");

Route::put("floor-plan/component", [FloorPlanController::class, "updateComponentPosition"])
    ->name("floor-plan.update-component-position");

Route::delete("/floor-plan/component/{id}", [FloorPlanController::class, "deleteComponent"])
    ->name("floor-plan.delete-component");


require __DIR__.'/admin.php';
require __DIR__.'/agent.php';
require __DIR__.'/employee.php';
require __DIR__.'/buyer.php';
