<x-app-layout>

    <!-- Properties Page Title -->
    <div class="sm:flex flex-wrap items-center gap-4 justify-between max-sm:space-y-6">
        <div class="name flex items-center gap-3">
            <div class="icon flex-[0_0_64px]">
                @isset($item->picture[0])
                    <img src="{{ $item->picture[0] }}" class="w-16 h-16 rounded-full object-cover object-center" alt="">
                @else
                    <img src="{{ asset('/images/pic1.png') }}" class="w-16 h-16 rounded-full object-cover object-center"
                         alt="">
                @endisset
            </div>
            <div class="desc">
                <h3 class="text-lg font-semibold">
                    {{ $item->name }}
                </h3>
                <p class="text-sm text-gray-500">
                    {{ $item->address }}
                </p>
            </div>
        </div>

        <div class="meta-info">
            <ul class="flex items-center flex-wrap gap-x-10 gap-y-3.5 *:flex *:gap-2.5 *:items-center">
                <li>
                    <div class="icon">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4"
                                  d="M32.5 0H3.5C1.567 0 0 1.567 0 3.5V32.5C0 34.433 1.567 36 3.5 36H32.5C34.433 36 36 34.433 36 32.5V3.5C36 1.567 34.433 0 32.5 0Z"
                                  fill="#A6B1BF"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M5.5 22C6.3284 22 7 22.6716 7 23.5V27.2692C7 28.2251 7.7749 29 8.7308 29H12.5C13.3284 29 14 29.6716 14 30.5C14 31.3284 13.3284 32 12.5 32H8.7308C6.118 32 4 29.882 4 27.2692V23.5C4 22.6716 4.6716 22 5.5 22Z"
                                  fill="#A6B1BF"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M30.5 22C31.3284 22 32 22.6716 32 23.5V27.2692C32 29.882 29.882 32 27.2692 32H23.5C22.6716 32 22 31.3284 22 30.5C22 29.6716 22.6716 29 23.5 29H27.2692C28.2251 29 29 28.2251 29 27.2692V23.5C29 22.6716 29.6716 22 30.5 22Z"
                                  fill="#A6B1BF"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M22 5.5C22 4.6716 22.6716 4 23.5 4H27.5C29.9853 4 32 6.0147 32 8.5V12.5C32 13.3284 31.3284 14 30.5 14C29.6716 14 29 13.3284 29 12.5V8.5C29 7.6716 28.3284 7 27.5 7H23.5C22.6716 7 22 6.3284 22 5.5Z"
                                  fill="#A6B1BF"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M8.5 7C7.6716 7 7 7.6716 7 8.5V12.5C7 13.3284 6.3284 14 5.5 14C4.6716 14 4 13.3284 4 12.5V8.5C4 6.0147 6.0147 4 8.5 4H12.5C13.3284 4 14 4.6716 14 5.5C14 6.3284 13.3284 7 12.5 7H8.5Z"
                                  fill="#A6B1BF"/>
                        </svg>
                    </div>
                    <div class="info">
                        <span class="text-sm text-gray-500">{{ __("Area:")}}</span> <br>
                        <b>{{$item->total_area ?? 0}}{{ __(" sq.ft") }}</b>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.7943 0H6.2429C2.14952 0 0 2.14952 0 6.2243V9.7756C0 13.8504 2.14952 15.9999 6.2243 15.9999H9.7756C13.8504 15.9999 15.9999 13.8504 15.9999 9.7756V6.2243C16.0186 2.14952 13.8691 0 9.7943 0Z"
                                fill="#A6B1BF"/>
                            <path opacity="0.4"
                                  d="M29.7757 0H26.2243C22.1495 0 20 2.14953 20 6.2243V9.7757C20 13.8505 22.1495 16 26.2243 16H29.7757C33.8505 16 36 13.8505 36 9.7757V6.2243C36 2.14953 33.8505 0 29.7757 0Z"
                                  fill="#A6B1BF"/>
                            <path
                                d="M29.7757 20H26.2243C22.1495 20 20 22.1495 20 26.2243V29.7757C20 33.8505 22.1495 36 26.2243 36H29.7757C33.8505 36 36 33.8505 36 29.7757V26.2243C36 22.1495 33.8505 20 29.7757 20Z"
                                fill="#A6B1BF"/>
                            <path opacity="0.4"
                                  d="M9.7943 20H6.2429C2.14952 20 0 22.147 0 26.217V29.7643C0 33.853 2.14952 36 6.2243 36H9.7756C13.8504 36 15.9999 33.853 15.9999 29.783V26.2357C16.0186 22.147 13.8691 20 9.7943 20Z"
                                  fill="#A6B1BF"/>
                        </svg>
                    </div>
                    <div class="info">
                        <span class="text-sm text-gray-500">{{ __("Blocks/Units:")}}</span> <br>
                        <b>{{ $item->total_count->block ?? 0}}</b>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M34.7394 5.77999L23.0194 0.55999C21.2994 -0.20001 18.6994 -0.20001 16.9794 0.55999L5.25938 5.77999C2.29938 7.1 1.85938 8.9 1.85938 9.86C1.85938 10.82 2.29938 12.62 5.25938 13.94L16.9794 19.16C17.8394 19.54 18.9194 19.74 19.9994 19.74C21.0794 19.74 22.1594 19.54 23.0194 19.16L34.7394 13.94C37.6994 12.62 38.1394 10.82 38.1394 9.86C38.1394 8.9 37.7194 7.1 34.7394 5.77999Z"
                                fill="#A6B1BF"/>
                            <path opacity="0.4"
                                  d="M20.0006 30.08C19.2406 30.08 18.4806 29.92 17.7806 29.62L4.30063 23.62C2.24063 22.7 0.640625 20.24 0.640625 17.98C0.640625 17.16 1.30063 16.5 2.12063 16.5C2.94063 16.5 3.60063 17.16 3.60063 17.98C3.60063 19.06 4.50064 20.46 5.50064 20.9L18.9806 26.9C19.6206 27.18 20.3606 27.18 21.0006 26.9L34.4806 20.9C35.4806 20.46 36.3806 19.08 36.3806 17.98C36.3806 17.16 37.0406 16.5 37.8606 16.5C38.6806 16.5 39.3406 17.16 39.3406 17.98C39.3406 20.22 37.7406 22.7 35.6806 23.62L22.2006 29.62C21.5206 29.92 20.7606 30.08 20.0006 30.08Z"
                                  fill="#A6B1BF"/>
                            <path opacity="0.4"
                                  d="M20.0006 39.9999C19.2406 39.9999 18.4806 39.8399 17.7806 39.5399L4.30063 33.5399C2.08063 32.5599 0.640625 30.3399 0.640625 27.8999C0.640625 27.0799 1.30063 26.4199 2.12063 26.4199C2.94063 26.4199 3.60063 27.0799 3.60063 27.8999C3.60063 29.1599 4.34064 30.2999 5.50064 30.8199L18.9806 36.8199C19.6206 37.0999 20.3606 37.0999 21.0006 36.8199L34.4806 30.8199C35.6206 30.3199 36.3806 29.1599 36.3806 27.8999C36.3806 27.0799 37.0406 26.4199 37.8606 26.4199C38.6806 26.4199 39.3406 27.0799 39.3406 27.8999C39.3406 30.3399 37.9006 32.5399 35.6806 33.5399L22.2006 39.5399C21.5206 39.8399 20.7606 39.9999 20.0006 39.9999Z"
                                  fill="#A6B1BF"/>
                        </svg>
                    </div>
                    <div class="info">
                        <span class="text-sm text-gray-500">{{ __("Floor:")}}</span> <br>
                        <b>{{ $item->total_count->floor ?? 0 }}</b>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="floor-plans bg-white border border-gray-200 rounded-2xl p-4 2xl:p-6 my-6">
        <h3 class="text-lg xl:text-2xl font-semibold mb-8">
            {{ __("Floor Plans")}}
        </h3>


        @php
            $admin = auth('admin')->user();

            $agentNotifications = $admin->unreadnotifications()
                ->where('type', [\App\Notifications\AgentReserveNotification::class, \App\Notifications\AgentSecurityMoneyDepositNotification::class])
                ->where('data->type', 'agent')
                ->get();

            $buyerNotifications = $admin->unreadnotifications()
            ->whereIn('type', [\App\Notifications\BuyerSaleRequestNotification::class])
                ->where('data->type', 'buyer')
                ->get();

            $agentFloorCounts = $agentNotifications->groupBy('data.floor_id')->map->count();
            $buyerFloorCounts = $buyerNotifications->groupBy('data.floor_id')->map->count();
        @endphp

        <div class="lg:flex flex-wrap gap-x-10 gap-y-5 tab-wrapper">
            <div class="lg:flex-[0_0_165px] text-center">
                <form action="#" class="mb-4">
                    <div class="input-area space-y-1">
                        <select name="agent_buyer_filter" id="agent_buyer_filter"
                                class="cursor-pointer text-sm w-full px-4 py-3 rounded-lg  border border-[#E1E5EA] focus:outline-none">
                            <option value="">{{ __("Filter Proposals") }}</option>
                            <option value="agent">{{ __("Agent Proposal ({$agentNotifications->count()})") }}</option>
                            <option value="buyer">{{ __("Buyer Proposal ({$buyerNotifications->count()})") }}</option>
                        </select>
                    </div>
                </form>
                <ul id="nav_floor_list"
                    class="max-lg:grid max-md:grid-cols-2 md:max-lg:grid-cols-3 max-lg:gap-3 nav-tabs lg:space-y-3 [&_a]:w-full [&_a]:text-sm [&_a]:py-3.5 [&_a]:px-5 [&_a]:rounded-md [&_a]:font-semibold [&_a]:inline-flex [&_a]:gap-2 [&_a]:items-center [&_a]:justify-center [&_a]:transition-all [&_a]:text-themered [&_a]:bg-[#FFF0F1]">
                    @php $i = 1; @endphp
                    @foreach($item->floors as $floor)
                        <li>
                            <a href="#floor_{{ $floor->id }}"
                               id="list_floor_{{ $floor->id }}"
                               data-floor-id="{{ $floor->id }}"
                               class="floor_{{ $floor->id }} floor_select_btn @if($i == 1) active @endif nav-item hover:bg-themered hover:text-white [&.active]:bg-themered [&.active]:text-white">
                                {{ $floor->name }}
                            </a>
                        </li>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </ul>
            </div>

            <div class="flex-1" id="floor_body">

                @if($item->total_count->floor > 0)
                    <div
                        class="loading text-center h-full text-xl font-medium text-pureblack flex items-center justify-center flex-col">
                        <img src="{{ asset('/images/rotate.gif')}}" class="w-10 scale-x-[-1]" alt="Loading...">
                        Loading...
                    </div>
                @else
                    <div
                        class="loading text-center h-full text-xl font-medium text-pureblack flex items-center justify-center flex-col">
                        <iconify-icon icon="nonicons:not-found-16" width="50" height="50"
                                      style="color: #ff0000;"></iconify-icon>
                        <br>
                        No Floor Found
                    </div>
                @endif
                <!-- render form request floor_body.blade.php -->


            </div>
        </div>
    </div>

    @push("modal")
        <!-- Shop Details Modal -->
        <div id="shop_details_modal"
             class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
            <div
                class="loading text-center max-w-sm w-full py-6 bg-white fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-xl text-xl font-medium text-pureblack flex items-center justify-center flex-col">
                <img src="{{ asset('/images/rotate.gif')}}" class="w-10 scale-x-[-1]" alt="Loading...">
                Loading...
            </div>
        </div>

        <div id="page_modal"
             class="asams-modal fixed inset-0 z-[1024] p-4 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
            <!-- dynamic generated modal content -->
        </div>

    @endpush

    @push("scripts")
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <script>
            // floor body rendering script
            document.addEventListener('DOMContentLoaded', bindFloorSelectButtons);
            document.addEventListener('DOMContentLoaded', initModalHandlers);

            function preloader(style) {
                if (style == 'modalPreload') {
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

            function bindFloorSelectButtons() {
                document.querySelectorAll('.floor_select_btn').forEach(button => {
                    button.removeEventListener('click', handleFloorClick); // Prevent duplicate binding
                    button.addEventListener('click', handleFloorClick);
                });
            }

            function handleFloorClick(evt) {
                evt.preventDefault();

                document.getElementById("floor_body").innerHTML = preloader();

                document.querySelectorAll('.floor_select_btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                this.classList.add('active');

                const itemId = this.dataset.floorId;
                if (itemId === undefined) return;

                getFloorBody(itemId, document.getElementById('agent_buyer_filter').value);
            }

            function triggerShopDetailsModal() {
                document.querySelectorAll('.shop-details-modal').forEach(button => {
                    button.addEventListener('click', function () {
                        const itemId = this.dataset.shopId;
                        document.getElementById("shop_details_modal").innerHTML = preloader('modalPreload');
                        axios.get('{{ route("admin.shop.show", ":id") }}'.replace(":id", itemId))
                            .then(response => {
                                document.getElementById("shop_details_modal").innerHTML = response.data.data;
                            }).catch(error => {
                            console.error(error);
                        });
                    });
                });
            }

            function getFloorBody(itemId, agent_buyer_filter = null) {
                axios.get('{{ route("any.floor.body") }}', {
                    params: {
                        floor_id: itemId,
                        page: 1,
                        filter: agent_buyer_filter
                    }
                }).then(response => {
                    document.getElementById("floor_body").innerHTML = response.data.html;

                    triggerShopDetailsModal();
                    notificationFilter();


                    $('#floor_show_type').on('change', showCorrectContent);

                    $('.nav-item').on('click', function () {
                        showCorrectContent();
                    });
                    $('#toggle-map-form').on('click', function () {
                        $('.upload_floor_map').slideToggle(300);
                    });
                    loadMore();
                    search();
                    viewProposalModal();
                    initModalHandlers();

                }).catch(error => {
                    console.error(error);
                });
            }

            function viewProposalModal() {
                document.querySelectorAll('.view-proposal, .view-sale-proposal').forEach(button => {
                    button.addEventListener('click', function () {
                        const itemId = this.dataset.shopId;

                        let url = '{{ route("any.shop-reservation.reserve") }}';
                        if(button.classList.contains('view-sale-proposal')) {
                            url = '{{ route("any.shop-request.modal-form") }}';
                        } else {

                        }

                        axios.get(url, {
                            params: {
                                shop_id: itemId,
                            }
                        })
                            .then(response => {
                                console.log(response.data);
                                document.getElementById("page_modal").innerHTML = response.data.html;
                                document.querySelectorAll('#page_modal').forEach(modal => {
                                    modal.classList.add('show');
                                    modal.classList.remove('hidden');
                                });
                            }).catch(error => {
                            console.error(error);
                        });

                    });
                });
            }

            function search() {
                document.querySelectorAll("#floor_block, input[name='s'], #floor_status").forEach(input => {
                    input.addEventListener("change", function () {
                        let params = {
                            block_id: document.getElementById('floor_block').value,
                            s: document.getElementById('shop_search').value.trim(),
                            floor_id: document.getElementById('shop_search').dataset.floorId,
                            status_id: document.getElementById('floor_status').value
                        }

                        axios.get('{{ route("admin.console.shop.index") }}', {
                            params: params
                        }).then(response => {
                            const container = document.getElementById('shops_container');
                            container.innerHTML = response.data.html;
                            document.getElementById("add_new_shop_card").remove();
                            initModalHandlers();
                            triggerShopDetailsModal();
                        }).catch(error => {
                            console.error(error);
                        });

                    });
                });
            }

            function loadMore() {
                const loadMoreBtn = document.getElementById('load-more-btn');
                if (!loadMoreBtn) return;

                loadMoreBtn.addEventListener('click', function () {
                    const btn = this;
                    const nextPageUrl = btn.getAttribute('data-next-page');
                    let itemId = document.querySelector('.floor_select_btn.active').dataset.floorId;

                    if (!nextPageUrl) {
                        btn.style.display = 'none';
                        return;
                    }

                    btn.disabled = true;
                    btn.textContent = 'Loading...';

                    axios.get(nextPageUrl + '&floor_id=' + itemId)
                        .then(response => {
                            const data = response.data;
                            if (data.success) {
                                const container = document.getElementById('add_new_shop_card');
                                container.insertAdjacentHTML("beforebegin", data.html);

                                console.log(data);

                                if (data.next_page_url) {
                                    btn.setAttribute('data-next-page', data.next_page_url);
                                    btn.disabled = false;
                                    btn.textContent = 'Load More';
                                } else {
                                    btn.style.display = 'none'; // No more pages
                                }
                            } else {
                                btn.style.display = 'none';
                            }
                        }).catch(error => {
                        btn.disabled = false;
                        btn.textContent = 'Load More';
                        console.error(error);
                    });
                });
            }

            function initModalHandlers() {
                // Open modal
                document.querySelectorAll('[data-popup="modal"]').forEach(trigger => {
                    trigger.addEventListener('click', function (e) {
                        e.preventDefault();
                        const targetModalSelector = this.getAttribute('href');
                        const targetModal = document.querySelector(targetModalSelector);

                        // Close any open modal
                        document.querySelectorAll('.asams-modal.show').forEach(modal => {
                            modal.classList.add('hidden');
                            modal.classList.remove('show');
                        });

                        // Open target modal
                        if (targetModal) {
                            targetModal.classList.remove('hidden');
                            targetModal.classList.add('show');
                        }
                    });
                });

                // Close modal when clicking outside .modal-content or on .modal-close
                document.querySelectorAll('.asams-modal').forEach(modal => {
                    modal.addEventListener('click', function (e) {
                        const modalContent = modal.querySelector('.modal-content');
                        const isClickInside = modalContent.contains(e.target);
                        const isCloseBtn = e.target.closest('.modal-close');

                        if (!isClickInside || isCloseBtn) {
                            modal.classList.add('hidden');
                            modal.classList.remove('show');
                        }
                    });
                });

                // Close modal on Escape key
                document.addEventListener('keydown', function (e) {
                    if (e.key === 'Escape') {
                        document.querySelectorAll('.asams-modal.show').forEach(modal => {
                            modal.classList.add('hidden');
                            modal.classList.remove('show');
                        });
                    }
                });
            }

            function notificationFilter() {
                const agentBuyerFilterEl = document.getElementById("agent_buyer_filter");
                agentBuyerFilterEl.addEventListener('change', function () {
                    const agentBuyer = this.value;
                    let data;

                    if (agentBuyer === 'agent') {
                        data = @json($agentFloorCounts);
                    } else if (agentBuyer === 'buyer') {
                        data = @json($buyerFloorCounts);
                    } else {
                        data = {};
                    }

                    document.querySelectorAll('.notify-badge').forEach(el => el.remove());

                    Object.entries(data).forEach(([floorId, floorCount]) => {
                        const floorEl = document.getElementById(`list_floor_${floorId}`);
                        const span = `<span class="notify-badge inline-flex items-center justify-center w-5 h-5 rounded-full text-themered bg-[#FFE2E4] font-bold text-xs">${floorCount}</span>`
                        if (floorEl) {
                            floorEl.insertAdjacentHTML("beforeend", span);
                        }
                    });
                });
            }

            document.addEventListener("DOMContentLoaded", function () {
                // init loading
                let itemId = document.querySelector('.floor_select_btn.active')?.dataset.floorId;
                const activeBtn = document.querySelector('.floor_select_btn.active');
                if (activeBtn) {
                    itemId = activeBtn.dataset.floorId;
                    getFloorBody(itemId, document.getElementById('agent_buyer_filter').value);
                }
            });


            function showCorrectContent() {
                const view = $('#floor_show_type').val();
                const $activePane = $('.pane-tab');
                $activePane.find('.floor_show_type_grid').toggle(view === 'Grid');
                $activePane.find('.floor_show_type_map').toggle(view === 'Map');
            }

        </script>

    @endpush
</x-app-layout>
