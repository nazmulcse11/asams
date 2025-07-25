import Litepicker from "litepicker";

export function initDateRangePicker(selector, startInputSelector, endInputSelector, fullRangeSelector) {

    const element = document.querySelector(selector);
    const startInput = document.querySelector(startInputSelector);
    const endInput = document.querySelector(endInputSelector);
    const fullRangeInput = document.querySelector(fullRangeSelector);

    if (!element || !startInput || !endInput || !fullRangeInput) {
        console.error(`Error: Date Range Picker - One or more required elements not found.`);
        return;
    }

    const picker = new Litepicker({
        element,
        singleMode: false,
        format: "YYYY-MM-DD",
        allowRepick: true,
        autoApply: true,
        dropdowns: {
            minYear: 2023,
            maxYear: 2033,
            months: true,
            years: true,
        },
    });

    picker.on("selected", (start, end) => {
        element.value = `${start.format("YYYY-MM-DD")} to ${end.format("YYYY-MM-DD")}`;
        startInput.value = start.format("YYYY-MM-DD");
        endInput.value = end.format("YYYY-MM-DD");
        fullRangeInput.value = `${start.format("YYYY-MM-DD")} to ${end.format("YYYY-MM-DD")}`;
    });
}
