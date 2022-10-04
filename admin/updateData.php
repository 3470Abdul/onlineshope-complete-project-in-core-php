<?php
session_start();
include '../conn.php';

if(isset($_POST['updatebtn']))
{
    $cat_id = $_POST['catId'];
    $old_image = $_POST['oldImage'];
    $cat_name = $_POST['catName'];
    $cat_image_name = $_FILES['catImage']['name'];
    $cat_image_temp_name = $_FILES['catImage']['tmp_name'];
    $cat_image_type = $_FILES['catImage']['type'];
    $cat_image_size = $_FILES['catImage']['size'];
    $folder = "catimages/";
    if(is_uploaded_file($_FILES['catImage']['tmp_name']))
    {
        if(strtolower($cat_image_type) == "image/jpg" || strtolower($cat_image_type) == "image/jpeg" || strtolower($cat_image_type) == "image/png")
        {
            if($cat_image_size <= 1000000)
            {
                $folder = $folder . $cat_image_name;
                $sql = "UPDATE `cateogory` SET  `cat_name` = '$cat_name', `image_path` = '$folder' WHERE `cat_id` = '$cat_id'";
                $run = mysqli_query($con, $sql);
                if($run)
                {
                    move_uploaded_file($cat_image_temp_name, $folder);
                    unlink($old_image);
                    $_SESSION['SuccessMessage'] = "Data Updated Successfully";
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
    else
    {
        echo "Image File not Given";
    }
}


?>