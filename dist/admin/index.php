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
      include "includes/sidebar.php";
      if($include == "profil"){
        include "pages/profil.php";
      } else if ($include == "edit-profil"){
        include "pages/editprofil.php" ;
      } else if ($include == "data-customer"){
        include "pages/data-customer.php" ;
      } else if ($include == "data-fotovideografer"){
        include "pages/data-fotovideografer.php" ;
      } else if ($include == "ubah-password"){
        include "pages/ubah-password.php" ;
      } else if ($include == "chat-customer"){
        include "pages/chat-customer.php" ;
      } else if ($include == "chat-fotovideografer"){
        include "pages/chat-fotovideografer.php" ;
      } else if ($include == "detail-chat-customer"){
        include "pages/detail-chatcustomer.php" ;
      } else if ($include == "detail-chat-fotovideografer"){
        include "pages/detail-chatfotovideografer.php" ;
      } else if ($include == "data-admin"){
        include "pages/data-admin.php" ;
      } else if ($include == "edit-admin"){
        include "pages/edit-admin.php" ;
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