<x-app-layout>
    <div class="space-y-8">

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
            <div class="card-header noborder justify-end flex gap-3 items-center flex-wrap mb-4 mx-4">

                <div class="input-area">
                    <select name="agent" class="form-control watched-select" id="agentDropdown" data-old="{{ old('agent') }}"></select>
                    <x-input-error :messages="$errors->get('agent')" class="mt-2"/>
                </div>

                <div class="input-area">
                    <select name="property" class="form-control" id="propertyDropdown" data-old="{{ old('property') }}"></select>
                    <x-input-error :messages="$errors->get('property')" class="mt-2"/>
                </div>

                <div class="input-area">
                    <select name="floor" class="form-control watched-select" id="floorDropdown" data-old="{{ old('floor') }}"></select>
                    <x-input-error :messages="$errors->get('floor')" class="mt-2"/>
                </div>

                <div class="form-group">
                    <button type="submit" value="Filter" class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2 !px-3" id="filter_btn">Filter</button>
                </div>
            </div>

            <div class="card-body px-6 pb-6">
                <div class="px-4 h-[500px] w-full overflow-scroll">
                    <div id="floorContainer" class="w-full h-[500px]"></div>
                </div>
            </div>
        </div>
    </div>
    @push("scripts")
        <style>
            #floorContainer {
                position: relative;
                border: 1px solid #333;
                background: #ebebeb;
            }

            #floorContainer .unit {
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

            #floorContainer .unit .close-btn {
                position: absolute;
                top: 2px;
                right: 4px;
                font-weight: bold;
                cursor: pointer;
                color: #565554;
                font-size: 14px;
                z-index: 10;
            }
            .unit {
                cursor: pointer;
            }
        </style>
        <script type="module">
            document.addEventListener("DOMContentLoaded", function () {
                loadDependentDropdowns([
                    { parent: 'propertyDropdown', child: 'floorDropdown', type: 'floor', filterKey: 'property_id' },
                ]);
                loadSelect2Dropdown("property", "propertyDropdown", {}, "Filter by Property");
                loadSelect2Dropdown("agent", "agentDropdown", {}, "Filter by Agent");


                // setting up floor plan
                const floor = document.getElementById('floorContainer');
                let plan = new FloorPlan({
                    floorElement: floor,
                    scale: 10,
                    floorSizeFeet: { length: 130, width: 48 }});

                document.getElementById("filter_btn").addEventListener("click", function (e) {
                    const floorEl = document.getElementById('floorDropdown');
                    const agentEl = document.getElementById('agentDropdown');
                    floor.innerHTML = "";

                    const floorPlanUrl = '{{ route("floor-plan.agent.shops", [":floor", ":agent"]) }}'.replace(":agent", agentEl.value).replace(":floor", floorEl.value);

                    axios.get(floorPlanUrl).then(function (response) {
                        if(response.data.success){
                            const data = response.data.data;
                            plan.initFloorSize({ length: data.length, width: data.width });
                            plan.renderUnits(data.units);
                        }
                    }).catch(function (error) {
                        console.error(error);
                    })

                });

                document.getElementById('filter_btn').addEventListener('click', () => {
                    const agentEl = document.getElementById('agentDropdown');
                    onElementsLoaded(".unit", (units) => {
                        units.forEach(unit => {
                            unit.addEventListener('click', function (e) {
                                const unitId = this.dataset.unitId;
                                window.open("{{ route('admin.installment.create', [':shop', ':agent']) }}".replace(":shop", unitId).replace(":agent", agentEl.value), '_blank');
                            }); // end click
                        }); // end foreach
                    }); // end onElementsLoaded
                }); // end change
            });
        </script>
    @endpush

</x-app-layout>
