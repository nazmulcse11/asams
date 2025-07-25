<?php

use App\Models\Agent;
use App\Models\Buyer;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

require_once 'Helpers.php';
require_once 'Property.php';

if (!function_exists('getCurrentAuthenticatedUser')) {
    function getCurrentAuthenticatedUser(): ?Authenticatable
    {
        foreach (['admin', 'employee', 'agent', 'buyer'] as $guard) {
            if (Auth::guard($guard)->check()) {
                return Auth::guard($guard)->user();
            }
        }

        return null;
    }
}

if (!function_exists('getCurrentAuthenticatedUserModel')) {
    function getCurrentAuthenticatedUserModel()
    {
        return get_class(getCurrentAuthenticatedUser());
    }
}

if (!function_exists('getUser')) {
    function getUser(mixed $id = null, string $type = null) : ?Authenticatable
    {
        switch ($type) {
            case 'admin':
                return User::find($id);
            case 'employee':
                return Employee::find($id);
            case 'agent':
                return Agent::find($id);
            case 'buyer':
                return Buyer::find($id);
            default:
                getCurrentAuthenticatedUser();
        }
        return null;
    }
}

if (!function_exists('currentGuardPrefix')) {
    function currentGuardPrefix() : ?string
    {
        return getCurrentGuard();
    }
}

if (!function_exists('getCurrentGuard')) {
    function getCurrentGuard(): ?string
    {
        foreach (['admin', 'employee', 'agent', 'buyer'] as $guard)
        {
            if (Auth::guard($guard)->check()) {
                return $guard;
            }
        }

        return null;
    }
}

if (!function_exists('getUserName')) {
    function getUserName(?Authenticatable $user = null) : ?string
    {
        if(!$user) {
            return getCurrentAuthenticatedUser();
        }
        return $user?->profile?->full_name ?? $user->username;
    }
}
