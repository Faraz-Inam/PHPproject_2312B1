<?php
include("connection.php");
include("header.php");

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<h1 class='text-center mt-5'>Your cart is empty. <a href='products.php'>Shop Now</a></h1>";
    include("footer.php");
    exit;
}

$total_price = 0;
?>
<br><br><br>
<!-- Checkout Form -->
<div class="container mt-5">
    <h2 class="text-center">Checkout</h2>
    <form action="process_checkout.php" method="POST">
        <!-- User Details -->
        <div class="row mb-4">
            <div class="col-md-6">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="address" class="form-label">Shipping Address</label>
                <textarea id="address" name="address" class="form-control" rows="3" required></textarea>
            </div>
        </div>

        <!-- Cart Summary -->
        <h4 class="mb-3">Order Summary</h4>
        <table class="table table-hover table-striped table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th>Product Name</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $product_id => $quantity) {
                    // Fetch product details
                    $sel = "SELECT * FROM `products` WHERE product_id = '$product_id'";
                    $query = mysqli_query($connect, $sel);
                    $product = mysqli_fetch_assoc($query);

                    // Calculate product total
                    $product_total = $product['product_price'] * $quantity;
                    $total_price += $product_total;
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($product['product_name']); ?></td>
                        <td><?php echo htmlspecialchars($product['product_model']); ?></td>
                        <td>$<?php echo number_format($product['product_price'], 2); ?></td>
                        <td><?php echo htmlspecialchars($quantity); ?></td>
                        <td>$<?php echo number_format($product_total, 2); ?></td>
                    </tr>
                <?php } ?>
                <tr class="bg-light font-weight-bold">
                    <td colspan="4" class="text-end">Total Price:</td>
                    <td>$<?php echo number_format($total_price, 2); ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Checkout Button -->
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary px-5">Place Order</button>
        </div>
    </form>
</div>

<?php include("footer.php"); ?>
