<?php 
session_start();
include("../koneksi/koneksi.php");
if(isset($_GET["include"])){
  $include = $_GET["include"];
  if($include == "konfirmasi-signin-admin"){
    include "confirm/konfirmasi-signin-admin.php";
  } else if($include =="logout"){
    include "confirm/logout.php";
  } else if($include =="konfirmasi-edit-profil"){
    include "confirm/konfirmasi-edit-profil.php";
  } else if($include =="konfirmasi-ubah-password"){
    include "confirm/konfirmasi-ubah-password.php";
  } else if($include =="konfirmasi-kirim-chat-customer"){
    include "confirm/konfirmasi-kirim-chat-customer.php";
  } else if($include =="konfirmasi-kirim-chat-fotovideografer"){
    include "confirm/konfirmasi-kirim-chat-fotovideografer.php";
  } else if($include =="konfirmasi-edit-admin"){
    include "confirm/konfirmasi-edit-admin.php";
  } else if($include =="konfirmasi-verifikasi-fotovideografer"){
    include "confirm/konfirmasi-verifikasi-fotovideografer.php";
  } else if($include =="konfirmasi-pemesanan"){
    include "confirm/konfirmasi-pemesanan.php";
  } else if ($include == "ajax-insert-chat-customer"){
    include "ajax/insertChatCustomer.php" ;
  } else if ($include == "ajax-insert-chat-fotovideo"){
    include "ajax/insertChatFotoVideo.php" ;
  } else if ($include == "ajax-chat-masuk-customer"){
    include "ajax/chatMasukCustomer.php" ;
  } else if ($include == "ajax-chat-masuk-fotovideo"){
    include "ajax/chatMasukFotoVideo.php" ;
  }
}
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <?php include "includes/head.php" ?>
</head>

<?php
  if(isset($_GET["include"])){
    $include = $_GET["include"];
    if(isset($_SESSION["id_admin"])){
      ?>

<body class="font-lora flex bg-[rgba(0,0,0,0.1)]">
  <?php
      if($include == "profil"){
        include "includes/sidebar.php";
        include "pages/profil.php";
      } else if ($include == "edit-profil"){
        include "includes/sidebar.php";
        include "pages/editprofil.php" ;
      } else if ($include == "data-customer"){
        include "includes/sidebar.php";
        include "pages/data-customer.php" ;
      } else if ($include == "data-fotovideografer"){
        include "includes/sidebar.php";
        include "pages/data-fotovideografer.php" ;
      } else if ($include == "ubah-password"){
        include "includes/sidebar.php";
        include "pages/ubah-password.php" ;
      } else if ($include == "chat-customer"){
        include "includes/sidebar.php";
        include "pages/chat-customer.php" ;
      } else if ($include == "chat-fotovideografer"){
        include "includes/sidebar.php";
        include "pages/chat-fotovideografer.php" ;
      } else if ($include == "detail-chat-customer"){
        include "includes/sidebar.php";
        include "pages/detail-chatcustomer.php" ;
      } else if ($include == "detail-chat-fotovideografer"){
        include "includes/sidebar.php";
        include "pages/detail-chatfotovideografer.php" ;
      } else if ($include == "data-admin"){
        include "includes/sidebar.php";
        include "pages/data-admin.php" ;
      } else if ($include == "edit-admin"){
        include "includes/sidebar.php";
        include "pages/edit-admin.php" ;
      } else if ($include == "konfirmasi-fotovideografer"){
        include "includes/sidebar.php";
        include "pages/konfirmasi-fotovideografer.php" ;
      } else if ($include == "detail-konfirmasi-fotovideografer"){
        include "includes/sidebar.php";
        include "pages/detail-konfirmasi-fotovideografer.php" ;
      } else if ($include == "detail-customer"){
        include "includes/sidebar.php";
        include "pages/detail-customer.php" ;
      } else if ($include == "detail-fotovideografer"){
        include "includes/sidebar.php";
        include "pages/detail-fotovideografer.php" ;
      } else if ($include == "detail-admin"){
        include "includes/sidebar.php";
        include "pages/detail-admin.php" ;
      } else if ($include == "pemesanan"){
        include "includes/sidebar.php";
        include "pages/pemesanan.php" ;
      } else if ($include == "detail-pemesanan"){
        include "includes/sidebar.php";
        include "pages/detail-pemesanan.php" ;
      
      }
    
    } else{
      ?>

  <body class="font-lora h-[100vh] bg-background2">
    <?php
    include "pages/signin.php";
  }
} else {
  ?>

    <body class="font-lora h-[100vh] bg-background2">
      <?php
include "pages/signin.php";
  
  }
?>

    </body>

    <?php include "includes/script.php" ?>

</html>