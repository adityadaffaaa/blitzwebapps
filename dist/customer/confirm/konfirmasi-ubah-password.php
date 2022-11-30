<?php
if(isset($_SESSION['id_customer'])){
$id_customer = $_SESSION['id_customer'];
$pwlama = $_POST['pwlama'];
$passlama = mysqli_escape_string($koneksi, MD5($pwlama));
$pwbaru = $_POST['pwbaru'];
$passbaru = mysqli_escape_string($koneksi, MD5($pwbaru));
$konfirmasipwbaru = $_POST['konfirmasipwbaru'];
$konfirmasipassbaru = mysqli_escape_string($koneksi, MD5($konfirmasipassbaru));


if(empty($pwlama)){
  header("Location:index.php?include=ubah-password&notif=editkosong&jenis=Password lama harus diisi");
} else if(empty($pwbaru)){
  header("Location:index.php?include=ubah-password&notif=editkosong&jenis=Password baru harus diisi");
} else if(empty($konfirmasipwbaru)){
  header("Location:index.php?include=ubah-password&notif=editkosong&jenis=Konfirmasi password baru harus diisi");
}else {
  $sql_pwlama = "SELECT * FROM `customer` WHERE `password` = '$passlama'  AND `id_customer` = $id_customer ";
  $query_pwlama = mysqli_query($koneksi, $sql_pwlama);
  if(mysqli_num_rows($query_pwlama)===1){
    if($pwbaru == $konfirmasipwbaru){
      $sql_pwbaru = "UPDATE `customer` SET `password` = '$passbaru' WHERE `id_customer`= $id_customer ";
      mysqli_query($koneksi, $sql_pwbaru);
    header("Location:index.php?include=ubah-password&notif=editberhasil");
    }else{
    header("Location:index.php?include=ubah-password&notif=editkosong&jenis=Konfirmasi password salah");
    }
  }else{
    header("Location:index.php?include=ubah-password&notif=editkosong&jenis=Password lama salah");
  }

}
}


?>