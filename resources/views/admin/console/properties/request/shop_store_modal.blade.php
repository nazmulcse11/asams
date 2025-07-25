<div class="modal-content bg-white w-full max-w-4xl mx-auto border border-slate-400 rounded-2xl relative">
    <div class="modal-header bg-[#F8F9FB] py-6 px-4 rounded-tl-2xl rounded-tr-2xl">
        <h2 class="text-center text-2xl">
            <b>{{ $shop ? 'Edit Shop ' . $shop?->number : 'Add Shop' }}</b> ({{ $floor->name }})
        </h2>
        <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
            <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
        </button>
    </div>
    <div class="modal-body p-6 lg:p-8 xl:p-10">
        <form action="#" id="shop_form">
            @csrf
            <h6 class="font-semibold text-xl text-black-500 mb-2">
                {{ __("Basic Information")}}
            </h6>
            <div class="grid gap-4 grid-cols-1 md:grid-cols-2">
                <div class="field-item space-y-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __("Shop number")}} <span class="text-red-600">*</span>
                    </label>
                    <input type="text" name="number" value="{{ old("number", $shop?->number) }}" class="w-full text-sm py-3 px-4 bg-white border rounded-lg" placeholder="Shop 501"/>
                    <span class="error-message text-sm text-red-600 space-y-1" data-error="number"></span>
                </div>
                <div class="field-item space-y-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __("Block")}} <span class="text-red-600">*</span>
                    </label>
                    <select name="block_id" id="block_id" class="w-full text-sm py-3 px-4 bg-white border rounded-lg">
                        @foreach($floor->blocks as $block)
                            <option @if(old("block_id", $shop?->block_id) == $block->id) selected @endif value="{{ $block->id }}">{{ $block->name }}</option>
                        @endforeach
                    </select>
                    <span class="error-message text-sm text-red-600 space-y-1" data-error="block_id"></span>
                </div>
                <div class="field-item space-y-2 md:col-span-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __("Shop Description")}}
                    </label>
                    <textarea name="description" class="w-full text-sm py-3 px-4 bg-white border rounded-lg">{{ old("description", $shop?->description) }}</textarea>
                    <span class="error-message text-sm text-red-600 space-y-1" data-error="description"></span>
                </div>
            </div>
            <br>
            <div class="grid gap-4 grid-cols-1 md:grid-cols-3">
                <div class="field-item space-y-2 md:col-span-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __("Shop Image")}} <span class="text-red-600">*</span>
                    </label>
                    <div class="flex gap-4 items-start">
                        <input type="file" inputmode="numeric" name="picture" class="flex-1 w-full border border-gray-300 rounded-lg p-2 bg-white file:mr-4 file:py-1 file:px-2 file:text-sm file:rounded-lg file:border-0 file:bg-red-600 file:text-white"/>

                         @isset($shop->picture[0])
                            <img src="{{ $shop->picture[0] }}" alt="{{ $shop?->number }}" class="flex-[0_0_48px] w-12 h-12 object-cover rounded-sm bg-gray-100">
                        @else
                            <img src="{{ asset('/images/pic1.png') }}" alt="{{ $shop?->number }}" class="flex-[0_48px] w-12 h-12 object-cover rounded-sm bg-gray-100">
                        @endisset
                    </div>
                    <span class="error-message text-sm text-red-600 space-y-1" data-error="picture"></span>
                </div>
                <div class="field-item space-y-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __("Avilability Status")}} <span class="text-red-600">*</span>
                    </label>
                    <select name="status_id" class="w-full text-sm py-3 px-4 bg-white border rounded-lg">
                        @foreach(status("shop") as $status)
                            <option @if(old("status_id", $shop?->status_id) == $status->id) selected @endif value="{{ $status->id }}">{{ $status->name }}</option>
                        @endforeach
                    </select>
                    <span class="error-message text-sm text-red-600 space-y-1" data-error="status_id"></span>
                </div>
            </div>
            <br>
            <h6 class="font-semibold text-xl text-black-500 mb-2">
                {{ __("Measurement Information")}}
            </h6>
            <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <div class="field-item space-y-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __("Length")}}<span class="text-slate-500 text-xs font-light">{{ __("(feet)")}}</span> <span class="text-red-600">*</span>
                    </label>
                    <input type="number" name="length" value="{{ old("length", $shop?->length) }}" class="w-full text-sm py-3 px-4 bg-white border rounded-lg" placeholder="55"/>
                    <span class="error-message text-sm text-red-600 space-y-1" data-error="length"></span>
                </div>
                <div class="field-item space-y-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __("Wide")}}<span class="text-slate-500 text-xs font-light">{{ __("(feet)")}}</span> <span class="text-red-600">*</span>
                    </label>
                    <input type="number" name="width" value="{{ old("width", $shop?->width) }}" class="w-full text-sm py-3 px-4 bg-white border rounded-lg" placeholder="55"/>
                    <span class="error-message text-sm text-red-600 space-y-1" data-error="width"></span>
                </div>
                <div class="field-item space-y-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __("Area")}}<span class="text-slate-500 text-xs font-light">{{ __("(sq.ft)")}}</span> <span class="text-red-600">*</span>
                    </label>
                    <input type="number" name="area" value="{{ old("area", $shop?->area) }}" class="w-full text-sm py-3 px-4 bg-white border rounded-lg" placeholder="1,980"/>
                    <span class="error-message text-sm text-red-600 space-y-1" data-error="area"></span>
                </div>
                <div class="field-item space-y-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __("Length with Half Corridor")}}<span class="text-slate-500 text-xs font-light">{{ __("(feet)")}}</span> <span class="text-red-600">*</span>
                    </label>
                    <input type="number" name="length_half_corridor" value="{{ old("length_half_corridor", $shop?->length_half_corridor) }}" class="w-full text-sm py-3 px-4 bg-white border rounded-lg" placeholder="980"/>
                    <span class="error-message text-sm text-red-600 space-y-1" data-error="length_half_corridor"></span>
                </div>
                <div class="field-item space-y-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __("Shop Width full Shop")}}<span class="text-slate-500 text-xs font-light">{{ __("(feet)")}}</span> <span class="text-red-600">*</span>
                    </label>
                    <input type="number" name="width_full_shop" value="{{ old("width_full_shop", $shop?->width_full_shop) }}" class="w-full text-sm py-3 px-4 bg-white border rounded-lg" placeholder="36"/>
                    <span class="error-message text-sm text-red-600 space-y-1" data-error="width_full_shop"></span>
                </div>
                <div class="field-item space-y-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __("Shop Total Area")}}<span class="text-slate-500 text-xs font-light">{{ __("(sq.ft)")}}</span> <span class="text-red-600">*</span>
                    </label>
                    <input type="number" name="total_area" value="{{ old("total_area", $shop?->total_area) }}" class="w-full text-sm py-3 px-4 bg-white border rounded-lg" placeholder="2,124"/>
                    <span class="error-message text-sm text-red-600 space-y-1" data-error="total_area"></span>
                </div>
            </div>
            <br>
            <h6 class="font-semibold text-xl text-black-500 mb-2">
                {{ __("Financial Requirements")}}
            </h6>
            <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

                <div class="field-item space-y-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __("Minimum Sale Price")}}<span class="text-slate-500 text-xs font-light">{{ __("(tk)")}}</span> <span class="text-red-600">*</span>
                    </label>
                    <input type="number" name="min_sale_price" value="{{ old("min_sale_price", $shop?->min_sale_price) }}" class="w-full text-sm py-3 px-4 bg-white border rounded-lg" placeholder="980"/>
                    <span class="error-message text-sm text-red-600 space-y-1" data-error="min_sale_price"></span>
                </div>
                <div class="field-item space-y-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __("Security Deposit")}}<span class="text-slate-500 text-xs font-light">{{ __("(%)")}}</span> <span class="text-red-600">*</span>
                    </label>
                    <input type="number" name="booking_percent" value="{{ old("booking_percent", $shop?->booking_percent) }}" class="w-full text-sm py-3 px-4 bg-white border rounded-lg" max="100" placeholder="36"/>
                    <span class="error-message text-sm text-red-600 space-y-1" data-error="booking_percent"></span>
                </div>
                <div class="field-item space-y-2">
                    <label class="text-gunmetal font-medium block text-sm">
                        {{ __("Commission")}}<span class="text-slate-500 text-xs font-light">{{ __("(%)")}}</span> <span class="text-red-600">*</span>
                    </label>
                    <input type="number" name="commission_percent" value="{{ old("commission_percent", $shop?->commission_percent) }}" class="w-full text-sm py-3 px-4 bg-white border rounded-lg" max="100" placeholder="10"/>
                    <span class="error-message text-sm text-red-600 space-y-1" data-error="commission_percent"></span>
                </div>
            </div>
            <br>
            <h6 class="font-semibold text-xl text-black-500 mb-2">
                {{ __("Feature Information")}}
            </h6>
            <div class="shop-feature-list *:bg-[#F8F9FB] *:p-3" id="shop-feature-list">


                @if($shop)
                    @foreach($shop?->features as $feature)
                        <div class="field-item flex flex-wrap gap-3">
                            <input type="text" name="key" id="key[]" value="{{ $feature->name }}" placeholder="key" class="flex-1 text-sm py-3 px-4 bg-white border rounded-lg">
                            <input type="text" name="value" id="value[]" value="{{ $feature->value }}" placeholder="value" class="flex-1 text-sm py-3 px-4 bg-white border rounded-lg">
                            <div>
                                <button type="button" class="delete-btn border border-red-100 inline-flex gap-3 items-center bg-red-50 text-red-600 px-4 py-[11px] font-medium transition-all rounded hover:bg-red-100">
                                    <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.25 4.43368C12.5675 4.12844 9.8689 3.97119 7.1783 3.97119C5.58333 3.97119 3.98833 4.06369 2.39333 4.24868L0.75 4.43368M5.17969 3.49716L5.35691 2.28545C5.4858 1.40673 5.58246 0.75 6.9439 0.75H9.0544C10.4158 0.75 10.5205 1.44373 10.6414 2.2947L10.8186 3.49716M13.5185 7.35303L12.9949 16.6675C12.9063 18.1197 12.8338 19.2482 10.5863 19.2482H5.41464C3.16714 19.2482 3.09464 18.1197 3.00603 16.6675L2.48242 7.35303M6.6543 14.1626H9.3368M5.98633 10.4624H10.0141" stroke="#ED113D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Delete
                                </button>
                            </div>
                        </div>
                    @endforeach
                @endif


                <!-- Add New Block -->
                <div class="field-item flex flex-wrap gap-3 add-item">
                    <input type="text" name="key[]" id="key" placeholder="key" class="flex-1 text-sm py-3 px-4 bg-white border rounded-lg">
                    <input type="text" name="value[]" id="value" placeholder="value" class="flex-1 text-sm py-3 px-4 bg-white border rounded-lg">
                    <div class="">
                        <button type="button" class="add-shop-featurebtn border border-slate-200 inline-flex gap-3 items-center bg-slate-50 text-black-500 px-4 py-[11px] font-medium transition-all rounded hover:bg-slate-900 hover:text-white">
                            Create
                        </button>
                    </div>
                </div>
            </div>

            <div class="text-right mt-5">
                <button type="submit" class="bg-themered text-white font-semibold px-6 py-3 rounded-lg">
                    {{ $shop ? 'Update Shop ' . $shop?->number : 'Add Shop Now' }}
                </button>
            </div>
        </form>
    </div>
</div>
