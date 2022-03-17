let slides = document.querySelectorAll(".slide");
for (let slide of slides) {
  slide.addEventListener("click", function () {
    clearActiveClasses();
    slide.classList.add("active");
  });
}
function clearActiveClasses() {
  slides.forEach(function (slide) {
    slide.classList.remove("active");
  });
}

let access = document.querySelectorAll(".container a");
access.forEach(function (a) {
  a.setAttribute("href", a.dataset.link);
  a.setAttribute("target", "_blank");
});
