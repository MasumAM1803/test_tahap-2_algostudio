<?php
header('Content-Type: application/json');
include('connection_db.php');
$query = sprintf('SELECT kategori, SUM(stok) AS jumlahStok FROM master_barang GROUP BY kategori');
$result = $connect_db->query($query);
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

$result->close();

$connect_db->close();

print(json_encode(($data)));
