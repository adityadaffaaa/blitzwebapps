<?php  
if(isset($_SESSION["id_customer"])){
  $id_customer = $_SESSION["id_customer"];
  $chat = $_POST["chat"];
  $pengirim = "customer";
  if(empty($chat)){
    if(isset($_GET["include"])){
      $include = $_GET["include"];
      if($include=="konfirmasi-chat-admin-beranda"){
        header("Location:index.php?include=beranda&notif=chatkosong");
    }
    if($include=="konfirmasi-chat-admin-jasakami"){
      header("Location:index.php?include=jasa-kami&notif=chatkosong");
    }
    if($include=="konfirmasi-chat-admin-riwayat"){
      header("Location:index.php?include=riwayat&notif=chatkosong");
    }
    if($include=="konfirmasi-chat-admin-portofolio"){
      header("Location:index.php?include=portofolio&notif=chatkosong");
    }
    if($include=="konfirmasi-chat-admin-ulasan"){
      header("Location:index.php?include=ulasan&notif=chatkosong");
    }
    }
  
  } else{
    $sql_chat = "INSERT INTO `chat_cs` (`chat`) 
    VALUES ('$chat')";
    $query_chat = mysqli_query($koneksi, $sql_chat);
    $id_chat = mysqli_insert_id($koneksi);
    $sql_chat_customer = "INSERT INTO `chat_admin_customer` (`id_chat`, `id_customer`, `pengirim`)
    VALUES ('$id_chat','$id_customer','$pengirim')";
    mysqli_query($koneksi, $sql_chat_customer);
    if(isset($_GET["include"])){
      $include = $_GET["include"];
      if($include=="konfirmasi-chat-admin-beranda"){
        header("Location:index.php?include=beranda&notif=pesanterkirim");
      }
      if($include=="konfirmasi-chat-admin-jasakami"){
        header("Location:index.php?include=jasa-kami&notif=pesanterkirim");
      }
      if($include=="konfirmasi-chat-admin-riwayat"){
        header("Location:index.php?include=riwayat&notif=pesanterkirim");
      }
      if($include=="konfirmasi-chat-admin-portofolio"){
        header("Location:index.php?include=portofolio&notif=pesanterkirim");
      }
      if($include=="konfirmasi-chat-admin-ulasan"){
        header("Location:index.php?include=ulasan&notif=pesanterkirim");
      }
      }

  }
}

?>