const btnToggle = document.querySelector(".wrapper header button");
const showOrHideNavbar = document.querySelector(".wrapper section");

btnToggle.addEventListener("click", function () {
  showOrHideNavbar.classList.toggle("navbar__custom");
  btnToggle.classList.toggle("side-panel");
});
