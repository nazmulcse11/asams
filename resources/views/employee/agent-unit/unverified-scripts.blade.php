@push('scripts')
    <script type="module">
        document.addEventListener("DOMContentLoaded", function () {

            // Use event delegation for dynamically added elements
            document.body.addEventListener('click', function (event) {
                if (event.target.closest('.verify-btn')) {
                    let button = event.target.closest('.verify-btn');
                    let agentUnitId = button.getAttribute('data-id'); // Get agent ID
                    let modal = document.getElementById('verify_modal'); // Modal reference
                    let table = document.getElementById('modal-tbl');

                    // Make an Axios GET request to fetch agent data
                    axios.get(`{{ route($pageConfig->routes->show, ":id") }}`.replace(':id', agentUnitId))
                        .then(response => {
                            let data = response.data;
                            if (response.data.success) {
                                data = data.data;
                                let agentData = data.agent;
                                let propertyData = data.property;

                                // showing commission
                                modal.querySelector('#commission').value = data.commission;

                                // Populate modal fields
                                let TableData = {
                                    "Agent:": agentData.username,
                                    "Property:": propertyData.name,
                                    "Sell Price:": data.sale_price,
                                    "Status:": data.status.name
                                };

                                // Loop through rows and update matching labels
                                Array.from(table.rows).forEach((row, index) => {
                                    row.cells[0].textContent = Object.keys(TableData)[index];
                                    row.cells[1].textContent = Object.values(TableData)[index];
                                });

                                // Set the form action dynamically
                                modal.querySelector('#verify_form').setAttribute('action', `{{ route($pageConfig->routes->verify, ":id") }}`.replace(':id', agentUnitId));
                            } else {
                                Swal.fire("Error 1", response.data.message, "error");
                            }
                        })
                        .catch(error => {

                            Swal.fire("Error 2", "Failed to fetch agent data", "error");
                        });
                }
            });

            // Handle form submission using Axios
            document.getElementById('verify_form').addEventListener('submit', function (e) {
                e.preventDefault(); // Prevent default form submission

                let form = this;
                let formData = new FormData(form);
                let actionUrl = form.getAttribute('action');

                axios.post(actionUrl, formData)
                    .then(response => {

                        if (response.data.success) {

                            unverifiedTable.dt.ajax.reload(); // Reload the table data with new filters

                            // Show success message
                            Swal.fire("Success", response.data.message, "success");

                            // Reload DataTable (ensure your DataTable instance ID is correct)
                            document.dispatchEvent(new Event('reload'));
                        } else {
                            Swal.fire("Error", response.data.message, "error");
                        }
                    })
                    .catch(error => {
                        let errorMsg = "Something went wrong!";
                        if (error.response && error.response.data.errors) {
                            errorMsg = Object.values(error.response.data.errors).map(err => err[0]).join("<br>");
                        }
                        console.error(error);
                        Swal.fire("Validation Error", errorMsg, "error");
                    });
            });

            loadSelect2Dropdown("status", "status_fltr", {type: "general"}, "Filter by Status");
            loadSelect2Dropdown("agent-unit", "agent_unit_fltr", {}, "Filter by Agent Unit");
            const unverifiedTable = new DataTableCrudLibrary({
                table: {
                    selector: '#tbl_item',
                    ajax: {
                        url: "{{ route( $pageConfig->routes->unverified ) }}",
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
                            title: 'Agent',
                            orderable: false,
                            data: "agent",
                            render: function (data) {
                                return data.username;
                            }
                        },
                        {
                            title: 'Property',
                            orderable: false,
                            data: "property",
                            render: function (data) {
                                return data.name;
                            }
                        },
                        {
                            title: 'Status',
                            orderable: false,
                            data: "status_name",
                            render: function (data) {
                                return data;
                            }
                        },
                        {
                            title: 'Added Since',
                            data: "created_at",
                            orderable: false,
                            render: function (data) {
                                return moment(data).fromNow()
                            }
                        },
                        {
                            title: 'Action',
                            data: "id",
                            orderable: false,
                            render: function (data, type, row) {
                                return `<div class="flex space-x-3 rtl:space-x-reverse">
                                            <button type="button" class="action-btn verify-btn" title="Verify" data-bs-target="#verify_modal" data-bs-toggle="modal" data-id="${data}">
                                                <iconify-icon icon="tdesign:verify"></iconify-icon>
                                            </button>
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
