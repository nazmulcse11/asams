<div id="shop-card-{{ $shop->id }}" class="block-item rounded-2xl overflow-hidden border border-slate-100">
    <div class="block-title text-lg text-[#607085] bg-[#F0F2F4] px-6 py-3">
        {{ __("Block :")}} <b class="text-black-500 fomt-bold shop-block-title-{{ $shop->block->id }}">{{ $shop->block->name  }}</b>
    </div>
    <div class="">
        <div class="thumbnail relative">
            @isset($shop->picture[0])
                <img src="{{ $shop->picture[0] }}" alt="{{ $shop->number }}" class="min-h-[240px] xl:min-h-[290px] max-h-[350px] w-full object-cover bg-gray-100">
            @else
                <img src="{{ asset('/images/pic1.png') }}" alt="{{ $shop->number }}" class="min-h-[240px] xl:min-h-[290px] max-h-[350px] w-full object-cover bg-gray-100">
            @endisset
            <button class="absolute right-4 top-4 w-10 h-10 bg-[#FFF0F1] hover:bg-themered hover:text-white transition-all rounded-full inline-flex items-center justify-center" type="button" data-bs-toggle="dropdown">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.75 12.5C8.75 12.0875 8.4125 11.75 8 11.75C7.5875 11.75 7.25 12.0875 7.25 12.5C7.25 12.9125 7.5875 13.25 8 13.25C8.4125 13.25 8.75 12.9125 8.75 12.5Z" stroke="currentcolor" stroke-width="1.5"/>
                    <path d="M8.75 8C8.75 7.5875 8.4125 7.25 8 7.25C7.5875 7.25 7.25 7.5875 7.25 8C7.25 8.4125 7.5875 8.75 8 8.75C8.4125 8.75 8.75 8.4125 8.75 8Z" stroke="currentcolor" stroke-width="1.5"/>
                    <path d="M8.75 3.5C8.75 3.0875 8.4125 2.75 8 2.75C7.5875 2.75 7.25 3.0875 7.25 3.5C7.25 3.9125 7.5875 4.25 8 4.25C8.4125 4.25 8.75 3.9125 8.75 3.5Z" stroke="currentcolor" stroke-width="1.5"/>
                </svg>
            </button>
            <ul class="dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none [&_a]:text-slate-600 [&_a]:dark:text-white [&_a]:flex [&_a]:items-center [&_a]:gap-1.5 [&_a]:font-Inter [&_a]:font-normal [&_a]:px-4 [&_a]:py-2">
                <li>
                    <button type="button" data-shop-id="{{ $shop->id }}" data-shop-name="{{ $shop->number }}" data-block-id="{{ $shop->block_id }}" data-floor-id="{{ $shop->floor_id }}" data-building-id="{{ $shop->building_id }}" data-property-id="{{ $shop->property_id }}" class="delete-shop-btn delete-shop-{{ $shop->id }} hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white flex items-center gap-2 w-full px-3 py-2.5">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.5 4.99935H4.16667M4.16667 4.99935H17.5M4.16667 4.99935V16.666C4.16667 17.108 4.34226 17.532 4.65482 17.8445C4.96738 18.1571 5.39131 18.3327 5.83333 18.3327H14.1667C14.6087 18.3327 15.0326 18.1571 15.3452 17.8445C15.6577 17.532 15.8333 17.108 15.8333 16.666V4.99935H4.16667ZM6.66667 4.99935V3.33268C6.66667 2.89065 6.84226 2.46673 7.15482 2.15417C7.46738 1.84161 7.89131 1.66602 8.33333 1.66602H11.6667C12.1087 1.66602 12.5326 1.84161 12.8452 2.15417C13.1577 2.46673 13.3333 2.89065 13.3333 3.33268V4.99935M8.33333 9.16602V14.166M11.6667 9.16602V14.166" stroke="currentcolor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Delete
                    </button>
                </li>
            </ul>
        </div>
        <div class="p-3 xl:p-4">
            <div class="flex items-center justify-between gap-4 flex-wrap">
                <h5 class="text-lg text-gray-500 flex items-center gap-1">
                    {{ __("Shop No.")}} <b class="font-bold text-black-500 text-2xl">{{ $shop->number }}</b>
                </h5>
                <span class="inline-flex bg-green-200 text-green-600 text-sm px-5 py-2 rounded-3xl">
                    {{ $shop?->status?->name }}
                </span>
            </div>
            <ul class="flex items-center gap-3 justify-between my-4">
                <li>
                    {{ __("Area: ")}}<b>{{ $shop->total_area }} {{ __(" sq.ft")}}</b>
                </li>
                <li>
                    {{ __("Length: ")}}<b>{{ $shop->length }}</b>
                </li>
                <li>
                    {{ __("Wide: ")}}<b>{{ $shop->width }}</b>
                </li>
            </ul>
            <div class="clearfix">
                <p class="text-sm text-gray-500">
                    <img src="@qr(route('admin.shop.show', $shop->id))" class="w-[80px] float-right ml-2 mb-2 border border-slate-100 rounded-lg max-lg:hidden" alt="{{ $shop->number }}">
                    <span class="line-clamp-3">{{ $shop->description }}</span>
                </p>
            </div>
            <div class="mt-4 flex gap-3 *:text-sm *:py-2.5 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
                <a href="#add_shop_modal" data-popup="modal" data-shop-id="{{ $shop->id }}" data-floor-id="{{ $shop->floor_id }}" class="update_shop_btn text-black-500 border border-slate-300 hover:bg-slate-800 hover:text-white">
                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:pencil-square"></iconify-icon>
                    Edit Shop
                </a>
                <a href="#shop_details_modal" data-shop-id="{{ $shop->id }}" data-popup="modal" class="shop-details-modal text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:eye"></iconify-icon>
                    View Details
                </a>
            </div>
        </div>
    </div>
</div>
