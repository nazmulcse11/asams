import interact from 'interactjs';

export class FloorPlan {
    constructor(options) {
        this.floorEl = options.floorElement;
        this.scale = options.scale || 10;
        this.api = options.api || {};
        this.isEditMode = false;
        this.onResizeEnd = null;

        this.initFloorSize(options.floorSizeFeet);
        this.setEditMode(this.isEditMode);
    }

    initFloorSize({ length, width }) {
        this.floorEl.style.width = `${length * this.scale}px`;
        this.floorEl.style.height = `${width * this.scale}px`;
    }

    setEditMode(enabled) {
        this.isEditMode = enabled;
        const units = this.floorEl.querySelectorAll('.unit');
        const components = this.floorEl.querySelectorAll('.component');

        units.forEach(unit => {
            this.makeDraggable(unit);
            unit.querySelector('.close-btn').style.display =  enabled ? 'block' : 'none';
        });

        components.forEach(component => {
            this.makeDraggable(component);
            component.querySelector('.close-btn').style.display =  enabled ? 'block' : 'none';
        });
    }

    renderComponents(components = []) {
        components = Object.values(components);
        components.forEach(component => this.addComponentToDOM(component));
    }

    addComponent(component) {
        this.addComponentToDOM(component);
    }

    addComponentToDOM(component) {
        const x = component.x_position * this.scale;
        const y = component.y_position * this.scale;
        const width = component.width * this.scale;
        const height = component.height * this.scale;

        const el = document.createElement('div');
        el.classList.add('component');

        el.setAttribute('data-component-id', component.id);
        el.setAttribute('data-x', x);
        el.setAttribute('data-y', y);
        el.style.transform = `translate(${x}px, ${y}px)`;
        el.style.width = `${width}px`;
        el.style.height = `${height}px`;

        // component icon
        switch (component.type) {
            case 'Lift':
                component.icon = 'material-symbols:elevator';
                break;
            case 'Stair':
                component.icon = 'material-symbols:stairs';
                break;
            case 'Corridor':
                component.icon = 'material-symbols:hallway-outline';
                break;
            case 'Washroom':
                component.icon = 'lucide:toilet';
                break;
            default:
                component.icon = 'iconamoon:component';
                break;
        }

        let closeButtonDisplay = 'none';
        if(this.isEditMode) {
            closeButtonDisplay = 'block';
        }

        el.innerHTML = `
            <span class="close-btn" title="Remove" style="display: ${closeButtonDisplay}" >×</span>
            <div class="unit-text text-center">
                <iconify-icon class=" nav-icon" icon="${component.icon}" width="30" height="30"></iconify-icon>
                <p class="font-semibold">${component.type}</p>
            </div>`;


        this.floorEl.appendChild(el);
        this.makeDraggable(el);
        this.attachRemoveListener(el);
    }

    renderUnits(units = []) {
        units = Object.values(units);
        units.forEach(unit => this.addUnitToDOM(unit));
    }

    addUnit(unitData) {
        this.addUnitToDOM(unitData);
    }

    addUnitToDOM(unit) {
        const el = document.createElement('div');
        el.classList.add('unit');
        el.setAttribute('data-unit-id', unit.id);
        el.setAttribute('data-unit-number', unit.number);
        el.setAttribute('data-unit-min_sale_price', unit.min_sale_price);
        el.setAttribute('data-unit-booking_percent', unit.booking_percent);
        el.setAttribute('data-unit-area', unit.area);
        el.setAttribute('data-unit-length', unit.length);
        el.setAttribute('data-unit-width', unit.width);
        el.setAttribute('data-unit-length_half_corridor', unit.length_half_corridor);
        el.setAttribute('data-unit-width_full_shop', unit.width_full_shop);
        el.setAttribute('data-unit-total_area', unit.total_area);
        el.setAttribute('data-unit-x_feet', unit.x_feet);
        el.setAttribute('data-unit-y_feet', unit.y_feet);
        el.setAttribute('data-unit-unit_width', unit.unit_width);
        el.setAttribute('data-unit-unit_height', unit.unit_height);
        el.setAttribute('data-unit-block', unit.block);
        el.setAttribute('data-unit-created_at', unit.created_at);

        const x = unit.x_feet * this.scale;
        const y = unit.y_feet * this.scale;
        const width = unit.unit_width * this.scale;
        const height = unit.unit_height * this.scale;

        el.setAttribute('data-x', x);
        el.setAttribute('data-y', y);
        el.style.transform = `translate(${x}px, ${y}px)`;
        el.style.width = `${width}px`;
        el.style.height = `${height}px`;

        let closeButtonDisplay = 'none';
        if(this.isEditMode) {
            closeButtonDisplay = 'block';
        }

        el.innerHTML = `
            <span class="close-btn" title="Remove" style="display: ${closeButtonDisplay}" >×</span>
            <div class="unit-text text-center">
                <p class="font-semibold">${unit.number}</p>
                <div class="unit-dimensions">
                    <p class="font-light">W: ${unit.width} ft</p><p>L: ${unit.length} ft</p>
                </div>
                <p class="font-light">Block: ${unit.block}</p>
            </div>`;

        this.floorEl.appendChild(el);
        this.makeDraggable(el);
        this.attachRemoveListener(el);
    }

