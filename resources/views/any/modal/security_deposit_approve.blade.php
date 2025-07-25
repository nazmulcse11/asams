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
                    <b class="text-pureblack">{{ $item->shop?->number }}</b>
                </td>
            </tr>
            <tr class="*:bg-[#F8F9FB] *:border *:border-slate-100 *:px-4 *:py-1.5 *:text-xs *:leading-4 *:text-center">
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
            <tr class="*:bg-[#F8F9FB] *:border *:border-slate-100 *:px-4 *:py-1.5 *:text-xs *:leading-4 *:text-center">
                <td>
                    Property <br>
                    <b class="text-pureblack">{{ $item->shop?->floor?->property?->name }}</b>
                </td>
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
        <div class="payment_info grid grid-cols-2 md:grid-cols-3 gap-2 md:gap-3 xl:gap-4 *:bg-[#F8F9FB] *:text-center *:py-6 *:px-2 *:rounded-xl *:space-y-1 *:flex *:flex-col *:justify-center">
            <div class="info-item">
                <div class="text-[#607085] text-sm">
                    {{ __('Amount Received')}}
                </div>
                <div class="text-base 2xl:text-xl font-bold text-gunmetal">
                    ৳{{ $item->amount }}
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
                    {{ $item->date->format('Y-m-d') }}
                </div>
            </div>
            <div class="info-item">
                <div class="text-[#607085] text-sm">
                    {{ __('Mode of Payment')}}
                </div>
                <div class="text-base font-bold text-gunmetal">
                    {{ $item->paymentMode->name }}
                </div>
            </div>
            <div class="info-item">
                <div class="text-[#607085] text-sm">
                    {{ __('Reference/Txn ID')}}
                </div>
                <div class="text-base font-bold text-gunmetal">
                    {{ $item->public_id }}
                </div>
            </div>
            <div class="info-item">
                <div class="text-[#607085] text-sm">
                    {{ __('Payment Proof Document')}}
                </div>
                <div class="text-base font-bold text-gunmetal">
                    <a href="{{ url("storage/{$item->document_path}") }}" target="_blank" class="bg-[#FFF0F1] text-themered rounded-lg px-4 py-2 font-medium text-sm inline-flex items-center gap-1.5 transition-all hover:bg-gunmetal hover:text-white">
                        View Document
                    </a>
                </div>
            </div>
        </div>
        <div class="payment_note bg-[#F8F9FB] p-4 rounded-xl">
            <div class="label font-medium text-gunmetal mb-1">Payment Note</div>
            <p class="text-sm text-[#8997A9]">
                {{ $item->notes }}
            </p>
        </div>

        @if(getCurrentGuard() == 'employee')
        <div class="field-item space-y-1">
            <label class="text-gunmetal font-medium block text-sm">
                {{ __('Notes')}}<span class="text-xs text-[#8997A9]">(Any specific comments or remarks)</span>
            </label>
            <textarea name="security_notes" id="security_notes" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" rows="4" placeholder="Specific comments or remarks here..."></textarea>
            <x-input-error :messages="$errors->get('security_notes')" class="mt-1"/>
        </div>
        @elseif(getCurrentGuard() == 'admin')
            <div class="payment_note bg-[#F8F9FB] p-4 rounded-xl">
                <div class="label font-medium text-gunmetal mb-1">Employee Note</div>
                <p class="text-sm text-[#8997A9]">
                    {{ $item->employee_notes }}
                </p>
            </div>

            <div class="field-item space-y-1">
                <label class="text-gunmetal font-medium block text-sm">
                    {{ __('Notes')}}<span class="text-xs text-[#8997A9]">(Any specific comments or remarks)</span>
                </label>
                <textarea name="security_notes" id="security_notes" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" rows="4" placeholder="Specific comments or remarks here..."></textarea>
                <x-input-error :messages="$errors->get('security_notes')" class="mt-1"/>
            </div>
        @endif

        <div class="mt-6 text-end space-x-1 *:text-sm *:py-3.5 *:px-5 xl:*:px-8 *:rounded-lg *:font-medium *:inline-flex *:gap-2 *:items-center *:justify-center *:transition-all">
            <button type="button" id="security_deposit_reject" data-agent-payment-id="{{ $item->id }}" class="security_deposit_reject_{{ $item->id }} security_deposit_reject text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                Reject
            </button>
            @if(getCurrentGuard() == 'employee')
            <button type="button" id="security_deposit_verify" data-agent-payment-id="{{ $item->id }}" class="security_deposit_verify_{{ $item->id }} security_deposit_verify bg-themered text-white">
                Verify
            </button>
            @elseif(getCurrentGuard() == 'admin')
                <button type="button" id="security_deposit_approve" data-agent-payment-id="{{ $item->id }}" class="security_deposit_approve{{ $item->id }} security_deposit_approve bg-themered text-white">
                    Verify
                </button>
            @endif
        </div>
    </div>
</div>
