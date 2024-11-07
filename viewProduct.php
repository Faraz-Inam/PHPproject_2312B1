<?php 
include("header.php");

$select = "SELECT `product_id`, `product_name`, `product_price`, `product_model`, `product_specification`, `product_image`, `category_name`, `brand_name`
FROM `products`
INNER JOIN `categories`
ON `categories`.`category_id` = `products`.`category_id`
INNER JOIN `brands`
ON `brands`.`brand_id` = `products`.`brand_id`";

$query = mysqli_query($connect, $select);
?>


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Brands List</h6>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Product Id</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product Price</th>
                                        <th scope="col">Product Model</th>
                                        <th scope="col">Product Specification</th>
                                        <th scope="col">Product Image</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Brand Name</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    while($fetch = mysqli_fetch_assoc($query)){ ?>
    
                                    
                                    <tr>
                                        <td scope="row"> <?php echo $fetch['product_id'] ?> </td>
                                        <td> <?php echo $fetch['product_name'] ?> </td>
                                        <td> <?php echo $fetch['product_price'] ?> </td>
                                        <td> <?php echo $fetch['product_model'] ?> </td>
                                        <td> <?php echo $fetch['product_specification'] ?> </td>
                                        <td> <img src="product_images/<?php echo $fetch['product_image'] ?> " alt="" width="100px"></td>
                                        <td> <?php echo $fetch['category_name'] ?> </td>
                                        <td> <?php echo $fetch['brand_name'] ?> </td>
                                        <td> <a href="" class="btn btn-warning">Edit</a> </td>
                                        <td> <a href="" class="btn btn-danger">Delete</a> </td>
                                    </tr>
                              <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Table End -->

            <?php 
include("footer.php");
?>