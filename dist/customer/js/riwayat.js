// hapus
const hapus = document.querySelectorAll(".hapus");
hapus.forEach((evt) => {
  evt.addEventListener("click", () => {
    swal
      .fire({
        icon: "question",
        title: "Yakin menghapus riwayat?",
        showDenyButton: true,
        confirmButtonText: "Ya",
        confirmButtonColor: "#034C5F",
        denyButtonText: "Tidak",
        denyButtonColor: "#EE6457",
        iconColor: "#ADADAD",
      })
      .then((result) => {
        if (result.isConfirmed) {
          swal.fire({
            icon: "success",
            confirmButtonColor: "#034C5F",
            title: "Riwayat berhasil dihapus",
            iconColor: "#034C5F",
          });
        }
      });
  });
});

// header navbar
window.onscroll = () => {
  const header = document.querySelector("header");
  const fixedHeader = header.offsetTop;
  if (window.pageYOffset > fixedHeader) {
    header.firstElementChild.classList.add("rounded-b-[16px]");
    header.firstElementChild.classList.add("w-[90%]");
    header.firstElementChild.classList.remove("w-full");
  } else {
    header.firstElementChild.classList.remove("rounded-b-[16px]");
    header.firstElementChild.classList.add("w-full");
    header.firstElementChild.classList.remove("w-[90%]");
  }
};

// chat
const chat = document.querySelector(".chat");
chat.lastElementChild.addEventListener("mouseenter", () => {
  chat.lastElementChild.firstElementChild.firstElementChild.classList.remove("translate-x-32");
});
chat.addEventListener("mouseleave", () => {
  chat.lastElementChild.firstElementChild.firstElementChild.classList.add("translate-x-32");
});

// chat toggle
const chatToggle = document.querySelector(".chat-toggle");
chatToggle.addEventListener("click", () => {
  const chatContent = document.querySelector(".chat-content");
  chatContent.classList.toggle("hidden");
});

// filter pop up
const filter = document.querySelector(".filter");
const filterPopup = document.querySelector(".filter-popup-background");
const closePopup = document.querySelector(".close-popup");
filter.addEventListener("click", () => {
  filterPopup.classList.add("flex");
  filterPopup.classList.remove("hidden");
});
// filter close
closePopup.addEventListener("click", () => {
  filterPopup.classList.remove("flex");
  filterPopup.classList.add("hidden");
});
