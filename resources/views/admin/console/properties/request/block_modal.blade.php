<div class="modal-content bg-white w-full max-w-4xl mx-auto border border-slate-400 rounded-2xl relative">
    <div class="modal-header bg-[#F8F9FB] py-6 px-4 rounded-tl-2xl rounded-tr-2xl">
        <h2 class="text-center text-2xl">
            <b>{{ __("Blocks")}}</b> ({{ $floor->name }})
        </h2>
        <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
            <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
        </button>
    </div>
    <div class="modal-body p-6 lg:p-8 xl:p-10">
        <div class="max-w-2xl mx-auto" id="block-list">
            <!-- Block Item -->
            <div id="block_container">
                @foreach($items as $block)
                    <div class="block-item flex items-center justify-between p-3 rounded-lg transition-all hover:bg-[#F8F9FB]" data-block-id="{{ $block->id }}">
                        <div class="block-view">
                        <span class="font-semibold block-name text-black-500 inline-block bg-[#F0F2F4] py-2.5 px-3 rounded-lg">
                            {{ __("Block :")}}
                            <span class="value inline-block">
                                <span class="text">{{ $block->name }}</span>
                                <input type="text" class="hidden edit-input rounded px-1 bg-transparent" />
                            </span>
                        </span>
                            <span class="ml-2 text-sm text-gray-500"> {{ $block->shops->count() }}{{ __(" Shops") }}</span>
                        </div>
                        <div class="flex items-center gap-2 *:inline-flex *:items-center *:gap-3">
                            <button type="button" class="delete-btn border border-red-100 bg-red-50 text-red-600 px-4 py-[10px] font-medium transition-all rounded hover:bg-red-100">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.25 4.43368C12.5675 4.12844 9.8689 3.97119 7.1783 3.97119C5.58333 3.97119 3.98833 4.06369 2.39333 4.24868L0.75 4.43368M5.17969 3.49716L5.35691 2.28545C5.4858 1.40673 5.58246 0.75 6.9439 0.75H9.0544C10.4158 0.75 10.5205 1.44373 10.6414 2.2947L10.8186 3.49716M13.5185 7.35303L12.9949 16.6675C12.9063 18.1197 12.8338 19.2482 10.5863 19.2482H5.41464C3.16714 19.2482 3.09464 18.1197 3.00603 16.6675L2.48242 7.35303M6.6543 14.1626H9.3368M5.98633 10.4624H10.0141" stroke="#ED113D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{ __("Delete")}}
                            </button>
                            <button type="button" class="edit-btn border px-4 py-[10px] font-medium transition-all rounded text-black-500 hover:bg-black-500 hover:text-white">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.3329 1.20312H6.70339C2.62954 1.20312 1 2.83267 1 6.90652V11.7951C1 15.869 2.62954 17.4985 6.70339 17.4985H11.592C15.6659 17.4985 17.2954 15.869 17.2954 11.7951V10.1656" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.4389 2.03576L6.01853 8.4561C5.7741 8.7006 5.52967 9.1813 5.48078 9.5316L5.13043 11.9841C5.00007 12.8722 5.62744 13.4914 6.51554 13.3692L8.968 13.0189C9.3102 12.97 9.7909 12.7255 10.0435 12.4811L16.4639 6.06073C17.572 4.95264 18.0934 3.6653 16.4639 2.03576C14.8343 0.40622 13.547 0.92767 12.4389 2.03576Z" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.5195 2.95312C12.0654 4.90043 13.589 6.42406 15.5445 6.9781" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{ __("Edit")}}
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Add New Block -->
            <div class="flex items-center gap-2 px-4">
                <input type="text" id="new-block-name" placeholder="New Block" class="flex-1 border rounded px-4 py-[10px]">
                <button id="add-block-btn" class="border px-6 py-[10px] font-medium transition-all rounded text-black-500 hover:bg-black-500 hover:text-white">Create</button>
            </div>
        </div>
    </div>
</div>



