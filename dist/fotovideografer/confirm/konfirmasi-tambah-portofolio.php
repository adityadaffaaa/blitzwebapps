<?php
if(isset($_SESSION["id_fotovideografer"])){
  $id_fotovideografer = $_SESSION["id_fotovideografer"];
  $foto = $_FILES["foto"]["name"];
  $video = $_FILES["video"]["name"];
  $sql_verif = "SELECT `role` FROM `fotovideografer` WHERE `id_fotovideografer` = $id_fotovideografer";
  $query_verif = mysqli_query($koneksi, $sql_verif);
  while($data_verif = mysqli_fetch_row($query_verif)){
    $role = $data_verif[0];
  }
  if(empty($foto) && $role == "fotografer"){
    header("Location:index.php?include=portofolio&notif=fotokosong");    
  } else if(empty($video) && $role == "videografer"){
    header("Location:index.php?include=portofolio&notif=videokosong");    
  } else {
    if($role=="fotografer"){
      $sql_foto = "INSERT INTO `portofolio` (`id_fotovideografer`, `portof_foto`)
      VALUES ('$id_fotovideografer', '$foto')";
      mysqli_query($koneksi, $sql_foto);
      header("Location:index.php?include=portofolio&notif=fotoberhasil"); 
    }else if($role == "videografer"){
      $sql_video = "INSERT INTO `portofolio` (`id_videografer`, `portof_video`)
      VALUES ('$id_fotovideografer', '$video')";
      mysqli_query($koneksi, $sql_video);
      header("Location:index.php?include=portofolio&notif=videoberhasil"); 
    }else if($role == "fotografer dan videografer"){
      if(empty($video)){
        $sql_foto_fotovideo = "INSERT INTO `portofolio` (`id_fotovideografer`, `portof_foto`)
        VALUES ('$id_fotovideografer', '$foto')";
        mysqli_query($koneksi, $sql_foto_fotovideo);
        header("Location:index.php?include=portofolio&notif=fotoberhasil");
      } else if (empty($foto)) {
        $sql_video_fotovideo = "INSERT INTO `portofolio` (`id_videografer`, `portof_video`)
      VALUES ('$id_fotovideografer', '$video')";
      mysqli_query($koneksi, $sql_video_fotovideo);
      header("Location:index.php?include=portofolio&notif=videoberhasil"); 
      
      }
       
    }
  }
}
?>