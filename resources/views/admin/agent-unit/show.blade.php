<x-app-layout>
    <div>
        {{--Breadcrumb start--}}
        <div class="mb-6">
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->show->title" />
        </div>
        {{--Breadcrumb end--}}

        <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6 max-w-4xl m-auto space-y-6">

            {{-- Basic Information --}}
            <div class="space-y-4">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('Basic Information') }}</h2>

                <div class="grid sm:grid-cols-2 gap-x-8 gap-y-4">
                    {{-- Username --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Shop') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->shop?->number }}
                        </p>
                    </div>

                    {{-- Email --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Agent') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->agent?->username }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Commission') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->commission }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Security money') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->security_money }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Security deposit paid') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->security_deposit_paid }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Sale price') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->sale_price }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Security Money percent') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->booking_percent }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Agree Security Money percent') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->agree_booking_percent }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Booking amount') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->booking_amount }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Agree booking amount') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->agree_booking_amount }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Actual sale price') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->actual_sale_price }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Offer amount') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->offer_amount }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Added by') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->added_by }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Approve by') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->approve_by }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Minimum Sale Price') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->shop->min_sale_price }}
                        </p>
                    </div>

                    {{-- Status --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Status') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ ucfirst($item->status_name) }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
