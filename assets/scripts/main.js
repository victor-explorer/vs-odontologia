const menuComponent = document.querySelector("#mobileMenu");
const bodyElement = document.body;

function openMobileMenu() {
  bodyElement.classList.toggle('menuIsOpen');
  menuComponent.classList.toggle('menuIsOpen');
}

function closeMobileMenu() {
  menuComponent.classList.toggle('menuIsOpen');
  bodyElement.classList.toggle('menuIsOpen');
}