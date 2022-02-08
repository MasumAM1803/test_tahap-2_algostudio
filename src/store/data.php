<?php
header('Content-Type: application/json');
include('connection_db.php');
$query = sprintf('SELECT tgl_penjualan, SUM(total_barang) AS totalBarang FROM penjualan WHERE MONTH(tgl_penjualan)=MONTH(NOW()) GROUP BY DAY(tgl_penjualan)');
$result = $connect_db->query($query);
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}
$result->close();

$connect_db->close();

print(json_encode(($data)));
