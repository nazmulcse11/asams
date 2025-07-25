<x-app-layout>
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 xl:gap-10">
        <!-- User Details Mainbody -->
        <div class="mainbody lg:col-span-2">
            <div class="coverimage">
                <img src="{{ asset('images/default-banner.png') }}"
                     class="w-full rounded-2xl h-[160px] md:h-[200px] lg:h-[260px] object-cover object-center"
                     alt="{{ $item?->profile->full_name ?? $item->username }}" >
            </div>
            <div class="profile-header -mt-[72px] md:-mt-20 xl:-mt-[120px] md:flex items-end gap-6 lg:pl-6 xl:pl-10">
                <img src="{{ $item?->profile?->picture ?? asset('images/avatar/av-1.svg') }}"
                     class="rounded-full w-36 h-36 md:w-40 md:h-40 xl:w-60 xl:h-60 max-md:mx-auto"
                     alt="{{ $item?->profile->full_name ?? $item->username }}" >

                <div class="md:flex-1 xl:pb-8 relative max-md:text-center max-md:space-y-2">
                    <h5 class="font-semibold text-black-500 text-2xl xl:text-3xl md:mb-2">
                        {{ $item?->profile->full_name ?? $item->username }}
                    </h5>
                    <p>
                        <span class="inline-block px-4 py-2 rounded-2xl bg-slate-100 text-gray-500 font-medium text-sm">
                            {{ __("Admin") }}
                        </span>
                    </p>
                    <a href="{{ route('admin.console.user.admin.edit', $item->id) }}" class="text-red-600 flex items-center justify-center gap-2 md:absolute md:right-0 md:top-4">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 17.25H16.5" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.90332 3.14453C9.27302 5.43071 11.1985 7.1785 13.5882 7.4104" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.0829 1.94203L3.02552 9.1402C2.75904 9.4135 2.50116 9.9519 2.44958 10.3247L2.13152 13.0085C2.01977 13.9776 2.74185 14.6403 3.73899 14.4746L6.50693 14.019C6.89376 13.9528 7.4353 13.6794 7.7018 13.3978L14.7592 6.19963C15.9798 4.95714 16.53 3.5407 14.6302 1.8095C12.7391 0.094862 11.3036 0.699542 10.0829 1.94203Z" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Edit Profile
                    </a>
                </div>
            </div>
            <div class="widget-wrapper md:mt-12 *:rounded-2xl *:border *:border-slate-100 *:bg-white *:p-6 xl:*:p-8 lg:*:max-w-[755px] *:ml-auto space-y-6">
                <div class="widget">
                    <h6 class="font-bold text-black-500 text-xl mb-3">
                        {{ __("Basic information") }}
                    </h6>
                    <div class="overflow-auto">
                        <table class="table w-full border-separate [&_td]:py-3 [&_td]:border-b [&_td]:border-b-slate-100 [&_td]:align-middle [&_td]:whitespace-nowrap">
                            <tbody>
                            <tr>
                                <td class="text-ash">
                                    {{ __("Username :")}}
                                </td>
                                <td class="text-gunmetal font-semibold">
                                    {{ $item->username }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-ash">
                                    {{ __("Designation(if Employee) :")}}
                                </td>
                                <td class="text-gunmetal font-semibold">
                                    {{ __("Adminstrator") }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-ash">
                                    {{ __("User Role :")}}
                                </td>
                                <td class="text-gunmetal font-semibold">
                                    {{ __("Adminstrator") }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-ash">
                                    {{ __("Account Created At :")}}
                                </td>
                                <td class="text-gunmetal font-semibold">
                                    {{ $item->created_at->format('Y-m-d') }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-ash">
                                    {{ __("Last Updated :")}}
                                </td>
                                <td class="text-gunmetal font-semibold">
                                    {{ $item->updated_at->format('Y-m-d') }}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @if($item->addresses()->count() > 0)
                <div class="widget">
                    <h6 class="font-bold text-black-500 text-xl mb-3">
                        {{ __("Address Information") }}
                    </h6>
                    <div class="overflow-auto">
                        <table class="table w-full border-separate [&_td]:py-3 [&_td]:border-b [&_td]:border-b-slate-100 [&_td]:align-middle [&_td]:whitespace-nowrap">
                            <tbody>
                            <tr>
                                <td class="text-ash">
                                    {{ __("Address Line 1 :")}}
                                </td>
                                <td class="text-gunmetal font-semibold">
                                    {{ $item?->addresses()?->first()?->address_line1 }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-ash">
                                    {{ __("Address Line 2 :")}}
                                </td>
                                <td class="text-gunmetal font-semibold">
                                    {{ $item?->addresses()?->first()?->address_line2 }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-ash">
                                    {{ __("City :")}}
                                </td>
                                <td class="text-gunmetal font-semibold">
                                    {{ $item?->addresses()?->first()?->city?->name }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-ash">
                                    {{ __("State :")}}
                                </td>
                                <td class="text-gunmetal font-semibold">
                                    {{ $item?->addresses()?->first()?->state?->name }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-ash">
                                    {{ __("Zip Code :")}}
                                </td>
                                <td class="text-gunmetal font-semibold">
                                    {{ $item?->addresses()?->first()?->zip_code }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-ash">
                                    {{ __("Country :")}}
                                </td>
                                <td class="text-gunmetal font-semibold">
                                    {{ $item?->addresses()?->first()?->country?->name }}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>

        <!-- Quick Sidebar -->
        <div class="quicksidebar *:rounded-2xl *:border *:border-slate-100 *:bg-white *:p-6 xl:*:p-8 space-y-6">
            <div class="widget">
                <h6 class="font-bold text-black-500 text-xl">
                    {{ __("Profile Overview") }}
                </h6>
                <div class="overflow-auto">
                    <table class="table w-full border-separate [&_td]:py-3 [&_td]:border-b [&_td]:border-b-slate-100 [&_td]:align-middle [&_td]:whitespace-nowrap">
                        <tbody>
                        <tr>
                            <td class="text-ash">
                                {{ __("Email  :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                {{ $item->email }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-ash whitespace-nowrap">
                                {{ __("Phone  :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                {{ $item->phone }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-ash whitespace-nowrap">
                                {{ __("Account Status  :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                {{ $item?->status?->name }}
                            </td>
                        </tr>
                        @if($item?->profile?->last_login)
                            <tr>
                                <td class="text-ash whitespace-nowrap">
                                    {{ __("Last Login  :")}}
                                </td>
                                <td class="text-gunmetal font-semibold">
                                    {{ $item?->profile?->last_login }}
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="widget">
                <h6 class="font-bold text-black-500 text-xl">
                    {{ __("Notification Settings") }}
                </h6>

                <div class="mt-3 space-y-4 *:flex *:items-center *:gap-4 *:justify-between *:p-4 xl:*:px-6 xl:*:py-5 *:rounded-lg *:border">

                    <div class="hover:bg-gray-50">
                        <div>
                            <h4 class="font-semibold text-sm text-gray-800">
                                {{ __("Enable Email Notifications") }}
                            </h4>
                            <p class="text-sm text-gray-500">
                                {{ __("Enable to trigger automated emails for events like new listings, status changes, or messages.") }}
                            </p>
                        </div>
                        <label for="email_notification" class="cursor-pointer relative">
                            <input type="checkbox" id="email_notification" name="email_notification" class="sr-only peer" checked>
                            <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                            <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                        </label>
                    </div>

                    <div class="hover:bg-gray-50">
                        <div>
                            <h4 class="font-semibold text-sm text-gray-800">
                                {{ __("Enable SMS Notifications") }}
                            </h4>
                            <p class="text-sm text-gray-500">
                                {{ __("Keep users informed through SMS notifications about key events or activity.") }}
                            </p>
                        </div>
                        <label for="sms_notification" class="cursor-pointer relative">
                            <input type="checkbox" id="sms_notification" name="sms_notification" class="sr-only peer" checked>
                            <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                            <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                        </label>
                    </div>

                    <div class="hover:bg-gray-50">
                        <div>
                            <h4 class="font-semibold text-sm text-gray-800">
                                {{ __("Enable Push Notifications") }}
                            </h4>
                            <p class="text-sm text-gray-500">
                                {{ __("Enable system-wide push messages for key events or activity.") }}
                            </p>
                        </div>
                        <label for="push_notification" class="cursor-pointer relative">
                            <input type="checkbox" id="push_notification" name="push_notification" class="sr-only peer">
                            <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                            <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                        </label>
                    </div>

                    <div class="hover:bg-gray-50">
                        <div>
                            <h4 class="font-semibold text-sm text-gray-800">
                                {{ __("Login Alerts Enabled") }}
                            </h4>
                            <p class="text-sm text-gray-500">
                                {{ __("Enable system-wide alert message for key events or activity to admin.") }}
                            </p>
                        </div>
                        <label for="login_alert_notification" class="cursor-pointer relative">
                            <input type="checkbox" id="login_alert_notification" name="login_alert_notification" class="sr-only peer">
                            <div class="block bg-gray-200 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                            <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                        </label>
                    </div>
                </div>
            </div>
            @if($item?->profile?->nid != null)
            <div class="widget">
                <h6 class="font-bold text-black-500 text-xl">
                    {{ __("Attached Documents") }}
                </h6>
                <div class="overflow-auto">
                    <table class="table w-full border-separate [&_td]:py-3 [&_td]:border-b [&_td]:border-b-slate-100 [&_td]:align-middle">
                        <tbody>
                        <tr>
                            <td class="text-ash whitespace-nowrap">
                                {{ __("National ID No. :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                {{ $item?->profile?->nid }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-ash whitespace-nowrap">
                                {{ __("Resume or CV :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                <a href="#" class="text-red-500">{{ __("Add")}}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-ash whitespace-nowrap">
                                {{ __("Appointment Letter  :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                <a href="#" class="text-red-500">{{ __("Add")}}</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>

    @push("modal")

    @endpush

    @push('scripts')
    
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <script>
            $(document).ready(function () {
                // Open modal
                $('[data-popup="modal"]').on('click', function (e) {
                    e.preventDefault();
                    const targetModal = $(this).attr('href');

                    // Close any open modal before opening the new one
                    $('.asams-modal.show').addClass('hidden').removeClass('show');

                    // Open the target modal
                    $(targetModal).removeClass('hidden').addClass('show');
                });

                $('.asams-modal').on('click', function (e) {
                    const $modalContent = $(this).find('.modal-content');

                    const isClickInside = $modalContent.is(e.target) || $modalContent.has(e.target).length > 0;
                    const isCloseBtn = $(e.target).closest('.modal-close').length > 0;

                    const isSelect2 = $(e.target).closest('.select2-container, .select2-selection, .select2-results, .select2-selection__choice__remove').length > 0;

                    if ((!isClickInside && !isSelect2) || isCloseBtn) {
                        $(this).addClass('hidden').removeClass('show');
                    }
                });


                // Close modal on Esc key
                $(document).on('keydown', function (e) {
                    if (e.key === 'Escape') {
                        $('.asams-modal.show').addClass('hidden').removeClass('show');
                    }
                });
            });

        </script>
    @endpush

</x-app-layout>
