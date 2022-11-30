<?php
$id_customer = $_SESSION["id_customer"];
$rating = $_POST["rate"];
$deskripsi = $_POST["deskripsi"];
$isi = $_POST["pesan"];

if(empty($rating)){
  header("Location:index.php?include=ulasan&notif=rating kosong");
}else if(empty($deskripsi)){
  header("Location:index.php?include=ulasan&notif=deskripsi kosong");
}else if(empty($isi)){
  header("Location:index.php?include=ulasan&notif=pesan kosong");
}else{
  $sql_ulasan = "INSERT INTO `ulasan` (`id_customer`, `deskripsi`,`isi`,`rating`)
 VALUES ('$id_customer', '$deskripsi','$isi','$rating')";
 $query_ulasan = mysqli_query($koneksi,$sql_ulasan);
 header("Location:index.php?include=ulasan&notif=berhasil");
}
?>