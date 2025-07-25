<x-app-layout>



    <!-- States Cards -->
    <div class="states grid gap-4 xl:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mb-6 *:shadow-sm *:p-4 *:rounded-xl *:flex *:items-center *:gap-5">

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#DCFCE8] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.33203 20.0007C3.33203 10.8173 10.8154 3.33398 19.9987 3.33398C24.5647 3.33398 28.7105 5.18399 31.7251 8.17312L17.082 22.8162L13.3826 19.1168C12.8944 18.6286 12.103 18.6286 11.6148 19.1168C11.1267 19.6049 11.1267 20.3964 11.6148 20.8845L16.1981 25.4679C16.6863 25.956 17.4778 25.956 17.9659 25.4679L33.3685 10.0653C35.4384 12.8424 36.6654 16.2822 36.6654 20.0007C36.6654 29.184 29.182 36.6673 19.9987 36.6673C10.8154 36.6673 3.33203 29.184 3.33203 20.0007Z" fill="#22C55E"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p class="text-sm">
                    {{ __('Total Collected') }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-3xl">
                    {{ __('৳4,75,000') }}
                </h6>
            </div>
        </div>

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#FFFEC2] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28.9851 26.1167L22.2518 20H17.7351L11.0018 26.1167C9.11842 27.8167 8.50175 30.4333 9.41842 32.8C10.3351 35.15 12.5684 36.6667 15.0851 36.6667H24.9018C27.4351 36.6667 29.6518 35.15 30.5684 32.8C31.4851 30.4333 30.8684 27.8167 28.9851 26.1167ZM23.0351 30.2333H16.9684C16.3351 30.2333 15.8351 29.7167 15.8351 29.1C15.8351 28.4833 16.3518 27.9667 16.9684 27.9667H23.0351C23.6684 27.9667 24.1684 28.4833 24.1684 29.1C24.1684 29.7167 23.6518 30.2333 23.0351 30.2333Z" fill="#F5C400"/>
                    <path d="M30.5818 7.20065C29.6651 4.85065 27.4318 3.33398 24.9151 3.33398H15.0818C12.5651 3.33398 10.3318 4.85065 9.41514 7.20065C8.51514 9.56732 9.13181 12.184 11.0151 13.884L17.7485 20.0007H22.2651L28.9985 13.884C30.8651 12.184 31.4818 9.56732 30.5818 7.20065ZM23.0318 12.0507H16.9651C16.3318 12.0507 15.8318 11.534 15.8318 10.9173C15.8318 10.3007 16.3485 9.78398 16.9651 9.78398H23.0318C23.6651 9.78398 24.1651 10.3007 24.1651 10.9173C24.1651 11.534 23.6485 12.0507 23.0318 12.0507Z" fill="#F5C400"/>
                </svg>

            </div>
            <div class="info space-y-1">
                <p class="text-sm">
                    {{ __('Pending Verifications') }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-3xl">
                    {{ __('12') }}
                </h6>
            </div>
        </div>

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#E6E0F4] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.24682 22.2602L9.28305 21.3783C11.1251 19.8103 13.9186 19.9656 15.5651 21.7274L19.6113 26.0569C20.9132 27.4501 19.2504 32.058 18.3034 33.6974C18.3034 33.6974 19.1353 36.0561 21.6309 34.4287L29.4621 29.2571C29.8835 29.0112 30.1067 28.3332 29.9496 27.9191L21.4912 16.5801C21.1188 16.073 20.4561 15.8525 19.8425 16.0316L16.1211 17.1176C14.5382 17.5794 12.8224 17.1586 11.6539 16.022L11.2155 15.5956C10.365 14.7682 10.5029 13.2724 10.5029 12.5811V10.1692C10.5029 9.89307 10.2791 9.66923 10.0031 9.66917L6.00024 9.66821C5.44786 9.66808 5 10.1158 5 10.6682V22.1413C5 22.2195 5.01834 22.2966 5.05355 22.3664L5.70816 23.6646C5.85563 23.957 6.23981 24.0311 6.48541 23.8144L8.24682 22.2602Z" fill="#9881CB"/>
                    <path d="M24.7073 5.69999C23.3359 4.75037 21.6693 4.75037 19.7952 5.75196L13.7864 9.70407C13.5052 9.88902 13.3359 10.203 13.3359 10.5396V13.3904C13.3359 13.5277 13.3924 13.6589 13.492 13.7533L13.7968 14.0422C14.187 14.4302 14.7599 14.5738 15.2885 14.4161L19.0164 13.304C20.8605 12.7538 22.8523 13.4312 23.9714 14.9892L31.6693 25.834H34.0026C34.5549 25.834 35.0026 25.3863 35.0026 24.834V11.6673C35.0026 10.0007 33.5033 9.64434 33.5033 9.64434C32.9327 9.64434 31.4938 9.64434 30.9401 9.64434L24.7073 5.69999Z" fill="#9881CB"/>
                    <path d="M11.2707 23.8828L7.11868 27.2915C6.88041 27.4871 6.8742 27.8496 7.10563 28.0533L14.5268 34.5839C14.7678 34.796 15.1433 34.7293 15.2965 34.4472L17.6141 30.1794C17.9366 29.6182 17.8589 28.9143 17.4217 28.4359L13.3684 24.002C12.8186 23.4005 11.8858 23.3476 11.2707 23.8828Z" fill="#9881CB"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p class="text-sm">
                    {{ __('No. of Buyers Paid') }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-3xl">
                    {{ __('52') }}
                </h6>
            </div>
        </div>

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#FFE3E5] inline-flex items-center justify-center">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.0029 0.332031C26.1863 0.332031 33.6699 7.81569 33.6699 16.999C33.6699 26.1824 26.1863 33.666 17.0029 33.666C7.8196 33.666 0.335938 26.1824 0.335938 16.999C0.335938 7.81569 7.8196 0.332032 17.0029 0.332031ZM22.5332 11.4688C22.2403 11.1759 21.7655 11.1759 21.4727 11.4688L17.0029 15.9385L12.5332 11.4688C12.2403 11.1759 11.7655 11.1759 11.4727 11.4688C11.1798 11.7616 11.1798 12.2364 11.4727 12.5293L15.9424 16.999L11.4727 21.4688C11.1798 21.7616 11.1798 22.2364 11.4727 22.5293C11.7655 22.8222 12.2403 22.8222 12.5332 22.5293L17.0029 18.0596L21.4727 22.5293L21.5293 22.5811C21.8239 22.8214 22.2586 22.8039 22.5332 22.5293C22.8078 22.2547 22.8253 21.82 22.585 21.5254L22.5332 21.4688L18.0635 16.999L22.5332 12.5293C22.8261 12.2364 22.8261 11.7616 22.5332 11.4688Z" fill="#E71741"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p class="text-sm">
                    {{ __('Failed Transactions') }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-3xl">
                    2
                </h6>
            </div>
        </div>

    </div>


    <div class="card-item bg-white rounded-2xl border border-slate-50 p-4">
        <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex justify-between gap-4 mb-4">
            {{ __("Payment Collection List") }}
            <a href="#collect_payment_modal" data-popup="modal" class="text-themered inline-flex items-center gap-1 text-sm border border-themered rounded-lg px-4 py-2 transition-all hover:bg-themered hover:text-white">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 21.2625V2.73633" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21.2649 12.0007L2.73828 12" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                {{ __('Collect Payment')}}
            </a>
        </h4>
        <div class="card-body">
            <!-- Search & Filter form -->
            <form class="mb-6 px-4">
                <div class="flex flex-wrap items-end justify-between gap-3 xl:gap-6">
                    <div class="left">
                        <div class="input-area relative">
                            <input type="text" name="s" class="w-full px-4 py-3 !pl-9 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]" placeholder="Search">
                            <span class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full border-none flex items-center justify-center pl-2">
                                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:search"></iconify-icon>
                            </span>
                        </div>
                    </div>
                    <div class="right ">
                        <div class="flex flex-wrap items-end gap-3 xl:gap-6">
                            <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_220px] relative space-y-1">
                                <label class="text-pureblack text-sm">{{ __('Date Range')}}</label>
                                <x-date-range-picker id="due_date" />
                            </div>
                            <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_180px] space-y-1">
                                <label class="text-pureblack text-sm">{{ __('Payment Method')}}</label>
                                <select class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                                    <option value="*" class="dark:bg-slate-700">All</option>
                                    <option value="" class="dark:bg-slate-700">Bank Transfer</option>
                                    <option value="" class="dark:bg-slate-700">Bkash Payment</option>
                                    <option value="" class="dark:bg-slate-700">Nagad Payment</option>
                                    <option value="" class="dark:bg-slate-700">Rocket Payment</option>
                                    <option value="" class="dark:bg-slate-700">Cash Payment</option>
                                </select>
                            </div>
                            <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_120px] space-y-1">
                                <label class="text-pureblack text-sm">{{ __('Status')}}</label>
                                <select class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                                    <option value="" class="dark:bg-slate-700">All</option>
                                    <option value="Verified" class="dark:bg-slate-700">Verified</option>
                                    <option value="Pending" class="dark:bg-slate-700">Pending</option>
                                    <option value="Failed" class="dark:bg-slate-700">Failed</option>
                                    <option value="Upcoming" class="dark:bg-slate-700">Upcoming</option>
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
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">
                            <th>
                                {{ __('Txn ID')}}
                            </th>
                            <th>
                                {{ __('Payer Name')}}
                            </th>
                            <th>
                                {{ __('Shop Name')}}
                            </th>
                            <th>
                                {{ __('Property Name')}}
                            </th>
                            <th>
                                {{ __('Amount (৳)')}}
                            </th>
                            <th>
                                {{ __('Prefarred Payment')}}
                            </th>
                            <th>
                                {{ __('Payment Method') }}
                            </th>
                            <th>
                                {{ __('Date')}}
                            </th>
                            <th>
                                {{ __('Status')}}
                            </th>
                            <th class="!text-end">
                                {{ __('Actions')}}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($agentPayments as $agentPayment)
                        <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap *:text-sm *:text-pureblack">
                            <td>
                                {{ $agentPayment->public_id }}
                            </td>
                            <td>
                                <a href="#" class="flex items-center gap-2 font-medium min-w-max">
                                    <img src="{{ authAvatar($agentPayment?->agent?->profile ?? $agentPayment->agent->username) }}"
                                        class="w-10 h-10 object-cover rounded-full"
                                        alt="{{ $agentPayment->agent?->username }}">
                                    <span class="whitespace-nowrap text-sm font-medium text-pureblack underline">
                                        {{ $agentPayment->agent?->profile?->full_name ?? $agentPayment->agent?->username }}
                                    </span>
                                </a>
                            </td>
                            <td>
                                {{ __('Shop ') }} {{ $agentPayment->shop?->number ?? 'N/A'}}
                            </td>
                            <td>
                                {{ $agentPayment->shop?->floor?->property?->name ?? 'N/A'}}
                            </td>
                            <td>
                                {{ $agentPayment->amount }}
                            </td>
                            <td>
                                {{ __('Security Money') }}
                            </td>
                            <td>
                                {{ $agentPayment->paymentMode?->name ?? 'N/A' }}
                            </td>
                            <td>
                                {{ $agentPayment->date->format('d M Y') }}
                            </td>
                            <td>
                                @if($agentPayment->status?->name == "Verified" || $agentPayment->status?->name == "Approved")
                                <span class="text-green-500 bg-green-100 inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-medium">
                                    <iconify-icon icon="charm:circle-tick" width="16" height="16"></iconify-icon>
                                    {{ $agentPayment->status?->name }}
                                </span>
                                @elseif($agentPayment->status?->name == "Rejected")
                                    <span class="text-red-500 bg-red-100 inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-medium">
                                        <iconify-icon icon="ep:circle-close" width="16" height="16"></iconify-icon>
                                        {{ $agentPayment->status?->name }}
                                    </span>
                                @elseif($agentPayment->status?->name == "Pending")
                                    <span class="text-yellow-500 bg-yellow-100 inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-medium">
                                    <iconify-icon icon="basil:sand-watch-outline" width="16" height="16"></iconify-icon>
                                    {{ $agentPayment->status?->name }}
                                </span>
                                @endif
                            </td>
                            <td class="text-end">
                                @if($agentPayment->status?->name == "Pending")
                                    <button id="verify_payment_{{ $agentPayment->id }}" data-agent-payment-id="{{ $agentPayment->id }}" class="verify_payment_{{ $agentPayment->id }} verify_payment border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center gap-1.5 transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @push("modal")
        <div id="page_modal" class="asams-modal fixed inset-0 z-[1024] p-4 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
            <!-- dynamic generated modal content -->
        </div>

    <!-- Collect Payment Modal -->
    <div id="collect_payment_modal" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
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
                            <text x="18" y="21" text-anchor="middle" fill="currentColor" font-size="10" class="step-count-placeholder">1/2</text>
                        </svg>
                    </div>

                    <!-- Step 1 -->
                    <fieldset class="step space-y-6 hidden" data-step="1">
                        <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                            <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                               <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3C16.5431 3 17.0746 3.14668 17.542 3.42285C18.009 3.69879 18.3944 4.09365 18.666 4.56348L18.669 4.56836L27.5938 20.2031C27.8594 20.6858 27.9985 21.2299 28 21.7812C28.0015 22.3327 27.8656 22.8781 27.6026 23.3623C27.3394 23.8467 26.9562 24.2564 26.4873 24.5459C26.018 24.8356 25.4804 24.9936 24.9287 25H7.0713C6.51965 24.9936 5.98199 24.8356 5.51271 24.5459C5.04382 24.2564 4.66064 23.8467 4.39747 23.3623C4.13444 22.8781 3.99854 22.3327 4.00001 21.7812C4.00155 21.2299 4.14065 20.6858 4.40626 20.2031L4.41407 20.1895L13.334 4.56348C13.6056 4.09365 13.991 3.69879 14.458 3.42285C14.9255 3.14668 15.4569 3 16 3ZM16 18.4932C15.2533 18.4932 14.667 19.0938 14.667 19.8271C14.6673 20.5603 15.2668 21.1602 16 21.1602C16.7465 21.1602 17.3328 20.5603 17.333 19.8271C17.333 19.0938 16.7333 18.4932 16 18.4932ZM16 8.50684C15.4533 8.50684 15 8.96017 15 9.50684V15.9463C15 16.493 15.4533 16.9463 16 16.9463C16.5467 16.9463 17 16.493 17 15.9463V9.50684C17 8.96017 16.5467 8.50684 16 8.50684Z" fill="#2B323B"/>
                                </svg>
                            </div>
                            <div class="">
                                <h2 class="text-xl font-semibold text-gray-900">
                                    Buyer & Shop Info.
                                </h2>
                                <p class="text-sm text-gray-500 font-light">
                                    Connect this payment to the correct buyer and shop.
                                </p>
                            </div>
                        </div>

                        <div class="field-body grid grid-cols-1 sm:grid-cols-2 gap-4">

                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Buyer Name')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="text" name="buyer_name" value="" placeholder="{{ __('e. g; David Warner')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" />
                                <x-input-error :messages="$errors->get('buyer_name')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Buyer ID')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="text" name="buyer_id" value="" placeholder="{{ __('BUY-10523')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" />
                                <x-input-error :messages="$errors->get('buyer_id')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Shop Name') }}
                                </label>
                                <select name="shop_name" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg">
                                    <option value="101">101</option>
                                    <option value="102">102</option>
                                    <option value="115">115</option>
                                </select>
                                <x-input-error :messages="$errors->get('shop_name')" class="mt-2" />
                            </div>
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Floor') }}
                                </label>
                                <select name="shop_floor" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg">
                                    <option value="1st Floor">1st Floor</option>
                                    <option value="2nd Floor">2nd Floor</option>
                                    <option value="3rd Floor">3rd Floor</option>
                                </select>
                                <x-input-error :messages="$errors->get('shop_floor')" class="mt-2" />
                            </div>
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Block') }}
                                </label>
                                <select name="shop_block" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C1">C1</option>
                                </select>
                                <x-input-error :messages="$errors->get('shop_block')" class="mt-2" />
                            </div>
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Property Name') }}
                                </label>
                                <input type="text" name="property_name" value="" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('Nur Super Market') }}" >
                                <x-input-error :messages="$errors->get('property_name')" class="mt-2" />
                            </div>
                            <div class="field-item space-y-2 sm:col-span-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Address')}}
                                </label>
                                <input type="text" name="shop_address" value="" placeholder="{{ __('Address Line is here')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" />
                                <x-input-error :messages="$errors->get('shop_address')" class="mt-1"/>
                            </div>

                        </div>

                        <div class="mt-10 flex justify-between *:flex *:items-center *:justify-center *:gap-3 *:rounded-lg *:px-6 *:py-3 *:transition-all">
                            <button type="button" class="next-step bg-red-600 text-white hover:bg-red-700 ml-auto">
                                {{ __('Proceed')}}
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </fieldset>

                    <!-- Step 3 -->
                    <fieldset class="step space-y-6 hidden" data-step="2">
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
                                    {{ __('Payment Details')}}
                                </h2>
                                <p class="text-sm text-gray-500 font-light">
                                    {{ __('Add how and how much you’ve paid for this shop.')}}
                                </p>
                            </div>
                        </div>

                        <div class="form-body grid gap-6 grid-cols-1 md:grid-cols-2 my-10 items-end">
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Payment Type')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="preffered_payment" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" >
                                    <option value="installment_1" disabled>Installment 1</option>
                                    <option value="installment_2">Installment 2</option>
                                    <option value="installment_3">Installment 3</option>
                                    <option value="installment_4">Installment 4</option>
                                </select>
                                <x-input-error :messages="$errors->get('preffered_payment')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Amount Received (৳)')}}
                                </label>
                                <input type="text" name="booking_advance" value="" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="{{ __('৳3,50,000')}}"/>
                                <x-input-error :messages="$errors->get('booking_advance')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Payment Method')}}
                                </label>
                                 <select name="payment_method" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg">
                                    <option value="" class="dark:bg-slate-700">Bank Transfer</option>
                                    <option value="" class="dark:bg-slate-700">Bkash Payment</option>
                                    <option value="" class="dark:bg-slate-700">Nagad Payment</option>
                                    <option value="" class="dark:bg-slate-700">Rocket Payment</option>
                                    <option value="" class="dark:bg-slate-700">Cash Payment</option>
                                </select>
                                <x-input-error :messages="$errors->get('payment_method')" class="mt-1"/>
                            </div>

                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Reference/Txn ID')}}
                                </label>
                                <input type="text" name="txn_id" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="TXN-20250601-001">
                                <x-input-error :messages="$errors->get('txn_id')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2 md:col-span-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Notes')}}
                                </label>
                                <textarea name="notes" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" rows="4"></textarea>
                                <x-input-error :messages="$errors->get('notes')" class="mt-1"/>
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
                            <button type="submit" class="bg-red-600 text-white finish-step">
                                {{ __('Submit Payment')}}
                            </button>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>

    <!-- Verify Security Money Modal -->
    <div id="verify_payment_modal" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
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
                <div class="payment_info grid grid-cols-2 md:grid-cols-3 gap-2 md:gap-3 xl:gap-4 *:bg-[#F8F9FB] *:text-center *:py-6 *:px-2 *:rounded-xl *:space-y-1 *:flex *:flex-col *:justify-center">
                    <div class="info-item">
                        <div class="text-[#607085] text-sm">
                            {{ __('Amount Received')}}
                        </div>
                        <div class="text-base 2xl:text-xl font-bold text-gunmetal">
                            {{ __('৳1,25,000')}}
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="text-[#607085] text-sm">
                            {{ __('Preferred Payment')}}
                        </div>
                        <div class="text-base 2xl:text-xl font-bold text-gunmetal">
                            {{ __('Security Money')}}
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="text-[#607085] text-sm">
                            {{ __('Payment Date')}}
                        </div>
                        <div class="text-base 2xl:text-xl font-bold text-gunmetal">
                            {{ __('2025-06-12')}}
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="text-[#607085] text-sm">
                            {{ __('Mode of Payment')}}
                        </div>
                        <div class="text-base font-bold text-gunmetal">
                            {{ __('Bank Transfer')}}
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="text-[#607085] text-sm">
                            {{ __('Reference/Txn ID')}}
                        </div>
                        <div class="text-base font-bold text-gunmetal">
                            {{ __('TXN-20250601-001')}}
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="text-[#607085] text-sm">
                            {{ __('Payment Proof Document')}}
                        </div>
                        <div class="text-base font-bold text-gunmetal">
                            <a href="slip.pdf" target="_blank" class="bg-[#FFF0F1] text-themered rounded-lg px-4 py-2 font-medium text-sm inline-flex items-center gap-1.5 transition-all hover:bg-gunmetal hover:text-white">
                                View Document
                            </a>
                        </div>
                    </div>
                </div>
                <div class="payment_note bg-[#F8F9FB] p-4 rounded-xl">
                    <div class="label font-medium text-gunmetal mb-1">Payment Note</div>
                    <p class="text-sm text-[#8997A9]">
                        Note from Agent/Buyer end...
                    </p>
                </div>
                <form action="#">
                    <div class="field-item space-y-1">
                        <label class="text-gunmetal font-medium block text-sm">
                            {{ __('Notes')}}<span class="text-xs text-[#8997A9]">(Any specific comments or remarks)</span>
                        </label>
                        <textarea name="notes" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" rows="4" placeholder="Specific comments or remarks here..."></textarea>
                        <x-input-error :messages="$errors->get('notes')" class="mt-1"/>
                    </div>

                    <div class="mt-6 text-end space-x-1 *:text-sm *:py-3.5 *:px-5 xl:*:px-8 *:rounded-lg *:font-medium *:inline-flex *:gap-2 *:items-center *:justify-center *:transition-all">
                        <button type="button" id="reject_payemnt" class="text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                            Reject
                        </button>
                        <button type="button" id="verify_payment" class="bg-themered text-white ">
                            Verify
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endpush

    @push("scripts")
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                document.querySelectorAll('.verify_payment').forEach(button => {
                    button.addEventListener('click', function () {
                        const itemId = this.dataset.agentPaymentId;

                        axios.get('{{ route("any.shop-reservation.security-approve-modal") }}', {
                            params: {
                                agent_payment_id: itemId,
                            }
                        })
                            .then(response => {
                                console.log(response.data);
                                document.getElementById("page_modal").innerHTML = response.data.html;
                                document.querySelectorAll('#page_modal').forEach(modal => {
                                    modal.classList.add('show');
                                    modal.classList.remove('hidden');
                                });
                                securityDepositApprovalStore();
                            }).catch(error => {
                            console.error(error);
                        });

                    });
                });
            });

            function securityDepositApprovalStore(){
                document.querySelectorAll('.security_deposit_verify, .security_deposit_reject, .security_deposit_approve').forEach(button => {
                    button.addEventListener('click', function () {
                        const agentPaymentId = this.dataset.agentPaymentId;

                        let url = '';
                        if (this.classList.contains('security_deposit_verify')) {
                            url = '{{ route("any.shop-reservation.security-verify") }}';
                        } else if (this.classList.contains('security_deposit_reject')) {
                            url = '{{ route("any.shop-reservation.security-reject") }}';
                        } else if (this.classList.contains('security_deposit_approve')) {
                            url = '{{ route("any.shop-reservation.security-approve") }}';
                        }

                        if (!url) {
                            console.error("No URL defined for this button.");
                            return;
                        }

                        axios.post(url, {
                            agent_payment_id: agentPaymentId,
                            notes: document.getElementById('security_notes').value,
                        }, {
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        })
                            .then(response => {
                                if(response.data.success) {
                                    location.reload();
                                }
                            }).catch(error => {
                            console.error(error);
                        });
                    });
                });
            }
        </script>

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
        </style>
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
    @endpush
</x-app-layout>
