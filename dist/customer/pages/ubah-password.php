<!-- content ubah password -->
<section class="w-full flex justify-center p-6">
  <div class="flex flex-col gap-8 w-full">
    <div class="flex flex-row justify-between">
      <div class="flex flex-col">
        <h3 class="text-text1 text-heading3 font-poppins">Ubah Password</h3>
        <p class="text-text1 text-paragraph2">Lengkapi Profil Anda untuk pengalaman terbaik dari <a
            class="text-secondary">Blitz</a></p>
      </div>
      <img class="h-10" src="./assets/Blitz Logo.png" alt="" />
    </div>
    <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
    <?php if($_GET['notif']=="editkosong"){?>
    <div class="px-6 py-4 items-center rounded-lg bg-secondary" role="alert">
      <p class="text-text2 text-paragraph1 font-poppins">Maaf <?php echo $_GET["jenis"]?> !</p>
    </div>
    <?php }?>
    <?php }?>
    <?php if(!empty($_GET['notif'])){?>
    <?php if($_GET['notif']=="editberhasil"){?>
    <div class="px-6 py-4 items-center rounded-lg bg-primary" role="alert">
      <p class="text-text2 text-paragraph1 font-poppins">Password berhasil diubah!</p>
    </div>
    <?php }?>
    <?php }?>
    <form class="flex flex-row gap-12" action="index.php?include=konfirmasi-ubah-password" method="POST">
      <div class="flex flex-col gap-6">
        <div class="flex flex-col items-start gap-1">
          <label class="text-text1 text-heading5 font-poppins" for="pwlama">Password Lama</label>
          <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[500px]" name="pwlama"
            id="pwlama" type="text" value="" />
        </div>
        <div class="flex flex-col items-start gap-1">
          <label class="text-text1 text-heading5 font-poppins" for="pwbaru">Password Baru</label>
          <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[500px]" name="pwbaru"
            id="pwbaru" type="text" value="" />
        </div>
        <div class="flex flex-col items-start gap-1">
          <label class="text-text1 text-heading5 font-poppins" for="konfirmasipwbaru">Konfirmasi Password Baru</label>
          <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[500px]"
            name="konfirmasipwbaru" id="konfirmasipwbaru" type="text" value="" />
        </div>
        <button type="submit"
          class="px-[14px] py-[10px] flex justify-center bg-secondary rounded-lg transition-default text-text2 hover:shadow-[0px_0px_24px] hover:shadow-secondary hover:scale-105">Simpan
          perubahan</button>
      </div>
    </form>
  </div>
</section>
<!-- content edit profil end -->