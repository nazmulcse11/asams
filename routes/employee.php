<?php

use App\Http\Controllers\Employee\AgentController;
use App\Http\Controllers\Employee\AgentUnitController;
use App\Http\Controllers\Employee\BuyerController;
use App\Http\Controllers\Auth\Employee\AuthenticatedSessionController;
use App\Http\Controllers\Auth\Employee\NewPasswordController;
use App\Http\Controllers\Auth\Employee\PasswordResetLinkController;
use App\Http\Controllers\Employee\BuyerPaymentController;
use App\Http\Controllers\Employee\InstallmentController;
use App\Http\Controllers\Employee\PropertyController;
use App\Http\Controllers\Employee\SaleRequestController;
use App\Http\Controllers\Employee\ShopController;
use Illuminate\Support\Facades\Route;

Route::prefix('employee')->name('employee.')->group(function () {
    Route::get("/", function () {
        return redirect()->route('employee.dashboard');
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
    Route::middleware(['employee'])->group(function () {
        Route::get('/dashboard', function () {
            return view('employee.dashboard');
        })->name('dashboard');

        // buyer routes
        Route::get('buyer/request', [BuyerController::class, "request"])->name('buyer.request');
        Route::get('buyer/request-show/{buyer}', [BuyerController::class, "requestShow"])->name('buyer.request.show');
        Route::post('buyer/request/approve/{buyer}', [BuyerController::class, "requestApprove"])->name('buyer.request.approve');
        Route::post('buyer/request/reject/{buyer}', [BuyerController::class, "requestReject"])->name('buyer.request.reject');
        Route::resource('buyer', BuyerController::class);

        Route::resource('agent', AgentController::class)
            ->except(["create", "destroy"]);

        // shop routes
         Route::resource('shop', ShopController::class)
             ->only(["index", "show"]);

         // payments and collections
        Route::resource('payment-collection', \App\Http\Controllers\Employee\PaymentCollectionController::class)
            ->names("payment.collection")
            ->only(["index", "show", "update"]);

        // installment
        Route::get("installment/plan", [\App\Http\Controllers\Employee\InstallmentController::class, "modalForm"])
            ->name("installment.plan");
        Route::post("installment/plan", [\App\Http\Controllers\Employee\InstallmentController::class, "storeInstallmentPlan"])
            ->name("installment.storePlan");




        // property routes
        Route::post('property/destroy-bulk', [PropertyController::class, 'destroyBulk'])
            ->name('property.destroy.bulk');
        Route::get("property/floor-map", [PropertyController::class, 'floorMap'] )
            ->name("property.floor-map");
        Route::resource('property', PropertyController::class);

        // sale request
        Route::get("sale-request", [SaleRequestController::class, 'index'])
            ->name("sale-request.index");
        Route::get("sale-request/{property}/create", [SaleRequestController::class, 'create'])
            ->name("sale-request.create");
        Route::post("sale-request/{property}/store", [SaleRequestController::class, 'store'])
            ->name("sale-request.store");

        // agent unit routes
        Route::post('agent-unit/destroy-bulk', [AgentUnitController::class, 'destroyBulk'])
            ->name('agent-unit.destroy.bulk');

        Route::get("agent-unit/unverified-list", [AgentUnitController::class, 'unverifiedList'])
            ->name("agent-unit.unverified.list");
        Route::post("agent-unit/verify/{agent_unit}", [AgentUnitController::class, 'verify'])
            ->name('agent-unit.verify');

        Route::get("agent-unit/verified-list", [AgentUnitController::class, 'verifiedList'])
            ->name("agent-unit.verified.list");

        Route::get("agent-unit/security-deposit", [AgentUnitController::class, 'securityDepositCollection'])
            ->name('agent-unit.security-deposit-collection');

        Route::post("agent-unit/security-deposit/{agent_unit}", [AgentUnitController::class, 'securityDeposit'])
            ->name('agent-unit.security-deposit');

        Route::resource('agent-unit', AgentUnitController::class)->except(["edit", "update"]);

        // installment routes
        Route::resource('agent-unit/{agent_unit}/installment', InstallmentController::class)
            ->only(["index", "create", "store", "show"]);

        // buyer payment routes
        Route::resource("buyer-payment", BuyerPaymentController::class)
            ->only(["index", "create", "store", 'show']);
        Route::post("buyer-payment/verify/{buyer_payment}", [BuyerPaymentController::class, "verify"])
            ->name("buyer->payment.verify");
    });
});

// temporary Route
//Route::get('employee/shop', function () {
//   return view("employee.shop");
//})->name('employee.shop.index');

Route::get('employee/shop-details', function () {
    return view("employee.shop-details");
})->name('employee.shop-details');

Route::get('employee/agent-shop-details', function () {
    return view("employee.agent-shop-details");
})->name('employee.agent-shop-details');

//Route::get('employee/agents', function () {
//    return view("employee.agents");
//})->name('employee.agents');

//Route::get('employee/buyer', function () {
//    return view("employee.buyer");
//})->name('employee.buyer');
//
//Route::get('employee/buyer-details', function () {
//    return view("employee.buyer-details");
//})->name('employee.buyer-details');

Route::get('employee/agent-details', function () {
    return view("employee.agent-details");
})->name('employee.agent-details');


//Route::get('employee/buyer', function () {
//    return view("employee.buyer");
//})->name('employee.buyer');
//
//Route::get('employee/buyer-details', function () {
//    return view("employee.buyer-details");
//})->name('employee.buyer-details');

Route::get('employee/buyer-shop-details', function () {
    return view("employee.buyer-shop-details");
})->name('employee.buyer-shop-details');

Route::get('employee/settings', function () {
    return view("employee.settings.index");
})->name('employee.settings');
