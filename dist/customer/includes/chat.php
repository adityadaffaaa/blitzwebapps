<?php if(isset($_SESSION["id_customer"])){
$id_customer = $_SESSION["id_customer"];
  $sql_customer = "SELECT  SUBSTRING_INDEX(`nama`,' ',1) FROM `customer` WHERE `id_customer` = $id_customer";
  $query_customer = mysqli_query($koneksi, $sql_customer);
  while($data=mysqli_fetch_row($query_customer)){
    $nama = $data[0];
  }
?>
<!-- chat -->
<div data-aos="fade-up"
  class="chat flex flex-col gap-8 items-end bottom-10 right-10 z-[100] fixed drop-shadow-[0px_4px_24px_rgba(0,0,0,0.3)]">
  <!-- chat card -->
  <div
    class="chat-content w-[410px] rounded-[16px] hidden overflow-hidden translate-x-64 opacity-0 transition-all ease-in-out duration-500 bg-text2">
    <div class="flex flex-col">
      <!-- header chat -->
      <div class="w-full h-full p-6 bg-secondary">
        <div class="flex flex-col">
          <h3 class="text-text2 text-heading3">Halo, <?php echo $nama ?> 👋</h3>
          <p class="text-text2 text-paragraph2">Ada yang bisa kami bantu?</p>
        </div>
      </div>
      <!-- header chat end -->
      <!-- chat body -->
      <div id="isi-chat" class="w-full h-[300px] px-2 py-6 overflow-auto custom-scrollbar bg-text2">
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
      </div>
      <!-- chat body end -->

      <div class="w-full flex flex-row px-6 py-6 justify-between">
        <input type="text" autocomplete="off" class="custom-chat" name="chat" id="chat"
          placeholder="Masukkan pesan kamu..."></input>
        <button
          class="h-[42px] w-[42px] bg-secondary rounded-full flex justify-center items-center hover:shadow-default hover:scale-110 transition-default"
          type="submit" onclick="InsertChat()">
          <span class="fill-text2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
              <path fill="none" d="M0 0h24v24H0z" />
              <path
                d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" />
            </svg>
          </span>
        </button>
      </div>
      <!-- </form> -->
    </div>
  </div>
  <!-- chat card end -->
  <!-- chat toggle -->
  <div class="flex flex-row relative items-center">
    <div class="wrap overflow-hidden">
      <div class="py-[10px] pl-6 pr-12 translate-x-32 bg-primary rounded-full flex items-center transition-default">
        <p class="text-text2 text-paragraph1">Chat with us</p>
      </div>
    </div>
    <div class="chat-toggle bg-secondary p-[10px] absolute -right-3 cursor-pointer rounded-full">
      <span class="fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M10 3h4a8 8 0 1 1 0 16v3.5c-5-2-12-5-12-11.5a8 8 0 0 1 8-8zm2 14h2a6 6 0 1 0 0-12h-4a6 6 0 0 0-6 6c0 3.61 2.462 5.966 8 8.48V17z" />
        </svg>
      </span>
    </div>
  </div>
  <!-- chat toggle end -->
</div>
<!-- chat end -->
<?php
} ?>
<script>
setInterval(() => {
  var isiChat = document.querySelector("#isi-chat");
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      isiChat.innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", "index.php?include=chat-masuk&chat=" + chat.value, true);
  xhr.send();
}, 10);
</script>