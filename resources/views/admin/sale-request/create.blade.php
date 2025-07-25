<x-app-layout>
    <div>
        {{--Breadcrumb start--}}
        <div class="mb-6">
            {{--BreadCrumb--}}
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->create->title" />
        </div>
        {{--Breadcrumb end--}}

        {{--Create user form start--}}
        <form method="POST" action="{{ route($pageConfig->routes->store, $property) }}"  class="grid xl:grid-cols-2 grid-cols-1 gap-6"  enctype="multipart/form-data">

            @csrf
            <input name="property_id" type="hidden" value="{{ $property->id }}" required>
            <input name="employee_id" type="hidden" value="{{ auth("employee")->id() }}" required>

            <div class="card">
                <div class="card-body flex flex-col p-6">

                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">


                            <div class="input-area">
                                <label for="buyer_name" class="form-label">{{ __('Buyer Name') }}</label>
                                <input name="buyer_name" type="text" id="buyer_name" class="form-control"
                                       placeholder="{{ __('Enter Buyer Name') }}" value="{{ old('buyer_name') }}" required>
                                <x-input-error :messages="$errors->get('buyer_name')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="address" class="form-label">{{ __('Address') }}</label>
                                <textarea name="address" id="address" cols="30" rows="10" class="form-control" placeholder="write address">{{ old('address') }}</textarea>
                                <x-input-error :messages="$errors->get('address')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="mobile" class="form-label">{{ __('Mobile Number') }}</label>
                                <input name="mobile" type="text" id="mobile" class="form-control"
                                       placeholder="{{ __('Enter mobile') }}" value="{{ old('mobile') }}" required>
                                <x-input-error :messages="$errors->get('mobile')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="nid_number" class="form-label">{{ __('Nid Number') }}</label>
                                <input name="nid_number" type="text" id="nid_number" class="form-control"
                                       placeholder="{{ __('Enter nid number') }}" value="{{ old('nid_number') }}" required>
                                <x-input-error :messages="$errors->get('nid_number')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="proposed_price" class="form-label">{{ __('Proposed Price') }}</label>
                                <input name="proposed_price" type="text" id="proposed_price" class="form-control"
                                       placeholder="{{ __('Enter proposed price') }}" value="{{ old('proposed_price') }}" required>
                                <x-input-error :messages="$errors->get('proposed_price')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="propertyTypeDropdown" class="form-label">{{ __('Payment Type') }}</label>
                                <select name="payment_type_id" class="form-control" id="propertyTypeDropdown" data-old="{{ old('payment_type_id') }}"></select>
                                <x-input-error :messages="$errors->get('payment_type_id')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="agentDropdown" class="form-label">{{ __('Agent') }}</label>
                                <select name="agent_id" class="form-control" id="agentDropdown" data-old="{{ old('agent_id') }}"></select>
                                <x-input-error :messages="$errors->get('agent_id')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="number_of_installment" class="form-label">{{ __('Number of Installment') }}</label>
                                <input name="number_of_installment" type="number" id="number_of_installment" class="form-control"
                                       placeholder="{{ __('Enter Number of Installment') }}" value="{{ old('number_of_installment') }}" required>
                                <x-input-error :messages="$errors->get('number_of_installment')" class="mt-2"/>
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
                loadSelect2Dropdown("payment-type", "propertyTypeDropdown");
                loadSelect2Dropdown("agent", "agentDropdown");
            });
        </script>
    @endpush
</x-app-layout>
