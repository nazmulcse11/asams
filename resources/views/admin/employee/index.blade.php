<x-app-layout>
    <div class="flex justify-between flex-wrap items-center mb-6">
        <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-flex items-center gap-3 ltr:pr-4 rtl:pl-4 mb-1 sm:mb-0">
            <span class="icon w-16 h-16 bg-violet-200 rounded-full inline-flex items-center justify-center">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.8509 19.5992C3.0635 18.0446 4.7841 17.084 6.6667 17.084H17.5C19.3826 17.084 21.1032 18.0446 22.3158 19.5992C23.5227 21.1465 24.1667 23.192 24.1667 25.2784V28.7507C24.1667 29.441 23.607 30.0007 22.9167 30.0007H1.25C0.5596 30.0007 0 29.441 0 28.7507V25.2784C0 23.192 0.644001 21.1465 1.8509 19.5992Z" fill="#9881CB"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.3329 17.4983C23.7295 17.0865 25.2868 17.4144 26.099 17.8827C26.8402 18.3047 27.5076 18.8793 28.0731 19.5775C29.3265 21.1249 29.9993 23.1768 29.9993 25.2748V28.747C29.9993 29.4374 29.4397 29.997 28.7493 29.997H27.0828C26.7418 29.997 26.4155 29.8576 26.1797 29.6112C25.9439 29.3648 25.819 29.0327 25.8341 28.692L25.835 28.6707L25.8376 28.6043C25.8399 28.546 25.8431 28.4604 25.8467 28.3532C25.8538 28.1386 25.8624 27.8384 25.8681 27.4973C25.8797 26.8049 25.8787 25.9813 25.8358 25.361C25.8078 24.9564 25.789 24.5968 25.7719 24.2689C25.7009 22.9105 25.6583 22.0963 25.1097 20.8774C25.009 20.6537 24.8429 20.3497 24.6865 20.0785C24.6112 19.948 24.5432 19.8338 24.4942 19.7525L24.437 19.6584L24.4223 19.6343L24.4188 19.6288C24.1175 19.1429 22.9996 18.1225 23.3329 17.4983Z" fill="#9881CB"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5793 0.665794C19.8811 0.266894 20.3915 0.0863933 20.877 0.206693C23.9627 0.971693 26.2511 3.75809 26.2511 7.08219C26.2511 10.4062 23.9627 13.1926 20.877 13.9576C20.3915 14.078 19.8811 13.8974 19.5793 13.4985C19.2777 13.0999 19.2426 12.5598 19.4901 12.1255L19.4931 12.1203L19.5062 12.0969C19.5182 12.0753 19.5368 12.0418 19.5609 11.9975C19.6091 11.9088 19.6795 11.7772 19.7645 11.6113C19.9351 11.2785 20.1622 10.8126 20.3885 10.2815C20.8621 9.16969 21.2508 7.95469 21.2508 7.08219C21.2508 6.20959 20.8621 4.99459 20.3885 3.88279C20.1622 3.35169 19.9351 2.88589 19.7645 2.55299C19.6795 2.38709 19.6091 2.25549 19.5609 2.16679C19.5368 2.12249 19.5182 2.08899 19.5062 2.06739L19.4931 2.04399L19.4904 2.03939C19.2428 1.60499 19.2776 1.06449 19.5793 0.665794Z" fill="#9881CB"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.41602 7.0833C5.41602 3.1713 8.58732 0 12.4993 0C16.4114 0 19.5827 3.1713 19.5827 7.0833C19.5827 10.9953 16.4114 14.1667 12.4993 14.1667C8.58732 14.1667 5.41602 10.9953 5.41602 7.0833Z" fill="#9881CB"/>
                </svg>
            </span>
            {{ __('Employee') }}
        </h4>
    </div>


    <div class="employees-wrapper grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 xl:gap-10">
        @foreach($items as $item)
            <div class="item p-4 xl:p-6 rounded-2xl border border-slate-100 bg-white">
                <div class="thumbnail mb-6">
                    <img src="{{  $item?->profile?->picture }}"
                         class="rounded-full mx-auto "
                         alt="{{ $item?->profile?->full_name }}">
                </div>
                <h5 class="text-center font-semibold text-gunmetal text-2xl">
                    {{ $item?->profile?->full_name }}
                </h5>
                <p class="text-center my-2">
                <span class="inline-block px-4 py-2 rounded-2xl bg-slate-100 text-black-600 text-sm">
                    {{ __("Employee") }}
                </span>
                </p>

                <table class="table w-full border-separate [&_td]:py-3 [&_td]:border-b [&_td]:border-b-slate-100 [&_td]:align-middle">
                    <tbody>
                    <tr>
                        <td class="text-ash">
                            {{ __("Email :")}}
                        </td>
                        <td class="text-gunmetal font-semibold">
                            {{ $item->email ?? 'N/A' }}
                        </td>
                    </tr>
                    <tr>
                        <td class="text-ash">
                            {{ __("Phone :")}}
                        </td>
                        <td class="text-gunmetal font-semibold">
                            {{ $item->phone ?? 'N/A' }}
                        </td>
                    </tr>
                    <tr>
                        <td class="text-ash">
                            {{ __("Address :")}}
                        </td>
                        <td class="text-gunmetal font-semibold">
                            {{ $item->addresses->first()->full_address ?? 'N/A' }}
                        </td>
                    </tr>
                    <tr>
                        <td class="text-ash">
                            {{ __("NID Number :")}}
                        </td>
                        <td class="text-gunmetal font-semibold">
                            {{ $item->profile?->nid ?? 'N/A' }}
                        </td>
                    </tr>
                    <tr>
                        <td class="text-ash">
                            {{ __("Age :")}}
                        </td>
                        <td class="text-gunmetal font-semibold">
                            {{ $item->profile?->age ?? 'N/A' }}
                        </td>
                    </tr>
                    </tbody>
                </table>

                <div class="mt-6 flex gap-3 *:text-sm *:py-3.5 *:rounded-md *:font-semibold *:flex-1 *:inline-flex *:items-center *:justify-center *:transition-all">
                    <a href="{{ route('admin.employee.show', $item->id) }}" class="text-themered bg-[#FFF0F1] hover:bg-themered hover:text-white">
                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2 font-light" icon="heroicons-outline:eye"></iconify-icon>
                        Employee Details
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    @push('scripts')
    <style>
        .progress-circle {
            transform: rotate(-90deg);
        }
        .progress-bg {
            fill: none;
            stroke: #e5e7eb; /* gray-200 */
            stroke-width: 3.5;
        }
        .progress-bar {
            fill: none;
            stroke: #dc2626; /* red-600 */
            stroke-width: 3.5;
            stroke-linecap: round;
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            transition: stroke-dashoffset 0.4s ease;
        }
        .progress-circle text {
            transform: rotate(90deg);
            transform-origin: center;
        }
        input:invalid,
        input.border-red-500,
        select:invalid,
        select.border-red-500,
        textarea:invalid {
            border-color: #e3342f;
        }
        .step button[disabled] {
            opacity: .5;
        }
    </style>

    <script>
        // Multistep form Feature
        $(document).ready(function () {
            const $form = $('#multiStepForm');
            const $steps = $form.find('.step');
            const $nextButtons = $form.find('.next-step');
            const $prevButtons = $form.find('.prev-step');
            const $progressBar = $form.find('.progress-bar');
            const $progressText = $('text.step-count-placeholder');
            const totalSteps = $steps.length;
            let currentStep = 1;

            // SVG Progress Bar
            const radius = $progressBar[0].r.baseVal.value;
            const circumference = 2 * Math.PI * radius;
            $progressBar.css({
                strokeDasharray: circumference,
                strokeDashoffset: circumference
            });

            function setProgress(step) {
                const progressRatio = step / totalSteps;
                const offset = circumference * (1 - progressRatio);
                $progressBar.css('strokeDashoffset', offset);
            }

            function validateStep(step) {
                const $currentStep = $steps.eq(step - 1);
                const $requiredFields = $currentStep.find('input[required], select[required], textarea[required]');
                let isValid = true;

                $requiredFields.each(function () {
                    const $field = $(this);
                    const value = $field.val();

                    if (
                        !value ||
                        $.trim(value) === '' ||
                        ($field.is('select') && $field.prop('selectedIndex') === 0)
                    ) {
                        isValid = false;
                        return false; // break loop
                    }
                });

                return isValid;
            }

            function showValidationErrors(step) {
                const $currentStep = $steps.eq(step - 1);
                const $requiredFields = $currentStep.find('input[required], select[required], textarea[required]');
                let allValid = true;

                $requiredFields.each(function () {
                    const $field = $(this);
                    const value = $field.val();
                    const isInvalid =
                        !value ||
                        $.trim(value) === '' ||
                        ($field.is('select') && $field.prop('selectedIndex') === 0);

                    if (isInvalid || !$field[0].checkValidity()) {
                        $field.addClass('border-red-500');
                        $field[0].reportValidity?.();
                        allValid = false;
                    } else {
                        $field.removeClass('border-red-500');
                    }
                });

                return allValid;
            }

            function toggleNextButton() {
                const isValid = validateStep(currentStep);
                const $currentNextBtn = $steps.eq(currentStep - 1).find('.next-step');
                $currentNextBtn.prop('disabled', !isValid);
            }

            function showStep(step) {
                $steps.addClass('hidden').eq(step - 1).removeClass('hidden');
                $progressText.text(`${step}/${totalSteps}`);
                setProgress(step);
                toggleNextButton();
            }

            // Prev button
            $prevButtons.on('click', function () {
                if (currentStep > 1) {
                    currentStep--;
                    showStep(currentStep);
                }
            });

            // Next button
            $nextButtons.on('click', function () {
                if (currentStep < totalSteps) {
                    const isValid = showValidationErrors(currentStep);
                    if (isValid) {
                        currentStep++;
                        showStep(currentStep);
                    }
                }
            });

            // Realtime validation for all fields
            $steps.each(function () {
                const $step = $(this);
                const $requiredFields = $step.find('input[required], select[required], textarea[required]');

                $requiredFields.on('input change', function () {
                    toggleNextButton();
                });
            });

            showStep(currentStep);
        });
    </script>

    <script>
        // Show/hide Password on Toggle
        $(document).on("click", ".toggle-password", function () {
            $(this).toggleClass("show");
            var input = $($(this).attr("data-toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });



    </script>

    @endpush

</x-app-layout>
