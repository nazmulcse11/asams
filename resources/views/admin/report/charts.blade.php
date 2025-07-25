@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {
    const chartOptions = [
        {
            id: "columnChart__1",
            options: {
                chart: {
                    type: 'bar',
                    height: 350,
                    toolbar: {
                        show: false,
                    },
                },
                series:[
                    {
                        name:"Collected",
                        data:[44, 55, 57, 56, 61, 58, 63, 60, 66, 75]
                    },
                    {
                        name:"Due",
                        data:[76, 85, 101, 98, 87, 105, 91, 114, 50, 65]
                    },
                ],
                legend: {
                    show: false
                },
                plotOptions:{
                    bar: {
                        horizontal: !1,
                        endingShape: "rounded",
                        columnWidth: "45%"
                    },                
                },
                dataLabels:{
                    enabled:!1
                },
                stroke:{
                    show: !0,
                    width: 5,
                    colors: ["transparent"]
                },
                xaxis:{
                    categories:["Jan", "Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct"],
                },
                yaxis: {
                    labels: {
                        formatter: function (value) {
                            return value + "k";
                        }
                    },
                },
                fill:{
                    opacity:1
                },
                tooltip: {
                    theme: 'dark',
                    y: {
                        formatter: function (val, opts) {
                            return `$${val}k`;
                        },
                    },                
                },
                colors:["#36C6FA","#E1E5EA"],
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
            id: "barChart_stack__1",
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
                        name:"Active",
                        data:[67, 55, 57, 56, 61, 58, 63, 60, 66, 75, 90, 95]
                    },
                    {
                        name:"Terminate",
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
                colors:["#36C6FA", "#E1E5EA"],
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
            id: "commission_earning_chart",
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
                        name:"Commission",
                        data:[35000, 40000, 30000, 25000, 20000, 24500, 15750, 13200, 18000, 19000, 12700, 20540]
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
                            return `${(val / 1000).toFixed(0)}k`;
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
                            return `৳${val}`;
                        },
                        title: {
                            formatter: function () {
                                return '';
                            }
                        }
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
            id: "buyer_engagement",
            options : {
                series: [{
                    data: [
                        [('2025-01-01T00:00:00').valueOf(), 5054],
                        [('2025-01-02T00:00:00').valueOf(), 500],
                        [('2025-01-03T00:00:00').valueOf(), 5421],
                        [('2025-01-04T00:00:00').valueOf(), 2546],
                        [('2025-01-05T00:00:00').valueOf(), 90421],
                        [('2025-01-06T00:00:00').valueOf(), 15421],
                        [('2025-01-07T00:00:00').valueOf(), 67412],
                        [('2025-01-08T00:00:00').valueOf(), 45967],
                        [('2025-01-09T00:00:00').valueOf(), 54215],
                        [('2025-01-10T00:00:00').valueOf(), 36953],
                        [('2025-01-11T00:00:00').valueOf(), 42365],
                        [('2025-01-12T00:00:00').valueOf(), 87652],
                        [('2025-01-13T00:00:00').valueOf(), 14596],
                        [('2025-01-14T00:00:00').valueOf(), 87630],
                        [('2025-01-15T00:00:00').valueOf(), 45876],
                        [('2025-01-16T00:00:00').valueOf(), 35214],
                        [('2025-01-17T00:00:00').valueOf(), 11548],
                        [('2025-01-18T00:00:00').valueOf(), 87654],
                        [('2025-01-19T00:00:00').valueOf(), 79856],
                        [('2025-01-20T00:00:00').valueOf(), 32556],
                    ]
                }],
                chart: {
                    type: 'area',
                    height: 350,
                    toolbar: {
                        show: false,
                    },
                },
                legend: {
                    show: false,
                },
                dataLabels: {
                    enabled: false
                },
                xaxis: {
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        show: !1,
                    }
                },
                grid:{
                    show: !1,
                },
                stroke: {
                    curve: 'smooth',
                    width: 2,
                },
                tooltip: {
                    theme: 'dark',
                    x: {
                        formatter: function (val) {
                            const date = new Date(val);
                            return date.toLocaleDateString('en-US', {
                                year: 'numeric',
                                month: 'short',
                                day: 'numeric',
                            });
                        }
                    },
                    y: {
                        formatter: function (val) {
                            if (val === 0) return '0 Engagement';

                            const absVal = Math.abs(val);

                            if (absVal >= 1_000_000) {
                                return `${(val / 1_000_000).toFixed(1)}M Engagement`;
                            } else if (absVal >= 1_000) {
                                return `${(val / 1_000).toFixed(1)}k Engagement`;
                            } else {
                                return `${val} Engagement`;
                            }
                        },
                        title: {
                            formatter: function () {
                                return '';
                            }
                        }
                    },
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
            id: "agent_performance_chart",
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
                        name: 'Agreement',
                        data: [2, 1, 5, 8, 6, 4, 8, 3, 5],
                    },
                    {
                        name: 'Buyer Reached',
                        data: [10, 12, 15, 9, 6, 13, 17, 7, 14],
                    },
                    {
                        name: 'Reserved',
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

        {
            id: "buyer_request_chart",
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
                        name:"Agreement",
                        data:[67, 55, 57, 56, 61, 58, 63, 60, 66, 75, 90, 95]
                    },
                    {
                        name:"Request",
                        data:[76, 85, 101, 98, 87, 105, 91, 114, 50, 65, 72, 85]
                    },
                    {
                        name:"Register",
                        data:[67, 55, 57, 56, 61, 58, 63, 60, 66, 75, 90, 95]
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
                yaxis: {
                    labels: {
                        show: !1,
                    }
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
                colors:["#FF667D", "#FFA1AE", "#FFF1F2"],
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
            id: "activity_log_report",
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
                        name: "Buyer",
                        data: [67, 55, 57, 56, 61, 58, 63, 60, 66, 75, 90, 95]
                    },
                    {
                        name: "Agent",
                        data: [76, 85, 101, 98, 87, 105, 91, 114, 50, 65, 72, 85]
                    },
                    {
                        name: "Employee",
                        data: [67, 55, 57, 56, 61, 58, 63, 60, 66, 75, 90, 95]
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
                    enabled: !1
                },
                xaxis:{
                    categories: ["Day 1", "Day 2","Day 3","Day 4","Day 5","Day 6","Day 7","Day 8","Day 9","Day 10", "Day 11", "Day 12"],
                },
                yaxis: {
                    labels: {
                        show: !1,
                    }
                },
                fill:{
                    opacity: 1
                },
                tooltip: {
                    theme: 'dark',
                    y: {
                        formatter: function (val, opts) {
                            return `${val}`;
                        },
                    },                
                },
                colors:["#FFD4C7", "#FFA1AE", "#B4A4DC"],
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
            id: "shop_listing_chart",
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
                        name: "New Listed",
                        data: [87, 55, 57, 56, 61, 58, 63, 60, 66, 75, 90, 95]
                    },
                    {
                        name: "Available",
                        data: [76, 85, 101, 98, 87, 105, 91, 114, 50, 65, 72, 85]
                    },
                    {
                        name: "Expired",
                        data: [67, 55, 57, 56, 61, 58, 63, 60, 66, 75, 90, 95]
                    },
                ],
                legend: {
                    show: false
                },
                plotOptions:{
                    bar: {
                        horizontal: !1,
                        borderRadius: 6,
                        columnWidth: "45%",
                    },
                },
                dataLabels:{
                    enabled: !1
                },
                xaxis:{
                    categories: ["Jan", "Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct", "Nov", "Dec"],
                },
                yaxis: {
                    labels: {
                        show: !1,
                    }
                },
                fill:{
                    opacity: 1
                },
                tooltip: {
                    theme: 'dark',
                    y: {
                        formatter: function (val) {
                            return `${val}`;
                        },
                    },                
                },
                colors: ["#FFCCD2", "#FFA1AE", "#FF667D"],
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
            id: "property_distribution_chart",
            options : {
                chart: {
                    height: 350,
                    type: 'bar',
                    toolbar: {
                        show: false,
                    },
                },
                series: [{
                    name: 'Properties',
                    data: [6, 5, 4, 3, 2, 1,]
                }],
                legend: {
                    show: false,
                },
                plotOptions:{
                    bar: {
                        horizontal: !1,
                        columnWidth: "45%",
                        borderRadius: 6,
                        borderRadiusApplication: 'end',
                        borderRadiusWhenStacked: 'all',
                        endingShape: 'flat',
                    },
                },
                dataLabels:{
                    enabled: !1,
                },
                xaxis:{
                    categories: ["Residential", "Commercial", "Industrial", "Shop Space", "Shop Space", "Rooftop"],
                },
                yaxis: {
                    labels: {
                        formatter: function (val) {
                            return `${val}`;
                        }
                    }
                },
                fill:{
                    opacity: 1,
                },
                tooltip: {
                    theme: 'dark',
                    x: {
                        formatter: function (val, opts) {
                            return `${val}`;
                        }
                    },
                    y: {
                        formatter: function (val, opts) {
                            return `${val} ${opts.w.globals.seriesNames[opts.seriesIndex]}`;
                        },
                        title: {
                            formatter: function () {
                                return '';
                            }
                        },
                    },
                },
                colors: ["#6EE7B6"],
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
    ];

    const chartJsOptions = [
        {
            id: "occupied_vacant_chart",
            type: 'doughnut',
            data: {
                labels: ["Available", "Reserve"],
                datasets: [
                    {
                        data: [50, 35],
                        backgroundColor: ['#FFA1AE','#E1E5EA',],
                        hoverOffset: 1,
                        borderWidth: 0,
                    },
                ],
            },
            options: {
                reponsive: true,
                cutout: '20%',
                plugins: {
                    legend : {
                        display : false,
                    }
                },
            },
        },
        
        {
            id: "installment_payment_chart",
            type: 'doughnut',
            data: {
                labels: ["Progressed", "Overdue"],
                datasets: [
                    {
                        data: [235000, 85000],
                        backgroundColor: ['#F93A5C','#FFCCD2',],
                        hoverOffset: 1,
                        borderWidth: 0,
                    },
                ],
            },
            options: {
                reponsive: true,
                borderRadius: 6,
                borderJoinStyle: 'round',
                spacing: 10,
                plugins: {
                    legend : {
                        display : false,
                    }
                },
                legendCallback: function(chart) {
                    const dataset = chart.data.datasets[0];
                    const labels = chart.data.labels;
                    const legendHtml = [];

                    legendHtml.push('<ul class="legend-list">');

                    for (let i = 0; i < dataset.data.length; i++) {
                        legendHtml.push('<li class="legend-item">');
                        legendHtml.push(`<span class="legend-color" style="background-color:${dataset.backgroundColor[i]}"></span>`);
                        legendHtml.push(`<span class="legend-label-text">${labels[i]} <br> <b>${dataset.data[i].toLocaleString()}</b></span>`);
                        legendHtml.push('</li>');
                    }

                    legendHtml.push('</ul>');
                    return legendHtml.join('');
                }
            },
        },

        {
            id: "withdrawal_report_chart",
            type: 'doughnut',
            data: {
                labels: ["Payout Done", "In Progress"],
                datasets: [
                    {
                        data: [1250000, 105000],
                        backgroundColor: ['#F93A5C','#FFCCD2',],
                        hoverOffset: 1,
                        borderWidth: 0,
                    },
                ],
            },
            options: {
                reponsive: true,
                borderRadius: 6,
                borderJoinStyle: 'round',
                spacing: 3,
                cutout: '10%',
                plugins: {
                    legend : {
                        display : false,
                    }
                },
                legendCallback: function(chart) {
                    const dataset = chart.data.datasets[0];
                    const labels = chart.data.labels;
                    const legendHtml = [];

                    legendHtml.push('<ul class="legend-list">');

                    for (let i = 0; i < dataset.data.length; i++) {
                        legendHtml.push('<li class="legend-item">');
                        legendHtml.push(`<span class="legend-color" style="background-color:${dataset.backgroundColor[i]}"></span>`);
                        legendHtml.push(`<span class="legend-label-text">${labels[i]} <br> <b>${dataset.data[i].toLocaleString()}</b></span>`);
                        legendHtml.push('</li>');
                    }

                    legendHtml.push('</ul>');
                    return legendHtml.join('');
                }
            },
        },
    ];
    

    // ApexCharts => loop through chartOptions array to render charts
    chartOptions.forEach(function (chart) {
        const ctx = document.getElementById(chart.id);
        if (ctx) {
            const chartObj = new ApexCharts(ctx, chart.options);
            chartObj.render();
        }
    });

    // Chart.js loop through chartOptions array to render charts
    chartJsOptions.forEach(function (chartConfig) {
        const ctx = document.getElementById(chartConfig.id);
        if (ctx) {
            const chartInstance = new Chart(ctx, {
                type: chartConfig.type,
                data: chartConfig.data,
                options: chartConfig.options
            });

            // Custom legend using the legendCallback
            if (chartConfig.id === 'installment_payment_chart') {
                const html = chartConfig.options.legendCallback(chartInstance);
                document.getElementById('installment_payment_legend').innerHTML = html;
            }
            if (chartConfig.id === 'withdrawal_report_chart') {
                const html = chartConfig.options.legendCallback(chartInstance);
                document.getElementById('withdrawal_report_legend').innerHTML = html;
            }
        }
    });

});
    

</script>

@endpush