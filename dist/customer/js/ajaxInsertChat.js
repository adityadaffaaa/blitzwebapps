var InsertChat = () => {
  var chat = document.querySelector("#chat");
  var isiChat = document.querySelector("#isi-chat");
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      isiChat.innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", "index.php?include=insert-chat&chat=" + chat.value, true);
  xhr.send();
};
