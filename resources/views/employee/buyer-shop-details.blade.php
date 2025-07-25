<x-app-layout>
    <div class="shop_details_wrapper">
        <div class="grid grid-cols-1 2xl:grid-cols-2 gap-6">
            <div class="main space-y-6">
                <div class="thumbnail rounded-xl overflow-hidden">
                    <img src="{{ asset('/images/pic1.png')}}" class="w-full max-h-[560px] object-cover object-center" alt="">
                </div>

                <div class="feature bg-white p-4 2xl:p-6 rounded-xl border border-slate-100">
                    <h4 class="text-lg 2xl:text-xl text-black-500 font-semibold mb-2">
                        Features & Utilities
                    </h4>
                    <div class="feature grid grid-cols-2 md:grid-cols-3 gap-4 *:text-center *:py-8 *:rounded-xl *:space-y-1">
                        <div class="feature_item bg-[#ECFDF5]">
                            <div class="text-[#607085] text-sm">
                                {{ __('Water Supply')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('Common Line')}}
                            </div>
                        </div>
                        <div class="feature_item bg-[#FFF1F2]">
                            <div class="text-[#607085] text-sm">
                                {{ __('Power Backup')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('Available')}}
                            </div>
                        </div>
                        <div class="feature_item bg-[#ECFDF5]">
                            <div class="text-[#607085] text-sm">
                                {{ __('Interior')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('Furnished')}}
                            </div>
                        </div>
                        <div class="feature_item bg-[#FFF1F2]">
                            <div class="text-[#607085] text-sm">
                                {{ __('Electricity Meter')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('Separate')}}
                            </div>
                        </div>
                        <div class="feature_item bg-[#ECFDF5]">
                            <div class="text-[#607085] text-sm">
                                {{ __('WiFi')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('Yes')}}
                            </div>
                        </div>
                        <div class="feature_item bg-[#FFF1F2]">
                            <div class="text-[#607085] text-sm">
                                {{ __('Fire Exit Access')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('Within 20 ft')}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-4 2xl:p-6 rounded-xl border border-slate-100">
                    <h4 class="text-lg 2xl:text-xl text-black-500 font-semibold mb-2">
                        Pricing & Financials
                    </h4>
                    <div class="progresswrapper flex items-center text-sm gap-4 mb-4">
                        <div class="progressbar flex-1 h-2 bg-slate-100 rounded-2xl overflow-hidden">
                            <div class="h-full bg-[#FFB7A0] rounded-2xl overflow-hidden" style="width: 65%;"></div>
                        </div>
                        <div class="label">
                            2/3 Done
                        </div>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 *:bg-[#F8F9FB] *:text-center *:py-4 *:rounded-xl *:space-y-1 *:flex *:flex-col *:justify-center">
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Total Price')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('৳8,00,000')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Amount Paid')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('৳3,50,000')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Booking Advance')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('৳3,50,000')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Next Installment')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('৳75,000')}}
                            </div>
                            <p class="small text-xs !-mt-1">
                                {{ __("2025-06-15") }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-4 flex *:flex-1 gap-3 md:gap-5">
                        <a href="#" class="text-sm p-2 rounded-md font-semibold inline-flex items-center justify-center gap-2 transition-all border border-[#FFF0F1] text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 19C15.4762 19 18.2501 17.2405 20.1809 14.1952C20.9397 13.0024 20.9397 10.9976 20.1809 9.80483C18.2501 6.75952 15.4762 5 12.5 5C9.52376 5 6.74987 6.75952 4.81911 9.80483C4.0603 10.9976 4.0603 13.0024 4.81911 14.1952C6.74987 17.2405 9.52376 19 12.5 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.5 12C15.5 13.6592 14.1592 15 12.5 15C10.8408 15 9.5 13.6592 9.5 12C9.5 10.3408 10.8408 9 12.5 9C14.1592 9 15.5 10.3408 15.5 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Installment Timeline
                        </a>
                        <a href="#collect_payment_modal" data-popup="modal" class="text-sm p-2 rounded-md font-semibold inline-flex items-center justify-center gap-2 transition-all border border-themered text-themered bg-white] hover:bg-themered hover:text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.34375 15.2025L15.2025 5.34375" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.2578 17.1775L12.2478 16.1875" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.4766 14.96L15.4483 12.9883" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5.07105 10.546L10.549 5.06797C12.298 3.31897 13.1725 3.31072 14.905 5.04322L18.9558 9.09397C20.6883 10.8265 20.68 11.701 18.931 13.45L13.453 18.928C11.704 20.677 10.8295 20.6852 9.09705 18.9527L5.0463 14.902C3.3138 13.1695 3.3138 12.3032 5.07105 10.546Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.75 20.25H20.25" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Collect Payment
                        </a>
                    </div>
                </div>

                <div class="buyer sm:flex gap-4 rounded-xl overflow-hidden border border-slate-100 bg-white">
                    <div class="thumb flex-[0_0_250px] min-h-[250px] bg-cover bg-center overflow-hidden" style="background-image: url({{ asset('/images/buyer/1.png') }});"></div>
                    <div class="info sm:flex-1 p-4 relative">
                        <h2 class="text-2xl lg:text-3xl font-bold text-black-500">
                            <a href="">
                                David Warner
                            </a>
                        </h2>
                        <p class="text-slate-400">
                            {{ __("Since ") }} {{ __('Jan 12, 2025') }}
                        </p>
                        <div class="barcode mt-4">
                            <img src="{{ asset('/images/buyer/barcode.png') }}" alt="David Warner">
                        </div>
                        <div class="total-purchased text-center absolute right-5 top-5">
                            <h6 class="text-lg xl:text-2xl font-bold text-gunmetal leading-normal">
                                5
                            </h6>
                            <p class="text-xs text-[#8997A9]">
                                Purchased
                            </p>
                        </div>
                        <ul class="mt-4 space-y-2">
                            <li class="text-sm">
                                <label class="text-gray-500">Email :</label>
                                <span class="value inline-block font-bold text-black-500">
                                    david.warner@gmail.com
                                </span>
                            </li>
                            <li class="text-sm">
                                <label class="text-gray-500">Phone :</label>
                                <span class="value inline-block font-bold text-black-500">
                                    0123 456 789
                                </span>
                            </li>
                            <li class="text-sm">
                                <label class="text-gray-500">Address :</label>
                                <span class="value inline-block font-bold text-black-500">
                                    19A Orchid Rd, Gulshan, Dhaka.
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white p-4 2xl:p-6 rounded-xl border border-slate-100">
                    <h4 class="text-lg 2xl:text-xl text-black-500 font-semibold mb-2">
                        Installment Information
                    </h4>
                    <div class="overflow-x-auto">
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
                                <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100">
                                    <td class="text-center">
                                        #1
                                    </td>
                                    <td class="text-end">
                                        1,23,000.00
                                    </td>
                                    <td class="text-end">
                                        1,05,000.00
                                    </td>
                                    <td class="text-end">
                                        18,000.00
                                    </td>
                                    <td>
                                        Installment Remarks.
                                    </td>
                                    <td class="text-center">
                                        12/12/2025
                                    </td>
                                </tr>
                                <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100">
                                    <td class="text-center">
                                        #1
                                    </td>
                                    <td class="text-end">
                                        1,23,000.00
                                    </td>
                                    <td class="text-end">
                                        1,05,000.00
                                    </td>
                                    <td class="text-end">
                                        18,000.00
                                    </td>
                                    <td>
                                        Installment Remarks.
                                    </td>
                                    <td class="text-center">
                                        12/12/2025
                                    </td>
                                </tr>
                                <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100">
                                    <td class="text-center">
                                        #1
                                    </td>
                                    <td class="text-end">
                                        1,23,000.00
                                    </td>
                                    <td class="text-end">
                                        1,05,000.00
                                    </td>
                                    <td class="text-end">
                                        18,000.00
                                    </td>
                                    <td>
                                        Installment Remarks.
                                    </td>
                                    <td class="text-center">
                                        12/12/2025
                                    </td>
                                </tr>
                                <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100">
                                    <td class="text-center">
                                        #1
                                    </td>
                                    <td class="text-end">
                                        1,23,000.00
                                    </td>
                                    <td class="text-end">
                                        1,05,000.00
                                    </td>
                                    <td class="text-end">
                                        18,000.00
                                    </td>
                                    <td>
                                        Installment Remarks.
                                    </td>
                                    <td class="text-center">
                                        12/12/2025
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-white p-4 2xl:p-6 rounded-xl border border-slate-100">
                    <h4 class="text-lg 2xl:text-xl text-black-500 font-semibold mb-2">
                        Location & Mapping
                    </h4>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-5 *:bg-[#F8F9FB] *:text-center *:py-4 *:rounded-xl *:space-y-1 *:flex *:flex-col *:justify-center">
                        <div class="md:col-span-2">
                            <div class="text-[#607085] text-sm">
                                {{ __('Address Line 1')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('19A Orchid Rd, Gulshan, Dhaka.')}}
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <div class="text-[#607085] text-sm">
                                {{ __('Address Line 2')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('19A Orchid Rd, Gulshan, Dhaka.')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('City')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('Dhaka City')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('State')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('Dhaka')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Zip Code')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('1212')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Country')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('Bangladesh')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quick_sidebar space-y-6">
                <div class="widget rounded-2xl border border-slate-100 bg-white p-6 xl:p-8">
                    <h4 class="text-lg text-black-500 font-semibold mb-2">
                        {{ __("Shop Overview") }}
                    </h6>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 *:bg-[#F8F9FB] *:text-center *:py-4 *:rounded-xl *:space-y-1 *:flex *:flex-col *:justify-center">
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Shop ID')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('৳8,00,000')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Shop Name')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('101')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Status')}}
                            </div>
                            <div>
                                <span class="bg-green-100 text-green-500 font-semibold inline-block px-4 py-1 text-sm rounded-2xl">
                                    Sold
                                </span>
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Floor Level')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('1st')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Block')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('A')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Facing')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('South Facing')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Area')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('1980 sq. ft')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Length')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('55 ft')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Width')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('36 ft')}}
                            </div>
                        </div>
                        <div class="md:col-span-3">
                            <div class="text-[#607085] text-sm">
                                {{ __('Property Name')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('Nur Super Market')}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="widget rounded-2xl border border-slate-100 bg-white p-6 xl:p-8">
                    <h6 class="text-lg text-black-500 font-semibold mb-2">
                        {{ __("Availability & Permissions") }}
                    </h6>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-3 space-y-4 *:flex *:items-center *:gap-4 *:justify-between *:p-4 xl:*:px-6 xl:*:py-5 *:rounded-lg *:border">

                            <div class="hover:bg-gray-50">
                                <div>
                                    <h4 class="font-semibold text-sm text-gray-800">
                                        {{ __("Shop Visibility") }}
                                    </h4>
                                    <p class="text-sm text-gray-500">
                                        {{ __("Control whether this shop is visible to buyers on the frontend listings.") }}
                                    </p>
                                </div>
                                <label for="enable_shop_visibility" class="cursor-pointer relative">
                                    <input type="checkbox" id="enable_shop_visibility" name="enable_shop_visibility" class="sr-only peer" checked>
                                    <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                    <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                                </label>
                            </div>

                            <div class="hover:bg-gray-50">
                                <div>
                                    <h4 class="font-semibold text-sm text-gray-800">
                                        {{ __("Reservation Allowed") }}
                                    </h4>
                                    <p class="text-sm text-gray-500">
                                        {{ __("Enable agents to reserve this shop through the platform before final purchase.") }}
                                    </p>
                                </div>
                                <label for="enable_reservation_is_allow" class="cursor-pointer relative">
                                    <input type="checkbox" id="enable_reservation_is_allow" name="reservation_allow" class="sr-only peer" checked>
                                    <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                    <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                                </label>
                            </div>
                            <div class="hover:bg-gray-50">
                                <div>
                                    <h4 class="font-semibold text-sm text-gray-800">
                                        {{ __("Can Buyers Submit Offer?") }}
                                    </h4>
                                    <p class="text-sm text-gray-500">
                                        {{ __("Allow buyers to directly place custom offers for this shop instead of fixed pricing only.") }}
                                    </p>
                                </div>
                                <label for="buyer_can_submit_offer" class="cursor-pointer relative">
                                    <input type="checkbox" id="buyer_can_submit_offer" name="buyer_can_submit_offer" class="sr-only peer">
                                    <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                    <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 items-center gap-6">
                    <div class="space-y-6">
                        <div class="widget rounded-2xl border border-slate-100 bg-white p-6 xl:p-8">
                            <h6 class="text-lg 2xl:text-xl text-black-500 font-semibold mb-2">
                                {{ __("Agreement & Documents") }}
                            </h6>
                            <div class="overflow-auto">
                                <table class="table w-full border-separate [&_td]:py-3 [&_td]:border-b [&_td]:border-b-slate-100 [&_td]:align-middle">
                                    <tbody>
                                        <tr>
                                            <td class="text-ash whitespace-nowrap">
                                                {{ __("Agreement Doc :")}}
                                            </td>
                                            <td class="text-gunmetal font-semibold hover:text-themered">
                                                <a href="">View Document</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-ash whitespace-nowrap">
                                                {{ __("NID Copy :")}}
                                            </td>
                                            <td class=" text-gunmetal font-semibold hover:text-themered">
                                                <a href="#">
                                                    View Document
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-ash whitespace-nowrap">
                                                {{ __("Utility Docs. :")}}
                                            </td>
                                            <td class=" text-gunmetal font-semibold hover:text-themered">
                                                <a href="#">
                                                    View Document
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="widget rounded-2xl border border-slate-100 bg-white p-6 xl:p-8">
                            <h6 class="text-lg 2xl:text-xl text-black-500 font-semibold mb-2">
                                {{ __("Meta & Timestamps") }}
                            </h6>
                            <div class="overflow-auto">
                                <table class="table w-full border-separate [&_td]:py-3 [&_td]:border-b [&_td]:border-b-slate-100 [&_td]:align-middle">
                                    <tbody>
                                        <tr>
                                            <td class="text-ash whitespace-nowrap">
                                                {{ __("Created At  :")}}
                                            </td>
                                            <td class=" text-gunmetal font-semibold">
                                                2025-06-15<small>18:56:35</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-ash whitespace-nowrap">
                                                {{ __("Last Updated  :")}}
                                            </td>
                                            <td class=" text-gunmetal font-semibold">
                                                2025-06-15<small>18:56:35</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-ash whitespace-nowrap">
                                                {{ __("Updated By  :")}}
                                            </td>
                                            <td class=" text-gunmetal font-semibold">
                                                Jasmin Ara
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="widget rounded-2xl border border-slate-100 bg-white p-6 xl:p-8">
                            <h6 class="text-lg 2xl:text-xl text-black-500 font-semibold mb-2">
                                {{ __("Shop Timeline") }}
                            </h6>
                            <div class="overflow-auto">
                                <table class="table w-full border-separate [&_td]:py-3 [&_td]:border-b [&_td]:border-b-slate-100 [&_td]:align-middle">
                                    <tbody>
                                        <tr>
                                            <td class="text-ash whitespace-nowrap">
                                                {{ __("2025-06-15")}}
                                            </td>
                                            <td class=" text-gunmetal font-semibold">
                                                Reservation Submitted
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-ash whitespace-nowrap">
                                                {{ __("2025-06-15")}}
                                            </td>
                                            <td class=" text-gunmetal font-semibold">
                                                Booking Advance Paid
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-ash whitespace-nowrap">
                                                {{ __("2025-06-15")}}
                                            </td>
                                            <td class=" text-gunmetal font-semibold">
                                                Purchase Agreement
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-ash whitespace-nowrap">
                                                {{ __("2025-06-15")}}
                                            </td>
                                            <td class=" text-gunmetal font-semibold">
                                                First Installment Send
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="approved_agent lg:row-span-2 text-center">
                        <img src="{{ asset('images/buyer.png') }}" class="rounded-full w-40 h-40 mx-auto" alt="{{ __('James Milner') }}">
                        <div class="my-3 space-y-1">
                            <h5 class="font-body text-lg text-black-500 font-semibold">
                                {{ __('James Milner') }}
                            </h5>
                            <p>
                                <span class="inline-flex items-center gap-1 py-2 px-3 rounded-3xl bg-green-100 text-green-600 text-xs font-medium">
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

                        <div class="bg-green-100 rounded-xl py-10 text-center mt-6">
                            <p class="text-sm">
                                Agent's Commission Rate <br> <span class="font-semibold text-gunmetal text-lg">10%</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    @push("modal")
    <!-- Payment Collection Modal -->
    <div id="collect_payment_modal" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
         <div class="modal-content bg-white w-full max-w-4xl mx-auto p-6 lg:p-8 xl:p-10 border border-slate-400 rounded-2xl relative">
            <form method="post" id="collect_payment_details" class="space-y-8">
                <div class="modal-header">

                    <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                        <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 20.3238C21 20.693 20.694 20.9992 20.325 20.9992H3.675C3.306 20.9992 3 20.693 3 20.3238C3 19.9546 3.306 19.6484 3.675 19.6484H20.325C20.694 19.6484 21 19.9546 21 20.3238Z" fill="#2B323B"/>
                                <path d="M15.0495 5.26032L5.38353 14.932C5.01453 15.3012 4.42053 15.3012 4.06053 14.932H4.05153C2.80053 13.6713 2.80053 11.6361 4.05153 10.3843L10.4865 3.94555C11.7465 2.68482 13.7805 2.68482 15.0405 3.94555C15.4095 4.29676 15.4095 4.90011 15.0495 5.26032Z" fill="#2B323B"/>
                                <path d="M19.9365 8.83407L17.1915 6.08746C16.8225 5.71824 16.2285 5.71824 15.8685 6.08746L6.20253 15.7591C5.83353 16.1193 5.83353 16.7137 6.20253 17.0829L8.94753 19.8385C10.2075 21.0902 12.2415 21.0902 13.5015 19.8385L19.9275 13.3997C21.2055 12.139 21.2055 10.0948 19.9365 8.83407ZM12.6825 16.9658L11.5935 18.0645C11.3685 18.2896 10.9995 18.2896 10.7655 18.0645C10.5405 17.8393 10.5405 17.4701 10.7655 17.236L11.8635 16.1373C12.0795 15.9212 12.4575 15.9212 12.6825 16.1373C12.9075 16.3625 12.9075 16.7497 12.6825 16.9658ZM16.2555 13.3907L14.0595 15.597C13.8345 15.8132 13.4655 15.8132 13.2315 15.597C13.0065 15.3719 13.0065 15.0027 13.2315 14.7685L15.4365 12.5623C15.6525 12.3461 16.0305 12.3461 16.2555 12.5623C16.4805 12.7964 16.4805 13.1656 16.2555 13.3907Z" fill="#2B323B"/>
                            </svg>
                        </div>
                        <div class="">
                            <h2 class="text-xl font-semibold text-gray-900">
                                Enter Payment Details
                            </h2>
                            <p class="text-sm text-gray-500 font-light">
                                Provide complete info to record this payment correctly.
                            </p>
                        </div>
                    </div>
                    <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                        <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="form-body grid gap-4 grid-cols-1 md:grid-cols-2 my-10">
                        <div class="field-item space-y-2 md:col-span-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Payment Type')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="payment_type" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="">Booking Money</option>
                                <option value="">Full Payment</option>
                                <option value="">Installment</option>
                                <option value="">Others</option>
                            </select>
                            <x-input-error :messages="$errors->get('payment_type')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Amount Received (৳)')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" inputmode="numeric" name="amount_received" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg text-end" placeholder="{{ __('75,000')}}" required />
                            <x-input-error :messages="$errors->get('amount_received')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Payment Date')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="date" name="payment_date" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('payment_date')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Mode of Payment')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="mode_of_payment" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="Cash">Cash</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="Mobile Banking">Mobile Banking</option>
                                <option value="Cheque">Cheque</option>
                            </select>
                            <x-input-error :messages="$errors->get('mode_of_payment')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Reference/Txn ID')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="txnId" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="TXN-20250601-001" required />
                            <x-input-error :messages="$errors->get('txnId')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Image or PDF File')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="file" name="attachment_1" class="text-sm w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-2 file:py-[5px] file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white file:font-light" required />
                            <x-input-error :messages="$errors->get('attachment_1')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Screenshot/Bank Deposit Slip/Cheque Copy')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="file" name="attachment_2" class="text-sm w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-2 file:py-[5px] file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white file:font-light" required />
                            <x-input-error :messages="$errors->get('attachment_2')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2 md:col-span-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Notes')}}<span class="text-xs text-[#8997A9]">(Any specific comments or remarks)</span> <span class="text-red-600">*</span>
                            </label>
                            <textarea name="notes" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"></textarea>
                            <x-input-error :messages="$errors->get('notes')" class="mt-1"/>
                        </div>
                        
                    </div>
                    <div class="text-end">
                        <button type="submit" data-modal-target="#ask_confirm_withdraw" class="bg-themered text-white inline-flex items-center justify-center gap-2 rounded-lg px-5 py-3 transition-all hover:bg-gunmetal hover:px-6">
                            {{ __('Collect Payment')}}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endpush

    @push("scripts")
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script>
            $(document).ready(function () {

                // Open modal
                $('[data-popup="modal"], [data-modal-target]').on('click', function (e) {
                    e.preventDefault();
                    const targetModal = $(this).attr('href') || $(this).data('modal-target');

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

    @endpush
</x-app-layout>
