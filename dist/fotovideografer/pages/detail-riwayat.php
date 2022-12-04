<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <div class="flex flex-col">
          <h3 class="text-text1 text-heading3 font-poppins">Detail Riwayat</h3>
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
      <div class="flex flex-col bg-background1 shadow-default rounded-lg mx-1 border-2 border-primary">
        <div class="flex flex-row px-6 py-2 items-center justify-between border-b-2 border-primary">
          <h5 class="text-text1 text-heading5 font-poppins">Data Riwayat</h5>
          <a class="px-4 py-[10px] bg-primary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-secondary"
            href="index.php?include=riwayat">
            <span class="fill-text2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
              </svg>
            </span>
            Kembali</a>
        </div>
        <div class="px-6 py-4 flex flex-col gap-6 items-start">
          <div class="flex flex-col py-6 gap-6 w-full h-[490px] overflow-auto custom-scrollbar">
            <div class="flex flex-col gap-6">
              <div class="flex flex-row w-full justify-between items-center">
                <p class="text-text1 text-paragraph1">Foto Customer</p>
                <div class="flex w-[800px] justify-start mr-16">
                  <img class="h-52 rounded-lg" src="./../customer/assets/img/daffa.png" alt="" />
                </div>
              </div>
              <div class="flex flex-row w-full justify-between items-center">
                <p class="text-text1 text-paragraph1">Customer</p>
                <div class="flex justify-start mr-16">
                  <input readonly
                    class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]" name="nama"
                    id="nama" type="text" value="Daffa Fawwaz Aditya" />
                </div>
              </div>
              <div class="flex flex-row w-full justify-between items-center">
                <p class="text-text1 text-paragraph1">No Telepon</p>
                <div class="flex justify-start mr-16">
                  <input readonly
                    class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                    name="username" id="username" type="text" value="daffaaditya" />
                </div>
              </div>
              <div class="flex flex-row w-full justify-between items-center">
                <p class="text-text1 text-paragraph1">Email</p>
                <div class="flex justify-start mr-16">
                  <input readonly
                    class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                    name="email" id="email" type="text" value="daffa@gmail.com" />
                </div>
              </div>
              <div class="flex flex-row w-full justify-between items-center">
                <p class="text-text1 text-paragraph1">Alamat</p>
                <div class="flex justify-start mr-16">
                  <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                    name="notelepon" id="notelepon" type="text" value="081807866444" />
                </div>
              </div>
            </div>
            <div class="w-full flex justify-end pr-16">
              <div
                class="p-6 w-full bg-background1 border-2 flex flex-row justify-between shadow-default border-secondary rounded-lg">
                <div class="flex flex-col gap-4 items-start">
                  <p class="text-text2 p-[10px] w-full text-center bg-primary rounded-lg text-paragraph1 font-poppins">
                    Deskripsi Pemesanan</p>
                  <div class="flex flex-row gap-8">
                    <div class="flex flex-col gap-4">
                      <p class="text-text1 text-paragraph1">Jasa</p>
                      <p class="text-text1 text-paragraph1">Kategori</p>
                      <p class="text-text1 text-paragraph1">Tanggal Pesan</p>
                      <p class="text-text1 text-paragraph1">Tanggal Mulai</p>
                      <p class="text-text1 text-paragraph1">Tanggal Selesai</p>
                      <p class="text-text1 text-paragraph1">Fotografer / Videografer</p>
                    </div>
                    <div class="flex flex-col gap-4">
                      <p class="text-text1 text-paragraph1">Fotografi</p>
                      <p class="text-text1 text-paragraph1">Ulang Tahun</p>
                      <p class="text-text1 text-paragraph1">20/01/2022</p>
                      <p class="text-text1 text-paragraph1">21/01/2022</p>
                      <p class="text-text1 text-paragraph1">22/01/2022</p>
                      <p class="text-text1 text-paragraph1">Hery Taufan</p>
                    </div>
                  </div>
                </div>
                <div class="flex flex-col items-center h-full justify-between">
                  <div class="h-[205px] w-[300px] overflow-hidden bg-cover rounded-lg ring-2 ring-secondary"
                    style="background-image: url('./../customer/assets/img/kategori-ulangtahun.png')">
                    <div class="w-full h-full bg-[rgba(238,100,87,0.6)] flex justify-center items-center">
                      <h5 class="text-text2 text-heading5 font-poppins">Ulang Tahun</h5>
                    </div>
                  </div>
                  <a class="px-4 py-[10px] w-full justify-center bg-secondary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-background2"
                    href="#">Cek Bukti Pembayaran</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "includes/footer.php" ?>
  </div>
</section>
<!-- content edit profil end -->