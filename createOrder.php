<?php
session_start();
include 'conn.php';

$method = $_POST['paymentMethod'];
if(($method === 'Cash on Delivery'))
{
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $totalPrice = $_SESSION['gtotal'];

    $sql = "INSERT INTO `ordertable` (`name`, `address`, `city`, `country`, `phone`, `email`, `totalPrice`) VALUES ('$name', '$address', '$city', '$country', '$phone', '$email', '$totalPrice')";
    $query = mysqli_query($con, $sql);

    if($query)
    {
        unset($_SESSION['gtotal']);
        $_SESSION['orderMessage'] = "Order Created Successfully";
        header('Location: shop.php');
    }
}
else if($method === 'Easy Paisa' || $method === 'VISA')
{
    $_SESSION['orderFailledMessage'] = "Payment Method Not Available";
    header('Location: checkout.php');
}
else
{
    echo "Error";
}


?>