<x-app-layout>
    <div class="floor-plans bg-white border border-gray-200 rounded-2xl p-4 2xl:p-6 my-6">
        <h3 class="text-lg xl:text-2xl font-semibold mb-8">
            {{ __("Floor Plans")}}
        </h3>
        <div class="lg:flex flex-wrap gap-x-10 gap-y-5 tab-wrapper">
            <div class="lg:flex-[0_0_160px] text-center">
                <ul id="nav_floor_list" class="max-lg:grid max-md:grid-cols-2 md:max-lg:grid-cols-3 max-lg:gap-3 nav-tabs lg:space-y-3 [&_a]:w-full [&_a]:text-sm [&_a]:py-3.5 [&_a]:px-5 [&_a]:rounded-md [&_a]:font-semibold [&_a]:inline-flex [&_a]:items-center [&_a]:justify-center [&_a]:transition-all [&_a]:text-themered [&_a]:bg-[#FFF0F1]">
                    @php
                        $i = 1;
                    @endphp
                    @foreach($item->floors as $floor)
                        <li>
                            <a href="#floor_{{ $floor->id }}" data-floor-id="{{ $floor->id }}" class="floor_{{ $floor->id }} floor_select_btn @if($i == 1) active @endif nav-item hover:bg-themered hover:text-white [&.active]:bg-themered [&.active]:text-white">
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
                    <div class="loading text-center h-full text-xl font-medium text-pureblack flex items-center justify-center flex-col">
                        <img src="{{ asset('/images/rotate.gif')}}" class="w-10 scale-x-[-1]" alt="Loading...">
                        Loading...
                    </div>
                @else
                    <div class="loading text-center h-full text-xl font-medium text-pureblack flex items-center justify-center flex-col">
                        <iconify-icon icon="nonicons:not-found-16" width="50" height="50" style="color: #ff0000;"></iconify-icon>
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
        <div id="reserve_shop" class="asams-modal fixed inset-0 z-[1024] p-4 max-md:pb-20 xl:p-10 2xl:p-16 bg-pureblack/40 transition-opacity duration-150 ease-linear [&:not(.show)]:opacity-0 [&:not(.show)]:invisible overflow-y-auto">
            <div class="modal-content bg-white w-full max-w-4xl mx-auto border border-slate-400 rounded-2xl relative">
                <div class="modal-header p-4 lg:p-6 pb-0 rounded-tl-2xl rounded-tr-2xl">

                    <div class="bg-[#F8F9FB] border border-[#F0F2F4] py-2 px-2 rounded-full flex items-center gap-4">
                        <div class="icon w-12 h-12 rounded-full bg-[#F0F2F4] inline-flex items-center justify-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C14.7394 2 17.2264 3.11009 19.0352 4.90332L10.25 13.6895L8.03027 11.4697C7.73738 11.1768 7.26262 11.1768 6.96973 11.4697C6.67683 11.7626 6.67683 12.2374 6.96973 12.5303L9.71973 15.2803C10.0126 15.5732 10.4874 15.5732 10.7803 15.2803L20.0215 6.03809C21.2637 7.70445 22 9.76862 22 12C22 17.51 17.51 22 12 22C6.49 22 2 17.51 2 12C2 6.49 6.49 2 12 2Z" fill="#2B323B"/>
                            </svg>
                        </div>
                        <div class="">
                            <h2 class="text-xl font-semibold text-gray-900">
                                {{ __("Reservation Details")}}
                            </h2>
                            <p class="text-sm text-gray-500 font-light">
                                Fields are required to complete the reservation process.
                            </p>
                        </div>
                    </div>

                    <button class="modal-close absolute -right-5 -top-5 bg-[#FFF0F1] text-themered w-10 h-10 rounded-full inline-flex items-center justify-center">
                        <iconify-icon class="text-3xl font-light" icon="material-symbols-light:close-small"></iconify-icon>
                    </button>
                </div>
                <div class="modal-body p-4 lg:p-8 xl:p-10 space-y-6">
                    <form id="reserve_form">
                        @csrf
                        <div class="field-body grid grid-cols-1 md:grid-cols-2 gap-4">

                            <div class="field-item space-y-1">
                                <label for="duration" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Reservation Duration')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="duration" id="duration" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg" required >
                                    <option value="">Select</option>
                                    <option value="7" selected>7 Days</option>
                                    <option value="14">14 Days</option>
                                    <option value="30">30 Days</option>
                                    <option value="60">60 Days</option>
                                    <option value="90">90 Days</option>
                                    <option value="120">120 Days</option>
                                    <option value="150">150 Days</option>
                                    <option value="180">180 Days</option>
                                </select>
                                <span class="error-message text-sm text-red-600 space-y-1" data-error="duration"></span>
                            </div>
                            <div class="field-item space-y-1 md:col-span-2">
                                <label for="sale_price" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Sale Price')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="number" min="10" inputmode="numeric" name="sale_price" id="sale_price" placeholder="{{ __('৳10,00,000')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                                <span class="error-message text-sm text-red-600 space-y-1" data-error="sale_price"></span>
                            </div>
                            <div class="field-item space-y-1">
                                <label for="security_deposit" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Security Deposit')}} <span class="text-red-600">*</span>
                                </label>
                                <input type="text" inputmode="numeric" name="security_deposit" id="security_deposit" placeholder="{{ __('৳10,000')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                                <span class="error-message text-sm text-red-600 space-y-1" data-error="security_deposit"></span>
                            </div>
                            <div class="field-item space-y-1">
                                <label for="commission_type" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Commission Type')}} <span class="text-red-600">*</span>
                                </label>
                                <select name="commission_type" id="commission_type" class="w-full text-sm font-light py-3 px-4 bg-white border rounded-lg" required >
                                    <option value="" selected>Select</option>
                                    <option value="percentage">Percentage</option>
                                    <option value="amount">Fixed Amount</option>
                                </select>
                                <span class="error-message text-sm text-red-600 space-y-1" data-error="commission_type"></span>
                            </div>
                            <div class="field-item space-y-1">
                                <label for="commission" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Commission')}}<span class="text-xs text-[#8997A9]">Proposed</span> <span class="text-red-600">*</span>
                                </label>
                                <input type="number" inputmode="numeric" name="commission" id="commission" placeholder="{{ __('7%')}}" class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"/>
                                <span class="error-message text-sm text-red-600 space-y-1" data-error="commission"></span>
                            </div>
                            <div class="field-item space-y-1 md:col-span-2">
                                <label for="note" class="text-gunmetal font-medium block text-sm">
                                    {{ __('Notes')}}<span class="text-xs text-[#8997A9]">(Special Terms or Agreement)</span> <span class="text-red-600">*</span>
                                </label>
                                <textarea name="note" id="note" rows="5"class="w-full text-sm py-[13px] px-4 bg-white border rounded-lg"></textarea>
                                <span class="error-message text-sm text-red-600 space-y-1" data-error="note"></span>
                            </div>

                        </div>

                        <div class="mt-4 text-end">
                            <button type="submit" class="max-md:text-sm transition-all bg-themered hover:bg-gunmetal text-white inline-flex items-center justify-center gap-2 rounded-lg  px-5 py-3">
                                {{ __("Submit Reservation") }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @endpush

    @push("scripts")
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <script>
            // floor body rendering script
            document.addEventListener('DOMContentLoaded', bindFloorSelectButtons);
            document.addEventListener('DOMContentLoaded', initModalHandlers);
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
                getFloorBody(itemId);
            }

            function triggerReserveModal() {
                document.querySelectorAll('.reserve_shop').forEach(button => {
                    button.addEventListener('click', function () {
                        const itemId = this.dataset.shopId;
                        const minSale = this.dataset.minSale;
                        const formEl = document.getElementById('reserve_form');

                        // resetting form
                        formEl.reset();

                        // document.getElementById('sale_price').setAttribute('min', minSale);
                        document.getElementById('sale_price').value = minSale;

                        const hiddenInput = document.createElement('input');
                        hiddenInput.type = 'hidden';
                        hiddenInput.name = 'shop_id';
                        hiddenInput.value = itemId;
                        formEl.appendChild(hiddenInput);

                        document.getElementById('commission_type').addEventListener('change', function() {
                            const commissionInput = document.getElementById('commission');
                            if (this.value === 'percentage') {
                                commissionInput.placeholder = '7%';
                                commissionInput.max = '100';
                                commissionInput.min = '1';
                            } else if (this.value === 'amount') {
                                commissionInput.placeholder = '৳10,000';
                                commissionInput.min = '1';
                            }
                        });
                    });
                });
            }

            function getFloorBody(itemId){
                axios.get('{{ route("any.floor.body") }}', {
                    params: {
                        floor_id: itemId,
                        page: 1
                    }
                }).then(response => {
                    document.getElementById("floor_body").innerHTML = response.data.html;

                    triggerReserveModal();

                    $('#floor_show_type').on('change', showCorrectContent);

                    $('.nav-item').on('click', function () {
                        showCorrectContent();
                    });
                    $('#toggle-map-form').on('click', function () {
                        $('.upload_floor_map').slideToggle(300);
                    });
                    loadMore();
                    search();
                    initModalHandlers();

                }).catch(error => {
                    console.error(error);
                });
            }

            function search() {
                document.querySelectorAll("#floor_block, input[name='s'], #floor_status").forEach(input => {
                    input.addEventListener("change", function () {
                        let params = {
                            block_id: document.getElementById('floor_block').value,
                            s: document.getElementById('shop_search').value.trim(),
                            floor_id: document.getElementById('shop_search').dataset.floorId,
                        }

                        axios.get('{{ route("agent.shop.search") }}', {
                            params: params
                        }).then(response => {
                            const container = document.getElementById('shops_container');
                            container.innerHTML = response.data.html;
                            document.getElementById("add_new_shop_card").remove();
                            initModalHandlers();
                            triggerReserveModal();
                        }).catch(error => {
                            console.error(error);
                        });

                    });
                });
            }

            function loadMore() {
                const loadMoreBtn = document.getElementById('load-more-btn');
                if(!loadMoreBtn) return;

                loadMoreBtn.addEventListener('click', function() {
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
                                const container = document.getElementById('shops_container');
                                container.insertAdjacentHTML("beforeend", data.html);

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

            document.addEventListener("DOMContentLoaded", function () {
                // init loading
                let itemId = document.querySelector('.floor_select_btn.active')?.dataset.floorId;
                const activeBtn = document.querySelector('.floor_select_btn.active');
                if (activeBtn) {
                    itemId = activeBtn.dataset.floorId;
                    getFloorBody(itemId);
                }

                // reserve shop form
                document.getElementById("reserve_form").addEventListener("submit", function (event) {
                    event.preventDefault();
                    const formData = new FormData(this);

                    for (let [key, value] of formData.entries()) {
                        console.log(`${key}: ${value}`);
                    }

                    axios.post('{{ route("agent.reserved-shop.reserve") }}', formData)
                        .then(response => {
                            console.log(response.data);
                            if (response.data.success) {
                                Swal.fire({
                                    html: `<div class="flex items-start gap-4 bg-[#FFFEEB] border border-[#FFFEC2] p-6 rounded-xl">
                                        <div class="icon">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 14C0 6.26801 6.26801 0 14 0C21.732 0 28 6.26801 28 14C28 21.732 21.732 28 14 28C6.26801 28 0 21.732 0 14Z" fill="#FFBF00"/>
                                                <path d="M16.2753 11.433L12.2462 11.938L12.102 12.6066L12.8937 12.7526C13.411 12.8757 13.513 13.0622 13.4004 13.5777L12.102 19.6793C11.7606 21.2575 12.2867 22 13.5236 22C14.4824 22 15.5961 21.5566 16.1011 20.9479L16.2559 20.216C15.904 20.5256 15.3903 20.6488 15.049 20.6488C14.5651 20.6488 14.3892 20.3092 14.5141 19.711L16.2753 11.433ZM16.3984 7.7594C16.3984 8.22602 16.2131 8.67353 15.8831 9.00349C15.5532 9.33344 15.1056 9.5188 14.639 9.5188C14.1724 9.5188 13.7249 9.33344 13.3949 9.00349C13.065 8.67353 12.8796 8.22602 12.8796 7.7594C12.8796 7.29278 13.065 6.84527 13.3949 6.51532C13.7249 6.18536 14.1724 6 14.639 6C15.1056 6 15.5532 6.18536 15.8831 6.51532C16.2131 6.84527 16.3984 7.29278 16.3984 7.7594Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="info-content text-start">
                                            <h6 class='font-semibold text-gunmetal text-lg mb-1'>
                                                Your submission for Reservation under review.
                                            </h6>
                                            <p class='text-sm'>
                                                We’ve received and reviewing your shop reservation. You will get the notifications and can track the status or proceed with the next steps.
                                            </p>
                                        </div>
                                    </div>`,
                                    showCloseButton: false,
                                    showConfirmButton: false,
                                    timer: 5000,
                                });
                                document.querySelectorAll('#reserve_shop').forEach(modal => {
                                    modal.classList.add('hidden');
                                    modal.classList.remove('show');
                                });
                            }
                        })
                        .catch(error => {
                            if (error.response && error.response.status === 422) {
                                const errors = error.response.data.errors;
                                for (const field in errors) {
                                    const message = errors[field][0];
                                    const errorElement = document.querySelector(`.error-message[data-error="${field}"]`);
                                    if (errorElement) {
                                        errorElement.innerText = message;
                                    }
                                }
                            } else {
                                console.error(error);
                            }
                        });
                });
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
