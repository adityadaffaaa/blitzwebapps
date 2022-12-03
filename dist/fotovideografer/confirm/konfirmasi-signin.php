<?php
if(isset($_POST["signin"])){
  $username = $_POST["username"];
  $pass = $_POST["password"];
  $password = mysqli_escape_string($koneksi, md5($pass));
  
  if(empty($username)){
    header("Location:index.php?notif=Username kosong");
  } else if(empty($pass)){
    header("Location:index.php?notif=Password kosong");
  } else {
    $sql = "SELECT `id_fotovideografer`,`token`,`status` 
    FROM `fotovideografer` 
    WHERE `username` = '$username'
    AND `password` = '$password'";
    $query = mysqli_query($koneksi, $sql);
    $jml = mysqli_num_rows($query);    
    if($jml === 1){
      while($data = mysqli_fetch_row($query)){
        $id_fotovideografer = $data[0];
        $token = $data[1];
        $status = $data[2];
        }
      if($token==null){
        header("Location:index.php?notif=Data belum divalidasi");
      } else if($status == "belum verifikasi" && $token != null) {
        session_start();
        $_SESSION["id_fotovideografer"] = $id_fotovideografer;
        header("Location:index.php?include=sign-in-verifikasi");
      } else {
        session_start();
        $_SESSION["id_fotovideografer"] = $id_fotovideografer;
        header('Location:index.php?include=beranda');
      }
    } else {
      header("Location:index.php?notif=username dan password salah");
    }
  }
}
?>