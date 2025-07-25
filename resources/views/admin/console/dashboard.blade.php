<x-app-layout>

    <div class="mb-6">
        <h4 class="font-semibold text-pureblack text-2xl">
            @php
            $user = auth('admin')->user();
            $full_name = str($user->profile?->first_name . ' ' . $user->profile?->last_name)->title()->trim()->toString();
            @endphp
            Hi, @if($user->profile) {{ $full_name }} @else {{ $user->username }} @endif
        </h4>
        <p>
            {{ __('Welcome back to Authorized Sales Agent Management System. Overview of your property details at a glance.')}}
        </p>
    </div>

    <!-- States Cards -->
    <div class="states grid gap-4 xl:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mb-6 *:shadow-sm *:p-4 *:rounded-xl *:flex *:items-center *:gap-5">

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#E1E5EA] inline-flex items-center justify-center">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30 14.1402C30 12.8002 29.34 11.5602 28.22 10.8202L20.22 5.48018C18.88 4.58018 17.12 4.58018 15.78 5.48018L7.78 10.8202C6.68 11.5602 6 12.8002 6 14.1402V25.5002C6 26.0602 6.44 26.5002 7 26.5002H29C29.56 26.5002 30 26.0602 30 25.5002V14.1402ZM18 21.5002C16.08 21.5002 14.5 19.9202 14.5 18.0002C14.5 16.0802 16.08 14.5002 18 14.5002C19.92 14.5002 21.5 16.0802 21.5 18.0002C21.5 19.9202 19.92 21.5002 18 21.5002Z" fill="#4B5768"/>
                    <path d="M44 42.5002H41.46V36.5002C43.36 35.8802 44.74 34.1002 44.74 32.0002V28.0002C44.74 25.3802 42.6 23.2402 39.98 23.2402C37.36 23.2402 35.22 25.3802 35.22 28.0002V32.0002C35.22 34.0802 36.58 35.8402 38.44 36.4802V42.5002H30V30.5002C30 29.9402 29.56 29.5002 29 29.5002H7C6.44 29.5002 6 29.9402 6 30.5002V42.5002H4C3.18 42.5002 2.5 43.1802 2.5 44.0002C2.5 44.8202 3.18 45.5002 4 45.5002H39.86C39.9 45.5002 39.92 45.5202 39.96 45.5202C40 45.5202 40.02 45.5002 40.06 45.5002H44C44.82 45.5002 45.5 44.8202 45.5 44.0002C45.5 43.1802 44.82 42.5002 44 42.5002ZM16.5 36.5002C16.5 35.6802 17.18 35.0002 18 35.0002C18.82 35.0002 19.5 35.6802 19.5 36.5002V42.5002H16.5V36.5002Z" fill="#4B5768"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Total Properties") }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                    {{ $cardCountData->property }}
                </h6>
            </div>
        </div>

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#FFF0F1] inline-flex items-center justify-center">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.75717 29.5182C10.5635 27.6527 13.1267 26.5 15.931 26.5H32.069C34.8733 26.5 37.4365 27.6527 39.2428 29.5182C41.0407 31.375 42 33.8296 42 36.3333V40.5C42 41.3284 41.1663 42 40.1379 42H7.86207C6.83368 42 6 41.3284 6 40.5V36.3333C6 33.8296 6.95934 31.375 8.75717 29.5182Z" fill="#FF697C"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 14.5C15.5 9.80558 19.3056 6 24 6C28.6944 6 32.5 9.80558 32.5 14.5C32.5 19.1944 28.6944 23 24 23C19.3056 23 15.5 19.1944 15.5 14.5Z" fill="#FF697C"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Registered Users") }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                    {{ array_sum([$cardCountData->employee, $cardCountData->agent, $cardCountData->buyer]) }}
                </h6>
            </div>
        </div>

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#E6E0F4] inline-flex items-center justify-center">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.22105 29.5182C9.67615 27.6527 11.7409 26.5 14 26.5H27C29.2591 26.5 31.3239 27.6527 32.7789 29.5182C34.2272 31.375 35 33.8296 35 36.3333V40.5C35 41.3284 34.3284 42 33.5 42H7.5C6.67157 42 6 41.3284 6 40.5V36.3333C6 33.8296 6.7728 31.375 8.22105 29.5182Z" fill="#9881CB"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M33.9995 26.9987C34.4754 26.5046 36.3441 26.898 37.3188 27.46C38.2082 27.9665 39.0091 28.656 39.6878 29.4938C41.1917 31.3506 41.9992 33.8129 41.9992 36.3305V40.4972C41.9992 41.3256 41.3276 41.9972 40.4992 41.9972H38.4994C38.0901 41.9972 37.6986 41.8299 37.4156 41.5342C37.1327 41.2385 36.9828 40.84 37.0009 40.4311L37.0019 40.4056L37.0052 40.326C37.0079 40.256 37.0117 40.1532 37.016 40.0246C37.0246 39.767 37.0349 39.4069 37.0417 38.9975C37.0556 38.1667 37.0544 37.1783 37.003 36.434C36.9694 35.9484 36.9469 35.5169 36.9263 35.1235C36.8411 33.4934 36.79 32.5163 36.1316 31.0537C36.0108 30.7852 35.8115 30.4205 35.6238 30.0949C35.5334 29.9383 35.4518 29.8014 35.393 29.7038L35.3244 29.5908L35.3067 29.562L35.3026 29.5553C34.941 28.9723 33.5995 27.7478 33.9995 26.9987Z" fill="#9881CB"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.4942 6.79816C29.8563 6.31955 30.4689 6.10285 31.0514 6.24727C34.7542 7.16526 37.5004 10.509 37.5004 14.4978C37.5004 18.4867 34.7542 21.8304 31.0514 22.7484C30.4689 22.8928 29.8563 22.6761 29.4942 22.1975C29.1323 21.719 29.0902 21.071 29.3872 20.5498L29.3907 20.5436L29.4064 20.5155C29.4209 20.4896 29.4431 20.4494 29.4721 20.3962C29.53 20.2898 29.6144 20.1319 29.7164 19.9328C29.9211 19.5334 30.1937 18.9743 30.4652 18.337C31.0335 17.0029 31.5 15.5449 31.5 14.4978C31.5 13.4507 31.0335 11.9928 30.4652 10.6586C30.1937 10.0213 29.9211 9.46225 29.7164 9.06286C29.6144 8.86375 29.53 8.70584 29.4721 8.59942C29.4431 8.54624 29.4209 8.50603 29.4064 8.48008L29.3907 8.45205L29.3875 8.44644C29.0904 7.9252 29.1322 7.27667 29.4942 6.79816Z" fill="#9881CB"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 14.5C12.5 9.80558 16.3056 6 21 6C25.6944 6 29.5 9.80558 29.5 14.5C29.5 19.1944 25.6944 23 21 23C16.3056 23 12.5 19.1944 12.5 14.5Z" fill="#9881CB"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Total Agents") }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                    {{ $cardCountData->agent }}
                </h6>
            </div>
        </div>

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#DCFCE8] inline-flex items-center justify-center">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.89618 26.7123L11.1397 25.6539C13.3502 23.7724 16.7023 23.9587 18.6781 26.0729L23.5335 31.2682C25.0959 32.9401 23.1005 38.4696 21.9641 40.4368C21.9641 40.4368 22.9624 43.2673 25.9571 41.3145L35.3545 35.1085C35.8602 34.8134 36.128 33.9998 35.9395 33.5029L25.7895 19.8961C25.3426 19.2876 24.5473 19.023 23.8109 19.2379L19.3453 20.5411C17.4459 21.0953 15.3869 20.5904 13.9847 19.2264L13.4586 18.7147C12.438 17.7219 12.6035 15.9269 12.6035 15.0974V12.103C12.6035 11.8269 12.3797 11.6031 12.1036 11.603L7.00024 11.6018C6.44786 11.6017 6 12.0494 6 12.6018V26.5933C6 26.6715 6.01834 26.7486 6.05355 26.8185L6.90811 28.5131C7.05559 28.8056 7.43976 28.8797 7.68537 28.6629L9.89618 26.7123Z" fill="#16A34A"/>
                    <path d="M29.6446 6.8397C27.999 5.70015 25.999 5.70015 23.7501 6.90206L16.4495 11.7039C16.1683 11.8888 15.999 12.2028 15.999 12.5393V16.1112C15.999 16.2485 16.0555 16.3797 16.1551 16.4741L16.552 16.8503C17.0202 17.3159 17.7078 17.4883 18.342 17.2991L22.8155 15.9645C25.0285 15.3043 27.4187 16.1172 28.7615 17.9868L37.999 31.0005H40.999C41.5513 31.0005 41.999 30.5528 41.999 30.0005V14.0005C41.999 12.0005 40.1999 11.5729 40.1999 11.5729C39.5152 11.5729 37.7885 11.5729 37.124 11.5729L29.6446 6.8397Z" fill="#16A34A"/>
                    <path d="M13.527 28.6583L8.45364 32.8234C8.21537 33.019 8.20916 33.3815 8.44059 33.5852L17.5285 41.5825C17.7694 41.7945 18.145 41.7278 18.2982 41.4457L21.1391 36.2142C21.5261 35.5407 21.4329 34.696 20.9082 34.122L16.0442 28.8013C15.3845 28.0795 14.2651 28.016 13.527 28.6583Z" fill="#16A34A"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Total Buyers") }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                    {{ $cardCountData->buyer }}
                </h6>
            </div>
        </div>

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#FBD9CD] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.9706 14.9668L34.5526 11.034C33.9471 6.74631 31.972 5 27.748 5H24.3458H22.2122H17.8296H15.696H12.2361C7.99765 5 6.03702 6.74631 5.41712 11.0766L5.02788 14.981C4.88371 16.5001 5.30179 17.9767 6.21002 19.1267C7.30566 20.5322 8.99237 21.3273 10.8665 21.3273C12.683 21.3273 14.4273 20.4329 15.523 18.9989C16.5033 20.4329 18.1756 21.3273 20.0353 21.3273C21.895 21.3273 23.5241 20.4754 24.5188 19.0557C25.6288 20.4613 27.3444 21.3273 29.132 21.3273C31.0494 21.3273 32.7793 20.4896 33.8606 19.0131C34.7256 17.8773 35.1148 16.4433 34.9706 14.9668Z" fill="#E4764F"/>
                    <path d="M19.0986 26.8791C17.2678 27.0637 15.8838 28.5971 15.8838 30.4144V34.3045C15.8838 34.6879 16.2009 35.0002 16.5902 35.0002H23.4668C23.856 35.0002 24.1732 34.6879 24.1732 34.3045V30.9113C24.1876 27.944 22.4144 26.5384 19.0986 26.8791Z" fill="#E4764F"/>
                    <path d="M33.5446 23.6675V27.8984C33.5446 31.8169 30.3153 34.9972 26.3364 34.9972C25.9471 34.9972 25.63 34.6849 25.63 34.3015V30.9083C25.63 29.091 25.0677 27.6712 23.9721 26.7058C23.0062 25.8397 21.6943 25.4138 20.0653 25.4138C19.7049 25.4138 19.3445 25.428 18.9552 25.4706C16.3891 25.7261 14.4429 27.8558 14.4429 30.4114V34.3015C14.4429 34.6849 14.1257 34.9972 13.7365 34.9972C9.75758 34.9972 6.52832 31.8169 6.52832 27.8984V23.6959C6.52832 22.702 7.52305 22.0347 8.46011 22.3613C8.84935 22.4891 9.23859 22.5884 9.64225 22.6452C9.81525 22.6736 10.0027 22.702 10.1757 22.702C10.4063 22.7304 10.637 22.7446 10.8676 22.7446C12.5399 22.7446 14.1834 22.1341 15.4809 21.0835C16.7207 22.1341 18.3353 22.7446 20.0364 22.7446C21.752 22.7446 23.3378 22.1625 24.5776 21.1119C25.8751 22.1483 27.4897 22.7446 29.1332 22.7446C29.3926 22.7446 29.6521 22.7304 29.8972 22.702C30.0702 22.6878 30.2288 22.6736 30.3874 22.6452C30.8343 22.5884 31.2379 22.4607 31.6416 22.3329C32.5787 22.0205 33.5446 22.702 33.5446 23.6675Z" fill="#E4764F"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Total Floors") }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                    {{ $cardCountData->floor }}
                </h6>
            </div>
        </div>

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#E1E5EA] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.1619 5H10.2025C6.79126 5 5 6.79126 5 10.1869V13.1464C5 16.542 6.79126 18.3332 10.1869 18.3332H13.1464C16.542 18.3332 18.3332 16.542 18.3332 13.1464V10.1869C18.3488 6.79126 16.5575 5 13.1619 5Z" fill="#4B5768"/>
                    <path d="M29.8134 5H26.8539C23.4583 5 21.667 6.79128 21.667 10.1869V13.1464C21.667 16.5421 23.4583 18.3333 26.8539 18.3333H29.8134C33.209 18.3333 35.0003 16.5421 35.0003 13.1464V10.1869C35.0003 6.79128 33.209 5 29.8134 5Z" fill="#4B5768"/>
                    <path d="M29.8134 21.6665H26.8539C23.4583 21.6665 21.667 23.4578 21.667 26.8534V29.8129C21.667 33.2086 23.4583 34.9998 26.8539 34.9998H29.8134C33.209 34.9998 35.0003 33.2086 35.0003 29.8129V26.8534C35.0003 23.4578 33.209 21.6665 29.8134 21.6665Z" fill="#4B5768"/>
                    <path d="M13.1619 21.6665H10.2025C6.79126 21.6665 5 23.4557 5 26.8474V29.8034C5 33.2107 6.79126 34.9998 10.1869 34.9998H13.1464C16.542 34.9998 18.3332 33.2107 18.3332 29.819V26.8629C18.3488 23.4557 16.5575 21.6665 13.1619 21.6665Z" fill="#4B5768"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Total Blocks") }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                    {{ $cardCountData->block }}
                </h6>
            </div>
        </div>

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#FFF0F1] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.9706 14.9668L34.5526 11.034C33.9471 6.74631 31.972 5 27.748 5H24.3458H22.2122H17.8296H15.696H12.2361C7.99765 5 6.03702 6.74631 5.41712 11.0766L5.02788 14.981C4.88371 16.5001 5.30179 17.9767 6.21002 19.1267C7.30566 20.5322 8.99237 21.3273 10.8665 21.3273C12.683 21.3273 14.4273 20.4329 15.523 18.9989C16.5033 20.4329 18.1756 21.3273 20.0353 21.3273C21.895 21.3273 23.5241 20.4754 24.5188 19.0557C25.6288 20.4613 27.3444 21.3273 29.132 21.3273C31.0494 21.3273 32.7793 20.4896 33.8606 19.0131C34.7256 17.8773 35.1148 16.4433 34.9706 14.9668Z" fill="#FF697C"/>
                    <path d="M19.0986 26.8791C17.2678 27.0637 15.8838 28.5971 15.8838 30.4144V34.3045C15.8838 34.6879 16.2009 35.0002 16.5902 35.0002H23.4668C23.856 35.0002 24.1732 34.6879 24.1732 34.3045V30.9113C24.1876 27.944 22.4144 26.5384 19.0986 26.8791Z" fill="#FF697C"/>
                    <path d="M33.5446 23.6675V27.8984C33.5446 31.8169 30.3153 34.9972 26.3364 34.9972C25.9471 34.9972 25.63 34.6849 25.63 34.3015V30.9083C25.63 29.091 25.0677 27.6712 23.9721 26.7058C23.0062 25.8397 21.6943 25.4138 20.0653 25.4138C19.7049 25.4138 19.3445 25.428 18.9552 25.4706C16.3891 25.7261 14.4429 27.8558 14.4429 30.4114V34.3015C14.4429 34.6849 14.1257 34.9972 13.7365 34.9972C9.75758 34.9972 6.52832 31.8169 6.52832 27.8984V23.6959C6.52832 22.702 7.52305 22.0347 8.46011 22.3613C8.84935 22.4891 9.23859 22.5884 9.64225 22.6452C9.81525 22.6736 10.0027 22.702 10.1757 22.702C10.4063 22.7304 10.637 22.7446 10.8676 22.7446C12.5399 22.7446 14.1834 22.1341 15.4809 21.0835C16.7207 22.1341 18.3353 22.7446 20.0364 22.7446C21.752 22.7446 23.3378 22.1625 24.5776 21.1119C25.8751 22.1483 27.4897 22.7446 29.1332 22.7446C29.3926 22.7446 29.6521 22.7304 29.8972 22.702C30.0702 22.6878 30.2288 22.6736 30.3874 22.6452C30.8343 22.5884 31.2379 22.4607 31.6416 22.3329C32.5787 22.0205 33.5446 22.702 33.5446 23.6675Z" fill="#FF697C"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Total Shops") }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                    {{ $cardCountData->shop }}
                </h6>
            </div>
        </div>

        <div class="card">
            <div class="icon w-16 h-16 2xl:w-20 2xl:h-20 rounded-full bg-[#DCFCE8] inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.9706 14.9668L34.5526 11.034C33.9471 6.74631 31.972 5 27.748 5H24.3458H22.2122H17.8296H15.696H12.2361C7.99765 5 6.03702 6.74631 5.41712 11.0766L5.02788 14.981C4.88371 16.5001 5.30179 17.9767 6.21002 19.1267C7.30566 20.5322 8.99237 21.3273 10.8665 21.3273C12.683 21.3273 14.4273 20.4329 15.523 18.9989C16.5033 20.4329 18.1756 21.3273 20.0353 21.3273C21.895 21.3273 23.5241 20.4754 24.5188 19.0557C25.6288 20.4613 27.3444 21.3273 29.132 21.3273C31.0494 21.3273 32.7793 20.4896 33.8606 19.0131C34.7256 17.8773 35.1148 16.4433 34.9706 14.9668Z" fill="#16A34A"/>
                    <path d="M19.0986 26.8791C17.2678 27.0637 15.8838 28.5971 15.8838 30.4144V34.3045C15.8838 34.6879 16.2009 35.0002 16.5902 35.0002H23.4668C23.856 35.0002 24.1732 34.6879 24.1732 34.3045V30.9113C24.1876 27.944 22.4144 26.5384 19.0986 26.8791Z" fill="#16A34A"/>
                    <path d="M33.5446 23.6675V27.8984C33.5446 31.8169 30.3153 34.9972 26.3364 34.9972C25.9471 34.9972 25.63 34.6849 25.63 34.3015V30.9083C25.63 29.091 25.0677 27.6712 23.9721 26.7058C23.0062 25.8397 21.6943 25.4138 20.0653 25.4138C19.7049 25.4138 19.3445 25.428 18.9552 25.4706C16.3891 25.7261 14.4429 27.8558 14.4429 30.4114V34.3015C14.4429 34.6849 14.1257 34.9972 13.7365 34.9972C9.75758 34.9972 6.52832 31.8169 6.52832 27.8984V23.6959C6.52832 22.702 7.52305 22.0347 8.46011 22.3613C8.84935 22.4891 9.23859 22.5884 9.64225 22.6452C9.81525 22.6736 10.0027 22.702 10.1757 22.702C10.4063 22.7304 10.637 22.7446 10.8676 22.7446C12.5399 22.7446 14.1834 22.1341 15.4809 21.0835C16.7207 22.1341 18.3353 22.7446 20.0364 22.7446C21.752 22.7446 23.3378 22.1625 24.5776 21.1119C25.8751 22.1483 27.4897 22.7446 29.1332 22.7446C29.3926 22.7446 29.6521 22.7304 29.8972 22.702C30.0702 22.6878 30.2288 22.6736 30.3874 22.6452C30.8343 22.5884 31.2379 22.4607 31.6416 22.3329C32.5787 22.0205 33.5446 22.702 33.5446 23.6675Z" fill="#16A34A"/>
                </svg>
            </div>
            <div class="info space-y-1">
                <p>
                    {{ __("Total Shop Sold") }}
                </p>
                <h6 class="font-semibold text-pureblack text-2xl 2xl:text-4xl">
                    0
                </h6>
            </div>
        </div>
    </div>

    <!-- Charts Card -->
    <div class="chart_cards grid grid-cols-1 lg:grid-cols-2 gap-6 items-start">
        <div class="card-item bg-white p-4 rounded-2xl border border-slate-50">
            <h4 class="card-title font-semibold text-pureblack text- xl flex items-center justify-between gap-4">
                {{ __("Daily Property Listing Trends") }}
                <div class="dropdown relative">
                    <button type="button" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                    </button>
                    <ul class="dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                    shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none [&_a]:text-slate-600 [&_a]:dark:text-white [&_a]:block [&_a]:font-Inter [&_a]:font-normal [&_a]:px-4 [&_a]:py-2">
                        <li>
                            <a href="#" class="hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                {{ __('Last 28 Days')}}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                {{ __('Last Month')}}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                {{ __('Last Year')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </h4>
            <div class="card-body">
                <div id="areaChart__1"></div>
            </div>
        </div>
        <div class="card-item bg-white p-4 rounded-2xl border border-slate-50">
            <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex items-center justify-between gap-4">
                {{ __("Property Type Distribution") }}
                <div class="dropdown relative">
                    <button type="button" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                    </button>
                    <ul class="dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                    shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none [&_a]:text-slate-600 [&_a]:dark:text-white [&_a]:block [&_a]:font-Inter [&_a]:font-normal [&_a]:px-4 [&_a]:py-2">
                        <li>
                            <a href="#" class="hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                {{ __('Last 28 Days')}}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                {{ __('Last Month')}}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                {{ __('Last Year')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </h4>
            <div class="card-body">
                <div id="barChart__1"></div>
            </div>
        </div>
        <div class="card-item bg-white p-4 rounded-2xl border border-slate-50">
            <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex items-center justify-between gap-4 mb-2">
                {{ __("Top Performing Agents") }}
                <a href="#">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.75 10.25L14 2" stroke="#4B5768" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M10.75 1.33008H14.42C14.5581 1.33008 14.67 1.44201 14.67 1.58008V5.25008" stroke="#4B5768" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M7.99967 1.3335H5.99967C2.66634 1.3335 1.33301 2.66683 1.33301 6.00016V10.0002C1.33301 13.3335 2.66634 14.6668 5.99967 14.6668H9.99967C13.333 14.6668 14.6663 13.3335 14.6663 10.0002V8.00016" stroke="#4B5768" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </h4>
            <div class="card-body divide-y">

                <div class="agent-item flex items-center justify-between px-2 py-4">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('/images/agents/1.png') }}"
                            class="w-10 h-10 object-cover rounded-full"
                            alt="{{ __('James Milner') }}">
                        <div class="">
                            <h6 class="font-semibold text-pureblack text-base">
                                {{ __('James Milner')}}
                            </h6>
                            <p class="text-xs text-[#607085]">
                                {{ __('100% Success Rate')}}
                            </p>
                        </div>
                    </div>
                    <div class="progressbar bg-slate-200 rounded-full w-24 overflow-hidden">
                        <div class="progress h-2 bg-green-500 rounded-full" style="width: 100%;"></div>
                    </div>
                </div>

                <div class="agent-item flex items-center justify-between px-2 py-4">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('/images/agents/2.png') }}"
                            class="w-10 h-10 object-cover rounded-full"
                            alt="{{ __('Emilia Foxr') }}">
                        <div class="">
                            <h6 class="font-semibold text-pureblack text-base">
                                {{ __('Emilia Foxr')}}
                            </h6>
                            <p class="text-xs text-[#607085]">
                                {{ __('70% Success Rate')}}
                            </p>
                        </div>
                    </div>
                    <div class="progressbar bg-slate-200 rounded-full w-24 overflow-hidden">
                        <div class="progress h-2 bg-yellow-400 rounded-full" style="width: 70%;"></div>
                    </div>
                </div>

                <div class="agent-item flex items-center justify-between px-2 py-4">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('/images/agents/3.png') }}"
                            class="w-10 h-10 object-cover rounded-full"
                            alt="{{ __('Emilia Foxr') }}">
                        <div class="">
                            <h6 class="font-semibold text-pureblack text-base">
                                {{ __('Emilia Foxr')}}
                            </h6>
                            <p class="text-xs text-[#607085]">
                                {{ __('60% Success Rate')}}
                            </p>
                        </div>
                    </div>
                    <div class="progressbar bg-slate-200 rounded-full w-24 overflow-hidden">
                        <div class="progress h-2 bg-yellow-400 rounded-full" style="width: 60%;"></div>
                    </div>
                </div>

                <div class="agent-item flex items-center justify-between px-2 py-4">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('/images/agents/4.png') }}"
                            class="w-10 h-10 object-cover rounded-full"
                            alt="{{ __('Emilia Foxr') }}">
                        <div class="">
                            <h6 class="font-semibold text-pureblack text-base">
                                {{ __('Emilia Foxr')}}
                            </h6>
                            <p class="text-xs text-[#607085]">
                                {{ __('30% Success Rate')}}
                            </p>
                        </div>
                    </div>
                    <div class="progressbar bg-slate-200 rounded-full w-24 overflow-hidden">
                        <div class="progress h-2 bg-gray-400 rounded-full" style="width: 30%;"></div>
                    </div>
                </div>

                <div class="agent-item flex items-center justify-between px-2 py-4">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('/images/agents/5.png') }}"
                            class="w-10 h-10 object-cover rounded-full"
                            alt="{{ __('Emilia Foxr') }}">
                        <div class="">
                            <h6 class="font-semibold text-pureblack text-base">
                                {{ __('Emilia Foxr')}}
                            </h6>
                            <p class="text-xs text-[#607085]">
                                {{ __('20% Success Rate')}}
                            </p>
                        </div>
                    </div>
                    <div class="progressbar bg-slate-200 rounded-full w-24 overflow-hidden">
                        <div class="progress h-2 bg-gray-400 rounded-full" style="width: 20%;"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-item bg-white p-4 rounded-2xl border border-slate-50">
            <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex items-center justify-between gap-4 mb-4">
                {{ __("Property Search By Locations") }}
                <div class="dropdown relative">
                    <button type="button" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                    </button>
                    <ul class="dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                    shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none [&_a]:text-slate-600 [&_a]:dark:text-white [&_a]:block [&_a]:font-Inter [&_a]:font-normal [&_a]:px-4 [&_a]:py-2">
                        <li>
                            <a href="#" class="hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                {{ __('Last 28 Days')}}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                {{ __('Last Month')}}
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                {{ __('Last Year')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </h4>
            <div class="card-body flex gap-4">
                <div class="flex-[0_0_200px]">
                    <table class="w-full [&_td]:py-4">
                        <tbody>
                            <tr>
                                <td class="font-medium text-gunmetal">
                                    {{ __('Dhaka')}}
                                </td>
                                <td>
                                    {{ __('354')}}
                                </td>
                            </tr>
                            <tr>
                                <td class="font-medium text-gunmetal">
                                    {{ __('Chittagong')}}
                                </td>
                                <td>
                                    {{ __('241')}}
                                </td>
                            </tr>
                            <tr>
                                <td class="font-medium text-gunmetal">
                                    {{ __('Rajshahi')}}
                                </td>
                                <td>
                                    {{ __('220')}}
                                </td>
                            </tr>
                            <tr>
                                <td class="font-medium text-gunmetal">
                                    {{ __('Barisal')}}
                                </td>
                                <td>
                                    {{ __('201')}}
                                </td>
                            </tr>
                            <tr>
                                <td class="font-medium text-gunmetal">
                                    {{ __('Khulna')}}
                                </td>
                                <td>
                                    {{ __('182')}}
                                </td>
                            </tr>
                            <tr>
                                <td class="font-medium text-gunmetal">
                                    {{ __('Sylhet')}}
                                </td>
                                <td>
                                    {{ __('110')}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="" class="flex-1 text-center">
                    <img src="{{ asset('/images/bangladesh-map.svg')}}" class="mx-auto" alt="">
                </div>
            </div>
        </div>
        <div class="card-item bg-white p-4 rounded-2xl border border-slate-50">
            <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex justify-between gap-4 mb-4">
                {{ __("Recent Added Properties") }}
                <a href="#" class="text-themered inline-flex items-center gap-1 text-base">
                    {{ __('Report')}}
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
                                    {{ __('Property Name')}}
                                </th>
                                <th>
                                    {{ __('Address')}}
                                </th>
                                <th>
                                    {{ __('Date Added')}}
                                </th>
                                <th>
                                    {{ __('Actions')}}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($recentProperties as $property)
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ $property?->name }}
                                </td>
                                <td class="text-sm">
                                    <p title="{{ $property?->addresses?->first()?->full_address }}">
                                        {{ str($property?->addresses?->first()?->full_address)->limit(20) }}
                                    </p>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{  $property?->created_at->format('Y-m-d') }} <br>
                                    <span class="text-sm text-[#607085] font-normal">
                                        {{ $property?->created_at->format('h:i A') }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route("admin.console.property.show", $property?->id)  }}" target="_blank" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-item bg-white p-4 rounded-2xl border border-slate-50">
            <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex justify-between gap-4 mb-4">
                {{ __("New Registered Agents") }}
                <a href="#" class="text-themered inline-flex items-center gap-1 text-base">
                    {{ __('Report')}}
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
                                    {{ __('User ID')}}
                                </th>
                                <th>
                                    {{ __('Name')}}
                                </th>
                                <th>
                                    {{ __('Email Address')}}
                                </th>
                                <th>
                                    {{ __('Phone No.')}}
                                </th>
                                <th>
                                    {{ __('Actions')}}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($recentAgents as $agent)
                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">
                                <td class="text-sm font-medium text-pureblack">
                                    {{ $agent->username }}
                                </td>
                                <td class="text-sm">
                                    <div class="flex items-center gap-2 font-medium min-w-max">
                                        <img src="{{ authAvatar($agent->profile ?? $agent->username) }}"
                                            class="w-10 h-10 object-cover rounded-full"
                                            alt="{{ $agent->username }}">
                                        <div class="whitespace-nowrap">
                                            <h6 class="text-sm font-medium text-pureblack">
                                                {{ $agent->profile ? $agent->profile?->first_name . ' ' . $agent->profile?->last_name : $agent->username }}
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ $agent->email }}
                                </td>
                                <td class="text-sm font-medium text-pureblack">
                                    {{ $agent->phone }}
                                </td>
                                <td>
                                    <a href="{{  route("admin.agent.show", $agent->id)  }}" target="_blank" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr class="border border-slate-100 dark:border-slate-900 relative">
                                <td class="table-cell text-center" colspan="5">
                                    <img src="{{ asset("images/result-not-found.svg") }}" alt="page not found" class="w-64 m-auto" />
                                    <h2 class="text-xl text-slate-700 mb-8 -mt-4">{{ __('No results found.') }}</h2>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

