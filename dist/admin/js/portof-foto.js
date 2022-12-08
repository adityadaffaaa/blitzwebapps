// bukti pop up
const portofFoto = document.querySelector(".portof-foto");
const portofFotoPopup = document.querySelector(".portof-foto-popup-background");

const closeportofFotoPopup = document.querySelector(".close-portof-foto-popup");
portofFoto.addEventListener("click", () => {
  portofFotoPopup.classList.add("flex");
  portofFotoPopup.classList.remove("hidden");
  setTimeout(() => {
    portofFotoPopup.classList.remove("opacity-0");
    portofFotoPopup.firstElementChild.classList.remove("translate-y-64");
  }, 100);
});

// portofFoto close
closeportofFotoPopup.addEventListener("click", () => {
  portofFotoPopup.classList.add("opacity-0");
  portofFotoPopup.firstElementChild.classList.add("translate-y-64");
  setTimeout(() => {
    portofFotoPopup.classList.remove("flex");
    portofFotoPopup.classList.add("hidden");
  }, 300);
});
