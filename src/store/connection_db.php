<?php
$connect_db = mysqli_connect("localhost", "root", "", "test_algostudio");

if (mysqli_connect_errno()) {
    echo "Koneksi dengan Database Gagal : " . mysqli_connect_error();
}
