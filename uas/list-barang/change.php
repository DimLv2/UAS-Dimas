<?php
include "koneksi.php";
$id_barang = $_GET ['id_barang'];
$query = mysqli_query($koneksi, "select * from list_barang where id_barang =('$id_barang')");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnMart | Change Barang</title>
</head>
<body>

<form action="?page=list-barang/update" method="POST">
        <div class="card" style="margin-top: 45px;">
          <div class="card-header ">
            <h1>Change Barang</h1>
          </div>
        <div class="card" style="width: 100%;">
          <div class="card-body">
              <div>
                  <label>Id</label>
                  <input class="form-control" type="text" name="id_barang" value="<?php echo $data['id_barang'] ?>" readonly>
              </div>
            <div>
                <label>Nama Barang</label>
                <input class="form-control" type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>">
            </div>
            <div>
                <label>Harga</label>
                <input class="form-control" type="text" name="harga" value="<?php echo $data['harga']  ?>">
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