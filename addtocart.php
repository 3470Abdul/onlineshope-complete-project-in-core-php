<?php
session_start();

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    if(isset($_SESSION['cart']))
    {
     
     $check_product = array_column($_SESSION['cart'], 'id');
 
     if(in_array($id, $check_product))
     {
         $_SESSION['carterrorMessage'] = "Product is already added to cart";
         header('Location: shop.php');
     }
     else{
         $_SESSION['cart'][] = array("id" => $id);
         print_r($_SESSION['cart']);
         $_SESSION['cartSuccessMessage'] = "Product is added to cart";
         header('Location: shop.php');
     } 
    }
    else{
     $_SESSION['cart'][] = array("id" => $id);
     $_SESSION['cartSuccessMessage'] = "Product is added to cart";
     header('Location: shop.php');
 } 
}
else
{
    echo  "Product not added";
}


