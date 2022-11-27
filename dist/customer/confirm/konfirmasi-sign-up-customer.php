<?php
include ("../koneksi/koneksi.php");
if(isset($_POST["signup"])){
  $nama = $_POST["nama"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $pass = $_POST["password"];
  $konfirmasipass = $_POST["konfirmasi-password"];
  $password = mysqli_real_escape_string($koneksi, md5($pass));
  $konfirmasipw = mysqli_real_escape_string($koneksi, md5($konfirmasipass));
  if(empty($nama)){
    header("Location:index.php?include=sign-up-customer&notif=nama kosong");
  } else if(empty($username)){
    header("Location:index.php?include=sign-up-customer&notif=username kosong");
  } else if(empty($email)){
    header("Location:index.php?include=sign-up-customer&notif=email kosong");
  } else if(empty($pass)){
    header("Location:index.php?include=sign-up-customer&notif=password kosong");
  } else if(empty($konfirmasipass)){
    header("Location:index.php?include=sign-up-customer&notif=konfirmasi password kosong");
  } else if($password != $konfirmasipw){
    header("Location:index.php?include=sign-up-customer&notif=konfirmasi password tidak sama");
  } else{
    $sql_signup ="INSERT INTO `customer` (`nama`, `username`, `email`,`password`)
    VALUES ('$nama','$username','$email','$password');";
    mysqli_query($koneksi, $sql_signup);
    header("Location:index.php?include=sign-in-customer&notif=daftar berhasil");
  }

  
}
?>