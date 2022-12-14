<div class="container mx-auto">
  <!-- jasa fotografi -->
  <section class="mt-10">
    <form action="index.php?include=konfirmasi-pemesanan-fotovideografi" method="POST" enctype="multipart/form-data">
      <div class="flex flex-col items-center gap-[50px]">
        <h1 class="text-text1 text-heading1 font-poppins">Jasa Fotografi & Videografi</h1>
        <div class="flex flex-row justify-evenly w-3/4">
          <div class="flex flex-col gap-4">
            <label class="text-text1 text-heading3 font-poppins" for="kategori">Kategori</label>
            <div class="grid grid-cols-2 gap-[42px]">
              <!-- ulang tahun -->
              <label class="cursor-pointer" for="ulang-tahun">
                <div class="flex flex-col relative items-center gap-4">
                  <input id="ulang-tahun" onclick="getInputKategoriFotoVideografi(this.value)" class="peer hidden"
                    type="radio" name="kategori" value="16" />
                  <div
                    class="card-kategori group w-[270px] h-[326px] bg-cover rounded-2xl peer-checked:shadow-default ring-4 ring-transparent peer-checked:ring-secondary transition-default hover:shadow-default overflow-hidden"
                    style="background-image: url('./assets/img/kategori-ulangtahun.png')">
                    <div
                      class="hover-kategori group-hover:translate-y-0 peer-checked:translate-y-0 translate-y-96 w-full h-full bg-[rgba(238,100,87,0.6)] flex items-center justify-center transition-all ease-in-out duration-500">
                      <div class="flex flex-col items-center gap-1">
                        <h4 class="text-text2 text-heading4 font-poppins">IDR 1.000.000/hari</h4>
                        <p class="text-text2 text-paragraph2 text-center w-4/5">Harga untuk satu kali
                          sesi acara serta termasuk
                          berkas foto</p>
                      </div>
                    </div>
                  </div>
                  <p class="text-text3 text-paragraph1 peer-checked:text-secondary">Pesta Ulang Tahun</p>
                </div>
              </label>
              <!-- ulang tahun end -->
              <!-- kelulusan -->
              <label class="cursor-pointer" for="kelulusan">
                <div class="flex flex-col relative items-center gap-4">
                  <input id="kelulusan" onclick="getInputKategoriFotoVideografi(this.value)" class="peer sr-only"
                    type="radio" name="kategori" value="17" />
                  <div
                    class="card-kategori group w-[270px] h-[326px] bg-cover rounded-2xl peer-checked:shadow-default ring-4 ring-transparent peer-checked:ring-secondary transition-default hover:shadow-default overflow-hidden"
                    style="background-image: url('./assets/img/kategori-kelulusan.png')">
                    <div
                      class="hover-kategori group-hover:translate-y-0 translate-y-96 w-full h-full bg-[rgba(238,100,87,0.6)] flex items-center justify-center transition-all ease-in-out duration-500">
                      <div class="flex flex-col items-center gap-1">
                        <h4 class="text-text2 text-heading4 font-poppins">IDR 2.000.000/hari</h4>
                        <p class="text-text2 text-paragraph2 text-center w-4/5">Harga untuk satu kali
                          sesi acara serta termasuk
                          berkas foto</p>
                      </div>
                    </div>
                  </div>
                  <p class="text-text3 text-paragraph1 peer-checked:text-secondary">Kelulusan</p>
                </div>
              </label>
              <!-- kelulusan end -->
              <!-- ulang tahun -->
              <label class="cursor-pointer" for="liburan">
                <div class="flex flex-col relative items-center gap-4">
                  <input id="liburan" onclick="getInputKategoriFotoVideografi(this.value)" class="peer hidden"
                    type="radio" name="kategori" value="18" />
                  <div
                    class="card-kategori group w-[270px] h-[326px] bg-cover rounded-2xl peer-checked:shadow-default ring-4 ring-transparent peer-checked:ring-secondary transition-default hover:shadow-default overflow-hidden"
                    style="background-image: url('./assets/img/kategori-liburan.png')">
                    <div
                      class="hover-kategori group-hover:translate-y-0 peer-checked:translate-y-0 translate-y-96 w-full h-full bg-[rgba(238,100,87,0.6)] flex items-center justify-center transition-all ease-in-out duration-500">
                      <div class="flex flex-col items-center gap-1">
                        <h4 class="text-text2 text-heading4 font-poppins">IDR 3.000.000/hari</h4>
                        <p class="text-text2 text-paragraph2 text-center w-4/5">Harga untuk satu kali
                          sesi acara serta termasuk
                          berkas foto</p>
                      </div>
                    </div>
                  </div>
                  <p class="text-text3 text-paragraph1 peer-checked:text-secondary">Liburan</p>
                </div>
              </label>
              <!-- ulang tahun end -->
              <!-- kelulusan -->
              <label class="cursor-pointer" for="pra-nikah">
                <div class="flex flex-col relative items-center gap-4">
                  <input id="pra-nikah" onclick="getInputKategoriFotoVideografi(this.value)" class="peer sr-only"
                    type="radio" name="kategori" value="19" />
                  <div
                    class="card-kategori group w-[270px] h-[326px] bg-cover rounded-2xl peer-checked:shadow-default ring-4 ring-transparent peer-checked:ring-secondary transition-default hover:shadow-default overflow-hidden"
                    style="background-image: url('./assets/img/kategori-wedding.png')">
                    <div
                      class="hover-kategori group-hover:translate-y-0 translate-y-96 w-full h-full bg-[rgba(238,100,87,0.6)] flex items-center justify-center transition-all ease-in-out duration-500">
                      <div class="flex flex-col items-center gap-1">
                        <h4 class="text-text2 text-heading4 font-poppins">IDR 4.000.000/hari</h4>
                        <p class="text-text2 text-paragraph2 text-center w-4/5">Harga untuk satu kali
                          sesi acara serta termasuk
                          berkas foto</p>
                      </div>
                    </div>
                  </div>
                  <p class="text-text3 text-paragraph1 peer-checked:text-secondary">Pra Nikah</p>
                </div>
              </label>
              <!-- kelulusan end -->
            </div>
          </div>
          <div class="flex flex-col gap-8">
            <div class="flex flex-col gap-4">
              <h3 class="text-text1 text-heading3 font-poppins">Pilih Jadwal</h3>
              <div class="flex flex-col gap-1">
                <label class="text-text1 text-paragraph2" for="tanggal_mulai">Tanggal Mulai</label>
                <input class="p-[10px] w-[366px cursor-pointer outline-none bg-secondary text-text2 rounded-lg"
                  type="date" name="tanggal_mulai" id="tanggal_mulai" />
              </div>
              <div class="flex flex-col gap-1">
                <label class="text-text1 text-paragraph2" for="tanggal_selesai">Tanggal Selesai</label>
                <input
                  class="p-[10px] py-[10px] cursor-pointer w-[366px] outline-none bg-secondary text-text2 rounded-lg"
                  type="date" name="tanggal_selesai" id="tanggal_selesai" />
              </div>
            </div>
            <div class="flex flex-col gap-4">
              <label class="text-text1 text-heading3 font-poppins" for="fotovideografer">Pilih Foto/Videografer</label>
              <select class="p-[10px] bg-secondary cursor-pointer text-text2 rounded-lg outline-none"
                name="fotovideografer" id="fotovideografer">
                <option value="0">Pilih Foto/Videografer</option>
                <?php
                $sql_fotovideografer = "SELECT `id_fotovideografer`, `nama`  
                FROM `fotovideografer` 
                WHERE `role` = 'fotografer dan videografer' 
                AND `status`= 'terverifikasi'
                AND `foto` <> 'null'
                AND `instagram` <> 'null'
                AND `deskripsi_pribadi` <> 'null'
                ORDER BY `nama`";
                $query_fotovideografer = mysqli_query($koneksi, $sql_fotovideografer);
                while($data_fotovideografer = mysqli_fetch_row($query_fotovideografer)){
                  $id_fotovideografer = $data_fotovideografer[0]; 
                  $nama = $data_fotovideografer[1]; 
                  ?>
                <option value="<?php echo $id_fotovideografer ?>"><?php echo $nama ?></option>
                <?php }?>
              </select>
            </div>
            <div class="flex flex-col gap-1">
              <h5 class="text-text1 text-heading5 font-poppins">Upload Bukti Pembayaran</h5>
              <input
                class="cursor-pointer p-[10px] w-[300px] bg-primary text-paragraph2 rounded-lg text-text2 transition-default hover:bg-secondary outline-none"
                type="file" name="pembayaran" id="pembayaran" />
            </div>
            <div class="flex flex-col gap-1">
              <h5 class="text-text1 text-heading5 font-poppins">Total Harga</h5>
              <h3 id="rupiah" class="text-primary text-heading3 font-poppins">IDR <a id="total-harga"
                  class="text-primary text-heading3 font-poppins">0</a></h3>
            </div>
            <div class="flex flex-col gap-1">
              <h5 class="text-text1 text-heading5 font-poppins">No. Rekening</h5>
              <h3 class="text-text1 text-paragraph2">123456789 (BNI)</h3>
            </div>
            <button type="submit"
              class=" px-6 py-4 text-text2 text-paragraph1 flex justify-center bg-primary rounded-lg transition-default hover:bg-secondary">Pesan
              Sekarang
              <span class="fill-text2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
                </svg>
              </span>
            </button>
          </div>
        </div>
      </div>
    </form>
  </section>
  <!-- jasa fotografi end -->
