<x-app-layout>
    <div>
        {{--Breadcrumb start--}}
        <div class="mb-6">
            {{--BreadCrumb--}}
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->index->title" />
        </div>
        {{--Breadcrumb end--}}

        {{--Create user form start--}}
        <form method="POST" action="{{ route($pageConfig->routes->{$group}) }}"  class="max-w-[800px] mx-auto"  enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">{{ $pageConfig->index->title }}</div>
                        </div>
                    </header>
                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                            <div class="input-area">
                                <label for="percent" class="form-label">{{ __('Shop Booking Percentage') }}</label>
                                <input name="percent" type="text" id="percent" class="form-control"
                                       placeholder="{{ __('Enter booking percent') }}" value="{{ old('percent', $settings->percent) }}" required>
                                <x-input-error :messages="$errors->get('percent')" class="mt-2"/>
                            </div>
                        </div>

                        <button type="submit" class="btn inline-flex justify-center btn-dark mt-4 w-full">
                            {{ __( $pageConfig->create->submit->text) }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
