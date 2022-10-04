<?php
session_start();
include 'header.php';
include 'conn.php';

?>

<!--shopping cart area start -->
<div class="shopping_cart_area mt-60">
    <div class="container">
    <form action="checkout.php" method="POST">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    if (isset($_SESSION['cart'])) {

                                        foreach ($_SESSION['cart'] as $key => $value) {
                                            $pid = $value['id'];
                                            $sql = "SELECT * FROM `products` WHERE `pro_id` = '$pid'";
                                            $query = mysqli_query($con, $sql);
                                            if (mysqli_num_rows($query) > 0) {
                                                $row = mysqli_fetch_array($query);
                                    ?>
                                    
                                                <tr>
                                                    <td class="product_remove"><a href="removeCart.php?id=<?php echo $row[0];  ?>"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                    <td class="product_thumb"><a href="#"><img src="<?php echo "admin/" . $row[4];  ?>" alt=""></a></td>
                                                    <td class="product_name"><a href="#"><?php echo $row[1];  ?></a>
                                                </td>
                                                    <input type="hidden" value="<?php echo  $row[2];  ?>" name="pro_price" class="iprice">
                                                    <td class="product-price" id="price"><?php echo "Rs: " . $row[2];  ?></td>
                                                    <td class="product_quantity"><label>Quantity</label> <input min="1" onchange="subTotal();" max="100" value="1" class="iquantity" type="number" name="pro_quantity"></td>
                                                    <td class="product_total itotal">
                                                    
                                                    </td>
                                                </tr>
                                                
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td colspan="6" class="text-center ">
                                                        <h4>Your Cart is Empty<h4>
                                                    </td>
                                                </tr>

                                        <?php
                                                break;
                                            }
                                        }


                                        ?>
                                    <?php
                                    } else {
                                    ?>
                                        <tr>
                                            <td colspan="6">
                                                <h4>Your Cart is empty</h4>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount" id="gtotal"></p>
                                    <input type="hidden" name="grandTotal" value="" id="gtotalt">
                                </div>
                                <div class="text-end">
                                <input type="submit" value="Proceed to Checkout" name="checkoutbtn" class="btn w-50 text-light bg-primary btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form>
    </div>
</div>
<!--shopping cart area end -->

<?php


include 'footer.php';

?>

<script type="text/javascript">
    let iprice = document.getElementsByClassName("iprice");
    let iquantity = document.getElementsByClassName("iquantity");
    let itotal = document.getElementsByClassName("itotal");
    let gtotal = document.getElementById("gtotal");
    let gtotalt = document.getElementById("gtotalt");
    function subTotal() {
        gt = 0;
        for (i = 0; i < iprice.length; i++) {

            itotal[i].innerText = "Rs: " + (parseInt(iprice[i].value)) * (parseInt(iquantity[i].value)); 

            gt = gt + (parseInt(iprice[i].value)) * (parseInt(iquantity[i].value));
        }
        gtotal.innerText = "Rs: " + gt;
        gtotalt.value = gt;
    }
    subTotal();
</script>