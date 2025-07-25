<x-app-layout>
    <div>
        {{--Breadcrumb start--}}
        <div class="mb-6">
            {{--BreadCrumb--}}
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->create->title" />
        </div>
        {{--Breadcrumb end--}}

        {{--Create user form start--}}
        <div class="grid xl:grid-cols-2 grid-cols-1 gap-6">
            <div class="card">
                <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <table class="table w-full mx-4 my-4">
                            <tr>
                                <td>Property Number:</td>
                                <td>{{ $agentUnit->property->name }}</td>
                            </tr>
                            <tr>
                                <td>Sale Price:</td>
                                <td>{{ $agentUnit->sale_price }}</td>
                            </tr>
                            <tr>
                                <td>Floor:</td>
                                <td>{{ $agentUnit->property?->block?->floor?->number }}</td>
                            </tr>
                            <tr>
                                <td>Block: </td>
                                <td>{{ $agentUnit->property?->block?->name }}</td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route($pageConfig->routes->store, $agentUnit) }}"  class="grid xl:grid-cols-2 grid-cols-1 gap-6"  enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body flex flex-col p-6">

                    @csrf
                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">
                            <div class="input-area">
                                <label for="type" class="form-label">{{ __('Payment Type') }}</label>
                                <select name="payment_type_id" id="paymentTypeDropdown" class="form-control" data-old="{{ old('payment_type_id') }}"></select>
                                <x-input-error :messages="$errors->get('payment_type_id ')" class="mt-2"/>
                            </div>
                            <div class="input-area">
                                <label for="buyer_id" class="form-label">{{ __('Buyer') }}</label>
                                <select name="buyer_id" id="buyerDropdown" class="form-control" data-old="{{ old('buyer_id') }}"></select>
                                <x-input-error :messages="$errors->get('buyer_id ')" class="mt-2"/>
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                            <div id="installment-container">
                                @if(old('installment_no'))
                                    @foreach(old('installment_no') as $index => $installmentNo)
                                        <div class="feature-row mb-3 d-flex">
                                            <input type="number" class="form-control me-2 installment_no"
                                                   name="installment_no[]" placeholder="Installment No"
                                                   value="{{ $installmentNo }}" readonly>


                                            <input type="number" class="form-control me-2" name="installment_amount[]"
                                                   placeholder="Installment Amount" value="{{ old('installment_amount.' . $index, $agentUnit->sale_price ) }}" required>

                                            @if(old('payment_type_id') == 2) {{-- Only show remove button for partial payments --}}
                                            <button type="button" class="btn btn-danger remove-feature">X</button>
                                            @endif
                                        </div>
                                    @endforeach
                                @else
                                    {{-- Default empty field if no old value exists --}}
                                    <div class="feature-row mb-3 d-flex">
                                        <input type="number" class="form-control me-2 installment_no" name="installment_no[]"
                                               placeholder="Installment No" value="1" readonly>

                                        <input type="number" class="form-control me-2 installment_amount" name="installment_amount[]"
                                               placeholder="Installment Amount" value="{{ $agentUnit->sale_price }}" required>

                                        <button type="button" class="btn btn-danger remove-feature">X</button>
                                    </div>
                                @endif
                            </div>

                            <button type="button" id="add-feature" class="btn btn-success mt-2">Add Installment</button>
                        </div>

                    </div>
                    {{--Create user form end--}}
                </div>
                <button type="submit" class="btn inline-flex justify-center btn-dark mt-4 w-full">
                    {{ __('Save') }}
                </button>
            </div>

        </form>
    </div>

    @push("scripts")
        <script type="module">
            document.addEventListener("DOMContentLoaded", function () {
                loadSelect2Dropdown("buyer", "buyerDropdown", {}, "Select Buyer");
                loadSelect2Dropdown("payment-type", "paymentTypeDropdown", {}, "Select Payment Type");

                let installmentContainer = document.getElementById("installment-container");
                let addFeatureButton = document.getElementById("add-feature");
                let removeFeatureButtons = document.querySelectorAll(".remove-feature");

                // Function to update installment numbers dynamically
                function updateInstallmentNumbers() {
                    let installmentNos = document.querySelectorAll(".installment_no");
                    installmentNos.forEach((input, index) => {
                        input.value = index + 1; // Auto-renumbering installments
                    });
                }

                const salePrice = parseFloat({{ $agentUnit->sale_price }});
                function updateInstallmentAmounts() {
                    let installmentAmounts = document.querySelectorAll(".installment_amount");
                    let count = installmentAmounts.length;

                    if (count === 0) return;

                    const perInstallment = (salePrice / count).toFixed(2);

                    installmentAmounts.forEach(input => {
                        input.value = perInstallment;
                    });
                }

                // Handle adding new installment rows
                addFeatureButton.addEventListener("click", function () {
                    let newRow = document.createElement("div");
                    newRow.classList.add("feature-row", "mb-3", "d-flex");

                    newRow.innerHTML = `
            <input type="number" class="form-control me-2 installment_no" name="installment_no[]" placeholder="Installment No" value="" readonly>
            <input type="number" class="form-control me-2 installment_amount" name="installment_amount[]" placeholder="Installment Amount" required>
            <button type="button" class="btn btn-danger remove-feature">X</button>
        `;

                    installmentContainer.appendChild(newRow);
                    updateInstallmentNumbers();
                    updateInstallmentAmounts();
                });

                // Handle removing an installment row
                installmentContainer.addEventListener("click", function (e) {
                    if (e.target.classList.contains("remove-feature")) {
                        e.target.parentElement.remove();
                        updateInstallmentNumbers();
                        updateInstallmentAmounts();
                    }
                });

                $('#paymentTypeDropdown').on('select2:selecting', function(e) {
                    if(e.params.args.data.text == "Full") {
                        addFeatureButton.style.display = "none";
                        removeFeatureButtons.forEach((btn, index) => {
                            console.log("index: " + index);
                            if (index !== 0) {
                                btn.parentElement.remove();
                            }
                            btn.style.display = "none";
                        });
                    } else {
                        addFeatureButton.style.display = "block";
                        removeFeatureButtons.forEach(btn => {
                            btn.style.display = "block";
                        });
                    }
                });
            });
        </script>
    @endpush
</x-app-layout>
