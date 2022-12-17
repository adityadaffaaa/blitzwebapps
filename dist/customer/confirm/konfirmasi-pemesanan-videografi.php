<?php
if(isset($_SESSION['id_customer'])){
  // ambil customer
  $id_customer = $_SESSION['id_customer'];
  $id_jasa = 2;
  $id_kategori = $_POST['kategori'];
  $tgl_mulai = $_POST['tanggal_mulai'];
  $tgl_selesai = $_POST['tanggal_selesai'];
  $id_videografer = $_POST['videografer'];
  $lokasi_file = $_FILES['pembayaran']['tmp_name'];
  $nama_file = $_FILES['pembayaran']['name'];
  $direktori = './assets/img/' . $nama_file;
  $status = 'belum dikonfirmasi';
  $level = "gold";
  if(empty($id_kategori)){
    header('Location:index.php?include=jasa-videografi&notif=kategorikosong');
  }else if(empty($tgl_mulai)){
    header('Location:index.php?include=jasa-videografi&notif=tanggalmulaikosong');  
  }else if(empty($tgl_selesai)){
    header('Location:index.php?include=jasa-videografi&notif=tanggalselesaikosong');      
  }else if (empty($id_videografer)){
    header('Location:index.php?include=jasa-videografi&notif=videograferkosong');
  }else if (empty($nama_file)){
    header('Location:index.php?include=jasa-videografi&notif=pembayarankosong');
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
    // jml_pemesanan
    $sql_jml_pesanan = "SELECT COUNT(`id_pemesanan`) FROM `pemesanan` WHERE `id_customer` = $id_customer";
    $query_jml_pesanan = mysqli_query($koneksi, $sql_jml_pesanan);
    while($data_jml_pesanan = mysqli_fetch_row($query_jml_pesanan)){
      $jml_pesanan = $data_jml_pesanan[0];    
    }
    if($jml_pesanan > 1){
      // update level
    $sql_update = "UPDATE `customer` SET `level` = '$level' WHERE `id_customer` = $id_customer";
    mysqli_query($koneksi, $sql_update);
    $sql_pemesanan = "INSERT INTO `pemesanan` (`id_kategori`, `id_jasa`,`id_customer`,`id_fotovideografer`, `jadwal_mulai`,`jadwal_selesai`,`status`, `foto_pembayaran`,`harga`)
    VALUES ('$id_kategori','$id_jasa','$id_customer','$id_videografer','$tgl_mulai','$tgl_selesai', '$status','$nama_file','$harga')";
    mysqli_query($koneksi,$sql_pemesanan);
    $_SESSION["level"] = $level; 
    header('Location:index.php?include=jasa-videografi&notif=pemesananberhasil');
    }else{
      $sql_pemesanan = "INSERT INTO `pemesanan` (`id_kategori`, `id_jasa`,`id_customer`,`id_fotovideografer`, `jadwal_mulai`,`jadwal_selesai`,`status`, `foto_pembayaran`,`harga`)
      VALUES ('$id_kategori','$id_jasa','$id_customer','$id_videografer','$tgl_mulai','$tgl_selesai', '$status','$nama_file','$harga')";
      mysqli_query($koneksi,$sql_pemesanan);
      header('Location:index.php?include=jasa-videografi&notif=pemesananberhasil');    
    }
    } else {
      header('Location:index.php?include=jasa-videografi&notif=pemesanangagal');
    }
  }

}
?>