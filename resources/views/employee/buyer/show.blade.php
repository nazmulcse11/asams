<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-6">
        <div class="buyer-profile-sidebar ">
            <div class="profile-image -mb-[120px]">
                <img src="{{ $item?->profile?->picture }}" class="w-60 h-60 rounded-full border border-slate-50 mx-auto" alt="{{ $item->profile?->first_name ?? 'N/A' }}">
            </div>
            <div class="profile-content p-4 xl:py-10 xl:px-6 3xl:px-10 bg-white rounded-2xl xl:pt-[130px] border border-slate-100">
                <h4 class="text-center font-semibold text-gunmetal text-2xl">
                    {{ $item?->profile?->full_name ?? 'N/A' }}
                </h4>
                <p class="text-center my-2">
                    <span class="inline-block px-4 py-2 rounded-2xl bg-slate-100 text-black-600 text-sm">
                        {{ __("Member Since : ") }} {{ $item->created_at->format('d M Y')}}
                    </span>
                </p>
                <p class="text-center mt-6 mb-4">
                    {{ $item->profile?->biography ?? 'N/A' }}
                </p>
                <table class="table w-full border-separate [&_td]:py-3 [&_td]:border-b [&_td]:border-b-slate-100 [&_td]:align-middle">
                    <tbody>
                        <tr>
                            <td class="text-ash whitespace-nowrap">
                                {{ __("Email  :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                {{ $item->email ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-ash whitespace-nowrap">
                                {{ __("Phone  :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                {{ $item->phone ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-ash whitespace-nowrap">
                                {{ __("Address  :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                {{ $item->profile?->full_address ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-ash whitespace-nowrap">
                                {{ __("Age  :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                {{ $item->profile?->age ?? 'N/A' }} {{ __("Years")}}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-ash whitespace-nowrap">
                                {{ __("City  :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                {{ $item->profile?->city?->name ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-ash whitespace-nowrap">
                                {{ __("State  :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                {{ $item?->profile?->state?->name ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-ash whitespace-nowrap">
                                {{ __("Zip Code  :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                {{ $item->profile?->zip_code ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-ash whitespace-nowrap">
                                {{ __("Country  :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                {{ $item->profile?->country?->name ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="text-ash whitespace-nowrap">
                                {{ __("NID No.  :")}}
                            </td>
                            <td class="text-gunmetal font-semibold">
                                {{ $item->profile?->nid ?? 'N/A' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                @isset($item->profile?->nid_copy)
                <!-- <div class="nid flex items-center justify-between gap-4 mt-6">
                    <img src="{{ $item->profile?->nid_copy }}" alt="NID of {{ $item->profile?->full_name }}">
                </div> -->

                <div class="nid mt-6 mx-auto w-[270px] h-[170px] relative ">
                    <div class="card-inner w-full h-full transform-preserve-3d transition-transform duration-700 *:absolute *:w-full *:h-full shadow-md">
                        <div class="card front">
                            <img src="{{ asset('/images/buyer/nid.png') }}" class="frontpart" alt="NID Front of {{ $item->profile?->full_name }}">
                        </div>
                        <div class="card back">
                            <img src="{{ asset('/images/buyer/nid.png') }}" class="backpart" alt="NID Back of {{ $item->profile?->full_name }}">
                        </div>
                    </div>
                </div>
                @endisset
            </div>
        </div>
        <div class="buyer-profile-timeline xl:col-span-2">
            <div class="states grid gap-4 xl:gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 2xl:grid-cols-3 mb-6">

                <div class="card shadow-md p-4 rounded-xl flex gap-5">
                    <div class="icon w-16 h-16 rounded-full bg-green-200 inline-flex items-center justify-center">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.9706 9.9668L29.5526 6.034C28.9471 1.74631 26.972 0 22.748 0H19.3458H17.2122H12.8296H10.696H7.2361C2.99765 0 1.03702 1.74631 0.417119 6.0766L0.0278795 9.981C-0.116291 11.5001 0.301789 12.9767 1.21002 14.1267C2.30566 15.5322 3.99237 16.3273 5.8665 16.3273C7.683 16.3273 9.4273 15.4329 10.523 13.9989C11.5033 15.4329 13.1756 16.3273 15.0353 16.3273C16.895 16.3273 18.5241 15.4754 19.5188 14.0557C20.6288 15.4613 22.3444 16.3273 24.132 16.3273C26.0494 16.3273 27.7793 15.4896 28.8606 14.0131C29.7256 12.8773 30.1148 11.4433 29.9706 9.9668Z" fill="#0FBA7F"/>
                            <path d="M14.0977 21.8791C12.2668 22.0637 10.8828 23.5971 10.8828 25.4144V29.3045C10.8828 29.6879 11.2 30.0002 11.5892 30.0002H18.4658C18.8551 30.0002 19.1722 29.6879 19.1722 29.3045V25.9113C19.1866 22.944 17.4134 21.5384 14.0977 21.8791Z" fill="#0FBA7F"/>
                            <path d="M28.5436 18.667V22.8979C28.5436 26.8164 25.3143 29.9967 21.3354 29.9967C20.9462 29.9967 20.629 29.6844 20.629 29.301V25.9078C20.629 24.0905 20.0668 22.6707 18.9711 21.7053C18.0052 20.8392 16.6933 20.4133 15.0643 20.4133C14.7039 20.4133 14.3435 20.4275 13.9542 20.4701C11.3881 20.7256 9.4419 22.8553 9.4419 25.4109V29.301C9.4419 29.6844 9.1248 29.9967 8.7355 29.9967C4.75661 29.9967 1.52734 26.8164 1.52734 22.8979V18.6954C1.52734 17.7015 2.52207 17.0343 3.45913 17.3608C3.84838 17.4886 4.23762 17.588 4.64127 17.6448C4.81427 17.6731 5.0017 17.7015 5.1747 17.7015C5.4053 17.7299 5.636 17.7441 5.8667 17.7441C7.539 17.7441 9.1824 17.1336 10.4799 16.083C11.7197 17.1336 13.3343 17.7441 15.0355 17.7441C16.751 17.7441 18.3368 17.162 19.5766 16.1114C20.8741 17.1478 22.4887 17.7441 24.1322 17.7441C24.3917 17.7441 24.6512 17.7299 24.8962 17.7015C25.0692 17.6873 25.2278 17.6731 25.3864 17.6448C25.8333 17.588 26.237 17.4602 26.6406 17.3324C27.5777 17.0201 28.5436 17.7015 28.5436 18.667Z" fill="#0FBA7F"/>
                        </svg>
                    </div>
                    <div class="info">
                        <p>
                            {{ __("Bought Shop") }}
                        </p>
                        <h6 class="font-semibold text-pureblack text-2xl">
                            {{ $bought }}
                        </h6>
                    </div>
                </div>

                <div class="card shadow-md p-4 rounded-xl flex gap-5">
                    <div class="icon w-16 h-16 rounded-full bg-violet-200 inline-flex items-center justify-center">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30 28.8747C30 29.49 29.49 30.0003 28.875 30.0003H1.125C0.51 30.0003 0 29.49 0 28.8747C0 28.2593 0.51 27.749 1.125 27.749H28.875C29.49 27.749 30 28.2593 30 28.8747Z" fill="#8283DA"/>
                            <path d="M20.0852 3.76721L3.97516 19.8867C3.36016 20.502 2.37016 20.502 1.77016 19.8867H1.75516C-0.329844 17.7854 -0.329844 14.3934 1.75516 12.3072L12.4802 1.57592C14.5802 -0.525307 17.9702 -0.525307 20.0702 1.57592C20.6852 2.16127 20.6852 3.16686 20.0852 3.76721Z" fill="#8283DA"/>
                            <path d="M28.2302 9.7238L23.6552 5.1461C23.0402 4.53073 22.0502 4.53073 21.4502 5.1461L5.34016 21.2655C4.72516 21.8659 4.72516 22.8565 5.34016 23.4718L9.91516 28.0645C12.0152 30.1507 15.4052 30.1507 17.5052 28.0645L28.2152 17.3332C30.3452 15.232 30.3452 11.825 28.2302 9.7238ZM16.1402 23.2767L14.3252 25.1078C13.9502 25.483 13.3352 25.483 12.9452 25.1078C12.5702 24.7326 12.5702 24.1172 12.9452 23.727L14.7752 21.8959C15.1352 21.5357 15.7652 21.5357 16.1402 21.8959C16.5152 22.2711 16.5152 22.9165 16.1402 23.2767ZM22.0952 17.3182L18.4352 20.9954C18.0602 21.3556 17.4452 21.3556 17.0552 20.9954C16.6802 20.6202 16.6802 20.0048 17.0552 19.6146L20.7302 15.9374C21.0902 15.5772 21.7202 15.5772 22.0952 15.9374C22.4702 16.3276 22.4702 16.943 22.0952 17.3182Z" fill="#8283DA"/>
                        </svg>
                    </div>
                    <div class="info">
                        <p>
                            {{ __("Lease Shop") }}
                        </p>
                        <h6 class="font-semibold text-pureblack text-2xl">
                            {{ $leased }}
                        </h6>
                    </div>
                </div>

                <div class="card shadow-md p-4 rounded-xl flex gap-5">
                    <div class="icon w-16 h-16 rounded-full bg-orange-200 inline-flex items-center justify-center">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.9999 18.2446V19.812C29.9999 20.2351 29.6683 20.58 29.2262 20.5956H26.921C26.0841 20.5956 25.3262 19.9844 25.2631 19.1693C25.2157 18.6835 25.4052 18.2289 25.721 17.9155C26.0052 17.6177 26.3999 17.4609 26.8262 17.4609H29.2104C29.6683 17.4766 29.9999 17.8214 29.9999 18.2446Z" fill="#E4764F"/>
                            <path d="M24.5368 16.7537C23.7474 17.5217 23.3684 18.6659 23.6842 19.857C24.0947 21.3147 25.5316 22.2394 27.0474 22.2394H28.421C29.2895 22.2394 30 22.9447 30 23.8068V24.1046C30 27.349 27.3316 29.9978 24.0631 29.9978H5.93682C2.66843 29.9978 0 27.349 0 24.1046V13.5563C0 11.6285 0.93158 9.92009 2.36843 8.85429C3.36316 8.10189 4.59474 7.66309 5.93682 7.66309H24.0631C27.3316 7.66309 30 10.3119 30 13.5563V14.2459C30 15.108 29.2895 15.8133 28.421 15.8133H26.8105C25.9263 15.8133 25.121 16.1581 24.5368 16.7537Z" fill="#E4764F"/>
                            <path d="M21.7095 4.41992C22.1358 4.8431 21.7726 5.5014 21.1726 5.5014L9.04631 5.4857C8.35161 5.4857 7.98842 4.63935 8.49372 4.15347L11.0516 1.59869C13.2147 -0.532897 16.72 -0.532897 18.8832 1.59869L21.6463 4.3729C21.6621 4.38857 21.6937 4.40425 21.7095 4.41992Z" fill="#E4764F"/>
                        </svg>
                    </div>
                    <div class="info">
                        <p>
                            {{ __("Total Payment") }}
                        </p>
                        <h6 class="font-semibold text-pureblack text-2xl">
                            {{ $total_payment }}
                        </h6>
                    </div>
                </div>

            </div>

            <form action="" class="mb-6">
                <div class="flex flex-wrap items-end justify-between gap-6">
                    <div class="left">
                        <div class="input-area relative">
                            <input type="text" name="s" class="w-full px-4 py-3 !pl-9 rounded-lg bg-white" placeholder="Search">
                            <span class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full border-none flex items-center justify-center pl-2">
                                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:search"></iconify-icon>
                            </span>
                        </div>
                    </div>
                    <div class="right">
                        <div class="input-area max-sm:flex-[50%] sm:flex-[0_0_200px] space-y-1">
                            <label>{{ __('Shop Type')}}</label>
                            <select class="w-full px-4 py-3 text-sm rounded-lg bg-white border border-[#E1E5EA] *:dark:bg-slate-700 focus:outline-0 cursor-pointer">
                                <option value="">{{ __('Reserved Shop')}}</option>
                                <option value="">{{ __('Pending Proposal')}}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:gap-6 items-start">

                <!-- Shop Item (Sold) -->
                 @foreach($shops as $shop)
                <div id="shop-card-1" class="shop-item bg-white rounded-2xl overflow-hidden border border-slate-100">
                    <div class="thumbnail relative">
                        <a href="{{ route('employee.buyer-shop-details') }}">
                            <img 
                                src="@if(isset($shop->picture[0])) {{ asset($shop->picture[0]) }} @else {{ asset('/images/pic1.png') }} @endif" 
                                alt="Shop No. {{ $shop->number }}" 
                                class="min-h-[240px] xl:min-h-[290px] max-h-[350px] w-full object-cover bg-gray-100">
                        </a>
                    </div>
                    <div class="space-y-5 px-4 py-5 xl:px-6">
                        <div class="flex items-center justify-between gap-4 flex-wrap">
                            <h5 class="text-lg">
                                <span class="text-gray-500">
                                    {{ __("Shop No.")}} <b class="font-bold text-black-500 text-2xl">{{ $shop->number }}</b>
                                </span>
                            </h5>
                            <span class="inline-flex bg-green-100 text-green-600 text-sm px-4 py-1 rounded-3xl">
                                {{ $shop->status?->name }}
                            </span>
                        </div>
                        <div class="progresswrapper flex items-center text-sm gap-4">
                            <div class="progressbar flex-1 h-2 bg-slate-100 rounded-2xl overflow-hidden">
                                <div class="h-full bg-[#FFB7A0] rounded-2xl overflow-hidden" style="width: 65%;"></div>
                            </div>
                            <div class="label">
                                2/3 Installment
                            </div>
                        </div>
                        <div class="finance_states">
                            <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                                <tbody>
                                    <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-xs *:text-center *:leading-4">
                                        <td>
                                            Amount Paid <br>
                                            <b class="text-pureblack">৳3,50,000</b> 
                                        </td>
                                        <td>
                                            Next Payment <br>
                                            <b class="text-pureblack">৳75,000</b> 
                                        </td>
                                        <td>
                                            Due Date <br>
                                            <b class="text-pureblack">2025-07-15</b> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="description line-clamp-2 text-sm">
                            {{ $shop->description }}
                        </div>
                        <div class="flex items-start gap-4 justify-between">
                            <table class="w-full border border-slate-200 rounded-xl border-collapse table-auto">
                                <tbody>
                                    <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-xs *:leading-4">
                                        <td>
                                            Area <br>
                                            <b class="text-pureblack">{{ $shop->total_area }}</b> 
                                        </td>
                                        <td>
                                            Length <br>
                                            <b class="text-pureblack">{{ $shop->length }}</b>
                                        </td>
                                        <td>
                                            Width <br>
                                            <b class="text-pureblack">{{ $shop->width }}</b>
                                        </td>
                                    </tr>
                                    <tr class="*:bg-[#F8F9FB] *:border *:border-slate-200 *:px-4 *:py-1.5 *:text-xs *:leading-4">
                                        <td>
                                            Block <br>
                                            <b class="text-pureblack">{{ $shop->block?->name }}</b>
                                        </td>
                                        <td>
                                            Floor <br>
                                            <b class="text-pureblack">{{ $shop->floor?->name }}</b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="qr">
                                <img src="@qr(route('admin.shop.show', $shop->id))" class="w-[90px] ml-2 mb-2 border border-slate-100 rounded-lg p-2" alt="{{ $shop->number }}">
                            </div>
                        </div>
                        <div class="!mt-6 flex gap-2 *:text-sm *:py-2 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
                            <a href="{{ route('employee.buyer-shop-details') }}" data-shop-id="{{ $shop->id }}" class="shop-detail text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:eye"></iconify-icon>
                                Shop Details
                            </a>
                            <a href="#" data-shop-id="{{ $shop->id }}"  class="text-gunmetal border border-slate-200 hover:bg-gunmetal hover:text-white">
                                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:document-arrow-down"></iconify-icon>
                                Agreement Paaper
                            </a>
                        </div>                                
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>


    @push("modal")
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
        <style>
        .nid {
            perspective: 1000px;
        }
        .transform-preserve-3d {
            transform-style: preserve-3d;
            backface-visibility: hidden;
            -moz-backface-visibility: hidden;
        }
        .nid .card.front {
            z-index: 2;
        }
        .nid .card.back {
            transform: rotateY(180deg);
            z-index: 1;
        }
        .nid:hover .card-inner {
            transform: rotateY(180deg);
        }

    </style>
    <script>
        function triggerShopDetailsModal() {
            document.querySelectorAll('.shop-details-modal').forEach(button => {
                button.addEventListener('click', function () {
                    const itemId = this.dataset.shopId;
                    document.getElementById("shop_details_modal").innerHTML = preloader('modalPreload');
                    axios.get('{{ route("employee.shop.show", ":id") }}'.replace(":id", itemId))
                        .then(response => {
                            document.getElementById("shop_details_modal").innerHTML = response.data.data;
                        }).catch(error => {
                        console.error(error);
                    });
                });
            });
        }
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
        $(document).ready(function () {
            triggerShopDetailsModal();
            // Open modal
            $('[data-popup="modal"]').on('click', function (e) {
                e.preventDefault();
                const targetModal = $(this).attr('href');

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

    </script>
    @endpush
</x-app-layout>
