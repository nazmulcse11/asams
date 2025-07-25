<x-app-layout>



    <!-- States Cards -->
    <div class="states grid gap-4 xl:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mb-6">

        <div class="card shadow-md p-4 rounded-xl flex text-center gap-5">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#E1E5EA] inline-flex items-center justify-center">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30 14.1402C30 12.8002 29.34 11.5602 28.22 10.8202L20.22 5.48018C18.88 4.58018 17.12 4.58018 15.78 5.48018L7.78 10.8202C6.68 11.5602 6 12.8002 6 14.1402V25.5002C6 26.0602 6.44 26.5002 7 26.5002H29C29.56 26.5002 30 26.0602 30 25.5002V14.1402ZM18 21.5002C16.08 21.5002 14.5 19.9202 14.5 18.0002C14.5 16.0802 16.08 14.5002 18 14.5002C19.92 14.5002 21.5 16.0802 21.5 18.0002C21.5 19.9202 19.92 21.5002 18 21.5002Z" fill="#4B5768"/>
                    <path d="M44 42.5002H41.46V36.5002C43.36 35.8802 44.74 34.1002 44.74 32.0002V28.0002C44.74 25.3802 42.6 23.2402 39.98 23.2402C37.36 23.2402 35.22 25.3802 35.22 28.0002V32.0002C35.22 34.0802 36.58 35.8402 38.44 36.4802V42.5002H30V30.5002C30 29.9402 29.56 29.5002 29 29.5002H7C6.44 29.5002 6 29.9402 6 30.5002V42.5002H4C3.18 42.5002 2.5 43.1802 2.5 44.0002C2.5 44.8202 3.18 45.5002 4 45.5002H39.86C39.9 45.5002 39.92 45.5202 39.96 45.5202C40 45.5202 40.02 45.5002 40.06 45.5002H44C44.82 45.5002 45.5 44.8202 45.5 44.0002C45.5 43.1802 44.82 42.5002 44 42.5002ZM16.5 36.5002C16.5 35.6802 17.18 35.0002 18 35.0002C18.82 35.0002 19.5 35.6802 19.5 36.5002V42.5002H16.5V36.5002Z" fill="#4B5768"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p class="text-sm">
                    {{ __('Total Purchase Value') }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-3xl">
                    {{ __('৳32,00,000') }}
                </h6>
            </div>
        </div>

        <div class="card shadow-md p-4 rounded-xl flex items-center gap-5">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#DCFCE8] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.33203 20.0007C3.33203 10.8173 10.8154 3.33398 19.9987 3.33398C24.5647 3.33398 28.7105 5.18399 31.7251 8.17312L17.082 22.8162L13.3826 19.1168C12.8944 18.6286 12.103 18.6286 11.6148 19.1168C11.1267 19.6049 11.1267 20.3964 11.6148 20.8845L16.1981 25.4679C16.6863 25.956 17.4778 25.956 17.9659 25.4679L33.3685 10.0653C35.4384 12.8424 36.6654 16.2822 36.6654 20.0007C36.6654 29.184 29.182 36.6673 19.9987 36.6673C10.8154 36.6673 3.33203 29.184 3.33203 20.0007Z" fill="#22C55E"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p class="text-sm">
                    {{ __('Amount Paid') }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-3xl">
                    {{ __('৳4,75,000') }}
                </h6>
            </div>
        </div>

        <div class="card shadow-md p-4 rounded-xl flex items-center gap-5">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#FFFEC2] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28.9851 26.1167L22.2518 20H17.7351L11.0018 26.1167C9.11842 27.8167 8.50175 30.4333 9.41842 32.8C10.3351 35.15 12.5684 36.6667 15.0851 36.6667H24.9018C27.4351 36.6667 29.6518 35.15 30.5684 32.8C31.4851 30.4333 30.8684 27.8167 28.9851 26.1167ZM23.0351 30.2333H16.9684C16.3351 30.2333 15.8351 29.7167 15.8351 29.1C15.8351 28.4833 16.3518 27.9667 16.9684 27.9667H23.0351C23.6684 27.9667 24.1684 28.4833 24.1684 29.1C24.1684 29.7167 23.6518 30.2333 23.0351 30.2333Z" fill="#F5C400"/>
                    <path d="M30.5818 7.20065C29.6651 4.85065 27.4318 3.33398 24.9151 3.33398H15.0818C12.5651 3.33398 10.3318 4.85065 9.41514 7.20065C8.51514 9.56732 9.13181 12.184 11.0151 13.884L17.7485 20.0007H22.2651L28.9985 13.884C30.8651 12.184 31.4818 9.56732 30.5818 7.20065ZM23.0318 12.0507H16.9651C16.3318 12.0507 15.8318 11.534 15.8318 10.9173C15.8318 10.3007 16.3485 9.78398 16.9651 9.78398H23.0318C23.6651 9.78398 24.1651 10.3007 24.1651 10.9173C24.1651 11.534 23.6485 12.0507 23.0318 12.0507Z" fill="#F5C400"/>
                </svg>

            </div>
            <div class="info space-y-1">
                <p class="text-sm">
                    {{ __('Remaining Balance') }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-3xl">
                    {{ __('৳27,25,000') }}
                </h6>
            </div>
        </div>

        <div class="card shadow-md p-4 rounded-xl flex items-center gap-5">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#FFD4C7] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35 33.8737C35 34.4891 34.49 34.9994 33.875 34.9994H6.125C5.51 34.9994 5 34.4891 5 33.8737C5 33.2583 5.51 32.748 6.125 32.748H33.875C34.49 32.748 35 33.2583 35 33.8737Z" fill="#F8693B"/>
                    <path d="M25.0852 8.76721L8.97516 24.8867C8.36016 25.502 7.37016 25.502 6.77016 24.8867H6.75516C4.67016 22.7854 4.67016 19.3934 6.75516 17.3072L17.4802 6.57592C19.5802 4.47469 22.9702 4.47469 25.0702 6.57592C25.6852 7.16127 25.6852 8.16686 25.0852 8.76721Z" fill="#F8693B"/>
                    <path d="M33.2302 14.7228L28.6552 10.1451C28.0402 9.52975 27.0502 9.52975 26.4502 10.1451L10.3402 26.2646C9.72516 26.8649 9.72516 27.8555 10.3402 28.4709L14.9152 33.0635C17.0152 35.1498 20.4052 35.1498 22.5052 33.0635L33.2152 22.3323C35.3452 20.231 35.3452 16.824 33.2302 14.7228ZM21.1402 28.2757L19.3252 30.1068C18.9502 30.482 18.3352 30.482 17.9452 30.1068C17.5702 29.7316 17.5702 29.1162 17.9452 28.726L19.7752 26.8949C20.1352 26.5347 20.7652 26.5347 21.1402 26.8949C21.5152 27.2701 21.5152 27.9155 21.1402 28.2757ZM27.0952 22.3172L23.4352 25.9944C23.0602 26.3546 22.4452 26.3546 22.0552 25.9944C21.6802 25.6192 21.6802 25.0038 22.0552 24.6136L25.7302 20.9364C26.0902 20.5762 26.7202 20.5762 27.0952 20.9364C27.4702 21.3267 27.4702 21.942 27.0952 22.3172Z" fill="#F8693B"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p class="text-sm">
                    {{ __('Next Installment Due (2025-07-15)') }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-3xl">
                    {{ __('৳25,000') }}
                </h6>
            </div>
        </div>

    </div>


    <div class="card-item bg-white rounded-2xl border border-slate-50 p-4">
        <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex justify-between gap-4 mb-4">
            {{ __("Payment & Installment Schedule ") }}
            <a href="#make_payment_modal" data-popup="modal" class="text-themered inline-flex items-center gap-1 text-sm border border-themered rounded-lg px-4 py-2 transition-all hover:bg-themered hover:text-white">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 21.2625V2.73633" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21.2649 12.0007L2.73828 12" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                {{ __('New Payment')}}
            </a>
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
                                <option value="*" class="dark:bg-slate-700">Select Type</option>
                                <option value="Sale" class="dark:bg-slate-700">Sale</option>
                                <option value="Lease" class="dark:bg-slate-700">Lease</option>
                                <option value="Reservation" class="dark:bg-slate-700">Reservation</option>
                            </select>
                        </div>
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_120px] space-y-1">
                            <label class="text-pureblack text-sm">{{ __('Status')}}</label>
                            <select class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                                <option value="*" class="dark:bg-slate-700">All</option>
                                <option value="Paid" class="dark:bg-slate-700">Paid</option>
                                <option value="Upcoming" class="dark:bg-slate-700">Upcoming</option>
                                <option value="Due" class="dark:bg-slate-700">Due</option>
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
        <div class="card-body">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">
                            <th>
                                {{ __('Installment No.')}}
                            </th>
                            <th>
                                {{ __('Due Date')}}
                            </th>
                            <th>
                                {{ __('Amount')}}
                            </th>
                            <th>
                                {{ __('Status')}}
                            </th>
                            <th>
                                {{ __('Payment Date')}}
                            </th>
                            <th>
                                {{ __('Shop Name')}}
                            </th>
                            <th class="!text-end">
                                {{ __('Actions')}}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap *:text-sm *:text-pureblack">
                            <td>
                                {{ __('#1') }}
                            </td>
                            <td>
                                {{ __('2025-06-12') }}
                            </td>
                            <td>
                                {{ __('৳25,000') }}
                            </td>
                            <td>
                                <span class="text-green-500 bg-green-100 inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-medium">
                                    <iconify-icon icon="charm:circle-tick" width="16" height="16"></iconify-icon>
                                    {{ __('Paid')}}
                                </span>
                            </td>
                            <td>
                                {{ __('2025-06-12') }}
                            </td>
                            <td>
                                {{ __('Shop 101') }}
                            </td>
                            <td class="text-end">
                                <a href="#viewmodal" data-popup="modal" class="border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a href="documents.pdf" target="_blank" class="border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.52344 11.1758V16.1258L11.1734 14.4758" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.525 16.1266L7.875 14.4766" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20.25 10.35V14.475C20.25 18.6 18.6 20.25 14.475 20.25H9.525C5.4 20.25 3.75 18.6 3.75 14.475V9.525C3.75 5.4 5.4 3.75 9.525 3.75H13.65" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20.2484 10.35H16.9484C14.4734 10.35 13.6484 9.525 13.6484 7.05V3.75L20.2484 10.35Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap *:text-sm *:text-pureblack">
                            <td>
                                {{ __('#2') }}
                            </td>
                            <td>
                                {{ __('2025-06-12') }}
                            </td>
                            <td>
                                {{ __('৳25,000') }}
                            </td>
                            <td>
                                <span class="text-yellow-500 bg-yellow-100 inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-medium">
                                    <iconify-icon icon="mingcute:sandglass-line" width="16" height="16"></iconify-icon>
                                    {{ __('Upcoming')}}
                                </span>
                            </td>
                            <td>
                                {{ __('-') }}
                            </td>
                            <td>
                                {{ __('Shop 101') }}
                            </td>
                            <td class="text-end">
                                <a href="#" data-popup="modal" class="border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                    Pay Now
                                </a>
                            </td>
                        </tr>
                        <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap *:text-sm *:text-pureblack">
                            <td>
                                {{ __('#2') }}
                            </td>
                            <td>
                                {{ __('2025-06-12') }}
                            </td>
                            <td>
                                {{ __('৳25,000') }}
                            </td>
                            <td>
                                <span class="text-red-500 bg-red-100 inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-medium">
                                    <iconify-icon icon="solar:close-circle-outline" width="16" height="16"></iconify-icon>
                                    {{ __('Due')}}
                                </span>
                            </td>
                            <td>
                                {{ __('-') }}
                            </td>
                            <td>
                                {{ __('Shop 101') }}
                            </td>
                            <td class="text-end">
                                <a href="#" data-popup="modal" class="border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                    Pay Now
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @push("modal")
    <!-- Make Collection Modal -->
    <div id="make_payment_modal" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
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
                                {{ __('Bank Receipt')}} <span class="text-red-600">*</span>
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
                        <button type="submit" class="bg-themered text-white inline-flex items-center justify-center gap-2 rounded-lg px-5 py-3 transition-all hover:bg-gunmetal hover:px-6">
                            {{ __('Submit Payment')}}
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

            $('#make_payment_modal form').submit(function(e){
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
                                    Your Installment 1 of ৳75,000 for Shop 101 has been received successfully!
                                </h6>
                                <p class='text-sm'>
                                    A receipt has been sent to your email. You can view payment details and download your invoice anytime from your dashboard.
                                </p>
                            </div>
                        </div>`,
                    showCloseButton: true,
                    showConfirmButton: false,
                    // timer: 5000,
                    customClass: 'swal-wide'
                }).then( (result)=> {
                    $('#make_payment_modal').addClass('hidden').removeClass('show');
                });
            });

        </script>
    @endpush
</x-app-layout>
