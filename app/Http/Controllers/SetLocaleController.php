<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class SetLocaleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param $locale
     * @return RedirectResponse
     */
    public function __invoke($locale)
    {
        $availableLocales = config('app.available_locales');
        if (array_key_exists($locale, $availableLocales)) {
            App::setLocale($locale);

            Session::put('locale', $locale);
        }

        return redirect()->back();
    }
}
