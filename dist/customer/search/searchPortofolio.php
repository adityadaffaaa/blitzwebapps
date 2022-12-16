<?php
include("../../koneksi/koneksi.php");
$katakunci = $_GET['keyword'];
?>

<div class="grid grid-cols-3 gap-10">
  <?php
        $sql_fotovideografer = "SELECT `id_fotovideografer`,`foto`,`nama`,`instagram`,`alamat`,`deskripsi_pribadi`,`status` FROM `fotovideografer`       
          WHERE `nama` LIKE '%$katakunci%'
          AND `status` = 'terverifikasi'
          AND `foto` <> 'null'
          AND `instagram` <> 'null'
          AND `deskripsi_pribadi` <> 'null'
          ORDER BY `nama`";        
        $query_fotovideografer = mysqli_query($koneksi, $sql_fotovideografer);
        while($data_fotovideografer = mysqli_fetch_row($query_fotovideografer)){
          $id_fotovideografer = $data_fotovideografer[0];
          $foto_fotovideografer = $data_fotovideografer[1];
          $nama_fotovideografer = $data_fotovideografer[2];
          $ig_fotovideografer = $data_fotovideografer[3];
          $alamat_fotovideografer = $data_fotovideografer[4];
          $desc_fotovideografer = $data_fotovideografer[5];
          $status_fotovideografer = $data_fotovideografer[6];        
        ?>
  <a href="index.php?include=detail-portofolio&data=<?php echo $id_fotovideografer ?>"
    class="w-[357px] cursor-pointer flex items-center justify-center p-6 bg-background1 border-4 transition-default rounded-2xl hover:border-secondary hover:shadow-default hover:scale-105">
    <div class="flex flex-col gap-4">
      <div class="flex flex-col gap-4 items-center">
        <?php if($foto_fotovideografer == null) {?>
        <span class="fill-primary ">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="164" height="164">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
          </svg>
        </span>
        <?php } else{ ?>
        <img class="rounded-full h-[164px] w-[164px]"
          src="./../fotovideografer/assets/img/<?php echo $foto_fotovideografer ?>" alt="" />
        <?php } ?>
        <div class="flex flex-col gap-[2px] items-center">
          <h5 class="text-primary text-heading5 font-poppins"><?php echo $nama_fotovideografer ?></h5>
          <p class="text-text4 text-paragraph4">
            @<?php if($ig_fotovideografer== null){echo"-";}else{echo $ig_fotovideografer;} ?></p>
          <p class="text-text1 text-paragraph1">
            <?php if($alamat_fotovideografer== null){echo"-";}else{echo $alamat_fotovideografer ;} ?></p>
        </div>
      </div>
      <p class="text-text1 text-paragraph2 text-center">
        <?php if($desc_fotovideografer== null){echo"-";}else{echo $desc_fotovideografer ;} ?></p>
    </div>
  </a>
  <?php }?>
</div>