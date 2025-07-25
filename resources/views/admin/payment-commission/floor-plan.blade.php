<x-app-layout>
    <div>
        <div class=" mb-6">
            {{--Breadcrumb start--}}
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->index->title"/>
        </div>

        {{--Alert start--}}
        @if (session('message'))
            <x-alert :message="session('message')" :type="'success'" />
        @endif
        {{--Alert end--}}

        <div class="card">
            <header class=" card-header noborder">
                <div class="justify-end flex gap-3 items-center flex-wrap">

                    <button class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2 !px-3" id="toggleModeBtn">
                        <iconify-icon icon="mdi:edit" class="text-lg mr-1"></iconify-icon>
                        {{ __("Edit") }}
                    </button>

                    {{--Refresh Button start--}}
                    <a class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2.5" href="">
                        <iconify-icon icon="mdi:refresh" class="text-xl "></iconify-icon>
                    </a>

                    <div class="input-area">
                        <select name="componentType" id="componentType" class="form-control" style="display: none">
                            <option value="shop">{{ __("Open Space") }}</option>
                            <option value="lift">{{ __("Lift") }}</option>
                            <option value="stair">{{ __("Stair") }}</option>
                            <option value="corridor">{{ __("Corridor") }}</option>
                            <option value="washroom">{{ __("Washroom") }}</option>
                        </select>
                    </div>

                    <button type="button" id="addComponentBtn" class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2 !px-3" style="display: none">
                        <iconify-icon icon="ic:round-plus" class="text-lg mr-1">
                        </iconify-icon>
                        {{ __("Add") }}
                    </button>

                    <button type="button" id="addUnitBtn" data-bs-target="#addUnitModal" data-bs-toggle="modal" data-id="${data}" style="display: none">
                        {{ __("Add Unit") }}
                    </button>
                </div>
            </header>

            {{-- filter section--}}
            <div class="justify-end flex gap-3 items-center flex-wrap mb-4 mx-4">


                <div class="input-area">
                    <select name="property" class="form-control" id="propertyDropdown" data-old="{{ old('property', request()->get('property')) }}"></select>
                    <x-input-error :messages="$errors->get('property')" class="mt-2"/>
                </div>

                <div class="input-area">
                    <select name="floor" class="form-control" id="floorDropdown" data-old="{{ old('floor') }}"></select>
                    <x-input-error :messages="$errors->get('floor')" class="mt-2"/>
                </div>
            </div>
            <div class="card-body px-6 pb-6">
                <div class="px-4 h-[500px] w-full overflow-scroll">
                    <div id="floor" class="w-full h-[500px]"></div>
                </div>
            </div>

        </div>

        <!-- Modal -->
        <div id="addUnitModal" tabindex="-1" aria-labelledby="addUnitModal" class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto">
            <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div class="relative w-full h-full md:h-auto">
                        <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                                <h3 class="text-xl font-medium text-white dark:text-white capitalize">
                                    {{ __("add new shop") }}
                                </h3>
                                <button type="button" class="text-slate-400 bg-transparent hover:bg-slate-200 hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex
                                    items-center dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                                    <svg class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                                            11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div id="modal-body">
                                <form id="addUnitForm">
                                    @csrf
                                    <div class="p-6 md:grid md:grid-cols-2 md:gap-5">
                                        <div class="input-area">
                                            <label for="number" class="form-label">{{ __('Shop number') }}</label>
                                            <input name="number" type="text" id="number" class="form-control"
                                                   placeholder="{{ __('Enter number') }}" value="{{ old('number') }}">
                                            <span id="number-error" class="text-sm text-red-600 space-y-1 mt-2"></span>
                                        </div>

                                        <div class="input-area">
                                            <label for="name" class="form-label">{{ __('Shop picture') }}</label>
                                            <input name="picture[]" type="file" id="picture" class="form-control" value="{{ old('picture') }}"  multiple>
                                            <span id="picture-error" class="text-sm text-red-600 space-y-1 mt-2"></span>
                                        </div>

                                        {{--phone input start--}}
                                        <div class="input-area">
                                            <label for="area" class="form-label">{{ __('Shop area') }}</label>
                                            <input name="area" type="number" id="area" class="form-control"
                                                   placeholder="{{ __('Enter area') }}" value="{{ old('area') }}">
                                            <span id="area-error" class="text-sm text-red-600 space-y-1 mt-2"></span>
                                        </div>

                                        <div class="input-area">
                                            <label for="length" class="form-label">{{ __('Shop Length') }}</label>
                                            <input name="length" type="number" id="length" class="form-control"
                                                   placeholder="{{ __('Enter length') }}" value="{{ old('length') }}">
                                            <span id="length-error" class="text-sm text-red-600 space-y-1 mt-2"></span>
                                        </div>

                                        <div class="input-area">
                                            <label for="width" class="form-label">{{ __('Shop Width') }}</label>
                                            <input name="width" type="number" id="width" class="form-control"
                                                   placeholder="{{ __('Enter wide') }}" value="{{ old('width') }}">
                                            <span id="width-error" class="text-sm text-red-600 space-y-1 mt-2"></span>
                                        </div>

                                        <div class="input-area">
                                            <label for="total_area" class="form-label">{{ __('Shop total area') }}</label>
                                            <input name="total_area" type="number" id="total_area" class="form-control"
                                                   placeholder="{{ __('Enter wide') }}" value="{{ old('total_area') }}">
                                            <span id="total_area-error" class="text-sm text-red-600 space-y-1 mt-2"></span>
                                        </div>

                                        <div class="input-area">
                                            <label for="length_half_corridor" class="form-label">{{ __('Shop length half corridor') }}</label>
                                            <input name="length_half_corridor" type="number" id="length_half_corridor" class="form-control"
                                                   placeholder="{{ __('Enter wide') }}" value="{{ old('length_half_corridor') }}">
                                            <span id="length_half_corridor-error" class="text-sm text-red-600 space-y-1 mt-2"></span>
                                        </div>

                                        <div class="input-area">
                                            <label for="min_sale_price" class="form-label">{{ __('Shop Min sale price') }}</label>
                                            <input name="min_sale_price" type="text" id="min_sale_price" class="form-control"
                                                   placeholder="{{ __('Enter mn sale price') }}" value="{{ old('min_sale_price') }}">
                                            <span id="min_sale_price-error" class="text-sm text-red-600 space-y-1 mt-2"></span>
                                        </div>

                                        <div class="input-area">
                                            <label for="booking_percent" class="form-label">{{ __('Booking Money percent') }}</label>
                                            <input name="booking_percent" type="text" id="booking_percent" class="form-control"
                                                   placeholder="{{ __('Enter mn sale price') }}" value="{{ old('booking_percent') }}">
                                                <span class="text-sm text-red-600 space-y-1 mt-2"></span>
                                            <span id="booking_percent-error" class="text-sm text-red-600 space-y-1 mt-2"></span>
                                        </div>

                                        <div class="input-area">
                                            <label for="width_full_shop" class="form-label">{{ __('Shop width full shop') }}</label>
                                            <input name="width_full_shop" type="number" id="width_full_shop" class="form-control"
                                                   placeholder="{{ __('Enter wide') }}" value="{{ old('width_full_shop') }}">
                                            <span id="width_full_shop-error" class="text-sm text-red-600 space-y-1 mt-2"></span>
                                        </div>

                                        <div class="input-area">
                                            <label for="blockDropdown" class="form-label">{{ __('Block') }}</label>
                                            <select name="block_id" class="form-control" id="blockDropdown" data-old="{{ old('block_id') }}"></select>
                                            <span id="block_id-error" class="text-sm text-red-600 space-y-1 mt-2"></span>
                                        </div>


                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center justify-end p-6 space-x-2 border-t border-slate-200 rounded-b dark:border-slate-600">
                                        <button data-bs-dismiss="modal" type="button" id="addUnitCloseBtn" class="btn inline-flex justify-center btn-outline-dark">Close</button>
                                        <button type="submit" class="btn inline-flex justify-center text-white bg-black-500">{{ __("Save") }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push("scripts")
        <style>
            #floor {
                position: relative;
                border: 1px solid #333;
                background: #ebebeb;
            }

            #floor .unit,
            #floor .component{
                position: absolute;
                background: #fff6d6;
                color: #000;
                border: 3px solid #d2c9a7;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 12px;
                border-radius: 4px;
                user-select: none;
                overflow: hidden;
                touch-action: none;
            }

            #floor .unit .close-btn,
            #floor .component .close-btn {
                position: absolute;
                top: 2px;
                right: 4px;
                font-weight: bold;
                cursor: pointer;
                color: #565554;
                font-size: 14px;
                z-index: 10;
            }

            .unit,
            .component{
                position: relative;
                cursor: pointer;
            }

            /* View Mode */
            .view-mode .unit,
            .view-mode .component{
                cursor: pointer;
            }

            .view-mode .close-btn{
                display: none;
            }

        </style>
        <script type="module">
            document.addEventListener("DOMContentLoaded", function () {
                loadDependentDropdowns([
                    { parent: 'propertyDropdown', child: 'floorDropdown', type: 'floor', filterKey: 'property_id' },
                    { parent: 'floorDropdown', child: 'blockDropdown', type: 'block', filterKey: 'floor_id' },
                ]);
                loadSelect2Dropdown("property", "propertyDropdown", {}, "Filter by Property");


                const componentTypeEl = document.getElementById('componentType');
                const addComponentBtnEl = document.getElementById('addComponentBtn');

                // setting up floor plan
                const floor = document.getElementById('floor');
                let plan = new FloorPlan({
                    floorElement: floor,
                    scale: 10,
                    floorSizeFeet: { length: 130, width: 48 },
                    api: {
                        update: (data) => axios.put(`{{ route($pageConfig->routes->update_position) }}`, data),
                        delete: (id) => axios.delete(`{{ route($pageConfig->routes->delete, ":id") }}`.replace(":id", id)),
                        updateComponent: (data) => axios.put(`{{ route($pageConfig->routes->updateComponent) }}`, data),
                        deleteComponent: (id) => axios.delete(`{{ route($pageConfig->routes->deleteComponent, ":id") }}`.replace(":id", id)),
                    }
                });

                // setting up floor
                const floorDropdown = document.getElementById('floorDropdown');
                floorDropdown.addEventListener('change', function () {
                    floor.innerHTML = "";
                    const floorId = this.value;

                    const floorPlanUrl = '{{ route($pageConfig->routes->floor, ":id") }}'.replace(":id", floorId);
                    axios.get(floorPlanUrl).then(function (response) {

                        if(response.data.success){
                            const data = response.data.data;
                            console.log(data);
                            plan.initFloorSize({ length: data.length, width: data.width });
                            plan.renderUnits(data.units);
                            plan.renderComponents(data.components);
                        }
                    }).catch(function (error) {
                        console.error(error);
                    })
                    console.log(floorId);
                })

                document.getElementById('toggleModeBtn').onclick = (event) => {
                    const button = event.currentTarget;
                    plan.setEditMode(!plan.isEditMode);
                    if(plan.isEditMode){
                        button.innerHTML = '<iconify-icon icon="material-symbols:save-outline-sharp" class="text-lg mr-1"></iconify-icon> Save';
                        componentTypeEl.style.display = 'block';
                        addComponentBtnEl.style.display = 'block';
                    } else {
                        button.innerHTML = '<iconify-icon icon="mdi:edit" class="text-lg mr-1"></iconify-icon> Edit';
                        componentTypeEl.style.display = 'none';
                        addComponentBtnEl.style.display = 'none';
                    }
                };

                addComponentBtnEl.onclick = (event) => {
                    event.preventDefault();
                    const componentType = componentTypeEl.value;
                    console.log("component type: ", componentType);

                    if(componentType === 'shop'){
                        document.getElementById('addUnitForm').reset();
                        document.getElementById('addUnitForm').querySelector('input[name="picture[]"]').value = "";

                        document.querySelectorAll('#addUnitModal span[id$="-error"]').forEach(el => {
                            el.textContent = '';
                        });

                        document.getElementById("addUnitBtn").click();
                    } else{
                        const addComponentData = {
                            floor_id: floorDropdown.value,
                            type: String(componentType).charAt(0).toUpperCase() + String(componentType).slice(1),
                            x_position: 0,
                            y_position: 0,
                            width: 10,
                            height: 10
                        };
                        plan.addComponent(addComponentData);
                        console.log("add component", addComponentData);
                        axios.post(`{{ route($pageConfig->routes->add_component) }}`, addComponentData);
                    }


                };

                document.getElementById('addUnitForm').addEventListener('submit', function (e) {
                    e.preventDefault();

                    const form = e.target;
                    const formData = new FormData(form);

                    // Append images
                    const imageFiles = form.querySelector('input[name="picture[]"]').files;
                    for (let i = 0; i < imageFiles.length; i++) {
                        formData.append('images[]', imageFiles[i]);
                    }

                    const formUrl = `{{ route($pageConfig->routes->store) }}`;

                    axios.post(formUrl, formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    }).then(function (response) {
                        if(response.data.success){
                            const data = response.data.data;

                            plan.addUnit({
                                ...data,
                                x_feet: 0,
                                y_feet: 0,
                                unit_width: 10,
                                unit_height: 10
                            });

                            Swal.fire("Success", response.data.message, "success");

                            document.getElementById('addUnitCloseBtn').click();
                        }
                    }).catch(function (error) {

                        // validation error handling
                        if (error.response.status === 422) {
                            const errors = error.response.data.errors;
                            console.log(errors);

                            // Clear previous errors
                            document.querySelectorAll('span[id$="-error"]').forEach(el => {
                                el.innerText = '';
                            });

                            // Loop through Laravel validation errors
                            Object.keys(errors).forEach(field => {
                                const errorSpan = document.getElementById(`${field}-error`);
                                if (errorSpan) {
                                    errorSpan.innerText = errors[field][0]; // Show only the first message
                                }
                            });
                        }
                    })
                });
            });
        </script>
    @endpush
</x-app-layout>
