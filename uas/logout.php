<?php
session_start();
session_destroy();
$_SESSION['status']="";
header("location:login.php");
?>