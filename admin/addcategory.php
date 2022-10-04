<?php
include_once 'header.php';
include '../conn.php';

if(isset($_POST['submit']))
{
    $cat_name = $_POST['catName'];
    $cat_image_name = $_FILES['catImage']['name'];
    $cat_image_temp_name = $_FILES['catImage']['tmp_name'];
    $cat_image_type = $_FILES['catImage']['type'];
    $cat_image_size = $_FILES['catImage']['size'];
    $folder = "catimages/";

    if(strtolower($cat_image_type) == "image/jpg" || strtolower($cat_image_type) == "image/jpeg" || strtolower($cat_image_type) == "image/png")
    {
        if($cat_image_size <= 1000000)
        {
            $folder = $folder . $cat_image_name;
            $sql = "INSERT INTO `cateogory` (`cat_name`, `image_path`) VALUES ('$cat_name', '$folder')";
            $run = mysqli_query($con, $sql);
            if($run)
            {
                move_uploaded_file($cat_image_temp_name, $folder);
                $_SESSION['SuccessMessage'] = "Data Inserted Successfully";
                echo "<script>window.location.href='categories.php'</script>";
            }
            else
            {
                $_SESSION["ErrorMessage"] = "Data Not Inserted";
                echo "<script>window.location.href='categories.php'</script>";
            }
        }
        else
        {
            $_SESSION["ErrorMessage"] = "Image Size should less than 1MB";
            echo "<script>window.location.href='categories.php'</script>";
        }
    }
    else
    {
        $_SESSION["ErrorMessage"] = "Format Not Supported";
        echo "<script>window.location.href='categories.php'</script>";
    }

}
?>



        <div class="row justify-content-center pb-5">
            <div class="col-12 card shadow">
                <h1 class="text-primary text-center text-uppercase my-3">Add Cateogry</h1>
                <form action="addcategory.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Cateogry Name</label>
                        <input type="text" name="catName" class="form-control" placeholder="Enter Cateogry Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Cateogry Image</label>
                        <input class="form-control" name="catImage" type="file" required>
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