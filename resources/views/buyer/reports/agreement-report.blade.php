<x-app-layout>
    <div class="bg-white rounded-xl border border-slate-100">

        <div class="flex justify-between flex-wrap items-center mb-6 px-4 pt-4">
            <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-flex items-center gap-3 ltr:pr-4 rtl:pl-4 mb-1 sm:mb-0">
                {{ __('Agreement History Report') }}
            </h4>
            <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse dropdown relative">
                <button class="text-sm text-center flex items-center gap-1 w-full" type="button" id="tableDropdownMenuButton1" data-bs-toggle="dropdown">
                    {{ __('Export')}} <iconify-icon icon="heroicons-outline:chevron-down"></iconify-icon>
                </button>
                <ul class="dropdown-menu min-w-[140px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                    <li>
                        <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                            {{ __('Export as CSV')}}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                            {{ __('Export as Excel')}}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                            {{ __('Export as pdf')}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Search & Filter form -->
        <form class="property_search_form mb-6 px-4">
            <div class="flex flex-wrap items-end justify-between gap-3 xl:gap-6">
                <div class="left">
                    <div class="input-area relative">
                        <input type="text" name="s" class="w-full px-4 py-3 !pl-9 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]" placeholder="Search">
                        <span class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full border-none flex items-center justify-center pl-2">
                            <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:search"></iconify-icon>
                        </span>
                    </div>
                </div>
                <div class="right">
                    <div class="flex flex-wrap items-end gap-3 xl:gap-6">
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_220px] relative space-y-1">
                            <label>{{ __('Date Range')}}</label>
                            <x-date-range-picker id="fltr" />
                        </div>
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_160px] space-y-1">
                            <label>{{ __('Buyer Name')}}</label>
                            <select class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                                <option class="dark:bg-slate-700">Select Buyer</option>
                                <option value="" class="dark:bg-slate-700">Nabila Sultana</option>
                            </select>
                        </div>
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_120px] space-y-1">
                            <label>{{ __('Status')}}</label>
                            <select class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                                <option value="" class="dark:bg-slate-700">All</option>
                                <option value="Active" class="dark:bg-slate-700">Active</option>
                                <option value="Expired" class="dark:bg-slate-700">Expired</option>
                                <option value="Terminated" class="dark:bg-slate-700">Terminated</option>
                            </select>
                        </div>
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_120px] space-y-1">
                            <label>{{ __('Type')}}</label>
                            <select class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                                <option value="" class="dark:bg-slate-700">All</option>
                                <option value="Sale" class="dark:bg-slate-700">Sale</option>
                                <option value="Lease" class="dark:bg-slate-700">Lease</option>
                            </select>
                        </div>
                        
                        <div class="input-area">
                            <button type="submit" class="bg-black-900 rounded-lg px-5 py-4">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.43605 0.75H13.564C14.4913 0.75 15.25 1.50012 15.25 2.41692V4.25054C15.25 4.91731 14.8285 5.75077 14.407 6.1675L10.782 9.3347C10.2762 9.7514 9.939 10.5848 9.939 11.2516V14.8355C9.939 15.3356 9.6017 16.0023 9.1802 16.2524L8 17.0025C6.9041 17.6693 5.38663 16.9192 5.38663 15.5856V11.1683C5.38663 10.5848 5.04942 9.8347 4.71221 9.418L1.50872 6.08415C1.08721 5.66742 0.75 4.91731 0.75 4.41723V2.50027C0.75 1.50012 1.50872 0.75 2.43605 0.75Z" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.0975 0.75L2.94141 7.3343" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>



        <!-- Insert dataTable here -->
        <div class="overflow-x-auto">
            <table class="w-full table table-auto">
                <thead>
                    <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">
                        <th>
                            Agreement ID
                        </th>
                        <th>
                            Shop Name
                        </th>
                        <th>
                            Agreement Type
                        </th>
                        <th>
                            Created On
                        </th>
                        <th>
                            Expiry Date
                        </th>
                        <th>
                            Status
                        </th>
                        <th class="!text-end">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap *:text-sm *:text-pureblack">
                        <td>
                            {{ __('AG-20250601-001')}}
                        </td>
                        <td>
                            Shop 101 <br>
                            <span class="text-sm text-[#607085] font-normal">
                                Block A, 1st Floor
                            </span>
                        </td>
                        <td>
                            {{ __('Sale')}}
                        </td>
                        <td>
                            {{ __('2025-06-12') }}
                        </td>
                        <td>
                            {{ __('2025-06-12') }}
                        </td>
                        <td>
                            <span class="text-green-500 bg-green-100 inline-block px-3 py-1 rounded-full text-xs font-medium">
                                {{ __('Active')}}
                            </span>
                        </td>
                        <td class="text-end">
                            <a href="#" target="_blank" class="border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#" target="_blank" class="border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.52344 11.1758V16.1258L11.1734 14.4758" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.525 16.1266L7.875 14.4766" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.25 10.35V14.475C20.25 18.6 18.6 20.25 14.475 20.25H9.525C5.4 20.25 3.75 18.6 3.75 14.475V9.525C3.75 5.4 5.4 3.75 9.525 3.75H13.65" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.2484 10.35H16.9484C14.4734 10.35 13.6484 9.525 13.6484 7.05V3.75L20.2484 10.35Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap *:text-sm *:text-pureblack">
                        <td>
                            {{ __('AG-20250601-001')}}
                        </td>
                        <td>
                            Shop 101 <br>
                            <span class="text-sm text-[#607085] font-normal">
                                Block A, 1st Floor
                            </span>
                        </td>
                        <td>
                            {{ __('Lease')}}
                        </td>
                        <td>
                            {{ __('2025-06-12') }}
                        </td>
                        <td>
                            {{ __('2025-06-12') }}
                        </td>
                        <td>
                            <span class="text-black-500 bg-black-100 inline-block px-3 py-1 rounded-full text-xs font-medium">
                                {{ __('Terminated')}}
                            </span>
                        </td>
                        <td class="text-end">
                            <a href="#" target="_blank" class="border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#" target="_blank" class="border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.52344 11.1758V16.1258L11.1734 14.4758" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.525 16.1266L7.875 14.4766" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.25 10.35V14.475C20.25 18.6 18.6 20.25 14.475 20.25H9.525C5.4 20.25 3.75 18.6 3.75 14.475V9.525C3.75 5.4 5.4 3.75 9.525 3.75H13.65" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.2484 10.35H16.9484C14.4734 10.35 13.6484 9.525 13.6484 7.05V3.75L20.2484 10.35Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap *:text-sm *:text-pureblack">
                        <td>
                            {{ __('AG-20250601-001')}}
                        </td>
                        <td>
                            Shop 101 <br>
                            <span class="text-sm text-[#607085] font-normal">
                                Block A, 1st Floor
                            </span>
                        </td>
                        <td>
                            {{ __('Lease')}}
                        </td>
                        <td>
                            {{ __('2025-06-12') }}
                        </td>
                        <td>
                            {{ __('2025-06-12') }}
                        </td>
                        <td>
                            <span class="text-red-500 bg-red-100 inline-block px-3 py-1 rounded-full text-xs font-medium">
                                {{ __('Expired')}}
                            </span>
                        </td>
                        <td class="text-end">
                            <a href="#" target="_blank" class="border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#" target="_blank" class="border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.52344 11.1758V16.1258L11.1734 14.4758" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.525 16.1266L7.875 14.4766" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.25 10.35V14.475C20.25 18.6 18.6 20.25 14.475 20.25H9.525C5.4 20.25 3.75 18.6 3.75 14.475V9.525C3.75 5.4 5.4 3.75 9.525 3.75H13.65" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.2484 10.35H16.9484C14.4734 10.35 13.6484 9.525 13.6484 7.05V3.75L20.2484 10.35Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</x-app-layout>