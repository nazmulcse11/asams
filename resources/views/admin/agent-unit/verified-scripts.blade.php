@push('scripts')
    <script type="module">
        document.addEventListener("DOMContentLoaded", function () {

            loadSelect2Dropdown("status", "status_fltr", {type: "general"}, "Filter by Status");
            loadSelect2Dropdown("agent-unit", "agent_unit_fltr", {}, "Filter by Agent Unit");
            new DataTableCrudLibrary({
                table: {
                    selector: '#tbl_item',
                    ajax: {
                        url: "{{ route( $pageConfig->routes->verified ) }}",
                        type: "get",
                        cache: false
                    },
                    columns: [
                        {
                            title: '{{ __("S/N") }}', // Column title for Serial Number
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1; // Serial number
                            },
                            orderable: false // Typically you wouldn't sort by serial number
                        },
                        {
                            title: '{{ __("Agent") }}',
                            orderable: false,
                            data: "agent",
                            render: function (data) {
                                return data.username;
                            }
                        },
                        {
                            title: '{{ __("Shop") }}',
                            orderable: false,
                            data: "shop",
                            render: function (data, type, row) {
                                return "Shop: " + data.number + ", Block: " + data.block.name + ", " + data.block.floor.name + ", " + data.block.floor.property.name  || "N/A";
                            }
                        },
                        {
                            title: '{{ __("Status") }}',
                            orderable: false,
                            data: "status_name",
                            render: function (data) {
                                return data;
                            }
                        },
                        {
                            title: '{{ __("Added Since") }}',
                            data: "created_at",
                            orderable: false,
                            render: function (data) {
                                return moment(data).fromNow()
                            }
                        },
                        {
                            title: '{{ __("Action") }}',
                            data: "id",
                            orderable: false,
                            render: function (data, type, row) {
                                let installmentUrl = @json(route($pageConfig->routes->installment, ":id")).replace(':id', data);
                                if(row.installments !== null && row.installments.length > 0) {
                                    installmentUrl = @json(route($pageConfig->routes->installments, ":id")).replace(':id', data);
                                }

                                return `<div class="flex space-x-3 rtl:space-x-reverse">
                                            <a class="action-btn" href="${installmentUrl}" title="installment">
                                                <iconify-icon icon="ic:baseline-payment"></iconify-icon>
                                            </a>
                                        </div>`;
                            }
                        }
                    ],
                    columnDefs: [
                        { targets: 0, width: "5%" },  // First column takes 10% width
                        { targets: 1, width: "15%" },  // Second column takes 20% width
                        { targets: 2, width: "15%" },  // Third column takes 25% width
                        { targets: 3, width: "10%" },  // Fourth column takes 25% width
                        { targets: 4, width: "15%" },   // Fifth column takes 20% width
                        { targets: 5, width: "10%" },   // Fifth column takes 20% width
                    ],
                    createdRow: function(row, data, dataIndex) {
                        $(row).attr('data-id', data.id); // Set data-id using the row's unique ID from data
                    }
                },
                filter: {
                    buttonSelector: '#filter_btn',
                    fields: [
                        {name: 'agentUnitFilter', selector: '#agent_unit_fltr'},
                        {name: 'statusFilter', selector: '#status_fltr'},
                        {name: 'startDateFilter', selector: '#date_range_start_fltr'},
                        {name: 'endDateFilter', selector: '#date_range_end_fltr'},
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
