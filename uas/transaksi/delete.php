<?php
include "koneksi.php";
$id = $_GET['id'];
$id_barang = mysqli_query($koneksi, "DELETE from transaksi where id='$id'");
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?page=transaksi/index">';
exit;
?>