<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnMart | Transaksi</title>
    <link rel="stylesheet" href="style/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap4.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="transaksi/css/transaksi.css">
</head>
<body>
<div class="row justify-content-center mt-5">
    <div class="judul mb-5" style="font-family: arial; text-align:center;">
        <h2>Transaksi</h2>
    </div>
<div class="card shadow mt-2" style="background: #28292d; width: 1100px; justify-content:center; align-content:center;">
    <div class="card-header" style="font-family: arial;">
<div class="container">
    <div class="card-body">
    <div>
    <form action="?page=transaksi/index" method="POST">
    <div class="mb-3">
        List Barang : <select style="color: #45f3ff; background: #28292d" class="form-select" name="id_barang" id="" required>
            <option value="" align="center" >Tambah Belanjaan Disini</option>
            <?php
            $query=mysqli_query($koneksi, "select * from list_barang");
            while ($data = mysqli_fetch_array($query)){
                ?>
                <option value="<?php echo $data['id_barang']; ?>" align="center"><?php echo $data['nama_barang'] ?></option>
            <?php
            }
            ?>
            </select>
        </div>
        <button style="width: 100%; color: #45f3ff" class="btn btn-dark" name="add" type="submit">Add</button>
        <div class="mb-3">
        </div>
        </form>
    </div>
    <?php
        if (isset($_POST['add'])){
            $id_barang=$_POST['id_barang'];
            $tanggal_pembayaran=date('Y-m-d');
            $query = mysqli_query($koneksi, "INSERT INTO transaksi (id, id_barang, tanggal_pembayaran) VALUES (NULL, '$id_barang', '$tanggal_pembayaran')");
            echo "Pembayaran Berhasil";
            }
        ?>

    <table class="table" style="color: #45f3ff;">
        <tr>
            <td>No</td>
            <td>Barang</td>
            <td>Harga</td>
            <td>Tanggal</td>
            <td>Action</td>
        </tr>
        <?php
        $no=1;
        $query=mysqli_query($koneksi,"SELECT list_barang.nama_barang,list_barang.harga,transaksi.id,transaksi.tanggal_pembayaran
        FROM list_barang
        JOIN transaksi ON transaksi.id_barang= list_barang.id_barang
        WHERE
        transaksi.status = 0");
        $total=0;
          while ($data=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama_barang'] ?></td>
                <td><?php echo $data['harga'] ?></td>
                <td><?php echo $data['tanggal_pembayaran'] ?></td>
                <td><button class="btn btn-light btn-sm"><a style="color:black; text-decoration: none;" href="?page=transaksi/delete&id=<?= $data['id']?> ">Hapus</a></button></td>
            </tr>
            <?php
            $total=$total + ($data['harga']);
          }
          ?>
                      <tr>
                <td colspan="2">Total</td>
                <td><?php echo $total; ?></td>
                <td></td>
            </tr> 
    </table>
    <div>
    <form action="?page=transaksi/index" method="POST">
        <button class="btn btn-dark" name="update" type="submit" style="width:100%; color: #45f3ff">Done</button>
        </form>
    </div>
    <?php
        if(isset($_POST['update'])){
            $query=mysqli_query($koneksi, "select max(nota) as nota from transaksi");
            $data=mysqli_fetch_array($query);
            $query=mysqli_query($koneksi, "select max(nota) as nota, tanggal_pembayaran from transaksi");
            $nota=$data['nota']+1;
            $id_karyawan = $_SESSION['id_karyawan'];
            $query = mysqli_query($koneksi, "update transaksi set nota='$nota',status='1',id_karyawan='$id_karyawan' where status='0'");
            echo "Transaksi Selesai Silahkan Refresh Kembali Halaman!";
    }
?>
</div>
    </div>
</div>
</div>
</body>
</html>



    