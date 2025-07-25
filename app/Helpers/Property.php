<?php

use Illuminate\Contracts\Auth\Authenticatable;

if (!function_exists('userPropertySelected')) {
    function userPropertySelected(Authenticatable $user, int $propertyId = null)
    {
        $userPropertyLink = app(\App\Services\UserPropertyLinkService::class);
        if($propertyId){
            return $userPropertyLink->setSelected($user, $propertyId);
        }

        $linkId = $userPropertyLink->getSelected($user);
        if($linkId) {
            return $linkId;
        }
        return $user->propertyLinks()->first()?->property_id;
    }
}

if (!function_exists('getCurrentProperty')) {
    function getCurrentProperty()
    {
        $propertyService = app(\App\Services\PropertyService::class);

        $user = getCurrentAuthenticatedUser();

        if (!$user) {
            return null;
        }

        $propertyId = userPropertySelected($user);

        return $propertyService->getPropertyById($propertyId);
    }
}
