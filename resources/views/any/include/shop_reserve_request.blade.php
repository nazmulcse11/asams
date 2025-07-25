<div id="shop-card-4" class="shop-item bg-white rounded-2xl overflow-hidden border border-slate-100 flex flex-col">
    <div class="thumbnail relative">
        <a href="{{ route('employee.shop.show', $shop->id) }}">
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
            <span class="inline-flex bg-yellow-100 text-yellow-600 text-sm px-4 py-1 rounded-3xl">
                {{ __("Pending Proposal") }}
            </span>
        </div>
        <div class="finance_states mt-auto">
            <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                <tbody>
                    <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-1 *:py-1 *:text-xs *:leading-4 *:text-center">
                        <td>
                            Sale Price <br>
                            <b class="text-pureblack">৳{{ $shop->min_sale_price }}</b>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="description line-clamp-2 text-sm">
            {{ $shop->description }}
        </div>
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
                <img src="@qr(route('employee.shop.show', $shop->id))" class="w-[90px] ml-2 mb-2 border border-slate-100 rounded-lg p-2" alt="">
            </div>
        </div>
        <div class="!mt-1 flex gap-2 *:text-sm *:py-2 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:gap-1.5 *:transition-all">
            <a href="{{ route('employee.shop.show', $shop->id) }}" data-shop-id="1" class="shop-details-1 text-themered bg-[#FFF0F1] border border-[#FFF0F1] hover:bg-themered hover:text-white">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Shop Details
            </a>
            <button data-shop-id="{{ $shop->id }}" data-popup="modal" id="view-proposal-{{ $shop->id }}" class="view-proposal-{{ $shop->id }} view-proposal text-white bg-themered border border-themered hover:bg-gunmetal hover:border-gunmetal">
                View Proposal
            </button>
        </div>
    </div>
</div>
