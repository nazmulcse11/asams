<x-app-layout>
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 xl:gap-10">
        <!-- User Details Mainbody -->
        <div class="mainbody lg:col-span-2">
            <div class="coverimage">
                <img src="{{ $item?->profile?->cover ?? asset('images/default-banner.png') }}"
                     class="w-full rounded-2xl h-[160px] md:h-[200px] lg:h-[260px] object-cover object-center"
                     alt="{{ $item?->profile->full_name ?? $item->username }}" >
            </div>
            <div class="profile-header max-md:mb-6 -mt-[72px] md:-mt-20 2xl:-mt-[120px] md:flex items-start gap-6 lg:pl-6 xl:pl-10">
                <img src="{{ $item?->profile?->picture ?? asset('images/cover-placeholder.png') }}"
                     class="rounded-full w-36 h-36 md:w-40 md:h-40 2xl:w-60 2xl:h-60 max-md:mx-auto"
                     alt="{{ $item?->profile->full_name ?? $item->username }}" >

                <div class="md:flex-1 xl:pb-8 relative max-md:text-center max-md:space-y-2 md:mt-24 2xl:mt-36">
                    <h5 class="font-semibold text-black-500 text-2xl xl:text-3xl md:mb-2">
                        {{ getUsername($item) }}
                    </h5>
                    <div class="mt-5 flex gap-3 max-md:justify-center *:flex *:items-center *:justify-center *:gap-2 *:rounded-lg *:px-3 xl:*:px-6 *:py-3 *:transition-all max-xl:*:text-sm">
                        <form action="{{ route('employee.buyer.request.approve', $item->id) }}" method="post">
                            @csrf
                            <button type="submit" class="bg-themered text-white hover:bg-gunmetal">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3.66525C14.7878 3.07907 13.4304 2.75 12 2.75C6.9125 2.75 2.75 6.9125 2.75 12C2.75 17.0875 6.9125 21.25 12 21.25C17.0875 21.25 21.25 17.0875 21.25 12C21.25 11.3139 21.1743 10.6445 21.0308 10" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.5 11.998L10.25 14.748L21.25 3.74805" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{ __('Approve This Buyer') }}
                            </button>
                        </form>
                        <form action="{{ route('employee.buyer.request.reject', $item->id) }}" method="post">
                            @csrf
                            <button type="submit" class="bg-[#FFF0F1] text-themered hover:bg-themered hover:text-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.25C17.0875 21.25 21.25 17.0875 21.25 12C21.25 6.9125 17.0875 2.75 12 2.75C6.9125 2.75 2.75 6.9125 2.75 12C2.75 17.0875 6.9125 21.25 12 21.25Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 15L15 9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 15L9 9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{ __('Reject') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="widget-wrapper md:mt-12 *:rounded-2xl *:border *:border-slate-100 *:bg-white *:p-6 xl:*:p-8 lg:*:max-w-[755px] *:ml-auto space-y-6">
                <div class="widget">
                    <h6 class="font-bold text-black-500 text-xl mb-3">
                        {{ __("1. Profile Information") }}
                    </h6>
                    <div class="overflow-auto">
                        <table class="table w-full border-separate [&_td]:py-3 [&_td]:border-b [&_td]:border-b-slate-100 [&_td]:align-middle [&_td:first-child]:whitespace-nowrap">
                            <tbody>
                                <tr>
                                    <td class="text-ash">
                                        {{ __("Gender :")}}
                                    </td>
                                    <td class="text-gunmetal font-semibold">
                                        {{ $item?->profile?->gender?->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-ash">
                                        {{ __("Preferred Contact :")}}
                                    </td>
                                    <td class="text-gunmetal font-semibold">
                                        {{ $item->preferred_contact }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-ash">
                                        {{ __("Source/Referrence :")}}
                                    </td>
                                    <td class="text-gunmetal font-semibold">
                                        {{ $item->agent?->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-ash">
                                        {{ __("Bio :")}}
                                    </td>
                                    <td class="text-gunmetal font-semibold">
                                        {{ $item->profile?->bio }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="widget">
                    <h6 class="font-bold text-black-500 text-xl mb-3">
                        {{ __("2. Address Information") }}
                    </h6>
                    <div class="overflow-auto">
                        <table class="table w-full border-separate [&_td]:py-3 [&_td]:border-b [&_td]:border-b-slate-100 [&_td]:align-middle [&_td:first-child]:whitespace-nowrap">
                            <tbody>
                                <tr>
                                    <td class="text-ash">
                                        {{ __("Address Line 1 :")}}
                                    </td>
                                    <td class="text-gunmetal font-semibold">
                                        {{ $item->addresses->first()?->address_line1 ?? "N/A" }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-ash">
                                        {{ __("Address Line 2 :")}}
                                    </td>
                                    <td class="text-gunmetal font-semibold">
                                        {{ $item->addresses->first()?->address_line2 ?? "N/A" }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-ash">
                                        {{ __("City :")}}
                                    </td>
                                    <td class="text-gunmetal font-semibold">
                                        {{ $item->addresses->first()?->city?->name ?? "N/A" }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-ash">
                                        {{ __("State :")}}
                                    </td>
                                    <td class="text-gunmetal font-semibold">
                                        {{ $item->addresses->first()?->state?->name ?? "N/A" }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-ash">
                                        {{ __("Zip Code :")}}
                                    </td>
                                    <td class="text-gunmetal font-semibold">
                                        {{ $item->addresses->first()?->zip_code ?? "N/A" }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-ash">
                                        {{ __("Country :")}}
                                    </td>
                                    <td class="text-gunmetal font-semibold">
                                        {{ $item->addresses->first()?->country?->name ?? "N/A" }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Sidebar -->
        <div class="quicksidebar *:rounded-2xl *:border *:border-slate-100 *:bg-white *:p-6 xl:*:p-8 space-y-6">
            <div class="widget">
                <h6 class="font-bold text-black-500 text-xl">
                    {{ __("Basic Overview") }}
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
                                    {{ __("Buyer ID :")}}
                                </td>
                                <td class="text-gunmetal font-semibold">
                                    {{ $item->public_id }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
                <div class="nid mt-6 mx-auto w-[270px] h-[170px] relative ">
                    <div class="card-inner w-full h-full transform-preserve-3d transition-transform duration-700 *:absolute *:w-full *:h-full shadow-md">
                        <div class="card front">
                            <img src="{{ asset('/images/buyer/nid.png') }}" class="frontpart" alt="NID Front of {{ $item->profile?->full_name }}">
                        </div>
                        <div class="card back">
                            <img src="{{ asset('/images/buyer/nid.png') }}" class="backpart" alt="NID Back of {{ $item->profile?->full_name }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push("modal")

    @endpush

    @push("scripts")
     <style>
        .nid {
            perspective: 1000px;
        }
        .transform-preserve-3d {
            transform-style: preserve-3d;
            backface-visibility: hidden;
            -moz-backface-visibility: hidden;
        }
        .nid .card.front {
            z-index: 2;
        }
        .nid .card.back {
            transform: rotateY(180deg);
            z-index: 1;
        }
        .nid:hover .card-inner {
            transform: rotateY(180deg);
        }

    </style>
    @endpush
</x-app-layout>
