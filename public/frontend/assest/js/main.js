function changeQuantity(button, increment) {
  var quantitySpan = button
    .closest(".quantity-control")
    .querySelector(".quantity");
  var currentQuantity = parseInt(quantitySpan.textContent);
  var newQuantity = currentQuantity + increment;
  newQuantity = newQuantity < 0 ? 0 : newQuantity;
  quantitySpan.textContent = newQuantity;
}
