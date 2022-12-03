<section class="flex w-full h-full justify-center">
  <div class="flex flex-row p-10 justify-between items-center w-[90%]">
    <div class="w-[550px] h-[688px] bg-cover rounded-2xl overflow-hidden"
      style="background-image: url('./assets/img/bg-signup-fotovideografer.png')">
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
          <h1 class="text-primary text-heading1 font-poppins">Siap Menjadi Bagian Dari kami?</h1>
          <p class="text-text1 text-paragraph2">Sudah terdaftar menjadi foto/videografer? <a
              class="text-primary text-paragraph1" href="index.php?include=signin">Sign In</a></p>
        </div>
        <form method="POST" action="index.php?include=konfirmasi-signup"
          class="flex flex-col overflow-y-auto h-[500px] gap-6 w-[367px] p-6 custom-scrollbar">
          <div class="flex flex-row px-[14px] py-[10px] h-10 bg-secondary rounded-lg">
            <input
              class="w-full h-full outline-none text-text2 bg-secondary text-paragraph2 placeholder:text-text2 placeholder:text-paragraph2"
              type="text" name="nama" id="nama" placeholder="Nama" />
          </div>
          <div class="flex flex-row px-[14px] py-[10px] h-10 bg-secondary rounded-lg">
            <input
              class="w-full h-full outline-none text-text2 bg-secondary text-paragraph2 placeholder:text-text2 placeholder:text-paragraph2"
              type="text" name="username" id="username" placeholder="Username" />
          </div>
          <div class="flex flex-row px-[14px] py-[10px] h-10 bg-secondary rounded-lg">
            <input
              class="w-full h-full outline-none text-text2 bg-secondary text-paragraph2 placeholder:text-text2 placeholder:text-paragraph2"
              type="email" name="email" id="email" placeholder="Email" />
          </div>
          <div class="flex flex-row px-[14px] py-[10px] h-10 bg-secondary rounded-lg">
            <input
              class="w-full h-full outline-none text-text2 bg-secondary text-paragraph2 placeholder:text-text2 placeholder:text-paragraph2"
              type="text" name="notelepon" id="notelepon" placeholder="No Telepon" />
          </div>
          <div class="flex flex-row w-full gap-8">
            <div class="flex flex-col gap-2">
              <p class="text-text1 text-paragraph1">Jenis Kelamin</p>
              <div class="flex flex-row gap-7">
                <label class="radio flex flex-row cursor-pointer items-center gap-2" for="pria">
                  <input class="hidden peer" type="radio" name="jeniskelamin" id="pria" value="pria" />
                  <div class="rounded-full w-6 h-6 border-[6px] border-text3 peer-checked:border-primary"></div>
                  <p class="text-text3 peer-checked:text-primary text-paragraph2">Pria</p>
                </label>
                <label class="radio flex flex-row cursor-pointer items-center gap-2" for="wanita">
                  <input class="hidden peer" type="radio" name="jeniskelamin" id="wanita" value="wanita" />
                  <div class="rounded-full w-6 h-6 border-[6px] border-text3 peer-checked:border-primary"></div>
                  <p class="text-text3 peer-checked:text-primary text-paragraph2">Wanita</p>
                </label>
              </div>
            </div>
            <div class="flex flex-col gap-2">
              <p class="text-text1 text-paragraph1">Usia</p>
              <input
                class="w-full h-full outline-none rounded-lg px-[14px] py-[10px] text-text2 bg-secondary text-paragraph2 placeholder:text-text2 placeholder:text-paragraph2"
                type="text" name="usia" id="usia" placeholder="Cth: 18" />
            </div>
          </div>

          <div class="flex flex-row px-[14px] py-[10px] h-10 bg-secondary rounded-lg">
            <input
              class="w-full h-full outline-none text-text2 bg-secondary text-paragraph2 placeholder:text-text2 placeholder:text-paragraph2"
              type="text" name="nik" id="nik" placeholder="NIK" />
          </div>
          <div class="flex flex-row px-[14px] py-[10px] h-10 bg-secondary rounded-lg">
            <input
              class="w-full h-full outline-none text-text2 bg-secondary text-paragraph2 placeholder:text-text2 placeholder:text-paragraph2"
              type="text" name="asal" id="asal" placeholder="Asal" />
          </div>
          <div class="flex flex-col gap-2">
            <p class="text-text1 text-paragraph1">Pilih Role</p>
            <div class="flex flex-row gap-7">
              <label class="radio flex flex-row cursor-pointer items-center gap-2" for="fotografer">
                <input class="hidden peer" type="radio" name="role" id="fotografer" value="fotografer" />
                <div class="rounded-full w-6 h-6 border-[6px] border-text3 peer-checked:border-primary"></div>
                <p class="text-text3 peer-checked:text-primary text-paragraph2">Fotografer</p>
              </label>
              <label class="radio flex flex-row cursor-pointer items-center gap-2" for="videografer">
                <input class="hidden peer" type="radio" name="role" id="videografer" value="videografer" />
                <div class="rounded-full w-6 h-6 border-[6px] border-text3 peer-checked:border-primary"></div>
                <p class="text-text3 peer-checked:text-primary text-paragraph2">Videografer</p>
              </label>
            </div>
            <label class="radio flex flex-row cursor-pointer items-center gap-2" for="fotovideografer">
              <input class="hidden peer" type="radio" name="role" id="fotovideografer"
                value="fotografer dan videografer" />
              <div class="rounded-full w-6 h-6 border-[6px] border-text3 peer-checked:border-primary"></div>
              <p class="text-text3 peer-checked:text-primary text-paragraph2">Foto dan Videografer</p>
            </label>
          </div>
          <div class="flex flex-col gap-1">
            <p class="text-secondary text-paragraph4">*Masukkan link portofolio min 1 sesuai dengan pilihan role anda
            </p>
            <div class="flex flex-row px-[14px] py-[10px] h-10 bg-secondary rounded-lg">
              <input
                class="w-full h-full outline-none text-text2 bg-secondary text-paragraph2 placeholder:text-text2 placeholder:text-paragraph2"
                type="text" name="portofolio" id="portofolio" placeholder="Link Portofolio" />
            </div>
          </div>

          <div class="flex flex-row px-[14px] py-[10px] h-10 bg-secondary rounded-lg">
            <input
              class="w-full h-full outline-none text-text2 bg-secondary text-paragraph2 placeholder:text-text2 placeholder:text-paragraph2"
              type="text" name="password" id="password" placeholder="Password" />
          </div>
          <div class="flex flex-row px-[14px] py-[10px] h-10 bg-secondary rounded-lg">
            <input
              class="w-full h-full outline-none text-text2 bg-secondary text-paragraph2 placeholder:text-text2 placeholder:text-paragraph2"
              type="text" name="konfirmasipw" id="konfirmasipw" placeholder="Konfirmasi Password" />
          </div>
          <button
            class="text-text2 p-[10px] bg-primary rounded-lg transition-default hover:scale-105 hover:shadow-[0px_0px_24px] hover:shadow-primary"
            type="submit" name="signup">Sign Up</button>
        </form>
      </div>
      <img class="h-[30px]" src="./assets/Blitz Logo.png" alt="" />
    </div>
  </div>
