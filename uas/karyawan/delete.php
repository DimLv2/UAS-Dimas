<?php
include "koneksi.php";
$id_karyawan = $_GET['id_karyawan'];
$id_karyawan = mysqli_query($koneksi, "delete from karyawan where id_karyawan='$id_karyawan'");
header('location:?page=karyawan/index');
?>