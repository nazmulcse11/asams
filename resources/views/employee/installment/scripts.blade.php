@push('scripts')
    <script type="module">
        document.addEventListener("DOMContentLoaded", function () {
            new DataTableCrudLibrary({
                table: {
                    selector: '#tbl_item',
                    ajax: {
                        url: "{{ route( $pageConfig->routes->index, $agentUnit) }}",
                        type: "get",
                        cache: false
                    },
                    columns: [
                        {
                            data: 'installment_no',
                            title: 'No',
                            orderable: false, // Enable sorting for this column
                            render: function (data) {
                                return data;
                            }
                        },
                        {
                            data: 'installment_amount',
                            title: 'Amount',
                            orderable: false, // Enable sorting for this column
                            render: function (data) {
                                return data;
                            }
                        },
                        {
                            data: 'buyer',
                            title: 'Buyer',
                            orderable: false, // Enable sorting for this column
                            render: function (data) {
                                return data.username || "N/A";
                            }
                        },
                        {
                            data: "property",
                            title: 'Property',
                            orderable: false,
                            render: function (data) {
                                // Render URL as a clickable link
                                return data.name || "N/A";
                            }
                        },
                        {
                            title: 'Added at',
                            data: "created_at",
                            orderable: false,
                            render: function (data) {
                                return moment(data).fromNow()
                            }
                        }
                    ],
                    columnDefs: [
                        { targets: 0, width: "10%" },  // First column takes 10% width
                        { targets: 1, width: "10%" },  // Second column takes 20% width
                        { targets: 2, width: "20%" },  // Third column takes 25% width
                    ],
                    createdRow: function(row, data, dataIndex) {
                        $(row).attr('data-id', data.id); // Set data-id using the row's unique ID from data
                    }
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
