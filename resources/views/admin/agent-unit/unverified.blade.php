<x-app-layout>
    <div>
        {{--Breadcrumb start--}}
        <div class="mb-6">
            {{--BreadCrumb--}}
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageConfig->create->title" />
        </div>
        {{--Breadcrumb end--}}

        {{--Create user form start--}}
        <br>
        <x-floor-plan />

        <style>
            .unit {
                position: relative;
                cursor: pointer;
            }
            .unit .unit-check {
                position: absolute;
                top: 0;
                right: 0;
                cursor: not-allowed;
            }
        </style>
    </div>

    @push("scripts")
        <script type="module">
            document.addEventListener("DOMContentLoaded", function () {

                document.querySelector('#floorDropdown').addEventListener('change', () => {
                    onElementsLoaded(".unit", (units) => {
                        units.forEach(unit => {
                            unit.addEventListener('click', function (e) {
                                const unitId = this.dataset.unitId;
                                window.open("{{ route($pageConfig->routes->approve, ':id') }}".replace(":id", unitId));
                            }); // end click
                        }); // end foreach
                    }); // end onElementsLoaded
                }); // end change
            });
        </script>
    @endpush
</x-app-layout>
