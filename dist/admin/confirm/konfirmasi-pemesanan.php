<?php 
if(isset($_POST["simpan"])){
  $id_pemesanan = $_POST["simpan"];
  $status_sd = "sudah dikonfirmasi";
  $status_diselesaikan = "selesai";
  $sql_verif = "SELECT `status` FROM `pemesanan` WHERE `id_pemesanan` = $id_pemesanan";
  $query_verif = mysqli_query($koneksi, $sql_verif) ;
  while($data_verif = mysqli_fetch_row($query_verif)){
    $status_verif = $data_verif[0]; 
  }
  if($status_verif == "selesai"){
    header("Location:index.php?include=detail-pemesanan&data=$id_pemesanan&notif=pemesanansudahselesai");
  }else if($status_verif == "belum dikonfirmasi"){
    $sql = "UPDATE `pemesanan` SET `status` = '$status_sd' WHERE `id_pemesanan` = $id_pemesanan";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=detail-pemesanan&data=$id_pemesanan&notif=behasildikonfirmasi");
  } else {
    $sql = "UPDATE `pemesanan` SET `status` = '$status_diselesaikan' WHERE `id_pemesanan` = $id_pemesanan";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=detail-pemesanan&data=$id_pemesanan&notif=behasildiselesaikan");
  }

}
?>