</div>
<?php if (!empty($_GET['notif'])) { ?>
<?php if($_GET["notif"]=="pemesananberhasil"){ ?>
<script>
setTimeout(() => {
  swal.fire({
    title: "Pesanan berhasil!",
    icon: "success",
    iconColor: "#034C5F",
    confirmButtonText: "Oke kak!",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    swal.fire({
      title: "Tunggu dikonfirmasi oleh admin ya!",
      icon: "info",
      iconColor: "#97BEC6",
      confirmButtonText: "Siap kak!",
      confirmButtonColor: "#034C5F",
    }).then(() => {
      window.location.replace('index.php?include=jasa-fotovideografi');
    })
  })
}, 10)
</script>
<?php }else if($_GET["notif"]=="pemesanangagal"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Pemesanan Anda gagal!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=jasa-fotovideografi')
  })
}, 10)
</script>
<?php }else if($_GET["notif"]=="kategorikosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Kategori kosong!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=jasa-fotovideografi')
  })
}, 10)
</script>
<?php }else if($_GET["notif"]=="tanggalmulaikosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Tanggal mulai kosong!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=jasa-fotovideografi')
  })
}, 10)
</script>
<?php }else if($_GET["notif"]=="tanggalselesaikosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Tanggal selesai kosong!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=jasa-fotovideografi')
  })
}, 10)
</script>
<?php }else if($_GET["notif"]=="videograferkosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Foto/Videografer kosong!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=jasa-fotovideografi')
  })
}, 10)
</script>
<?php }else if($_GET["notif"]=="pembayarankosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Bukti pembayaran kosong!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=jasa-fotovideografi')
  })
}, 10)
</script>
<?php }?>
<?php }?>