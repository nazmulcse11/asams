@push('scripts')
    <script type="module">
        document.addEventListener("DOMContentLoaded", function () {

            loadSelect2Dropdown("buyer", "buyer", {}, "Filter by buyer");
            loadSelect2Dropdown("agent", "agent", {}, "Filter by agent");
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
                            data: 'uuid',
                            title: '{{ __("Id") }}',
                            orderable: false, // Enable sorting for this column
                            render: function (data) {
                                return data || "N/A";
                            }
                        },
                        {
                            data: 'buyer',
                            title: '{{ __("Buyer") }}',
                            orderable: false, // Enable sorting for this column
                            render: function (data) {
                                return data || "N/A";
                            }
                        },
                        {
                            data: 'agent',
                            title: '{{ __("Agent") }}',
                            orderable: false, // Enable sorting for this column
                            render: function (data) {
                                return data || "N/A";
                            }
                        },
                        {
                            data: 'number',
                            title: '{{ __("Shop") }}',
                            orderable: false, // Enable sorting for this column
                            render: function (data) {
                                return data || "N/A";
                            }
                        },
                        {
                            data: 'sell_amount',
                            title: '{{ __("Sell Amount") }}',
                            orderable: false, // Enable sorting for this column
                            render: function (data) {
                                return data || "N/A";
                            }
                        },
                        {
                            data: 'commission',
                            title: '{{ __("Commission(%)") }}',
                            orderable: false, // Enable sorting for this column
                            render: function (data) {
                                return data || "N/A";
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
                                const editUrl = @json(route($pageConfig->routes->edit, ":id")).replace(':id', data); // Replace '1' with the actual ID
                                return `<div class="flex space-x-3 rtl:space-x-reverse">
                                                <a class="action-btn" href="${showUrl}">
                                                    <iconify-icon icon="heroicons:eye"></iconify-icon>
                                                </a>
                                             </div>`;
                            }
                        }
                    ],
                    createdRow: function(row, data, dataIndex) {
                        $(row).attr('data-id', data.id); // Set data-id using the row's unique ID from data
                    }
                },
                filter: {
                    buttonSelector: '#filter_btn',
                    fields: [
                        {name: 'buyerFilter', selector: '#buyer'},
                        {name: 'agentFilter', selector: '#agent'},
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
