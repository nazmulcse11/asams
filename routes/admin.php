<?php

use App\Http\Controllers\Admin\AdministatorController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\AgentShopRequestController;
use App\Http\Controllers\Admin\AgentUnitController;
use App\Http\Controllers\Admin\BuyerController;
use App\Http\Controllers\Admin\BuyerPaymentController;
use App\Http\Controllers\Admin\Console\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\InstallmentController;
use App\Http\Controllers\Admin\PaymentCommissionController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SaleRequestController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Auth\Admin\AuthenticatedSessionController;
use App\Http\Controllers\Auth\Admin\NewPasswordController;
use App\Http\Controllers\Auth\Admin\PasswordResetLinkController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::middleware([\App\Http\Middleware\SetLocale::class])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {


    Route::get("/", function () {
        return redirect()->route('admin.dashboard');
    });

    // auth routes
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // Password Reset
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');


    // Dashboard (Protected)
    Route::middleware(['admin', 'verified'])->group(function () {

        Route::prefix("console")->name("console.")->group(function () {
            Route::get("/", \App\Http\Controllers\Admin\Console\DashboardController::class)->name("dashboard");
            Route::post("properties/init", [\App\Http\Controllers\Admin\Console\PropertiesController::class, "initValidation"])
                ->name("property.init");
            Route::resource("properties", \App\Http\Controllers\Admin\Console\PropertiesController::class)
                ->only(["index", "show", "store", "edit", "update", "destroy"])
                ->names("property");
            Route::apiResource("floor", \App\Http\Controllers\Admin\Console\FloorController::class)
                ->names("floor");
            Route::apiResource("block", \App\Http\Controllers\Admin\Console\BlockController::class)
                ->except(["show"])
                ->names("block");
            Route::get("shop/form", \App\Http\Controllers\Admin\Console\ShopController::class . "@form")
                ->name("shop.form");
            Route::apiResource("shop", \App\Http\Controllers\Admin\Console\ShopController::class)
                ->names("shop");

            Route::resource("users/admin", \App\Http\Controllers\Admin\Console\AdminUserController::class)->names("user.admin");
            Route::resource("users/employee", \App\Http\Controllers\Admin\Console\EmployeeUserController::class)->names("user.employee");
            Route::resource("roles/admin", \App\Http\Controllers\Admin\Console\AdminRoleController::class)->names("role.admin");
            Route::resource("roles/employee", \App\Http\Controllers\Admin\Console\EmployeeRoleController::class)->names("role.employee");

            Route::get("settings", [SettingController::class, "index"])->name("settings");
            Route::post("settings/general", [SettingController::class, 'general'])->name("settings.general");
            Route::post("settings/email", [SettingController::class, 'email'])->name("settings.email");
            Route::post("settings/sms", [SettingController::class, 'sms'])->name("settings.sms");
            Route::post("settings/notification", [SettingController::class, 'notification'])->name("settings.notification");
            Route::post("settings/localization", [SettingController::class, 'localization'])->name("settings.localization");
            Route::post("settings/media", [SettingController::class, 'media'])->name("settings.media");
            Route::post("settings/security", [SettingController::class, 'security'])->name("settings.security");
        });

        // dashboard route
        Route::get('/dashboard', DashboardController::class)->name('dashboard');

        Route::get("blank", function (){
            $breadcrumbsItems = [
                [
                    'name' => 'Blank',
                    'url' => '/blank',
                    'active' => true
                ],
            ];
            return view('blank', [
                'pageTitle' => 'Blank',
                'breadcrumbItems' => $breadcrumbsItems,
            ]);
        });

        // employee routes
        Route::resource('employee', EmployeeController::class);
        Route::post('employee/destroy-bulk', [EmployeeController::class, 'destroyBulk'])
            ->name('employee.destroy.bulk');

        // administrator routes
        Route::resource('administrator', AdministatorController::class);
        Route::post('administrator/destroy-bulk', [AdministatorController::class, 'destroyBulk'])
            ->name('administrator.destroy.bulk');

        // property routes
        Route::resource('payment-commission', PaymentCommissionController::class)
            ->names('payment.commission');

        // shop routes
        Route::resource('shop', ShopController::class)
            ->only(["index", "show"]);

        // agent routes
        Route::resource('agent', AgentController::class)
            ->except(["create"]);

        // buyer routes
        Route::get('buyer/request', [BuyerController::class, "request"])
            ->name('buyer.request');
            
        Route::get('buyer/request-show/{buyer}', [BuyerController::class, "requestShow"])
            ->name('buyer.request.show');

        Route::get('buyer/requestshow', function () {
            return view("buyer.requestshow");
        })->name('buyer.requestshow');

        Route::resource('buyer', BuyerController::class)
            ->except(["create"]);

        // sale request
        Route::get("sale-request", [SaleRequestController::class, 'index'])
            ->name("sale-request.index");
        Route::get("sale-request/{property}/create", [SaleRequestController::class, 'create'])
            ->name("sale-request.create");
        Route::post("sale-request/{property}/store", [SaleRequestController::class, 'store'])
            ->name("sale-request.store");

        // agent unit routes
        Route::get("agent-unit/unverified-list", [AgentUnitController::class, 'unverifiedList'])
            ->name("agent-unit.unverified.list");
        Route::match(['get', 'post'], 'agent-unit/{shop}/approve', [AgentUnitController::class, 'approveUnit'])
            ->name('agent-unit.approve');

        Route::post("agent-unit/verify/{agent_unit}", [AgentUnitController::class, 'verify'])
            ->name('agent-unit.verify');

        Route::get("agent-unit/verified-list", [AgentUnitController::class, 'verifiedList'])
            ->name("agent-unit.verified.list");

        Route::get("agent-unit/security-deposit", [AgentUnitController::class, 'securityDepositCollection'])
            ->name('agent-unit.security-deposit-collection');

        Route::post("agent-unit/security-deposit/{agent_unit}", [AgentUnitController::class, 'securityDeposit'])
            ->name('agent-unit.security-deposit');

        Route::post('agent-unit/destroy-bulk', [AgentUnitController::class, 'destroyBulk'])
            ->name('agent-unit.destroy.bulk');

        Route::resource('agent-unit', AgentUnitController::class)->except(["edit", "update", "create", "store"]);

        // agent shop request
        Route::get("agent-shop-request", [AgentShopRequestController::class, "index"])
            ->name("agent-unit.create");
        Route::post("agent-shop-request", [AgentShopRequestController::class, "store"])
            ->name("agent-unit.store");
        Route::get("agent-shop-request/agent-floor-map/{id}", [AgentShopRequestController::class, 'floorMap'])
            ->name("agent-unit.agent-floor-map");

        // installment routes
        Route::get('installment', [InstallmentController::class, 'index'])
            ->name("installment.index");
        Route::get('installment/{shop}/{agent}/create', [InstallmentController::class, 'create'])
            ->name("installment.create");
        Route::post('installment/{shop}/{agent}', [InstallmentController::class, 'store'])
            ->name("installment.store");

        // buyer payment routes
        Route::resource("buyer-payment", BuyerPaymentController::class)
            ->only(["index", "create", "store", "show"]);
        Route::post("buyer-payment/verify/{buyer_payment}", [BuyerPaymentController::class, "verify"])
            ->name("buyer->payment.verify");

        // report routes
        Route::get("report/property-buyer-shop", [ReportController::class, "propertyBuyerShopReport"])
            ->name("report.property-buyer-shop");
        Route::get("report/index", [ReportController::class, "index"])
            ->name("report.index");
        Route::get("report/show/{id}", [ReportController::class, "show"]);

        // settings routes
        Route::get("settings", [AdminSettingsController::class, 'index'])
            ->name("settings.index");
        Route::post("settings/booking", [AdminSettingsController::class, 'booking'])
            ->name("settings.booking");
        Route::post("settings/contact", [AdminSettingsController::class, 'contact'])
            ->name("settings.contact");

        Route::get('/clear', function () {
            Artisan::call('cache:clear');
            Artisan::call('route:clear');
            Artisan::call('config:clear');
            Artisan::call('view:clear');
            Artisan::call('event:clear');
            Artisan::call('optimize:clear');

            return 'All caches cleared successfully!';
        });        
    });
});
