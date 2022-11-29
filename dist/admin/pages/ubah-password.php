<?php
$_SESSION["id_admin"];
 ?>
<!-- content ubah password -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <div class="flex flex-col">
          <h3 class="text-text1 text-heading3 font-poppins">Ubah Password</h3>
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
          <h5 class="text-text1 text-heading5 font-poppins">Form Ubah Password</h5>
        </div>
        <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
        <?php if($_GET['notif']=="editkosong"){?>
        <div class="px-6 py-4 items-center bg-secondary" role="alert">
          <p class="text-text2 text-paragraph1 font-poppins">Maaf <?php echo $_GET["jenis"]?> !</p>
        </div>
        <?php }?>
        <?php }?>
        <?php if(!empty($_GET['notif'])){?>
        <?php if($_GET['notif']=="editberhasil"){?>
        <div class="px-6 py-4 items-center bg-primary" role="alert">
          <p class="text-text2 text-paragraph1 font-poppins">Password berhasil diubah!</p>
        </div>
        <?php }?>
        <?php }?>

        <form method="POST" action="index.php?include=konfirmasi-ubah-password"
          class="px-6 py-4 flex flex-col gap-6 items-start">
          <div class="flex flex-row w-full justify-between items-center">
            <p class="text-text1 text-paragraph1">Password Lama</p>
            <div class="flex justify-start mr-40">
              <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                name="pwlama" id="pwlama" type="text" value="" />
            </div>
          </div>
          <div class="flex flex-row w-full justify-between items-center">
            <p class="text-text1 text-paragraph1">Password Baru</p>
            <div class="flex justify-start mr-40">
              <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                name="pwbaru" id="pwbaru" type="text" value="" />
            </div>
          </div>
          <div class="flex flex-row w-full justify-between items-center">
            <p class="text-text1 text-paragraph1">Konfirmasi Password Baru</p>
            <div class="flex justify-start mr-40">
              <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                name="konfirmasipwbaru" id="konfirmasipwbaru" type="text" value="" />
            </div>
          </div>

          <div class="flex flex-row w-full justify-end">
            <button
              class="px-4 py-[10px] bg-primary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-secondary"
              type="submit" name="simpan" value="simpan">Simpan</button>
          </div>
        </form>
      </div>
    </div>
    <?php include "includes/footer.php" ?>
  </div>
</section>
<!-- content ubah password end -->