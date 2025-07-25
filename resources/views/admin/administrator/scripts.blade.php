@push('scripts')
    <script type="module">
        document.addEventListener("DOMContentLoaded", function () {
            loadSelect2Dropdown("status", "status_fltr", {type: "general"}, "Filter by Status");
            new DataTableCrudLibrary({
                table: {
                    selector: '#tbl_item',
                    ajax: {
                        url: "{{ route($pageConfig->routes->index) }}",
                        type: "get",
                        cache: false
                    },
                    columns: [
                        {
                            title: '<input type="checkbox" id="selectAll">', // Header checkbox for selecting all
                            orderable: false, // Prevent sorting on this column
                            render: function(data, type, row) {
                                return `<input type="checkbox" class="row-select" data-id="${row.id}">`; // Checkbox for each row
                            },
                        },
                        {
                            title: '{{ __("S/N") }}', // Column title for Serial Number
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1; // Serial number
                            },
                            orderable: false // Typically you wouldn't sort by serial number
                        },
                        {
                            data: 'username',
                            title: '{{ __("Name") }}',
                            orderable: false, // Enable sorting for this column
                            render: function (data) {
                                return data || "N/A";
                            }
                        },
                        {
                            data: "email",
                            title: '{{ __("Email") }}',
                            orderable: false,
                            render: function (data) {
                                // Render URL as a clickable link
                                return data || "N/A";
                            }
                        },
                        {
                            title: '{{ __("Phone") }}',
                            orderable: false,
                            data: "phone",
                            render: function (data) {
                                return data || "N/A";
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
                            title: '{{ __("Member Since") }}',
                            data: "created_at",
                            orderable: false,
                            render: function (data) {
                                return moment(data).fromNow()
                            }
                        },
                        {
                            title: '{{ __("Actions") }}',
                            data: "id",
                            orderable: false,
                            render: function (data, type, row) {
                                const showUrl = @json(route($pageConfig->routes->show, ":id")).replace(':id', data); // Replace '1' with the actual ID
                                const editUrl = @json(route($pageConfig->routes->edit, ":id")).replace(':id', data); // Replace '1' with the actual ID
                                return `<div class="flex space-x-3 rtl:space-x-reverse">
                                                <a class="action-btn" href="${showUrl}">
                                                    <iconify-icon icon="heroicons:eye"></iconify-icon>
                                                </a>
                                                <a class="action-btn" href="${editUrl}">
                                                    <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                </a>
                                                <button type="button" class="action-btn delete_item_btn"  data-id="${data}">
                                                    <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                </button>
                                             </div>`;
                            }
                        }
                    ],
                    columnDefs: [
                        { targets: 0, width: "2%" },  // First column takes 10% width
                        { targets: 1, width: "3%" },  // Second column takes 20% width
                        { targets: 2, width: "20%" },  // Third column takes 25% width
                        { targets: 3, width: "20%" },  // Fourth column takes 25% width
                        { targets: 4, width: "25%" },   // Fifth column takes 20% width
                        { targets: 5, width: "10%" },   // Fifth column takes 20% width
                        { targets: 6, width: "15%" },   // Fifth column takes 20% width
                        { targets: 7, width: "10%" },   // Fifth column takes 20% width
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
                delete: {
                    buttonSelector: '.delete_item_btn',
                    ajax: {
                        url: "{{ route($pageConfig->routes->destroy, ":id") }}",
                        type: "DELETE",
                    },
                    success: "{{ __($pageConfig->delete->message->success) }}",
                    message: "{{ __($pageConfig->delete->message->message) }}"
                },
                deleteBulk: {
                    buttonSelector: '#delete_multi_item_btn',
                    checkboxSelector: '#selectAll',
                    rowSelector: '.row-select',
                    ajax: {
                        url: "{{ route($pageConfig->routes->destroyBulk) }}",
                        type: "post",
                    },
                    success: "{{ __($pageConfig->deleteBulk->message->success) }}",
                    message: "{{ __($pageConfig->deleteBulk->message->message) }}"
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
