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
const chatContent = document.querySelector(".chat-content");
chatToggle.addEventListener("click", () => {
  chatContent.classList.toggle("hidden");
  chatContent.classList.toggle("block");
  setTimeout(() => {
    chatContent.classList.toggle("translate-x-64");
    chatContent.classList.toggle("opacity-0");
  }, 100);
});
