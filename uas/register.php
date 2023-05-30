<?php
include "koneksi.php";
if (isset($_POST['daftar'])){
$id_karyawan = $_POST ['id_karyawan'];
$nama_karyawan = $_POST ['nama_karyawan'];
$alamat_karyawan = $_POST ['alamat_karyawan'];
$no_tlpn = $_POST ['no_tlpn'];
$username = $_POST ['username'];
$password = $_POST ['password'];
$query = mysqli_query($koneksi, "INSERT into karyawan (nama_karyawan,alamat_karyawan,no_tlpn,username,password) values (
    '$nama_karyawan', '$alamat_karyawan', '$no_tlpn', '$username', '$password'
)");
}
header('location:login.php');
?>