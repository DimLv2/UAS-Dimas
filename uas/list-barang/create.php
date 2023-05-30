<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnMart | Create Barang</title>
</head>
<body>
    <form action="?page=list-barang/save" method="POST">
        <div class="card" style="margin-top: 45px;">
          <div class="card-header ">
            <h1>Create List Barang</h1>
          </div>
        <div class="card" style="width: 100%;">
          <div class="card-body">
            <div>
                <label>Nama Barang</label>
                <input class="form-control" type="text" name="nama_barang">
            </div>
            <div>
                <label>Harga Barang</label>
                <input class="form-control" type="text" name="harga">
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