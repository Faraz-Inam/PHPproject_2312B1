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

                            <select class="form-select mb-3" aria-label="Default select example">
                                <option selected>Select Category</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                            <select class="form-select mb-3" aria-label="Default select example">
                                <option selected>Select Brand</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            
                            <label for="pn" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="pn"
                                        aria-describedby="emailHelp">

                                        <label for="pp" class="form-label">Product Price</label>
                                    <input type="text" class="form-control" id="pp"
                                        aria-describedby="emailHelp">
                                        <label for="pm" class="form-label">Product Model</label>
                                    <input type="text" class="form-control" id="pm"
                                        aria-describedby="emailHelp">

                                        <label for="ps" class="form-label">Product Specification</label>
                                    <input type="text" class="form-control" id="ps"
                                        aria-describedby="emailHelp">
                                        <label for="pi" class="form-label">Product Image</label>
                                    <input type="file" class="form-control" id="pi"
                                        aria-describedby="emailHelp">

                            <button type="submit" name="add_Brand" class="btn btn-primary m-2">Add</button>
                            
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <!-- Form End -->

            <?php 
include("footer.php");
?>          
