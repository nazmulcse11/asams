<x-app-layout>
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 xl:gap-10">
        <!-- User Details Mainbody -->
        <div class="mainbody lg:col-span-2">
            <div class="coverimage">
                <img src="{{ $item?->profile?->cover ?? asset('images/default-banner.png') }}"
                     class="w-full rounded-2xl h-[160px] md:h-[200px] lg:h-[260px] object-cover object-center"
                     alt="{{ $item?->profile->full_name ?? $item->username }}" >
            </div>
            <div class="profile-header -mt-[72px] md:-mt-20 xl:-mt-[120px] md:flex items-end gap-6 lg:pl-6 xl:pl-10">
                <img src="{{ $item?->profile?->picture ?? asset('images/cover-placeholder.png') }}"
                     class="rounded-full w-36 h-36 md:w-40 md:h-40 xl:w-60 xl:h-60 max-md:mx-auto"
                     alt="{{ $item?->profile->full_name ?? $item->username }}" >

                <div class="md:flex-1 xl:pb-8 relative max-md:text-center max-md:space-y-2">
                    <h5 class="font-semibold text-black-500 text-2xl xl:text-3xl md:mb-2">
                        {{ $item?->profile->full_name ?? $item->username }}
                    </h5>
                    <p>
                        <span class="inline-block px-4 py-2 rounded-2xl bg-slate-100 text-gray-500 font-medium text-sm">
                            {{ __("Employee") }}
                        </span>
                    </p>
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
                                    {{ __("Employee") }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-ash">
                                    {{ __("User Role :")}}
                                </td>
                                <td class="text-gunmetal font-semibold">
                                    {{ __("Employee") }}
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
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>

    @push("modal")

    @endpush
</x-app-layout>
