var lastScrollPosition = 0;
$(".scrollup").click(function() {
  if ($(document).scrollTop() > 0) {
    $("body").animate({ scrollTop: 0 }, 1000);
    lastScrollPosition = $(document).scrollTop();
  } else {
    $("body").animate({ scrollTop: lastScrollPosition }, 1000);
  }
});
$(document).scroll(function() {
  if ($(document).scrollTop() > 0) {
    $(".scrollup").fadeIn();
    $(".scrollup").text("up");
  }
});

$(document).ready(function() {
  $(".slider").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    arrows: false
  });
  $(".news_slider").slick({
    arrows: false
  });
});

let hamburger = document.querySelector(".hamburger");
let navList = document.querySelector(".top__nav__list");
let backDrop = document.querySelector(".back_drop");

hamburger.addEventListener("click", function() {
  hamburger.classList.add("is-active");
  navList.classList.add("is-active");
  backDrop.classList.add("is-active");
  document.body.style.overflow = "hidden";
});
backDrop.addEventListener("click", function() {
  hamburger.classList.remove("is-active");
  navList.classList.remove("is-active");
  backDrop.classList.remove("is-active");
  document.body.removeAttribute("style");
});

function zero_first_format(value) {
  if (value < 10) {
    value = "0" + value;
  }
  return value;
}

/* функция получения текущей даты и времени */
function date_time() {
  var current_datetime = new Date();
  var day = zero_first_format(current_datetime.getDate());
  var month = zero_first_format(current_datetime.getMonth() + 1);
  var year = current_datetime.getFullYear();
  // var hours = zero_first_format(current_datetime.getHours());
  // var minutes = zero_first_format(current_datetime.getMinutes());
  // var seconds = zero_first_format(current_datetime.getSeconds());

  return day + "." + month + "." + year;
}

/* выводим текущую дату и время на сайт в блок с id "current_date_time_block" */
document.getElementById("current_date_time_block2").innerHTML = date_time();
