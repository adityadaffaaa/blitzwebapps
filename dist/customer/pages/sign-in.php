  <div class="w-full h-full bg-cover" style="background-image: url('./assets/img/bg-signin.png')">
    <div class="w-full h-full bg-gradient-to-r from-primary to-[rgba(3,76,95,0.6)] flex justify-center items-center">
      <!-- form sign in -->
      <div class="flex flex-row w-4/5 justify-between">
        <form action="index.php?include=konfirmasi-sign-in-customer" method="POST" class="w-full">
          <div class="flex flex-col gap-6 items-start">
            <a class="px-[14px] py-[10px] flex items-center bg-secondary rounded-lg text-paragraph1 transition-default hover:scale-105 hover:shadow-[0px_0px_24px] hover:shadow-secondary text-text2"
              href="index.php?include=beranda">
              <span class="fill-text2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z" />
                  <path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z" />
                </svg>
              </span>
              Kembali</a>
            <div class="flex flex-col gap-6">
              <div class="flex flex-col gap-1">
                <h1 class="text-text2 text-heading1 font-poppins">Sign In Dengan Akun Kamu</h1>
                <p class="text-text2 text-paragraph2">Apakah Kamu Pengguna Baru? <a class="text-secondary"
                    href="index.php?include=sign-up-customer">Sign Up</a></p>
              </div>
              <div class="flex flex-col gap-6 w-[367px]">
                <div class="flex flex-row px-[14px] py-[10px] h-10 bg-background1 rounded-lg">
                  <input
                    class="w-full h-full outline-none text-text1 text-paragraph2 placeholder:text-text3 placeholder:text-paragraph2"
                    type="text" name="username" id="username" placeholder="Username" />
                </div>
                <div class="flex flex-col gap-1">
                  <div class="flex flex-row px-[14px] py-[10px] h-10 items-center bg-background1 rounded-lg text-text3">
                    <input
                      class="w-full h-full outline-none text-text1 text-paragraph2 placeholder:text-text3 placeholder:text-paragraph2"
                      type="password" name="password" id="password" placeholder="Password" />
                    <span class="fill-text3 cursor-pointer">
                      <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                          d="M12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9C2.121 6.88 6.608 3 12 3zm0 16a9.005 9.005 0 0 0 8.777-7 9.005 9.005 0 0 0-17.554 0A9.005 9.005 0 0 0 12 19zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                      </svg>
                    </span>
                  </div>
                  <a class="text-text2 text-paragraph2" href="#">Lupa Password Anda?</a>
                </div>
                <button
                  class="text-text2 p-[10px] bg-secondary rounded-lg transition-default hover:scale-105 hover:shadow-[0px_0px_24px] hover:shadow-secondary"
                  type="submit" name="signin" value="sign in">Sign In</button>
                <div class="flex flex-row items-center">
                  <hr class="border-t-2 border-text2 w-full" />
                  <p class="text-text2 mx-6 text-paragraph2">Atau</p>
                  <hr class="border-t-2 border-text2 w-full" />
                </div>
                <a class="flex justify-center items-center p-[10px] border-2 border-secondary rounded-lg gap-2 text-text2 transition-default hover:bg-secondary"
                  href="#">
                  <span class="fill-text2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                      <path fill="none" d="M0 0h24v24H0z" />
                      <path
                        d="M3.064 7.51A9.996 9.996 0 0 1 12 2c2.695 0 4.959.99 6.69 2.605l-2.867 2.868C14.786 6.482 13.468 5.977 12 5.977c-2.605 0-4.81 1.76-5.595 4.123-.2.6-.314 1.24-.314 1.9 0 .66.114 1.3.314 1.9.786 2.364 2.99 4.123 5.595 4.123 1.345 0 2.49-.355 3.386-.955a4.6 4.6 0 0 0 1.996-3.018H12v-3.868h9.418c.118.654.182 1.336.182 2.045 0 3.046-1.09 5.61-2.982 7.35C16.964 21.105 14.7 22 12 22A9.996 9.996 0 0 1 2 12c0-1.614.386-3.14 1.064-4.49z" />
                    </svg>
                  </span>
                  Masuk Dengan Google
                </a>
              </div>
            </div>
          </div>
        </form>
        <div class="flex items-center">
          <img class="w-[218px]" src="./assets/Blitz Logo White.png" alt="" />
        </div>
      </div>
      <!-- form sign in end -->
    </div>
  </div>

  <?php
    if(!empty($_GET["notif"])){
    if($_GET["notif"]=="username kosong"){
    ?>
  <script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Username harus diisi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=sign-in-customer')
  })
}, 10)
  </script>
  <?php
    } else if ($_GET["notif"]=="password kosong"){
      ?>
  <script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Password harus diisi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=sign-in-customer')
  })
}, 10)
  </script>
  <?php
    }else if ($_GET["notif"]=="username dan password salah"){
      ?>
  <script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Username dan password salah!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=sign-in-customer')
  })
}, 10)
  </script>
  <?php
    }else if ($_GET["notif"]=="daftar berhasil"){
      ?>
  <script>
setTimeout(() => {
  swal.fire({
    icon: "success",
    iconColor: "#034C5F",
    title: "Daftar berhasil!",
    confirmButtonText: "Okee kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=sign-in-customer')
  })
}, 10)
  </script>
  <?php
    
    }
    }
    ?>