<x-app-layout>
    <div>
        {{--Breadcrumb start--}}
        <div class="mb-6">
            {{--BreadCrumb--}}
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->create->title" />
        </div>
        {{--Breadcrumb end--}}

        <form method="POST" action="{{ route($pageConfig->routes->store, [$item->shop->id, $item->agent->id]) }}" enctype="multipart/form-data" class="grid gap-4 md:grid-cols-2 md:gap-6">
            @csrf
            <div class="space-y-5">
                <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                    <table class="table w-full">
                        <thead>
                        <tr class="*:text-start">
                            <th>{{ __("Shop Number") }}</th>
                            <th>{{ __("Block") }}</th>
                            <th>{{ __("Floor") }}</th>
                            <th>{{ __("Property") }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ __("Shop") }}: {{ $item->shop->number }}</td>
                            <td>{{ __("Block") }}: {{ $item->shop?->block?->name }}</td>
                            <td>{{ __("Floor") }}: {{ $item->shop?->block?->floor?->number }}</td>
                            <td>{{ $item->shop?->block?->floor?->property?->name }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                @csrf
                <input type="hidden" name="agent_id" value="{{ $item->agent->id }}">
                <input type="hidden" name="shop_id" value="{{ $item->shop->id }}">
                <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                    <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                        <div class="input-area">
                            <label for="sell_amount" class="form-label">{{ __('Sell Price') }}</label>
                            <input name="sell_amount" type="text" id="sell_amount" class="form-control h-12"
                                   placeholder="{{ __('Enter sell amount') }}" value="{{ old('sell_amount') }}" required>
                            <x-input-error :messages="$errors->get('sell_amount')" class="mt-2"/>
                        </div>

                        <div class="input-area">
                            <label for="buyer_id" class="form-label">{{ __('Buyer') }}</label>
                            <select name="buyer_id" id="buyerDropdown" class="form-control" data-old="{{ old('buyer_id') }}"></select>
                            <x-input-error :messages="$errors->get('buyer_id ')" class="mt-2"/>
                        </div>

                        <div class="input-area">
                            <label for="installments" class="form-label">{{ __('Number of Installment') }}</label>
                            <div class="flex ">
                                <input type="text" id="installments" class="form-control"
                                       placeholder="{{ __('Enter number of installments') }}" value="{{ old('installments') }}" required>
                                <button type="button" id="generate" class="bg-green-900 text-white px-4 h-12 lg:px-6">Generate</button>
                            </div>

                            <x-input-error :messages="$errors->get('installments')" class="mt-2"/>
                        </div>
                    </div>
                </div>
                {{--Create user form end--}}
                <button type="submit" class="btn inline-flex justify-center btn-dark mt-4 w-full">
                    {{ __('Save') }}
                </button>
            </div>
            <div class="bg-white p-4">
                <table id="installment-table" class="table-fixed w-full">
                    <thead>
                    <tr class="*:text-start">
                        <th>{{ __("Input Amount Percent") }}</th>
                        <th>{{ __("Convert to Amount") }}</th>
                        <th>{{ __("Remarks Notes") }}</th>
                        <th>{{ __("Date of Installments") }}</th>
                    </tr>
                    </thead>
                    <tbody>
                        {{-- generated content --}}
                    </tbody>
                </table>
            </div>
        </form>
    </div>

    @push("scripts")
        <script type="module">
            document.addEventListener("DOMContentLoaded", function () {
                loadSelect2Dropdown("buyer", "buyerDropdown", {}, "Select Buyer");

                let installmentTbodyEl = document.querySelector("#installment-table tbody");
                let installmentsEl = document.getElementById("installments");
                let generateEl = document.getElementById("generate");
                let sellPriceEl = document.getElementById("sell_amount");

                const bookingPercent =  {{ $item->settings->percent }};

                function renderHtml(id, index, amount = null, percent = 0) {
                    let rowCaption = document.createElement('tr');
                    rowCaption.className = "bg-gray-200 radi";
                    rowCaption.innerHTML = `<td colspan="4">${index}</td>`;
                    installmentTbodyEl.appendChild(rowCaption);

                    let percentEdit = "";
                    let amountEdit = "readonly";
                    if(id == 0) {
                        percentEdit = "readonly";
                        amountEdit = "";
                    }

                    let newRow = document.createElement("tr");
                    newRow.innerHTML = `
                        <td><input type="number" class="form-control me-2 installment_percent mb-5" name="installment_percent[]" id="installment_percent_${id}" placeholder="percent" value="${percent}" required ${percentEdit} step="any"></td>
                        <td><input type="number" class="form-control me-2 installment_amount mb-5" name="installment_amount[]" id="installment_amount_${id}" placeholder="amount" value="${amount}" required ${amountEdit} step="any"></td>
                        <td><input type="text" class="form-control me-2 installment_remarks mb-5" name="installment_remarks[]" id="installment_remarks_${id}" placeholder="remarks"></td>
                        <td><input type="date" class="form-control me-2 installment_date mb-5" name="installment_date[]" id="installment_date_${id}" placeholder="date"></td>`;

                    installmentTbodyEl.appendChild(newRow);
                }

                generateEl.addEventListener("click", function() {
                    installmentTbodyEl.innerHTML = '';
                    const installment_count = parseInt(installmentsEl.value);
                    const sell_amount = parseFloat(sellPriceEl.value);
                    let bookingMoney = (sell_amount / 100) * bookingPercent;
                    let perInstallment = parseFloat((sell_amount - bookingMoney) / installment_count).toFixed(2);
                    let perInstallmentPercent = ((100 - bookingPercent) / installment_count).toFixed(2);

                    renderHtml(0, "Management Fee", 0);
                    renderHtml(1, "Security Deposit", bookingMoney, bookingPercent);
                    for (let index = 2; index < installment_count + 2; index++) {
                        renderHtml(index, "Installment no: " + index, perInstallment, perInstallmentPercent)
                    }

                });

                document.body.addEventListener('change', function(e) {
                    if (e.target.id.startsWith('installment_percent_')) {
                        const id = e.target.id.split("_")[2]
                        const sell_amount = parseFloat(sellPriceEl.value);
                        const installmentPercent = parseToFloat(e.target.value);
                        document.getElementById("installment_amount_" + id).value = parseFloat((sell_amount / 100) * installmentPercent).toFixed(2);
                    }
                });

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
