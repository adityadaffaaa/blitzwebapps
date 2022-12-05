<?php  
if(isset($_SESSION["id_fotovideografer"])){
  $id_fotovideografer = $_SESSION["id_fotovideografer"];
  $chat = $_POST["chat"];
  $pengirim = "fotovideografer";
  if(empty($chat)){
   header("Location:index.php?include=chat&notif=chatkosong");
  } else{
    $sql_chat = "INSERT INTO `chat_admin` (`chat`) 
    VALUES ('$chat')";
    $query_chat = mysqli_query($koneksi, $sql_chat);
    $id_chat = mysqli_insert_id($koneksi);
    $sql_chat_fotovideografer = "INSERT INTO `chat_admin_fotovideografer` (`id_chat`, `id_fotovideografer`, `pengirim`)
    VALUES ('$id_chat','$id_fotovideografer','$pengirim')";
    mysqli_query($koneksi, $sql_chat_fotovideografer);
    header("Location:index.php?include=chat&notif=pesanterkirim");
  }
}


?>