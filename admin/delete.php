<?php
session_start();
include '../conn.php';
$cat_id = $_GET['id'];

$query = "SELECT * FROM `cateogory` WHERE `cat_id` = '$cat_id'";
$result = mysqli_query($con, $query);

while($row = mysqli_fetch_array($result))
{
    $img = $row[2];
    unlink($img);
}

$sql = "DELETE FROM `cateogory` WHERE `cat_id` = '$cat_id'";
$run = mysqli_query($con, $sql);

if($run)
{
    $_SESSION['SuccessMessage'] = "Data Deleted Successfully";
    echo "<script>window.location.href='categories.php'</script>";
}
else
{
    $_SESSION["ErrorMessage"] = "Data Not Deleted";
    echo "<script>window.location.href='categories.php'</script>";
}


?>