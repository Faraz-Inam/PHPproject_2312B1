<?php 
include("header.php");
include("connection.php");
?>

<!-- DISPLAY CART WORK -->
<br><br><br><br><br><br>

<?php
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {

    // Initialize total price
    $total_price = 0;
    ?>

    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
        
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Your Cart</h6>
                    <table class="table table-hover table-striped table-bordered">
                        <thead class="bg-dark">
                            <tr>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Model</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>

                        <tbody>
                       <?php foreach ($_SESSION['cart'] as $product_id => $quantity) {
                            // Fetch product details from the database
                            $sel = "SELECT * FROM `products` WHERE product_id = '$product_id'";
                            $query = mysqli_query($connect, $sel);
                            $product = mysqli_fetch_assoc($query);
                                        
                            // Calculate total for this product
                            $product_total = $product['product_price'] * $quantity;
                            $total_price += $product_total;
                       ?>           
                           <tr>
                                    <td><?php echo $product['product_name'] ?></td>
                                    <td> <img src="<?php echo '../Admin/product_images/' . $product['product_image'] ?>" alt="" width="100px" class="d-block mx-auto"></td>
                                    <td><?php echo $product['product_model'] ?></td>
                                    <td><?php echo $product['product_price'] ?></td>
                                    <td><?php echo $quantity ?></td>
                                    <td><?php echo $product_total ?></td>
                                  </tr>
                       <?php } ?>

                            <tr style='background-color: #f9f9f9; font-weight: bold;'>
                                    <td colspan='4' style='text-align: right;'>Total Price:</td>
                                    <td><?php echo $total_price ?></td>
                            </tr>

                        </tbody>
                    </table>

    <br>
    <a href='checkout.php' class='btn btn-success'>Proceed to Checkout</a>
<?php 
} else {
    echo "<h1>Your cart is empty.</h1>";
}
?>
                </div>
            </div>

        </div>
    </div>
    <!-- Table End -->






<!-- REMOVE CART WORK -->
<?php
// include("connection.php");

// // Remove from cart logic
// if (isset($_POST['remove_from_cart'])) {
//     $product_id = $_POST['product_id'];
    
//     // Check if the product exists in the session cart
//     if (isset($_SESSION['cart'][$product_id])) {
//         unset($_SESSION['cart'][$product_id]);  // Remove the product from the cart
//         echo "<script>alert('Product removed from cart'); window.location.href='cart.php';</script>";
//     }
// }
?>

<?php 
include("footer.php");
 ?>


