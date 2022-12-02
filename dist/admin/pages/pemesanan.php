<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <div class="flex flex-col">
          <h3 class="text-text1 text-heading3 font-poppins">Chat Customer</h3>
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
        <form method="" action="" class="flex flex-row px-6 py-2 items-center justify-start border-b-2 border-primary">
          <div class="flex flex-row p-[10px] border-2 border-text4 rounded-lg w-[320px]">
            <input class="outline-none w-full text-text1 text-paragraph4" name="katakunci" id="katakunci" type="text"
              placeholder="Cari Pemesanan" autocomplete="off" />
            <button type="submit" class="fill-text4 cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z" />
              </svg>
            </button>
          </div>
        </form>
        <div class="w-full p-6 h-[470px] overflow-y-auto custom-scrollbar">
          <!-- tabel riwayat -->
          <section class="w-full flex justify-center">
            <div class="flex flex-col items-center w-full gap-6">
              <table class="w-full text-text2 text-paragraph1 font-poppins">
                <thead class="bg-secondary">
                  <tr>
                    <th width="5%" class="rounded-tl-lg py-[14px] px-2">No</th>
                    <th width="10%" class="px-2">Nama</th>
                    <th width="5%" class="px-2">Kategori</th>
                    <th width="10%" class="px-2">Jasa</th>
                    <th width="15%" class="px-2">Tanggal Pesan</th>
                    <th width="15%" class="px-2">Tanggal Mulai</th>
                    <th width="15%" class="px-2">Foto/Videografer</th>
                    <th width="15%" class="px-2">Total Bayar</th>
                    <th width="15%" class="px-2">Status</th>
                    <th width="5%" class="rounded-tr-lg px-3">
                      <p class="hidden"></p>
                    </th>
                  </tr>
                </thead>
                <!-- data riwayat -->
                <tbody class="text-text1 text-paragraph1 font-lora">
                  <tr class="baris border-b-[1px] border-b-text3">
                    <td class="text-center py-4">1</td>
                    <td class="text-center py-4">Daffa</td>
                    <td class="text-center py-4">Liburan</td>
                    <td class="text-center py-4">Fotografi</td>
                    <td class="text-center py-4">07/01/2022</td>
                    <td class="text-center py-4">07/01/2022</td>
                    <td class="flex justify-center py-4">
                      <div class="flex flex-row items-center gap-2">
                        <img class="h-[42px] rounded-full" src="./../customer/assets/img/hery.png" alt="" />
                        <div class="flex flex-col gap-[2px]">
                          <p>Hery Taufan</p>
                          <p class="text-text3 text-paragraph4">@herytaufan119</p>
                        </div>
                      </div>
                    </td>
                    <td class="text-center py-4">IDR 350.000</td>
                    <td class="text-center py-4">
                      <p class="text-text2 py-1 px-3 bg-primary rounded-lg">Selesai</p>
                    </td>
                    <td class="py-4 px-4">
                      <div class="flex flex-row gap-2">
                        <a href="#" class="fill-primary cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                              d="M12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9C2.121 6.88 6.608 3 12 3zm0 16a9.005 9.005 0 0 0 8.777-7 9.005 9.005 0 0 0-17.554 0A9.005 9.005 0 0 0 12 19zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                          </svg>
                        </a>
                        <a href="#">
                          <span class="hapus fill-secondary cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z" />
                              <path
                                d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-4.586 6l1.768 1.768-1.414 1.414L12 15.414l-1.768 1.768-1.414-1.414L10.586 14l-1.768-1.768 1.414-1.414L12 12.586l1.768-1.768 1.414 1.414L13.414 14zM9 4v2h6V4H9z" />
                            </svg>
                          </span>
                        </a>
                      </div>
                    </td>
                  </tr>
                </tbody>
                <!-- data riwayat end -->
              </table>
              <!-- paginasi riwayat -->
              <div class="flex flex-row gap-6 items-center">
                <ul class="flex flex-row items-center gap-2">
                  <li>
                    <a href="#">
                      <div
                        class="flex justify-center text-text2 items-center w-9 h-9 bg-primary rounded-lg transition-default">
                        1</div>
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
              </div>
              <!-- paginasi riwayat end -->
            </div>
          </section>
          <!-- tabel riwayat end -->
        </div>
      </div>
    </div>
    <?php include "includes/footer.php" ?>
  </div>
</section>
<!-- content edit profil end -->