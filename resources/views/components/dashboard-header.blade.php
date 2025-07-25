@props(['prefix'])

<div class="z-[9] sticky top-0" id="app_header">
    <div class="app-header z-[999] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
        <div class="flex justify-between items-center h-full">
            <div class="flex items-center md:space-x-4 space-x-4 rtl:space-x-reverse vertical-box">
                <div class="xl:hidden inline-block">
                    <x-application-logo class="mobile-logo" />
                </div>
                <button class="smallDeviceMenuController  open-sdiebar-controller hidden xl:hidden md:inline-block">
                    <iconify-icon class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>
                <button class="sidebarOpenButton text-xl text-slate-900 dark:text-white !ml-0">
                    <iconify-icon icon="ph:arrow-right-bold"></iconify-icon>
                </button>
                <x-header-search />
            </div>
            <!-- end vertcial -->

            <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
                <x-application-logo />
                <button class="smallDeviceMenuController  open-sdiebar-controller  hidden xl:hidden md:inline-block">
                    <iconify-icon
                        class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white"
                        icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>
                <x-header-search />
            </div>
            <!-- end horizontal -->

            <!-- start horizontal nav -->
{{--            <x-topbar-menu />--}}
            <!-- end horizontal nav -->

            @if(str(request()->route()->getName())->contains(".console.") && (getCurrentGuard() == 'admin'))
                <a href="{{ route("admin.dashboard") }}" class="group ml-auto max-md:text-sm bg-themered text-white inline-flex items-center justify-center gap-1 lg:gap-2 rounded-lg px-3 lg:px-5 py-2 lg:py-3 mx-2">
                    <svg class="max-sm:hidden transition-all group-hover:-translate-x-1.5 group-hover:scale-110" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.4994 14.4219C16.9677 17.4284 13.839 19.5 10.25 19.5C5.1625 19.5 1 15.3375 1 10.25C1 5.1625 5.1625 1 10.25 1C13.839 1 16.9677 3.07158 18.4994 6.07807" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="transition-all duration-300 group-hover:rotate-[360deg] origin-center" />
                        <path d="M19.5 10.25H5.5L9.5 6.25M9.5 14.25L8 12.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    {{ __("Back to Admin")}}
                </a>
            @elseif(in_array(getCurrentGuard(), ["admin", "employee"]))
                <div class="w-full max-w-[260px] mx-auto max-sm:hidden">
                    <select name="property_selected" id="property_selected" class="w-full border border-[#A6B1BF] rounded-lg py-3 px-4 text-black-500 outline-none">
                        @foreach(dropdown_options("user-property", [
                                                    "user_id" => getCurrentAuthenticatedUser()->id,
                                                    "user_type" => getCurrentAuthenticatedUserModel()
                                                    ]) as $item)

                            <option @selected(userPropertySelected(getCurrentAuthenticatedUser()) == $item->id) value="{{ $item->id }}">{{ $item->name }}</option>

                        @endforeach
                    </select>
                </div>
                <a href="{{ route("admin.console.dashboard") }}" class="group max-md:text-sm bg-themered text-white inline-flex items-center justify-center gap-2 rounded-lg px-3 lg:px-5 py-2 lg:py-3 mx-2 lg:mx-5">
                    Console
                    <svg class="transition-all group-hover:scale-110" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="transition-all duration-300 group-hover:rotate-[360deg] origin-center"/>
                        <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            @endif


            <div class="nav-tools flex items-center lg:space-x-5 space-x-2 rtl:space-x-reverse leading-0">
                <x-nav-lang-dropdown />
                <x-dark-light />
                <x-gray-scale />
{{--                <x-nav-message-dropdown />--}}
                <x-nav-notification-dropdown />
                <x-nav-user-dropdown :prefix="$prefix" />
                <button class="smallDeviceMenuController md:hidden block leading-0">
                    <iconify-icon class="cursor-pointer text-slate-900 dark:text-white text-2xl" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>
                <!-- end mobile menu -->
            </div>
            <!-- end nav tools -->
        </div>
    </div>
</div>

<!-- BEGIN: Search Modal -->
{{--<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto inset-0 bg-slate-900/40 backdrop-filter backdrop-blur-sm backdrop-brightness-10" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog relative w-auto pointer-events-none top-1/4">--}}
{{--        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-900 bg-clip-padding rounded-md outline-none text-current">--}}
{{--            <form>--}}
{{--                <div class="relative">--}}
{{--                    <button class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full text-xl dark:text-slate-300 flex items-center justify-center">--}}
{{--                        <iconify-icon icon="heroicons-solid:search"></iconify-icon>--}}
{{--                    </button>--}}
{{--                    <input type="text" class="form-control !py-[14px] !pl-10" placeholder="Search" autofocus>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- END: Search Modal -->
