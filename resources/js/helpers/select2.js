import $ from 'jquery';
import select2 from 'select2';
import 'select2/dist/css/select2.min.css';
import { loadDropdown } from '@/custom/dropdown.js';

select2($); // Initialize Select2

export function loadSelect2Dropdown(type, element, filters = {}, placeholder = '') {
    loadDropdown(type, element, filters);
    $(`#${element}`).select2({
        placeholder: placeholder || `Select ${type === 'status' ? filters.type : ''} Status`,
        allowClear: true,
        width: '100%'
    });
}

/**
 *
 * loadDependentDropdowns([
 *     { parent: 'floorDropdown', child: 'blockDropdown', type: 'block', filterKey: 'floor_id', placeholder: "Select block" },
 *     { parent: 'countryDropdown', child: 'stateDropdown', type: 'state', filterKey: 'country_id', placeholder: "Select state" },
 *     { parent: 'stateDropdown', child: 'cityDropdown', type: 'city', filterKey: 'state_id', placeholder: "Select city" }
 * ]);
 *
 * @param dependentMappings
 */
export function loadDependentDropdowns(dependentMappings) {
    dependentMappings.forEach(({ parent, child, type, filterKey, placeholder }) => {
        $(`#${parent}`).on('change', function() {
            const parentId = $(this).val();

            if (parentId) {
                loadDropdown(type, child, { [filterKey]: parentId });
            } else {
                $(`#${child}`).empty().append(`<option value="">${placeholder ?? 'Select an option'}</option>`).trigger('change');

            }
        });
    });
}
