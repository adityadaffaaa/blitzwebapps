var getInputKategori = (idKategori) => {
  var totalHarga = document.querySelector("#total-harga");
  var tglMulai = document.querySelector("#tanggal_mulai").value;
  var tglSelesai = document.querySelector("#tanggal_selesai").value;
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      totalHarga.innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", "index.php?include=ajax-jasa-fotografi&idkategori=" + idKategori + "&tgl_mulai=" + tglMulai + "&tgl_selesai=" + tglSelesai, true);
  xhr.send();
};
// "index.php?include=ajax-jasa-fotografi&idkat=" + idkat + "&tgl-mulai=" + tgl_mulai + "&tgl-selesai=" + tgl_selesai
// function getInputTglMulai(tglMulai) {
//   return tglMulai;
// }

// function getInputTglSelesai(tglSelesai) {
//   return tglSelesai;
// }
// var getInputTglMulai = (tglMulai) => {
//   var totalHarga = document.querySelector("#total-harga");
//   var xhr = new XMLHttpRequest();

//   xhr.onreadystatechange = () => {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       totalHarga.innerHTML = tglMulai;
//     }
//   };
//   xhr.open("GET", ".js/ajax.txt", true);
//   xhr.send();
// };

// var getInputTglSelesai = (tglSelesai) => {
//   var totalHarga = document.querySelector("#total-harga");
//   var xhr = new XMLHttpRequest();

//   xhr.onreadystatechange = () => {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       totalHarga.innerHTML = tglSelesai;
//     }
//   };
//   xhr.open("GET", "./js/ajax.txt", true);
//   xhr.send();
// };
// setTimeout(() => {
//   var totalHarga = document.querySelector("#total-harga");
//   var xhr = new XMLHttpRequest();

//   xhr.onreadystatechange = () => {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       totalHarga.innerHTML = idkat;
//     }
//   };
//   var idkat = getInputKategori();
//   var tgl_mulai = getInputTglMulai();
//   var tgl_selesai = getInputTglSelesai();
//   xhr.open("GET", "index.php?include=ajax-jasa-fotografi&idkat=" + idkat + "&tgl-mulai=" + tgl_mulai + "&tgl-selesai=" + tgl_selesai, true);
//   xhr.send();
// }, 10);
