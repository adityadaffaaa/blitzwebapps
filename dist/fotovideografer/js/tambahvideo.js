// tambah video pop up
const tambahvideo = document.querySelector(".tambah-video");
const tambahvideoPopup = document.querySelector(".tambah-video-popup-background");

const closetambahvideoPopup = document.querySelector(".close-video-tambah-popup");

tambahvideo.addEventListener("click", () => {
  console.log("click");
  tambahvideoPopup.classList.add("flex");
  tambahvideoPopup.classList.remove("hidden");
  setTimeout(() => {
    tambahvideoPopup.classList.remove("opacity-0");
    tambahvideoPopup.firstElementChild.classList.remove("translate-y-64");
  }, 100);
});

// tambah close
closetambahvideoPopup.addEventListener("click", () => {
  tambahvideoPopup.classList.add("opacity-0");
  tambahvideoPopup.firstElementChild.classList.add("translate-y-64");
  setTimeout(() => {
    tambahvideoPopup.classList.remove("flex");
    tambahvideoPopup.classList.add("hidden");
  }, 300);
});
