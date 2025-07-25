<div id="shop-card-3" class="shop-item bg-white rounded-2xl overflow-hidden border border-slate-100 flex flex-col">
    <div class="thumbnail relative">
        <a href="{{ route('employee.shop-details') }}">
            <img src="@if(isset($shop->picture[0])) {{ $shop->picture[0] }} @else {{ asset('/images/pic1.png') }} @endif" alt="{{ $shop->number }}" class="min-h-[240px] xl:min-h-[290px] max-h-[290px] w-full object-cover bg-gray-100">
        </a>
    </div>
    <div class="px-4 py-5 xl:px-6 flex-1 flex flex-col gap-5">
        <div class="flex items-center justify-between gap-4 flex-wrap">
            <h5 class="text-lg">
                <span class="text-gray-500">
                    {{ __("Shop No.")}} <b class="font-bold text-black-500 text-2xl">{{ $shop->number }}</b>
                </span>
            </h5>
            <span class="inline-flex bg-green-100 text-green-600 text-sm px-4 py-1 rounded-3xl">
                {{ __("Reserved") }}
            </span>
        </div>
        <div class="finance_states mt-auto">
            <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                <tbody>
                <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-1 *:py-1 *:text-xs *:leading-4 *:text-center">
                    <td>
                        Sale Price <br>
                        <b class="text-pureblack">৳{{ $shop->agentShop()?->sale_price }}</b>
                    </td>
                    <td>
                        Security Money <br>
                        <b class="text-pureblack">৳{{ $shop->agentShop()?->security_deposit }}</b>
                    </td>
                    <td>
                        Reserve Until <br>
                        <b class="text-pureblack">{{ $shop->agentShop()?->duration}} days</b>
                    </td>
                    <td>
                        Commission <br>
                        <b class="text-pureblack">@if($shop->agentShop()?->commission_type == 'amount') ৳ @endif {{ $shop->agentShop()?->commission }} @if($shop->agentShop()?->commission_type == 'percentage') % @endif</b>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="description line-clamp-2 text-sm">
            {{ $shop->description }}        </div>
        <div class="flex items-start gap-4 justify-between">
            <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                <tbody>
                <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-xs *:leading-4">
                    <td>
                        Area <br>
                        <b class="text-pureblack">{{ $shop->total_area }} sq. ft</b>
                    </td>
                    <td>
                        Length <br>
                        <b class="text-pureblack">{{ $shop->length }} ft</b>
                    </td>
                    <td>
                        Width <br>
                        <b class="text-pureblack">{{ $shop->width }} ft</b>
                    </td>
                </tr>
                <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-xs *:leading-4">
                    <td>
                        Block <br>
                        <b class="text-pureblack">{{ $shop->block?->name }}</b>
                    </td>
                    <td>
                        Floor <br>
                        <b class="text-pureblack">{{ $shop->floor?->name }}</b>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="qr max-lg:hidden">
                <img src="@qr(route( getCurrentGuard() . '.shop.show', $shop->id))" class="w-[90px] ml-2 mb-2 border border-slate-100 rounded-lg p-2" alt="">
            </div>
        </div>
        <div class="!mt-1 flex gap-2 *:text-sm *:py-2 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:gap-1.5 *:transition-all">
            <a href="{{ route( getCurrentGuard() . '.shop-details') }}" data-shop-id="1" class="shop-details-1 text-themered bg-[#FFF0F1] border border-[#FFF0F1] hover:bg-themered hover:text-white">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Shop Details
            </a>
            @if(getCurrentGuard() == "employee")
                <button id="set-installment-plan-{{ $shop->id }}" data-buyer-shop-id="{{ $shop->buyerShop()?->id }}" class="set-installment-plan-{{ $shop->id }} set-installment-plan text-gunmetal border border-slate-200 hover:bg-gunmetal hover:text-white">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.83594 11.3555V15.0597C4.83594 18.764 6.37435 20.249 10.2118 20.249H14.8185C18.656 20.249 20.1944 18.764 20.1944 15.0597V11.3555" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.5231 12C14.0871 12 15.241 10.7708 15.0871 9.261L14.523 3.75H10.5317L9.95908 9.261C9.80523 10.7708 10.959 12 12.5231 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.9155 12C19.642 12 20.9069 10.647 20.7359 8.98875L20.4966 6.72C20.1889 4.575 19.3343 3.75 17.095 3.75H14.4883L15.0866 9.53325C15.2318 10.8945 16.5053 12 17.9155 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.08589 12C8.4961 12 9.76956 10.8945 9.90631 9.53325L10.0943 7.71L10.5046 3.75H7.89783C5.65859 3.75 4.80392 4.575 4.49624 6.72L4.26547 8.98875C4.09454 10.647 5.35945 12 7.08589 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.5195 16.125C11.0922 16.125 10.3828 16.8098 10.3828 18.1875V20.25H14.6562V18.1875C14.6562 16.8098 13.9468 16.125 12.5195 16.125Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Set Payment
                </button>
            @endif
        </div>
    </div>
</div>
