<!-- form sign in -->
<section class="flex w-full h-full items-center justify-center">
  <form method="POST" action="index.php?include=konfirmasi-signin-admin"
    class="p-6 bg-background1 rounded-2xl shadow-default flex flex-col gap-6">
    <div class="flex flex-col gap-4 items-center">
      <img class="h-14" src="./assets/Blitz Logo.png" alt="" />
      <h3 class="text-primary text-heading3 font-poppins">Sign In Admin</h3>
    </div>
    <div class="flex flex-row px-[14px] py-[10px] h-10 w-[367px] items-center bg-secondary rounded-lg text-text2">
      <input
        class="w-full h-full outline-none text-text2 bg-secondary text-paragraph2 placeholder:text-text2 placeholder:text-paragraph2"
        type="text" name="username" id="username" placeholder="Username" />
      <span class="fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M20 22h-2v-2a3 3 0 0 0-3-3H9a3 3 0 0 0-3 3v2H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5v2zm-8-9a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
        </svg>
      </span>
    </div>
    <div class="flex flex-row px-[14px] py-[10px] h-10 w-[367px] items-center bg-secondary rounded-lg text-text2">
      <input
        class="w-full h-full outline-none text-text2 bg-secondary text-paragraph2 placeholder:text-text2 placeholder:text-paragraph2"
        type="password" name="password" id="password" placeholder="Password" />
      <span class="fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M6 8V7a6 6 0 1 1 12 0v1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h2zm13 2H5v10h14V10zm-8 5.732a2 2 0 1 1 2 0V18h-2v-2.268zM8 8h8V7a4 4 0 1 0-8 0v1z" />
        </svg>
      </span>
    </div>
    <button
      class="text-text2 text-paragraph1 p-[10px] bg-primary rounded-lg transition-default hover:scale-105 hover:shadow-[0px_0px_24px] hover:shadow-primary"
      type="submit" name="signin" value="signin">Sign In</button>
  </form>
</section>
<!-- form sign in end -->