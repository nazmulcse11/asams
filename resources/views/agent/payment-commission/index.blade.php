<x-app-layout>
    <div class="flex justify-between flex-wrap items-center mb-6">
        <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-flex items-center gap-3 ltr:pr-4 rtl:pl-4 mb-1 sm:mb-0">
            <span class="icon w-16 h-16 bg-[#96F1C6] rounded-full inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35 33.8737C35 34.4891 34.49 34.9994 33.875 34.9994H6.125C5.51 34.9994 5 34.4891 5 33.8737C5 33.2583 5.51 32.748 6.125 32.748H33.875C34.49 32.748 35 33.2583 35 33.8737Z" fill="#0FBA7F"/>
                    <path d="M25.0852 8.76721L8.97516 24.8867C8.36016 25.502 7.37016 25.502 6.77016 24.8867H6.75516C4.67016 22.7854 4.67016 19.3934 6.75516 17.3072L17.4802 6.57592C19.5802 4.47469 22.9702 4.47469 25.0702 6.57592C25.6852 7.16127 25.6852 8.16686 25.0852 8.76721Z" fill="#0FBA7F"/>
                    <path d="M33.2302 14.7228L28.6552 10.1451C28.0402 9.52975 27.0502 9.52975 26.4502 10.1451L10.3402 26.2646C9.72516 26.8649 9.72516 27.8555 10.3402 28.4709L14.9152 33.0635C17.0152 35.1498 20.4052 35.1498 22.5052 33.0635L33.2152 22.3323C35.3452 20.231 35.3452 16.824 33.2302 14.7228ZM21.1402 28.2757L19.3252 30.1068C18.9502 30.482 18.3352 30.482 17.9452 30.1068C17.5702 29.7316 17.5702 29.1162 17.9452 28.726L19.7752 26.8949C20.1352 26.5347 20.7652 26.5347 21.1402 26.8949C21.5152 27.2701 21.5152 27.9155 21.1402 28.2757ZM27.0952 22.3172L23.4352 25.9944C23.0602 26.3546 22.4452 26.3546 22.0552 25.9944C21.6802 25.6192 21.6802 25.0038 22.0552 24.6136L25.7302 20.9364C26.0902 20.5762 26.7202 20.5762 27.0952 20.9364C27.4702 21.3267 27.4702 21.942 27.0952 22.3172Z" fill="#0FBA7F"/>
                </svg>
            </span>
            {{ __('Payments & Commissions') }}
        </h4>
        <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse">
            
        </div>
    </div>

    <div class="chart_cards grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="card-item bg-white rounded-2xl border border-slate-100">
            <h4 class="card-title font-semibold text-pureblack text-base xl:text-xl flex items-start justify-between gap-4 px-4 xl:px-6 pt-6">
                {{ __("Commission") }}
                <div class="relative">
                    <form action="#">
                        <select name="" class="text-sm px-3 py-1.5 border border-slate-200 rounded-md cursor-pointer focus:outline-0 font-normal pr-4">
                            <option value="">Select</option>
                            <option value="" selected>This Year</option>
                            <option value="">Last Year</option>
                            <option value="">This Month</option>
                        </select>
                    </form>
                </div>
            </h4>
            <div class="card-body py-5">
                <div class="graph w-full max-w-md mx-auto h-[240px] mb-8 relative">
                    <canvas id="commission_graph"></canvas>
                    <div class="text-center absolute left-1/2 bottom-0 -translate-x-1/2">
                        <p class="mb-1 text-sm text-[#607085]">
                            {{ __('Remaining Balance')}}
                        </p>
                        <h5 class="font-bold text-pureblack text-lg xl:text-2xl">
                            {{ __('৳40,000')}}
                        </h5>
                    </div>
                </div>
                <div class="grid gap-6 grid-cols-3 bg-[#F8F9FB] py-8 px-6 rounded-xl mx-4 xl:mx-6">
                    <div class="text-center">
                        <p class="mb-1 text-sm text-[#607085]">
                            {{ __('Agreement')}}
                        </p>
                        <h5 class="font-bold text-pureblack text-lg xl:text-2xl">
                            {{ __('15')}}
                        </h5>
                    </div>
                    <div class="text-center">
                        <p class="mb-1 text-sm text-[#607085] before:w-2 before:h-2 before:bg-[#DCFCE8] before:rounded-full before:inline-block">
                            {{ __('Total Commission')}}
                        </p>
                        <h5 class="font-bold text-pureblack text-lg xl:text-2xl">
                            {{ __('৳160,000')}}
                        </h5>
                    </div>
                    <div class="text-center">
                        <p class="mb-1 text-sm text-[#607085] before:w-2 before:h-2 before:bg-[#22C55E] before:rounded-full before:inline-block">
                            {{ __('Withdrawn')}}
                        </p>
                        <h5 class="font-bold text-pureblack text-lg xl:text-2xl">
                            {{ __('৳120,000')}}
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-item bg-white rounded-2xl border border-slate-100">
            <h4 class="card-title font-semibold text-pureblack text-base xl:text-xl flex items-start justify-between gap-4 px-4 xl:px-6 pt-6">
                {{ __("My Withdraw") }}
                <div class="relative">
                    <a href="#new_withdraw" data-popup="modal" class="inline-flex whitespace-nowrap items-center gap-2 font-semibold text-sm px-3 py-1.5 border border-themered text-themered rounded-lg transition-all hover:bg-themered hover:text-white">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.34375 15.2025L15.2025 5.34375" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.2578 17.1775L12.2478 16.1875" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.4805 14.96L15.4522 12.9883" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.07105 10.546L10.549 5.06797C12.298 3.31897 13.1725 3.31072 14.905 5.04322L18.9558 9.09397C20.6883 10.8265 20.68 11.701 18.931 13.45L13.453 18.928C11.704 20.677 10.8295 20.6852 9.09705 18.9527L5.0463 14.902C3.3138 13.1695 3.3138 12.3032 5.07105 10.546Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.75 20.25H20.25" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        New Withdraw
                    </a>
                </div>
            </h4>
            <div class="card-body py-5">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">
                                <th>
                                    {{ __('Request ID')}}
                                </th>
                                <th>
                                    {{ __('Amount')}}
                                </th>
                                <th>
                                    {{ __('Method')}}
                                </th>
                                <th>
                                    {{ __('Date & Time')}}
                                </th>
                                <th>
                                    {{ __('Transaction No.')}}
                                </th>
                                <th>
                                    {{ __('Actions')}}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('WDR-10201')}}
                                </td>
                                <td class="text-sm">
                                    {{ __('৳25,000')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Bank')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('2025-06-12')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('11:26:02')}}
                                    </span>
                                </td>
                                <td>
                                    {{ __('TXN-20250612-001')}}
                                </td>
                                <td>
                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>                            
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('WDR-10201')}}
                                </td>
                                <td class="text-sm">
                                    {{ __('৳25,000')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Bank')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('2025-06-12')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('11:26:02')}}
                                    </span>
                                </td>
                                <td>
                                    {{ __('TXN-20250612-001')}}
                                </td>
                                <td>
                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>                            
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('WDR-10201')}}
                                </td>
                                <td class="text-sm">
                                    {{ __('৳25,000')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Bank')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('2025-06-12')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('11:26:02')}}
                                    </span>
                                </td>
                                <td>
                                    {{ __('TXN-20250612-001')}}
                                </td>
                                <td>
                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>                            
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('WDR-10201')}}
                                </td>
                                <td class="text-sm">
                                    {{ __('৳25,000')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Bank')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('2025-06-12')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('11:26:02')}}
                                    </span>
                                </td>
                                <td>
                                    {{ __('TXN-20250612-001')}}
                                </td>
                                <td>
                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>                            
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('WDR-10201')}}
                                </td>
                                <td class="text-sm">
                                    {{ __('৳25,000')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Bank')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('2025-06-12')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('11:26:02')}}
                                    </span>
                                </td>
                                <td>
                                    {{ __('TXN-20250612-001')}}
                                </td>
                                <td>
                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="my-6"></div>

    <div class="bg-white rounded-2xl border border-slate-100">
        <h4 class="card-title font-semibold text-pureblack text-base xl:text-xl flex items-start justify-between gap-4 px-4 xl:px-6 pt-6">
            {{ __("Agreement List") }}
        </h4>
        <!-- Search & Filter form -->
        <form class="mb-6 px-4">
            <div class="flex flex-wrap items-end justify-between gap-3 xl:gap-6">
                <div class="left">
                    <div class="input-area relative">
                        <input type="text" name="s" class="w-full px-4 py-3 !pl-9 rounded-lg bg-[#F8F9FB]" placeholder="Search">
                        <span class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full border-none flex items-center justify-center pl-2">
                            <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:search"></iconify-icon>
                        </span>
                    </div>
                </div>
                <div class="right max-w-4xl">
                    <div class="flex flex-wrap items-end gap-3 xl:gap-6">
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_240px] relative space-y-1">
                            <label class="text-pureblack text-sm">{{ __('Date Range')}}</label>
                            <x-date-range-picker id="fltr" />
                        </div>
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_160px] space-y-1">
                            <label class="text-pureblack text-sm">{{ __('Agreement Type')}}</label>
                            <select class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                                <option value="" class="dark:bg-slate-700">Select Type</option>
                                <option value="Sale" class="dark:bg-slate-700">Sale</option>
                                <option value="Lease" class="dark:bg-slate-700">Lease</option>
                                <option value="Reservation" class="dark:bg-slate-700">Reservation</option>
                            </select>
                        </div>
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_120px] space-y-1">
                            <label class="text-pureblack text-sm">{{ __('Status')}}</label>
                            <select class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                                <option value="" class="dark:bg-slate-700">All</option>
                                <option value="Completed" class="dark:bg-slate-700">Completed</option>
                                <option value="Pending" class="dark:bg-slate-700">Pending</option>
                                <option value="Failed" class="dark:bg-slate-700">Failed</option>
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

        <!-- Insert dataTable here -->
        <table class="table table-auto w-full">
            <thead>
                <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">
                    <th>
                       {{ __(" Agreement ID ")}} 
                    </th>
                    <th>
                       {{ __(" Buyer Name ")}} 
                    </th>
                    <th>
                       {{ __(" Shop Name ")}} 
                    </th>
                    <th>
                       {{ __(" Type ")}} 
                    </th>
                    <th>
                       {{ __(" Started On ")}} 
                    </th>
                    <th>
                       {{ __(" Expiry Date ")}} 
                    </th>
                    <th>
                       {{ __(" Status ")}} 
                    </th>
                    <th class="!text-end">
                       {{ __(" Actions ")}} 
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="*:text-start *:text-sm *:py-4 *:px-4 *:whitespace-nowrap  hover:bg-[#F8F9FB]">
                    <td>
                       {{ __("AG-20240601-001")}} 
                    </td>
                    <td>
                        <a href="#" class="whitespace-nowrap text-sm font-medium text-pureblack underline">
                            Salma Malek
                        </a>
                    </td>
                    <td>
                       {{ __("Shop 101")}} 
                    </td>
                    <td>
                       {{ __("Sale")}} 
                    </td>
                    <td>
                       {{ __("2024-06-12")}} 
                    </td>
                    <td>
                       {{ __("2025-06-12")}} 
                    </td>
                    <td class="text-center">
                       <span class="text-green-500 bg-green-100 inline-block px-2 py-1 rounded-full text-xs font-medium">
                            Approved
                        </span>
                    </td>
                    <td class="flex items-center gap-2 justify-end">
                       <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                       <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.52344 11.1758V16.1258L11.1734 14.4758" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.525 16.1266L7.875 14.4766" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.25 10.35V14.475C20.25 18.6 18.6 20.25 14.475 20.25H9.525C5.4 20.25 3.75 18.6 3.75 14.475V9.525C3.75 5.4 5.4 3.75 9.525 3.75H13.65" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.2484 10.35H16.9484C14.4734 10.35 13.6484 9.525 13.6484 7.05V3.75L20.2484 10.35Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr class="*:text-start *:text-sm *:py-4 *:px-4 *:whitespace-nowrap  hover:bg-[#F8F9FB]">
                    <td>
                       {{ __("AG-20240601-001")}} 
                    </td>
                    <td>
                        <a href="#" class="whitespace-nowrap text-sm font-medium text-pureblack underline">
                            Salma Malek
                        </a>
                    </td>
                    <td>
                       {{ __("Shop 101")}} 
                    </td>
                    <td>
                       {{ __("Sale")}} 
                    </td>
                    <td>
                       {{ __("2024-06-12")}} 
                    </td>
                    <td>
                       {{ __("2025-06-12")}} 
                    </td>
                    <td class="text-center">
                       <span class="text-yellow-500 bg-yellow-100 inline-block px-2 py-1 rounded-full text-xs font-medium">
                            Pending
                        </span>
                    </td>
                    <td class="flex items-center gap-2 justify-end">
                       <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                       <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.52344 11.1758V16.1258L11.1734 14.4758" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.525 16.1266L7.875 14.4766" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.25 10.35V14.475C20.25 18.6 18.6 20.25 14.475 20.25H9.525C5.4 20.25 3.75 18.6 3.75 14.475V9.525C3.75 5.4 5.4 3.75 9.525 3.75H13.65" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.2484 10.35H16.9484C14.4734 10.35 13.6484 9.525 13.6484 7.05V3.75L20.2484 10.35Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr class="*:text-start *:text-sm *:py-4 *:px-4 *:whitespace-nowrap  hover:bg-[#F8F9FB]">
                    <td>
                       {{ __("AG-20240601-001")}} 
                    </td>
                    <td>
                        <a href="#" class="whitespace-nowrap text-sm font-medium text-pureblack underline">
                            Salma Malek
                        </a>
                    </td>
                    <td>
                       {{ __("Shop 101")}} 
                    </td>
                    <td>
                       {{ __("Sale")}} 
                    </td>
                    <td>
                       {{ __("2024-06-12")}} 
                    </td>
                    <td>
                       {{ __("2025-06-12")}} 
                    </td>
                    <td class="text-center">
                       <span class="text-red-500 bg-red-100 inline-block px-2 py-1 rounded-full text-xs font-medium">
                            Rejected
                        </span>
                    </td>
                    <td class="flex items-center gap-2 justify-end">
                       <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                       <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.52344 11.1758V16.1258L11.1734 14.4758" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.525 16.1266L7.875 14.4766" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.25 10.35V14.475C20.25 18.6 18.6 20.25 14.475 20.25H9.525C5.4 20.25 3.75 18.6 3.75 14.475V9.525C3.75 5.4 5.4 3.75 9.525 3.75H13.65" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.2484 10.35H16.9484C14.4734 10.35 13.6484 9.525 13.6484 7.05V3.75L20.2484 10.35Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr class="*:text-start *:text-sm *:py-4 *:px-4 *:whitespace-nowrap  hover:bg-[#F8F9FB]">
                    <td>
                       {{ __("AG-20240601-001")}} 
                    </td>
                    <td>
                        <a href="#" class="whitespace-nowrap text-sm font-medium text-pureblack underline">
                            Salma Malek
                        </a>
                    </td>
                    <td>
                       {{ __("Shop 101")}} 
                    </td>
                    <td>
                       {{ __("Sale")}} 
                    </td>
                    <td>
                       {{ __("2024-06-12")}} 
                    </td>
                    <td>
                       {{ __("2025-06-12")}} 
                    </td>
                    <td class="text-center">
                       <span class="text-black-500 bg-black-100 inline-block px-2 py-1 rounded-full text-xs font-medium">
                            Expired
                        </span>
                    </td>
                    <td class="flex items-center gap-2 justify-end">
                       <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                       <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.52344 11.1758V16.1258L11.1734 14.4758" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.525 16.1266L7.875 14.4766" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.25 10.35V14.475C20.25 18.6 18.6 20.25 14.475 20.25H9.525C5.4 20.25 3.75 18.6 3.75 14.475V9.525C3.75 5.4 5.4 3.75 9.525 3.75H13.65" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.2484 10.35H16.9484C14.4734 10.35 13.6484 9.525 13.6484 7.05V3.75L20.2484 10.35Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>

    @push("modal")
    <!-- Propert Add Initial Setup -->
    <div id="new_withdraw" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
        <div class="modal-content bg-white w-full max-w-4xl mx-auto p-6 lg:p-8 xl:p-10 border border-slate-400 rounded-2xl relative">
            <form method="post" id="request_new_withdraw" class="space-y-8">
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
                                Request a New Withdrawal
                            </h2>
                            <p class="text-sm text-gray-500 font-light">
                                Withdraw your earned commissions directly to your preferred payment method.
                            </p>
                        </div>
                    </div>
                    <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                        <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <p class="mb-1 text-sm text-[#607085]">
                            {{ __('Remaining Balance')}}
                        </p>
                        <h5 class="font-bold text-pureblack text-lg xl:text-2xl 2xl:text-3xl">
                            {{ __('৳40,000')}}
                        </h5>
                    </div>
                    <div class="form-body grid gap-4 grid-cols-1 md:grid-cols-2 my-10">
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Withdraw Amount')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" inputmode="numeric" name="withdraw_amount" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg text-end" placeholder="{{ __('৳35,000')}}" required />
                            <p class="text-xs text-[#8997A9]">
                                Minimum withdrawal limit is ৳5,000
                            </p>
                            <x-input-error :messages="$errors->get('withdraw_amount')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Choose Payment Method')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="withdraw_pmt_method" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="Bank Payment">Bank Payment</option>
                                <option value="Bksah">Bksah</option>
                                <option value="Nagad">Nagad</option>
                                <option value="Rocket">Rocket</option>
                                <option value="Upay">Upay</option>
                            </select>
                            <x-input-error :messages="$errors->get('withdraw_pmt_method')" class="mt-1"/>
                        </div>


                        <!-- apply condition for bank payment  -->
                        <div class="field-item space-y-2 md:col-span-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Bank Name')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="bank_name" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg text-end" placeholder="{{ __('City Bank Limited')}}" required />
                            <x-input-error :messages="$errors->get('bank_name')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Account Holder Name')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="accountName" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('James Milner')}}" required />
                            <x-input-error :messages="$errors->get('accountName')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Account Number')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" inputmode="numeric" name="accountNumber" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('0000 - 0000 - 0000 - 0000')}}" pattern="" required />
                            <x-input-error :messages="$errors->get('accountNumber')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Branch Name')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="branchName" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="Aftab Nagar Branch">Aftab Nagar Branch</option>
                                <option value="Bogra Branch">Bogra Branch</option>
                                <option value="Gulistan Branch">Gulistan Branch</option>
                                <option value="Gulshan Branch">Gulshan Branch</option>
                            </select>
                            <x-input-error :messages="$errors->get('branchName')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Routing Number')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" inputmode="numeric" name="routingNumber" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('225261732')}}" required />
                            <x-input-error :messages="$errors->get('routingNumber')" class="mt-1"/>
                        </div>
                        <!-- condition end -->
                    </div>
                    <div class="text-end">
                        <button type="submit" data-modal-target="#ask_confirm_withdraw" class="bg-themered text-white inline-flex items-center justify-center gap-2 rounded-lg px-5 py-3 transition-all hover:bg-gunmetal hover:px-6">
                            {{ __('Submit Withdraw')}}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Propert Add Initial Setup -->
    <div id="ask_confirm_withdraw" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
        <div class="modal-content bg-white w-full max-w-4xl mx-auto border border-slate-400 rounded-2xl relative">
            <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
            </button>
            <div class="modal-header bg-[#F8F9FB] border-b border-[#F0F2F4] py-3 px-2  text-center rounded-tl-2xl rounded-tr-2xl">
                <h2 class="text-xl xl:text-2xl font-bold text-gray-900">
                    Confirm Withdrawal Request
                </h2>
                <p class="text-sm text-gray-500 font-light">
                    Your request will be processed within 3-5 business days.
                </p>
            </div>
            <div class="modal-body p-4 lg:p-6 xl:p-8">
                <table class="w-full border-separate">
                    <tbody>
                        <tr class="*:w-1/2 *:py-2">
                            <td class="text-end text-[#8997A9]">
                                {{ __("Amount :")}}
                            </td>
                            <td class="text-pureblack font-bold text-lg">
                                {{ __(" ৳25,000")}}
                            </td>
                        </tr>
                        <tr class="*:w-1/2 *:py-2">
                            <td class="text-end text-[#8997A9]">
                                {{ __("Method :")}}
                            </td>
                            <td class="text-pureblack font-semibold text-lg">
                                {{ __(" Bank Transfer")}}
                            </td>
                        </tr>
                        <tr class="*:w-1/2 *:py-2">
                            <td class="text-end text-[#8997A9]">
                                {{ __("Transaction ID :")}}
                            </td>
                            <td class="text-pureblack font-semibold text-lg">
                                {{ __(" TXN-AG-20250615-01")}}
                            </td>
                        </tr>
                        <tr class="*:w-1/2 *:py-2">
                            <td class="text-end text-[#8997A9]">
                                {{ __("Status :")}}
                            </td>
                            <td class="text-pureblack font-semibold text-lg">
                                {{ __(" Pending Review")}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer text-center mt-4 pb-4 lg:pb-6 xl:pb-8">
                <button type="button" class="bg-themered text-white inline-flex items-center justify-center gap-2 rounded-lg px-5 py-3 transition-all hover:bg-gunmetal hover:px-6">
                    {{ __('Confirm Withdraw')}}
                </button>
            </div>
        </div>
    </div>
    @endpush

    @push('scripts')
    <script type="module">
        const chartJsOptions = [
            {
                id: "commission_graph",
                type: 'doughnut',
                data: {
                    labels: ["Withdrawn", "Remaining"],
                    datasets: [
                        {
                            data: [120000, 40000],
                            backgroundColor: ['#DCFCE8','#22C55E'],
                            hoverOffset: 1,
                            borderWidth: 0,
                        },
                    ],
                },
                options: {
                    reponsive: true,
                    cutout: '80%',
                    maintainAspectRatio: false,
                    rotation: (180 / 2) * -1,
                    circumference: 180,
                    plugins: {
                        legend : {
                            display : false,
                        },
                    },
                },
            }
        ];

        // Chart.js loop through chartOptions array to render charts
        chartJsOptions.forEach(function (chartConfig) {
            const ctx = document.getElementById(chartConfig.id);
            if (ctx) {
                const chartInstance = new Chart(ctx, {
                    type: chartConfig.type,
                    data: chartConfig.data,
                    options: chartConfig.options
                });
            }
        });
    
    </script>

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
