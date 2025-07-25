<x-app-layout>
    <div class="mb-6">
        <h4 class="font-semibold text-pureblack dark:text-white text-2xl">
            {{ __("Hi David")}}
        </h4>
        <p>
            {{ __("Welcome! Here's a complete snapshot of your purchases, payments and agreements.")}}
        </p>
    </div>

    <!--  Card -->
    <div class="chart_cards grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
        <!-- Report Item -->
        <div class="card-item bg-white rounded-2xl border border-slate-100">
            <h4 class="card-title font-semibold text-pureblack text-base xl:text-xl flex items-start justify-between gap-4 px-4 xl:px-6 pt-6">
                {{ __("Payments & Installment Summery") }}
                <div class="relative">
                    <a href="#" class="inline-flex whitespace-nowrap items-center gap-2 font-semibold text-sm px-3 xl:px-5 py-1.5 border border-slate-200 rounded-lg transition-all text-pureblack hover:bg-gunmetal hover:text-white">
                        All Shops
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 11L11 1" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M3 1H10.75C10.8881 1 11 1.11193 11 1.25V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </h4>
            <div class="card-body py-5">
                <div class="graph w-full mx-auto h-[300px] mb-8 relative text-center px-4 xl:px-6">
                    <canvas id="installment_payment_chart" class="mx-auto"></canvas>
                    <div class="text-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
                        <p class="mb-1 text-sm text-[#607085]">
                            {{ __('Total Shop')}}
                        </p>
                        <h5 class="font-bold text-pureblack text-lg xl:text-2xl">
                            {{ __('15')}}
                        </h5>
                    </div>
                </div>
                <div class="grid gap-3 xl:gap-6 grid-cols-2 bg-[#F8F9FB] py-8 px-3 xl:px-6 rounded-xl mx-4 xl:mx-6">
                    <div class="text-center">
                        <p class="mb-1 text-sm text-[#607085] before:w-2 before:h-2 before:bg-[#FFCCD2] before:rounded-full before:inline-block">
                            {{ __('Shop Lease')}}
                        </p>
                        <h5 class="font-bold text-pureblack text-lg xl:text-2xl">
                            {{ __('10')}}
                        </h5>
                    </div>
                    <div class="text-center">
                        <p class="mb-1 text-sm text-[#607085] before:w-2 before:h-2 before:bg-[#F93A5C] before:rounded-full before:inline-block">
                            {{ __('Shop Buy')}}
                        </p>
                        <h5 class="font-bold text-pureblack text-lg xl:text-2xl">
                            {{ __('15')}}
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report Item -->
        <div class="card-item bg-white rounded-2xl border border-slate-100">
            <h4 class="card-title font-semibold text-pureblack text-base xl:text-xl flex items-start justify-between gap-4 px-4 xl:px-6 pt-6">
                {{ __("Payments & Installment Summery") }}
                <div class="relative">
                    <a href="#" class="inline-flex whitespace-nowrap items-center gap-2 font-semibold text-sm px-3 xl:px-5 py-1.5 border border-slate-200 rounded-lg transition-all text-pureblack hover:bg-gunmetal hover:text-white">
                        Full Report
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 11L11 1" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M3 1H10.75C10.8881 1 11 1.11193 11 1.25V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </h4>
            <div class="card-body py-5">
                <div class="graph w-full max-w- mx-auto h-[240px] my-8 relative px-4 xl:px-6">
                    <canvas id="payment_installment_summery"></canvas>
                    <div class="text-center absolute left-1/2 bottom-0 -translate-x-1/2">
                        <p class="mb-1 text-sm text-[#607085]">
                            {{ __('Installment Due')}}
                        </p>
                        <h5 class="font-bold text-pureblack text-lg xl:text-2xl">
                            {{ __('৳65,000')}}
                        </h5>
                    </div>
                </div>
                <div class="grid gap-6 grid-cols-3 bg-[#F8F9FB] py-8 px-6 rounded-xl mx-4 xl:mx-6">
                    <div class="text-center">
                        <p class="mb-1 text-sm text-[#607085]">
                            {{ __('No. of Payments')}}
                        </p>
                        <h5 class="font-bold text-pureblack text-lg xl:text-2xl">
                            {{ __('15')}}
                        </h5>
                    </div>
                    <div class="text-center">
                        <p class="mb-1 text-sm text-[#607085] before:w-2 before:h-2 before:bg-[#22C55E] before:rounded-full before:inline-block">
                            {{ __('On Buy')}}
                        </p>
                        <h5 class="font-bold text-pureblack text-lg xl:text-2xl">
                            {{ __('৳2,00,000')}}
                        </h5>
                    </div>
                    <div class="text-center">
                        <p class="mb-1 text-sm text-[#607085] before:w-2 before:h-2 before:bg-[#22C55E] before:rounded-full before:inline-block">
                            {{ __('On Lease')}}
                        </p>
                        <h5 class="font-bold text-pureblack text-lg xl:text-2xl">
                            {{ __('৳1,35,000')}}
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report Item -->
        <div class="card-item bg-white rounded-2xl border border-slate-100">
            <h4 class="card-title font-semibold text-pureblack text-base xl:text-xl flex items-start justify-between gap-4 px-4 xl:px-6 pt-6">
                {{ __("Active Agreements") }}
                <div class="relative">
                    <a href="#" class="inline-flex whitespace-nowrap items-center gap-2 font-semibold text-sm px-3 xl:px-5 py-1.5 border border-slate-200 rounded-lg transition-all text-pureblack hover:bg-gunmetal hover:text-white">
                        View Full List
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 11L11 1" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M3 1H10.75C10.8881 1 11 1.11193 11 1.25V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </h4>
            <div class="card-body py-5">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">
                                <th>
                                    {{ __('Shop Name')}}
                                </th>
                                <th>
                                    {{ __('Property Name')}}
                                </th>
                                <th>
                                    {{ __('Agent')}}
                                </th>
                                <th>
                                    {{ __('Agreement Type')}}
                                </th>
                                <th>
                                    {{ __('Actions')}}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Retail D4')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Block : D, 1st Floor')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Gulshan Trade Square')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Gulshan-1, Dhaka')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    <a href="#" class="underline">{{ __('Sadiq Rahman')}}</a>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Buy')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
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
                                    {{ __('Retail D4')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Block : D, 1st Floor')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Gulshan Trade Square')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Gulshan-1, Dhaka')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    <a href="#" class="underline">{{ __('Sadiq Rahman')}}</a>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Buy')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
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
                                    {{ __('Retail D4')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Block : D, 1st Floor')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Gulshan Trade Square')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Gulshan-1, Dhaka')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    <a href="#" class="underline">{{ __('Sadiq Rahman')}}</a>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Buy')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
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
                                    {{ __('Retail D4')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Block : D, 1st Floor')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Gulshan Trade Square')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Gulshan-1, Dhaka')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    <a href="#" class="underline">{{ __('Sadiq Rahman')}}</a>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Buy')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
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
                                    {{ __('Retail D4')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Block : D, 1st Floor')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Gulshan Trade Square')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Gulshan-1, Dhaka')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    <a href="#" class="underline">{{ __('Sadiq Rahman')}}</a>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Buy')}}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
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

        <!-- Report Item -->
        <div class="card-item bg-white rounded-2xl border border-slate-100">
            <h4 class="card-title font-semibold text-pureblack text-base xl:text-xl flex items-start justify-between gap-4 px-4 xl:px-6 pt-6">
                {{ __("Submitted Shop Request") }}
                <div class="relative">
                    <a href="#" class="inline-flex whitespace-nowrap items-center gap-2 font-semibold text-sm px-3 xl:px-5 py-1.5 border border-slate-200 rounded-lg transition-all text-pureblack hover:bg-gunmetal hover:text-white">
                        View Full List
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 11L11 1" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M3 1H10.75C10.8881 1 11 1.11193 11 1.25V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </h4>
            <div class="card-body py-5">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">
                                <th>
                                    {{ __('Shop Name')}}
                                </th>
                                <th>
                                    {{ __('Property Name')}}
                                </th>
                                <th>
                                    {{ __('Submitted On')}}
                                </th>
                                <th>
                                    {{ __('Purchase Type')}}
                                </th>
                                <th>
                                    {{ __('Actions')}}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Retail D4')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Block : D, 1st Floor')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Gulshan Trade Square')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Gulshan-1, Dhaka')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('2025-06-12')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('11:22:05')}}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-green-500 bg-[#F0FDF5] inline-block px-2 py-1 rounded-full text-xs font-medium">
                                        {{ __('Buy')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
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
                                    {{ __('Retail D4')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Block : D, 1st Floor')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Gulshan Trade Square')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Gulshan-1, Dhaka')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('2025-06-12')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('11:22:05')}}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-violet-500 bg-[#F6F4FA] inline-block px-2 py-1 rounded-full text-xs font-medium">
                                        {{ __('Lease')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
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
                                    {{ __('Retail D4')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Block : D, 1st Floor')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Gulshan Trade Square')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Gulshan-1, Dhaka')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('2025-06-12')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('11:22:05')}}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-green-500 bg-[#F0FDF5] inline-block px-2 py-1 rounded-full text-xs font-medium">
                                        {{ __('Buy')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
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
                                    {{ __('Retail D4')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Block : D, 1st Floor')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Gulshan Trade Square')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Gulshan-1, Dhaka')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('2025-06-12')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('11:22:05')}}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-violet-500 bg-[#F6F4FA] inline-block px-2 py-1 rounded-full text-xs font-medium">
                                        {{ __('Lease')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
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
                                    {{ __('Retail D4')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Block : D, 1st Floor')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Gulshan Trade Square')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Gulshan-1, Dhaka')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('2025-06-12')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('11:22:05')}}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-violet-500 bg-[#F6F4FA] inline-block px-2 py-1 rounded-full text-xs font-medium">
                                        {{ __('Lease')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
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

    @push("modal")
    <!-- Shop Details Modal -->
    <div id="shop_details_modal" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
        
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
                <div class="thumb_meta grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="thumb lg:col-span-2">
                        <img src="{{ asset('/images/pic1.png') }}" alt="Property Image" class="w-full max-h-[420px] object-cover rounded-xl">
                    </div>
                    <div class="metainfo lg:rounded-xl lg:bg-gray-50 lg:p-4 space-y-3 xl:space-y-10">
                        <table class="w-full">
                            <tbody>
                                <tr class="*:px-3 *:py-1.5">
                                    <td class="w-32">
                                        {{ __("Lenght:") }}
                                    </td>
                                    <td class="font-bold text-black-500">
                                        {{ __("30 ft") }}
                                    </td>
                                </tr>
                                <tr class="*:px-3 *:py-1.5">
                                    <td class="w-32">
                                        {{ __("Width:") }}
                                    </td>
                                    <td class="font-bold text-black-500">
                                        {{ __("30 ft") }}
                                    </td>
                                </tr>
                                <tr class="*:px-3 *:py-1.5">
                                    <td class="w-32">
                                        {{ __("Area:") }}
                                    </td>
                                    <td class="font-bold text-black-500">
                                        {{ __("60 sq.ft") }}
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
                                        {{ __(" ft") }}
                                    </td>
                                </tr>
                                <tr class="*:px-3 *:py-1.5">
                                    <td class="w-32">
                                        {{ __("Full Width :") }}
                                    </td>
                                    <td class="font-bold text-black-500">
                                        {{ __("50 ft") }}
                                    </td>
                                </tr>
                                <tr class="*:px-3 *:py-1.5">
                                    <td class="w-32">
                                        {{ __("Total Area :") }}
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
                                        {{ __("Block :") }}
                                    </td>
                                    <td class="font-bold text-black-500">
                                        A
                                    </td>
                                </tr>
                                <tr class="*:px-3 *:py-1.5">
                                    <td class="w-32">
                                        {{ __("Floor :") }}
                                    </td>
                                    <td class="font-bold text-black-500">
                                        Ground
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="shop_info lg:col-span-2 space-y-6">
                        <h2 class="text-2xl lg:text-3xl font-bold text-black-500 flex items-end justify-between gap-4 mb-3">
                            {{ __("Shop: ") }} 101
                            <span class="inline-flex bg-green-200 text-green-600 text-sm px-5 py-1.5 rounded-3xl font-normal">
                                {{ __("Vacant") }}
                            </span>
                        </h2>
                        <div class="flex items-start gap-4">
                            <div class="flex-1">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dolore doloribus temporibus alias pariatur dolorum.
                            </div>
                            <div class="qr flex-[0_0_80px]">
                                <img src="{{ asset('/images/qr.png')}}" class="w-full border rounded-lg border-gray-200 overflow-hidden p-2" alt="Property Image">
                            </div>
                        </div>
                        <div class="feature grid grid-cols-3 gap-4 *:text-center *:py-8 *:rounded-xl *:space-y-1">
                            <div class="feature_item bg-[#ECFDF5]">
                                <div class="text-[#607085] text-sm">
                                    {{ __('Water Supply')}}
                                </div>
                                <div class="text-lg font-semibold text-gunmetal">
                                    {{ __('Common Line')}}
                                </div>
                            </div>
                            <div class="feature_item bg-[#F1F4FC]">
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
                            <div class="feature_item bg-[#F1F4FC]">
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
                            <div class="feature_item bg-[#F1F4FC]">
                                <div class="text-[#607085] text-sm">
                                    {{ __('Fire Exit Access')}}
                                </div>
                                <div class="text-lg font-semibold text-gunmetal">
                                    {{ __('Within 20 ft')}}
                                </div>
                            </div>
                        </div>
                        <div class="request-btn">
                            <a href="#" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                                Request for Purchase
                            </a>
                        </div>
                    </div>

                    <div class="approved_agent lg:row-span-2 text-center 2xl:pt-8">
                        <img src="{{ asset('/images/agents/1.png') }}" class="rounded-full w-40 h-40 mx-auto" alt="">
                        <div class="my-3 space-y-1">
                            <h5 class="font-body text-lg text-black-500 font-semibold">
                                James Milner
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
                                <a href="mailto:hello@gmail.com">
                                    {{ __('hello@gmail.com') }}
                                </a>
                            </p>
                            <p>
                                <a href="tel:">
                                    123457885
                                </a>
                            </p>
                        </div>
                        <div class="qr w-28 h-28 border rounded-lg border-gray-200 p-1.5 mx-auto">
                            <img src="{{ asset('/images/qr.png')}}" alt="" class="w-full">
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
    @endpush

    @push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>

        $(document).ready(function () {

            // Open modal
            $('[data-popup="modal"]').on('click', function (e) {
                e.preventDefault();
                const targetModal = $(this).attr('href');

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

    <script type="module">
        const chartJsOptions = [
            {
                id: "installment_payment_chart",
                type: 'doughnut',
                data: {
                    labels: ["Shop Buy", "Shop Lease"],
                    datasets: [
                        {
                            data: [15, 10],
                            backgroundColor: ['#F93A5C','#FFCCD2',],
                            hoverOffset: 1,
                            borderWidth: 0,
                        },
                    ],
                },
                options: {
                    reponsive: true,
                    borderRadius: 4,
                    borderJoinStyle: 'round',
                    spacing: 4,
                    plugins: {
                        legend : {
                            display : false,
                        }
                    },
                },
            },
            {
                id: "payment_installment_summery",
                type: 'doughnut',
                data: {
                    labels: ["Total Paid", "Installment Due"],
                    datasets: [
                        {
                            data: [335000, 65000],
                            backgroundColor: ['#22C55E','#DCFCE8'],
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
            },

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

    @endpush
</x-app-layout>