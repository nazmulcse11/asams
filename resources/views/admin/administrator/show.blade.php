<x-app-layout>
    <div>
        {{--Breadcrumb start--}}
        <div class="mb-6">
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->show->title" button-url="{{ route($pageConfig->routes->edit, $item ) }}" button-title="{{ __($pageConfig->show->edit->text) }}" button-icon="{{ $pageConfig->show->edit->icon }}" />
        </div>
        {{--Breadcrumb end--}}

        <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6 max-w-4xl m-auto space-y-6">

            {{-- Profile Information --}}
            <div class="space-y-4">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('Profile Information') }}</h2>

                <div class="grid sm:grid-cols-2 gap-x-8 gap-y-4">
                    {{-- First Name --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('First Name') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->profile?->first_name ?? 'N/A' }}
                        </p>
                    </div>

                    {{-- Last Name --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Last Name') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->profile?->last_name ?? 'N/A' }}
                        </p>
                    </div>

                    {{-- Profile Picture --}}
                    <div class="input-group sm:col-span-2">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Profile Picture') }}
                        </label>
                        @if ($item->profile?->picture)
                            <img src="{{ $item->profile->picture }}" alt="Profile Picture" class="h-20 w-20 object-cover rounded">
                        @else
                            <p class="text-gray-500 dark:text-gray-400">{{ __("No profile picture available.") }}</p>
                        @endif
                    </div>

                    {{-- Blood Group --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Blood Group') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->profile?->blood_group_name ?? 'N/A' }}
                        </p>
                    </div>

                    {{-- NID --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('National ID (NID)') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->profile?->nid ?? 'N/A' }}
                        </p>
                    </div>

                    {{-- Date of Birth --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Date of Birth') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->profile?->date_of_birth ?? 'N/A' }}
                        </p>
                    </div>

                    {{-- Gender --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Gender') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ ucfirst($item->profile?->gender_name ?? 'N/A') }}
                        </p>
                    </div>

                    {{-- Marital Status --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Marital Status') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ ucfirst($item->profile?->marital_status_name ?? 'N/A') }}
                        </p>
                    </div>
                </div>
            </div>

            <hr class="border-gray-200 dark:border-slate-700">

            {{-- Basic Information --}}
            <div class="space-y-4">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('Basic Information') }}</h2>

                <div class="grid sm:grid-cols-2 gap-x-8 gap-y-4">
                    {{-- Username --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Username') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->username }}
                        </p>
                    </div>

                    {{-- Email --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Email') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->email }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Phone') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->phone }}
                        </p>
                    </div>

                    {{-- Position --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Position') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->position }}
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

            @if($item->addresses->count() > 0)
            <hr class="border-gray-200 dark:border-slate-700">

            {{-- Address Information --}}
                <div class="space-y-4">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('Address Information') }}</h2>

                    @foreach ($item->addresses as $address)
                        <div class="bg-slate-100 dark:bg-slate-900 p-4 rounded space-y-2">
                            <p><strong>{{ __("Type") }}:</strong> {{ ucfirst($address->type_name) }}</p>
                            <p><strong>{{ __("Address Line 1") }}:</strong> {{ $address->address_line1 }}</p>
                            <p><strong>{{ __("Address Line 2") }}:</strong> {{ $address->address_line2 ?? 'N/A' }}</p>
                            <p><strong>{{__("City")}}:</strong> {{ $address->city }}</p>
                            <p><strong>{{ __("State") }}:</strong> {{ $address->state }}</p>
                            <p><strong>{{ __("ZIP Code") }}:</strong> {{ $address->zip_code }}</p>
                            <p><strong>{{ __("Country") }}:</strong> {{ $address->country }}</p>
                            <p><strong>{{ __("Primary") }}:</strong> {{ $address->is_primary ? 'Yes' : 'No' }}</p>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
