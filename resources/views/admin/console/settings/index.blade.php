<x-app-layout>
    <div class="tab-wrapper max-w-screen-lg mx-auto bg-white rounded-2xl border border-slate-100 overflow-hidden sm:flex">
        <div class="flex-[0_0_240px] border-r border-slate-100 p-4">
            <h6 class="font-bold text-black-500 text-xl mb-4">
                {{ __("Settings") }}
            </h6>
            <ul class="nav-tabs space-y-1 [&_a]:w-full [&_a]:py-2.5 [&_a]:px-3 [&_a]:rounded-md [&_a]:font-medium [&_a]:inline-flex [&_a]:items-center [&_a]:gap-2 [&_a]:transition-all [&_a]:text-[#607085]">
                <li>
                    <a href="#general__settings" class="@if(request()->query('tab') == 'general') active @endif nav-item hover:bg-[#FFF5F5] hover:text-themered [&.active]:bg-[#FFF5F5] [&.active]:text-themered">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.9795 3.72572C13.6178 2.66241 15.0095 2.27043 16.1055 2.91224L17.6992 3.81654C18.9028 4.49857 19.3167 6.03422 18.625 7.22084V7.22181C18.2854 7.80258 18.3486 8.1537 18.4404 8.31166C18.5339 8.47216 18.8138 8.70419 19.4932 8.70423C20.8599 8.70423 21.9998 9.81039 22 11.1954V12.8087C22 14.1797 20.8745 15.2999 19.4932 15.2999C18.8135 15.3 18.5337 15.533 18.4404 15.6935C18.3487 15.8516 18.2856 16.2028 18.625 16.7833L18.627 16.7872C19.3148 17.9806 18.9046 19.5051 17.7002 20.1876L16.1055 21.0919C15.0094 21.7339 13.6178 21.3419 12.9795 20.2785L12.9746 20.2706L12.873 20.0968L12.8721 20.0939C12.5378 19.5159 12.197 19.39 12.0039 19.3898C11.8098 19.3898 11.4661 19.517 11.127 20.0968L11.0205 20.2785C10.3822 21.3419 8.99058 21.7339 7.89453 21.0919L6.30078 20.1876C5.09723 19.5056 4.68347 17.9709 5.375 16.7843V16.7833C5.71444 16.2028 5.65132 15.8516 5.55957 15.6935C5.46625 15.533 5.18647 15.3 4.50684 15.2999C3.12554 15.2999 2.00001 14.1797 2 12.8087V11.1954C2.0002 9.82466 3.12566 8.70423 4.50684 8.70423C5.18621 8.70419 5.46615 8.47216 5.55957 8.31166C5.6514 8.1537 5.71457 7.80258 5.375 7.22181V7.22084C4.68333 6.03422 5.09619 4.49857 6.2998 3.81654L7.89453 2.91224C8.9905 2.27043 10.3822 2.66241 11.0205 3.72572L11.0254 3.73353L11.127 3.90736L11.1279 3.91029C11.4622 4.48826 11.803 4.61518 11.9961 4.61537C12.1902 4.61537 12.5339 4.48726 12.873 3.90736L12.9795 3.72572ZM12 8.00013C9.79086 8.00013 8 9.79099 8 12.0001C8 14.2093 9.79086 16.0001 12 16.0001C14.2091 16.0001 16 14.2093 16 12.0001C16 9.79099 14.2091 8.00013 12 8.00013Z" fill="currentcolor"/>
                        </svg>
                        {{ __("General ")}}
                    </a>
                </li>
                <li>
                    <a href="#email__settings" class="@if(request()->query('tab') == 'email') active @endif nav-item hover:bg-[#FFF5F5] hover:text-themered [&.active]:bg-[#FFF5F5] [&.active]:text-themered">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.6958 4.1281L8.0891 6.98841C2.30363 8.92389 2.30363 12.0798 8.0891 14.0057L10.6435 14.8543L11.4918 17.4095C13.4171 23.1968 16.5815 23.1968 18.5068 17.4095L21.3757 8.80948C22.6529 4.94806 20.556 2.84096 16.6958 4.1281ZM17.0008 9.25759L13.379 12.8997C13.236 13.0427 13.0549 13.1095 12.8738 13.1095C12.6927 13.1095 12.5116 13.0427 12.3686 12.8997C12.0922 12.6232 12.0922 12.1656 12.3686 11.8891L15.9905 8.24695C16.2669 7.97045 16.7244 7.97045 17.0008 8.24695C17.2772 8.52345 17.2772 8.9811 17.0008 9.25759Z" fill="currentcolor"/>
                        </svg>
                        {{ __("Email")}}
                    </a>
                </li>
                <li>
                    <a href="#sms__settings" class="@if(request()->query('tab') == 'sms') active @endif nav-item hover:bg-[#FFF5F5] hover:text-themered [&.active]:bg-[#FFF5F5] [&.active]:text-themered">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 4C20 4 22 5.41194 22 8.70605V15.2939C22 18.5881 20 20 17 20H7C4 20 2 18.5881 2 15.2939V8.70605C2 5.41194 4 4 7 4H17ZM17.5801 8.7373C17.33 8.42684 16.8493 8.38033 16.5293 8.625L13.3994 10.9775C12.6394 11.5516 11.3498 11.5516 10.5898 10.9775L7.45996 8.625C7.14012 8.38042 6.67024 8.43652 6.41016 8.7373C6.15029 9.03832 6.20974 9.4808 6.5293 9.72559L9.66016 12.0791C10.3101 12.5778 11.1601 12.8223 12 12.8223C12.8399 12.8222 13.6901 12.5779 14.3301 12.0791L17.46 9.72559C17.7897 9.49023 17.84 9.03839 17.5801 8.7373Z" fill="currentcolor"/>
                        </svg>
                        {{ __("SMS")}}
                    </a>
                </li>
                <li>
                    <a href="#notification__settings" class=" @if(request()->query('tab') == 'notification') active @endif nav-item hover:bg-[#FFF5F5] hover:text-themered [&.active]:bg-[#FFF5F5] [&.active]:text-themered">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9408 20.01C14.504 21.17 13.3495 22 11.9974 22C11.1758 22 10.3645 21.68 9.7925 21.11C9.45968 20.81 9.21006 20.41 9.06445 20C9.19966 20.02 9.33487 20.03 9.48048 20.05C9.71969 20.08 9.96931 20.11 10.2189 20.13C10.8118 20.18 11.415 20.21 12.0182 20.21C12.6111 20.21 13.2039 20.18 13.7863 20.13C14.0048 20.11 14.2232 20.1 14.4312 20.07C14.5976 20.05 14.764 20.03 14.9408 20.01Z" fill="currentcolor"/>
                            <path d="M19.6316 14.49L18.5915 12.83C18.3731 12.46 18.1755 11.76 18.1755 11.35V8.82C18.1755 6.47 16.7402 4.44 14.6704 3.49C14.1296 2.57 13.1311 2 11.9871 2C10.8534 2 9.83414 2.59 9.2933 3.52C7.26518 4.49 5.86109 6.5 5.86109 8.82V11.35C5.86109 11.76 5.66348 12.46 5.44506 12.82L4.3946 14.49C3.97857 15.16 3.88496 15.9 4.14498 16.58C4.3946 17.25 4.98743 17.77 5.75708 18.02C7.77481 18.68 9.89654 19 12.0183 19C14.14 19 16.2617 18.68 18.2795 18.03C19.0075 17.8 19.5691 17.27 19.8396 16.58C20.11 15.89 20.0372 15.13 19.6316 14.49Z" fill="currentcolor"/>
                        </svg>
                        {{ __("Notification")}}
                    </a>
                </li>
                <li>
                    <a href="#localization__settings" class=" @if(request()->query('tab') == 'localization') active @endif nav-item hover:bg-[#FFF5F5] hover:text-themered [&.active]:bg-[#FFF5F5] [&.active]:text-themered">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM17 17.47C15.29 17.47 13.69 16.73 12.41 15.36C10.96 16.67 9.07 17.47 7 17.47C6.59 17.47 6.25 17.13 6.25 16.72C6.25 16.31 6.59 15.97 7 15.97C10.47 15.97 13.34 13.22 13.71 9.7H12H7.01C6.6 9.7 6.26 9.36 6.26 8.95C6.26 8.54 6.6 8.21 7.01 8.21H11.25V7.28C11.25 6.87 11.59 6.53 12 6.53C12.41 6.53 12.75 6.87 12.75 7.28V8.21H14.44C14.46 8.21 14.48 8.2 14.5 8.2C14.52 8.2 14.54 8.21 14.56 8.21H16.99C17.4 8.21 17.74 8.55 17.74 8.96C17.74 9.37 17.4 9.71 16.99 9.71H15.21C15.06 11.42 14.42 12.99 13.44 14.27C14.44 15.38 15.69 15.98 17 15.98C17.41 15.98 17.75 16.32 17.75 16.73C17.75 17.14 17.41 17.47 17 17.47Z" fill="currentcolor"/>
                        </svg>
                        {{ __("Localization")}}
                    </a>
                </li>
                <li>
                    <a href="#media__settings" class=" @if(request()->query('tab') == 'media') active @endif nav-item hover:bg-[#FFF5F5] hover:text-themered [&.active]:bg-[#FFF5F5] [&.active]:text-themered">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 8.27344V15.7707C3 19.0468 4.953 20.9998 8.229 20.9998H15.771C19.047 20.9998 21 19.0468 21 15.7707V8.27344H3ZM14.196 15.7617L12.324 16.8417C11.928 17.0667 11.541 17.1837 11.181 17.1837C10.911 17.1837 10.668 17.1207 10.443 16.9947C9.921 16.6977 9.633 16.0857 9.633 15.2937V13.1336C9.633 12.3416 9.921 11.7295 10.443 11.4325C10.965 11.1265 11.631 11.1805 12.324 11.5855L14.196 12.6656C14.889 13.0616 15.267 13.6196 15.267 14.2226C15.267 14.8256 14.88 15.3567 14.196 15.7617Z" fill="currentcolor"/>
                            <path d="M15.8066 3V6.92412H20.8826C20.4236 4.44905 18.5966 3.009 15.8066 3Z" fill="currentcolor"/>
                            <path d="M14.457 3H9.54297V6.92412H14.457V3Z" fill="currentcolor"/>
                            <path d="M8.19221 3C5.40221 3.009 3.57521 4.44905 3.11621 6.92412H8.19221V3Z" fill="currentcolor"/>
                        </svg>
                        {{ __("Media")}}
                    </a>
                </li>
                <li>
                    <a href="#security__settings" class=" @if(request()->query('tab') == 'security') active @endif nav-item hover:bg-[#FFF5F5] hover:text-themered [&.active]:bg-[#FFF5F5] [&.active]:text-themered">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0001 17.3498C12.9003 17.3498 13.6301 16.6201 13.6301 15.7198C13.6301 14.8196 12.9003 14.0898 12.0001 14.0898C11.0999 14.0898 10.3701 14.8196 10.3701 15.7198C10.3701 16.6201 11.0999 17.3498 12.0001 17.3498Z" fill="currentcolor"/>
                            <path d="M18.28 9.53V8.28C18.28 5.58 17.63 2 12 2C6.37 2 5.72 5.58 5.72 8.28V9.53C2.92 9.88 2 11.3 2 14.79V16.65C2 20.75 3.25 22 7.35 22H16.65C20.75 22 22 20.75 22 16.65V14.79C22 11.3 21.08 9.88 18.28 9.53ZM12 18.74C10.33 18.74 8.98 17.38 8.98 15.72C8.98 14.05 10.34 12.7 12 12.7C13.66 12.7 15.02 14.06 15.02 15.72C15.02 17.39 13.67 18.74 12 18.74ZM7.35 9.44C7.27 9.44 7.2 9.44 7.12 9.44V8.28C7.12 5.35 7.95 3.4 12 3.4C16.05 3.4 16.88 5.35 16.88 8.28V9.45C16.8 9.45 16.73 9.45 16.65 9.45H7.35V9.44Z" fill="currentcolor"/>
                        </svg>
                        {{ __("Security")}}
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content flex-1 *:p-4 xl:*:p-10 xl:*:py-8">
            <div class="tab-pane fade @if(request()->query('tab') == 'general') active show @endif" id="general__settings">
                <h6 class="font-medium text-black-500 text-xl mb-4 border-b border-slate-100 pb-2">
                    {{ __("General Settings") }}
                </h6>
                <form action="{{ route("admin.console.settings.general") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="field-body grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Site Name')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="site_name" value="{{ old("site_name", $generalSettings->site_name) }}" placeholder="{{ __('ASAMS-Property')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('site_name')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Site Logo')}}
                            </label>
                            <input type="file" name="site_logo" class="w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-4 file:py-1 file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white" />
                            <x-input-error :messages="$errors->get('site_logo')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Site Favicon')}}
                            </label>
                            <input type="file" name="site_favicon" class="w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-4 file:py-1 file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white" />
                            <x-input-error :messages="$errors->get('site_favicon')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Timezone')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="timezone" id="timezone" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg">
                                @foreach (config("settings.timezone") as $region => $zones)
                                    <optgroup label='{{ $region }}'>
                                    @foreach ($zones as $label => $value) {
                                        <option @selected(old("timezone", $generalSettings->timezone) == $value) value='{{ $value }}'>{{ $label }}</option>
                                    @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('timezone')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Date Time Format')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="date_time_format" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg">
                                @foreach(config("settings.time-format") as $key => $value)
                                    <option @selected(old("date_time_format", $generalSettings->date_time_format) == $key) value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('date_time_format')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Currency')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="currency_code_symbol" id="currency_code_symbol" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg">
                                <option value="">Select</option>
                                <option value="DD/MMM/YYYY" selected>BDT</option>
                            </select>
                            <x-input-error :messages="$errors->get('currency_code_symbol')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Admin Email')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="email" name="admin_email" value="{{ old("admin_email", $generalSettings->admin_email) }}" placeholder="{{ __('admin@asams.com')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('admin_email')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Copyright Text')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="copyright" value="{{ old("copyright", $generalSettings->copyright) }}" placeholder="{{ __('Copyright©2025 . All Rights Reserved')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('admin_email')" class="mt-1"/>
                        </div>
                        <div class="field-item md:col-span-2 space-y-4 *:flex *:items-center *:gap-4 *:justify-between *:p-4 xl:*:px-6 xl:*:py-5 *:rounded-lg *:border">

                            <div class="hover:bg-gray-50">
                                <div>
                                    <h4 class="font-semibold text-sm text-gray-800">
                                        {{ __('Frontend Status')}}
                                    </h4>
                                    <p class="text-sm text-gray-500">
                                        {{ __('Toggle to show or hide this content from the frontend interface.') }}
                                    </p>
                                </div>

                                <label for="frontend_status" class="cursor-pointer relative">
                                    <input type="checkbox" id="frontend_status" name="frontend_status" class="sr-only peer" @checked(old("frontend_status", $generalSettings->frontend_status) == 1)>
                                    <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                    <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Update Changes") }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade @if(request()->query('tab') == 'email') active show @endif" id="email__settings">
                <h6 class="font-medium text-black-500 text-xl mb-4 border-b border-slate-100 pb-2">
                    {{ __("Email Settings") }}
                </h6>

                <form  action="{{ route("admin.console.settings.email") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="field-body grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="field-item space-y-1 md:col-span-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __("Mail Driver")}} <span class="text-red-600">*</span>
                            </label>
                            <select name="driver" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg">
                                <option value="smtp" @selected(old("driver", $emailSettings->driver) == "smtp") >SMTP</option>
                                <option value="pop3" @selected(old("driver", $emailSettings->driver) == "pop3")>POP3</option>
                            </select>
                            <x-input-error :messages="$errors->get('driver')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Mail Host')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="host" value="{{ old("host", $emailSettings->host) }}" placeholder="{{ __('Enter mail host')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('host')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Mail Port')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="port" value="{{ old("port", $emailSettings->port) }}" placeholder="{{ __('Enter mail port')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('port')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Mail Username')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="username" value="{{ old("username", $emailSettings->username) }}" placeholder="{{ __('Enter mail username')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('username')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Mail Password')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="password" placeholder="{{ __('Enter mail password')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('password')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Mail Encryption')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="encryption" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg">
                                <option value="tls" @selected(old("encryption", $emailSettings->encryption) == "tls")>Select</option>
                                <option value="ssl" @selected(old("encryption", $emailSettings->encryption) == "ssl")>SSL</option>
                            </select>
                            <x-input-error :messages="$errors->get('encryption')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Test Mail')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="email" name="test_email" value="{{ old("test_email", $emailSettings->test_email) }}" placeholder="{{ __('Enter test mail')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('test_email')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Mail Sender Email')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="email" name="sender_email" value="{{ old("sender_email", $emailSettings->sender_email) }}" placeholder="{{ __('Enter mail sender email')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('sender_email')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Mail Sender Name')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="sender_name" value="{{ old("sender_name", $emailSettings->sender_name) }}" placeholder="{{ __('Enter mail sender name')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('sender_name')" class="mt-1"/>
                        </div>
{{--                        <div class="field-item space-y-1 md:col-span-2">--}}
{{--                            <label class="text-gunmetal font-medium block text-sm">--}}
{{--                                {{ __('Email Template')}} <span class="text-red-600">*</span>--}}
{{--                            </label>--}}
{{--                            <textarea name="template" rows="5" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('Make Template...')}}"> {{  old("template", $emailSettings->template)}} </textarea>--}}
{{--                            <x-input-error :messages="$errors->get('template')" class="mt-1"/>--}}
{{--                        </div>--}}

                        @php
                            $emailTemplates = old('email_templates', $emailSettings->templates ?? []);
                            $emailShortcodes = ['{{client_name}}', '{{client_email}}', '{{invoice_number}}'];
                        @endphp

                        <div id="email-template-container" class="space-y-4">
                            @foreach($emailTemplates as $index => $template)
                                <div class="template-group border p-4 rounded-lg bg-gray-50 relative">
                                    <!-- Template Name -->
                                    <div class="mb-2">
                                        <label class="text-gunmetal font-medium block text-sm">Email Template Name <span class="text-red-600">*</span></label>
                                        <input type="text" name="email_templates[{{ $index }}][name]" class="w-full text-sm py-[10px] px-4 bg-white border rounded-lg" value="{{ $template['name'] ?? '' }}" placeholder="Enter Template Name">
                                    </div>

                                    <!-- Shortcodes -->
                                    <div class="flex flex-wrap gap-2 text-sm mb-2">
                                        @foreach ($emailShortcodes as $code)
                                            <button type="button" class="insert-email-shortcode bg-gray-200 text-gray-800 px-2 py-1 rounded hover:bg-gray-300" data-index="{{ $index }}" data-code="{{ $code }}">{{ $code }}</button>
                                        @endforeach
                                    </div>

                                    <!-- Body -->
                                    <div>
                                        <label class="text-gunmetal font-medium block text-sm">Email Template Body <span class="text-red-600">*</span></label>
                                        <textarea name="email_templates[{{ $index }}][body]" rows="4" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg email-template-body" data-index="{{ $index }}" placeholder="Enter Email Template Body">{{ $template['body'] ?? '' }}</textarea>
                                    </div>

                                    <button type="button" class="remove-email-template absolute top-2 right-2 text-red-600 hover:text-red-800 text-sm">&times;</button>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-4">
                            <button type="button" id="add-email-template" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">+ Add Email Template</button>
                        </div>

                        <template id="email-template-row">
                            <div class="template-group border p-4 rounded-lg bg-gray-50 relative">
                                <div class="mb-2">
                                    <label class="text-gunmetal font-medium block text-sm">Email Template Name <span class="text-red-600">*</span></label>
                                    <input type="text" name="email_templates[__INDEX__][name]" class="w-full text-sm py-[10px] px-4 bg-white border rounded-lg" placeholder="Enter Template Name">
                                </div>

                                <div class="flex flex-wrap gap-2 text-sm mb-2">
                                    @foreach ($emailShortcodes as $code)
                                        <button type="button" class="insert-email-shortcode bg-gray-200 text-gray-800 px-2 py-1 rounded hover:bg-gray-300" data-index="__INDEX__" data-code="{{ $code }}">{{ $code }}</button>
                                    @endforeach
                                </div>

                                <div>
                                    <label class="text-gunmetal font-medium block text-sm">Email Template Body <span class="text-red-600">*</span></label>
                                    <textarea name="email_templates[__INDEX__][body]" rows="4" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg email-template-body" data-index="__INDEX__" placeholder="Enter Email Template Body"></textarea>
                                </div>

                                <button type="button" class="remove-email-template absolute top-2 right-2 text-red-600 hover:text-red-800 text-sm">&times;</button>
                            </div>
                        </template>


                    </div>
                    <div class="mt-8 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Update Changes")}}
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade @if(request()->query('tab') == 'sms') active show @endif" id="sms__settings">
                <h6 class="font-medium text-black-500 text-xl mb-4 border-b border-slate-100 pb-2">
                    {{ __("SMS Settings") }}
                </h6>
                <form action="{{ route("admin.console.settings.sms") }}" method="POST">
                    @csrf
                    <div class="field-body grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="field-item space-y-1 md:col-span-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('SMS Gateway Provider')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="gateway" value="{{  old("gateway", $smsSettings->gateway)}}" placeholder="{{ __('twilio')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('gateway')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('API Key')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="key" value="{{  old("key", $smsSettings->key)}}" placeholder="{{ __('Enter API key ')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('key')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Auth Token')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="token" value="{{  old("token", $smsSettings->token)}}" placeholder="{{ __('Enter auth token')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('token')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Sender ID')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="sender_id" value="{{  old("sender_id", $smsSettings->sender_id)}}" placeholder="{{ __('Enter sender ID')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('sender_id')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Sender Phone Number')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="phone" value="{{  old("phone", $smsSettings->phone)}}" placeholder="{{ __('Enter sender phone number')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                            <x-input-error :messages="$errors->get('phone')" class="mt-1"/>
                        </div>
{{--                        <div class="field-item space-y-1 md:col-span-2">--}}
{{--                            <label class="text-gunmetal font-medium block text-sm">--}}
{{--                                {{ __('SMS Template')}} <span class="text-red-600">*</span>--}}
{{--                            </label>--}}
{{--                            <textarea name="template" id="template" rows="5" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('Make Template...')}}"> {{  old("template", $smsSettings->template)}} </textarea>--}}
{{--                            <x-input-error :messages="$errors->get('template')" class="mt-1"/>--}}
{{--                        </div>--}}

                        @php
                            $smsTemplates = old('sms_templates', $smsSettings->templates ?? []);
                            $smsShortcodes = ['{{agent_name}}', '{{agent_phone}}', '{{otp_code}}'];
                        @endphp

                        <div id="sms-template-container" class="space-y-4">
                            @foreach($smsTemplates as $index => $template)
                                <div class="template-group border p-4 rounded-lg bg-gray-50 relative">
                                    <div class="mb-2">
                                        <label class="text-gunmetal font-medium block text-sm">SMS Template Name <span class="text-red-600">*</span></label>
                                        <input type="text" name="sms_templates[{{ $index }}][name]" class="w-full text-sm py-[10px] px-4 bg-white border rounded-lg" value="{{ $template['name'] ?? '' }}" placeholder="Enter Template Name">
                                    </div>

                                    <div class="flex flex-wrap gap-2 text-sm mb-2">
                                        @foreach ($smsShortcodes as $code)
                                            <button type="button" class="insert-sms-shortcode bg-gray-200 text-gray-800 px-2 py-1 rounded hover:bg-gray-300" data-index="{{ $index }}" data-code="{{ $code }}">{{ $code }}</button>
                                        @endforeach
                                    </div>

                                    <div>
                                        <label class="text-gunmetal font-medium block text-sm">SMS Template Body <span class="text-red-600">*</span></label>
                                        <textarea name="sms_templates[{{ $index }}][body]" rows="4" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg sms-template-body" data-index="{{ $index }}" placeholder="Enter SMS Template Body">{{ $template['body'] ?? '' }}</textarea>
                                    </div>

                                    <button type="button" class="remove-sms-template absolute top-2 right-2 text-red-600 hover:text-red-800 text-sm">&times;</button>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-4">
                            <button type="button" id="add-sms-template" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">+ Add SMS Template</button>
                        </div>

                        <template id="sms-template-row">
                            <div class="template-group border p-4 rounded-lg bg-gray-50 relative">
                                <div class="mb-2">
                                    <label class="text-gunmetal font-medium block text-sm">SMS Template Name <span class="text-red-600">*</span></label>
                                    <input type="text" name="sms_templates[__INDEX__][name]" class="w-full text-sm py-[10px] px-4 bg-white border rounded-lg" placeholder="Enter Template Name">
                                </div>

                                <div class="flex flex-wrap gap-2 text-sm mb-2">
                                    @foreach ($smsShortcodes as $code)
                                        <button type="button" class="insert-sms-shortcode bg-gray-200 text-gray-800 px-2 py-1 rounded hover:bg-gray-300" data-index="__INDEX__" data-code="{{ $code }}">{{ $code }}</button>
                                    @endforeach
                                </div>

                                <div>
                                    <label class="text-gunmetal font-medium block text-sm">SMS Template Body <span class="text-red-600">*</span></label>
                                    <textarea name="sms_templates[__INDEX__][body]" rows="4" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg sms-template-body" data-index="__INDEX__" placeholder="Enter SMS Template Body"></textarea>
                                </div>

                                <button type="button" class="remove-sms-template absolute top-2 right-2 text-red-600 hover:text-red-800 text-sm">&times;</button>
                            </div>
                        </template>



                    </div>

                    <div class="mt-8 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Update Changes")}}
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade @if(request()->query('tab') == 'notification') active show @endif" id="notification__settings">
                <h6 class="font-medium text-black-500 text-xl mb-4 border-b border-slate-100 pb-2">
                    {{ __("Notification Settings") }}
                </h6>

                <form action="{{ route("admin.console.settings.notification") }}" method="POST">
                    @csrf
                    <div class="space-y-4 *:flex *:items-center *:gap-4 *:justify-between *:p-4 xl:*:px-6 xl:*:py-5 *:rounded-lg *:border">

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __('Enable Email Notifications')}}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __('Enable to trigger automated emails for events like new listings, status changes, or messages.')}}
                                </p>
                            </div>
                            <label for="email" class="cursor-pointer relative">
                                <input type="checkbox" id="email" name="email" class="sr-only peer" @checked(old("email", $notificationSettings->email) == 1)>
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __('Enable SMS Notifications')}}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __('Keep users informed through SMS notifications about key events or activity.')}}
                                </p>
                            </div>
                            <label for="sms" class="cursor-pointer relative">
                                <input type="checkbox" id="sms" name="sms" class="sr-only peer" @checked(old("sms", $notificationSettings->sms) == 1)>
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __('Enable Push Notifications(FCM, OneSignal)')}}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __('Enable system-wide push messages for key events or activity.')}}
                                </p>
                            </div>
                            <label for="push" class="cursor-pointer relative">
                                <input type="checkbox" id="push" name="push" class="sr-only peer" @checked(old("push", $notificationSettings->push) == 1)>
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __('Admin Notification Toggle')}}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __('Control whether admins receive notifications like registrations, property updates, or new messages.')}}
                                </p>
                            </div>
                            <label for="admin_toggle" class="cursor-pointer relative">
                                <input type="checkbox" id="admin_toggle" name="admin_toggle" class="sr-only peer" @checked(old("admin_toggle", $notificationSettings->admin_toggle) == 1)>
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                    </div>
                    <br>
                    <div class="field-item space-y-1 md:col-span-2">
                        <label class="text-gunmetal font-medium block text-sm">
                            {{ __("User Notification Preferences")}} <span class="text-red-600">*</span>
                        </label>
                        <select name="user_preferences" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg" >
                            <option value="JSON/text" selected>JSON/text</option>
                        </select>
                        <x-input-error :messages="$errors->get('user_preferences')" class="mt-1"/>
                    </div>
                    <br>
                    <div class="field-item space-y-1">
                        <label class="text-gunmetal font-medium block text-sm">
                            {{ __('Notifications Template(Email/SMS/Push)')}} <span class="text-red-600">*</span>
                        </label>
                        <textarea name="template" rows="5" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('Notification Template here...')}}"> {{  old("template", $notificationSettings->template)}} </textarea>
                        <x-input-error :messages="$errors->get('template')" class="mt-1"/>
                    </div>
                    <div class="mt-4 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Update Changes")}}
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade @if(request()->query('tab') == 'localization') active show @endif" id="localization__settings">
                <h6 class="font-medium text-black-500 text-xl mb-4 border-b border-slate-100 pb-2">
                    {{ __("Localization Settings") }}
                </h6>
                <form action="{{  route('admin.console.settings.localization') }}" method="POST" id="localization_form" class="space-y-4" enctype="multipart/form-data">
                    @csrf
                    <div class="field-item space-y-1 md:col-span-2">
                        <label class="text-gunmetal font-medium block text-sm">
                            {{ __("Default Language")}} <span class="text-red-600">*</span>
                        </label>
                        <select name="default" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg" >
                            <option value="">Select</option>
                            <option @if(old("default", $localizationSettings->default) == "en") selected @endif value="en" selected>English</option>
                            <option @if(old("default", $localizationSettings->default) == "bn") selected @endif value="br">Bangla</option>
                        </select>
                        <x-input-error :messages="$errors->get('default')" class="mt-1"/>
                    </div>
                    <div class="field-item space-y-1 md:col-span-2">
                        <label class="text-gunmetal font-medium block text-sm">
                            {{ __("Supported Language")}} <span class="text-red-600">*</span>
                        </label>



                        @php
                            $selectedLangs = (array) old('suppoerted_languages', is_array($localizationSettings->suppoerted_languages)
                                ? $localizationSettings->suppoerted_languages
                                : explode(',', $localizationSettings->suppoerted_languages ?? '')
                            );
                        @endphp

                        <select name="suppoerted_languages[]" class="select2 w-full text-sm font-light py-3 px-4 bg-white border rounded-lg"multiple>
                            <option disabled>Select</option>
                            <option value="en" @selected(in_array('en', $selectedLangs))>English</option>
                            <option value="bn" @selected(in_array('bn', $selectedLangs))>Bangla</option>
                        </select>

                        <x-input-error :messages="$errors->get('suppoerted_languages')" class="mt-1"/>
                    </div>
                    <div class="field-item space-y-1 md:col-span-2">
                        <label class="text-gunmetal font-medium block text-sm">
                            {{ __("Language Switcher Position")}} <span class="text-red-600">*</span>
                        </label>
                        <select name="switcher_position" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg" >
                            <option value="">Select</option>
                            <option @if(old("switcher_position", $localizationSettings->switcher_position) == "frontend") selected @endif value="frontend">Frontend UI</option>
                        </select>
                        <x-input-error :messages="$errors->get('switcher_position')" class="mt-1"/>
                    </div>

                    <div class="space-y-4 *:flex *:items-center *:gap-4 *:justify-between *:p-4 xl:*:px-6 xl:*:py-5 *:rounded-lg *:border">
                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __('Enable Mulilingual Support')}}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __('Enable mulilingual support for your system.')}}
                                </p>
                            </div>
                            <label for="multi_language_support" class="cursor-pointer relative">
                                <input type="checkbox" id="multi_language_support" name="multi_language_support" class="sr-only peer" @checked(old("multi_language_support", $localizationSettings->multi_language_support) == 'on')>
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>
                    </div>

                    <div class="mt-4 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Update Changes")}}
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade @if(request()->query('tab') == 'media') active show @endif" id="media__settings">
                <h6 class="font-medium text-black-500 text-xl mb-4 border-b border-slate-100 pb-2">
                    {{ __("Media Settings") }}
                </h6>
                <form action="{{ route('admin.console.settings.media') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="field-body grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Default User Avatar')}}
                            </label>
                            <input type="file" name="user_avatar" class="w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-4 file:py-1 file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white"/>
                            <x-input-error :messages="$errors->get('user_avatar')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Maximum File Upload Size')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="max_file_size" placeholder="{{ __('10MB')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" value="{{ old('max_file_size', $mediaSettings->max_file_size) }}"/>
                            <x-input-error :messages="$errors->get('max_file_size')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1 md:col-span-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Allowed File Type')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="allow_file_types" placeholder="{{ __('.jpg/.jpeg/.png/.webp/.gif/.svg')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" value="{{ old('allow_file_types', $mediaSettings->allow_file_types) }}" />
                            <x-input-error :messages="$errors->get('allow_file_types')" class="mt-1"/>
                        </div>

                    </div>
                    <div class="mt-8 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Update Changes")}}
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade @if(request()->query('tab') == 'security') active show @endif " id="security__settings">
                <h6 class="font-medium text-black-500 text-xl mb-4 border-b border-slate-100 pb-2">
                    {{ __("Security Settings") }}
                </h6>

                <form action="{{  route('admin.console.settings.security') }}" method="POST">
                    @csrf

                    <div class="space-y-4 *:flex *:items-center *:gap-4 *:justify-between *:p-4 xl:*:px-6 xl:*:py-5 *:rounded-lg *:border">

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __('Enable User Registration')}}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __('Allow new users to create accounts through the registration form.')}}
                                </p>
                            </div>
                            <label for="user_registration" class="cursor-pointer relative">
                                <input type="checkbox" id="user_registration" name="user_registration" class="sr-only peer" @checked(old("user_registration", $securitySettings->user_registration) == 1)>
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __('Allow Email Verification')}}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __('Enforce email verification to improve account security and data accuracy.')}}
                                </p>
                            </div>
                            <label for="email_verification" class="cursor-pointer relative">
                                <input type="checkbox" id="email_verification" name="email_verification" class="sr-only peer" @checked(old("email_verification", $securitySettings->email_verification) == 1)>
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __('Enable Two Factor Authentication (2FA)')}}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __('Add an extra layer of security by enabling a secondary verification step.')}}
                                </p>
                            </div>
                            <label for="two_factor" class="cursor-pointer relative">
                                <input type="checkbox" id="two_factor" name="two_factor" class="sr-only peer" @checked(old("two_factor", $securitySettings->two_factor) == 1)>
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __('Password Strength Policy')}}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __('Require users to create passwords with a mix of characters, numbers, and symbols.')}}
                                </p>
                            </div>
                            <label for="password_policy" class="cursor-pointer relative">
                                <input type="checkbox" id="password_policy" name="password_policy" class="sr-only peer" @checked(old("password_policy", $securitySettings->password_policy) == 1)>
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __('Login Attempt Limit')}}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __('Limit the number of failed login attempts to protect against brute-force attacks.')}}
                                </p>
                            </div>
                            <label for="login_attempt_limit" class="cursor-pointer relative">
                                <input type="checkbox" id="login_attempt_limit" name="login_attempt_limit" class="sr-only peer" @checked(old("login_attempt_limit", $securitySettings->login_attempt_limit) == 1)>
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                    </div>
                    <div class="mt-8 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Update Changes")}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push("scripts")
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>

        function Tabs(selector, options) {
            if (!(this instanceof Tabs)) return new Tabs(selector, options);

            this.options = $.extend({
                linkActive: 'active',
                paneActive: 'active show',
                activeTab: 0
            }, options || {});

            this.init($(selector));
        }

        Tabs.prototype.init = function ($tabGroups) {
            const self = this;

            $tabGroups.each(function () {
                const $tabGroup = $(this);
                const $links = $tabGroup.find('a.nav-item');

                // Always get the closest wrapper that contains .tab-content
                const $wrapper = $tabGroup.closest('.tab-wrapper');
                const $panes = $wrapper.find('.tab-content .tab-pane');

                $links.on('click', function (e) {
                    e.preventDefault();

                    const $clicked = $(this);
                    const targetSelector = $clicked.attr('href');

                    // Remove active/show from all tabs and panes
                    $links.removeClass(self.options.linkActive);
                    $panes.removeClass('active show');

                    // Add to clicked tab and target pane
                    $clicked.addClass(self.options.linkActive);
                    $(targetSelector).addClass('active show');
                });
            });
        };

        $(document).ready(function () {
            new Tabs('.nav-tabs');
        });

        document.addEventListener('DOMContentLoaded', () => {
            const emailContainer = document.getElementById('email-template-container');
            const emailAddBtn = document.getElementById('add-email-template');
            const emailTemplateHTML = document.getElementById('email-template-row').innerHTML;
            let emailIndex = {{ count($emailTemplates) }};

            emailAddBtn.addEventListener('click', () => {
                const html = emailTemplateHTML.replace(/__INDEX__/g, emailIndex);
                emailContainer.insertAdjacentHTML('beforeend', html);
                emailIndex++;
            });

            emailContainer.addEventListener('click', function (e) {
                if (e.target.classList.contains('remove-email-template')) {
                    e.target.closest('.template-group').remove();
                }

                if (e.target.classList.contains('insert-email-shortcode')) {
                    const code = e.target.dataset.code;
                    const idx = e.target.dataset.index;
                    const textarea = emailContainer.querySelector(`textarea.email-template-body[data-index="${idx}"]`);
                    if (textarea) {
                        const start = textarea.selectionStart;
                        const end = textarea.selectionEnd;
                        textarea.value = textarea.value.slice(0, start) + code + textarea.value.slice(end);
                        textarea.focus();
                        textarea.selectionStart = textarea.selectionEnd = start + code.length;
                    }
                }
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const smsContainer = document.getElementById('sms-template-container');
            const smsAddBtn = document.getElementById('add-sms-template');
            const smsTemplateHTML = document.getElementById('sms-template-row').innerHTML;
            let smsIndex = {{ count($smsTemplates) }};

            smsAddBtn.addEventListener('click', () => {
                const html = smsTemplateHTML.replace(/__INDEX__/g, smsIndex);
                smsContainer.insertAdjacentHTML('beforeend', html);
                smsIndex++;
            });

            smsContainer.addEventListener('click', function (e) {
                if (e.target.classList.contains('remove-sms-template')) {
                    e.target.closest('.template-group').remove();
                }

                if (e.target.classList.contains('insert-sms-shortcode')) {
                    const code = e.target.dataset.code;
                    const idx = e.target.dataset.index;
                    const textarea = smsContainer.querySelector(`textarea.sms-template-body[data-index="${idx}"]`);
                    if (textarea) {
                        const start = textarea.selectionStart;
                        const end = textarea.selectionEnd;
                        textarea.value = textarea.value.slice(0, start) + code + textarea.value.slice(end);
                        textarea.focus();
                        textarea.selectionStart = textarea.selectionEnd = start + code.length;
                    }
                }
            });
        });

    </script>
    @endpush
</x-app-layout>
