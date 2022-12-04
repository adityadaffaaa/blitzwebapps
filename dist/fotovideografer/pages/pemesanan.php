<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <h3 class="text-text1 text-heading3 font-poppins">Pemesanan</h3>
        <a href="./signin.html"
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
                    <th width="10%" class="px-2">Customer</th>
                    <th width="5%" class="px-2">Kategori</th>
                    <th width="10%" class="px-2">Jasa</th>
                    <th width="15%" class="px-2">Tanggal Pesan</th>
                    <th width="15%" class="px-2">Tanggal Mulai</th>
                    <th width="15%" class="px-2">Tanggal Selesai</th>
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
                    <td class="text-center py-4">07/01/2022</td>

                    <td class="text-center py-4">IDR 350.000</td>
                    <td class="text-center py-4">
                      <p class="text-text2 py-1 px-3 bg-primary rounded-lg">Sudah Dikonfirmasi</p>
                    </td>
                    <td class="py-4 px-4">
                      <a href="#" class="fill-primary cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9C2.121 6.88 6.608 3 12 3zm0 16a9.005 9.005 0 0 0 8.777-7 9.005 9.005 0 0 0-17.554 0A9.005 9.005 0 0 0 12 19zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg>
                      </a>
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