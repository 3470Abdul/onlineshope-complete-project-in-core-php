<?php
session_start();
include 'conn.php';

if(isset($_POST['loginbtn']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `tbl_register` where `email` = '$email' AND `password` = '$password' LIMIT 1";
    $query = mysqli_query($con, $sql);

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        $_SESSION['user'] = $row[1];
        header('Location: admin/index.php');
    } else {
        $_SESSION['Errormessage'] = "User Name or Password is Incorrect";
        header('Location: login.php');
    }
}


?>