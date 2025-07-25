<x-app-layout>
    <!-- Properties Page Title -->
    <div class="sm:flex flex-wrap items-center gap-4 justify-between max-sm:space-y-6">
        <div class="name flex items-center gap-3">
            <div class="icon flex-[0_0_64px]">
                @isset($item->picture[0])
                    <img src="{{ $item->picture[0] }}" class="w-16 h-16 rounded-full object-cover object-center" alt="">
                @else
                    <img src="{{ asset('/images/pic1.png') }}" class="w-16 h-16 rounded-full object-cover object-center"
                         alt="">
                @endisset
            </div>
            <div class="desc">
                <h3 class="text-lg font-semibold">
                    {{ $item->name }}
                </h3>
                <p class="text-sm text-gray-500">
                    {{ $item->address }}
                </p>
            </div>
        </div>

        <div class="meta-info md:flex items-center gap-10">
            <ul class="max-md:hidden flex items-center flex-wrap gap-x-10 gap-y-3.5 *:flex *:gap-2.5 *:items-center">
                <li>
                    <div class="icon">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4"
                                  d="M32.5 0H3.5C1.567 0 0 1.567 0 3.5V32.5C0 34.433 1.567 36 3.5 36H32.5C34.433 36 36 34.433 36 32.5V3.5C36 1.567 34.433 0 32.5 0Z"
                                  fill="#A6B1BF"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M5.5 22C6.3284 22 7 22.6716 7 23.5V27.2692C7 28.2251 7.7749 29 8.7308 29H12.5C13.3284 29 14 29.6716 14 30.5C14 31.3284 13.3284 32 12.5 32H8.7308C6.118 32 4 29.882 4 27.2692V23.5C4 22.6716 4.6716 22 5.5 22Z"
                                  fill="#A6B1BF"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M30.5 22C31.3284 22 32 22.6716 32 23.5V27.2692C32 29.882 29.882 32 27.2692 32H23.5C22.6716 32 22 31.3284 22 30.5C22 29.6716 22.6716 29 23.5 29H27.2692C28.2251 29 29 28.2251 29 27.2692V23.5C29 22.6716 29.6716 22 30.5 22Z"
                                  fill="#A6B1BF"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M22 5.5C22 4.6716 22.6716 4 23.5 4H27.5C29.9853 4 32 6.0147 32 8.5V12.5C32 13.3284 31.3284 14 30.5 14C29.6716 14 29 13.3284 29 12.5V8.5C29 7.6716 28.3284 7 27.5 7H23.5C22.6716 7 22 6.3284 22 5.5Z"
                                  fill="#A6B1BF"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.5 7C7.6716 7 7 7.6716 7 8.5V12.5C7 13.3284 6.3284 14 5.5 14C4.6716 14 4 13.3284 4 12.5V8.5C4 6.0147 6.0147 4 8.5 4H12.5C13.3284 4 14 4.6716 14 5.5C14 6.3284 13.3284 7 12.5 7H8.5Z"
                                  fill="#A6B1BF"/>
                        </svg>
                    </div>
                    <div class="info">
                        <span class="text-sm text-gray-500">{{ __("Area:")}}</span> <br>
                        <b>{{$item->total_area ?? 0}}{{ __(" sq.ft") }}</b>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.7943 0H6.2429C2.14952 0 0 2.14952 0 6.2243V9.7756C0 13.8504 2.14952 15.9999 6.2243 15.9999H9.7756C13.8504 15.9999 15.9999 13.8504 15.9999 9.7756V6.2243C16.0186 2.14952 13.8691 0 9.7943 0Z"
                                fill="#A6B1BF"/>
                            <path opacity="0.4"
                                  d="M29.7757 0H26.2243C22.1495 0 20 2.14953 20 6.2243V9.7757C20 13.8505 22.1495 16 26.2243 16H29.7757C33.8505 16 36 13.8505 36 9.7757V6.2243C36 2.14953 33.8505 0 29.7757 0Z"
                                  fill="#A6B1BF"/>
                            <path
                                d="M29.7757 20H26.2243C22.1495 20 20 22.1495 20 26.2243V29.7757C20 33.8505 22.1495 36 26.2243 36H29.7757C33.8505 36 36 33.8505 36 29.7757V26.2243C36 22.1495 33.8505 20 29.7757 20Z"
                                fill="#A6B1BF"/>
                            <path opacity="0.4"
                                  d="M9.7943 20H6.2429C2.14952 20 0 22.147 0 26.217V29.7643C0 33.853 2.14952 36 6.2243 36H9.7756C13.8504 36 15.9999 33.853 15.9999 29.783V26.2357C16.0186 22.147 13.8691 20 9.7943 20Z"
                                  fill="#A6B1BF"/>
                        </svg>
                    </div>
                    <div class="info">
                        <span class="text-sm text-gray-500">{{ __("Blocks/Units:")}}</span> <br>
                        <b>{{ $item->total_count->block ?? 0}}</b>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M34.7394 5.77999L23.0194 0.55999C21.2994 -0.20001 18.6994 -0.20001 16.9794 0.55999L5.25938 5.77999C2.29938 7.1 1.85938 8.9 1.85938 9.86C1.85938 10.82 2.29938 12.62 5.25938 13.94L16.9794 19.16C17.8394 19.54 18.9194 19.74 19.9994 19.74C21.0794 19.74 22.1594 19.54 23.0194 19.16L34.7394 13.94C37.6994 12.62 38.1394 10.82 38.1394 9.86C38.1394 8.9 37.7194 7.1 34.7394 5.77999Z"
                                fill="#A6B1BF"/>
                            <path opacity="0.4"
                                  d="M20.0006 30.08C19.2406 30.08 18.4806 29.92 17.7806 29.62L4.30063 23.62C2.24063 22.7 0.640625 20.24 0.640625 17.98C0.640625 17.16 1.30063 16.5 2.12063 16.5C2.94063 16.5 3.60063 17.16 3.60063 17.98C3.60063 19.06 4.50064 20.46 5.50064 20.9L18.9806 26.9C19.6206 27.18 20.3606 27.18 21.0006 26.9L34.4806 20.9C35.4806 20.46 36.3806 19.08 36.3806 17.98C36.3806 17.16 37.0406 16.5 37.8606 16.5C38.6806 16.5 39.3406 17.16 39.3406 17.98C39.3406 20.22 37.7406 22.7 35.6806 23.62L22.2006 29.62C21.5206 29.92 20.7606 30.08 20.0006 30.08Z"
                                  fill="#A6B1BF"/>
                            <path opacity="0.4"
                                  d="M20.0006 39.9999C19.2406 39.9999 18.4806 39.8399 17.7806 39.5399L4.30063 33.5399C2.08063 32.5599 0.640625 30.3399 0.640625 27.8999C0.640625 27.0799 1.30063 26.4199 2.12063 26.4199C2.94063 26.4199 3.60063 27.0799 3.60063 27.8999C3.60063 29.1599 4.34064 30.2999 5.50064 30.8199L18.9806 36.8199C19.6206 37.0999 20.3606 37.0999 21.0006 36.8199L34.4806 30.8199C35.6206 30.3199 36.3806 29.1599 36.3806 27.8999C36.3806 27.0799 37.0406 26.4199 37.8606 26.4199C38.6806 26.4199 39.3406 27.0799 39.3406 27.8999C39.3406 30.3399 37.9006 32.5399 35.6806 33.5399L22.2006 39.5399C21.5206 39.8399 20.7606 39.9999 20.0006 39.9999Z"
                                  fill="#A6B1BF"/>
                        </svg>
                    </div>
                    <div class="info">
                        <span class="text-sm text-gray-500">{{ __("Floor:")}}</span> <br>
                        <b>{{ $item->total_count->floor ?? 0 }}</b>
                    </div>
                </li>
            </ul>
            <ul class="flex items-center flex-wrap gap-x-10 gap-y-3.5 *:flex *:gap-2.5 *:items-center">
                <li>
                    <a href="#new_reserve_modal" data-popup="modal" class="text-themered hover:bg-themered hover:text-white transition-all bg-[#FFF0F1] text-sm px-5 py-3 rounded-md font-semibold flex-1 inline-flex items-center justify-center">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:plus"></iconify-icon>
                        {{ __('New Reserve') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="my-6 spacer"></div>

    <h3 class="text-lg xl:text-2xl font-semibold mb-4">
        {{ __("Floor Plans")}}
    </h3>

    @php

        $agentNotifications = getCurrentAuthenticatedUser()->unreadnotifications()
            ->whereIn('type', [\App\Notifications\AgentReserveNotification::class])
            ->where('data->type', 'agent')
            ->get();

        $buyerNotifications = getCurrentAuthenticatedUser()->unreadnotifications()
            ->whereIn('type', [\App\Notifications\BuyerSaleRequestNotification::class])
            ->where('data->type', 'buyer')
            ->get();

        $agentFloorCounts = $agentNotifications->groupBy('data.floor_id')->map->count();
        $buyerFloorCounts = $buyerNotifications->groupBy('data.floor_id')->map->count();
    @endphp

    <div class="lg:flex flex-wrap gap-x-6 3xl:gap-x-10 gap-y-5 tab-wrapper">
        <div class="lg:flex-[0_0_165px] text-center">
            <form action="#" class="mb-4">
                <div class="input-area space-y-1">
                    <select name="agent_buyer_filter" id="agent_buyer_filter"
                            class="cursor-pointer text-sm w-full px-2 py-2 rounded-lg  border border-[#E1E5EA] focus:outline-none">
                        <option value="">{{ __("Filter Proposals") }}</option>
                        <option value="agent">{{ __("Agent Proposal ({$agentNotifications->count()})") }}</option>
                        <option value="buyer">{{ __("Buyer Proposal ({$buyerNotifications->count()})") }}</option>
                    </select>
                </div>
            </form>
            <ul id="nav_floor_list"
                class="max-lg:grid max-md:grid-cols-2 md:max-lg:grid-cols-3 max-lg:gap-3 nav-tabs lg:space-y-3 [&_a]:w-full [&_a]:text-sm [&_a]:py-3.5 [&_a]:px-5 [&_a]:rounded-md [&_a]:font-semibold [&_a]:inline-flex [&_a]:gap-2 [&_a]:items-center [&_a]:justify-center [&_a]:transition-all [&_a]:text-themered [&_a]:bg-[#FFF0F1]">
                @php $i = 1; @endphp
                @foreach($item->floors as $floor)
                    <li>
                        <a href="#floor_{{ $floor->id }}"
                           id="list_floor_{{ $floor->id }}"
                           data-floor-id="{{ $floor->id }}"
                           class="floor_{{ $floor->id }} floor_select_btn @if($i == 1) active @endif nav-item hover:bg-themered hover:text-white [&.active]:bg-themered [&.active]:text-white">
                            {{ $floor->name }}
                        </a>
                    </li>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </ul>
        </div>

        <div class="my-6 lg:hidden"></div>

        <div class="flex-1" id="floor_body">
            @if($item->total_count->floor > 0)
                <div
                    class="loading text-center h-full text-xl font-medium text-pureblack flex items-center justify-center flex-col">
                    <img src="{{ asset('/images/rotate.gif')}}" class="w-10 scale-x-[-1]" alt="Loading...">
                    Loading...
                </div>
            @else
                <div
                    class="loading text-center h-full text-xl font-medium text-pureblack flex items-center justify-center flex-col">
                    <iconify-icon icon="nonicons:not-found-16" width="50" height="50"
                                  style="color: #ff0000;"></iconify-icon>
                    <br>
                    No Floor Found
                </div>
            @endif


        </div>
    </div>

    @push("modal")

        <div id="page_modal"
             class="asams-modal fixed inset-0 z-[1024] p-4 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
            <!-- dynamic generated modal content -->
        </div>

        <!-- Shop Sale Request Modal -->
        <div id="shop_sale_request_modal"
             class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
            <div
                class="modal-content bg-white w-full max-w-4xl mx-auto p-6 lg:p-8 xl:p-10 border border-slate-400 rounded-2xl relative">
                <button
                    class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                    <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
                </button>
                <form id="multiStepForm" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-steps relative">
                        <div class="absolute right-2 top-2">
                            <svg viewBox="0 0 36 36" class="progress-circle w-12 h-12">
                                <circle class="progress-bg" cx="18" cy="18" r="16"/>
                                <circle class="progress-bar" cx="18" cy="18" r="16"/>
                                <text x="18" y="21" text-anchor="middle" fill="currentColor" font-size="10"
                                      class="step-count-placeholder">1/3
                                </text>
                            </svg>
                        </div>

                        <!-- Step 2 -->
                        <fieldset class="step space-y-6 hidden" data-step="2">
                            <div
                                class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                                <div
                                    class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24Z"
                                            fill="#F0F2F4"/>
                                        <path
                                            d="M35.9765 19.9734L35.642 16.8272C35.1577 13.397 33.5776 12 30.1984 12H27.4766H25.7697H22.2637H20.5568H17.7888C14.3981 12 12.8296 13.397 12.3337 16.8613L12.0223 19.9848C11.907 21.2001 12.2414 22.3813 12.968 23.3013C13.8445 24.4258 15.1939 25.0618 16.6932 25.0618C18.1464 25.0618 19.5419 24.3463 20.4184 23.1991C21.2026 24.3463 22.5405 25.0618 24.0282 25.0618C25.516 25.0618 26.8192 24.3804 27.615 23.2445C28.5031 24.369 29.8755 25.0618 31.3056 25.0618C32.8395 25.0618 34.2235 24.3917 35.0885 23.2105C35.7804 22.3018 36.0918 21.1547 35.9765 19.9734Z"
                                            fill="#2B323B"/>
                                        <path
                                            d="M23.275 29.5029C21.8103 29.6506 20.7031 30.8773 20.7031 32.3311V35.4432C20.7031 35.7499 20.9569 35.9998 21.2682 35.9998H26.7695C27.0809 35.9998 27.3346 35.7499 27.3346 35.4432V32.7286C27.3462 30.3548 25.9276 29.2303 23.275 29.5029Z"
                                            fill="#2B323B"/>
                                        <path
                                            d="M34.8317 26.9334V30.3181C34.8317 33.453 32.2483 35.9972 29.0652 35.9972C28.7538 35.9972 28.5001 35.7473 28.5001 35.4406V32.726C28.5001 31.2722 28.0503 30.1364 27.1738 29.364C26.4011 28.6712 25.3515 28.3304 24.0483 28.3304C23.76 28.3304 23.4717 28.3418 23.1603 28.3759C21.1074 28.5803 19.5504 30.284 19.5504 32.3285V35.4406C19.5504 35.7473 19.2967 35.9972 18.9853 35.9972C15.8022 35.9972 13.2188 33.453 13.2188 30.3181V26.9561C13.2188 26.161 14.0145 25.6272 14.7642 25.8884C15.0756 25.9907 15.387 26.0702 15.7099 26.1156C15.8483 26.1383 15.9982 26.161 16.1366 26.161C16.3211 26.1838 16.5057 26.1951 16.6902 26.1951C18.028 26.1951 19.3428 25.7067 20.3808 24.8662C21.3726 25.7067 22.6643 26.1951 24.0252 26.1951C25.3977 26.1951 26.6663 25.7294 27.6582 24.8889C28.6961 25.7181 29.9878 26.1951 31.3026 26.1951C31.5102 26.1951 31.7178 26.1838 31.9139 26.161C32.0523 26.1497 32.1791 26.1383 32.306 26.1156C32.6635 26.0702 32.9864 25.9679 33.3094 25.8657C34.059 25.6158 34.8317 26.161 34.8317 26.9334Z"
                                            fill="#2B323B"/>
                                    </svg>
                                </div>
                                <div class="">
                                    <h2 class="text-xl font-semibold text-gray-900">
                                        Shop Details
                                    </h2>
                                    <p class="text-sm text-gray-500 font-light">
                                        Check all the important info about the shop’s sale request.
                                    </p>
                                </div>
                            </div>

                            <div class="form-body grid gap-6 grid-cols-1 md:grid-cols-2 my-10">
                                <table class="table w-full border border-slate-100 rounded-xl overflow-hidden md:col-span-2">
                                    <tbody>
                                        <tr class="*:bg-[#F8F9FB] *:border *:border-slate-100 *:px-4 *:py-2 *:text-xs *:leading-4 *:text-center">
                                            <td>
                                                Area <br>
                                                <b class="text-pureblack">1980 sq. ft</b>
                                            </td>
                                            <td>
                                                Length <br>
                                                <b class="text-pureblack">55 ft</b>
                                            </td>
                                            <td>
                                                Width <br>
                                                <b class="text-pureblack">36 ft</b>
                                            </td>
                                        </tr>
                                        <tr class="*:bg-[#F8F9FB] *:border *:border-slate-100 *:px-4 *:py-2 *:text-xs *:leading-4 *:text-center">
                                            <td>
                                                Property <br>
                                                <b class="text-pureblack">Nur Super Market</b>
                                            </td>
                                            <td>
                                                Block <br>
                                                <b class="text-pureblack">A</b>
                                            </td>
                                            <td>
                                                Floor <br>
                                                <b class="text-pureblack">1st</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table w-full border border-slate-100 rounded-xl overflow-hidden md:col-span-2">
                                    <tbody>
                                        <tr class="*:bg-[#F8F9FB] *:border *:border-slate-100 *:px-4 *:py-2 *:text-xs *:leading-4 *:text-center">
                                            <td>
                                                Sale Price <br>
                                                <b class="text-pureblack">৳10,00,000</b>
                                            </td>
                                            <td>
                                                Booking Advance <br>
                                                <b class="text-pureblack">৳3,50,000</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="field-item space-y-2">
                                    <label class="text-gunmetal font-medium block text-sm">
                                        {{ __('Booking Advance')}}
                                    </label>
                                    <input type="text" inputmode="numeric" name="booking_advance" value=""
                                           class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"
                                           placeholder="{{ __('৳3,50,000')}}"/>
                                    <x-input-error :messages="$errors->get('booking_advance')" class="mt-1"/>
                                </div>
                            </div>


                            <div
                                class="mt-6 flex justify-between *:flex *:items-center *:justify-center *:gap-3 *:rounded-lg  *:px-6 *:py-3">
                                <button type="button" class="prev-step bg-gray-300 text-gray-800">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.4994 6.07807C16.9677 3.07158 13.839 1 10.25 1C5.16249 1 0.99999 5.1625 0.99999 10.25C0.99999 15.3375 5.16249 19.5 10.25 19.5C13.839 19.5 16.9677 17.4284 18.4994 14.4219"
                                            stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path d="M19.4994 10.25H5.49939L9.49939 14.25M9.49939 6.25L7.99939 7.75"
                                              stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                    {{ __('Back')}}
                                </button>
                                <button type="button" class="next-step bg-red-600 text-white">
                                    {{ __('Continue Sale Request')}}
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219"
                                            stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="currentcolor"
                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </fieldset>

                        <!-- Step 3 -->
                        <fieldset class="step space-y-6 hidden" data-step="3">
                            <div
                                class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                                <div
                                    class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M28 27.0997C28 27.592 27.592 28.0003 27.1 28.0003H4.9C4.408 28.0003 4 27.592 4 27.0997C4 26.6075 4.408 26.1992 4.9 26.1992H27.1C27.592 26.1992 28 26.6075 28 27.0997Z"
                                            fill="#2B323B"/>
                                        <path
                                            d="M20.0713 7.01377L7.18325 19.9093C6.69125 20.4016 5.89925 20.4016 5.41925 19.9093H5.40725C3.73925 18.2283 3.73925 15.5147 5.40725 13.8458L13.9872 5.26074C15.6672 3.57975 18.3793 3.57975 20.0593 5.26074C20.5513 5.72901 20.5513 6.53348 20.0713 7.01377Z"
                                            fill="#2B323B"/>
                                        <path
                                            d="M26.5873 11.7784L22.9273 8.11629C22.4353 7.624 21.6433 7.624 21.1633 8.11629L8.27525 21.0118C7.78325 21.4921 7.78325 22.2846 8.27525 22.7769L11.9352 26.451C13.6152 28.12 16.3273 28.12 18.0073 26.451L26.5753 17.866C28.2793 16.185 28.2793 13.4594 26.5873 11.7784ZM16.9153 22.6208L15.4633 24.0856C15.1633 24.3858 14.6713 24.3858 14.3593 24.0856C14.0593 23.7855 14.0593 23.2932 14.3593 22.981L15.8233 21.5161C16.1113 21.228 16.6153 21.228 16.9153 21.5161C17.2153 21.8163 17.2153 22.3326 16.9153 22.6208ZM21.6793 17.854L18.7513 20.7957C18.4513 21.0839 17.9593 21.0839 17.6473 20.7957C17.3473 20.4955 17.3473 20.0033 17.6473 19.6911L20.5873 16.7493C20.8753 16.4612 21.3793 16.4612 21.6793 16.7493C21.9793 17.0615 21.9793 17.5538 21.6793 17.854Z"
                                            fill="#2B323B"/>
                                    </svg>
                                </div>
                                <div class="">
                                    <h2 class="text-xl font-semibold text-gray-900">
                                        {{ __('Payment Details')}}
                                    </h2>
                                    <p class="text-sm text-gray-500 font-light">
                                        {{ __('Add how and how much you’ve paid for this shop.')}}
                                    </p>
                                </div>
                            </div>

                            <div class="form-body grid gap-6 grid-cols-1 md:grid-cols-2 my-10 items-end">
                                <div class="field-item space-y-2">
                                    <label class="text-gunmetal font-medium block text-sm">
                                        {{ __('Preferred Payment')}} <span class="text-red-600">*</span>
                                    </label>
                                    <select name="preffered_payment"
                                            class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required>
                                        <option value="">Full Payment</option>
                                        <option value="">Installment Plan</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('preffered_payment')" class="mt-1"/>
                                </div>
                                <div class="field-item space-y-2">
                                    <label class="text-gunmetal font-medium block text-sm">
                                        {{ __('Management Fee')}}
                                    </label>
                                    <input type="text" name="management_fee" value=""
                                           class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"
                                           placeholder="{{ __('৳1,00,000')}}"/>
                                    <x-input-error :messages="$errors->get('management_fee')" class="mt-1"/>
                                </div>
                                <div class="field-item space-y-2 md:col-span-2">
                                    <button type="button" data-modal-target="#schedule_installment_modal"
                                            class="w-full text-themered text-base font-medium transition-all bg-[#FFF0F1] rounded-lg py-3 flex items-center justify-center hover:bg-themered hover:text-white">
                                        <iconify-icon icon="heroicons:plus-solid"
                                                      class="mr-2 text-lg xl:text-2xl"></iconify-icon>
                                        Schedule Installmnent
                                    </button>
                                </div>
                                <div class="field-item space-y-2 md:col-span-2">
                                    <label class="text-gunmetal font-medium block text-sm">
                                        {{ __('Notes')}}
                                    </label>
                                    <textarea name="notes"
                                              class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"
                                              rows="4"></textarea>
                                    <x-input-error :messages="$errors->get('notes')" class="mt-1"/>
                                </div>
                            </div>

                            <div
                                class="mt-6 flex justify-between *:flex *:items-center *:justify-center *:gap-3 *:rounded-lg  *:px-6 *:py-3">
                                <button type="button" class="prev-step bg-gray-300 text-gray-800">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.4994 6.07807C16.9677 3.07158 13.839 1 10.25 1C5.16249 1 0.99999 5.1625 0.99999 10.25C0.99999 15.3375 5.16249 19.5 10.25 19.5C13.839 19.5 16.9677 17.4284 18.4994 14.4219"
                                            stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                        <path d="M19.4994 10.25H5.49939L9.49939 14.25M9.49939 6.25L7.99939 7.75"
                                              stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                    {{ __('Back') }}
                                </button>
                                <button type="submit"
                                        class="bg-red-600 text-white finish-step">{{ __('Continue Sale Request')}}</button>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>

        <!-- Shop Details Modal -->
        <div id="schedule_installment_modal"
             class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
            <div
                class="modal-content bg-white w-full max-w-2xl mx-auto p-6 lg:p-8 xl:p-10 border border-slate-400 rounded-2xl relative">
                <div class="modal-header">

                    <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                        <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.9975 6.2002C9.62417 6.2002 4.4375 11.3869 4.4375 17.7602C4.4375 24.1335 9.62417 29.3335 15.9975 29.3335C22.3708 29.3335 27.5575 24.1469 27.5575 17.7735C27.5575 11.4002 22.3708 6.2002 15.9975 6.2002ZM16.9975 17.3335C16.9975 17.8802 16.5442 18.3335 15.9975 18.3335C15.4508 18.3335 14.9975 17.8802 14.9975 17.3335V10.6669C14.9975 10.1202 15.4508 9.66686 15.9975 9.66686C16.5442 9.66686 16.9975 10.1202 16.9975 10.6669V17.3335Z"
                                    fill="#2B323B"/>
                                <path
                                    d="M19.8542 4.59984H12.1475C11.6142 4.59984 11.1875 4.17317 11.1875 3.63984C11.1875 3.1065 11.6142 2.6665 12.1475 2.6665H19.8542C20.3875 2.6665 20.8142 3.09317 20.8142 3.6265C20.8142 4.15984 20.3875 4.59984 19.8542 4.59984Z"
                                    fill="#2B323B"/>
                            </svg>
                        </div>
                        <div class="">
                            <h2 class="text-xl font-semibold text-gray-900">
                                Schedule Installment
                            </h2>
                            <p class="text-sm text-gray-500 font-light">
                                Pick how you want to pay over time and when to start
                            </p>
                        </div>
                    </div>
                    <button
                        class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                        <iconify-icon class="text-3xl font-light"
                                      icon="material-symbols-light:close-small"></iconify-icon>
                    </button>

                </div>
                <form method="post" id="schedule_installment" class="space-y-8">
                    <div class="modal-body">

                        <div class="form-body mt-10 space-y-3" id="installment-fields">
                            <div class="field-item-group grid gap-4 grid-cols-1 md:grid-cols-3">
                                <div class="field-item space-y-2">
                                    <label class="text-gunmetal font-medium block text-sm">
                                        {{ __('Amount of Installment 1')}} <span class="text-red-600">*</span>
                                    </label>
                                    <input type="text" name="amount_installment[]"
                                           class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg text-end"
                                           placeholder="{{ __('75,000')}}" required/>
                                </div>
                                <div class="field-item space-y-2">
                                    <label class="text-gunmetal font-medium block text-sm">
                                        {{ __('Payment Date')}} <span class="text-red-600">*</span>
                                    </label>
                                    <input type="date" name="payment_date[]"
                                           class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required/>
                                </div>
                                <div class="field-item space-y-2">
                                    <label class="text-gunmetal font-medium block text-sm">
                                        {{ __('Note')}}<span class="text-xs text-[#8997A9]">(any specifi remarks)</span> <span class="text-red-600">*</span>
                                    </label>
                                    <input type="text" name="installment_remarks[]"
                                           class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg text-end"
                                           placeholder="{{ __('Remarks')}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="field-item my-4">
                            <button type="button" id="add-installment"
                                    class="w-full text-themered text-base font-medium transition-all bg-[#FFF0F1] rounded-lg py-3 flex items-center justify-center hover:bg-themered hover:text-white">
                                <iconify-icon icon="heroicons:plus-solid"
                                              class="mr-2 text-lg xl:text-2xl"></iconify-icon>
                                Add Installment
                            </button>
                        </div>

                        <div class="text-end">
                            <button type="submit"
                                    class="bg-themered text-white inline-flex items-center justify-center gap-2 rounded-lg px-5 py-3 transition-all hover:bg-gunmetal hover:px-6">
                                {{ __('Save')}}
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <!-- New Reserve Modal -->
        <div id="new_reserve_modal" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
            <div class="modal-content bg-white w-full max-w-3xl mx-auto border border-slate-400 rounded-2xl relative">
                <div class="modal-header bg-[#F8F9FB] p-4 lg:p-6 rounded-tl-2xl rounded-tr-2xl">
                    <h2 class="text-center text-xl lg:text-2xl font-semibold">
                        {{ __("Select Property")}}
                    </h2>
                    <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                        <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
                    </button>
                </div>
                <div class="modal-body p-4 lg:p-8 xl:p-10 space-y-6">
                    <form action="{{ route('agent.reserved-shop.market') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="field-body">
                            <div class="field-item space-y-1">
                                <label class="text-gunmetal font-medium block text-sm">
                                    {{ __('Select A Property to Reserve')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="property" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg" required>
                                    @foreach(dropdown_options("property") as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('select_property_reserve')" class="mt-1"/>
                            </div>
                        </div>

                        <div class="mt-6 text-end">
                            <button type="submit" class="group max-md:text-sm bg-themered text-white inline-flex items-center justify-center gap-2 rounded-lg px-3 lg:px-5 py-2 lg:py-3">
                                Proceed
                                <svg class="transition-all group-hover:scale-110" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="transition-all duration-300 group-hover:rotate-[360deg] origin-center"></path>
                                    <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="view_all_proposal_table" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
            <div class="modal-content bg-white w-full max-w-5xl mx-auto border border-slate-400 rounded-2xl relative">
                <div class="modal-header bg-[#F8F9FB] p-4 lg:p-6 rounded-tl-2xl rounded-tr-2xl">
                    <h2 class="text-center text-xl lg:text-2xl">
                        <b>{{ __("All Proposals on Shop No. 108") }}</b>
                    </h2>
                    <button
                        class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                        <iconify-icon class="text-3xl font-light"
                                      icon="material-symbols-light:close-small"></iconify-icon>
                    </button>
                </div>
                <div class="modal-body p-4 lg:p-8 xl:p-10 space-y-6">
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse table-auto">
                            <thead>
                            <tr class="*:font-medium *:text-black-600 *:py-2 *:px-3 *:text-sm *:border *:border-slate-100 *:bg-slate-50 *:whitespace-nowrap">
                                <th>
                                    {{ __('No')}}
                                </th>
                                <th>
                                    {{ __(' Agent Name ')}}
                                </th>
                                <th>
                                    {{ __(' Sale Price ')}}
                                </th>
                                <th>
                                    {{ __(' Security Money ')}}
                                </th>
                                <th>
                                    {{ __(' Reserve Until ')}}
                                </th>
                                <th>
                                    {{ __(' Commission ')}}
                                </th>
                                <th>
                                    {{ __(' Action ')}}
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100 hover:bg-[#F9FAFB] *:whitespace-nowrap">
                                <td>
                                    {{ __( '#1')}}
                                </td>
                                <td>
                                    <a href="#" class="hover:underline">
                                        {{ __( 'James Milner' )}}
                                    </a>
                                </td>
                                <td>
                                    {{ __( '৳10,00,000' )}}
                                </td>
                                <td>
                                    {{ __( '৳1,25,000' )}}
                                </td>
                                <td>
                                    {{ __( '2025-07-15' )}}
                                </td>
                                <td>
                                    {{ __( '7%' )}}
                                </td>
                                <td>
                                    <div
                                        class="*:text-sm *:py-2.5 *:px-4 *:rounded-md *:font-medium *:flex-1 *:inline-flex *:items-center *:justify-center *:gap-1.5 *:transition-all">
                                        <a href="#"
                                           class="text-themered bg-[#FFF0F1] border border-[#FFF0F1] hover:bg-themered hover:text-white">
                                            {{ __('Reject') }}
                                        </a>
                                        <a href="#"
                                           class="text-white bg-themered border border-themered hover:bg-gunmetal hover:border-gunmetal">
                                            {{ __('Approve') }}
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100 hover:bg-[#F9FAFB] *:whitespace-nowrap">
                                <td>
                                    {{ __( '#2')}}
                                </td>
                                <td>
                                    <a href="#" class="hover:underline">
                                        {{ __( 'Robert William' )}}
                                    </a>
                                </td>
                                <td>
                                    {{ __( '৳12,00,000' )}}
                                </td>
                                <td>
                                    {{ __( '৳1,10,000' )}}
                                </td>
                                <td>
                                    {{ __( '2025-07-15' )}}
                                </td>
                                <td>
                                    {{ __( '10%' )}}
                                </td>
                                <td>
                                    <div
                                        class="*:text-sm *:py-2.5 *:px-4 *:rounded-md *:font-medium *:flex-1 *:inline-flex *:items-center *:justify-center *:gap-1.5 *:transition-all">
                                        <a href="#"
                                           class="text-themered bg-[#FFF0F1] border border-[#FFF0F1] hover:bg-themered hover:text-white">
                                            {{ __('Reject') }}
                                        </a>
                                        <a href="#"
                                           class="text-white bg-themered border border-themered hover:bg-gunmetal hover:border-gunmetal">
                                            {{ __('Approve') }}
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100 hover:bg-[#F9FAFB] *:whitespace-nowrap">
                                <td>
                                    {{ __( '#3')}}
                                </td>
                                <td>
                                    <a href="#" class="hover:underline">
                                        {{ __( 'Henry Nichols' )}}
                                    </a>
                                </td>
                                <td>
                                    {{ __( '৳12,00,000' )}}
                                </td>
                                <td>
                                    {{ __( '৳1,10,000' )}}
                                </td>
                                <td>
                                    {{ __( '2025-07-15' )}}
                                </td>
                                <td>
                                    {{ __( '12%' )}}
                                </td>
                                <td>
                                    <div
                                        class="*:text-sm *:py-2.5 *:px-4 *:rounded-md *:font-medium *:flex-1 *:inline-flex *:items-center *:justify-center *:gap-1.5 *:transition-all">
                                        <a href="#"
                                           class="text-themered bg-[#FFF0F1] border border-[#FFF0F1] hover:bg-themered hover:text-white">
                                            {{ __('Reject') }}
                                        </a>
                                        <a href="#"
                                           class="text-white bg-themered border border-themered hover:bg-gunmetal hover:border-gunmetal">
                                            {{ __('Approve') }}
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="view_all_request_table"
             class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">

            <div class="modal-content bg-white w-full max-w-5xl mx-auto border border-slate-400 rounded-2xl relative">
                <div class="modal-header bg-[#F8F9FB] p-4 lg:p-6 rounded-tl-2xl rounded-tr-2xl">
                    <h2 class="text-center text-xl lg:text-2xl">
                        <b>{{ __("All Request on Shop No. 106") }}</b>
                    </h2>
                    <button
                        class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                        <iconify-icon class="text-3xl font-light"
                                      icon="material-symbols-light:close-small"></iconify-icon>
                    </button>
                </div>
                <div class="modal-body p-4 lg:p-8 xl:p-10 space-y-6">
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse table-auto">
                            <thead>
                            <tr class="*:font-medium *:text-black-600 *:py-2 *:px-3 *:text-sm *:border *:border-slate-100 *:bg-slate-50 *:whitespace-nowrap">
                                <th>
                                    {{ __('No')}}
                                </th>
                                <th>
                                    {{ __(' Buyer Name ')}}
                                </th>
                                <th>
                                    {{ __(' Sale Price ')}}
                                </th>
                                <th>
                                    {{ __(' Booking Advance ')}}
                                </th>
                                <th>
                                    {{ __(' Preferred Payment ')}}
                                </th>
                                <th>
                                    {{ __(' No. of Installments ')}}
                                </th>
                                <th>
                                    {{ __(' Action ')}}
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100 hover:bg-[#F9FAFB] *:whitespace-nowrap">
                                <td>
                                    {{ __( '#1')}}
                                </td>
                                <td>
                                    <a href="#" class="hover:underline">
                                        {{ __( 'James Milner' )}}
                                    </a>
                                </td>
                                <td>
                                    {{ __( '৳10,000' )}}
                                </td>
                                <td>
                                    {{ __( '৳3,50,000' )}}
                                </td>
                                <td>
                                    {{ __( 'Installment' )}}
                                </td>
                                <td>
                                    {{ __( '3' )}}
                                </td>
                                <td>
                                    <div
                                        class="*:text-sm *:py-2.5 *:px-4 *:rounded-md *:font-medium *:flex-1 *:inline-flex *:items-center *:justify-center *:gap-1.5 *:transition-all">
                                        <a href="#"
                                           class="text-themered bg-[#FFF0F1] border border-[#FFF0F1] hover:bg-themered hover:text-white">
                                            {{ __('Reject') }}
                                        </a>
                                        <a href="#"
                                           class="text-white bg-themered border border-themered hover:bg-gunmetal hover:border-gunmetal">
                                            {{ __('Approve') }}
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100 hover:bg-[#F9FAFB] *:whitespace-nowrap">
                                <td>
                                    {{ __( '#1')}}
                                </td>
                                <td>
                                    <a href="#" class="hover:underline">
                                        {{ __( 'James Milner' )}}
                                    </a>
                                </td>
                                <td>
                                    {{ __( '৳10,000' )}}
                                </td>
                                <td>
                                    {{ __( '৳3,50,000' )}}
                                </td>
                                <td>
                                    {{ __( 'Full Payment' )}}
                                </td>
                                <td>
                                    {{ __( '-' )}}
                                </td>
                                <td>
                                    <div
                                        class="*:text-sm *:py-2.5 *:px-4 *:rounded-md *:font-medium *:flex-1 *:inline-flex *:items-center *:justify-center *:gap-1.5 *:transition-all">
                                        <a href="#"
                                           class="text-themered bg-[#FFF0F1] border border-[#FFF0F1] hover:bg-themered hover:text-white">
                                            {{ __('Reject') }}
                                        </a>
                                        <a href="#"
                                           class="text-white bg-themered border border-themered hover:bg-gunmetal hover:border-gunmetal">
                                            {{ __('Approve') }}
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100 hover:bg-[#F9FAFB] *:whitespace-nowrap">
                                <td>
                                    {{ __( '#3')}}
                                </td>
                                <td>
                                    <a href="#" class="hover:underline">
                                        {{ __( 'James Milner' )}}
                                    </a>
                                </td>
                                <td>
                                    {{ __( '৳10,000' )}}
                                </td>
                                <td>
                                    {{ __( '৳3,50,000' )}}
                                </td>
                                <td>
                                    {{ __( 'Installment' )}}
                                </td>
                                <td>
                                    {{ __( '2' )}}
                                </td>
                                <td>
                                    <div
                                        class="*:text-sm *:py-2.5 *:px-4 *:rounded-md *:font-medium *:flex-1 *:inline-flex *:items-center *:justify-center *:gap-1.5 *:transition-all">
                                        <a href="#"
                                           class="text-themered bg-[#FFF0F1] border border-[#FFF0F1] hover:bg-themered hover:text-white">
                                            {{ __('Reject') }}
                                        </a>
                                        <a href="#"
                                           class="text-white bg-themered border border-themered hover:bg-gunmetal hover:border-gunmetal">
                                            {{ __('Approve') }}
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    @endpush

    @push("scripts")
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <style>
            .progress-circle {
                transform: rotate(-90deg);
            }

            .progress-bg {
                fill: none;
                stroke: #e5e7eb; /* gray-200 */
                stroke-width: 3.5;
            }

            .progress-bar {
                fill: none;
                stroke: #dc2626; /* red-600 */
                stroke-width: 3.5;
                stroke-linecap: round;
                stroke-dasharray: 100;
                stroke-dashoffset: 100;
                transition: stroke-dashoffset 0.4s ease;
            }

            .progress-circle text {
                transform: rotate(90deg);
                transform-origin: center;
            }

            input:invalid,
            input.border-red-500,
            select:invalid,
            select.border-red-500,
            textarea:invalid {
                border-color: #e3342f;
            }

            .step button[disabled] {
                opacity: .5;
            }

            .remove-installment {
                background: red;
                border-radius: 9999px;
                width: 30px;
                height: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>

        <script>
            $(document).ready(function () {

                // Open modal
                $('[data-popup="modal"], [data-modal-target]').on('click', function (e) {
                    e.preventDefault();
                    const targetModal = $(this).attr('href') || $(this).data('modal-target');

                    // ✅ Don't close any existing modals, just open the new one
                    $(targetModal).removeClass('hidden').addClass('show');
                });

                // Close modal on click outside .modal-content or on .modal-close
                $('.asams-modal').on('click', function (e) {
                    const $modalContent = $(this).find('.modal-content');
                    const isClickInside = $modalContent.is(e.target) || $modalContent.has(e.target).length > 0;
                    const isCloseBtn = $(e.target).closest('.modal-close').length > 0;

                    if (!isClickInside || isCloseBtn) {
                        $(this).addClass('hidden').removeClass('show');
                    }
                });

                // Close all open modals on Esc key
                $(document).on('keydown', function (e) {
                    if (e.key === 'Escape') {
                        $('.asams-modal.show').addClass('hidden').removeClass('show');
                    }
                });
            });

        </script>

        <script>
            $(document).ready(function () {
                // Add new installment group
                $('#add-installment').on('click', function () {
                    const newGroup = `
                    <div class="field-item-group grid gap-4 grid-cols-1 md:grid-cols-3 relative group">
                        <div class="field-item space-y-2">
                            <label class="installment-label text-gunmetal font-medium block text-sm">
                                Amount of Installment <span class="installment-number"></span> <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="amount_installment[]" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg text-end" placeholder="75,000" required />
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                Payment Date <span class="text-red-600">*</span>
                            </label>
                            <input type="date" name="payment_date[]" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                        </div>
                        <div class="field-item space-y-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Note')}}<span class="text-xs text-[#8997A9]">(any specifi remarks)</span> <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="installment_remarks[]"
                                    class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg text-end"
                                    placeholder="{{ __('Remarks')}}" required/>
                        </div>
                        <button type="button" class="remove-installment absolute top-0 right-0 text-white text-xl" title="Remove">
                            &times;
                        </button>
                    </div>
                `;
                    $('#installment-fields').append(newGroup);
                    updateInstallmentNumbers();
                });

                // Remove installment group
                $('#installment-fields').on('click', '.remove-installment', function (e) {
                    e.stopPropagation(); // Prevent modal from closing
                    $(this).closest('.field-item-group').remove();
                    updateInstallmentNumbers();
                });

                // Update all installment labels
                function updateInstallmentNumbers() {
                    $('#installment-fields .field-item-group').each(function (index) {
                        $(this).find('.installment-number').text(index + 1);
                    });
                }

                // Initial label set
                updateInstallmentNumbers();
            });
        </script>

        <script>
            // floor body rendering script
            document.addEventListener('DOMContentLoaded', bindFloorSelectButtons);
            document.addEventListener('DOMContentLoaded', initModalHandlers);

            multiStepForm();
            function multiStepForm() {
                const $form = $('#multiStepForm');
                const $steps = $form.find('.step');
                const $nextButtons = $form.find('.next-step');
                const $prevButtons = $form.find('.prev-step');
                const $progressBar = $form.find('.progress-bar');
                const $progressText = $('text.step-count-placeholder');
                const totalSteps = $steps.length;
                let currentStep = 1;

                // SVG Progress Bar
                const radius = $progressBar[0].r.baseVal.value;
                const circumference = 2 * Math.PI * radius;
                $progressBar.css({
                    strokeDasharray: circumference,
                    strokeDashoffset: circumference
                });

                function setProgress(step) {
                    const progressRatio = step / totalSteps;
                    const offset = circumference * (1 - progressRatio);
                    $progressBar.css('strokeDashoffset', offset);
                }

                function validateStep(step) {
                    const $currentStep = $steps.eq(step - 1);
                    const $requiredFields = $currentStep.find('input[required], select[required], textarea[required]');
                    let isValid = true;

                    $requiredFields.each(function () {
                        const $field = $(this);
                        const value = $field.val();

                        if (
                            !value ||
                            $.trim(value) === '' ||
                            ($field.is('select') && $field.prop('selectedIndex') === 0)
                        ) {
                            isValid = false;
                            return false; // break loop
                        }
                    });

                    return isValid;
                }

                function showValidationErrors(step) {
                    const $currentStep = $steps.eq(step - 1);
                    const $requiredFields = $currentStep.find('input[required], select[required], textarea[required]');
                    let allValid = true;

                    $requiredFields.each(function () {
                        const $field = $(this);
                        const value = $field.val();
                        const isInvalid =
                            !value ||
                            $.trim(value) === '' ||
                            ($field.is('select') && $field.prop('selectedIndex') === 0);

                        if (isInvalid || !$field[0].checkValidity()) {
                            $field.addClass('border-red-500');
                            $field[0].reportValidity?.();
                            allValid = false;
                        } else {
                            $field.removeClass('border-red-500');
                        }
                    });

                    return allValid;
                }

                function toggleNextButton() {
                    const isValid = validateStep(currentStep);
                    const $currentNextBtn = $steps.eq(currentStep - 1).find('.next-step');
                    $currentNextBtn.prop('disabled', !isValid);
                }

                function showStep(step) {
                    $steps.addClass('hidden').eq(step - 1).removeClass('hidden');
                    $progressText.text(`${step}/${totalSteps}`);
                    setProgress(step);
                    toggleNextButton();
                }

                // Prev button
                $prevButtons.on('click', function () {
                    if (currentStep > 1) {
                        currentStep--;
                        showStep(currentStep);
                    }
                });

                // Next button
                $nextButtons.on('click', function () {
                    if (currentStep < totalSteps) {
                        const isValid = showValidationErrors(currentStep);
                        if (isValid) {
                            currentStep++;
                            showStep(currentStep);
                        }
                    }
                });

                // Realtime validation for all fields
                $steps.each(function () {
                    const $step = $(this);
                    const $requiredFields = $step.find('input[required], select[required], textarea[required]');

                    $requiredFields.on('input change', function () {
                        toggleNextButton();
                    });
                });

                showStep(currentStep);
            }

            function preloader(style) {
                if (style == 'modalPreload') {
                    return `<div class="loading text-center max-w-sm w-full py-6 bg-white fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl text-xl font-medium text-pureblack flex items-center justify-center flex-col">
                                <img src="{{ asset('/images/rotate.gif')}}" class="w-10 scale-x-[-1]" alt="Loading...">
                                Loading...
                            </div>`;
                } else {
                    return `<div class="loading text-center h-full text-xl font-medium text-pureblack flex items-center justify-center flex-col">
                                <img src="{{ asset('/images/rotate.gif')}}" class="w-10 scale-x-[-1]" alt="Loading...">
                                Loading...
                            </div>`;
                }
            }

            function bindFloorSelectButtons() {
                document.querySelectorAll('.floor_select_btn').forEach(button => {
                    button.removeEventListener('click', handleFloorClick); // Prevent duplicate binding
                    button.addEventListener('click', handleFloorClick);
                });
            }

            function handleFloorClick(evt) {
                evt.preventDefault();

                document.getElementById("floor_body").innerHTML = preloader();

                document.querySelectorAll('.floor_select_btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                this.classList.add('active');

                const itemId = this.dataset.floorId;
                if (itemId === undefined) return;

                getFloorBody(itemId, document.getElementById('agent_buyer_filter').value);
            }

            function triggerShopDetailsModal() {
                document.querySelectorAll('.shop-details-modal').forEach(button => {
                    button.addEventListener('click', function () {
                        const itemId = this.dataset.shopId;
                        document.getElementById("shop_details_modal").innerHTML = preloader('modalPreload');
                        axios.get('{{ route("admin.shop.show", ":id") }}'.replace(":id", itemId))
                            .then(response => {
                                document.getElementById("shop_details_modal").innerHTML = response.data.data;
                            }).catch(error => {
                            console.error(error);
                        });
                    });
                });
            }

            function getFloorBody(itemId, agent_buyer_filter = null) {
                axios.get('{{ route("any.floor.body") }}', {
                    params: {
                        floor_id: itemId,
                        page: 1,
                        filter: agent_buyer_filter,
                    }
                }).then(response => {
                    document.getElementById("floor_body").innerHTML = response.data.html;

                    triggerShopDetailsModal();
                    notificationFilter();


                    $('#floor_show_type').on('change', showCorrectContent);

                    $('.nav-item').on('click', function () {
                        showCorrectContent();
                    });
                    $('#toggle-map-form').on('click', function () {
                        $('.upload_floor_map').slideToggle(300);
                    });
                    loadMore();
                    search();
                    viewProposalModal();
                    viewInstallmentModal();
                    initModalHandlers();

                }).catch(error => {
                    console.error(error);
                });
            }

            function viewProposalModal() {
                document.querySelectorAll('.view-proposal, .view-sale-proposal').forEach(button => {
                    button.addEventListener('click', function () {
                        const itemId = this.dataset.shopId;

                        let url = '{{ route("any.shop-reservation.reserve") }}';
                        if(button.classList.contains('view-sale-proposal')) {
                            url = '{{ route("any.shop-request.modal-form") }}';
                        } else {

                        }

                        axios.get(url, {
                            params: {
                                shop_id: itemId,
                            }
                        })
                            .then(response => {
                                console.log(response.data);
                                document.getElementById("page_modal").innerHTML = response.data.html;
                                document.querySelectorAll('#page_modal').forEach(modal => {
                                    modal.classList.add('show');
                                    modal.classList.remove('hidden');
                                });
                            }).catch(error => {
                            console.error(error);
                        });

                    });
                });
            }

            function viewInstallmentModal() {
                document.querySelectorAll('.set-installment-plan').forEach(button => {
                    button.addEventListener('click', function () {
                        const buyerShopId = this.dataset.buyerShopId;
                        axios.get('{{ route("employee.installment.plan") }}', {
                            params: {
                                buyer_shop_id: buyerShopId,
                            }
                        })
                            .then(response => {
                                document.getElementById("page_modal").innerHTML = response.data.html;
                                document.querySelectorAll('#page_modal').forEach(modal => {
                                    modal.classList.add('show');
                                    modal.classList.remove('hidden');
                                });
                                loadSelect2Dropdown("payment-type", "payment_type_id", {}, "Select payment type");
                                multiStepForm();
                                document.getElementById('schedule_installment_button').addEventListener('click', function (e) {
                                    e.preventDefault();
                                    const targetModal = document.getElementById('schedule_installment_modal');
                                    targetModal.classList.add('show');
                                    targetModal.classList.remove('hidden');
                                });
                                scheduleInstallment();
                            }).catch(error => {
                            console.error(error);
                        });
                    });
                });
            }

            function scheduleInstallment() {
                const installmentForm = document.getElementById('schedule_installment');
                installmentForm.addEventListener('submit', function (e) {
                    e.preventDefault();
                    const formData = new FormData(this);

                    for (const [key, value] of formData.entries()) {
                        const input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = key;
                        input.value = value;
                        document.querySelector('.installment_plan').appendChild(input);
                        console.log(key, value);
                    }
                    document.querySelectorAll('#schedule_installment_modal').forEach(modal => {
                        modal.classList.add('hidden');
                        modal.classList.remove('show');
                    });

                });
            }

            function search() {
                document.querySelectorAll("#floor_block, input[name='s'], #floor_status").forEach(input => {
                    input.addEventListener("change", function () {
                        let params = {
                            block_id: document.getElementById('floor_block').value,
                            s: document.getElementById('shop_search').value.trim(),
                            floor_id: document.getElementById('shop_search').dataset.floorId,
                            status_id: document.getElementById('floor_status').value,
                            card_name: "employee_shop"
                        }

                        axios.get('{{ route("any.shop.search") }}', {
                            params: params
                        }).then(response => {
                            const container = document.getElementById('shops_container');
                            container.innerHTML = response.data.html;
                            document.getElementById("add_new_shop_card").remove();
                            initModalHandlers();
                            triggerShopDetailsModal();
                        }).catch(error => {
                            console.error(error);
                        });

                    });
                });
            }

            function loadMore() {
                const loadMoreBtn = document.getElementById('load-more-btn');
                if (!loadMoreBtn) return;

                loadMoreBtn.addEventListener('click', function () {
                    const btn = this;
                    const nextPageUrl = btn.getAttribute('data-next-page');
                    let itemId = document.querySelector('.floor_select_btn.active').dataset.floorId;

                    if (!nextPageUrl) {
                        btn.style.display = 'none';
                        return;
                    }

                    btn.disabled = true;
                    btn.textContent = 'Loading...';

                    axios.get(nextPageUrl + '&floor_id=' + itemId)
                        .then(response => {
                            const data = response.data;
                            if (data.success) {
                                const container = document.getElementById('add_new_shop_card');
                                container.insertAdjacentHTML("beforebegin", data.html);

                                console.log(data);

                                if (data.next_page_url) {
                                    btn.setAttribute('data-next-page', data.next_page_url);
                                    btn.disabled = false;
                                    btn.textContent = 'Load More';
                                } else {
                                    btn.style.display = 'none'; // No more pages
                                }
                            } else {
                                btn.style.display = 'none';
                            }
                        }).catch(error => {
                        btn.disabled = false;
                        btn.textContent = 'Load More';
                        console.error(error);
                    });
                });
            }

            function initModalHandlers() {
                // Open modal
                document.querySelectorAll('[data-popup="modal"]').forEach(trigger => {
                    trigger.addEventListener('click', function (e) {
                        e.preventDefault();
                        const targetModalSelector = this.getAttribute('href');
                        const targetModal = document.querySelector(targetModalSelector);

                        // Close any open modal
                        document.querySelectorAll('.asams-modal.show').forEach(modal => {
                            modal.classList.add('hidden');
                            modal.classList.remove('show');
                        });

                        // Open target modal
                        if (targetModal) {
                            targetModal.classList.remove('hidden');
                            targetModal.classList.add('show');
                        }
                    });
                });

                // Close modal when clicking outside .modal-content or on .modal-close
                document.querySelectorAll('.asams-modal').forEach(modal => {
                    modal.addEventListener('click', function (e) {
                        const modalContent = modal.querySelector('.modal-content');
                        const isClickInside = modalContent.contains(e.target);
                        const isCloseBtn = e.target.closest('.modal-close');

                        if (!isClickInside || isCloseBtn) {
                            modal.classList.add('hidden');
                            modal.classList.remove('show');
                        }
                    });
                });

                // Close modal on Escape key
                document.addEventListener('keydown', function (e) {
                    if (e.key === 'Escape') {
                        document.querySelectorAll('.asams-modal.show').forEach(modal => {
                            modal.classList.add('hidden');
                            modal.classList.remove('show');
                        });
                    }
                });
            }

            function notificationFilter() {
                const agentBuyerFilterEl = document.getElementById("agent_buyer_filter");
                agentBuyerFilterEl.addEventListener('change', function () {
                    const agentBuyer = this.value;
                    let data;

                    if (agentBuyer === 'agent') {
                        data = @json($agentFloorCounts);
                    } else if (agentBuyer === 'buyer') {
                        data = @json($buyerFloorCounts);
                    } else {
                        data = {};
                    }

                    document.querySelectorAll('.notify-badge').forEach(el => el.remove());

                    Object.entries(data).forEach(([floorId, floorCount]) => {
                        const floorEl = document.getElementById(`list_floor_${floorId}`);
                        const span = `<span class="notify-badge inline-flex items-center justify-center w-5 h-5 rounded-full text-themered bg-[#FFE2E4] font-bold text-xs">${floorCount}</span>`
                        if (floorEl) {
                            floorEl.insertAdjacentHTML("beforeend", span);
                        }
                    });
                });
            }

            document.addEventListener("DOMContentLoaded", function () {
                // init loading
                let itemId = document.querySelector('.floor_select_btn.active')?.dataset.floorId;
                const activeBtn = document.querySelector('.floor_select_btn.active');
                if (activeBtn) {
                    itemId = activeBtn.dataset.floorId;
                    getFloorBody(itemId, document.getElementById('agent_buyer_filter').value);
                }
            });

            function showCorrectContent() {
                const view = $('#floor_show_type').val();
                const $activePane = $('.pane-tab');
                $activePane.find('.floor_show_type_grid').toggle(view === 'Grid');
                $activePane.find('.floor_show_type_map').toggle(view === 'Map');
            }

        </script>
    @endpush
</x-app-layout>
