<x-app-layout>
    <div>
        {{--Breadcrumb start--}}
        <div class="mb-6">
            {{--BreadCrumb--}}
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->edit->title" button-url="{{ route($pageConfig->routes->create) }}" button-title="{{ __($pageConfig->edit->create->text) }}" button-icon="{{ $pageConfig->edit->create->icon }}" />
        </div>
        {{--Breadcrumb end--}}

        {{--Create user form start--}}
        <form method="POST" action="{{ route($pageConfig->routes->update, $item) }}"  class="grid xl:grid-cols-2 grid-cols-1 gap-6" enctype="multipart/form-data">

            @csrf
            @method("PUT")

            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">{{ __("Profile Information") }}</div>
                        </div>
                    </header>

                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">

                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                            {{--First Name--}}
                            <div class="input-area">
                                <label for="first_name" class="form-label">{{ __('First Name') }}</label>
                                <input name="first_name" type="text" id="first_name" class="form-control"
                                       placeholder="{{ __('Enter first name') }}" value="{{ old('first_name', $item->profile?->first_name) }}" required>
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2"/>
                            </div>

                            {{--Last Name--}}
                            <div class="input-area">
                                <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                                <input name="last_name" type="text" id="last_name" class="form-control"
                                       placeholder="{{ __('Enter last name') }}" value="{{ old('last_name', $item->profile?->last_name) }}">
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2"/>
                            </div>

                            {{--Profile Picture--}}
                            <div class="input-area">
                                <label for="picture" class="form-label">{{ __('Profile Picture URL') }}</label>
                                <input name="picture" type="file" id="picture" class="form-control">
                                <x-input-error :messages="$errors->get('picture')" class="mt-2"/>
                            </div>

                            {{--Blood Group--}}
                            <div class="input-area">
                                <label for="blood_group" class="form-label">{{ __('Blood Group') }}</label>
                                <select name="blood_group" id="bloodGroupDropdown" class="form-control" data-old="{{ old('blood_group', $item->profile?->blood_group_id) }}"></select>
                                <x-input-error :messages="$errors->get('blood_group')" class="mt-2"/>
                            </div>

                            {{--NID--}}
                            <div class="input-area">
                                <label for="nid" class="form-label">{{ __('National ID (NID)') }}</label>
                                <input name="nid" type="text" id="nid" class="form-control"
                                       placeholder="{{ __('Enter NID') }}" value="{{ old('nid', $item->profile?->nid) }}">
                                <x-input-error :messages="$errors->get('nid')" class="mt-2"/>
                            </div>

                            {{--Date of Birth--}}
                            <div class="input-area">
                                <label for="date_of_birth" class="form-label">{{ __('Date of Birth') }}</label>
                                <input name="date_of_birth" type="date" id="date_of_birth" class="form-control"
                                       value="{{ old('date_of_birth', $item->profile?->date_of_birth) }}">
                                <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2"/>
                            </div>

                            {{--Gender--}}
                            <div class="input-area">
                                <label for="genderDropdown" class="form-label">{{ __('Gender') }}</label>
                                <select name="gender" id="genderDropdown" class="form-control" data-old="{{ old('gender', $item->profile?->gender_id) }}"></select>
                                <x-input-error :messages="$errors->get('gender')" class="mt-2"/>
                            </div>

                            {{--Marital Status--}}

                            <div class="input-area">
                                <label for="maritalDropdown" class="form-label">{{ __('Marital Status') }}</label>
                                <select name="marital_status" id="maritalDropdown" class="form-control" data-old="{{ old('marital_status', $item->profile?->marital_status_id) }}"></select>
                                <x-input-error :messages="$errors->get('marital_status')" class="mt-2"/>
                            </div>
                        </div>

                    </div>
                    {{--Create user form end--}}
                </div>
            </div>
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">{{ __("Basic Information") }}</div>
                        </div>
                    </header>

                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                            {{--UserName input start--}}
                            <div class="input-area">
                                <label for="username" class="form-label">{{ __('UserName') }}</label>
                                <input name="username" type="text" id="username" class="form-control"
                                       placeholder="{{ __('Enter administrator username') }}" value="{{ old('username', $item->username) }}" required>
                                <x-input-error :messages="$errors->get('username')" class="mt-2"/>
                            </div>
                            {{--UserName input end--}}

                            {{--Email input start--}}
                            <div class="input-area">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input name="email" type="email" id="email" class="form-control"
                                       placeholder="{{ __('Enter your email') }}" value="{{ old('email', $item->email) }}" required>
                                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                            </div>
                            {{--Email input end--}}

                            {{--phone input start--}}
                            <div class="input-area">
                                <label for="phone" class="form-label">{{ __('Phone') }}</label>
                                <input name="phone" type="text" id="phone" class="form-control"
                                       placeholder="{{ __('Enter administrator phone') }}" value="{{ old('phone', $item->phone) }}" required>
                                <x-input-error :messages="$errors->get('phone')" class="mt-2"/>
                            </div>
                            {{--phone input end--}}

                            {{-- Password input start--}}
                            <div class="input-area">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input name="password" type="password" id="password" class="form-control" placeholder="{{ __('Enter Password') }}" >
                                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                            </div>
                            {{--Password input end--}}

                            {{--Role input start--}}
                            <div class="input-area">
                                <label for="generalStatusDropdown" class="form-label">{{ __('Status') }}</label>
                                <select name="status" class="form-control" id="generalStatusDropdown" data-old="{{ old('status', $item->status_id) }}"></select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2"/>
                            </div>
                            {{--Role input end--}}

                        </div>
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">{{ __("Address Information") }}</div>
                        </div>
                    </header>
                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">

                        @forelse($item->addresses as $index => $address)
                            <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">
                                {{-- Type --}}
                                <div class="input-area">
                                    <label for="addressTypeDropdown" class="form-label">{{ __('Address Type') }}</label>
                                    <select name="addresses[0][type]" id="addressTypeDropdown" class="form-control" data-old="{{ old('addresses.0.type', $address->type_id) }}"></select>
                                    <x-input-error :messages="$errors->get('addresses.0.type')" class="mt-2"/>
                                </div>

                                {{-- Address Line 1 --}}
                                <div class="input-area">
                                    <label class="form-label">{{ __('Address Line 1') }}</label>
                                    <input name="addresses[{{ $index }}][address_line1]" type="text" class="form-control"
                                           value="{{ old("addresses.$index.address_line1", $address->address_line1) }}" required>
                                    <x-input-error :messages="$errors->get('addresses.$index.address_line1')" class="mt-2"/>
                                </div>

                                {{-- Address Line 2 --}}
                                <div class="input-area">
                                    <label class="form-label">{{ __('Address Line 2') }}</label>
                                    <input name="addresses[{{ $index }}][address_line2]" type="text" class="form-control"
                                           value="{{ old("addresses.$index.address_line2", $address->address_line2) }}">
                                    <x-input-error :messages="$errors->get('addresses.$index.address_line2')" class="mt-2"/>
                                </div>

                                {{-- City --}}
                                <div class="input-area">
                                    <label class="form-label">{{ __('City') }}</label>
                                    <input name="addresses[{{ $index }}][city]" type="text" class="form-control"
                                           value="{{ old("addresses.$index.city", $address->city) }}" required>
                                    <x-input-error :messages="$errors->get('addresses.$index.city')" class="mt-2"/>
                                </div>

                                {{-- State --}}
                                <div class="input-area">
                                    <label class="form-label">{{ __('State') }}</label>
                                    <input name="addresses[{{ $index }}][state]" type="text" class="form-control"
                                           value="{{ old("addresses.$index.state", $address->state) }}" required>
                                    <x-input-error :messages="$errors->get('addresses.$index.state')" class="mt-2"/>
                                </div>

                                {{-- Zip Code --}}
                                <div class="input-area">
                                    <label class="form-label">{{ __('Zip Code') }}</label>
                                    <input name="addresses[{{ $index }}][zip_code]" type="text" class="form-control"
                                           value="{{ old("addresses.$index.zip_code", $address->zip_code) }}" required>
                                    <x-input-error :messages="$errors->get('addresses.$index.zip_code')" class="mt-2"/>
                                </div>

                                {{-- Country --}}
                                <div class="input-area">
                                    <label class="form-label">{{ __('Country') }}</label>
                                    <input name="addresses[{{ $index }}][country]" type="text" class="form-control"
                                           value="{{ old("addresses.$index.country", $address->country) }}" required>
                                    <x-input-error :messages="$errors->get('addresses.$index.country')" class="mt-2"/>
                                </div>

                                {{-- Is Primary --}}
                                <div class="checkbox-area">
                                    <label class="inline-flex items-center cursor-pointer" for="addresses_{{ $index }}_is_primary">
                                        <input type="checkbox" class="hidden" id="addresses_{{ $index }}_is_primary" name="addresses[{{ $index }}][is_primary]" value="1" @checked(old("addresses.$index.is_primary", $address->is_primary))>
                                        <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                        <img src="{{ asset("images/icon/ck-white.svg") }}" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                        <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">{{ __('Is this address Primary?') }}</span>
                                    </label>
                                </div>
                            </div>
                        @empty
                            <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                                {{--Type--}}
                                <div class="input-area">
                                    <label for="address_type" class="form-label">{{ __('Address Type') }}</label>
                                    <select name="addresses[0][type]" id="addressTypeDropdown" class="form-control" data-old="{{ old('addresses.0.type') }}"></select>
                                    <x-input-error :messages="$errors->get('addresses.0.type')" class="mt-2"/>
                                </div>

                                {{--Address Line 1--}}
                                <div class="input-area">
                                    <label for="address_line1" class="form-label">{{ __('Address Line 1') }}</label>
                                    <input name="addresses[0][address_line1]" type="text" id="address_line1" class="form-control"
                                           placeholder="{{ __('Enter address line 1') }}" value="{{ old('addresses.0.address_line1') }}" required>
                                    <x-input-error :messages="$errors->get('addresses.0.address_line1')" class="mt-2"/>
                                </div>

                                {{--Address Line 2--}}
                                <div class="input-area">
                                    <label for="address_line2" class="form-label">{{ __('Address Line 2') }}</label>
                                    <input name="addresses[0][address_line2]" type="text" id="address_line2" class="form-control"
                                           placeholder="{{ __('Enter address line 2') }}" value="{{ old('addresses.0.address_line2') }}">
                                    <x-input-error :messages="$errors->get('addresses.0.address_line2')" class="mt-2"/>
                                </div>

                                {{--City--}}
                                <div class="input-area">
                                    <label for="city" class="form-label">{{ __('City') }}</label>
                                    <input name="addresses[0][city]" type="text" id="city" class="form-control"
                                           placeholder="{{ __('Enter city') }}" value="{{ old('addresses.0.city') }}" required>
                                    <x-input-error :messages="$errors->get('addresses.0.city')" class="mt-2"/>
                                </div>

                                {{--State--}}
                                <div class="input-area">
                                    <label for="state" class="form-label">{{ __('State') }}</label>
                                    <input name="addresses[0][state]" type="text" id="state" class="form-control"
                                           placeholder="{{ __('Enter state') }}" value="{{ old('addresses.0.state') }}" required>
                                    <x-input-error :messages="$errors->get('addresses.0.state')" class="mt-2"/>
                                </div>

                                {{--Zip Code--}}
                                <div class="input-area">
                                    <label for="zip_code" class="form-label">{{ __('Zip Code') }}</label>
                                    <input name="addresses[0][zip_code]" type="text" id="zip_code" class="form-control"
                                           placeholder="{{ __('Enter zip code') }}" value="{{ old('addresses.0.zip_code') }}" required>
                                    <x-input-error :messages="$errors->get('addresses.0.zip_code')" class="mt-2"/>
                                </div>

                                {{--Country--}}
                                <div class="input-area">
                                    <label for="country" class="form-label">{{ __('Country') }}</label>
                                    <input name="addresses[0][country]" type="text" id="country" class="form-control"
                                           placeholder="{{ __('Enter country') }}" value="{{ old('addresses.0.country') }}" required>
                                    <x-input-error :messages="$errors->get('addresses.0.country')" class="mt-2"/>
                                </div>

                                {{-- Is Primary --}}
                                <div class="checkbox-area">
                                    <label class="inline-flex items-center cursor-pointer" for="addresses_0_is_primary">
                                        <input type="checkbox" class="hidden" id="addresses_0_is_primary" name="addresses[0][is_primary]" value="1" @checked(old("addresses.0.is_primary"))>
                                        <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                        <img src="{{ asset("images/icon/ck-white.svg") }}" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                        <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">{{ __('Is this address Primary?') }}</span>
                                    </label>
                                </div>
                            </div>
                            @endforelse

                        <button type="submit" class="btn inline-flex justify-center btn-dark mt-4 w-full">
                            {{ __( $pageConfig->edit->submit->text) }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @push("scripts")
        <script type="module">
            document.addEventListener("DOMContentLoaded", function () {
                loadSelect2Dropdown("blood-group", "bloodGroupDropdown");
                loadSelect2Dropdown("gender", "genderDropdown");
                loadSelect2Dropdown("marital", "maritalDropdown");
                loadSelect2Dropdown("status", "generalStatusDropdown", {type: "general"});
                loadSelect2Dropdown("address-type", "addressTypeDropdown", {type: "general"});
            });
        </script>
    @endpush
</x-app-layout>
