<?php 
if(isset($_GET["data"])){
  $id_pemesanan = $_GET["data"];  
  $sql = "SELECT  `cust`.`nama`,`cust`.`no_telp`,`cust`.`email`,`cust`.`alamat`, `k`.`kategori`, `j`.`jasa`,
   DATE_FORMAT(`p`.`tanggal_pesan`,'%d/%m/%Y'), DATE_FORMAT(`p`.`jadwal_mulai`,'%d/%m/%Y'),DATE_FORMAT(`p`.`jadwal_selesai`,'%d/%m/%Y') ,`p`.`foto_pembayaran`, `fv`.`nama`
  FROM `pemesanan` `p`
  JOIN `customer` `cust` ON `p`.`id_customer` = `cust`.`id_customer`
  JOIN `fotovideografer` `fv` ON `p`.`id_fotovideografer` = `fv`.`id_fotovideografer`
  JOIN `kategori_event` `k` ON `p`.`id_kategori` = `k`.`id_kategori`
  JOIN `jasa` `j` ON `p`.`id_jasa` = `j`.`id_jasa`
  WHERE `p`.`id_pemesanan` = $id_pemesanan";
  $query = mysqli_query($koneksi, $sql);
  while($data = mysqli_fetch_row($query)){
  $nama_cust = $data[0];
  $no_telp = $data[1];
  $email = $data[2];
  $alamat = $data[3];
  $kategori = $data[4];
  $jasa = $data[5];
  $tanggal_pesan = $data[6];
  $tanggal_mulai = $data[7];
  $tanggal_selesai = $data[8];
  $foto_pembayaran = $data[9];
  $nama_fotovideografer = $data[10];
  }
}
?>

<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <div class="flex flex-col">
          <h3 class="text-text1 text-heading3 font-poppins">Konfirmasi Pemesanan</h3>
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
          <h5 class="text-text1 text-heading5 font-poppins">Data Pemesanan</h5>
          <a class="px-4 py-[10px] bg-primary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-secondary"
            href="index.php?include=pemesanan">
            <span class="fill-text2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
              </svg>
            </span>
            Kembali</a>
        </div>
        <form method="POST" action="index.php?include=konfirmasi-pemesanan"
          class="px-6 py-4 flex flex-col gap-6 items-start">
          <div class="flex flex-col py-6 gap-6 w-full h-[400px] overflow-auto custom-scrollbar">
            <div class="flex flex-col gap-6">
              <div class="flex flex-row w-full justify-between items-center">
                <p class="text-text1 text-paragraph1">Customer</p>
                <div class="flex justify-start mr-16">
                  <input readonly
                    class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]" name="nama"
                    id="nama" type="text" value="<?php echo $nama_cust ?>" />
                </div>
              </div>
              <div class="flex flex-row w-full justify-between items-center">
                <p class="text-text1 text-paragraph1">No Telepon</p>
                <div class="flex justify-start mr-16">
                  <input readonly
                    class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                    name="username" id="username" type="text" value="<?php if ($no_telp == null) {
                      echo "-";
                    } else {
                      echo $no_telp;} ?>" />
                </div>
              </div>
              <div class="flex flex-row w-full justify-between items-center">
                <p class="text-text1 text-paragraph1">Email</p>
                <div class="flex justify-start mr-16">
                  <input readonly
                    class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                    name="email" id="email" type="text" value="<?php echo $email ?>" />
                </div>
              </div>
              <div class="flex flex-row w-full justify-between items-center">
                <p class="text-text1 text-paragraph1">Alamat</p>
                <div class="flex justify-start mr-16">
                  <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[800px]"
                    name="notelepon" id="notelepon" type="text" value="<?php if ($alamat == null) {
                      echo "-";
                    } else {
                      echo $alamat;
                    } ?>" />
                </div>
              </div>
            </div>
            <div class="w-full flex justify-end pr-16">
              <div
                class="p-6 w-full bg-background1 border-2 flex flex-row justify-between shadow-default border-secondary rounded-lg">
                <div class="flex flex-col gap-4 items-start">
                  <p class="text-text2 p-[10px] w-full text-center bg-primary rounded-lg text-paragraph1 font-poppins">
                    Deskripsi Pemesanan</p>
                  <div class="flex flex-row gap-8">
                    <div class="flex flex-col gap-4">
                      <p class="text-text1 text-paragraph1">Jasa</p>
                      <p class="text-text1 text-paragraph1">Kategori</p>
                      <p class="text-text1 text-paragraph1">Tanggal Pesan</p>
                      <p class="text-text1 text-paragraph1">Tanggal Mulai</p>
                      <p class="text-text1 text-paragraph1">Tanggal Selesai</p>
                      <p class="text-text1 text-paragraph1">Fotografer / Videografer</p>
                    </div>
                    <div class="flex flex-col gap-4">
                      <p class="text-text1 text-paragraph1"><?php echo $jasa ?></p>
                      <p class="text-text1 text-paragraph1"><?php echo $kategori ?></p>
                      <p class="text-text1 text-paragraph1"><?php echo $tanggal_pesan ?></p>
                      <p class="text-text1 text-paragraph1"><?php echo $tanggal_mulai ?></p>
                      <p class="text-text1 text-paragraph1"><?php echo $tanggal_selesai ?></p>
                      <p class="text-text1 text-paragraph1"><?php echo $nama_fotovideografer ?></p>
                    </div>
                  </div>
                </div>
                <div class="flex flex-col items-center h-full justify-between">
                  <?php if($kategori == "Ulang tahun (fotografi)" || $kategori == "Ulang tahun (videografi)" || $kategori == "Ulang tahun (foto dan videografi)"){?>
                  <div class="h-[205px] w-[300px] overflow-hidden bg-cover rounded-lg ring-2 ring-secondary"
                    style="background-image: url('./../customer/assets/img/kategori-ulangtahun.png')">
                    <div class="w-full h-full bg-[rgba(238,100,87,0.6)] flex justify-center items-center">
                      <h5 class="text-text2 text-heading5 font-poppins">Ulang Tahun</h5>
                    </div>
                  </div>
                  <?php } else if($kategori == "Kelulusan (fotografi)" || $kategori == "Kelulusan (videografi)" || $kategori == "Kelulusan (foto dan videografi)") { ?>
                  <div class="h-[205px] w-[300px] overflow-hidden bg-cover rounded-lg ring-2 ring-secondary"
                    style="background-image: url('./../customer/assets/img/kategori-kelulusan.png')">
                    <div class="w-full h-full bg-[rgba(238,100,87,0.6)] flex justify-center items-center">
                      <h5 class="text-text2 text-heading5 font-poppins">Kelulusan</h5>
                    </div>
                  </div>
                  <?php } else if($kategori == "Pra Nikah (fotografi)" || $kategori == "Pra Nikah (videografi)" || $kategori == "Pra Nikah (foto dan videografi)") { ?>
                  <div class="h-[205px] w-[300px] overflow-hidden bg-cover rounded-lg ring-2 ring-secondary"
                    style="background-image: url('./../customer/assets/img/kategori-wedding.png')">
                    <div class="w-full h-full bg-[rgba(238,100,87,0.6)] flex justify-center items-center">
                      <h5 class="text-text2 text-heading5 font-poppins">Pra Nikah</h5>
                    </div>
                  </div>
                  <?php } else if($kategori == "Liburan (fotografi)" || $kategori == "Liburan (videografi)" || $kategori == "Liburan (foto dan videografi)") { ?>
                  <div class="h-[205px] w-[300px] overflow-hidden bg-cover rounded-lg ring-2 ring-secondary"
                    style="background-image: url('./../customer/assets/img/kategori-liburan.png')">
                    <div class="w-full h-full bg-[rgba(238,100,87,0.6)] flex justify-center items-center">
                      <h5 class="text-text2 text-heading5 font-poppins">Liburan</h5>
                    </div>
                  </div>
                  <?php } ?>
                  <a
                    class="bukti cursor-pointer px-4 py-[10px] w-full justify-center bg-secondary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-background2">Cek
                    Bukti Pembayaran</a>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-row w-full justify-end">
            <button
              class="px-4 py-[10px] bg-primary rounded-lg text-text2 text-paragraph3 flex items-center gap-2 transition-default hover:bg-secondary"
              type="submit" name="simpan" value="<?php echo $id_pemesanan ?>">Konfirmasi</button>
          </div>
        </form>
      </div>
    </div>
    <?php include "includes/footer.php" ?>
  </div>
