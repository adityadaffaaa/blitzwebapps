// detail pop up
const detail = document.querySelectorAll(".detail");
const detailPopup = document.querySelector(".detail-popup-background");

const closedetailPopup = document.querySelector(".close-detail-popup");

detail.forEach((evt) => {
  evt.addEventListener("click", () => {
    console.log("click");
    detailPopup.classList.add("flex");
    detailPopup.classList.remove("hidden");
    setTimeout(() => {
      detailPopup.classList.remove("opacity-0");
      detailPopup.firstElementChild.classList.remove("translate-y-64");
    }, 100);
  });
});

// detail close
closedetailPopup.addEventListener("click", () => {
  detailPopup.classList.add("opacity-0");
  detailPopup.firstElementChild.classList.add("translate-y-64");
  setTimeout(() => {
    detailPopup.classList.remove("flex");
    detailPopup.classList.add("hidden");
  }, 300);
});

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
