<x-app-layout>
    <div>
        {{--Breadcrumb start--}}
        <div class="mb-6">
            {{--BreadCrumb--}}
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->create->title" />
        </div>
        {{--Breadcrumb end--}}

        {{--Create user form start--}}
        <br>
        <x-floor-plan />

        <br>
        <form method="POST" action="{{ route($pageConfig->routes->store) }}" id="unitForm"  class="grid grid-cols-1 xl:grid-cols-3 gap-6" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                            <div class="input-area">
                                <label for="agentDropdown" class="form-label">{{ __('Agent') }}</label>
                                <select name="agent" class="form-control" id="agentDropdown" data-old="{{ old('agent') }}"></select>
                                <x-input-error :messages="$errors->get('agent')" class="mt-2"/>
                            </div>

                            <button type="submit" class="btn inline-flex justify-center btn-dark mt-4 w-full">
                                {{ __( "Submit" ) }}
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card xl:col-span-2">
                <div class="card-body flex flex-col p-6">
                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">
                            <table id="unitTable" class="w-full dark:divide-slate-700">
                                <thead>
                                <tr>
                                    <th scope="col" class=" table-th ">{{ __("Shop No") }} #</th>
                                    <th scope="col" class=" table-th ">{{ __("Security Deposit Percent") }} (%)</th>
                                    <th scope="col" class=" table-th ">{{ __("Security Deposit Amount") }} ({{ $general_settings->currency_code_symbol }})</th>
                                    <th scope="col" class=" table-th ">{{ __("Min Sale Price") }} ({{ $general_settings->currency_code_symbol }})</th>
                                    <th scope="col" class=" table-th ">{{ __("Offer Price") }} ({{ $general_settings->currency_code_symbol }})</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-slate-800">

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </form>



    </div>

    @push("scripts")
        <style>
            .unit {
                position: relative;
                cursor: pointer;
            }
            .unit .unit-check {
                position: absolute;
                top: 0;
                right: 0;
                cursor: not-allowed;
            }
        </style>
        <script type="module">
            document.addEventListener("DOMContentLoaded", function () {
                loadSelect2Dropdown("agent", "agentDropdown", {}, "Select Agent");

                document.querySelector('#floorDropdown').addEventListener('change', (event) => {
                    const selectedValue = event.target.value;
                    const approveStatusUrl = `{{ route($pageConfig->routes->floorMap, ":id") }}`.replace(":id", selectedValue);

                    axios.get(approveStatusUrl)
                        .then(response => {
                            const data = response.data.data;
                            onElementsLoaded(".unit", (units) => {
                                units.forEach(unit => {
                                    const input = document.createElement('input');
                                    input.type = 'checkbox';
                                    input.value = 'View';
                                    input.className = 'unit-check';

                                    if( ! data[unit.dataset.unitId] ) {
                                        unit.appendChild(input);
                                    }
                                    unit.addEventListener('click', function (e) {
                                        if (unit) {
                                            const checkbox = unit.querySelector('.unit-check');
                                            if (checkbox) {
                                                checkbox.checked = !checkbox.checked; // toggle the checked state
                                            }

                                            const unitId = this.dataset.unitId;
                                            const rowId = `unit-row-${unitId}`;
                                            const inputId = `unit-input-id-${unitId}`;
                                            const inputPercent = `unit-input-percent-${unitId}`;
                                            const inputAmount = `unit-input-amount-${unitId}`;
                                            const inputMin = `unit-input-min-${unitId}`;
                                            const inputOffer = `unit-input-offer-${unitId}`;

                                            const tbody = document.querySelector('#unitTable tbody');

                                            const existingRow = document.getElementById(rowId);
                                            const existingInputId = document.getElementById(inputId);
                                            const existingInputPercent = document.getElementById(inputPercent);
                                            const existingInputAmount = document.getElementById(inputAmount);
                                            const existingInputMin = document.getElementById(inputMin);
                                            const existingInputOffer = document.getElementById(inputOffer);

                                            if(!checkbox.checked && existingRow){
                                                existingRow.remove();
                                                if (existingInputId) existingInputId.remove();
                                                if (existingInputPercent) existingInputPercent.remove();
                                                if (existingInputAmount) existingInputAmount.remove();
                                                if (existingInputMin) existingInputMin.remove();
                                                if (existingInputOffer) existingInputOffer.remove();
                                            } else {
                                                const unitNumber = this.dataset.unitNumber;
                                                const minSalePrice = parseToFloat(this.dataset.unitMin_sale_price);
                                                const bookingPercent = parseToFloat(this.dataset.unitBooking_percent);
                                                const bookingAmount = (minSalePrice / 100) * bookingPercent;

                                                // Create a new row
                                                const tr = document.createElement('tr');
                                                tr.id = rowId;
                                                tr.innerHTML = `
                                                    <td class="table-td">
                                                        <input
                                                            style="width: 60px;"
                                                            type="hidden" name="ids[]"
                                                            id="id_${unitId}"
                                                            value="${unitId}"
                                                            readonly>
                                                        <input
                                                            style="width: 60px;"
                                                            type="text" name="numbers[]"
                                                            id="number_${unitId}"
                                                            value="${unitNumber}"
                                                            readonly></td>
                                                    <td class="table-td">
                                                        <input
                                                            style="width: 60px;"
                                                            type="number"
                                                            name="percents[]"
                                                            id="percent_${unitId}"
                                                            value="${bookingPercent ?? ''}"
                                                            min="${bookingPercent ?? 0}"
                                                            max="100"></td>
                                                    <td class="table-td">
                                                        <input
                                                            data-min=${minSalePrice}
                                                            style="width: 60px;"
                                                            type="number"
                                                            name="amounts[]"
                                                            id="amount_${unitId}"
                                                            value="${bookingAmount ?? ''}"
                                                            readonly></td>
                                                    <td class="table-td">
                                                        <input
                                                            style="width: 100px;"
                                                            type="number"
                                                            name="mins[]"
                                                            id="min_${unitId}"
                                                            value="${minSalePrice ?? ''}"
                                                            readonly></td>
                                                    <td class="table-td">
                                                        <input
                                                            style="width: 100px;"
                                                            type="number"
                                                            name="offers[]"
                                                            id="offer_${unitId}"
                                                            value="${minSalePrice ?? ''}"
                                                            min="${minSalePrice ?? 0}"></td>
                                                `;

                                                tbody.appendChild(tr); // Add to table

                                            } // end if
                                        } // end if
                                    }); // end click
                                }); // end foreach
                            }); // end onElementsLoaded
                        })
                        .catch(error => {
                            console.error("Error fetching options:", error);
                        });
                }); // end change

                function parseToFloat(value) {
                    if (value !== null && value !== '' && !isNaN(Number(value))) {
                        return Number(value).toFixed(2);
                    }
                    return 0;
                }

                document.body.addEventListener('change', function(e) {
                    if (e.target.id.startsWith('percent_')) {
                        const id = e.target.id.split("_")[1]
                        const bookingPercent = parseToFloat(e.target.value);
                        const minSalePrice = parseToFloat(document.getElementById("amount_" + id).dataset.min);
                        document.getElementById("amount_" + id).value = (minSalePrice / 100) * bookingPercent;
                    }

                });

            });
        </script>
    @endpush
</x-app-layout>
