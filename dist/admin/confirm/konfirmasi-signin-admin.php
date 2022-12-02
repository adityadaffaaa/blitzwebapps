<?php
include("../koneksi/koneksi.php");
  if(isset($_POST['signin'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $password = mysqli_real_escape_string($koneksi, md5($pass));
    if(empty($username)){
      header("Location:index.php?notif=username kosong");
    } else if(empty($pass)){
      header("Location:index.php?notif=password kosong");
    } else {
      $sql_signin = "SELECT `id_admin`, `level` FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
      $query_signin = mysqli_query($koneksi, $sql_signin);
      if(mysqli_num_rows($query_signin) ===1){
        session_start();
        while($data = mysqli_fetch_row($query_signin)){
          $id_admin = $data[0];
          $level = $data[1];
          $_SESSION["id_admin"] = $id_admin;
          $_SESSION["level_admin"]  = $level;
          header("Location:index.php?include=profil");
        }

      } else{
        header("Location:index.php?notif=username dan password salah");
      }
    }
  }
?>