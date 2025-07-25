<?php

namespace App\Http\Controllers\Admin\Console;

use App\Http\Controllers\Controller;
use App\Services\EnvFileService;
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

class SettingController extends Controller
{
    public function __construct(
        protected EnvFileService $envFileService
    )
    {

    }

    public function index(
        GeneralSettings $generalSettings,
        EmailSettings $emailSettings,
        SmsSettings $smsSettings,
        NotificationSettings $notificationSettings,
        LocalizationSettings $localizationSettings,
        MediaSettings $mediaSettings,
        SecuritySettings $securitySettings,
        ContactSettings $contactSettings
    )
    {
        return view("admin.console.settings.index", [
            "generalSettings" => $generalSettings,
            "emailSettings" => $emailSettings,
            "smsSettings" => $smsSettings,
            "notificationSettings" => $notificationSettings,
            "localizationSettings" => $localizationSettings,
            "mediaSettings" => $mediaSettings,
            "securitySettings" => $securitySettings,
            "contactSettings" => $contactSettings
        ]);
    }

    public function general(Request $request, GeneralSettings $settings)
    {
        $settings->site_name = $request->site_name;

        if($request->hasFile('site_logo')) {
            $settings->site_logo = $request->file('site_logo')->store('site-logo', "public");
        }

        if($request->hasFile('site_favicon')) {
            $settings->site_favicon = $request->file('site_favicon')->store('site-favicon', "public");
        }

        $settings->timezone = $request->timezone ?? "";
        $settings->date_time_format = $request->date_time_format ?? "";
        $settings->currency_code_symbol = $request->currency_code_symbol ?? "";
        $settings->copyright = $request->copyright ?? "";
        $settings->frontend_status = $request->frontend_status ?? "";
        $settings->admin_email = $request->admin_email ?? "";
        $settings->save();

        return redirect()->route("admin.console.settings", ["tab" => "general"])
            ->withSuccess("General Settings saved")
            ->withInput();
    }

    public function email(Request $request, EmailSettings $settings)
    {
        $settings->driver = $request->driver ?? "";
        $settings->host = $request->host ?? "";
        $settings->port = $request->port ?? "";
        $settings->username = $request->username ?? "";
        $settings->password = $request->password ?? "";
        $settings->encryption = $request->encryption ?? "";
        $settings->sender_email = $request->sender_email ?? "";
        $settings->sender_name = $request->sender_name ?? "";
        $settings->test_email = $request->test_email ?? "";
        $settings->template = $request->template ?? "";
        $settings->save();

        // updating environment file
        $this->envFileService->updateEnv([
            "MAIL_MAILER" => $request->driver ?? "",
            "MAIL_HOST" => $request->host ?? "",
            "MAIL_PORT" => $request->port ?? "",
            "MAIL_USERNAME" => $request->username ?? "",
            "MAIL_PASSWORD" => $request->password ?? "",
            "MAIL_ENCRYPTION" => $request->encryption ?? "",
            "MAIL_FROM_ADDRESS" => $request->sender_email ?? "",
            "MAIL_FROM_NAME" => $request->sender_name ?? ""
        ]);

        return redirect()->route("admin.console.settings", ["tab" => "email"])
            ->withSuccess("Email Settings saved")
            ->withInput();
    }

    public function sms(Request $request, SmsSettings $settings)
    {
        $settings->gateway = $request->gateway ?? "";
        $settings->key = $request->key ?? "";
        $settings->token = $request->token ?? "";
        $settings->sender_id = $request->sender_id ?? "";
        $settings->phone = $request->phone ?? "";
        $settings->template = $request->template ?? "";
        $settings->save();

        return redirect()->route("admin.console.settings", ["tab" => "sms"])
            ->withSuccess("SMS Settings saved")
            ->withInput();
    }

    public function notification(Request $request, NotificationSettings $settings)
    {
        $settings->email = $request->email ? true : false;
        $settings->sms = $request->sms ? true : false;
        $settings->push = $request->push ? true : false;
        $settings->template = $request->template ?? "";
        $settings->admin_toggle = $request->admin_toggle ? true : false;
        $settings->user_preferences = $request->user_preferences ?? "";
        $settings->save();

        return redirect()->route("admin.console.settings", ["tab" => "notification"])
            ->withSuccess("Notification Settings saved")
            ->withInput();
    }

    public function localization(Request $request, LocalizationSettings $settings)
    {
        $settings->default = $request->default;
        $settings->suppoerted_languages = implode(", ", $request->suppoerted_languages);
        $settings->multi_language_support = $request->boolean("multi_language_support");
        $settings->switcher_position = $request->switcher_position;

        $settings->save();

        return redirect()->route("admin.console.settings", ["tab" => "localization"])
            ->withSuccess("Localization Settings saved")
            ->withInput();
    }

    public function media(Request $request, MediaSettings $settings)
    {
        if($request->hasFile('user_avatar')) {
            $settings->user_avatar = $request->file('user_avatar')->store('user_avatar', "public");
        }
        $settings->max_file_size = $request->max_file_size ?? 5120;
        $settings->allow_file_types = $request->allow_file_types ?? "";
        $settings->save();

        return redirect()->route("admin.console.settings", ["tab" => "media"])
            ->withSuccess("Media Settings saved")
            ->withInput();
    }

    public function security(Request $request, SecuritySettings $settings)
    {
        $settings->user_registration = $request->user_registration ? true : false;
        $settings->email_verification = $request->email_verification ? true : false;
        $settings->two_factor = $request->two_factor ? true : false;
        $settings->password_policy = $request->password_policy ? true : false;
        $settings->login_attempt_limit = $request->login_attempt_limit ? true : false;
        $settings->save();

        return redirect()->route("admin.console.settings", ["tab" => "security"])
            ->withSuccess("Security Settings saved")
            ->withInput();
    }

    public function contact(Request $request, ContactSettings $settings)
    {
        $settings->email = $request->email ?? "";
        $settings->phone = $request->phone ?? "";
        $settings->address = $request->address ?? "";
        $settings->google_map_iframe = $request->google_map_iframe ?? "";
        $settings->save();

        return redirect()->route("admin.console.settings", ["tab" => "contact"])
            ->withSuccess("Contact Settings saved")
            ->withInput();
    }
}
