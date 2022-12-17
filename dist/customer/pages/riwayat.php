<?php
if(isset($_SESSION['id_customer'])){
  $id_customer = $_SESSION['id_customer'];
} else {
  $id_customer = null;
}


if((isset($_GET['aksi']))&&(isset($_GET['data']))){
  if($_GET['aksi']=="hapus"){
    $id_riwayat = $_GET['data'];
  
    $sql_h = "DELETE FROM `pemesanan` WHERE `id_pemesanan` = '$id_riwayat'";
    mysqli_query($koneksi, $sql_h);
  }
}
if(isset($_POST["katakunci"])){
  $katakunci_riwayat = $_POST["katakunci"];
  $_SESSION['katakunci_riwayat'] = $katakunci_riwayat;
}
if(isset($_SESSION['katakunci_riwayat'])){
  $katakunci_riwayat = $_SESSION['katakunci_riwayat'];
}

// Validasi pemesanan
$sql_validasi = "SELECT * FROM `pemesanan` WHERE `id_customer` = $id_customer";
$query_validasi = mysqli_query($koneksi, $sql_validasi);
?>



<!-- Hero -->
<section class="my-16">
  <div class="w-full h-[500px] bg-cover bg-fixed" style="background-image: url('./assets/img/hero-riwayat.png')">
    <div class="w-full h-full gradient-primary flex items-center justify-center">
      <h1 class="text-text2 text-heading1 font-poppins">Riwayat Pemesanan Anda</h1>
    </div>
  </div>
