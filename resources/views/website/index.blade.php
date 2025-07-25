<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>ASAMS</title>
    @vite(['resources/css/website.scss'])
</head>
<body>
    <div class="site__preloader">
        <div class="box">
            <div class="box__sides">
                <div class="box__side"></div>
                <div class="box__side"></div>
                <div class="box__side"></div>
                <div class="box__side"></div>
                <div class="box__side"></div>
                <div class="box__side"></div>
            </div>
        </div>
    </div>
    <header class="fixed group/header top-0 left-0 right-0 transition-all duration-300 py-6 z-[9999] [&.stickyHeader]:bg-white">
        <div class="container">
            <nav class="flex items-center justify-between">
                <a href="{{ url('/') }}" class="brand-logo">
                    <img src="{{ asset('/images/website/logo2.png') }}" alt="">
                </a>

                <ul class="menu max-lg:hidden lg:flex lg:items-center lg:gap-6">
                    <li>
                        <a href="#" class="text-white group-[.stickyHeader]/header:text-black-900">
                            Amenities
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-white group-[.stickyHeader]/header:text-black-900">
                            Market Plans
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-white group-[.stickyHeader]/header:text-black-900">
                            On Sale Positions
                        </a>
                    </li>
                </ul>

                <ul class="right-action flex items-center gap-6">
                    <li class="max-md:hidden">
                        <a href="tel:+4125468" class="text-white group-[.stickyHeader]/header:text-black-900 flex items-end flex-col">
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
                        <a href="{{ url('/admin') }}" class="text-themered font-semibold">
                            Login
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="herosection bg-cover bg-center" style="background-image: url({{ asset('/images/website/hero-bg.png') }});">
        <div class="container min-h-[70vh] lg:min-h-screen relative table items-center">
            <div class="hero-content table-cell align-middle">
                <div class="subtitle bg-gradient-to-r text-white from-[#2868E8]/30 to-[#2868E8]/5 inline-block py-2 px-4 rounded-lg text-sm">
                    Explore, Discover & Make It Yours
                </div>
                <h1 class="text-white font-medium text-4xl md:text-5xl lg:text-6xl mt-4 mb-6 lg:mb-12 max-w-lg lg:max-w-2xl xl:max-w-3xl">
                    Nur Market & Factory Space For Sale
                </h1>
                <div class="">
                    <a href="#" class="max-lg:text-sm bg-themered border border-themered text-white px-8 py-4 inline-flex items-center font-semibold">
                        Explore More
                    </a>
                </div>
            </div>

            <div class="pricing-from max-lg:hidden text-center py-4 px-12 bg-white/30 absolute right-4 bottom-0 z-10 backdrop-blur lg:w-[260px] xl:w-[310px]">
                <p class="text-[#C4CBD4] text-lg">
                    Priced From
                </p>
                <div class="font-extrabold whitestroke3 lg:text-6xl 2xl:text-7xl text-[#555a62]">$85k</div>
            </div>
        </div>
    </div>


    <div class="amenities my-20 xl:my-32">
        <div class="container">
            <div class="wrapper sm:flex justify-between gap-6 xl:gap-10 max-md:space-y-10">
                <div class="image lg:flex-[0_0_300px] 2xl:flex-[0_0_400px] max-lg:hidden">
                    <img src="{{ asset('/images/website/a1.jpg') }}" alt="">
                </div>

                <div class="content flex-[0_0_1]">
                    <h2 class="text-gunmetal text-3xl xl:text-4xl font-semibold mb-4">
                        Why this property is a Smart place for Invests
                    </h2>
                    <p class="text-[#607085]">
                        Grade-A Industrial Spaces for Warehousing, Manufacturing, and Logistics — Strategically Located, Custom-Built, Future-Ready.
                    </p>
                    <ul class="*:flex *:items-center *:gap-2 space-y-3 mt-10 *:text-riverblack">
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16C12.4183 16 16 12.4183 16 8Z" fill="#4C9A51"/>
                                <path d="M3.99902 8L6.49902 10.5L11.999 5" stroke="white" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Flexible Unit Sizes from 10,000–500,000 sq.ft
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16C12.4183 16 16 12.4183 16 8Z" fill="#4C9A51"/>
                                <path d="M3.99902 8L6.49902 10.5L11.999 5" stroke="white" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            60-ft Wide Roads + Trailer-Friendly Access
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16C12.4183 16 16 12.4183 16 8Z" fill="#4C9A51"/>
                                <path d="M3.99902 8L6.49902 10.5L11.999 5" stroke="white" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Ancillary Office Spaces Available
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16C12.4183 16 16 12.4183 16 8Z" fill="#4C9A51"/>
                                <path d="M3.99902 8L6.49902 10.5L11.999 5" stroke="white" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Round-the-Clock Water Supply & Drainage
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16C12.4183 16 16 12.4183 16 8Z" fill="#4C9A51"/>
                                <path d="M3.99902 8L6.49902 10.5L11.999 5" stroke="white" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Ready-to-Move & Build-to-Suit Options
                        </li>
                    </ul>

                    <div class="mt-8 2xl:mt-14">
                        <a href="#" class="max-lg:text-sm bg-themered border border-themered text-white px-8 py-4 inline-flex items-center font-semibold">
                            Explore More
                        </a>
                    </div>
                </div>

                <div class="meta-info flex-[0_0_260px] xl:flex-[0_0_310px] bg-white lg:-mt-20 xl:-mt-32">
                    <div class="location py-11 px-8 sm:px-4 flex items-center gap-2">
                        <div class="icon flex-[0_0_24px]">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M19.8225 8.36578C18.0067 -0.12317 5.99444 -0.120189 4.17032 8.3643C3.6344 10.8691 4.40448 13.3285 5.54312 15.4064C6.68524 17.4905 8.24379 19.2767 9.42578 20.482L9.4267 20.483C9.861 20.9243 10.2659 21.2934 10.6619 21.5536C11.0649 21.8183 11.5035 22 11.9934 22C12.4836 22 12.9219 21.8182 13.3243 21.553C13.7193 21.2927 14.1224 20.9235 14.5543 20.4825C15.7408 19.2769 17.3023 17.4911 18.4464 15.4073C19.5871 13.3295 20.3585 10.8709 19.8225 8.36578Z" fill="#607085"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 10C8 7.79086 9.79086 6 12 6C14.2091 6 16 7.79086 16 10C16 12.2091 14.2091 14 12 14C9.79086 14 8 12.2091 8 10Z" fill="#607085"/>
                            </svg>
                        </div>
                        <p class="flex-1 text-sm">
                            St. George Staten Island, NY 10301 USA
                        </p>
                    </div>
                    <div class="pb-10 px-8 sm:px-4">
                        <ul class="meta *:flex *:gap-4 sm:*:gap-2 [&_.icon]:flex-[0_0_64px] [&_.icon]:text-center divide-y divide-[#F0F2F4] *:pt-6 space-y-6">
                            <li>
                                <div class="icon">
                                    <svg width="58" height="56" viewBox="0 0 58 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M55.6663 51.6667H2.33301C1.23967 51.6667 0.333008 52.5734 0.333008 53.6667C0.333008 54.7601 1.23967 55.6667 2.33301 55.6667H55.6663C56.7597 55.6667 57.6663 54.7601 57.6663 53.6667C57.6663 52.5734 56.7597 51.6667 55.6663 51.6667Z" fill="#FCA8B9"/>
                                        <path opacity="0.4" d="M42.3333 0.333252H15.6667C7.66667 0.333252 5 5.10659 5 10.9999V53.6666H53V10.9999C53 5.10659 50.3333 0.333252 42.3333 0.333252Z" fill="#FCA8B9"/>
                                        <path d="M23.667 41H15.667C14.5737 41 13.667 40.0933 13.667 39C13.667 37.9067 14.5737 37 15.667 37H23.667C24.7603 37 25.667 37.9067 25.667 39C25.667 40.0933 24.7603 41 23.667 41Z" fill="#FCA8B9"/>
                                        <path d="M42.333 41H34.333C33.2397 41 32.333 40.0933 32.333 39C32.333 37.9067 33.2397 37 34.333 37H42.333C43.4263 37 44.333 37.9067 44.333 39C44.333 40.0933 43.4263 41 42.333 41Z" fill="#FCA8B9"/>
                                        <path d="M23.667 29H15.667C14.5737 29 13.667 28.0933 13.667 27C13.667 25.9067 14.5737 25 15.667 25H23.667C24.7603 25 25.667 25.9067 25.667 27C25.667 28.0933 24.7603 29 23.667 29Z" fill="#FCA8B9"/>
                                        <path d="M42.333 29H34.333C33.2397 29 32.333 28.0933 32.333 27C32.333 25.9067 33.2397 25 34.333 25H42.333C43.4263 25 44.333 25.9067 44.333 27C44.333 28.0933 43.4263 29 42.333 29Z" fill="#FCA8B9"/>
                                        <path d="M23.667 17H15.667C14.5737 17 13.667 16.0933 13.667 15C13.667 13.9067 14.5737 13 15.667 13H23.667C24.7603 13 25.667 13.9067 25.667 15C25.667 16.0933 24.7603 17 23.667 17Z" fill="#FCA8B9"/>
                                        <path d="M42.333 17H34.333C33.2397 17 32.333 16.0933 32.333 15C32.333 13.9067 33.2397 13 34.333 13H42.333C43.4263 13 44.333 13.9067 44.333 15C44.333 16.0933 43.4263 17 42.333 17Z" fill="#FCA8B9"/>
                                    </svg>
                                </div>
                                <div class="info">
                                    <h6 class="text-xl xl:text-2xl font-semibold text-gunmetal">12</h6>
                                    <p class="text-riverblack">Factory Floors</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.4" width="48" height="48" rx="3.5" fill="#FCA8B9"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.3335 29.3333C8.43807 29.3333 9.3335 30.2287 9.3335 31.3333V36.3589C9.3335 37.6334 10.3667 38.6666 11.6412 38.6666H16.6668C17.7714 38.6666 18.6668 39.562 18.6668 40.6666C18.6668 41.7712 17.7714 42.6666 16.6668 42.6666H11.6412C8.15755 42.6666 5.3335 39.8425 5.3335 36.3589V31.3333C5.3335 30.2287 6.22893 29.3333 7.3335 29.3333Z" fill="#FCA8B9"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M40.6668 29.3333C41.7714 29.3333 42.6668 30.2287 42.6668 31.3333V36.3589C42.6668 39.8425 39.8428 42.6666 36.3591 42.6666H31.3335C30.2289 42.6666 29.3335 41.7712 29.3335 40.6666C29.3335 39.562 30.2289 38.6666 31.3335 38.6666H36.3591C37.6336 38.6666 38.6668 37.6334 38.6668 36.3589V31.3333C38.6668 30.2287 39.5623 29.3333 40.6668 29.3333Z" fill="#FCA8B9"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M29.3335 7.33325C29.3335 6.22868 30.2289 5.33325 31.3335 5.33325H36.6668C39.9805 5.33325 42.6668 8.01954 42.6668 11.3333V16.6666C42.6668 17.7712 41.7714 18.6666 40.6668 18.6666C39.5623 18.6666 38.6668 17.7712 38.6668 16.6666V11.3333C38.6668 10.2287 37.7714 9.33325 36.6668 9.33325H31.3335C30.2289 9.33325 29.3335 8.43782 29.3335 7.33325Z" fill="#FCA8B9"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3335 9.33325C10.2289 9.33325 9.3335 10.2287 9.3335 11.3333V16.6666C9.3335 17.7712 8.43807 18.6666 7.3335 18.6666C6.22893 18.6666 5.3335 17.7712 5.3335 16.6666V11.3333C5.3335 8.01954 8.01979 5.33325 11.3335 5.33325H16.6668C17.7714 5.33325 18.6668 6.22868 18.6668 7.33325C18.6668 8.43782 17.7714 9.33325 16.6668 9.33325H11.3335Z" fill="#FCA8B9"/>
                                    </svg>
                                </div>
                                <div class="info">
                                    <h6 class="text-xl xl:text-2xl font-semibold text-gunmetal">10,282 sq. ft</h6>
                                    <p class="text-riverblack">Market Area</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="48" height="54" viewBox="0 0 48 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M0 9.3305C0 4.17883 4.17023 0 9.33333 0H38.6667C43.8298 0 48 4.17883 48 9.3305V36.2587C48 41.3813 43.8341 45.5892 38.6667 45.5892H36.8089C35.3788 45.5892 34.0352 46.1468 33.0477 47.1439L33.0394 47.1522L28.8594 51.3236C26.1723 54.0021 21.8042 54.003 19.117 51.3244L14.9361 47.1522L14.9278 47.1439C13.9428 46.1493 12.5758 45.5892 11.1667 45.5892H9.33333C4.17023 45.5892 0 41.4104 0 36.2587V9.3305Z" fill="#FCA8B9"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.3327 18C13.7084 18 12.666 19.1891 12.666 20.2922C12.666 21.3968 11.7706 22.2922 10.666 22.2922C9.56145 22.2922 8.66602 21.3968 8.66602 20.2922C8.66602 16.6716 11.8208 14 15.3327 14C18.8445 14 21.9993 16.6716 21.9993 20.2922C21.9993 23.9195 19.0839 25.7796 17.1769 26.9834C17.0073 27.0904 16.8419 27.194 16.6804 27.2952C15.7998 27.8467 15.0367 28.3247 14.3662 28.8795C13.913 29.2545 13.559 29.6213 13.2954 30H19.9993C21.1039 30 21.9993 30.8954 21.9993 32C21.9993 33.1046 21.1039 34 19.9993 34H12.5989C11.4853 34 10.4513 33.5171 9.76252 32.727C9.05759 31.9184 8.66968 30.7076 9.11121 29.4556L9.1146 29.4459C9.68593 27.8517 10.7371 26.6905 11.8162 25.7977C12.7093 25.0587 13.7322 24.4198 14.6049 23.8747C14.7555 23.7806 14.9015 23.6894 15.0417 23.6009C17.2284 22.2206 17.9993 21.4395 17.9993 20.2922C17.9993 19.1891 16.9569 18 15.3327 18Z" fill="#FCA8B9"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.0033 15.5461C30.9166 14.2376 32.5548 13.7537 33.9788 14.1172C35.4758 14.4994 36.6555 15.8183 36.6555 17.4792V26.337H37.333C38.4376 26.337 39.333 27.2324 39.333 28.337C39.333 29.4416 38.4376 30.337 37.333 30.337H36.6555V31.9989C36.6555 33.1035 35.76 33.9989 34.6555 33.9989C33.5509 33.9989 32.6555 33.1035 32.6555 31.9989V30.337H27.0971C25.8534 30.337 24.5905 29.7481 23.8747 28.621C23.1524 27.4835 23.1524 26.0122 23.8747 24.8747L23.8808 24.8652C25.7783 21.914 27.966 18.5384 29.9901 15.5652L30.0033 15.5461ZM32.6555 26.337V18.7632C31.0038 21.2156 29.2692 23.8853 27.6903 26.337H32.6555Z" fill="#FCA8B9"/>
                                    </svg>
                                </div>
                                <div class="info">
                                    <h6 class="text-xl xl:text-2xl font-semibold text-gunmetal">24\7</h6>
                                    <p class="text-riverblack">Security with CCTV</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.2673 6.06665V10.9999H19.3206C15.0273 10.9999 12.8673 13.1599 12.8673 17.4532V42.9999H6.06738C2.25405 42.9999 0.333984 41.0799 0.333984 37.2665V6.06665C0.333984 2.25332 2.25405 0.333252 6.06738 0.333252H17.534C21.3473 0.333252 23.2673 2.25332 23.2673 6.06665Z" fill="#FCA8B9"/>
                                        <path opacity="0.4" d="M41.3205 17.4533V47.2134C41.3205 51.5067 39.1872 53.6667 34.8939 53.6667H19.3205C15.0271 53.6667 12.8672 51.5067 12.8672 47.2134V17.4533C12.8672 13.16 15.0271 11 19.3205 11H34.8939C39.1872 11 41.3205 13.16 41.3205 17.4533Z" fill="#FCA8B9"/>
                                        <path d="M53.6667 6.06665V37.2665C53.6667 41.0799 51.7466 42.9999 47.9333 42.9999H41.32V17.4532C41.32 13.1599 39.1867 10.9999 34.8934 10.9999H30.7334V6.06665C30.7334 2.25332 32.6533 0.333252 36.4666 0.333252H47.9333C51.7466 0.333252 53.6667 2.25332 53.6667 6.06665Z" fill="#FCA8B9"/>
                                        <path d="M32.3327 26.3333H21.666C20.5727 26.3333 19.666 25.4266 19.666 24.3333C19.666 23.2399 20.5727 22.3333 21.666 22.3333H32.3327C33.426 22.3333 34.3327 23.2399 34.3327 24.3333C34.3327 25.4266 33.426 26.3333 32.3327 26.3333Z" fill="#FCA8B9"/>
                                        <path d="M32.3327 34.3333H21.666C20.5727 34.3333 19.666 33.4266 19.666 32.3333C19.666 31.2399 20.5727 30.3333 21.666 30.3333H32.3327C33.426 30.3333 34.3327 31.2399 34.3327 32.3333C34.3327 33.4266 33.426 34.3333 32.3327 34.3333Z" fill="#FCA8B9"/>
                                        <path d="M29 45.6667V53.6667H25V45.6667C25 44.5734 25.9067 43.6667 27 43.6667C28.0933 43.6667 29 44.5734 29 45.6667Z" fill="#FCA8B9"/>
                                    </svg>
                                </div>
                                <div class="info">
                                    <h6 class="text-xl xl:text-2xl font-semibold text-gunmetal">2 Block</h6>
                                    <p class="text-riverblack">For Office Space</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="53" height="48" viewBox="0 0 53 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M5.50977 46.2651V6.93976C5.50977 2.31325 8.79223 0 12.8586 0H32.4554C36.5217 0 39.8042 2.31325 39.8042 6.93976V46.2651H5.50977Z" fill="#FCA8B9"/>
                                        <path d="M43.4805 48.0011H1.8372C0.832865 48.0011 0 47.2146 0 46.2662C0 45.3178 0.832865 44.5312 1.8372 44.5312H43.4805C44.4848 44.5312 45.3177 45.3178 45.3177 46.2662C45.3177 47.2146 44.4848 48.0011 43.4805 48.0011Z" fill="#FCA8B9"/>
                                        <path d="M16.2645 18.5038H29.0759C31.6235 18.5038 33.7057 17.3471 33.7057 14.1317V11.2864C33.6812 8.09413 31.599 6.9375 29.0514 6.9375H16.24C13.7169 6.9375 11.6348 8.09413 11.6348 11.3095V14.1548C11.6348 17.3471 13.7169 18.5038 16.2645 18.5038Z" fill="#FCA8B9"/>
                                        <path d="M20.2094 27.1781H12.8606C11.8563 27.1781 11.0234 26.3916 11.0234 25.4432C11.0234 24.4948 11.8563 23.7083 12.8606 23.7083H20.2094C21.2138 23.7083 22.0467 24.4948 22.0467 25.4432C22.0467 26.3916 21.2138 27.1781 20.2094 27.1781Z" fill="#FCA8B9"/>
                                        <path d="M45.8532 3.276C45.061 2.67742 43.9048 2.79873 43.2708 3.54695C42.6371 4.29517 42.7655 5.38694 43.5579 5.98551L45.8532 3.276ZM50.8296 15.6187C51.8442 15.6187 52.6668 14.8419 52.6668 13.8838C52.6668 12.9256 51.8442 12.1488 50.8296 12.1488V15.6187ZM50.2485 29.4092C51.2112 29.7122 52.2516 29.2209 52.5725 28.312C52.8934 27.4029 52.3731 26.4204 51.4106 26.1174L50.2485 29.4092ZM43.5579 5.98551L46.5785 8.26747L48.8738 5.55796L45.8532 3.276L43.5579 5.98551ZM48.9924 13.0104V33.5464H52.6668V13.0104H48.9924ZM45.318 33.5464V33.3813H41.6436V33.5464H45.318ZM45.318 33.3813C45.318 30.598 42.754 28.3416 39.8066 28.3416V31.8115C40.7248 31.8115 41.6436 32.5142 41.6436 33.3813H45.318ZM47.1552 35.2814C46.1406 35.2814 45.318 34.5046 45.318 33.5464H41.6436C41.6436 36.4209 44.1113 38.7512 47.1552 38.7512V35.2814ZM48.9924 33.5464C48.9924 34.5046 48.1698 35.2814 47.1552 35.2814V38.7512C50.1991 38.7512 52.6668 36.4209 52.6668 33.5464H48.9924ZM46.5785 8.26747C46.9325 8.53486 47.0535 8.62727 47.1598 8.71714L49.6124 6.13342C49.4115 5.96333 49.1952 5.80066 48.8738 5.55796L46.5785 8.26747ZM52.6668 13.0104C52.6668 12.6218 52.6675 12.3607 52.6523 12.1062L48.9838 12.3008C48.9916 12.4352 48.9924 12.5824 48.9924 13.0104H52.6668ZM47.1598 8.71714C48.246 9.63668 48.902 10.9254 48.9838 12.3008L52.6523 12.1062C52.5159 9.81386 51.4229 7.666 49.6124 6.13342L47.1598 8.71714ZM50.8296 12.1488H47.1552V15.6187H50.8296V12.1488ZM41.6436 17.3537V22.9492H45.318V17.3537H41.6436ZM45.4123 27.8868L50.2485 29.4092L51.4106 26.1174L46.5741 24.5951L45.4123 27.8868ZM41.6436 22.9492C41.6436 25.1893 43.1616 27.1783 45.4123 27.8868L46.5741 24.5951C45.8241 24.3589 45.318 23.6959 45.318 22.9492H41.6436ZM47.1552 12.1488C44.1113 12.1488 41.6436 14.4791 41.6436 17.3537H45.318C45.318 16.3955 46.1406 15.6187 47.1552 15.6187V12.1488Z" fill="#FCA8B9"/>
                                    </svg>
                                </div>
                                <div class="info">
                                    <h6 class="text-xl xl:text-2xl font-semibold text-gunmetal">Utilities</h6>
                                    <p class="text-riverblack">Water, Electricity etc.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="apartment-plans my-20 xl:my-32">
        <div class="container tab-wrapper">
            <div class="section-title text-center space-y-4 mb-8 xl:mb-16">
                <h2 class="text-gunmetal text-3xl xl:text-4xl font-semibold">
                    Market Plans
                </h2>
                <p class="text-riverblack max-w-lg mx-auto">
                    A company engaged in travel that will make it easier for you when you want to vacation
                </p>
            </div>


            <ul class="nav-tabs flex items-center justify-center flex-wrap [&_a]:text-sm [&_a]:font-medium xl:[&_a]:font-semibold [&_a]:text-gunmetal [&_a]:inline-block [&_a]:bg-white [&_a]:py-3.5 lg:[&_a]:py-4 [&_a]:px-4 lg:[&_a]:px-10">
                <li>
                    <a href="#residential_plans" class="nav-item active [&.active]:bg-themered [&.active]:text-white">
                        RESIDENTIAL
                    </a>
                </li>
                <li>
                    <a href="#industry_plans" class="nav-item [&.active]:bg-themered [&.active]:text-white">
                        INDUSTRY A
                    </a>
                </li>
                <li>
                    <a href="#office_block_plan" class="nav-item [&.active]:bg-themered [&.active]:text-white">
                        OFFICE BLOCK
                    </a>
                </li>
                <li>
                    <a href="#industry_plan_b" class="nav-item [&.active]:bg-themered [&.active]:text-white">
                        INDUSTRY B
                    </a>
                </li>
            </ul>


            <div class="tab-content mt-10 *:transition-all">
                <div class="tab-pane fade" id="residential_plans">
                    <div class="md:flex items-start gap-8 xl:gap-16">
                        <div class="info flex-[0_0_350px] lg:flex-[0_0_485px] bg-white max-xl:px-8 max-xl:pb-8 xl:px-10 xl:pb-10">
                            <ul class="*:flex *:justify-between *:items-center divide-y *:py-4 xl:*:py-8">
                                <li>
                                    <span class="label text-riverblack">Area</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">3,00 sq.ft</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">No. of Floor</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">4</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">Total Open Positions</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">28</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">Parking</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">Yes</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">Price Starts</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">$85,000</span>
                                </li>
                            </ul>
                            <button class="bg-themered text-white font-semibold text-center w-full py-4">
                                On Sale Positions
                            </button>
                        </div>
                        <div class="map lg:flex-[1] max-xl:p-8 max-xl:pb-0">
                            <img src="{{ asset('/images/website/plan-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="industry_plans">
                    <div class="md:flex items-start gap-8 xl:gap-16">
                        <div class="info flex-[0_0_350px] lg:flex-[0_0_485px] bg-white max-xl:px-8 max-xl:pb-8 xl:px-10 xl:pb-10">
                            <ul class="*:flex *:justify-between *:items-center divide-y *:py-4 xl:*:py-8">
                                <li>
                                    <span class="label text-riverblack">Area</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">3,00 sq.ft</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">No. of Floor</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">4</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">Total Open Positions</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">28</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">Parking</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">Yes</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">Price Starts</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">$85,000</span>
                                </li>
                            </ul>
                            <button class="bg-themered text-white font-semibold text-center w-full py-4">
                                On Sale Positions
                            </button>
                        </div>
                        <div class="map lg:flex-[1] max-xl:p-8 max-xl:pb-0">
                            <img src="{{ asset('/images/website/plan-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="office_block_plan">
                    <div class="md:flex items-start gap-8 xl:gap-16">
                        <div class="info flex-[0_0_350px] lg:flex-[0_0_485px] bg-white max-xl:px-8 max-xl:pb-8 xl:px-10 xl:pb-10">
                            <ul class="*:flex *:justify-between *:items-center divide-y *:py-4 xl:*:py-8">
                                <li>
                                    <span class="label text-riverblack">Area</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">3,00 sq.ft</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">No. of Floor</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">4</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">Total Open Positions</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">28</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">Parking</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">Yes</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">Price Starts</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">$85,000</span>
                                </li>
                            </ul>
                            <button class="bg-themered text-white font-semibold text-center w-full py-4">
                                On Sale Positions
                            </button>
                        </div>
                        <div class="map lg:flex-[1] max-xl:p-8 max-xl:pb-0">
                            <img src="{{ asset('/images/website/plan-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="industry_plan_b">
                    <div class="md:flex items-start gap-8 xl:gap-16">
                       <div class="info flex-[0_0_350px] lg:flex-[0_0_485px] bg-white max-xl:px-8 max-xl:pb-8 xl:px-10 xl:pb-10">
                            <ul class="*:flex *:justify-between *:items-center divide-y *:py-4 xl:*:py-8">
                                <li>
                                    <span class="label text-riverblack">Area</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">3,00 sq.ft</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">No. of Floor</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">4</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">Total Open Positions</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">28</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">Parking</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">Yes</span>
                                </li>
                                <li>
                                    <span class="label text-riverblack">Price Starts</span>
                                    <span class="value font-semibold text-gunmetal text-xl xl:text-2xl">$85,000</span>
                                </li>
                            </ul>
                            <button class="bg-themered text-white font-semibold text-center w-full py-4">
                                On Sale Positions
                            </button>
                        </div>
                        <div class="map lg:flex-[1] max-xl:p-8 max-xl:pb-0">
                            <img src="{{ asset('/images/website/plan-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="the-views bg-white py-20 xl:py-32">
        <div class="container tab-wrapper">
            <div class="section-title text-center space-y-4 mb-8 xl:mb-16">
                <h2 class="text-gunmetal text-3xl xl:text-4xl font-semibold">
                    The Views
                </h2>
                <p class="text-riverblack max-w-lg mx-auto">
                    A company engaged in travel that will make it easier for you when you want to vacation
                </p>
            </div>

            <div class="tab-content mb-10 *:transition-all *:relative">
                <div class="tab-pane active" id="video-overview">
                    <div class="videoframe *:w-full pt-[56.25%] *:absolute *:h-full *:top-0 *:left-0">
                        <iframe src="https://www.youtube.com/embed/7lqiuZPLTf4"
                        title="CINEMATIC REAL ESTATE VIDEO | PALM BEACH PENTHOUSE | SONY FX3"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="tab-pane" id="video360">
                    <div class="videoframe *:w-full pt-[56.25%] *:absolute *:h-full *:top-0 *:left-0">
                        <iframe src="https://www.youtube.com/embed/IG7Jrgl9h1o"
                        title="360 PM Luxury VR Home Tour - West Hollywood, California"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="tab-pane" id="gallery-view">
                    <div class="grid gap-4 xl:gap-6 grid-cols-2 lg:grid-cols-3">
                        <div class="gallery-item">
                            <a href="{{ asset('/images/website/gallery-1.png') }}" class="glightbox" data-gallery="gallery1">
                                <img src="{{ asset('/images/website/gallery-1.png') }}" alt="">
                            </a>
                        </div>
                        <div class="gallery-item">
                            <a href="{{ asset('/images/website/gallery-1.png') }}" class="glightbox" data-gallery="gallery1">
                                <img src="{{ asset('/images/website/gallery-1.png') }}" alt="">
                            </a>
                        </div>
                        <div class="gallery-item">
                            <a href="{{ asset('/images/website/gallery-1.png') }}" class="glightbox" data-gallery="gallery1">
                                <img src="{{ asset('/images/website/gallery-1.png') }}" alt="">
                            </a>
                        </div>
                        <div class="gallery-item">
                            <a href="{{ asset('/images/website/gallery-1.png') }}" class="glightbox" data-gallery="gallery1">
                                <img src="{{ asset('/images/website/gallery-1.png') }}" alt="">
                            </a>
                        </div>
                        <div class="gallery-item">
                            <a href="{{ asset('/images/website/gallery-1.png') }}" class="glightbox" data-gallery="gallery1">
                                <img src="{{ asset('/images/website/gallery-1.png') }}" alt="">
                            </a>
                        </div>
                        <div class="gallery-item">
                            <a href="{{ asset('/images/website/gallery-1.png') }}" class="glightbox" data-gallery="gallery1">
                                <img src="{{ asset('/images/website/gallery-1.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="nav-tabs flex items-center justify-center flex-wrap gap-3 xl:gap-6 [&_a]:font-semibold [&_a]:text-gunmetal [&_a]:inline-block [&_a]:bg-[#F0F2F4] max-lg:[&_a]:py-3 [&_a]:py-4 max-lg:[&_a]:px-4 lg:[&_a]:px-10">
                <li>
                    <a href="#video-overview" class="nav-item active [&.active]:bg-themered [&.active]:text-white">
                        VIDEO OVERVIEW
                    </a>
                </li>
                <li>
                    <a href="#video360" class="nav-item [&.active]:bg-themered [&.active]:text-white">
                        360<sup>o</sup> VIDEO
                    </a>
                </li>
                <li>
                    <a href="#gallery-view" class="nav-item [&.active]:bg-themered [&.active]:text-white">
                        GALLERY
                    </a>
                </li>
            </ul>

        </div>
    </div>


    <div class="faq py-20 xl:py-32">
        <div class="container">
            <div class="section-title text-center space-y-4 mb-8 xl:mb-16">
                <h2 class="text-gunmetal text-3xl xl:text-4xl font-semibold">
                    Recent Queries of Clients
                </h2>
                <p class="text-riverblack">
                    A company engaged in travel that will make it easier for you when you want to vacation
                </p>
            </div>

        </div>
        <div class="section-content relative" >
            <div class="container">
                <div class="row lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                    <div class="faq-accordion *:p-4 xl:*:p-8 space-y-4">
                        <div class="accordion-item is-active bg-white transition-all">
                            <div class="accordion-title active text-xl xl:text-2xl font-medium text-gunmetal cursor-pointer relative after:absolute after:right-0 after:top-0 after:w-4 after:h-4 after:border-b-2 after:border-l-2 after:border-b-gunmetal after:border-l-gunmetal after:-rotate-45 after:transition-all [&.is-active]:after:scale-y-100 pr-6">
                                How does social media impact in my public relationship?
                            </div>
                            <div class="accordion-content block space-y-2 pt-2">
                                <p class="text-riverblack">
                                    Social media has a profound impact on public relations (PR) in various ways. It has transformed the PR landscape, offering new opportunities and challenges for individuals, organizations, and brands looking to manage their public image and communicate with their audience.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item bg-white transition-all">
                            <div class="accordion-title text-xl xl:text-2xl font-medium text-gunmetal cursor-pointer relative after:absolute after:right-0 after:top-0 after:w-4 after:h-4 after:border-b-2 after:border-l-2 after:border-b-gunmetal after:border-l-gunmetal after:-rotate-45 after:transition-all [&.is-active]:after:scale-y-100 pr-6">
                                How does social media impact in my public relationship?
                            </div>
                            <div class="accordion-content hidden space-y-2 pt-2">
                                <p class="text-riverblack">
                                    Social media has a profound impact on public relations (PR) in various ways. It has transformed the PR landscape, offering new opportunities and challenges for individuals, organizations, and brands looking to manage their public image and communicate with their audience.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item bg-white transition-all">
                            <div class="accordion-title text-xl xl:text-2xl font-medium text-gunmetal cursor-pointer relative after:absolute after:right-0 after:top-0 after:w-4 after:h-4 after:border-b-2 after:border-l-2 after:border-b-gunmetal after:border-l-gunmetal after:-rotate-45 after:transition-all [&.is-active]:after:scale-y-100 pr-6">
                                How does social media impact in my public relationship?
                            </div>
                            <div class="accordion-content hidden space-y-2 pt-2">
                                <p class="text-riverblack">
                                    Social media has a profound impact on public relations (PR) in various ways. It has transformed the PR landscape, offering new opportunities and challenges for individuals, organizations, and brands looking to manage their public image and communicate with their audience.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item bg-white transition-all">
                            <div class="accordion-title text-xl xl:text-2xl font-medium text-gunmetal cursor-pointer relative after:absolute after:right-0 after:top-0 after:w-4 after:h-4 after:border-b-2 after:border-l-2 after:border-b-gunmetal after:border-l-gunmetal after:-rotate-45 after:transition-all [&.is-active]:after:scale-y-100 pr-6">
                                How does social media impact in my public relationship?
                            </div>
                            <div class="accordion-content hidden space-y-2 pt-2">
                                <p class="text-riverblack">
                                    Social media has a profound impact on public relations (PR) in various ways. It has transformed the PR landscape, offering new opportunities and challenges for individuals, organizations, and brands looking to manage their public image and communicate with their audience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-image max-lg:hidden absolute right-0 top-0 -bottom-20 xl:-bottom-32 bg-cover w-[calc(50%_-_32px)] xl:w-[calc(50%_-_64px)] bg-center" style="background-image: url({{ asset('/images/website/gallery-1.png') }}"></div>
        </div>
    </div>

    <div class="agents py-20 xl:py-32 bg-white">
        <div class="container">
            <div class="section-title text-center space-y-4 mb-8 xl:mb-16">
                <h2 class="text-gunmetal text-3xl xl:text-4xl font-semibold">
                    Our Agents
                </h2>
                <p class="text-riverblack">
                    A company engaged in travel that will make it easier for you when you want to vacation
                </p>
            </div>

            <div class="team-member-wrapper grid gap-4 sm:gap-6 xl:gap-8 grid-cols-2 md:grid-cols-4">
                <div class="team-item">
                    <div class="thumbnail">
                        <img src="{{ asset('/images/website/team1.png') }}" alt="">
                    </div>
                    <div class="caption mt-3 xl:mt-6">
                        <h6 class="sm:text-lg text-xl text-gunmetal font-semibold">Scott Anderson</h6>
                        <p class="text-themered">Sales Agent</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="thumbnail">
                        <img src="{{ asset('/images/website/team2.png') }}" alt="">
                    </div>
                    <div class="caption mt-3 xl:mt-6">
                        <h6 class="sm:text-lg text-xl text-gunmetal font-semibold">Phoenix Baker</h6>
                        <p class="text-themered">Sales Agent</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="thumbnail">
                        <img src="{{ asset('/images/website/team3.png') }}" alt="">
                    </div>
                    <div class="caption mt-3 xl:mt-6">
                        <h6 class="sm:text-lg text-xl text-gunmetal font-semibold">Lana Steiner</h6>
                        <p class="text-themered">Sales Agent</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="thumbnail">
                        <img src="{{ asset('/images/website/team4.png') }}" alt="">
                    </div>
                    <div class="caption mt-3 xl:mt-6">
                        <h6 class="sm:text-lg text-xl text-gunmetal font-semibold">Demir Alexander</h6>
                        <p class="text-themered">Sales Agent</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nearby-places my-20 xl:my-32 relative">
        <div class="container">
            <div class="lg:grid lg:grid-cols-2">
                <div class="">
                    <div class="section-title space-y-4 mb-8 xl:mb-16">
                        <h2 class="text-gunmetal text-3xl xl:text-4xl font-semibold">
                            Nearby Places of Property
                        </h2>
                        <p class="text-riverblack">
                            A company engaged in travel that will make it easier for you when you want to vacation
                        </p>
                    </div>

                    <ul class="property-list space-y-4 [&_a]:flex [&_a]:items-center [&_a]:gap-4 [&_a]:justify-between [&_a]:bg-white [&_a]:p-6 [&_a]:border">
                        <li>
                            <a href="#" class="group border-[#F0F2F4] [&.active]:border-themered [&.active]:bg-[#FFF0F1]">
                                <span class="lg:flex-[0_0_270px] xl:flex-[0_0_300px]">
                                    9/11 Memorial & Museum
                                </span>
                                <span class="text-gunmetal font-medium lg:flex-[0_0_100px] xl:flex-[0_0_160px]">
                                    800 m
                                </span>
                                <span class="group-[.active]:text-gunmetal text-[#6B7D94]">
                                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4302 0.939453L18.5002 7.0095L12.4302 13.0795M1.5 7.0098H18.33" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group border-[#F0F2F4] [&.active]:border-themered [&.active]:bg-[#FFF0F1]">
                                <span class="lg:flex-[0_0_270px] xl:flex-[0_0_300px]">
                                    Washington Square Park
                                </span>
                                <span class="text-gunmetal font-medium lg:flex-[0_0_100px] xl:flex-[0_0_160px]">
                                    2.5 km
                                </span>
                                <span class="group-[.active]:text-gunmetal text-[#6B7D94]">
                                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4302 0.939453L18.5002 7.0095L12.4302 13.0795M1.5 7.0098H18.33" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group border-[#F0F2F4] [&.active]:border-themered [&.active]:bg-[#FFF0F1]">
                                <span class="lg:flex-[0_0_270px] xl:flex-[0_0_300px]">
                                    Statue of Liberty
                                </span>
                                <span class="text-gunmetal font-medium lg:flex-[0_0_100px] xl:flex-[0_0_160px]">
                                    3.2 km
                                </span>
                                <span class="group-[.active]:text-gunmetal text-[#6B7D94]">
                                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4302 0.939453L18.5002 7.0095L12.4302 13.0795M1.5 7.0098H18.33" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group border-[#F0F2F4] [&.active]:border-themered [&.active]:bg-[#FFF0F1]">
                                <span class="lg:flex-[0_0_270px] xl:flex-[0_0_300px]">
                                    Empire State Building
                                </span>
                                <span class="text-gunmetal font-medium lg:flex-[0_0_100px] xl:flex-[0_0_160px]">
                                    4.8 km
                                </span>
                                <span class="group-[.active]:text-gunmetal text-[#6B7D94]">
                                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4302 0.939453L18.5002 7.0095L12.4302 13.0795M1.5 7.0098H18.33" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group border-[#F0F2F4] [&.active]:border-themered [&.active]:bg-[#FFF0F1]">
                                <span class="lg:flex-[0_0_270px] xl:flex-[0_0_300px]">
                                    Lincoln Terrace / Arthur S. Somers Park
                                </span>
                                <span class="text-gunmetal font-medium lg:flex-[0_0_100px] xl:flex-[0_0_160px]">
                                    9.1 km
                                </span>
                                <span class="group-[.active]:text-gunmetal text-[#6B7D94]">
                                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4302 0.939453L18.5002 7.0095L12.4302 13.0795M1.5 7.0098H18.33" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group active border-[#F0F2F4] [&.active]:border-themered [&.active]:bg-[#FFF0F1]">
                                <span class="lg:flex-[0_0_270px] xl:flex-[0_0_300px]">
                                    John F. Kennedy International Airport
                                </span>
                                <span class="text-gunmetal font-medium lg:flex-[0_0_100px] xl:flex-[0_0_160px]">
                                    9.1 km
                                </span>
                                <span class="group-[.active]:text-gunmetal text-[#6B7D94]">
                                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4302 0.939453L18.5002 7.0095L12.4302 13.0795M1.5 7.0098H18.33" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="empty"></div>
            </div>
        </div>
        <div class="map max-lg:mt-16 lg:w-[calc(50%_-_40px)] xl:w-[calc(50%_-_60px)] lg:absolute lg:top-0 lg:bottom-0 lg:right-0 *:max-lg:h-[300px] *:w-full lg:*:h-full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24922.784218669607!2d-73.87203585041878!3d40.659418835254804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1748535927837!5m2!1sen!2sbd"></iframe>
        </div>
    </div>

    <div class="available-sale my-20 xl:my-32 overflow-hidden">
        <div class="container">
            <div class="section-title text-center space-y-4 mb-8 xl:mb-16">
                <h2 class="text-gunmetal text-3xl xl:text-4xl font-semibold">
                    On Sale Positions
                </h2>
                <p class="text-riverblack">
                    A company engaged in travel that will make it easier for you when you want to vacation
                </p>
            </div>

            <div class="table-responsive overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-themered text-white">
                        <tr class="*:font-bold *:p-4 lg:*:p-8 *:text-center *:whitespace-nowrap max-lg:*:text-sm">
                            <th>PROPERTY NAME</th>
                            <th>TYPE</th>
                            <th>AREA (SQ.FT.)</th>
                            <th>PRICE</th>
                            <th>DETAIL PLAN</th>
                        </tr>
                    </thead>
                    <tbody class="max-lg:*:[&_tr]:font-medium lg:*:[&_tr]:font-semibold *:[&_tr]:text-gunmetal *:[&_tr]:py-6 max-lg:*:[&_tr]:px-4 lg:*:[&_tr]:px-8 *:[&_tr]:text-center [&_td]:whitespace-nowrap max-lg:[&_td]:text-sm">
                        <tr>
                            <td>
                                Deluxe Apartment
                            </td>
                            <td>
                                Residential
                            </td>
                            <td>
                                1230
                            </td>
                            <td>
                                $45,500
                            </td>
                            <td>
                                <a href="#" class="text-themered underline">
                                    VIEW PLAN
                                </a>
                            </td>
                        </tr>
                        <tr class="bg-[#F0F2F4]">
                            <td>
                                Studio Apartment
                            </td>
                            <td>
                                Office Space
                            </td>
                            <td>
                                2000
                            </td>
                            <td>
                                $78,500
                            </td>
                            <td>
                                <a href="#" class="text-themered underline">
                                    VIEW PLAN
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Luxury Apartment
                            </td>
                            <td>
                                Residential
                            </td>
                            <td>
                                1230
                            </td>
                            <td>
                                $45,500
                            </td>
                            <td>
                                <a href="#" class="text-themered underline">
                                    VIEW PLAN
                                </a>
                            </td>
                        </tr>
                        <tr class="bg-[#F0F2F4]">
                            <td>
                                King Sweet Apartment
                            </td>
                            <td>
                                Office Space
                            </td>
                            <td>
                                2000
                            </td>
                            <td>
                                $78,500
                            </td>
                            <td>
                                <a href="#" class="text-themered underline">
                                    VIEW PLAN
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nur Market
                            </td>
                            <td>
                                Residential
                            </td>
                            <td>
                                1230
                            </td>
                            <td>
                                $45,500
                            </td>
                            <td>
                                <a href="#" class="text-themered underline">
                                    VIEW PLAN
                                </a>
                            </td>
                        </tr>
                        <tr class="bg-[#F0F2F4]">
                            <td>
                                Small Deluxe Apartment
                            </td>
                            <td>
                                Office Space
                            </td>
                            <td>
                                2000
                            </td>
                            <td>
                                $78,500
                            </td>
                            <td>
                                <a href="#" class="text-themered underline">
                                    VIEW PLAN
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


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
</body>
</html>
