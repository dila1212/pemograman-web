<?php
include 'koneksi_MySQLI.php';

$tanggal_penjualan = $_POST['tanggal_penjualan'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$jumlah_harga = $_POST['jumlah_harga'];
$total_penjualan = $harga * $jumlah_harga;

$query = "INSERT INTO  laporan_penjualan (tanggal_penjualan, nama_produk, harga, jumlah_harga, total_penjualan)
        VALUES ('$tanggal_penjualan', '$nama_produk', '$harga', '$jumlah_harga', '$total_penjualan')";
$mysqli->query($query);

header("Location: index.php");
?>