<x-app-layout>
    <div>
        {{--Breadcrumb start--}}
        <div class="mb-6">
            {{--BreadCrumb--}}
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->create->title" />
        </div>
        {{--Breadcrumb end--}}

        {{--Create user form start--}}
        <form method="POST" action="{{ route($pageConfig->routes->store) }}"  class="grid xl:grid-cols-2 grid-cols-1 gap-6"  enctype="multipart/form-data">

            @csrf

            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">{{ __("Property Information") }}</div>
                        </div>
                    </header>

                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                            <div class="input-area">
                                <label for="name" class="form-label">{{ __('Property name') }}</label>
                                <input name="name" type="text" id="name" class="form-control"
                                       placeholder="{{ __('Enter number') }}" value="{{ old('name') }}" required>
                                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="name" class="form-label">{{ __('Property picture') }}</label>
                                <input name="picture" type="file" id="picture" class="form-control" value="{{ old('picture') }}"  multiple>
                                <x-input-error :messages="$errors->get('picture')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="address" class="form-label">{{ __('Address') }}</label>
                                <textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="write address">{{ old('address') }}</textarea>
                                <x-input-error :messages="$errors->get('address')" class="mt-2"/>
                            </div>
                            {{--Email input end--}}

                            {{--phone input start--}}
                            <div class="input-area">
                                <label for="number_of_floors" class="form-label">{{ __('Number of floors') }}</label>
                                <input name="number_of_floors" type="number" id="number_of_floors" class="form-control"
                                       placeholder="{{ __('Enter sell price') }}" value="{{ old('number_of_floors') }}" required>
                                <x-input-error :messages="$errors->get('number_of_floors')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="length" class="form-label">{{ __('Length') }}</label>
                                <input name="length" type="number" id="length" class="form-control"
                                       placeholder="{{ __('Enter length') }}" value="{{ old('length') }}" required>
                                <x-input-error :messages="$errors->get('length')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="wide" class="form-label">{{ __('Wide') }}</label>
                                <input name="wide" type="number" id="wide" class="form-control"
                                       placeholder="{{ __('Enter wide') }}" value="{{ old('wide') }}" required>
                                <x-input-error :messages="$errors->get('wide')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="contact_person" class="form-label">{{ __('Contact person') }}</label>
                                <input name="contact_person" type="text" id="contact_person" class="form-control"
                                       placeholder="{{ __('Enter contact person') }}" value="{{ old('contact_person') }}" required>
                                <x-input-error :messages="$errors->get('contact_person')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="contact_number" class="form-label">{{ __('Contact number') }}</label>
                                <input name="contact_number" type="text" id="contact_number" class="form-control"
                                       placeholder="{{ __('Enter contact number') }}" value="{{ old('contact_number') }}" required>
                                <x-input-error :messages="$errors->get('contact_number')" class="mt-2"/>
                            </div>

                            <div class="flex mb-4">
                                <div class="input-area">
                                    <label class="form-label">{{ __('Location') }}</label>
                                    <input name="latitude" type="number" id="latitude" class="form-control" step="0.000001" min="-90" max="90"
                                           placeholder="{{ __('Enter latitude') }}" value="{{ old('latitude') }}" required>
                                    <x-input-error :messages="$errors->get('latitude')" class="mt-2"/>
                                </div>

                                <div class="input-area">
                                    <label class="form-label">{{ __('.') }}</label>
                                    <input name="longitude" type="number" id="longitude" class="form-control" step="0.000001" min="-180" max="180"
                                           placeholder="{{ __('Enter longitude') }}" value="{{ old('longitude') }}" required>
                                    <x-input-error :messages="$errors->get('longitude')" class="mt-2"/>
                                </div>
                            </div>

                            {{--Role input start--}}
                            <div class="input-area">
                                <label for="propertyTypeDropdown" class="form-label">{{ __('Type') }}</label>
                                <select name="property_type_id" class="form-control" id="propertyTypeDropdown" data-old="{{ old('property_type_id') }}"></select>
                                <x-input-error :messages="$errors->get('property_type_id')" class="mt-2"/>
                            </div>
                            {{--Role input end--}}

                        </div>
                    </div>

                </div>
            </div>

            <div class="card">
            </div>

            <button type="submit" class="btn inline-flex justify-center btn-dark mt-4 w-full">
                {{ __( $pageConfig->create->submit->text) }}
            </button>
        </form>
    </div>

    @push("scripts")
        <script type="module">
            document.addEventListener("DOMContentLoaded", function () {
                loadSelect2Dropdown("property-type", "propertyTypeDropdown", {}, "Filter by Type");
            });
        </script>
    @endpush
</x-app-layout>
