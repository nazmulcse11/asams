<x-app-layout>
    <div class="tab-wrapper max-w-screen-lg mx-auto bg-white rounded-2xl border border-slate-100 overflow-hidden sm:flex">
        <div class="flex-[0_0_240px] border-r border-slate-100 py-4 px-3">
            <h6 class="font-bold text-black-500 text-xl mb-4">
                {{ __("Settings") }}
            </h6>
            <ul class="nav-tabs space-y-1 [&_a]:w-full [&_a]:py-2.5 [&_a]:px-3 [&_a]:rounded-md [&_a]:font-medium [&_a]:inline-flex [&_a]:items-center [&_a]:gap-2 [&_a]:text-base [&_a]:transition-all [&_a]:text-[#607085]">
                <li>
                    <a href="#profile_settings" class="@if(request()->query('tab') == 'profile_settings') active @endif active nav-item hover:bg-[#FFF5F5] hover:text-themered [&.active]:bg-[#FFF5F5] [&.active]:text-themered">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.37858 14.7591C5.28175 13.8264 6.56334 13.25 7.96552 13.25H16.0345C17.4367 13.25 18.7183 13.8264 19.6214 14.7591C20.5203 15.6875 21 16.9148 21 18.1667V20.25C21 20.6642 20.5832 21 20.069 21H3.93103C3.41684 21 3 20.6642 3 20.25V18.1667C3 16.9148 3.47967 15.6875 4.37858 14.7591Z" fill="currentcolor"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 7.25C7.75 4.90279 9.65279 3 12 3C14.3472 3 16.25 4.90279 16.25 7.25C16.25 9.59721 14.3472 11.5 12 11.5C9.65279 11.5 7.75 9.59721 7.75 7.25Z" fill="currentcolor"/>
                        </svg>
                        {{ __("Profile Settings")}}
                    </a>
                </li>
                <li>
                    <a href="#security_settings" class="@if(request()->query('tab') == 'security_settings') active @endif nav-item hover:bg-[#FFF5F5] hover:text-themered [&.active]:bg-[#FFF5F5] [&.active]:text-themered">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.5139 4.66908L13.9439 2.38911C13.916 2.37775 13.8881 2.36665 13.8601 2.3558C13.2913 2.13529 12.7433 2.60892 12.7432 3.21896L12.7422 20.5152C12.7421 21.1854 13.3899 21.6648 14.0036 21.3955C18.0684 19.612 20.9039 15.4893 20.9039 11.1191V6.72908C20.9039 5.90908 20.2739 4.97908 19.5139 4.66908Z" fill="currentcolor"/>
                            <path d="M4.46784 4.62817L10.0366 2.33117C10.0642 2.31985 10.0918 2.30877 10.1195 2.29795C10.6881 2.07571 11.237 2.54938 11.237 3.15986L11.238 20.5998C11.2381 21.2709 10.5887 21.7502 9.97502 21.4788C5.91209 19.6815 3.07812 15.5286 3.07812 11.1264V6.70356C3.07812 5.87744 3.708 4.94049 4.46784 4.62817Z" fill="currentcolor"/>
                        </svg>
                        {{ __("Security Settings")}}
                    </a>
                </li>
                <li>
                    <a href="#notification_settings" class="@if(request()->query('tab') == 'notification_settings') active @endif nav-item hover:bg-[#FFF5F5] hover:text-themered [&.active]:bg-[#FFF5F5] [&.active]:text-themered">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9428 20.01C14.5059 21.17 13.3515 22 11.9994 22C11.1777 22 10.3665 21.68 9.79445 21.11C9.46163 20.81 9.21202 20.41 9.06641 20C9.20161 20.02 9.33682 20.03 9.48243 20.05C9.72165 20.08 9.97126 20.11 10.2209 20.13C10.8137 20.18 11.417 20.21 12.0202 20.21C12.613 20.21 13.2059 20.18 13.7883 20.13C14.0067 20.11 14.2251 20.1 14.4331 20.07C14.5996 20.05 14.766 20.03 14.9428 20.01Z" fill="currentcolor"/>
                            <path d="M19.6316 14.49L18.5915 12.83C18.3731 12.46 18.1755 11.76 18.1755 11.35V8.82C18.1755 6.47 16.7402 4.44 14.6704 3.49C14.1296 2.57 13.1311 2 11.9871 2C10.8534 2 9.83414 2.59 9.2933 3.52C7.26518 4.49 5.86109 6.5 5.86109 8.82V11.35C5.86109 11.76 5.66348 12.46 5.44506 12.82L4.3946 14.49C3.97857 15.16 3.88496 15.9 4.14498 16.58C4.3946 17.25 4.98743 17.77 5.75708 18.02C7.77481 18.68 9.89654 19 12.0183 19C14.14 19 16.2617 18.68 18.2795 18.03C19.0075 17.8 19.5691 17.27 19.8396 16.58C20.11 15.89 20.0372 15.13 19.6316 14.49Z" fill="currentcolor"/>
                        </svg>
                        {{ __("Notification Settings")}}
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content flex-1 *:p-4 xl:*:p-10 xl:*:py-8">
            <div class="tab-pane fade @if(request()->query('tab') == 'profile_settings') active show @endif active show" id="profile_settings">
                <h6 class="font-medium text-black-500 text-xl mb-4 border-b border-slate-100 pb-2">
                    {{ __("Profile Settings") }}
                </h6>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="field-body grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('First Name')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="firstName" value="" placeholder="{{ __('')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('firstName')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Last Name')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="lastName" value="" placeholder="{{ __('')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('lastName')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Email Address')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="emailAddress" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('emailAddress')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Phone Number')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="phone" value="" placeholder="{{ __('0123 456 789')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('phone')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Profile Picture')}}
                            </label>
                            <input type="file" name="profile_picture" class="w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-4 file:py-1 file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white" />
                            <x-input-error :messages="$errors->get('profile_picture')" class="mt-1"/>
                        </div>

                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('National ID Number')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" inputmode="numeric" name="nid_number" value="" placeholder="{{ __('565632566')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('nid_number')" class="mt-1"/>
                        </div>
                    </div>
                    <div class="mt-8 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Update Changes") }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade @if(request()->query('tab') == 'security_settings') active show @endif" id="security_settings">
                <h6 class="font-medium text-black-500 text-xl mb-4 border-b border-slate-100 pb-2">
                    {{ __("Security Settings") }}
                </h6>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="field-body grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Old Password')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="password" name="oldpassword" value="" placeholder="{{ __('********')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('oldpassword')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('New Password')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="password" name="newpassword" value="" placeholder="{{ __('********')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('newpassword')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Confirm Password')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="password" name="confirmpassword" value="" placeholder="{{ __('********')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('confirmpassword')" class="mt-1"/>
                        </div>                        
                    </div>
                    <div class="mt-3 space-y-4 *:flex *:items-center *:gap-4 *:justify-between *:p-4 xl:*:px-6 xl:*:py-5 *:rounded-lg *:border">

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __("Enable Two-Factor Authentication (2FA)") }}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __("Add an extra layer of login security") }}
                                </p>
                            </div>
                            <label for="enable_2fa" class="cursor-pointer relative">
                                <input type="checkbox" id="enable_2fa" name="email_notification" class="sr-only peer" checked>
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>
                    </div>
                    <div class="max-sm:space-y-2 sm:flex items-center justify-between border-b border-slate-100 mt-8 pb-6">
                        <div class="">
                            <h5 class="font-medium text-lg xl:text-xl">
                                {{ __("Logout from All Devices")}}
                            </h5>
                            <p class="text-sm">
                                {{ __("Force sign-out across all logged-in sessions")}}
                            </p>
                        </div>
                        <div class="">
                            <a href="#" class="inline-flex items-center gap-1 border border-slate-200 rounded-lg px-6 py-3 font-medium text-sm text-pureblack transition-all hover:bg-gunmetal hover:text-white">
                                Force Sign-out
                            </a>
                        </div>
                    </div>
                    <div class="mt-8 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Save Info") }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade @if(request()->query('tab') == 'notification_settings') active show @endif" id="notification_settings">
                <h6 class="font-medium text-black-500 text-xl mb-4 border-b border-slate-100 pb-2">
                    {{ __("Notification Settings") }}
                </h6>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mt-3 space-y-4 *:flex *:items-center *:gap-4 *:justify-between *:p-4 xl:*:px-6 xl:*:py-5 *:rounded-lg *:border">

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __("Notify on Buyer Requests") }}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __("Receive instant alerts when a buyer submits a new shop reservation or inquiry.") }}
                                </p>
                            </div>
                            <label for="enable_buyer_request" class="cursor-pointer relative">
                                <input type="checkbox" id="enable_buyer_request" name="email_notification" class="sr-only peer" checked>
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>
                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __("Notify on Agent Submissions") }}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __("Get notified whenever an agent submits a new proposal or request on behalf of a buyer.") }}
                                </p>
                            </div>
                            <label for="enable_agent_submission" class="cursor-pointer relative">
                                <input type="checkbox" id="enable_agent_submission" name="email_notification" class="sr-only peer" checked>
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>
                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __("Admin Messages via Email") }}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __("Receive important messages and updates from admins directly in your email inbox.") }}
                                </p>
                            </div>
                            <label for="enable_admin_msg_via_emial" class="cursor-pointer relative">
                                <input type="checkbox" id="enable_admin_msg_via_emial" name="email_notification" class="sr-only peer">
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>
                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">
                                    {{ __("In-App Alerts") }}
                                </h4>
                                <p class="text-sm text-gray-500">
                                    {{ __("Stay updated with real-time alerts while using the dashboard — no email needed.") }}
                                </p>
                            </div>
                            <label for="enable_in_app_alerts" class="cursor-pointer relative">
                                <input type="checkbox" id="enable_in_app_alerts" name="in_app_alert" class="sr-only peer">
                                <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>
                    </div>
                    <div class="mt-8 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Save Preferences") }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push("scripts")
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>

        document.addEventListener("DOMContentLoaded", function () {
            $('#timezone').select2({
                placeholder: 'Select timezone',
            });
        });

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

    </script>

    @endpush
</x-app-layout>
