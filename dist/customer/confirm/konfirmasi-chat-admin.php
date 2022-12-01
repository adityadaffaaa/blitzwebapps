<?php  
if(isset($_SESSION["id_customer"])){
  $id_customer = $_SESSION["id_customer"];
  $chat = $_POST["chat"];
  $pengirim = "customer";
  if(empty($chat)){
    if(isset($_GET["include"])){
      header("Location:index.php?include=beranda&notif=chatkosong");
    // $include = $_GET["include"];
    // if($include=="beranda"){
    // }
    // if($include=="jasa-kami"){
    //   header("Location:index.php?include=jasa-kami&notif=chatkosong");
    // }
    // if($include=="riwayat"){
    //   header("Location:index.php?include=riwayat&notif=chatkosong");
    // }
    // if($include=="portofolio"){
    //   header("Location:index.php?include=portofolio&notif=chatkosong");
    // }
    // if($include=="konfirmasi-chat-admin"){
    //   header("Location:index.php?include=ulasan&notif=chatkosong");
    // }
    }
  
  } else{
    $sql_chat = "INSERT INTO `chat_cs` (`chat`) 
    VALUES ('$chat')";
    $query_chat = mysqli_query($koneksi, $sql_chat);
    $id_chat = mysqli_insert_id($koneksi);
    $sql_chat_customer = "INSERT INTO `chat_admin_customer` (`id_chat`, `id_customer`, `pengirim`)
    VALUES ('$id_chat','$id_customer','$pengirim')";
    mysqli_query($koneksi, $sql_chat_customer);
    header("Location:index.php?include=beranda&notif=pesanterkirim");
    // if(isset($_GET["include"])){
    //   $include = $_GET["include"];
    //   if($include=="beranda"){
    //   }
    //   if($include=="jasa-kami"){
    //     header("Location:index.php?include=jasa-kami&notif=pesanterkirim");
    //   }
    //   if($include=="riwayat"){
    //     header("Location:index.php?include=riwayat&notif=pesanterkirim");
    //   }
    //   if($include=="portofolio"){
    //     header("Location:index.php?include=portofolio&notif=pesanterkirim");
    //   }
    //   if($include=="ulasan"){
    //     header("Location:index.php?include=ulasan&notif=pesanterkirim");
    //   }
    //   }

  }
}

?>