<x-app-layout>
    <div class="bg-white rounded-xl border border-slate-100">

        <div class="flex justify-between flex-wrap items-center mb-6 px-4 pt-4">
            <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-flex items-center gap-3 ltr:pr-4 rtl:pl-4 mb-1 sm:mb-0">
                {{ __('Payment Collection Report') }}
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
                        <input type="text" name="s" class="w-full px-4 py-3 !pl-9 rounded-lg bg-[#F8F9FB]" placeholder="Search">
                        <span class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full border-none flex items-center justify-center pl-2">
                            <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:search"></iconify-icon>
                        </span>
                    </div>
                </div>
                <div class="right max-w-4xl">
                    <div class="flex flex-wrap items-end gap-3 xl:gap-6">
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_240px] relative space-y-1">
                            <label>{{ __('Date Range')}}</label>
                            <x-date-range-picker id="fltr" />
                        </div>
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_240px] space-y-1">
                            <label>{{ __('Payment Method')}}</label>
                            <select class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                                <option value="" class="dark:bg-slate-700">Select Method</option>
                                <option value="" class="dark:bg-slate-700">Bank Transfer</option>
                                <option value="" class="dark:bg-slate-700">Bkash Payment</option>
                                <option value="" class="dark:bg-slate-700">Nagad Payment</option>
                                <option value="" class="dark:bg-slate-700">Rocket Payment</option>
                                <option value="" class="dark:bg-slate-700">Cash Payment</option>
                            </select>
                        </div>
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_200px] space-y-1">
                            <label>{{ __('Status')}}</label>
                            <select class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                                <option value="" class="dark:bg-slate-700">All</option>
                                <option value="Completed" class="dark:bg-slate-700">Completed</option>
                                <option value="Pending" class="dark:bg-slate-700">Pending</option>
                                <option value="Failed" class="dark:bg-slate-700">Failed</option>
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
        <table class="table table-auto">
            <thead>
                <tr>
                    <th>
                        
                    </th>
                </tr>
            </thead>
        </table>
    </div>


</x-app-layout>