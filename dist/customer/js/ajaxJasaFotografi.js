var xhr = new XMLHttpRequest();

xhr.onreadystatechange = () => {
  if (xhr.readyState == 4 && xhr.status == 200) {
    console.log("ajax ready kak");
  }
};
