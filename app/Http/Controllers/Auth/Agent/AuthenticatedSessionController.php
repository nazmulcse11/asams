<?php

namespace App\Http\Controllers\Auth\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Agent\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.agent.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        session(['guard' => 'agent']); // Store guard in session

        $request->session()->regenerate();

        return redirect()->intended(route('agent.dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $guard = session('guard', 'agent'); // Get the stored guard

        Auth::guard($guard)->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('agent.login');
    }
}
