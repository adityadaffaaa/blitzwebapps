<?php
if(isset($_SESSION["id_fotovideografer"])){
  $id_fotovideografer = $_SESSION["id_fotovideografer"];
  $nama = $_POST["nama"];
  $username = $_POST["username"];
  $jenis_kelamin = $_POST["jeniskelamin"];
  $usia = $_POST["usia"];
  $email = $_POST["email"];
  $no_telp = $_POST["notelepon"];
  $nik = $_POST["nik"];
  $alamat = $_POST["alamat"];
  $instagram = $_POST["instagram"];
  $deskripsi_pribadi = $_POST["deskripsipribadi"];
  $role = $_POST["role"];

  $sql_foto = "SELECT `foto` FROM `fotovideografer` WHERE `id_fotovideografer` = '$id_fotovideografer'";
  $query_foto = mysqli_query($koneksi, $sql_foto);
  while($data_foto = mysqli_fetch_row($query_foto)){
    $foto = $data_foto[0];
  }
  $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = './assets/img/'.$nama_file;
  if(empty($nama)){
    header("Location:index.php?include=pengaturan&notif=kesalahan&jenis=nama harus diisi");
  }else if(empty($username)){
    header("Location:index.php?include=pengaturan&notif=kesalahan&jenis=username harus diisi");
  }else if(empty($jenis_kelamin)){
    header("Location:index.php?include=pengaturan&notif=kesalahan&jenis=jenis kelamin harus diisi");
  }else if(empty($usia)){
    header("Location:index.php?include=pengaturan&notif=kesalahan&jenis=usia harus diisi");
  }else if(empty($email)){
    header("Location:index.php?include=pengaturan&notif=kesalahan&jenis=email harus diisi");
  }else if(empty($no_telp)){
    header("Location:index.php?include=pengaturan&notif=kesalahan&jenis=no telepon harus diisi");
  }else if(empty($nik)){
    header("Location:index.php?include=pengaturan&notif=kesalahan&jenis=nik harus diisi");
  }else if(empty($alamat)){
    header("Location:index.php?include=pengaturan&notif=kesalahan&jenis=alamat harus diisi");
  }else if(empty($instagram)){
    header("Location:index.php?include=pengaturan&notif=kesalahan&jenis=instagram harus diisi");
  }else if(empty($deskripsi_pribadi)){
    header("Location:index.php?include=pengaturan&notif=kesalahan&jenis=deskripsi pribadi harus diisi");
  }else if(empty($role)){
    header("Location:index.php?include=pengaturan&notif=kesalahan&jenis=role harus diisi");
  }else if(empty($nama_file) && $foto == null){
    header("Location:index.php?include=pengaturan&notif=kesalahan&jenis=foto harus diisi");
  } else {
    if (move_uploaded_file($lokasi_file, $direktori)) {
      if(!empty($foto)){
        unlink("./assets/img/$foto");
      }
      $sql = "UPDATE `fotovideografer` SET `nama` = '$nama', `username` = '$username',
       `jenis_kelamin` = '$jenis_kelamin', `usia`= '$usia', `email` = '$email',
       `no_telp` = '$no_telp', `nik` = '$nik', `alamat`= '$alamat', `instagram` = '$instagram',
       `deskripsi_pribadi` = '$deskripsi_pribadi',`role`= '$role',`foto`='$nama_file'
       WHERE `id_fotovideografer` = $id_fotovideografer";
      mysqli_query($koneksi, $sql);
    } else {
      $sql = "UPDATE `fotovideografer` SET `nama` = '$nama', `username` = '$username',
       `jenis_kelamin` = '$jenis_kelamin', `usia`= '$usia', `email` = '$email',
       `no_telp` = '$no_telp', `nik` = '$nik', `alamat`= '$alamat', `instagram` = '$instagram',
       `deskripsi_pribadi` = '$deskripsi_pribadi',`role`= '$role'
       WHERE `id_fotovideografer` = $id_fotovideografer";
      mysqli_query($koneksi, $sql);      
    }
    header("Location:index.php?include=pengaturan&notif=berhasil");
  }
}
?>