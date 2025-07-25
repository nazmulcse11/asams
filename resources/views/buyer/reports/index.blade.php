<x-app-layout>
    <div class="flex justify-between flex-wrap items-center mb-6">
        <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-flex items-center gap-3 ltr:pr-4 rtl:pl-4 mb-1 sm:mb-0">
            <span class="icon w-16 h-16 bg-[#FBD9CD] rounded-full inline-flex items-center justify-center">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.5 5H11C6.5 5 5 7.60901 5 10.8302V12.2877V32.6934C5 33.9032 6.41 34.5882 7.4 33.8595L9.965 31.9938C10.565 31.5565 11.405 31.6148 11.945 32.1396L14.435 34.5737C15.02 35.1421 15.98 35.1421 16.565 34.5737L19.085 32.125C19.61 31.6148 20.45 31.5565 21.035 31.9938L23.6 33.8595C24.59 34.5737 26 33.8886 26 32.6934V7.9151C26 6.31179 27.35 5 29 5H12.5ZM10.955 22.5052C10.13 22.5052 9.455 21.8493 9.455 21.0476C9.455 20.246 10.13 19.5901 10.955 19.5901C11.78 19.5901 12.455 20.246 12.455 21.0476C12.455 21.8493 11.78 22.5052 10.955 22.5052ZM10.955 16.675C10.13 16.675 9.455 16.0191 9.455 15.2174C9.455 14.4158 10.13 13.7599 10.955 13.7599C11.78 13.7599 12.455 14.4158 12.455 15.2174C12.455 16.0191 11.78 16.675 10.955 16.675ZM20 22.1408H15.5C14.885 22.1408 14.375 21.6452 14.375 21.0476C14.375 20.45 14.885 19.9545 15.5 19.9545H20C20.615 19.9545 21.125 20.45 21.125 21.0476C21.125 21.6452 20.615 22.1408 20 22.1408ZM20 16.3106H15.5C14.885 16.3106 14.375 15.815 14.375 15.2174C14.375 14.6198 14.885 14.1243 15.5 14.1243H20C20.615 14.1243 21.125 14.6198 21.125 15.2174C21.125 15.815 20.615 16.3106 20 16.3106Z" fill="#E4764F"/>
                    <path d="M29.015 5V7.18632C30.005 7.18632 30.95 7.57986 31.64 8.23576C32.36 8.94996 32.75 9.86821 32.75 10.8302V14.3575C32.75 15.436 32.255 15.9316 31.13 15.9316H28.25V7.92967C28.25 7.52156 28.595 7.18632 29.015 7.18632V5ZM29.015 5C27.35 5 26 6.31179 26 7.92967V18.1179H31.13C33.5 18.1179 35 16.6604 35 14.3575V10.8302C35 9.22689 34.325 7.76934 33.245 6.70533C32.15 5.6559 30.665 5.01458 29.015 5C29.015 5 29.03 5 29.015 5Z" fill="#E4764F"/>
                </svg>
            </span>
            {{ __('Reports') }}
        </h4>
        <div class="flex sm:space-x-4 space-x-2 sm:justify-end items-center rtl:space-x-reverse">
            
        </div>
    </div>

    <!-- Report chart Card -->
    <div class="chart_cards grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Report Item -->
        <div class="card-item bg-white rounded-2xl border border-slate-100">
            <h4 class="card-title font-semibold text-pureblack text-base xl:text-xl flex items-start justify-between gap-4 px-4 xl:px-6 pt-6">
                {{ __("Purchase Summery Report") }}
                <div class="relative">
                    <a href="{{ route( 'buyer.reports.purchase-report' ) }}" class="inline-flex whitespace-nowrap items-center gap-2 font-semibold text-sm px-3 xl:px-5 py-1.5 border border-slate-200 rounded-lg transition-all text-pureblack hover:bg-gunmetal hover:text-white">
                        Full Report
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 11L11 1" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M3 1H10.75C10.8881 1 11 1.11193 11 1.25V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </h4>
            <div class="card-body py-5">
                <div id="purchase_summery_chart"></div>
            </div>
        </div>

        <!-- Report Item -->
        <div class="card-item bg-white rounded-2xl border border-slate-100">
            <h4 class="card-title font-semibold text-pureblack text-base xl:text-xl flex items-start justify-between gap-4 px-4 xl:px-6 pt-6">
                {{ __("Agreement History Report") }}
                <div class="relative">
                    <a href="{{ route( 'buyer.reports.agreement-report' ) }}" class="inline-flex whitespace-nowrap items-center gap-2 font-semibold text-sm px-3 xl:px-5 py-1.5 border border-slate-200 rounded-lg transition-all text-pureblack hover:bg-gunmetal hover:text-white">
                        Full Report
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 11L11 1" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M3 1H10.75C10.8881 1 11 1.11193 11 1.25V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </h4>
            <div class="card-body py-5">
                <div id="buyer_agreement_history_report"></div>
            </div>
        </div>


        <!-- Report Item -->
        <div class="card-item bg-white rounded-2xl border border-slate-100">
            <h4 class="card-title font-semibold text-pureblack text-base xl:text-xl flex items-start justify-between gap-4 px-4 xl:px-6 pt-6">
                {{ __("Installment Report") }}
                <div class="relative">
                    <a href="{{ route( 'buyer.reports.installment-report' ) }}" class="inline-flex whitespace-nowrap items-center gap-2 font-semibold text-sm px-3 xl:px-5 py-1.5 border border-slate-200 rounded-lg transition-all text-pureblack hover:bg-gunmetal hover:text-white">
                        Full Report
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 11L11 1" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M3 1H10.75C10.8881 1 11 1.11193 11 1.25V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </h4>
            <div class="card-body py-5">
                <div id="buyer_installment_summery"></div>
            </div>
        </div>



        
        
    </div>
    @include("buyer.reports.charts")

    @push('scripts')
    <style>
        #installment_payment_legend li,
        #withdrawal_report_legend li {
            color: black;
            display: flex;
            align-items: flex-end;
            gap: 8px;
        }
        #installment_payment_legend li + li,
        #withdrawal_report_legend li + li {
            margin-top: 20px;
        }
        #installment_payment_legend li b,
        #withdrawal_report_legend li b {
            font-size: 20px;
        }
        #installment_payment_legend .legend-color,
        #withdrawal_report_legend .legend-color {
            width: 10px;
            height: 10px;
            margin-right: 5px;
            display: inline-block;
            border-radius: 50%;
            margin-bottom: 9px;
        }
    </style>
    @endpush
</x-app-layout>
