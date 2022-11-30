<?php
session_start();
include("../koneksi/koneksi.php");
if(isset($_GET["include"])){
  $include = $_GET["include"];
  if($include== "konfirmasi-sign-up-customer"){
  include "confirm/konfirmasi-sign-up-customer.php";
  } else if($include == "konfirmasi-sign-in-customer"){
    include "confirm/konfirmasi-sign-in-customer.php";
  } else if($include == "konfirmasi-edit-profil"){
    include "confirm/konfirmasi-editprofil.php";
  } else if($include == "konfirmasi-ubah-password"){
    include "confirm/konfirmasi-ubah-password.php";
  } else if($include == "konfirmasi-ulasan"){
    include "confirm/konfirmasi-ulasan.php";
  } else if($include == "logout"){
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

    if($include =="jasa-kami"){
      ?>

<body class="font-lora custom-scrollbar scrollbar">

  <?php include "includes/navbar.php"; ?>
  <?php
    include "pages/jasakami.php";
    include "includes/chat.php";
    include "includes/footer.php";
  } else if($include == "riwayat"){
    ?>

  <body class="font-lora custom-scrollbar scrollbar">
    <?php include "includes/navbar.php"; ?>
    <?php
    include "pages/riwayat.php";
    include "includes/chat.php";
    include "includes/footer.php";
    
  }else if($include == "portofolio"){
    ?>

    <body class="font-lora custom-scrollbar scrollbar">
      <?php include "includes/navbar.php"; ?>
      <?php
    include "pages/portofolio.php";
    include "includes/chat.php";
    include "includes/footer.php";
  } else if($include == "ulasan"){
    ?>

      <body class="font-lora custom-scrollbar scrollbar">
        <?php include "includes/navbar.php"; ?>
        <?php
    include "pages/ulasan.php";
    include "includes/chat.php";
    include "includes/footer.php";
  } else if($include == "detail-klienkami"){
    ?>

        <body class="font-lora custom-scrollbar scrollbar">
          <?php include "includes/header-jasa.php"; ?>
          <?php
    include "pages/detail-klienkami.php";
    include "includes/footer.php";
  }else if($include == "detail-portofolio"){
    ?>

          <body class="font-lora custom-scrollbar scrollbar">
            <?php
    include "pages/detail-portofolio.php";
    include "includes/footer.php";
  } else if($include == "jasa-fotografi"){
    ?>

            <body class="font-lora custom-scrollbar scrollbar">
              <?php include "includes/header-jasa.php"; ?>
              <?php
    include "pages/jasa-fotografi.php";
    include "includes/footer.php";
  } else if($include == "jasa-videografi"){
    ?>

              <body class="font-lora custom-scrollbar scrollbar">
                <?php include "includes/header-jasa.php"; ?>
                <?php
    include "pages/jasa-videografi.php";
    include "includes/footer.php";
  } else if($include == "jasa-fotovideografi"){
    ?>

                <body class="font-lora custom-scrollbar scrollbar">
                  <?php include "includes/header-jasa.php"; ?>
                  <?php
    include "pages/jasa-fotovideografi.php";
    include "includes/footer.php";
  } else if($include == "sign-in-customer"){
    ?>

                  <body class="font-lora h-[100vh]">
                    <?php
    include "pages/sign-in.php";
  } else if($include == "sign-up-customer"){
    ?>

                    <body class="font-lora h-[100vh]">
                      <?php
    include "pages/sign-up.php";
  } else if(isset($_SESSION["id_customer"])){
    if(isset($_GET["include"])){
      $include = $_GET["include"];
      if($include=="edit-profil"){
        
        ?>

                      <body class="font-lora flex">
                        <?php include "includes/sidebar-profil.php" ?>
                        <?php
include "pages/edit-profil.php";
      } else if($include=="beranda"){
        ?>

                        <body class="font-lora custom-scrollbar scrollbar">
                          <?php include "includes/navbar.php"; ?>
                          <?php
include("pages/beranda.php");
include "includes/chat.php";
include "includes/footer.php";
      } else if($include=="ubah-password"){
      
        ?>

                          <body class="font-lora flex">
                            <?php include "includes/sidebar-profil.php" ?>
                            <?php
include "pages/ubah-password.php";
      }
    }
  } else {
    ?>

                            <body class="font-lora custom-scrollbar scrollbar">
                              <?php include "includes/navbar.php"; ?>
                              <?php
    include("pages/beranda.php");
    include "includes/chat.php";
    include "includes/footer.php";
  }
  } else {
    ?>

                              <body class="font-lora custom-scrollbar scrollbar">
                                <?php include "includes/navbar.php"; ?>
                                <?php
    include "pages/beranda.php";
    include "includes/chat.php";
    include "includes/footer.php";
  }
  ?>
                              </body>
                              <?php include "includes/script.php" ?>

</html>