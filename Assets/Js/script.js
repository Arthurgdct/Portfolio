const openbtn = document.getElementById("burger");
const closebtn = document.getElementById("xmark");

window.onscroll = function () { scrollFunction() };
openbtn.addEventListener("click", opennav);
closebtn.addEventListener("click", closenav);

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "-40%";
  } else {
    document.getElementById("navbar").style.top = "-50%";
  }
}
function opennav() {
  document.getElementById("navbar").style.top = "0%";
}
function closenav() {
  document.getElementById("navbar").style.top = "-40%";
}
