<?php
if (isset($_GET["data"])) {
  $id_admin = $_GET["data"];
  $sql = "SELECT `foto`,`nama`,`username`,`email`,`no_telp`,`level`
  FROM `admin` 
  WHERE `id_admin` = '$id_admin'";
  $query = mysqli_query($koneksi, $sql);
  while($data = mysqli_fetch_row($query)){
  $foto = $data[0];
  $nama = $data[1];
  $username = $data[2];
  $email = $data[3];
  $no_telp = $data[4];
  $level = $data[5];
  }
}
?>
<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <div class="flex flex-col">
          <h3 class="text-text1 text-heading3 font-poppins">Data Admin</h3>
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
          <h5 class="text-text1 text-heading5 font-poppins">Detail Data Admin</h5>
          <a class="px-4 py-[10px] bg-primary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-secondary"
            href="index.php?include=data-admin">
            <span class="fill-text2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
              </svg>
            </span>
            Kembali</a>
        </div>
        <div class="px-6 py-2 flex flex-col items-start">
          <div class="flex flex-col gap-6 w-full py-6 h-[500px] overflow-auto custom-scrollbar">
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Foto</p>
              <div class="flex w-[800px] justify-start mr-40">
                <?php if($foto == null){
                ?>
                <span class="fill-primary ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="208" height="208">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                      d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                  </svg>
                </span>
                <?php
                } else { ?>
                <img class="h-52 rounded-lg" src="./assets/img/<?php echo $foto ?>" alt="" />
                <?php }?>
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Nama</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="username" id="username" type="text" value="<?php echo $nama ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Username</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="email" id="email" type="text" value="<?php echo $username ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Email</p>
              <div class="flex justify-start mr-40">
                <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $email ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">No Telepon</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $no_telp ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Level</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $level ?>" />
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