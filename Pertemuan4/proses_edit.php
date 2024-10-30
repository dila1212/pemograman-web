<?php
include 'koneksi_MySQLI.php';

$id = $_POST['id'];
$tanggal_penjualan = $_POST['tanggal_penjualan'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$jumlah_harga = $_POST['jumlah_harga'];
$total_penjualan = $harga * $jumlah_harga;

$query = "UPDATE laporan_penjualan SET 
    tanggal_penjualan = '$tanggal_penjualan', 
    nama_produk = '$nama_produk', 
    harga = '$harga', 
    jumlah_harga = '$jumlah_harga', 
    total_penjualan = '$total_penjualan' 
    WHERE id = $id";

$mysqli->query($query);

header("Location: index.php");
?>