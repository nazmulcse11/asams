<div id="shop-card-1" class="shop-item bg-white rounded-2xl overflow-hidden border border-slate-100 flex flex-col">
    <div class="thumbnail relative">
        <a href="{{ route('employee.shop.show', $shop->id) }}">
            <img src="@if(isset($shop->picture[0])) {{ $shop->picture[0] }} @else {{ asset('/images/pic1.png') }} @endif" alt="{{ $shop->number }}" class="min-h-[240px] xl:min-h-[290px] max-h-[350px] w-full object-cover bg-gray-100">
        </a>
    </div>
    <div class="px-4 py-5 xl:px-6 flex-1 flex flex-col gap-5">
        <div class="flex items-center justify-between gap-4 flex-wrap">
            <h5 class="text-lg">
                                    <span class="text-gray-500">
                                        {{ __("Shop No.")}} <b class="font-bold text-black-500 text-2xl">101</b>
                                    </span>
            </h5>
            <span class="inline-flex bg-red-100 text-red-600 text-sm px-4 py-1 rounded-3xl">
                                    {{ __("Sold") }}
                                </span>
        </div>
        <div class="progresswrapper flex items-center text-sm gap-4">
            <div class="progressbar flex-1 h-2 bg-slate-100 rounded-2xl overflow-hidden">
                <div class="h-full bg-[#FFB7A0] rounded-2xl overflow-hidden" style="width: 65%;"></div>
            </div>
            <div class="label">
                2/3 Installment
            </div>
        </div>
        <div class="finance_states mt-auto">
            <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                <tbody>
                <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-1 *:py-1 *:text-xs *:leading-4 *:text-center">
                    <td>
                        Amount Paid <br>
                        <b class="text-pureblack">৳3,50,000</b>
                    </td>
                    <td>
                        Next Payment <br>
                        <b class="text-pureblack">৳75,000</b>
                    </td>
                    <td>
                        Due Date <br>
                        <b class="text-pureblack">2025-07-15</b>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="description line-clamp-2 text-sm">
            This is well-designed shop offers a flexible layout, excellent frontage, and top visible - making it ideal for boutiques, salons, clinics, stores, or cafés.
        </div>
        <div class="flex items-start gap-4 justify-between">
            <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                <tbody>
                <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-xs *:leading-4">
                    <td>
                        Area <br>
                        <b class="text-pureblack">1980 sq. ft</b>
                    </td>
                    <td>
                        Length <br>
                        <b class="text-pureblack">55 ft</b>
                    </td>
                    <td>
                        Width <br>
                        <b class="text-pureblack">36 ft</b>
                    </td>
                </tr>
                <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-xs *:leading-4">
                    <td>
                        Block <br>
                        <b class="text-pureblack">A</b>
                    </td>
                    <td>
                        Floor <br>
                        <b class="text-pureblack">1st</b>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="qr max-lg:hidden">
                <img src="{{ asset('/images/qr.png')}}" class="w-[90px] ml-2 mb-2 border border-slate-100 rounded-lg p-2" alt="">
            </div>
        </div>
        <div class="!mt-1 flex gap-2 *:text-sm *:py-2 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:gap-1.5 *:transition-all">
            <a href="{{ route('employee.shop-details') }}" data-shop-id="1" class="shop-details-1 text-themered bg-[#FFF0F1] border border-[#FFF0F1] hover:bg-themered hover:text-white">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Shop Details
            </a>
            <a href="#" class="text-gunmetal border border-slate-200 hover:bg-gunmetal hover:text-white">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0234 11.1758V16.1258L11.6734 14.4758" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.025 16.1266L8.375 14.4766" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20.75 10.35V14.475C20.75 18.6 19.1 20.25 14.975 20.25H10.025C5.9 20.25 4.25 18.6 4.25 14.475V9.525C4.25 5.4 5.9 3.75 10.025 3.75H14.15" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20.7484 10.35H17.4484C14.9734 10.35 14.1484 9.525 14.1484 7.05V3.75L20.7484 10.35Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Agreement Paper
            </a>
        </div>
    </div>
</div>
