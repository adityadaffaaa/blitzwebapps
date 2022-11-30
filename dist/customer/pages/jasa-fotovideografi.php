<div class="container mx-auto">
  <!-- jasa fotografi -->
  <section class="mt-10">
    <form action="" enctype="multipart/form-data">
      <div class="flex flex-col items-center gap-[50px]">
        <h1 class="text-text1 text-heading1 font-poppins">Jasa Fotografi & Videografi</h1>
        <div class="flex flex-row justify-evenly w-3/4">
          <div class="flex flex-col gap-4">
            <label class="text-text1 text-heading3 font-poppins" for="kategori">Kategori</label>
            <div class="grid grid-cols-2 gap-[42px]">
              <!-- ulang tahun -->
              <label class="cursor-pointer" for="ulang-tahun">
                <div class="flex flex-col relative items-center gap-4">
                  <input id="ulang-tahun" class="peer hidden" type="radio" name="kategori" value="Ulang Tahun" />
                  <div
                    class="card-kategori group w-[270px] h-[326px] bg-cover rounded-2xl peer-checked:shadow-default ring-4 ring-transparent peer-checked:ring-secondary transition-default hover:shadow-default overflow-hidden"
                    style="background-image: url('./assets/img/kategori-ulangtahun.png')">
                    <div
                      class="hover-kategori group-hover:translate-y-0 peer-checked:translate-y-0 translate-y-96 w-full h-full bg-[rgba(238,100,87,0.6)] flex items-center justify-center transition-all ease-in-out duration-500">
                      <h4 class="text-text2 text-heading4 font-poppins">IDR 550.000/hari</h4>
                    </div>
                  </div>
                  <p class="text-text3 text-paragraph1 peer-checked:text-secondary">Pesta Ulang Tahun</p>
                </div>
              </label>
              <!-- ulang tahun end -->
              <!-- kelulusan -->
              <label class="cursor-pointer" for="kelulusan">
                <div class="flex flex-col relative items-center gap-4">
                  <input id="kelulusan" class="peer sr-only" type="radio" name="kategori" value="Kelulusan" />
                  <div
                    class="card-kategori group w-[270px] h-[326px] bg-cover rounded-2xl peer-checked:shadow-default ring-4 ring-transparent peer-checked:ring-secondary transition-default hover:shadow-default overflow-hidden"
                    style="background-image: url('./assets/img/kategori-kelulusan.png')">
                    <div
                      class="hover-kategori group-hover:translate-y-0 translate-y-96 w-full h-full bg-[rgba(238,100,87,0.6)] flex items-center justify-center transition-all ease-in-out duration-500">
                      <h4 class="text-text2 text-heading4 font-poppins">IDR 750.000/hari</h4>
                    </div>
                  </div>
                  <p class="text-text3 text-paragraph1 peer-checked:text-secondary">Kelulusan</p>
                </div>
              </label>
              <!-- kelulusan end -->
              <!-- ulang tahun -->
              <label class="cursor-pointer" for="liburan">
                <div class="flex flex-col relative items-center gap-4">
                  <input id="liburan" class="peer hidden" type="radio" name="kategori" value="Liburan" />
                  <div
                    class="card-kategori group w-[270px] h-[326px] bg-cover rounded-2xl peer-checked:shadow-default ring-4 ring-transparent peer-checked:ring-secondary transition-default hover:shadow-default overflow-hidden"
                    style="background-image: url('./assets/img/kategori-liburan.png')">
                    <div
                      class="hover-kategori group-hover:translate-y-0 peer-checked:translate-y-0 translate-y-96 w-full h-full bg-[rgba(238,100,87,0.6)] flex items-center justify-center transition-all ease-in-out duration-500">
                      <h4 class="text-text2 text-heading4 font-poppins">IDR 850.000/hari</h4>
                    </div>
                  </div>
                  <p class="text-text3 text-paragraph1 peer-checked:text-secondary">Liburan</p>
                </div>
              </label>
              <!-- ulang tahun end -->
              <!-- kelulusan -->
              <label class="cursor-pointer" for="pra-nikah">
                <div class="flex flex-col relative items-center gap-4">
                  <input id="pra-nikah" class="peer sr-only" type="radio" name="kategori" value="Pra Nikah" />
                  <div
                    class="card-kategori group w-[270px] h-[326px] bg-cover rounded-2xl peer-checked:shadow-default ring-4 ring-transparent peer-checked:ring-secondary transition-default hover:shadow-default overflow-hidden"
                    style="background-image: url('./assets/img/kategori-wedding.png')">
                    <div
                      class="hover-kategori group-hover:translate-y-0 translate-y-96 w-full h-full bg-[rgba(238,100,87,0.6)] flex items-center justify-center transition-all ease-in-out duration-500">
                      <h4 class="text-text2 text-heading4 font-poppins">IDR 1.470.000/hari</h4>
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
                <option value="-">Pilih Foto/Videografer</option>
                <?php
                $sql_fotovideografer = "SELECT `id_fotovideografer`, `nama` FROM `fotovideografer` WHERE `role` = 'fotografer dan videografer' ORDER BY `nama`";
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
              <h3 class="text-primary text-heading3 font-poppins">IDR 1.100.000</h3>
            </div>
            <div class="flex flex-col gap-1">
              <h5 class="text-text1 text-heading5 font-poppins">No. Rekening</h5>
              <h3 class="text-text1 text-paragraph2">123456789 (BNI)</h3>
            </div>
            <a class="px-6 py-4 text-text2 text-paragraph1 flex justify-center bg-primary rounded-lg transition-default hover:bg-secondary"
              href="#">Pesan Sekarang
              <span class="fill-text2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </form>
  </section>
  <!-- jasa fotografi end -->
</div>