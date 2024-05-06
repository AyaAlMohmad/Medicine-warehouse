let quantity = 0;

function changeQuantity(increment) {
  quantity += increment;
  quantity = quantity < 0 ? 0 : quantity;
  document.querySelector(".quantity").textContent = quantity;
}
