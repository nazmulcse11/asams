<x-app-layout>
    <div class="flex justify-between flex-wrap items-center mb-6">
        <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-flex items-center gap-3 ltr:pr-4 rtl:pl-4 mb-1 sm:mb-0">
            <span class="icon w-16 h-16 bg-[#E6E0F4] rounded-full inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.9706 14.9668L34.5526 11.034C33.9471 6.74631 31.972 5 27.748 5H24.3458H22.2122H17.8296H15.696H12.2361C7.99765 5 6.03702 6.74631 5.41712 11.0766L5.02788 14.981C4.88371 16.5001 5.30179 17.9767 6.21002 19.1267C7.30566 20.5322 8.99237 21.3273 10.8665 21.3273C12.683 21.3273 14.4273 20.4329 15.523 18.9989C16.5033 20.4329 18.1756 21.3273 20.0353 21.3273C21.895 21.3273 23.5241 20.4754 24.5188 19.0557C25.6288 20.4613 27.3444 21.3273 29.132 21.3273C31.0494 21.3273 32.7793 20.4896 33.8606 19.0131C34.7256 17.8773 35.1148 16.4433 34.9706 14.9668Z" fill="#9881CB"/>
                    <path d="M19.0977 26.8782C17.2668 27.0627 15.8828 28.5961 15.8828 30.4134V34.3035C15.8828 34.6869 16.2 34.9992 16.5892 34.9992H23.4658C23.8551 34.9992 24.1722 34.6869 24.1722 34.3035V30.9103C24.1866 27.943 22.4134 26.5374 19.0977 26.8782Z" fill="#9881CB"/>
                    <path d="M33.5436 23.668V27.8989C33.5436 31.8174 30.3143 34.9977 26.3354 34.9977C25.9462 34.9977 25.629 34.6853 25.629 34.302V30.9088C25.629 29.0915 25.0668 27.6717 23.9711 26.7063C23.0052 25.8402 21.6933 25.4143 20.0643 25.4143C19.7039 25.4143 19.3435 25.4285 18.9542 25.4711C16.3881 25.7266 14.4419 27.8563 14.4419 30.4118V34.302C14.4419 34.6853 14.1248 34.9977 13.7355 34.9977C9.75661 34.9977 6.52734 31.8174 6.52734 27.8989V23.6964C6.52734 22.7025 7.52207 22.0352 8.45913 22.3618C8.84838 22.4896 9.23762 22.5889 9.64127 22.6457C9.81427 22.6741 10.0017 22.7025 10.1747 22.7025C10.4053 22.7309 10.636 22.7451 10.8667 22.7451C12.539 22.7451 14.1824 22.1346 15.4799 21.084C16.7197 22.1346 18.3343 22.7451 20.0355 22.7451C21.751 22.7451 23.3368 22.163 24.5766 21.1124C25.8741 22.1488 27.4887 22.7451 29.1322 22.7451C29.3917 22.7451 29.6512 22.7309 29.8962 22.7025C30.0692 22.6883 30.2278 22.6741 30.3864 22.6457C30.8333 22.5889 31.237 22.4612 31.6406 22.3334C32.5777 22.021 33.5436 22.7025 33.5436 23.668Z" fill="#9881CB"/>
                </svg>
            </span>
            {{ __('Reserved Shops') }}
        </h4>
        <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse">
            <a href="{{ route('agent.reserved-shop.floor-plan', getCurrentAuthenticatedUser()->properties()?->first()->id) }}" class="text-themered hover:bg-themered hover:text-white transition-all bg-[#FFF0F1] text-sm px-5 py-3 rounded-md font-semibold flex-1 inline-flex items-center justify-center">
                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:plus"></iconify-icon>
                {{ __('New Reserve') }}
            </a>
        </div>
    </div>

    <form class="property_search_form space-y-6">
        <div class="flex flex-wrap items-end justify-between gap-6">
            <div class="left">
                <div class="input-area relative">
                    <input type="text" name="s" class="w-full px-4 py-3 !pl-9 rounded-lg bg-white border border-[#E1E5EA]" placeholder="Search">
                    <span class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full border-none flex items-center justify-center pl-2">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:search"></iconify-icon>
                    </span>
                </div>
            </div>
            <div class="right max-w-4xl">
                <div class="flex flex-wrap items-end gap-6">
                    <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_100px] space-y-1">
                        <label>{{ __('Floor')}}</label>
                        <select class="w-full px-4 py-3 text-sm rounded-lg bg-white border border-[#E1E5EA] *:dark:bg-slate-700 focus:outline-0 cursor-auto">
                            <option value="">{{ __('1st')}}</option>
                            <option value="">{{ __('2nd')}}</option>
                            <option value="">{{ __('3rd')}}</option>
                            <option value="">{{ __('5th')}}</option>
                        </select>
                    </div>
                    <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_100px] space-y-1">
                        <label>{{ __('Block')}}</label>
                        <select class="w-full px-4 py-3 text-sm rounded-lg bg-white border border-[#E1E5EA] *:dark:bg-slate-700 focus:outline-0 cursor-pointer">
                            <option value="">{{ __('A')}}</option>
                            <option value="">{{ __('B')}}</option>
                            <option value="">{{ __('C')}}</option>
                            <option value="">{{ __('D')}}</option>
                        </select>
                    </div>
                    <div class="input-area">
                        <button type="submit" class="bg-black-900 rounded-lg px-5 py-4">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.43605 0.75H13.564C14.4913 0.75 15.25 1.50012 15.25 2.41692V4.25054C15.25 4.91731 14.8285 5.75077 14.407 6.1675L10.782 9.3347C10.2762 9.7514 9.939 10.5848 9.939 11.2516V14.8355C9.939 15.3356 9.6017 16.0023 9.1802 16.2524L8 17.0025C6.9041 17.6693 5.38663 16.9192 5.38663 15.5856V11.1683C5.38663 10.5848 5.04942 9.8347 4.71221 9.418L1.50872 6.08415C1.08721 5.66742 0.75 4.91731 0.75 4.41723V2.50027C0.75 1.50012 1.50872 0.75 2.43605 0.75Z" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.0975 0.75L2.94141 7.3343" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </form>

    <div class="my-6"></div>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 md:gap-6">
        @foreach(getCurrentAuthenticatedUser()->agentShops as $item)
        <div id="shop-card-1" class="shop-item bg-white rounded-2xl overflow-hidden border border-slate-100 flex flex-col">
            <div class="thumbnail relative">
                <a href="#shopdetails_modal" data-popup="modal">
                    <img src="{{ asset('/images/pic1.png') }}" alt="101" class="min-h-[240px] xl:min-h-[290px] max-h-[350px] w-full object-cover bg-gray-100">
                </a>
            </div>
            <div class="px-4 py-5 xl:px-6 flex-1 flex flex-col gap-5">
                <div class="flex items-center justify-between gap-4 flex-wrap">
                    <h5 class="text-lg">
                        <span class="text-gray-500">
                            {{ __("Shop No.")}} <b class="font-bold text-black-500 text-2xl">{{ $item->shop?->number }}</b>
                        </span>
                    </h5>
                    @if($item->payment?->status?->name == "Approved" && $item->shop?->status?->name == "Reserved")
                        <span class="inline-flex bg-green-100 text-green-600 text-sm px-4 py-1 rounded-3xl">
                            {{ __("Reserved") }}
                        </span>
                    @elseif($item->status?->name == "Pending")
                        <span class="inline-flex bg-yellow-100 text-yellow-600 text-sm px-4 py-1 rounded-3xl">
                            {{ __("Pending") }}
                        </span>
                    @elseif($item->status?->name == "Verified")
                        <span class="inline-flex bg-yellow-100 text-yellow-600 text-sm px-4 py-1 rounded-3xl">
                            {{ __("Verified") }}
                        </span>
                    @elseif($item->status?->name == "Approved")
                        <span class="inline-flex bg-yellow-100 text-yellow-600 text-sm px-4 py-1 rounded-3xl">
                            {{ __("Approved") }}
                        </span>
                    @elseif($item->status?->name == "Rejected")
                        <span class="inline-flex bg-red-100 text-red-600 text-sm px-4 py-1 rounded-3xl">
                            {{ __("Rejected") }}
                        </span>
                    @endif
                </div>
                <div class="finance_states mt-auto">
                    <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                        <tbody>
                            <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-1 *:py-1 *:text-xs *:leading-4 *:text-center">
                                <td>
                                    Sale Price <br>
                                    <b class="text-pureblack">৳{{ $item->sale_price }}</b>
                                </td>
                                <td>
                                    Security Money <br>
                                    <b class="text-pureblack">৳{{ $item->security_deposit }}</b>
                                </td>
                                <td>
                                    Reserve Until <br>
                                    <b class="text-pureblack">{{ $item->created_at->addDays((int) $item->duration)->format('Y-m-d') }}</b>
                                </td>
                                <td>
                                    Commission <br>
                                    <b class="text-pureblack">@if($item->commission_type == 'amount') ৳ @endif {{ $item->commission }} @if($item->commission_type == 'percentage') % @endif</b>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="description line-clamp-2 text-sm">
                    {{ $item->shop?->description }}
                </div>
                <div class="flex items-start gap-4 justify-between">
                    <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                        <tbody>
                            <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-xs *:leading-4">
                                <td>
                                    Area <br>
                                    <b class="text-pureblack">{{ $item->shop?->total_area }} sq. ft</b>
                                </td>
                                <td>
                                    Length <br>
                                    <b class="text-pureblack">{{ $item->shop?->length }} ft</b>
                                </td>
                                <td>
                                    Width <br>
                                    <b class="text-pureblack">{{ $item->shop?->width }} ft</b>
                                </td>
                            </tr>
                            <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-xs *:leading-4">
                                <td>
                                    Block <br>
                                    <b class="text-pureblack">{{ $item->shop?->block?->name }}</b>
                                </td>
                                <td>
                                    Floor <br>
                                    <b class="text-pureblack">{{ $item->shop?->floor?->name }}</b>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="qr max-lg:hidden">
                        <img src="@qr($item->shop?->uuid)" class="w-[90px] ml-2 mb-2 border border-slate-100 rounded-lg p-2" alt="">
                    </div>
                </div>
                <div class="!mt-1 flex gap-2 *:text-sm *:py-2 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:gap-1.5 *:transition-all">
                    <a href="#shopdetails_modal" data-popup="modal" class="shop-details-1 text-themered bg-[#FFF0F1] border border-[#FFF0F1] hover:bg-themered hover:text-white">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Shop Details
                    </a>

                    @if($item->status?->name == "Deposited" && $item->shop?->status?->name == "Reserved")
                    <a href="#" class="text-gunmetal border border-slate-200 hover:bg-gunmetal hover:text-white">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.83594 11.3555V15.0597C4.83594 18.764 6.37435 20.249 10.2118 20.249H14.8185C18.656 20.249 20.1944 18.764 20.1944 15.0597V11.3555" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.5231 12C14.0871 12 15.241 10.7708 15.0871 9.261L14.523 3.75H10.5317L9.95908 9.261C9.80523 10.7708 10.959 12 12.5231 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.9155 12C19.642 12 20.9069 10.647 20.7359 8.98875L20.4966 6.72C20.1889 4.575 19.3343 3.75 17.095 3.75H14.4883L15.0866 9.53325C15.2318 10.8945 16.5053 12 17.9155 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.08589 12C8.4961 12 9.76956 10.8945 9.90631 9.53325L10.0943 7.71L10.5046 3.75H7.89783C5.65859 3.75 4.80392 4.575 4.49624 6.72L4.26547 8.98875C4.09454 10.647 5.35945 12 7.08589 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.5195 16.125C11.0922 16.125 10.3828 16.8098 10.3828 18.1875V20.25H14.6562V18.1875C14.6562 16.8098 13.9468 16.125 12.5195 16.125Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Sale Request
                    </a>
                    @elseif($item->status?->name == "Approved" && is_null($item->payment))
                        <button data-popup="modal" id="view-security-deposit-{{ $item->id }}" data-reserve-id="{{ $item->id }}" class="view-security-deposit-{{ $item->id }} view-security-deposit text-white bg-themered border border-themered hover:bg-gunmetal hover:border-gunmetal">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.34375 15.2025L15.2025 5.34375" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.2578 17.1775L12.2478 16.1875" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.4805 14.96L15.4522 12.9883" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5.07105 10.546L10.549 5.06797C12.298 3.31897 13.1725 3.31072 14.905 5.04322L18.9558 9.09397C20.6883 10.8265 20.68 11.701 18.931 13.45L13.453 18.928C11.704 20.677 10.8295 20.6852 9.09705 18.9527L5.0463 14.902C3.3138 13.1695 3.3138 12.3032 5.07105 10.546Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.75 20.25H20.25" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Security Money
                        </button>
                    @elseif($item->payment?->status?->name == "Approved" && $item->shop?->status?->name == "Reserved")
                        <button data-popup="modal" id="view-sale-request-{{ $item->id }}" data-reserve-id="{{ $item->id }}" class="view-sale-request-{{ $item->id }} view-sale-request text-white bg-themered border border-themered hover:bg-gunmetal hover:border-gunmetal">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.34375 15.2025L15.2025 5.34375" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.2578 17.1775L12.2478 16.1875" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.4805 14.96L15.4522 12.9883" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5.07105 10.546L10.549 5.06797C12.298 3.31897 13.1725 3.31072 14.905 5.04322L18.9558 9.09397C20.6883 10.8265 20.68 11.701 18.931 13.45L13.453 18.928C11.704 20.677 10.8295 20.6852 9.09705 18.9527L5.0463 14.902C3.3138 13.1695 3.3138 12.3032 5.07105 10.546Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.75 20.25H20.25" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Request for Sale
                        </button>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @push("modal")
        <div id="page_modal" class="asams-modal fixed inset-0 z-[1024] p-4 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
            <!-- dynamic generated modal content -->
        </div>

    <!-- Shop Details Modal -->
    <div id="shopdetails_modal" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
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
                        <img src="{{ asset('/images/pic1.png') }}" alt="Property Image" class="w-full max-h-[460px] object-cover object-center rounded-xl">
                    </div>
                    <div class="metainfo lg:rounded-xl lg:bg-gray-50 lg:p-4 space-y-3 xl:space-y-10">
                        <table class="w-full">
                            <tbody>
                                <tr class="*:px-3 *:py-1.5">
                                    <td class="w-32">
                                        {{ __("Lenght:") }}
                                    </td>
                                    <td class="font-bold text-black-500">
                                        {{ __("55 ft") }}
                                    </td>
                                </tr>
                                <tr class="*:px-3 *:py-1.5">
                                    <td class="w-32">
                                        {{ __("Width:") }}
                                    </td>
                                    <td class="font-bold text-black-500">
                                        {{ __("36 ft") }}
                                    </td>
                                </tr>
                                <tr class="*:px-3 *:py-1.5">
                                    <td class="w-32">
                                        {{ __("Area:") }}
                                    </td>
                                    <td class="font-bold text-black-500">
                                        {{ __("1,980 sq.ft") }}
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
                                        {{ __("55 ft") }}
                                    </td>
                                </tr>
                                <tr class="*:px-3 *:py-1.5">
                                    <td class="w-32">
                                        {{ __("Full Width :") }}
                                    </td>
                                    <td class="font-bold text-black-500">
                                        {{ __("36 ft") }}
                                    </td>
                                </tr>
                                <tr class="*:px-3 *:py-1.5">
                                    <td class="w-32">
                                        {{ __("Total Area :") }}
                                    </td>
                                    <td class="font-bold text-black-500">
                                        {{ __("2,124 sq.ft") }}
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
                                        {{ __("A") }}
                                    </td>
                                </tr>
                                <tr class="*:px-3 *:py-1.5">
                                    <td class="w-32">
                                        {{ __("Floor :") }}
                                    </td>
                                    <td class="font-bold text-black-500">
                                        {{ __("Ground Floor") }}
                                    </td>
                                </tr>
                                <tr class="*:px-3 *:py-1.5">
                                    <td class="w-32">
                                        {{ __("Property :") }}
                                    </td>
                                    <td class="font-bold text-black-500">
                                        {{ __("Noor Market") }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="shop_info lg:col-span-2 space-y-6">
                        <h2 class="text-2xl lg:text-3xl font-bold text-black-500 flex items-end gap-4 mb-3">
                            {{ __("Shop : 101") }}
                            <span class="inline-flex bg-green-200 text-green-600 text-sm px-5 py-1.5 rounded-3xl font-normal">
                                {{ __("Vacant") }}
                            </span>
                        </h2>
                        <div class="flex items-start gap-4">
                            <div class="flex-1">
                                {{ __("This is well-designed shop offers a flexible layout, excellent frontage, and top visible - making it ideal for boutiques, salons, clinics, stores, or cafés.") }}
                            </div>
                            <div class="qr flex-[0_0_80px] border rounded-lg border-gray-200">
                                <img src="{{ asset('/images/qr.png') }}" alt="Property Image">
                            </div>
                        </div>
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
                                            {{ __("B. Percent") }}
                                        </th>
                                        <th>
                                            {{ __("B. Amount") }}
                                        </th>
                                        <th>
                                            {{ __("Status") }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100">
                                        <td class="text-center whitespace-nowrap">
                                            {{ __("James Milner")}}
                                        </td>
                                        <td>
                                            {{ __("12/12/2025")}}
                                        </td>
                                        <td>
                                            {{ __("10%")}}
                                        </td>
                                        <td>
                                            {{ __("1,23,000.00")}}
                                        </td>
                                        <td class="text-center">
                                            <span class="inline-flex items-center gap-1 py-1 px-2 rounded-3xl bg-green-200 text-green-600 text-xs font-medium">
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 8.25C0 3.84886 3.59886 0.25 8 0.25C9.23726 0.25 10.412 0.534765 11.4609 1.04196C11.7095 1.16217 11.8136 1.46116 11.6934 1.70976C11.5732 1.95836 11.2742 2.06244 11.0256 1.94223C10.1087 1.49886 9.08239 1.25 8 1.25C4.15114 1.25 1 4.40114 1 8.25C1 12.0989 4.15114 15.25 8 15.25C11.8489 15.25 15 12.0989 15 8.25C15 7.73056 14.9427 7.2243 14.8342 6.73702C14.7742 6.46748 14.9441 6.20033 15.2136 6.14033C15.4832 6.08032 15.7503 6.25019 15.8103 6.51973C15.9345 7.07767 16 7.65678 16 8.25C16 12.6511 12.4011 16.25 8 16.25C3.59886 16.25 0 12.6511 0 8.25Z" fill="#16A34A"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8538 1.20895C16.049 1.40421 16.049 1.72079 15.8538 1.91605L6.93485 10.835C6.73958 11.0302 6.423 11.0302 6.22774 10.835L3.99801 8.60524C3.80275 8.40998 3.80275 8.0934 3.99801 7.89814C4.19327 7.70287 4.50985 7.70287 4.70512 7.89814L6.58129 9.77431L15.1467 1.20895C15.3419 1.01368 15.6585 1.01368 15.8538 1.20895Z" fill="#16A34A"/>
                                                </svg>
                                                {{ __("Approved")}}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100">
                                        <td class="text-center whitespace-nowrap">
                                            {{ __("Robert William")}}
                                        </td>
                                        <td>
                                            {{ __("12/12/2025")}}
                                        </td>
                                        <td>
                                            {{ __("12.5%")}}
                                        </td>
                                        <td>
                                            {{ __("1,22,000.00")}}
                                        </td>
                                        <td class="text-center">
                                            <span class="inline-flex items-center gap-1 py-1 px-2 rounded-3xl bg-yellow-100 text-yellow-600 text-xs font-medium">
                                                {{ __("Pending")}}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100">
                                        <td class="text-center whitespace-nowrap">
                                            {{ __("Henry Nichols")}}
                                        </td>
                                        <td>
                                            {{ __("12/12/2025")}}
                                        </td>
                                        <td>
                                            {{ __("13%")}}
                                        </td>
                                        <td>
                                            {{ __("1,20,000.00")}}
                                        </td>
                                        <td class="text-center">
                                            <span class="inline-flex items-center gap-1 py-1 px-2 rounded-3xl bg-yellow-100 text-yellow-600 text-xs font-medium">
                                                {{ __("Pending")}}
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="approved_agent lg:row-span-2 text-center">
                        <img src="{{ asset('images/buyer.png') }}" class="rounded-full w-40 h-40 mx-auto" alt="{{ __('James Milner') }}">
                        <div class="my-3 space-y-1">
                            <h5 class="font-body text-lg text-black-500 font-semibold">
                                {{ __('James Milner') }}
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
                            <p>
                                <a href="mailto:james.milner@gmail.com">
                                    {{ __('james.milner@gmail.com') }}
                                </a>
                            </p>
                            <p>
                                <a href="tel:+0123456789">
                                    {{ __('0123 456 789') }}
                                </a>
                            </p>
                        </div>
                        <div class="qr w-28 h-28 border rounded-lg border-gray-200 p-1.5 mx-auto">
                            <img src="{{ asset('/images/qr.png') }}" alt="Property Image" class="w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Reserve Modal -->
    <div id="new_reserve_modal" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
        <div class="modal-content bg-white w-full max-w-3xl mx-auto border border-slate-400 rounded-2xl relative">
            <div class="modal-header bg-[#F8F9FB] p-4 lg:p-6 rounded-tl-2xl rounded-tr-2xl">
                <h2 class="text-center text-xl lg:text-2xl font-semibold">
                    {{ __("Select Property")}}
                </h2>
                <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                    <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
                </button>
            </div>
            <div class="modal-body p-4 lg:p-8 xl:p-10 space-y-6">
                <form action="{{ route("agent.reserved-shop.market") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="field-body">
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Select A Property to Reserve')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="property" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg" required>
                                @foreach(dropdown_options("property") as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('select_property_reserve')" class="mt-1"/>
                        </div>
                    </div>

                    <div class="mt-6 text-end">
                        <button type="submit" class="group max-md:text-sm bg-themered text-white inline-flex items-center justify-center gap-2 rounded-lg px-3 lg:px-5 py-2 lg:py-3">
                            Proceed
                            <svg class="transition-all group-hover:scale-110" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="transition-all duration-300 group-hover:rotate-[360deg] origin-center"></path>
                                <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Deposit Security Money Modal -->
    <div id="deposit_security_money" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
        <div class="modal-content bg-white w-full max-w-4xl mx-auto border border-slate-400 rounded-2xl relative">
            <div class="modal-header px-4 lg:px-6 pt-4 lg:pt-6 rounded-tl-2xl rounded-tr-2xl">

                <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                    <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28 27.0995C28 27.5918 27.592 28 27.1 28H4.9C4.408 28 4 27.5918 4 27.0995C4 26.6072 4.408 26.1989 4.9 26.1989H27.1C27.592 26.1989 28 26.6072 28 27.0995Z" fill="#2B323B"/>
                            <path d="M20.0673 7.01377L7.17934 19.9093C6.68734 20.4016 5.89534 20.4016 5.41534 19.9093H5.40334C3.73534 18.2283 3.73534 15.5147 5.40334 13.8458L13.9833 5.26074C15.6633 3.57975 18.3753 3.57975 20.0553 5.26074C20.5473 5.72901 20.5473 6.53348 20.0673 7.01377Z" fill="#2B323B"/>
                            <path d="M26.5833 11.7789L22.9233 8.11673C22.4313 7.62444 21.6393 7.62444 21.1593 8.11673L8.27134 21.0123C7.77934 21.4926 7.77934 22.285 8.27134 22.7773L11.9313 26.4515C13.6113 28.1204 16.3233 28.1204 18.0033 26.4515L26.5713 17.8664C28.2753 16.1855 28.2753 13.4599 26.5833 11.7789ZM16.9113 22.6212L15.4593 24.0861C15.1593 24.3863 14.6673 24.3863 14.3553 24.0861C14.0553 23.7859 14.0553 23.2936 14.3553 22.9814L15.8193 21.5166C16.1073 21.2284 16.6113 21.2284 16.9113 21.5166C17.2113 21.8168 17.2113 22.3331 16.9113 22.6212ZM21.6753 17.8544L18.7473 20.7962C18.4473 21.0843 17.9553 21.0843 17.6433 20.7962C17.3433 20.496 17.3433 20.0037 17.6433 19.6915L20.5833 16.7498C20.8713 16.4616 21.3753 16.4616 21.6753 16.7498C21.9753 17.062 21.9753 17.5543 21.6753 17.8544Z" fill="#2B323B"/>
                        </svg>
                    </div>
                    <div class="">
                        <h2 class="text-xl font-semibold text-gray-900">
                            Security Money Details
                        </h2>
                        <p class="text-sm text-gray-500 font-light">
                            Provide the deposit details to secure the shop reservation.
                        </p>
                    </div>
                </div>
                <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                    <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
                </button>

            </div>

            <div class="modal-body p-4 lg:p-8 xl:p-10 space-y-6">
                <table class="table w-full border border-slate-100 rounded-xl overflow-hidden">
                    <tbody>
                        <tr class="*:bg-[#F8F9FB] *:border *:border-slate-100 *:px-4 *:py-1.5 *:text-xs *:leading-4 *:text-center">
                            <td colspan="3">
                                {{ __('Shop No.') }} <br>
                                <b class="text-pureblack">{{ __('S106') }}</b>
                            </td>
                        </tr>
                        <tr class="*:bg-[#F8F9FB] *:border *:border-slate-100 *:px-4 *:py-1.5 *:text-xs *:leading-4 *:text-center">
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
                        <tr class="*:bg-[#F8F9FB] *:border *:border-slate-100 *:px-4 *:py-1.5 *:text-xs *:leading-4 *:text-center">
                            <td>
                                Property <br>
                                <b class="text-pureblack">Nur Super Market</b>
                            </td>
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
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="field-body grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Amount Received (৳)')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="amount_to_be_paid" inputmode="numeric" placeholder="{{ __('৳1,25,000')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" />
                            <x-input-error :messages="$errors->get('amount_to_be_paid')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Payment Date')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="date" value="2025-06-10" name="paid_date" class="w-full text-sm py-[12px] px-4 bg-white border rounded-lg cursor-pointer" />
                            <x-input-error :messages="$errors->get('paid_date')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Mode of Payment')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="mode_of_payment" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" >
                                <option value="">Select</option>
                                <option value="Cash">Cash</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="Mobile Banking">Mobile Banking</option>
                                <option value="Cheque">Cheque</option>
                            </select>
                            <x-input-error :messages="$errors->get('mode_of_payment')" class="mt-1"/>
                        </div>
                         <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Reference/Txn ID')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="txnId" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="TXN-20250601-001" />
                            <x-input-error :messages="$errors->get('txnId')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2 md:col-span-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Screenshot/Bank Deposit Slip/Cheque Copy')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="file" name="attachment_2" class="text-sm w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-2 file:py-[5px] file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white file:font-light" />
                            <x-input-error :messages="$errors->get('attachment_2')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2 md:col-span-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Notes')}}<span class="text-xs text-[#8997A9]">(Any specific comments or remarks)</span>
                            </label>
                            <textarea name="notes" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"></textarea>
                            <x-input-error :messages="$errors->get('notes')" class="mt-1"/>
                        </div>
                    </div>

                    <div class="mt-6 text-end">
                        <button type="submit" class="group max-md:text-sm bg-themered text-white inline-flex items-center justify-center gap-2 rounded-lg px-3 lg:px-4 py-2 lg:py-3">
                            Submit Deposit Payment
                            <svg class="transition-all group-hover:scale-110" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="transition-all duration-300 group-hover:rotate-[360deg] origin-center"></path>
                                <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endpush

    @push("scripts")
    <style>
        .swal-wide {
            padding: 0;
            border-radius: 12px;
        }
        .swal-wide .swal2-html-container {
            padding: 20px;
        }
        @media (min-width: 992px) {
            .swal-wide .swal2-html-container {
                padding: 30px;
            }
        }
        :root {
            --swal2-width: 40em;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                document.querySelectorAll('.view-security-deposit, .view-sale-request').forEach(button => {
                    button.addEventListener('click', function () {
                        const itemId = this.dataset.reserveId;

                        let url = '{{ route("any.shop-reservation.security-form") }}';
                        if(button.classList.contains('view-sale-request')){
                            url = '{{ route("any.shop-request.show") }}';
                        }

                        axios.get(url, {
                            params: {
                                reserve_id: itemId,
                            }
                        })
                            .then(response => {
                                console.log(response.data);
                                document.getElementById("page_modal").innerHTML = response.data.html;
                                document.querySelectorAll('#page_modal').forEach(modal => {
                                    modal.classList.add('show');
                                    modal.classList.remove('hidden');
                                });
                                loadSelect2Dropdown("buyer", "buyer_id", {}, "Select buyer");
                                securityDepositStore();
                            }).catch(error => {
                            console.error(error);
                        });

                    });
                });
            });

            function securityDepositStore(){
                const form = document.getElementById('securityDepositForm');

                form.addEventListener('submit', async function (e) {
                    e.preventDefault();

                    const formData = new FormData(form);
                    const actionUrl = form.getAttribute('action');

                    // Clear previous errors
                    form.querySelectorAll('.text-red-600').forEach(el => el.textContent = '');

                    try {
                        await axios.post(actionUrl, formData, {
                            headers: {
                                'Content-Type': 'multipart/form-data',
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        });

                        location.reload();

                    } catch (error) {
                        if (error.response && error.response.status === 422) {
                            const errors = error.response.data.errors;

                            // Loop through validation errors
                            for (const field in errors) {
                                const message = errors[field][0];

                                // Find the error display container next to the input
                                const errorSpan = form.querySelector(`[name="${field}"]`)?.closest('.field-item')?.querySelector('.text-red-600');

                                if (errorSpan) {
                                    errorSpan.textContent = message;
                                }
                            }
                        } else {
                            console.error('Unexpected error:', error);
                        }
                    }
                });
            }
        </script>
    <script>
        $(document).ready(function () {
            // Open modal
            $('[data-popup="modal"]').on('click', function (e) {
                e.preventDefault();
                const targetModal = $(this).attr('href') ;

                // Close any open modal before opening the new one
                $('.asams-modal.show').addClass('hidden').removeClass('show');

                // Open the target modal
                $(targetModal).removeClass('hidden').addClass('show');
            });

            // Close modal on click outside .modal-content or on .modal-close
            $('.asams-modal').on('click', function (e) {
                const $modalContent = $(this).find('.modal-content');
                const isClickInside = $modalContent.is(e.target) || $modalContent.has(e.target).length > 0;
                const isCloseBtn = $(e.target).closest('.modal-close').length > 0;

                if (!isClickInside || isCloseBtn) {
                    $(this).addClass('hidden').removeClass('show');
                }
            });

            // Close modal on Esc key
            $(document).on('keydown', function (e) {
                if (e.key === 'Escape') {
                    $('.asams-modal.show').addClass('hidden').removeClass('show');
                }
            });
        });

        $('#deposit_security_money form').submit(function(e){
            e.preventDefault();

            Swal.fire({
                html: `<div class="flex items-start gap-4 bg-[#FFFEEB] border border-[#FFFEEB] p-6 rounded-xl">
                        <div class="icon">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 14C0 6.26801 6.26801 0 14 0C21.732 0 28 6.26801 28 14C28 21.732 21.732 28 14 28C6.26801 28 0 21.732 0 14Z" fill="#FFBF00"/>
                                <path d="M16.2753 11.433L12.2462 11.938L12.102 12.6066L12.8937 12.7526C13.411 12.8757 13.513 13.0622 13.4004 13.5777L12.102 19.6793C11.7606 21.2575 12.2867 22 13.5236 22C14.4824 22 15.5961 21.5566 16.1011 20.9479L16.2559 20.216C15.904 20.5256 15.3903 20.6488 15.049 20.6488C14.5651 20.6488 14.3892 20.3092 14.5141 19.711L16.2753 11.433ZM16.3984 7.7594C16.3984 8.22602 16.2131 8.67353 15.8831 9.00349C15.5532 9.33344 15.1056 9.5188 14.639 9.5188C14.1724 9.5188 13.7249 9.33344 13.3949 9.00349C13.065 8.67353 12.8796 8.22602 12.8796 7.7594C12.8796 7.29278 13.065 6.84527 13.3949 6.51532C13.7249 6.18536 14.1724 6 14.639 6C15.1056 6 15.5532 6.18536 15.8831 6.51532C16.2131 6.84527 16.3984 7.29278 16.3984 7.7594Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="info-content text-start">
                            <h6 class='font-semibold text-gunmetal text-lg mb-1'>
                                Your Security Payment for Shop 106 is in Review
                            </h6>
                            <p class='text-sm'>
                                We’re currently verifying your payment details — you’ll be notified once the reservation is confirmed.
                            </p>
                        </div>
                    </div>`,
                showCloseButton: true,
                showConfirmButton: false,
                // timer: 5000,
                customClass: 'swal-wide'
            }).then( (result)=> {
                $('#deposit_security_money').addClass('hidden').removeClass('show');
            });
        });

    </script>
    @endpush
</x-app-layout>
