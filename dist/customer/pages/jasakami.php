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
              <?php if(isset($_SESSION["id_customer"])) { ?>
              <a class="btn-primary" href="index.php?include=jasa-fotografi">Pesan sekarang</a>
              <?php } else {?>
              <a class="pilih cursor-pointer btn-primary">Pesan sekarang</a>
              <?php }?>
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
              <?php if (isset($_SESSION["id_customer"])) { ?>
              <a class="btn-primary" href="index.php?include=jasa-videografi">Pesan sekarang</a>
              <?php } else { ?>
              <a class="pilih cursor-pointer btn-primary">Pesan sekarang</a>
              <?php } ?>
            </div>
          </div>
          <!-- jasa videografi end -->
        </div>
        <!-- jasa foto dan videografi -->
        <div
          class="relative w-full h-[545px] flex flex-row items-center bg-background1 overflow-hidden border-4 hover:border-secondary rounded-[16px] transition-default hover:shadow-default">
          <div
            class="w-full h-full absolute bg-[rgba(255,255,255,0.8)] flex items-center justify-center <?php if ($_SESSION["level"] == "gold") { ?> hidden <?php } ?>">
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
        <!-- jasa foto dan videografi end -->
      </div>
    </div>
  </section>
  <!-- pilih jasa end -->
</div>
<script>
const btnPilih = document.querySelectorAll(".pilih");
btnPilih.forEach((evt) => {
  evt.addEventListener("click", () => {
    swal.fire({
      title: "Anda harus Sign In terlebih dahulu!",
      icon: "info",
      iconColor: "#97BEC6",
      confirmButtonText: "Siap kak!",
      confirmButtonColor: "#034C5F",
      showCancelButton: true,
      cancelButtonText: "Nanti dulu deh"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "index.php?include=sign-in-customer";
      }
    });
  });
})
</script>