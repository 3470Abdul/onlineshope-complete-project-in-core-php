<?php
session_start();
include 'header.php';

?>




    <!-- customer login start -->
    <div class="customer_login mt-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                <?php

if (isset($_SESSION['Errormessage'])) {
?>
    <div class="col">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['Errormessage'] ;
        unset($_SESSION['Errormessage']);
        ?>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php
}

if (isset($_SESSION['SuccessMessage'])) {
    ?>
        <div class="col">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['SuccessMessage'];
            unset($_SESSION['SuccessMessage']);
            ?>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php
    }

?>
                </div>
            </div>
            <div class="row justify-content-center">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2 class="text-center text-uppercase text-primary">login</h2>

                        <form action="loginCode.php" method="POST">
                            <p>
                                <label>Email <span>*</span></label>
                                <input type="email" name="email" required>
                            </p>
                            <p>
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password" required>
                            </p>
                            <div class="login_submit text-center">
                                <button type="submit" name="loginbtn" class="w-75">login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--login area start-->
            </div>
        </div>
    </div>
    <!-- customer login end -->



<?php

include 'footer.php';

?>