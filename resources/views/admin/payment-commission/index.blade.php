<x-app-layout>

    <div class="card-item bg-white rounded-2xl border border-slate-50 p-4">
        <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex justify-between gap-4 mb-4">
            {{ __("All Payment & Commissions") }}
            <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse dropdown relative">

                <button class="text-sm text-center flex items-center gap-1 w-full text-[#A6B1BF] font-normal" type="button" id="tableDropdownMenuButton1" data-bs-toggle="dropdown">
                    {{ __('Export')}} <iconify-icon icon="heroicons-outline:chevron-down"></iconify-icon>
                </button>
                <ul class="dropdown-menu min-w-[140px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                    <li>
                        <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                            {{ __('Export as CSV')}}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                            {{ __('Export as Excel')}}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                            {{ __('Export as pdf')}}
                        </a>
                    </li>
                </ul>

            </div>
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
                            <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_120px] space-y-1">
                                <label class="text-pureblack text-sm">{{ __('Buyer Name')}}</label>
                                <input type="text" placeholder="Nabila Hossen" class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                            </div>
                            <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_120px] space-y-1">
                                <label class="text-pureblack text-sm">{{ __('Agent Name')}}</label>
                                <input type="text" placeholder="Immam" class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                            </div>
                            <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_120px] space-y-1">
                                <label class="text-pureblack text-sm">{{ __('Deal Type')}}</label>
                                <select class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                                    <option value="" class="dark:bg-slate-700">All</option>
                                    <option value="Sale" class="dark:bg-slate-700">Sale</option>
                                    <option value="Lease" class="dark:bg-slate-700">Lease</option>
                                </select>
                            </div>
                            <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_120px] space-y-1">
                                <label class="text-pureblack text-sm">{{ __('Payout Status')}}</label>
                                <select class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                                    <option value="" class="dark:bg-slate-700">All</option>
                                    <option value="Paid" class="dark:bg-slate-700">Paid</option>
                                    <option value="Pending" class="dark:bg-slate-700">Pending</option>
                                    <option value="Rejected" class="dark:bg-slate-700">Rejected</option>
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
                                @if($agentPayment->status?->name == "Verified")
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
        <!-- Approve Security Money Modal -->
    <div id="approve_payment_modal" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
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
                <div class="payment_note bg-[#F8F9FB] p-4 rounded-xl">
                    <div class="label font-medium text-gunmetal mb-1">Employee Note</div>
                    <p class="text-sm text-[#8997A9]">
                        Note from Employee verification end if any...
                    </p>
                </div>
                <div class="mt-6 text-end space-x-1 *:text-sm *:py-3.5 *:px-5 xl:*:px-8 *:rounded-lg *:font-medium *:inline-flex *:gap-2 *:items-center *:justify-center *:transition-all">
                    <button type="button" id="reject_payment" class="text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                        Reject
                    </button>
                    <button type="button" id="approve_payment" class="bg-themered text-white ">
                        Approve
                    </button>
                </div>
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
