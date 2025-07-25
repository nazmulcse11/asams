<x-app-layout>
    <div>
        {{--Create user form start--}}
        <form method="POST" action="{{ $formAction }}"  class="max-w-7xl m-auto" enctype="multipart/form-data">

            @csrf

            @if($formMethod !== 'POST')
                @method($formMethod)
            @endif

            <div class="relative bg-white rounded-lg shadow-sm border border-slate-100 p-4 xl:p-6 3xl:p-10 overflow-hidden space-y-12">
                
                <fieldset class="space-y-6">
                    <div class="border-b border-slate-100 pb-3 mb-3 flex gap-4 items-center">
                        <div class="w-12 h-12 bg-slate-100 flex items-center justify-center rounded-full">
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
                            <label for="first_name" class="text-gunmetal font-medium block text-sm">
                                {{ __('First Name')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $user->profile->first_name ?? '') }}" placeholder="{{ __('James')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('first_name')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="last_name" class="text-gunmetal font-medium block text-sm">
                                {{ __('Last Name')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $user->profile->last_name ?? '') }}" placeholder="{{ __('Milner')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('last_name')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="picture" class="text-gunmetal font-medium block text-sm">
                                {{ __('Profile Picture')}}
                            </label>
                            <input type="file" name="picture" id="picture" class="text-sm w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-2 file:py-[5px] file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white file:font-light" />
                            <x-input-error :messages="$errors->get('picture')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="phone" class="text-gunmetal font-medium block text-sm">
                                {{ __('Phone') }}
                            </label>
                            <input type="tel" name="phone" id="phone" value="{{ old('phone', $user->phone ?? '') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('012454124') }}" required >
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                        <div class="field-item space-y-2">
                            <label for="email" class="text-gunmetal font-medium block text-sm">
                                {{ __('Email') }}
                            </label>
                            <input type="email" name="email" id="email" value="{{ old('email', $user->email ?? '') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('james.milner@gmail.com') }}" required >
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="field-item space-y-2">
                            <label for="nid" class="text-gunmetal font-medium block text-sm">
                                {{ __('NID No.') }}
                            </label>
                            <input type="text" inputmode="numeric" name="nid" id="nid" value="{{ old('nid', $user->profile->nid ?? '') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('012454124') }}" required >
                            <x-input-error :messages="$errors->get('nid')" class="mt-2" />
                        </div>
                        <div class="field-item space-y-2">
                            <label for="date_of_birth" class="text-gunmetal font-medium block text-sm">
                                {{ __('Date of Birth')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', $user->profile->date_of_birth ?? '') }}" placeholder="{{ __('26-12-1997')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="gender_id" class="text-gunmetal font-medium block text-sm">
                                {{ __('Gender')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="gender_id" id="gender_id" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="" disabled>Select</option>
                                @foreach(dropdown_options('gender') as $gender)
                                    <option @selected(old('gender_id', $user->profile->gender_id ?? '') == $gender->id) value="{{ $gender->id }}">{{ $gender->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('gender_id')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="marital_status_id" class="text-gunmetal font-medium block text-sm">
                                {{ __('Marital Status')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="marital_status_id" id="marital_status_id" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="" disabled>Select</option>
                                @foreach(dropdown_options("marital") as $marital_status)
                                    <option @selected(old('marital_status_id', $user->profile->marital_status_id ?? '') == $marital_status->id) value="{{ $marital_status->id }}">{{ $marital_status->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('marital_status_id')" class="mt-1"/>
                        </div>

                        <div class="field-item space-y-2">
                            <label for="status_id" class="text-gunmetal font-medium block text-sm">
                                {{ __('Account Status')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="status_id" id="status_id" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="" disabled>Select</option>
                                @foreach(dropdown_options("status", ["type" => "general"]) as $status)
                                    <option @selected(old('status_id', $user->status_id ?? '') == $status->id) value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('status_id')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="cover" class="text-gunmetal font-medium block text-sm">
                                {{ __('Cover Picture')}}
                            </label>
                            <input type="file" name="cover" id="cover" class="text-sm w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-2 file:py-[5px] file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white file:font-light" />
                            <x-input-error :messages="$errors->get('cover')" class="mt-1"/>
                        </div>
                    </div>
                </fieldset>
            
                @if( !$user )
                <fieldset class="space-y-6">
                    <div class="border-b border-slate-100 pb-3 mb-3 flex gap-4 items-center">
                        <div class="w-12 h-12 bg-slate-100 flex items-center justify-center rounded-full">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.37858 14.7591C5.28175 13.8264 6.56334 13.25 7.96552 13.25H16.0345C17.4367 13.25 18.7183 13.8264 19.6214 14.7591C20.5203 15.6875 21 16.9148 21 18.1667V20.25C21 20.6642 20.5832 21 20.069 21H3.93103C3.41684 21 3 20.6642 3 20.25V18.1667C3 16.9148 3.47967 15.6875 4.37858 14.7591Z" fill="#2B323B"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 7.25C7.75 4.90279 9.65279 3 12 3C14.3472 3 16.25 4.90279 16.25 7.25C16.25 9.59721 14.3472 11.5 12 11.5C9.65279 11.5 7.75 9.59721 7.75 7.25Z" fill="#2B323B"/>
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
                            <label for="username" class="text-gunmetal font-medium block text-sm">
                                {{ __('Username')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="username" id="username" value="{{ old('username', $user->username ?? '') }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('james_009')}}" required />
                            <x-input-error :messages="$errors->get('username')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="password" class="text-gunmetal font-medium block text-sm">
                                {{ __('Password')}} <span class="text-red-600">*</span>
                            </label>
                            <div class="passowrd relative">
                                <input type="password" name="password" id="password" placeholder="{{ __('****')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg">
                                <button type="button" class="toggle-password group/password absolute right-4 top-1/2 -translate-y-1/2" data-toggle="#user_login_password">
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
                    </div>
                </fieldset>
                @endif

                <fieldset class="space-y-6">
                    <div class="border-b border-slate-100 pb-3 mb-3 flex gap-4 items-center">
                        <div class="w-12 h-12 bg-slate-100 flex items-center justify-center rounded-full">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 7.06984C15 6.39984 14.67 5.77984 14.11 5.40984L10.11 2.73984C9.44 2.28984 8.56 2.28984 7.89 2.73984L3.89 5.40984C3.34 5.77984 3 6.39984 3 7.06984V12.7498C3 13.0298 3.22 13.2498 3.5 13.2498H14.5C14.78 13.2498 15 13.0298 15 12.7498V7.06984ZM9 10.7498C8.04 10.7498 7.25 9.95984 7.25 8.99984C7.25 8.03984 8.04 7.24984 9 7.24984C9.96 7.24984 10.75 8.03984 10.75 8.99984C10.75 9.95984 9.96 10.7498 9 10.7498Z" fill="#2B323B"/>
                                <path d="M22 21.2501H20.73V18.2501C21.68 17.9401 22.37 17.0501 22.37 16.0001V14.0001C22.37 12.6901 21.3 11.6201 19.99 11.6201C18.68 11.6201 17.61 12.6901 17.61 14.0001V16.0001C17.61 17.0401 18.29 17.9201 19.22 18.2401V21.2501H15V15.2501C15 14.9701 14.78 14.7501 14.5 14.7501H3.5C3.22 14.7501 3 14.9701 3 15.2501V21.2501H2C1.59 21.2501 1.25 21.5901 1.25 22.0001C1.25 22.4101 1.59 22.7501 2 22.7501H19.93C19.95 22.7501 19.96 22.7601 19.98 22.7601C20 22.7601 20.01 22.7501 20.03 22.7501H22C22.41 22.7501 22.75 22.4101 22.75 22.0001C22.75 21.5901 22.41 21.2501 22 21.2501ZM8.25 18.2501C8.25 17.8401 8.59 17.5001 9 17.5001C9.41 17.5001 9.75 17.8401 9.75 18.2501V21.2501H8.25V18.2501Z" fill="#2B323B"/>
                            </svg>
                        </div>
                        <div class="">
                            <h2 class="text-xl font-semibold text-gray-900">
                                Property Information
                            </h2>
                            <p class="text-sm text-gray-500 font-light">
                                Admin is connected to properties and can perform actions on them
                            </p>
                        </div>
                    </div>
                    <div class="form-body grid gap-6 grid-cols-1 md:grid-cols-2 my-10">
                        <div class="field-item space-y-2 md:col-span-2 lg:col-span-4">
                            <label for="properties" class="text-gunmetal font-medium block text-sm">
                                {{ __('Property')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="properties[]" id="properties" class="select2 w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required multiple>
                                <option disabled>Select</option>
                                @foreach(dropdown_options("property") as $item)
                                    <option
                                        @selected(in_array($item->id, old('properties', $user?->properties?->pluck('id')?->toArray() ?? [])) == $item->id)
                                        value="{{ $item->id }}">
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('properties')" class="mt-1"/>
                        </div>
                    </div>
                </fieldset>


                <fieldset class="space-y-6">
                    <div class="border-b border-slate-100 pb-3 mb-3 flex gap-4 items-center">
                        <div class="w-12 h-12 bg-slate-100 flex items-center justify-center rounded-full">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8224 8.36578C18.0066 -0.12317 5.9943 -0.120189 4.17018 8.3643C3.63427 10.8691 4.40434 13.3285 5.54299 15.4064C6.6851 17.4905 8.24365 19.2767 9.42564 20.482L9.42656 20.483C9.86086 20.9243 10.2658 21.2934 10.6618 21.5536C11.0648 21.8183 11.5034 22 11.9933 22C12.4835 22 12.9218 21.8182 13.3242 21.553C13.7191 21.2927 14.1223 20.9235 14.5542 20.4825C15.7407 19.2769 17.3021 17.4911 18.4462 15.4073C19.587 13.3295 20.3584 10.8709 19.8224 8.36578ZM8 10C8 7.79086 9.79086 6 12 6C14.2091 6 16 7.79086 16 10C16 12.2091 14.2091 14 12 14C9.79086 14 8 12.2091 8 10Z" fill="#2B323B"/>
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
                            <label for="type_id" class="text-gunmetal font-medium block text-sm">
                                {{ __('Address Type')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="type_id" id="type_id" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option disabled>Select</option>
                                @foreach(dropdown_options("address-type") as $type)
                                    <option @selected(old('type_id', $user?->addresses?->first()->type_id ?? '') == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('type_id')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2 md:col-span-2 lg:col-span-4">
                            <label for="address_line1" class="text-gunmetal font-medium block text-sm">
                                {{ __('Address Line 1')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="address_line1" id="address_line1" value="{{ old('address_line1', $user?->addresses->first()->address_line1 ?? '') }}" placeholder="{{ __('Address info.')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('address_line1')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2 md:col-span-2 lg:col-span-4">
                            <label for="address_line2" class="text-gunmetal font-medium block text-sm">
                                {{ __('Address Line 2')}}
                            </label>
                            <input type="text" name="address_line2" id="address_line2" value="{{ old('address_line2', $user?->addresses->first()->address_line2 ?? '') }}" placeholder="{{ __('Address info...')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" />
                            <x-input-error :messages="$errors->get('address_line2')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="country_id" class="text-gunmetal font-medium block text-sm">
                                {{ __('Country')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="country_id" id="country_id" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" data-old="{{ old('country_id', $user?->addresses?->first()?->country_id ?? '') }}" required ></select>
                            <x-input-error :messages="$errors->get('country_id')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="state_id" class="text-gunmetal font-medium block text-sm">
                                {{ __('State')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="state_id" id="state_id" class="select2 w-full text-sm py-[13px] px-4 bg-white border rounded-lg" data-old="{{ old('state_id', $user?->addresses?->first()?->state_id ?? '') }}" required ></select>
                            <x-input-error :messages="$errors->get('state_id')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="city_id" class="text-gunmetal font-medium block text-sm">
                                {{ __('City')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="city_id" id="city_id" class="select2 w-full text-sm py-[13px] px-4 bg-white border rounded-lg" data-old="{{ old('city_id', $user?->addresses?->first()?->city_id ?? '') }}" required ></select>
                            <x-input-error :messages="$errors->get('city_id')" class="mt-1"/>
                        </div>

                        <div class="field-item space-y-2">
                            <label for="zip_code" class="text-gunmetal font-medium block text-sm">
                                {{ __('Post Code')}}
                            </label>
                            <input type="text" name="zip_code" id="zip_code" value="{{ old('zip_code', $user?->addresses?->first()?->zip_code ?? '') }}" placeholder="{{ __('post code')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" />
                            <x-input-error :messages="$errors->get('zip_code')" class="mt-1"/>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between *:flex *:items-center *:justify-center *:gap-3 *:rounded-lg  *:px-6 *:py-3">
                        <button type="submit" class="bg-red-600 text-white finish-step">@if($user) Update Admin @else Create Admin @endif</button>
                    </div>
                </fieldset>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                loadSelect2Dropdown("country", "country_id", {}, "Select Country");
                loadDependentDropdowns([
                    { parent: 'country_id', child: 'state_id', type: 'state', filterKey: 'country_id' },
                    { parent: 'state_id', child: 'city_id', type: 'city', filterKey: 'state_id' },
                ]);
            });
        </script>
    @endpush

</x-app-layout>
