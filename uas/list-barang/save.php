<?php
include "koneksi.php";
$id_barang = $_POST ['id_barang'];
$nama_barang = $_POST ['nama_barang'];
$harga = $_POST ['harga'];
$query = mysqli_query($koneksi, "insert into list_barang (nama_barang,harga) values ('$nama_barang', '$harga'
)");
header('location:?page=list-barang/index');
?>