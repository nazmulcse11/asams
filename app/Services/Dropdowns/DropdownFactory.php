<?php

namespace App\Services\Dropdowns;

use App\Services\Dropdowns\Contracts\DropdownFactoryInterface;
use App\Services\Dropdowns\Providers\AddressTypeDropdownProvider;
use App\Services\Dropdowns\Providers\AgentDropdownProvider;
use App\Services\Dropdowns\Providers\AgentUnitDropdownProvider;
use App\Services\Dropdowns\Providers\BlockDropdownProvider;
use App\Services\Dropdowns\Providers\BloodGroupDropdownProvider;
use App\Services\Dropdowns\Providers\BuyerDropdownProvider;
use App\Services\Dropdowns\Providers\BuyerTypeDropdownProvider;
use App\Services\Dropdowns\Providers\CityDropdownProvider;
use App\Services\Dropdowns\Providers\CountryDropdownProvider;
use App\Services\Dropdowns\Providers\FloorDropdownProvider;
use App\Services\Dropdowns\Providers\GenderDropdownProvider;
use App\Services\Dropdowns\Providers\InstallmentDropdownProvider;
use App\Services\Dropdowns\Providers\MaritalStatusDropdownProvider;
use App\Services\Dropdowns\Providers\PaymentModeDropdownProvider;
use App\Services\Dropdowns\Providers\PaymentTypeDropdownProvider;
use App\Services\Dropdowns\Providers\PropertyDropdownProvider;
use App\Services\Dropdowns\Providers\PropertyTypeDropdownProvider;
use App\Services\Dropdowns\Providers\ShopForDropdownProvider;
use App\Services\Dropdowns\Providers\ShopDropdownProvider;
use App\Services\Dropdowns\Providers\StateDropdownProvider;
use App\Services\Dropdowns\Providers\StatusDropdownProvider;
use App\Services\Dropdowns\Providers\StatusTypeDropdownProvider;
use App\Services\Dropdowns\Providers\UserPropertyLinkDropdownProvider;

class DropdownFactory implements DropdownFactoryInterface
{
    protected array $providers = [];

    public function __construct(
        AddressTypeDropdownProvider $dropdownProvider,
        BloodGroupDropdownProvider $bloodGroupProvider,
        GenderDropdownProvider $genderProvider,
        MaritalStatusDropdownProvider $maritalStatusProvider,
        StatusDropdownProvider $statusProvider,
        StatusTypeDropdownProvider $statusTypeProvider,
        AgentDropdownProvider $agentDropdownProvider,
        BlockDropdownProvider $blockDropdownProvider,
        FloorDropdownProvider $floorDropdownProvider,
        PropertyDropdownProvider $propertyDropdownProvider,
        PaymentTypeDropdownProvider $paymentTypeDropdownProvider,
        BuyerTypeDropdownProvider $buyerTypeDropdownProvider,
        BuyerDropdownProvider $buyerDropdownProvider,
        AgentUnitDropdownProvider $agentUnitDropdownProvider,
        PaymentModeDropdownProvider $paymentModeDropdownProvider,
        InstallmentDropdownProvider $installmentDropdownProvider,
        PropertyTypeDropdownProvider $propertyTypeDropdownProvider,
        ShopDropdownProvider $shopDropdownProvider,
        CountryDropdownProvider $countryDropdownProvider,
        StateDropdownProvider $stateDropdownProvider,
        CityDropdownProvider $cityDropdownProvider,
        UserPropertyLinkDropdownProvider $userPropertyLinkDropdownProvider,
        ShopForDropdownProvider $shopForDropdownProvider
    ) {
        $this->providers = [
            'address-type' => $dropdownProvider,
            'blood-group' => $bloodGroupProvider,
            'gender' => $genderProvider,
            'marital' => $maritalStatusProvider,
            'status' => $statusProvider,
            'status-type' => $statusTypeProvider,
            'agent' => $agentDropdownProvider,
            'floor' => $floorDropdownProvider,
            'block' => $blockDropdownProvider,
            'property' => $propertyDropdownProvider,
            'payment-type' => $paymentTypeDropdownProvider,
            'buyer-type' => $buyerTypeDropdownProvider,
            'buyer' => $buyerDropdownProvider,
            'agent-unit' => $agentUnitDropdownProvider,
            "payment-mode" => $paymentModeDropdownProvider,
            "installment" => $installmentDropdownProvider,
            "property-type" => $propertyTypeDropdownProvider,
            "shop" => $shopDropdownProvider,
            "country" => $countryDropdownProvider,
            "state" => $stateDropdownProvider,
            "city" => $cityDropdownProvider,
            "user-property" => $userPropertyLinkDropdownProvider,
            "shop-for" => $shopForDropdownProvider,
        ];
    }

    public function getDropdown(string $type, array $filters = []): array
    {
        if (!isset($this->providers[$type])) {
            throw new \InvalidArgumentException("Dropdown provider for [$type] not found.");
        }

        return $this->providers[$type]->getOptions($filters);
    }
}
