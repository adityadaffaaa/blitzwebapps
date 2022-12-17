<?php
if(isset($_SESSION['id_customer'])){
  // ambil customer
  $id_customer = $_SESSION['id_customer'];
  $id_jasa = 3;
  $id_kategori = $_POST['kategori'];
  $tgl_mulai = $_POST['tanggal_mulai'];
  $tgl_selesai = $_POST['tanggal_selesai'];
  $id_fotovideografer = $_POST['fotovideografer'];
  $lokasi_file = $_FILES['pembayaran']['tmp_name'];
  $nama_file = $_FILES['pembayaran']['name'];
  $direktori = './assets/img/' . $nama_file;
  $status = 'belum dikonfirmasi';

  if(empty($id_kategori)){
    header('Location:index.php?include=jasa-fotovideografi&notif=kategorikosong');
  }else if(empty($tgl_mulai)){
    header('Location:index.php?include=jasa-fotovideografi&notif=tanggalmulaikosong');  
  }else if(empty($tgl_selesai)){
    header('Location:index.php?include=jasa-fotovideografi&notif=tanggalselesaikosong');      
  }else if (empty($id_fotovideografer)){
    header('Location:index.php?include=jasa-fotovideografi&notif=videograferkosong');
  }else if (empty($nama_file)){
    header('Location:index.php?include=jasa-fotovideografi&notif=pembayarankosong');
  } else {
    // rentang harga
    $mulai = date_create($tgl_mulai) ;
    $selesai = date_create($tgl_selesai);
    $diff = date_diff($mulai, $selesai);
    $jml_hari = $diff->format("%a");
    $sql_harga = "SELECT (`harga` * $jml_hari) FROM `kategori_event` WHERE `id_kategori` = $id_kategori";
    $query_harga = mysqli_query($koneksi, $sql_harga);
    while($data_harga = mysqli_fetch_row($query_harga)){
    $harga =$data_harga[0];
    }
  if(move_uploaded_file($lokasi_file, $direktori)){
      $sql_pemesanan = "INSERT INTO `pemesanan` (`id_kategori`, `id_jasa`,`id_customer`,`id_fotovideografer`, `jadwal_mulai`,`jadwal_selesai`,`status`, `foto_pembayaran`,`harga`)
      VALUES ('$id_kategori','$id_jasa','$id_customer','$id_fotovideografer','$tgl_mulai','$tgl_selesai', '$status','$nama_file','$harga')";
      mysqli_query($koneksi,$sql_pemesanan);
      header('Location:index.php?include=jasa-fotovideografi&notif=pemesananberhasil');
    } else {
      header('Location:index.php?include=jasa-fotovideografi&notif=pemesanangagal');
    }
  }

}
?>