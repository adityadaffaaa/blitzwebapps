<!-- side bar -->
<nav id="nav"
  class="h-[100vh] w-[300px] hover:w-[300px] group/nav py-8 transition-all ease-in-out duration-500 bg-secondary shadow-default shadow-secondary">
  <div class="ml-[26px] flex flex-col gap-4">
    <img id="toggle-menu" class="w-7 scale-[200%] mb-8 cursor-pointer" src="./assets/Blitz Logo White.png" alt="" />
    <a href="index.php?include=profil"
      class="flex flex-row gap-3 group text-[rgba(255,255,255,0.8)] hover:text-text2 transition-default group">
      <span class="fill-[rgba(255,255,255,0.8)] transition-default group-hover:fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M12 14v2a6 6 0 0 0-6 6H4a8 8 0 0 1 8-8zm0-1c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm2.595 7.812a3.51 3.51 0 0 1 0-1.623l-.992-.573 1-1.732.992.573A3.496 3.496 0 0 1 17 14.645V13.5h2v1.145c.532.158 1.012.44 1.405.812l.992-.573 1 1.732-.992.573a3.51 3.51 0 0 1 0 1.622l.992.573-1 1.732-.992-.573a3.496 3.496 0 0 1-1.405.812V22.5h-2v-1.145a3.496 3.496 0 0 1-1.405-.812l-.992.573-1-1.732.992-.572zM18 19.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
        </svg>
      </span>
      <p id="menu-desc"
        class="text-paragraph1 absolute left-[60px] transition-default opacity-100 group-hover/nav:opacity-100">Profil
      </p>
    </a>
    <a id="data-master"
      class="flex flex-row gap-32 items-center group text-[rgba(255,255,255,0.8)] hover:text-text2 transition-default group cursor-pointer">
      <div class="flex flex-row">
        <span class="fill-[rgba(255,255,255,0.8)] transition-default group-hover:fill-text2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M5 12.5c0 .313.461.858 1.53 1.393C7.914 14.585 9.877 15 12 15c2.123 0 4.086-.415 5.47-1.107 1.069-.535 1.53-1.08 1.53-1.393v-2.171C17.35 11.349 14.827 12 12 12s-5.35-.652-7-1.671V12.5zm14 2.829C17.35 16.349 14.827 17 12 17s-5.35-.652-7-1.671V17.5c0 .313.461.858 1.53 1.393C7.914 19.585 9.877 20 12 20c2.123 0 4.086-.415 5.47-1.107 1.069-.535 1.53-1.08 1.53-1.393v-2.171zM3 17.5v-10C3 5.015 7.03 3 12 3s9 2.015 9 4.5v10c0 2.485-4.03 4.5-9 4.5s-9-2.015-9-4.5zm9-7.5c2.123 0 4.086-.415 5.47-1.107C18.539 8.358 19 7.813 19 7.5c0-.313-.461-.858-1.53-1.393C16.086 5.415 14.123 5 12 5c-2.123 0-4.086.415-5.47 1.107C5.461 6.642 5 7.187 5 7.5c0 .313.461.858 1.53 1.393C7.914 9.585 9.877 10 12 10z" />
          </svg>
        </span>
        <p id="menu-desc"
          class="text-paragraph1 absolute left-[60px] transition-default opacity-100 group-hover/nav:opacity-100">Data
          Master</p>
      </div>
      <span id="menu-desc"
        class="fill-[rgba(255,255,255,0.8)] transition default group-hover:fill-text2 opacity-100 group-hover/nav:opacity-100">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
        </svg>
      </span>
    </a>
    <div id="toggle-datamaster" class="flex-col gap-4 overflow-hidden hidden transition-all">
      <a href="index.php?include=data-customer"
        class="flex flex-row gap-3 group text-[rgba(255,255,255,0.8)] hover:text-text2 transition-default group">
        <span class="fill-[rgba(255,255,255,0.8)] transition-default group-hover:fill-text2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0 2C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-8a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
          </svg>
        </span>
        <p id="menu-desc"
          class="text-paragraph1 absolute left-[60px] transition-default opacity-100 group-hover/nav:opacity-100">Data
          Customer</p>
      </a>
      <a href="index.php?include=data-fotovideografer"
        class="flex flex-row gap-3 group text-[rgba(255,255,255,0.8)] hover:text-text2 transition-default group">
        <span class="fill-[rgba(255,255,255,0.8)] transition-default group-hover:fill-text2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0 2C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-8a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
          </svg>
        </span>
        <p id="menu-desc"
          class="text-paragraph1 absolute left-[60px] transition-default opacity-100 group-hover/nav:opacity-100">Data
          Foto/Videografer</p>
      </a>
    </div>
    <a id="data-chat"
      class="flex flex-row gap-32 items-center group text-[rgba(255,255,255,0.8)] hover:text-text2 transition-default group cursor-pointer">
      <div class="flex flex-row">
        <span class="fill-[rgba(255,255,255,0.8)] transition-default group-hover:fill-text2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M10 14.676v-.062c0-2.508 2.016-4.618 4.753-5.233C14.389 7.079 11.959 5.2 8.9 5.2 5.58 5.2 3 7.413 3 9.98c0 .969.36 1.9 1.04 2.698.032.038.083.094.152.165a3.568 3.568 0 0 1 1.002 2.238 3.612 3.612 0 0 1 2.363-.442c.166.026.302.046.405.06A7.254 7.254 0 0 0 10 14.675zm.457 1.951a9.209 9.209 0 0 1-2.753.055 19.056 19.056 0 0 1-.454-.067 1.612 1.612 0 0 0-1.08.212l-1.904 1.148a.806.806 0 0 1-.49.117.791.791 0 0 1-.729-.851l.15-1.781a1.565 1.565 0 0 0-.439-1.223 5.537 5.537 0 0 1-.241-.262C1.563 12.855 1 11.473 1 9.979 1 6.235 4.537 3.2 8.9 3.2c4.06 0 7.403 2.627 7.85 6.008 3.372.153 6.05 2.515 6.05 5.406 0 1.193-.456 2.296-1.229 3.19-.051.06-.116.13-.195.21a1.24 1.24 0 0 0-.356.976l.121 1.423a.635.635 0 0 1-.59.68.66.66 0 0 1-.397-.094l-1.543-.917a1.322 1.322 0 0 0-.874-.169c-.147.023-.27.04-.368.053-.316.04-.64.062-.969.062-2.694 0-4.998-1.408-5.943-3.401zm6.977 1.31a3.325 3.325 0 0 1 1.676.174 3.25 3.25 0 0 1 .841-1.502c.05-.05.087-.09.106-.112.489-.565.743-1.213.743-1.883 0-1.804-1.903-3.414-4.4-3.414-2.497 0-4.4 1.61-4.4 3.414s1.903 3.414 4.4 3.414c.241 0 .48-.016.714-.046.08-.01.188-.025.32-.046z" />
          </svg>
        </span>
        <p id="menu-desc"
          class="text-paragraph1 absolute left-[60px] transition-default opacity-100 group-hover/nav:opacity-100">Chat
        </p>
      </div>
      <span id="menu-desc"
        class="fill-[rgba(255,255,255,0.8)] transition default group-hover:fill-text2 opacity-100 group-hover/nav:opacity-100">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" />
        </svg>
      </span>
    </a>
    <div id="toggle-datachat" class="flex-col gap-4 overflow-hidden hidden transition-all">
      <a href="index.php?include=chat-customer"
        class="flex flex-row gap-3 group text-[rgba(255,255,255,0.8)] hover:text-text2 transition-default group">
        <span class="fill-[rgba(255,255,255,0.8)] transition-default group-hover:fill-text2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0 2C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-8a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
          </svg>
        </span>
        <p id="menu-desc"
          class="text-paragraph1 absolute left-[60px] transition-default opacity-100 group-hover/nav:opacity-100">Chat
          Customer</p>
      </a>
      <a href="index.php?include=chat-fotovideografer"
        class="flex flex-row gap-3 group text-[rgba(255,255,255,0.8)] hover:text-text2 transition-default group">
        <span class="fill-[rgba(255,255,255,0.8)] transition-default group-hover:fill-text2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
              d="M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0 2C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-8a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
          </svg>
        </span>
        <p id="menu-desc"
          class="text-paragraph1 absolute left-[60px] transition-default opacity-100 group-hover/nav:opacity-100">Chat
          Foto/Videografer</p>
      </a>
    </div>

    <a href="#"
      class="flex flex-row gap-3 group text-[rgba(255,255,255,0.8)] hover:text-text2 transition-default group">
      <span class="fill-[rgba(255,255,255,0.8)] transition-default group-hover:fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zm-1-2V4H5v16h14zM8 7h8v2H8V7zm0 4h8v2H8v-2zm0 4h8v2H8v-2z" />
        </svg>
      </span>
      <p id="menu-desc"
        class="text-paragraph1 absolute left-[60px] transition-default opacity-100 group-hover/nav:opacity-100">
        Pemesanan</p>
    </a>
    <?php
    if($_SESSION["level"]=="superadmin"){
    ?>
    <a href="#"
      class="flex flex-row gap-3 group text-[rgba(255,255,255,0.8)] hover:text-text2 transition-default group">
      <span class="fill-[rgba(255,255,255,0.8)] transition-default group-hover:fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-.997-4L6.76 11.757l1.414-1.414 2.829 2.829 5.656-5.657 1.415 1.414L11.003 16z" />
        </svg>
      </span>
      <p id="menu-desc"
        class="text-paragraph1 absolute left-[60px] transition-default opacity-100 group-hover/nav:opacity-100">
        Konfirmasi</p>
    </a>
    <a href="index.php?include=data-admin"
      class="flex flex-row gap-3 group text-[rgba(255,255,255,0.8)] hover:text-text2 transition-default group">
      <span class="fill-[rgba(255,255,255,0.8)] transition-default group-hover:fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M12 14v2a6 6 0 0 0-6 6H4a8 8 0 0 1 8-8zm0-1c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm9 6h1v5h-8v-5h1v-1a3 3 0 0 1 6 0v1zm-2 0v-1a1 1 0 0 0-2 0v1h2z" />
        </svg>
      </span>
      <p id="menu-desc"
        class="text-paragraph1 absolute left-[60px] transition-default opacity-100 group-hover/nav:opacity-100">Admin
      </p>
    </a>
    <?php
    }
    ?>

    <a href="index.php?include=ubah-password"
      class="flex flex-row gap-3 group text-[rgba(255,255,255,0.8)] hover:text-text2 transition-default group">
      <span class="fill-[rgba(255,255,255,0.8)] transition-default group-hover:fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M10.758 11.828l7.849-7.849 1.414 1.414-1.414 1.415 2.474 2.474-1.414 1.415-2.475-2.475-1.414 1.414 2.121 2.121-1.414 1.415-2.121-2.122-2.192 2.192a5.002 5.002 0 0 1-7.708 6.294 5 5 0 0 1 6.294-7.708zm-.637 6.293A3 3 0 1 0 5.88 13.88a3 3 0 0 0 4.242 4.242z" />
        </svg>
      </span>
      <p id="menu-desc"
        class="text-paragraph1 absolute left-[60px] transition-default opacity-100 group-hover/nav:opacity-100">Ubah
        Password</p>
    </a>
    <a href="index.php?include=logout"
      class="flex flex-row gap-3 group text-[rgba(255,255,255,0.8)] hover:text-text2 transition-default group">
      <span class="fill-[rgba(255,255,255,0.8)] transition-default group-hover:fill-text2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M4 18h2v2h12V4H6v2H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3zm2-7h7v2H6v3l-5-4 5-4v3z" />
        </svg>
      </span>
      <p id="menu-desc"
        class="text-paragraph1 absolute left-[60px] transition-default opacity-100 group-hover/nav:opacity-100">Log Out
      </p>
    </a>
  </div>
</nav>
<!-- side bar end -->