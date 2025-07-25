@if($shops->currentPage() > 1)
    @foreach($shops as $shop)
        @include('admin.console.properties.include.shop_card', ['shop' => $shop])
    @endforeach
@elseif(isset($search))
    @foreach($shops as $shop)
        @include('admin.console.properties.include.shop_card', ['shop' => $shop])
    @endforeach

    <!-- Add New Shop Card -->
    <div id="add_new_shop_card" data-floor-id="{{ $floor->id }}" class="store_shop_btn group border border-themered bg-[#FFF5F5] rounded-3xl text-center transition duration-200 cursor-pointer p-10 text-themered hover:border-black-500 hover:bg-[#F0F2F4] hover:text-black-500">
        <a href="#add_shop_modal" data-popup="modal" class="w-full h-full min-h-[250px] flex items-center justify-center flex-col">
            <iconify-icon class="text-2xl xl:text-5xl font-light transition-all group-hover:-rotate-90" icon="heroicons-outline:plus"></iconify-icon>
            <div class="text-xl font-medium">Add Shop</div>
        </a>
    </div>
@else
    <div class="tab-content">
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
                            <select name="floor_block" id="floor_block" data-floor-id="{{ $floor->id }}" class="w-full px-4 py-3 rounded-lg  border border-[#E1E5EA]">
                                <option value="">{{ __("Select")}}</option>
                                @foreach($floor->blocks as $block)
                                    <option value="{{ $block->id }}">{{ $block->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-area">
                            <a href="#floor_blocks_modal" id="floor_block_modal_btn" data-floor-id="{{ $floor->id }}" data-popup="modal" class="text-sm px-4 py-[13px] rounded-md font-semibold flex-1 inline-flex gap-3 items-center justify-center transition-all border border-[#E1E5EA] text-black-500 hover:bg-black-500 hover:text-white">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.89716 0H3.12147C1.07476 0 0 1.07476 0 3.11213V4.88781C0 6.92518 1.07476 7.9999 3.11213 7.9999H4.88781C6.92518 7.9999 7.9999 6.92518 7.9999 4.88781V3.11213C8.0093 1.07476 6.93453 0 4.89716 0Z" fill="currentcolor"/>
                                    <path d="M14.8879 0H13.1122C11.0748 0 10 1.07477 10 3.11215V4.88785C10 6.92523 11.0748 8 13.1122 8H14.8879C16.9252 8 18 6.92523 18 4.88785V3.11215C18 1.07477 16.9252 0 14.8879 0Z" fill="currentcolor"/>
                                    <path d="M14.8879 10H13.1122C11.0748 10 10 11.0748 10 13.1121V14.8878C10 16.9252 11.0748 18 13.1122 18H14.8879C16.9252 18 18 16.9252 18 14.8878V13.1121C18 11.0748 16.9252 10 14.8879 10Z" fill="currentcolor"/>
                                    <path d="M4.89716 10H3.12147C1.07476 10 0 11.0735 0 13.1085V14.8821C0 16.9265 1.07476 18 3.11213 18H4.88781C6.92518 18 7.9999 16.9265 7.9999 14.8915V13.1179C8.0093 11.0735 6.93453 10 4.89716 10Z" fill="currentcolor"/>
                                </svg>
                                {{ __("Blocks")}}
                            </a>
                        </div>
                        <div class="input-area">
                            <a href="#add_shop_modal" data-floor-id="{{ $floor->id }}" data-popup="modal" class="store_shop_btn text-sm py-3.5 px-4 rounded-md font-semibold flex-1 inline-flex items-center justify-center transition-all text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:plus"></iconify-icon>
                                {{ __("Add Shop") }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="floor_show_type_grid">
                <div id="shops_container" class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-3 gap-6">

                    @foreach($shops as $shop)
                        @include('admin.console.properties.include.shop_card', ['shop' => $shop])
                    @endforeach

                    <!-- Add New Shop Card -->
                    <div id="add_new_shop_card" data-floor-id="{{ $floor->id }}" class="store_shop_btn group border border-themered bg-[#FFF5F5] rounded-3xl text-center transition duration-200 cursor-pointer p-10 text-themered hover:border-black-500 hover:bg-[#F0F2F4] hover:text-black-500">
                        <a href="#add_shop_modal" data-popup="modal" class="w-full h-full min-h-[250px] flex items-center justify-center flex-col">
                            <iconify-icon class="text-2xl xl:text-5xl font-light transition-all group-hover:-rotate-90" icon="heroicons-outline:plus"></iconify-icon>
                            <div class="text-xl font-medium">Add Shop</div>
                        </a>
                    </div>

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
                <p class="text-center">
                    {{ __('No Map Found')}}
                </p>
                <div class="mt-4 text-center space-y-5">
                    <button type="button" id="toggle-map-form" class="text-sm py-3.5 px-5 rounded-md font-semibold inline-flex items-center justify-center transition-all text-white bg-black-500 menu-open hover:bg-themered">
                        {{ __('Upload Floor Map')}}
                    </button>
                    <div class="">
                        <form action="" class="upload_floor_map hidden">
                            <div class="field-item">
                                <textarea name="floormap_html" class="w-full text-sm py-3 px-4 bg-white border rounded-lg" placeholder="Enter map html" rows="10"></textarea>
                            </div>
                            <div class="field-item mt-4 text-left">
                                <button type="submit" class="text-sm py-3.5 px-5 rounded-md font-semibold inline-flex items-center justify-center transition-all text-white bg-black-500 menu-open hover:bg-themered">{{ __('Save Map') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif


