setInterval(() => {
  var isiChat = document.querySelector("#isi-chat");
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      isiChat.innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", "index.php?include=chat-masuk&chat=" + chat.value, true);
  xhr.send();
}, 10);
