<?php
session_start();
include "koneksi.php";
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
    <link rel="stylesheet" href="src/css/style.css">
 </head>
<style>
  .buttom {
    color: white;
    margin-top: 20px;
    font-size: 15px;
  }
</style>
 <body> 
    
    <form method="POST">
      <div class="box"> 
          <div class="form">
  
          <h2>Sign in </h2>
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
            <input type="submit" value="Login" name="masuk">
            <div class="buttom">
              <p>Belum Punya akun?
                <a href="daftar.php">Register Disini</a>
              </p>
            </div>
      </div>
    </div>
    </form>
    </body>
</html>
        <?php 
        if (isset($_POST['masuk'])){
            $user = $_POST['username'];
            $password =$_POST['password'];


            $query = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE username='$user' AND password='$password'");
            $cek = mysqli_num_rows($query);
            if ($cek==1){
              $data=mysqli_fetch_array($query);
              $_SESSION['nama']=$data['nama_karyawan'];
              $_SESSION['username']=$data['username'];
              $_SESSION['status']="sukses";
              $_SESSION['id_karyawan']=$data['id_karyawan'];
              header("location:index.php");
              exit;
            }
            else {
                echo "Maaf anda tidak bisa login";
            }
        }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>