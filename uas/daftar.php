<?php
session_start();
?>
<!DOCTYPE html>
<!-- CodingMaker-->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <!--CSS Style-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <title>SPP | Login</title>
    <link rel="stylesheet" href="src/css/style_daftar.css">
 </head>
<style>
  .buttom {
    color: white;
    margin-top: 20px;
    font-size: 15px;
  }
</style>
 <body> 
    
    <form action="register.php" method="POST">
      <div class="box"> 
          <div class="form">
  
          <h2> Registrasi </h2>
            <div class="inputbox">
              <input type="text" required="required" name="nama_karyawan" >
              <span>Nama Karyawan</span>
              <i></i>
            </div>

            <div class="inputbox">
            <input type="text" required="required" name="alamat_karyawan" >
            <span>Alamat Karyawan</span>
            <i></i>
          </div>

          <div class="inputbox">
            <input type="text" required="required" name="no_tlpn" >
            <span>No Karyawan</span>
            <i></i>
          </div>

          <div class="inputbox">
            <input type="text" required="required" name="username" >
            <span>Username </span>
            <i></i>
          </div>

          <div class="inputbox">
            <input type="password" required="required" name="password" >
            <span>Password</span>
            <i></i>
          </div>
          
            <input type="submit" value="Login" name="daftar">
            <div class="buttom">
              <p>Sudah Punya akun?
                <a href="login.php">Login Disini</a>
              </p>
            </div>
      </div>
    </div>
    </form>
    </body>
</html>

  

