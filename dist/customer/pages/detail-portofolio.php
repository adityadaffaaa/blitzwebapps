<?php 
if(isset($_GET["data"])){
  $id_fotovideografer = $_GET["data"];
  $sql_fotovideografer = "SELECT `foto`, `nama`, `deskripsi_pribadi`, `usia`,`role`,`instagram` 
  FROM `fotovideografer` 
  WHERE `id_fotovideografer` = '$id_fotovideografer'";
  $query_fotovideografer = mysqli_query($koneksi, $sql_fotovideografer);
  while ($data_fotovideografer = mysqli_fetch_row($query_fotovideografer)){
    $foto = $data_fotovideografer[0];
    $nama = $data_fotovideografer[1];
    $deskripsi = $data_fotovideografer[2];
    $usia = $data_fotovideografer[3];
    $role = $data_fotovideografer[4];
    $instagram = $data_fotovideografer[5];
  }
}

$sql_jml = "SELECT COUNT(`id_portofolio`) FROM `portofolio` WHERE `id_fotovideografer` = $id_fotovideografer";
$query_jml = mysqli_query($koneksi, $sql_jml);
while($data_jml = mysqli_fetch_row($query_jml)){
  $jml_portof = $data_jml[0];
}

$sql_jml_foto = "SELECT COUNT(`portof_foto`) FROM `portofolio` WHERE `id_fotovideografer` = $id_fotovideografer";
$query_jml_foto = mysqli_query($koneksi, $sql_jml_foto);
while($data_jml_foto = mysqli_fetch_row($query_jml_foto)){
  $jml_foto_portof = $data_jml_foto[0];
}
$sql_jml_video = "SELECT COUNT(`portof_video`) FROM `portofolio` WHERE `id_fotovideografer` = $id_fotovideografer";
$query_jml_video = mysqli_query($koneksi, $sql_jml_video);
while($data_jml_video = mysqli_fetch_row($query_jml_video)){
  $jml_video_portof = $data_jml_video[0];
}
?>
<!-- Hero -->
<section class="">
  <div class="w-full h-[650px] bg-cover bg-fixed"
    style="background-image: url('./assets/img/hero-detailportofolio.png')">
    <div class="w-full h-full gradient-primary flex justify-center">
      <div class="flex flex-col w-4/5 gap-20 mt-[40px] items-center">
        <div class="flex flex-row w-full justify-between">
          <a href="index.php?include=beranda"><img class="h-[30px]" src="./assets/Blitz Logo White.png" alt="" /></a>
          <a class="px-[14px] py-[10px] flex items-center bg-secondary rounded-lg text-paragraph1 transition-default hover:bg-primary text-text2"
            href="index.php?include=portofolio">
            <span class="fill-text2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
              </svg>
            </span>
            Kembali</a>
        </div>
        <div class="flex flex-col items-center gap-[14px]">
          <?php if($foto==null) { ?>
          <span class="fill-text2 ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="314" height="314">
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
            </svg>
          </span>
          <?php } else{?>
          <img class="h-[314px] w-[314px] rounded-full" src="./../fotovideografer/assets/img/<?php echo $foto ?>"
            alt="" />
          <?php }?>
          <h1 class="text-text2 text-heading1 font-poppins"><?php echo $nama ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero End -->
