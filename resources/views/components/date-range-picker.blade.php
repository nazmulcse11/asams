@props(['placeholder' => __("Select Date Range"), 'id' => 'selector', 'name' => 'selector'])

<div class="input-area">
    <div class="relative flex items-center border border-gray-300 rounded-lg bg-[#F8F9FB] focus-within:ring-2 focus-within:ring-blue-500">
        <input
            type="text"
            id="date_range_picker_{{ $id }}"
            class="date-range-picker w-full outline-none bg-transparent placeholder-gray-400 text-gray-900 cursor-pointer px-4 py-3 text-sm"
            placeholder="{{ $placeholder ?? 'Select Date Range' }}"
            readonly
        >
        <button
            type="button"
            class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-500 hover:text-red-500 focus:outline-none"
            onclick="document.getElementById('date_range_{{ $id }}').value=''; document.getElementById('start_date_{{ $id }}').value=''; document.getElementById('end_date_{{ $id }}').value='';">
            <iconify-icon icon="mdi:close-circle" class="text-lg"></iconify-icon>
        </button>
    </div>

    <!-- Hidden Fields for Backend Submission -->
    <input type="hidden" name="date_range_{{ $name }}" id="date_range_{{ $id }}">
    <input type="hidden" name="date_range_start_{{ $name }}" id="date_range_start_{{ $id }}">
    <input type="hidden" name="date_range_end_{{ $name }}" id="date_range_end_{{ $id }}">
</div>

@push('scripts')
    <style>
        .litepicker select {
            background-image: none;
        }
    </style>
    <script type="module">
        document.addEventListener("DOMContentLoaded", function () {
            initDateRangePicker(
                '#date_range_picker_{{ $id }}',
                '#date_range_start_{{ $id }}',
                '#date_range_end_{{ $id }}',
                '#date_range_{{ $id }}'
            );
        });
    </script>
@endpush
