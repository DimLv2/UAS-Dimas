<?php
session_start();
if($_SESSION['status'] != "sukses"){
  header('location:logout.php');
}
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="src/css/nav.css">
    </head>
    <body style="background-color: #23242a;">
    <nav style="background-color: #23242a;" class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a style="color:#45f3ff;=" class="navbar-brand" href="#">AnMart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div  class="collapse navbar-collapse" id="navbarNav" >
      <ul  class="navbar-nav position-absolute top-50 start-50 translate-middle"">
        <li style="background-color: #45f3ff; margin-right:10px" class="nav-item">
          <a class="nav-link" href="?page=karyawan/index">Karyawan</a>
        </li>
        <li style="background-color: #45f3ff; margin-right:10px" class="nav-item">
          <a class="nav-link" href="?page=list-barang/index">List Barang</a>
        </li>
        <li style="background-color: #45f3ff; margin-right:10px" class="nav-item">
          <a class="nav-link" href="?page=transaksi/index">Transaksi</a>
        </li>
        <li style="background-color: #45f3ff; margin-right:10px" class="nav-item">
          <a class="nav-link" href="?page=laporan-per-tanggal/index">Laporan Per Tanggal</a>
        </li>

      </ul>
      <div class="dropdown ms-auto">
  <a  style="background-color: #23242a;" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    <?= $_SESSION['nama']; ?>
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
  </ul>
</div>
    </div>
  </div>
</nav>
<div class="container">
    <?php
    include "isi.php";
    ?>
</div>
    </body>
</html>