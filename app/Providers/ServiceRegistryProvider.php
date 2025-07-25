<?php

namespace App\Providers;

use App\Services\AgentPaymentService;
use App\Services\Contracts\AgentPaymentServiceInterface;

use App\Services\AgentShopService;
use App\Services\Contracts\AgentShopServiceInterface;

use App\Services\UserPropertyLinkService;
use App\Services\Contracts\UserPropertyLinkServiceInterface;

use App\Services\PropertyTypeService;
use App\Services\Contracts\PropertyTypeServiceInterface;

use App\Services\PropertySetupService;
use App\Services\Contracts\PropertySetupServiceInterface;

use App\Services\ActivityLog\Contracts\ActivityLogServiceInterface;
use App\Services\ActivityLog\SpatieActivityLogService;
use App\Services\FloorComponentService;
use App\Services\Contracts\FloorComponentServiceInterface;

use App\Services\AdminReportService;
use App\Services\Contracts\AdminReportServiceInterface;

use App\Services\BuyerShopService;
use App\Services\Contracts\BuyerShopServiceInterface;
use App\Services\BlockService;
use App\Services\Contracts\BlockServiceInterface;
use App\Services\FloorService;
use App\Services\Contracts\FloorServiceInterface;
use App\Services\ShopService;
use App\Services\Contracts\ShopServiceInterface;
use App\Services\SaleRequestService;
use App\Services\Contracts\SaleRequestServiceInterface;
use App\Services\BuyerPaymentService;
use App\Services\Contracts\BuyerPaymentServiceInterface;
use App\Services\InstallmentService;
use App\Services\Contracts\InstallmentServiceInterface;
use App\Services\AgentUnitService;
use App\Services\Contracts\AgentUnitServiceInterface;
use App\Services\AdministratorService;
use App\Services\AgentService;
use App\Services\BuyerService;
use App\Services\Contracts\AdministratorServiceInterface;
use App\Services\Contracts\AgentServiceInterface;
use App\Services\Contracts\BuyerServiceInterface;
use App\Services\Contracts\EmployeeServiceInterface;
use App\Services\Contracts\PropertyServiceInterface;
use App\Services\EmployeeService;
use App\Services\PropertyService;
use Illuminate\Support\ServiceProvider;

class ServiceRegistryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
        $this->app->singleton(AgentPaymentServiceInterface::class, AgentPaymentService::class);        
        $this->app->singleton(AgentShopServiceInterface::class, AgentShopService::class);        
        $this->app->singleton(UserPropertyLinkServiceInterface::class, UserPropertyLinkService::class);        
        $this->app->singleton(PropertyTypeServiceInterface::class, PropertyTypeService::class);        
        $this->app->singleton(PropertySetupServiceInterface::class, PropertySetupService::class);
        $this->app->singleton(FloorComponentServiceInterface::class, FloorComponentService::class);
        $this->app->singleton(AdminReportServiceInterface::class, AdminReportService::class);
        $this->app->singleton(BuyerShopServiceInterface::class, BuyerShopService::class);
        $this->app->singleton(BlockServiceInterface::class, BlockService::class);
        $this->app->singleton(FloorServiceInterface::class, FloorService::class);
        $this->app->singleton(ShopServiceInterface::class, ShopService::class);
        $this->app->singleton(SaleRequestServiceInterface::class, SaleRequestService::class);
        $this->app->singleton(BuyerPaymentServiceInterface::class, BuyerPaymentService::class);
        $this->app->singleton(InstallmentServiceInterface::class, InstallmentService::class);
        $this->app->singleton(AgentUnitServiceInterface::class, AgentUnitService::class);
        $this->app->singleton(EmployeeServiceInterface::class, EmployeeService::class);
        $this->app->singleton(AdministratorServiceInterface::class, AdministratorService::class);
        $this->app->singleton(AgentServiceInterface::class, AgentService::class);
        $this->app->singleton(BuyerServiceInterface::class, BuyerService::class);
        $this->app->singleton(PropertyServiceInterface::class, PropertyService::class);
        $this->app->bind(ActivityLogServiceInterface::class, SpatieActivityLogService::class);

    }
}
