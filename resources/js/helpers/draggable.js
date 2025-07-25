import interact from 'interactjs';

export function makeDraggable(el, scale = 10, isEditMode = false) {
    if (isEditMode) {
        interact(el).draggable({
            inertia: true,
            modifiers: [
                interact.modifiers.restrictRect({
                    restriction: 'parent',
                    endOnly: true
                })
            ],
            listeners: {
                start: dragStartListener,
                move: dragMoveListener,
                end: (event) => dragEndListener(event, scale) // Pass scale here
            }
        });
    } else {
        // Disable drag if view mode
        interact(el).draggable(false);
    }
}

function dragMoveListener(event) {
    const target = event.target;
    let x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx;
    let y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;
    target.style.transform = `translate(${x}px, ${y}px)`;
    target.setAttribute('data-x', x);
    target.setAttribute('data-y', y);
}

function dragStartListener(event) {

}

function dragEndListener(event, scale) {
    const el = event.target;
    const x = parseFloat(el.getAttribute('data-x'));
    const y = parseFloat(el.getAttribute('data-y'));

    // Convert back to feet before saving
    const x_feet = (x / scale).toFixed(2);
    const y_feet = (y / scale).toFixed(2);

    console.log(`Unit ${el.dataset.unitId} moved to: ${x_feet}ft, ${y_feet}ft`);

    // TODO: send to Laravel API with axios/fetch
    /*
        axios.post('/api/save-position', {
            unit_id: el.dataset.unitId,
            x_feet: x_feet,
            y_feet: y_feet
        });
    */
}
