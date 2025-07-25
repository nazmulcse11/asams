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

                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                            <div class="input-area">
                                <label for="propertyDropdown" class="form-label">{{ __('Property') }}</label>
                                <select name="property" class="form-control" id="propertyDropdown" data-old="{{ old('property', $item->floor?->property?->id) }}"></select>
                                <x-input-error :messages="$errors->get('property')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="floorDropdown" class="form-label">{{ __('Floor') }}</label>
                                <select name="floor_id" class="form-control" id="floorDropdown" data-old="{{ old('floor_id', $item->floor_id) }}"></select>
                                <x-input-error :messages="$errors->get('floor_id')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="name" class="form-label">{{ __('Block name') }}</label>
                                <input name="name" type="text" id="name" class="form-control"
                                       placeholder="{{ __('Enter name') }}" value="{{ old('name', $item->name) }}" required>
                                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                            </div>
                            {{--UserName input end--}}

                            <div class="input-area">
                                <label for="description" class="form-label">{{ __('Block details') }}</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                                          placeholder="{{ __('Enter description') }}">{{ old('description', $item->description) }}</textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                            </div>

                            <button type="submit" class="btn inline-flex justify-center btn-dark mt-4 w-full">
                                {{ __( $pageConfig->edit->submit->text) }}
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

    @push("scripts")
        <script type="module">
            document.addEventListener("DOMContentLoaded", function () {
                loadSelect2Dropdown("property", "propertyDropdown", {}, "Select Property");
                loadDependentDropdowns([
                    { parent: 'propertyDropdown', child: 'floorDropdown', type: 'floor', filterKey: 'property_id' },
                ]);
            });
        </script>
    @endpush
</x-app-layout>
