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
                            <div class="card-title text-slate-900 dark:text-white">Property Information</div>
                        </div>
                    </header>

                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                            {{--UserName input start--}}
                            <div class="input-area">
                                <label for="code" class="form-label">{{ __('Property code') }}</label>
                                <input name="code" type="text" id="code" class="form-control" maxlength="1"
                                       placeholder="{{ __('Enter shop code') }}" value="{{ old('code') }}" required>
                                <x-input-error :messages="$errors->get('code')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="name" class="form-label">{{ __('Property number') }}</label>
                                <input name="name" type="text" id="name" class="form-control"
                                       placeholder="{{ __('Enter number') }}" value="{{ old('name') }}" required>
                                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="name" class="form-label">{{ __('Property picture') }}</label>
                                <input name="picture[]" type="file" id="picture" class="form-control" value="{{ old('picture') }}"  multiple>
                                <x-input-error :messages="$errors->get('picture')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="description" class="form-label">{{ __('Description') }}</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="write description">{{ old('description') }}</textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                            </div>
                            {{--Email input end--}}

                            {{--phone input start--}}
                            <div class="input-area">
                                <label for="sell_price" class="form-label">{{ __('Sell Price') }}</label>
                                <input name="sell_price" type="text" id="sell_price" class="form-control"
                                       placeholder="{{ __('Enter sell price') }}" value="{{ old('sell_price') }}" required>
                                <x-input-error :messages="$errors->get('sell_price')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="area" class="form-label">{{ __('Area (in Squire feet)') }}</label>
                                <input name="area" type="number" id="area" class="form-control"
                                       placeholder="{{ __('Enter area') }}" value="{{ old('area') }}" required>
                                <x-input-error :messages="$errors->get('area')" class="mt-2"/>
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
                                <label for="floorDropdown" class="form-label">{{ __('Floor') }}</label>
                                <select name="floor_id" class="form-control" id="floorDropdown" data-old="{{ old('floor_id') }}"></select>
                                <x-input-error :messages="$errors->get('floor_id')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="blockDropdown" class="form-label">{{ __('Block') }}</label>
                                <select name="block_id" class="form-control" id="blockDropdown" data-old="{{ old('block_id') }}"></select>
                                <x-input-error :messages="$errors->get('block_id')" class="mt-2"/>
                            </div>

                            {{--Role input start--}}
                            <div class="input-area">
                                <label for="generalStatusDropdown" class="form-label">{{ __('Status') }}</label>
                                <select name="status_id" class="form-control" id="generalStatusDropdown" data-old="{{ old('status_id') }}"></select>
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
                            <div class="card-title text-slate-900 dark:text-white">Feature Information</div>
                        </div>
                    </header>
                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                            <div id="feature-container">
                                <div id="feature-container">
                                    @if(old('feature_name'))
                                        @foreach(old('feature_name') as $index => $featureName)
                                            <div class="feature-row mb-3 d-flex">
                                                <input type="text" class="form-control me-2" name="feature_name[]"
                                                       placeholder="Feature Name" value="{{ $featureName }}">
                                                <br>
                                                <input type="text" class="form-control me-2" name="feature_value[]"
                                                       placeholder="Value" value="{{ old('feature_value')[$index] }}">
                                                <button type="button" class="btn btn-danger remove-feature">X</button>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <button type="button" id="add-feature" class="btn btn-success mt-2">Add Feature</button>
                        </div>
                    </div>
                </div>
            </div>


            <button type="submit" class="btn inline-flex justify-center btn-dark mt-4 w-full">
                {{ __( $pageConfig->create->submit->text) }}
            </button>
        </form>
    </div>

    @push("scripts")
        <script type="module">
            document.addEventListener("DOMContentLoaded", function () {


                $("#add-feature").click(function() {
                    $("#feature-container").append(`
                        <div class="feature-row mb-3 d-flex">
                            <input type="text" class="form-control me-2" name="feature_name[]" placeholder="Feature Name">
                            <br>
                            <input type="text" class="form-control me-2" name="feature_value[]" placeholder="Value">
                            <button type="button" class="btn btn-danger remove-feature">X</button>
                        </div>
                    `);
                });
                $(document).on("click", ".remove-feature", function() {
                    $(this).parent().remove();
                });

                loadDependentDropdowns([{ parent: 'floorDropdown', child: 'blockDropdown', type: 'block', filterKey: 'floor_id' }]);
                loadSelect2Dropdown("floor", "floorDropdown");
                loadSelect2Dropdown("status", "generalStatusDropdown", {type: "general"});
            });
        </script>
    @endpush
</x-app-layout>
