<!-- Hero -->
<section>
  <div class="wrap relative">
    <div class="swiper hero-carousel">
      <div class="swiper-wrapper mb-10 mt-16">
        <div class="swiper-slide">
          <div class="bg-cover h-[670px] w-full" style="background-image: url('./assets/img/hero1.png')">
            <div
              class="h-full w-full bg-gradient-to-b flex justify-center from-[rgba(0,0,0,0.38)] to-[rgba(3,76,95,0.53)]">
              <div class="flex items-center h-full w-4/5">
                <div class="flex flex-col gap-4">
                  <h1 class="text-heading1 text-text2 font-poppins">Selamat Datang di <a
                      class="text-secondary">Blitz</a></h1>
                  <p class="text-text2 text-paragraph2 w-[484px]">Sedang mencari fotografer atau videografer? Temukan
                    jasa fotografi & videografi terbaik untuk setiap momen berharga yang hanya terjadi sekali dalam
                    hidup</p>
                  <div class="wrapbtn">
                    <?php if(isset($_SESSION["id_customer"])) {?>
                    <a class="btn-primary" href="index.php?include=jasa-kami">Pesan Sekarang</a>
                    <?php } else {?>
                    <a class="btn-primary" href="index.php?include=sign-in-customer">Mulai sebagai customer</a>
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="bg-cover h-[670px] w-full" style="background-image: url('./assets/img/hero2.png')">
            <div
              class="h-full w-full bg-gradient-to-b flex justify-center from-[rgba(0,0,0,0.38)] to-[rgba(3,76,95,0.53)]">
              <div class="flex items-center h-full w-4/5">
                <div class="flex flex-col gap-4">
                  <h1 class="text-heading1 text-text2 font-poppins">Hasilkan Gambar Sekelas Profesional!</h1>
                  <?php if(isset($_SESSION["id_customer"])){?>
                  <p class="text-text2 text-paragraph2 w-[484px]">Berikan kesempatan bagi orang untuk mengenal Anda
                    melalui portofolio yang Anda unggah</p>
                  <div class="wrapbtn">
                    <a class="inline-block px-6 py-4 bg-secondary text-text2 text-paragraph1 rounded-[8px] hover:bg-primary transition-all ease-in-out duration-200"
                      href="index.php?include=portofolio">Lihat Portofolio</a>
                  </div>
                  <?php } else { ?>
                  <p class="text-text2 text-paragraph2 w-[484px]">Eksplorasi Kemampuan Fotografi Dalam Setiap Bidikan
                    Kamera</p>
                  <div class="wrapbtn">
                    <a class="inline-block px-6 py-4 bg-secondary text-text2 text-paragraph1 rounded-[8px] hover:bg-primary transition-all ease-in-out duration-200"
                      href="../fotovideografer/index.php">Mulai sebagai fotografer</a>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="bg-cover h-[670px] w-full" style="background-image: url('./assets/img/hero3.png')">
            <div
              class="h-full w-full bg-gradient-to-b flex justify-center from-[rgba(0,0,0,0.38)] to-[rgba(3,76,95,0.53)]">
              <div class="flex items-center h-full w-4/5">
                <div class="flex flex-col gap-4">
                  <h1 class="text-heading1 text-text2 font-poppins">Jadilah Bagian Dari Tim Videografi!</h1>
                  <p class="text-text2 text-paragraph2 w-[484px]">Ciptakan karya memukau untuk kesan indah bagi setiap
                    klien Blitz</p>
                  <div class="wrapbtn">
                    <?php if (isset($_SESSION["id_customer"])) { ?>
                    <a class="inline-block px-6 py-4 bg-secondary text-text2 text-paragraph1 rounded-[8px] hover:bg-primary transition-all ease-in-out duration-200"
                      href="index.php?include=ulasan">Beri Ulasan</a>
                    <?php } else { ?>
                    <a class="inline-block px-6 py-4 bg-secondary text-text2 text-paragraph1 rounded-[8px] hover:bg-primary transition-all ease-in-out duration-200"
                      href="../fotovideografer/index.php">Mulai sebagai videografer</a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
<!-- Hero End -->
<!-- container -->
<div class="container mx-auto">
  <!-- about section 1 -->
  <section data-aos="fade-up" data-aos-duration="2000" class="mt-[100px] flex justify-center">
    <div class="flex flex-col items-center gap-6">
      <div class="flex flex-col items-center w-[70%] gap-3">
        <h1 class="text-text1 text-heading1 font-poppins text-center">Blitz didirikan pada tahun 2022 sebagai penyedia
          jasa fotografi & videografi yang berkomitmen untuk menciptakan karya sekelas profesional</h1>
        <p class="text-paragraph2 text-text1 text-center w-[60%]">Kepuasaan pelanggan merupakan hal mutlak yang
          menjadi tujuan utama Blitz untuk terus menghasilkan seni memukau sekalis berstandar tinggi</p>
      </div>
      <div class="flex flex-row gap-4">
        <a class="btn-primary" href="index.php?include=portofolio">Portofolio</a>
        <a class="flex px-6 py-4 gap-1 text-primary text-paragraph1 rounded-[8px] transition-all ease-in-out duration-200 group"
          href="index.php?include=jasa-kami">Jasa Kami
          <span class="fill-primary group-hover:translate-x-2 transition-all ease-in-out duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
              <path fill="none" d="M0 0h24v24H0z" />
              <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
            </svg> </span></a>
      </div>
    </div>
  </section>
  <!-- about section 1 end -->
  <!-- about section 2 -->
  <section class="mt-[100px]">
    <div class="flex flex-col items-center gap-[70px]">
      <div class="flex flex-row items-center w-3/4 relative">
        <img data-aos="fade-right" class="h-[436px] rounded-[8px]" src="./assets/img/about1.png" alt="" />
        <div data-aos="fade-right" data-aos-delay="300" class="flex flex-col absolute z-10 right-48">
          <h2 class="text-text1 text-heading2 font-poppins">Melampaui Ekspetasi</h2>
          <p class="text-text1 text-paragraph2 w-[395px]">Blitz memiliki dedikasi penuh untuk mencapai tujuan utama
            dalam menghasilkan karya visual dan karya audio visual yang bernilai seni tinggi sekaligus abadi bagi
            penikmatnya</p>
        </div>
      </div>
      <div class="flex flex-row gap-6 w-3/4">
        <div data-aos="fade-left" data-aos-delay="300" class="flex flex-col justify-center ml-[120px]">
          <h2 class="text-text1 text-heading2 font-poppins">Kreatif dan Berkomitmen</h2>
          <p class="text-text1 text-paragraph2">
            Kami terhimpun dari kumpulan individu yang senang bekerja dalam bidang industri kreatif, memiliki banyak
            pengalaman, selalu tertarik mengeksplorasi dan meningkatkan kemampuan dalam menciptakan karya yang
            artistik
          </p>
        </div>
        <img data-aos="fade-left" class="h-[380px] rounded-[8px]" src="./assets/img/about2.png" alt="" />
      </div>
      <div class="flex flex-col items-center gap-6">
        <img data-aos="fade-up" class="h-[400px] rounded-[8px]" src="./assets/img/about3.png" alt="" />
        <div data-aos="fade-up" data-aos-delay="300" class="flex flex-col items-center gap-3">
          <h2 class="text-text1 text-heading2 font-poppins">KALEIDOSKOP BLITZ</h2>
          <p class="text-text1 text-paragraph2 w-[60%] text-center">Canda, tawa, dan bahagia dalam bidikan kamera</p>
        </div>
      </div>
    </div>
  </section>
  <!-- about section 2 end -->
  <!-- ulasan -->
  <section class="mt-[100px]">
    <h1 class="text-text1 text-heading1 mb-1 text-center font-poppins">Apa kata mereka?</h1>
    <div class="wrap ulasan relative">
      <div class="swiper SwiperUlasan w-3/4">
        <div class="swiper-wrapper">
          <?php 
            $sql_ulasan =" SELECT `c`.`foto`, `c`.`nama`, `u`.`deskripsi`, `u`.`rating`,`u`.`isi` 
            FROM `ulasan` `u` 
            JOIN `customer` `c` ON `u`.`id_customer` = `c`.`id_customer`
            ORDER BY `c`.`nama` LIMIT 5";
            $query_ulasan = mysqli_query($koneksi, $sql_ulasan);
            while($data_ulasan = mysqli_fetch_row($query_ulasan)){
              $foto_ulasan = $data_ulasan[0];
              $nama_ulasan = $data_ulasan[1];
              $deskripsi_ulasan = $data_ulasan[2];
              $rating_ulasan = $data_ulasan[3];
              $isi_ulasan = $data_ulasan[4];
              ?>
          <div class="swiper-slide flex justify-center">
            <div
              class="w-full mx-6 my-10 h-[320px] bg-primary rounded-[32px] flex items-center justify-center overflow-hidden">
              <div class="flex flex-row items-center gap-[70px]">
                <?php if($foto_ulasan == null){ ?>
                <span class="fill-text2 ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="188" height="188">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                      d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                  </svg>
                </span>
                <?php } else{ ?>
                <img class="h-[188px] rounded-full border-4 border-text2" src="./assets/img/<?php echo $foto_ulasan ?>"
                  alt="" />
                <?php }?>
                <div class="flex flex-col gap-4">
                  <div class="flex flex-col">
                    <h4 class="text-heading4 text-text2 font-poppins"><?php echo $nama_ulasan ?></h4>
                    <p class="text-text3 text-paragraph4"><?php echo $deskripsi_ulasan ?></p>
                  </div>
                  <p class="text-paragraph4 text-text2 w-[568px]">
                    <?php echo $isi_ulasan ?>
                  </p>
                  <div class="flex flex-row gap-1">
                    <?php 
                  for($i=0 ; $i < $rating_ulasan ; $i++) { ?>
                    <span class="fill-background3">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                      </svg>
                    </span>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
        <div class="flex flex-row justify-between w-full h-full items-center z-50 absolute top-0">
          <div
            class="swiper-ulasan-button-prev bg-secondary rounded-full hover:bg-background2 transition-all ease-in-out duration-200 fill-text2 left-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
              <path fill="none" d="M0 0h24v24H0z" />
              <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
            </svg>
          </div>
          <div
            class="swiper-ulasan-button-next bg-secondary rounded-full hover:bg-background2 transition-all ease-in-out duration-200 fill-text2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
              <path fill="none" d="M0 0h24v24H0z" />
              <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
            </svg>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <!-- ulasan end -->
  <!-- faq -->
  <section class="mt-[100px]">
    <div class="flex flex-col items-center gap-6">
      <h1 class="text-text1 text-heading1 font-poppins">Tentang Blitz</h1>
      <div class="flex flex-col w-1/2 gap-3">
        <div class="flex flex-col accordion">
          <div
            class="accordion-faq flex flex-row px-6 py-[10px] cursor-pointer bg-primary rounded-[8px] justify-between w-full">
            <h5 class="text-text2 text-heading5">Mengapa harus memilih Blitz?</h5>
            <span class="fill-text2 transition-all ease-in-out duration-200">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M12 10.828l-4.95 4.95-1.414-1.414L12 8l6.364 6.364-1.414 1.414z" />
              </svg>
            </span>
          </div>
          <div
            class="content-accordion h-0 px-12 w-full bg-secondary text-text2 rounded-[8px] text-paragraph2 overflow-hidden transition-all ease-in-out duration-200">
            <ul class="list-disc">
              <li>Tersedia jasa fotografi dan jasa videografi dengan kebijakan harga</li>
              <li>Fotografer dan videografer berkompeten di bidang industri kreatif</li>
              <li>Kualitas foto dan video yang dihasilkan dalam format definisi tinggi (HD)</li>
              <li>Metode pembayaran yang mudah cukup dengan mengunggah bukti transfer</li>
            </ul>
          </div>
        </div>
        <div class="flex flex-col accordion">
          <div
            class="accordion-faq flex flex-row px-6 py-[10px] cursor-pointer bg-primary rounded-[8px] justify-between w-full">
            <h5 class="text-text2 text-heading5">Bagaimana melakukan pemesanan jasa di Blitz?</h5>
            <span class="fill-text2 transition-all ease-in-out duration-200">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M12 10.828l-4.95 4.95-1.414-1.414L12 8l6.364 6.364-1.414 1.414z" />
              </svg>
            </span>
          </div>
          <div
            class="content-accordion h-0 px-12 w-full bg-secondary text-text2 rounded-[8px] text-paragraph2 overflow-hidden transition-all ease-in-out duration-200">
            <ul class="list-disc">
              <li>Jelajahi halaman portofolio untuk menemukan fotografer/videografer yang sesuai dengan keinginan Anda
              </li>
              <li>Kunjungi halaman jasa kami untuk memilih jasa fotografi/videografi</li>
              <li>Tentukan pilihan kategori yang tersedia</li>
              <li>Isi jadwal dan fotografer/videografer</li>
              <li>Bayarkan sesuai nominal yang tertera</li>
              <li>Konfirmasi pembayaran dengan mengunggah bukti transfer</li>
            </ul>
          </div>
        </div>
        <div class="flex flex-col accordion">
          <div
            class="accordion-faq flex flex-row px-6 py-[10px] cursor-pointer bg-primary rounded-[8px] justify-between w-full">
            <h5 class="text-text2 text-heading5">Apa saja yang akan didapatkan pelanggan dari Blitz?</h5>
            <span class="fill-text2 transition-all ease-in-out duration-200">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M12 10.828l-4.95 4.95-1.414-1.414L12 8l6.364 6.364-1.414 1.414z" />
              </svg>
            </span>
          </div>
          <div
            class="content-accordion h-0 px-12 w-full bg-secondary text-text2 rounded-[8px] text-paragraph2 overflow-hidden transition-all ease-in-out duration-200">
            <ul class="list-disc">
              <li>File mentah dalam bentuk file lunak (soft file) yang dikirimkan melalui emailyang telah didaftarkan
                oleh pelanggan</li>
              <li>File yang sudah diedit yang dikirimkan melaluiyang telah didaftarkan oleh pelanggan</li>
            </ul>
          </div>
        </div>
        <div class="flex flex-col accordion">
          <div
            class="accordion-faq flex flex-row px-6 py-[10px] cursor-pointer bg-primary rounded-[8px] justify-between w-full">
            <h5 class="text-text2 text-heading5">Bagaimana cara pembayaran jasa di Blitz?</h5>
            <span class="fill-text2 transition-all ease-in-out duration-200">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M12 10.828l-4.95 4.95-1.414-1.414L12 8l6.364 6.364-1.414 1.414z" />
              </svg>
            </span>
          </div>
          <div
            class="content-accordion h-0 px-6 w-full bg-secondary text-text2 rounded-[8px] text-paragraph2 overflow-hidden transition-all ease-in-out duration-200">
            Pelanggan dapat membayar jasa Blitz menggunakan rekening pribadi (tidak terbatas pada Bank tertentu). Lalu
            mengunggah bukti transfer sebagai bentuk konfirmasi pesanan.
          </div>
        </div>
        <div class="flex flex-col accordion">
          <div
            class="accordion-faq flex flex-row px-6 py-[10px] cursor-pointer bg-primary rounded-[8px] justify-between w-full">
            <h5 class="text-text2 text-heading5">Bagaimana Blitz mengirimkan hasil kepada pelanggan?</h5>
            <span class="fill-text2 transition-all ease-in-out duration-200">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M12 10.828l-4.95 4.95-1.414-1.414L12 8l6.364 6.364-1.414 1.414z" />
              </svg>
            </span>
          </div>
          <div
            class="content-accordion h-0 px-12 w-full bg-secondary text-text2 rounded-[8px] text-paragraph2 overflow-hidden transition-all ease-in-out duration-200">
            <ul class="list-disc">
              <li>Blitz akan mengirimkan hasil foto dalam dua bentuk file yaitu, file mentah dan file yang telah
                diedit melalui email yang didaftarkan oleh pelanggan</li>
              <li>Blitz akan mengirimkan hasil video yang telah diedit melalui email yang didaftarkan oleh pelanggan
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- faq end -->
  <!-- klien kami -->
  <section class="mt-[100px]">
    <div class="flex flex-col items-center gap-6">
      <h1 class="text-heading1 text-text1 font-poppins">Klien Kami</h1>
      <div class="flex flex-col items-center gap-[30px]">
        <div class="flex flex-col gap-[42px]">
          <div class="flex flex-row gap-[46px]">
            <a href="#">
              <div
                class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                <img class="h-[142px]" src="./assets/img/hp-logo.png" alt="" />
              </div>
            </a>
            <a href="#">
              <div
                class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                <img class="h-[43px]" src="./assets/img/bni-logo.png" alt="" />
              </div>
            </a>
            <a href="#">
              <div
                class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                <img class="h-[48px]" src="./assets/img/bca-logo.png" alt="" />
              </div>
            </a>
            <a href="#">
              <div
                class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                <img class="h-[96px]" src="./assets/img/lg-logo.png" alt="" />
              </div>
            </a>
          </div>
          <div class="flex flex-row gap-[46px]">
            <a href="#">
              <div
                class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                <img class="h-[56px]" src="./assets/img/kai-logo.png" alt="" />
              </div>
            </a>
            <a href="#">
              <div
                class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                <img class="h-[106px]" src="./assets/img/nestle-logo.png" alt="" />
              </div>
            </a>
            <a href="#">
              <div
                class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                <img class="h-16" src="./assets/img/moencak-logo.png" alt="" />
              </div>
            </a>
            <a href="#">
              <div
                class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                <img class="h-[96px]" src="./assets/img/adidas-logo.png" alt="" />
              </div>
            </a>
          </div>
        </div>
        <div class="wrapbtn">
          <a class="px-6 py-4 bg-primary text-text2 text-paragraph1 rounded-[8px] hover:bg-secondary transition-default flex items-center"
            href="index.php?include=detail-klienkami">Lihat selengkapnya
            <span>
              <svg class="fill-text2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
              </svg>
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- klien kami end -->
</div>