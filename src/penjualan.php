<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Tahap 2</title>

</head>

<body>
    <?php include('navbar.php') ?>
    <div class="container">
        <h1 class="text-center mt-4">DAFTAR PENJUALAN</h1>
        <br>
        <div class="table-responsive">
            <table class="table mt-5">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Konsumen</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal Penjualan</th>
                        <th scope="col">Total Penjualan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('store/connection_db.php');
                    $no = 1;
                    $query = mysqli_query($connect_db, 'SELECT * FROM penjualan ORDER BY tgl_penjualan DESC');
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td scope="row"><?php echo $no++ ?></td>
                            <td><?php echo $data['nama_konsumen'] ?></td>
                            <td><?php echo $data['alamat'] ?></td>
                            <td><?php echo $data['tgl_penjualan'] ?></td>
                            <td><?php echo $data['total_barang'] ?></td>
                            <td>
                                <a href="detail_penjualan.php?kode=<?php echo $data['kode_jual'] ?>&nama=<?php echo $data['nama_konsumen'] ?>" style="text-decoration: none; color:black">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>