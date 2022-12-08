// tambah foto pop up
const tambahFoto = document.querySelector(".tambah-foto");
const tambahFotoPopup = document.querySelector(".tambah-foto-popup-background");

const closetambahFotoPopup = document.querySelector(".close-foto-tambah-popup");

tambahFoto.addEventListener("click", () => {
  console.log("click");
  tambahFotoPopup.classList.add("flex");
  tambahFotoPopup.classList.remove("hidden");
  setTimeout(() => {
    tambahFotoPopup.classList.remove("opacity-0");
    tambahFotoPopup.firstElementChild.classList.remove("translate-y-64");
  }, 100);
});

// tambah close
closetambahFotoPopup.addEventListener("click", () => {
  tambahFotoPopup.classList.add("opacity-0");
  tambahFotoPopup.firstElementChild.classList.add("translate-y-64");
  setTimeout(() => {
    tambahFotoPopup.classList.remove("flex");
    tambahFotoPopup.classList.add("hidden");
  }, 300);
});
