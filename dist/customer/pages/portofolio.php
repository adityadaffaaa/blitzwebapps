<?php
if(isset($_POST["katakunci"])){
$katakunci_fotovideografer = $_POST["katakunci"];
$_SESSION['katakunci_fotovideografer'] = $katakunci_fotovideografer;
}
if(isset($_SESSION['katakunci_fotovideografer'])){
$katakunci_fotovideografer = $_SESSION['katakunci_fotovideografer'];
}
?>

<!-- Hero -->
<section class="my-16">
  <div class="w-full h-[500px] bg-cover bg-fixed" style="background-image: url('./assets/img/hero-portofolio.png')">
    <div class="w-full h-full gradient-primary flex items-center justify-center">
      <div class="flex flex-col w-4/5 gap-4 items-center">
        <h1 class="text-text2 text-heading1 font-poppins">Portofolio Fotografer dan Videografer Kami</h1>
        <p class="text-text2 text-paragraph2 text-center w-[560px]">Pilih salah satu untuk melihat lebih detail</p>
      </div>
    </div>
  </div>
</section>
<!-- Hero End -->
<div class="container mx-auto">
  <!-- pencarian riwayat -->
  <form action="index.php?include=portofolio" method="POST">
    <section class="mt-[50px] flex justify-center">
      <div class="flex flex-row w-4/5 justify-between">
        <h3 class="text-text1 text-heading3 font-poppins">Portofolio Kami</h3>
        <div class="flex flex-row items-center gap-6">
          <div class="flex flex-row p-[10px] border-2 border-text4 rounded-lg w-[320px]">
            <input class="outline-none w-full text-text1 text-paragraph4" name="katakunci" id="katakunci" type="text"
              placeholder="Cari Foto/Videografer" autocomplete="off" />
            <span class="fill-text4 cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z" />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </section>
  </form>
  <!-- pencarian riwayat end -->
  <section class="mt-[42px] flex justify-center">
    <div class="flex flex-col items-center w-4/5 gap-6">
      <!-- list foto/videografer -->
      <div class="grid grid-cols-3 gap-10">
        <?php 
        $batas = 6; 
        if(!isset($_GET['halaman'])){ 
          $posisi = 0; 
          $halaman = 1; 
        }else{ 
          $halaman = $_GET['halaman']; 
          $posisi = ($halaman-1) * $batas; 
        } 

        $sql_fotovideografer = "SELECT `id_fotovideografer`,`foto`,`nama`,`instagram`,`alamat`,`deskripsi_pribadi`,`status` FROM `fotovideografer`"; 
        if (!empty($katakunci_fotovideografer)){ 
          $sql_fotovideografer .= " WHERE `nama` LIKE '%$katakunci_fotovideografer%'";
        }
        $sql_fotovideografer .= "ORDER BY `nama` LIMIT $posisi, $batas";
        $query_fotovideografer = mysqli_query($koneksi, $sql_fotovideografer);
        $posisi += 1;
        while($data_fotovideografer = mysqli_fetch_row($query_fotovideografer)){
          $id_fotovideografer = $data_fotovideografer[0];
          $foto_fotovideografer = $data_fotovideografer[1];
          $nama_fotovideografer = $data_fotovideografer[2];
          $ig_fotovideografer = $data_fotovideografer[3];
          $alamat_fotovideografer = $data_fotovideografer[4];
          $desc_fotovideografer = $data_fotovideografer[5];
          $status_fotovideografer = $data_fotovideografer[6];

          
        ?>
        <?php if($status_fotovideografer=="terverifikasi"){ ?>
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
              <img class="rounded-full h-[164px]" src="./assets/img/hery.png" alt="" />
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
        <?php } ?>
        <?php
        }
        ?>
      </div>
      <!-- list foto/videografer end -->
      <!-- paginasi portofolio -->
      <div class="flex flex-row gap-6 items-center">
        <?php
        $sql_jum = "SELECT `id_fotovideografer`,`foto`,`nama`,`instagram`,`alamat`,`deskripsi_pribadi`,`status` FROM `fotovideografer`";  
        if (!empty($katakunci_customer)){  
          $sql_jum .= " WHERE `nama` LIKE '%$katakunci_fotovideografer%'"; 
        }  
        $sql_jum .= " order by `nama`"; 
        $query_jum = mysqli_query($koneksi, $sql_jum); 
        $jum_data = mysqli_num_rows($query_jum); 
        $jum_halaman = ceil($jum_data/$batas); 
        ?>
        <ul class="flex flex-row items-center gap-2">
          <?php if($jum_halaman==0){
                      //tidak ada halaman
                    }else if($jum_halaman==1){
                      echo "  <li>
                      <a>
                        <div
                          class='flex justify-center text-text2 items-center w-9 h-9 bg-primary rounded-lg transition-default'>
                          1</div>
                      </a>
                    </li>";
                    }else{
                      $sebelum = $halaman-1;
                      $setelah = $halaman+1;
                      if($halaman!=1){
                        
                      echo "<a  href='index.php?include=portofolio&halaman=$sebelum' class='inline-block p-[4px] bg-secondary rounded-full transition-default hover:bg-primary'>
                      <span class='fill-text2'>
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='32' height='32'>
                          <path fill='none' d='M0 0h24v24H0z' />
                          <path d='M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z' />
                        </svg>
                      </span>
                    </a>" ;                  
                    }
                    for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                        if($i!=$halaman){
                          echo" <li>
                        <a href='index.php?include=portofolio&halaman=$i'>
                          <div
                            class='flex justify-center text-text2 items-center w-9 h-9 bg-background2 hover:bg-primary rounded-lg transition-default'>
                            $i</div>
                        </a>
                      </li> ";
                         
                        }else{
                         
                          echo" <li>
                        <a>
                          <div
                            class='flex justify-center text-text2 items-center w-9 h-9  bg-primary rounded-lg transition-default'>
                            $i</div>
                        </a>
                      </li> ";
                        }
                      }
                    }
                      if($halaman!=$jum_halaman){
                        echo"<a  href='index.php?include=portofolio&halaman=$setelah' class='inline-block p-[4px] bg-secondary rounded-full transition-default hover:bg-primary'>
                        <span class='fill-text2'>
                          <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='32' height='32'>
                            <path fill='none' d='M0 0h24v24H0z' />
                            <path d='M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z' />
                          </svg>
                        </span>
                      </a>";                                        
                      }
                    }?>
        </ul>
      </div>
      <!-- paginasi portofolio end -->
    </div>
  </section>
</div>