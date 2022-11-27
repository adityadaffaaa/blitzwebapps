  <!-- Header -->
  <header class="mt-10 flex justify-center">
    <div class="flex flex-row w-4/5 justify-between">
      <a href="index.php?include=beranda"><img class="h-[30px]" src="./assets/Blitz Logo.png" alt="" /></a>
      <?php if(isset($_GET['include'])) {
      $include = $_GET['include'];
      if($include=="detail-klienkami"){
      ?>
      <a class="px-[14px] py-[10px] flex items-center bg-secondary rounded-lg text-paragraph1 transition-default hover:bg-primary text-text2"
        href="index.php?include=beranda">
        <?php
      
      }else{
      ?>
        <a class="px-[14px] py-[10px] flex items-center bg-secondary rounded-lg text-paragraph1 transition-default hover:bg-primary text-text2"
          href="index.php?include=jasa-kami">
          <?php
      }
      } ?>

          <span class="fill-text2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
              <path fill="none" d="M0 0h24v24H0z" />
              <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
            </svg>
          </span>
          Kembali</a>
    </div>
  </header>
  <!-- Header End -->