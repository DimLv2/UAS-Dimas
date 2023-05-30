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
    <title>AnMart | Karyawan</title>
</head>
<body>
<div class="card" style="margin-top: 45px">
  <div class="card-header ">
    <h3>Daftar Karyawan</h3>
  </div>
  <button id="tambah" class="btn btn-light btn-sm"><a href="?page=karyawan/create" style=" color: #45f3ff; text-decoration: none;">| Tambah |</a></button>
  <div class="card" style="width: 100%;">
  <div class="card-body">
  <table border="0px" class="table" style="color: #45f3ff;">
        <tr align="center">
            <td>ID</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
            <td>NO TLPN</td>
            <td>USERNAME</td>
            <td>PASSWORD</td>
            <td>ACTION</td>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "select * from karyawan");
        while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr align="center">
                <td><?php echo $data['id_karyawan'] ?></td>
                <td><?php echo $data['nama_karyawan'] ?></td>
                <td><?php echo $data['alamat_karyawan'] ?></td>
                <td><?php echo $data['no_tlpn'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td>
                    <button style="background-color: #45f3ff;" class="btn"><a href="?page=karyawan/change&id_karyawan=<?php echo $data['id_karyawan'] ?>" style=" color: black; text-decoration: none;">Change</a></button>
                    <button style="background-color: #45f3ff;" class="btn"><a href="?page=karyawan/delete&id_karyawan=<?php echo $data['id_karyawan'] ?>" style=" color: black; text-decoration: none;">Delete</a></button>
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