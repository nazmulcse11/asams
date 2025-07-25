export class DataTableCrudLibrary {
    constructor(options) {
        this.dt = null;
        // Set default options and merge with user-defined options
        this.options = {
            table: {},
            filter: {},
            create: {},
            edit: {},
            delete: {},
            deleteBulk: {},
            permissions: {  // New permissions object
                canList: false,
                canCreate: false,
                canView: false,
                canEdit: false,
                canDelete: false,
                canDeleteBulk: false,
            },
            csrfToken: null,
            ...options
        };

        // Validate required options
        this.validateOptions();
        this.initDataTable();
    }

    validateOptions() {
        const { table } = this.options;
        if (!table.selector || !table.ajax.url) {
            console.error("Table selector and AJAX URL are required!");
            return;
        }
    }

    initDataTable() {
        const self = this;
        const { table, filter, csrfToken, permissions } = this.options;
        const ajax = table.ajax;

        // setting up permission
        if (!permissions.canList) {
            $(table.selector).remove(); // Hide datatable if no permission
            $(filter.buttonSelector).remove(); // Hide filter if no permission

            const { fields } = this.options.filter;
            fields.forEach(field => {
                // setting up permission
                if (!permissions.canList) {
                    $(field.selector.replace("date", "reportrange")).remove(); // Hide filter if no permission
                }
            });
        }

        // Enable filters when the button is clicked
        let filtersApplied = false;

        const dataTable = $(table.selector).DataTable({
            searching: true,
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: ajax.url,
                type: ajax.type || 'POST',
                cache: ajax.cache || false,
                data: function(data) {
                    if(filtersApplied) {
                        self.filterFields(data); // Handle filters
                    }
                    data._token = csrfToken; // Add CSRF token
                }
            },
            columns: table.columns || [],
            order: table.order || [],
            columnDefs: table.columnDefs || [],
            createdRow: table.createdRow || null,
        });

        // making datatable global
        this.dt = dataTable;

        // Bind filter button click
        $(filter.buttonSelector).on('click', function() {
            filtersApplied = true;
            dataTable.ajax.reload(); // Reload the table data with new filters
        });


        this.initializeEventListeners(dataTable);
    }

    getInstance() {
        return this.dt;
    }

    initializeEventListeners(dataTable) {
        // Create, edit, delete, delete multiple buttons
        if(this.options.create.buttonSelector) {
            this.initCreateButton();
        }
        if(this.options.create.buttonSelector) {
            this.initViewButton(dataTable);
        }
        if(this.options.edit.buttonSelector) {
            this.initEditButton(dataTable);
        }
        if(this.options.delete.buttonSelector) {
            this.initDeleteButton(dataTable);
        }
        if(this.options.deleteBulk.buttonSelector) {
            this.initDeleteBulkButton();
        }
    }

    filterFields(data) {
        const { fields } = this.options.filter;
        fields.forEach(field => {
            data[field.name] = $(field.selector).val(); // Get filter values
        });
    }

    // Create Button
    initCreateButton() {
        const self = this;
        const { create, permissions } = this.options;

        // setting up permission
        if (!permissions.canCreate) {
            $(create.buttonSelector).remove(); // Hide create button if no permission
            return;
        }

        $(create.buttonSelector).on('click', () => {
            this.clearForm(create.form.selector);
            self.clearErrors(create.form.selector);
            $(create.modalSelector).modal('show');
            self.formRequest(create.form, create.modalSelector, 'create', create.success);
        });
    }

    // View Button
    initViewButton(dataTable) {
        const self = this;
        const { view, permissions } = this.options;

        // setting up permission
        if (!permissions.canView) {
            dataTable.on('init', function() {
                $(view.buttonSelector).remove();  // Hide edit button if no permission
            });
            return;
        }

        $(document).on('click', view.buttonSelector, function() {
            const recordId = $(this).data('id');
            const url = view.ajax.url.replace(':id', recordId);
            const method = view.ajax.type || 'GET';

            self.request(
                url,
                method,
                null,
                (response) => {
                    const dataEvent = new CustomEvent(view.eventName, { detail: response });
                    document.dispatchEvent(dataEvent);  // Dispatching event globally
                    $(view.modalSelector).modal('show');  // Show modal as usual
                }
            );
        });
    }

    // Edit Button
    initEditButton(dataTable) {
        const self = this;
        const { edit, permissions } = this.options;


        // setting up permission
        if (!permissions.canEdit) {
            dataTable.on('init', function() {
                $(edit.buttonSelector).remove();  // Hide edit button if no permission
            });
            return;
        }

        $(document).on('click', edit.buttonSelector, function() {
            self.clearForm(edit.form.selector);
            self.clearErrors(edit.form.selector);
            const recordId = $(this).data('id');

            const url = edit.ajax.url.replace(':id', recordId);
            const method = edit.ajax.type || 'GET';

            self.request(
                url,
                method,
                null,
                (response) => {
                    if(edit.eventName) {
                        const dataEvent = new CustomEvent(edit.eventName, { detail: response });
                        document.dispatchEvent(dataEvent);
                    } else {
                        self.populateForm(response);
                    }
                    $(edit.modalSelector).modal('show');
                    self.formRequest(edit.form, edit.modalSelector, 'edit', edit.success, recordId);
                }
            );
        });
    }

    // Delete Button
    initDeleteButton(dataTable) {
        const self = this;
        const { delete: destroy, permissions } = this.options;

        // setting up permission
        if (!permissions.canDelete) {
            dataTable.on('init', function() {
                $(destroy.buttonSelector).remove();  // Hide edit button if no permission
            });
            return;
        }

        $(document).on('click', destroy.buttonSelector, function() {
            const recordId = $(this).data('id');
            const url = destroy.ajax.url.replace(':id', recordId);
            const method = destroy.ajax.type || 'DELETE';

            self.showConfirmation(destroy.message, () => {
                self.request(
                    url,
                    method,
                    { _token: self.options.csrfToken },
                    (response) => {
                        const row = $(self).closest('tr');
                        const table = $(self.options.table.selector).DataTable();
                        table.row(row[0]).remove().draw(false); // Remove the row and redraw without resetting pagination
                        self.showSuccessMessage(destroy.success);
                    },
                    (xhr) => {
                        self.handleError(xhr)
                    }
                );
            });
        });
    }

    // Delete Multiple Button
    initDeleteBulkButton() {
        const self = this;
        const { deleteBulk, permissions } = this.options;

        // setting up permission
        if (!permissions.canDeleteBulk) {
            $(deleteBulk.buttonSelector).remove(); // Hide bulk delete button if no permission
            return;
        }

        // Select/Deselect all checkboxes
        $(document).on('change', deleteBulk.checkboxSelector, function() {
            const isChecked = $(this).is(':checked');
            $(deleteBulk.rowSelector).prop('checked', isChecked);
        });

        // Collect selected records for deletion
        $(deleteBulk.buttonSelector).on('click', function() {
            self.processMultipleDelete(deleteBulk);
        });
    }

    processMultipleDelete(deleteBulk) {
        const self = this;
        const selectedIds = [];
        $(deleteBulk.rowSelector + ':checked').each(function() {
            selectedIds.push($(this).data('id'));
        });

        // checking id length
        if (selectedIds.length < 1) {
            return;
        }

        const url = deleteBulk.ajax.url;
        const method = deleteBulk.ajax.type || 'DELETE';

        self.showConfirmation(deleteBulk.message, () => {
            self.request(
                url,
                method,
                { _token: self.options.csrfToken, ids: selectedIds },
                (response) => {
                    $(self.options.table.selector).DataTable().ajax.reload();
                    self.showSuccessMessage(deleteBulk.success);
                    $(deleteBulk.checkboxSelector).prop('checked', false); // Unchecks it
                },
                (xhr) => {
                    self.handleError(xhr)
                }
            );
        });
    }

    formRequest(form, modalSelector, mode, successMessage = null, identifier = null) {
        const self = this;
        $(form.selector).off('submit').on('submit', (e) => {
            e.preventDefault();
            self.clearErrors(form.selector);
            const url = mode === 'edit' && identifier ? form.action.replace(':id', identifier) : form.action;
            let  method = form.method;

            const formData = new FormData($(form.selector)[0]);

            // Add `_method` for Laravel method spoofing if the method is PUT, PATCH, or DELETE
            if (form.method === 'PUT' || form.method === 'PATCH' || form.method === 'DELETE') {
                formData.append('_method', form.method);
                method = 'POST'; // Laravel requires the request to be POST with _method for PUT/PATCH/DELETE
            }

            self.request(
                url,
                method,
                formData,
                (response) => {
                    $(modalSelector).modal('hide');

                    if (mode === 'create') {
                        $(self.options.table.selector).DataTable().ajax.reload();
                    } else if (mode === 'edit') {
                        const table = $(self.options.table.selector).DataTable();
                        const rowSelector = table.row(`[data-id="${identifier}"]`);
                        if (rowSelector.length) {
                            rowSelector.data(response).draw(false);
                        } else {
                            table.ajax.reload();
                        }
                    }
                    if((response.success) && (successMessage != null)){
                        self.showSuccessMessage(successMessage);
                    } else if((response.success) && (successMessage == null)){
                        self.showSuccessMessage(response.message);
                    } else if (!response.success) {
                        self.showErrorMessage(response.message);
                    }
                }, (xhr, status, error) => {
                    self.handleError(xhr, status, error);  // Handle error if needed
                },
                {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            );
        });
    }

    request(
        url,
        method = 'GET',
        data = null,
        successCallback = null,
        errorCallback = null,
        headers = {}
    ) {

        // Check if data is FormData and set processData/contentType accordingly
        let isFormData = data instanceof FormData;

        $.ajax({
            url: url,
            headers: headers,
            type: method,
            data: data,
            processData: !isFormData,  // Prevent jQuery from processing FormData
            contentType: isFormData ? false : 'application/x-www-form-urlencoded',  // Set content type based on FormData
            success: successCallback,
            error: errorCallback,
        });
    }

    populateForm(data) {
        $.each(data, (key, value) => {
            const field = $('#' + key);
            if (field.length && field.attr('type') !== 'file') { // Skip file inputs
                field.val(value);
            }
        });
    }

    showConfirmation(message, onConfirm) {
        Swal.fire({
            title: 'Are you sure?',
            text: message,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, proceed!'
        }).then((result) => {
            if (result.isConfirmed) {
                onConfirm();
            }
        });
    }

    showSuccessMessage(message) {
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: message,
            showConfirmButton: false,
            timer: 1500
        });
    }

    showErrorMessage(message) {
        Swal.fire({
            position: "top-end",
            icon: "error",
            title: message,
            showConfirmButton: false,
            timer: 1500
        });
    }

    handleError(xhr, status, error) {
        const errors = xhr.responseJSON.errors;
        for (let field in errors) {
            $(`#${field}Error`).text(errors[field]).show();
            $(`#${field}`).addClass('is-invalid');
        }
    }

    clearErrors(formSelector) {
        $(formSelector).find('.is-invalid').removeClass('is-invalid');
        $(formSelector).find('[id$="Error"]').text('').hide();
    }

    clearForm(formSelector) {
        const formElement = $(formSelector).closest('form').get(0);
        if (formElement) {
            formElement.reset(); // Reset text, select, and other inputs

            // Clear file inputs
            $(formSelector).find('input[type="file"]').each(function() {
                $(this).val(''); // Clear file input value
            });

            // Clear image preview
            $(formSelector).find('.image_wrap').empty(); // Remove the preview image
            $(formSelector).find('.preview_box').removeClass('image_placed'); // Reset the styling class
        }
    }
}


