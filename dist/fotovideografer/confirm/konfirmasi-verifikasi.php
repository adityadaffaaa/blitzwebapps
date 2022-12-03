<?php
if(isset($_SESSION["id_fotovideografer"])){
  $id_fotovideografer = $_SESSION["id_fotovideografer"];
  $input_token = $_POST["token"];
  $status = "terverifikasi";
  if(empty($input_token)){
    header("Location:index.php?include=sign-in-verifikasi&notif=kesalahan&jenis=token belum diisi");
  } else {
    $sql = "SELECT `token` FROM `fotovideografer` WHERE `id_fotovideografer` = $id_fotovideografer";
    $query = mysqli_query($koneksi, $sql);
    while($data = mysqli_fetch_row($query)){
      $token = $data[0];
    }
    if($token != $input_token){
      header("Location:index.php?include=sign-in-verifikasi&notif=kesalahan&jenis=token yang Anda masukkan salah");
    } else{
      $sql_verifikasi = "UPDATE `fotovideografer` SET `status` = '$status' WHERE `id_fotovideografer` = $id_fotovideografer";
      mysqli_query($koneksi, $sql_verifikasi);
      header("Location:index.php?include=beranda&notif=terverifikasi");
    }
  }
}
?>