<?php
if(isset($_POST["konfirmasi"])){
  $id_fotovideografer = $_POST["konfirmasi"];
  $username = $_POST["username"];
  $token = md5($id_fotovideografer.$username);
  $sql = "UPDATE fotovideografer SET `token` = '$token' WHERE `id_fotovideografer` = $id_fotovideografer";
  $query = mysqli_query($koneksi, $sql);
  header("Location:index.php?include=detail-konfirmasi-fotovideografer&data=$id_fotovideografer&notif=inputtokenberhasil");
}
?>