</section>
<!-- Hero End -->
<?php if (isset($_SESSION['id_customer'])) { ?>
<form action="index.php?include=riwayat" method="POST">
  <div class="container mx-auto">
    <!-- pencarian riwayat -->
    <section class="mt-[50px] flex justify-center">
      <div class="flex flex-row w-4/5 justify-between">
        <h3 class="text-text1 text-heading3 font-poppins">Cari Riwayat Pemesanan Anda</h3>
        <div class="flex flex-row p-[10px] border-2 border-text4 rounded-lg w-[320px]">
          <input class="outline-none w-full text-text1 text-paragraph4" name="katakunci" id="katakunci" type="text"
            placeholder="Cari Riwayat" autocomplete="off" />
          <button type="submit" class="fill-text4 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z" />
            </svg>
          </button>
        </div>

      </div>
    </section>
  </div>

</form>

<!-- pencarian riwayat end -->
<div class="container mx-auto">
  <?php if(mysqli_num_rows($query_validasi)===0){ ?>
  <div class="w-full flex flex-col justify-center items-center gap-3">

    <iframe src="https://embed.lottiefiles.com/animation/51936" style="height: 240px;"></iframe>
    <h5 class="text-secondary text-heading5 font-poppins">Pesanan mu belum ada!</h5>
  </div>
  <?php } else { ?>
  <!-- tabel riwayat -->
  <section class="mt-[42px] flex justify-center">
    <div class="flex flex-col items-center w-4/5 gap-6">
      <table class="w-full text-text2 text-paragraph1 font-poppins">
        <thead class="bg-secondary">
          <tr>
            <th class="rounded-tl-lg py-[14px] px-2">No</th>
            <th class="px-2">Kategori</th>
            <th class="px-2">Jasa</th>
            <th class="px-2">Tanggal Pesan</th>
            <th class="px-2">Tanggal Mulai</th>
            <th class="px-2">Tanggal Akhir</th>
            <th class="px-2">Foto/Videografer</th>
            <th class="px-2">Total Pembayaran</th>
            <th class="px-2">Bukti</th>
            <th class="px-2">Status</th>
            <th class="rounded-tr-lg px-3">
              <p class="hidden"></p>
            </th>
          </tr>
        </thead>

        <!-- data riwayat -->
        <tbody class="text-text1 text-paragraph1 font-lora">
          <?php
    $batas = 6;
    if (!isset($_GET['halaman'])) {
      $posisi = 0;
      $halaman = 1;
    } else {
      $halaman = $_GET['halaman'];
      $posisi = ($halaman - 1) * $batas;
    }
    $sql_riwayat = "SELECT `p`.`id_pemesanan`, `k`.`kategori`, `j`.`jasa`, DATE_FORMAT(`p`.`tanggal_pesan`,'%d/%m/%Y'), DATE_FORMAT(`p`.`jadwal_mulai`, '%d/%m/%Y'), DATE_FORMAT(`p`.`jadwal_selesai`, '%d/%m/%Y'), 
          `fv`.`nama`, `fv`.`foto`, `fv`.`instagram`, `p`.`harga`, `p`.`foto_pembayaran`, `p`.`status`
          FROM `pemesanan` `p`
          JOIN `kategori_event` `k` ON `p`.`id_kategori` = `k`.`id_kategori`
          JOIN `jasa` `j` ON `p`.`id_jasa` = `j`.`id_jasa`
          JOIN `fotovideografer` `fv` ON `p`.`id_fotovideografer` = `fv`.`id_fotovideografer`";
    if (!empty($katakunci_riwayat)) {
      $sql_riwayat .= "WHERE `p`.`id_customer` = $id_customer
      OR `k`.`kategori` LIKE '%$katakunci_riwayat%'
      OR `j`.`jasa` LIKE '%$katakunci_riwayat%'
      OR `fv`.`nama` LIKE '%$katakunci_riwayat%'
      OR `p`.`tanggal_pesan` LIKE '%$katakunci_riwayat%'
      OR `p`.`jadwal_mulai` LIKE '%$katakunci_riwayat%'
      OR `p`.`jadwal_selesai` LIKE '%$katakunci_riwayat%'
      OR `p`.`status` LIKE '%$katakunci_riwayat%'
      OR `p`.`harga` LIKE '%$katakunci_riwayat%'        
            ORDER BY `p`.`id_pemesanan` DESC limit $posisi, $batas ";
            $query_riwayat = mysqli_query($koneksi, $sql_riwayat);
    } else {
      $sql_riwayat .= "WHERE `p`.`id_customer` = $id_customer
          ORDER BY `p`.`id_pemesanan` DESC limit $posisi, $batas ";
          $query_riwayat = mysqli_query($koneksi, $sql_riwayat);
    }
    $posisi += 1;
    while ($data_riwayat = mysqli_fetch_row($query_riwayat)) {
      $id_riwayat = $data_riwayat[0];
      $kategori = $data_riwayat[1];
      $jasa = $data_riwayat[2];
      $tanggal_pesan = $data_riwayat[3];
      $tanggal_mulai = $data_riwayat[4];
      $tanggal_selesai = $data_riwayat[5];
      $nama_fv = $data_riwayat[6];
      $foto_fv = $data_riwayat[7];
      $instagram_fv = $data_riwayat[8];
      $harga = $data_riwayat[9];
      $foto_pembayaran = $data_riwayat[10];
      $status = $data_riwayat[11];
      $total_h = number_format($harga, 0, ',', '.');
          ?>
          <tr class="baris border-b-[1px] border-b-text3">

            <td class="text-center py-4"><?php echo $posisi ?></td>
            <td class="text-center py-4"><?php echo $kategori ?></td>
            <td class="text-center py-4"><?php echo $jasa ?></td>
            <td class="text-center py-4"><?php echo $tanggal_pesan ?></td>
            <td class="text-center py-4"><?php echo $tanggal_mulai ?></td>
            <td class="text-center py-4"><?php echo $tanggal_selesai ?></td>
            <td class="flex justify-center py-4">
              <div class="flex flex-row items-center gap-2">
                <img class="h-[42px] rounded-full" src="./../fotovideografer/assets/img/<?php echo $foto_fv ?>"
                  alt="" />
                <div class="flex flex-col gap-[2px]">
                  <p><?php echo $nama_fv ?></p>
                  <p class="text-text3 text-paragraph4">@<?php echo $instagram_fv ?></p>
                </div>
              </div>
            </td>
            <td class="text-center py-4">IDR <?php echo $total_h ?></td>
            <td class="bukti flex justify-center py-4 relative">
              <span class="fill-primary absolute top-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M9 2.003V2h10.998C20.55 2 21 2.455 21 2.992v18.016a.993.993 0 0 1-.993.992H3.993A1 1 0 0 1 3 20.993V8l6-5.997zM5.83 8H9V4.83L5.83 8zM11 4v5a1 1 0 0 1-1 1H5v10h14V4h-8z" />
                </svg>
              </span>
            </td>
            <td class="text-center py-4">
              <p class="text-text2 py-1 px-3  <?php if ($status == 'belum dikonfirmasi') {
        echo 'bg-secondary';
      } else {
        echo 'bg-primary';
      } ?> rounded-lg"><?php echo $status ?></p>
            </td>
            <td class="flex justify-center py-4 px-4 relative">
              <a href="javascript:if(confirm('Anda yakin ingin menghapus data pemesanan <?php echo $jasa; ?>?'))window.location.href='index.php?include=riwayat&aksi=hapus&data=<?php echo $id_riwayat;?>&notif=hapusberhasil'"
                class="hapus fill-secondary absolute top-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-4.586 6l1.768 1.768-1.414 1.414L12 15.414l-1.768 1.768-1.414-1.414L10.586 14l-1.768-1.768 1.414-1.414L12 12.586l1.768-1.768 1.414 1.414L13.414 14zM9 4v2h6V4H9z" />
                </svg>
              </a>
            </td>
          </tr>
          <?php $posisi++;} ?>
        </tbody>
        <!-- data riwayat end -->
      </table>
      <!-- paginasi riwayat -->
      <div class="flex flex-row gap-6 items-center">
        <?php
    $sql_jum = "SELECT `p`.`id_pemesanan`, `k`.`kategori`, `j`.`jasa`, DATE_FORMAT(`p`.`tanggal_pesan`,'%d/%m/%Y'), DATE_FORMAT(`p`.`jadwal_mulai`, '%d/%m/%Y'), DATE_FORMAT(`p`.`jadwal_selesai`, '%d/%m/%Y'), 
               `fv`.`nama`, `fv`.`foto`, `fv`.`instagram`, `p`.`harga`, `p`.`foto_pembayaran`, `p`.`status`
               FROM `pemesanan` `p`
               JOIN `kategori_event` `k` ON `p`.`id_kategori` = `k`.`id_kategori`
               JOIN `jasa` `j` ON `p`.`id_jasa` = `j`.`id_jasa`
               JOIN `fotovideografer` `fv` ON `p`.`id_fotovideografer` = `fv`.`id_fotovideografer`";
    if (!empty($katakunci_riwayat)) {
      $sql_jum .= "WHERE `k`.`kategori` LIKE '%$katakunci_riwayat%'
                 AND `p`.`id_customer` = $id_customer
                 ORDER BY `id_pemesanan` DESC";
                 $query_jum = mysqli_query($koneksi, $sql_jum);
    } else {
      $sql_jum .= "WHERE `p`.`id_customer` = $id_customer
                ORDER BY `id_pemesanan` DESC";
                $query_jum = mysqli_query($koneksi, $sql_jum);
    }
    $jum_data = mysqli_num_rows($query_jum);
    $jum_halaman = ceil($jum_data / $batas);
        ?>
        <ul class="flex flex-row gap-1">
          <?php if ($jum_halaman == 0) {
      //tidak ada halaman
    } else if ($jum_halaman == 1) {
      echo "  <li>
                      <a>
                        <div
                          class='flex justify-center text-text2 items-center w-9 h-9 bg-primary rounded-lg transition-default'>
                          1</div>
                      </a>
                    </li>";
    } else {
      $sebelum = $halaman - 1;
      $setelah = $halaman + 1;
      if ($halaman != 1) {

        echo "<a  href='index.php?include=riwayat&halaman=$sebelum' class='inline-block p-[4px] bg-secondary rounded-full transition-default hover:bg-primary'>
                      <span class='fill-text2'>
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='32' height='32'>
                          <path fill='none' d='M0 0h24v24H0z' />
                          <path d='M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z' />
                        </svg>
                      </span>
                    </a>";

      }
      for ($i = 1; $i <= $jum_halaman; $i++) {
        if ($i > $halaman - 5 and $i < $halaman + 5) {
          if ($i != $halaman) {
            echo " <li>
                        <a href='index.php?include=riwayat&halaman=$i'>
                          <div
                            class='flex justify-center text-text2 items-center w-9 h-9 bg-background2 hover:bg-primary rounded-lg transition-default'>
                            $i</div>
                        </a>
                      </li> ";

          } else {

            echo " <li>
                        <a>
                          <div
                            class='flex justify-center text-text2 items-center w-9 h-9  bg-primary rounded-lg transition-default'>
                            $i</div>
                        </a>
                      </li> ";
          }
        }
      }
      if ($halaman != $jum_halaman) {
        echo "<a  href='index.php?include=riwayat&halaman=$setelah' class='inline-block p-[4px] bg-secondary rounded-full transition-default hover:bg-primary'>
                        <span class='fill-text2'>
                          <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='32' height='32'>
                            <path fill='none' d='M0 0h24v24H0z' />
                            <path d='M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z' />
                          </svg>
                        </span>
                      </a>";


      }
    } ?>
        </ul>

      </div>
      <!-- paginasi riwayat end -->
    </div>
  </section>
  <?php }?>
  <!-- tabel riwayat end -->
  <?php } else { ?>
  <div class="w-full flex flex-col justify-center items-center gap-6">
    <iframe src="https://embed.lottiefiles.com/animation/119048" style="height: 240px;"></iframe>
    <h5 class="text-secondary text-heading5 font-poppins">Sign in terlebih dahulu ya!</h5>
  </div>
  <?php }?>
</div>
<!-- bukti pop up -->
<div
  class="bukti-popup-background hidden w-full h-[100vh] z-[80] fixed top-0 items-center justify-center bg-[rgba(0,0,0,0.5)] opacity-0 transition-all ease-in-out duration-500">
  <div class="bukti-popup relative shadow-default transition-all ease-in-out duration-500 translate-y-64">
    <img class="h-[500px] w-auto" src="./assets/img/buktipembayaran.jpeg" alt="" />
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
<?php if (!empty($_GET['notif'])) { ?>
<?php if($_GET['notif']=="hapusberhasil") {?>
<script>
setTimeout(() => {
  swal.fire({
    icon: 'success',
    iconColor: "#034C5F",
    title: 'Data berhasil dihapus!',
    confirmButtonText: "Okee kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=riwayat')
  })
}, 10)
</script>
<?php }?>
<?php }?>