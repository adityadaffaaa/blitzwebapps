// fungsi ajax
var ajaxConnection = (url) => {
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      grid.innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", url, true);
  xhr.send();
};

var keyword = document.querySelector("#katakunci");
var grid = document.querySelector("#grid");

keyword.addEventListener("keyup", () => {
  ajaxConnection("index.php?include=search-portofolio&keyword=" + keyword.value);
});
