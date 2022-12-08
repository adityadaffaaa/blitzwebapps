<?php 
if(isset($_GET['data'])){
  $id_fotovideografer = $_GET['data'];
  $sql_grafer = "SELECT `foto`, `nama`, `username`, `jenis_kelamin`, `usia`,`email`,`no_telp`,`nik`,
  `alamat`,`link_portofolio`, `instagram`, `deskripsi_pribadi`,`role`,`token`,`status`
  FROM `fotovideografer` 
  WHERE `id_fotovideografer` = $id_fotovideografer";
  $query_grafer = mysqli_query($koneksi, $sql_grafer);
  while($data_grafer = mysqli_fetch_row($query_grafer)){
    $foto = $data_grafer[0];
    $nama = $data_grafer[1];
    $username = $data_grafer[2];
    $jenis_kelamin = $data_grafer[3];
    $usia = $data_grafer[4];
    $email = $data_grafer[5];
    $no_telp = $data_grafer[6];
    $nik = $data_grafer[7];
    $alamat = $data_grafer[8];
    $link_portofolio = $data_grafer[9];
    $instagram = $data_grafer[10];
    $deskripsi_pribadi = $data_grafer[11];
    $role = $data_grafer[12];
    $token = $data_grafer[13];
    $status = $data_grafer[14];
  }
}
?>
<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <div class="flex flex-col">
          <h3 class="text-text1 text-heading3 font-poppins">Data Fotografer dan Videografer</h3>
        </div>
        <a href="index.php?include=logout"
          class="flex flex-row gap-3 group text-[rgba(0,0,0,0.5)] hover:text-text1 transition-default group">
          <span class="fill-[rgba(0,0,0,0.5)] transition-default group-hover:fill-text1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                d="M4 18h2v2h12V4H6v2H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3zm2-7h7v2H6v3l-5-4 5-4v3z" />
            </svg>
          </span>
          <p id="menu-desc" class="text-paragraph1 text-[rgba(0,0,0,0.5)] transition-default group-hover:text-text1">Log
            Out</p>
        </a>
      </div>
      <div class="flex flex-col bg-background1 shadow-default rounded-lg mx-1 border-2 border-primary">
        <div class="flex flex-row px-6 py-2 items-center justify-between border-b-2 border-primary">
          <h5 class="text-text1 text-heading5 font-poppins">Detail Data Foto dan Videografer</h5>
          <a class="px-4 py-[10px] bg-primary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-secondary"
            href="index.php?include=data-fotovideografer">
            <span class="fill-text2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
              </svg>
            </span>
            Kembali</a>
        </div>
        <div class="px-6 py-2 flex flex-col items-start">
          <div class="flex flex-col gap-6 w-full py-6 h-[500px] overflow-auto custom-scrollbar">
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Foto</p>
              <div class="flex w-[800px] justify-start mr-40">
                <?php if($foto == null){?>
                <span class="fill-primary ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="208" height="208">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                      d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                  </svg>
                </span>
                <?php } else { ?>
                <img class="h-52 rounded-lg" src="./../fotovideografer/assets/img/<?php echo $foto ?>" alt="" />
                <?php } ?>
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Nama</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="username" id="username" type="text" value="<?php echo $nama ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Username</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="email" id="email" type="text" value="<?php echo $username ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Email</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $email ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">No Telepon</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $no_telp ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Alamat</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $alamat ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Jenis Kelamin</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $jenis_kelamin ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">NIK</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $nik ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Usia</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $usia ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Role</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $role ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Link Portofolio</p>
              <div class="flex justify-start mr-40">
                <a target="_blank"
                  class="p-[10px] bg-primary rounded-lg transition-default hover:bg-secondary text-text2 text-paragraph2 outline-none w-[800px]"
                  href="<?php echo $link_portofolio ?>"><?php echo $link_portofolio ?></a>
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Instagram</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $instagram ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Deskripsi Pribadi</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $deskripsi_pribadi ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Token</p>
              <div class="flex justify-start mr-40">
                <input readonly
                  class="p-[10px] bg-secondary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $token ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Status</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $status ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Portofolio Foto</p>
              <div class="flex w-[800px] justify-start mr-40">
                <a class="portof-foto w-[500px] h-[380px] cursor-pointer bg-cover rounded-lg overflow-hidden group"
                  style="background-image: url('./../customer/assets/img/portfolio1.png')">
                  <div
                    class="w-full h-full gradient-primary flex justify-center items-center translate-y-96 transition-all ease-in-out duration-500 group-hover:translate-y-0">
                    <h3 class="text-text2 text-heading3 font-poppins">10+</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Portofolio Video</p>
              <div class="flex w-[800px] justify-start mr-40">
                <a class="portof-video w-[500px] h-[380px] cursor-pointer bg-cover rounded-lg overflow-hidden group"
                  style="background-image: url('./../customer/assets/img/portfolio1.png')">
                  <div
                    class="w-full h-full gradient-primary flex justify-center items-center translate-y-96 transition-all ease-in-out duration-500 group-hover:translate-y-0">
                    <h3 class="text-text2 text-heading3 font-poppins">10+</h3>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-row bg-text2 px-6 py-4 items-center justify-start shadow-default">
      <p class="text-text1 text-paragraph2">© 2022 Blitz by Kelompok 3 SI-3B</p>
    </div>
  </div>
</section>
<!-- content edit profil end -->
<!-- portofolio foto -->
<div
  class="portof-foto-popup-background hidden w-full h-[100vh] z-[80] fixed top-0 items-center justify-center bg-[rgba(0,0,0,0.5)] opacity-0 transition-all ease-in-out duration-500">
  <div
    class="portof-foto-popup h-[80vh] w-full shadow-default transition-all justify-center items-center ease-in-out duration-500 translate-y-64">
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
        <div class="swiper-slide">
          <div class="w-full h-full bg-cover"
            style="background-image: url('./../fotovideografer/assets/img/DSC_0384.JPG')"></div>
        </div>
        <div class="swiper-slide">
          <div class="w-full h-full bg-cover"
            style="background-image: url('./../fotovideografer/assets/img/DSC_0355.JPG')"></div>
        </div>
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
        <div class="swiper-slide">
          <video class="w-full h-[75vh]" controls>
            <source src="./../fotovideografer/assets/img/MAH07309.MP4" type="" />
          </video>
        </div>
        <div class="swiper-slide">
          <video class="w-full h-[75vh]" controls>
            <source src="./../fotovideografer/assets/img/kamera ngalam.mp4" type="" />
          </video>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
<!-- portofolio video end -->