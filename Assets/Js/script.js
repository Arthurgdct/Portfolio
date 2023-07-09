const openbtn = document.getElementById("burger");
const closebtn = document.getElementById("xmark");
if (window.screen.width >= 900) { }
window.onscroll = function () { scrollFunction() };
openbtn.addEventListener("click", opennav);
closebtn.addEventListener("click", closenav);

function scrollFunction() {
  if (window.screen.width <= 900) {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("navbar").style.top = "-15rem";
    } else {
      document.getElementById("navbar").style.top = "-20rem";
    }
  }else if (window.screen.width >= 900) {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("navbar").style.top = "0rem";
    } else {
      document.getElementById("navbar").style.top = "-5rem";
    }
  }
}
function opennav() {
  document.getElementById("navbar").style.top = "0%";
}
function closenav() {
  document.getElementById("navbar").style.top = "-17rem";
}
