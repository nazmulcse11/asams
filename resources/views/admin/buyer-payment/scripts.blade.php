@push('scripts')
    <script type="module">
        document.addEventListener("DOMContentLoaded", function () {
            loadSelect2Dropdown("buyer", "buyer_fltr", {}, "Filter by buyer");
            loadSelect2Dropdown("agent-unit", "agent_unit_fltr", {}, "Filter by Agent Unit");
            new DataTableCrudLibrary({
                table: {
                    selector: '#tbl_item',
                    ajax: {
                        url: "{{ route( $pageConfig->routes->index ) }}",
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
                            data: 'buyer',
                            title: '{{ __("Buyer") }}',
                            orderable: false, // Enable sorting for this column
                            render: function (data) {
                                return data.username || "N/A";
                            }
                        },
                        {
                            data: "payment_amount",
                            title: '{{ __("Amount") }}',
                            orderable: false,
                            render: function (data) {
                                // Render URL as a clickable link
                                return data || "N/A";
                            }
                        },
                        {
                            title: '{{ __("Mode") }}',
                            orderable: false,
                            data: "payment_mode",
                            render: function (data) {
                                return data.name || "N/A";
                            }
                        },
                        {
                            title: '{{ __("Date") }}',
                            orderable: false,
                            data: "payment_date",
                            render: function (data) {
                                return moment(data).fromNow()
                            }
                        },
                        {
                            title: '{{ __("Added By") }}',
                            orderable: false,
                            data: "added_by",
                            render: function (data) {
                                return data.username
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
                                const showUrl = @json(route($pageConfig->routes->show, ":id")).replace(':id', data); // Replace '1' with the actual ID
                                return `<div class="flex space-x-3 rtl:space-x-reverse">
                                                <a class="action-btn" href="${showUrl}">
                                                    <iconify-icon icon="heroicons:eye"></iconify-icon>
                                                </a>
                                             </div>`;
                            }
                        }
                    ],
                    columnDefs: [
                        { targets: 0, width: "5%" },  // First column takes 10% width
                        { targets: 1, width: "10%" },  // Second column takes 20% width
                        { targets: 2, width: "10%" },  // Third column takes 25% width
                        { targets: 3, width: "10%" },  // Fourth column takes 25% width
                        { targets: 4, width: "10%" },   // Fifth column takes 20% width
                    ],
                    createdRow: function(row, data, dataIndex) {
                        $(row).attr('data-id', data.id); // Set data-id using the row's unique ID from data
                    }
                },
                filter: {
                    buttonSelector: '#filter_btn',
                    fields: [
                        {name: 'buyerFilter', selector: '#buyer_fltr'},
                        {name: 'agentUnitFilter', selector: '#agent_unit_fltr'},
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
