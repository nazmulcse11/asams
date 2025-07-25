@if($shops->currentPage() > 1 || isset($search))
    @foreach($shops as $shop)
        @include('agent.shop.reserved.shop-card', ['shop' => $shop])
    @endforeach
@else
    <div class="tab-content" id="floor_body">
        <div class="pane-tab" id="floor_{{ $floor->id }}">
            <div class="filter-wrapper flex flex-wrap items-end justify-between gap-3 xl:gap-6 mb-6">
                <div class="left">
                    <div class="input-area relative">
                        <input type="text" name="s" id="shop_search" data-floor-id="{{ $floor->id }}" class="w-full px-4 py-3 !pl-9 rounded-lg bg-[#F8F9FB]" placeholder="Search">
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
                            <select name="floor_block" id="floor_block" class="w-full px-4 py-3 rounded-lg  border border-[#E1E5EA]">
                                <option value="">{{ __("Select")}}</option>
                                @foreach($floor->blocks as $block)
                                    <option value="{{ $block->id }}">{{ $block->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="floor_show_type_grid">
                <div id="shops_container" class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-3 gap-6">

                    @foreach($shops as $shop)
                        @include('agent.shop.reserved.shop-card', ['shop' => $shop])
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

            <!-- Floor Show Type Map -->
            <div class="floor_show_type_map hidden border p-4 xl:p-10 rounded-xl">

            </div>
        </div>
    </div>
@endif


