<?php
$id_admin = $_SESSION["id_admin"];

$sql_header = "SELECT SUBSTRING_INDEX(`nama`,' ',1)FROM `admin` WHERE `id_admin`= $id_admin";
$query_header = mysqli_query($koneksi, $sql_header);
while($data_header=mysqli_fetch_row($query_header)){
$nama_header = $data_header[0];
}

$sql_admin = "SELECT `id_admin`, `foto`, `nama`,`email`,`no_telp` 
FROM `admin` WHERE `id_admin`= $id_admin";
$query_admin = mysqli_query($koneksi, $sql_admin);

while($data = mysqli_fetch_row($query_admin)){
  $id_admin = $data[0];
  $foto = $data[1];
  $nama = $data[2];
  $email = $data[3];
  $no_telp = $data[4];
}

?>

<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <div class="flex flex-col">
          <h3 class="text-text1 text-heading3 font-poppins">Profil</h3>
          <p class="text-text1 text-paragraph2">Selamat Datang, <a
              class="text-primary text-paragraph1"><?php echo $nama_header ?></a></p>
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
        <div class="flex flex-row px-6 py-2 items-center justify-end border-b-2 border-primary">
          <a class="px-4 py-[10px] bg-primary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-secondary"
            href="index.php?include=edit-profil">
            <span class="fill-text2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M6.414 16L16.556 5.858l-1.414-1.414L5 14.586V16h1.414zm.829 2H3v-4.243L14.435 2.322a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414L7.243 18zM3 20h18v2H3v-2z" />
              </svg>
            </span>
            Edit Profil</a>
        </div>
        <?php if(!empty($_GET['notif'])){
        if($_GET['notif']=="editberhasil"){?>
        <div class="px-6 py-4 items-center bg-primary" role="alert">
          <p class="text-text2 text-paragraph1 font-poppins">Data berhasil diubah</p>
        </div>
        <?php }?>
        <?php }?>

        <div class="px-6 py-4 flex flex-col items-start gap-6">
          <img class="h-[240px] rounded-lg"
            src="./assets/img/<?php if($foto==null){echo"fotoadmin.png";}else{echo$foto;}?>" alt="" />
          <div class="flex flex-row bg-background1 p-6 gap-4 shadow-default rounded-lg">
            <div class="flex flex-col gap-4">
              <p class="text-text1 text-paragraph1">Nama</p>
              <p class="text-text1 text-paragraph1">Email</p>
              <p class="text-text1 text-paragraph1">No Telepon</p>
            </div>
            <div class="flex flex-col gap-4">
              <p class="text-text1 text-paragraph2"><?php echo $nama ?></p>
              <p class="text-text1 text-paragraph2"><?php echo $email?></p>
              <p class="text-text1 text-paragraph2"><?php echo $no_telp ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "includes/footer.php" ?>
  </div>
</section>
<!-- content edit profil end-->