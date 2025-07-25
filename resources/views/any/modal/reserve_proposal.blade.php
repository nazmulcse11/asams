<div class="modal-content bg-white w-full max-w-5xl mx-auto border border-slate-400 rounded-2xl relative">
    <div class="modal-header bg-[#F8F9FB] p-4 lg:p-6 rounded-tl-2xl rounded-tr-2xl">
        <h2 class="text-center text-xl lg:text-2xl">
            <b>{{ __("All Proposals on Shop No. ") }} {{ $shop->number }}</b>
        </h2>
        <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
            <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
        </button>
    </div>
    <div class="modal-body p-4 lg:p-8 xl:p-10 space-y-6">
        <div class="overflow-x-auto">
            <table class="w-full border-collapse table-auto">
                <thead>
                <tr class="*:font-medium *:text-black-600 *:py-2 *:px-3 *:text-sm *:border *:border-slate-100 *:bg-slate-50 *:whitespace-nowrap">
                    <th>
                        {{ __('No')}}
                    </th>
                    <th>
                        {{ __(' Agent Name ')}}
                    </th>
                    <th>
                        {{ __(' Sale Price ')}}
                    </th>
                    <th>
                        {{ __(' Security Money ')}}
                    </th>
                    <th>
                        {{ __(' Reserve Until ')}}
                    </th>
                    <th>
                        {{ __(' Commission ')}}
                    </th>
                    <th>
                        {{ __(' Action ')}}
                    </th>
                </tr>
                </thead>
                <tbody>
                @php
                    if(getCurrentGuard() == 'admin') $reserves = $shop->verifiedReserves();
                    elseif(getCurrentGuard() == 'employee') $reserves = $shop->pendingReserves();
                @endphp

                @foreach($reserves as $item)
                    <tr class="*:text-black-500 *:font-medium *:py-2 *:px-4 *:text-sm *:text-center *:border *:border-slate-100 hover:bg-[#F9FAFB] *:whitespace-nowrap">
                    <td>
                        {{ $loop->index }}
                    </td>
                    <td>
                        <a href="#" class="hover:underline">
                            {{ $item->agent?->profile?->full_name ?? $item->agent?->username }}
                        </a>
                    </td>
                    <td>
                        ৳{{  $item->sale_price }}
                    </td>
                    <td>
                        ৳{{ $item->security_deposit }}
                    </td>
                    <td>
                        {{ $item->created_at->addDays((int) $item->duration)->diffForHumans() }}
                    </td>
                    <td>
                        @if($item->commission_type == 'amount') ৳ @endif {{ $item->commission }} @if($item->commission_type == 'percentage') % @endif
                    </td>
                    <td>
                        <div class="*:text-sm *:py-2.5 *:px-4 *:rounded-md *:font-medium *:flex-1 *:inline-flex *:items-center *:justify-center *:gap-1.5 *:transition-all">
                            @if(getCurrentGuard() == 'admin')
                                <form action="{{ route('any.shop-reservation.reject') }}" method="POST" class="inline">
                                    @csrf
                                    <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                                    <input type="hidden" name="reserve_id" value="{{ $item->id }}">
                                    <button type="submit" class="text-themered bg-[#FFF0F1] border border-[#FFF0F1] hover:bg-themered hover:text-white">
                                        {{ __('Reject') }}
                                    </button>
                                </form>

                                <form action="{{ route('any.shop-reservation.approve') }}" method="POST" class="inline">
                                    @csrf
                                    <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                                    <input type="hidden" name="reserve_id" value="{{ $item->id }}">
                                    <button type="submit" class="text-white bg-themered border border-themered hover:bg-gunmetal hover:border-gunmetal">
                                        {{ __('Approve') }}
                                    </button>
                                </form>
                            @elseif(getCurrentGuard() == 'employee')
                                <form action="{{ route('any.shop-reservation.verify') }}" method="POST" class="inline">
                                    @csrf
                                    <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                                    <input type="hidden" name="reserve_id" value="{{ $item->id }}">
                                    <button type="submit" class="text-white bg-themered border border-themered hover:bg-gunmetal hover:border-gunmetal">
                                        {{ __('Verify') }}
                                    </button>
                                </form>
                            @endif


                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
