// bukti pop up
const bukti = document.querySelectorAll(".bukti");
const buktiPopup = document.querySelector(".bukti-popup-background");

const closeBuktiPopup = document.querySelector(".close-bukti-popup");
bukti.forEach((evt) => {
  evt.addEventListener("click", () => {
    buktiPopup.classList.add("flex");
    buktiPopup.classList.remove("hidden");
    setTimeout(() => {
      buktiPopup.classList.remove("opacity-0");
      buktiPopup.firstElementChild.classList.remove("translate-y-64");
    }, 100);
  });
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
