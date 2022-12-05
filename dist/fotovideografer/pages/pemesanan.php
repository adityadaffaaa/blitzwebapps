<?php
if(isset($_SESSION["id_fotovideografer"])){
  $id_fotovideografer = $_SESSION["id_fotovideografer"];
}
if(isset($_POST["katakunci"])){
  $katakunci_pemesanan = $_POST["katakunci"];
  $_SESSION['katakunci_pemesanan'] = $katakunci_pemesanan;
}
if(isset($_SESSION['katakunci_pemesanan'])){
  $katakunci_pemesanan = $_SESSION['katakunci_pemesanan'];
}
?>
<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <h3 class="text-text1 text-heading3 font-poppins">Pemesanan</h3>
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
        <form method="POST" action="index.php?include=pemesanan"
          class="flex flex-row px-6 py-2 items-center justify-start border-b-2 border-primary">
          <div class="flex flex-row p-[10px] border-2 border-text4 rounded-lg w-[320px]">
            <input class="outline-none w-full text-text1 text-paragraph4" name="katakunci" id="katakunci" type="text"
              placeholder="Cari Pemesanan" autocomplete="off" />
            <button type="submit" class="fill-text4 cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z" />
              </svg>
            </button>
          </div>
        </form>
        <div class="w-full p-6 h-[470px] overflow-y-auto custom-scrollbar">
          <!-- tabel pemesanan -->
          <section class="w-full flex justify-center">
            <div class="flex flex-col items-center w-full gap-6">
              <table class="w-full text-text2 text-paragraph1 font-poppins">
                <thead class="bg-secondary">
                  <tr>
                    <th width="5%" class="rounded-tl-lg py-[14px] px-2">No</th>
                    <th width="10%" class="px-2">Customer</th>
                    <th width="5%" class="px-2">Kategori</th>
                    <th width="10%" class="px-2">Jasa</th>
                    <th width="15%" class="px-2">Tanggal Pesan</th>
                    <th width="15%" class="px-2">Tanggal Mulai</th>
                    <th width="15%" class="px-2">Tanggal Selesai</th>
                    <th width="15%" class="px-2">Total Bayar</th>
                    <th width="15%" class="px-2">Status</th>
                    <th width="5%" class="rounded-tr-lg px-3">
                      <p class="hidden"></p>
                    </th>
                  </tr>
                </thead>
                <!-- data pemesanan -->
                <tbody class="text-text1 text-paragraph1 font-lora">
                  <?php  

                  $batas = 6; 
                  if(!isset($_GET['halaman'])){ 
                    $posisi = 0; 
                    $halaman = 1; 
                  }else{ 
                    $halaman = $_GET['halaman']; 
                    $posisi = ($halaman-1) * $batas; 
                  }  

                  //query sql
                  $sql_pemesanan = "SELECT `p`.`id_pemesanan`, `cust`.`nama`, `k`.`kategori`, `j`.`jasa`, DATE_FORMAT(`p`.`tanggal_pesan`,'%d/%m/%Y') , DATE_FORMAT(`p`.`jadwal_mulai`,'%d/%m/%Y') , DATE_FORMAT(`p`.`jadwal_selesai`,'%d/%m/%Y') , `p`.`harga`, `p`.`status`
                  FROM `pemesanan` `p`
                  JOIN `customer` `cust` ON `p`.`id_customer` = `cust`.`id_customer`
                  JOIN `kategori_event` `k` ON `p`.`id_kategori` = `k`.`id_kategori`
                  JOIN `jasa` `j` ON `p`.`id_jasa` = `j`.`id_jasa`";                
                  if (!empty($katakunci_pemesanan)){ 
                    $sql_pemesanan .= " WHERE `nama` LIKE '%$katakunci_pemesanan%'
                    AND `p`.`status` = 'sudah dikonfirmasi' 
                    AND `p`.`id_fotovideografer` = $id_fotovideografer
                    ORDER BY `cust`.`nama`  limit $posisi, $batas ";
                  } else{
                    $sql_pemesanan .= "
                    WHERE `p`.`status` = 'sudah dikonfirmasi' 
                  AND `p`.`id_fotovideografer` = $id_fotovideografer
                  ORDER BY `cust`.`nama`  limit $posisi, $batas ";                  
                  }
                  $query_pemesanan = mysqli_query($koneksi,$sql_pemesanan); 
                  $posisi += 1;
                  while ($data_pemesanan = mysqli_fetch_row($query_pemesanan)) {
                    $id_pemesanan = $data_pemesanan[0];
                    $nama = $data_pemesanan[1];
                    $kategori = $data_pemesanan[2];
                    $jasa = $data_pemesanan[3];
                    $tgl_pesan = $data_pemesanan[4];
                    $tgl_mulai = $data_pemesanan[5];
                    $tgl_selesai = $data_pemesanan[6];
                    $harga = $data_pemesanan[7];
                    $status = $data_pemesanan[8];
                    $total_h = number_format($harga, 0, ',', '.');
                  ?>

                  <tr class="baris border-b-[1px] border-b-text3">
                    <td class="text-center py-4"><?php echo $posisi ?></td>
                    <td class="text-center py-4"><?php echo $nama ?></td>
                    <td class="text-center py-4"><?php echo $kategori ?></td>
                    <td class="text-center py-4"><?php echo $jasa ?></td>
                    <td class="text-center py-4"><?php echo $tgl_pesan ?></td>
                    <td class="text-center py-4"><?php echo $tgl_mulai ?></td>
                    <td class="text-center py-4"><?php echo $tgl_selesai ?></td>

                    <td class="text-center py-4">IDR <?php echo $total_h ?></td>
                    <td class="text-center py-4">
                      <p class="text-text2 py-1 px-3 bg-primary rounded-lg"><?php echo $status ?></p>
                    </td>
                    <td class="py-4 px-4">
                      <a href="index.php?include=detail-pemesanan&data=<?php echo $id_pemesanan ?>"
                        class="fill-primary cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9C2.121 6.88 6.608 3 12 3zm0 16a9.005 9.005 0 0 0 8.777-7 9.005 9.005 0 0 0-17.554 0A9.005 9.005 0 0 0 12 19zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg>
                      </a>
                    </td>
                  </tr>
                  <?php $posisi++; } ?>
                </tbody>
                <!-- data pemesanan end -->
              </table>
              <!-- paginasi pemesanan -->
              <div class="flex flex-row gap-6 items-center">
                <?php
                $sql_jum = "SELECT `p`.`id_pemesanan`, `cust`.`nama`, `k`.`kategori`, `j`.`jasa`, `p`.`tanggal_pesan`, `p`.`jadwal_mulai`, `p`.`jadwal_selesai`, `p`.`harga`, `p`.`status`
                FROM `pemesanan` `p`
                JOIN `customer` `cust` ON `p`.`id_customer` = `cust`.`id_customer`
                JOIN `kategori_event` `k` ON `p`.`id_kategori` = `k`.`id_kategori`
                JOIN `jasa` `j` ON `p`.`id_jasa` = `j`.`id_jasa`";  
                if (!empty($katakunci_pemesanan)){  
                  $sql_jum .= " where `nama` LIKE '%$katakunci_pemesanan%'
                  AND `p`.`status` = 'selesai' 
                  AND `p`.`id_fotovideografer` = $id_fotovideografer
                  ORDER BY `cust`.`nama`"; 
                } else{
                  $sql_jum .= " 
                  WHERE `p`.`status` = 'sudah dikonfirmasi' 
                AND `p`.`id_fotovideografer` = $id_fotovideografer
                ORDER BY `cust`.`nama`";                   
                }
                $query_jum = mysqli_query($koneksi,$sql_jum); 
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
                        
                      echo "<a  href='index.php?include=pemesanan&halaman=$sebelum' class='inline-block p-[4px] bg-secondary rounded-full transition-default hover:bg-primary'>
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
                        <a href='index.php?include=pemesanan&halaman=$i'>
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
                        echo"<a  href='index.php?include=pemesanan&halaman=$setelah' class='inline-block p-[4px] bg-secondary rounded-full transition-default hover:bg-primary'>
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
              <!-- paginasi pemesanan end -->
            </div>
          </section>
          <!-- tabel pemesanan end -->
        </div>
      </div>
    </div>
    <?php include "includes/footer.php" ?>
  </div>
</section>
<!-- content edit profil end -->