{{--        <div class="card-item bg-white p-4 rounded-2xl border border-slate-50">--}}
{{--            <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex justify-between gap-4 mb-4">--}}
{{--                {{ __("Latest Buyer Requests") }}--}}
{{--                <a href="#" class="text-themered inline-flex items-center gap-1 text-base">--}}
{{--                    {{ __('Report')}}--}}
{{--                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path d="M3.75 7.82807C5.28168 4.82158 8.41036 2.75 11.9994 2.75C17.0869 2.75 21.2494 6.9125 21.2494 12C21.2494 17.0875 17.0869 21.25 11.9994 21.25C8.41036 21.25 5.28168 19.1784 3.75 16.1719" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                        <path d="M2.75 12H16.75L12.75 16M12.75 8L14.25 9.5" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                    </svg>--}}
{{--                </a>--}}
{{--            </h4>--}}
{{--            <div class="card-body">--}}
{{--                <div class="overflow-x-auto">--}}
{{--                    <table class="w-full">--}}
{{--                        <thead>--}}
{{--                            <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">--}}
{{--                                <th>--}}
{{--                                    {{ __('Request ID')}}--}}
{{--                                </th>--}}
{{--                                <th>--}}
{{--                                    {{ __('Buyer Name')}}--}}
{{--                                </th>--}}
{{--                                <th>--}}
{{--                                    {{ __('Property Interested')}}--}}
{{--                                </th>--}}
{{--                                <th>--}}
{{--                                    {{ __('Type')}}--}}
{{--                                </th>--}}
{{--                                <th>--}}
{{--                                    {{ __('Status')}}--}}
{{--                                </th>--}}
{{--                                <th>--}}
{{--                                    {{ __('Actions')}}--}}
{{--                                </th>--}}
{{--                            </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('BRQ-2101')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm">--}}
{{--                                    <div class="inline-flex items-center gap-2 font-medium min-w-max">--}}
{{--                                        <img src="{{ asset('/images/buyer/1.png') }}"--}}
{{--                                            class="w-10 h-10 object-cover rounded-full"--}}
{{--                                            alt="{{ __('David Warner')}}">--}}
{{--                                        <span class="text-sm font-medium text-pureblack">{{ __('David Warner')}}</span>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Commercial Plot,')}} <br> <span class="text-sm text-[#607085] font-normal">{{ __('Tejgaon')}}</span>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Buy')}}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <span class="text-green-500 bg-[#F0FDF5] inline-block px-2 py-1 rounded-full text-xs font-medium">--}}
{{--                                        {{ __('Approved')}}--}}
{{--                                    </span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">--}}
{{--                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('BRQ-2101')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm">--}}
{{--                                    <div class="inline-flex items-center gap-2 font-medium min-w-max">--}}
{{--                                        <img src="{{ asset('/images/buyer/1.png') }}"--}}
{{--                                            class="w-10 h-10 object-cover rounded-full"--}}
{{--                                            alt="{{ __('David Warner')}}">--}}
{{--                                        <span class="text-sm font-medium text-pureblack">{{ __('David Warner')}}</span>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Shop Space,')}} <br> <span class="text-sm text-[#607085] font-normal">{{ __('Dhanmondi')}}</span>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Rent')}}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <span class="text-yellow-500 bg-[#FFFEEB] inline-block px-2 py-1 rounded-full text-xs font-medium">--}}
{{--                                        {{ __('Pending')}}--}}
{{--                                    </span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">--}}
{{--                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('BRQ-2101')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm">--}}
{{--                                    <div class="inline-flex items-center gap-2 font-medium min-w-max">--}}
{{--                                        <img src="{{ asset('/images/buyer/1.png') }}"--}}
{{--                                            class="w-10 h-10 object-cover rounded-full"--}}
{{--                                            alt="{{ __('David Warner')}}">--}}
{{--                                        <span class="text-sm font-medium text-pureblack">{{ __('David Warner')}}</span>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Office Floor,')}} <br> <span class="text-sm text-[#607085] font-normal">{{ __('Gulshan-2')}}</span>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Buy')}}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <span class="text-green-500 bg-[#F0FDF5] inline-block px-2 py-1 rounded-full text-xs font-medium">--}}
{{--                                        {{ __('Approved')}}--}}
{{--                                    </span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">--}}
{{--                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('BRQ-2101')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm">--}}
{{--                                    <div class="inline-flex items-center gap-2 font-medium min-w-max">--}}
{{--                                        <img src="{{ asset('/images/buyer/1.png') }}"--}}
{{--                                            class="w-10 h-10 object-cover rounded-full"--}}
{{--                                            alt="{{ __('David Warner')}}">--}}
{{--                                        <span class="text-sm font-medium text-pureblack">{{ __('David Warner')}}</span>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Warehouse,')}} <br> <span class="text-sm text-[#607085] font-normal">{{ __('Narayanganj')}}</span>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Rent')}}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <span class="text-red-500 bg-[#FFF1F2] inline-block px-2 py-1 rounded-full text-xs font-medium">--}}
{{--                                        {{ __('Declined')}}--}}
{{--                                    </span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">--}}
{{--                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('BRQ-2101')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm">--}}
{{--                                    <div class="inline-flex items-center gap-2 font-medium min-w-max">--}}
{{--                                        <img src="{{ asset('/images/buyer/1.png') }}"--}}
{{--                                            class="w-10 h-10 object-cover rounded-full"--}}
{{--                                            alt="{{ __('David Warner')}}">--}}
{{--                                        <span class="text-sm font-medium text-pureblack">{{ __('David Warner')}}</span>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Rooftop Space')}} <br> <span class="text-sm text-[#607085] font-normal">{{ __('Banani')}}</span>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Buy')}}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <span class="text-green-500 bg-[#F0FDF5] inline-block px-2 py-1 rounded-full text-xs font-medium">--}}
{{--                                        {{ __('Approved')}}--}}
{{--                                    </span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">--}}
{{--                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card-item bg-white p-4 rounded-2xl border border-slate-50">--}}
{{--            <h4 class="card-title font-semibold text-pureblack text-lg xl:text-xl flex justify-between gap-4 mb-4">--}}
{{--                {{ __("Uploaded Documents") }}--}}
{{--                <a href="#" class="text-themered inline-flex items-center gap-1 text-base">--}}
{{--                    {{ __('Report')}}--}}
{{--                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path d="M3.75 7.82807C5.28168 4.82158 8.41036 2.75 11.9994 2.75C17.0869 2.75 21.2494 6.9125 21.2494 12C21.2494 17.0875 17.0869 21.25 11.9994 21.25C8.41036 21.25 5.28168 19.1784 3.75 16.1719" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                        <path d="M2.75 12H16.75L12.75 16M12.75 8L14.25 9.5" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                    </svg>--}}
{{--                </a>--}}
{{--            </h4>--}}
{{--            <div class="card-body">--}}
{{--                <div class="overflow-x-auto">--}}
{{--                    <table class="w-full">--}}
{{--                        <thead>--}}
{{--                            <tr class="*:text-start *:text-xs *:bg-[#F8F9FB] *:py-4 *:px-4 *:whitespace-nowrap">--}}
{{--                                <th>--}}
{{--                                    {{ __('File Name')}}--}}
{{--                                </th>--}}
{{--                                <th>--}}
{{--                                    {{ __('Uploaded By')}}--}}
{{--                                </th>--}}
{{--                                <th>--}}
{{--                                    {{ __('Type')}}--}}
{{--                                </th>--}}
{{--                                <th>--}}
{{--                                    {{ __('Uploaded On')}}--}}
{{--                                </th>--}}
{{--                                <th>--}}
{{--                                    {{ __('Actions')}}--}}
{{--                                </th>--}}
{{--                            </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('land_doc_skyview.jpg')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm">--}}
{{--                                    <div class="flex items-center gap-2 font-medium min-w-max">--}}
{{--                                        <img src="{{ asset('/images/buyer/1.png') }}"--}}
{{--                                            class="w-10 h-10 object-cover rounded-full"--}}
{{--                                            alt="{{ __('Md. Rafiqul Islam')}}">--}}
{{--                                        <div class="whitespace-nowrap">--}}
{{--                                            <h6 class="text-sm font-medium text-pureblack">--}}
{{--                                                {{ __('Md. Rafiqul Islam')}}--}}
{{--                                            </h6>--}}
{{--                                            <span class="text-xs">--}}
{{--                                                {{ __('Admin')}}--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Property Paper')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('2025-06-12')}} <br>--}}
{{--                                    <span class="text-sm text-[#607085] font-normal">--}}
{{--                                        {{ __('11:22')}}--}}
{{--                                    </span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">--}}
{{--                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('land_doc_skyview.jpg')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm">--}}
{{--                                    <div class="flex items-center gap-2 font-medium min-w-max">--}}
{{--                                        <img src="{{ asset('/images/buyer/1.png') }}"--}}
{{--                                            class="w-10 h-10 object-cover rounded-full"--}}
{{--                                            alt="{{ __('Md. Rafiqul Islam')}}">--}}
{{--                                        <div class="whitespace-nowrap">--}}
{{--                                            <h6 class="text-sm font-medium text-pureblack">--}}
{{--                                                {{ __('Md. Rafiqul Islam')}}--}}
{{--                                            </h6>--}}
{{--                                            <span class="text-xs">--}}
{{--                                                {{ __('Admin')}}--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Property Paper')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('2025-06-12')}} <br>--}}
{{--                                    <span class="text-sm text-[#607085] font-normal">--}}
{{--                                        {{ __('11:22')}}--}}
{{--                                    </span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">--}}
{{--                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('land_doc_skyview.jpg')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm">--}}
{{--                                    <div class="flex items-center gap-2 font-medium min-w-max">--}}
{{--                                        <img src="{{ asset('/images/buyer/1.png') }}"--}}
{{--                                            class="w-10 h-10 object-cover rounded-full"--}}
{{--                                            alt="{{ __('Md. Rafiqul Islam')}}">--}}
{{--                                        <div class="whitespace-nowrap">--}}
{{--                                            <h6 class="text-sm font-medium text-pureblack">--}}
{{--                                                {{ __('Md. Rafiqul Islam')}}--}}
{{--                                            </h6>--}}
{{--                                            <span class="text-xs">--}}
{{--                                                {{ __('Admin')}}--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Property Paper')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('2025-06-12')}} <br>--}}
{{--                                    <span class="text-sm text-[#607085] font-normal">--}}
{{--                                        {{ __('11:22')}}--}}
{{--                                    </span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">--}}
{{--                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('land_doc_skyview.jpg')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm">--}}
{{--                                    <div class="flex items-center gap-2 font-medium min-w-max">--}}
{{--                                        <img src="{{ asset('/images/buyer/1.png') }}"--}}
{{--                                            class="w-10 h-10 object-cover rounded-full"--}}
{{--                                            alt="{{ __('Md. Rafiqul Islam')}}">--}}
{{--                                        <div class="whitespace-nowrap">--}}
{{--                                            <h6 class="text-sm font-medium text-pureblack">--}}
{{--                                                {{ __('Md. Rafiqul Islam')}}--}}
{{--                                            </h6>--}}
{{--                                            <span class="text-xs">--}}
{{--                                                {{ __('Admin')}}--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Property Paper')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('2025-06-12')}} <br>--}}
{{--                                    <span class="text-sm text-[#607085] font-normal">--}}
{{--                                        {{ __('11:22')}}--}}
{{--                                    </span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">--}}
{{--                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr class="*:py-3 *:px-4 *:border-b *:whitespace-nowrap">--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('land_doc_skyview.jpg')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm">--}}
{{--                                    <div class="flex items-center gap-2 font-medium min-w-max">--}}
{{--                                        <img src="{{ asset('/images/buyer/1.png') }}"--}}
{{--                                            class="w-10 h-10 object-cover rounded-full"--}}
{{--                                            alt="{{ __('Md. Rafiqul Islam')}}">--}}
{{--                                        <div class="whitespace-nowrap">--}}
{{--                                            <h6 class="text-sm font-medium text-pureblack">--}}
{{--                                                {{ __('Md. Rafiqul Islam')}}--}}
{{--                                            </h6>--}}
{{--                                            <span class="text-xs">--}}
{{--                                                {{ __('Admin')}}--}}
{{--                                            </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('Property Paper')}}--}}
{{--                                </td>--}}
{{--                                <td class="text-sm font-medium text-pureblack">--}}
{{--                                    {{ __('2025-06-12')}} <br>--}}
{{--                                    <span class="text-sm text-[#607085] font-normal">--}}
{{--                                        {{ __('11:22')}}--}}
{{--                                    </span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="#" class="border border-slate-300 rounded-xl h-10 w-10 inline-flex items-center justify-center transition-all text-pureblack hover:bg-slate-400 hover:text-white">--}}
{{--                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path d="M12 19C14.9762 19 17.7501 17.2405 19.6809 14.1952C20.4397 13.0024 20.4397 10.9976 19.6809 9.80483C17.7501 6.75952 14.9762 5 12 5C9.02376 5 6.24987 6.75952 4.31911 9.80483C3.5603 10.9976 3.5603 13.0024 4.31911 14.1952C6.24987 17.2405 9.02376 19 12 19Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                            <path d="M15 12C15 13.6592 13.6592 15 12 15C10.3408 15 9 13.6592 9 12C9 10.3408 10.3408 9 12 9C13.6592 9 15 10.3408 15 12Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>



    @push('scripts')
    <script type="module">

        const chartOptions = [
            {
                id: "areaChart__1",
                options : {
                    series: [
                        {
                            name: '',
                            data: [0, 1, 2.5, 2.8, 2, 4, 1.8, 2.4, 3.8],
                        },
                    ],
                    xaxis: {
                        type: 'category',
                        categories: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Day 7', 'Day 8', 'Day 9', 'Day 10'],
                    },
                    chart: {
                        height: 350,
                        type: 'area',
                        toolbar: {
                            show: false,
                        },
                    },
                    colors: ['#16A34A'],
                    dataLabels: {
                        enabled: false
                    },
                    legend: {
                        show: false
                    },
                    stroke: {
                        curve: 'smooth',
                        width: 2,
                    },
                    markers: {
                        size: 4,
                        strokeWidth: 2,
                        strokeColors: '#fff',
                        hover: {
                            size: 7
                        }
                    },
                    tooltip: {
                        theme: 'dark',
                        y: {
                            formatter: function (val) {
                                return `${val} New Add`;
                            },
                        },
                    },
                }
            },
            {
                id: "barChart__1",
                options : {
                    series: [{
                        name: '',
                        data: [
                            {
                                x: "Residential",
                                y: 6
                            },
                            {
                                x: "Commercial",
                                y: 5
                            },
                            {
                                x: "Industrial",
                                y: 4
                            },
                            {
                                x: "Shop Space",
                                y: 3
                            },
                            {
                                x: "Warehouse",
                                y: 2.5
                            },
                            {
                                x: "Rooftop",
                                y: 2.2
                            },
                        ],
                    }],
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '30px',
                        },
                    },
                    chart: {
                        height: 350,
                        type: 'bar',
                        toolbar: {
                            show: false,
                        },
                    },
                    colors: ['#6EE7B6'],
                    dataLabels: {
                        enabled: false
                    },
                    legend: {
                        show: false
                    },
                    states: {
                        hover: {
                            filter: {
                                type: "none",
                                value: 0.1
                            }
                        }
                    },
                    tooltip: {
                        theme: 'dark',
                        y: {
                            formatter: function (val) {
                                return `${val} Listing`;
                            },
                        },
                    },
                }
            },
        ];
        // loop through chartOptions array to render charts
        chartOptions.forEach(function (chart) {
            const ctx = document.getElementById(chart.id);
            if (ctx) {
                const chartObj = new ApexCharts(ctx, chart.options);
                chartObj.render();
            }
        });

    </script>
    @endpush
</x-app-layout>
