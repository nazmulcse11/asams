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
                            {{ __('Property') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->property?->name }}
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
                            {{ __('Deposit') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->deposit_amount }}
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
