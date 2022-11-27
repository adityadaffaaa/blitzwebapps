<!-- Hero -->
<section class="my-16">
  <div class="w-full h-[500px] bg-cover bg-fixed" style="background-image: url('./assets/img/hero-ulasan.png')">
    <div class="w-full h-full gradient-primary flex items-center justify-center">
      <h1 class="text-text2 text-heading1 font-poppins">Beri Ulasan Kepada Kami</h1>
    </div>
  </div>
</section>
<!-- Hero End -->
<div class="container mx-auto">
  <!-- ulasan -->
  <section class="mt-[50px] flex justify-center">
    <div class="flex flex-row w-4/5 justify-evenly">
      <div class="flex flex-col gap-3 justify-center">
        <img class="h-32" src="./assets/Blitz Logo.png" alt="" />
        <p class="text-primary text-lg italic font-poppins font-semibold">CAPTURE A BEAUTIFUL MOMENT WITH US</p>
      </div>
      <form method="" action="" class="flex flex-col gap-8">
        <div class="flex flex-col gap-3">
          <h3 class="text-text1 text-heading3 font-poppins">Ulasan</h3>
          <p class="text-text1 text-paragraph2 w-[464px]">Kami akan sangat berbahagia jika Anda berkenan menjadi
            bagian dari pengembangan Blitz melalui ulasan yang diberikan di bawah ini.</p>
        </div>
        <div class="flex flex-col gap-4">
          <div class="flex flex-col gap-1">
            <h5 class="text-text1 text-heading5 font-poppins">Beri Ulasan</h5>
            <div class="rating flex flex-row-reverse gap-1 justify-end">
              <input class="peer hidden" type="radio" name="rate" id="rate-5" />
              <label for="rate-5" class="fill-text3 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                </svg>
              </label>
              <input class="peer hidden" type="radio" name="rate" id="rate-4" />
              <label for="rate-4" class="fill-text3 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                </svg>
              </label>
              <input class="peer hidden" type="radio" name="rate" id="rate-3" />
              <label for="rate-3" class="fill-text3 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                </svg>
              </label>
              <input class="peer hidden" type="radio" name="rate" id="rate-2" />
              <label for="rate-2" class="fill-text3 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                </svg>
              </label>
              <input class="peer hidden" type="radio" name="rate" id="rate-1" />
              <label for="rate-1" class="fill-text3 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                </svg>
              </label>
            </div>
          </div>
          <div class="flex flex-col gap-2">
            <label class="text-text1 text-heading5 font-poppins" for="deskripsi">Deskripsi Diri</label>
            <input
              class="px-[14px] py-[10px] bg-secondary outline-none rounded-lg text-text2 text-paragraph2 placeholder:text-text2"
              type="text" name="deskripsi" id="deskripsi" placeholder="Cth: Mahasiswa UB" />
          </div>
          <div class="flex flex-col gap-2">
            <label class="text-text1 text-heading5 font-poppins" for="pesan">Pesan Ulasan</label>
            <textarea
              class="px-[14px] py-[10px] bg-secondary outline-none rounded-lg text-text2 text-paragraph2 placeholder:text-text2"
              placeholder="Pesan Ulasan" name="pesan" id="pesan" cols="30" rows="10"></textarea>
          </div>
          <button
            class="px-[14px] py-[10px] flex justify-center bg-primary rounded-lg transition-default text-text2 hover:shadow-[0px_0px_24px] hover:shadow-primary hover:scale-105"
            type="submit">
            Kirim
            <span class="fill-text2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
              </svg>
            </span>
          </button>
        </div>
      </form>
    </div>
  </section>
  <!-- ulasan end -->
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