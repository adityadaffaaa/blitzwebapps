<!-- Hero -->
<section class="my-16">
  <div class="w-full h-[500px] bg-cover bg-fixed" style="background-image: url('./assets/img/hero-riwayat.png')">
    <div class="w-full h-full gradient-primary flex items-center justify-center">
      <h1 class="text-text2 text-heading1 font-poppins">Riwayat Pemesanan Anda</h1>
    </div>
  </div>
</section>
<!-- Hero End -->
<form action="" method="">
  <div class="container mx-auto">
    <!-- pencarian riwayat -->
    <section class="mt-[50px] flex justify-center">
      <div class="flex flex-row w-4/5 justify-between">
        <div class="flex flex-row gap-4">
          <label class="cursor-pointer" for="lihat-semua">
            <input class="peer sr-only" type="radio" name="kategori" id="lihat-semua" value="Lihat semua" checked />
            <p
              class="inline-block px-4 py-3 ring-2 ring-primary rounded-lg text-primary text-paragraph4 transition-default hover:bg-primary hover:text-text2 peer-checked:bg-primary peer-checked:text-text2">
              Lihat Semua</p>
          </label>
          <label class="cursor-pointer" for="pesta-ulang-tahun">
            <input class="peer sr-only" type="radio" name="kategori" id="pesta-ulang-tahun" value="Pesta ulang tahun" />
            <p
              class="inline-block px-4 py-3 ring-2 ring-primary rounded-lg text-primary text-paragraph4 transition-default hover:bg-primary hover:text-text2 peer-checked:bg-primary peer-checked:text-text2">
              Pesta Ulang Tahun</p>
          </label>
          <label class="cursor-pointer" for="kelulusan">
            <input class="peer sr-only" type="radio" name="kategori" id="kelulusan" value="Kelulusan" />
            <p
              class="inline-block px-4 py-3 ring-2 ring-primary rounded-lg text-primary text-paragraph4 transition-default hover:bg-primary hover:text-text2 peer-checked:bg-primary peer-checked:text-text2">
              Kelulusan</p>
          </label>
          <label class="cursor-pointer" for="liburan">
            <input class="peer sr-only" type="radio" name="kategori" id="liburan" value="Liburan" />
            <p
              class="inline-block px-4 py-3 ring-2 ring-primary rounded-lg text-primary text-paragraph4 transition-default hover:bg-primary hover:text-text2 peer-checked:bg-primary peer-checked:text-text2">
              Liburan</p>
          </label>
          <label class="cursor-pointer" for="pra-nikah">
            <input class="peer sr-only" type="radio" name="kategori" id="pra-nikah" value="Pra Nikah" />
            <p
              class="inline-block px-4 py-3 ring-2 ring-primary rounded-lg text-primary text-paragraph4 transition-default hover:bg-primary hover:text-text2 peer-checked:bg-primary peer-checked:text-text2">
              Pra Nikah</p>
          </label>
        </div>
        <div class="flex flex-row items-center gap-6">
          <div class="flex flex-row p-[10px] border-2 border-text4 rounded-lg w-[320px]">
            <input class="outline-none w-full text-text1 text-paragraph4" name="pencarian" id="pencarian" type="text"
              placeholder="Cari Riwayat" />
            <button type="submit" class="fill-text4 cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z" />
              </svg>
            </button>
          </div>
          <span class="filter fill-primary cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
              <path fill="none" d="M0 0h24v24H0z" />
              <path d="M14 14v6l-4 2v-8L4 5V3h16v2l-6 9zM6.404 5L12 13.394 17.596 5H6.404z" />
            </svg>
          </span>
        </div>
      </div>
    </section>
  </div>
  <!-- filter pop up -->
  <div
    class="filter-popup-background hidden w-full h-[100vh] z-[80] fixed top-0 items-center justify-center bg-[rgba(0,0,0,0.5)] opacity-0 transition-all ease-in-out duration-500">
    <div
      class="filter-popup p-6 bg-background1 relative shadow-default flex flex-col gap-4 rounded-lg transition-all ease-in-out duration-500 translate-y-64">
      <div
        class="close-popup absolute -top-4 transition-all ease-in-out duration-200 right-0 text-paragraph1 font-poppins w-8 h-8 flex items-center justify-center cursor-pointer rounded-lg bg-secondary hover:bg-primary">
        <span class="fill-text2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
          </svg>
        </span>
      </div>
      <div class="flex flex-row gap-4">
        <div class="flex flex-col gap-3">
          <div class="flex flex-col gap-2">
            <p class="text-primary text-paragraph1">Jasa</p>
            <label class="radio flex flex-row cursor-pointer items-center gap-2" for="fotografi">
              <input class="hidden peer" type="radio" name="jasa" id="fotografi" />
              <div
                class="rounded-full w-4 h-4 border-4 border-text3 peer-checked:border-secondary peer-checked:bg-background2">
              </div>
              <p class="text-text3 peer-checked:text-primary text-paragraph2">Fotografi</p>
            </label>
            <label class="radio flex flex-row cursor-pointer items-center gap-2" for="videografi">
              <input class="hidden peer" type="radio" name="jasa" id="videografi" />
              <div
                class="rounded-full w-4 h-4 border-4 border-text3 peer-checked:border-secondary peer-checked:bg-background2">
              </div>
              <p class="text-text3 peer-checked:text-primary text-paragraph2">Videografi</p>
            </label>
            <label class="radio flex flex-row cursor-pointer items-center gap-2" for="fotovideografi">
              <input class="hidden peer" type="radio" name="jasa" id="fotovideografi" />
              <div
                class="rounded-full w-4 h-4 border-4 border-text3 peer-checked:border-secondary peer-checked:bg-background2">
              </div>
              <p class="text-text3 peer-checked:text-primary text-paragraph2">Foto dan Videografi</p>
            </label>
          </div>
          <div class="flex flex-col gap-2">
            <p class="text-primary text-paragraph1">Foto/Videografer</p>
            <select class="p-1 bg-secondary cursor-pointer text-text2 text-paragraph4 rounded-lg outline-none"
              name="fotovideografer" id="fotovideografer">
              <option value="-">Pilih Foto/Videografer</option>
              <option value="Hery Taufan">Hery Taufan</option>
              <option value="Hery Taufan">Hery Taufan</option>
            </select>
          </div>
          <div class="flex flex-col gap-2">
            <p class="text-primary text-paragraph1">Tanggal Pesan</p>
            <input class="p-1 cursor-pointer outline-none text-paragraph4 bg-secondary text-text2 rounded-lg"
              type="date" name="tanggal_pesan" id="tanggal_pesan" />
          </div>
        </div>
        <div class="flex flex-col gap-3">
          <div class="flex flex-col gap-2">
            <p class="text-primary text-paragraph1">Tanggal Mulai</p>
            <input class="p-1 cursor-pointer outline-none text-paragraph4 bg-secondary text-text2 rounded-lg"
              type="date" name="tanggal_mulai" id="tanggal_mulai" />
          </div>
          <div class="flex flex-col gap-2">
            <p class="text-primary text-paragraph1">Tanggal Akhir</p>
            <input class="p-1 cursor-pointer outline-none text-paragraph4 bg-secondary text-text2 rounded-lg"
              type="date" name="tanggal_akhir" id="tanggal_akhir" />
          </div>
        </div>
      </div>
      <div class="flex flex-col gap-2">
        <p class="text-primary text-paragraph1">Rentang Harga</p>
        <div class="flex flex-row gap-2 items-center text-primary">
          <div class="flex flex-row items-center gap-1">
            <p class="text-primary text-paragraph4">Min</p>
            <input placeholder="300000"
              class="p-1 w-[100px] rounded-lg text-primary text-paragraph4 placeholder:text-paragraph4 outline-none border-2 border-primary"
              type="text" name="min" id="min" value="" />
          </div>
          -
          <div class="flex flex-row items-center gap-1">
            <p class="text-primary text-paragraph4">Maks</p>
            <input placeholder="2999999"
              class="p-1 w-[100px] rounded-lg text-primary text-paragraph4 placeholder:text-paragraph4 outline-none border-2 border-primary"
              type="text" name="min" id="min" value="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- filter pop up end -->
