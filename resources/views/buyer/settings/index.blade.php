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
                    <a href="#payment_settings" class="@if(request()->query('tab') == 'payment_settings') active @endif nav-item hover:bg-[#FFF5F5] hover:text-themered [&.active]:bg-[#FFF5F5] [&.active]:text-themered">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 20.3238C21 20.693 20.694 20.9992 20.325 20.9992H3.675C3.306 20.9992 3 20.693 3 20.3238C3 19.9546 3.306 19.6484 3.675 19.6484H20.325C20.694 19.6484 21 19.9546 21 20.3238Z" fill="currentcolor"/>
                            <path d="M15.0495 5.26032L5.38353 14.932C5.01453 15.3012 4.42053 15.3012 4.06053 14.932H4.05153C2.80053 13.6713 2.80053 11.6361 4.05153 10.3843L10.4865 3.94555C11.7465 2.68482 13.7805 2.68482 15.0405 3.94555C15.4095 4.29676 15.4095 4.90011 15.0495 5.26032Z" fill="currentcolor"/>
                            <path d="M19.9365 8.83407L17.1915 6.08746C16.8225 5.71824 16.2285 5.71824 15.8685 6.08746L6.20253 15.7591C5.83353 16.1193 5.83353 16.7137 6.20253 17.0829L8.94753 19.8385C10.2075 21.0902 12.2415 21.0902 13.5015 19.8385L19.9275 13.3997C21.2055 12.139 21.2055 10.0948 19.9365 8.83407ZM12.6825 16.9658L11.5935 18.0645C11.3685 18.2896 10.9995 18.2896 10.7655 18.0645C10.5405 17.8393 10.5405 17.4701 10.7655 17.236L11.8635 16.1373C12.0795 15.9212 12.4575 15.9212 12.6825 16.1373C12.9075 16.3625 12.9075 16.7497 12.6825 16.9658ZM16.2555 13.3907L14.0595 15.597C13.8345 15.8132 13.4655 15.8132 13.2315 15.597C13.0065 15.3719 13.0065 15.0027 13.2315 14.7685L15.4365 12.5623C15.6525 12.3461 16.0305 12.3461 16.2555 12.5623C16.4805 12.7964 16.4805 13.1656 16.2555 13.3907Z" fill="currentcolor"/>
                        </svg>
                        {{ __("Payment Settings")}}
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
                <li>
                    <a href="#doc_settings" class="@if(request()->query('tab') == 'doc_settings') active @endif nav-item hover:bg-[#FFF5F5] hover:text-themered [&.active]:bg-[#FFF5F5] [&.active]:text-themered">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.2227 2C16.8085 2.0001 18.0513 2.52892 18.877 3.5498C19.6803 4.54318 20 5.8946 20 7.375V16.625C20 18.1054 19.6803 19.4568 18.877 20.4502C18.0513 21.4711 16.8085 21.9999 15.2227 22H8.77734C7.19155 21.9999 5.94866 21.4711 5.12305 20.4502C4.31974 19.4568 4 18.1054 4 16.625V7.375C4 5.8946 4.31974 4.54318 5.12305 3.5498C5.94866 2.52891 7.19155 2.0001 8.77734 2H15.2227ZM8 16.25C7.58579 16.25 7.25 16.5858 7.25 17C7.25 17.4142 7.58579 17.75 8 17.75H16C16.4142 17.75 16.75 17.4142 16.75 17C16.75 16.5858 16.4142 16.25 16 16.25H8ZM8 13.25C7.58579 13.25 7.25 13.5858 7.25 14C7.25 14.4142 7.58579 14.75 8 14.75H12C12.4142 14.75 12.75 14.4142 12.75 14C12.75 13.5858 12.4142 13.25 12 13.25H8ZM12.5 5C12.0858 5 11.75 5.33579 11.75 5.75V7.75C11.75 9.26421 12.9858 10.5 14.5 10.5H16.5C16.9142 10.5 17.25 10.1642 17.25 9.75C17.25 9.33579 16.9142 9 16.5 9H14.5C13.8142 9 13.25 8.43579 13.25 7.75V5.75C13.25 5.33579 12.9142 5 12.5 5Z" fill="currentcolor"/>
                        </svg>
                        {{ __("Document Settings")}}
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
                                {{ __('Agent Name')}}<span class="text-xs text-[#8997A9]">(if any)</span> <span class="text-red-600">*</span>
                            </label>
                            <input type="email" name="agent_name" value="" placeholder="{{ __('James Milner')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('agent_name')" class="mt-1"/>
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
                            {{ __("Save Changes") }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade @if(request()->query('tab') == 'payment_settings') active show @endif" id="payment_settings">
                <h6 class="font-medium text-black-500 text-xl mb-4 border-b border-slate-100 pb-2">
                    {{ __("Payment Settings") }}
                </h6>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="field-body grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Payment Method')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="payment_method" id="payment_method_select" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg" required >
                                <option value="Bank Transfer" selected>Bank Transfer</option>
                                <option value="Mobile Banking">Mobile Banking</option>
                            </select>
                            <x-input-error :messages="$errors->get('payment_method')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Bank Account Name')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="accountName" value="" placeholder="{{ __('James Milner')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('accountName')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Account Number')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="accountNumber" inputmode="numeric" value="" placeholder="{{ __('0000 0000 0000 0000')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('accountNumber')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Bank Name')}}
                            </label>
                            <input type="text" name="bankName" value="" placeholder="{{ __('e.g., Dutch-Bangla Bank')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" />
                            <x-input-error :messages="$errors->get('bankName')" class="mt-1"/>
                        </div>                       
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Branch Name')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="branchName" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="Gulshan Branch" selected>Gulshan Branch</option>
                                <option value="Motijheel Branch">Motijheel Branch</option>
                                <option value="Boshundhara Branch">Boshundhara Branch</option>
                            </select>
                            <x-input-error :messages="$errors->get('branchName')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Routing Number')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="bank_routing_number" inputmode="numeric" value="" placeholder="{{ __('0000')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('bank_routing_number')" class="mt-1"/>
                        </div>
                    </div>
                    <div class="mt-8 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Save Payment Info") }}
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
                    <div class="overflow-x-auto">
                        <table class="w-full ">
                            <thead>
                                <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">
                                    <th>
                                        {{ __('Notification Type')}}
                                    </th>
                                    <th>
                                        {{ __('Email')}}
                                    </th>
                                    <th>
                                        {{ __('SMS')}}
                                    </th>
                                    <th>
                                        {{ __('Push')}}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="*:py-5 *:px-4 *:border-b *:whitespace-nowrap">
                                    <td class="text-pureblack font-medium text-sm">
                                        {{ __("Updates about my purchases")}}
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="enable__updateMyPurchase__email" id="enable__updateMyPurchase__email" class="peer sr-only">
                                        <label for="enable__updateMyPurchase__email" class="w-5 h-5 rounded border border-slate-300 inline-flex items-center justify-center peer-checked:bg-blue-600 peer-checked:border-blue-600 cursor-pointer">
                                            <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 5L4.125 8.125L11 1.25" stroke="white" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="enable__updateMyPurchase__sms" id="enable__updateMyPurchase__sms" class="peer sr-only">
                                        <label for="enable__updateMyPurchase__sms" class="w-5 h-5 rounded border border-slate-300 inline-flex items-center justify-center peer-checked:bg-blue-600 peer-checked:border-blue-600 cursor-pointer">
                                            <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 5L4.125 8.125L11 1.25" stroke="white" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="enable__updateMyPurchase__push" id="enable__updateMyPurchase__push" class="peer sr-only">
                                        <label for="enable__updateMyPurchase__push" class="w-5 h-5 rounded border border-slate-300 inline-flex items-center justify-center peer-checked:bg-blue-600 peer-checked:border-blue-600 cursor-pointer">
                                            <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 5L4.125 8.125L11 1.25" stroke="white" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="*:py-5 *:px-4 *:border-b *:whitespace-nowrap">
                                    <td class="text-pureblack font-medium text-sm">
                                        {{ __("Get alerts about payments")}}
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="get_alert_payments__email" id="get_alert_payments__email" class="peer sr-only">
                                        <label for="get_alert_payments__email" class="w-5 h-5 rounded border border-slate-300 inline-flex items-center justify-center peer-checked:bg-blue-600 peer-checked:border-blue-600 cursor-pointer">
                                            <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 5L4.125 8.125L11 1.25" stroke="white" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="get_alert_payments__sms" id="get_alert_payments__sms" class="peer sr-only">
                                        <label for="get_alert_payments__sms" class="w-5 h-5 rounded border border-slate-300 inline-flex items-center justify-center peer-checked:bg-blue-600 peer-checked:border-blue-600 cursor-pointer">
                                            <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 5L4.125 8.125L11 1.25" stroke="white" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="get_alert_payments__push" id="get_alert_payments__push" class="peer sr-only">
                                        <label for="get_alert_payments__push" class="w-5 h-5 rounded border border-slate-300 inline-flex items-center justify-center peer-checked:bg-blue-600 peer-checked:border-blue-600 cursor-pointer">
                                            <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 5L4.125 8.125L11 1.25" stroke="white" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="*:py-5 *:px-4 *:border-b *:whitespace-nowrap">
                                    <td class="text-pureblack font-medium text-sm">
                                        {{ __("Notify on Payment Confirmations")}}
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="payment__confirmation__email" id="payment__confirmation__email" class="peer sr-only">
                                        <label for="payment__confirmation__email" class="w-5 h-5 rounded border border-slate-300 inline-flex items-center justify-center peer-checked:bg-blue-600 peer-checked:border-blue-600 cursor-pointer">
                                            <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 5L4.125 8.125L11 1.25" stroke="white" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="payment__confirmation__sms" id="payment__confirmation__sms" class="peer sr-only">
                                        <label for="payment__confirmation__sms" class="w-5 h-5 rounded border border-slate-300 inline-flex items-center justify-center peer-checked:bg-blue-600 peer-checked:border-blue-600 cursor-pointer">
                                            <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 5L4.125 8.125L11 1.25" stroke="white" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <input type="checkbox" name="payment__confirmation__push" id="payment__confirmation__push" class="peer sr-only">
                                        <label for="payment__confirmation__push" class="w-5 h-5 rounded border border-slate-300 inline-flex items-center justify-center peer-checked:bg-blue-600 peer-checked:border-blue-600 cursor-pointer">
                                            <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 5L4.125 8.125L11 1.25" stroke="white" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-8 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Save Preferences") }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade @if(request()->query('tab') == 'doc_settings') active show @endif" id="doc_settings">
                <h6 class="font-medium text-black-500 text-xl mb-4 border-b border-slate-100 pb-2">
                    {{ __("Document Settings") }}
                </h6>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="overflow-x-auto">
                        <table class="w-full ">
                            <thead>
                                <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">
                                    <th>
                                        {{ __('Document Type')}}
                                    </th>
                                    <th>
                                        {{ __('Status')}}
                                    </th>
                                    <th>
                                        {{ __('Uploaded On')}}
                                    </th>
                                    <th class="!text-end">
                                        {{ __('Actions')}}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="*:py-5 *:px-4 *:border-b *:whitespace-nowrap">
                                    <td class="text-pureblack font-medium text-sm">
                                        {{ __("National ID")}}
                                    </td>
                                    <td>
                                        <span class="text-green-500 bg-[#F0FDF5] inline-flex items-center gap-1 px-3 py-1.5 rounded-full text-xs font-medium">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 8C0.5 3.59886 4.09886 0 8.5 0C9.73726 0 10.912 0.284765 11.9609 0.791958C12.2095 0.912171 12.3136 1.21116 12.1934 1.45976C12.0732 1.70836 11.7742 1.81244 11.5256 1.69223C10.6087 1.24886 9.58239 1 8.5 1C4.65114 1 1.5 4.15114 1.5 8C1.5 11.8489 4.65114 15 8.5 15C12.3489 15 15.5 11.8489 15.5 8C15.5 7.48056 15.4427 6.9743 15.3342 6.48702C15.2742 6.21748 15.4441 5.95033 15.7136 5.89033C15.9832 5.83032 16.2503 6.00019 16.3103 6.26973C16.4345 6.82767 16.5 7.40678 16.5 8C16.5 12.4011 12.9011 16 8.5 16C4.09886 16 0.5 12.4011 0.5 8Z" fill="currentcolor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3538 0.958947C16.549 1.15421 16.549 1.47079 16.3538 1.66605L7.43485 10.585C7.23958 10.7802 6.923 10.7802 6.72774 10.585L4.49801 8.35524C4.30275 8.15998 4.30275 7.8434 4.49801 7.64814C4.69327 7.45287 5.00985 7.45287 5.20512 7.64814L7.08129 9.52431L15.6467 0.958947C15.8419 0.763684 16.1585 0.763684 16.3538 0.958947Z" fill="currentcolor"/>
                                            </svg>
                                            {{ __('Verified')}}
                                        </span>
                                    </td>
                                    <td class="text-sm font-medium text-pureblack">
                                        {{ __('2025-06-15')}} <br> 
                                        <span class="text-sm text-[#607085] font-normal">
                                            {{ __('18:56:35')}}
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <div class="inline-flex items-center gap-1 w-min">
                                            <a href="#" class="inline-flex items-center gap-2 border border-slate-200 rounded-lg px-2 py-2 font-medium text-sm text-pureblack transition-all hover:bg-gunmetal hover:text-white">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                            <a href="#" class="inline-flex items-center gap-2 border border-slate-200 rounded-lg px-4 py-2.5 font-medium text-sm text-pureblack transition-all hover:bg-gunmetal hover:text-white">
                                                Replace
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="*:py-5 *:px-4 *:border-b *:whitespace-nowrap">
                                    <td class="text-pureblack font-medium text-sm">
                                        {{ __("Trade License")}}
                                    </td>
                                    <td>
                                        <span class="text-yellow-500 bg-[#FFFEC2] inline-flex items-center gap-1 px-3 py-1.5 rounded-full text-xs font-medium">
                                            {{ __('Pending')}}
                                        </span>
                                    </td>
                                    <td class="text-sm font-medium text-pureblack">
                                        {{ __('2025-06-15')}} <br> 
                                        <span class="text-sm text-[#607085] font-normal">
                                            {{ __('18:56:35')}}
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <div class="inline-flex items-center gap-1 w-min">
                                            <a href="#" class="inline-flex items-center gap-2 border border-slate-200 rounded-lg px-4 py-2.5 font-medium text-sm text-pureblack transition-all hover:bg-gunmetal hover:text-white">
                                                Re-upload
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-5">
                        <input type="file" name="upload_new_doc" id="upload_new_doc" class="sr-only">
                        <label for="upload_new_doc" class="inline-flex items-center gap-2 border border-slate-200 rounded-lg px-4 py-2.5 font-medium text-sm text-pureblack transition-all hover:bg-gunmetal hover:text-white cursor-pointer">
                            <iconify-icon class="text-xl font-light" icon="heroicons-outline:plus"></iconify-icon>
                            Upload New Document
                        </label>
                    </div>

                    <div class="mt-8 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg font-semibold px-5 py-3">
                            {{ __("Update") }}
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
