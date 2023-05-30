<?php
include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="karyawan/css/style.css">
    <title>AnMart | List Barang</title>
</head>
<body>
<div class="card" style="margin-top: 45px">
  <div class="card-header ">
    <h3>Daftar Barang</h3>
  </div>
  <button class="btn btn-light btn-sm"><a href="?page=list-barang/create" style=" color: #45f3ff; text-decoration: none;">| Tambah |</a></button>
  <div class="card" style="width: 100%;">
  <div class="card-body">
  <table border="0px" class="table" style="color: #45f3ff;">
        <tr align="center">
            <td>ID</td>
            <td>NAMA</td>
            <td>HARGA</td>
            <td>ACTION</td>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "select * from list_barang");
        while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr align="center">
                <td><?php echo $data['id_barang'] ?></td>
                <td><?php echo $data['nama_barang'] ?></td>
                <td><?php echo $data['harga'] ?></td>
                <td>
                    <button class="btn btn-light btn-sm" style=" color: #45f3ff;><a href="?page=list-barang/change&id_barang=<?php echo $data['id_barang'] ?>" style=" color: black; text-decoration: none;">Change</a></button>
                    <button class="btn btn-light btn-sm" style=" color: #45f3ff;><a href="?page=list-barang/delete&id_barang=<?php echo $data['id_barang'] ?>" style=" color: black; text-decoration: none;">Delete</a></button>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
  </div>
</div>
</div>
</body>
</html>