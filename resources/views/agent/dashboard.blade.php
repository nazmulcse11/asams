<x-app-layout>

    <div class="mb-6">
        <h4 class="font-semibold text-pureblack dark:text-white text-2xl">
            {{ __('Dashboard')}}
        </h4>
        <p>
            {{ __('Monitor listings, leads, and performance stats.')}}
        </p>
    </div>

    <!-- States Cards -->
    <div class="states grid gap-4 xl:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mb-6">

        <div class="card shadow-md p-4 rounded-xl flex gap-5">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#DCFCE8] inline-flex items-center justify-center">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30 14.1402C30 12.8002 29.34 11.5602 28.22 10.8202L20.22 5.48018C18.88 4.58018 17.12 4.58018 15.78 5.48018L7.78 10.8202C6.68 11.5602 6 12.8002 6 14.1402V25.5002C6 26.0602 6.44 26.5002 7 26.5002H29C29.56 26.5002 30 26.0602 30 25.5002V14.1402ZM18 21.5002C16.08 21.5002 14.5 19.9202 14.5 18.0002C14.5 16.0802 16.08 14.5002 18 14.5002C19.92 14.5002 21.5 16.0802 21.5 18.0002C21.5 19.9202 19.92 21.5002 18 21.5002Z" fill="#22C55E"/>
                    <path d="M44 42.5002H41.46V36.5002C43.36 35.8802 44.74 34.1002 44.74 32.0002V28.0002C44.74 25.3802 42.6 23.2402 39.98 23.2402C37.36 23.2402 35.22 25.3802 35.22 28.0002V32.0002C35.22 34.0802 36.58 35.8402 38.44 36.4802V42.5002H30V30.5002C30 29.9402 29.56 29.5002 29 29.5002H7C6.44 29.5002 6 29.9402 6 30.5002V42.5002H4C3.18 42.5002 2.5 43.1802 2.5 44.0002C2.5 44.8202 3.18 45.5002 4 45.5002H39.86C39.9 45.5002 39.92 45.5202 39.96 45.5202C40 45.5202 40.02 45.5002 40.06 45.5002H44C44.82 45.5002 45.5 44.8202 45.5 44.0002C45.5 43.1802 44.82 42.5002 44 42.5002ZM16.5 36.5002C16.5 35.6802 17.18 35.0002 18 35.0002C18.82 35.0002 19.5 35.6802 19.5 36.5002V42.5002H16.5V36.5002Z" fill="#22C55E"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Reserved Shops") }}
                </p>
                <h6 class="font-semibold text-pureblack text-base xl:text-lg 2xl:text-3xl">
                    {{ __("12") }}
                </h6>
            </div>
        </div>

        <div class="card shadow-md p-4 rounded-xl flex gap-5">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#FFFEC2] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28.9851 26.1167L22.2518 20H17.7351L11.0018 26.1167C9.11842 27.8167 8.50175 30.4333 9.41842 32.8C10.3351 35.15 12.5684 36.6667 15.0851 36.6667H24.9018C27.4351 36.6667 29.6518 35.15 30.5684 32.8C31.4851 30.4333 30.8684 27.8167 28.9851 26.1167ZM23.0351 30.2333H16.9684C16.3351 30.2333 15.8351 29.7167 15.8351 29.1C15.8351 28.4833 16.3518 27.9667 16.9684 27.9667H23.0351C23.6684 27.9667 24.1684 28.4833 24.1684 29.1C24.1684 29.7167 23.6518 30.2333 23.0351 30.2333Z" fill="#F5C400"/>
                    <path d="M30.5818 7.20065C29.6651 4.85065 27.4318 3.33398 24.9151 3.33398H15.0818C12.5651 3.33398 10.3318 4.85065 9.41514 7.20065C8.51514 9.56732 9.13181 12.184 11.0151 13.884L17.7485 20.0007H22.2651L28.9985 13.884C30.8651 12.184 31.4818 9.56732 30.5818 7.20065ZM23.0318 12.0507H16.9651C16.3318 12.0507 15.8318 11.534 15.8318 10.9173C15.8318 10.3007 16.3485 9.78398 16.9651 9.78398H23.0318C23.6651 9.78398 24.1651 10.3007 24.1651 10.9173C24.1651 11.534 23.6485 12.0507 23.0318 12.0507Z" fill="#F5C400"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Pending Shop Reservation") }}
                </p>
                <h6 class="font-semibold text-pureblack text-base xl:text-lg 2xl:text-3xl">
                    {{ __("36") }}
                </h6>
            </div>
        </div>

        <div class="card shadow-md p-4 rounded-xl flex gap-5">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#E6E0F4] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.8661 27.8661C28.3543 27.378 29.1457 27.378 29.6339 27.8661L34.6339 32.8661C35.122 33.3543 35.122 34.1457 34.6339 34.6339C34.1457 35.122 33.3543 35.122 32.8661 34.6339L27.8661 29.6339C27.378 29.1457 27.378 28.3543 27.8661 27.8661Z" fill="#9881CB"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5 17.5C5 10.5964 10.5964 5 17.5 5C24.4036 5 30 10.5964 30 17.5C30 24.4036 24.4036 30 17.5 30C10.5964 30 5 24.4036 5 17.5Z" fill="#9881CB"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Buyer’s Inquiries") }}
                </p>
                <h6 class="font-semibold text-pureblack text-base xl:text-lg 2xl:text-3xl">
                    {{ __("85") }}
                </h6>
            </div>
        </div>

        <div class="card shadow-md p-4 rounded-xl flex gap-5">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#96F1C6] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.9706 14.9668L34.5526 11.034C33.9471 6.74631 31.972 5 27.748 5H24.3458H22.2122H17.8296H15.696H12.2361C7.99765 5 6.03702 6.74631 5.41712 11.0766L5.02788 14.981C4.88371 16.5001 5.30179 17.9767 6.21002 19.1267C7.30566 20.5322 8.99237 21.3273 10.8665 21.3273C12.683 21.3273 14.4273 20.4329 15.523 18.9989C16.5033 20.4329 18.1756 21.3273 20.0353 21.3273C21.895 21.3273 23.5241 20.4754 24.5188 19.0557C25.6288 20.4613 27.3444 21.3273 29.132 21.3273C31.0494 21.3273 32.7793 20.4896 33.8606 19.0131C34.7256 17.8773 35.1148 16.4433 34.9706 14.9668Z" fill="#0FBA7F"/>
                    <path d="M19.0977 26.8782C17.2668 27.0627 15.8828 28.5961 15.8828 30.4134V34.3035C15.8828 34.6869 16.2 34.9992 16.5892 34.9992H23.4658C23.8551 34.9992 24.1722 34.6869 24.1722 34.3035V30.9103C24.1866 27.943 22.4134 26.5374 19.0977 26.8782Z" fill="#0FBA7F"/>
                    <path d="M33.5436 23.668V27.8989C33.5436 31.8174 30.3143 34.9977 26.3354 34.9977C25.9462 34.9977 25.629 34.6853 25.629 34.302V30.9088C25.629 29.0915 25.0668 27.6717 23.9711 26.7063C23.0052 25.8402 21.6933 25.4143 20.0643 25.4143C19.7039 25.4143 19.3435 25.4285 18.9542 25.4711C16.3881 25.7266 14.4419 27.8563 14.4419 30.4118V34.302C14.4419 34.6853 14.1248 34.9977 13.7355 34.9977C9.75661 34.9977 6.52734 31.8174 6.52734 27.8989V23.6964C6.52734 22.7025 7.52207 22.0352 8.45913 22.3618C8.84838 22.4896 9.23762 22.5889 9.64127 22.6457C9.81427 22.6741 10.0017 22.7025 10.1747 22.7025C10.4053 22.7309 10.636 22.7451 10.8667 22.7451C12.539 22.7451 14.1824 22.1346 15.4799 21.084C16.7197 22.1346 18.3343 22.7451 20.0355 22.7451C21.751 22.7451 23.3368 22.163 24.5766 21.1124C25.8741 22.1488 27.4887 22.7451 29.1322 22.7451C29.3917 22.7451 29.6512 22.7309 29.8962 22.7025C30.0692 22.6883 30.2278 22.6741 30.3864 22.6457C30.8333 22.5889 31.237 22.4612 31.6406 22.3334C32.5777 22.021 33.5436 22.7025 33.5436 23.668Z" fill="#0FBA7F"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Shop Sold") }}
                </p>
                <h6 class="font-semibold text-pureblack text-base xl:text-lg 2xl:text-3xl">
                    {{ __("167") }}
                </h6>
            </div>
        </div>

        <div class="card shadow-md p-4 rounded-xl flex gap-5">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#D1D8F4] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35 33.8737C35 34.4891 34.49 34.9994 33.875 34.9994H6.125C5.51 34.9994 5 34.4891 5 33.8737C5 33.2583 5.51 32.748 6.125 32.748H33.875C34.49 32.748 35 33.2583 35 33.8737Z" fill="#8283DA"/>
                    <path d="M25.0852 8.76721L8.97516 24.8867C8.36016 25.502 7.37016 25.502 6.77016 24.8867H6.75516C4.67016 22.7854 4.67016 19.3934 6.75516 17.3072L17.4802 6.57592C19.5802 4.47469 22.9702 4.47469 25.0702 6.57592C25.6852 7.16127 25.6852 8.16686 25.0852 8.76721Z" fill="#8283DA"/>
                    <path d="M33.2302 14.7228L28.6552 10.1451C28.0402 9.52975 27.0502 9.52975 26.4502 10.1451L10.3402 26.2646C9.72516 26.8649 9.72516 27.8555 10.3402 28.4709L14.9152 33.0635C17.0152 35.1498 20.4052 35.1498 22.5052 33.0635L33.2152 22.3323C35.3452 20.231 35.3452 16.824 33.2302 14.7228ZM21.1402 28.2757L19.3252 30.1068C18.9502 30.482 18.3352 30.482 17.9452 30.1068C17.5702 29.7316 17.5702 29.1162 17.9452 28.726L19.7752 26.8949C20.1352 26.5347 20.7652 26.5347 21.1402 26.8949C21.5152 27.2701 21.5152 27.9155 21.1402 28.2757ZM27.0952 22.3172L23.4352 25.9944C23.0602 26.3546 22.4452 26.3546 22.0552 25.9944C21.6802 25.6192 21.6802 25.0038 22.0552 24.6136L25.7302 20.9364C26.0902 20.5762 26.7202 20.5762 27.0952 20.9364C27.4702 21.3267 27.4702 21.942 27.0952 22.3172Z" fill="#8283DA"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Revenue Via") }}
                </p>
                <h6 class="font-semibold text-pureblack text-base xl:text-lg 2xl:text-3xl">
                    {{ __("2,15,000") }}
                </h6>
            </div>
        </div>

        <div class="card shadow-md p-4 rounded-xl flex gap-5">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#FBD9CD] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.998 23.2446V24.812C34.998 25.2351 34.6664 25.58 34.2243 25.5956H31.919C31.0822 25.5956 30.3243 24.9844 30.2611 24.1693C30.2138 23.6835 30.4032 23.2289 30.719 22.9155C31.0032 22.6177 31.398 22.4609 31.8243 22.4609H34.2085C34.6664 22.4766 34.998 22.8214 34.998 23.2446Z" fill="#E4764F"/>
                    <path d="M29.5368 21.7527C28.7474 22.5207 28.3684 23.6649 28.6842 24.8561C29.0947 26.3137 30.5316 27.2384 32.0474 27.2384H33.4211C34.2895 27.2384 35 27.9437 35 28.8058V29.1036C35 32.348 32.3316 34.9968 29.0632 34.9968H10.9368C7.66842 34.9968 5 32.348 5 29.1036V18.5553C5 16.6275 5.93158 14.9191 7.36842 13.8533C8.36316 13.101 9.59474 12.6621 10.9368 12.6621H29.0632C32.3316 12.6621 35 15.3109 35 18.5553V19.245C35 20.107 34.2895 20.8123 33.4211 20.8123H31.8105C30.9263 20.8123 30.1211 21.1571 29.5368 21.7527Z" fill="#E4764F"/>
                    <path d="M26.7095 9.41992C27.1358 9.8431 26.7726 10.5014 26.1726 10.5014L14.0463 10.4857C13.3516 10.4857 12.9884 9.63935 13.4937 9.15347L16.0516 6.59869C18.2148 4.4671 21.72 4.4671 23.8832 6.59869L26.6463 9.3729C26.6621 9.38857 26.6937 9.40425 26.7095 9.41992Z" fill="#E4764F"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Commission Earned") }}
                </p>
                <h6 class="font-semibold text-pureblack text-base xl:text-lg 2xl:text-3xl">
                    {{ __("35,000") }}
                </h6>
            </div>
        </div>

    </div>

    <div class="chart_cards grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">


        <div class="card-item bg-white p-4 rounded-2xl border border-slate-50 xl:col-span-2">
            <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex justify-between gap-4 mb-4">
                {{ __("My Reservations") }}
                <a href="#" class="text-themered inline-flex items-center gap-1 text-base">
                    {{ __('All Reservation')}}
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.75 7.82807C5.28168 4.82158 8.41036 2.75 11.9994 2.75C17.0869 2.75 21.2494 6.9125 21.2494 12C21.2494 17.0875 17.0869 21.25 11.9994 21.25C8.41036 21.25 5.28168 19.1784 3.75 16.1719" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.75 12H16.75L12.75 16M12.75 8L14.25 9.5" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </h4>
            <div class="card-body">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">
                                <th>
                                    {{ __('Reserv. ID')}}
                                </th>
                                <th>
                                    {{ __('Shop')}}
                                </th>
                                <th>
                                    {{ __('Property')}}
                                </th>
                                <th>
                                    {{ __('Area (sq. ft.)')}}
                                </th>
                                <th>
                                    {{ __('Type')}}
                                </th>
                                <th>
                                    {{ __('Status')}}
                                </th>
                                <th>
                                    {{ __('Reserve & Validation')}}
                                </th>
                                <th>
                                    {{ __('Actions')}}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('RS-10021')}}
                                </td>
                                <td class="text-sm">
                                    {{ __('Shop 101')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Block A, 1st Floor')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Commercial Plot,')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Tejgaon')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Area : 2,000 sq. ft')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('L : 50 ft, W : 40 ft')}}
                                    </span>
                                </td>
                                <td>
                                    {{ __('Buy')}}
                                </td>
                                <td>
                                    <span class="text-green-500 bg-[#F0FDF5] inline-block px-2 py-1 rounded-full text-xs font-medium">
                                        {{ __('Approved')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Res. : 2025-06-12')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Valid : 2025-07-12')}}
                                    </span>
                                </td>
                                <td>
                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('RS-10021')}}
                                </td>
                                <td class="text-sm">
                                    {{ __('Shop 101')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Block A, 1st Floor')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Commercial Plot,')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Tejgaon')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Area : 2,000 sq. ft')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('L : 50 ft, W : 40 ft')}}
                                    </span>
                                </td>
                                <td>
                                    {{ __('Buy')}}
                                </td>
                                <td>
                                    <span class="text-yellow-500 bg-[#FFFEEB] inline-block px-2 py-1 rounded-full text-xs font-medium">
                                        {{ __('Pending')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Res. : 2025-06-12')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Valid : 2025-07-12')}}
                                    </span>
                                </td>
                                <td>
                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('RS-10021')}}
                                </td>
                                <td class="text-sm">
                                    {{ __('Shop 101')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Block A, 1st Floor')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Commercial Plot,')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Tejgaon')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Area : 2,000 sq. ft')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('L : 50 ft, W : 40 ft')}}
                                    </span>
                                </td>
                                <td>
                                    {{ __('Buy')}}
                                </td>
                                <td>
                                    <span class="text-red-500 bg-[#FFF1F2] inline-block px-2 py-1 rounded-full text-xs font-medium">
                                        {{ __('Declined')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Res. : 2025-06-12')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Valid : 2025-07-12')}}
                                    </span>
                                </td>
                                <td>
                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('RS-10021')}}
                                </td>
                                <td class="text-sm">
                                    {{ __('Shop 101')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Block A, 1st Floor')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Commercial Plot,')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Tejgaon')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Area : 2,000 sq. ft')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('L : 50 ft, W : 40 ft')}}
                                    </span>
                                </td>
                                <td>
                                    {{ __('Buy')}}
                                </td>
                                <td>
                                    <span class="text-green-500 bg-[#F0FDF5] inline-block px-2 py-1 rounded-full text-xs font-medium">
                                        {{ __('Approved')}}
                                    </span>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('Res. : 2025-06-12')}} <br> 
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ __('Valid : 2025-07-12')}}
                                    </span>
                                </td>
                                <td>
                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card-item bg-white p-4 rounded-2xl border border-slate-50">
            <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex justify-between gap-4 mb-4">
                {{ __("Recent Buyer’s Inquiries") }}
            </h4>
            <div class="card-body">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">
                                <th>
                                    {{ __("Inquiry ID")}}
                                </th>
                                <th>
                                    {{ __("Buyer's Name")}}
                                </th>
                                <th>
                                    {{ __("Status")}}
                                </th>
                                <th>
                                    {{ __("Actions")}}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('RS-10021')}}
                                </td>
                                <td class="text-sm">
                                    {{ __('Nabila Sultana')}}
                                </td>                                
                                <td>
                                    <span class="text-green-500 bg-[#F0FDF5] inline-block px-2 py-1 rounded-full text-xs font-medium">
                                        {{ __('Responded')}}
                                    </span>
                                </td>
                                <td>
                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('RS-10021')}}
                                </td>
                                <td class="text-sm">
                                    {{ __('Rakib Hossain')}}
                                </td>
                                <td>
                                    <span class="text-yellow-500 bg-[#FFFEEB] inline-block px-2 py-1 rounded-full text-xs font-medium">
                                        {{ __('Pending')}}
                                    </span>
                                </td>
                                <td>
                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ __('RS-10021')}}
                                </td>
                                <td class="text-sm">
                                    {{ __('Tanvir Ahamed')}}
                                </td>
                                <td>
                                    <span class="text-green-500 bg-[#F0FDF5] inline-block px-2 py-1 rounded-full text-xs font-medium">
                                        {{ __('Scheduled')}}
                                    </span>
                                </td>
                                <td>
                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


</x-app-layout>
