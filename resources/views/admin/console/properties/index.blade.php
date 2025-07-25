<x-app-layout>

    <div class="flex justify-between flex-wrap items-center mb-4 xl:mb-6">
        <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-flex items-center gap-3 ltr:pr-4 rtl:pl-4 mb-1 sm:mb-0">
            <span class="icon w-16 h-16 bg-green-300 rounded-full inline-flex items-center justify-center">
                <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23 7.78312C23 6.66642 22.45 5.63308 21.5167 5.01641L14.85 0.566406C13.7333 -0.183594 12.2667 -0.183594 11.15 0.566406L4.48333 5.01641C3.56667 5.63308 3 6.66642 3 7.78312V17.2497C3 17.7164 3.36667 18.0831 3.83333 18.0831H22.1667C22.6333 18.0831 23 17.7164 23 17.2497V7.78312ZM13 13.9164C11.4 13.9164 10.0833 12.5997 10.0833 10.9997C10.0833 9.39972 11.4 8.08312 13 8.08312C14.6 8.08312 15.9167 9.39972 15.9167 10.9997C15.9167 12.5997 14.6 13.9164 13 13.9164Z" fill="#0FBA7F"/>
                    <path d="M34.6673 31.4172H32.5507V26.4172C34.134 25.9005 35.284 24.4172 35.284 22.6672V19.3339C35.284 17.1505 33.5007 15.3672 31.3173 15.3672C29.134 15.3672 27.3507 17.1505 27.3507 19.3339V22.6672C27.3507 24.4005 28.484 25.8672 30.034 26.4005V31.4172H23.0007V21.4172C23.0007 20.9505 22.634 20.5839 22.1673 20.5839H3.83398C3.36732 20.5839 3.00065 20.9505 3.00065 21.4172V31.4172H1.33398C0.650654 31.4172 0.0839844 31.9839 0.0839844 32.6672C0.0839844 33.3505 0.650654 33.9172 1.33398 33.9172H31.2173C31.2507 33.9172 31.2673 33.9339 31.3007 33.9339C31.334 33.9339 31.3507 33.9172 31.384 33.9172H34.6673C35.3507 33.9172 35.9173 33.3505 35.9173 32.6672C35.9173 31.9839 35.3507 31.4172 34.6673 31.4172ZM11.7507 26.4172C11.7507 25.7339 12.3173 25.1672 13.0007 25.1672C13.684 25.1672 14.2507 25.7339 14.2507 26.4172V31.4172H11.7507V26.4172Z" fill="#0FBA7F"/>
                </svg>
            </span>
            Properties
        </h4>
        <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse">
            <a href="#init_property_setup" data-popup="modal" class="text-themered hover:bg-themered hover:text-white transition-all bg-[#FFF0F1] text-sm px-5 py-3 rounded-md font-semibold flex-1 inline-flex items-center justify-center">
                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:plus"></iconify-icon>
                New Property
            </a>
        </div>
    </div>

    <form class="property_search_form bg-white p-6 border border-[#F0F2F4] rounded-lg space-y-6">
        <h6 class="text-xl font-semibold text-gunmetal">
            {{ __('All Properties')}}
        </h6>
        <div class="flex flex-wrap items-end justify-between gap-6">
            <div class="left">
                <div class="input-area relative">
                    <input type="text" name="s" id="property_search" class="w-full px-4 py-3 !pl-9 rounded-lg bg-[#F8F9FB]" placeholder="Search">
                    <span class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full border-none flex items-center justify-center pl-2">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:search"></iconify-icon>
                    </span>
                </div>
            </div>
            <div class="right">

            </div>
        </div>
    </form>

    <div class="properties-wrapper mt-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Property Card -->
            @foreach($items as $item)
            <div id="property-card-{{ $item->id }}" class="bg-white rounded-2xl overflow-hidden border">

                <div class="thumbnail relative">
                    @if (!empty($item->picture) && isset($item->picture[0]))
                        <img src="{{ asset($item->picture[0]) }}" alt="{{ $item->name }}" class="min-h-[240px] xl:min-h-[265px] max-h-[265px] w-full object-cover bg-gray-100">
                    @else
                        <img src="{{ asset('/images/property-placeholder.png') }}" alt="{{ $item->name }}" class="min-h-[240px] xl:min-h-[265px] max-h-[265px] w-full object-cover bg-gray-100">
                    @endif
                    <button class="absolute right-4 top-4 w-10 h-10 bg-[#FFF0F1] hover:bg-themered hover:text-white transition-all rounded-full inline-flex items-center justify-center" type="button" data-bs-toggle="dropdown">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.75 12.5C8.75 12.0875 8.4125 11.75 8 11.75C7.5875 11.75 7.25 12.0875 7.25 12.5C7.25 12.9125 7.5875 13.25 8 13.25C8.4125 13.25 8.75 12.9125 8.75 12.5Z" stroke="currentcolor" stroke-width="1.5"/>
                            <path d="M8.75 8C8.75 7.5875 8.4125 7.25 8 7.25C7.5875 7.25 7.25 7.5875 7.25 8C7.25 8.4125 7.5875 8.75 8 8.75C8.4125 8.75 8.75 8.4125 8.75 8Z" stroke="currentcolor" stroke-width="1.5"/>
                            <path d="M8.75 3.5C8.75 3.0875 8.4125 2.75 8 2.75C7.5875 2.75 7.25 3.0875 7.25 3.5C7.25 3.9125 7.5875 4.25 8 4.25C8.4125 4.25 8.75 3.9125 8.75 3.5Z" stroke="currentcolor" stroke-width="1.5"/>
                        </svg>
                    </button>
                    <ul class="dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none [&_a]:text-slate-600 [&_a]:dark:text-white [&_a]:flex [&_a]:items-center [&_a]:gap-1.5 [&_a]:font-Inter [&_a]:font-normal [&_a]:px-4 [&_a]:py-2">
                        <li class="font-semibold">
                            <button type="button" data-property-id="{{ $item->id }}" data-property-name="{{ $item->name }}" class="delete-property-btn delete-property-{{ $item->id }} hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white flex items-center gap-2 w-full px-3 py-2.5 ">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 4.99935H4.16667M4.16667 4.99935H17.5M4.16667 4.99935V16.666C4.16667 17.108 4.34226 17.532 4.65482 17.8445C4.96738 18.1571 5.39131 18.3327 5.83333 18.3327H14.1667C14.6087 18.3327 15.0326 18.1571 15.3452 17.8445C15.6577 17.532 15.8333 17.108 15.8333 16.666V4.99935H4.16667ZM6.66667 4.99935V3.33268C6.66667 2.89065 6.84226 2.46673 7.15482 2.15417C7.46738 1.84161 7.89131 1.66602 8.33333 1.66602H11.6667C12.1087 1.66602 12.5326 1.84161 12.8452 2.15417C13.1577 2.46673 13.3333 2.89065 13.3333 3.33268V4.99935M8.33333 9.16602V14.166M11.6667 9.16602V14.166" stroke="currentcolor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Delete
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="description p-4 2xl:p-6">
                    <h3 class="text-lg font-semibold">
                        {{ $item->name }}
                    </h3>
                    <p class="text-sm text-gray-500">{{ $item->address }}</p>
                    <div class="flex justify-between text-sm text-gray-600 mt-3">
                        <span>
                            Area: <strong>{{ $item->total_area }} sq.ft</strong>
                        </span>
                        <span>
                            Blocks/Units: <strong>{{ $item->total_count->block }}</strong>
                        </span>
                        <span>
                            Floor: <strong>{{ $item->total_count->floor }}</strong>
                        </span>
                    </div>
                    <hr class="my-6">
                    <div class="mt-4 flex gap-3 *:text-sm *:py-3 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
                        <a href="{{ route('admin.console.property.edit', $item->id) }}" class="text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                            <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:pencil-square"></iconify-icon>
                            Edit Property
                        </a>
                        <a href="{{ route('admin.console.property.show', $item->id) }}" class="text-white bg-themered hover:bg-black-500">
                            <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:eye"></iconify-icon>
                            View Details
                        </a>
                    </div>
                </div>

            </div>
            @endforeach

            <!-- Add New Property Card -->
            <div class="group border border-themered bg-[#FFF5F5] rounded-3xl text-center transition duration-200 cursor-pointer p-10 text-themered hover:border-black-500 hover:bg-[#F0F2F4] hover:text-black-500">
                <a href="#init_property_setup" data-popup="modal" class="w-full h-full flex items-center justify-center flex-col">
                    <iconify-icon class="text-2xl xl:text-5xl font-light transition-all group-hover:-rotate-90" icon="heroicons-outline:plus"></iconify-icon>

                    <div class="text-xl font-medium">Add New Property</div>
                </a>
            </div>
        </div>
    </div>


    @push("modal")
    <!-- Propert Add Initial Setup -->
    <div id="init_property_setup" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
        <div class="modal-content bg-white w-full max-w-4xl mx-auto p-6 lg:p-8 xl:p-10 border border-slate-400 rounded-2xl relative">
            <form id="init_property_setup_modal" class="space-y-8">
                <div class="modal-header">

                    <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                        <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 15C10 12.7909 11.7909 11 14 11C16.2091 11 18 12.7909 18 15C18 17.2091 16.2091 19 14 19C11.7909 19 10 17.2091 10 15Z" fill="#2B323B"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.829 11.829C1.4256 11.2325 2.2594 11 3.1875 11H4.8125C5.7406 11 6.5744 11.2325 7.171 11.829C7.7675 12.4256 8 13.2594 8 14.1875V15.8125C8 16.7406 7.7675 17.5744 7.171 18.171C6.5744 18.7675 5.7406 19 4.8125 19H3.1875C2.2594 19 1.4256 18.7675 0.829 18.171C0.2325 17.5744 0 16.7406 0 15.8125V14.1875C0 13.2594 0.2325 12.4256 0.829 11.829Z" fill="#2B323B"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.4996 1.79352C8.1793 0.660623 9.8211 0.660623 10.5008 1.79352L13.2346 6.34982C13.9345 7.51622 13.0943 9.00022 11.734 9.00022H6.2664C4.9061 9.00022 4.0659 7.51622 4.7658 6.34982L7.4996 1.79352Z" fill="#2B323B"/>
                            </svg>
                        </div>
                        <div class="">
                            <h2 class="text-xl font-semibold text-gray-900">
                                Initial Property Setup
                            </h2>
                            <p class="text-sm text-gray-500 font-light">
                                Let's build your property set and running. Configure the pre-requisition.
                            </p>
                        </div>
                    </div>
                    <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                        <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="space-y-4 *:flex *:items-center *:justify-between *:p-4 xl:*:px-6 xl:*:py-5 *:rounded-lg *:border">

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">Property Types</h4>
                                <p class="text-sm text-gray-500">
                                    By enabling property type you can set the type e.g.; Industrial & status
                                </p>
                            </div>
                            <label for="propertyType" class="cursor-pointer relative">
                                <input type="checkbox" id="propertyType" name="propertyType" class="sr-only peer" checked>
                                <div class="block bg-gray-600 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">Enable Block</h4>
                                <p class="text-sm text-gray-500">
                                    Enable block when there is block system on this property.
                                </p>
                            </div>
                            <label for="enableBlock" class="cursor-pointer relative">
                                <input type="checkbox" id="enableBlock" name="enableBlock" class="sr-only peer" checked>
                                <div class="block bg-gray-600 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">Enable Unit</h4>
                                <p class="text-sm text-gray-500">
                                    Enable block when there is unit system on this property.
                                </p>
                            </div>
                            <label for="enableunit" class="cursor-pointer relative">
                                <input type="checkbox" id="enableunit" name="enableunit" class="sr-only peer">
                                <div class="block bg-gray-600 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">Enable Area</h4>
                                <p class="text-sm text-gray-500">
                                    Enable the area to measure the length & width of this property.
                                </p>
                            </div>
                            <label for="enableArea" class="cursor-pointer relative">
                                <input type="checkbox" id="enableArea" name="enableArea" class="sr-only peer" checked>
                                <div class="block bg-gray-600 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">Image/Video</h4>
                                <p class="text-sm text-gray-500">
                                    By enabling this field you can set the image/video gallery of this property.
                                </p>
                            </div>
                            <label for="img-video" class="cursor-pointer relative">
                                <input type="checkbox" id="img-video" name="img-video" class="sr-only peer" checked>
                                <div class="block bg-gray-600 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">Google Map</h4>
                                <p class="text-sm text-gray-500">
                                    Enable google map to setup the latitude and longitude position of the property.
                                </p>
                            </div>
                            <label for="enable_gmaps" class="cursor-pointer relative">
                                <input type="checkbox" id="enable_gmaps" name="enable_gmaps" class="sr-only peer" checked>
                                <div class="block bg-gray-600 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">Address Information</h4>
                                <p class="text-sm text-gray-500">
                                    By enabling address you can add detail address of this property.
                                </p>
                            </div>
                            <label for="enable_address_info" class="cursor-pointer relative">
                                <input type="checkbox" id="enable_address_info" name="enable_address_info" class="sr-only peer" checked>
                                <div class="block bg-gray-600 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                        <div class="hover:bg-gray-50">
                            <div>
                                <h4 class="font-semibold text-sm text-gray-800">Contact Info</h4>
                                <p class="text-sm text-gray-500">
                                    By enabling contact info you can add contact person, phone, email, designation etc.
                                </p>
                            </div>
                            <label for="enable_contact_info" class="cursor-pointer relative">
                                <input type="checkbox" id="enable_contact_info" name="enable_contact_info" class="sr-only peer" checked>
                                <div class="block bg-gray-600 w-9 h-5 rounded-full peer-checked:bg-red-500"></div>
                                <div class="dot absolute left-0.5 top-0.5 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-full"></div>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="modal-footer text-end">
                    <a href="#add_new_property" id="proceed_property_btn" class="bg-themered text-white inline-flex items-center justify-center gap-2 rounded-lg px-5 py-3">
                        Proceed New Property
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 6.07807C3.53168 3.07158 6.66036 1 10.2494 1C15.3369 1 19.4994 5.1625 19.4994 10.25C19.4994 15.3375 15.3369 19.5 10.2494 19.5C6.66036 19.5 3.53168 17.4284 2 14.4219" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M1 10.25H15L11 14.25M11 6.25L12.5 7.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
            </form>
        </div>
    </div>


    <!-- Add New Property Modal -->
    <div id="add_new_property" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">

    </div>

    <!-- Property Added Successful Modal -->
    <div id="add_property_success_modal" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
        <div class="modal-content bg-white w-full max-w-3xl mx-auto border border-slate-400 rounded-2xl relative">
            <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
            </button>
            <div class="modal-header bg-[#F8F9FB] p-4 rounded-tl-2xl rounded-tr-2xl">
                <div class="logo flex items-center justify-center gap-4">
                    <div class="icon w-20 h-20 rounded-xl inline-flex items-center justify-center bg-[#F0F2F4]">
                        <svg width="36" height="34" viewBox="0 0 36 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 7.78325C23 6.66665 22.45 5.63325 21.5167 5.01665L14.85 0.56665C13.7333 -0.18335 12.2667 -0.18335 11.15 0.56665L4.4833 5.01665C3.5667 5.63325 3 6.66665 3 7.78325V17.25C3 17.7166 3.3667 18.0833 3.8333 18.0833H22.1667C22.6333 18.0833 23 17.7166 23 17.25V7.78325ZM13 13.9165C11.4 13.9165 10.0833 12.6 10.0833 11C10.0833 9.39995 11.4 8.08325 13 8.08325C14.6 8.08325 15.9167 9.39995 15.9167 11C15.9167 12.6 14.6 13.9165 13 13.9165Z" fill="#FF667D"/>
                            <path d="M34.6673 31.4167H32.5507V26.4167C34.134 25.9 35.284 24.4167 35.284 22.6667V19.3334C35.284 17.15 33.5007 15.3667 31.3173 15.3667C29.134 15.3667 27.3507 17.15 27.3507 19.3334V22.6667C27.3507 24.4 28.484 25.8667 30.034 26.4V31.4167H23.0007V21.4167C23.0007 20.95 22.634 20.5834 22.1673 20.5834H3.83398C3.36728 20.5834 3.00068 20.95 3.00068 21.4167V31.4167H1.33398C0.650684 31.4167 0.0839844 31.9834 0.0839844 32.6667C0.0839844 33.35 0.650684 33.9167 1.33398 33.9167H31.2173C31.2507 33.9167 31.2673 33.9334 31.3007 33.9334C31.334 33.9334 31.3507 33.9167 31.384 33.9167H34.6673C35.3507 33.9167 35.9173 33.35 35.9173 32.6667C35.9173 31.9834 35.3507 31.4167 34.6673 31.4167ZM11.7507 26.4167C11.7507 25.7334 12.3173 25.1667 13.0007 25.1667C13.684 25.1667 14.2507 25.7334 14.2507 26.4167V31.4167H11.7507V26.4167Z" fill="#FF667D"/>
                        </svg>
                    </div>
                    <div class="info">
                        <h5 class="text-xl font-semibold text-black-500">
                            Nur Super Market
                        </h5>
                        <p class="text-sm font-light">
                            Kaligonj, Keranigonj, Dhaka.
                        </p>
                    </div>
                </div>
            </div>

            <div class="modal-body p-6 lg:p-8 xl:p-10">
                <div class="bg-green-50 border border-green-200 rounded-xl p-6 flex gap-4 items-start">
                    <div class="icon">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 14C0 6.26801 6.26801 0 14 0C21.732 0 28 6.26801 28 14C28 21.732 21.732 28 14 28C6.26801 28 0 21.732 0 14Z" fill="#16A34A"/>
                            <path d="M16.2753 11.433L12.2463 11.938L12.102 12.6066L12.8937 12.7526C13.411 12.8757 13.513 13.0622 13.4004 13.5777L12.102 19.6793C11.7607 21.2575 12.2867 22 13.5236 22C14.4825 22 15.5962 21.5566 16.1011 20.9479L16.256 20.216C15.9041 20.5256 15.3903 20.6488 15.049 20.6488C14.5652 20.6488 14.3892 20.3092 14.5141 19.711L16.2753 11.433ZM16.3985 7.7594C16.3985 8.22602 16.2131 8.67353 15.8832 9.00349C15.5532 9.33344 15.1057 9.5188 14.6391 9.5188C14.1724 9.5188 13.7249 9.33344 13.395 9.00349C13.065 8.67353 12.8797 8.22602 12.8797 7.7594C12.8797 7.29278 13.065 6.84527 13.395 6.51532C13.7249 6.18536 14.1724 6 14.6391 6C15.1057 6 15.5532 6.18536 15.8832 6.51532C16.2131 6.84527 16.3985 7.29278 16.3985 7.7594Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="desc">
                        <h5 class="text-black-500 font-semibold text-xl">
                            Your property has been created successfully.
                        </h5>
                        <p>
                            You’ve successfully added the property. You can now manage details, media, and availability from the dashboard.
                        </p>
                    </div>
                </div>

                <ul class="grid gap-3 grid-cols-2 *:flex *:items-center *:gap-3 my-10 [&_.icon]:w-10 [&_.icon]:text-center w-full max-w-md mx-auto">
                    <li>
                        <div class="icon">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M32.5 0H3.5C1.567 0 0 1.567 0 3.5V32.5C0 34.433 1.567 36 3.5 36H32.5C34.433 36 36 34.433 36 32.5V3.5C36 1.567 34.433 0 32.5 0Z" fill="#A6B1BF"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 22C6.3284 22 7 22.6716 7 23.5V27.2692C7 28.2251 7.7749 29 8.7308 29H12.5C13.3284 29 14 29.6716 14 30.5C14 31.3284 13.3284 32 12.5 32H8.7308C6.118 32 4 29.882 4 27.2692V23.5C4 22.6716 4.6716 22 5.5 22Z" fill="#A6B1BF"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30.5 22C31.3284 22 32 22.6716 32 23.5V27.2692C32 29.882 29.882 32 27.2692 32H23.5C22.6716 32 22 31.3284 22 30.5C22 29.6716 22.6716 29 23.5 29H27.2692C28.2251 29 29 28.2251 29 27.2692V23.5C29 22.6716 29.6716 22 30.5 22Z" fill="#A6B1BF"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22 5.5C22 4.6716 22.6716 4 23.5 4H27.5C29.9853 4 32 6.0147 32 8.5V12.5C32 13.3284 31.3284 14 30.5 14C29.6716 14 29 13.3284 29 12.5V8.5C29 7.6716 28.3284 7 27.5 7H23.5C22.6716 7 22 6.3284 22 5.5Z" fill="#A6B1BF"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.5 7C7.6716 7 7 7.6716 7 8.5V12.5C7 13.3284 6.3284 14 5.5 14C4.6716 14 4 13.3284 4 12.5V8.5C4 6.0147 6.0147 4 8.5 4H12.5C13.3284 4 14 4.6716 14 5.5C14 6.3284 13.3284 7 12.5 7H8.5Z" fill="#A6B1BF"/>
                            </svg>
                        </div>
                        <div class="desc">
                            Area: <b>55,000 sq.ft</b>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.7394 5.77999L23.0194 0.55999C21.2994 -0.20001 18.6994 -0.20001 16.9794 0.55999L5.25938 5.77999C2.29938 7.09999 1.85938 8.89999 1.85938 9.85999C1.85938 10.82 2.29938 12.62 5.25938 13.94L16.9794 19.16C17.8394 19.54 18.9194 19.74 19.9994 19.74C21.0794 19.74 22.1594 19.54 23.0194 19.16L34.7394 13.94C37.6994 12.62 38.1394 10.82 38.1394 9.85999C38.1394 8.89999 37.7194 7.09999 34.7394 5.77999Z" fill="#A6B1BF"/>
                                <path opacity="0.4" d="M20.0006 30.08C19.2406 30.08 18.4806 29.92 17.7806 29.62L4.30063 23.62C2.24063 22.7 0.640625 20.24 0.640625 17.98C0.640625 17.16 1.30063 16.5 2.12063 16.5C2.94062 16.5 3.60063 17.16 3.60063 17.98C3.60063 19.06 4.50064 20.46 5.50064 20.9L18.9806 26.9C19.6206 27.18 20.3606 27.18 21.0006 26.9L34.4806 20.9C35.4806 20.46 36.3806 19.08 36.3806 17.98C36.3806 17.16 37.0406 16.5 37.8606 16.5C38.6806 16.5 39.3406 17.16 39.3406 17.98C39.3406 20.22 37.7406 22.7 35.6806 23.62L22.2006 29.62C21.5206 29.92 20.7606 30.08 20.0006 30.08Z" fill="#A6B1BF"/>
                                <path opacity="0.4" d="M20.0006 40C19.2406 40 18.4806 39.84 17.7806 39.54L4.30063 33.54C2.08063 32.56 0.640625 30.34 0.640625 27.9C0.640625 27.08 1.30063 26.42 2.12063 26.42C2.94062 26.42 3.60063 27.08 3.60063 27.9C3.60063 29.16 4.34064 30.3001 5.50064 30.8201L18.9806 36.8201C19.6206 37.1001 20.3606 37.1001 21.0006 36.8201L34.4806 30.8201C35.6206 30.3201 36.3806 29.16 36.3806 27.9C36.3806 27.08 37.0406 26.42 37.8606 26.42C38.6806 26.42 39.3406 27.08 39.3406 27.9C39.3406 30.34 37.9006 32.54 35.6806 33.54L22.2006 39.54C21.5206 39.84 20.7606 40 20.0006 40Z" fill="#A6B1BF"/>
                            </svg>
                        </div>
                        <div class="desc">
                            Floor: <b>8</b>
                        </div>
                    </li>
                </ul>

                <div class="text-center">
                    <a href="{{ url('/admin/console/properties/1') }}" class="bg-themered text-white inline-flex items-center justify-center gap-3 rounded-lg px-6 py-3 transition-all hover:bg-black-500">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.3697 2.89L11.5097 0.279995C10.6497 -0.100005 9.3497 -0.100005 8.4897 0.279995L2.62969 2.89C1.14969 3.55 0.929688 4.45 0.929688 4.93C0.929688 5.41 1.14969 6.31 2.62969 6.97L8.4897 9.58C8.9197 9.77 9.4597 9.87 9.9997 9.87C10.5397 9.87 11.0797 9.77 11.5097 9.58L17.3697 6.97C18.8497 6.31 19.0697 5.41 19.0697 4.93C19.0697 4.45 18.8597 3.55 17.3697 2.89Z" fill="white"/>
                            <path opacity="0.4" d="M10.0003 15.04C9.6203 15.04 9.2403 14.96 8.8903 14.81L2.15031 11.81C1.12031 11.35 0.320312 10.12 0.320312 8.99C0.320312 8.58 0.650312 8.25 1.06031 8.25C1.47031 8.25 1.80031 8.58 1.80031 8.99C1.80031 9.53 2.25031 10.23 2.75031 10.45L9.4903 13.45C9.8103 13.59 10.1803 13.59 10.5003 13.45L17.2403 10.45C17.7403 10.23 18.1903 9.54 18.1903 8.99C18.1903 8.58 18.5203 8.25 18.9303 8.25C19.3403 8.25 19.6703 8.58 19.6703 8.99C19.6703 10.11 18.8703 11.35 17.8403 11.81L11.1003 14.81C10.7603 14.96 10.3803 15.04 10.0003 15.04Z" fill="white"/>
                            <path opacity="0.4" d="M10.0003 20C9.6203 20 9.2403 19.92 8.8903 19.77L2.15031 16.77C1.04031 16.28 0.320312 15.17 0.320312 13.95C0.320312 13.54 0.650312 13.21 1.06031 13.21C1.47031 13.21 1.80031 13.54 1.80031 13.95C1.80031 14.58 2.17031 15.15 2.75031 15.41L9.4903 18.41C9.8103 18.55 10.1803 18.55 10.5003 18.41L17.2403 15.41C17.8103 15.16 18.1903 14.58 18.1903 13.95C18.1903 13.54 18.5203 13.21 18.9303 13.21C19.3403 13.21 19.6703 13.54 19.6703 13.95C19.6703 15.17 18.9503 16.27 17.8403 16.77L11.1003 19.77C10.7603 19.92 10.3803 20 10.0003 20Z" fill="white"/>
                        </svg>
                        Add Details
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endpush


    @push("scripts")
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
            select.border-red-500 {
                border-color: #e3342f;
            }
            .step button[disabled] {
                opacity: .5;
            }
        </style>
        @vite(["resources/js/custom/chart-active.js"])
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <script>
            function deleteProperty() {
                document.querySelectorAll(".delete-property-btn").forEach(button => {
                    button.addEventListener("click", function () {
                        const propertyId = this.dataset.propertyId;
                        Swal.fire({
                            title: "Are you sure?",
                            text: "Please enter your password to confirm delete.",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, delete it!",
                            input: "password",
                            inputAttributes: {
                                autocapitalize: "off"
                            },
                            showLoaderOnConfirm: true,
                            preConfirm: async (password) => {

                                axios.delete('{{ route("admin.console.property.destroy", ":id") }}'.replace(":id", propertyId), {
                                    data: {
                                        password: password
                                    }
                                }).then(response => {

                                    console.log(response.data);
                                    if(response.data.success) {
                                        document.getElementById("property-card-" + propertyId).remove();
                                        Swal.fire({
                                            position: "top-end",
                                            icon: "success",
                                            title: "Property deleted successfully",
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                    } else {
                                        Swal.fire({
                                            position: "top-end",
                                            icon: "error",
                                            title: "Unable to authorize. Please try again.",
                                            showConfirmButton: false,
                                            timer: 2000
                                        });
                                    }
                                }).catch(error => { console.error(error); });

                            },
                            allowOutsideClick: () => !Swal.isLoading()
                        });
                    });
                });
            }

            $(document).ready(function () {
                deleteProperty();
                $('#enableBlock, #enableunit').on('change', function () {
                    if (this.checked) {
                        // Uncheck the other one
                        $('#enableBlock, #enableunit').not(this).prop('checked', false);
                    } else {
                        // Check the other one
                        $('#enableBlock, #enableunit').not(this).prop('checked', true);
                    }
                });

                $('#proceed_property_btn').on('click', function(e) {
                    e.preventDefault();

                    var form_data = $("#init_property_setup_modal").serialize();

                    axios.post('{{ route('admin.console.property.init') }}', form_data)
                        .then(function (response) {

                            console.log(response.data);
                            $("#add_new_property").html(response.data.html);
                            $('.asams-modal.show').addClass('hidden').removeClass('show');
                            $('#add_new_property').removeClass('hidden').addClass('show');

                            loadSelect2Dropdown("country", "country_id", {}, "Select Country");
                            loadDependentDropdowns([
                                { parent: 'country_id', child: 'state_id', type: 'state', filterKey: 'country_id', placeholder: "Select State" },
                                { parent: 'state_id', child: 'city_id', type: 'city', filterKey: 'state_id', placeholder: "Select City" },
                            ]);

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
                        })
                        .catch(function (error) {
                            alert(error.response.data.message);
                        });


                });

                // Open modal
                $('[data-popup="modal"]').on('click', function (e) {
                    e.preventDefault();
                    const targetModal = $(this).attr('href');

                    // Close any open modal before opening the new one
                    $('.asams-modal.show').addClass('hidden').removeClass('show');

                    // Open the target modal
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

                // Close modal on Esc key
                $(document).on('keydown', function (e) {
                    if (e.key === 'Escape') {
                        $('.asams-modal.show').addClass('hidden').removeClass('show');
                    }
                });

            });

        </script>

        <script>
            $(document).ready(function () {
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
            });
        </script>

    @endpush
</x-app-layout>
