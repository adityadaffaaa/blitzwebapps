<!-- content chat customer -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <div class="flex flex-col">
          <h3 class="text-text1 text-heading3 font-poppins">Chat Foto dan Videografer</h3>
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
      <div class="flex flex-col bg-background1 shadow-default rounded-lg mx-1 border-2 border-primary">
        <form method="" action="" class="flex flex-row px-6 py-2 items-center justify-start border-b-2 border-primary">
          <div class="flex flex-row p-[10px] border-2 border-text4 rounded-lg w-[320px]">
            <input class="outline-none w-full text-text1 text-paragraph4" name="katakunci" id="katakunci" type="text"
              placeholder="Cari..." autocomplete="off" />
            <button type="submit" class="fill-text4 cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z" />
              </svg>
            </button>
          </div>
        </form>
        <div class="px-6 py-2 flex flex-col items-start h-[506px] overflow-auto custom-scrollbar">
          <?php 
            $time = time();
            $date = date("Y-m-d", $time);
            $sql_chat = "SELECT `fv`.`id_fotovideografer`, `fv`.`foto`, `fv`.`nama`,  DATE_FORMAT(`c`.`waktu`,'%Y-%m-%d')
            FROM `chat_admin_fotovideografer` `caf`           
            JOIN `fotovideografer` `fv` ON `caf`.`id_fotovideografer` = `fv`.`id_fotovideografer`
            JOIN `chat_admin` `c` ON `caf`.`id_chat` = `c`.`id_chat`
            WHERE `caf`.`pengirim` = 'fotovideografer'
            GROUP BY `fv`.`nama` 
            ORDER BY `c`.`id_chat` DESC";
            $query_chat = mysqli_query($koneksi, $sql_chat);
            while($data_chat = mysqli_fetch_row($query_chat)){
              $id_fotovideografer = $data_chat[0];
              $foto = $data_chat[1];
              $nama = $data_chat[2];
              $waktu = $data_chat[3];
            ?>
          <?php 
              if(mysqli_num_rows($query_chat)==1){?>
          <a href="index.php?include=detail-chat-fotovideografer&data=<?php echo $id_fotovideografer ?>"
            class="flex flex-row bg-background1 items-center gap-4 p-4 rounded-lg border-2 border-primary w-[95%] transition-default hover:scale-105 hover:border-transparent hover:rounded-lg hover:shadow-default hover:-translate-y-2">
            <?php if($foto== null){?>
            <span class="fill-primary ">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="64" height="64">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
              </svg>
            </span>
            <?php }else{ 
            ?>
            <img class="h-16 rounded-full" src="./../fotovideografer/assets/img/<?php echo $foto ?>" alt="" />
            <?php }?>
            <div class="flex flex-col justify-between w-full">
              <div class="flex flex-row justify-between">
                <h5 class="text-text1 text-heading5 font-poppins"><?php echo $nama ?></h5>
                <p class="text-text4 text-paragraph2">
                  <?php if($date==$waktu){echo "Hari ini";}else{ echo $waktu;}?>
                </p>
              </div>
            </div>
          </a>
          <?php }else{
            ?>
          <a href="index.php?include=detail-chat-fotovideografer&data=<?php echo $id_fotovideografer ?>"
            class="flex flex-row bg-background1 items-center gap-4 p-4 border-t-2 border-primary w-[95%] transition-default hover:scale-105 hover:border-transparent hover:rounded-lg hover:shadow-default hover:-translate-y-2">
            <?php if($foto== null){?>
            <span class="fill-primary ">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="64" height="64">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                  d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
              </svg>
            </span>
            <?php }else{ 
            ?>
            <img class="h-16 rounded-full" src="./../fotovideografer/assets/img/<?php echo $foto ?>" alt="" />
            <?php }?>
            <div class="flex flex-row justify-between w-full">
              <h5 class="text-text1 text-heading5 font-poppins"><?php echo $nama ?></h5>
              <p class="text-text4 text-paragraph2">
                <?php if($date==$waktu){echo "Hari ini";}else{ echo $waktu;}?>
              </p>
            </div>
          </a>
          <?php } ?>
          <?php  }
          ?>
        </div>
      </div>
    </div>
    <?php include "includes/footer.php" ?>
  </div>
</section>
<!-- content chat customer end -->