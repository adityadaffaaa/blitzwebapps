<section class="flex w-full h-full justify-center">
  <div class="flex flex-row p-10 justify-between items-center w-[90%]">
    <div class="w-[550px] h-[688px] bg-cover rounded-2xl overflow-hidden"
      style="background-image: url('./assets/img/bg-signin-fotovideografer.png')">
      <div class="h-full w-full gradient-primary"></div>
    </div>
    <div class="flex flex-col h-full items-end justify-between">
      <a class="px-[14px] py-[10px] flex items-center bg-secondary rounded-lg text-paragraph1 transition-default hover:scale-105 hover:shadow-[0px_0px_24px] hover:shadow-secondary text-text2"
        href="../customer/index.php">
        <span class="fill-text2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
          </svg>
        </span>
        Kembali</a>
      <div class="flex flex-col gap-6 items-center">
        <div class="flex flex-col gap-1 items-center">
          <h1 class="text-primary text-heading1 font-poppins">Selamat Datang Kembali</h1>
          <p class="text-text1 text-paragraph2">Belum mendaftar menjadi foto/videografer? <a
              class="text-primary text-paragraph1" href="index.php?include=signup">Sign Up</a></p>
        </div>
        <div class="flex flex-col gap-6 w-[367px]">
          <div class="flex flex-row px-[14px] py-[10px] h-10 bg-secondary rounded-lg">
            <input
              class="w-full h-full outline-none text-text2 bg-secondary text-paragraph2 placeholder:text-text2 placeholder:text-paragraph2"
              type="text" name="username" id="username" placeholder="Username" />
          </div>
          <div class="flex flex-col gap-1">
            <div class="flex flex-row px-[14px] py-[10px] h-10 items-center bg-secondary rounded-lg text-text2">
              <input
                class="w-full h-full outline-none text-text2 bg-secondary text-paragraph2 placeholder:text-text2 placeholder:text-paragraph2"
                type="password" name="password" id="password" placeholder="Password" />
              <span class="fill-text2 cursor-pointer">
                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path
                    d="M12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9C2.121 6.88 6.608 3 12 3zm0 16a9.005 9.005 0 0 0 8.777-7 9.005 9.005 0 0 0-17.554 0A9.005 9.005 0 0 0 12 19zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                </svg>
              </span>
            </div>
            <a class="text-primary text-paragraph1" href="#">Lupa Password Anda?</a>
          </div>
          <a href="#"
            class="text-text2 p-[10px] flex justify-center bg-primary rounded-lg transition-default hover:scale-105 hover:shadow-[0px_0px_24px] hover:shadow-primary"
            type="submit">Sign In</a>
        </div>
      </div>
      <img class="h-[30px]" src="./assets/Blitz Logo.png" alt="" />
    </div>
  </div>
</section>
<?php 
if(isset($_SESSION["id_fotovideografer"])){
  $id_fotovideografer = $_SESSION["id_fotovideografer"];
  $sql = "SELECT `token` FROM `fotovideografer` WHERE `id_fotovideografer` = $id_fotovideografer";
  $query = mysqli_query($koneksi, $sql);
  while($data = mysqli_fetch_row($query)){
    $token = $data[0];
  }
}
?>
<!-- pop up token -->
<div
  class="token-popup-background hidden w-full h-[100vh] z-[80] fixed top-0 items-center justify-center bg-[rgba(0,0,0,0.5)] opacity-0 transition-all ease-in-out duration-500">
  <form method="POST" action="index.php?include=konfirmasi-verifikasi"
    class="token-popup p-6 bg-background1 relative shadow-default flex flex-col items-center gap-4 rounded-lg transition-all ease-in-out duration-500 translate-y-64">
    <a
      class="close-popup absolute -top-4 transition-all ease-in-out duration-200 right-0 text-paragraph1 font-poppins w-8 h-8 flex items-center justify-center cursor-pointer rounded-lg bg-secondary hover:bg-primary">
      <span class="fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
        </svg>
      </span>
    </a>
    <h3 class="text-text1 text-heading3 font-poppins">Selamat Anda Lolos Seleksi!</h3>
    <div class="flex flex-col items-center gap-1">
      <p class="text-text1 text-paragraph2">Silakan masukkan API key/token dibawahi ini untuk verifikasi akun</p>
      <p class="text-text1 text-paragraph2">Token: <a class="text-paragraph1"><?php echo $token ?></a></p>
      <?php if(!empty($_GET["notif"]) && !empty($_GET["jenis"])){?>
      <?php if($_GET["notif"] == "kesalahan"){?>
      <p class="text-secondary font-poppins font-bold">Maaf <?php echo $_GET["jenis"] ?>!</p>
      <?php } ?>
      <?php } ?>
    </div>
    <input
      class="w-full outline-none py-[10px] px-6 border-2 border-primary rounded-lg text-text1 text-paragraph2 placeholder:text-text4 placeholder:text-paragraph2"
      type="text" name="token" placeholder="Masukkan API key/token kamu" autocomplete="off" />
    <button
      class="py-[10px] text-text2 text-paragraph1 w-full px-6 rounded-lg bg-primary transition-default hover:bg-secondary"
      type="submit">Submit</button>
  </form>
</div>
<!-- pop up token end -->
<script>
// filter pop up
const tokenPopup = document.querySelector(".token-popup-background");
const closePopup = document.querySelector(".close-popup");
setTimeout(() => {
  tokenPopup.classList.add("flex");
  tokenPopup.classList.remove("hidden");
  setTimeout(() => {
    tokenPopup.classList.remove("opacity-0");
    tokenPopup.firstElementChild.classList.remove("translate-y-64");
  }, 100);
}, 10);
// filter close
closePopup.addEventListener("click", () => {
  tokenPopup.classList.add("opacity-0");
  tokenPopup.firstElementChild.classList.add("translate-y-64");
  setTimeout(() => {
    tokenPopup.classList.remove("flex");
    tokenPopup.classList.add("hidden");
  }, 300)
  setTimeout(() => {
    window.location.href = "index.php?include=logout"
  }, 300);
});
</script>