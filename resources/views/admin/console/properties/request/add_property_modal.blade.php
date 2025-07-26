<div class="modal-content bg-white w-full max-w-4xl mx-auto p-6 lg:p-8 xl:p-10 border border-slate-400 rounded-2xl relative">
    <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
        <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
    </button>

    <form id="multiStepForm" action="{{ route('admin.console.property.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="property_setup_id" value="{{ $init->id }}">
        <div class="form-steps relative">
            <div class="absolute right-2 top-2">
                <svg viewBox="0 0 36 36" class="progress-circle w-12 h-12">
                    <circle class="progress-bg" cx="18" cy="18" r="16" />
                    <circle class="progress-bar" cx="18" cy="18" r="16" />
                    <text x="18" y="21" text-anchor="middle" fill="currentColor" font-size="10" class="step-count-placeholder">1/3</text>
                </svg>
            </div>

            <!-- Step 1 -->
            <fieldset class="step space-y-6" data-step="1">
                <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                    <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 0.25C9.4073 0.25 9.8057 0.36027 10.1563 0.56738C10.5066 0.77434 10.7963 1.07046 11 1.42285L11.002 1.42578L17.6953 13.1523C17.8945 13.5144 17.9989 13.9225 18 14.3359C18.0011 14.7495 17.8994 15.1583 17.7022 15.5215C17.5048 15.8849 17.2169 16.192 16.8652 16.4092C16.5133 16.6264 16.11 16.7452 15.6963 16.75H2.30372C1.89 16.7452 1.48672 16.6264 1.13477 16.4092C0.783079 16.192 0.495239 15.8849 0.297859 15.5215C0.100639 15.1583 -0.00109117 14.7495 8.82638e-06 14.3359C0.00115883 13.9225 0.105489 13.5144 0.304699 13.1523L0.310559 13.1426L7 1.42285C7.2037 1.07046 7.4935 0.77434 7.8438 0.56738C8.1943 0.36027 8.5927 0.25 9 0.25ZM9 11.8701C8.44 11.8701 8 12.3201 8 12.8701C8.0001 13.4201 8.45 13.8701 9 13.8701C9.56 13.8701 9.9999 13.4201 10 12.8701C10 12.3201 9.55 11.8701 9 11.8701ZM9 4.37988C8.59 4.37988 8.2501 4.71994 8.25 5.12988V9.96C8.25 10.37 8.59 10.71 9 10.71C9.41 10.71 9.75 10.37 9.75 9.96V5.12988C9.7499 4.71994 9.41 4.37988 9 4.37988Z" fill="#2B323B"/>
                        </svg>
                    </div>
                    <div class="">
                        <h2 class="text-xl font-semibold text-gray-900">
                            Basic Information
                        </h2>
                        <p class="text-sm text-gray-500 font-light">
                            Start by filling in the core details of the property.
                        </p>
                    </div>
                </div>
                <div class="field-body grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="field-item space-y-2">
                        <label for="name" class="text-gunmetal font-medium block">
                            Property Name <span class="text-red-600">*</span>
                        </label>
                        <input type="text" name="name" id="name" value="{{ old("name") }}" placeholder="Nur Super Market" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg" required>
                        <x-input-error :messages="$errors->get('name')" class="mt-1"/>
                    </div>

                    @if($init->property_type)
                        <div class="field-item space-y-2">
                            <label for="property_type_id" class="text-gunmetal font-medium block">
                                Property Type <span class="text-red-600">*</span>
                            </label>
                            <select name="property_type_id" id="property_type_id" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg">
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('property_type_id ')" class="mt-1"/>
                        </div>
                    @endif

                    @if($init->enable_contact_info)
                        <div class="field-item space-y-2">
                            <label for="contact_person" class="text-gunmetal font-medium block">
                                Contact Person <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="contact_person" id="contact_person" value="{{ old("contact_person") }}" placeholder="Gerard Martin" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('contact_person')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="contact_designation" class="text-gunmetal font-medium block">
                                Designation <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="contact_designation" id="contact_designation" value="{{ old("contact_designation") }}" placeholder="manager, director" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('contact_designation')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="contact_email" class="text-gunmetal font-medium block">
                                Email <span class="text-red-600">*</span>
                            </label>
                            <input type="email" name="contact_email" id="contact_email" value="{{ old("contact_email") }}" placeholder="gerard.martin@gmail.com" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('contact_email')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="contact_number" class="text-gunmetal font-medium block">
                                Phone <span class="text-red-600">*</span>
                            </label>
                            <input type="tel" name="contact_number" id="contact_number" value="{{ old("contact_number") }}" placeholder="01712 345678" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('contact_number')" class="mt-1"/>
                        </div>
                    @endif
                </div>
                <div class="mt-4">
                    <button type="button" class="next-step transition-all flex items-center justify-center gap-3 w-full py-3 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        Continue Setup
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </fieldset>

            <!-- Step 2 -->
            @if($init->enable_address_info || $init->enable_gmaps)
            <fieldset class="step space-y-6 hidden" data-step="2">
                <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                    <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8224 6.36578C14.0066 -2.12317 1.9943 -2.12019 0.170178 6.3643C-0.365732 8.8691 0.404338 11.3285 1.54299 13.4064C2.6851 15.4905 4.24365 17.2767 5.42564 18.482L5.42656 18.483C5.86086 18.9243 6.2658 19.2934 6.6618 19.5536C7.0648 19.8183 7.5034 20 7.9933 20C8.4835 20 8.9218 19.8182 9.3242 19.553C9.7191 19.2927 10.1223 18.9235 10.5542 18.4825C11.7407 17.2769 13.3021 15.4911 14.4462 13.4073C15.587 11.3295 16.3584 8.8709 15.8224 6.36578ZM4 8C4 5.79086 5.79086 4 8 4C10.2091 4 12 5.79086 12 8C12 10.2091 10.2091 12 8 12C5.79086 12 4 10.2091 4 8Z" fill="#2B323B"/>
                        </svg>
                    </div>
                    <div class="">
                        <h2 class="text-xl font-semibold text-gray-900">
                            Location Information
                        </h2>
                        <p class="text-sm text-gray-500 font-light">
                            Add address and map details to help agents and buyers locate the property easily.
                        </p>
                    </div>
                </div>

                <div class="field-body grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    @if($init->enable_address_info)
                    <div class="field-item space-y-2 sm:col-span-2 lg:col-span-4">
                        <label for="address_line1" class="text-gunmetal font-medium block">
                            Address Line 1 <span class="text-red-600">*</span>
                        </label>
                        <input type="text" name="address_line1" id="address_line1" value="{{ old("address_line1") }}" placeholder="Address Line 1" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg" required />
                        <x-input-error :messages="$errors->get('address_line1')" class="mt-1"/>
                    </div>
                    <div class="field-item space-y-2 sm:col-span-2 lg:col-span-4">
                        <label for="address_line2" class="text-gunmetal font-medium block">
                            Address Line 2
                        </label>
                        <input type="text" name="address_line2" id="address_line2" value="{{ old("address_line2") }}" placeholder="Address Line 2" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg"  />
                        <x-input-error :messages="$errors->get('address_line2')" class="mt-1"/>
                    </div>

                    <div class="field-item space-y-2">
                        <label for="country_id" class="text-gunmetal font-medium block">
                            Country <span class="text-red-600">*</span>
                        </label>
                        <select name="country_id" id="country_id" data-old="{{ old('country_id') }}" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg"></select>
                        <x-input-error :messages="$errors->get('country_id')" class="mt-1"/>
                    </div>
                        <div class="field-item space-y-2">
                            <label for="state_id" class="text-gunmetal font-medium block">
                                State <span class="text-red-600">*</span>
                            </label>
                            <select name="state_id" id="state_id" data-old="{{ old('state_id') }}" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg"></select>
                            <x-input-error :messages="$errors->get('state_id')" class="mt-1"/>
                        </div>
                    <div class="field-item space-y-2">
                        <label for="city_id" class="text-gunmetal font-medium block">
                            City <span class="text-red-600">*</span>
                        </label>
                        <select name="city_id" id="city_id" data-old="{{ old('city_id') }}" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg"></select>
                        <x-input-error :messages="$errors->get('city_id')" class="mt-1"/>
                    </div>
                    <div class="field-item space-y-2">
                        <label for="zip_code" class="text-gunmetal font-medium block">
                            Zip Code <span class="text-red-600">*</span>
                        </label>
                        <input type="text" name="zip_code" id="zip_code" value="{{ old("zip_code") }}" placeholder="Zip Code" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg" required>
                        <x-input-error :messages="$errors->get('zip_code')" class="mt-1"/>
                    </div>
                    @endif

                    @if($init->enable_gmaps)
                        <div class="field-item space-y-2 sm:col-span-2">
                            <label class="text-gunmetal font-medium block">
                                {{ __('Google Latitude (-90 to 90)') }} <span class="text-red-600">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2">
                                    <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.25 19.25H0.75" stroke="#8997A9" stroke-width="1.5" stroke-linecap="round"/>
                                        <path d="M8 13.25C11.4518 13.25 14.25 10.4518 14.25 7C14.25 3.54822 11.4518 0.75 8 0.75C4.54822 0.75 1.75 3.54822 1.75 7C1.75 10.4518 4.54822 13.25 8 13.25ZM8 13.25V16.25" stroke="#8997A9" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </span>
                                <input type="number" inputmode="numeric" name="latitude" id="latitude" value="{{ old('latitude') }}" placeholder="Map Latitude" min="0" step=".01" class="w-full text-sm font-light py-4 px-4 pl-12 bg-white border rounded-lg" required />
                            </div>
                            <x-input-error :messages="$errors->get('latitude')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2 sm:col-span-2">
                        <label class="text-gunmetal font-medium block">
                            {{ __('Google Longi (-180 to 180)') }} <span class="text-red-600">*</span>
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.25 19.25H0.75" stroke="#8997A9" stroke-width="1.5" stroke-linecap="round"/>
                                    <path d="M8 13.25C11.4518 13.25 14.25 10.4518 14.25 7C14.25 3.54822 11.4518 0.75 8 0.75C4.54822 0.75 1.75 3.54822 1.75 7C1.75 10.4518 4.54822 13.25 8 13.25ZM8 13.25V16.25" stroke="#8997A9" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </span>
                            <input type="number" inputmode="numeric" name="longitude" id="longitude" value="{{ old('longitude') }}" placeholder="Map Longitude" min="0" step=".01" class="w-full text-sm font-light py-4 px-4 pl-12 bg-white border rounded-lg" required/>
                        </div>
                        <x-input-error :messages="$errors->get('longitude')" class="mt-1"/>
                    </div>
                    @endif
                </div>

                <div class="mt-6 flex justify-between *:flex *:items-center *:justify-center *:gap-3 *:rounded-lg  *:px-6 *:py-3">
                    <button type="button" class="prev-step bg-gray-300 text-gray-800">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.4994 6.07807C16.9677 3.07158 13.839 1 10.25 1C5.16249 1 0.99999 5.1625 0.99999 10.25C0.99999 15.3375 5.16249 19.5 10.25 19.5C13.839 19.5 16.9677 17.4284 18.4994 14.4219" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.4994 10.25H5.49939L9.49939 14.25M9.49939 6.25L7.99939 7.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Previous
                    </button>
                    <button type="button" class="lat-lang next-step bg-red-600 text-white">
                        Continue
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </fieldset>
            @endif

            <!-- Step 3 -->
            <fieldset class="step space-y-6 hidden" data-step="3">
                <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                    <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M19 20.5V22H5V20.5H19ZM3.5 5V19H2V5H3.5ZM22 5V19H20.5V5H22ZM19 2V3.5H5V2H19Z" fill="#2B323B"/>
                            <path opacity="0.4" d="M23.5 19V23.5H19V19H23.5ZM20.5 22H22V20.5H20.5V22Z" fill="#2B323B"/>
                            <path opacity="0.4" d="M5 19V23.5H0.5V19H5ZM2 22H3.5V20.5H2V22Z" fill="#2B323B"/>
                            <path opacity="0.4" d="M23.5 0.5V5H19V0.5H23.5ZM20.5 3.5H22V2H20.5V3.5Z" fill="#2B323B"/>
                            <path opacity="0.4" d="M5 0.5V5H0.5V0.5H5ZM2 3.5H3.5V2H2V3.5Z" fill="#2B323B"/>
                            <path d="M20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C7.3056 20.5 3.5 16.6944 3.5 12C3.5 7.3056 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.3056 20.5 12Z" fill="#2B323B"/>
                        </svg>
                    </div>
                    <div class="">
                        <h2 class="text-xl font-semibold text-gray-900">
                            Size & Structure
                        </h2>
                        <p class="text-sm text-gray-500 font-light">
                            Enter dimensions, blocks, and floor plans to define your property's structure.
                        </p>
                    </div>
                </div>


                <div class="form-body grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 my-10">
                    @if($init->enable_area)
                        <div class="field-item space-y-2">
                            <label for="length" class="text-gunmetal font-medium block ">
                                Length<span class="text-slate-500">(feet)</span> <span class="text-red-600">*</span>
                            </label>
                            <input type="number" inputmode="numeric" name="length" id="length" value="{{ old('length')}}" placeholder="250" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('length')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="wide" class="text-gunmetal font-medium block ">
                                Wide<span class="text-slate-500">(feet)</span> <span class="text-red-600">*</span>
                            </label>
                            <input type="number" inputmode="numeric" name="wide" id="wide" value="{{ old('wide')}}" placeholder="220" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('wide')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label for="total_area" class="text-gunmetal font-medium block ">
                                Total Area<span class="text-slate-500">(sq.ft)</span> <span class="text-red-600">*</span>
                            </label>
                            <input type="number" name="total_area" id="total_area" value="{{ old('total_area')}}" placeholder="55,500" inputmode="numeric" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('total_area')" class="mt-1"/>
                        </div>
                    @endif

                    <div class="field-item space-y-2">
                        <label for="floor_size" class="text-gunmetal font-medium block ">
                            Floor Size<span class="text-slate-500">(sq.ft)</span> <span class="text-red-600">*</span>
                        </label>
                        <input type="number" inputmode="numeric" name="floor_size" id="floor_size" value="{{ old('floor_size')}}" placeholder="35,570" class="w-full text-sm font-light py-4 px-4 bg-white border rounded-lg" required />
                        <x-input-error :messages="$errors->get('property_floor_size')" class="mt-1"/>
                    </div>
                    @if($init->img_video)
                        <div class="field-item space-y-2">
                            <label for="images" class="text-gunmetal font-medium block ">
                                Upload Images<span class="text-slate-500 text-xs font-light">(multiple upload)</span> <span class="text-red-600">*</span>
                            </label>
                            <input type="file" inputmode="numeric" name="images[]" id="images" multiple  class="w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-4 file:p-2 file:rounded-lg file:border-0 file:bg-red-600 file:text-white" required />
                            <x-input-error :messages="$errors->get('property_images')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                        <label for="video_url" class="text-gunmetal font-medium block ">
                            Upload Video<span class="text-slate-500 text-xs font-light">(Youtube, Vimeo)</span>
                        </label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.25 19.25H0.75" stroke="#8997A9" stroke-width="1.5" stroke-linecap="round"/>
                                    <path d="M8 13.25C11.4518 13.25 14.25 10.4518 14.25 7C14.25 3.54822 11.4518 0.75 8 0.75C4.54822 0.75 1.75 3.54822 1.75 7C1.75 10.4518 4.54822 13.25 8 13.25ZM8 13.25V16.25" stroke="#8997A9" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </span>
                            <input type="url" name="video" id="video" value="{{ old('video') }}" placeholder="https://www.youtube.com/videoID" class="w-full text-sm font-light py-4 px-4 pl-12 bg-white border rounded-lg"/>
                        </div>
                        <x-input-error :messages="$errors->get('video')" class="mt-1"/>
                    </div>
                    @endif
                </div>

                <div class="mt-6 flex justify-between *:flex *:items-center *:justify-center *:gap-3 *:rounded-lg  *:px-6 *:py-3">
                    <button type="button" class="prev-step bg-gray-300 text-gray-800">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.4994 6.07807C16.9677 3.07158 13.839 1 10.25 1C5.16249 1 0.99999 5.1625 0.99999 10.25C0.99999 15.3375 5.16249 19.5 10.25 19.5C13.839 19.5 16.9677 17.4284 18.4994 14.4219" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.4994 10.25H5.49939L9.49939 14.25M9.49939 6.25L7.99939 7.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Previous
                    </button>
                    <button type="submit" class="bg-red-600 text-white finish-step">Create Property</button>
                </div>
            </fieldset>
        </div>
    </form>
</div>
