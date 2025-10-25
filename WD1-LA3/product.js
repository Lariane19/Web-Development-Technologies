let cart = [];

function addToCart(item, price) {
  cart.push({ name: item, price: price });
  updateCart();
}

function updateCart() {
  const list = document.getElementById('cart-items');
  const total = document.getElementById('cart-total');
  
  list.innerHTML = '';
  let totalPrice = 0;

  cart.forEach(i => {
    const li = document.createElement(`li`);
    li.textContent = `${i.name} - ₱${i.price}`;
    list.appendChild(li);
    totalPrice += i.price;
  });

  total.textContent = totalPrice;
}