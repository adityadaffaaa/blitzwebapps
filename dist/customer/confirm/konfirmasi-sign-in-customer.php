<?php
include("../koneksi/koneksi.php");
if(isset($_POST["signin"])){
  $username = $_POST["username"];
  $pass = $_POST["password"];
  $password = mysqli_escape_string($koneksi, md5($pass));
  if(empty($username)){
   header("Location:index.php?include=sign-in-customer&notif=username kosong");
  } else if (empty($pass)){
    header("Location:index.php?include=sign-in-customer&notif=password kosong");
  } else{
    $sql_signin = "SELECT `id_customer`, `level` FROM `customer` WHERE `username` = '$username' AND  `password` = '$password'";
    $query_signin = mysqli_query($koneksi, $sql_signin);
    if(mysqli_num_rows($query_signin) === 1){
      while($data = mysqli_fetch_row($query_signin)){
        session_start();
        $id_customer = $data[0];
        $level = $data[1];
        $_SESSION["id_customer"]= $id_customer;
        $_SESSION["level"] = $level;
        header("Location:index.php?include=beranda");
      }
    } else{
      header("Location:index.php?include=sign-in-customer&notif=username dan password salah");
    }
  }
}
?>