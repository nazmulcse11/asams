<x-app-layout>
    <div class="bg-white rounded-xl border border-slate-100">

        <div class="flex justify-between flex-wrap items-center mb-6 px-4 pt-4">
            <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-flex items-center gap-3 ltr:pr-4 rtl:pl-4 mb-1 sm:mb-0">
                {{ __('Installment Report') }}
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
                <div class="right ">
                    <div class="flex flex-wrap items-end gap-3 xl:gap-6">
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_220px] relative space-y-1">
                            <label>{{ __('Due Date Range')}}</label>
                            <x-date-range-picker id="due_date" />
                        </div>
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_220px] relative space-y-1">
                            <label>{{ __('Paid Date Range')}}</label>
                            <x-date-range-picker id="paid_date" />
                        </div>
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_180px] space-y-1">
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
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_120px] space-y-1">
                            <label>{{ __('Status')}}</label>
                            <select class="w-full px-4 py-3 rounded-lg bg-[#F8F9FB] border border-[#E1E5EA]">
                                <option value="" class="dark:bg-slate-700">All</option>
                                <option value="Paid" class="dark:bg-slate-700">Paid</option>
                                <option value="Due" class="dark:bg-slate-700">Due</option>
                                <option value="Overdue" class="dark:bg-slate-700">Overdue</option>
                                <option value="Upcoming" class="dark:bg-slate-700">Upcoming</option>
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
                            {{ __('Installment ID')}}
                        </th>
                        <th>
                            {{ __('Shop Name')}}
                        </th>
                        <th>
                            {{ __('Property Name')}}
                        </th>
                        <th>
                            {{ __('Installment No.')}}
                        </th>
                        <th>
                            {{ __('Due Date')}}
                        </th>
                        <th>
                            {{ __('Amount (BDT)')}}
                        </th>
                        <th>
                            {{ __('Paid Date')}}
                        </th>
                        <th>
                            {{ __('Status')}}
                        </th>
                        <th>
                           {{ __('Payment Method')}}
                        </th>
                        <th class="!text-end">
                            {{ __('Actions')}}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap *:text-sm *:text-pureblack">
                        <td>
                            {{ __('INST-20250601-01')}}
                        </td>
                        <td class="font-medium text-pureblack">
                            Shop 101 <br>
                            <span class="text-sm text-[#607085] font-normal">
                                Block A, 1st Floor
                            </span>
                        </td>
                        <td>
                            {{ __('Nur Super Market')}}
                        </td>
                        <td>
                            {{ __('1st')}}
                        </td>
                        <td>
                            {{ __('2025-06-12')}}
                        </td>
                        <td>
                            {{ __('৳3,20,000')}}
                        </td>
                        <td class="font-medium text-pureblack">
                            2025-06-12 <br>
                            <span class="text-sm text-[#607085] font-normal">
                                11:26:02
                            </span>
                        </td>
                        <td>
                            <span class="text-green-500 bg-green-100 inline-block px-3 py-1 rounded-full text-xs font-medium">
                                {{ __('Paid')}}
                            </span>
                        </td>
                        <td>
                            {{ __('Bank Transfer') }}
                        </td>
                        <td class="text-end">
                            <a href="#" target="_blank" class="border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center gap-2 transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.75 7.75826V18.9814C3.75 19.6468 4.5255 20.0235 5.07 19.6227L6.48075 18.5966C6.81075 18.3561 7.27275 18.3882 7.56975 18.6768L8.93925 20.0155C9.261 20.3282 9.789 20.3282 10.1107 20.0155L11.4968 18.6687C11.7855 18.3882 12.2475 18.3561 12.5692 18.5966L13.98 19.6227C14.5245 20.0155 15.3 19.6387 15.3 18.9814V5.3533C15.3 4.47149 16.0425 3.75 16.95 3.75H7.875H7.05C4.575 3.75 3.75 5.18496 3.75 6.95661V7.75826Z" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.2508 6.95661V8.8966C20.2508 10.1632 19.4258 10.9649 18.1223 10.9649H15.3008V5.36132C15.3008 4.47149 16.0515 3.75 16.9673 3.75C17.8665 3.75802 18.6915 4.11074 19.2855 4.68793C19.8795 5.27314 20.2508 6.07479 20.2508 6.95661Z" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.52344 12.5781H11.9984" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.52344 9.37109H11.9984" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.04688 12.5664H7.05429" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.04688 9.36328H7.05429" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap *:text-sm *:text-pureblack">
                        <td>
                            {{ __('INST-20250601-01')}}
                        </td>
                        <td class="font-medium text-pureblack">
                            Shop 101 <br>
                            <span class="text-sm text-[#607085] font-normal">
                                Block A, 1st Floor
                            </span>
                        </td>
                        <td>
                            {{ __('Nur Super Market')}}
                        </td>
                        <td>
                            {{ __('1st')}}
                        </td>
                        <td>
                            {{ __('2025-06-12')}}
                        </td>
                        <td>
                            {{ __('৳3,20,000')}}
                        </td>
                        <td class="font-medium text-pureblack">
                            -
                        </td>
                        <td>
                            <span class="text-yellow-500 bg-yellow-100 inline-block px-3 py-1 rounded-full text-xs font-medium">
                                {{ __('Due')}}
                            </span>
                        </td>
                        <td>
                            {{ __('Bank Transfer') }}
                        </td>
                        <td class="text-end">
                            <a href="#" target="_blank" class="border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center gap-2 transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.34375 15.2025L15.2025 5.34375" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.2578 17.1775L12.2478 16.1875" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.4805 14.96L15.4522 12.9883" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.07105 10.546L10.549 5.06797C12.298 3.31897 13.1725 3.31072 14.905 5.04322L18.9558 9.09397C20.6883 10.8265 20.68 11.701 18.931 13.45L13.453 18.928C11.704 20.677 10.8295 20.6852 9.09705 18.9527L5.0463 14.902C3.3138 13.1695 3.3138 12.3032 5.07105 10.546Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.75 20.25H20.25" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{ __('Pay Now') }}
                            </a>
                        </td>
                    </tr>
                    <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap *:text-sm *:text-pureblack">
                        <td>
                            {{ __('INST-20250601-01')}}
                        </td>
                        <td class="font-medium text-pureblack">
                            Shop 101 <br>
                            <span class="text-sm text-[#607085] font-normal">
                                Block A, 1st Floor
                            </span>
                        </td>
                        <td>
                            {{ __('Nur Super Market')}}
                        </td>
                        <td>
                            {{ __('1st')}}
                        </td>
                        <td>
                            {{ __('2025-06-12')}}
                        </td>
                        <td>
                            {{ __('৳3,20,000')}}
                        </td>
                        <td class="font-medium text-pureblack">
                            -
                        </td>
                        <td>
                            <span class="text-red-500 bg-red-100 inline-block px-3 py-1 rounded-full text-xs font-medium">
                                {{ __('Overdue')}}
                            </span>
                        </td>
                        <td>
                            {{ __('Bank Transfer') }}
                        </td>
                        <td class="text-end">
                            <a href="#" target="_blank" class="border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center gap-2 transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.7356 18.4922C14.7356 20.0096 13.5154 21.2511 12.0241 21.2511C11.2829 21.2511 10.596 20.9384 10.1079 20.4418C9.61981 19.9452 9.3125 19.2463 9.3125 18.4922" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10"/>
                                    <path d="M12.0223 3.63672C9.0306 3.63672 6.59925 5.96476 6.59925 8.82937V11.3305C6.59925 11.8584 6.36425 12.6633 6.08405 13.1133L5.04463 14.7663C4.40289 15.7875 4.84578 16.9212 6.02078 17.302C9.91638 18.5483 14.1193 18.5483 18.0149 17.302C19.1085 16.9559 19.5876 15.7183 18.991 14.7663L17.9516 13.1133C17.6804 12.6633 17.4454 11.8584 17.4454 11.3305V8.82937C17.4454 5.97341 15.0051 3.63672 12.0223 3.63672Z" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path d="M13.6958 3.90874C13.4156 3.82597 13.1264 3.76159 12.8281 3.72481C11.9604 3.61445 11.1289 3.67883 10.3516 3.90874C10.6137 3.22821 11.2645 2.75 12.0237 2.75C12.7829 2.75 13.4337 3.22821 13.6958 3.90874Z" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap *:text-sm *:text-pureblack">
                        <td>
                            {{ __('INST-20250601-01')}}
                        </td>
                        <td class="font-medium text-pureblack">
                            Shop 101 <br>
                            <span class="text-sm text-[#607085] font-normal">
                                Block A, 1st Floor
                            </span>
                        </td>
                        <td>
                            {{ __('Nur Super Market')}}
                        </td>
                        <td>
                            {{ __('1st')}}
                        </td>
                        <td>
                            {{ __('2025-06-12')}}
                        </td>
                        <td>
                            {{ __('৳3,20,000')}}
                        </td>
                        <td class="font-medium text-pureblack">
                            -
                        </td>
                        <td>
                            <span class="text-black-500 bg-black-100 inline-block px-3 py-1 rounded-full text-xs font-medium">
                                {{ __('Upcoming')}}
                            </span>
                        </td>
                        <td>
                            {{ __('-') }}
                        </td>
                        <td class="text-end">
                            <a href="#" target="_blank" class="border border-slate-300 font-medium px-3 py-2.5 rounded-xl inline-flex items-center justify-center gap-2 transition-all text-pureblack hover:bg-gunmetal hover:border-gunmetal hover:text-white">
                                {{ __('View Plan')}}
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</x-app-layout>