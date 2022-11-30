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

// filter pop up
const filter = document.querySelector(".filter");
const filterPopup = document.querySelector(".filter-popup-background");

const closePopup = document.querySelector(".close-popup");
filter.addEventListener("click", () => {
  filterPopup.classList.add("flex");
  filterPopup.classList.remove("hidden");
  setTimeout(() => {
    filterPopup.classList.remove("opacity-0");
    filterPopup.firstElementChild.classList.remove("translate-y-64");
  }, 100);
});
// filter close
closePopup.addEventListener("click", () => {
  filterPopup.classList.add("opacity-0");
  filterPopup.firstElementChild.classList.add("translate-y-64");
  setTimeout(() => {
    filterPopup.classList.remove("flex");
    filterPopup.classList.add("hidden");
  }, 300);
});

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

let table = new DataTable("table_riwayat", {
  // options
});
