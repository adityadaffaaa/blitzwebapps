<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <div class="flex flex-col">
          <h3 class="text-text1 text-heading3 font-poppins">Beranda</h3>
          <p class="text-text1 text-paragraph2">Selamat Datang, <a class="text-primary text-paragraph1">Daffa</a></p>
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
          <p id="menu-desc" class="text-paragraph1 text-[rgba(0,0,0,0.5)] transition-default group-hover:text-text1">
            Log Out</p>
        </a>
      </div>
      <div
        class="flex flex-row p-6 gap-6 justify-between bg-background1 shadow-default rounded-lg mx-1 border-2 border-primary h-[550px] overflow-auto custom-scrollbar">
        <div class="flex flex-col gap-4">
          <div class="p-4 bg-background1 border-2 border-primary rounded-lg shadow-default flex flex-col gap-4">
            <h5 class="text-primary text-heading5 font-poppins">Pendapatan Anda</h5>
            <p class="text-text1 text-paragraph2">IDR 2.000.000</p>
          </div>
          <div class="p-4 bg-background1 border-2 border-primary rounded-lg shadow-default flex flex-col gap-4">
            <h5 class="text-primary text-heading5 font-poppins">Portofolio Anda</h5>
            <div class="flex flex-col gap-3">
              <a href="#" class="w-[500px] h-[380px] bg-cover rounded-lg overflow-hidden group"
                style="background-image: url('./../customer/assets/img/portfolio1.png')">
                <div
                  class="w-full h-full gradient-primary flex justify-center items-center translate-y-96 transition-all ease-in-out duration-500 group-hover:translate-y-0">
                  <h3 class="text-text2 text-heading3 font-poppins">10+</h3>
                </div>
              </a>
              <a class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph1 flex flex-row justify-center transition-default hover:bg-secondary"
                href="#">Edit Portofolio</a>
            </div>
          </div>
        </div>
        <div class="flex flex-col w-full gap-4">
          <div class="p-4 bg-background1 border-2 border-primary rounded-lg shadow-default flex flex-col gap-4">
            <h5 class="text-primary text-heading5 font-poppins">Selasa, 19 Januari 2022</h5>
            <p class="text-primary text-paragraph1 flex items-center gap-1">
              12
              <a class="text-paragraph2 text-text4">Pesanan belum dikerjakan</a>
            </p>
          </div>
          <div
            class="p-4 bg-background1 border-2 border-primary rounded-lg shadow-default flex flex-col justify-center items-center gap-4">
            <h5 class="text-primary text-heading5 font-poppins">Pesanan Terbaru</h5>
            <table class="w-full text-center">
              <thead class="text-text1 text-paragraph1">
                <tr>
                  <th class="py-2">Nama</th>
                  <th class="py-2">Kategori</th>
                  <th class="py-2">Tanggal Mulai</th>
                  <th class="py-2">Total Harga</th>
                </tr>
              </thead>
              <tbody class="text-text1 text-paragraph2">
                <tr>
                  <td class="py-2">Daffa</td>
                  <td class="py-2">Kelulusan</td>
                  <td class="py-2">20 Januari 2022</td>
                  <td class="py-2">IDR 1.600.000</td>
                </tr>
                <tr>
                  <td class="py-2">Daffa</td>
                  <td class="py-2">Kelulusan</td>
                  <td class="py-2">20 Januari 2022</td>
                  <td class="py-2">IDR 1.600.000</td>
                </tr>
                <tr>
                  <td class="py-2">Daffa</td>
                  <td class="py-2">Kelulusan</td>
                  <td class="py-2">20 Januari 2022</td>
                  <td class="py-2">IDR 1.600.000</td>
                </tr>
              </tbody>
            </table>
            <div class="w-full flex justify-end">
              <a class="py-[10px] px-6 bg-primary rounded-lg text-text2 text-paragraph1 flex flex-row justify-center transition-default hover:bg-secondary"
                href="#">Cek Detail</a>
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
<?php
if(!empty($_GET["notif"])){
if ($_GET["notif"]== "terverifikasi") {?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "success",
    iconColor: "#034C5F",
    title: "Data Anda sudah terverifikasi!",
    confirmButtonText: "Okee kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=beranda')
  })
}, 10)
</script>
<?php }?>
<?php }?>