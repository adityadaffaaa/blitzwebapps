// fungsi ajax
var ajaxConnection = (url) => {
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      totalBayar.innerHTML = "IDR 940.000";
    }
  };
  xhr.open("GET", url, true);
  xhr.send();
};

const totalBayar = document.querySelector("#total-bayar");
const tes = document.querySelector("#tahun");

tes.addEventListener("mouseover", () => {
  ajaxConnection("./js/ajax.txt");
});
