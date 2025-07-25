@push('scripts')
    <script type="module">
        document.addEventListener("DOMContentLoaded", function () {
            loadSelect2Dropdown("status", "status_fltr", {type: "general"}, "Filter by Status");
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
                            data: 'agent',
                            title: '{{ __("Agent") }}',
                            orderable: false, // Enable sorting for this column
                            render: function (data) {
                                return data.username || "N/A";
                            }
                        },
                        {
                            data: 'property',
                            title: '{{ __("Property") }}',
                            orderable: false, // Enable sorting for this column
                            render: function (data) {
                                return data.name || "N/A";
                            }
                        },
                        {
                            data: 'buyer_name',
                            title: '{{ __("Buyer") }}',
                            orderable: false, // Enable sorting for this column
                            render: function (data) {
                                return data || "N/A";
                            }
                        },
                        {
                            data: "address",
                            title: '{{ __("Address") }}',
                            orderable: false,
                            render: function (data) {
                                // Render URL as a clickable link
                                return data || "N/A";
                            }
                        },
                        {
                            title: '{{ __("Phone") }}',
                            orderable: false,
                            data: "mobile",
                            render: function (data) {
                                return data || "N/A";
                            }
                        },
                        {
                            title: '{{ __("NID") }}',
                            orderable: false,
                            data: "nid_number",
                            render: function (data) {
                                return data || "N/A";
                            }
                        },
                        {
                            title: '{{ __("Price") }}',
                            orderable: false,
                            data: "Proposed_price",
                            render: function (data) {
                                return data || "N/A";
                            }
                        },
                        {
                            title: '{{ __("Type") }}',
                            orderable: false,
                            data: "payment_type",
                            render: function (data) {
                                return data.name || "N/A";
                            }
                        },
                        {
                            title: '{{ __("Installment") }}',
                            orderable: false,
                            data: "number_of_installment",
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
                        }
                    ],
                    columnDefs: [
                        { targets: 0, width: "5%" },  // First column takes 10% width
                        { targets: 1, width: "8%" },  // Second column takes 20% width
                        { targets: 2, width: "8%" },  // Third column takes 25% width
                        { targets: 3, width: "7%" },  // Fourth column takes 25% width
                        { targets: 4, width: "9%" },   // Fifth column takes 20% width
                        { targets: 5, width: "10%" },   // Fifth column takes 20% width
                        { targets: 6, width: "9%" },   // Fifth column takes 20% width
                        { targets: 7, width: "9%" },   // Fifth column takes 20% width
                        { targets: 8, width: "5%" },   // Fifth column takes 20% width
                        { targets: 9, width: "5%" },   // Fifth column takes 20% width
                        { targets: 10, width: "8%" },   // Fifth column takes 20% width
                    ],
                    createdRow: function(row, data, dataIndex) {
                        $(row).attr('data-id', data.id); // Set data-id using the row's unique ID from data
                    }
                },
                filter: {
                    buttonSelector: '#filter_btn',
                    fields: [
                        {name: 'usernameFilter', selector: '#username_fltr'},
                        {name: 'emailFilter', selector: '#email_fltr'},
                        {name: 'phoneFilter', selector: '#phone_fltr'},
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
