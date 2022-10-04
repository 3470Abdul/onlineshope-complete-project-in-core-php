<?php
require 'header.php';
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

                                        <a href="addcategory.php" class="mb-4 btn btn-success"><i class="mdi mdi-plus me-2"></i> Add Category</a>

                                        <table id="datatable-buttons" class="table text-center align-middle table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Category Name</th>
                                                <th>Category Image</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php

                            include '../conn.php';

                            $sql = "SELECT * FROM `cateogory`";
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_array($result))
                            {
                        ?>
                        <tr>
                            <td><?php  echo $row[1];  ?></td>
                            <td> <img src="<?php  echo $row[2];  ?>" alt="" width="120" height="80" /></td>
                            <td><a href="update.php?id=<?php  echo $row[0];  ?>"><i class="fa-solid fa-pen-to-square text-info"></i></a> | <a href="delete.php?id=<?php  echo $row[0];  ?>"><i class="fa-solid fa-trash text-danger"></i> </a></td>
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