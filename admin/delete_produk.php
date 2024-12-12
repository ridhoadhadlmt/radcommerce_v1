<?php
require_once '../function.php';
require_once '../koneksi.php';
$id = $_GET['id_produk'];

$table = 'produk';
$kondisi = "WHERE id_produk = $id";

deleteProduk($table,$kondisi);
?>