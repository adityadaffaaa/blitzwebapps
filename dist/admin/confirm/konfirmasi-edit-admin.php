<?php
if(isset($_POST["simpan"])){
  $id_admin = $_POST["simpan"];
  $nama= $_POST["nama"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $no_telp = $_POST["notelepon"];
  
  $sql_foto = "SELECT `foto` FROM `admin` WHERE `id_admin` = '$id_admin'";
  $query_foto = mysqli_query($koneksi, $sql_foto);
  while($data_foto=mysqli_fetch_row($query_foto)){
    $foto=$data_foto[0];
  }
  if(empty($nama)){
    header("Location:index.php?include=edit-admin&notif=editkosong&jenis=nama");
}else if(empty($username)){
    header("Location:index.php?include=edit-admin&notif=editkosong&jenis=username");
}else if(empty($email)){
    header("Location:index.php?include=edit-admin&notif=editkosong&jenis=email");
}else if(empty($no_telp)){
    header("Location:index.php?include=edit-admin&notif=editkosong&jenis=no telepon");
}else{
      $lokasi_file = $_FILES['foto']['tmp_name'];
  $nama_file = $_FILES['foto']['name'];
  $direktori = './assets/img/'.$nama_file;
  if(move_uploaded_file($lokasi_file,$direktori)){
               if(!empty($foto)){
                   unlink("./assets/img/$foto");
                }
     $sql = "update `admin` set `nama`='$nama', `username`='$username', 
                `email`='$email',`no_telp`= $no_telp, `foto`='$nama_file' 
                where `id_admin`='$id_admin'";
                //echo $sql;
     mysqli_query($koneksi,$sql);
  }else{
     $sql = "update `admin` set `nama`='$nama',`username`='$username',  `email`='$email',`no_telp`= $no_telp
                where `id_admin`='$id_admin'";
                //echo $sql;
     mysqli_query($koneksi,$sql);
    }
   
          header("Location:index.php?include=data-admin&notif=editberhasil");
}
}
?>