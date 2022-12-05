<?php
if(isset($_SESSION["id_fotovideografer"])){
  $id_fotovideografer = $_SESSION["id_fotovideografer"];
}
?>
<!-- content edit profil -->
<section class="w-full flex justify-center">
  <div class="flex flex-col w-full justify-between">
    <div class="flex flex-col gap-8">
      <div class="flex flex-row bg-text2 px-6 py-1 items-center justify-between shadow-default">
        <div class="flex flex-col">
          <h3 class="text-text1 text-heading3 font-poppins">Chat fotovideografer</h3>
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
        <div class="flex flex-row px-6 py-4 items-center justify-between border-b-2 border-primary">
          <h5 class="text-text1 text-heading5 font-poppins">Chat fotovideografer</h5>
        </div>
        <div class="px-6 py-2 flex flex-col">
          <!-- chat content -->
          <div class="flex flex-col px-6 py-4 h-[406px] gap-6 overflow-auto custom-scrollbar">
            <?php
            $sql_chat = "SELECT `fotovideo`.`foto`, `c`.`chat`, DATE_FORMAT(`c`.`waktu`,'%H.%i'), `cac`.`pengirim`
            FROM `chat_admin_fotovideografer` `cac`             
            JOIN `fotovideografer` `fotovideo` ON `cac`.`id_fotovideografer` = `fotovideo`.`id_fotovideografer`
            JOIN `chat_admin` `c` ON `cac`.`id_chat` = `c`.`id_chat`
            WHERE `fotovideo`.`id_fotovideografer` = $id_fotovideografer";            
            $query_chat = mysqli_query($koneksi, $sql_chat);
            while ($data_chat = mysqli_fetch_row($query_chat)) {
              $foto = $data_chat[0];
              $chat = $data_chat[1];
              $waktu = $data_chat[2];
              $pengirim = $data_chat[3];
            ?>
            <?php if($pengirim == "admin"){ ?>
            <!-- chat admin -->
            <div class="flex flex-row justify-start">
              <div class="flex flex-row w-1/2 gap-3">
                <span class="fill-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="56" height="56">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                      d="M19.938 8H21a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-1.062A8.001 8.001 0 0 1 12 23v-2a6 6 0 0 0 6-6V9A6 6 0 1 0 6 9v7H3a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1.062a8.001 8.001 0 0 1 15.876 0zM3 10v4h1v-4H3zm17 0v4h1v-4h-1zM7.76 15.785l1.06-1.696A5.972 5.972 0 0 0 12 15a5.972 5.972 0 0 0 3.18-.911l1.06 1.696A7.963 7.963 0 0 1 12 17a7.963 7.963 0 0 1-4.24-1.215z" />
                  </svg>
                </span>

                <div class="flex flex-col gap-2">
                  <div class="p-6 bg-background1 rounded-lg shadow-default">
                    <p class="text-text1 text-paragraph4">
                      <?php echo $chat ?>
                    </p>
                  </div>
                  <div class="flex flex-row justify-start">
                    <p class="text-text3 text-paragraph4"><?php echo $waktu ?></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- chat admin end -->
            <?php }else if ($pengirim == "fotovideografer"){ ?>
            <!-- chat fotovideografer  -->
            <div class="flex flex-row justify-end">
              <div class="flex flex-row w-1/2 justify-end gap-3">
                <div class="flex flex-col gap-2">
                  <div class="p-6 bg-background1 rounded-lg shadow-default">
                    <p class="text-text1 text-paragraph4"><?php echo $chat ?></p>
                  </div>
                  <div class="flex flex-row justify-end">
                    <p class="text-text3 text-paragraph4"><?php echo $waktu ?></p>
                  </div>
                </div>
                <?php if($foto == null) { ?>
                <span class="fill-primary ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="64" height="64">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                      d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                  </svg>
                </span>
                <?php } else {?>
                <img class="h-14 rounded-full" src="./assets/img/<?php echo $foto ?>" alt="" />
                <?php }?>
              </div>
            </div>
            <!-- chat fotovideografer end -->
            <?php } ?>
            <?php } ?>
          </div>
          <!-- chat content end -->
          <!-- kirim chat -->
          <form method="POST" action="index.php?include=konfirmasi-chat"
            class="flex flex-row justify-between items-center">
            <input
              class="px-6 py-4 outline-none w-[95%] rounded-lg transition-default focus:shadow-default focus:-translate-y-2"
              name="chat" type="text" autocomplete="off" placeholder="Ketikan pesan Anda" />
            <button
              class="h-[42px] w-[42px] bg-secondary rounded-full flex justify-center items-center hover:shadow-default hover:shadow-secondary hover:-translate-y-1 transition-default"
              type="submit">
              <span class="fill-text2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" />
                </svg>
              </span>
            </button>
          </form>
          <!-- kirim chat end -->
        </div>
      </div>
    </div>
    <?php include "includes/footer.php" ?>
  </div>
</section>
<!-- content edit profil end -->