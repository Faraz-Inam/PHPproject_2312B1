<?php 
include("connection.php");
include("header.php");

$sel = "SELECT * FROM products WHERE category_id = 11";
$query = mysqli_query($connect,$sel);
?>


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Mobiles</h1>
                        <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Vegetable</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Fruits </a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Fresh</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                    <?php while($fetch = mysqli_fetch_assoc($query)){ ?>
    

    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="product-item">
            <div class="position-relative bg-light overflow-hidden">
                <img height="200px" width="100%" src="../Admin/product_images/<?php echo $fetch['product_image'] ?> " alt="error">
                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
            </div>
            <div class="text-center p-4">
                <a class="d-block h5 mb-2" href=""> <?php echo $fetch['product_name'] ?> </a>
                <span class="text-primary me-1"> <?php echo $fetch['product_price'] ?> </span>
                <span class="text-body text-decoration-line-through">$29.00</span>
            </div>
            <div class="d-flex border-top">
                <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href="cardDetails.php?id=<?php echo $fetch['product_id'] ?>"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                </small>
                <small class="w-50 text-center py-2">
                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                </small>
            </div>
        </div>
    </div>

    <?php } ?>
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Product End -->


    <?php 
include("footer.php");
?>

   