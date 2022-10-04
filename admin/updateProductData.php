<?php
session_start();
include '../conn.php';
if(isset($_POST['updatebtn']))
{   $old_image = $_POST['old_image'];
    $cat_id = $_POST['cat_id'];
    $pro_id = $_POST['pro_id'];
    $pro_name = $_POST['proName'];
    $pro_price = $_POST['proPrice'];
    $pro_desc = $_POST['proDesc'];
    $pro_image_name = $_FILES['proImage']['name'];
    $pro_image_temp_name = $_FILES['proImage']['tmp_name'];
    $pro_image_type = $_FILES['proImage']['type'];
    $pro_image_size = $_FILES['proImage']['size'];
    $folder = "proimages/";

    if($pro_image_name == '' || $pro_image_name == null)
    {
        $sql = "UPDATE `products` SET `pro_name` = '$pro_name', `pro_price` = '$pro_price', `pro_desc` = '$pro_desc', `cat_id` = '$cat_id' WHERE `pro_id` = ' $pro_id'";
                $run = mysqli_query($con, $sql);
    
                if ($run) {
                    $_SESSION['SuccessMessage'] = "Product Updated Successfully";
                    echo "<script>window.location.href='products.php'</script>";
                } else {
                    $_SESSION["ErrorMessage"] = "Product Not Updated";
                    echo "<script>window.location.href='updateProduct.php'</script>";
                }
    }
    else
    {
        if (strtolower($pro_image_type) == "image/jpg" || strtolower($pro_image_type) == "image/jpeg" || strtolower($pro_image_type) == "image/png") {
            if ($pro_image_size <= 1000000) {
                $folder = $folder . $pro_image_name;
    
                $sql = "UPDATE `products` SET `pro_name` = '$pro_name', `pro_price` = '$pro_price', `pro_desc` = '$pro_desc', `pro_image` = '$folder', `cat_id` = '$cat_id' WHERE `pro_id` = ' $pro_id'";
                $run = mysqli_query($con, $sql);
    
                if ($run) {
                    move_uploaded_file($pro_image_temp_name, $folder);
                    unlink($old_image);
                    $_SESSION['SuccessMessage'] = "Product Updated Successfully";
                    echo "<script>window.location.href='products.php'</script>";
                } else {
                    $_SESSION["ErrorMessage"] = "Product Not Updated";
                    echo "<script>window.location.href='updateProduct.php'</script>";
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


}


?>