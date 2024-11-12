<?php 
include("header.php");
?>
            <!-- Form Start -->
            <form action="" method="post">
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Brand</h6>
                            
                            <label for="Brand" class="form-label">Brand Name</label>
                                    <input type="text" class="form-control" id="Brand" name="add_brand"
                                        aria-describedby="emailHelp">

                            <button type="submit" name="brand_btn" class="btn btn-primary m-2">Add</button>
                            
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <!-- Form End -->

            <?php

if(isset($_POST['brand_btn'])){
    $add_brand = $_POST['add_brand'];

    $insert = "INSERT INTO `brands`(brand_name)
    VALUES ('$add_brand')";
    $done = mysqli_query($connect, $insert);
if($done){
    ?>
                            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Record Inserted
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div> -->
                            <?php
                            echo
        "<script>
        alert('Record Insert!');
        window.location.href = 'viewBrand.php';
        </script>";

                           
                        }
}

            ?>

            <?php 
include("footer.php");
?>          
