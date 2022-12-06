<?php 
if(isset($_SESSION["id_fotovideografer"])){
  $id_fotovideografer = $_SESSION["id_fotovideografer"];
}

$sql_role = "SELECT `role` FROM `fotovideografer` WHERE `id_fotovideografer` = $id_fotovideografer";
$query_role = mysqli_query($koneksi, $sql_role);
while($data_role = mysqli_fetch_row($query_role)){
  $role = $data_role[0];
}

$sql_portof = "SELECT `id_portofolio`, `portof_foto`, `portof_video`
FROM `portofolio` 
WHERE `id_fotovideografer` = $id_fotovideografer";
$query_portof = mysqli_query($koneksi, $sql_portof);
?>
<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <h3 class="text-text1 text-heading3 font-poppins">Portofolio</h3>
        <a href="index.php?include=logout"
          class="flex flex-row gap-3 group text-[rgba(0,0,0,0.5)] hover:text-text1 transition-default group">
          <span class="fill-[rgba(0,0,0,0.5)] transition-default group-hover:fill-text1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                d="M4 18h2v2h12V4H6v2H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3zm2-7h7v2H6v3l-5-4 5-4v3z" />
            </svg>
          </span>
          <p id="menu-desc" class="text-paragraph1 text-[rgba(0,0,0,0.5)] transition-default group-hover:text-text1">
            Log Out</p>
        </a>
      </div>
      <div class="flex flex-col bg-background1 shadow-default rounded-lg mx-1 border-2 border-primary">
        <div class="flex flex-row px-6 py-4 items-center justify-start border-b-2 border-primary">
          <h5 class="text-text1 text-heading5 font-poppins">Data Portofolio</h5>
        </div>
        <div class="px-6 py-4 flex flex-col gap-6 items-start">
          <div class="flex flex-col py-6 gap-6 w-full h-[420px] overflow-auto custom-scrollbar">
            <?php if($role == "fotografer"){ ?>
            <div class="flex flex-col gap-4">
              <h5 class="text-primary text-heading5 font-poppins">Portofolio Foto</h5>
              <div class="grid grid-cols-4 gap-6 mr-6">
                <?php while($data_portof_foto = mysqli_fetch_row($query_portof)){
                  $foto = $data_portof_foto[1];?>
                <div class="flex flex-col gap-2">
                  <div class="detail w-[280px] h-[208px] bg-cover rounded-lg cursor-pointer overflow-hidden group"
                    style="background-image: url(./assets/img/porto1.png)">
                    <div
                      class="w-full h-full bg-[rgba(238,100,87,0.6)] flex justify-center items-center translate-y-56 transition-all ease-in-out duration-500 group-hover:translate-y-0">
                      <p class="text-text2 text-paragraph1">Lihat detail</p>
                    </div>
                  </div>
                  <a class="h-9 w-9 bg-primary rounded-lg flex justify-center items-center fill-text2 transition-default hover:bg-secondary"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                        d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-9 3h2v6H9v-6zm4 0h2v6h-2v-6zM9 4v2h6V4H9z" />
                    </svg>
                  </a>
                </div>
                <?php } ?>
              </div>
            </div>
            <?php }else if($role == "videografer"){ ?>
            <div class="flex flex-col gap-4">
              <h5 class="text-primary text-heading5 font-poppins">Portofolio Video</h5>
              <div class="grid grid-cols-4 gap-6 mr-6">
                <?php while ($data_portof_video = mysqli_fetch_row($query_portof)) {
                $video = $data_portof_video[2]; ?>
                <div class="flex flex-col gap-2">
                  <div class="detail w-[280px] h-[208px] bg-cover rounded-lg cursor-pointer overflow-hidden group"
                    style="background-image: url(./assets/img/porto1.png)">
                    <div
                      class="w-full h-full bg-[rgba(238,100,87,0.6)] flex justify-center items-center translate-y-56 transition-all ease-in-out duration-500 group-hover:translate-y-0">
                      <p class="text-text2 text-paragraph1">Lihat detail</p>
                    </div>
                  </div>
                  <a class="h-9 w-9 bg-primary rounded-lg flex justify-center items-center fill-text2 transition-default hover:bg-secondary"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                        d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-9 3h2v6H9v-6zm4 0h2v6h-2v-6zM9 4v2h6V4H9z" />
                    </svg>
                  </a>
                </div>
                <?php } ?>
              </div>
            </div>
            <?php }else if($role == "fotografer dan videografer"){ ?>
            <div class="flex flex-col gap-4">
              <h5 class="text-primary text-heading5 font-poppins">Portofolio Foto</h5>
              <div class="grid grid-cols-4 gap-6 mr-6">
                <?php while ($data_portof_fotovideo_foto = mysqli_fetch_row($query_portof)) {
                $fotovideo_foto = $data_portof_fotovideo_foto[1]; ?>
                <div class="flex flex-col gap-2">
                  <div class="detail w-[280px] h-[208px] bg-cover rounded-lg cursor-pointer overflow-hidden group"
                    style="background-image: url(./assets/img/porto1.png)">
                    <div
                      class="w-full h-full bg-[rgba(238,100,87,0.6)] flex justify-center items-center translate-y-56 transition-all ease-in-out duration-500 group-hover:translate-y-0">
                      <p class="text-text2 text-paragraph1">Lihat detail</p>
                    </div>
                  </div>
                  <a class="h-9 w-9 bg-primary rounded-lg flex justify-center items-center fill-text2 transition-default hover:bg-secondary"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                        d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-9 3h2v6H9v-6zm4 0h2v6h-2v-6zM9 4v2h6V4H9z" />
                    </svg>
                  </a>
                </div>
                <?php } ?>
              </div>
            </div>
            <div class="flex flex-col gap-4">
              <h5 class="text-primary text-heading5 font-poppins">Portofolio Video</h5>
              <div class="grid grid-cols-4 gap-6 mr-6">
                <?php while ($data_portof_fotovideo_video = mysqli_fetch_row($query_portof)) {
                $fotovideo_video = $data_portof_fotovideo_video[2]; ?>
                <div class="flex flex-col gap-2">
                  <div class="detail w-[280px] h-[208px] bg-cover rounded-lg cursor-pointer overflow-hidden group"
                    style="background-image: url(./assets/img/porto1.png)">
                    <div
                      class="w-full h-full bg-[rgba(238,100,87,0.6)] flex justify-center items-center translate-y-56 transition-all ease-in-out duration-500 group-hover:translate-y-0">
                      <p class="text-text2 text-paragraph1">Lihat detail</p>
                    </div>
                  </div>
                  <a class="h-9 w-9 bg-primary rounded-lg flex justify-center items-center fill-text2 transition-default hover:bg-secondary"
                    href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                        d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-9 3h2v6H9v-6zm4 0h2v6h-2v-6zM9 4v2h6V4H9z" />
                    </svg>
                  </a>
                </div>
                <?php } ?>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="flex flex-row w-full justify-end gap-2">
            <?php if ($role == "fotografer") { ?>
            <a
              class="tambah-foto px-4 py-[10px] cursor-pointer bg-primary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-secondary">Tambah
              Foto</a>
            <?php } else if($role=="videografer"){?>
            <a
              class="tambah-video px-4 py-[10px] cursor-pointer bg-primary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-secondary">Tambah
              Video</a>
            <?php } else if($role=="fotografer dan videografer"){?>
            <a
              class="tambah-foto px-4 py-[10px] cursor-pointer bg-primary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-secondary">Tambah
              Foto</a>
            <a
              class="tambah-video px-4 py-[10px] cursor-pointer bg-primary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-secondary">Tambah
              Video</a>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <?php include "includes/footer.php" ?>
  </div>
</section>
<!-- content edit profil end -->
<!-- detail pop up -->
<div
  class="detail-popup-background hidden w-full h-[100vh] z-[80] fixed top-0 items-center justify-center bg-[rgba(0,0,0,0.5)] opacity-0 transition-all ease-in-out duration-500">
  <div class="detail-popup relative shadow-default transition-all ease-in-out duration-500 translate-y-64">
    <img class="h-[500px] w-auto" src="./assets/img/porto1.png" alt="" />
    <div
      class="close-detail-popup absolute -top-4 transition-all ease-in-out duration-200 right-0 text-paragraph1 font-poppins w-8 h-8 flex items-center justify-center cursor-pointer rounded-lg bg-secondary hover:bg-primary">
      <span class="fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
        </svg>
      </span>
    </div>
  </div>
</div>
<!-- detail pop up end -->
<!-- tambah foto pop up -->
<div
  class="tambah-foto-popup-background hidden w-full h-[100vh] z-[80] fixed top-0 items-center justify-center bg-[rgba(0,0,0,0.5)] opacity-0 transition-all ease-in-out duration-500">
  <div
    class="tambah-foto-popup relative bg-text2 p-6 rounded-lg shadow-default flex flex-col gap-6 justify-center items-center transition-all ease-in-out duration-500 translate-y-64">
    <div
      class="close-foto-tambah-popup absolute -top-4 transition-all ease-in-out duration-200 right-0 text-paragraph1 font-poppins w-8 h-8 flex items-center justify-center cursor-pointer rounded-lg bg-secondary hover:bg-primary">
      <span class="fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
        </svg>
      </span>
    </div>
    <span class="fill-primary">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="108" height="108">
        <path fill="none" d="M0 0h24v24H0z" />
        <path
          d="M21 15v3h3v2h-3v3h-2v-3h-3v-2h3v-3h2zm.008-12c.548 0 .992.445.992.993V13h-2V5H4v13.999L14 9l3 3v2.829l-3-3L6.827 19H14v2H2.992A.993.993 0 0 1 2 20.007V3.993A1 1 0 0 1 2.992 3h18.016zM8 7a2 2 0 1 1 0 4 2 2 0 0 1 0-4z" />
      </svg>
    </span>
    <h5 class="text-text1 text-heading5 font-poppins">Kirim portofolio foto Anda</h5>
    <form method="POST" action="index.php?include=konfirmasi-tambah-portofolio" enctype="multipart/form-data"
      class="flex flex-col gap-4">
      <input
        class="w-full cursor-pointer text-text2 bg-primary px-4 py-2 rounded-lg transition-default hover:bg-secondary"
        type="file" name="foto" id="foto" />
      <button
        class="bg-secondary w-full px-4 py-2 rounded-lg transition-default hover:bg-background2 text-text2 text-paragraph1"
        type="submit">Kirim</button>
    </form>
  </div>
</div>
<!-- tambah foto pop up end -->
<!-- tambah video pop up -->
<div
  class="tambah-video-popup-background hidden w-full h-[100vh] z-[80] fixed top-0 items-center justify-center bg-[rgba(0,0,0,0.5)] opacity-0 transition-all ease-in-out duration-500">
  <div
    class="tambah-video-popup relative bg-text2 p-6 rounded-lg shadow-default flex flex-col gap-6 justify-center items-center transition-all ease-in-out duration-500 translate-y-64">
    <div
      class="close-video-tambah-popup absolute -top-4 transition-all ease-in-out duration-200 right-0 text-paragraph1 font-poppins w-8 h-8 flex items-center justify-center cursor-pointer rounded-lg bg-secondary hover:bg-primary">
      <span class="fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
        </svg>
      </span>
    </div>
    <span class="fill-primary">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="108" height="108">
        <path fill="none" d="M0 0H24V24H0z" />
        <path
          d="M16 4c.552 0 1 .448 1 1v4.2l5.213-3.65c.226-.158.538-.103.697.124.058.084.09.184.09.286v12.08c0 .276-.224.5-.5.5-.103 0-.203-.032-.287-.09L17 14.8V19c0 .552-.448 1-1 1H2c-.552 0-1-.448-1-1V5c0-.552.448-1 1-1h14zm-1 2H3v12h12V6zM8 8h2v3h3v2H9.999L10 16H8l-.001-3H5v-2h3V8zm13 .841l-4 2.8v.718l4 2.8V8.84z" />
      </svg>
    </span>
    <h5 class="text-text1 text-heading5 font-poppins">Kirim portofolio video Anda</h5>
    <form method="POST" action="index.php?include=konfirmasi-tambah-portofolio" enctype="multipart/form-data"
      class="flex flex-col gap-4">
      <input
        class="w-full cursor-pointer text-text2 bg-primary px-4 py-2 rounded-lg transition-default hover:bg-secondary"
        type="file" name="video" id="video" />
      <button
        class="bg-secondary w-full px-4 py-2 rounded-lg transition-default hover:bg-background2 text-text2 text-paragraph1"
        type="submit">Kirim</button>
    </form>
  </div>
</div>
<!-- tambah video pop up end -->