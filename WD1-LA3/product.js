//let's create an empty array that we store the items that we added to our cart.
let cart = []; 

//adds a selected product to ur shopping cart.
function addToCart(item, price) {
  cart.push({ name: item, price: price });//push the product into the cart array.
  updateCart();//let's update the cart that we display after adding an item.
}

//let update the cart that we display and calculates the total price of item.
function updateCart() {
  //we need to get the references to the HTML element where cart information will appear.
  const list = document.getElementById('cart-items');
  const total = document.getElementById('cart-total');
  
  //let's clear the previous list of items before dispalying again an another items.
  list.innerHTML = '';
  //start the running total which is zero.
  let totalPrice = 0;

  //loop through all items in the cart.
  cart.forEach(i => {
    const li = document.createElement(`li`);//create a new list of element for each item.
    li.textContent = `${i.name} - ₱${i.price}`;//display the item which is name and price.
    list.appendChild(li);//list to the cart of item.
    totalPrice += i.price;//adds items price to the total.
  });

  total.textContent = totalPrice;//update the total price text in to the cart.
}