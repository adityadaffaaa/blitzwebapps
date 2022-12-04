<?php 
if(isset($_SESSION["id_fotovideografer"])){
  $id_fotovideografer = $_SESSION["id_fotovideografer"];
  $sql = "SELECT `foto`,`nama`,`username`,`jenis_kelamin`,`usia`,`email`,`no_telp`,`nik`,`alamat`,`instagram`,`deskripsi_pribadi`,`role`,`token`
  FROM `fotovideografer` WHERE `id_fotovideografer` = $id_fotovideografer";
  $query = mysqli_query($koneksi, $sql);
  while($data = mysqli_fetch_row($query)){
  $foto = $data[0];
  $nama = $data[1];
  $username = $data[2];
  $jenis_kelamin = $data[3];
  $usia = $data[4];
  $email = $data[5];
  $no_telp = $data[6];
  $nik = $data[7];
  $alamat = $data[8];
  $instagram = $data[9];
  $deskripsi_pribadi = $data[10];
  $role = $data[11];
  $token = $data[12];
  }
}
$list_jk = ["pria", "wanita"];
$list_role = ["fotografer", "videografer", "fotografer dan videografer"];
?>

<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <div class="flex flex-col">
          <h3 class="text-text1 text-heading3 font-poppins">Pengaturan Profil</h3>
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
        <div class="flex flex-row px-6 py-4 items-center justify-start border-b-2 border-primary">
          <h5 class="text-text1 text-heading5 font-poppins">Form Edit Profil</h5>

        </div>
        <?php if(!empty($_GET["notif"]) && !empty($_GET["jenis"])){ ?>
        <?php if($_GET["notif"] == "kesalahan"){?>
        <div class="px-6 py-4 items-center bg-secondary" role="alert">
          <p class="text-text2 text-paragraph1 font-poppins">Maaf <?php echo $_GET["jenis"]?> !</p>
        </div>
        <?php } ?>
        <?php } ?>

        <?php if (!empty($_GET["notif"])) { ?>
        <?php if($_GET["notif"] == "berhasil"){ ?>
        <div class="px-6 py-4 items-center bg-primary" role="alert">
          <p class="text-text2 text-paragraph1 font-poppins">Data Anda berhasil diubah!</p>
        </div>
        <?php } ?>
        <?php } ?>
        <form method="POST" action="index.php?include=konfirmasi-pengaturan" enctype="multipart/form-data"
          class="px-6 pb-4 flex flex-col gap-6">
          <div class="py-4 flex flex-col gap-6 items-start h-[390px] overflow-auto custom-scrollbar">
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Foto profil</p>
              <div class="flex justify-start mr-40">
                <input
                  class="cursor-pointer p-[10px] w-[800px] bg-primary text-paragraph2 rounded-lg text-text2 transition-default hover:bg-secondary outline-none"
                  type="file" name="foto" id="foto" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Nama</p>
              <div class="flex justify-start mr-40">
                <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="nama" id="nama" type="text" value="<?php echo $nama ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Username</p>
              <div class="flex justify-start mr-40">
                <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="username" id="username" type="text" value="<?php echo $username ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Jenis Kelamin</p>
              <div class="flex justify-start w-[800px] mr-40">
                <select class="p-[10px] h-[50px] bg-primary cursor-pointer text-text2 rounded-lg outline-none w-[300px]"
                  name="jeniskelamin" id="jeniskelamin">
                  <?php
                  foreach($list_jk as $jk){?>
                  <option value="<?php echo $jk ?>" <?php if($jenis_kelamin==$jk){?> selected <?php } ?>>
                    <?php echo $jk ?></option>
                  <?php }
                  ?>
                </select>
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Usia</p>
              <div class="flex justify-start mr-40">
                <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="usia" id="usia" type="text" value="<?php echo $usia ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Email</p>
              <div class="flex justify-start mr-40">
                <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="email" id="email" type="text" value="<?php echo $email ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">No Telepon</p>
              <div class="flex justify-start mr-40">
                <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="notelepon" id="notelepon" type="text" value="<?php echo $no_telp ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">NIK</p>
              <div class="flex justify-start mr-40">
                <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="nik" id="nik" type="text" value="<?php echo $nik ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Alamat</p>
              <div class="flex justify-start mr-40">
                <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="alamat" id="alamat" type="text" value="<?php echo $alamat ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Instagram</p>
              <div class="flex justify-start mr-40">
                <input
                  class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px] placeholder:text-text3 placeholder:text-paragraph2"
                  name="instagram" id="instagram" type="text" placeholder="Akun instagram Anda"
                  value="<?php echo $instagram ?>" autocomplete="off" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Deskripsi Pribadi</p>
              <div class="flex justify-start mr-40">
                <input
                  class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px] placeholder:text-text3 placeholder:text-paragraph2"
                  name="deskripsipribadi" id="deskripsipribadi" type="text" placeholder="Deskripsi pribadi Anda"
                  value="<?php echo $deskripsi_pribadi ?>" autocomplete="off" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Role</p>
              <div class="flex justify-start w-[800px] mr-40">
                <select class="p-[10px] h-[50px] bg-primary cursor-pointer text-text2 rounded-lg outline-none w-[300px]"
                  name="role" id="role">
                  <?php
                  foreach($list_role as $l_role){?>
                  <option value="<?php echo $l_role ?>" <?php if($l_role == $role){?> selected <?php } ?>>
                    <?php echo $l_role ?></option>
                  <?php }
                  ?>
                </select>
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Token</p>
              <div class="flex justify-start mr-40">
                <input class="p-[10px] bg-secondary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="token" id="token" type="text" value="<?php echo $token ?>" readonly />
              </div>
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
<!-- content edit profil end -->