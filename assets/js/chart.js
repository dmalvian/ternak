Highcharts.chart('chart-suhu', {

    title: {
        text: 'Chart Suhu Kandang'
    },
    xAxis: {
        type: 'datetime',
        crosshair: true
    },
    yAxis: {
        title: {
            text: 'Suhu'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            }
        }
    },

    series: [{
        name: 'Suhu 1',
        data: nodeData.suhu_1
    }, {
        name: 'Suhu 2',
        data: nodeData.suhu_2
    }, {
        name: 'Suhu 3',
        data: nodeData.suhu_3
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});

Highcharts.chart('chart-kelembapan', {

    title: {
        text: 'Chart Kelembapan Kandang'
    },
    xAxis: {
        type: 'datetime',
        crosshair: true
    },
    yAxis: {
        title: {
            text: 'Kelembapan'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            }
        }
    },

    series: [{
        name: 'Kelembapan 1',
        data: nodeData.kel_1
    }, {
        name: 'Kelembapan 2',
        data: nodeData.kel_2
    }, {
        name: 'Kelembapan 3',
        data: nodeData.kel_3
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});