</section>
<!-- bukti pop up -->
<div
  class="bukti-popup-background hidden w-full h-[100vh] z-[80] fixed top-0 items-center justify-center bg-[rgba(0,0,0,0.5)] opacity-0 transition-all ease-in-out duration-500">
  <div class="bukti-popup relative shadow-default transition-all ease-in-out duration-500 translate-y-64">
    <img class="h-[500px] w-auto" src="./../customer/assets/img/<?php echo $foto_pembayaran ?>" alt="" />
    <div
      class="close-bukti-popup absolute -top-4 transition-all ease-in-out duration-200 right-0 text-paragraph1 font-poppins w-8 h-8 flex items-center justify-center cursor-pointer rounded-lg bg-secondary hover:bg-primary">
      <span class="fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
        </svg>
      </span>
    </div>
  </div>
</div>
<!-- bukti pop up end -->

<?php
if (!empty($_GET["notif"])) {
  if ($_GET["notif"]=="behasildikonfirmasi") { ?>
<script>
setTimeout(() => {
  swal.fire({
    title: "Pemesanan berhasil dikonfirmasi!",
    icon: "success",
    iconColor: "#034C5F",
    confirmButtonText: "Oke",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace(
      "index.php?include=detail-pemesanan&data=<?php echo $id_pemesanan ?>")
  })
}, 10)
</script>
<?php } else if($_GET["notif"] =="pemesanansudahselesai") {?>
<script>
setTimeout(() => {
  swal.fire({
    title: "Pemesanan sudah selesai!",
    icon: "warning",
    iconColor: "#D7A151",
    confirmButtonText: "Oke",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace(
      "index.php?include=detail-pemesanan&data=<?php echo $id_pemesanan ?>")
  })
}, 10)
</script>
<?php }
}
?>