<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="app-url" content="{{ config('app.url') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ASAMS</title>
    @vite(['resources/css/website.scss'])
    @stack('styles')
</head>
<body>
<header class="fixed top-0 left-0 right-0 transition-all duration-300 py-6 z-[9999] bg-white">
    <div class="container">
        <nav class="flex items-center justify-between">
            <a href="{{ url('/') }}" class="brand-logo">
                <img src="{{ asset('/images/website/logo2.png') }}" alt="">
            </a>

            <ul class="right-action flex items-center gap-6">
                <li class="max-md:hidden">
                    <a href="tel:+4125468" class="text-black-900 flex items-end flex-col">
                        <b class="tracking-widest">017 1212 1212</b>
                        <span>Call Us</span>
                    </a>
                </li>
                <li class="max-md:hidden">
                    <a href="#" class="bg-white border border-themered text-themered px-5 xl:px-8 py-4 inline-flex items-center font-semibold transition-all hover:bg-themered hover:text-white">
                        Schedule A Visit
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin-login') }}" class="text-themered font-semibold">
                        Login
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>


{{ $slot }}

<footer class="bg-ashblack">
    <div class="footer-top pt-16 pb-8">
        <div class="container">
            <div class="grid gap-10 grid-cols-2 sm:grid-cols-3 lg:grid-cols-4">
                <div class="widget-item max-sm:col-span-2 sm:max-md:col-span-3">
                    <a href="{{ url('/') }}" class="brand-logo">
                        <img src="{{ asset('/images/website/logo.png') }}" alt="">
                    </a>
                    <ul class="mt-6 [&_a]:flex [&_a]:gap-2.5 [&_a]:text-white [&_.icon]:flex-[0_0_24px] space-y-4">
                        <li>
                            <a href="#">
                                <div class="icon">
                                    <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8263 6.36578C14.0105 -2.12317 1.99821 -2.12019 0.174085 6.3643C-0.361828 8.86914 0.408247 11.3285 1.54689 13.4064C2.68901 15.4905 4.24756 17.2767 5.42955 18.482L5.43047 18.483C5.86477 18.9243 6.26966 19.2934 6.6657 19.5536C7.06871 19.8183 7.50726 20 7.99721 20C8.48738 20 8.92567 19.8182 9.32806 19.553C9.72305 19.2927 10.1262 18.9235 10.5581 18.4825C11.7446 17.2769 13.3061 15.4911 14.4501 13.4073C15.5909 11.3295 16.3623 8.87086 15.8263 6.36578ZM4.00391 8C4.00391 5.79086 5.79477 4 8.00391 4C10.213 4 12.0039 5.79086 12.0039 8C12.0039 10.2091 10.213 12 8.00391 12C5.79477 12 4.00391 10.2091 4.00391 8Z" fill="#607085"/>
                                    </svg>
                                </div>
                                1 Water St, New York, NY 10004, United States
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="icon">
                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 0.00976562C18 0.00976562 20 1.4217 20 4.71582V11.3037C20 14.5978 18 16.0098 15 16.0098H5C2 16.0098 0 14.5978 0 11.3037V4.71582C0 1.4217 2 0.00976562 5 0.00976562H15ZM15.5801 4.74707C15.33 4.4366 14.8493 4.39009 14.5293 4.63477L11.3994 6.9873C10.6394 7.56133 9.3498 7.56139 8.58984 6.9873L5.45996 4.63477C5.14012 4.39018 4.67024 4.44629 4.41016 4.74707C4.15029 5.04809 4.20974 5.49057 4.5293 5.73535L7.66016 8.08887C8.31012 8.58753 9.16013 8.83203 10 8.83203C10.8399 8.83199 11.6901 8.58765 12.3301 8.08887L15.46 5.73535C15.7897 5.49999 15.84 5.04815 15.5801 4.74707Z" fill="#607085"/>
                                    </svg>
                                </div>
                                support247@property.com
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.9998 14.7068C17.9998 14.9588 17.9547 15.2199 17.8646 15.4719C17.8375 15.5439 17.8105 15.6159 17.7744 15.6879C17.6212 16.0119 17.4229 16.3179 17.1615 16.6059C16.7199 17.0919 16.2331 17.4429 15.6833 17.6679C15.6743 17.6679 15.6653 17.6769 15.6563 17.6769C15.1245 17.893 14.5476 18.01 13.9257 18.01C13.0063 18.01 12.0238 17.794 10.9873 17.3529C9.95073 16.9119 8.91418 16.3179 7.88665 15.5709C7.53512 15.3099 7.1836 15.0489 6.8501 14.7698L9.7975 11.8267C10.0499 12.0157 10.2752 12.1597 10.4645 12.2588C10.5096 12.2768 10.5636 12.3038 10.6267 12.3308C10.6989 12.3578 10.771 12.3668 10.8521 12.3668C11.0053 12.3668 11.1225 12.3128 11.2216 12.2138L11.9067 11.5387C12.132 11.3137 12.3483 11.1427 12.5556 11.0347C12.7629 10.9087 12.9702 10.8457 13.1956 10.8457C13.3668 10.8457 13.5471 10.8817 13.7454 10.9627C13.9437 11.0437 14.151 11.1607 14.3764 11.3137L17.3598 13.4288C17.5942 13.5908 17.7564 13.7798 17.8556 14.0048C17.9457 14.2298 17.9998 14.4548 17.9998 14.7068Z" fill="#6B7D94"/>
                                        <path d="M8.1572 11.6652L6.4897 13.3302C6.13818 13.6813 5.57934 13.6813 5.2188 13.3392C5.11965 13.2402 5.02051 13.1502 4.92136 13.0512C3.99297 12.1152 3.15472 11.1342 2.4066 10.1081C1.66749 9.08209 1.0726 8.05605 0.639957 7.03902C0.216323 6.01298 0 5.03194 0 4.09591C0 3.48389 0.108162 2.89887 0.324485 2.35885C0.540809 1.80983 0.883321 1.30581 1.36104 0.855796C1.9379 0.288776 2.56884 0.00976562 3.23584 0.00976562C3.48822 0.00976562 3.74059 0.0637676 3.96593 0.171771C4.20028 0.279775 4.40759 0.441781 4.56983 0.675789L6.66096 3.61889C6.8232 3.8439 6.94038 4.05091 7.0215 4.24892C7.10262 4.43792 7.14769 4.62693 7.14769 4.79794C7.14769 5.01394 7.08459 5.22995 6.9584 5.43696C6.84123 5.64397 6.66997 5.85997 6.45365 6.07598L5.76862 6.78701C5.66948 6.88601 5.62441 7.00301 5.62441 7.14702C5.62441 7.21902 5.63342 7.28202 5.65145 7.35403C5.67849 7.42603 5.70553 7.48003 5.72356 7.53403C5.8858 7.83104 6.16522 8.21806 6.56181 8.68607C6.96742 9.15409 7.40006 9.63111 7.86876 10.1081C7.9589 10.1981 8.05805 10.2881 8.14818 10.3781C8.50872 10.7291 8.51774 11.3052 8.1572 11.6652Z" fill="#6B7D94"/>
                                    </svg>
                                </div>
                                0123 456 789
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h6 class="text-white font-semibold text-2xl mb-6">
                        About
                    </h6>
                    <ul class="space-y-4 [&_a]:text-white">
                        <li>
                            <a href="#">
                                Residential Area
                            </a>
                        </li>
                        <li>
                            <a href="#">Industrial Area</a>
                        </li>
                        <li>
                            <a href="#">Office Space</a>
                        </li>
                    </ul>
                </div>
                <div class="widget-item">
                    <h6 class="text-white font-semibold text-2xl mb-6">
                        Sales on
                    </h6>
                    <ul class="space-y-4 [&_a]:text-white">
                        <li>
                            <a href="#">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Properties
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Our Agents
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Terms of Services
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Privacy Policies
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="widget-item max-sm:col-span-2">
                    <h6 class="text-white font-semibold text-2xl mb-6">
                        Instagram
                    </h6>
                    <ul class="grid gap-4 grid-cols-3 max-w-[300px]">
                        <li>
                            <a href="#">
                                <img src="{{ asset('/images/website/insta-post/1.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('/images/website/insta-post/2.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('/images/website/insta-post/3.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('/images/website/insta-post/4.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('/images/website/insta-post/5.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('/images/website/insta-post/6.png') }}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="max-md:space-y-2 md:flex items-center justify-between py-6 border-t border-t-[#4B5768]">
                <p class="copyright text-[#A6B1BF] max-md:text-center">
                    Copyright&copy;2025 . All Rights Reserved
                </p>
                <div class="social-medial flex items-center justify-center gap-2 *:bg-[#363E4A] *:w-10 *:h-10 *:flex *:items-center *:justify-center *:rounded-md *:transition-all">
                    <a href="#" class="hover:bg-themered">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M14.1898 0.669922H5.81976C2.17976 0.669922 0.00976562 2.83992 0.00976562 6.47992V14.8499C0.00976562 18.4899 2.17976 20.6599 5.81976 20.6599H14.1898C17.8298 20.6599 19.9998 18.4899 19.9998 14.8499V6.47992C19.9998 2.83992 17.8298 0.669922 14.1898 0.669922Z" fill="white"/>
                            <path d="M11.9195 7.95012L11.9695 10.9001L14.5995 10.8601C14.7895 10.8601 14.9295 11.0301 14.8995 11.2101L14.5495 13.1201C14.5195 13.2601 14.3995 13.3601 14.2595 13.3701L12.0095 13.4101L12.1295 20.6601L9.12949 20.7101L9.00949 13.4601L7.30948 13.4901C7.13948 13.4901 7.00949 13.3601 7.00949 13.1901L6.97949 11.2901C6.97949 11.1201 7.10948 10.9901 7.27948 10.9901L8.97949 10.9601L8.92947 7.71012C8.89947 6.05012 10.2195 4.69012 11.8795 4.66012L14.5795 4.62012C14.7495 4.62012 14.8795 4.75012 14.8795 4.92012L14.9195 7.32012C14.9195 7.49012 14.7895 7.62012 14.6195 7.62012L12.2195 7.66012C12.0495 7.65012 11.9195 7.79012 11.9195 7.95012Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="#" class="hover:bg-themered">
                        <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 17.6699H6C3 17.6699 1 15.6699 1 12.6699V6.66992C1 3.66992 3 1.66992 6 1.66992H16C19 1.66992 21 3.66992 21 6.66992V12.6699C21 15.6699 19 17.6699 16 17.6699Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.4001 7.17022L12.9001 8.67022C13.8001 9.27022 13.8001 10.1702 12.9001 10.7702L10.4001 12.2702C9.4001 12.8702 8.6001 12.3702 8.6001 11.2702V8.27022C8.6001 6.97022 9.4001 6.57022 10.4001 7.17022Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    <a href="#" class="hover:bg-themered">
                        <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 21.6699H14C19 21.6699 21 19.6699 21 14.6699V8.66992C21 3.66992 19 1.66992 14 1.66992H8C3 1.66992 1 3.66992 1 8.66992V14.6699C1 19.6699 3 21.6699 8 21.6699Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11 15.1699C12.933 15.1699 14.5 13.6029 14.5 11.6699C14.5 9.73693 12.933 8.16992 11 8.16992C9.067 8.16992 7.5 9.73693 7.5 11.6699C7.5 13.6029 9.067 15.1699 11 15.1699Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.6361 6.66992H16.6477" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

@vite(['resources/js/website.js'])
@stack('scripts')
</body>
</html>
