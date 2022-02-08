$(document).ready(function () {
    $.ajax({
        url: "http://localhost/project/php/native/test_algostudio/src/store/data.php",
        method: "GET",
        success: function (data) {
            console.log(data);
            var days = [];
            var total = [];

            for (let i in data) {
                days.push("Tanggal " + data[i].tgl_penjualan);
                total.push(data[i].totalBarang)
            }
            
            var barChartData = {
                labels: days,
                datasets: [
                    {
                        label: 'Total Penjualan Bulan ini',
                        data: total,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.4)',
                            'rgba(255, 159, 64, 0.4)',
                            'rgba(255, 205, 86, 0.4)',
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                        ],
                        borderWidth: 1
                    }
                ]
            }

            var ctx = $("#mybarChart");
            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                stepSize: 1
                            }
                        }]
                    }
                }
            })
        },
        error: function (data) {
            console.log(data)
        }
    })
})