var getInputKategoriVideografi = (idKategori) => {
  var totalHarga = document.querySelector("#total-harga");
  var tglMulai = document.querySelector("#tanggal_mulai").value;
  var tglSelesai = document.querySelector("#tanggal_selesai").value;
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      totalHarga.innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", "index.php?include=ajax-jasa-videografer&idkategori=" + idKategori + "&tgl_mulai=" + tglMulai + "&tgl_selesai=" + tglSelesai, true);
  xhr.send();
};
