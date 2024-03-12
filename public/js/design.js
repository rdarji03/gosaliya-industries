document.addEventListener("DOMContentLoaded", function () {
    let bar = document.querySelector(".progressbar-1");
    let bar2 = document.querySelector(".progressbar-2");
    let bar3 = document.querySelector(".progressbar-3");
    bar.classList.remove("width-0");
    bar.classList.add("w-full");
    bar2.classList.remove("width-0");
    bar2.classList.add("width-80");
    bar3.classList.remove("width-0");
    bar3.classList.add("width-70");
  });
  