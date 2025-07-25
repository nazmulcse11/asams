@push('scripts')
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function () {
            // Open modal
            $('[data-popup="modal"]').on('click', function (e) {
                e.preventDefault();
                const targetModal = $(this).attr('href');

                // Close any open modal before opening the new one
                $('.asams-modal.show').addClass('hidden').removeClass('show');

                // Open the target modal
                $(targetModal).removeClass('hidden').addClass('show');
            });

            $('.asams-modal').on('click', function (e) {
                const $modalContent = $(this).find('.modal-content');

                const isClickInside = $modalContent.is(e.target) || $modalContent.has(e.target).length > 0;
                const isCloseBtn = $(e.target).closest('.modal-close').length > 0;

                const isSelect2 = $(e.target).closest('.select2-container, .select2-selection, .select2-results, .select2-selection__choice__remove').length > 0;

                if ((!isClickInside && !isSelect2) || isCloseBtn) {
                    $(this).addClass('hidden').removeClass('show');
                }
            });


            // Close modal on Esc key
            $(document).on('keydown', function (e) {
                if (e.key === 'Escape') {
                    $('.asams-modal.show').addClass('hidden').removeClass('show');
                }
            });
        });

    </script>
@endpush
