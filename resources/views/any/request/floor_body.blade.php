@if($shops->currentPage() > 1)

    @foreach($shops as $shop)
        @if(in_array(getCurrentGuard(), ["admin", "employee"]))
            @if($shop->status?->name == "Vacant")
                @include('any.include.shop_vacant', ['shop' => $shop])

            @elseif($shop->status?->name == "Reserved" && in_array($shop->buyerShop?->status_id, [getStatusId("Buyer Shop", "Pending"), getStatusId("Buyer Shop", "Verified")]))
                @include('any.include.shop_sale_request', ['shop' => $shop])

            @elseif($shop->status?->name == "Reserved")
                @include('any.include.shop_reserved', ['shop' => $shop])

            @elseif($shop->status?->name == "Occupied" && $shop->for?->name == "Lease")
                @include('any.include.shop_lease', ['shop' => $shop])

            @elseif($shop->status?->name == "Occupied" && $shop->for?->name == "Sold")
                @include('any.include.shop_sold', ['shop' => $shop])

            @endif
        @elseif(getCurrentGuard() == "agent" && $shop->status?->name == "Vacant")
            @include('any.include.shop_vacant', ['shop' => $shop])
        @endif

    @endforeach

    @if(isset($search))
        <!-- Add New Shop Card -->
        <div id="add_new_shop_card" data-floor-id="{{ $floor->id }}" class="store_shop_btn group border border-themered bg-[#FFF5F5] rounded-3xl text-center transition duration-200 cursor-pointer p-10 text-themered hover:border-black-500 hover:bg-[#F0F2F4] hover:text-black-500">
            <a href="#add_shop_modal" data-popup="modal" class="w-full h-full min-h-[250px] flex items-center justify-center flex-col">
                <iconify-icon class="text-2xl xl:text-5xl font-light transition-all group-hover:-rotate-90" icon="heroicons-outline:plus"></iconify-icon>
                <div class="text-xl font-medium">Add Shop</div>
            </a>
        </div>
    @endif
@else
    <div class="tab-content">
        <div class="pane-tab" id="floor_{{ $floor->id }}">
            <div class="filter-wrapper flex flex-wrap items-end justify-between gap-3 xl:gap-6 mb-6">
                <div class="left">
                    <div class="input-area relative">
                        <input type="text" name="s" id="shop_search" data-floor-id="{{ $floor->id }}" class="w-full px-4 py-3 !pl-9 rounded-lg bg-white border border-[#E1E5EA]" placeholder="Search">
                        <span class="absolute left-0 top-1/2 -translate-y-1/2 w-9 h-full border-none flex items-center justify-center pl-2">
                            <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:search"></iconify-icon>
                        </span>
                    </div>
                </div>
                <div class="right max-w-4xl">
                    <div class="flex flex-wrap items-end gap-3 xl:gap-6">
                        <div class="input-area space-y-1">
                            <label>{{ __("Block")}}</label>
                            <select name="floor_block" id="floor_block" class="bg-white w-full px-4 py-3 rounded-lg border border-[#E1E5EA]">
                                <option value="">{{ __("Select")}}</option>
                                @foreach($floor->blocks as $block)
                                    <option value="{{ $block->id }}">{{ $block->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        @if(in_array(getCurrentGuard(), ["admin", "employee"]))
                        <div class="input-area space-y-1">
                            <label>{{ __("Status")}}</label>
                            <select name="floor_status" id="floor_status" class="bg-white w-full px-4 py-3 rounded-lg border border-[#E1E5EA]">
                                <option value="">{{ __("Status")}}</option>
                                @foreach(dropdown_options("status", ["type" => "shop"]) as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="floor_show_type_grid">
                <div id="shops_container" class="grid grid-cols-1 sm:grid-cols-2 3xl:grid-cols-3 gap-6">


                    @foreach($shops as $shop)
                        @if(in_array(getCurrentGuard(), ["admin", "employee"]))
                            @if($shop->status?->name == "Vacant")
                                @include('any.include.shop_vacant', ['shop' => $shop])

                            @elseif($shop->status?->name == "Reserved" && ($shop->pendingRequests()->isNotEmpty() || $shop->verifyedRequests()->isNotEmpty()))
                                @include('any.include.shop_sale_request', ['shop' => $shop])

                            @elseif($shop->status?->name == "Reserved")
                                @include('any.include.shop_reserved', ['shop' => $shop])

                            @elseif($shop->status?->name == "Occupied" && $shop->for?->name == "Lease")
                                @include('any.include.shop_lease', ['shop' => $shop])

                            @elseif($shop->status?->name == "Occupied" && $shop->for?->name == "Sold")
                                @include('any.include.shop_sold', ['shop' => $shop])

                            @endif
                        @elseif(getCurrentGuard() == "agent" && $shop->status?->name == "Vacant")
                            @include('any.include.shop_vacant', ['shop' => $shop])
                        @endif

                    @endforeach

                </div>
                @if ($shops->hasMorePages())
                    <div class="paginate text-center mt-10">
                        <button id="load-more-btn" class="border border-slate-200 px-4 py-2 rounded-lg text-black-500 transition-all hover:bg-black-500 hover:text-white" data-next-page="{{ $shops->nextPageUrl() }}">
                            Load More
                        </button>
                    </div>
                @endif
            </div>

        </div>
    </div>

@endif


