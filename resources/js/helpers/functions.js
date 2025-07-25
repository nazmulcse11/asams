export function onElementsLoaded(elementSelector, callback) {
    const observer = new MutationObserver((mutationsList, observer) => {
        const units = document.querySelectorAll(elementSelector);
        if (units.length > 0) {
            observer.disconnect(); // stop watching after first load

            // Run your callback
            callback(units);
        }
    });

    observer.observe(document.body, { childList: true, subtree: true });
}

export function sweetAlertDelete(event, formId) {
    event.preventDefault();
    let form = document.getElementById(formId);
    Swal.fire({
        title: 'Are you sure ?',
        icon : 'question',
        showDenyButton: true,
        confirmButtonText: 'Delete ',
        denyButtonText: 'Cancel',
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    })
}
