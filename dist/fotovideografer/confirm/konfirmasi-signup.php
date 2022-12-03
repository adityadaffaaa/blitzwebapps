<?php
if(isset($_POST["signup"])){
  $nama = $_POST["nama"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $no_telp = $_POST["notelepon"];
  $jenis_kelamin = $_POST["jeniskelamin"];
  $usia = $_POST["usia"];
  $nik = $_POST["nik"];
  $alamat = $_POST["asal"];
  $role = $_POST["role"];
  $portofolio = $_POST["portofolio"];
  $pass = $_POST["password"];
  $konfirmasipw = $_POST["konfirmasipw"];
  $status = "belum verifikasi";
  $password = mysqli_escape_string($koneksi, md5($pass));

  if(empty($nama)){
    header("Location:index.php?include=signup&notif=Nama kosong");
  } else if(empty($username)){
    header("Location:index.php?include=signup&notif=Username kosong");
  } else if(empty($email)){
    header("Location:index.php?include=signup&notif=Email kosong");
  } else if(empty($no_telp)){
    header("Location:index.php?include=signup&notif=No telepon kosong");
  } else if(empty($jenis_kelamin)){
    header("Location:index.php?include=signup&notif=Jenis kelamin kosong");
  } else if(empty($usia)){
    header("Location:index.php?include=signup&notif=Usia kosong");
  } else if(empty($role)){
    header("Location:index.php?include=signup&notif=Role kosong");
  } else if(empty($portofolio)){
    header("Location:index.php?include=signup&notif=Portofolio kosong");
  } else if(empty($pass)){
    header("Location:index.php?include=signup&notif=Password kosong");
  } else if(empty($konfirmasipw)){
    header("Location:index.php?include=signup&notif=Konfirmasi password kosong");
  } else if($pass!=$konfirmasipw){
    header("Location:index.php?include=signup&notif=Konfirmasi password tidak sama");
  } else {
    $sql = "INSERT INTO fotovideografer (`nama`,`username`,`email`,`no_telp`,`jenis_kelamin`,`usia`,`nik`,`alamat`,`role`,`link_portofolio`,`password`,`status`)
    VALUES ('$nama','$username','$email','$no_telp','$jenis_kelamin','$usia','$nik','$alamat','$role','$portofolio','$password','$status')";
    $query = mysqli_query($koneksi, $sql);
    header("Location:index.php?notif=daftar berhasil");
  }
}
?>