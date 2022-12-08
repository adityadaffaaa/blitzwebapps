<?php 
session_start();
include("../koneksi/koneksi.php");
if(isset($_GET["include"])){
  $include = $_GET["include"];
  if($include == "konfirmasi-signup"){
    include "confirm/konfirmasi-signup.php";
  } else if($include =="konfirmasi-signin"){
    include "confirm/konfirmasi-signin.php";
  } else if($include =="konfirmasi-verifikasi"){
    include "confirm/konfirmasi-verifikasi.php";
  } else if($include =="konfirmasi-pengaturan"){
    include "confirm/konfirmasi-pengaturan.php";
  } else if($include =="konfirmasi-ubah-password"){
    include "confirm/konfirmasi-ubah-password.php";
  } else if($include =="konfirmasi-chat"){
    include "confirm/konfirmasi-chat.php";
  } else if($include =="konfirmasi-tambah-portofolio"){
    include "confirm/konfirmasi-tambah-portofolio.php";
  } else if($include =="logout"){
    include "confirm/logout.php";
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
    if(isset($_SESSION["id_fotovideografer"])){
      
      if($include == "beranda"){
        ?>

<body class="font-lora flex bg-[rgba(0,0,0,0.1)]">
  <?php
  include "includes/sidebar.php";
        include "pages/beranda.php";
      } else if($include == "riwayat"){
        ?>

  <body class="font-lora flex bg-[rgba(0,0,0,0.1)]">
    <?php
  include "includes/sidebar.php";
      include "pages/riwayat.php";
      } else if($include == "chat"){
        ?>

    <body class="font-lora flex bg-[rgba(0,0,0,0.1)]">
      <?php
  include "includes/sidebar.php";
      include "pages/chat.php";
      } else if($include == "portofolio"){
        ?>

      <body class="font-lora flex bg-[rgba(0,0,0,0.1)]">
        <?php
  include "includes/sidebar.php";
      include "pages/portofolio.php";
      } else if($include == "detail-portofolio"){
        ?>

        <body class="font-lora flex bg-[rgba(0,0,0,0.1)]">
          <?php
  include "includes/sidebar.php";
      include "pages/detail-portofolio.php";
      } else if($include == "pemesanan"){
        ?>

          <body class="font-lora flex bg-[rgba(0,0,0,0.1)]">
            <?php
  include "includes/sidebar.php";
      include "pages/pemesanan.php";
      } else if($include == "pengaturan"){
        ?>

            <body class="font-lora flex bg-[rgba(0,0,0,0.1)]">
              <?php
  include "includes/sidebar.php";
      include "pages/pengaturan.php";
      } else if($include == "ubah-password"){
        ?>

              <body class="font-lora flex bg-[rgba(0,0,0,0.1)]">
                <?php
  include "includes/sidebar.php";
      include "pages/ubah-password.php";
      } else if($include == "detail-riwayat"){
        ?>

                <body class="font-lora flex bg-[rgba(0,0,0,0.1)]">
                  <?php
  include "includes/sidebar.php";
      include "pages/detail-riwayat.php";
      } else if($include == "detail-pemesanan"){
        ?>

                  <body class="font-lora flex bg-[rgba(0,0,0,0.1)]">
                    <?php
  include "includes/sidebar.php";
      include "pages/detail-pemesanan.php";
      } else if($include == "sign-in-verifikasi"){
        ?>

                    <body class="font-lora h-[100vh] w-full">
                      <?php
      include "pages/sign-in-verifikasi.php";
      }
    } else if($include == "signup"){
      ?>

                      <body class="font-lora h-[100vh] w-full">
                        <?php
    include "pages/signup.php";
    } else {
      ?>

                        <body class="font-lora h-[100vh] w-full relative">
                          <?php
    include "pages/signin.php";
      
  }

} else {
  ?>

                          <body class="font-lora h-[100vh] w-full relative">
                            <?php
include "pages/signin.php";
  
  }
?>

                          </body>

                          <?php include "includes/script.php" ?>

</html>