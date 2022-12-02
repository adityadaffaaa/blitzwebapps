<?php
if (isset($_GET["data"])) {
  $id_fotovideografer = $_GET["data"];
  $sql_fotovideografer = "SELECT `nama`, `no_telp`,`email`,`alamat`,`usia`,`nik`,`jenis_kelamin`,`role`,`link_portofolio`,`token`
  FROM `fotovideografer` 
  WHERE `id_fotovideografer` = $id_fotovideografer";
  $query_fotovideografer = mysqli_query($koneksi, $sql_fotovideografer);
  while($data=mysqli_fetch_row($query_fotovideografer)){
  $nama = $data[0];
  $no_telp = $data[1];
  $email = $data[2];
  $alamat = $data[3];
  $usia = $data[4];
  $nik = $data[5];
  $jenis_kelamin = $data[6];
  $role = $data[7];
  $portofolio = $data[8];
  $token = $data[9];
  } 
}
?>
<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <div class="flex flex-col">
          <h3 class="text-text1 text-heading3 font-poppins">Konfirmasi Foto dan Videografer</h3>
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
          <h5 class="text-text1 text-heading5 font-poppins">Data Calon Foto/Videografer</h5>
          <a class="px-4 py-[10px] bg-primary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-secondary"
            href="index.php?include=konfirmasi-fotovideografer">
            <span class="fill-text2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
              </svg>
            </span>
            Kembali</a>
        </div>
        <form method="POST" action="index.php?include=konfirmasi-verifikasi-fotovideografer"
          class="px-6 py-4 flex flex-col gap-6 items-start">
          <div class="flex flex-col gap-6 w-full h-[400px] overflow-auto custom-scrollbar">
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Nama</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="nama" id="nama" type="text" value="<?php echo $nama ?>" />
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
              <p class="text-text1 text-paragraph1">Email</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="email" id="email" type="text" value="<?php echo $email ?>" />
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
              <p class="text-text1 text-paragraph1">Usia</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="usia" id="usia" type="text" value="<?php echo $usia ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">NIK</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="nik" id="nik" type="text" value="<?php echo $nik ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Jenis Kelamin</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="jeniskelamin" id="jeniskelamin" type="text" value="<?php echo $jenis_kelamin ?>" />
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Role</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="role" id="role" type="text" value="<?php echo $role ?>" />
              </div>
            </div>

            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Portofolio</p>
              <div class="flex justify-start mr-40">
                <a target="_blank"
                  class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 w-[800px] transition-default hover:bg-secondary"
                  href="<?php echo $portofolio ?>"><?php echo $portofolio ?></a>
              </div>
            </div>
            <div class="flex flex-row w-full justify-between items-center">
              <p class="text-text1 text-paragraph1">Token</p>
              <div class="flex justify-start mr-40">
                <input readonly class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                  name="token" id="token" type="text" value="<?php if ($token == null) {
                  echo "Token belum ada";}else{ echo $token;} ?>" />
              </div>
            </div>
          </div>

          <div class="flex flex-row w-full justify-end">
            <button
              class="px-4 py-[10px] bg-primary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-secondary"
              type="submit" name="konfirmasi" value="<?php echo $id_fotovideografer ?>">Konfirmasi</button>
          </div>
        </form>
      </div>
    </div>
    <?php include "includes/footer.php" ?>
  </div>
</section>
<!-- content edit profil end -->
<?php
if (!empty(isset($_GET["notif"]))) {
  if (isset($_GET["notif"])) { ?>
<script>
setTimeout(() => {
  swal.fire({
    title: "Token berhasil diinput!",
    icon: "success",
    iconColor: "#034C5F",
    confirmButtonText: "Oke",
    confirmButtonColor: "#034C5F",
  }).then((result) => {
    window.location.replace(
      "index.php?include=detail-konfirmasi-fotovideografer&data=<?php echo $id_fotovideografer ?>")
  })
}, 10)
</script>
<?php }
}
?>