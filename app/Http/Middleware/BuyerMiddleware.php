<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class BuyerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $item = Auth::guard('buyer');
        $msg = "Unauthorized access. Please log in.";
        if ($item->check()) {

            if($item->user()?->status_id == getStatusId("Buyer", "Approved") &&
                !is_null($item->user()?->email_verified_at) &&
                !is_null($item->user()?->phone_verified_at))
            {
                return $next($request);
            } elseif($item->user()?->status_id == getStatusId("Buyer", "Pending")) {
                $msg = 'Your account is pending for approval';
            } elseif($item->user()?->status_id == getStatusId("Buyer", "Rejected")) {
                $msg = 'Your account verification request is rejected';
            } elseif($item->user()?->status_id == getStatusId("Buyer", "Suspended")) {
                $msg = 'Your account is suspended';
            } elseif($item->user()?->status_id == getStatusId("Buyer", "Blacklisted")) {
                $msg = 'Your account has been blacklisted.';
            } else {
                $msg = "Invalid buyer.";
            }
        }

        return redirect()->route('buyer.login')
            ->withErrors(['email' => $msg])
            ->withInput($request->only('email'));
    }
}