<div class="container mx-auto">
  <!-- detail portofolio -->
  <section class="mt-[50px] flex justify-center">
    <div class="flex flex-row w-4/5 justify-between">
      <div class="flex flex-col gap-6">
        <div class="flex flex-col gap-3">
          <h5 class="text-text1 text-heading5 font-poppins">Deskripsi</h5>
          <p class="text-text1 text-paragraph2 w-[540px]">
            <?php if($deskripsi==null){echo"-";}else{echo $deskripsi;}  ?>
          </p>
        </div>
        <div class="flex flex-col gap-3">
          <h5 class="text-text1 text-heading5 font-poppins">Usia</h5>
          <p class="text-text1 text-paragraph2 w-[540px]"><?php echo $usia ?> Tahun</p>
        </div>
        <div class="flex flex-col gap-3">
          <h5 class="text-text1 text-heading5 font-poppins">Role</h5>
          <p class="text-text1 text-paragraph2 w-[540px]"><?php echo $role ?></p>
        </div>
        <div class="flex flex-col gap-3">
          <h5 class="text-text1 text-heading5 font-poppins">Instagram</h5>
          <p class="text-text1 text-paragraph2 w-[540px]">
            @<?php if($instagram==null){echo"-";}else{echo $instagram;} ?></p>
        </div>
      </div>
      <div class="flex flex-col gap-6">
        <?php if ($role == "fotografer") { ?>
        <div class="flex flex-col gap-3">
          <h3 class="text-primary text-heading3 font-poppins">Portofolio Foto</h3>
          <div class="portof-foto grid grid-cols-2 rounded-2xl overflow-hidden cursor-pointer relative group">
            <div
              class="w-full h-full absolute translate-y-[600px] transition-all ease-in-out duration-500 group-hover:translate-y-0 flex items-center justify-center gradient-primary">
              <div class="flex flex-col items-center">
                <h2 class="text-text2 text-heading2 font-poppins"><?php if ($jml_portof > 10) {
            echo '10+';
          } else {
            echo $jml_portof;} ?></h2>
                <p class="text-text2 text-paragraph1 flex">
                  Lihat Lainnya
                  <span class="fill-text2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
                    </svg>
                  </span>
                </p>
              </div>
            </div>
            <?php
            $sql_portof_foto = "SELECT `portof_foto` FROM `portofolio` WHERE `id_fotovideografer` = $id_fotovideografer LIMIT 4";
            $query_portof_foto = mysqli_query($koneksi, $sql_portof_foto);
          while ($data_portof_foto = mysqli_fetch_row($query_portof_foto)) {
            $portof_foto = $data_portof_foto[0];            
             ?>
            <div class="h-[268px] w-[268px] bg-cover"
              style="background-image: url('./../fotovideografer/assets/img/<?php echo $portof_foto ?>')">
            </div>
            <?php } ?>
          </div>
          <?php }else if($role == "videografer"){?>
          <div class="flex flex-col gap-3">
            <h3 class="text-primary text-heading3 font-poppins">Portofolio Video</h3>
            <div class="portof-video grid grid-cols-2 rounded-2xl overflow-hidden cursor-pointer relative group">
              <div
                class="w-full h-full absolute translate-y-[600px] transition-all ease-in-out duration-500 group-hover:translate-y-0 flex items-center justify-center gradient-primary">
                <div class="flex flex-col items-center">
                  <h2 class="text-text2 text-heading2 font-poppins"><?php if ($jml_portof > 10) {
            echo '10+';
          } else {
            echo $jml_portof;} ?></h2>
                  <p class="text-text2 text-paragraph1 flex">
                    Lihat Lainnya
                    <span class="fill-text2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
                      </svg>
                    </span>
                  </p>
                </div>
              </div>
              <?php
              $sql_portof_video = "SELECT `portof_video` FROM `portofolio` WHERE `id_fotovideografer` = $id_fotovideografer LIMIT 4";
              $query_portof_video = mysqli_query($koneksi, $sql_portof_video);
          while ($data_portof_video = mysqli_fetch_row($query_portof_video)) {
            $portof_video = $data_portof_video[0];        
              ?>
              <video class="w-[268px]">
                <source src="./../fotovideografer/assets/img/<?php echo $portof_video ?>">
              </video>
              <?php } ?>
            </div>
          </div>
          <?php }else if($role == "fotografer dan videografer"){?>
          <div class="flex flex-col gap-3">
            <h3 class="text-primary text-heading3 font-poppins">Portofolio Foto</h3>
            <div class="portof-foto grid grid-cols-2 rounded-2xl overflow-hidden cursor-pointer relative group">
              <div
                class="w-full h-full absolute translate-y-[600px] transition-all ease-in-out duration-500 group-hover:translate-y-0 flex items-center justify-center gradient-primary">
                <div class="flex flex-col items-center">
                  <h2 class="text-text2 text-heading2 font-poppins"><?php if ($jml_foto_portof > 10) {
            echo '10+';
          } else {
            echo $jml_foto_portof;} ?></h2>
                  <p class="text-text2 text-paragraph1 flex">
                    Lihat Lainnya
                    <span class="fill-text2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
                      </svg>
                    </span>
                  </p>
                </div>
              </div>
              <?php
            $sql_portof_foto = "SELECT `portof_foto` FROM `portofolio` WHERE `id_fotovideografer` = $id_fotovideografer 
            AND `portof_foto` <> 'null'
            LIMIT 4";
            $query_portof_foto = mysqli_query($koneksi, $sql_portof_foto);
          while ($data_portof_foto = mysqli_fetch_row($query_portof_foto)) {
            $portof_foto = $data_portof_foto[0];
              ?>
              <div class="h-[268px] w-[268px] bg-cover"
                style="background-image: url('./../fotovideografer/assets/img/<?php echo $portof_foto ?>')">
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="flex flex-col gap-3">
            <h3 class="text-primary text-heading3 font-poppins">Portofolio Video</h3>
            <div class="portof-video grid grid-cols-2 rounded-2xl overflow-hidden cursor-pointer relative group">
              <div
                class="w-full h-full absolute translate-y-[600px] transition-all ease-in-out duration-500 group-hover:translate-y-0 flex items-center justify-center gradient-primary">
                <div class="flex flex-col items-center">
                  <h2 class="text-text2 text-heading2 font-poppins"><?php if ($jml_video_portof > 10) {
            echo '10+';
          } else {
            echo $jml_video_portof;} ?></h2>
                  <p class="text-text2 text-paragraph1 flex">
                    Lihat Lainnya
                    <span class="fill-text2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
                      </svg>
                    </span>
                  </p>
                </div>
              </div>
              <?php
              $sql_portof_video = "SELECT `portof_video` FROM `portofolio` WHERE `id_fotovideografer` = $id_fotovideografer 
              AND `portof_video` <> 'null'
              LIMIT 4";
              $query_portof_video = mysqli_query($koneksi, $sql_portof_video);
          while ($data_portof_video = mysqli_fetch_row($query_portof_video)) {
            $portof_video = $data_portof_video[0];
              ?>
              <video class="w-[268px]">
                <source src="./../fotovideografer/assets/img/<?php echo $portof_video ?>">
              </video>
              <?php }?>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
  </section>
  <!-- detail portofolio end -->
</div>

<!-- portofolio foto -->
<div
  class="portof-foto-popup-background hidden w-full h-[100vh] z-[80] fixed top-0 items-center justify-center bg-[rgba(0,0,0,0.5)] opacity-0 transition-all ease-in-out duration-500">
  <div
    class="portof-foto-popup h-[80vh] bg-black w-full shadow-default transition-all justify-center items-center ease-in-out duration-500 translate-y-64">
    <div
      class="close-portof-foto-popup absolute z-[100] top-6 right-6 transition-all ease-in-out duration-200 text-paragraph1 font-poppins w-8 h-8 flex items-center justify-center cursor-pointer rounded-lg bg-secondary hover:bg-primary">
      <span class="fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
        </svg>
      </span>
    </div>
    <div class="swiper carousel-portof-foto h-full">
      <div class="swiper-wrapper w-full h-full">
        <?php 
        $sql_portof_foto = "SELECT `portof_foto` FROM `portofolio` WHERE `id_fotovideografer` = $id_fotovideografer";
        $query_portof_foto = mysqli_query($koneksi, $sql_portof_foto);
        while ($data_portof_foto = mysqli_fetch_row($query_portof_foto)) {
          $portof_foto = $data_portof_foto[0];

        ?>
        <?php if($portof_foto != null){ ?>
        <div class="swiper-slide">
          <div class="flex justify-center w-full h-full">
            <img class="h-[80vh]" src="./../fotovideografer/assets/img/<?php echo $portof_foto ?>" alt="">
          </div>
        </div>
        <?php } ?>
        <?php } ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
<!-- portofolio foto end -->
<!-- portofolio video -->
<div
  class="portof-video-popup-background hidden w-full h-[100vh] z-[80] fixed top-0 items-center justify-center bg-[rgba(0,0,0,0.5)] opacity-0 transition-all ease-in-out duration-500">
  <div
    class="portof-video-popup bg-black h-[80vh] w-full shadow-default justify-center items-center transition-all ease-in-out duration-500 translate-y-64">
    <div
      class="close-portof-video-popup absolute z-[100] top-6 right-6 transition-all ease-in-out duration-200 text-paragraph1 font-poppins w-8 h-8 flex items-center justify-center cursor-pointer rounded-lg bg-secondary hover:bg-primary">
      <span class="fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
        </svg>
      </span>
    </div>
    <div class="swiper carousel-portof-video h-full">
      <div class="swiper-wrapper w-full h-full">
        <?php
        $sql_portof_video = "SELECT `portof_video` FROM `portofolio` WHERE `id_fotovideografer` = $id_fotovideografer";
        $query_portof_video = mysqli_query($koneksi, $sql_portof_video);
        while ($data_portof_video = mysqli_fetch_row($query_portof_video)) {
          $portof_video = $data_portof_video[0];
        ?>
        <?php if($portof_video != null){ ?>
        <div class="swiper-slide">
          <video class="w-full h-[75vh]" controls>
            <source src="./../fotovideografer/assets/img/<?php echo $portof_video ?>" type="" />
          </video>
        </div>
        <?php }?>
        <?php }?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
<!-- portofolio video end -->