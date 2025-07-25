<x-app-layout>

    <!-- Properties Page Title -->
    <div class="sm:flex flex-wrap items-center gap-4 justify-between max-sm:space-y-6">
        <div class="name flex items-center gap-3">
            <div class="icon flex-[0_0_64px]">
                @isset($item->picture[0])
                    <img src="{{ $item->picture[0] }}" class="w-16 h-16 rounded-full object-cover object-center" alt="">
                @else
                    <img src="{{ asset('/images/pic1.png') }}" class="w-16 h-16 rounded-full object-cover object-center" alt="">
                @endisset
            </div>
            <div class="desc">
                <h3 class="text-lg font-semibold">
                    {{ $item->name }}
                </h3>
                <p class="text-sm text-gray-500">
                    {{ $item->address }}
                </p>
            </div>
        </div>

        <div class="meta-info">
            <ul class="flex items-center flex-wrap gap-x-10 gap-y-3.5 *:flex *:gap-2.5 *:items-center">
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
                    <div class="info">
                        <span class="text-sm text-gray-500">{{ __("Area:")}}</span> <br>
                        <b>{{$item->total_area ?? 0}}{{ __(" sq.ft") }}</b>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.7943 0H6.2429C2.14952 0 0 2.14952 0 6.2243V9.7756C0 13.8504 2.14952 15.9999 6.2243 15.9999H9.7756C13.8504 15.9999 15.9999 13.8504 15.9999 9.7756V6.2243C16.0186 2.14952 13.8691 0 9.7943 0Z" fill="#A6B1BF"/>
                            <path opacity="0.4" d="M29.7757 0H26.2243C22.1495 0 20 2.14953 20 6.2243V9.7757C20 13.8505 22.1495 16 26.2243 16H29.7757C33.8505 16 36 13.8505 36 9.7757V6.2243C36 2.14953 33.8505 0 29.7757 0Z" fill="#A6B1BF"/>
                            <path d="M29.7757 20H26.2243C22.1495 20 20 22.1495 20 26.2243V29.7757C20 33.8505 22.1495 36 26.2243 36H29.7757C33.8505 36 36 33.8505 36 29.7757V26.2243C36 22.1495 33.8505 20 29.7757 20Z" fill="#A6B1BF"/>
                            <path opacity="0.4" d="M9.7943 20H6.2429C2.14952 20 0 22.147 0 26.217V29.7643C0 33.853 2.14952 36 6.2243 36H9.7756C13.8504 36 15.9999 33.853 15.9999 29.783V26.2357C16.0186 22.147 13.8691 20 9.7943 20Z" fill="#A6B1BF"/>
                        </svg>
                    </div>
                    <div class="info">
                        <span class="text-sm text-gray-500">{{ __("Blocks/Units:")}}</span> <br>
                        <b>{{ $item->total_count->block ?? 0}}</b>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M34.7394 5.77999L23.0194 0.55999C21.2994 -0.20001 18.6994 -0.20001 16.9794 0.55999L5.25938 5.77999C2.29938 7.1 1.85938 8.9 1.85938 9.86C1.85938 10.82 2.29938 12.62 5.25938 13.94L16.9794 19.16C17.8394 19.54 18.9194 19.74 19.9994 19.74C21.0794 19.74 22.1594 19.54 23.0194 19.16L34.7394 13.94C37.6994 12.62 38.1394 10.82 38.1394 9.86C38.1394 8.9 37.7194 7.1 34.7394 5.77999Z" fill="#A6B1BF"/>
                            <path opacity="0.4" d="M20.0006 30.08C19.2406 30.08 18.4806 29.92 17.7806 29.62L4.30063 23.62C2.24063 22.7 0.640625 20.24 0.640625 17.98C0.640625 17.16 1.30063 16.5 2.12063 16.5C2.94063 16.5 3.60063 17.16 3.60063 17.98C3.60063 19.06 4.50064 20.46 5.50064 20.9L18.9806 26.9C19.6206 27.18 20.3606 27.18 21.0006 26.9L34.4806 20.9C35.4806 20.46 36.3806 19.08 36.3806 17.98C36.3806 17.16 37.0406 16.5 37.8606 16.5C38.6806 16.5 39.3406 17.16 39.3406 17.98C39.3406 20.22 37.7406 22.7 35.6806 23.62L22.2006 29.62C21.5206 29.92 20.7606 30.08 20.0006 30.08Z" fill="#A6B1BF"/>
                            <path opacity="0.4" d="M20.0006 39.9999C19.2406 39.9999 18.4806 39.8399 17.7806 39.5399L4.30063 33.5399C2.08063 32.5599 0.640625 30.3399 0.640625 27.8999C0.640625 27.0799 1.30063 26.4199 2.12063 26.4199C2.94063 26.4199 3.60063 27.0799 3.60063 27.8999C3.60063 29.1599 4.34064 30.2999 5.50064 30.8199L18.9806 36.8199C19.6206 37.0999 20.3606 37.0999 21.0006 36.8199L34.4806 30.8199C35.6206 30.3199 36.3806 29.1599 36.3806 27.8999C36.3806 27.0799 37.0406 26.4199 37.8606 26.4199C38.6806 26.4199 39.3406 27.0799 39.3406 27.8999C39.3406 30.3399 37.9006 32.5399 35.6806 33.5399L22.2006 39.5399C21.5206 39.8399 20.7606 39.9999 20.0006 39.9999Z" fill="#A6B1BF"/>
                        </svg>
                    </div>
                    <div class="info">
                        <span class="text-sm text-gray-500">{{ __("Floor:")}}</span> <br>
                        <b>{{ $item->total_count->floor ?? 0 }}</b>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="floor-plans bg-white border border-gray-200 rounded-2xl p-4 2xl:p-6 my-6">
        <h3 class="text-lg xl:text-2xl font-semibold mb-8">
            {{ __("Floor Plans")}}
        </h3>
        <div class="lg:flex flex-wrap gap-x-10 gap-y-5 tab-wrapper">
            <div class="lg:flex-[0_0_160px] text-center">
                <ul id="nav_floor_list" class="max-lg:grid max-md:grid-cols-2 md:max-lg:grid-cols-3 max-lg:gap-3 nav-tabs lg:space-y-3 [&_a]:w-full [&_a]:text-sm [&_a]:py-3.5 [&_a]:px-5 [&_a]:rounded-md [&_a]:font-semibold [&_a]:inline-flex [&_a]:items-center [&_a]:justify-center [&_a]:transition-all [&_a]:text-themered [&_a]:bg-[#FFF0F1]">
                    @php
                        $i = 1;
                    @endphp
                    @foreach($item->floors as $floor)
                    <li>
                        <a href="#floor_{{ $floor->id }}" data-floor-id="{{ $floor->id }}" class="floor_{{ $floor->id }} floor_select_btn @if($i == 1) active @endif nav-item hover:bg-themered hover:text-white [&.active]:bg-themered [&.active]:text-white hover:tracking-widest">
                            {{ $floor->name }}
                        </a>
                    </li>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </ul>
                <br>
                <ul class="max-lg:grid max-md:grid-cols-2 md:max-lg:grid-cols-3 max-lg:gap-3 nav-tabs lg:space-y-3 [&_a]:w-full [&_a]:text-sm [&_a]:py-3.5 [&_a]:px-5 [&_a]:rounded-md [&_a]:font-semibold [&_a]:inline-flex [&_a]:items-center [&_a]:justify-center [&_a]:transition-all [&_a]:text-themered [&_a]:bg-[#FFF0F1]">
                    <li>
                        <a href="#addNewFloor_modal" data-popup="modal" class="addNewFloor transition-all inline-flex items-center !bg-white !text-pureblack !py-3 border border-gray-300 rounded-lg px-4 hover:!bg-black-500 hover:!text-white" title="Add New Floor">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 20.2625V1.73633" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.2629 10.9997L1.73633 10.999" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex-1" id="floor_body">
                @if($item->total_count->floor > 0)
                    <div class="loading text-center h-full text-xl font-medium text-pureblack flex items-center justify-center flex-col">
                        <img src="{{ asset('/images/rotate.gif')}}" class="w-10 scale-x-[-1]" alt="Loading...">
                        Loading...
                    </div>
                    @else
                    <div class="loading text-center h-full text-xl font-medium text-pureblack flex items-center justify-center flex-col">
                        <iconify-icon icon="nonicons:not-found-16" width="50" height="50" style="color: #ff0000;"></iconify-icon>
                        <br>
                        No Floor Found
                    </div>
                @endif
                <!-- render form request floor_body.blade.php -->
            </div>
        </div>
    </div>

    @push("modal")
    <!-- Add Floor Modal -->
    <div id="addNewFloor_modal" class="asams-modal fixed inset-0 z-[1024] p-6 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
        <div class="modal-content bg-white w-full max-w-4xl mx-auto border border-slate-400 rounded-2xl relative">
            <div class="modal-header bg-[#F8F9FB] py-6 px-4 rounded-tl-2xl rounded-tr-2xl">
                <h2 class="text-center text-2xl">
                    <b>{{ __("Add New Floor")}}</b>
                </h2>
                <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                    <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
                </button>
            </div>
            <div class="modal-body p-6 lg:p-8 xl:p-10">
                <div class="max-w-2xl mx-auto" id="floor-list">
                    <!-- Floor Item -->
                    @if($item->floors)
                        @foreach($item->floors as $floor)
                            <div class="floor-item flex items-center justify-between p-3 rounded-lg transition-all hover:bg-[#F8F9FB]" data-id="{{ $floor->id }}">
                                <div class="floor-view">
                                    <span class="font-semibold block-name text-black-500 inline-block bg-[#F0F2F4] py-2.5 px-3 rounded-lg">
                                        {{ __("Floor :")}}
                                        <span class="value inline-block">
                                            <span class="text">{{ $floor->name }}</span>
                                            <input type="text" class="hidden edit-input rounded px-1 bg-transparent" />
                                        </span>
                                    </span>
                                    <span class="ml-2 text-sm text-gray-500"> {{ $floor->blocks()->count() }} {{ __(" Block") }}</span>
                                </div>
                                <div class="flex items-center gap-2 *:inline-flex *:items-center *:gap-3">
                                    <button type="button" class="delete-btn border border-red-100 bg-red-50 text-red-600 px-4 py-[10px] font-medium transition-all rounded hover:bg-red-100">
                                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.25 4.43368C12.5675 4.12844 9.8689 3.97119 7.1783 3.97119C5.58333 3.97119 3.98833 4.06369 2.39333 4.24868L0.75 4.43368M5.17969 3.49716L5.35691 2.28545C5.4858 1.40673 5.58246 0.75 6.9439 0.75H9.0544C10.4158 0.75 10.5205 1.44373 10.6414 2.2947L10.8186 3.49716M13.5185 7.35303L12.9949 16.6675C12.9063 18.1197 12.8338 19.2482 10.5863 19.2482H5.41464C3.16714 19.2482 3.09464 18.1197 3.00603 16.6675L2.48242 7.35303M6.6543 14.1626H9.3368M5.98633 10.4624H10.0141" stroke="#ED113D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        {{ __("Delete") }}
                                    </button>
                                    <button type="button" class="edit-btn border px-4 py-[10px] font-medium transition-all rounded text-black-500 hover:bg-black-500 hover:text-white">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.3329 1.20312H6.70339C2.62954 1.20312 1 2.83267 1 6.90652V11.7951C1 15.869 2.62954 17.4985 6.70339 17.4985H11.592C15.6659 17.4985 17.2954 15.869 17.2954 11.7951V10.1656" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.4389 2.03576L6.01853 8.4561C5.7741 8.7006 5.52967 9.1813 5.48078 9.5316L5.13043 11.9841C5.00007 12.8722 5.62744 13.4914 6.51554 13.3692L8.968 13.0189C9.3102 12.97 9.7909 12.7255 10.0435 12.4811L16.4639 6.06073C17.572 4.95264 18.0934 3.6653 16.4639 2.03576C14.8343 0.40622 13.547 0.92767 12.4389 2.03576Z" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.5195 2.95312C12.0654 4.90043 13.589 6.42406 15.5445 6.9781" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        {{ __("Edit") }}
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <!-- Add New Floor -->
                    <div class="flex items-center gap-2 px-4">
                        <input type="text" id="new-floor-name" placeholder="New Floor" class="flex-1 border rounded px-4 py-[10px]">
                        <button type="button" id="add-floor-btn" class="border px-6 py-[10px] font-medium transition-all rounded text-black-500 hover:bg-black-500 hover:text-white">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Blocks Modal -->
    <div id="floor_blocks_modal" class="asams-modal fixed inset-0 z-[1024] p-6 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
        <div class="loading text-center max-w-sm w-full py-6 bg-white fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl text-xl font-medium text-pureblack flex items-center justify-center flex-col">
            <img src="{{ asset('/images/rotate.gif')}}" class="w-10 scale-x-[-1]" alt="Loading...">
            Loading...
        </div>
    </div>

    <!-- Add Shop Modal -->
    <div id="add_shop_modal" class="asams-modal fixed inset-0 z-[1024] p-6 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
        <div class="loading text-center max-w-sm w-full py-6 bg-white fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl text-xl font-medium text-pureblack flex items-center justify-center flex-col">
            <img src="{{ asset('/images/rotate.gif')}}" class="w-10 scale-x-[-1]" alt="Loading...">
            Loading...
        </div>
    </div>

    <!-- Shop Details Modal -->
    <div id="shop_details_modal" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
        <div class="loading text-center max-w-sm w-full py-6 bg-white fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl text-xl font-medium text-pureblack flex items-center justify-center flex-col">
            <img src="{{ asset('/images/rotate.gif')}}" class="w-10 scale-x-[-1]" alt="Loading...">
            Loading...
        </div>
    </div>
    @endpush

    @push("scripts")
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <script>
            // floor body rendering script
            document.addEventListener('DOMContentLoaded', bindFloorSelectButtons);
            document.addEventListener('DOMContentLoaded', initModalHandlers);
            function preloader(style) {
                if(style == 'modalPreload') {
                    return `<div class="loading text-center max-w-sm w-full py-6 bg-white fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl text-xl font-medium text-pureblack flex items-center justify-center flex-col">
                                <img src="{{ asset('/images/rotate.gif')}}" class="w-10 scale-x-[-1]" alt="Loading...">
                                Loading...
                            </div>`;
                } else {
                    return `<div class="loading text-center h-full text-xl font-medium text-pureblack flex items-center justify-center flex-col">
                                <img src="{{ asset('/images/rotate.gif')}}" class="w-10 scale-x-[-1]" alt="Loading...">
                                Loading...
                            </div>`;
                }
            }

            function bindFloorSelectButtons() {
                document.querySelectorAll('.floor_select_btn').forEach(button => {
                    button.removeEventListener('click', handleFloorClick); // Prevent duplicate binding
                    button.addEventListener('click', handleFloorClick);
                });
            }

            function handleFloorClick(evt) {
                evt.preventDefault();

                document.getElementById("floor_body").innerHTML = preloader();

                document.querySelectorAll('.floor_select_btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                this.classList.add('active');

                const itemId = this.dataset.floorId;
                if (itemId === undefined) return;
                getFloorBody(itemId);
            }

            function triggerShopDetailsModal() {
                document.querySelectorAll('.shop-details-modal').forEach(button => {
                    button.addEventListener('click', function () {
                        const itemId = this.dataset.shopId;
                        document.getElementById("shop_details_modal").innerHTML = preloader('modalPreload');
                        axios.get('{{ route("admin.console.shop.show", ":id") }}'.replace(":id", itemId))
                            .then(response => {
                                document.getElementById("shop_details_modal").innerHTML = response.data.data;
                            }).catch(error => {
                            console.error(error);
                        });
                    });
                });
            }

            function getFloorBody(itemId){
                axios.get('{{ route("admin.console.floor.index") }}', {
                    params: {
                        floor_id: itemId,
                        page: 1
                    }
                }).then(response => {
                    document.getElementById("floor_body").innerHTML = response.data.html;

                    triggerShopDetailsModal();


                    $('#floor_show_type').on('change', showCorrectContent);

                    $('.nav-item').on('click', function () {
                        showCorrectContent();
                    });
                    $('#toggle-map-form').on('click', function () {
                        $('.upload_floor_map').slideToggle(300);
                    });
                    search();
                    shopForm();
                    loadFloorBlocks();
                    initModalHandlers();
                    deleteShop();
                    loadMore();

                }).catch(error => {
                    console.error(error);
                });
            }

            function deleteShop() {
                document.querySelectorAll(".delete-shop-btn").forEach(button => {
                    button.addEventListener("click", function () {
                        const shopId = this.dataset.shopId;
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

                                axios.delete('{{ route("admin.console.shop.destroy", ":id") }}'.replace(":id", shopId), {
                                    data: {
                                        password: password
                                    }
                                }).then(response => {
                                    if(response.data.success) {
                                        document.getElementById("shop-card-" + shopId).remove();
                                        Swal.fire({
                                            position: "top-end",
                                            icon: "success",
                                            title: "Shop deleted successfully",
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

            function loadFloorBlocks() {
                const floorBlockModalBtn = document.getElementById('floor_block_modal_btn');
                const floorBlockModal = document.getElementById('floor_blocks_modal');

                floorBlockModal.innerHTML = preloader('modalPreload');
                floorBlockModalBtn.addEventListener('click', function () {
                    const floor_id = this.dataset.floorId;
                    axios.get('{{ route("admin.console.block.index") }}', {
                        params: {
                            floor_id: floor_id,
                        }
                    }).then(response => {
                        document.getElementById("floor_blocks_modal").innerHTML = response.data.html;
                        blockOperations(floor_id);
                    }).catch(error => {
                        console.error(error);
                    })
                });
            }

            function search() {
                document.querySelectorAll("#floor_block, input[name='s']").forEach(input => {
                    input.addEventListener("change", function () {
                        let params = {
                            block_id: document.getElementById('floor_block').value,
                            s: document.getElementById('shop_search').value.trim(),
                            floor_id: document.getElementById('shop_search').dataset.floorId
                        }

                        axios.get('{{ route("admin.console.shop.index") }}', {
                            params: params
                        }).then(response => {
                            console.log(response.data);
                            const container = document.getElementById('shops_container');
                            container.innerHTML = response.data.html;

                            initModalHandlers();
                            deleteShop();
                            shopForm();
                            triggerShopDetailsModal();
                        }).catch(error => {
                            console.error(error);
                        });

                    });
                });
            }

            function loadMore() {
                const loadMoreBtn = document.getElementById('load-more-btn');
                if(!loadMoreBtn) return;

                loadMoreBtn.addEventListener('click', function() {
                    const btn = this;
                    const nextPageUrl = btn.getAttribute('data-next-page');
                    let itemId = document.querySelector('.floor_select_btn.active').dataset.floorId;

                    if (!nextPageUrl) {
                        btn.style.display = 'none';
                        return;
                    }

                    btn.disabled = true;
                    btn.textContent = 'Loading...';

                    axios.get(nextPageUrl + '&floor_id=' + itemId)
                        .then(response => {
                            const data = response.data;
                            if (data.success) {
                                const container = document.getElementById('add_new_shop_card');
                                container.insertAdjacentHTML("beforebegin", data.html);

                                console.log(data);

                                if (data.next_page_url) {
                                    btn.setAttribute('data-next-page', data.next_page_url);
                                    btn.disabled = false;
                                    btn.textContent = 'Load More';
                                } else {
                                    btn.style.display = 'none'; // No more pages
                                }
                            } else {
                                btn.style.display = 'none';
                            }
                        }).catch(error => {
                        btn.disabled = false;
                        btn.textContent = 'Load More';
                        console.error(error);
                    });
                });
            }

            function initModalHandlers() {
                // Open modal
                document.querySelectorAll('[data-popup="modal"]').forEach(trigger => {
                    trigger.addEventListener('click', function (e) {
                        e.preventDefault();
                        const targetModalSelector = this.getAttribute('href');
                        const targetModal = document.querySelector(targetModalSelector);

                        // Close any open modal
                        document.querySelectorAll('.asams-modal.show').forEach(modal => {
                            modal.classList.add('hidden');
                            modal.classList.remove('show');
                        });

                        // Open target modal
                        if (targetModal) {
                            targetModal.classList.remove('hidden');
                            targetModal.classList.add('show');
                        }
                    });
                });

                // Close modal when clicking outside .modal-content or on .modal-close
                document.querySelectorAll('.asams-modal').forEach(modal => {
                    modal.addEventListener('click', function (e) {
                        const modalContent = modal.querySelector('.modal-content');
                        const isClickInside = modalContent.contains(e.target);
                        const isCloseBtn = e.target.closest('.modal-close');

                        if (!isClickInside || isCloseBtn) {
                            modal.classList.add('hidden');
                            modal.classList.remove('show');
                        }
                    });
                });

                // Close modal on Escape key
                document.addEventListener('keydown', function (e) {
                    if (e.key === 'Escape') {
                        document.querySelectorAll('.asams-modal.show').forEach(modal => {
                            modal.classList.add('hidden');
                            modal.classList.remove('show');
                        });
                    }
                });
            }

            function blockOperations(floor_id) {
                const blockContainer = document.getElementById('block_container');
                const addBlockBtn = document.getElementById('add-block-btn');
                const newBlockName = document.getElementById('new-block-name');

                // Add New Block
                addBlockBtn.addEventListener('click', function () {
                    const name = newBlockName.value.trim();
                    if (!name || !floor_id) return;

                    axios.post('{{ route("admin.console.block.store") }}', {
                        floor_id,
                        name
                    }).then(response => {
                        if (response.data.success) {
                            const block = response.data.data;
                            const block_id = block.id;
                            const block_name = block.name;

                            const wrapper = document.createElement('div');
                            wrapper.innerHTML = `
            <div class="block-item flex items-center justify-between p-3 rounded-lg transition-all hover:bg-[#F8F9FB]" data-id="${block_id}">
                            <div class="block-view">
                                <span class="font-semibold block-name text-black-500 inline-block bg-[#F0F2F4] py-2.5 px-3 rounded-lg">
                                    Block :
                                    <span class="value inline-block">
                                        <span class="text">${block_name}</span>
                                        <input type="text" class="hidden edit-input rounded px-1 bg-transparent" />
                                    </span>
                                </span>
                                <span class="ml-2 text-sm text-gray-500">0 Shops</span>
                            </div>
                            <div class="flex items-center gap-2 *:inline-flex *:items-center *:gap-3">
                                <button type="button" class="delete-btn border border-red-100 red bg-red-50 text-red-600 px-4 py-[10px] font-medium transition-all rounded hover:bg-red-100">
                                    <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.25 4.43368C12.5675 4.12844 9.8689 3.97119 7.1783 3.97119C5.58333 3.97119 3.98833 4.06369 2.39333 4.24868L0.75 4.43368M5.17969 3.49716L5.35691 2.28545C5.4858 1.40673 5.58246 0.75 6.9439 0.75H9.0544C10.4158 0.75 10.5205 1.44373 10.6414 2.2947L10.8186 3.49716M13.5185 7.35303L12.9949 16.6675C12.9063 18.1197 12.8338 19.2482 10.5863 19.2482H5.41464C3.16714 19.2482 3.09464 18.1197 3.00603 16.6675L2.48242 7.35303M6.6543 14.1626H9.3368M5.98633 10.4624H10.0141" stroke="#ED113D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Delete
                                </button>
                                <button type="button" class="edit-btn border px-4 py-[10px] font-medium transition-all rounded text-black-500 hover:bg-black-500 hover:text-white">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.3329 1.20312H6.70339C2.62954 1.20312 1 2.83267 1 6.90652V11.7951C1 15.869 2.62954 17.4985 6.70339 17.4985H11.592C15.6659 17.4985 17.2954 15.869 17.2954 11.7951V10.1656" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12.4389 2.03576L6.01853 8.4561C5.7741 8.7006 5.52967 9.1813 5.48078 9.5316L5.13043 11.9841C5.00007 12.8722 5.62744 13.4914 6.51554 13.3692L8.968 13.0189C9.3102 12.97 9.7909 12.7255 10.0435 12.4811L16.4639 6.06073C17.572 4.95264 18.0934 3.6653 16.4639 2.03576C14.8343 0.40622 13.547 0.92767 12.4389 2.03576Z" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.5195 2.95312C12.0654 4.90043 13.589 6.42406 15.5445 6.9781" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Edit
                                </button>
                            </div>
                        </div>`;
                            blockContainer.appendChild(wrapper.firstElementChild);

                            document.getElementById('floor_block').insertAdjacentHTML('beforeend', `<option value="${block_id}">${block_name}</option>`);
                            newBlockName.value = '';


                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "Block has been saved.",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    }).catch(console.error);
                });

                // Event Delegation for Delete & Edit
                blockContainer.addEventListener('click', function (e) {
                    const target = e.target;

                    // Delete
                    if (target.classList.contains('delete-btn')) {
                        const blockItem = target.closest('.block-item');
                        const block_id = blockItem.dataset.blockId;

                        console.log("block item: ", blockItem);
                        console.log("block id: ", block_id);

                        Swal.fire({
                            title: "Are you sure?",
                            text: "You won't be able to revert this!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, delete it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                axios.delete(`{{ route('admin.console.block.destroy', ':id') }}`.replace(':id', block_id))
                                    .then(response => {
                                        if (response.data.success) {
                                            blockItem.remove();
                                            document.querySelector(`#floor_block > option[value="${block_id}"`).remove();
                                            Swal.fire({
                                                position: "top-end",
                                                icon: "success",
                                                title: "Block has been deleted.",
                                                showConfirmButton: false,
                                                timer: 1500
                                            });
                                        }
                                    }).catch(console.error);
                            }
                        });
                    }

                    // Edit/Save
                    if (target.classList.contains('edit-btn')) {
                        const blockItem = target.closest('.block-item');
                        const valueEl = blockItem.querySelector('.value');
                        const textEl = valueEl.querySelector('.text');
                        const inputEl = valueEl.querySelector('.edit-input');
                        const block_id = blockItem.dataset.blockId;

                        if (inputEl.classList.contains('hidden')) {
                            // Edit Mode
                            inputEl.value = textEl.textContent.trim();
                            inputEl.classList.remove('hidden');
                            textEl.classList.add('hidden');
                            target.innerHTML = 'Save';
                        } else {
                            // Save Mode
                            const newText = inputEl.value.trim();
                            if (newText === '') return;

                            axios.put(`{{ route('admin.console.block.update', ':id') }}`.replace(':id', block_id), {
                                name: newText
                            }).then(response => {
                                if (response.data.success) {
                                    textEl.textContent = newText;
                                    inputEl.classList.add('hidden');
                                    textEl.classList.remove('hidden');
                                    target.innerHTML = `
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.3329 1.20312H6.70339C2.62954 1.20312 1 2.83267 1 6.90652V11.7951C1 15.869 2.62954 17.4985 6.70339 17.4985H11.592C15.6659 17.4985 17.2954 15.869 17.2954 11.7951V10.1656" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.4389 2.03576L6.01853 8.4561C5.7741 8.7006 5.52967 9.1813 5.48078 9.5316L5.13043 11.9841C5.00007 12.8722 5.62744 13.4914 6.51554 13.3692L8.968 13.0189C9.3102 12.97 9.7909 12.7255 10.0435 12.4811L16.4639 6.06073C17.572 4.95264 18.0934 3.6653 16.4639 2.03576C14.8343 0.40622 13.547 0.92767 12.4389 2.03576Z" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.5195 2.95312C12.0654 4.90043 13.589 6.42406 15.5445 6.9781" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        Edit
                                    `;

                                    document.querySelector(`#floor_block > option[value="${block_id}"`).text = newText;
                                    document.querySelectorAll(`.shop-block-title-${block_id}`).forEach(title => {
                                        title.textContent = newText;
                                    });

                                    Swal.fire({
                                        position: "top-end",
                                        icon: "success",
                                        title: "Block has been updated.",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                }
                            }).catch(console.error);
                        }
                    }
                });
            }

            function shopForm(){

                document.querySelectorAll(".store_shop_btn, .update_shop_btn").forEach(button => {
                    button.addEventListener("click", function () {
                        document.getElementById("add_shop_modal").innerHTML = preloader('modalPreload');
                        let params = {};
                        if (this.classList.contains("store_shop_btn")) {
                            params = {
                                floor_id: this.dataset.floorId,
                            }
                        }

                        if (this.classList.contains("update_shop_btn")) {
                            params = {
                                floor_id: this.dataset.floorId,
                                shop_id: this.dataset.shopId
                            }
                        }


                        axios.get("{{ route('admin.console.shop.form') }}", {
                            params
                        })
                            .then(response => {
                                document.getElementById("add_shop_modal").innerHTML = response.data.html;
                                shopStore(params.shop_id);
                                initShopFeatureModal();
                            }).catch(error => {
                            console.error(error);
                        });
                    });
                });
            }

            function shopStore(shopId = null) {
                const form = document.getElementById('shop_form');

                if (form) {
                    form.addEventListener('submit', function (e) {
                        e.preventDefault(); // prevent form from submitting

                        const formData = new FormData(form); // console.log(key, value);
                        const pictureInput = document.querySelector('input[name="picture"]');

                        if (pictureInput.files.length > 0) {
                            formData.append("picture", pictureInput.files[0]);
                        }

                        document.querySelectorAll('input[name="key"]').forEach((input) => {
                            formData.append('key[]', input.value);
                        });

                        document.querySelectorAll('input[name="value"]').forEach((input) => {
                            formData.append('value[]', input.value);
                        });

                        document.querySelectorAll('.error-message').forEach(el => {
                            el.innerText = '';
                        });

                        let url = '';
                        if(shopId) {
                            url = '{{ route("admin.console.shop.update", ":id") }}'.replace(':id', shopId);
                            formData.append('_method', 'PUT');

                        } else {
                            url = '{{ route("admin.console.shop.store") }}';
                        }

                        axios.post(url, formData, {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        }).then(response => {
                            getFloorBody(response.data.data.floor_id);
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "Shop has been saved.",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            document.querySelectorAll('#add_shop_modal').forEach(modal => {
                                modal.classList.add('hidden');
                                modal.classList.remove('show');
                            });

                        }).catch(error => {
                            if (error.response && error.response.status === 422) {
                                const errors = error.response.data.errors;
                                for (const field in errors) {
                                    const message = errors[field][0];
                                    const errorElement = document.querySelector(`.error-message[data-error="${field}"]`);
                                    if (errorElement) {
                                        errorElement.innerText = message;
                                    }
                                }
                            } else {
                                console.error(error);
                            }
                        });
                    });
                }
            }

            function initShopFeatureModal() {
                const container = $('#shop-feature-list');

                container.on('click', '.add-shop-featurebtn', function (e) {
                    e.preventDefault();

                    const addRow = $(this).closest('.field-item');
                    const name = addRow.find('input#key').val().trim();
                    const value = addRow.find('input#value').val().trim();

                    console.log("name: ", name, "value: ", value);

                    if (!name || !value) return;

                    const newItem = `
                <div class="field-item flex flex-wrap gap-3">
                    <input type="text" name="key" id="key" value="${name}" placeholder="key" class="flex-1 text-sm py-3 px-4 bg-white border rounded-lg">
                    <input type="text" name="value" id="value" value="${value}" placeholder="value" class="flex-1 text-sm py-3 px-4 bg-white border rounded-lg">
                    <div>
                        <button type="button" class="delete-btn border border-red-100 inline-flex gap-3 items-center bg-red-50 text-red-600 px-4 py-[11px] font-medium transition-all rounded hover:bg-red-100">
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.25 4.43368C12.5675 4.12844 9.8689 3.97119 7.1783 3.97119C5.58333 3.97119 3.98833 4.06369 2.39333 4.24868L0.75 4.43368M5.17969 3.49716L5.35691 2.28545C5.4858 1.40673 5.58246 0.75 6.9439 0.75H9.0544C10.4158 0.75 10.5205 1.44373 10.6414 2.2947L10.8186 3.49716M13.5185 7.35303L12.9949 16.6675C12.9063 18.1197 12.8338 19.2482 10.5863 19.2482H5.41464C3.16714 19.2482 3.09464 18.1197 3.00603 16.6675L2.48242 7.35303M6.6543 14.1626H9.3368M5.98633 10.4624H10.0141" stroke="#ED113D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Delete
                        </button>
                    </div>
                </div>
            `;

                    // Insert before the last .add-item row
                    $('.add-item').before(newItem);

                    // Reset fields
                    addRow.find('input#key').val('');
                    addRow.find('input#value').val('');
                });

                // Delete handler
                container.on('click', '.delete-btn', function (e) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    $(this).closest('.field-item').remove();
                });
            }

            document.addEventListener("DOMContentLoaded", function () {
                // init loading
                let itemId = document.querySelector('.floor_select_btn.active')?.dataset.floorId;
                const activeBtn = document.querySelector('.floor_select_btn.active');
                if (activeBtn) {
                    itemId = activeBtn.dataset.floorId;
                    getFloorBody(itemId);
                }

                /**
                 * starting floor script
                 * @type {Element}
                 */
                const addBtn = document.getElementById('add-floor-btn');
                const newFloorInput = document.getElementById('new-floor-name');
                const floorNavList = document.getElementById("nav_floor_list");

                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                // Add new floor
                addBtn.addEventListener('click', function () {
                    const newFloorName = newFloorInput.value.trim();
                    if (!newFloorName) return;

                    axios.post('{{ route("admin.console.floor.store") }}', {
                        property_id: '{{ $item->id }}',
                        name: newFloorName
                    }, {
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        }
                    }).then(response => {
                        if (response.data.success) {
                            const data = response.data.data;
                            const floor_id = data.id;
                            const floor_name = data.name;

                            let wrapper = document.createElement('div');
                            wrapper.innerHTML = `
                                <div class="floor-item flex items-center justify-between p-3 rounded-lg transition-all hover:bg-[#F8F9FB]" data-id="${floor_id}">
                                    <div class="floor-view">
                                        <span class="font-semibold block-name text-black-500 inline-block bg-[#F0F2F4] py-2.5 px-3 rounded-lg">
                                            Floor :
                                            <span class="value inline-block">
                                                <span class="text">${floor_name}</span>
                                                <input type="text" class="hidden edit-input rounded px-1 bg-transparent" />
                                            </span>
                                        </span>
                                        <span class="ml-2 text-sm text-gray-500">0 Blocks</span>
                                    </div>
                                    <div class="flex items-center gap-2 *:inline-flex *:items-center *:gap-3">
                                        <button type="button" class="delete-btn border border-red-100 red bg-red-50 text-red-600 px-4 py-[10px] font-medium transition-all rounded hover:bg-red-100">
                                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.25 4.43368C12.5675 4.12844 9.8689 3.97119 7.1783 3.97119C5.58333 3.97119 3.98833 4.06369 2.39333 4.24868L0.75 4.43368M5.17969 3.49716L5.35691 2.28545C5.4858 1.40673 5.58246 0.75 6.9439 0.75H9.0544C10.4158 0.75 10.5205 1.44373 10.6414 2.2947L10.8186 3.49716M13.5185 7.35303L12.9949 16.6675C12.9063 18.1197 12.8338 19.2482 10.5863 19.2482H5.41464C3.16714 19.2482 3.09464 18.1197 3.00603 16.6675L2.48242 7.35303M6.6543 14.1626H9.3368M5.98633 10.4624H10.0141" stroke="#ED113D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Delete
                                        </button>
                                        <button type="button" class="edit-btn border px-4 py-[10px] font-medium transition-all rounded text-black-500 hover:bg-black-500 hover:text-white">
                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.3329 1.20312H6.70339C2.62954 1.20312 1 2.83267 1 6.90652V11.7951C1 15.869 2.62954 17.4985 6.70339 17.4985H11.592C15.6659 17.4985 17.2954 15.869 17.2954 11.7951V10.1656" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.4389 2.03576L6.01853 8.4561C5.7741 8.7006 5.52967 9.1813 5.48078 9.5316L5.13043 11.9841C5.00007 12.8722 5.62744 13.4914 6.51554 13.3692L8.968 13.0189C9.3102 12.97 9.7909 12.7255 10.0435 12.4811L16.4639 6.06073C17.572 4.95264 18.0934 3.6653 16.4639 2.03576C14.8343 0.40622 13.547 0.92767 12.4389 2.03576Z" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M11.5195 2.95312C12.0654 4.90043 13.589 6.42406 15.5445 6.9781" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Edit
                                        </button>
                                    </div>
                                </div>
                            `;
                            let newFloor = wrapper.firstElementChild;
                            const lastFloor = document.querySelector('#floor-list > .flex.items-center:last-child');
                            if (lastFloor) {
                                lastFloor.insertAdjacentElement('beforebegin', newFloor);
                            } else {
                                document.getElementById('floor-list').appendChild(newFloor);
                            }
                            newFloorInput.value = '';

                            const newNavFloor = `<li>
                                                    <a href="#floor_${floor_id}" data-floor-id="${floor_id}" class="#floor_${floor_id} floor_select_btn nav-item hover:bg-themered hover:text-white [&.active]:bg-themered [&.active]:text-white">
                                                        ${floor_name}
                                                    </a>
                                                </li>`;
                            floorNavList.insertAdjacentHTML('beforeend', newNavFloor);
                            bindFloorSelectButtons();

                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "Floor has been saved.",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    }).catch(console.error);
                });

                // Delegated event listeners for floor list
                document.getElementById('floor-list').addEventListener('click', function (e) {
                    const deleteBtn = e.target.closest('.delete-btn');
                    const editBtn = e.target.closest('.edit-btn');
                    const floorItem = e.target.closest('.floor-item');

                    // delete floor script
                    if (deleteBtn && floorItem) {
                        e.preventDefault();

                        Swal.fire({
                            title: "Are you sure?",
                            text: "You won't be able to revert this!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, delete it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                const floor_id = floorItem.getAttribute('data-id');
                                const url = '{{ route("admin.console.floor.destroy", ":id") }}'.replace(':id', floor_id);

                                axios.delete(url, {
                                    headers: {
                                        'X-CSRF-TOKEN': csrfToken
                                    }
                                }).then(response => {
                                    if (response.data.success) {
                                        floorItem.remove();

                                        const floorNavListItem = floorNavList.querySelector(`[data-floor-id="${floor_id}"]`);
                                        if (floorNavListItem) {
                                            floorNavListItem.parentNode.remove();
                                        }

                                        Swal.fire({
                                            position: "top-end",
                                            icon: "success",
                                            title: "Floor has been deleted.",
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                    }
                                }).catch(console.error);
                            }
                        });
                    }

                    // edit floor script
                    if (editBtn && floorItem) {
                        const valueEl = floorItem.querySelector('.value');
                        const textEl = valueEl.querySelector('.text');
                        const inputEl = valueEl.querySelector('.edit-input');
                        const isEditing = !inputEl.classList.contains('hidden');

                        if (!isEditing) {
                            inputEl.value = textEl.textContent.trim();
                            inputEl.classList.remove('hidden');
                            textEl.classList.add('hidden');
                            editBtn.innerText = 'Save';
                        } else {
                            const newText = inputEl.value.trim();
                            const floor_id = floorItem.getAttribute('data-id');

                            axios.put('{{ route("admin.console.floor.update", ":id") }}'.replace(':id', floor_id), {
                                name: newText
                            }, {
                                headers: {
                                    'X-CSRF-TOKEN': csrfToken
                                }
                            }).then(response => {
                                if (response.data.success) {
                                    textEl.textContent = newText;
                                    inputEl.classList.add('hidden');
                                    textEl.classList.remove('hidden');
                                    editBtn.innerHTML = 'Edit';

                                    const floorNavListItem = floorNavList.querySelector(`[data-floor-id="${floor_id}"]`);
                                    if (floorNavListItem) {
                                        floorNavListItem.textContent = newText;
                                    }

                                    Swal.fire({
                                        position: "top-end",
                                        icon: "success",
                                        title: "Floor has been updated.",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                }
                            }).catch(console.error);
                        }
                    }
                });
            });

            function showCorrectContent() {
                const view = $('#floor_show_type').val();
                const $activePane = $('.pane-tab');
                $activePane.find('.floor_show_type_grid').toggle(view === 'Grid');
                $activePane.find('.floor_show_type_map').toggle(view === 'Map');
            }

        </script>

    @endpush
</x-app-layout>
