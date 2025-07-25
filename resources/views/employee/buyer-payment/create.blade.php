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
                                <label for="buyerDropdown" class="form-label">{{ __('Buyer') }}</label>
                                <select name="buyer_id" class="form-control" id="buyerDropdown" data-old="{{ old('buyer_id') }}"></select>
                                <x-input-error :messages="$errors->get('buyer_id')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="propertyDropdown" class="form-label">{{ __('Property') }}</label>
                                <select name="property_id" class="form-control" id="propertyDropdown" data-old="{{ old('property_id') }}"></select>
                                <x-input-error :messages="$errors->get('property_id')" class="mt-2"/>
                            </div>

                            <div class="input-area">
                                <label for="installmentDropdown" class="form-label">{{ __('Installment') }}</label>
                                <select name="installment_id" class="form-control" id="installmentDropdown" data-old="{{ old('installment_id') }}"></select>
                                <x-input-error :messages="$errors->get('installment_id')" class="mt-2"/>
                            </div>


                            <div class="input-area">
                                <label for="payment_amount" class="form-label">{{ __('Payment Amount') }}</label>
                                <input name="payment_amount" type="text" id="payment_amount" class="form-control"
                                       placeholder="{{ __('Enter payment amount') }}" value="{{ old('payment_amount') }}" required readonly>
                                <x-input-error :messages="$errors->get('payment_amount')" class="mt-2"/>
                            </div>


                            <div class="input-area">
                                <label for="paymentModeDropdown" class="form-label">{{ __('Payment Mode') }}</label>
                                <select name="payment_mode_id" class="form-control" id="paymentModeDropdown" data-old="{{ old('payment_mode_id') }}"></select>
                                <x-input-error :messages="$errors->get('payment_mode_id')" class="mt-2"/>
                            </div>

                            {{--phone input start--}}
                            <div class="input-area">
                                <label for="payment_ref" class="form-label">{{ __('Payment Ref') }}</label>
                                <input type="text" name="payment_ref" id="payment_ref" class="form-control" value="{{ old('payment_ref') }}">
                                <x-input-error :messages="$errors->get('payment_ref')" class="mt-2"/>
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
                loadSelect2Dropdown("buyer", "buyerDropdown", {}, "Select Buyer");
                loadDependentDropdowns([
                    { parent: 'buyerDropdown', child: 'propertyDropdown', type: 'property', filterKey: 'buyer' },
                    { parent: 'propertyDropdown', child: 'installmentDropdown', type: 'installment', filterKey: 'property_id' },
                ]);
                loadSelect2Dropdown("payment-mode", "paymentModeDropdown", {}, "Select payment mode");

                document.getElementById("installmentDropdown").addEventListener("click", function (e) {
                    let selectedOption = this.options[this.selectedIndex]; // Get the selected <option>
                    let selectedText = selectedOption.textContent || selectedOption.innerText;
                    if("Select an option" !== selectedText){
                        document.getElementById("payment_amount").value = selectedText;
                    }
                });
            });
        </script>
    @endpush
</x-app-layout>
