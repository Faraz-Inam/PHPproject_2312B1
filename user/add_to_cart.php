<?php
session_start();
// Check if the form is submitted
if (isset($_POST['add_to_cart'])) {
    // Get product ID and quantity from the form
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Check if the cart session already exists
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array(); // Initialize an empty cart
    }

    // Check if the product is already in the cart
    if (isset($_SESSION['cart'][$product_id])) {
        // If product is already in the cart, update the quantity
        $_SESSION['cart'][$product_id] += $quantity;
    } else {
        // If product is not in the cart, add it with the specified quantity
        $_SESSION['cart'][$product_id] = $quantity;
    }

    // Optionally, display a message or redirect to another page
    echo "<script>alert('Product added to cart!'); window.location.href='index.php';</script>";
}
?>
