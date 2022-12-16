// fungsi ajax
var ajaxConnection = (url) => {
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
    }
  };
  xhr.open("GET", url, true);
  xhr.send();
};