    makeDraggable(el) {
        if (this.isEditMode) {
            interact(el).draggable({
                inertia: true,
                modifiers: [
                    interact.modifiers.restrictRect({ restriction: 'parent', endOnly: true })
                ],
                listeners: {
                    move: this.dragMoveListener,
                    end: (event) => this.dragEndListener(event)
                }
            })
            .resizable({
                edges: { left: true, right: true, bottom: true, top: true },
                listeners: {
                    move(event) {
                        const target = event.target;

                        let x = parseFloat(target.getAttribute('data-x')) || 0;
                        let y = parseFloat(target.getAttribute('data-y')) || 0;

                        // Update size
                        target.style.width = event.rect.width + 'px';
                        target.style.height = event.rect.height + 'px';

                        // Move element to match resizing from top/left
                        x += event.deltaRect.left;
                        y += event.deltaRect.top;

                        target.style.transform = `translate(${x}px, ${y}px)`;
                        target.setAttribute('data-x', x);
                        target.setAttribute('data-y', y);
                    },
                    end: (event) => {
                        if (this.onResizeEnd) {
                            this.onResizeEnd(event, this.scale);
                        } else {
                            this.resizeEndListener(event, this.scale);
                        }
                    }
                },
                modifiers: [
                    interact.modifiers.restrictEdges({
                        outer: 'parent'
                    }),
                    interact.modifiers.restrictSize({
                        min: { width: 30, height: 30 }
                    })
                ],
                inertia: true
            });
        } else {
            interact(el).draggable(false).resizable(false);
        }
    }

    dragMoveListener(event) {
        const target = event.target;
        let x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx;
        let y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

        target.style.transform = `translate(${x}px, ${y}px)`;
        target.setAttribute('data-x', x);
        target.setAttribute('data-y', y);
    }

    dragEndListener(event) {
        const el = event.target;
        const x = parseFloat(el.getAttribute('data-x'));
        const y = parseFloat(el.getAttribute('data-y'));

        const xFeet = (x / this.scale).toFixed(2);
        const yFeet = (y / this.scale).toFixed(2);

        const unitId = el.dataset.unitId;
        if(unitId) {
            this.api?.update && this.api.update({
                id: unitId,
                x_feet: xFeet,
                y_feet: yFeet
            });
        }

        const componentId = el.dataset.componentId;
        if(componentId) {
            this.api?.updateComponent && this.api.updateComponent({
                id: componentId,
                x_position: xFeet,
                y_position: yFeet
            });
        }

    }

    resizeEndListener(event, scale) {
        const el = event.target;
        const x = parseFloat(el.getAttribute('data-x'));
        const y = parseFloat(el.getAttribute('data-y'));
        const widthPx = parseFloat(el.style.width);
        const heightPx = parseFloat(el.style.height);

        const widthFeet = (widthPx / scale).toFixed(2);
        const heightFeet = (heightPx / scale).toFixed(2);
        const xFeet = (x / scale).toFixed(2);
        const yFeet = (y / scale).toFixed(2);

        const unitId = el.dataset.unitId;
        if(unitId) {
            this.api?.update && this.api.update({
                id: unitId,
                x_feet: xFeet,
                y_feet: yFeet,
                width_feet: widthFeet,
                height_feet: heightFeet
            });
        }

        const componentId = el.dataset.componentId;
        if(componentId) {
            this.api?.updateComponent && this.api.updateComponent({
                id: componentId,
                x_position: xFeet,
                y_position: yFeet,
                width: widthFeet,
                height: heightFeet
            });
        }
    }

    attachRemoveListener(el) {
        el.querySelector('.close-btn').addEventListener('click', (e) => {
            e.stopPropagation();
            const unitId = el.dataset.unitId;
            const componentId = el.dataset.componentId;

            el.remove();

            if(unitId) {
                this.api?.delete && this.api.delete(unitId);
            }
            if(componentId) {
                this.api?.deleteComponent && this.api.deleteComponent(componentId);
            }
        });
    }
}
