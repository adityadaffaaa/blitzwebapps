<?php
if (isset($_SESSION['id_customer'])) {
  $id_customer = $_SESSION['id_customer'];
}
?>
<div class="flex flex-col gap-2">
  <?php 
          $sql_chat = "SELECT `c`.`chat`, DATE_FORMAT(`c`.`waktu`,'%H.%i'), `cac`.`pengirim`
            FROM `chat_admin_customer` `cac`             
            JOIN `customer` `cust` ON `cac`.`id_customer` = `cust`.`id_customer`
            JOIN `chat_cs` `c` ON `cac`.`id_chat` = `c`.`id_chat`
            WHERE `cust`.`id_customer` = $id_customer";            
            $query_chat = mysqli_query($koneksi, $sql_chat);
            while($data_chat = mysqli_fetch_row($query_chat)){
              $chat = $data_chat[0];
              $waktu = $data_chat[1];
              $pengirim = $data_chat[2]; 

              if($pengirim == "admin"){?>
  <!-- chat content -->
  <div class="flex flex-row justify-start">
    <div class="flex flex-col p-4 gap-1">
      <div class="p-4 bg-background1 shadow-default rounded-lg relative ">
        <p class="text-text1 text-paragraph4"><?php echo $chat ?></p>
        <div class="w-7 h-7 bg-primary rounded-full absolute -top-4 left-0 flex items-center justify-center">
          <span class="fill-text2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                d="M19.938 8H21a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-1.062A8.001 8.001 0 0 1 12 23v-2a6 6 0 0 0 6-6V9A6 6 0 1 0 6 9v7H3a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1.062a8.001 8.001 0 0 1 15.876 0zM3 10v4h1v-4H3zm17 0v4h1v-4h-1zM7.76 15.785l1.06-1.696A5.972 5.972 0 0 0 12 15a5.972 5.972 0 0 0 3.18-.911l1.06 1.696A7.963 7.963 0 0 1 12 17a7.963 7.963 0 0 1-4.24-1.215z" />
            </svg>
          </span>
        </div>
      </div>
      <div class="flex flex-row justify-end">
        <p class="text-text3 text-paragraph5"><?php echo $waktu ?></p>
      </div>
    </div>
  </div>
  <!-- chat content end -->
  <?php } else if($pengirim == "customer"){?>
  <!-- chat content -->
  <div class="flex flex-row justify-end">
    <div class="flex flex-col p-4 gap-1">
      <div
        class="p-4 bg-background1 shadow-default rounded-lg relative before:content-['kamu'] before:text-text2 before:flex before:items-end before:justify-center before:px-2 before:py-[2px] before:bg-secondary before:rounded-full before:absolute before:-top-4 before:right-0">
        <p class="text-text1 text-paragraph4"><?php echo $chat ?> </p>
      </div>
      <div class="flex flex-row justify-between">
        <p class="text-text3 text-paragraph5"><?php echo $waktu ?></p>
      </div>
    </div>
  </div>
  <!-- chat content end -->

  <?php } ?>
  <?php } ?>

</div>