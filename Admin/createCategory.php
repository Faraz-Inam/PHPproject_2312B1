<?php 
include("header.php");
?>
            <!-- Form Start -->
            <form action="" method="post">
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Categories</h6>
                            
                            <label for="category" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="category" name="add_category"
                                        aria-describedby="emailHelp" required>

                            <button type="submit" name="category_btn" class="btn btn-primary m-2">Add</button>
                            
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <!-- Form End -->

            <?php

if(isset($_POST['category_btn'])){
    $add_category = $_POST['add_category'];

    $insert = "INSERT INTO `categories`(category_name)
    VALUES ('$add_category')";
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
        alert('Record Updated!');
        window.location.href = 'viewCategory.php';
        </script>";

                           
                        }
}

            ?>

           

            <?php 
include("footer.php");
?>          
