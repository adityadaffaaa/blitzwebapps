<?php
if(isset($_GET["data"])){
  $id_fotovideografer = $_GET["data"];
  }
            $sql_chat = "SELECT `fv`.`id_fotovideografer`, `c`.`chat` , `fv`.`foto`, `fv`.`nama`,  DATE_FORMAT(`c`.`waktu`,'%H.%i'), `caf`.`pengirim`
            FROM `chat_admin_fotovideografer` `caf`           
            JOIN `fotovideografer` `fv` ON `caf`.`id_fotovideografer` = `fv`.`id_fotovideografer`
            JOIN `chat_admin` `c` ON `caf`.`id_chat` = `c`.`id_chat`
            WHERE `fv`.`id_fotovideografer`= $id_fotovideografer";
            $query_chat = mysqli_query($koneksi, $sql_chat);
            while($data_chat = mysqli_fetch_row($query_chat)){
              $id_fotovideografer = $data_chat[0];
              $chat = $data_chat[1];
              $foto = $data_chat[2];
              $nama = $data_chat[3];
              $waktu = $data_chat[4];
              $pengirim = $data_chat[5];

              if($pengirim == "fotovideografer"){
                ?>
<!-- chat fotovideografer -->
<div class="flex flex-row justify-start">
  <div class="flex flex-row w-1/2 gap-3">
    <?php if($foto==null){?>
    <span class="fill-primary ">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="56" height="56">
        <path fill="none" d="M0 0h24v24H0z" />
        <path
          d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
      </svg>
    </span>
    <?php }else { ?>
    <img class="h-14 w-14 rounded-full" src="../fotovideografer/assets/img/<?php echo $foto ?>" alt="" />
    <?php } ?>
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
<!-- chat fotovideografer end -->
<?php } else if($pengirim == "admin") {?>
<!-- chat admin  -->
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
    <span class="fill-primary">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="56" height="56">
        <path fill="none" d="M0 0h24v24H0z" />
        <path
          d="M19.938 8H21a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-1.062A8.001 8.001 0 0 1 12 23v-2a6 6 0 0 0 6-6V9A6 6 0 1 0 6 9v7H3a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1.062a8.001 8.001 0 0 1 15.876 0zM3 10v4h1v-4H3zm17 0v4h1v-4h-1zM7.76 15.785l1.06-1.696A5.972 5.972 0 0 0 12 15a5.972 5.972 0 0 0 3.18-.911l1.06 1.696A7.963 7.963 0 0 1 12 17a7.963 7.963 0 0 1-4.24-1.215z" />
      </svg>
    </span>
  </div>
</div>
<!-- chat admin end -->
<?php
            }
            }
            ?>