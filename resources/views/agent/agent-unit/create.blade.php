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
        <form method="POST" action="{{ route($pageConfig->routes->store) }}" id="unitForm"  class="grid xl:grid-cols-2 grid-cols-1 gap-6" enctype="multipart/form-data">
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
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                            <table id="unitTable">
                                <thead>
                                <tr>
                                    <th>Shop No</th>
                                    <th>Booking Percent</th>
                                    <th>Booking Amount</th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </form>


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
    </div>

    @push("scripts")
        <script type="module">
            document.addEventListener("DOMContentLoaded", function () {
                loadSelect2Dropdown("agent", "agentDropdown", {}, "Select Buyer");

                document.querySelector('#floorDropdown').addEventListener('change', () => {
                    onElementsLoaded(".unit", (units) => {
                        units.forEach(unit => {
                            const input = document.createElement('input');
                            input.type = 'checkbox';
                            input.value = 'View';
                            input.className = 'unit-check';
                            unit.appendChild(input);
                            unit.addEventListener('click', function (e) {
                                console.log("clicked");
                                if (unit) {
                                    const checkbox = unit.querySelector('.unit-check');
                                    if (checkbox) {
                                        checkbox.checked = !checkbox.checked; // toggle the checked state
                                    }

                                    const unitId = this.dataset.unitId;
                                    const rowId = `unit-row-${unitId}`;
                                    const inputId = `unit-input-id-${unitId}`;
                                    const inputSale = `unit-input-sale-${unitId}`;
                                    const inputPercent = `unit-input-percent-${unitId}`;
                                    const tbody = document.querySelector('#unitTable tbody');
                                    const form = document.querySelector('#unitForm'); // Your form must have this ID

                                    const existingRow = document.getElementById(rowId);
                                    const existingInputId = document.getElementById(inputId);
                                    const existingInputSale = document.getElementById(inputSale);
                                    const existingInputPercent = document.getElementById(inputPercent);

                                    console.log("unit clicked", unitId, rowId, inputId, tbody, form, existingRow, existingInputId, existingInputSale, existingInputPercent);
                                    console.log("bool", checkbox.checked, existingRow, !checkbox.checked && existingRow);

                                    if(!checkbox.checked && existingRow){
                                        existingRow.remove();
                                        if (existingInputId) existingInputId.remove();
                                        if (existingInputSale) existingInputSale.remove();
                                        if (existingInputPercent) existingInputPercent.remove();
                                    } else {
                                        const unitNumber = this.dataset.unitNumber;
                                        const bookingPercent = parseToFloat(this.dataset.unitBooking_percent);
                                        const minSalePrice = parseToFloat(this.dataset.unitMin_sale_price);

                                        // Create a new row
                                        const tr = document.createElement('tr');
                                        tr.id = rowId;
                                        tr.innerHTML = `
                                            <td>${unitNumber}</td>
                                            <td>${bookingPercent ?? ''}</td>
                                            <td>${minSalePrice ?? ''}</td>
                                          `;

                                        tbody.appendChild(tr); // Add to table

                                        // Create hidden input unit id
                                        const inputUnitId = document.createElement('input');
                                        inputUnitId.type = 'hidden';
                                        inputUnitId.name = 'id[]';
                                        inputUnitId.value = unitId;
                                        inputUnitId.id = inputId;
                                        form.appendChild(inputUnitId);

                                        // Create hidden input unit sale
                                        const inputUnitSale = document.createElement('input');
                                        inputUnitSale.type = 'hidden';
                                        inputUnitSale.name = 'sale[]';
                                        inputUnitSale.value = minSalePrice;
                                        inputUnitSale.id = inputSale;
                                        form.appendChild(inputUnitSale);

                                        // Create hidden input unit sale
                                        const inputUnitPercent = document.createElement('input');
                                        inputUnitPercent.type = 'hidden';
                                        inputUnitPercent.name = 'percent[]';
                                        inputUnitPercent.value = bookingPercent;
                                        inputUnitPercent.id = inputPercent;
                                        form.appendChild(inputUnitPercent);

                                    } // end if
                                } // end if
                            }); // end click
                        }); // end foreach
                    }); // end onElementsLoaded
                }); // end change

                function parseToFloat(value) {
                    if (value !== null && value !== '' && !isNaN(Number(value))) {
                        return Number(value).toFixed(2);
                    }
                    return 0;
                }
            });
        </script>
    @endpush
</x-app-layout>
