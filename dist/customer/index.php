<?php
include("../koneksi/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <?php include "includes/head.php" ?>
</head>


<body class="font-lora overflow-x-hidden custom-scrollbar scrollbar">
  <?php 
  include "include/navbar.php";
  if(isset($_GET["include"])){
  $include = $_GET["include"];
  if($include == "beranda"){
   include "pages/beranda.php";
  }
  }
  ?>
  <!-- Hero -->
  <section>
    <div class="wrap relative">
      <div class="swiper hero-carousel">
        <div class="swiper-wrapper mb-10 mt-16">
          <div class="swiper-slide">
            <div class="bg-cover h-[670px] w-full" style="background-image: url('../assets/img/hero1.png')">
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
                      <a class="btn-primary" href="./sign-in.html">Mulai sebagai customer</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="bg-cover h-[670px] w-full" style="background-image: url('../assets/img/hero2.png')">
              <div
                class="h-full w-full bg-gradient-to-b flex justify-center from-[rgba(0,0,0,0.38)] to-[rgba(3,76,95,0.53)]">
                <div class="flex items-center h-full w-4/5">
                  <div class="flex flex-col gap-4">
                    <h1 class="text-heading1 text-text2 font-poppins">Hasilkan Gambar Sekelas Profesional!</h1>
                    <p class="text-text2 text-paragraph2 w-[484px]">Eksplorasi Kemampuan Fotografi Dalam Setiap Bidikan
                      Kamera</p>
                    <div class="wrapbtn">
                      <a class="inline-block px-6 py-4 bg-secondary text-text2 text-paragraph1 rounded-[8px] hover:bg-primary transition-all ease-in-out duration-200"
                        href="/dist/fotovideografer/pages/signin.html">Mulai sebagai fotografer</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="bg-cover h-[670px] w-full" style="background-image: url('../assets/img/hero3.png')">
              <div
                class="h-full w-full bg-gradient-to-b flex justify-center from-[rgba(0,0,0,0.38)] to-[rgba(3,76,95,0.53)]">
                <div class="flex items-center h-full w-4/5">
                  <div class="flex flex-col gap-4">
                    <h1 class="text-heading1 text-text2 font-poppins">Jadilah Bagian Dari Tim Videografi!</h1>
                    <p class="text-text2 text-paragraph2 w-[484px]">Ciptakan karya memukau untuk kesan indah bagi setiap
                      klien Blitz</p>
                    <div class="wrapbtn">
                      <a class="inline-block px-6 py-4 bg-secondary text-text2 text-paragraph1 rounded-[8px] hover:bg-primary transition-all ease-in-out duration-200"
                        href="/dist/fotovideografer/pages/signin.html">Mulai sebagai videografer</a>
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
          <a class="btn-primary" href="./portofolio.html">Portofolio</a>
          <a class="flex px-6 py-4 gap-1 text-primary text-paragraph1 rounded-[8px] transition-all ease-in-out duration-200 group"
            href="./jasakami.html">Jasa Kami
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
          <img data-aos="fade-right" class="h-[436px] rounded-[8px]" src="../assets/img/about1.png" alt="" />
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
          <img data-aos="fade-left" class="h-[380px] rounded-[8px]" src="../assets/img/about2.png" alt="" />
        </div>
        <div class="flex flex-col items-center gap-6">
          <img data-aos="fade-up" class="h-[400px] rounded-[8px]" src="../assets/img/about3.png" alt="" />
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
            <div class="swiper-slide flex justify-center">
              <div
                class="w-full mx-6 my-10 h-[320px] bg-primary rounded-[32px] flex items-center justify-center overflow-hidden">
                <div class="flex flex-row items-center gap-[70px]">
                  <img class="h-[188px] rounded-full border-4 border-text2" src="../assets/img/ulasan1.png" alt="" />
                  <div class="flex flex-col gap-4">
                    <div class="flex flex-col">
                      <h4 class="text-heading4 text-text2 font-poppins">Michael Roland</h4>
                      <p class="text-text3 text-paragraph4">Mahasiswa Universitas Brawijaya</p>
                    </div>
                    <p class="text-paragraph4 text-text2 w-[568px]">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, lorem tempor nunc ultrices
                      pellentesque facilisis aliquet leo vulputate. Sagittis, dignissim nibh ultricies aliquet ornare
                      donec turpis. Adipiscing nec
                      egestas cursus amet elementum duis commodo quam nunc.
                    </p>
                    <div class="flex flex-row gap-1">
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide flex justify-center">
              <div
                class="w-full mx-6 my-10 h-[320px] bg-primary rounded-[32px] flex items-center justify-center overflow-hidden">
                <div class="flex flex-row items-center gap-[70px]">
                  <img class="h-[188px] rounded-full border-4 border-text2" src="../assets/img/ulasan1.png" alt="" />
                  <div class="flex flex-col gap-4">
                    <div class="flex flex-col">
                      <h4 class="text-heading4 text-text2 font-poppins">Edward Dinson</h4>
                      <p class="text-text3 text-paragraph4">Mahasiswa Universitas Brawijaya</p>
                    </div>
                    <p class="text-paragraph4 text-text2 w-[568px]">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, lorem tempor nunc ultrices
                      pellentesque facilisis aliquet leo vulputate. Sagittis, dignissim nibh ultricies aliquet ornare
                      donec turpis. Adipiscing nec
                      egestas cursus amet elementum duis commodo quam nunc.
                    </p>
                    <div class="flex flex-row gap-1">
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide flex justify-center">
              <div
                class="w-full mx-6 my-10 h-[320px] bg-primary rounded-[32px] flex items-center justify-center overflow-hidden">
                <div class="flex flex-row items-center gap-[70px]">
                  <img class="h-[188px] rounded-full border-4 border-text2" src="../assets/img/ulasan1.png" alt="" />
                  <div class="flex flex-col gap-4">
                    <div class="flex flex-col">
                      <h4 class="text-heading4 text-text2 font-poppins">Regi Mahendra</h4>
                      <p class="text-text3 text-paragraph4">Mahasiswa Universitas Brawijaya</p>
                    </div>
                    <p class="text-paragraph4 text-text2 w-[568px]">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus, lorem tempor nunc ultrices
                      pellentesque facilisis aliquet leo vulputate. Sagittis, dignissim nibh ultricies aliquet ornare
                      donec turpis. Adipiscing nec
                      egestas cursus amet elementum duis commodo quam nunc.
                    </p>
                    <div class="flex flex-row gap-1">
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                      <span class="fill-background3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
                  <img class="h-[142px]" src="../assets/img/hp-logo.png" alt="" />
                </div>
              </a>
              <a href="#">
                <div
                  class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                  <img class="h-[43px]" src="../assets/img/bni-logo.png" alt="" />
                </div>
              </a>
              <a href="#">
                <div
                  class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                  <img class="h-[48px]" src="../assets/img/bca-logo.png" alt="" />
                </div>
              </a>
              <a href="#">
                <div
                  class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                  <img class="h-[96px]" src="../assets/img/lg-logo.png" alt="" />
                </div>
              </a>
            </div>
            <div class="flex flex-row gap-[46px]">
              <a href="#">
                <div
                  class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                  <img class="h-[56px]" src="../assets/img/kai-logo.png" alt="" />
                </div>
              </a>
              <a href="#">
                <div
                  class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                  <img class="h-[106px]" src="../assets/img/nestle-logo.png" alt="" />
                </div>
              </a>
              <a href="#">
                <div
                  class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                  <img class="h-16" src="../assets/img/moencak-logo.png" alt="" />
                </div>
              </a>
              <a href="#">
                <div
                  class="h-[164px] w-[164px] flex justify-center items-center rounded-full hover:shadow-default hover:scale-110 transition-default">
                  <img class="h-[96px]" src="../assets/img/adidas-logo.png" alt="" />
                </div>
              </a>
            </div>
          </div>
          <div class="wrapbtn">
            <a class="px-6 py-4 bg-primary text-text2 text-paragraph1 rounded-[8px] hover:bg-secondary transition-default flex items-center"
              href="./detail-klienkami.html">Lihat selengkapnya
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
  <!-- chat -->
  <div data-aos="fade-up"
    class="chat flex flex-col gap-8 items-end bottom-10 right-10 z-[100] fixed drop-shadow-[0px_4px_24px_rgba(0,0,0,0.3)]">
    <!-- chat card -->
    <div
      class="chat-content w-[410px] rounded-[16px] hidden overflow-hidden translate-x-64 opacity-0 transition-all ease-in-out duration-500 bg-text2">
      <div class="flex flex-col">
        <!-- header chat -->
        <div class="w-full h-full p-6 bg-secondary">
          <div class="flex flex-col">
            <h3 class="text-text2 text-heading3">Halo, Daffa 👋</h3>
            <p class="text-text2 text-paragraph2">Ada yang bisa kami bantu?</p>
          </div>
        </div>
        <!-- header chat end -->
        <!-- chat body -->
        <div class="w-full h-[300px] px-6 py-6 overflow-auto custom-scrollbar bg-text2">
          <div class="flex flex-col gap-6">
            <!-- chat content -->
            <div class="flex flex-row">
              <div class="flex flex-col w-[200px] gap-1">
                <div
                  class="px-2 py-3 bg-background1 shadow-default rounded-lg relative before:content-cs before:flex before:items-end before:justify-center before:h-7 before:w-7 before:bg-primary before:rounded-full before:absolute before:-top-4 before:left-0">
                  <p class="text-text1 text-paragraph4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="flex flex-row justify-between">
                  <p class="text-text3 text-paragraph5">09.30</p>
                  <p class="text-text3 text-paragraph5">18-01-2022</p>
                </div>
              </div>
            </div>
            <!-- chat content end -->
            <!-- chat content -->
            <div class="flex flex-row justify-end">
              <div class="flex flex-col w-[200px] gap-1">
                <div
                  class="px-2 py-3 bg-background1 shadow-default rounded-lg relative before:content-['kamu'] before:text-text2 before:flex before:items-end before:justify-center before:px-2 before:py-[2px] before:bg-secondary before:rounded-full before:absolute before:-top-4 before:right-0">
                  <p class="text-text1 text-paragraph4">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
                </div>
                <div class="flex flex-row justify-between">
                  <p class="text-text3 text-paragraph5">09.34</p>
                  <p class="text-text3 text-paragraph5">18-01-2022</p>
                </div>
              </div>
            </div>
            <!-- chat content end -->
            <!-- chat content -->
            <div class="flex flex-row">
              <div class="flex flex-col w-[200px] gap-1">
                <div
                  class="px-2 py-3 bg-background1 shadow-default rounded-lg relative before:content-cs before:flex before:items-end before:justify-center before:h-7 before:w-7 before:bg-primary before:rounded-full before:absolute before:-top-4 before:left-0">
                  <p class="text-text1 text-paragraph4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="flex flex-row justify-between">
                  <p class="text-text3 text-paragraph5">09.38</p>
                  <p class="text-text3 text-paragraph5">18-01-2022</p>
                </div>
              </div>
            </div>
            <!-- chat content end -->
            <!-- chat content -->
            <div class="flex flex-row justify-end">
              <div class="flex flex-col w-[200px] gap-1">
                <div
                  class="px-2 py-3 bg-background1 shadow-default rounded-lg relative before:content-['kamu'] before:text-text2 before:flex before:items-end before:justify-center before:px-2 before:py-[2px] before:bg-secondary before:rounded-full before:absolute before:-top-4 before:right-0">
                  <p class="text-text1 text-paragraph4">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
                </div>
                <div class="flex flex-row justify-between">
                  <p class="text-text3 text-paragraph5">09.40</p>
                  <p class="text-text3 text-paragraph5">18-01-2022</p>
                </div>
              </div>
            </div>
            <!-- chat content end -->
          </div>
        </div>
        <!-- chat body end -->
        <form action="">
          <div class="w-full flex flex-row px-6 py-6 justify-between">
            <textarea class="custom-chat" name="pesan" id="pesan" placeholder="Masukkan pesan kamu..."></textarea>
            <button
              class="h-[42px] w-[42px] bg-secondary rounded-full flex justify-center items-center hover:shadow-default hover:scale-110 transition-default"
              type="submit">
              <span class="fill-text2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" />
                </svg>
              </span>
            </button>
          </div>
        </form>
      </div>
    </div>
    <!-- chat card end -->
    <!-- chat toggle -->
    <div class="flex flex-row relative items-center">
      <div class="wrap overflow-hidden">
        <div class="py-[10px] pl-6 pr-12 translate-x-32 bg-primary rounded-full flex items-center transition-default">
          <p class="text-text2 text-paragraph1">Chat with us</p>
        </div>
      </div>
      <div class="chat-toggle bg-secondary p-[10px] absolute -right-3 cursor-pointer rounded-full">
        <span class="fill-text2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M10 3h4a8 8 0 1 1 0 16v3.5c-5-2-12-5-12-11.5a8 8 0 0 1 8-8zm2 14h2a6 6 0 1 0 0-12h-4a6 6 0 0 0-6 6c0 3.61 2.462 5.966 8 8.48V17z" />
          </svg>
        </span>
      </div>
    </div>
    <!-- chat toggle end -->
  </div>
  <!-- chat end -->
  <!-- footer -->
  <footer class="mt-[100px]">
    <div class="w-full py-10 flex justify-center bg-secondary rounded-t-[16px]">
      <div class="flex flex-col w-4/5 items-center gap-4">
        <div class="flex flex-row w-full justify-between">
          <div class="flex flex-col justify-center gap-[14px]">
            <img class="w-[200px]" src="../assets/Blitz Logo White.png" alt="" />
            <p class="text-text2 text-sm italic font-poppins font-semibold">CAPTURE A BEAUTIFUL MOMENT WITH US</p>
          </div>
          <div class="flex flex-col gap-[14px]">
            <h5 class="text-text2 text-heading5 font-poppins">Lokasi</h5>
            <p class="text-text2 text-paragraph2 w-[300px]">2HJV+G2V, Jl. Dieng Atas, Sumberjo, Kalisongo, Kec. Dau,
              Kabupaten Malang, Jawa Timur 65151</p>
          </div>
          <div class="flex flex-col gap-[14px]">
            <h5 class="text-text2 text-heading5 font-poppins">Kontak Kami</h5>
            <div class="flex flex-col gap-3">
              <div class="flex flex-col gap-1">
                <p class="text-text2 text-paragraph2">(+62) 81807866444</p>
                <p class="text-text2 text-paragraph2">blitz@gmail.com</p>
              </div>
              <div class="wrap">
                <ul class="flex flex-row gap-2">
                  <li>
                    <a href="#">
                      <svg class="hover:scale-110 transition-default fill-text2" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" width="32" height="32">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0-2a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm6.5-.25a1.25 1.25 0 0 1-2.5 0 1.25 1.25 0 0 1 2.5 0zM12 4c-2.474 0-2.878.007-4.029.058-.784.037-1.31.142-1.798.332-.434.168-.747.369-1.08.703a2.89 2.89 0 0 0-.704 1.08c-.19.49-.295 1.015-.331 1.798C4.006 9.075 4 9.461 4 12c0 2.474.007 2.878.058 4.029.037.783.142 1.31.331 1.797.17.435.37.748.702 1.08.337.336.65.537 1.08.703.494.191 1.02.297 1.8.333C9.075 19.994 9.461 20 12 20c2.474 0 2.878-.007 4.029-.058.782-.037 1.309-.142 1.797-.331.433-.169.748-.37 1.08-.702.337-.337.538-.65.704-1.08.19-.493.296-1.02.332-1.8.052-1.104.058-1.49.058-4.029 0-2.474-.007-2.878-.058-4.029-.037-.782-.142-1.31-.332-1.798a2.911 2.911 0 0 0-.703-1.08 2.884 2.884 0 0 0-1.08-.704c-.49-.19-1.016-.295-1.798-.331C14.925 4.006 14.539 4 12 4zm0-2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2z" />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="hover:scale-110 transition-default fill-text2" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" width="32" height="32">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M15.3 5.55a2.9 2.9 0 0 0-2.9 2.847l-.028 1.575a.6.6 0 0 1-.68.583l-1.561-.212c-2.054-.28-4.022-1.226-5.91-2.799-.598 3.31.57 5.603 3.383 7.372l1.747 1.098a.6.6 0 0 1 .034.993L7.793 18.17c.947.059 1.846.017 2.592-.131 4.718-.942 7.855-4.492 7.855-10.348 0-.478-1.012-2.141-2.94-2.141zm-4.9 2.81a4.9 4.9 0 0 1 8.385-3.355c.711-.005 1.316.175 2.669-.645-.335 1.64-.5 2.352-1.214 3.331 0 7.642-4.697 11.358-9.463 12.309-3.268.652-8.02-.419-9.382-1.841.694-.054 3.514-.357 5.144-1.55C5.16 15.7-.329 12.47 3.278 3.786c1.693 1.977 3.41 3.323 5.15 4.037 1.158.475 1.442.465 1.973.538z" />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <svg class="hover:scale-110 transition-default fill-text2" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" width="32" height="32">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M22 10.69c0 1.787-.687 3.4-2.123 4.974-2.1 2.414-6.788 5.363-7.864 5.812-1.074.451-.911-.287-.874-.537l.137-.85c.034-.262.068-.65-.032-.9-.112-.277-.556-.424-.881-.492C5.558 18.059 2 14.7 2 10.69c0-4.475 4.487-8.118 10-8.118 5.512 0 10 3.643 10 8.118zm-3.6 3.625c1.113-1.22 1.6-2.361 1.6-3.625 0-3.268-3.51-6.118-8-6.118s-8 2.85-8 6.118c0 2.905 2.728 5.507 6.626 6.024l.147.026c1.078.226 1.884.614 2.329 1.708l.036.096c1.806-1.176 4.174-2.98 5.261-4.229zm-.262-4a.526.526 0 0 1 0 1.05h-1.463v.938h1.462a.525.525 0 1 1 0 1.049H16.15a.526.526 0 0 1-.522-.524V8.852c0-.287.235-.525.525-.525h1.988a.525.525 0 0 1-.003 1.05h-1.462v.938h1.462zm-3.213 2.513a.524.524 0 0 1-.526.522.515.515 0 0 1-.425-.208l-2.036-2.764v2.45a.525.525 0 0 1-1.047 0V8.852a.522.522 0 0 1 .52-.523c.162 0 .312.086.412.211l2.052 2.775V8.852c0-.287.235-.525.525-.525.287 0 .525.238.525.525v3.976zm-4.784 0a.527.527 0 0 1-.526.524.526.526 0 0 1-.523-.524V8.852c0-.287.236-.525.525-.525.289 0 .524.238.524.525v3.976zm-2.055.524H6.097a.528.528 0 0 1-.525-.524V8.852a.527.527 0 0 1 1.05 0v3.45h1.464a.525.525 0 0 1 0 1.05z" />
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full py-[14px] bg-primary">
      <p class="text-text2 text-paragraph2 text-center">© 2022 Blitz by Kelompok 3 SI-3B</p>
    </div>
  </footer>
  <!-- footer end -->
</body>
<!-- swiper js -->
<script src="./parts/swiper-bundle.min.js"></script>

<!-- swiper hero carousel -->
<script src="./parts/herocarousel.js"></script>

<!-- swiper ulasan -->
<script src="./parts/ulasan.js"></script>

<!-- script js -->
<script src="./js/beranda.js"></script>

<!-- aos -->
<script src="/node_modules/aos/dist/aos.js"></script>
<script src="./js/aos-init.js"></script>

</html>