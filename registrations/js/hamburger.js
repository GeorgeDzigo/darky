var hamimg = document.getElementById("mobile-res-hamburger-bar");
var navUl = document.getElementById("nav-ul");
var closeBTN = document.getElementById("mobile-res-close-btn");
hamimg.addEventListener('click', function () { 
      navUl.style.display = "block";
      closeBTN.style.display = "block";
      hamimg.style.display = "none";
})
closeBTN.addEventListener('click', function () {
      navUl.style.display = "none";
      closeBTN.style.display = "none";
      hamimg.style.display = "block";
})

