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
            {{ __('My Purchases') }}
        </h4>
        <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse">
            
        </div>
    </div>

    <form class="property_search_form space-y-6">
        <div class="flex flex-wrap items-end justify-between gap-6">
            <div class="left">
                <div class="input-area relative">
                    <input type="text" name="s" class="w-full px-4 py-3 !pl-9 rounded-lg bg-white border focus:outline-none" placeholder="Search">
                    <span class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full border-none flex items-center justify-center pl-2">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:search"></iconify-icon>
                    </span>
                </div>
            </div>
            <div class="right max-w-4xl">
                <div class="flex flex-wrap items-end gap-6">

                    <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_200px] space-y-1">
                        <select class="w-full px-4 py-3 text-sm rounded-lg bg-white border border-[#E1E5EA] *:dark:bg-slate-700 focus:outline-0 cursor-pointer">
                            <option>{{ __('Select Property')}}</option>
                            <option value="">{{ __('Nur Super Market')}}</option>
                            <option value="">{{ __('NEN Market')}}</option>
                            <option value="">{{ __('Gulistan Complex')}}</option>
                            <option value="">{{ __('New Market')}}</option>
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

    <div  class="grid grid-cols-1 md:grid-cols-2 3xl:grid-cols-3 gap-6 items-start">

        <div id="shop-card-1" class="shop-item bg-white rounded-2xl overflow-hidden border border-slate-100">
            <div class="thumbnail relative">
                <a href="{{ route('buyer.purchase.shop-details') }}">
                    <img src="{{ asset('/images/pic1.png') }}" alt="101" class="min-h-[240px] xl:min-h-[290px] max-h-[350px] w-full object-cover bg-gray-100">
                </a>
            </div>
            <div class="space-y-5 px-4 py-5 xl:px-6">
                <div class="flex items-center justify-between gap-4 flex-wrap">
                    <h5 class="text-lg">
                        <span class="text-gray-500">
                            {{ __("Shop No.")}} <b class="font-bold text-black-500 text-2xl">101</b>
                        </span>
                    </h5>
                    <span class="inline-flex bg-green-100 text-green-600 text-sm px-4 py-1 rounded-3xl">
                        {{ __("Bought") }}
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
                <div class="finance_states">
                    <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                        <tbody>
                            <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-sm *:leading-4">
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
                <div class="my-6 flex gap-2 *:text-sm *:py-2 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
                    <a href="#proceed_payment_modal" data-popup="modal" class="text-white bg-themered hover:text-white hover:bg-gunmetal">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="hugeicons:credit-card-pos"></iconify-icon>
                        Proceed Payment
                    </a>
                </div>
                <div class="description line-clamp-2 text-sm">
                    This is well-designed shop offers a flexible layout, excellent frontage, and top visible - making it ideal for boutiques, salons, clinics, stores, or cafés.
                </div>
                <div class="flex items-start gap-4 justify-between">
                    <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                        <tbody>
                            <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-sm *:leading-4">
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
                            <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-sm *:leading-4">
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
                <div class="!mt-6 flex gap-2 *:text-sm *:py-2 *:px-2 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
                    <a href="{{ route('buyer.purchase.shop-details') }}" data-shop-id="1" class="shop-details-1 text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:eye"></iconify-icon>
                        Shop Details
                    </a>
                    <a href="#" class="text-gunmetal border border-slate-200 hover:bg-gunmetal hover:text-white">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:document-arrow-down"></iconify-icon>
                        Agreement Paaper
                    </a>
                </div>
            </div>
        </div>

        <div id="shop-card-2" class="shop-item bg-white rounded-2xl overflow-hidden border border-slate-100">
            <div class="thumbnail relative">
                <a href="{{ route('employee.shop-details') }}">
                    <img src="{{ asset('/images/pic1.png') }}" alt="101" class="min-h-[240px] xl:min-h-[290px] max-h-[350px] w-full object-cover bg-gray-100">
                </a>
            </div>
            <div class="space-y-5 px-4 py-5 xl:px-6">
                <div class="flex items-center justify-between gap-4 flex-wrap">
                    <h5 class="text-lg">
                        <span class="text-gray-500">
                            {{ __("Shop No.")}} <b class="font-bold text-black-500 text-2xl">101</b>
                        </span>
                    </h5>
                    <span class="inline-flex bg-violet-100 text-violet-600 text-sm px-4 py-1 rounded-3xl">
                        {{ __("Lease") }}
                    </span>
                </div>
                <div class="finance_states">
                    <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                        <tbody>
                            <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-sm *:leading-4">
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
                <div class="my-6 flex gap-2 *:text-sm *:py-2 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
                    <a href="#proceed_payment_modal" data-popup="modal" class="text-white bg-themered hover:text-white hover:bg-gunmetal">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="hugeicons:credit-card-pos"></iconify-icon>
                        Proceed Payment
                    </a>
                </div>
                <div class="description line-clamp-2 text-sm">
                    This is well-designed shop offers a flexible layout, excellent frontage, and top visible - making it ideal for boutiques, salons, clinics, stores, or cafés.
                </div>
                <div class="flex items-start gap-4 justify-between">
                    <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                        <tbody>
                            <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-sm *:leading-4">
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
                            <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-sm *:leading-4">
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
                <div class="!mt-6 flex gap-2 *:text-sm *:py-2 *:px-2 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
                    <a href="{{ route('buyer.purchase.shop-details') }}" data-shop-id="1" class="shop-details-1 text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:eye"></iconify-icon>
                        Shop Details
                    </a>
                    <a href="#" class="text-gunmetal border border-slate-200 hover:bg-gunmetal hover:text-white">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:document-arrow-down"></iconify-icon>
                        Agreement Paaper
                    </a>
                </div>
            </div>
        </div>

        <div id="shop-card-1" class="shop-item bg-white rounded-2xl overflow-hidden border border-slate-100">
            <div class="thumbnail relative">
                <a href="{{ route('employee.shop-details') }}">
                    <img src="{{ asset('/images/pic1.png') }}" alt="101" class="min-h-[240px] xl:min-h-[290px] max-h-[350px] w-full object-cover bg-gray-100">
                </a>
            </div>
            <div class="space-y-5 px-4 py-5 xl:px-6">
                <div class="flex items-center justify-between gap-4 flex-wrap">
                    <h5 class="text-lg">
                        <span class="text-gray-500">
                            {{ __("Shop No.")}} <b class="font-bold text-black-500 text-2xl">101</b>
                        </span>
                    </h5>
                    <span class="inline-flex bg-green-100 text-green-600 text-sm px-4 py-1 rounded-3xl">
                        {{ __("Bought") }}
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
                <div class="finance_states">
                    <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                        <tbody>
                            <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-sm *:leading-4">
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
                <div class="my-6 flex gap-2 *:text-sm *:py-2 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
                    <a href="#proceed_payment_modal" data-popup="modal" class="text-white bg-themered hover:text-white hover:bg-gunmetal">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="hugeicons:credit-card-pos"></iconify-icon>
                        Proceed Payment
                    </a>
                </div>
                <div class="description line-clamp-2 text-sm">
                    This is well-designed shop offers a flexible layout, excellent frontage, and top visible - making it ideal for boutiques, salons, clinics, stores, or cafés.
                </div>
                <div class="flex items-start gap-4 justify-between">
                    <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                        <tbody>
                            <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-sm *:leading-4">
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
                            <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-sm *:leading-4">
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
                <div class="!mt-6 flex gap-2 *:text-sm *:py-2 *:px-2 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
                    <a href="{{ route('buyer.purchase.shop-details') }}" data-shop-id="1" class="shop-details-1 text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:eye"></iconify-icon>
                        Shop Details
                    </a>
                    <a href="#" class="text-gunmetal border border-slate-200 hover:bg-gunmetal hover:text-white">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:document-arrow-down"></iconify-icon>
                        Agreement Paaper
                    </a>
                </div>
            </div>
        </div>

    </div>

    @push("modal")
    <div id="proceed_payment_modal" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
        <div class="modal-content bg-white w-full max-w-4xl mx-auto p-6 lg:p-8 xl:p-10 border border-slate-400 rounded-2xl relative">
            <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
            </button>
            <form id="multiStepForm" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-steps relative">
                    <div class="absolute right-2 top-2">
                        <svg viewBox="0 0 36 36" class="progress-circle w-12 h-12">
                            <circle class="progress-bg" cx="18" cy="18" r="16" />
                            <circle class="progress-bar" cx="18" cy="18" r="16" />
                            <text x="18" y="21" text-anchor="middle" fill="currentColor" font-size="10" class="step-count-placeholder">1/3</text>
                        </svg>
                    </div>

                    <!-- Step 1 -->
                    <fieldset class="step hidden" data-step="1">
                        <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4 mb-10">
                            <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                               <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.66797 15.9993C2.66797 8.65268 8.65464 2.66602 16.0013 2.66602C19.6541 2.66602 22.9707 4.14602 25.3824 6.53733L13.668 18.2518L10.7084 15.2922C10.3179 14.9017 9.68472 14.9017 9.2942 15.2922C8.90367 15.6828 8.90367 16.3159 9.2942 16.7065L12.9609 20.3731C13.3514 20.7636 13.9846 20.7636 14.3751 20.3731L26.6971 8.05108C28.3531 10.2727 29.3346 13.0246 29.3346 15.9993C29.3346 23.346 23.348 29.3327 16.0013 29.3327C8.65464 29.3327 2.66797 23.346 2.66797 15.9993Z" fill="#2B323B"/>
                                </svg>
                            </div>
                            <div class="">
                                <h2 class="text-xl font-semibold text-gray-900">
                                    Choose Payment Type
                                </h2>
                                <p class="text-sm text-gray-500 font-light">
                                    Select which installment or balance you'd like to pay.
                                </p>
                            </div>
                        </div>


                        <div class="field-body grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                            
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Choose Your Payment Type')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="payment_type" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg">
                                    <option value="">1st Installment</option>
                                    <option value="">2nd Installment</option>
                                    <option value="">3rd Installment</option>
                                </select>
                                <x-input-error :messages="$errors->get('payment_type')" class="mt-1"/>
                            </div>
                            
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Options to Pay In')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="payment_scheme" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg">
                                    <option value="">Full Payment</option>
                                    <option value="">Partial Payment</option>
                                </select>
                                <x-input-error :messages="$errors->get('payment_scheme')" class="mt-1"/>
                            </div>

                        </div>
                        <div class="info-wrapper space-y-4">
                            <div class="info">
                                <div class="mx-auto w-[200px] bg-[#F0F2F4] text-center py-4 rounded-xl space-y-1 flex flex-col justify-center">
                                    <div class="text-[#607085] text-sm">
                                        {{ __('Amount') }}
                                    </div>
                                    <div class="text-lg font-semibold text-gunmetal">
                                        {{ __('৳75,000') }}
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-4 justify-center *:flex-[0_0_200px] *:bg-[#F8F9FB] *:text-center *:py-4 *:rounded-xl *:space-y-1 *:flex *:flex-col *:justify-center">
                                <div>
                                    <div class="text-[#607085] text-sm">
                                        {{ __('Shop No.') }}
                                    </div>
                                    <div class="text-lg font-semibold text-gunmetal">
                                        {{ __('101') }}
                                    </div>
                                </div>
                                <div>
                                    <div class="text-[#607085] text-sm">
                                        {{ __('Agreement ID') }}
                                    </div>
                                    <div class="text-lg font-semibold text-gunmetal">
                                        {{ __('AG-20250601-001') }}
                                    </div>
                                </div>
                                <div>
                                    <div class="text-[#607085] text-sm">
                                        {{ __('Due Date') }}
                                    </div>
                                    <div class="text-lg font-semibold text-gunmetal">
                                        {{ __('2025-07-15') }}
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mt-10 flex justify-between *:flex *:items-center *:justify-center *:gap-3 *:rounded-lg *:px-6 *:py-3 *:transition-all">
                            <button type="button" class="next-step bg-red-600 text-white hover:bg-red-700 ml-auto">
                                {{ __('Proceed to Pay')}}
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </fieldset>

                    <!-- Step 2 -->
                    <fieldset class="step space-y-6 hidden" data-step="2">
                        <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                            <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28 27.0997C28 27.592 27.592 28.0003 27.1 28.0003H4.9C4.408 28.0003 4 27.592 4 27.0997C4 26.6075 4.408 26.1992 4.9 26.1992H27.1C27.592 26.1992 28 26.6075 28 27.0997Z" fill="#2B323B"/>
                                    <path d="M20.0673 7.01377L7.17934 19.9093C6.68734 20.4016 5.89534 20.4016 5.41534 19.9093H5.40334C3.73534 18.2283 3.73534 15.5147 5.40334 13.8458L13.9833 5.26074C15.6633 3.57975 18.3753 3.57975 20.0553 5.26074C20.5473 5.72901 20.5473 6.53348 20.0673 7.01377Z" fill="#2B323B"/>
                                    <path d="M26.5833 11.7784L22.9233 8.11629C22.4313 7.624 21.6393 7.624 21.1593 8.11629L8.27134 21.0118C7.77934 21.4921 7.77934 22.2846 8.27134 22.7769L11.9313 26.451C13.6113 28.12 16.3233 28.12 18.0033 26.451L26.5713 17.866C28.2753 16.185 28.2753 13.4594 26.5833 11.7784ZM16.9113 22.6208L15.4593 24.0856C15.1593 24.3858 14.6673 24.3858 14.3553 24.0856C14.0553 23.7855 14.0553 23.2932 14.3553 22.981L15.8193 21.5161C16.1073 21.228 16.6113 21.228 16.9113 21.5161C17.2113 21.8163 17.2113 22.3326 16.9113 22.6208ZM21.6753 17.854L18.7473 20.7957C18.4473 21.0839 17.9553 21.0839 17.6433 20.7957C17.3433 20.4955 17.3433 20.0033 17.6433 19.6911L20.5833 16.7493C20.8713 16.4612 21.3753 16.4612 21.6753 16.7493C21.9753 17.0615 21.9753 17.5538 21.6753 17.854Z" fill="#2B323B"/>
                                </svg>
                            </div>
                            <div class="">
                                <h2 class="text-xl font-semibold text-gray-900">
                                    Select Payment Method
                                </h2>
                                <p class="text-sm text-gray-500 font-light">
                                    Pick your preferred payment gateway or transfer option.
                                </p>
                            </div>
                        </div>

                        <div class="form-body grid gap-6 grid-cols-1 md:grid-cols-2 my-10">
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Payment Amount')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="text" inputmode="numeric" name="payment_amount" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('101')}}" required />
                                <x-input-error :messages="$errors->get('payment_amount')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Choose Payment Method')}}
                                </label>
                                <select name="mode_of_payment" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg">
                                    <option value="">Cash</option>
                                    <option value="">Bank Transfer</option>
                                    <option value="">Mobile Banking</option>
                                    <option value="">Cheque</option>
                                </select>
                                <x-input-error :messages="$errors->get('mode_of_payment')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Bank Name')}}
                                </label>
                                <input type="text" name="bank_name" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('City Bank Ltd.')}}" />
                                <x-input-error :messages="$errors->get('bank_name')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('References/Txn ID')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="text" name="payment_references" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('TXN-20250601-001')}}" required />
                                <x-input-error :messages="$errors->get('payment_references')" class="mt-1"/>
                            </div>
                        </div>


                        <div class="mt-6 flex justify-between *:flex *:items-center *:justify-center *:gap-3 *:rounded-lg  *:px-6 *:py-3">
                            <button type="button" class="prev-step bg-gray-300 text-gray-800">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.4994 6.07807C16.9677 3.07158 13.839 1 10.25 1C5.16249 1 0.99999 5.1625 0.99999 10.25C0.99999 15.3375 5.16249 19.5 10.25 19.5C13.839 19.5 16.9677 17.4284 18.4994 14.4219" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M19.4994 10.25H5.49939L9.49939 14.25M9.49939 6.25L7.99939 7.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{ __('Back')}}
                            </button>
                            <button type="button" class="next-step bg-red-600 text-white">
                                {{ __('Continue Sale Request')}}
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </fieldset>

                    <!-- Step 3 -->
                    <fieldset class="step space-y-6 hidden" data-step="3">
                        <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                            <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28 27.0997C28 27.592 27.592 28.0003 27.1 28.0003H4.9C4.408 28.0003 4 27.592 4 27.0997C4 26.6075 4.408 26.1992 4.9 26.1992H27.1C27.592 26.1992 28 26.6075 28 27.0997Z" fill="#2B323B"/>
                                    <path d="M20.0713 7.01377L7.18325 19.9093C6.69125 20.4016 5.89925 20.4016 5.41925 19.9093H5.40725C3.73925 18.2283 3.73925 15.5147 5.40725 13.8458L13.9872 5.26074C15.6672 3.57975 18.3793 3.57975 20.0593 5.26074C20.5513 5.72901 20.5513 6.53348 20.0713 7.01377Z" fill="#2B323B"/>
                                    <path d="M26.5873 11.7784L22.9273 8.11629C22.4353 7.624 21.6433 7.624 21.1633 8.11629L8.27525 21.0118C7.78325 21.4921 7.78325 22.2846 8.27525 22.7769L11.9352 26.451C13.6152 28.12 16.3273 28.12 18.0073 26.451L26.5753 17.866C28.2793 16.185 28.2793 13.4594 26.5873 11.7784ZM16.9153 22.6208L15.4633 24.0856C15.1633 24.3858 14.6713 24.3858 14.3593 24.0856C14.0593 23.7855 14.0593 23.2932 14.3593 22.981L15.8233 21.5161C16.1113 21.228 16.6153 21.228 16.9153 21.5161C17.2153 21.8163 17.2153 22.3326 16.9153 22.6208ZM21.6793 17.854L18.7513 20.7957C18.4513 21.0839 17.9593 21.0839 17.6473 20.7957C17.3473 20.4955 17.3473 20.0033 17.6473 19.6911L20.5873 16.7493C20.8753 16.4612 21.3793 16.4612 21.6793 16.7493C21.9793 17.0615 21.9793 17.5538 21.6793 17.854Z" fill="#2B323B"/>
                                </svg>
                            </div>
                            <div class="">
                                <h2 class="text-xl font-semibold text-gray-900">
                                    {{ __('Confirm Payment Info.')}}
                                </h2>
                                <p class="text-sm text-gray-500 font-light">
                                    {{ __('Review the payment details carefully before proceeding.')}}
                                </p>
                            </div>
                        </div>

                        <div class="form-body max-w-[400px] mx-auto grid grid-cols-2 gap-3 *:bg-[#F8F9FB] *:text-center *:py-4 *:rounded-xl *:space-y-1 *:flex *:flex-col *:justify-center">
                            <div>
                                <div class="text-[#607085] text-sm">
                                    {{ __('Payment Amount') }}
                                </div>
                                <div class="text-lg font-semibold text-gunmetal">
                                    {{ __('৳75,000') }}
                                </div>
                            </div>
                            <div>
                                <div class="text-[#607085] text-sm">
                                    {{ __('Shop No.') }}
                                </div>
                                <div class="text-lg font-semibold text-gunmetal">
                                    {{ __('101') }}
                                </div>
                            </div>
                            <div>
                                <div class="text-[#607085] text-sm">
                                    {{ __('Buyer') }}
                                </div>
                                <div class="text-lg font-semibold text-gunmetal">
                                    {{ __('David Warner') }}
                                </div>
                            </div>
                            <div>
                                <div class="text-[#607085] text-sm">
                                    {{ __('Buyer ID') }}
                                </div>
                                <div class="text-lg font-semibold text-gunmetal">
                                    {{ __('BUY-10523') }}
                                </div>
                            </div>

                        </div>

                        <div class="mt-6 flex justify-between *:flex *:items-center *:justify-center *:gap-3 *:rounded-lg  *:px-6 *:py-3">
                            <button type="button" class="prev-step bg-gray-300 text-gray-800">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.4994 6.07807C16.9677 3.07158 13.839 1 10.25 1C5.16249 1 0.99999 5.1625 0.99999 10.25C0.99999 15.3375 5.16249 19.5 10.25 19.5C13.839 19.5 16.9677 17.4284 18.4994 14.4219" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M19.4994 10.25H5.49939L9.49939 14.25M9.49939 6.25L7.99939 7.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{ __('Back') }}
                            </button>
                            <button type="submit" class="bg-red-600 text-white finish-step">{{ __('Confirm & Submit')}}</button>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
    @endpush

    @push("scripts")
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        .progress-circle {
            transform: rotate(-90deg);
        }
        .progress-bg {
            fill: none;
            stroke: #e5e7eb; /* gray-200 */
            stroke-width: 3.5;
        }
        .progress-bar {
            fill: none;
            stroke: #dc2626; /* red-600 */
            stroke-width: 3.5;
            stroke-linecap: round;
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            transition: stroke-dashoffset 0.4s ease;
        }
        .progress-circle text {
            transform: rotate(90deg);
            transform-origin: center;
        }
        input:invalid,
        input.border-red-500,
        select:invalid,
        select.border-red-500,
        textarea:invalid {
            border-color: #e3342f;
        }
        .step button[disabled] {
            opacity: .5;
        }

        .remove-installment {
            background: red;
            border-radius: 9999px;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .swal-wide {
            padding: 0;
            border-radius: 24px;
        }
        .swal-wide .swal2-html-container {
            padding: 40px;
        }
        :root {
            --swal2-width: 40em;
        }
    </style>
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

    </script>

    <script>
         // MultiStepForm Script
        $(document).ready(function () {
            const $form = $('#multiStepForm');
            const $steps = $form.find('.step');
            const $nextButtons = $form.find('.next-step');
            const $prevButtons = $form.find('.prev-step');
            const $progressBar = $form.find('.progress-bar');
            const $progressText = $('text.step-count-placeholder');
            const totalSteps = $steps.length;
            let currentStep = 1;

            // SVG Progress Bar
            const radius = $progressBar[0].r.baseVal.value;
            const circumference = 2 * Math.PI * radius;
            $progressBar.css({
                strokeDasharray: circumference,
                strokeDashoffset: circumference
            });

            function setProgress(step) {
                const progressRatio = step / totalSteps;
                const offset = circumference * (1 - progressRatio);
                $progressBar.css('strokeDashoffset', offset);
            }

            function validateStep(step) {
                const $currentStep = $steps.eq(step - 1);
                const $requiredFields = $currentStep.find('input[required], select[required], textarea[required]');
                let isValid = true;

                $requiredFields.each(function () {
                    const $field = $(this);
                    const value = $field.val();

                    if (
                        !value ||
                        $.trim(value) === '' ||
                        ($field.is('select') && $field.prop('selectedIndex') === 0)
                    ) {
                        isValid = false;
                        return false; // break loop
                    }
                });

                return isValid;
            }

            function showValidationErrors(step) {
                const $currentStep = $steps.eq(step - 1);
                const $requiredFields = $currentStep.find('input[required], select[required], textarea[required]');
                let allValid = true;

                $requiredFields.each(function () {
                    const $field = $(this);
                    const value = $field.val();
                    const isInvalid =
                        !value ||
                        $.trim(value) === '' ||
                        ($field.is('select') && $field.prop('selectedIndex') === 0);

                    if (isInvalid || !$field[0].checkValidity()) {
                        $field.addClass('border-red-500');
                        $field[0].reportValidity?.();
                        allValid = false;
                    } else {
                        $field.removeClass('border-red-500');
                    }
                });

                return allValid;
            }

            function toggleNextButton() {
                const isValid = validateStep(currentStep);
                const $currentNextBtn = $steps.eq(currentStep - 1).find('.next-step');
                $currentNextBtn.prop('disabled', !isValid);
            }

            function showStep(step) {
                $steps.addClass('hidden').eq(step - 1).removeClass('hidden');
                $progressText.text(`${step}/${totalSteps}`);
                setProgress(step);
                toggleNextButton();
            }

            // Prev button
            $prevButtons.on('click', function () {
                if (currentStep > 1) {
                    currentStep--;
                    showStep(currentStep);
                }
            });

            // Next button
            $nextButtons.on('click', function () {
                if (currentStep < totalSteps) {
                    const isValid = showValidationErrors(currentStep);
                    if (isValid) {
                        currentStep++;
                        showStep(currentStep);
                    }
                }
            });

            // Realtime validation for all fields
            $steps.each(function () {
                const $step = $(this);
                const $requiredFields = $step.find('input[required], select[required], textarea[required]');

                $requiredFields.on('input change', function () {
                    toggleNextButton();
                });
            });

            showStep(currentStep);
        });
    </script>

    <script>
        $("#multiStepForm").submit(function(e){
            e.preventDefault();
           
            Swal.fire({
                html: `<div class="flex items-start gap-4 bg-[#F0FDF5] border border-[#BBF7D1] p-6 rounded-xl">
                    <div class="icon">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 14C0 6.26801 6.26801 0 14 0C21.732 0 28 6.26801 28 14C28 21.732 21.732 28 14 28C6.26801 28 0 21.732 0 14Z" fill="#16A34A"/>
                            <path d="M16.2753 11.433L12.2462 11.938L12.102 12.6066L12.8937 12.7526C13.411 12.8757 13.513 13.0622 13.4004 13.5777L12.102 19.6793C11.7606 21.2575 12.2867 22 13.5236 22C14.4824 22 15.5961 21.5566 16.1011 20.9479L16.2559 20.216C15.904 20.5256 15.3903 20.6488 15.049 20.6488C14.5651 20.6488 14.3892 20.3092 14.5141 19.711L16.2753 11.433ZM16.3984 7.7594C16.3984 8.22602 16.2131 8.67353 15.8831 9.00349C15.5532 9.33344 15.1056 9.5188 14.639 9.5188C14.1724 9.5188 13.7249 9.33344 13.3949 9.00349C13.065 8.67353 12.8796 8.22602 12.8796 7.7594C12.8796 7.29278 13.065 6.84527 13.3949 6.51532C13.7249 6.18536 14.1724 6 14.639 6C15.1056 6 15.5532 6.18536 15.8831 6.51532C16.2131 6.84527 16.3984 7.29278 16.3984 7.7594Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="info-content text-start">
                        <h6 class='font-semibold text-gunmetal text-lg mb-1'>
                            Your 3rd Installment of ৳75,000 for Shop 101 has been received successfully!
                        </h6>
                        <p class='text-sm'>
                           A receipt has been sent to your email. You can view payment details and download your invoice anytime from your dashboard.
                        </p>
                    </div>
                </div>`,
                showCloseButton: false,
                showConfirmButton: false,
                // timer: 5000,
                customClass: 'swal-wide'
            }).then( (result)=> {
                $('#proceed_payment_modal').addClass('hidden').removeClass('show');                
            });
        });
    </script>
    @endpush
</x-app-layout>