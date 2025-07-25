@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {
    const buyerchartOptions = [

        {
            id: "buyer_installment_summery",
            options : {
                chart: {
                    height: 350,
                    type: 'bar',
                    stacked: true,
                    toolbar: {
                        show: false,
                    },
                },
                series:[
                    {
                        name:"Done",
                        data:[67, 55, 57, 56, 61, 58, 63, 60, 66, 75, 90, 95]
                    },
                    {
                        name:"Overdue",
                        data:[76, 85, 101, 98, 87, 105, 91, 114, 50, 65, 72, 85]
                    },
                ],
                legend: {
                    show: false
                },
                plotOptions:{
                    bar: {
                        horizontal: !1,
                        columnWidth: "45%"
                    },
                },
                dataLabels:{
                    enabled:!1
                },
                xaxis:{
                    categories:["Jan", "Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct", "Nov", "Dec"],
                },
                fill:{
                    opacity:1
                },
                tooltip: {
                    theme: 'dark',
                    y: {
                        formatter: function (val, opts) {
                            return `${val}`;
                        },
                    },                
                },
                colors:["#22C55E", "#F5C400"],
                states: {
                    hover: {
                        filter: {
                            type: "none",
                            value: 0.1
                        }
                    }
                },
                grid:{
                    show: false
                },
                responsive: [{
                    breakpoint: 767,
                    options: {
                        chart: {
                            height: 'auto',
                        },
                    },
                }]
            }
        },
        {
            id: "buyer_agreement_history_report",
            options : {
                chart: {
                    height: 350,
                    type: 'bar',
                    toolbar: {
                        show: false,
                    },
                },
                series:[
                    {
                        name: "Agreement",
                        data: [2, 1, 5, 8, 6, 4, 8, 3, 5, 15, 9, 12]
                    },
                ],
                legend: {
                    show: false,
                },
                plotOptions:{
                    bar: {
                        horizontal: !1,
                        columnWidth: "45%"
                    },
                },
                dataLabels:{
                    enabled: !1,
                },
                xaxis:{
                    categories:["Jan", "Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct", "Nov", "Dec"],
                },
                yaxis: {
                    labels: {
                        formatter: function (val) {
                            return `${val}`;
                        }
                    }
                },
                fill:{
                    opacity:1
                },
                tooltip: {
                    theme: 'dark',
                    x: {
                        formatter: function (val) {
                            const currentYear = new Date().getFullYear();
                            return `${val}-${currentYear}`;
                        }
                    },
                    y: {
                        formatter: function (val) {
                            return `${val}`;
                        },
                    },
                },
                colors:["#36C6FA"],
                states: {
                    hover: {
                        filter: {
                            type: "none",
                            value: 0.1
                        }
                    }
                },
                grid:{
                    show: !1,
                },
                responsive: [{
                    breakpoint: 767,
                    options: {
                        chart: {
                            height: 'auto',
                        },
                    },
                }]
            }
        },

        {
            id: "purchase_summery_chart",
            options : {
                chart: {
                    height: 350,
                    type: 'area',
                    toolbar: {
                        show: false,
                    },
                },
                series: [
                    {
                        name: 'Total',
                        data: [28, 31, 35, 15, 19, 21, 39, 19, 30],
                    },
                    {
                        name: 'Buy',
                        data: [10, 15, 15, 9, 6, 13, 17, 7, 14],
                    },
                    {
                        name: 'Lease',
                        data: [18, 16, 20, 6, 13, 8, 22, 12, 16],
                    },
                ],
                xaxis: {
                    type: 'category',
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Nov', 'Dec'],
                },                
                colors: ['#0088C2', '#8283DA', '#E4764F'],
                dataLabels: {
                    enabled: false
                },
                legend: {
                    show: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2,
                },
                tooltip: {
                    theme: 'dark',
                    y: {
                        formatter: function (val, opts) {
                            return `${val}`;
                        },
                    },
                },
                grid:{
                    show: !1,
                },
                responsive: [{
                    breakpoint: 767,
                    options: {
                        chart: {
                            height: 'auto',
                        },
                    },
                }]
            }
        },

    ];

    const agentchartJsOptions = [       

        
    ];
    

    // ApexCharts => loop through chartOptions array to render charts
    buyerchartOptions.forEach(function (chart) {
        const ctx = document.getElementById(chart.id);
        if (ctx) {
            const chartObj = new ApexCharts(ctx, chart.options);
            chartObj.render();
        }
    });

    // Chart.js loop through chartOptions array to render charts
    agentchartJsOptions.forEach(function (chartConfig) {
        const ctx = document.getElementById(chartConfig.id);
        if (ctx) {
            const chartInstance = new Chart(ctx, {
                type: chartConfig.type,
                data: chartConfig.data,
                options: chartConfig.options
            });
        }
    });

});
    

</script>

@endpush