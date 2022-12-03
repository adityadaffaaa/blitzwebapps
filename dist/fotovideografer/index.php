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