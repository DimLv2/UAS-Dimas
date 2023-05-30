<?php
include "koneksi.php";
$id_karyawan = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$alamat_karyawan = $_POST['alamat_karyawan'];
$no_tlpn = $_POST['no_tlpn'];
$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($koneksi, "update karyawan set nama_karyawan='$nama_karyawan',alamat_karyawan='$alamat_karyawan', no_tlpn='$no_tlpn', username='$username', password='$password' where id_karyawan='$id_karyawan'");
header('location:?page=karyawan/index');