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

            <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">

                    <div class="input-area">
                        <label for="buyerDropdown" class="form-label">{{ __('Buyer') }}</label>
                        <select name="buyer_id" class="form-control" id="buyerDropdown" data-old="{{ old('buyer_id') }}"></select>
                        <x-input-error :messages="$errors->get('buyer_id')" class="mt-2"/>
                    </div>

                    <div class="input-area">
                        <label for="shopDropdown" class="form-label">{{ __('Shop') }}</label>
                        <select name="shop_id" class="form-control" id="shopDropdown" data-old="{{ old('shop_id') }}"></select>
                        <x-input-error :messages="$errors->get('shop_id')" class="mt-2"/>
                    </div>

                    <div class="input-area">
                        <label for="installmentDropdown" class="form-label">{{ __('Installment') }}</label>
                        <select name="installment_id[]" class="form-control" id="installmentDropdown" data-old="0" multiple></select>
                        <x-input-error :messages="$errors->get('installment_id')" class="mt-2"/>
                    </div>

                    <div class="input-area">
                        <label for="payment_amount" class="form-label">{{ __('Payment Amount') }}</label>
                        <input name="payment_amount" type="text" id="payment_amount" class="form-control"
                               placeholder="{{ __('Enter payment amount') }}" value="{{ old('payment_amount', 0) }}" required readonly>
                        <x-input-error :messages="$errors->get('payment_amount')" class="mt-2"/>
                    </div>

                    <div class="input-area">
                        <label for="paymentModeDropdown" class="form-label">{{ __('Payment Mode') }}</label>
                        <select name="payment_mode_id" class="form-control" id="paymentModeDropdown" data-old="{{ old('payment_mode_id') }}"></select>
                        <x-input-error :messages="$errors->get('payment_mode_id')" class="mt-2"/>
                    </div>

                    <div class="input-area">
                        <label for="payment_ref" class="form-label">{{ __('Payment Ref') }}</label>
                        <input type="text" name="payment_ref" id="payment_ref" class="form-control" value="{{ old('payment_ref') }}">
                        <x-input-error :messages="$errors->get('payment_ref')" class="mt-2"/>
                    </div>

                    <button type="submit" class="btn inline-flex justify-center btn-dark mt-4 w-full">
                        {{ __( $pageConfig->create->submit->text) }}
                    </button>
            </div>
            <div class="bg-white p-4">
                <div id="installment-container" class="bg-white">
                    <table class="table w-full">
                        <thead>
                        <tr class="*:text-start">
                            <th>{{ __("Installment No") }}</th>
                            <th>{{ __("Amount") }}</th>
                            <th>{{ __("Due") }}</th>
                            <th>{{ __("Paid") }}</th>
                            <th>{{ __("Status") }}</th>
                        </tr>
                        </thead>
                        <tbody>
                            <!-- Installments will be added here -->
                        </tbody>
                    </table>
                </div>
            </div>

        </form>
    </div>

    @push("scripts")
        <script type="module">
            document.addEventListener("DOMContentLoaded", function () {
                loadSelect2Dropdown("buyer", "buyerDropdown", {}, "Select Buyer");
                loadDependentDropdowns([
                    { parent: 'buyerDropdown', child: 'shopDropdown', type: 'shop', filterKey: 'buyer' },
                    // { parent: 'shopDropdown', child: 'installmentDropdown', type: 'installment', filterKey: 'shop_id' },
                ]);
                loadSelect2Dropdown("payment-mode", "paymentModeDropdown", {}, "Select payment mode");

                document.getElementById("shopDropdown").addEventListener( "change", function (e) {
                    let selectedOption = this.options[this.selectedIndex]; // Get the selected <option>
                    let selectedValue = selectedOption.value;
                    let tBody = document.querySelector("#installment-container table tbody");
                    tBody.innerHTML = "";

                    const url = `/dropdowns/installment` + `?shop_id=${selectedValue}`;
                    axios.get(url).then(function(response) {
                        if (response.data.success) {
                            const data = response.data.data;
                            data.forEach((item) => {
                                const tr = document.createElement("tr");
                                const noCell = document.createElement("td");
                                const amountCell = document.createElement("td");
                                const dueCell = document.createElement("td");
                                const paidCell = document.createElement("td");
                                const statusCell = document.createElement("td");
                                const option = document.createElement("option");

                                noCell.textContent = item.installment_no;
                                amountCell.textContent = item.installment_amount;
                                dueCell.textContent = item.due_amount;
                                paidCell.textContent = item.paid_amount;
                                statusCell.innerHTML = item.due_amount == 0? '<span class="text-green-600">Paid</span>' : '<span class="text-red-600">Due</span>';

                                tr.appendChild(noCell);
                                tr.appendChild(amountCell);
                                tr.appendChild(dueCell);
                                tr.appendChild(paidCell);
                                tr.appendChild(statusCell);
                                tBody.appendChild(tr)

                                if(parseFloat(item.due_amount) > 0) {
                                    option.value = item.id;
                                    option.textContent = item.installment_no + " - Due: " + item.due_amount;
                                    option.dataset.due = item.due_amount;
                                    document.getElementById("installmentDropdown").appendChild(option);
                                }
                            })
                        }
                    }).catch(function(error) {
                        console.log(error);
                    })
                })

                let installmentInput = document.getElementById("installmentDropdown");
                installmentInput.addEventListener("change", function (e) {
                    const amountInput = document.getElementById("payment_amount");
                    let totalAmount = 0;

                    // Get all selected options
                    const selectedOptions = Array.from(installmentInput.selectedOptions);

                    // Calculate the total due based on selected options
                    selectedOptions.forEach(function(option) {
                        let selectedDue = parseFloat(option.dataset.due || 0);
                        totalAmount += selectedDue;
                    });

                    // Update the payment amount input with the total sum
                    amountInput.value = totalAmount.toFixed(2);
                });


            });
        </script>
    @endpush
</x-app-layout>
