 function classToggle() {
  var navs = document.querySelector('.menug')
  var nap = document.querySelector('.collap')
  var nac = document.querySelector('.collap')
   if (navs.style.display === "flex") {
    navs.style.display = "none";
  } else{
    navs.style.display = "flex";
  }
}

$('.carousel').carousel({
  interval: 2000
})