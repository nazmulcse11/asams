export function loadDropdown(type, elementId, filters = {}) {
    const params = new URLSearchParams(filters).toString();

    const appUrl = document.querySelector('meta[name="app-url"]').getAttribute('content');
    const url = `${appUrl}/dropdowns/${type}` + (params ? `?${params}` : '');

    axios.get(url).then(function(response) {
        if (response.data.success) {
            populateSelect2(elementId, response.data.data);
        } else {
            console.error(`Failed to load ${type}:`, response.data.message);
        }
    }).catch(function(error) {
        console.error(`Error fetching ${type}:`, error);
    });
}

export function populateSelect2(elementId, options) {
    const dropdown = document.getElementById(elementId);
    if (!dropdown) {
        console.error(`Missing dropdown in HTML: #${elementId}`);
        return;
    }

    const oldValue = dropdown.getAttribute('data-old');

    dropdown.innerHTML = '<option value="">Select an option</option>';

    options.forEach(function(option) {
        const opt = document.createElement('option');
        opt.value = option.id;
        opt.textContent = option.name;
        if (oldValue && oldValue == option.id) {
            opt.selected = true;  // Pre-select old value if exists
        }
        dropdown.appendChild(opt);
    });

    $(`#${elementId}`).trigger('change'); // Reinitialize select2 if needed
}



