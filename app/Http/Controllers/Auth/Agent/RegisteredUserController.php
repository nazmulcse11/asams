<?php

namespace App\Http\Controllers\Auth\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Agent\RegistrationRequest;
use App\Models\Agent;
use App\Models\User;
use App\Services\MediaService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{

    protected MediaService $mediaService;

    public function __construct(MediaService $mediaService)
    {
        $this->mediaService = $mediaService;
    }

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.agent.registration');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegistrationRequest $request): RedirectResponse
    {
        $agent = Agent::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $profile = $agent->profile()->create($request->only(["first_name", "last_name", "blood_group_id", "nid", "date_of_birth", "gender_id", "marital_status_id"]));

        $agent->addresses()->create($request->only(['type_id','address_line1','address_line2','city','state','zip_code','country']));

        $this->mediaService->uploadMedia($profile, $request->picture, "picture");

        auth("agent")->login($agent);

        return redirect(route('agent.dashboard', absolute: false));
    }
}
