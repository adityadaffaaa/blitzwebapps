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
      <form method="POST" action="index.php?include=konfirmasi-ulasan" class="flex flex-col gap-8">
        <div class="flex flex-col gap-3">
          <h3 class="text-text1 text-heading3 font-poppins">Ulasan</h3>
          <p class="text-text1 text-paragraph2 w-[464px]">Kami akan sangat berbahagia jika Anda berkenan menjadi
            bagian dari pengembangan Blitz melalui ulasan yang diberikan di bawah ini.</p>
        </div>
        <div class="flex flex-col gap-4">
          <div class="flex flex-col gap-1">
            <h5 class="text-text1 text-heading5 font-poppins">Beri Ulasan</h5>
            <div class="rating flex flex-row-reverse gap-1 justify-end">
              <input class="peer hidden" type="radio" name="rate" id="rate-5" value="5" />
              <label for="rate-5" class="fill-text3 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                </svg>
              </label>
              <input class="peer hidden" type="radio" name="rate" id="rate-4" value="4" />
              <label for="rate-4" class="fill-text3 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                </svg>
              </label>
              <input class="peer hidden" type="radio" name="rate" id="rate-3" value="3" />
              <label for="rate-3" class="fill-text3 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                </svg>
              </label>
              <input class="peer hidden" type="radio" name="rate" id="rate-2" value="2" />
              <label for="rate-2" class="fill-text3 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z" />
                </svg>
              </label>
              <input class="peer hidden" type="radio" name="rate" id="rate-1" value="1" />
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
          <?php
          if(isset($_SESSION["id_customer"])){
          ?>
          <button name="submit"
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
          <?php
          }else{
          ?>
          <a
            class="btn-kirim cursor-pointer px-[14px] py-[10px] flex justify-center bg-primary rounded-lg transition-default text-text2 hover:shadow-[0px_0px_24px] hover:shadow-primary hover:scale-105">
            Kirim
            <span class="fill-text2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
              </svg>
            </span>
          </a>
          <?php } ?>
        </div>
      </form>
    </div>
  </section>
  <!-- ulasan end -->
</div>
<script>
const btnKirim = document.querySelector(".btn-kirim");
btnKirim.addEventListener("click", () => {
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
</script>

<?php 
if(!empty($_GET["notif"])){
  if($_GET["notif"]=="berhasil"){?>
<script>
setTimeout(() => {
  swal.fire({
    title: "Ulasan Anda berhasil dikirim!",
    icon: "success",
    iconColor: "#034C5F",
    confirmButtonText: "Oke kak",
    confirmButtonColor: "#034C5F",
  }).then((result) => {
    swal.fire({
      title: "Terimakasih telah memberi ulasan kepada kami!",
      icon: false,
      confirmButtonText: "Siap kak",
      confirmButtonColor: "#034C5F",
    }).then((res) => {
      window.location.replace('index.php?include=ulasan')
    })
  })
}, 10);
</script>
<?php } else if($_GET["notif"] =="rating kosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Rating harus diisi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then((result) => {
    window.location.replace('index.php?include=ulasan')
  })
}, 10)
</script>
<?php } else if($_GET["notif"] =="deskripsi kosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Deskripsi harus diisi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then((result) => {
    window.location.replace('index.php?include=ulasan')
  })
}, 10)
</script>
<?php } else if($_GET["notif"] =="pesan kosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Pesan kosong",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then((result) => {
    window.location.replace('index.php?include=ulasan')
  })
}, 10)
</script>
<?php } ?>
<?php } ?>