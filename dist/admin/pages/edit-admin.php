<?php
if(isset($_GET["data"])){
$id_admin = $_GET["data"];
$sql_admin = "SELECT `id_admin`,`nama`,`username`,`email`,`no_telp`,`level` 
FROM `admin` WHERE `id_admin`= $id_admin";
$query_admin = mysqli_query($koneksi, $sql_admin);

while($data = mysqli_fetch_row($query_admin)){
  $id_admin = $data[0];
  $nama = $data[1];
  $username = $data[2];
  $email = $data[3];
  $no_telp = $data[4];
  $level = $data[5];
}
}

$list_level = ["superadmin","admin"];
?>

<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <div class="flex flex-col">
          <h3 class="text-text1 text-heading3 font-poppins">Edit Profil</h3>
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
          <h5 class="text-text1 text-heading5 font-poppins">Form Edit Profil</h5>
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
        <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
        <?php if($_GET['notif']=="editkosong"){?>
        <div class="px-6 py-4 items-center bg-secondary" role="alert">
          <p class="text-text2 text-paragraph1 font-poppins">Maaf <?php echo $_GET["jenis"] ?> tidak boleh kosong !</p>
        </div>
        <?php }?>
        <?php }?>

        <form method="POST" action="index.php?include=konfirmasi-edit-admin" enctype="multipart/form-data"
          class="px-6 py-4 flex flex-col gap-6 items-start">
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
            <p class="text-text1 text-paragraph1">Level</p>
            <div class="flex justify-start w-[800px] mr-40">
              <select name="list_level"
                class="p-[10px] h-[50px] bg-primary cursor-pointer text-text2 rounded-lg outline-none w-[300px]"
                name="fotografer" id="fotografer">
                <option value="-">Pilih Level</option>
                <?php
                foreach($list_level as $list){
                ?>
                <option value="<?php echo $list ?>" <?php if($list==$level){?> selected <?php } ?>><?php echo $list ?>
                </option>
                <?php }
                ?>
              </select>
            </div>
          </div>
          <div class="flex flex-row w-full justify-end">
            <button
              class="px-4 py-[10px] bg-primary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-secondary"
              type="submit" name="simpan" value="<?php echo $id_admin ?>">Simpan</button>
          </div>
        </form>
      </div>
    </div>
    <?php include "includes/footer.php" ?>
  </div>
</section>
<!-- content edit profil end -->