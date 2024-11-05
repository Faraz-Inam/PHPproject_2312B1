<?php 
include("header.php");
?>

 <!-- Form Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Select</h6>
                    
                            <select class="form-select mb-3" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">Mobile</option>
                                <option value="2">Laptop</option>
                                <option value="3">Computer</option>
                            </select>

                            <select class="form-select mb-3" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">Lenovo</option>
                                <option value="2">Huawai</option>
                                <option value="3">Oppo</option>
                            </select>

                            <label for="">Product Name</label>
                            <input type="text" class="form-control">

                            <label for="">Product Price</label>
                            <input type="Number" class="form-control">

                            <label for="">Product Model No</label>
                            <input type="text" class="form-control">

                            <label for="">Product Specification</label>
                            <input type="text" class="form-control">

                            <label for="">Product Image</label>
                            <input type="file" class="form-control">

                            <a class="btn btn-primary m-2" href="viewProduct.php"> Add </a> 

                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->

<?php 
include("footer.php");
?>