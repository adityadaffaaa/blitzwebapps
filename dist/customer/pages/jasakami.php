<!-- Hero -->
<section class="my-16">
  <div class="w-full h-[500px] bg-cover bg-fixed" style="background-image: url('./assets/img/herojasakami.png')">
    <div class="w-full h-full gradient-primary flex items-center justify-center">
      <div class="flex flex-col w-4/5 gap-4">
        <h1 class="text-text2 text-heading1 font-poppins">Jasa Kami</h1>
        <p class="text-text2 text-paragraph2 w-[560px]">Temukan fotografer dan videografer handal yang akan membantu
          Anda dalam mengabadikan momen terbaik.</p>
      </div>
    </div>
  </div>
</section>
<!-- Hero End -->
<div class="container mx-auto">
  <!-- pilih jasa -->
  <section class="mt-[50px]">
    <div class="flex flex-col items-center gap-6">
      <h1 class="text-heading1 text-text1 font-poppins">Pilih Jasa</h1>
      <div class="flex flex-col w-[65%] gap-[50px]">
        <div class="flex flex-row justify-between">
          <!-- jasa fotografi -->
          <div
            class="w-[463px] flex flex-col bg-background1 overflow-hidden border-4 hover:border-secondary rounded-[16px] transition-default hover:shadow-default">
            <div class="w-full rounded-b-2xl bg-cover h-[300px]"
              style="background-image: url('./assets/img/pilihjasa-fotografi.png')"></div>
            <div class="w-full p-6 flex flex-col gap-3 items-start">
              <h3 class="text-text1 text-heading3 font-poppins">Fotografi</h3>
              <p class="text-text4 text-paragraph2">Ciptakan hasil bidikan foto yang memukau dalam tiap bingkai
                gambar.</p>
              <a class="btn-primary" href="index.php?include=jasa-fotografi">Pesan sekarang</a>
            </div>
          </div>
          <!-- jasa fotografi end -->
          <!-- jasa videografi -->
          <div
            class="w-[463px] flex flex-col bg-background1 overflow-hidden border-4 hover:border-secondary rounded-[16px] transition-default hover:shadow-default">
            <div class="w-full rounded-b-2xl bg-cover h-[300px]"
              style="background-image: url('./assets/img/pilihjasa-videografi.png')"></div>
            <div class="w-full p-6 flex flex-col gap-3 items-start">
              <h3 class="text-text1 text-heading3 font-poppins">Videografi</h3>
              <p class="text-text4 text-paragraph2">Rekam tiap momen berharga Anda dalam satu sinema yang berkesan dan
                tak terlupakan.</p>
              <a class="btn-primary" href="index.php?include=jasa-videografi">Pesan sekarang</a>
            </div>
          </div>
          <!-- jasa videografi end -->
        </div>
        <div
          class="relative w-full h-[545px] flex flex-row items-center bg-background1 overflow-hidden border-4 hover:border-secondary rounded-[16px] transition-default hover:shadow-default">
          <div id="lock-jasafotovideografi"
            class="w-full h-full absolute bg-[rgba(255,255,255,0.8)] flex items-center justify-center">
            <div class="flex flex-col items-center">
              <span class="fill-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="96" height="96">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M12 1l8.217 1.826a1 1 0 0 1 .783.976v9.987a6 6 0 0 1-2.672 4.992L12 23l-6.328-4.219A6 6 0 0 1 3 13.79V3.802a1 1 0 0 1 .783-.976L12 1zm0 2.049L5 4.604v9.185a4 4 0 0 0 1.781 3.328L12 20.597l5.219-3.48A4 4 0 0 0 19 13.79V4.604L12 3.05zM12 7a2 2 0 0 1 1.001 3.732L13 15h-2v-4.268A2 2 0 0 1 12 7z" />
                </svg>
              </span>
              <h4 class="text-primary text-heading4 text-center font-poppins w-[60%]">Pesan di BlitZ 3 kali untuk
                membuka layanan jasa ini</h4>
            </div>
          </div>
          <div class="h-full w-1/2 bg-cover rounded-r-2xl"
            style="background-image: url('./assets/img/pilihjasa-fotovideografi.png')"></div>
          <div class="flex flex-col w-1/2 p-6 gap-6 items-start">
            <h3 class="text-text1 text-heading3 font-poppins">Videografi dan Fotografi</h3>
            <p class="text-text4 text-paragraph2">Tak terbatas pada bingkai foto namun juga dalam rekaman abadi yang
              dapat mengingatkan Anda pada setiap rasa yang tercipta.</p>
            <a class="btn-primary" href="index.php?include=jasa-fotovideografi">Pesan sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- pilih jasa end -->
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
      <div class="w-full h-[300px] px-6 py-6 overflow-auto bg-text2 custom-scrollbar">
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