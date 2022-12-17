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
        <form method="POST" action="index.php?include=konfirmasi-signin" class="flex flex-col gap-6 w-[367px]">
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
            <!-- <a class="text-primary text-paragraph1" href="#">Lupa Password Anda?</a> -->
          </div>
          <button
            class="text-text2 p-[10px] bg-primary rounded-lg transition-default hover:scale-105 hover:shadow-[0px_0px_24px] hover:shadow-primary"
            type="submit" name="signin">Sign In</button>
        </form>
      </div>
      <img class="h-[30px]" src="./assets/Blitz Logo.png" alt="" />
    </div>
  </div>
</section>
<?php 
if(!empty($_GET["notif"])){
if ($_GET["notif"]== "daftar berhasil") {?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "success",
    iconColor: "#034C5F",
    title: "Daftar berhasil!",
    confirmButtonText: "Okee kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php')
  })
}, 10)
</script>
<?php } else if ($_GET["notif"] == "Username kosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Username harus diisi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php')
  })
}, 10)
</script>
<?php } else if ($_GET["notif"] == "Password kosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Password harus diisi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php')
  })
}, 10)
</script>
<?php } else if ($_GET["notif"] == "username dan password salah"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Username dan password salah!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php')
  })
}, 10)
</script>
<?php } else if ($_GET["notif"] == "Data belum divalidasi"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "warning",
    iconColor: "#D7A151",
    title: "Maaf data Anda belum divalidasi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php')
  })
}, 10)
</script>
<?php }?>
<?php }?>