$(document).ready(function () {
    $.ajax({
        url: "http://localhost/project/php/native/test_algostudio/src/store/dataPresentaseKategori.php",
        method: "GET",
        success: function (data) {
            console.log(data);
            var category = [];
            var total = [];

            for (let i in data) {
                category.push("Kategori " + data[i].kategori);
                total.push(data[i].jumlahStok)
            }
            
            var pieChartData = {
                labels: category,
                datasets: [
                    {
                        label: 'Persentase kategori barang',
                        data: total,
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4,
                    }
                ]
            }

            var ctx = $("#mypieChart");
            var pieGraph = new Chart(ctx, {
                type: 'pie',
                data: pieChartData,
            })
        },
        error: function (data) {
            console.log(data)
        }
    })
})