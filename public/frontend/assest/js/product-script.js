let quantity = 0;

function changeQuantity(increment) {
  quantity += increment;
  quantity = quantity < 0 ? 0 : quantity;
  document.querySelector(".quantity").textContent = quantity;
}
document.addEventListener("DOMContentLoaded", function () {
  var menuIcon = document.querySelector(".menu-icon");
  var navItems = document.querySelector(".headbar ul");

  menuIcon.addEventListener("click", function () {
    navItems.classList.toggle("active");
  });
});
