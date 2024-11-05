<?php 
include("header.php");
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
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td> <a href="" class="btn btn-warning">Edit</a> </td>
                                        <td> <a href="" class="btn btn-danger">Delete</a> </td>
                                    </tr>
                                   
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