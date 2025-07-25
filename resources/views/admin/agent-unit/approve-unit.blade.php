<x-app-layout>
    <div>
        {{--Breadcrumb start--}}
        <div class="mb-6">
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->show->title" />
        </div>
        {{--Breadcrumb end--}}

        <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6 max-w-4xl m-auto space-y-6">

            <form method="POST" action="{{ route($pageConfig->routes->approve, $item->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="space-y-4">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('Agent Shop list') }}</h2>

                    <div class="grid sm:grid-cols-2 gap-x-8 gap-y-4">
                        <table class="w-full dark:divide-slate-700">
                            <thead>
                            <tr>
                                <th scope="col" class="table-th">#</th>
                                <th scope="col" class="table-th">{{ __("Agent Name") }}</th>
                                <th scope="col" class="table-th">{{ __("Agent Phone") }}</th>
                                <th scope="col" class="table-th">{{ __("Shop No") }}</th>
                                <th scope="col" class="table-th">{{ __("Security Deposit Percent") }} (%)</th>
                                <th scope="col" class="table-th">{{ __("Security Deposit Amount") }} ({{ $general_settings->currency_code_symbol }})</th>
                                <th scope="col" class="table-th">{{ __("Min Sale Price") }} ({{ $general_settings->currency_code_symbol }})</th>
                                <th scope="col" class="table-th">{{ __("Offer Price") }} ({{ $general_settings->currency_code_symbol }})</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-slate-800">
                                @php
                                    $status = $item->agentUnit->pluck('approve_by')->filter()->first();
                                @endphp
                                @foreach($item->agentUnit as $agentShop)
                                    <tr>
                                        <td class="table-td"><input type="radio" name="agent" value="{{ $agentShop->id }}" @if($status) checked disabled readonly @endif></td>
                                        <td class="table-td">{{ __($agentShop->agent->username) }}</td>
                                        <td class="table-td">{{ __($agentShop->agent->phone) }}</td>
                                        <td class="table-td">{{ __($agentShop->shop->number) }}</td>
                                        <td class="table-td">{{ __($agentShop->booking_percent) }}</td>
                                        <td class="table-td">{{ __($agentShop->shop->min_sale_price) }}</td>
                                        <td class="table-td">{{ __($agentShop->shop->min_sale_price) }}</td>
                                        <td class="table-td">{{ __($agentShop->offer_amount) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <button type="submit" class="btn inline-flex justify-center btn-dark mt-4 w-full">
                    {{ __( "Submit" ) }}
                </button>
            </form>



        </div>
    </div>
</x-app-layout>
