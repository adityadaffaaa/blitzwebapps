// toggle menu
const nav = document.querySelector("#nav");
const toggleMenu = document.querySelector("#toggle-menu");
const menuDesc = document.querySelectorAll("#menu-desc");
toggleMenu.addEventListener("click", () => {
  nav.classList.toggle("w-[300px]");
  nav.classList.toggle("w-[86px]");
  menuDesc.forEach((e) => {
    e.classList.toggle("opacity-0");
    e.classList.toggle("opacity-100");
  });
});

// toggle data
// const dataMaster = document.querySelector("#data-master");
// const toggleDataMaster = document.querySelector("#toggle-datamaster");
// dataMaster.addEventListener("click", () => {
//   dataMaster.lastElementChild.classList.toggle("rotate-90");
//   toggleDataMaster.classList.toggle("hidden");
//   toggleDataMaster.classList.toggle("flex");
// });
// const dataChat = document.querySelector("#data-chat");
// const toggleDataChat = document.querySelector("#toggle-datachat");
// dataChat.addEventListener("click", () => {
//   dataChat.lastElementChild.classList.toggle("rotate-90");
//   toggleDataChat.classList.toggle("hidden");
//   toggleDataChat.classList.toggle("flex");
// });

// bukti pop up
const bukti = document.querySelector(".bukti");
const buktiPopup = document.querySelector(".bukti-popup-background");

const closeBuktiPopup = document.querySelector(".close-bukti-popup");

bukti.addEventListener("click", () => {
  buktiPopup.classList.add("flex");
  buktiPopup.classList.remove("hidden");
  setTimeout(() => {
    buktiPopup.classList.remove("opacity-0");
    buktiPopup.firstElementChild.classList.remove("translate-y-64");
  }, 100);
});

// bukti close
closeBuktiPopup.addEventListener("click", () => {
  buktiPopup.classList.add("opacity-0");
  buktiPopup.firstElementChild.classList.add("translate-y-64");
  setTimeout(() => {
    buktiPopup.classList.remove("flex");
    buktiPopup.classList.add("hidden");
  }, 300);
});

