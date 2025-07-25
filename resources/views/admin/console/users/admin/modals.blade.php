@push("modal")
<!-- Add New User Modal -->
<div id="add_new_user_modal" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
    <div class="modal-content bg-white w-full max-w-4xl mx-auto p-6 lg:p-8 xl:p-10 border border-slate-400 rounded-2xl relative">
        <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
            <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
        </button>

        <form id="multiStepForm" action="" method="POST" enctype="multipart/form-data">
            <div class="form-steps relative">
                <div class="absolute right-2 top-2">
                    <svg viewBox="0 0 36 36" class="progress-circle w-12 h-12">
                        <circle class="progress-bg" cx="18" cy="18" r="16" />
                        <circle class="progress-bar" cx="18" cy="18" r="16" />
                        <text x="18" y="21" text-anchor="middle" fill="currentColor" font-size="10" class="step-count-placeholder">1/3</text>
                    </svg>
                </div>

                <!-- Step 1 -->
                <fieldset class="step space-y-6 hidden" data-step="1">
                    <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                        <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.37858 14.7591C5.28175 13.8264 6.56334 13.25 7.96552 13.25H16.0345C17.4367 13.25 18.7183 13.8264 19.6214 14.7591C20.5203 15.6875 21 16.9148 21 18.1667V20.25C21 20.6642 20.5832 21 20.069 21H3.93103C3.41684 21 3 20.6642 3 20.25V18.1667C3 16.9148 3.47967 15.6875 4.37858 14.7591Z" fill="#2B323B"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 7.25C7.75 4.90279 9.65279 3 12 3C14.3472 3 16.25 4.90279 16.25 7.25C16.25 9.59721 14.3472 11.5 12 11.5C9.65279 11.5 7.75 9.59721 7.75 7.25Z" fill="#2B323B"/>
                            </svg>
                        </div>
                        <div class="">
                            <h2 class="text-xl font-semibold text-gray-900">
                                Profile Information
                            </h2>
                            <p class="text-sm text-gray-500 font-light">
                                Personal and contact details of the agent displayed across property listings.
                            </p>
                        </div>
                    </div>

                    <div class="field-body grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('First Name')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="user_fname" placeholder="{{ __('James')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('user_fname')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Last Name')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="user_lname" placeholder="{{ __('Milner')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('user_lname')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Profile Picture')}}
                            </label>
                            <input type="file" name="user_profile_picture" class="text-sm w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-2 file:py-[5px] file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white file:font-light" />
                            <x-input-error :messages="$errors->get('user_profile_picture')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Phone') }}
                            </label>
                            <input type="tel" name="user_phone" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('012454124') }}" required >
                            <x-input-error :messages="$errors->get('user_phone')" class="mt-2" />
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Email') }}
                            </label>
                            <input type="email" name="user_email" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('james.milner@gmail.com') }}" required >
                            <x-input-error :messages="$errors->get('user_email')" class="mt-2" />
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('NID No.') }}
                            </label>
                            <input type="text" inputmode="numeric" name="user_nid_number" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('012454124') }}" required >
                            <x-input-error :messages="$errors->get('agent_phone')" class="mt-2" />
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Date of Birth')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="date" name="user_dob" placeholder="{{ __('26-12-1997')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('user_dob')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Gender')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="user_gender" class="select2 w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <x-input-error :messages="$errors->get('user_gender')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Marital Status')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="user_marital_status" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="Married">Married</option>
                                <option value="Unmarried">Unmarried</option>
                            </select>
                            <x-input-error :messages="$errors->get('user_marital_status')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('User Role')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="user_role" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="User">User</option>
                                <option value="Employee">Employee</option>
                                <option value="Admin">Admin</option>
                            </select>
                            <x-input-error :messages="$errors->get('user_role')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Account Status')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="user_account_status" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                                <option value="Suspended">Suspended</option>
                            </select>
                            <x-input-error :messages="$errors->get('user_account_status')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Cover Picture')}}
                            </label>
                            <input type="file" name="user_cover_picture" class="text-sm w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-2 file:py-[5px] file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white file:font-light" />
                            <x-input-error :messages="$errors->get('user_cover_picture')" class="mt-1"/>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="button" class="next-step transition-all flex items-center justify-center gap-3 w-full py-3 bg-red-600 text-white rounded-lg hover:bg-red-700">
                            {{ __('Continue')}}
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </fieldset>
                <!-- Step 2 -->
                <fieldset class="step space-y-6 hidden" data-step="2">
                    <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                        <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C17.51 2 22 6.49 22 12C22 17.51 17.51 22 12 22C6.49 22 2 17.51 2 12C2 6.49 6.49 2 12 2ZM11.9961 15.25C11.5819 15.25 11.2461 15.5858 11.2461 16C11.2461 16.4142 11.5819 16.75 11.9961 16.75H12.0049C12.4191 16.75 12.7549 16.4142 12.7549 16C12.7549 15.5858 12.4191 15.25 12.0049 15.25H11.9961ZM12 7.25C11.5858 7.25 11.25 7.58579 11.25 8V13C11.25 13.4142 11.5858 13.75 12 13.75C12.4142 13.75 12.75 13.4142 12.75 13V8C12.75 7.58579 12.4142 7.25 12 7.25Z" fill="#2B323B"/>
                            </svg>
                        </div>
                        <div class="">
                            <h2 class="text-xl font-semibold text-gray-900">
                                Basic Information
                            </h2>
                            <p class="text-sm text-gray-500 font-light">
                                System-level information for managing role, access, and workflow within the platform.
                            </p>
                        </div>
                    </div>

                    <div class="form-body grid gap-6 grid-cols-1 md:grid-cols-2 my-10">
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Username')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="user_username" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('james_009')}}" required />
                            <x-input-error :messages="$errors->get('user_username')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Password')}} <span class="text-red-600">*</span>
                            </label>
                            <div class="passowrd relative">
                                <input type="password" name="user_login_password" id="user_login_password" placeholder="{{ __('****')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg">
                                <button type="button" class="toggle-password group/password absolute right-4 top-1/2 -translate-y-1/2" data-toggle="#user_login_password">
                                    <svg class="group-[.show]/password:hidden" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.34668 11.3467C6.65335 11.7401 7.13335 12.0001 7.66668 12.0001C8.58668 12.0001 9.33335 11.2534 9.33335 10.3334C9.33335 9.9534 9.20668 9.60007 8.99335 9.32007M1.54667 13.5335C1.14 13.0268 1 12.2202 1 11.0002V9.66683C1 7.00016 1.66667 6.3335 4.33333 6.3335H11C11.24 6.3335 11.46 6.34016 11.6667 6.3535C13.78 6.4735 14.3333 7.24016 14.3333 9.66683V11.0002C14.3333 13.6668 13.6667 14.3335 11 14.3335H4.33333C4.09333 14.3335 3.87333 14.3268 3.66667 14.3135M3.66699 6.33333V5C3.66699 2.79333 4.33366 1 7.66699 1C10.4337 1 11.3603 1.92 11.6003 3.37333M14.3333 1L1 14.3333" stroke="#C4CBD4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                    <svg class="hidden group-[.show]/password:block" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.34668 11.3467C6.65335 11.7401 7.13335 12.0001 7.66668 12.0001C8.58668 12.0001 9.33335 11.2534 9.33335 10.3334C9.33335 9.9534 9.20668 9.60007 8.99335 9.32007M1.54667 13.5335C1.14 13.0268 1 12.2202 1 11.0002V9.66683C1 7.00016 1.66667 6.3335 4.33333 6.3335H11C11.24 6.3335 11.46 6.34016 11.6667 6.3535C13.78 6.4735 14.3333 7.24016 14.3333 9.66683V11.0002C14.3333 13.6668 13.6667 14.3335 11 14.3335H4.33333C4.09333 14.3335 3.87333 14.3268 3.66667 14.3135M3.66699 6.33333V5C3.66699 2.79333 4.33366 1 7.66699 1C10.4337 1 11.3603 1.92 11.6003 3.37333" stroke="#C4CBD4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <x-input-error :messages="$errors->get('user_login_password')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Department')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="user_dept" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="HR">HR</option>
                                <option value="Sales">Sales</option>
                                <option value="IT">IT</option>
                                <option value="IT">IT</option>
                                <option value="Marketting">Marketting</option>
                            </select>
                            <x-input-error :messages="$errors->get('user_dept')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Designation')}} <span class="text-slate-500 font-normal">{{ __('(for employees)')}}</span>
                            </label>
                            <select name="user_designation" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="Admin Officer">Admin Officer</option>
                                <option value="Sales Agent">Sales Agent</option>
                            </select>
                            <x-input-error :messages="$errors->get('user_designation')" class="mt-1"/>
                        </div>                        
                    </div>

                    <div class="form-body grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 my-6">
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Login Permission')}}
                            </label>
                            <select name="user_login_permission" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required>
                                <option value="">Select</option>
                                <option value="Enabled">Enabled</option>
                                <option value="Disabled">Disabled</option>
                            </select>
                            <x-input-error :messages="$errors->get('user_login_permission')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Notification Settings')}} <span class="text-slate-500 font-normal">{{ __('(Multiple)')}}</span>
                            </label>
                            <select name="user_notification_settings" class="select2 w-full text-sm py-[13px] px-4 bg-white border rounded-lg" multiple required>
                                <option value="">Select</option>
                                <option value="Email">Email</option>
                                <option value="SMS">SMS</option>
                                <option value="Push">Push</option>
                            </select>
                            <x-input-error :messages="$errors->get('user_notification_settings')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Two-Factor Auth')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="user_tf_auth" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required>
                                <option value="">Select</option>
                                <option value="Enabled">Enabled</option>
                                <option value="Disabled">Disabled</option>
                            </select>
                            <x-input-error :messages="$errors->get('user_tf_auth')" class="mt-1"/>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between *:flex *:items-center *:justify-center *:gap-3 *:rounded-lg  *:px-6 *:py-3">
                        <button type="button" class="prev-step bg-gray-300 text-gray-800">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.4994 6.07807C16.9677 3.07158 13.839 1 10.25 1C5.16249 1 0.99999 5.1625 0.99999 10.25C0.99999 15.3375 5.16249 19.5 10.25 19.5C13.839 19.5 16.9677 17.4284 18.4994 14.4219" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.4994 10.25H5.49939L9.49939 14.25M9.49939 6.25L7.99939 7.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            {{ __('Back')}}
                        </button>
                        <button type="button" class="next-step bg-red-600 text-white">
                            {{ __('Continue User Setup')}}
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </fieldset>

                <!-- Step 3 -->
                <fieldset class="step space-y-6 hidden" data-step="3">
                    <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                        <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8224 6.36578C14.0066 -2.12317 1.9943 -2.12019 0.170179 6.3643C-0.365734 8.86913 0.404341 11.3285 1.54299 13.4064C2.6851 15.4905 4.24365 17.2767 5.42564 18.482L5.42656 18.483C5.86086 18.9243 6.26575 19.2934 6.66179 19.5536C7.0648 19.8183 7.50336 20 7.9933 20C8.48347 20 8.92176 19.8182 9.32416 19.553C9.71914 19.2927 10.1223 18.9235 10.5542 18.4825C11.7407 17.2769 13.3021 15.4911 14.4462 13.4073C15.587 11.3295 16.3584 8.87086 15.8224 6.36578ZM4 8C4 5.79086 5.79086 4 8 4C10.2091 4 12 5.79086 12 8C12 10.2091 10.2091 12 8 12C5.79086 12 4 10.2091 4 8Z" fill="#2B323B"/>
                            </svg>
                        </div>
                        <div class="">
                            <h2 class="text-xl font-semibold text-gray-900">
                                {{ __('Address Information')}}
                            </h2>
                            <p class="text-sm text-gray-500 font-light">
                                {{ __('Current and accurate address details of the user for documentation and communication.')}}
                            </p>
                        </div>
                    </div>

                    <div class="form-body grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-4 my-10">
                        <div class="field-item space-y-2 md:col-span-2 lg:col-span-4">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Address Type')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="user_address_type" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="Present">Present Address</option>
                                <option value="Parmanent">Parmanent Address</option>
                            </select>
                            <x-input-error :messages="$errors->get('user_address_type')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2 md:col-span-2 lg:col-span-4">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Address Line 1')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="user_address_l1" placeholder="{{ __('Address info.')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('user_address_l1')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2 md:col-span-2 lg:col-span-4">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Address Line 2')}}
                            </label>
                            <input type="text" name="user_address_l2" placeholder="{{ __('Address info...')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" />
                            <x-input-error :messages="$errors->get('user_address_l2')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('City')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="user_address_city" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="Dhaka">Dhaka City</option>
                                <option value="Cumilla">Cumilla City</option>
                            </select>
                            <x-input-error :messages="$errors->get('user_address_city')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('State')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="user_address_state" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Cumilla">Cumilla</option>
                            </select>
                            <x-input-error :messages="$errors->get('user_address_state')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Zip Code')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="user_address_zipcode" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="Dhaka">Dhaka City</option>
                                <option value="Cumilla">Cumilla City</option>
                            </select>
                            <x-input-error :messages="$errors->get('user_address_zipcode')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Country')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="user_address_country" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="bd">Bangladesh</option>
                            </select>
                            <x-input-error :messages="$errors->get('user_address_country')" class="mt-1"/>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between *:flex *:items-center *:justify-center *:gap-3 *:rounded-lg  *:px-6 *:py-3">
                        <button type="button" class="prev-step bg-gray-300 text-gray-800">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.4994 6.07807C16.9677 3.07158 13.839 1 10.25 1C5.16249 1 0.99999 5.1625 0.99999 10.25C0.99999 15.3375 5.16249 19.5 10.25 19.5C13.839 19.5 16.9677 17.4284 18.4994 14.4219" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.4994 10.25H5.49939L9.49939 14.25M9.49939 6.25L7.99939 7.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            {{ ("Back") }}
                        </button>
                        <button type="submit" class="bg-red-600 text-white finish-step">{{ __("Save User") }}</button>
                    </div>
                </fieldset>
            </div>
        </form>
    </div>

</div>
@endpush