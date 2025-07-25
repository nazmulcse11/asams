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
                    {{--Refresh Button start--}}
                    <a class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2.5" href="{{ route($pageConfig->routes->propertyBuyerShop) }}">
                        <iconify-icon icon="mdi:refresh" class="text-xl "></iconify-icon>
                    </a>
                </div>
            </header>

            {{-- filter section--}}
            <div class="justify-end flex gap-3 items-center flex-wrap mb-4 mx-4">
                <div class="input-area">
                    <select name="property" id="property_fltr" class="form-control"></select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn inline-flex justify-center btn-dark rounded-[25px] items-center !p-2 !px-3" id="filter_btn">
                        {{ __($pageConfig->index->filter->text) }}</button>
                </div>
            </div>
            <div class="card-body px-6 pb-6">
                <div class="overflow-x-auto -mx-6">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden px-4">
                            <table id="tbl_item" class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @push('scripts')
        <script type="module">
            document.addEventListener("DOMContentLoaded", function () {
                loadSelect2Dropdown("property", "property_fltr", {}, "Filter by Property");
                const dataTableCrudLibrary = new DataTableCrudLibrary({
                    table: {
                        selector: '#tbl_item',
                        ajax: {
                            url: "{{ route( $pageConfig->routes->propertyBuyerShop ) }}",
                            type: "get",
                            cache: false
                        },
                        columns: [
                            {
                                title: 'S/N', // Column title for Serial Number
                                render: function(data, type, row, meta) {
                                    return meta.row + meta.settings._iDisplayStart + 1; // Serial number
                                },
                                orderable: false // Typically you wouldn't sort by serial number
                            },
                            {
                                data: 'block.floor.property',
                                title: 'Property',
                                orderable: false, // Enable sorting for this column
                                render: function (data) {
                                    return data.name || "N/A";
                                }
                            },
                            {
                                data: 'id',
                                title: 'Shop',
                                orderable: false, // Enable sorting for this column
                                render: function (data, type, row) {
                                    return "shop: " + row.number  || "N/A";
                                }
                            },
                            {
                                data: 'buyer',
                                title: 'Buyer Name',
                                orderable: false, // Enable sorting for this column
                                render: function (data, type, row) {
                                    return data?.username  || "N/A";
                                }
                            },
                            {
                                data: 'buyer',
                                title: 'Buyer Phone',
                                orderable: false, // Enable sorting for this column
                                render: function (data, type, row) {
                                    return data?.phone  || "N/A";
                                }
                            },
                            {
                                data: 'buyer_shops',
                                title: 'Sell Price',
                                orderable: false, // Enable sorting for this column
                                render: function (data, type, row) {
                                    return data?.sell_amount  || "N/A";
                                }
                            },
                            {
                                data: 'total_payment_amount',
                                title: 'Paid Amount',
                                orderable: false, // Enable sorting for this column
                                render: function (data, type, row) {
                                    return data  || "N/A";
                                }
                            },
                        ],
                        columnDefs: [
                            { targets: 0, width: "4%" },
                            { targets: 1, width: "13%" },
                            { targets: 2, width: "7%" },
                            { targets: 3, width: "15%" },
                            { targets: 4, width: "15%" },
                            { targets: 5, width: "15%" },
                            { targets: 6, width: "15%" },
                        ],
                        createdRow: function(row, data, dataIndex) {
                            $(row).attr('data-id', data.id); // Set data-id using the row's unique ID from data
                        }
                    },
                    filter: {
                        buttonSelector: '#filter_btn',
                        fields: [
                            {name: 'propertyFilter', selector: '#property_fltr'},
                        ]
                    },
                    permissions: {
                        canList: true,
                        canCreate: true,
                        canView: true,
                        canEdit: true,
                        canDelete: true,
                        canDeleteBulk: true
                    },
                    csrfToken: "{{ csrf_token() }}"
                });
            });
        </script>
    @endpush

</x-app-layout>
