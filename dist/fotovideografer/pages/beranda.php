<?php
// mengambil data nama header
if(isset($_SESSION["id_fotovideografer"])){
  $id_fotovideografer = $_SESSION["id_fotovideografer"];
  
  $sql_header = "SELECT SUBSTRING_INDEX(`nama`,' ',1), `foto`FROM `fotovideografer` WHERE `id_fotovideografer`= $id_fotovideografer";
  $query_header = mysqli_query($koneksi, $sql_header);
while($data_header=mysqli_fetch_row($query_header)){
  $nama_header = $data_header[0];
  $foto_fotovideo = $data_header[1];
}
// format tanggal
}
$hari = array(1 => "Senin", "Selasa", "Rabu", "Kamis", "Jumat","Sabtu","Minggu");
$bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei","Juni","Juli","Agustus", "September","Oktober", "November","Desember");
$hari_indo = $hari[date('N')];
$bulan_indo = $bulan[date('n')];
$waktu_sekarang = date("d");
$tahun_sekarang = date("Y");
// mengambil data verifikasi untuk mengecek data sudah lengkap atau belum
$sql_verif = "SELECT `foto`, `deskripsi_pribadi`, `instagram` 
FROM `fotovideografer` 
WHERE `id_fotovideografer` = '$id_fotovideografer'";
$query_verif = mysqli_query($koneksi, $sql_verif);
while($data_verif = mysqli_fetch_row($query_verif)){
  $foto_verif = $data_verif[0];
  $deskripsi_pribadi_verif = $data_verif[1];
  $instagram_verif = $data_verif[2];
}
// mengambil data portofolio 
$foto_portof = null;
$video_portof = null;
$sql_portof = "SELECT `p`.`portof_foto`, `p`.`portof_video`
FROM `portofolio` `p` 
JOIN `fotovideografer` `fv` ON `p`.`id_fotovideografer` = `fv`.`id_fotovideografer`
WHERE `p`.`id_fotovideografer` = $id_fotovideografer ORDER BY `id_portofolio` 
LIMIT 1";
$query_portof = mysqli_query($koneksi, $sql_portof);
while($data_portof = mysqli_fetch_row($query_portof)){
  $foto_portof = $data_portof[0];
  $video_portof = $data_portof[1];
}
// mengambil jumlah portof
$sql_jml_portof = "SELECT COUNT(`id_portofolio`) FROM `portofolio`
WHERE `id_fotovideografer` = $id_fotovideografer";
$query_jml_portof = mysqli_query($koneksi, $sql_jml_portof);
while($data_jml_portof= mysqli_fetch_row($query_jml_portof)){
  $jml_portof = $data_jml_portof[0];
}

// mengambil data pesanan customer
$sql_pesanan = "SELECT `cust`.`nama`,`k`.`kategori`, `p`.`jadwal_mulai`, `p`.`harga`
FROM `pemesanan` `p`
JOIN `customer` `cust` ON `p`.`id_customer` = `cust`.`id_customer`
JOIN `kategori_event` `k` ON `p`.`id_kategori` = `k`.`id_kategori`
JOIN `fotovideografer` `fv` ON `p`.`id_fotovideografer` = `fv`.`id_fotovideografer`
WHERE `p`.`status` = 'sudah dikonfirmasi'
AND`fv`.`id_fotovideografer` = $id_fotovideografer ";
$query_pesanan = mysqli_query($koneksi, $sql_pesanan);


// mengambil jumlah data pesanan customer
$sql_jml = "SELECT COUNT(`p`.`id_pemesanan`)
FROM `pemesanan` `p`
JOIN `customer` `cust` ON `p`.`id_customer` = `cust`.`id_customer`
JOIN `kategori_event` `k` ON `p`.`id_kategori` = `k`.`id_kategori`
JOIN `fotovideografer` `fv` ON `p`.`id_fotovideografer` = `fv`.`id_fotovideografer`
WHERE `p`.`status` = 'sudah dikonfirmasi'
AND`fv`.`id_fotovideografer` = $id_fotovideografer ";
$query_jml = mysqli_query($koneksi, $sql_jml);
while($data_jml = mysqli_fetch_row($query_jml)){
  $jml_pesanan = $data_jml[0];
}

