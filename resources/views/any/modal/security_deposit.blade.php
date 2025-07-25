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
        <form id="securityDepositForm" action="{{ route("any.shop-reservation.security-deposit") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="reserve_id" value="{{ $item->id }}">
            <div class="field-body grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="field-item space-y-1">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __('Amount Received (৳)')}} <span class="text-red-600">*</span>
                    </label>
                    <input type="text" name="amount" inputmode="numeric" value="{{ $item->security_deposit }}" placeholder="{{ __('৳') }} {{ $item->security_deposit }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" />
                    <x-input-error :messages="$errors->get('amount')" class="mt-1"/>
                </div>
                <div class="field-item space-y-1">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __('Payment Date')}} <span class="text-red-600">*</span>
                    </label>
                    <input type="date" value="2025-06-10" name="date" class="w-full text-sm py-[12px] px-4 bg-white border rounded-lg cursor-pointer" />
                    <x-input-error :messages="$errors->get('date')" class="mt-1"/>
                </div>
                <div class="field-item space-y-1">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __('Mode of Payment')}} <span class="text-red-600">*</span>
                    </label>
                    <select name="payment_mode_id" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" >
                        @foreach(dropdown_options("payment-mode") as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('payment_mode_id')" class="mt-1"/>
                </div>
                <div class="field-item space-y-1">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __('Reference/Txn ID')}} <span class="text-red-600">*</span>
                    </label>
                    <input type="text" name="reference" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" placeholder="TXN-20250601-001" />
                    <x-input-error :messages="$errors->get('reference')" class="mt-1"/>
                </div>
                <div class="field-item space-y-2 md:col-span-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __('Screenshot/Bank Deposit Slip/Cheque Copy')}} <span class="text-red-600">*</span>
                    </label>
                    <input type="file" name="document_path" class="text-sm w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-2 file:py-[5px] file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white file:font-light" />
                    <x-input-error :messages="$errors->get('document_path')" class="mt-1"/>
                </div>
                <div class="field-item space-y-2 md:col-span-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __('Notes')}}<span class="text-xs text-[#8997A9]">(Any specific comments or remarks)</span>
                    </label>
                    <textarea name="notes" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"></textarea>
                    <x-input-error :messages="$errors->get('notes')" class="mt-1"/>
                </div>
            </div>

            <div class="mt-6 text-end">
                <button type="submit" class="group max-md:text-sm bg-themered text-white inline-flex items-center justify-center gap-2 rounded-lg px-3 lg:px-4 py-2 lg:py-3">
                    Submit Deposit Payment
                    <svg class="transition-all group-hover:scale-110" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="transition-all duration-300 group-hover:rotate-[360deg] origin-center"></path>
                        <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</div>
