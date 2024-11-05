<?php 
include("header.php");

$select = "SELECT * FROM `brands`";
$row = mysqli_query($connect, $select);
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
                                        <th scope="col">Brand Id</th>
                                        <th scope="col">Brand Name</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($fetch = mysqli_fetch_assoc($row)){
                                ?>
                                   <tr>
                                        <td scope="row"> <?php echo $fetch['brand_id'] ?> </td>
                                        <td> <?php echo $fetch['brand_name']?> </td>
                                        <td> <a href="viewBrand.php?u=<?php echo $fetch['brand_id'] ?>" class="btn btn-warning"> Edit</a> </td>
                                        <td> <a href="viewBrand.php?d=<?php echo $fetch['brand_id'] ?>" onclick = "return confirm('Press a button!')" class="btn btn-danger"> Delete</a> </td>
                                    </tr>
                                    <?php
                                } ?>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Table End -->

            <!-- UPDATE  -->
<?php
if(isset($_GET['u'])){
            $u_id = $_GET['u'];
            $select = "SELECT * FROM `brands` WHERE `brand_id` = '$u_id'";
            $u_row = mysqli_query($connect, $select);
            $fetch = mysqli_fetch_assoc($u_row);
       
?>

<form action="" method="post">
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Brand</h6>
                            
                            <label for="Brand" class="form-label">Brand Name</label>
                                    <input type="text" value="<?php echo $fetch['brand_name']?>" class="form-control" id="Brand" name="update_brand"
                                        aria-describedby="emailHelp">

                            <button type="submit" name="update_btn" class="btn btn-primary m-2">Add</button>
                            
                        </div>
                    </div>
                </div>
            </div>
            </form>


            <?php 
  if(isset($_POST['update_btn'])){
    $b_name = $_POST['update_brand'];
    $updated = "UPDATE `brands` SET `brand_name` = '$b_name' WHERE `brand_id` = '$u_id'";
    $done = mysqli_query($connect, $updated);
    if($done){
        echo
        "<script>
        alert('Record Updated!');
        window.location.href = 'viewBrand.php';
        </script>";
    }

  }
  
}
            ?>



            <!-- DELETE  -->
            <?php
        if(isset($_GET['d'])){
            $d_id = $_GET['d'];

            $deleted = "DELETE FROM `brands` WHERE brand_id = '$d_id'";
            $done = mysqli_query($connect, $deleted);

            if($done){
                echo
                "<script>
                alert('Record Deleted!');
                window.location.href = 'viewBrand.php';
                </script>";
            }
        }

        ?>



            <?php 
include("footer.php");
?>