// mengambil data pendapatan
$sql_pendapatan = "SELECT SUM(`harga`)
FROM `pemesanan`
WHERE status = 'selesai'
AND `id_fotovideografer` = $id_fotovideografer ";
$query_pendapatan = mysqli_query($koneksi, $sql_pendapatan);
while($data_pendapatan = mysqli_fetch_row($query_pendapatan)){
  $pendapatan = $data_pendapatan[0];
}
$total_pend = number_format($pendapatan, 0, ',', '.');
?>
<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <div class="flex flex-col">
          <h3 class="text-text1 text-heading3 font-poppins">Beranda</h3>
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
      <div
        class="flex flex-row p-6 gap-6 justify-between bg-background1 shadow-default rounded-lg mx-1 border-2 border-primary h-[550px] overflow-auto custom-scrollbar">
        <div class="flex flex-col gap-4">
          <div
            class="p-4 bg-background1 border-2 border-primary rounded-lg shadow-default flex flex-row items-center justify-between">
            <div class="flex flex-col gap-4">
              <h5 class="text-primary text-heading5 font-poppins">Pendapatan Anda</h5>
              <p class="text-text1 text-paragraph2">IDR <?php if ($pendapatan == null) {
              echo 0;
            } else {
              echo $total_pend; }?></p>
            </div>
          </div>
          <div class="p-4 bg-background1 border-2 border-primary rounded-lg shadow-default flex flex-col gap-4">
            <h5 class="text-primary text-heading5 font-poppins">Portofolio Anda</h5>
            <!-- portofolio -->
            <?php if ($foto_portof!=null || $video_portof!=null) { ?>
            <div class="flex flex-col gap-3">
              <a href="index.php?include=portofolio"
                class="w-[500px] h-[380px] bg-cover rounded-lg overflow-hidden group"
                style="background-image: url('./assets/img/<?php echo $foto_portof ?>')">
                <div
                  class="w-full h-full gradient-primary flex justify-center items-center translate-y-96 transition-all ease-in-out duration-500 group-hover:translate-y-0">
                  <h3 class="text-text2 text-heading3 font-poppins"><?php echo $jml_portof ?></h3>
                </div>
              </a>
              <a class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph1 flex flex-row justify-center transition-default hover:bg-secondary"
                href="index.php?include=portofolio">Edit Portofolio</a>
            </div>
            <?php } else {?>
            <div class="flex flex-col w-[500px] gap-3">
              <div class="flex flex-col  items-center">
                <iframe src="https://embed.lottiefiles.com/animation/51936" style="height: 240px;"></iframe>
                <h5 class="text-secondary text-heading5 font-poppins">Portofolio mu belum ada!</h5>
              </div>
              <a class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph1 flex flex-row justify-center transition-default hover:bg-secondary"
                href="index.php?include=portofolio">Isi Portofolio</a>
            </div>
            <?php }?>
            <!-- portofolio end -->
          </div>
        </div>
        <div class="flex flex-col w-full gap-4">
          <div
            class="p-4 bg-background1 border-2 border-primary rounded-lg shadow-default flex flex-row items-center justify-between">
            <div class="flex flex-col gap-4">
              <h5 class="text-primary text-heading5 font-poppins">
                <?php echo $hari_indo,', ', $waktu_sekarang,' ',$bulan_indo,' ',$tahun_sekarang ?></h5>
              <?php if($jml_pesanan == 0){ ?>
              <p class="text-text4 text-paragraph2 flex items-center gap-1">
                Belum ada pesanan
              </p>
              <?php } else { ?>
              <p class="text-primary text-paragraph1 flex items-center gap-1">
                <?php echo $jml_pesanan ?>
                <a class="text-paragraph2 text-text4">Pesanan belum dikerjakan</a>
              </p>
              <?php } ?>
            </div>
            <a href="index.php?include=pengaturan">
              <?php if ($foto_fotovideo == null) { ?>
              <span class="fill-primary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="64" height="64">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                </svg>
              </span>
              <?php } else { ?>
              <img class="rounded-full border-2  border-secondary" style="height: 64px;"
                src="./assets/img/<?php echo $foto_fotovideo ?>" alt="">
              <?php } ?>
            </a>
          </div>
          <div
            class="p-4 bg-background1 border-2 border-primary rounded-lg shadow-default flex flex-col justify-center items-center gap-4">
            <h5 class="text-primary text-heading5 font-poppins">Pesanan Terbaru</h5>
            <?php if (mysqli_num_rows($query_pesanan) == 0) { ?>
            <div class="flex flex-col gap-3">
              <div class="flex flex-col items-center">
                <iframe src="https://embed.lottiefiles.com/animation/84655" style="height: 240px;"></iframe>
                <h5 class="text-secondary text-heading5 font-poppins">Pesanan mu belum ada!</h5>
              </div>
            </div>
            <?php } else{?>
            <table class="w-full text-center">
              <thead class="text-text1 text-paragraph1">
                <tr>
                  <th class="py-2">Nama</th>
                  <th class="py-2">Kategori</th>
                  <th class="py-2">Tanggal Mulai</th>
                  <th class="py-2">Total Harga</th>
                </tr>
              </thead>
              <tbody class="text-text1 text-paragraph2">
                <?php                
                while ($data_pesanan = mysqli_fetch_row($query_pesanan)) {
                  $nama_cust = $data_pesanan[0];
                  $kategori_pesanan = $data_pesanan[1];
                  $tgl_mulai_pesanan = $data_pesanan[2];
                  $harga_pesanan = $data_pesanan[3];
                  $tgl = date_create($tgl_mulai_pesanan);
                  $tgl_mulai = date_format($tgl, "d F Y");
                  $harga = number_format($harga_pesanan,0,",",".")
                ?>
                <tr>
                  <td class="py-2"><?php echo $nama_cust ?></td>
                  <td class="py-2"><?php echo $kategori_pesanan ?></td>
                  <td class="py-2"><?php echo $tgl_mulai ?></td>
                  <td class="py-2">IDR <?php echo $harga ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            <div class="w-full flex justify-end">
              <a class="py-[10px] px-6 bg-primary rounded-lg text-text2 text-paragraph1 flex flex-row justify-center transition-default hover:bg-secondary"
                href="index.php?include=pemesanan">Cek Detail</a>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <?php include "includes/footer.php" ?>
  </div>
</section>
<!-- content edit profil end -->
<?php
if(!empty($_GET["notif"])){
if ($_GET["notif"]== "terverifikasi") {?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "success",
    iconColor: "#034C5F",
    title: "Data Anda sudah terverifikasi!",
    confirmButtonText: "Okee kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=beranda')
  })
}, 10)
</script>
<?php }?>
<?php }?>

<?php if ($foto_verif == null || $deskripsi_pribadi_verif == null || $instagram_verif==null) {?>
<script>
setTimeout(() => {
  swal.fire({
    title: "Lengkapi data Anda!",
    text: "Segera lengkapi data anda agar mendapatkan customer",
    icon: "info",
    iconColor: "#97BEC6",
    confirmButtonText: "Siap kak!",
    confirmButtonColor: "#034C5F",
    showCancelButton: true,
    cancelButtonText: "Nanti dulu deh"
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = "index.php?include=pengaturan";
    }
  });
})
</script>
<?php } ?>