</form>
<!-- pencarian riwayat end -->
<div class="container mx-auto">
  <!-- tabel riwayat -->
  <section class="mt-[42px] flex justify-center">
    <div class="flex flex-col items-center w-4/5 gap-6">
      <table class="w-full text-text2 text-paragraph1 font-poppins">
        <thead class="bg-secondary">
          <tr>
            <th class="rounded-tl-lg py-[14px] px-2">No</th>
            <th class="px-2">Kategori</th>
            <th class="px-2">Jasa</th>
            <th class="px-2">Tanggal Pesan</th>
            <th class="px-2">Tanggal Mulai</th>
            <th class="px-2">Tanggal Akhir</th>
            <th class="px-2">Foto/Videografer</th>
            <th class="px-2">Total Pembayaran</th>
            <th class="px-2">Bukti</th>
            <th class="px-2">Status</th>
            <th class="rounded-tr-lg px-3">
              <p class="hidden"></p>
            </th>
          </tr>
        </thead>
        <!-- data riwayat -->
        <tbody class="text-text1 text-paragraph1 font-lora">
          <tr class="baris border-b-[1px] border-b-text3">
            <td class="text-center py-4">1</td>
            <td class="text-center py-4">Liburan</td>
            <td class="text-center py-4">Fotografi</td>
            <td class="text-center py-4">04/01/2022</td>
            <td class="text-center py-4">07/01/2022</td>
            <td class="text-center py-4">09/01/2022</td>
            <td class="flex justify-center py-4">
              <div class="flex flex-row items-center gap-2">
                <img class="h-[42px] rounded-full" src="./assets/img/hery.png" alt="" />
                <div class="flex flex-col gap-[2px]">
                  <p>Hery Taufan</p>
                  <p class="text-text3 text-paragraph4">@herytaufan119</p>
                </div>
              </div>
            </td>
            <td class="text-center py-4">IDR 350.000</td>
            <td class="flex justify-center py-4 relative">
              <span class="fill-primary absolute top-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M9 2.003V2h10.998C20.55 2 21 2.455 21 2.992v18.016a.993.993 0 0 1-.993.992H3.993A1 1 0 0 1 3 20.993V8l6-5.997zM5.83 8H9V4.83L5.83 8zM11 4v5a1 1 0 0 1-1 1H5v10h14V4h-8z" />
                </svg>
              </span>
            </td>
            <td class="text-center py-4">
              <p class="text-text2 py-1 px-3 bg-primary rounded-lg">Selesai</p>
            </td>
            <td class="flex justify-center py-4 px-4 relative">
              <span class="hapus fill-secondary absolute top-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-4.586 6l1.768 1.768-1.414 1.414L12 15.414l-1.768 1.768-1.414-1.414L10.586 14l-1.768-1.768 1.414-1.414L12 12.586l1.768-1.768 1.414 1.414L13.414 14zM9 4v2h6V4H9z" />
                </svg>
              </span>
            </td>
          </tr>
          <tr class="baris border-b-[1px] border-b-text3">
            <td class="text-center py-4">1</td>
            <td class="text-center py-4">Liburan</td>
            <td class="text-center py-4">Fotografi</td>
            <td class="text-center py-4">04/01/2022</td>
            <td class="text-center py-4">07/01/2022</td>
            <td class="text-center py-4">09/01/2022</td>
            <td class="flex justify-center py-4">
              <div class="flex flex-row items-center gap-2">
                <img class="h-[42px] rounded-full" src="./assets/img/hery.png" alt="" />
                <div class="flex flex-col gap-[2px]">
                  <p>Hery Taufan</p>
                  <p class="text-text3 text-paragraph4">@herytaufan119</p>
                </div>
              </div>
            </td>
            <td class="text-center py-4">IDR 350.000</td>
            <td class="flex justify-center py-4 relative">
              <span class="fill-primary absolute top-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M9 2.003V2h10.998C20.55 2 21 2.455 21 2.992v18.016a.993.993 0 0 1-.993.992H3.993A1 1 0 0 1 3 20.993V8l6-5.997zM5.83 8H9V4.83L5.83 8zM11 4v5a1 1 0 0 1-1 1H5v10h14V4h-8z" />
                </svg>
              </span>
            </td>
            <td class="text-center py-4">
              <p class="text-text2 py-1 px-3 bg-primary rounded-lg">Selesai</p>
            </td>
            <td class="flex justify-center py-4 relative">
              <span class="hapus fill-secondary absolute top-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-4.586 6l1.768 1.768-1.414 1.414L12 15.414l-1.768 1.768-1.414-1.414L10.586 14l-1.768-1.768 1.414-1.414L12 12.586l1.768-1.768 1.414 1.414L13.414 14zM9 4v2h6V4H9z" />
                </svg>
              </span>
            </td>
          </tr>
          <tr class="baris border-b-[1px] border-b-text3">
            <td class="text-center py-4">1</td>
            <td class="text-center py-4">Liburan</td>
            <td class="text-center py-4">Fotografi</td>
            <td class="text-center py-4">04/01/2022</td>
            <td class="text-center py-4">07/01/2022</td>
            <td class="text-center py-4">09/01/2022</td>
            <td class="flex justify-center py-4">
              <div class="flex flex-row items-center gap-2">
                <img class="h-[42px] rounded-full" src="./assets/img/hery.png" alt="" />
                <div class="flex flex-col gap-[2px]">
                  <p>Hery Taufan</p>
                  <p class="text-text3 text-paragraph4">@herytaufan119</p>
                </div>
              </div>
            </td>
            <td class="text-center py-4">IDR 350.000</td>
            <td class="flex justify-center py-4 relative">
              <span class="fill-primary absolute top-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M9 2.003V2h10.998C20.55 2 21 2.455 21 2.992v18.016a.993.993 0 0 1-.993.992H3.993A1 1 0 0 1 3 20.993V8l6-5.997zM5.83 8H9V4.83L5.83 8zM11 4v5a1 1 0 0 1-1 1H5v10h14V4h-8z" />
                </svg>
              </span>
            </td>
            <td class="text-center py-4">
              <p class="text-text2 py-1 px-3 bg-primary rounded-lg">Selesai</p>
            </td>
            <td class="flex justify-center py-4 relative">
              <span class="hapus fill-secondary absolute top-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-4.586 6l1.768 1.768-1.414 1.414L12 15.414l-1.768 1.768-1.414-1.414L10.586 14l-1.768-1.768 1.414-1.414L12 12.586l1.768-1.768 1.414 1.414L13.414 14zM9 4v2h6V4H9z" />
                </svg>
              </span>
            </td>
          </tr>
          <tr class="baris border-b-[1px] border-b-text3">
            <td class="text-center py-4">1</td>
            <td class="text-center py-4">Liburan</td>
            <td class="text-center py-4">Fotografi</td>
            <td class="text-center py-4">04/01/2022</td>
            <td class="text-center py-4">07/01/2022</td>
            <td class="text-center py-4">09/01/2022</td>
            <td class="flex justify-center py-4">
              <div class="flex flex-row items-center gap-2">
                <img class="h-[42px] rounded-full" src="./assets/img/hery.png" alt="" />
                <div class="flex flex-col gap-[2px]">
                  <p>Hery Taufan</p>
                  <p class="text-text3 text-paragraph4">@herytaufan119</p>
                </div>
              </div>
            </td>
            <td class="text-center py-4">IDR 350.000</td>
            <td class="flex justify-center py-4 relative">
              <span class="fill-primary absolute top-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M9 2.003V2h10.998C20.55 2 21 2.455 21 2.992v18.016a.993.993 0 0 1-.993.992H3.993A1 1 0 0 1 3 20.993V8l6-5.997zM5.83 8H9V4.83L5.83 8zM11 4v5a1 1 0 0 1-1 1H5v10h14V4h-8z" />
                </svg>
              </span>
            </td>
            <td class="text-center py-4">
              <p class="text-text2 py-1 px-3 bg-primary rounded-lg">Selesai</p>
            </td>
            <td class="flex justify-center py-4 relative">
              <span class="hapus fill-secondary absolute top-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-4.586 6l1.768 1.768-1.414 1.414L12 15.414l-1.768 1.768-1.414-1.414L10.586 14l-1.768-1.768 1.414-1.414L12 12.586l1.768-1.768 1.414 1.414L13.414 14zM9 4v2h6V4H9z" />
                </svg>
              </span>
            </td>
          </tr>
          <tr class="baris border-b-[1px] border-b-text3">
            <td class="text-center py-4">1</td>
            <td class="text-center py-4">Liburan</td>
            <td class="text-center py-4">Fotografi</td>
            <td class="text-center py-4">04/01/2022</td>
            <td class="text-center py-4">07/01/2022</td>
            <td class="text-center py-4">09/01/2022</td>
            <td class="flex justify-center py-4">
              <div class="flex flex-row items-center gap-2">
                <img class="h-[42px] rounded-full" src="./assets/img/hery.png" alt="" />
                <div class="flex flex-col gap-[2px]">
                  <p>Hery Taufan</p>
                  <p class="text-text3 text-paragraph4">@herytaufan119</p>
                </div>
              </div>
            </td>
            <td class="text-center py-4">IDR 350.000</td>
            <td class="flex justify-center py-4 relative">
              <span class="fill-primary absolute top-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M9 2.003V2h10.998C20.55 2 21 2.455 21 2.992v18.016a.993.993 0 0 1-.993.992H3.993A1 1 0 0 1 3 20.993V8l6-5.997zM5.83 8H9V4.83L5.83 8zM11 4v5a1 1 0 0 1-1 1H5v10h14V4h-8z" />
                </svg>
              </span>
            </td>
            <td class="text-center py-4">
              <p class="text-text2 py-1 px-3 bg-primary rounded-lg">Selesai</p>
            </td>
            <td class="flex justify-center py-4 relative">
              <span class="hapus fill-secondary absolute top-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-4.586 6l1.768 1.768-1.414 1.414L12 15.414l-1.768 1.768-1.414-1.414L10.586 14l-1.768-1.768 1.414-1.414L12 12.586l1.768-1.768 1.414 1.414L13.414 14zM9 4v2h6V4H9z" />
                </svg>
              </span>
            </td>
          </tr>
          <tr class="baris border-b-[1px] border-b-text3">
            <td class="text-center py-4">1</td>
            <td class="text-center py-4">Liburan</td>
            <td class="text-center py-4">Fotografi</td>
            <td class="text-center py-4">04/01/2022</td>
            <td class="text-center py-4">07/01/2022</td>
            <td class="text-center py-4">09/01/2022</td>
            <td class="flex justify-center py-4">
              <div class="flex flex-row items-center gap-2">
                <img class="h-[42px] rounded-full" src="./assets/img/hery.png" alt="" />
                <div class="flex flex-col gap-[2px]">
                  <p>Hery Taufan</p>
                  <p class="text-text3 text-paragraph4">@herytaufan119</p>
                </div>
              </div>
            </td>
            <td class="text-center py-4">IDR 350.000</td>
            <td class="flex justify-center py-4 relative">
              <span class="fill-primary absolute top-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M9 2.003V2h10.998C20.55 2 21 2.455 21 2.992v18.016a.993.993 0 0 1-.993.992H3.993A1 1 0 0 1 3 20.993V8l6-5.997zM5.83 8H9V4.83L5.83 8zM11 4v5a1 1 0 0 1-1 1H5v10h14V4h-8z" />
                </svg>
              </span>
            </td>
            <td class="text-center py-4">
              <p class="text-text2 py-1 px-3 bg-primary rounded-lg">Selesai</p>
            </td>
            <td class="flex justify-center py-4 relative">
              <span class="hapus fill-secondary absolute top-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-4.586 6l1.768 1.768-1.414 1.414L12 15.414l-1.768 1.768-1.414-1.414L10.586 14l-1.768-1.768 1.414-1.414L12 12.586l1.768-1.768 1.414 1.414L13.414 14zM9 4v2h6V4H9z" />
                </svg>
              </span>
            </td>
          </tr>
        </tbody>
        <!-- data riwayat end -->
      </table>
      <!-- paginasi riwayat -->
      <div class="flex flex-row gap-6 items-center">
        <a class="inline-block p-[10px] bg-secondary rounded-full transition-default hover:bg-primary" href="#">
          <span class="fill-text2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
              <path fill="none" d="M0 0h24v24H0z" />
              <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
            </svg> </span></a>
        <ul class="flex flex-row gap-1">
          <li>
            <a href="#">
              <div class="flex justify-center text-text2 items-center w-9 h-9 bg-primary rounded-lg transition-default">
                1
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div
                class="flex justify-center text-text2 items-center w-9 h-9 bg-background2 rounded-lg transition-default hover:bg-primary">
                2</div>
            </a>
          </li>
          <li>
            <a href="#">
              <div
                class="flex justify-center text-text2 items-center w-9 h-9 bg-background2 rounded-lg transition-default hover:bg-primary">
                3</div>
            </a>
          </li>
        </ul>
        <a class="inline-block p-[10px] bg-secondary rounded-full transition-default hover:bg-primary" href="#">
          <span class="fill-text2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
              <path fill="none" d="M0 0h24v24H0z" />
              <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
            </svg> </span></a>
      </div>
      <!-- paginasi riwayat end -->
    </div>
  </section>
  <!-- tabel riwayat end -->
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