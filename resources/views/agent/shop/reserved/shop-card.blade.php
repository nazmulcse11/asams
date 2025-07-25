<div id="shop-card-{{ $shop->id }}" class="block-item rounded-2xl overflow-hidden border border-slate-100 bg-white">
    <div class="block-title text-lg text-[#607085] bg-[#F0F2F4] px-6 py-3 flex items-center justify-between">
        <span>
            {{ __("Floor :")}} <b class="text-black-500 fomt-bold">{{ $shop->floor->name }}</b>
        </span>
        <span>
            {{ __("Block :")}} <b class="text-black-500 fomt-bold">{{ $shop->block->name }}</b>
        </span>
    </div>
    <div class="px-4 py-6 xl:p-6">
        <img src="@if(isset($shop->picture[0])) {{ $shop->picture[0] }} @else {{ asset('/images/pic1.png') }} @endif" alt="Property Image" class="w-full object-cover rounded-lg">
            <div class="flex items-center justify-between gap-4 flex-wrap mt-5 mb-6">
                <h5 class="text-lg">
                    <span class="text-gray-500">
                        {{ __("Shop No.")}} <b class="font-bold text-black-500 text-2xl">{{ $shop->number }}</b>
                    </span>
                </h5>
                <span class="inline-flex bg-green-200 text-green-600 text-sm px-5 py-2 rounded-3xl">
                    {{ __("Vacant")}}
                </span>
            </div>
        <p class="line-clamp-3">
            {{ $shop->description }}
        </p>
        <div class="clearfix my-6">
            <ul class="float-start space-y-3">
                <li>
                    {{ __("Area: ")}}<b> {{ $shop->total_area }}{{ __(" sq.ft")}}</b>
                </li>
                <li>
                    {{ __("Length: ")}}<b>{{ $shop->length }}{{ __("\"")}}</b>
                </li>
                <li>
                    {{ __("Wide: ")}}<b>{{ $shop->width }}{{ __("\"")}}</b>
                </li>
            </ul>
            <img src="@qr($shop->number)" style="width: 100px; height: 100px;" class="float-end ml-2 mb-2 border border-slate-100 rounded-lg" alt="">
        </div>
        <div class="mt-7 flex gap-3 *:text-sm *:py-3.5 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
            <a href="#reserve_shop" id="reserve_shop_{{ $shop->id }}" data-min-sale="{{ $shop->min_sale_price }}" data-shop-id="{{ $shop->id }}" data-popup="modal" class="reserve_shop_{{ $shop->id }} reserve_shop text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                Reserve This Shop
            </a>
        </div>
    </div>
</div>
