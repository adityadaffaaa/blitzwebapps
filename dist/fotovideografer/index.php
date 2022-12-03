<?php 
session_start();
include("../koneksi/koneksi.php");
if(isset($_GET["include"])){
  $include = $_GET["include"];
  if($include == "konfirmasi-signin-fotovideografer"){
    include "confirm/konfirmasi-signin-fotovideografer.php";
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
      ?>

<body class="font-lora flex bg-[rgba(0,0,0,0.1)]">
  <?php
      include "includes/sidebar.php";
      if($include == "profil"){
        include "pages/profil.php";
      } 
    } else if($include == "signup"){
      ?>

  <body class="font-lora h-[100vh] w-full">
    <?php
    include "pages/signup.php";
    } else {
      ?>

    <body class="font-lora h-[100vh] w-full">
      <?php
    include "pages/signin.php";
      
  }

} else {
  ?>

      <body class="font-lora h-[100vh] w-full">
        <?php
include "pages/signin.php";
  
  }
?>

      </body>

      <?php include "includes/script.php" ?>

</html>