<x-app-layout>
    <div class="flex justify-between flex-wrap items-center mb-6">
        <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-flex items-center gap-3 ltr:pr-4 rtl:pl-4 mb-1 sm:mb-0">
            <span class="icon w-16 h-16 bg-violet-200 rounded-full inline-flex items-center justify-center">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.8509 19.5992C3.0635 18.0446 4.7841 17.084 6.6667 17.084H17.5C19.3826 17.084 21.1032 18.0446 22.3158 19.5992C23.5227 21.1465 24.1667 23.192 24.1667 25.2784V28.7507C24.1667 29.441 23.607 30.0007 22.9167 30.0007H1.25C0.5596 30.0007 0 29.441 0 28.7507V25.2784C0 23.192 0.644001 21.1465 1.8509 19.5992Z" fill="#9881CB"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.3329 17.4983C23.7295 17.0865 25.2868 17.4144 26.099 17.8827C26.8402 18.3047 27.5076 18.8793 28.0731 19.5775C29.3265 21.1249 29.9993 23.1768 29.9993 25.2748V28.747C29.9993 29.4374 29.4397 29.997 28.7493 29.997H27.0828C26.7418 29.997 26.4155 29.8576 26.1797 29.6112C25.9439 29.3648 25.819 29.0327 25.8341 28.692L25.835 28.6707L25.8376 28.6043C25.8399 28.546 25.8431 28.4604 25.8467 28.3532C25.8538 28.1386 25.8624 27.8384 25.8681 27.4973C25.8797 26.8049 25.8787 25.9813 25.8358 25.361C25.8078 24.9564 25.789 24.5968 25.7719 24.2689C25.7009 22.9105 25.6583 22.0963 25.1097 20.8774C25.009 20.6537 24.8429 20.3497 24.6865 20.0785C24.6112 19.948 24.5432 19.8338 24.4942 19.7525L24.437 19.6584L24.4223 19.6343L24.4188 19.6288C24.1175 19.1429 22.9996 18.1225 23.3329 17.4983Z" fill="#9881CB"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5793 0.665794C19.8811 0.266894 20.3915 0.0863933 20.877 0.206693C23.9627 0.971693 26.2511 3.75809 26.2511 7.08219C26.2511 10.4062 23.9627 13.1926 20.877 13.9576C20.3915 14.078 19.8811 13.8974 19.5793 13.4985C19.2777 13.0999 19.2426 12.5598 19.4901 12.1255L19.4931 12.1203L19.5062 12.0969C19.5182 12.0753 19.5368 12.0418 19.5609 11.9975C19.6091 11.9088 19.6795 11.7772 19.7645 11.6113C19.9351 11.2785 20.1622 10.8126 20.3885 10.2815C20.8621 9.16969 21.2508 7.95469 21.2508 7.08219C21.2508 6.20959 20.8621 4.99459 20.3885 3.88279C20.1622 3.35169 19.9351 2.88589 19.7645 2.55299C19.6795 2.38709 19.6091 2.25549 19.5609 2.16679C19.5368 2.12249 19.5182 2.08899 19.5062 2.06739L19.4931 2.04399L19.4904 2.03939C19.2428 1.60499 19.2776 1.06449 19.5793 0.665794Z" fill="#9881CB"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.41602 7.0833C5.41602 3.1713 8.58732 0 12.4993 0C16.4114 0 19.5827 3.1713 19.5827 7.0833C19.5827 10.9953 16.4114 14.1667 12.4993 14.1667C8.58732 14.1667 5.41602 10.9953 5.41602 7.0833Z" fill="#9881CB"/>
                </svg>
            </span>
            {{ __('Buyer') }}
        </h4>
        <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse">
            <a href="#add_new_buyer_modal" data-popup="modal" class="text-themered hover:bg-themered hover:text-white transition-all bg-[#FFF0F1] text-sm px-5 py-3 rounded-md font-semibold flex-1 inline-flex items-center justify-center">
                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:plus"></iconify-icon>
                {{ __('New Buyer') }}
            </a>
        </div>
    </div>


    <div class="buyer-grid-wrapper">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-5 xl:gap-6">

            <div class="buyer sm:flex gap-4 rounded-xl overflow-hidden border border-slate-100 bg-white p-4 lg:p-6">
                <div class="thumb flex-[0_0_250px] min-h-[250px] bg-cover bg-center rounded-xl overflow-hidden" style="background-image: url({{ asset('/images/buyer/1.png') }});"></div>
                <div class="info sm:flex-1 p-4">
                    <h2 class="text-2xl lg:text-3xl font-bold text-black-500">
                        <a href="{{ route('employee.buyer-details') }}">
                            David Warner
                        </a>
                    </h2>
                    <p class="text-slate-400">
                        {{ __("Since ") }} {{ __('Jan 12, 2025') }}
                    </p>
                    <div class="barcode mt-4">
                        <img src="{{ asset('/images/buyer/barcode.png') }}" alt="David Warner">
                    </div>

                    <ul class="mt-4 space-y-2">
                        <li class="text-sm">
                            <label class="text-gray-500">Email :</label>
                            <span class="value inline-block font-bold text-black-500">
                                david.warner@gmail.com
                            </span>
                        </li>
                        <li class="text-sm">
                            <label class="text-gray-500">Phone :</label>
                            <span class="value inline-block font-bold text-black-500">
                                0123 456 789
                            </span>
                        </li>
                        <li class="text-sm">
                            <label class="text-gray-500">Address :</label>
                            <span class="value inline-block font-bold text-black-500">
                                19A Orchid Rd, Gulshan, Dhaka.
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @push("modal")
    <!-- Add New Agent Modal -->
    <div id="add_new_buyer_modal" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
        <div class="modal-content bg-white w-full max-w-4xl mx-auto p-6 lg:p-8 xl:p-10 border border-slate-400 rounded-2xl relative">
            <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
            </button>

            <form id="multiStepForm" action="" method="POST" enctype="multipart/form-data">
                @csrf
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
                                    Core identity and communication details used to contact the buyer.
                                </p>
                            </div>
                        </div>

                        <div class="field-body grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="field-item space-y-2">
                                <label for="first_name" class="text-gunmetal font-medium block text-sm">
                                    {{ __('First Name')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" placeholder="{{ __('James')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                                <x-input-error :messages="$errors->get('first_name')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label for="last_name" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Last Name')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" placeholder="{{ __('Milner')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                                <x-input-error :messages="$errors->get('last_name')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label for="picture" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Profile Picture')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="file" name="picture" id="picture" class="text-sm w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-2 file:py-[5px] file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white file:font-light" required />
                                <x-input-error :messages="$errors->get('agent_profile_picture')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label for="email" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Email') }}
                                </label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('james.milner@gmail.com') }}" required >
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="field-item space-y-2">
                                <label for="phone" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Phone') }}
                                </label>
                                <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('012454124') }}" required >
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Preferred Contact Method')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="buyer_contact_method" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                    <option value="">Select</option>
                                    <option value="WhatsApp">WhatsApp</option>
                                    <option value="Email">Email</option>
                                    <option value="Call">Call</option>
                                    <option value="SMS">SMS</option>
                                </select>
                                <x-input-error :messages="$errors->get('buyer_contact_method')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label for="buyer_type_id" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Buyer Type')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="buyer_type_id" id="buyer_type_id" data-old="{{ old('buyer_type_id') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required ></select>
                                <x-input-error :messages="$errors->get('buyer_type_id')" class="mt-1"/>
                            </div>

                            <div class="field-item space-y-2">
                                <label for="gender_id" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Gender')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="gender_id" id="gender_id" data-old="{{ old('gender_id') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required ></select>
                                <x-input-error :messages="$errors->get('gender_id')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label for="status_id" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Active Status')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="status_id" id="status_id" data-old="{{ old('status_id') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required ></select>
                                <x-input-error :messages="$errors->get('status_id')" class="mt-1"/>
                            </div>

                        </div>

                        <div class="mt-4">
                            <button type="button" class="next-step transition-all flex items-center justify-center gap-3 w-full py-3 bg-red-600 text-white rounded-lg hover:bg-red-700">
                                {{ __('Continue New Buyer')}}
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
                                    General details used to categorize the buyer and understand their needs.
                                </p>
                            </div>
                        </div>

                        <div class="form-body grid gap-6 grid-cols-1 md:grid-cols-2 my-10">
                            <div class="field-item space-y-2">
                                <label for="username" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Username')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="text" name="username" id="username" value="{{ old('username') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('james_009')}}" required />
                                <x-input-error :messages="$errors->get('username')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label for="password" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Password')}} <span class="text-red-600">*</span>
                                </label>
                                <div class="passowrd relative">
                                    <input type="password" name="password" id="password" placeholder="{{ __('****')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg">
                                    <button type="button" class="toggle-password group/password absolute right-4 top-1/2 -translate-y-1/2" data-toggle="#password">
                                        <svg class="group-[.show]/password:hidden" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.34668 11.3467C6.65335 11.7401 7.13335 12.0001 7.66668 12.0001C8.58668 12.0001 9.33335 11.2534 9.33335 10.3334C9.33335 9.9534 9.20668 9.60007 8.99335 9.32007M1.54667 13.5335C1.14 13.0268 1 12.2202 1 11.0002V9.66683C1 7.00016 1.66667 6.3335 4.33333 6.3335H11C11.24 6.3335 11.46 6.34016 11.6667 6.3535C13.78 6.4735 14.3333 7.24016 14.3333 9.66683V11.0002C14.3333 13.6668 13.6667 14.3335 11 14.3335H4.33333C4.09333 14.3335 3.87333 14.3268 3.66667 14.3135M3.66699 6.33333V5C3.66699 2.79333 4.33366 1 7.66699 1C10.4337 1 11.3603 1.92 11.6003 3.37333M14.3333 1L1 14.3333" stroke="#C4CBD4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                        <svg class="hidden group-[.show]/password:block" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.34668 11.3467C6.65335 11.7401 7.13335 12.0001 7.66668 12.0001C8.58668 12.0001 9.33335 11.2534 9.33335 10.3334C9.33335 9.9534 9.20668 9.60007 8.99335 9.32007M1.54667 13.5335C1.14 13.0268 1 12.2202 1 11.0002V9.66683C1 7.00016 1.66667 6.3335 4.33333 6.3335H11C11.24 6.3335 11.46 6.34016 11.6667 6.3535C13.78 6.4735 14.3333 7.24016 14.3333 9.66683V11.0002C14.3333 13.6668 13.6667 14.3335 11 14.3335H4.33333C4.09333 14.3335 3.87333 14.3268 3.66667 14.3135M3.66699 6.33333V5C3.66699 2.79333 4.33366 1 7.66699 1C10.4337 1 11.3603 1.92 11.6003 3.37333" stroke="#C4CBD4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label for="nid" class="text-gunmetal font-medium block text-sm">
                                    {{ __('NID No.')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="text" name="nid" id="nid" value="{{ old('nid') }}" placeholder="{{ __('0000000000')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                                <x-input-error :messages="$errors->get('agent_nid')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label for="nid_copy" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Upload NID')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="file" name="nid_copy" id="nid_copy" class="text-sm w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-2 file:py-[5px] file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white file:font-light" required />
                                <x-input-error :messages="$errors->get('nid_copy')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label for="agent_id" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Source/Referred By')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="agent_id" id="agent_id" data-old="{{ old('agent_id') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required ></select>
                                <x-input-error :messages="$errors->get('agent_id')" class="mt-1"/>
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
                                {{ __('Continue Buyer Setup')}}
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
                                    {{ __('Official address of the agent or agency for regional mapping and contact.')}}
                                </p>
                            </div>
                        </div>


                        <div class="form-body grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-4 my-10">
                            <div class="field-item space-y-2 md:col-span-2 lg:col-span-4">
                                <label for="type_id" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Address Type')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="type_id" id="type_id" data-old="{{ old('type_id') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required ></select>
                                <x-input-error :messages="$errors->get('type_id')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2 md:col-span-2 lg:col-span-4">
                                <label for="address_line1" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Address Line 1')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="text" name="address_line1" id="address_line1" value="{{ old('address_line1') }}" placeholder="{{ __('Address info.')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                                <x-input-error :messages="$errors->get('address_line1')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2 md:col-span-2 lg:col-span-4">
                                <label for="address_line2" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Address Line 2')}}
                                </label>
                                <input type="text" name="address_line2" id="address_line2" value="{{ old('address_line2') }}" placeholder="{{ __('Address info...')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" />
                                <x-input-error :messages="$errors->get('address_line2')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label for="country_id" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Country')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="country_id" id="country_id" data-old="{{ old('country_id') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required ></select>
                                <x-input-error :messages="$errors->get('country_id')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label for="state_id" class="text-gunmetal font-medium block text-sm">
                                    {{ __('State')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="state_id" id="state_id" data-old="{{ old('state_id') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required ></select>
                                <x-input-error :messages="$errors->get('agent_address_state')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label for="city_id" class="text-gunmetal font-medium block text-sm">
                                    {{ __('City')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="city_id" id="city_id" data-old="{{ old('city_id') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required ></select>
                                <x-input-error :messages="$errors->get('city_id')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Zip Code')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="text" name="zip_code" id="zip_code" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg">
                                <x-input-error :messages="$errors->get('zip_code')" class="mt-1"/>
                            </div>
                        </div>


                        <div class="mt-6 flex justify-between *:flex *:items-center *:justify-center *:gap-3 *:rounded-lg  *:px-6 *:py-3">
                            <button type="button" class="prev-step bg-gray-300 text-gray-800">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.4994 6.07807C16.9677 3.07158 13.839 1 10.25 1C5.16249 1 0.99999 5.1625 0.99999 10.25C0.99999 15.3375 5.16249 19.5 10.25 19.5C13.839 19.5 16.9677 17.4284 18.4994 14.4219" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M19.4994 10.25H5.49939L9.49939 14.25M9.49939 6.25L7.99939 7.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{ __('Back') }}
                            </button>
                            <button type="submit" class="bg-red-600 text-white finish-step">{{ __('Set New Buyer')}}</button>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>

    </div>
    @endpush

    @push("scripts")
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        .progress-circle {
            transform: rotate(-90deg);
        }
        .progress-bg {
            fill: none;
            stroke: #e5e7eb; /* gray-200 */
            stroke-width: 3.5;
        }
        .progress-bar {
            fill: none;
            stroke: #dc2626; /* red-600 */
            stroke-width: 3.5;
            stroke-linecap: round;
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            transition: stroke-dashoffset 0.4s ease;
        }
        .progress-circle text {
            transform: rotate(90deg);
            transform-origin: center;
        }
        input:invalid,
        input.border-red-500,
        select:invalid,
        select.border-red-500,
        textarea:invalid {
            border-color: #e3342f;
        }
        .step button[disabled] {
            opacity: .5;
        }
    </style>

    <script>
        $(document).ready(function () {
            // Open modal
            $('[data-popup="modal"]').on('click', function (e) {
                e.preventDefault();
                const targetModal = $(this).attr('href');

                // Close any open modal before opening the new one
                $('.asams-modal.show').addClass('hidden').removeClass('show');

                // Open the target modal
                $(targetModal).removeClass('hidden').addClass('show');
            });

            // Close modal on click outside .modal-content or on .modal-close
            $('.asams-modal').on('click', function (e) {
                const $modalContent = $(this).find('.modal-content');
                const isClickInside = $modalContent.is(e.target) || $modalContent.has(e.target).length > 0;
                const isCloseBtn = $(e.target).closest('.modal-close').length > 0;

                if (!isClickInside || isCloseBtn) {
                    $(this).addClass('hidden').removeClass('show');
                }
            });

            // Close modal on Esc key
            $(document).on('keydown', function (e) {
                if (e.key === 'Escape') {
                    $('.asams-modal.show').addClass('hidden').removeClass('show');
                }
            });
        });


        // MultiStepForm Script
        $(document).ready(function () {
            const $form = $('#multiStepForm');
            const $steps = $form.find('.step');
            const $nextButtons = $form.find('.next-step');
            const $prevButtons = $form.find('.prev-step');
            const $progressBar = $form.find('.progress-bar');
            const $progressText = $('text.step-count-placeholder');
            const totalSteps = $steps.length;
            let currentStep = 1;

            // SVG Progress Bar
            const radius = $progressBar[0].r.baseVal.value;
            const circumference = 2 * Math.PI * radius;
            $progressBar.css({
                strokeDasharray: circumference,
                strokeDashoffset: circumference
            });

            function setProgress(step) {
                const progressRatio = step / totalSteps;
                const offset = circumference * (1 - progressRatio);
                $progressBar.css('strokeDashoffset', offset);
            }

            function validateStep(step) {
                const $currentStep = $steps.eq(step - 1);
                const $requiredFields = $currentStep.find('input[required], select[required], textarea[required]');
                let isValid = true;

                $requiredFields.each(function () {
                    const $field = $(this);
                    const value = $field.val();

                    if (
                        !value ||
                        $.trim(value) === '' ||
                        ($field.is('select') && $field.prop('selectedIndex') === 0)
                    ) {
                        isValid = false;
                        return false; // break loop
                    }
                });

                return isValid;
            }

            function showValidationErrors(step) {
                const $currentStep = $steps.eq(step - 1);
                const $requiredFields = $currentStep.find('input[required], select[required], textarea[required]');
                let allValid = true;

                $requiredFields.each(function () {
                    const $field = $(this);
                    const value = $field.val();
                    const isInvalid =
                        !value ||
                        $.trim(value) === '' ||
                        ($field.is('select') && $field.prop('selectedIndex') === 0);

                    if (isInvalid || !$field[0].checkValidity()) {
                        $field.addClass('border-red-500');
                        $field[0].reportValidity?.();
                        allValid = false;
                    } else {
                        $field.removeClass('border-red-500');
                    }
                });

                return allValid;
            }

            function toggleNextButton() {
                const isValid = validateStep(currentStep);
                const $currentNextBtn = $steps.eq(currentStep - 1).find('.next-step');
                $currentNextBtn.prop('disabled', !isValid);
            }

            function showStep(step) {
                $steps.addClass('hidden').eq(step - 1).removeClass('hidden');
                $progressText.text(`${step}/${totalSteps}`);
                setProgress(step);
                toggleNextButton();
            }

            // Prev button
            $prevButtons.on('click', function () {
                if (currentStep > 1) {
                    currentStep--;
                    showStep(currentStep);
                }
            });

            // Next button
            $nextButtons.on('click', function () {
                if (currentStep < totalSteps) {
                    const isValid = showValidationErrors(currentStep);
                    if (isValid) {
                        currentStep++;
                        showStep(currentStep);
                    }
                }
            });

            // Realtime validation for all fields
            $steps.each(function () {
                const $step = $(this);
                const $requiredFields = $step.find('input[required], select[required], textarea[required]');

                $requiredFields.on('input change', function () {
                    toggleNextButton();
                });
            });

            showStep(currentStep);
        });
    </script>
    @endpush
</x-app-layout>