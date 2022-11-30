<?php
$id_customer = $_SESSION["id_customer"];
$sql_customer = "SELECT `nama`,`username`,`email`, `no_telp`, `alamat` FROM `customer` WHERE `id_customer` = '$id_customer'";
$query_customer = mysqli_query($koneksi,$sql_customer);
while($data=mysqli_fetch_row($query_customer)){
  $nama = $data[0];
  $username = $data[1];
  $email = $data[2];
  $no_telp = $data[3];
  $alamat = $data[4];
}
?>

<!-- content edit profil -->
<section class="w-full flex justify-center p-6">
  <div class="flex flex-col gap-8 w-full">
    <div class="flex flex-row justify-between">
      <div class="flex flex-col">
        <h3 class="text-text1 text-heading3 font-poppins">Edit Profil</h3>
        <p class="text-text1 text-paragraph2">Lengkapi Profil Anda untuk pengalaman terbaik dari <a
            class="text-secondary">Blitz</a></p>
      </div>
      <img class="h-10" src="./assets/Blitz Logo.png" alt="" />
    </div>
    <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
    <?php if($_GET['notif']=="editkosong"){?>
    <div class="px-6 py-4 items-center rounded-lg bg-secondary" role="alert">
      <p class="text-text2 text-paragraph1 font-poppins">Maaf <?php echo $_GET["jenis"]?> harus diisi !</p>
    </div>
    <?php }?>
    <?php }?>
    <?php if(!empty($_GET['notif'])){?>
    <?php if($_GET['notif']=="editberhasil"){?>
    <div class="px-6 py-4 items-center rounded-lg bg-primary" role="alert">
      <p class="text-text2 text-paragraph1 font-poppins">Data berhasil diperbarui!</p>
    </div>
    <?php }?>
    <?php }?>

    <form class="flex flex-row gap-12" action="index.php?include=konfirmasi-edit-profil" method="POST"
      enctype="multipart/form-data">
      <div class="flex flex-col gap-6">
        <div class="flex flex-col items-start gap-1">
          <label class="text-text1 text-heading5 font-poppins" for="foto">Ganti Foto</label>
          <input
            class="cursor-pointer p-[10px] w-[300px] bg-primary text-paragraph2 rounded-lg text-text2 transition-default hover:bg-secondary outline-none"
            type="file" name="foto" id="foto" />
        </div>
        <div class="flex flex-col items-start gap-1">
          <label class="text-text1 text-heading5 font-poppins" for="nama">Nama</label>
          <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[370px]" name="nama"
            id="nama" type="text" value="<?php echo $nama ?>" />
        </div>
        <div class="flex flex-col items-start gap-1">
          <label class="text-text1 text-heading5 font-poppins" for="username">Username</label>
          <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[370px]"
            name="username" id="username" type="text" value="<?php echo $username ?>" />
        </div>
        <div class="flex flex-col items-start gap-1">
          <label class="text-text1 text-heading5 font-poppins" for="email">email</label>
          <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[370px]" name="email"
            id="email" type="email" value="<?php echo $email ?>" />
        </div>
        <div class="flex flex-col items-start gap-1">
          <label class="text-text1 text-heading5 font-poppins" for="notelepon">No Telepon</label>
          <input class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none w-[370px]"
            name="notelepon" id="notelepon" type="text"
            value="<?php if($no_telp==null){echo"-";}else{echo $no_telp;} ?>" />
        </div>
      </div>
      <div class="flex flex-col gap-6">
        <div class="flex flex-col gap-1">
          <label class="text-text1 text-heading5 font-poppins" for="alamat">Alamat</label>
          <textarea class="p-[10px] bg-primary rounded-lg text-text2 text-paragraph2 outline-none" name="alamat"
            id="alamat" cols="50" rows="10"><?php if($no_telp==null){echo"-";}else{echo $alamat;} ?></textarea>
        </div>
        <button type="submit"
          class="px-[14px] py-[10px] flex justify-center bg-secondary rounded-lg transition-default text-text2 hover:shadow-[0px_0px_24px] hover:shadow-secondary hover:scale-105">Simpan
          perubahan</button>
      </div>
    </form>
  </div>
</section>
<!-- content edit profil end -->