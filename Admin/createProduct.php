<?php 
include("header.php");
$select1 = "SELECT * FROM `categories`";
$query1 = mysqli_query($connect, $select1);

$select2 = "SELECT * FROM `brands`";
$query2 = mysqli_query($connect, $select2);
?>
            <!-- Form Start -->
            <form action="" method="post" enctype="multipart/form-data">
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Brand</h6>

                            <select name="c_id" class="form-select mb-3" aria-label="Default select example">
                                <option selected>Select Category</option>
                                <?php
                                while($fetch = mysqli_fetch_assoc($query1)){ ?>
                 
                                <option value=" <?php echo $fetch['category_id'] ?>"> <?php echo $fetch['category_name'] ?> </option>

                              <?php  }?>
                               
                            </select>

                            <select name="b_id" class="form-select mb-3" aria-label="Default select example">
                                <option selected>Select Brand</option>

                                <?php
                                while($fetch = mysqli_fetch_assoc($query2)){ ?>
                 
                                <option value=" <?php echo $fetch['brand_id'] ?> "> <?php echo $fetch['brand_name'] ?> </option>

                              <?php  }?>
                               
                            </select>
                            
                            <label for="pn" class="form-label">Product Name</label>
                                    <input type="text" name="p_name" class="form-control" id="pn"
                                        aria-describedby="emailHelp">

                                        <label for="pp" class="form-label">Product Price</label>
                                    <input type="text" name="p_price" class="form-control" id="pp"
                                        aria-describedby="emailHelp">

                                        <label for="pm" class="form-label">Product Model</label>
                                    <input type="text" name="p_model" class="form-control" id="pm"
                                        aria-describedby="emailHelp">

                                        <label for="ps" class="form-label">Product Specification</label>
                                    <input type="text" name="p_spec" class="form-control" id="ps"
                                        aria-describedby="emailHelp">

                                        <label for="pi" class="form-label">Product Image</label>
                                    <input type="file" name="p_image" class="form-control" id="pi"
                                        aria-describedby="emailHelp">

                            <button type="submit" name="add_product" class="btn btn-primary m-2">Add</button>
                            
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <!-- Form End -->
<?php
if(isset($_POST['add_product'])){
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_model = $_POST['p_model'];
    $p_spec = $_POST['p_spec'];
    $c_id = $_POST['c_id'];
    $b_id = $_POST['b_id'];

    $p_image = $_FILES['p_image'];
    $img_name = $p_image['name'];
    $img_tmpname = $p_image['tmp_name'];
    $img_size = $p_image['size'];
    $img_type = $p_image['type'];

    $directory = 'product_images/';
    $path = $directory . $img_name;

    move_uploaded_file($img_tmpname, $path);

    $insert = "INSERT INTO `products`(`product_name`, `product_price`, `product_model`, `product_specification`, `product_image`, `category_id`, `brand_id`) 
    VALUES ('$p_name','$p_price','$p_model','$p_spec','$img_name','$c_id','$b_id')";
    $done = mysqli_query($connect, $insert);

    if($done){
        echo
        "<script>
        alert('Product Inserted!');
        window.location.href = 'viewProduct.php';
        </script>";
    }

}



?>
            <?php 
include("footer.php");
?>          
