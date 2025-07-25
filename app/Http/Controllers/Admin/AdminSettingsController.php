<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\EnvFileService;
use App\Settings\BookingSettings;
use App\Settings\ContactSettings;
use App\Settings\EmailSettings;
use App\Settings\GeneralSettings;
use App\Settings\LocalizationSettings;
use App\Settings\MediaSettings;
use App\Settings\NotificationSettings;
use App\Settings\SecuritySettings;
use App\Settings\SmsSettings;
use App\Utils\PageConfig;
use Illuminate\Http\Request;

class AdminSettingsController extends Controller
{
    protected object $config;
    protected EnvFileService $envFileService;

    public function __construct( EnvFileService $envFileService )
    {
        $this->envFileService = $envFileService;
        $this->config = new PageConfig("settings", 'admin.settings', "admin", "settings", [
            "general" => "admin.settings.general",
            "booking" => "admin.settings.booking",
            "email" => "admin.settings.email",
            "sms" => "admin.settings.sms",
            "notification" => "admin.settings.notification",
            "localization" => "admin.settings.localization",
            "media" => "admin.settings.media",
            "security" => "admin.settings.security",
            "contact" => "admin.settings.contact",
        ], false);
    }


    public function index(
        BookingSettings $bookingSettings,
        ContactSettings $contactSettings
    )
    {
        return view("admin.settings.index", [
            "bookingSettings" => $bookingSettings,
            "contactSettings" => $contactSettings
        ]);
    }

    public function contact(Request $request, ContactSettings $settings)
    {
        $settings->email = $request->email ?? "";
        $settings->phone = $request->phone ?? "";
        $settings->address_line1 = $request->address_line1 ?? "";
        $settings->address_line2 = $request->address_line2 ?? "";
        $settings->city_id = $request->city_id ?? "";
        $settings->state_id = $request->state_id ?? "";
        $settings->country_id = $request->country_id ?? "";
        $settings->zip_code = $request->zip_code ?? "";
        $settings->google_map_iframe = $request->google_map_iframe ?? "";
        $settings->save();

        return redirect()->route("admin.settings.index", ["tab" => "contact"])
            ->withSuccess("Contact Settings saved")
            ->withInput();
    }

    public function booking(Request $request, BookingSettings $settings)
    {
            $settings->percent = $request->percent;
            $settings->save();

        return redirect()->route("admin.settings.index", ["tab" => "booking"])
            ->withSuccess("Booking Settings saved")
            ->withInput();
    }
}
