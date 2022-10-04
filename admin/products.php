<?php

include 'header.php';

?>

<?php
    if (isset($_SESSION['SuccessMessage'])) {
    ?>
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['SuccessMessage'];
                        unset($_SESSION['SuccessMessage']);
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>


    <?php
    if (isset($_SESSION['ErrorMessage'])) {
    ?>
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-6">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['ErrorMessage'];
                        unset($_SESSION['ErrorMessage']);
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>


<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <a href="addproduct.php" class="mb-4 btn btn-success"><i class="mdi mdi-plus me-2"></i> Add Product</a>

                                        <table id="datatable-buttons" class="table text-center align-middle table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
                                                <th>Product Description</th>
                                                <th>Product Image</th>
                                                <th>Category Name</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php

                            include '../conn.php';

                            $sql = "SELECT * FROM `products` ORDER BY `pro_id` ASC";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_array($result))
                            {
                        ?>
                        <tr>
                            <td><?php  echo $row[1];  ?></td>
                            <td><?php  echo $row[2];  ?></td>
                            <td><?php  echo $row[3];  ?></td>
                            <td> <img src="<?php  echo $row[4];  ?>" alt="" width="120" height="80" /></td>
                            <td><?php  $catId = $row[5];
                            
                                $sql1 = "SELECT * FROM `cateogory` WHERE `cat_id` = '$catId '";
                                $query1 = mysqli_query($con, $sql1);

                                $row1 = mysqli_fetch_array($query1);
                                $catName = $row1[1];
                                echo $catName;
                            
                            
                            ?></td>
                            <td><a href="updateProduct.php?id=<?php  echo $row[0];  ?>"><i class="fa-solid fa-pen-to-square text-info"></i></a> | <a href="deleteProduct.php?id=<?php  echo $row[0];  ?>"><i class="fa-solid fa-trash text-danger"></i> </a></td>
                        </tr>
                        <?php
                            }
                        ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


<?php

include 'footer.php';

?>