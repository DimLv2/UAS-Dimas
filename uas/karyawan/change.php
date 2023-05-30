<?php
include "koneksi.php";
$id_karyawan = $_GET ['id_karyawan'];
$query = mysqli_query($koneksi, "select * from karyawan where id_karyawan =('$id_karyawan')");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnMart | Change Karyawan</title>
</head>
<body>

<form action="?page=karyawan/update" method="POST">
        <div class="card" style="margin-top: 45px;">
          <div class="card-header ">
            <h1>Change Karyawan</h1>
          </div>
        <div class="card" style="width: 100%;">
          <div class="card-body">
              <div>
                  <label>Id</label>
                  <input class="form-control" type="text" name="id_karyawan" value="<?php echo $data['id_karyawan'] ?>" readonly>
              </div>
            <div>
                <label>Nama Karyawan</label>
                <input class="form-control" type="text" name="nama_karyawan" value="<?php echo $data['nama_karyawan'] ?>">
            </div>
            <div>
                <label>Alamat Karyawan</label>
                <input class="form-control" type="text" name="alamat_karyawan" value="<?php echo $data['alamat_karyawan']  ?>">
            </div>
            <div>
                <label>No Karyawan</label>
                <input class="form-control" type="text" name="no_tlpn" value="<?php echo $data['no_tlpn'] ?>">
            </div>
            <div>
                <label>Username</label>
                <input class="form-control" type="text" name="username" value="<?php echo$data['username'] ?>">
            </div>
            <div>
                <label>Password</label>
                <input class="form-control" type="text" name="password" value="<?php echo $data['password']?>">
            </div>
            <div class="button mt-3">
                <button class="btn btn-dark"><a style="color: white; text-decoration: none;">Save</a></button>
            </div>
          </div>
        </div>
        </div>
    </form>
</body>
</html>