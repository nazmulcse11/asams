<x-app-layout>
    <div class="mb-6">
        <h4 class="font-semibold text-pureblack text-2xl">
            @php
            $user = auth('admin')->user();
            $full_name = str($user->profile?->first_name . ' ' . $user->profile?->last_name)->title()->trim()->toString();
            @endphp
            Hi, @if($user->profile) {{ $full_name }} @else {{ $user->username }} @endif
        </h4>
        <p>
            {{ __('Welcome back to Authorized Sales Agent Management System. Overview of your property details at a glance.')}}
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-start">
        <!-- Report Item -->
        <div class="card-item  grid gap-4 xl:gap-6 grid-cols-1 sm:grid-cols-2 items-start">
            <div class="card shadow-md p-4 rounded-xl flex gap-5 sm:col-span-2">
                <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#FFF0F1] inline-flex items-center justify-center">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M44 45.5H4C3.18 45.5 2.5 44.82 2.5 44C2.5 43.18 3.18 42.5 4 42.5H44C44.82 42.5 45.5 43.18 45.5 44C45.5 44.82 44.82 45.5 44 45.5Z" fill="#FF697C"/>
                        <path d="M6.02002 45.5206C5.62002 45.5206 5.23996 45.3605 4.95996 45.0805C4.67996 44.8005 4.52002 44.4206 4.52002 44.0206L4.5 14.1406C4.5 12.3206 5.41994 10.6005 6.93994 9.58051L14.9399 4.24055C16.7999 3.00055 19.2 3.00055 21.04 4.24055L29.04 9.58051C30.58 10.6005 31.48 12.3006 31.48 14.1406L31.5 43.9805C31.5 44.8005 30.84 45.4805 30 45.4805L6.02002 45.5206ZM18 6.30061C17.52 6.30061 17.04 6.44053 16.62 6.72053L8.62 12.0606C7.92 12.5206 7.5 13.3006 7.5 14.1406L7.52002 42.5206L28.52 42.4805L28.5 14.1406C28.5 13.3006 28.08 12.5205 27.4 12.0805L19.4 6.74055C18.98 6.44055 18.48 6.30061 18 6.30061Z" fill="#FF697C"/>
                        <path d="M39.9609 45.52C39.1409 45.52 38.4609 44.84 38.4609 44.02V36C38.4609 35.18 39.1409 34.5 39.9609 34.5C40.7809 34.5 41.4609 35.18 41.4609 36V44.02C41.4609 44.84 40.8009 45.52 39.9609 45.52Z" fill="#FF697C"/>
                        <path d="M40 37.5C36.96 37.5 34.5 35.04 34.5 32V28C34.5 24.96 36.96 22.5 40 22.5C43.04 22.5 45.5 24.96 45.5 28V32C45.5 35.04 43.04 37.5 40 37.5ZM40 25.5C38.62 25.5 37.5 26.62 37.5 28V32C37.5 33.38 38.62 34.5 40 34.5C41.38 34.5 42.5 33.38 42.5 32V28C42.5 26.62 41.38 25.5 40 25.5Z" fill="#FF697C"/>
                        <path d="M30 29.5H6C5.18 29.5 4.5 28.82 4.5 28C4.5 27.18 5.18 26.5 6 26.5H30C30.82 26.5 31.5 27.18 31.5 28C31.5 28.82 30.82 29.5 30 29.5Z" fill="#FF697C"/>
                        <path d="M18 45.5C17.18 45.5 16.5 44.82 16.5 44V36.5C16.5 35.68 17.18 35 18 35C18.82 35 19.5 35.68 19.5 36.5V44C19.5 44.82 18.82 45.5 18 45.5Z" fill="#FF697C"/>
                        <path d="M18 22.5C15.52 22.5 13.5 20.48 13.5 18C13.5 15.52 15.52 13.5 18 13.5C20.48 13.5 22.5 15.52 22.5 18C22.5 20.48 20.48 22.5 18 22.5ZM18 16.5C17.18 16.5 16.5 17.18 16.5 18C16.5 18.82 17.18 19.5 18 19.5C18.82 19.5 19.5 18.82 19.5 18C19.5 17.18 18.82 16.5 18 16.5Z" fill="#FF697C"/>
                    </svg>
                </div>
                <div class="info space-y-1">
                    <p>
                        {{ __("Total Shops") }}
                    </p>
                    <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                        {{ $total->shop }}
                    </h6>
                </div>
            </div>
            <div class="card shadow-md p-4 rounded-xl flex gap-5 justify-between items-center">
                <div class="info space-y-1">
                    <p>
                        {{ __("Vacant Shops") }}
                    </p>
                    <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                        {{ $total->vacant }}
                    </h6>
                </div>
                <div class="progressbar_item inline-flex items-center justify-center">
                    <div class="progressCircle">
                        <div class="relative mx-auto circle w-28 h-28" data-total="{{ $total->shop }}" data-value="{{ $total->vacant }}">
                            <div  class="absolute inset-0 text-lg label flex items-center justify-center flex-col">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-md p-4 rounded-xl flex gap-5 justify-between items-center">

                <div class="info space-y-1">
                    <p>
                        {{ __("Occupied Shops") }}
                    </p>
                    <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                        {{ $total->shop }}
                    </h6>
                </div>
                <div class="progressbar_item inline-flex items-center justify-center">
                    <div class="progressCircle">
                        <div class="relative mx-auto circle w-28 h-28" data-total="{{ $total->shop }}" data-value="{{ $total->occupied }}">
                            <div  class="absolute inset-0 text-lg label flex items-center justify-center flex-col">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-md p-4 rounded-xl flex gap-5">
                <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#96F1C6] inline-flex items-center justify-center">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.7502 6.90191C25.5293 5.72239 27.8407 5.69794 29.6447 6.83955L37.1241 11.5728H40.2C41.1941 11.5728 42 12.3742 42 13.3628V29.473C42 30.4617 41.1941 31.2631 40.2 31.2631H37.4645C37.5716 32.9587 36.7682 34.6826 35.1522 35.6468L25.984 41.1174C24.8266 41.8078 23.3898 41.7917 22.2567 41.1038C20.9961 42.2123 19.0557 42.3344 17.648 41.2344L8.39453 34.0041C7.01498 32.9263 6.66611 31.0848 7.37844 29.6248C6.50847 28.9464 6 27.9076 6 26.8077V13.3629C6 12.3743 6.8059 11.5729 7.80002 11.5729H16.7046L23.7502 6.90191ZM9.91079 27.0481L11.1565 25.9642C13.3709 24.0372 16.7289 24.228 18.7081 26.3933L23.5721 31.714C25.1373 33.4261 25.4227 35.9415 24.2844 37.9562L33.3 32.5769C33.8065 32.2748 33.9897 31.6706 33.8009 31.1617L25.8321 20.0675C25.3844 19.4443 24.5877 19.1733 23.8501 19.3934L19.3766 20.728C17.4738 21.2956 15.4112 20.7785 14.0065 19.3816L13.4795 18.8576C12.457 17.8408 12.1926 16.3938 12.6229 15.1529H9.60004V26.8077L9.91079 27.0481ZM27.712 9.85992C27.1106 9.47938 26.3402 9.48752 25.7471 9.8807L16.0251 16.3261L16.5521 16.8501C17.0203 17.3158 17.7078 17.4881 18.3421 17.2989L22.8156 15.9643C25.0285 15.3041 27.4188 16.117 28.7616 17.9866L35.7262 27.683H38.4V15.1528H37.1241C36.4394 15.1528 35.7689 14.9587 35.1913 14.5931L27.712 9.85992ZM13.5271 28.6584L10.6187 31.1891L19.8722 38.4194L21.1392 36.2143C21.5262 35.5409 21.433 34.6962 20.9083 34.1221L16.0443 28.8014C15.3846 28.0797 14.2652 28.0161 13.5271 28.6584Z" fill="#0FBA7F"/>
                    </svg>
                </div>
                <div class="info space-y-1">
                    <p>
                        {{ __("Total Buyers") }}
                    </p>
                    <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                        {{ $total->buyer }}
                    </h6>
                </div>
            </div>
            <div class="card shadow-md p-4 rounded-xl flex gap-5">
                <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#E6E0F4] inline-flex items-center justify-center">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.22105 29.5182C9.67615 27.6527 11.7409 26.5 14 26.5H27C29.2591 26.5 31.3239 27.6527 32.7789 29.5182C34.2272 31.375 35 33.8296 35 36.3333V40.5C35 41.3284 34.3284 42 33.5 42C32.6716 42 32 41.3284 32 40.5V36.3333C32 34.4168 31.4032 32.6322 30.4134 31.3633C29.4306 30.1032 28.1888 29.5 27 29.5H14C12.8112 29.5 11.5694 30.1032 10.5866 31.3633C9.59684 32.6322 9 34.4168 9 36.3333V40.5C9 41.3284 8.32843 42 7.5 42C6.67157 42 6 41.3284 6 40.5V36.3333C6 33.8296 6.7728 31.375 8.22105 29.5182Z" fill="#9881CB"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M35.2737 28.0233C35.6836 27.3035 36.5995 27.0522 37.3194 27.4622C38.2088 27.9686 39.0097 28.6581 39.6883 29.496C41.1923 31.3528 41.9998 33.8151 41.9998 36.3327V40.4993C41.9998 41.3278 41.3282 41.9993 40.4998 41.9993C39.6714 41.9993 38.9998 41.3278 38.9998 40.4993V36.3327C38.9998 34.43 38.3849 32.6531 37.3572 31.3843C36.8981 30.8175 36.3791 30.379 35.8349 30.0691C35.115 29.6591 34.8637 28.7432 35.2737 28.0233Z" fill="#9881CB"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M29.2345 7.34218C29.4338 6.53809 30.2473 6.04786 31.0514 6.2472C34.7542 7.16519 37.5004 10.5089 37.5004 14.4977C37.5004 18.4866 34.7542 21.8303 31.0514 22.7483C30.2473 22.9476 29.4338 22.4574 29.2345 21.6533C29.0352 20.8492 29.5254 20.0358 30.3295 19.8364C32.7257 19.2424 34.5004 17.0754 34.5004 14.4977C34.5004 11.92 32.7257 9.75311 30.3295 9.15905C29.5254 8.95971 29.0352 8.14626 29.2345 7.34218Z" fill="#9881CB"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21 9C17.9624 9 15.5 11.4624 15.5 14.5C15.5 17.5376 17.9624 20 21 20C24.0376 20 26.5 17.5376 26.5 14.5C26.5 11.4624 24.0376 9 21 9ZM12.5 14.5C12.5 9.80558 16.3056 6 21 6C25.6944 6 29.5 9.80558 29.5 14.5C29.5 19.1944 25.6944 23 21 23C16.3056 23 12.5 19.1944 12.5 14.5Z" fill="#9881CB"/>
                    </svg>
                </div>
                <div class="info space-y-1">
                    <p>
                        {{ __("Total Agents") }}
                    </p>
                    <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                        {{ $total->agent }}
                    </h6>
                </div>
            </div>
        </div>

        <!-- Report Item -->
        <div class="card-item bg-white rounded-2xl border border-slate-100">
            <h4 class="card-title font-semibold text-pureblack text-base xl:text-xl flex items-start justify-between gap-4 px-4 xl:px-6 pt-6">
                {{ __("Total Revenue") }}
                <div class="dropdown relative">
                    <button type="button" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                    </button>
                    <ul class="dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                    shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none [&_a]:text-slate-600 [&_a]:dark:text-white [&_a]:block [&_a]:font-Inter [&_a]:font-normal [&_a]:px-4 [&_a]:py-2">
                        <li>
                            <a href="#" class="hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                {{ __('Last 28 Days')}}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                {{ __('Last Month')}}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                {{ __('Last Year')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </h4>
            <div class="card-body py-5">
                <div id="total_revenue_chart"></div>
            </div>
        </div>
    </div>

    <div class="spacer my-6"></div>


    <div class="chart_cards grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
        <div class="card-item bg-white p-4 rounded-2xl border border-slate-50 xl:col-span-2">
            <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex justify-between gap-4 mb-4">
                {{ __("Recent Transactions") }}

                <a href="#">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 10.25L14 2" stroke="#4B5768" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M10.75 1.33008H14.42C14.5581 1.33008 14.67 1.44201 14.67 1.58008V5.25008" stroke="#4B5768" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M7.99967 1.3335H5.99967C2.66634 1.3335 1.33301 2.66683 1.33301 6.00016V10.0002C1.33301 13.3335 2.66634 14.6668 5.99967 14.6668H9.99967C13.333 14.6668 14.6663 13.3335 14.6663 10.0002V8.00016" stroke="#4B5768" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
            </h4>
            <div class="card-body">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">
                                <th>
                                    {{ __("Buyer's Name")}}
                                </th>
                                <th>
                                    {{ __('Payment Method')}}
                                </th>
                                <th>
                                    {{ __('Date')}}
                                </th>
                                <th>
                                    {{ __('Amount')}}
                                </th>
                                <th>
                                    {{ __('Status')}}
                                </th>
                            </tr>
                        </thead>
                        <tbody>

