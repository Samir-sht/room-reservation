const header = document.querySelector("header");

window.addEventListener("scroll", function () {
  if (this.window.scrollY > 300) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
});
