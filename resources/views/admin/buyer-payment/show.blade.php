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
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('Payment Information') }}</h2>

                <div class="grid sm:grid-cols-2 gap-x-8 gap-y-4">
                    {{-- Username --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Buyer') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->buyer->username }}
                        </p>
                    </div>
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Shop') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            Shop: {{ $item->shop->number }}
                        </p>
                    </div>

                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Shop Address') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            block {{ $item->shop->block->name }},  {{ $item->shop->block->floor->name }}, {{ $item->shop->block->floor->property->name }}, {{ $item->shop->block->floor->property->address }}
                        </p>
                    </div>


                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Payment Amount') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->payment_amount }}
                        </p>
                    </div>

                    {{-- Position --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Mode') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->paymentMode?->name }}
                        </p>
                    </div>

                    {{-- Status --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Payment Date') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ ucfirst($item->payment_date) }}
                        </p>
                    </div>

                    {{-- Status --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Payment Ref') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ ucfirst($item->payment_ref) }}
                        </p>
                    </div>

                    {{-- Status --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Added By') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ ucfirst($item->addedBy->username) }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
