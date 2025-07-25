<x-app-layout>
    <div>
        {{--Breadcrumb start--}}
        <div class="mb-6">
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->show->title" button-url="{{ route($pageConfig->routes->edit, $item ) }}" button-title="{{ __($pageConfig->show->edit->text) }}" button-icon="{{ $pageConfig->show->edit->icon }}" />
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
                            {{ __('Property Name') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->name }}
                        </p>
                    </div>

                    {{-- Email --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Address') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->address }}
                        </p>
                    </div>

                    {{-- Phone --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Location') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            latitude: {{ $item->latitude }} longitude: {{ $item->longitude }}
                        </p>
                    </div>

                    {{-- Position --}}
                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Contact') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->contact_person }} - {{ $item->contact_number }}
                        </p>
                    </div>

                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Area') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->length }} * {{ $item->wide }}
                        </p>
                    </div>

                    <div class="input-group">
                        <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                            {{ __('Type') }}
                        </label>
                        <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                            {{ $item->propertyType?->name }}
                        </p>
                    </div>

                    @if(count($item->floors) > 0)
                        <div class="input-group">
                            <label class="font-medium text-sm text-textColor dark:text-white pb-2 inline-block">
                                {{ __('Floors') }}
                            </label>

                            @foreach($item->floors as $floor)
                                <p class="p-3 py-2 rounded bg-slate-200 dark:bg-slate-900 dark:text-slate-300">
                                    {{ $floor->name }}
                                </p>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
