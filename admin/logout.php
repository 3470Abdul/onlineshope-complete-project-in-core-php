<?php
session_start();
if(isset($_POST['logout']))
{
    session_unset();
    session_destroy();
    session_start();
    $_SESSION['SuccessMessage'] = "Logout Successfully";
    header('Location: ../login.php');
}

?>