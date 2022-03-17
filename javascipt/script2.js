let myBackgroundImages = document.querySelector(".test");

let imgArray = ["1.jpeg", "4.jpeg", "6.jpeg", "article.jpg"];

setInterval(function () {
  let randomImages = Math.floor(Math.random() * imgArray.length);
  myBackgroundImages.style.backgroundImage = `url(../image/${imgArray[randomImages]})`;
}, 1000);

let myHe = document.querySelector(".login");
myHe.lastElementChild.onclick = function () {
  myHe.lastElementChild.setAttribute("href", "course.html");
  myHe.lastElementChild.setAttribute("target", "_blank");
};
console.log(myHe.lastElementChild);


