<?php
include("../koneksi/koneksi.php");
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
    include "includes/footer.php";
  } else if($include == "riwayat"){
    ?>

  <body class="font-lora custom-scrollbar scrollbar">
    <?php include "includes/navbar.php"; ?>
    <?php
    include "pages/riwayat.php";
    include "includes/footer.php";
  }else if($include == "portofolio"){
    ?>

    <body class="font-lora custom-scrollbar scrollbar">
      <?php include "includes/navbar.php"; ?>
      <?php
    include "pages/portofolio.php";
    include "includes/footer.php";
  } else if($include == "ulasan"){
    ?>

      <body class="font-lora custom-scrollbar scrollbar">
        <?php include "includes/navbar.php"; ?>
        <?php
    include "pages/ulasan.php";
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
  } else {
    ?>

                      <body class="font-lora custom-scrollbar scrollbar">
                        <?php include "includes/navbar.php"; ?>
                        <?php
    include("pages/beranda.php");
    include "includes/footer.php";
  }
  } else {
    ?>

                        <body class="font-lora custom-scrollbar scrollbar">
                          <?php include "includes/navbar.php"; ?>
                          <?php
    include "pages/beranda.php";
    include "includes/footer.php";
  }
  ?>
                        </body>
                        <?php include "includes/script.php" ?>

</html>