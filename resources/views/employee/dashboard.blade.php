<x-app-layout>
    <div class="mb-6">
        <h4 class="font-semibold text-pureblack text-2xl">
            Welcome Back, Jesmin
        </h4>
        <p>
            {{ __("Here's your quick overview and active workflows for the day.")}}
        </p>
    </div>

     <!-- States Cards -->
    <div class="states grid gap-4 xl:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mb-6 *:shadow-sm *:p-4 *:rounded-xl *:flex *:gap-5 *:items-center">

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#FFFEC2] inline-flex items-center justify-center">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M36.4387 23.1196H30.7095C30.0227 23.1196 29.4531 22.5652 29.4531 21.8967V10.5C29.4531 9.29348 29.9389 8.16848 30.81 7.32065C31.6811 6.47283 32.837 6 34.0767 6H34.0934C36.1874 6.0163 38.1641 6.81522 39.6718 8.2663C41.1795 9.75 42.0003 11.7065 42.0003 13.7446V17.6902C42.0171 20.9348 39.7723 23.1196 36.4387 23.1196ZM31.9659 20.6739H36.4387C38.3819 20.6739 39.5043 19.5815 39.5043 17.6902V13.7446C39.5043 12.3424 38.9347 11.0054 37.9128 9.99457C36.891 9.01631 35.5173 8.46196 34.0934 8.44565C34.0934 8.44565 34.0934 8.44565 34.0767 8.44565C33.5238 8.44565 32.9878 8.65761 32.5857 9.04891C32.1837 9.44022 31.9659 9.94565 31.9659 10.5V20.6739V20.6739Z" fill="#F5C400"/>
                    <path d="M18.9827 42C18.1954 42 17.4583 41.7065 16.9055 41.1522L14.1247 38.4293C13.9739 38.2826 13.7394 38.2663 13.5719 38.3967L10.6905 40.4837C9.80269 41.1359 8.63005 41.25 7.62494 40.7609C6.61982 40.2717 6 39.2935 6 38.2011V13.7446C6 8.82065 8.89808 6 13.9572 6H34.0595C34.7463 6 35.3159 6.55435 35.3159 7.22283C35.3159 7.8913 34.7463 8.44565 34.0595 8.44565C32.9036 8.44565 31.9655 9.3587 31.9655 10.4837V38.2011C31.9655 39.2935 31.3457 40.2717 30.3406 40.7609C29.3354 41.25 28.1628 41.1522 27.275 40.5L24.4104 38.413C24.2429 38.2826 24.0083 38.3152 23.8743 38.4457L21.06 41.1848C20.5072 41.7065 19.7701 42 18.9827 42ZM13.8064 35.8696C14.577 35.8696 15.3308 36.1467 15.9004 36.7174L18.6812 39.4402C18.7817 39.538 18.9157 39.5543 18.9827 39.5543C19.0498 39.5543 19.1838 39.538 19.2843 39.4402L22.0986 36.7011C23.1372 35.6902 24.7789 35.5924 25.9348 36.4565L28.7826 38.5272C28.9669 38.6576 29.1344 38.6087 29.2182 38.5598C29.3019 38.5109 29.4527 38.413 29.4527 38.2011V10.4837C29.4527 9.75 29.637 9.04891 29.9553 8.44565H13.9572C10.2382 8.44565 8.51279 10.125 8.51279 13.7446V38.2011C8.51279 38.4293 8.66356 38.5272 8.74732 38.5761C8.84783 38.625 9.01535 38.6576 9.18287 38.5272L12.0474 36.4402C12.5668 36.0652 13.1866 35.8696 13.8064 35.8696Z" fill="#F5C400"/>
                    <path d="M24.0085 26.3988H18.983C18.2961 26.3988 17.7266 25.8444 17.7266 25.176C17.7266 24.5075 18.2961 23.9531 18.983 23.9531H24.0085C24.6954 23.9531 25.2649 24.5075 25.2649 25.176C25.2649 25.8444 24.6954 26.3988 24.0085 26.3988Z" fill="#F5C400"/>
                    <path d="M24.0085 19.8773H18.983C18.2961 19.8773 17.7266 19.3229 17.7266 18.6545C17.7266 17.986 18.2961 17.4316 18.983 17.4316H24.0085C24.6954 17.4316 25.2649 17.986 25.2649 18.6545C25.2649 19.3229 24.6954 19.8773 24.0085 19.8773Z" fill="#F5C400"/>
                    <path d="M13.9096 20.2863C12.9882 20.2863 12.2344 19.5526 12.2344 18.6558C12.2344 17.7591 12.9882 17.0254 13.9096 17.0254C14.8309 17.0254 15.5848 17.7591 15.5848 18.6558C15.5848 19.5526 14.8309 20.2863 13.9096 20.2863Z" fill="#F5C400"/>
                    <path d="M13.9096 26.8077C12.9882 26.8077 12.2344 26.074 12.2344 25.1773C12.2344 24.2806 12.9882 23.5469 13.9096 23.5469C14.8309 23.5469 15.5848 24.2806 15.5848 25.1773C15.5848 26.074 14.8309 26.8077 13.9096 26.8077Z" fill="#F5C400"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Pending Buyer Requests") }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                    12
                </h6>
            </div>
        </div>

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#DCFCE8] inline-flex items-center justify-center">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.22105 29.5182C9.67615 27.6527 11.7409 26.5 14 26.5H27C29.2591 26.5 31.3239 27.6527 32.7789 29.5182C34.2272 31.375 35 33.8296 35 36.3333V40.5C35 41.3284 34.3284 42 33.5 42C32.6716 42 32 41.3284 32 40.5V36.3333C32 34.4168 31.4032 32.6322 30.4134 31.3633C29.4306 30.1032 28.1888 29.5 27 29.5H14C12.8112 29.5 11.5694 30.1032 10.5866 31.3633C9.59684 32.6322 9 34.4168 9 36.3333V40.5C9 41.3284 8.32843 42 7.5 42C6.67157 42 6 41.3284 6 40.5V36.3333C6 33.8296 6.7728 31.375 8.22105 29.5182Z" fill="#22C55E"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M35.2737 28.0233C35.6836 27.3035 36.5995 27.0522 37.3194 27.4622C38.2088 27.9686 39.0097 28.6581 39.6883 29.496C41.1923 31.3528 41.9998 33.8151 41.9998 36.3327V40.4993C41.9998 41.3278 41.3282 41.9993 40.4998 41.9993C39.6714 41.9993 38.9998 41.3278 38.9998 40.4993V36.3327C38.9998 34.43 38.3849 32.6531 37.3572 31.3843C36.8981 30.8175 36.3791 30.379 35.8349 30.0691C35.115 29.6591 34.8637 28.7432 35.2737 28.0233Z" fill="#22C55E"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.2345 7.34218C29.4338 6.53809 30.2473 6.04786 31.0514 6.2472C34.7542 7.16519 37.5004 10.5089 37.5004 14.4977C37.5004 18.4866 34.7542 21.8303 31.0514 22.7483C30.2473 22.9476 29.4338 22.4574 29.2345 21.6533C29.0352 20.8492 29.5254 20.0358 30.3295 19.8364C32.7257 19.2424 34.5004 17.0754 34.5004 14.4977C34.5004 11.92 32.7257 9.75311 30.3295 9.15905C29.5254 8.95971 29.0352 8.14626 29.2345 7.34218Z" fill="#22C55E"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21 9C17.9624 9 15.5 11.4624 15.5 14.5C15.5 17.5376 17.9624 20 21 20C24.0376 20 26.5 17.5376 26.5 14.5C26.5 11.4624 24.0376 9 21 9ZM12.5 14.5C12.5 9.80558 16.3056 6 21 6C25.6944 6 29.5 9.80558 29.5 14.5C29.5 19.1944 25.6944 23 21 23C16.3056 23 12.5 19.1944 12.5 14.5Z" fill="#22C55E"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Active Agent Proposals") }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                    8
                </h6>
            </div>
        </div>

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#E6E0F4] inline-flex items-center justify-center">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.17188 30.1191V22.7109C7.17188 21.8825 7.84345 21.2109 8.67188 21.2109C9.5003 21.2109 10.1719 21.8825 10.1719 22.7109V30.1191C10.1719 33.6629 10.9148 35.7566 12.2109 37.0078C13.5204 38.2718 15.7242 38.998 19.4238 38.998H28.6367C32.3363 38.998 34.5402 38.2718 35.8496 37.0078C37.1458 35.7566 37.8887 33.6629 37.8887 30.1191V22.7109C37.8887 21.8826 38.5603 21.211 39.3887 21.2109C40.2171 21.2109 40.8887 21.8825 40.8887 22.7109V30.1191C40.8887 33.9835 40.0942 37.0801 37.9336 39.166C35.7859 41.2392 32.6121 41.998 28.6367 41.998H19.4238C15.4485 41.998 12.2747 41.2392 10.127 39.166C7.96642 37.0801 7.17188 33.9834 7.17188 30.1191Z" fill="#9881CB"/>
                    <path d="M28.0474 6L28.3287 6.02734C28.9683 6.14936 29.4711 6.67818 29.5396 7.34766L30.6666 18.3691L30.6939 18.7383C30.8773 22.5219 27.8853 25.4996 24.0474 25.5C20.0855 25.5 17.0231 22.3262 17.4263 18.3691V18.3672L18.5728 7.3457L18.6275 7.06836C18.8143 6.4452 19.3909 6.0004 20.0631 6H28.0474ZM20.4107 18.6777C20.2008 20.758 21.7545 22.5 24.0474 22.5C26.1978 22.4997 27.6972 20.9672 27.7017 19.0605L27.6822 18.6738L26.6939 9H21.4146L20.4107 18.6777Z" fill="#9881CB"/>
                    <path d="M33.1896 6L34.0646 6.02148C36.0633 6.12184 37.7529 6.59533 39.0392 7.74219C40.3173 8.88212 40.9773 10.4927 41.34 12.3945L41.4786 13.2266L41.4845 13.2832L41.963 17.8203L41.965 17.8242L41.9943 18.2207C42.196 22.2897 38.9829 25.5 34.8302 25.5C31.2865 25.4995 28.0586 22.7527 27.6818 19.2266V19.2207L26.4845 7.6543C26.4408 7.23193 26.579 6.81144 26.8634 6.49609C27.1478 6.18072 27.552 6 27.9767 6H33.1896ZM30.6661 18.9121H30.6642C30.8714 20.828 32.7358 22.4995 34.8302 22.5C37.4478 22.5 39.2236 20.5111 38.9806 18.1348L38.5079 13.6523L38.3888 12.9375C38.0877 11.3719 37.6264 10.5008 37.0431 9.98047C36.467 9.46681 35.5533 9.10093 33.9298 9.01758L33.1896 9H29.6407L30.6661 18.9121Z" fill="#9881CB"/>
                    <path d="M20.01 6L20.1682 6.00781C20.5339 6.04671 20.8745 6.22025 21.1233 6.49609C21.4074 6.81139 21.5458 7.23208 21.5022 7.6543L20.3049 19.2207C19.9475 22.7551 16.7127 25.5 13.1721 25.5C8.8854 25.5 5.60096 22.0791 6.03928 17.8242L6.50022 13.2891L6.50803 13.2266L6.6467 12.3945C7.00936 10.4926 7.66912 8.88211 8.94748 7.74219C10.4172 6.43178 12.4127 6.00009 14.7951 6H20.01ZM14.7951 9C12.6999 9.00009 11.6018 9.39359 10.9436 9.98047C10.2797 10.5724 9.77186 11.6179 9.48069 13.625L9.02365 18.1289C8.77854 20.5068 10.5532 22.5 13.1721 22.5C15.2708 22.5 17.1288 20.8245 17.3205 18.916V18.9121L18.3459 9H14.7951Z" fill="#9881CB"/>
                    <path d="M26.8125 36.375C26.8125 35.2409 26.5232 34.6669 26.2051 34.3594C25.8767 34.0424 25.2503 33.75 24.0391 33.75C22.8277 33.75 22.2014 34.0424 21.873 34.3594C21.5549 34.6669 21.2656 35.2408 21.2656 36.375V39H26.8125V36.375ZM29.8125 40.5C29.8125 41.3284 29.1409 41.9999 28.3125 42H19.7656C18.9372 42 18.2656 41.3284 18.2656 40.5V36.375C18.2656 34.7546 18.6864 33.2655 19.791 32.1992C20.8856 31.1432 22.3962 30.75 24.0391 30.75C25.6819 30.75 27.1925 31.1431 28.2871 32.1992C29.3917 33.2655 29.8125 34.7546 29.8125 36.375V40.5Z" fill="#9881CB"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Shops Under Review") }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                    24
                </h6>
            </div>
        </div>

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#FFF1F2] inline-flex items-center justify-center">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5796 8.98694C11.5681 10.2377 11 12.1608 11 14.75V33.25C11 35.8392 11.5681 37.7623 12.5796 39.0131C13.5462 40.2085 15.0888 41 17.5556 41H30.4444C32.9112 41 34.4538 40.2085 35.4204 39.0131C36.4319 37.7623 37 35.8392 37 33.25V14.75C37 12.1608 36.4319 10.2377 35.4204 8.98694C34.4538 7.79154 32.9112 7 30.4444 7H17.5556C15.0888 7 13.5462 7.79154 12.5796 8.98694ZM10.2468 7.10056C11.8982 5.05845 14.3834 4 17.5556 4H30.4444C33.6166 4 36.1018 5.05845 37.7532 7.10056C39.3598 9.08731 40 11.7892 40 14.75V33.25C40 36.2108 39.3598 38.9127 37.7532 40.8994C36.1018 42.9415 33.6166 44 30.4444 44H17.5556C14.3834 44 11.8982 42.9415 10.2468 40.8994C8.64022 38.9127 8 36.2108 8 33.25V14.75C8 11.7892 8.64022 9.08731 10.2468 7.10056Z" fill="#FA3957"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25 10C25.8284 10 26.5 10.6716 26.5 11.5V15.5C26.5 16.8716 27.6284 18 29 18H33C33.8284 18 34.5 18.6716 34.5 19.5C34.5 20.3284 33.8284 21 33 21H29C25.9716 21 23.5 18.5284 23.5 15.5V11.5C23.5 10.6716 24.1716 10 25 10Z" fill="#FA3957"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 28C14.5 27.1716 15.1716 26.5 16 26.5H24C24.8284 26.5 25.5 27.1716 25.5 28C25.5 28.8284 24.8284 29.5 24 29.5H16C15.1716 29.5 14.5 28.8284 14.5 28Z" fill="#FA3957"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 34C14.5 33.1716 15.1716 32.5 16 32.5H32C32.8284 32.5 33.5 33.1716 33.5 34C33.5 34.8284 32.8284 35.5 32 35.5H16C15.1716 35.5 14.5 34.8284 14.5 34Z" fill="#FA3957"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Documents Awaiting Approval") }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                    5
                </h6>
            </div>
        </div>

    </div>
    <div class="spacer my-6"></div>

    <div class="card-item bg-white p-4 rounded-2xl border border-slate-50">
        <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex justify-between gap-4 mb-4">
            {{ __("Requests & Proposals") }}

            <div class="relative">
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
        </h4>
        <div class="card-body">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">
                            <th>
                                {{ __("Title")}}
                            </th>
                            <th>
                                {{ __('Request Type')}}
                            </th>
                            <th>
                                {{ __('Requested By')}}
                            </th>
                            <th>
                                {{ __('Requested Shop')}}
                            </th>
                            <th>
                                {{ __('Due Date')}}
                            </th>
                            <th>
                                {{ __('Status')}}
                            </th>
                            <th class="!text-end">
                                {{ __('Action')}}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                            <td class="text-sm">
                                Confirm Buyer Payment Plan
                            </td>
                            <td class="text-sm font-medium text-pureblack">
                                Buyer Request
                            </td>
                            <td class="text-sm font-medium text-pureblack">
                                {{ __('Asif Chowdhury')}} <br> 
                                <span class="text-sm text-[#607085] font-normal">
                                    {{ __('Buyer')}}
                                </span>
                            </td>
                            <td class="text-sm font-medium text-pureblack">
                                Shop 101
                            </td>
                            <td class="text-sm font-medium text-pureblack">
                                {{ __("Jun 13, 2024") }}
                            </td>
                            <td class=" text-sm">
                                <span class="text-yellow-600 bg-[#FFFEC2] inline-block px-2 py-1 rounded-full text-xs font-medium">
                                    {{ __('Pending')}}
                                </span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="text-sm font-semibold text-gunmetal border border-slate-500 rounded-md py-2 px-4 inline-flex items-center gap-2 transition-all hover:bg-gunmetal hover:text-white hover:border-gunmetal">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.34375 15.2025L15.2025 5.34375" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.2578 17.1775L12.2478 16.1875" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13.4766 14.96L15.4483 12.9883" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5.07105 10.546L10.549 5.06797C12.298 3.31897 13.1725 3.31072 14.905 5.04322L18.9558 9.09397C20.6883 10.8265 20.68 11.701 18.931 13.45L13.453 18.928C11.704 20.677 10.8295 20.6852 9.09705 18.9527L5.0463 14.902C3.3138 13.1695 3.3138 12.3032 5.07105 10.546Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.75 20.25H20.25" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Review Payment
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    @push("scripts")
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


    @endpush
</x-app-layout>
