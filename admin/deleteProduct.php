<?php
session_start();
include '../conn.php';
$id = $_GET['id'];

$sql1 = "SELECT * FROM `products` WHERE `pro_id` = '$id'";
$query1 = mysqli_query($con, $sql1);

$row = mysqli_fetch_array($query1);
$old_image = $row[4];


$sql = "DELETE FROM `products` WHERE `pro_id` = '$id'";
$query = mysqli_query($con, $sql);

if($query)
{
    unlink($old_image);
    $_SESSION['SuccessMessage'] = "Product Deleted Successfully";
    echo "<script>window.location.href='products.php'</script>";
}
else
{
    $_SESSION["ErrorMessage"] = "Product Not Inserted";
    echo "<script>window.location.href='products.php'</script>";
}


?>