<?php
session_start();
include 'header.php';

?>

<?php

if (isset($_POST['checkoutbtn'])) {
    $grandTotal = $_POST['grandTotal'];
    $_SESSION['gtotal'] = $grandTotal;
}

?>


<!--Checkout page section-->
<div class="Checkout_section mt-60">
    <div class="container">
        <div class="checkout_form">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <form action="createOrder.php" method="POST">
                        <h3>Billing Details</h3>
                        <div class="row">

                            <div class="col-lg-12 mb-20">
                                <label>Full Name <span>*</span></label>
                                <input type="text" name="name">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Street address <span>*</span></label>
                                <input type="text" name="address">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Town / City <span>*</span></label>
                                <input type="text" name="city">
                            </div>
                            <div class="col-12 mb-20">
                                <label>State / County <span>*</span></label>
                                <input type="text" name="country">
                            </div>
                            <div class="col-lg-12 mb-20">
                                <label>Phone<span>*</span></label>
                                <input type="number" name="phone">

                            </div>
                            <div class="col-lg-12 mb-20">
                                <label> Email Address <span>*</span></label>
                                <input type="email" name="email">
                            </div>

                            <div class="col-lg-12 mb-20">
                                <select name="paymentMethod" class="form-select" aria-label="Default select example">
                                    <option selected>Payment Methods</option>
                                    <option value="Cash on Delivery">Cash on Delivery</option>
                                    <option value="Easy Paisa">Easy Paisa</option>
                                    <option value="VISA">VISA / Debit Card</option>
                                </select>
                            </div>

                            <div class="col-lg-12 mb-20">
                                <label> Total Payable Amount in PKR</label>
                                <input type="text" name="totalPrice" value="<?php echo $_SESSION['gtotal']; ?>" readonly>
                            </div>
                            <div class="col-lg-12 mb-20 text-center">
                                <input type="submit" value="Order Now" name="orderbtn" class="btn btn-primary bg-primary text-light w-75">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Checkout page section end-->
<?php
if (isset($_SESSION['orderFailledMessage'])) {
?>
    <h5 id="orderFailledMessage" style="display: none;"><?php echo $_SESSION['orderFailledMessage'];
                                    unset($_SESSION['orderFailledMessage']);  ?></h5>
<?php
}
?>


<?php

include 'footer.php';

?>


<script type="text/javascript">
    $(document).ready(function() {
        var orderFailledMessage = $("#orderFailledMessage").text();
        if (orderFailledMessage != '') {


            Swal.fire({
                icon: 'error',
                title: 'Oops...' ,
                text: orderFailledMessage
            })
        }
    });
</script>