/**
 * $(document).ready(function() {
 *
 *         // Pass PHP data to JavaScript for permission check
 *         const userPermissions = @json($userPermissions);
 *
 *         $('#add_company_btn').on('click', function () {
 *             $('#save_company_btn').text("{{ $info->create->button }}");      // set submit button text
 *             $('#modal_header_lbl').text('{{ $info->create->title }}');    // set modal title
 *         });
 *
 *         $(document).on('click', '.edit_company_btn', function() {
 *             // change label names
 *             $('#save_company_btn').text("{{ $info->edit->button }}");
 *             $('#modal_header_lbl').text('{{ $info->edit->title }}');
 *         });
 *
 *         $(document).on('click', '.show_company_btn', function() {
 *             // change label names
 *             $('#show_modal_header_lbl').text('{{ $info->show->title }}');
 *         });
 *
 *         $(document).on("companyViewEvent", function (event) {
 *             const data = event.detail;
 *
 *             $('#company_name').text(data.name || '');
 *             $('#company_url').text(data.url || '');
 *             $('#company_desc').text(data.description || '');
 *             $('#company_status').text(data.is_active == 1 ? 'Active' : 'Inactive' || '');
 *             $('#company_logo').attr('src', data.logo || '').attr('alt', data.name || '');
 *         });
 *
 *         // Company table
 *         new DataTableCrudLibrary({
 *             table: {
 *                 selector: '#company_tbl',
 *                 ajax: {
 *                     url: "{{ route($info->routes->index) }}",
 *                     type: "get",
 *                     cache: false
 *                 },
 *                 columns: [
 *                     {
 *                         title: '<input type="checkbox" id="selectAll">', // Header checkbox for selecting all
 *                         orderable: false, // Prevent sorting on this column
 *                         render: function(data, type, row) {
 *                             return `<input type="checkbox" class="row-select" data-id="${row.id}">`; // Checkbox for each row
 *                         },
 *                     },
 *                     {
 *                         title: 'S/N', // Column title for Serial Number
 *                         render: function(data, type, row, meta) {
 *                             return meta.row + meta.settings._iDisplayStart + 1; // Serial number
 *                         },
 *                         orderable: false // Typically you wouldn't sort by serial number
 *                     },
 *                     {
 *                         data: 'name',
 *                         title: 'Company Name',
 *                         orderable: false, // Enable sorting for this column
 *                         render: function (data) {
 *                             return data || "N/A";
 *                         }
 *                     },
 *                     {
 *                         data: "url",
 *                         title: 'Website URL',
 *                         orderable: false,
 *                         render: function (data) {
 *                             // Render URL as a clickable link
 *                             return `<a href="https://${data}" target="_blank">${data}</a>` || "N/A";
 *                         }
 *                     },
 *                     {
 *                         title: 'Description',
 *                         orderable: false,
 *                         data: "description",
 *                         render: function (data) {
 *                             return data || "N/A";
 *                         }
 *                     },
 *                     {
 *                         title: 'Status',
 *                         orderable: false,
 *                         data: "is_active",
 *                         render: function (data) {
 *                             return data === 1 ? "Active" : "Inactive";
 *                         }
 *                     },
 *                     {
 *                         title: 'Created At',
 *                         data: "created_at",
 *                         orderable: false,
 *                         render: function (data) {
 *                             return moment(data).format("MMMM Do YYYY, h:mm:ss a");
 *                         }
 *                     },
 *                     {
 *                         title: 'Action',
 *                         data: "id",
 *                         orderable: false,
 *                         render: function (data, type, row) {
 *                             return `
 *                                     <div data-label="Action" class="dropdown">
 *                                         <button data-bs-toggle="dropdown" class="dropdown-toggle">
 *                                             <i class="far fa-ellipsis-h"></i>
 *                                         </button>
 *                                         <ul class="dropdown-menu dropdown-menu-end">
 *                                             <li>
 *                                                 <button type="button" class="show_company_btn" data-id="${data}">
 *                                                     <i class="fal fa-eye"></i> View
 *                                                 </button>
 *                                             </li>
 *                                             <li>
 *                                                 <button type="button" class="edit_company_btn" data-id="${data}">
 *                                                     <i class="fal fa-edit"></i> Edit
 *                                                 </button>
 *                                             </li>
 *                                             <li>
 *                                                 <button type="button" class="delete_company_btn"  data-id="${data}">
 *                                                     <i class="fal fa-trash-alt"></i> Delete
 *                                                 </button>
 *                                             </li>
 *                                         </ul>
 *                                     </div>
 *                                 `;
 *                         }
 *                     }
 *                 ],
 *                 createdRow: function(row, data, dataIndex) {
 *                     $(row).attr('data-id', data.id); // Set data-id using the row's unique ID from data
 *                 }
 *             },
 *             filter: {
 *                 buttonSelector: '#filter_btn',
 *                 fields: [
 *                     {name: 'nameFilter', selector: '#name_fltr'},
 *                     {name: 'urlFilter', selector: '#url_fltr'},
 *                     {name: 'descriptionFilter', selector: '#description_fltr'},
 *                     {name: 'statusFilter', selector: '#status_fltr'},
 *                     {name: 'dateRange', selector: '#date'},
 *                 ]
 *             },
 *             create: {
 *                 buttonSelector: '#add_company_btn',
 *                 modalSelector: '#company_mdl',
 *                 form: {
 *                     selector: '#company_frm',
 *                     action: "{{ route($info->routes->store) }}",
 *                     method: "POST",
 *                 },
 *                 success: "Company created successfully"
 *             },
 *             view: {
 *                 buttonSelector: '.show_company_btn',
 *                 modalSelector: '#view_company_mdl',
 *                 ajax: {
 *                     url: "{{ route($info->routes->show, ":id") }}",
 *                     type: "get",
 *                 },
 *                 eventName: "companyViewEvent",
 *             },
 *             edit: {
 *                 buttonSelector: '.edit_company_btn',
 *                 modalSelector: '#company_mdl',
 *                 ajax: {
 *                     url: "{{ route($info->routes->edit, ":id") }}",
 *                     type: "get",
 *                 },
 *                 form: {
 *                     selector: '#company_frm',
 *                     action: "{{ route($info->routes->update, ':id') }}",
 *                     method: "PUT"
 *                 },
 *                 success: "Company updated successfully"
 *             },
 *             delete: {
 *                 buttonSelector: '.delete_company_btn',
 *                 ajax: {
 *                     url: "{{ route($info->routes->destroy, ":id") }}",
 *                     type: "DELETE",
 *                 },
 *                 success: "Company deleted successfully",
 *                 message: "Are you sure you want to delete this company?"
 *             },
 *             deleteBulk: {
 *                 buttonSelector: '#delete_multi_btn',
 *                 checkboxSelector: '#selectAll',
 *                 rowSelector: '.row-select',
 *                 ajax: {
 *                     url: "{{ route($info->routes->destroyMultiple) }}",
 *                     type: "post",
 *                 },
 *                 success: "Companies deleted successfully",
 *                 message: "Are you sure you want to delete these companies?"
 *             },
 *             permissions: {
 *                 canList: userPermissions.canListCompany,
 *                 canCreate: userPermissions.canCreateCompany,
 *                 canView: userPermissions.canListCompany,
 *                 canEdit: userPermissions.canEditCompany,
 *                 canDelete: userPermissions.canDeleteCompany,
 *                 canDeleteBulk: userPermissions.canDeleteCompany
 *             },
 *             csrfToken: "{{ csrf_token() }}"
 *         });
 */