</section>
<?php
if(!empty($_GET["notif"])){
  if ($_GET["notif"]== "Nama kosong") {?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Nama harus diisi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=signup')
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
    window.location.replace('index.php?include=signup')
  })
}, 10)
</script>
<?php } else if ($_GET["notif"] == "Email kosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Email harus diisi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=signup')
  })
}, 10)
</script>
<?php } else if ($_GET["notif"] == "No telepon kosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "No telepon harus diisi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=signup')
  })
}, 10)
</script>
<?php } else if ($_GET["notif"] == "Jenis kelamin kosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Jenis kelamin harus diisi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=signup')
  })
}, 10)
</script>
<?php } else if ($_GET["notif"] == "Usia kosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Usia harus diisi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=signup')
  })
}, 10)
</script>
<?php } else if ($_GET["notif"] == "Role kosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Role harus diisi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=signup')
  })
}, 10)
</script>
<?php } else if ($_GET["notif"] == "Portofolio kosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Portofolio harus diisi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=signup')
  })
}, 10)
</script>
<?php } else if ($_GET["notif"] == "Konfirmasi password kosong"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Password harus diisi!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=signup')
  })
}, 10)
</script>
<?php } else if ($_GET["notif"] == "Konfirmasi password tidak sama"){?>
<script>
setTimeout(() => {
  swal.fire({
    icon: "error",
    iconColor: "#EE6457",
    title: "Konfirmasi password harus sama!",
    confirmButtonText: "Siap kak",
    confirmButtonColor: "#034C5F",
  }).then(() => {
    window.location.replace('index.php?include=signup')
  })
}, 10)
</script>
<?php }
}
?>