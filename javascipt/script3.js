let myBackgroundImages = document.querySelector(".sign-up");

let imgArray = ["1.jpeg", "4.jpeg", "6.jpeg", "article.jpg"];

setInterval(function () {
  let randomImages = Math.floor(Math.random() * imgArray.length);
  myBackgroundImages.style.backgroundImage = `url(../image/${imgArray[randomImages]})`;
}, 1000);

// Select Box
let selectDay = document.getElementById("day");
let selectMonth = document.getElementById("month");
let selectYears = document.getElementById("years");

const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

//Months are always the same
(function populateMonths() {
  for (let i = 0; i < months.length; i++) {
    const option = document.createElement("option");
    option.textContent = months[i];
    selectMonth.appendChild(option);
  }
  selectMonth.value = "January";
})();

let previousDay;

function populateDays(month) {
  //Delete all of the children of the day dropdown
  //if they do exist
  while (selectDay.firstChild) {
    selectDay.removeChild(selectDay.firstChild);
  }
  //Holds the number of days in the month
  let dayNum;
  //Get the current year
  let year = selectYears.value;

  if (
    month === "January" ||
    month === "March" ||
    month === "May" ||
    month === "July" ||
    month === "August" ||
    month === "October" ||
    month === "December"
  ) {
    dayNum = 31;
  } else if (
    month === "April" ||
    month === "June" ||
    month === "September" ||
    month === "November"
  ) {
    dayNum = 30;
  } else {
    //Check for a leap year
    if (new Date(year, 1, 29).getMonth() === 1) {
      dayNum = 29;
    } else {
      dayNum = 28;
    }
  }
  //Insert the correct days into the day <select>
  for (let i = 1; i <= dayNum; i++) {
    const option = document.createElement("option");
    option.textContent = i;
    selectDay.appendChild(option);
  }
  if (previousDay) {
    selectDay.value = previousDay;
    if (selectDay.value === "") {
      selectDay.value = previousDay - 1;
    }
    if (selectDay.value === "") {
      selectDay.value = previousDay - 2;
    }
    if (selectDay.value === "") {
      selectDay.value = previousDay - 3;
    }
  }
}

function populateYears() {
  //Get the current year as a number
  let year = new Date().getFullYear();
  //Make the previous 100 years be an option
  for (let i = 0; i < 101; i++) {
    const option = document.createElement("option");
    option.textContent = year - i;
    selectYears.appendChild(option);
  }
}

populateDays(selectMonth.value);
populateYears();

selectYears.onchange = function () {
  populateDays(selectMonth.value);
};
selectMonth.onchange = function () {
  populateDays(selectMonth.value);
};
selectDay.onchange = function () {
  previousDay = selectDay.value;
};

