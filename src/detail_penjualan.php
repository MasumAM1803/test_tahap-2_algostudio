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
        <div class="text-start mb-4">
            <a style="text-decoration: none; color: black;" href="penjualan.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg> Kembali
            </a>
        </div>
        <h3>Nama Konsumen : <?php echo $_GET['nama'] ?></h3>
        <div class="table-responsive">
            <table class="table mt-5">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga Satuan</th>
                        <th scope="col">Harga Total</th>
                        <th scope="col">Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('store/connection_db.php');
                    $no = 1;
                    $query = mysqli_query($connect_db, 'SELECT * FROM detail_penjualan INNER JOIN master_barang ON kode_barang = kode_brg WHERE kode_penjualan = ' . $_GET['kode']);
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td scope="row"><?php echo $no++ ?></td>
                            <td><?php echo $data['nama_barang'] ?></td>
                            <td><?php echo $data['jumlah'] ?></td>
                            <td><?php echo $data['harga_satuan'] ?></td>
                            <td><?php echo $data['harga_total'] ?></td>
                            <td><?php echo $data['kategori'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>