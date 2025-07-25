<?php

namespace App\Providers;

use App\Repositories\AgentPaymentRepository;
use App\Repositories\Contracts\AgentPaymentRepositoryInterface;

use App\Repositories\ShopForRepository;
use App\Repositories\Contracts\ShopForRepositoryInterface;

use App\Repositories\ReserveTypeRepository;
use App\Repositories\Contracts\ReserveTypeRepositoryInterface;

use App\Repositories\AgentShopRepository;
use App\Repositories\Contracts\AgentShopRepositoryInterface;

use App\Repositories\UserPropertyLinkRepository;
use App\Repositories\Contracts\UserPropertyLinkRepositoryInterface;

use App\Repositories\BuyerTypeRepository;
use App\Repositories\Contracts\BuyerTypeRepositoryInterface;

use App\Repositories\PropertySetupRepository;
use App\Repositories\Contracts\PropertySetupRepositoryInterface;

use App\Repositories\CityRepository;
use App\Repositories\Contracts\CityRepositoryInterface;

use App\Repositories\StateRepository;
use App\Repositories\Contracts\StateRepositoryInterface;

use App\Repositories\CountryRepository;
use App\Repositories\Contracts\CountryRepositoryInterface;

use App\Repositories\FloorComponentRepository;
use App\Repositories\Contracts\FloorComponentRepositoryInterface;

use App\Repositories\FloorComponentTypeRepository;
use App\Repositories\Contracts\FloorComponentTypeRepositoryInterface;

use App\Repositories\BuyerInstallmentRepository;
use App\Repositories\Contracts\BuyerInstallmentRepositoryInterface;
use App\Repositories\BuyerShopRepository;
use App\Repositories\Contracts\BuyerShopRepositoryInterface;
use App\Repositories\ShopDepositRepository;
use App\Repositories\Contracts\ShopDepositRepositoryInterface;
use App\Repositories\ShopRepository;
use App\Repositories\Contracts\ShopRepositoryInterface;
use App\Repositories\PropertyTypeRepository;
use App\Repositories\Contracts\PropertyTypeRepositoryInterface;
use App\Repositories\SaleRequestRepository;
use App\Repositories\Contracts\SaleRequestRepositoryInterface;
use App\Repositories\PaymentModeRepository;
use App\Repositories\Contracts\PaymentModeRepositoryInterface;
use App\Repositories\BuyerPaymentRepository;
use App\Repositories\Contracts\BuyerPaymentRepositoryInterface;
use App\Repositories\PaymentTypeRepository;
use App\Repositories\Contracts\PaymentTypeRepositoryInterface;
use App\Repositories\InstallmentRepository;
use App\Repositories\Contracts\InstallmentRepositoryInterface;
use App\Repositories\AgentUnitRepository;
use App\Repositories\Contracts\AgentUnitRepositoryInterface;
use App\Repositories\AddressTypeRepository;
use App\Repositories\AdministratorRepository;
use App\Repositories\AgentRepository;
use App\Repositories\BlockRepository;
use App\Repositories\BloodGroupRepository;
use App\Repositories\BuyerRepository;
use App\Repositories\Contracts\AddressTypeRepositoryInterface;
use App\Repositories\Contracts\AdministratorRepositoryInterface;
use App\Repositories\Contracts\AgentRepositoryInterface;
use App\Repositories\Contracts\BlockRepositoryInterface;
use App\Repositories\Contracts\BloodGroupRepositoryInterface;
use App\Repositories\Contracts\BuyerRepositoryInterface;
use App\Repositories\Contracts\EmployeeRepositoryInterface;
use App\Repositories\Contracts\FloorRepositoryInterface;
use App\Repositories\Contracts\GenderRepositoryInterface;
use App\Repositories\Contracts\MaritalRepositoryInterface;
use App\Repositories\Contracts\PropertyRepositoryInterface;
use App\Repositories\Contracts\StatusRepositoryInterface;
use App\Repositories\Contracts\StatusTypeRepositoryInterface;
use App\Repositories\EmployeeRepository;
use App\Repositories\FloorRepository;
use App\Repositories\GenderRepository;
use App\Repositories\MaritalRepository;
use App\Repositories\PropertyRepository;
use App\Repositories\StatusRepository;
use App\Repositories\StatusTypeRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryRegisterProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
        $this->app->singleton(AgentPaymentRepositoryInterface::class, AgentPaymentRepository::class);
        $this->app->singleton(ShopForRepositoryInterface::class, ShopForRepository::class);
        $this->app->singleton(AgentShopRepositoryInterface::class, AgentShopRepository::class);
        $this->app->singleton(UserPropertyLinkRepositoryInterface::class, UserPropertyLinkRepository::class);
        $this->app->singleton(BuyerTypeRepositoryInterface::class, BuyerTypeRepository::class);
        $this->app->singleton(PropertySetupRepositoryInterface::class, PropertySetupRepository::class);
        $this->app->singleton(CityRepositoryInterface::class, CityRepository::class);
        $this->app->singleton(StateRepositoryInterface::class, StateRepository::class);
        $this->app->singleton(CountryRepositoryInterface::class, CountryRepository::class);
        $this->app->singleton(FloorComponentRepositoryInterface::class, FloorComponentRepository::class);
        $this->app->singleton(FloorComponentTypeRepositoryInterface::class, FloorComponentTypeRepository::class);
        $this->app->singleton(BuyerInstallmentRepositoryInterface::class, BuyerInstallmentRepository::class);
        $this->app->singleton(BuyerShopRepositoryInterface::class, BuyerShopRepository::class);
        $this->app->singleton(ShopDepositRepositoryInterface::class, ShopDepositRepository::class);
        $this->app->singleton(ShopRepositoryInterface::class, ShopRepository::class);
        $this->app->singleton(PropertyTypeRepositoryInterface::class, PropertyTypeRepository::class);
        $this->app->singleton(SaleRequestRepositoryInterface::class, SaleRequestRepository::class);
        $this->app->singleton(PaymentModeRepositoryInterface::class, PaymentModeRepository::class);
        $this->app->singleton(BuyerPaymentRepositoryInterface::class, BuyerPaymentRepository::class);
        $this->app->singleton(PaymentTypeRepositoryInterface::class, PaymentTypeRepository::class);
        $this->app->singleton(InstallmentRepositoryInterface::class, InstallmentRepository::class);
        $this->app->singleton(AgentUnitRepositoryInterface::class, AgentUnitRepository::class);
        $this->app->singleton(AddressTypeRepositoryInterface::class, AddressTypeRepository::class);
        $this->app->singleton(BloodGroupRepositoryInterface::class, BloodGroupRepository::class);
        $this->app->singleton(GenderRepositoryInterface::class, GenderRepository::class);
        $this->app->singleton(MaritalRepositoryInterface::class, MaritalRepository::class);
        $this->app->singleton(StatusRepositoryInterface::class, StatusRepository::class);
        $this->app->singleton(StatusTypeRepositoryInterface::class, StatusTypeRepository::class);
        $this->app->singleton(EmployeeRepositoryInterface::class, EmployeeRepository::class);
        $this->app->singleton(AdministratorRepositoryInterface::class, AdministratorRepository::class);
        $this->app->singleton(AgentRepositoryInterface::class, AgentRepository::class);
        $this->app->singleton(BuyerRepositoryInterface::class, BuyerRepository::class);
        $this->app->singleton(PropertyRepositoryInterface::class, PropertyRepository::class);
        $this->app->singleton(FloorRepositoryInterface::class, FloorRepository::class);
        $this->app->singleton(BlockRepositoryInterface::class, BlockRepository::class);

    }
}
