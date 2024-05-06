// Array to store products in the cart
let cart = [];

// Function to add a product to the cart
function addToCart(productName, price, quantity) {
    let product = {
        name: productName,
        price: price,
        quantity: quantity
    };
    cart.push(product);
    console.log(`${quantity} ${productName}(s) added to cart`);
}

// Function to calculate the total price of items in the cart
function calculateTotalPrice() {
    let totalPrice = 0;
    cart.forEach(item => {
        totalPrice += item.price * item.quantity;
    });
    return totalPrice;
}

// Function to display the items in the cart, quantity, price, and total price
function displayCart() {
    console.log("Cart Items:");
    cart.forEach(item => {
        console.log(`${item.quantity} x ${item.name} - $${item.price} each`);
    });
    console.log(`Total Price: $${calculateTotalPrice()}`);
}

// Function to checkout and process the payment
function checkout() {
    let totalPrice = calculateTotalPrice();
    console.log(`Total Price: $${totalPrice}`);
    // Add payment processing logic here
    console.log("Payment processed successfully. Thank you for your purchase!");
    cart = []; // Clear the cart after checkout
}

// Example usage
addToCart("Product 1", 20, 2);
addToCart("Product 2", 30, 1);
displayCart();
checkout();