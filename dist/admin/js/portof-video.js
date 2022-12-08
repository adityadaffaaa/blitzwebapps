// bukti pop up
const portofVideo = document.querySelector(".portof-video");
const portofVideoPopup = document.querySelector(".portof-video-popup-background");

const closeportofVideoPopup = document.querySelector(".close-portof-video-popup");
portofVideo.addEventListener("click", () => {
  portofVideoPopup.classList.add("flex");
  portofVideoPopup.classList.remove("hidden");
  setTimeout(() => {
    portofVideoPopup.classList.remove("opacity-0");
    portofVideoPopup.firstElementChild.classList.remove("translate-y-64");
  }, 100);
});

// portofVideo close
closeportofVideoPopup.addEventListener("click", () => {
  portofVideoPopup.classList.add("opacity-0");
  portofVideoPopup.firstElementChild.classList.add("translate-y-64");
  setTimeout(() => {
    portofVideoPopup.classList.remove("flex");
    portofVideoPopup.classList.add("hidden");
  }, 300);
});
