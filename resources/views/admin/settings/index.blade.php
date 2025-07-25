<x-app-layout>

    <div class="tab-wrapper max-w-screen-lg mx-auto bg-white rounded-2xl border border-slate-100 overflow-hidden sm:flex">
        <div class="flex-[0_0_240px] border-r border-slate-100 p-4">
            <h6 class="font-bold text-black-500 text-xl mb-4">
                {{ __("Settings") }}
            </h6>
            <ul class="nav-tabs space-y-1 [&_a]:w-full [&_a]:py-2.5 [&_a]:px-3 [&_a]:rounded-md [&_a]:font-medium [&_a]:inline-flex [&_a]:items-center [&_a]:gap-2 [&_a]:transition-all [&_a]:text-[#607085]">
                <li>
                    <a href="#booking__settings" class="nav-item active hover:bg-[#FFF5F5] hover:text-themered [&.active]:bg-[#FFF5F5] [&.active]:text-themered">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C14.7394 2 17.2264 3.11009 19.0352 4.90332L10.25 13.6895L8.03027 11.4697C7.73738 11.1768 7.26262 11.1768 6.96973 11.4697C6.67683 11.7626 6.67683 12.2374 6.96973 12.5303L9.71973 15.2803C10.0126 15.5732 10.4874 15.5732 10.7803 15.2803L20.0215 6.03809C21.2637 7.70445 22 9.76862 22 12C22 17.51 17.51 22 12 22C6.49 22 2 17.51 2 12C2 6.49 6.49 2 12 2Z" fill="currentcolor"/>
                        </svg>
                        {{ __("Booking")}}
                    </a>
                </li>
                <li>
                    <a href="#contact__settings" class="nav-item hover:bg-[#FFF5F5] hover:text-themered [&.active]:bg-[#FFF5F5] [&.active]:text-themered">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.80273 9.19697C4.80273 5.22219 8.02493 2 11.9997 2C15.9745 2 19.1967 5.22219 19.1967 9.19697V14.803C19.1967 18.7778 15.9745 22 11.9997 22C11.5855 22 11.2497 21.6642 11.2497 21.25C11.2497 20.8358 11.5855 20.5 11.9997 20.5C15.1461 20.5 17.6967 17.9494 17.6967 14.803V9.19697C17.6967 6.05062 15.1461 3.5 11.9997 3.5C8.85335 3.5 6.30273 6.05062 6.30273 9.19697V14.803C6.30273 15.2172 5.96695 15.553 5.55273 15.553C5.13852 15.553 4.80273 15.2172 4.80273 14.803V9.19697Z" fill="currentcolor"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.946 14.9854C15.0901 15.3738 14.8921 15.8054 14.5038 15.9495C13.7231 16.2391 12.8794 16.397 12.0004 16.397C11.1215 16.397 10.2778 16.2391 9.49713 15.9495C9.10878 15.8054 8.91077 15.3738 9.05485 14.9854C9.19894 14.5971 9.63056 14.3991 10.0189 14.5431C10.635 14.7717 11.3023 14.897 12.0004 14.897C12.6986 14.897 13.3658 14.7717 13.982 14.5431C14.3703 14.3991 14.8019 14.5971 14.946 14.9854Z" fill="currentcolor"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 9.75592C2 9.03209 2.58678 8.44531 3.31061 8.44531H4.99242C5.71625 8.44531 6.30303 9.03209 6.30303 9.75592V14.2408C6.30303 14.9646 5.71625 15.5514 4.99242 15.5514H3.31061C2.58678 15.5514 2 14.9646 2 14.2408V9.75592Z" fill="currentcolor"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.6973 9.75592C17.6973 9.03209 18.284 8.44531 19.0079 8.44531H20.6897C21.4135 8.44531 22.0003 9.03209 22.0003 9.75592V14.2408C22.0003 14.9646 21.4135 15.5514 20.6897 15.5514H19.0079C18.284 15.5514 17.6973 14.9646 17.6973 14.2408V9.75592Z" fill="currentcolor"/>
                        </svg>
                        {{ __("Contact")}}
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content flex-1 *:p-4 xl:*:p-10 xl:*:py-8">
            <div class="tab-pane fade" id="booking__settings">
                <h6 class="font-medium text-black-500 text-xl mb-4 border-b border-slate-100 pb-2">
                    {{ __("Booking Settings") }}
                </h6>
                <form action="{{ route('admin.settings.booking') }}" method="POST">
                    @csrf

                    <div class="field-body grid grid-cols-1 md:grid-cols-2 gap-4">

                        <div class="field-item space-y-1 md:col-span-2">
                            <label for="percent" class="text-gunmetal font-medium block text-sm">
                                {{ __('Shop Booking Percentage')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="number" name="percent" id="percent" value="{{ $bookingSettings->percent }}" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg" required >
                            <x-input-error :messages="$errors->get('percent')" class="mt-1"/>
                        </div>

                    </div>
                    <div class="mt-8 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Update")}}
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="contact__settings">
                <h6 class="font-medium text-black-500 text-xl mb-4 border-b border-slate-100 pb-2">
                    {{ __("Contact Settings") }}
                </h6>
                <form action="{{ route('admin.settings.contact') }}" method="POST">
                    @csrf
                    <div class="field-body grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="field-item space-y-1">
                            <label for="email" class="text-gunmetal font-medium block text-sm">
                                {{ __('Email')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="email" name="email" id="email" value="{{ old('email', $contactSettings->email) }}" placeholder="{{ __('name@gmail.com')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label for="phone" class="text-gunmetal font-medium block text-sm">
                                {{ __('Phone')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="tel" name="phone" id="phone" value="{{ old('phone', $contactSettings->phone) }}" placeholder="{{ __('0123 456 789')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('phone')" class="mt-1"/>
                        </div>
                    </div>
                    <hr class="my-8">
                    <h6 class="text-gunmetal font-medium mb-6">
                        {{ __('Address')}}
                    </h6>
                    <div class="field-body grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="field-item space-y-2 md:col-span-2 lg:col-span-4">
                            <label for="address_line1" class="text-gunmetal font-medium block text-sm">
                                {{ __('Address Line 1')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="address_line1" id="address_line1" value="{{ old('address_line1', $contactSettings->address_line1) }}" placeholder="{{ __('Address info.')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('address_line1')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-2 md:col-span-2 lg:col-span-4">
                            <label for="address_line2" class="text-gunmetal font-medium block text-sm">
                                {{ __('Address Line 2')}}
                            </label>
                            <input type="text" name="address_line2" id="address_line2" value="{{ old('address_line2', $contactSettings->address_line2) }}" placeholder="{{ __('Address info...')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" />
                            <x-input-error :messages="$errors->get('address_line2')" class="mt-1"/>
                        </div>
                        <div class="field-item md:col-span-2  grid gap-4 grid-cols-2 md:grid-cols-4">
                            <div class="field-item space-y-2">
                                <label for="country_id" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Country')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="country_id" id="country_id" data-old="{{ old('country_id', $contactSettings->country_id) }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required ></select>
                                <x-input-error :messages="$errors->get('country_id')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label for="state_id" class="text-gunmetal font-medium block text-sm">
                                    {{ __('State')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="state_id" id="state_id" data-old="{{ old('state_id', $contactSettings->state_id) }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required ></select>
                                <x-input-error :messages="$errors->get('agent_address_state')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label for="city_id" class="text-gunmetal font-medium block text-sm">
                                    {{ __('City')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="city_id" id="city_id" data-old="{{ old('city_id', $contactSettings->city_id) }}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required ></select>
                                <x-input-error :messages="$errors->get('city_id')" class="mt-1"/>
                            </div>
                            <div class="field-item space-y-2">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Zip Code')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="text" name="zip_code" id="zip_code" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg">
                                <x-input-error :messages="$errors->get('zip_code', $contactSettings->zip_code)" class="mt-1"/>
                            </div>
                        </div>
                        <br>
                        <div class="field-item space-y-2 md:col-span-2">
                            <label for="google_map_iframe" class="text-gunmetal font-medium block text-sm">
                                {{ __('Google Map Embed Code')}}
                            </label>
                            <input type="text" name="google_map_iframe" id="google_map_iframe", value="{{ old('google_map_iframe', $contactSettings->google_map_iframe) }}" placeholder="{{ __('Google Map embed code is here')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg">
                            <x-input-error :messages="$errors->get('gmap_embed_code')" class="mt-1"/>
                        </div>
                    </div>
                    <div class="mt-8 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Update")}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    @push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            loadSelect2Dropdown("country", "country_id", {}, "Select Country");
            loadDependentDropdowns([
                { parent: 'country_id', child: 'state_id', type: 'state', filterKey: 'country_id', placeholder: "Select State" },
                { parent: 'state_id', child: 'city_id', type: 'city', filterKey: 'state_id', placeholder: "Select City" },
            ]);
        });


        function Tabs(selector, options) {
            if (!(this instanceof Tabs)) return new Tabs(selector, options);

            this.options = $.extend({
                linkActive: 'active',
                paneActive: 'active show',
                activeTab: 0
            }, options || {});

            this.init($(selector));
        }

        Tabs.prototype.init = function ($tabGroups) {
            const self = this;

            $tabGroups.each(function () {
                const $tabGroup = $(this);
                const $links = $tabGroup.find('a.nav-item');

                // Always get the closest wrapper that contains .tab-content
                const $wrapper = $tabGroup.closest('.tab-wrapper');
                const $panes = $wrapper.find('.tab-content .tab-pane');

                $links.on('click', function (e) {
                    e.preventDefault();

                    const $clicked = $(this);
                    const targetSelector = $clicked.attr('href');

                    // Remove active/show from all tabs and panes
                    $links.removeClass(self.options.linkActive);
                    $panes.removeClass('active show');

                    // Add to clicked tab and target pane
                    $clicked.addClass(self.options.linkActive);
                    $(targetSelector).addClass('active show');
                });

                // Trigger default tab
            });
        };

        $(document).ready(function () {
            new Tabs('.nav-tabs');
        });

    </script>
    @endpush
</x-app-layout>
