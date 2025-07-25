<x-app-layout>
    <div class="shop_details_wrapper">
        <div class="grid grid-cols-1 2xl:grid-cols-2 gap-6">
            <div class="main space-y-6">
                <div class="thumbnail rounded-xl overflow-hidden">
                    <img src="{{ asset('/images/pic1.png')}}" class="w-full max-h-[560px] object-cover object-center" alt="">
                </div>                

                <div class="bg-white p-4 2xl:p-6 rounded-xl border border-slate-100">
                    <h4 class="text-lg 2xl:text-xl text-black-500 font-semibold mb-2">
                        Pricing & Financials
                    </h4>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 *:bg-[#F8F9FB] *:text-center *:py-4 *:rounded-xl *:space-y-1 *:flex *:flex-col *:justify-center">
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Minimum Sale Price')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('৳8,00,000')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Minimum Deposit')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('৳1,00,000')}}
                            </div>
                        </div>
                        <div class="">
                            <div class="text-[#607085] text-sm">
                                {{ __('Maximum Commission')}}
                            </div>
                            <div class="text-lg font-semibold text-gunmetal">
                                {{ __('15%')}}
                            </div>
                        </div>
                    </div>
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
            <div class="bg-white p-4 2xl:p-6 rounded-xl border border-slate-100 2xl:col-span-2">
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
                                    {{ __("Reservation Duration")}}
                                </th>
                                <th>
                                    {{ __("Applied On")}}
                                </th>
                                <th>
                                    {{ __("Sale Price")}}
                                </th>
                                <th>
                                    {{ __("Purpose")}}
                                </th>
                                <th>
                                    {{ __("Security Deposit Amount")}}
                                </th>
                                <th>
                                    {{ __("Commission")}}
                                </th>
                                <th>
                                    {{ __("Notes")}}
                                </th>
                                <th>
                                    {{ __("Status")}}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100">
                                <td>
                                    <a href="#">
                                        James Milner
                                    </a>
                                </td>
                                <td>
                                    21 days
                                </td>
                                <td>
                                    12/12/2025
                                </td>
                                <td>
                                    10,25,000.00
                                </td>
                                <td>
                                    Sale
                                </td>
                                <td>
                                    1,25,000.00
                                </td>
                                <td>
                                    7%
                                </td>
                                <td>
                                    <p class="line-clamp-1">
                                        Agent Reservation Notes...
                                    </p>
                                </td>
                                <td>
                                    <span class="bg-yellow-100 text-yellow-500 font-semibold inline-block px-4 py-1 text-sm rounded-2xl">
                                        Pending
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
