<x-app-layout>
    <div>
        {{--Breadcrumb start--}}
        <div class="mb-6">
            {{--BreadCrumb--}}
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->edit->title" button-url="{{ route($pageConfig->routes->create) }}" button-title="{{ __($pageConfig->edit->create->text) }}" button-icon="{{ $pageConfig->edit->create->icon }}" />
        </div>
        {{--Breadcrumb end--}}

        {{--Create user form start--}}
        <form method="POST" action="{{ route($pageConfig->routes->update, $item) }}"  class="grid xl:grid-cols-2 grid-cols-1 gap-6" enctype="multipart/form-data">

            @csrf
            @method("PUT")

            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">Basic Information</div>
                        </div>
                    </header>

                    <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">
                        <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4 mt-6">

                            {{--UserName input start--}}
                            <div class="input-area">
                                <label for="username" class="form-label">{{ __('UserName') }}</label>
                                <input name="username" type="text" id="username" class="form-control"
                                       placeholder="{{ __('Enter administrator username') }}" value="{{ old('username', $item->username) }}" required>
                                <x-input-error :messages="$errors->get('username')" class="mt-2"/>
                            </div>
                            {{--UserName input end--}}

                            {{--Email input start--}}
                            <div class="input-area">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input name="email" type="email" id="email" class="form-control"
                                       placeholder="{{ __('Enter your email') }}" value="{{ old('email', $item->email) }}" required>
                                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                            </div>
                            {{--Email input end--}}

                            {{--phone input start--}}
                            <div class="input-area">
                                <label for="phone" class="form-label">{{ __('Phone') }}</label>
                                <input name="phone" type="text" id="phone" class="form-control"
                                       placeholder="{{ __('Enter administrator phone') }}" value="{{ old('phone', $item->phone) }}" required>
                                <x-input-error :messages="$errors->get('phone')" class="mt-2"/>
                            </div>
                            {{--phone input end--}}

                            <div class="input-area">
                                <label for="agentDropdown" class="form-label">{{ __('Agent') }}</label>
                                <select name="agent_id" class="form-control" id="agentDropdown" data-old="{{ old('agent', $item->agent_id) }}"></select>
                                <x-input-error :messages="$errors->get('agent')" class="mt-2"/>
                            </div>

                            {{--Role input start--}}
                            <div class="input-area">
                                <label for="generalStatusDropdown" class="form-label">{{ __('Status') }}</label>
                                <select name="status" class="form-control" id="generalStatusDropdown" data-old="{{ old('status', $item->status_id) }}"></select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2"/>
                            </div>
                            {{--Role input end--}}

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
