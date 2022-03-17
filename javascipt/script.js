let myBackgroundImages = document.querySelector(".landing");

let imgArray = ["1.jpeg", "4.jpeg", "6.jpeg", "article.jpg"];

setInterval(function () {
  let randomImages = Math.floor(Math.random() * imgArray.length);
  myBackgroundImages.style.backgroundImage = `url(../image/${imgArray[randomImages]})`;
}, 1000);

/*
let myBtn = document.querySelector(".buttom");
myBtn.firstElementChild.onclick = function () {
  myBtn.firstElementChild.setAttribute("href", "login.html");
  myBtn.firstElementChild.setAttribute("target", "_blank");
};
*/
/*
myBtn.lastElementChild.onclick = function () {
  myBtn.lastElementChild.setAttribute("href", "signup.html");
  myBtn.lastElementChild.setAttribute("target", "_blank");
};
*/
let mySpin = document.querySelector(".setting");
mySpin.onclick = function () {
  mySpin.classList.toggle("fa-spin");
  document.querySelector(".setting-box").classList.toggle("open");
};

let myChangeColor = document.querySelectorAll(".colors-list li");
myChangeColor.forEach(function (li) {
  li.addEventListener("click", function (e) {
    document.documentElement.style.setProperty(
      "--main-color",
      e.target.dataset.color
    );
    localStorage.setItem("options_color", e.target.dataset.color);
    e.target.parentElement
      .querySelectorAll(".colors-list li")
      .forEach(function (e) {
        e.classList.remove("activee");
      });
    e.target.classList.add("activee");
  });
});

let mycolors = localStorage.getItem("options_color");
if (mycolors !== null) {
  document.documentElement.style.setProperty("--main-color", mycolors);
  document.querySelectorAll(".colors-list li").forEach(function (e) {
    e.classList.remove("activee");
    if (e.dataset.color === mycolors) {
      e.classList.add("activee");
    }
  });
}

let myNav = document.querySelector(".navbar");
let myUp = document.querySelector(".icon-font");
let mySections = document.querySelector(".one");
let myskillss = document.querySelectorAll(".progress span");

let nums = document.querySelectorAll(".stats .number");
let statsSection = document.querySelector(".container");
let started = false; // Function Started ? No

window.onscroll = function () {
  if (window.scrollY >= 300) {
    myNav.classList.add("changes");
    myUp.classList.add("show");

    if (window.scrollY >= mySections.offsetTop - 300) {
      myskillss.forEach(function (span) {
        span.style.width = span.dataset.width;
      });
    }

    if (window.scrollY >= statsSection.offsetTop - 250) {
      if (!started) {
        nums.forEach((num) => startCount(num));
      }
      started = true;
    }
  } else {
    myNav.classList.remove("changes");
    myUp.classList.remove("show");
  }
};
myUp.onclick = function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};

function startCount(el) {
  let goal = el.dataset.goal;
  let count = setInterval(() => {
    el.textContent++;
    if (el.textContent == goal) {
      clearInterval(count);
    }
  }, 2000 / goal);
}
