<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Tahap 2</title>

    <style>
        .chart-container {
            width: 45%;
            height: auto;
            display: inline-block;
        }

        @media screen and (max-width: 780px) {
            .chart-container {
                width: 100%;
                height: auto;
            }
        }
    </style>

</head>

<body>
    <?php include('navbar.php') ?>
    <div class="container">
        <h1 class="text-center mt-4">DASHBOARD</h1>
        <br>
        <div class="text-center">
            <div class="chart-container">
                <canvas id="mybarChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="mypieChart"></canvas>
            </div>
            <br>
        </div>
        <div class="table-responsive">
            <table class="table mt-5">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal Penjualan</th>
                        <th scope="col">Total Penjualan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('store/connection_db.php');
                    $no = 1;
                    $query = mysqli_query($connect_db, 'SELECT * FROM penjualan ORDER BY tgl_penjualan DESC LIMIT 10');
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td scope="row"><?php echo $no++ ?></td>
                            <td>
                                <a href="detail_penjualan.php?kode=<?php echo $data['kode_jual'] ?>&nama=<?php echo $data['nama_konsumen'] ?>" style="text-decoration: none; color: black;">
                                    <?php echo $data['nama_konsumen'] ?>
                                </a>
                            </td>
                            <td><?php echo $data['alamat'] ?></td>
                            <td><?php echo $data['tgl_penjualan'] ?></td>
                            <td><?php echo $data['total_barang'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/bar-chart.js"></script>
    <script type="text/javascript" src="js/pie-chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>