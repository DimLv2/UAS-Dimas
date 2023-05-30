<?php
include "koneksi.php";
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$query = mysqli_query($koneksi, "update list_barang set nama_barang='$nama_barang',harga='$harga' where id_barang='$id_barang'");
header('location:?page=list-barang/index');