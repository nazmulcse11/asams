<x-app-layout>
    <form action="" class="flex items-end gap-4">
        <div class="input-field space-y-1 flex-[0_0_200px]">
            <label>
                {{ __("Property")}}
            </label>
            <select name="" class="w-full px-4 py-3 rounded-lg border border-[#E1E5EA] bg-white">
                <option value="Nur Super Market">Nur Super Market</option>
                <option value="NEN Market">NEN Market</option>
                <option value="NEN VIP Market">NEN VIP Market</option>
            </select>
        </div>
    </form>
    <div class="floor-plans bg-white border border-gray-200 rounded-2xl p-4 2xl:p-6 my-6">
        <h3 class="text-lg xl:text-2xl font-semibold mb-4">
            {{ __("Floor Plans")}}
        </h3>
        <div class="lg:flex flex-wrap gap-x-10 gap-y-5 tab-wrapper max-lg:space-y-6">
            <div class="lg:flex-[0_0_160px] text-center">
                <ul id="nav_floor_list" class="max-lg:grid max-md:grid-cols-2 md:max-lg:grid-cols-3 max-lg:gap-3 nav-tabs lg:space-y-3 [&_a]:w-full [&_a]:text-sm [&_a]:py-3.5 [&_a]:px-5 [&_a]:rounded-md [&_a]:font-semibold [&_a]:inline-flex [&_a]:items-center [&_a]:justify-center [&_a]:transition-all [&_a]:text-themered [&_a]:bg-[#FFF0F1]">

                    <li>
                        <a href="#floor_1" data-floor-id="1" class="floor_1 floor_select_btn active nav-item hover:bg-themered hover:text-white [&.active]:bg-themered [&.active]:text-white hover:tracking-widest">
                            {{ __('Floor 1') }}
                        </a>
                    </li>

                    <li>
                        <a href="#floor_2" data-floor-id="2" class="floor_2 floor_select_btn nav-item hover:bg-themered hover:text-white [&.active]:bg-themered [&.active]:text-white hover:tracking-widest">
                            {{ __('Floor 2') }}
                        </a>
                    </li>

                    <li>
                        <a href="#floor_3" data-floor-id="3" class="floor_3 floor_select_btn nav-item hover:bg-themered hover:text-white [&.active]:bg-themered [&.active]:text-white hover:tracking-widest">
                            {{ __('Floor 3') }}
                        </a>
                    </li>

                    <li>
                        <a href="#floor_4" data-floor-id="4" class="floor_4 floor_select_btn nav-item hover:bg-themered hover:text-white [&.active]:bg-themered [&.active]:text-white hover:tracking-widest">
                            {{ __('Floor 4') }}
                        </a>
                    </li>

                    <li>
                        <a href="#floor_5" data-floor-id="5" class="floor_5 floor_select_btn nav-item hover:bg-themered hover:text-white [&.active]:bg-themered [&.active]:text-white hover:tracking-widest">
                            {{ __('Floor 5') }}
                        </a>
                    </li>

                </ul>
            </div>
            <div class="flex-1 tab-content" id="floor_body">
                <div class="pane-tab" id="floor_1">
                    <form action="" class="filter-wrapper flex flex-wrap items-end justify-between gap-3 xl:gap-6 mb-6">
                        @csrf
                        <div class="left">
                            <div class="input-area relative">
                                <input type="text" name="s" id="shop_search" data-floor-id="1" class="w-full px-4 py-3 !pl-9 rounded-lg bg-[#F8F9FB]" placeholder="Search">
                                <span class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full border-none flex items-center justify-center pl-2">
                                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:search"></iconify-icon>
                                </span>
                            </div>
                        </div>
                        <div class="right max-w-4xl">
                            <div class="flex flex-wrap items-end gap-3 xl:gap-6">

                                <div class="input-area space-y-1">
                                    <label>{{ __("Showing")}}</label>
                                    <select class="w-full px-4 py-3 rounded-lg border border-[#E1E5EA]" id="floor_show_type">
                                        <option value="Grid" selected>{{ __("Grid")}}</option>
                                        <option value="Map">{{ __("Map")}}</option>
                                    </select>
                                </div>

                                <div class="input-area space-y-1">
                                    <label>{{ __("Block")}}</label>
                                    <select name="floor_block" id="floor_block" data-floor-id="1" class="w-full px-4 py-3 rounded-lg  border border-[#E1E5EA]">
                                        <option value="">{{ __("Select")}}</option>
                                        <option value="A">{{ __("A")}}</option>
                                        <option value="B">{{ __("B")}}</option>
                                        <option value="C">{{ __("C")}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="floor_show_type_grid">
                        <div id="shops_container" class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-3 gap-6">

                           <!-- Block Item -->
                            <div class="block-item rounded-2xl overflow-hidden border border-slate-100 bg-white">
                                <div class="block-title text-lg text-[#607085] bg-[#F0F2F4] px-6 py-3 flex items-center justify-between">
                                    <span>
                                        {{ __("Floor :")}} <b class="text-black-500 fomt-bold">{{ __("Floor 1")}}</b>
                                    </span>
                                    <span>
                                        {{ __("Block :")}} <b class="text-black-500 fomt-bold">{{ __("A")}}</b>
                                    </span>
                                </div>
                                <div class="px-4 py-6 xl:p-6">
                                    <img src="{{ asset('/images/pic1.png') }}" alt="Property Image" class="w-full object-cover rounded-lg">
                                    <div class="flex items-center justify-between gap-4 flex-wrap mt-5 mb-6">
                                        <h5 class="text-lg">
                                            <span class="text-gray-500">
                                                {{ __("Shop No.")}} <b class="font-bold text-black-500 text-2xl">{{ __("501")}}</b>
                                            </span>
                                        </h5>
                                        <span class="inline-flex bg-green-200 text-green-600 text-sm px-5 py-2 rounded-3xl">
                                            {{ __("Vacant")}}
                                        </span>
                                    </div>
                                    <p class="line-clamp-3">
                                        {{ __("This is well-designed shop offers a flexible layout, excellent frontage, and top visible - making it ideal for boutiques, salons, clinics, stores, or cafés.")}}
                                    </p>
                                    <div class="clearfix my-6">
                                        <ul class="float-start space-y-3">
                                            <li>
                                                {{ __("Area: ")}}<b>{{ __("1980 sq.ft")}}</b>
                                            </li>
                                            <li>
                                                {{ __("Length: ")}}<b>{{ __("55'0\"")}}</b>
                                            </li>
                                            <li>
                                                {{ __("Wide: ")}}<b>{{ __("36'2\"")}}</b>
                                            </li>
                                        </ul>
                                        <img src="{{ asset('/images/qr.png') }}" class="float-end ml-2 mb-2 border border-slate-100 rounded-lg" alt="">
                                    </div>
                                    <div class="mt-7 flex gap-3 *:text-sm *:py-3.5 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
                                        <a href="#reserv_shop_1" data-popup="modal" class="text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                                            Reserve This Shop
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Block Item End -->

                           <!-- Block Item -->
                            <div class="block-item rounded-2xl overflow-hidden border border-slate-100 bg-white">
                                <div class="block-title text-lg text-[#607085] bg-[#F0F2F4] px-6 py-3 flex items-center justify-between">
                                    <span>
                                        {{ __("Floor :")}} <b class="text-black-500 fomt-bold">{{ __("Floor 1")}}</b>
                                    </span>
                                    <span>
                                        {{ __("Block :")}} <b class="text-black-500 fomt-bold">{{ __("A")}}</b>
                                    </span>
                                </div>
                                <div class="px-4 py-6 xl:p-6">
                                    <img src="{{ asset('/images/pic1.png') }}" alt="Property Image" class="w-full object-cover rounded-lg">
                                    <div class="flex items-center justify-between gap-4 flex-wrap mt-5 mb-6">
                                        <h5 class="text-lg">
                                            <span class="text-gray-500">
                                                {{ __("Shop No.")}} <b class="font-bold text-black-500 text-2xl">{{ __("501")}}</b>
                                            </span>
                                        </h5>
                                        <span class="inline-flex bg-green-200 text-green-600 text-sm px-5 py-2 rounded-3xl">
                                            {{ __("Vacant")}}
                                        </span>
                                    </div>
                                    <p class="line-clamp-3">
                                        {{ __("This is well-designed shop offers a flexible layout, excellent frontage, and top visible - making it ideal for boutiques, salons, clinics, stores, or cafés.")}}
                                    </p>
                                    <div class="clearfix my-6">
                                        <ul class="float-start space-y-3">
                                            <li>
                                                {{ __("Area: ")}}<b>{{ __("1980 sq.ft")}}</b>
                                            </li>
                                            <li>
                                                {{ __("Length: ")}}<b>{{ __("55'0\"")}}</b>
                                            </li>
                                            <li>
                                                {{ __("Wide: ")}}<b>{{ __("36'2\"")}}</b>
                                            </li>
                                        </ul>
                                        <img src="{{ asset('/images/qr.png') }}" class="float-end ml-2 mb-2 border border-slate-100 rounded-lg" alt="">
                                    </div>
                                    <div class="mt-7 flex gap-3 *:text-sm *:py-3.5 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
                                        <a href="#reserv_shop_1" data-popup="modal" class="text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                                            Reserve This Shop
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Block Item End -->

                           <!-- Block Item -->
                            <div class="block-item rounded-2xl overflow-hidden border border-slate-100 bg-white">
                                <div class="block-title text-lg text-[#607085] bg-[#F0F2F4] px-6 py-3 flex items-center justify-between">
                                    <span>
                                        {{ __("Floor :")}} <b class="text-black-500 fomt-bold">{{ __("Floor 1")}}</b>
                                    </span>
                                    <span>
                                        {{ __("Block :")}} <b class="text-black-500 fomt-bold">{{ __("A")}}</b>
                                    </span>
                                </div>
                                <div class="px-4 py-6 xl:p-6">
                                    <img src="{{ asset('/images/pic1.png') }}" alt="Property Image" class="w-full object-cover rounded-lg">
                                    <div class="flex items-center justify-between gap-4 flex-wrap mt-5 mb-6">
                                        <h5 class="text-lg">
                                            <span class="text-gray-500">
                                                {{ __("Shop No.")}} <b class="font-bold text-black-500 text-2xl">{{ __("501")}}</b>
                                            </span>
                                        </h5>
                                        <span class="inline-flex bg-green-200 text-green-600 text-sm px-5 py-2 rounded-3xl">
                                            {{ __("Vacant")}}
                                        </span>
                                    </div>
                                    <p class="line-clamp-3">
                                        {{ __("This is well-designed shop offers a flexible layout, excellent frontage, and top visible - making it ideal for boutiques, salons, clinics, stores, or cafés.")}}
                                    </p>
                                    <div class="clearfix my-6">
                                        <ul class="float-start space-y-3">
                                            <li>
                                                {{ __("Area: ")}}<b>{{ __("1980 sq.ft")}}</b>
                                            </li>
                                            <li>
                                                {{ __("Length: ")}}<b>{{ __("55'0\"")}}</b>
                                            </li>
                                            <li>
                                                {{ __("Wide: ")}}<b>{{ __("36'2\"")}}</b>
                                            </li>
                                        </ul>
                                        <img src="{{ asset('/images/qr.png') }}" class="float-end ml-2 mb-2 border border-slate-100 rounded-lg" alt="">
                                    </div>
                                    <div class="mt-7 flex gap-3 *:text-sm *:py-3.5 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
                                        <a href="#reserv_shop_1" data-popup="modal" class="text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                                            Reserve This Shop
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Block Item End -->

                        </div>
                    </div>

                    <!-- Floor Show Type Map -->
                    <div class="floor_show_type_map hidden border p-4 xl:p-10 rounded-xl">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push("modal")

    <!-- Reserve Shop Modal -->
    <div id="reserv_shop_1" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
        <div class="modal-content bg-white w-full max-w-4xl mx-auto border border-slate-400 rounded-2xl relative">
            <div class="modal-header p-4 lg:p-6 pb-0 rounded-tl-2xl rounded-tr-2xl">
                
                <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                    <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C14.7394 2 17.2264 3.11009 19.0352 4.90332L10.25 13.6895L8.03027 11.4697C7.73738 11.1768 7.26262 11.1768 6.96973 11.4697C6.67683 11.7626 6.67683 12.2374 6.96973 12.5303L9.71973 15.2803C10.0126 15.5732 10.4874 15.5732 10.7803 15.2803L20.0215 6.03809C21.2637 7.70445 22 9.76862 22 12C22 17.51 17.51 22 12 22C6.49 22 2 17.51 2 12C2 6.49 6.49 2 12 2Z" fill="#2B323B"/>
                        </svg>
                    </div>
                    <div class="">
                        <h2 class="text-xl font-semibold text-gray-900">
                            {{ __("Reservation Details")}}
                        </h2>
                        <p class="text-sm text-gray-500 font-light">
                            Fields are required to complete the reservation process.
                        </p>
                    </div>
                </div>

                <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                    <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
                </button>
            </div>
            <div class="modal-body p-4 lg:p-8 xl:p-10 space-y-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="field-body grid grid-cols-1 md:grid-cols-2 gap-4">

                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Reservation Duration')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="duration" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="7 Days" selected>7 Days</option>
                                <option value="14 Days">14 Days</option>
                                <option value="30 Days">30 Days</option>
                            </select>
                            <x-input-error :messages="$errors->get('duration')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Purpose')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="purpose" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="Sale" selected>Sale</option>
                                <option value="Lease">Lease</option>
                            </select>
                            <x-input-error :messages="$errors->get('purpose')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1 md:col-span-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Sale Price')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" inputmode="numeric" name="sale_price" placeholder="{{ __('৳10,00,000')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('sale_price')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Booking Percent')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" inputmode="numeric" name="booking_percent" placeholder="{{ __('20%')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('booking_percent')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Booking Amount')}} <span class="text-red-600">*</span>
                            </label>
                            <input type="text" inputmode="numeric" name="booking_amount" placeholder="{{ __('৳1,25,000')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('booking_amount')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Commission Type')}} <span class="text-red-600">*</span>
                            </label>
                            <select name="commission_type" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg" required >
                                <option value="">Select</option>
                                <option value="Percentage" selected>Percentage</option>
                                <option value="Fixed">Fixed Amount</option>
                            </select>
                            <x-input-error :messages="$errors->get('commission_type')" class="mt-1"/>
                        </div> 
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Commission')}}<span class="text-xs text-[#8997A9]">Proposed</span> <span class="text-red-600">*</span>
                            </label>
                            <input type="text" inputmode="numeric" name="commission_proposed" placeholder="{{ __('7%')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg" required />
                            <x-input-error :messages="$errors->get('commission_proposed')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Upload Required Document')}}
                            </label>
                            <input type="file" name="upload_req_docs" class="w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-4 file:py-1 file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white" />
                            <x-input-error :messages="$errors->get('upload_req_docs')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Upload MoU')}}
                            </label>
                            <input type="file" name="upload__mou" class="w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-4 file:py-1 file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white" />
                            <x-input-error :messages="$errors->get('upload__mou')" class="mt-1"/>
                        </div>
                        <div class="field-item space-y-1 md:col-span-2">
                            <label class="text-gunmetal font-medium block text-sm">
                                {{ __('Notes')}}<span class="text-xs text-[#8997A9]">(Special Terms or Agreement)</span> <span class="text-red-600">*</span>
                            </label>
                            <textarea name="notes_termsOfAgreement" rows="5"class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"></textarea>
                            <x-input-error :messages="$errors->get('notes_termsOfAgreement')" class="mt-1"/>
                        </div>

                    </div>

                    <div class="mt-4 text-end">
                        <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                            {{ __("Submit Reservation") }}
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    @endpush

    @push("scripts")
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function () {
            // Open modal
            $('[data-popup="modal"]').on('click', function (e) {
                e.preventDefault();
                const targetModal = $(this).attr('href') ;

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



        $('#reserv_shop_1 form').submit(function(e){
            e.preventDefault();

            Swal.fire({
                html: `<div class="flex items-start gap-4 bg-[#F0FDF5] border border-[#BBF7D1] p-6 rounded-xl">
                    <div class="icon">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 14C0 6.26801 6.26801 0 14 0C21.732 0 28 6.26801 28 14C28 21.732 21.732 28 14 28C6.26801 28 0 21.732 0 14Z" fill="#16A34A"/>
                            <path d="M16.2753 11.433L12.2462 11.938L12.102 12.6066L12.8937 12.7526C13.411 12.8757 13.513 13.0622 13.4004 13.5777L12.102 19.6793C11.7606 21.2575 12.2867 22 13.5236 22C14.4824 22 15.5961 21.5566 16.1011 20.9479L16.2559 20.216C15.904 20.5256 15.3903 20.6488 15.049 20.6488C14.5651 20.6488 14.3892 20.3092 14.5141 19.711L16.2753 11.433ZM16.3984 7.7594C16.3984 8.22602 16.2131 8.67353 15.8831 9.00349C15.5532 9.33344 15.1056 9.5188 14.639 9.5188C14.1724 9.5188 13.7249 9.33344 13.3949 9.00349C13.065 8.67353 12.8796 8.22602 12.8796 7.7594C12.8796 7.29278 13.065 6.84527 13.3949 6.51532C13.7249 6.18536 14.1724 6 14.639 6C15.1056 6 15.5532 6.18536 15.8831 6.51532C16.2131 6.84527 16.3984 7.29278 16.3984 7.7594Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="info-content text-start">
                        <h6 class='font-semibold text-gunmetal text-lg mb-1'>
                            Your submission for Reservation confirmed.
                        </h6>
                        <p class='text-sm'>
                            We've successfully received and approved your shop reservation. You can now track the status or proceed with the next steps.
                        </p>
                    </div>
                </div>`,
                showCloseButton: true,
                showConfirmButton: false,
            })
        });
    </script>
    @endpush
</x-app-layout>