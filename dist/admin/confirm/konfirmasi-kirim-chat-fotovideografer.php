<?php  
  $id_fotovideografer = $_POST["id"];
  $chat = $_POST["chat"];
  $pengirim = "admin";
  if(empty($chat)){
   header("Location:index.php?include=detail-chat-fotovideografer&data=$id_fotovideografer&notif=chatkosong");
  } else{
    $sql_chat = "INSERT INTO `chat_admin` (`chat`) 
    VALUES ('$chat')";
    $query_chat = mysqli_query($koneksi, $sql_chat);
    $id_chat = mysqli_insert_id($koneksi);
    $sql_chat_fotovideografer = "INSERT INTO `chat_admin_fotovideografer` (`id_chat`, `id_fotovideografer`, `pengirim`)
    VALUES ('$id_chat','$id_fotovideografer','$pengirim')";
    mysqli_query($koneksi, $sql_chat_fotovideografer);
    header("Location:index.php?include=detail-chat-fotovideografer&data=$id_fotovideografer&notif=pesanterkirim");
  }

?>