{{--                        @foreach ($transactions as $transaction)--}}
{{--                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">--}}
{{--                                <td class="text-sm">--}}
{{--                                    <div class="flex items-center gap-2 font-medium min-w-max">--}}
{{--                                        <img src="{{ authAvatar($transaction->buyer?->profile ?? $transaction->buyer?->username) }}"--}}
{{--                                            class="w-10 h-10 object-cover rounded-full"--}}
{{--                                            alt="{{ $transaction->buyer?->profile?->full_name ?? $transaction->buyer?->username }}">--}}
{{--                                        <div class="whitespace-nowrap">--}}
{{--                                            <h6 class="text-sm font-medium text-pureblack">--}}
{{--                                                {{ $transaction->buyer?->profile?->full_name ?? $transaction->buyer?->username }}--}}
{{--                                            </h6>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    <div class="flex items-center gap-2 min-w-max">--}}
{{--                                        <span class="text-[#8997A9]">--}}
{{--                                            {{ $transaction->paymentMode?->name }}--}}
{{--                                        </span>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm">--}}
{{--                                    {{ $transaction->created_at->format('M d, Y') }}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    ৳{{ $transaction->payment_amount }}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm">--}}
{{--                                    <span class="text-green-500 bg-[#F0FDF5] inline-block px-2 py-1 rounded-full text-xs font-medium">--}}
{{--                                        {{ __('Receive')}}--}}
{{--                                    </span>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



{{--        <div class="card-item bg-white p-4 rounded-2xl border border-slate-50">--}}
{{--            <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex justify-between gap-4 mb-4">--}}
{{--                {{ __("Activity") }}--}}
{{--                <a href="#" class="text-themered inline-flex items-center gap-1 text-sm">--}}
{{--                    All Activity--}}
{{--                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path d="M9 15L22 2" stroke="currentcolor" stroke-width="2" stroke-linecap="round"/>--}}
{{--                        <path d="M16 2H21.75C21.8881 2 22 2.11193 22 2.25V8" stroke="currentcolor" stroke-width="2" stroke-linecap="round"/>--}}
{{--                        <path d="M12 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V12" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                    </svg>--}}
{{--                </a>--}}
{{--            </h4>--}}

{{--            <div class="card-body">--}}
{{--                <ul class="activity_log">--}}
{{--                    <li class="transition-all">--}}
{{--                        <div class="label mb-2 text-sm">--}}
{{--                            {{ __("Feb 4, 2024") }}--}}
{{--                        </div>--}}
{{--                        <div class="activity-item flex gap-3 transition-all hover:bg-[#F8F9FB] relative z-[1] before:w-0.5 before:h-full before:bg-[#F8F9FB] before:absolute before:left-4 before:top-0 before:-z-[1]">--}}
{{--                            <div class="icon w-8 h-8 flex-[0_0_32px] border border-[#E1E5EA] rounded-full inline-flex items-center justify-center bg-white">--}}
{{--                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M10.666 2H13.9993V5.33333" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    <path d="M5.33333 2H2V5.33333" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    <path d="M8 14.6667V9.13333C8.00381 8.77824 7.93666 8.42597 7.80249 8.09718C7.66832 7.76839 7.46983 7.46971 7.21867 7.21867L2 2" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    <path d="M10 6L14 2" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                            <div class="desc pt-1">--}}
{{--                                <h6 class="text-sm font-semibold text-gunmetal mb-1">--}}
{{--                                    {{ __("Employee 1 create sale on “Position 22”") }}--}}
{{--                                </h6>--}}
{{--                                <p class="text-[#6B7D94] text-sm mb-6">--}}
{{--                                    {{ __("Find more detailed information by clicking here.")}}--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="activity-item flex gap-3 transition-all hover:bg-[#F8F9FB] relative z-[1] before:w-0.5 before:h-full before:bg-[#F8F9FB] before:absolute before:left-4 before:top-0 before:-z-[1]">--}}
{{--                            <div class="icon w-8 h-8 flex-[0_0_32px] border border-[#E1E5EA] rounded-full inline-flex items-center justify-center bg-white">--}}
{{--                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M10.666 2H13.9993V5.33333" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    <path d="M5.33333 2H2V5.33333" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    <path d="M8 14.6667V9.13333C8.00381 8.77824 7.93666 8.42597 7.80249 8.09718C7.66832 7.76839 7.46983 7.46971 7.21867 7.21867L2 2" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    <path d="M10 6L14 2" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                            <div class="desc pt-1">--}}
{{--                                <h6 class="text-sm font-semibold text-gunmetal mb-1">--}}
{{--                                    {{ __("New Property” Added by Employee 2") }}--}}
{{--                                </h6>--}}
{{--                                <p class="text-[#6B7D94] text-sm mb-6">--}}
{{--                                    {{ __("Find more detailed information by clicking here.")}}--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="activity-item flex gap-3 transition-all hover:bg-[#F8F9FB] relative z-[1] before:w-0.5 before:h-full before:bg-[#F8F9FB] before:absolute before:left-4 before:top-0 before:-z-[1]">--}}
{{--                            <div class="icon w-8 h-8 flex-[0_0_32px] border border-[#E1E5EA] rounded-full inline-flex items-center justify-center bg-white">--}}
{{--                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M10.666 2H13.9993V5.33333" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    <path d="M5.33333 2H2V5.33333" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    <path d="M8 14.6667V9.13333C8.00381 8.77824 7.93666 8.42597 7.80249 8.09718C7.66832 7.76839 7.46983 7.46971 7.21867 7.21867L2 2" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    <path d="M10 6L14 2" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                            <div class="desc pt-1">--}}
{{--                                <h6 class="text-sm font-semibold text-gunmetal mb-1">--}}
{{--                                    {{ __("Hey your “Property 2” is get out of stock.") }}--}}
{{--                                </h6>--}}
{{--                                <p class="text-[#6B7D94] text-sm mb-6">--}}
{{--                                    {{ __("Find more detailed information by clicking here.")}}--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="activity-item flex gap-3 transition-all hover:bg-[#F8F9FB] relative z-[1] before:w-0.5 before:h-full before:bg-[#F8F9FB] before:absolute before:left-4 before:top-0 before:-z-[1]">--}}
{{--                            <div class="icon w-8 h-8 flex-[0_0_32px] border border-[#E1E5EA] rounded-full inline-flex items-center justify-center bg-white">--}}
{{--                                <img src="{{ asset('/images/avatar/av-1.svg') }}"--}}
{{--                                    class="w-8 h-8 object-cover rounded-full"--}}
{{--                                    alt="{{ __('Mark') }}">--}}
{{--                            </div>--}}
{{--                            <div class="desc pt-1">--}}
{{--                                <h6 class="text-sm font-semibold text-gunmetal mb-1">--}}
{{--                                    {{ __('Mark is been added as "New Buyer"') }}--}}
{{--                                </h6>--}}
{{--                                <p class="text-[#6B7D94] text-sm mb-6">--}}
{{--                                    {{ __("Find more detailed information by clicking here.")}}--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="transition-all">--}}
{{--                        <div class="label mb-2 text-sm">--}}
{{--                            {{ __("Feb 4, 2024") }}--}}
{{--                        </div>--}}
{{--                        <div class="activity-item flex gap-3 transition-all hover:bg-[#F8F9FB] relative z-[1] before:w-0.5 before:h-full before:bg-[#F8F9FB] before:absolute before:left-4 before:top-0 before:-z-[1]">--}}
{{--                            <div class="icon w-8 h-8 flex-[0_0_32px] border border-[#E1E5EA] rounded-full inline-flex items-center justify-center bg-white">--}}
{{--                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <path d="M10.666 2H13.9993V5.33333" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    <path d="M5.33333 2H2V5.33333" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    <path d="M8 14.6667V9.13333C8.00381 8.77824 7.93666 8.42597 7.80249 8.09718C7.66832 7.76839 7.46983 7.46971 7.21867 7.21867L2 2" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                    <path d="M10 6L14 2" stroke="#21252C" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                            <div class="desc pt-1">--}}
{{--                                <h6 class="text-sm font-semibold text-gunmetal mb-1">--}}
{{--                                    {{ __("Take a break ⛳️") }}--}}
{{--                                </h6>--}}
{{--                                <p class="text-[#6B7D94] text-sm mb-6">--}}
{{--                                    {{ __("Find more detailed information by clicking here.. 😉")}}--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    @push("scripts")
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

{{--    @dd(userPropertySelected(getCurrentAuthenticatedUser(),6))--}}

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const chartOptions = [
                {
                    id: "total_revenue_chart",
                    options: {
                        chart: {
                            type: 'bar',
                            height: 300,
                            toolbar: {
                                show: false,
                            },
                        },
                        series:[
                            {
                                name:"Collected",
                                data:@json($revenue[1]['data'])
                            },
                            {
                                name:"Due",
                                data:@json($revenue[0]['data'])
                            },
                        ],
                        legend: {
                            show: false
                        },
                        plotOptions:{
                            bar: {
                                horizontal: !1,
                                endingShape: "rounded",
                                columnWidth: "45%"
                            },
                        },
                        dataLabels:{
                            enabled:!1
                        },
                        stroke:{
                            show: !0,
                            width: 5,
                            colors: ["transparent"]
                        },
                        xaxis:{
                            categories:["Jan", "Feb"],
                        },
                        yaxis: {
                            labels: {
                                formatter: function (value) {
                                    return value + "tk";
                                }
                            },
                        },
                        fill:{
                            opacity:1
                        },
                        tooltip: {
                            theme: 'dark',
                            y: {
                                formatter: function (val, opts) {
                                    return `৳${val}Tk`;
                                },
                            },
                        },
                        colors:["#FF9FA9","#E1E5EA"],
                        states: {
                            hover: {
                                filter: {
                                    type: "none",
                                    value: 0.1
                                }
                            }
                        },
                        grid:{
                            show: true
                        },
                        responsive: [{
                            breakpoint: 767,
                            options: {
                                chart: {
                                    height: 'auto',
                                },
                            },
                        }]
                    }
                },
            ]
            // ApexCharts => loop through chartOptions array to render charts
            chartOptions.forEach(function (chart) {
                const ctx = document.getElementById(chart.id);
                if (ctx) {
                    const chartObj = new ApexCharts(ctx, chart.options);
                    chartObj.render();
                }
            });
        });



    </script>
    <script type="module">
        $('.progressCircle').each(function() {
            var $circle = $(this).find('.circle');
            var total = parseFloat($circle.attr('data-total'));
            var value = parseFloat($circle.attr('data-value'));
            var progressValue = value / total;

            $circle.circleProgress({
                startAngle: -Math.PI / 2,
                value: progressValue,
                thickness: 6,
                lineCap: 'round',
                emptyFill: '#E1E5EA',
                fill: '#ED113D',
                size: $('.progressbar_item .circle').width(),
            }).on('circle-animation-progress', function(event, progress, stepValue) {
                $(this).parent().find('.label').html(
                        // `${Math.round(stepValue * total)} / ${total}`
                        `<b class="text-gunmetal">${total - value}</b> <span class='text-sm text-[#6B7D94]'>Remaining</span>`
                    );
                }).stop();
            });

    </script>
    @endpush
</x-app-layout>
