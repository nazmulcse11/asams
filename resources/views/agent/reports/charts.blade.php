@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {
    const agentchartOptions = [

        {
            id: "agent_agreement_summery",
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
            id: "agent_commission_earning_chart",
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

    ];

    const agentchartJsOptions = [       

        {
            id: "agent_withdrawal_report_chart",
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
    agentchartOptions.forEach(function (chart) {
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