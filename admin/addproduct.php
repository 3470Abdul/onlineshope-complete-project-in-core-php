<?php
include_once 'header.php';
include '../conn.php';

if (isset($_POST['submit'])) {
    $cat_id = $_POST['cat_id'];
    $pro_name = $_POST['proName'];
    $pro_price = $_POST['proPrice'];
    $pro_desc = $_POST['proDesc'];
    $pro_image_name = $_FILES['proImage']['name'];
    $pro_image_temp_name = $_FILES['proImage']['tmp_name'];
    $pro_image_type = $_FILES['proImage']['type'];
    $pro_image_size = $_FILES['proImage']['size'];
    $folder = "proimages/";

    if (strtolower($pro_image_type) == "image/jpg" || strtolower($pro_image_type) == "image/jpeg" || strtolower($pro_image_type) == "image/png") {
        if ($pro_image_size <= 1000000) {
            $folder = $folder . $pro_image_name;
            $sql = "INSERT INTO `products` (`pro_name`, `pro_price`, `pro_desc`, `pro_image`, `cat_id`) VALUES ('$pro_name', '$pro_price','$pro_desc', '$folder', '$cat_id')";
            $run = mysqli_query($con, $sql);
            if ($run) {
                move_uploaded_file($pro_image_temp_name, $folder);
                $_SESSION['SuccessMessage'] = "Data Inserted Successfully";
                echo "<script>window.location.href='products.php'</script>";
            } else {
                $_SESSION["ErrorMessage"] = "Data Not Inserted";
                echo "<script>window.location.href='products.php'</script>";
            }
        } else {
            $_SESSION["ErrorMessage"] = "Image Size should less than 1MB";
            echo "<script>window.location.href='products.php'</script>";
        }
    } else {
        $_SESSION["ErrorMessage"] = "Format Not Supported";
        echo "<script>window.location.href='products.php'</script>";
    }
}
?>



<div class="row justify-content-center pb-5">
    <div class="col-12 card shadow">
        <h1 class="text-primary text-center text-uppercase my-3">Add product</h1>
        <form action="addproduct.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="formFile" class="form-label">Product Name</label>
                <input type="text" name="proName" class="form-control" placeholder="Enter Product Name" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Product Price</label>
                <input type="number" name="proPrice" class="form-control" placeholder="Enter Product Price" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Product Description</label>
                <input type="text" name="proDesc" class="form-control" placeholder="Enter Product Descrption" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Product Image</label>
                <input class="form-control" name="proImage" type="file" required>
            </div>
            <div class="mb-3">
            <label for="formFile" class="form-label">Product Category</label>
                <select class="form-select" name="cat_id" aria-label="Default select example">
                    <option selected>Select Product Category</option>
                    <?php

                        $sql = "SELECT * FROM `cateogory`";
                        $query = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($query))
                        {
                            ?>
                                <option value="<?php echo $row[0];  ?>"><?php echo $row[1];  ?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3 text-center">
                <input type="submit" name="submit" value="submit" class="btn btn-success w-75">
            </div>
        </form>
    </div>
</div>



<?php

include 'footer.php';

?>