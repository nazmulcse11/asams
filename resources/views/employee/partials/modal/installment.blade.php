<div
    class="modal-content bg-white w-full max-w-4xl mx-auto p-6 lg:p-8 xl:p-10 border border-slate-400 rounded-2xl relative">
    <button
        class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
        <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
    </button>
    <form id="multiStepForm" class="installment_plan" action="{{ route("employee.installment.storePlan") }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="buyer_shop_id" value="{{ $item?->id }}">
        <div class="form-steps relative">
            <div class="absolute right-2 top-2">
                <svg viewBox="0 0 36 36" class="progress-circle w-12 h-12">
                    <circle class="progress-bg" cx="18" cy="18" r="16"/>
                    <circle class="progress-bar" cx="18" cy="18" r="16"/>
                    <text x="18" y="21" text-anchor="middle" fill="currentColor" font-size="10"
                          class="step-count-placeholder">1/3
                    </text>
                </svg>
            </div>

            <!-- Step 2 -->
            <fieldset class="step space-y-6 hidden" data-step="2">
                <div
                    class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                    <div
                        class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24Z"
                                fill="#F0F2F4"/>
                            <path
                                d="M35.9765 19.9734L35.642 16.8272C35.1577 13.397 33.5776 12 30.1984 12H27.4766H25.7697H22.2637H20.5568H17.7888C14.3981 12 12.8296 13.397 12.3337 16.8613L12.0223 19.9848C11.907 21.2001 12.2414 22.3813 12.968 23.3013C13.8445 24.4258 15.1939 25.0618 16.6932 25.0618C18.1464 25.0618 19.5419 24.3463 20.4184 23.1991C21.2026 24.3463 22.5405 25.0618 24.0282 25.0618C25.516 25.0618 26.8192 24.3804 27.615 23.2445C28.5031 24.369 29.8755 25.0618 31.3056 25.0618C32.8395 25.0618 34.2235 24.3917 35.0885 23.2105C35.7804 22.3018 36.0918 21.1547 35.9765 19.9734Z"
                                fill="#2B323B"/>
                            <path
                                d="M23.275 29.5029C21.8103 29.6506 20.7031 30.8773 20.7031 32.3311V35.4432C20.7031 35.7499 20.9569 35.9998 21.2682 35.9998H26.7695C27.0809 35.9998 27.3346 35.7499 27.3346 35.4432V32.7286C27.3462 30.3548 25.9276 29.2303 23.275 29.5029Z"
                                fill="#2B323B"/>
                            <path
                                d="M34.8317 26.9334V30.3181C34.8317 33.453 32.2483 35.9972 29.0652 35.9972C28.7538 35.9972 28.5001 35.7473 28.5001 35.4406V32.726C28.5001 31.2722 28.0503 30.1364 27.1738 29.364C26.4011 28.6712 25.3515 28.3304 24.0483 28.3304C23.76 28.3304 23.4717 28.3418 23.1603 28.3759C21.1074 28.5803 19.5504 30.284 19.5504 32.3285V35.4406C19.5504 35.7473 19.2967 35.9972 18.9853 35.9972C15.8022 35.9972 13.2188 33.453 13.2188 30.3181V26.9561C13.2188 26.161 14.0145 25.6272 14.7642 25.8884C15.0756 25.9907 15.387 26.0702 15.7099 26.1156C15.8483 26.1383 15.9982 26.161 16.1366 26.161C16.3211 26.1838 16.5057 26.1951 16.6902 26.1951C18.028 26.1951 19.3428 25.7067 20.3808 24.8662C21.3726 25.7067 22.6643 26.1951 24.0252 26.1951C25.3977 26.1951 26.6663 25.7294 27.6582 24.8889C28.6961 25.7181 29.9878 26.1951 31.3026 26.1951C31.5102 26.1951 31.7178 26.1838 31.9139 26.161C32.0523 26.1497 32.1791 26.1383 32.306 26.1156C32.6635 26.0702 32.9864 25.9679 33.3094 25.8657C34.059 25.6158 34.8317 26.161 34.8317 26.9334Z"
                                fill="#2B323B"/>
                        </svg>
                    </div>
                    <div class="">
                        <h2 class="text-xl font-semibold text-gray-900">
                            Shop Details
                        </h2>
                        <p class="text-sm text-gray-500 font-light">
                            Check all the important info about the shop’s sale request.
                        </p>
                    </div>
                </div>

                <div class="form-body grid gap-6 grid-cols-1 md:grid-cols-2 my-10">
                    <table class="table w-full border border-slate-100 rounded-xl overflow-hidden md:col-span-2">
                        <tbody>
                        <tr class="*:bg-[#F8F9FB] *:border *:border-slate-100 *:px-4 *:py-2 *:text-xs *:leading-4 *:text-center">
                            <td>
                                Area <br>
                                <b class="text-pureblack">{{ $item->shop->total_area }} sq. ft</b>
                            </td>
                            <td>
                                Length <br>
                                <b class="text-pureblack">{{ $item->shop->length }} ft</b>
                            </td>
                            <td>
                                Width <br>
                                <b class="text-pureblack">{{ $item->shop->width }} ft</b>
                            </td>
                        </tr>
                        <tr class="*:bg-[#F8F9FB] *:border *:border-slate-100 *:px-4 *:py-2 *:text-xs *:leading-4 *:text-center">
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

                    <table class="table w-full border border-slate-100 rounded-xl overflow-hidden md:col-span-2">
                        <tbody>
                        <tr class="*:bg-[#F8F9FB] *:border *:border-slate-100 *:px-4 *:py-2 *:text-xs *:leading-4 *:text-center">
                            <td>
                                Sale Price <br>
                                <b class="text-pureblack">৳{{ $item->sell_amount }}</b>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="field-item space-y-2">
                        <label class="text-gunmetal font-medium block text-sm">
                            {{ __('Booking Advance')}}
                        </label>
                        <input type="text" inputmode="numeric" name="booking_money" id="booking_money" value=""
                               class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"
                               placeholder="{{ __('৳3,50,000')}}"/>
                        <x-input-error :messages="$errors->get('booking_money')" class="mt-1"/>
                    </div>
                </div>


                <div
                    class="mt-6 flex justify-between *:flex *:items-center *:justify-center *:gap-3 *:rounded-lg  *:px-6 *:py-3">
                    <button type="button" class="prev-step bg-gray-300 text-gray-800">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.4994 6.07807C16.9677 3.07158 13.839 1 10.25 1C5.16249 1 0.99999 5.1625 0.99999 10.25C0.99999 15.3375 5.16249 19.5 10.25 19.5C13.839 19.5 16.9677 17.4284 18.4994 14.4219"
                                stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M19.4994 10.25H5.49939L9.49939 14.25M9.49939 6.25L7.99939 7.75"
                                  stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                        {{ __('Back')}}
                    </button>
                    <button type="button" class="next-step bg-red-600 text-white">
                        {{ __('Continue Sale Request')}}
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219"
                                stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="currentcolor"
                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </fieldset>

            <!-- Step 3 -->
            <fieldset class="step space-y-6 hidden" data-step="3">
                <div
                    class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                    <div
                        class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M28 27.0997C28 27.592 27.592 28.0003 27.1 28.0003H4.9C4.408 28.0003 4 27.592 4 27.0997C4 26.6075 4.408 26.1992 4.9 26.1992H27.1C27.592 26.1992 28 26.6075 28 27.0997Z"
                                fill="#2B323B"/>
                            <path
                                d="M20.0713 7.01377L7.18325 19.9093C6.69125 20.4016 5.89925 20.4016 5.41925 19.9093H5.40725C3.73925 18.2283 3.73925 15.5147 5.40725 13.8458L13.9872 5.26074C15.6672 3.57975 18.3793 3.57975 20.0593 5.26074C20.5513 5.72901 20.5513 6.53348 20.0713 7.01377Z"
                                fill="#2B323B"/>
                            <path
                                d="M26.5873 11.7784L22.9273 8.11629C22.4353 7.624 21.6433 7.624 21.1633 8.11629L8.27525 21.0118C7.78325 21.4921 7.78325 22.2846 8.27525 22.7769L11.9352 26.451C13.6152 28.12 16.3273 28.12 18.0073 26.451L26.5753 17.866C28.2793 16.185 28.2793 13.4594 26.5873 11.7784ZM16.9153 22.6208L15.4633 24.0856C15.1633 24.3858 14.6713 24.3858 14.3593 24.0856C14.0593 23.7855 14.0593 23.2932 14.3593 22.981L15.8233 21.5161C16.1113 21.228 16.6153 21.228 16.9153 21.5161C17.2153 21.8163 17.2153 22.3326 16.9153 22.6208ZM21.6793 17.854L18.7513 20.7957C18.4513 21.0839 17.9593 21.0839 17.6473 20.7957C17.3473 20.4955 17.3473 20.0033 17.6473 19.6911L20.5873 16.7493C20.8753 16.4612 21.3793 16.4612 21.6793 16.7493C21.9793 17.0615 21.9793 17.5538 21.6793 17.854Z"
                                fill="#2B323B"/>
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
                            {{ __('Preferred Payment')}} <span class="text-red-600">*</span>
                        </label>
                        <select name="payment_type_id" id="payment_type_id" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required></select>
                        <x-input-error :messages="$errors->get('payment_type_id')" class="mt-1"/>
                    </div>
                    <div class="field-item space-y-2">
                        <label class="text-gunmetal font-medium block text-sm">
                            {{ __('Management Fee')}}
                        </label>
                        <input type="text" name="management_fee" value=""
                               class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"
                               placeholder="{{ __('৳1,00,000')}}"/>
                        <x-input-error :messages="$errors->get('management_fee')" class="mt-1"/>
                    </div>
                    <div class="field-item space-y-2 md:col-span-2">
                        <button type="button" id="schedule_installment_button" data-modal-target="#schedule_installment_modal"
                                class="w-full text-themered text-base font-medium transition-all bg-[#FFF0F1] rounded-lg py-3 flex items-center justify-center hover:bg-themered hover:text-white">
                            <iconify-icon icon="heroicons:plus-solid"
                                          class="mr-2 text-lg xl:text-2xl"></iconify-icon>
                            Schedule Installmnent
                        </button>
                    </div>
                    <div class="field-item space-y-2 md:col-span-2">
                        <label class="text-gunmetal font-medium block text-sm">
                            {{ __('Notes')}}
                        </label>
                        <textarea name="notes"
                                  class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"
                                  rows="4"></textarea>
                        <x-input-error :messages="$errors->get('notes')" class="mt-1"/>
                    </div>
                </div>

                <div
                    class="mt-6 flex justify-between *:flex *:items-center *:justify-center *:gap-3 *:rounded-lg  *:px-6 *:py-3">
                    <button type="button" class="prev-step bg-gray-300 text-gray-800">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.4994 6.07807C16.9677 3.07158 13.839 1 10.25 1C5.16249 1 0.99999 5.1625 0.99999 10.25C0.99999 15.3375 5.16249 19.5 10.25 19.5C13.839 19.5 16.9677 17.4284 18.4994 14.4219"
                                stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M19.4994 10.25H5.49939L9.49939 14.25M9.49939 6.25L7.99939 7.75"
                                  stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                        {{ __('Back') }}
                    </button>
                    <button type="submit"
                            class="bg-red-600 text-white finish-step">{{ __('Continue Sale Request')}}</button>
                </div>
            </fieldset>
        </div>
    </form>
</div>
