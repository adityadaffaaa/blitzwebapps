<?php 
if(isset($_GET['idkategori']) && isset($_GET['tgl_mulai']) && isset($_GET['tgl_selesai'])){  
 $tgl_mulai = $_GET['tgl_mulai'];
 $tgl_selesai = $_GET['tgl_selesai'];
  $mulai = date_create($tgl_mulai) ;
  $selesai = date_create($tgl_selesai);
  $diff = date_diff($mulai, $selesai);
  $jml_hari = $diff->format("%a");
  $id_kategori = $_GET['idkategori']; 
 $sql_harga = "SELECT (`harga` * $jml_hari) FROM `kategori_event` WHERE `id_kategori` = $id_kategori";
 $query_harga = mysqli_query($koneksi, $sql_harga);
 while($data_harga = mysqli_fetch_row($query_harga)){
  $harga =$data_harga[0];
    $total_h = number_format($harga, 0, ',', '.');
}
}
?>
<a id="total-harga" class="text-primary text-heading3 font-poppins"><?php echo $total_h ?></a>