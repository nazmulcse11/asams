<x-app-layout>
    <div>
        {{-- Breadcrumb start --}}
        <div class="mb-6">
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->index->title" />
        </div>
        {{-- Breadcrumb end --}}

        {{-- Contact Settings form start --}}
        <form method="POST" action="{{ route($pageConfig->routes->{$group}) }}" class="max-w-[800px] mx-auto">
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

                            {{-- Contact Email --}}
                            <div class="input-area">
                                <label for="email" class="form-label">{{ __('Contact Email') }}</label>
                                <input name="email" type="email" id="email" class="form-control"
                                    placeholder="{{ __('Enter contact email') }}"
                                    value="{{ old('email', $settings->email) }}">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            {{-- Contact Phone Number --}}
                            <div class="input-area">
                                <label for="phone" class="form-label">{{ __('Contact Phone Number') }}</label>
                                <input name="phone" type="text" id="phone" class="form-control"
                                    placeholder="{{ __('Enter contact phone number') }}"
                                    value="{{ old('phone', $settings->phone) }}">
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>

                            {{-- Contact Address --}}
                            <div class="input-area">
                                <label for="address" class="form-label">{{ __('Contact Address') }}</label>
                                <textarea name="address" id="address" rows="4" class="form-control"
                                    placeholder="{{ __('Enter contact address') }}">{{ old('address', $settings->address) }}</textarea>
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>

                            {{-- Google Maps Embed Code --}}
                            <div class="input-area">
                                <label for="google_map_iframe" class="form-label">{{ __('Google Maps Embed Code') }}</label>
                                <textarea name="google_map_iframe" id="google_map_iframe" rows="4" class="form-control"
                                    placeholder="{{ __('Paste Google Maps iframe embed code here (optional)') }}">{{ old('google_map_iframe', $settings->google_map_iframe) }}</textarea>
                                <x-input-error :messages="$errors->get('google_map_iframe')" class="mt-2" />
                            </div>

                        </div>

                        <button type="submit" class="btn inline-flex justify-center btn-dark mt-4 w-full">
                            {{ __($pageConfig->create->submit->text) }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
