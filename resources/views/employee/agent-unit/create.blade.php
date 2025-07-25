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

                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                            <div class="input-area">
                                <label for="agentDropdown" class="form-label">{{ __('Agent') }}</label>
                                <select name="agent_id" class="form-control" id="agentDropdown" data-old="{{ old('agent_id') }}"></select>
                                <x-input-error :messages="$errors->get('agent')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="propertyDropdown" class="form-label">{{ __('Property') }}</label>
                                <select name="property_id" class="form-control" id="propertyDropdown" data-old="{{ old('property_id') }}"></select>
                                <x-input-error :messages="$errors->get('property_id')" class="mt-2"/>
                            </div>


                            <div class="input-area">
                                <label for="sale_price" class="form-label">{{ __('Sale Price') }}</label>
                                <input name="sale_price" type="number" id="sale_price" class="form-control"
                                       placeholder="{{ __('Enter deposit amount') }}" value="{{ old('sale_price') }}" required>
                                <x-input-error :messages="$errors->get('sale_price')" class="mt-2"/>
                            </div>

                            <button type="submit" class="btn inline-flex justify-center btn-dark mt-4 w-full">
                                {{ __( $pageConfig->create->submit->text) }}
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
                loadSelect2Dropdown("agent", "agentDropdown", {}, "Select Agent");
                loadSelect2Dropdown("property", "propertyDropdown", {}, "Select Property");
                loadSelect2Dropdown("status", "generalStatusDropdown", {type: "general"}, "Select Status");
            });
        </script>
    @endpush
</x-app-layout>
