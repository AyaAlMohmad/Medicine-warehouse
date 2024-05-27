function changeQuantity(button, increment) {
  var quantitySpan = button
    .closest(".quantity-control")
    .querySelector(".quantity");
  var currentQuantity = parseInt(quantitySpan.textContent);
  var newQuantity = currentQuantity + increment;
  newQuantity = newQuantity < 0 ? 0 : newQuantity;
  quantitySpan.textContent = newQuantity;
}

document.addEventListener("DOMContentLoaded", function () {
  var menuIcon = document.querySelector(".menu-icon");
  var navItems = document.querySelector(".headbar ul");

  menuIcon.addEventListener("click", function () {
    navItems.classList.toggle("active");
  });
});
// document.querySelectorAll(".dropdown").forEach(function (dropdownToggle) {
//   dropdownToggle.addEventListener("click", function () {
//     var dropdownContent = this.nextElementSibling;
//     // Toggle dropdown content's display on click
//     if (dropdownContent.style.display === "block") {
//       dropdownContent.style.display = "none";
//     } else {
//       dropdownContent.style.display = "block";
//     }
//   });
// });
