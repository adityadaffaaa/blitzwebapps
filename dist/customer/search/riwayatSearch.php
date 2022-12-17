<?php if(isset($_SESSION['id_customer'])){
$id_customer = $_SESSION['id_customer'];
} ?>

<?php

if(isset($_GET['kunci'])){
  $katakunci_riwayat = $_GET['kunci'];
}
            $no = 1;
    $sql_riwayat = "SELECT `p`.`id_pemesanan`, `k`.`kategori`, `j`.`jasa`, DATE_FORMAT(`p`.`tanggal_pesan`,'%d/%m/%Y'), DATE_FORMAT(`p`.`jadwal_mulai`, '%d/%m/%Y'), DATE_FORMAT(`p`.`jadwal_selesai`, '%d/%m/%Y'), 
          `fv`.`nama`, `fv`.`foto`, `fv`.`instagram`, `p`.`harga`, `p`.`foto_pembayaran`, `p`.`status`
          FROM `pemesanan` `p`
          JOIN `kategori_event` `k` ON `p`.`id_kategori` = `k`.`id_kategori`
          JOIN `jasa` `j` ON `p`.`id_jasa` = `j`.`id_jasa`
          JOIN `fotovideografer` `fv` ON `p`.`id_fotovideografer` = `fv`.`id_fotovideografer` 
          WHERE `p`.`id_customer` = $id_customer
          AND `k`.`kategori` LIKE '%$katakunci_riwayat%'
          ORDER BY `p`.`id_pemesanan` DESC";    
        $query_riwayat = mysqli_query($koneksi, $sql_riwayat);
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
<?php if (isset($_SESSION['id_customer'])== $id_customer) { ?>
<tr class="baris border-b-[1px] border-b-text3">

  <td class="text-center py-4"><?php echo $no?></td>
  <td class="text-center py-4"><?php echo $kategori ?></td>
  <td class="text-center py-4"><?php echo $jasa ?></td>
  <td class="text-center py-4"><?php echo $tanggal_pesan ?></td>
  <td class="text-center py-4"><?php echo $tanggal_mulai ?></td>
  <td class="text-center py-4"><?php echo $tanggal_selesai ?></td>
  <td class="flex justify-center py-4">
    <div class="flex flex-row items-center gap-2">
      <img class="h-[42px] rounded-full" src="./../fotovideografer/assets/img/<?php echo $foto_fv ?>" alt="" />
      <div class="flex flex-col gap-[2px]">
        <p><?php echo $nama_fv ?></p>
        <p class="text-text3 text-paragraph4">@<?php echo $instagram_fv ?></p>
      </div>
    </div>
  </td>
  <td class="text-center py-4">IDR <?php echo $total_h ?></td>

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
<?php }?>
<?php $no++ ;} ?>