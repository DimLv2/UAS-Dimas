<?php
include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="laporan-per-tanggal/css/style.css">
    <title>AnMart | Laporan</title>
</head>
<body>
<div class="card" style="margin-top: 45px">
    <div class="card-header" style="font-family: arial; justify-content:center; text-align:center;">
        <h3>Laporan Per Tanggal</h3>
    </div>
    <div id="date" class="card-body" >
        <form action="" method="POST">
            <div class="input_date">
            <div>
                <label for="date">DATE :</label>
            </div>
                <input class="form-control" type="date" name="tanggal_pembayaran" style="color:#28292d;">
            <!-- <input id="datepicker" value="2023-02-13" width="312"  name="tanggal_pembayaran"/>
            <script>
            $('#datepicker').datepicker({ format: 'yyyy-dd-mm' });
            </script> -->
            </div>
            <div class="button_proses mt-2 mb-2">
            <button class="btn btn-secondary btn-sm" name="proses">Proses</button>
            </div>
            </form>
            <?php
            if(isset($_POST['proses'])){
            $tanggal_pembayaran=$_POST['tanggal_pembayaran'];
            ?>
        <table border="0px" class="table" style="color: #45f3ff;">            
            <tr align="center">
                <td>No</td>
                <td>Nama Barang</td>
                <td>Harga</td>
                <td>Karyawan</td>
                <td>Tanggal</td>
            </tr>
                <?php
                $query=mysqli_query($koneksi,"SELECT list_barang.id_barang, list_barang.nama_barang, list_barang.harga, transaksi.tanggal_pembayaran, karyawan.nama_karyawan FROM transaksi , list_barang, karyawan WHERE transaksi.id_barang = list_barang.id_barang AND transaksi.id_karyawan = karyawan.id_karyawan");
                $i=1;
                while($data=mysqli_fetch_array($query)){
                ?>
            <tr align="center">
                <td><?php echo $i++  ?></td>
                <td><?php echo $data['nama_barang']  ?></td>
                <td><?php echo $data['harga']  ?></td>
                <td><?php echo $data['nama_karyawan']  ?></td>
                <td><?php echo $data['tanggal_pembayaran']  ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <?php
        }
        ?>
    </div>
</div>
</body>
</html>