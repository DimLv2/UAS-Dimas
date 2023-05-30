<?php
include "koneksi.php";
$id_barang = $_GET['id_barang'];
$id_barang = mysqli_query($koneksi, "delete from list_barang where id_barang='$id_barang'");
header('location:?page=list-barang/index');
?>