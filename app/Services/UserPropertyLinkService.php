<?php

namespace App\Services;

use App\Models\Agent;
use App\Models\Buyer;
use App\Models\Employee;
use App\Models\User;
use App\Models\UserSelectedProperty;
use App\Repositories\Contracts\UserPropertyLinkRepositoryInterface;
use App\Services\Contracts\UserPropertyLinkServiceInterface;
use App\Models\UserPropertyLink;
use App\Services\Traits\BaseServiceTrait;
use App\Utils\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as DatabaseCollection;
use Illuminate\Support\Collection;

class UserPropertyLinkService implements UserPropertyLinkServiceInterface
{
    use BaseServiceTrait;

    protected UserPropertyLinkRepositoryInterface $repository;

    public function __construct(UserPropertyLinkRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    // Implement service methods
    public function getAllUserPropertyLinks(): LengthAwarePaginator|DatabaseCollection|Collection
    {
        // TODO: Implement getAllUserPropertyLinks() method.
    }

    public function getUserPropertyLinkById(mixed $id): ?UserPropertyLink
    {
        // TODO: Implement getUserPropertyLinkById() method.
    }

    public function storeUserPropertyLink(array $data): ?UserPropertyLink
    {
        // TODO: Implement storeUserPropertyLink() method.
    }

    public function updateUserPropertyLink(UserPropertyLink $userPropertyLink, array $data): UserPropertyLink
    {
        // TODO: Implement updateUserPropertyLink() method.
    }

    public function getSelected(User|Agent|Employee|Buyer $user)
    {
        return ExceptionHandler::handle(function () use ($user) {
            return $user->propertyLinks()
                ->whereHas('selected')
                ->value('property_id');
        });
    }

    public function setSelected(User|Agent|Employee|Buyer $user, int $propertyId = null)
    {
        return ExceptionHandler::handle(function () use ($user, $propertyId) {
            $link = $user->propertyLinks()->wherePropertyId($propertyId)->first();

            if(!$link) {
                return null;
            }

            // Delete all other selections for this user (except the new one)
            UserSelectedProperty::whereHas('link', function ($q) use ($user) {
                $q->where('user_id', $user->id)
                    ->where('user_type', get_class($user));
            })->where('user_property_link_id', '!=', $link->id)
                ->delete();

            // Create or get the selected record for current property
            $link->selected()->firstOrCreate();
            return $link->property_id;
        });
    }

    public function deleteUserPropertyLink(UserPropertyLink $userPropertyLink): bool
    {
        // TODO: Implement deleteUserPropertyLink() method.
    }

    public function deleteBulkUserPropertyLinks(array $ids): bool
    {
        // TODO: Implement deleteBulkUserPropertyLinks() method.
    }
}
