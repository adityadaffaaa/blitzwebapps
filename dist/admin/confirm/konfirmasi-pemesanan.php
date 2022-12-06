<?php 
if(isset($_POST["simpan"])){
  $id_pemesanan = $_POST["simpan"];
  $status = "sudah dikonfirmasi";

  $sql_verif = "SELECT `status` FROM `pemesanan` WHERE `id_pemesanan` = $id_pemesanan";
  $query_verif = mysqli_query($koneksi, $sql_verif) ;
  while($data_verif = mysqli_fetch_row($query_verif)){
    $status_verif = $data_verif[0]; 
  }
  if($status_verif == "selesai"){
    header("Location:index.php?include=detail-pemesanan&data=$id_pemesanan&notif=pemesanansudahselesai");
  }else{
    $sql = "UPDATE `pemesanan` SET `status` = '$status' WHERE `id_pemesanan` = $id_pemesanan";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=detail-pemesanan&data=$id_pemesanan&notif=behasildikonfirmasi");
  }

}
?>