
<div class="modal-content bg-white w-full max-w-5xl mx-auto border border-slate-400 rounded-2xl relative">
    <div class="modal-header bg-[#F8F9FB] p-4 lg:p-6 rounded-tl-2xl rounded-tr-2xl">
        <h2 class="text-center text-xl lg:text-2xl">
            <b>{{ __("Shop Details") }}</b>
        </h2>
        <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
            <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
        </button>
    </div>
    <div class="modal-body p-4 lg:p-8 xl:p-10 space-y-6">
        <div class="thumb_meta grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 items-start">
            <div class="thumb lg:col-span-2">
                @isset($item->picture[0])
                    <img src="{{ $item->picture[0] }}" alt="Property Image" class="w-full object-cover rounded-xl">
                @else
                    <img src="{{ asset('/images/pic1.png') }}" alt="Property Image" class="w-full object-cover rounded-xl">
                @endisset
            </div>
            <div class="metainfo lg:rounded-xl lg:bg-gray-50 lg:p-4 space-y-3 xl:space-y-10">
                <table class="w-full">
                    <tbody>
                    <tr class="*:px-3 *:py-1.5">
                        <td class="w-32">
                            {{ __("Lenght:") }}
                        </td>
                        <td class="font-bold text-black-500">
                            {{ $item->length }} {{ __(" ft") }}
                        </td>
                    </tr>
                    <tr class="*:px-3 *:py-1.5">
                        <td class="w-32">
                            {{ __("Width:") }}
                        </td>
                        <td class="font-bold text-black-500">
                            {{ $item->width }} {{ __(" ft") }}
                        </td>
                    </tr>
                    <tr class="*:px-3 *:py-1.5">
                        <td class="w-32">
                            {{ __("Area:") }}
                        </td>
                        <td class="font-bold text-black-500">
                            {{ $item->area }} {{ __(" sq.ft") }}
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="w-full">
                    <tbody>
                        <tr class="*:px-3 *:py-1.5">
                            <td class="w-32">
                                {{ __("Length with Corridor :") }}
                            </td>
                            <td class="font-bold text-black-500">
                                {{ $item->length_half_corridor }} {{ __(" ft") }}
                            </td>
                        </tr>
                        <tr class="*:px-3 *:py-1.5">
                            <td class="w-32">
                                {{ __("Full Width :") }}
                            </td>
                            <td class="font-bold text-black-500">
                                {{ $item->width_full_shop }} {{ __(" ft") }}
                            </td>
                        </tr>
                        <tr class="*:px-3 *:py-1.5">
                            <td class="w-32">
                                {{ __("Total Area :") }}
                            </td>
                            <td class="font-bold text-black-500">
                                {{ $item->total_area }} {{ __(" sq.ft") }}
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="w-full">
                    <tbody>
                        <tr class="*:px-3 *:py-1.5">
                            <td class="w-32">
                                {{ __("Block :") }}
                            </td>
                            <td class="font-bold text-black-500">
                                {{ $item->block->name }}
                            </td>
                        </tr>
                        <tr class="*:px-3 *:py-1.5">
                            <td class="w-32">
                                {{ __("Floor :") }}
                            </td>
                            <td class="font-bold text-black-500">
                                {{ $item->block->floor->name }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <div class="shop_info lg:col-span-2 space-y-6">
                <h2 class="text-2xl lg:text-3xl font-bold text-black-500 flex items-end justify-between gap-4 mb-3">
                    {{ __("Shop: ") }} {{ $item->number }}
                    <span class="inline-flex bg-green-200 text-green-600 text-sm px-5 py-1.5 rounded-3xl font-normal">
                        {{ __("Vacant") }}
                    </span>
                </h2>
                <div class="flex items-start gap-4">
                    <div class="flex-1">
                        {{ $item->description }}
                    </div>
                    <div class="qr flex-[0_0_80px] border rounded-lg border-gray-200 overflow-hidden">
                        <img src="@qr(route('admin.shop.show', $item->id))" alt="Property Image">
                    </div>
                </div>
                @if($item->features->count() > 0)
                <div class="feature">
                    <div class="feature grid grid-cols-3 gap-4 *:text-center *:py-8 *:rounded-xl *:space-y-1">

                        @foreach($item->features as $feature)

                        <div class="feature_item bg-[#ECFDF5]">
                            <div class="text-[#607085] text-sm">
                                {{ $feature->name }}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ $feature->value }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                @if($item->agentShop->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full border-collapse">
                            <thead>
                            <tr class="*:font-medium *:text-black-600 *:py-2 *:px-3 *:text-sm *:border *:border-slate-100 *:bg-slate-50 *:whitespace-nowrap">
                                <th>
                                    {{ __("Agent Name") }}
                                </th>
                                <th>
                                    {{ __("Applied On") }}
                                </th>
                                <th>
                                    {{ __("Sell Price") }}
                                </th>
                                <th>
                                    {{ __("Security Deposit") }}
                                </th>
                                <th>
                                    {{ __("Commission") }}
                                </th>
                                <th>
                                    {{ __("Note") }}
                                </th>
                                <th>
                                    {{ __("Status") }}
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($item->agentShop as $agent)
                                <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100">
                                    <td class="text-center whitespace-nowrap">
                                        {{ $agent->agent?->username }}
                                    </td>
                                    <td>
                                        {{ $agent->created_at->diffForHumans() }}
                                    </td>
                                    <td>
                                        {{ $agent->security_deposit }}
                                    </td>
                                    <td>
                                        {{ $agent->sale_price }}
                                    </td>
                                    <td>
                                        @if($agent->commission_type == "percentage") % @else $ @endif{{ $agent->commission }}
                                    </td>
                                    <td>
                                        {{ $agent->note }}
                                    </td>
                                    <td class="text-center">
                                        @if($agent->status?->name == "Approved")
                                            <span class="inline-flex items-center gap-1 py-1 px-2 rounded-3xl bg-green-200 text-green-600 text-xs font-medium">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 8.25C0 3.84886 3.59886 0.25 8 0.25C9.23726 0.25 10.412 0.534765 11.4609 1.04196C11.7095 1.16217 11.8136 1.46116 11.6934 1.70976C11.5732 1.95836 11.2742 2.06244 11.0256 1.94223C10.1087 1.49886 9.08239 1.25 8 1.25C4.15114 1.25 1 4.40114 1 8.25C1 12.0989 4.15114 15.25 8 15.25C11.8489 15.25 15 12.0989 15 8.25C15 7.73056 14.9427 7.2243 14.8342 6.73702C14.7742 6.46748 14.9441 6.20033 15.2136 6.14033C15.4832 6.08032 15.7503 6.25019 15.8103 6.51973C15.9345 7.07767 16 7.65678 16 8.25C16 12.6511 12.4011 16.25 8 16.25C3.59886 16.25 0 12.6511 0 8.25Z" fill="#16A34A"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8538 1.20895C16.049 1.40421 16.049 1.72079 15.8538 1.91605L6.93485 10.835C6.73958 11.0302 6.423 11.0302 6.22774 10.835L3.99801 8.60524C3.80275 8.40998 3.80275 8.0934 3.99801 7.89814C4.19327 7.70287 4.50985 7.70287 4.70512 7.89814L6.58129 9.77431L15.1467 1.20895C15.3419 1.01368 15.6585 1.01368 15.8538 1.20895Z" fill="#16A34A"/>
                                                </svg>
                                                {{ $agent->status?->name }}
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 py-1 px-2 rounded-3xl bg-yellow-100 text-yellow-600 text-xs font-medium">
                                                    {{ $agent->status?->name }}
                                                </span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

            @php
                $agentDb = $item->agentUnit?->whereNotNull("approve_by")->first()?->agent;
            @endphp

            @isset($agentDb)
            <div class="approved_agent lg:row-span-2 text-center">
                <img src="{{ $agentDb?->profile?->picture }}" class="rounded-full w-40 h-40 mx-auto" alt="{{ $agentDb?->profile?->first_name }} {{ $agentDb?->profile?->last_name }}">
                <div class="my-3 space-y-1">
                    <h5 class="font-body text-lg text-black-500 font-semibold">
                        {{ $agentDb?->profile?->first_name }} {{ $agentDb?->profile?->last_name }}
                    </h5>
                    <p>
                        <span class="inline-flex items-center gap-1 py-2 px-3 rounded-3xl bg-green-200 text-green-600 text-xs font-medium">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 8.25C0 3.84886 3.59886 0.25 8 0.25C9.23726 0.25 10.412 0.534765 11.4609 1.04196C11.7095 1.16217 11.8136 1.46116 11.6934 1.70976C11.5732 1.95836 11.2742 2.06244 11.0256 1.94223C10.1087 1.49886 9.08239 1.25 8 1.25C4.15114 1.25 1 4.40114 1 8.25C1 12.0989 4.15114 15.25 8 15.25C11.8489 15.25 15 12.0989 15 8.25C15 7.73056 14.9427 7.2243 14.8342 6.73702C14.7742 6.46748 14.9441 6.20033 15.2136 6.14033C15.4832 6.08032 15.7503 6.25019 15.8103 6.51973C15.9345 7.07767 16 7.65678 16 8.25C16 12.6511 12.4011 16.25 8 16.25C3.59886 16.25 0 12.6511 0 8.25Z" fill="#16A34A"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8538 1.20895C16.049 1.40421 16.049 1.72079 15.8538 1.91605L6.93485 10.835C6.73958 11.0302 6.423 11.0302 6.22774 10.835L3.99801 8.60524C3.80275 8.40998 3.80275 8.0934 3.99801 7.89814C4.19327 7.70287 4.50985 7.70287 4.70512 7.89814L6.58129 9.77431L15.1467 1.20895C15.3419 1.01368 15.6585 1.01368 15.8538 1.20895Z" fill="#16A34A"></path>
                            </svg>
                            {{ __('Approved Agent') }}
                        </span>
                    </p>
                    @isset($agentDb->email)
                        <p>
                            <a href="mailto:{{ $agentDb->email }}">
                                {{ $agentDb->email }}
                            </a>
                        </p>
                    @endisset
                    @isset($agentDb->phone)
                        <p>
                            <a href="tel:{{ $agentDb->phone }}">
                                {{ $agentDb->phone }}
                            </a>
                        </p>
                    @endisset
                </div>
                <div class="qr w-28 h-28 border rounded-lg border-gray-200 p-1.5 mx-auto">
                    <img src="@qr(route('admin.agent.show', $agentDb->id))" alt="{{ $agentDb->username }}" class="w-full">
                </div>
            </div>
            @endisset

            @php
                $buyer = $item->buyer;
            @endphp

            @isset($buyer)
            <div class="buyer sm:col-span-2 sm:flex rounded-xl overflow-hidden border border-slate-100">
                <div class="thumb flex-[0_0_250px] min-h-[250px] bg-cover bg-center" style="background-image: url(@isset($buyer?->profile?->picture[0]) {{ $buyer?->profile?->picture[0] }} @else {{ avatar($buyer->username) }} @endisset);">
                    @isset($buyer?->profile?->picture[0])
                        <img src="{{ $buyer?->profile?->picture[0] }}" class="opacity-0" alt="{{ $buyer?->username }}">
                    @else
                        <img src="@avatar($buyer->username)" class="opacity-0" alt="{{ $buyer?->username }}">
                    @endisset
                </div>
                <div class="info sm:flex-1 p-4">
                    <h2 class="text-2xl lg:text-3xl font-bold text-black-500">
                        {{ $buyer?->profile?->first_name }} {{ $buyer?->profile?->last_name }}
                    </h2>
                    <p class="text-slate-400">
                        {{ $buyer->created_at->diffForHumans() }}
                    </p>
                    <div class="barcode mt-4">
                        @bar($buyer->uuid)
                        <small>{{ $buyer->uuid }}</small>
                    </div>

                    <ul class="mt-4 space-y-2">
                        @isset($buyer->email)
                        <li class="text-sm">
                            <label class="text-gray-500">{{ __('Email :')}}</label>
                            <span class="value inline-block font-bold text-black-500">
                                {{ $buyer->email }}
                            </span>
                        </li>
                        @endisset

                        @isset($buyer->phone)
                        <li class="text-sm">
                            <label class="text-gray-500">{{ __('Phone :')}}</label>
                            <span class="value inline-block font-bold text-black-500">
                                {{ $buyer->phone }}
                            </span>
                        </li>
                        @endisset

                        @isset($buyer->address)
                        <li class="text-sm">
                            <label class="text-gray-500">{{ __('Address :')}}</label>
                            <span class="value inline-block font-bold text-black-500">
                                {{ __('19A Orchid Rd, Gushan, Dhaka.')}}
                            </span>
                        </li>
                        @endisset
                    </ul>
                </div>
            </div>
            @endisset
        </div>

        @php
            $installments = $item->buyerShops?->installments;
        @endphp
        @isset($installments)
        <div class="installments overflow-x-auto">
            <table class="table-auto w-full border-collapse">
                <thead>
                <tr class="*:font-medium *:text-black-600 *:py-2 *:px-3 *:text-sm *:border *:border-slate-100 *:bg-slate-50">
                    <th>
                        {{ __("No.")}}
                    </th>
                    <th>
                        {{ __("Amount")}}
                    </th>
                    <th>
                        {{ __("Paid Amount")}}
                    </th>
                    <th>
                        {{ __("Due")}}
                    </th>
                    <th>
                        {{ __("Remarks")}}
                    </th>
                    <th>
                        {{ __("Inst. Date")}}
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($installments as $installment)
                    <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100">
                        <td class="text-center">
                            {{ $installment->installment_no }}
                        </td>
                        <td class="text-end">
                            {{ $installment->installment_amount }}
                        </td>
                        <td class="text-end">
                            {{ $installment->paid_amount }}
                        </td>
                        <td class="text-end">
                            {{ $installment->due_amount }}
                        </td>
                        <td>
                            {{ $installment->remarks }}
                        </td>
                        <td class="text-center">
                            {{ $installment->installment_date }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @endisset
    </div>
</div>
