<!-- Navbar -->
<header class="flex justify-center w-full fixed top-0 z-[99999]">
  <nav
    class="flex flex-row justify-between shadow-default w-full items-center px-10 overflow-hidden bg-background1 transition-all ease-in-out duration-200">
    <img class="h-6" src="./assets/Blitz Logo.png" alt="Logo Blitz" />
    <ul class="flex translate-x-8">
      <?php
  if (isset($_GET["include"])){
    $include = $_GET["include"];
    if($include == "beranda"){
    ?>
      <li><a class="nav-active" href="index.php?include=beranda">Beranda</a></li>
      <li><a class="nav-non-active" href="index.php?include=jasa-kami">Jasa Kami</a></li>
      <li><a class="nav-non-active" href="index.php?include=riwayat">Riwayat</a></li>
      <li><a class="nav-non-active" href="index.php?include=portofolio">Portofolio</a></li>
      <li><a class="nav-non-active" href="index.php?include=ulasan">Ulasan</a></li>
      <?php
    } else if($include =="jasa-kami"){
      ?>
      <li><a class="nav-non-active" href="index.php?include=beranda">Beranda</a></li>
      <li><a class="nav-active" href="index.php?include=jasa-kami">Jasa Kami</a></li>
      <li><a class="nav-non-active" href="index.php?include=riwayat">Riwayat</a></li>
      <li><a class="nav-non-active" href="index.php?include=portofolio">Portofolio</a></li>
      <li><a class="nav-non-active" href="index.php?include=ulasan">Ulasan</a></li>
      <?php
      }
      else if($include =="riwayat"){
        ?>
      <li><a class="nav-non-active" href="index.php?include=beranda">Beranda</a></li>
      <li><a class="nav-non-active" href="index.php?include=jasa-kami">Jasa Kami</a></li>
      <li><a class="nav-active" href="index.php?include=riwayat">Riwayat</a></li>
      <li><a class="nav-non-active" href="index.php?include=portofolio">Portofolio</a></li>
      <li><a class="nav-non-active" href="index.php?include=ulasan">Ulasan</a></li>
      <?php
        }
      else if($include =="portofolio"){
          ?>
      <li><a class="nav-non-active" href="index.php?include=beranda">Beranda</a></li>
      <li><a class="nav-non-active" href="index.php?include=jasa-kami">Jasa Kami</a></li>
      <li><a class="nav-non-active" href="index.php?include=riwayat">Riwayat</a></li>
      <li><a class="nav-active" href="index.php?include=portofolio">Portofolio</a></li>
      <li><a class="nav-non-active" href="index.php?include=ulasan">Ulasan</a></li>
      <?php
          }
        else if($include =="ulasan"){
            ?>
      <li><a class="nav-non-active" href="index.php?include=beranda">Beranda</a></li>
      <li><a class="nav-non-active" href="index.php?include=jasa-kami">Jasa Kami</a></li>
      <li><a class="nav-non-active" href="index.php?include=riwayat">Riwayat</a></li>
      <li><a class="nav-non-active" href="index.php?include=portofolio">Portofolio</a></li>
      <li><a class="nav-active" href="index.php?include=ulasan">Ulasan</a></li>
      <?php
            }
          } else {
      ?>
      <li><a class="nav-active" href="index.php?include=beranda">Beranda</a></li>
      <li><a class="nav-non-active" href="index.php?include=jasa-kami">Jasa Kami</a></li>
      <li><a class="nav-non-active" href="index.php?include=riwayat">Riwayat</a></li>
      <li><a class="nav-non-active" href="index.php?include=portofolio">Portofolio</a></li>
      <li><a class="nav-non-active" href="index.php?include=ulasan">Ulasan</a></li>
      <?php
      }
      ?>
    </ul>
    <div class="flex items-center gap-1">
      <?php if(isset($_SESSION['id_customer'])){
        $id_customer = $_SESSION['id_customer'];
        $sql_customer = "SELECT  SUBSTRING_INDEX(`nama`,' ',1), `foto` FROM `customer` WHERE `id_customer` = $id_customer";
        $query_customer = mysqli_query($koneksi, $sql_customer);
        while($data=mysqli_fetch_row($query_customer)){
          $nama = $data[0];
          $foto = $data[1];
        }
        ?>
      <p class="text-paragraph2">Halo, <a class="text-paragraph1 text-primary"><?php echo $nama ?></a></p>
      <a href="index.php?include=edit-profil" class="h-10 w-10 overflow-hidden rounded-full cursor-pointer">
        <?php if($foto==null) { ?>
        <span class="fill-primary">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
          </svg>
        </span>
        <?php } else{?>
        <img class="h-10" src="./assets/img/<?php echo $foto ?>" alt="">
        <?php }?>
      </a>
      <?php
      } else{?>
      <p class="text-paragraph2">Halo, <a class="text-paragraph1 text-primary">Guest</a></p>
      <a href="index.php?include=sign-in-customer" class="h-10 w-10 overflow-hidden rounded-full cursor-pointer">
        <span class="fill-primary">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
          </svg>
        </span>
      </a>
      <?php }?>
    </div>
  </nav>
</header>
<!-- Navbar End -->