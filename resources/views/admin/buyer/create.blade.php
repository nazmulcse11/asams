<x-app-layout>
    <div>
        {{--Breadcrumb start--}}
        <div class="mb-6">
            {{--BreadCrumb--}}
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->create->title" />
        </div>
        {{--Breadcrumb end--}}

        {{--Create user form start--}}
        <form method="POST" action="{{ route($pageConfig->routes->store) }}"  class="grid xl:grid-cols-2 grid-cols-1 gap-6"  enctype="multipart/form-data">

            @csrf

            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">{{ __("Basic Information") }}</div>
                        </div>
                    </header>

                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                            {{--UserName input start--}}
                            <div class="input-area">
                                <label for="username" class="form-label">{{ __('UserName') }}</label>
                                <input name="username" type="text" id="username" class="form-control"
                                       placeholder="{{ __('Enter username') }}" value="{{ old('username') }}" required>
                                <x-input-error :messages="$errors->get('username')" class="mt-2"/>
                            </div>
                            {{--UserName input end--}}

                            {{--Email input start--}}
                            <div class="input-area">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input name="email" type="email" id="email" class="form-control"
                                       placeholder="{{ __('Enter email') }}" value="{{ old('email') }}" required>
                                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                            </div>
                            {{--Email input end--}}

                            {{--phone input start--}}
                            <div class="input-area">
                                <label for="phone" class="form-label">{{ __('Phone') }}</label>
                                <input name="phone" type="text" id="phone" class="form-control"
                                       placeholder="{{ __('Enter phone') }}" value="{{ old('phone') }}" required>
                                <x-input-error :messages="$errors->get('phone')" class="mt-2"/>
                            </div>
                            {{--phone input end--}}

                            <div class="input-area">
                                <label for="agentDropdown" class="form-label">{{ __('Agent') }}</label>
                                <select name="agent_id" class="form-control" id="agentDropdown" data-old="{{ old('agent') }}"></select>
                                <x-input-error :messages="$errors->get('agent')" class="mt-2"/>
                            </div>

                            {{--Role input start--}}
                            <div class="input-area">
                                <label for="generalStatusDropdown" class="form-label">{{ __('Status') }}</label>
                                <select name="status_id" class="form-control" id="generalStatusDropdown" data-old="{{ old('status') }}"></select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2"/>
                            </div>
                            {{--Role input end--}}

                            <button type="submit" class="btn inline-flex justify-center btn-dark mt-4 w-full">
                                {{ __( $pageConfig->create->submit->text) }}
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

    @push("scripts")
        <script type="module">
            document.addEventListener("DOMContentLoaded", function () {
                loadSelect2Dropdown("agent", "agentDropdown");
                loadSelect2Dropdown("status", "generalStatusDropdown", {type: "general"});
            });
        </script>
    @endpush
</x-app-layout>
