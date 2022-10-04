<?php

session_start();

if(isset($_GET['id']))
{
    $pid = $_GET['id'];
    foreach($_SESSION['cart'] as $key => $value)
    {
        foreach($value as $index => $val)
        {
            if($pid == $val)
            {
                unset($_SESSION['cart'][$key]);
                header('Location: cart.php');
            }
        }
    }

}


?>