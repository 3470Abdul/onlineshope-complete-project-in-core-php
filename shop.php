<?php
session_start();
include 'header.php';

?>

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Camera & Video </li>
                        <li>shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shop  area start-->
<div class="shop_area shop_fullwidth mt-60 mb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--shop wrapper start-->
                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper">
                    <div class="shop_toolbar_btn">

                        <button data-role="grid_3" type="button" class=" btn-grid-3" data-bs-toggle="tooltip" title="3"></button>

                        <button data-role="grid_4" type="button" class="active btn-grid-4" data-bs-toggle="tooltip" title="4"></button>

                        <button data-role="grid_list" type="button" class="btn-list" data-bs-toggle="tooltip" title="List"></button>
                    </div>
                    <div class=" niceselect_option">
                        <form class="select_option" action="#">
                            <select name="orderby" id="short">

                                <option selected value="1">Sort by average rating</option>
                                <option value="2">Sort by popularity</option>
                                <option value="3">Sort by newness</option>
                                <option value="4">Sort by price: low to high</option>
                                <option value="5">Sort by price: high to low</option>
                                <option value="6">Product Name: Z</option>
                            </select>
                        </form>
                    </div>
                    <div class="page_amount">
                        <p>Showing 1–9 of 21 results</p>
                    </div>
                </div>
                <!--shop toolbar end-->

                <?php
                if (isset($_SESSION['cartSuccessMessage'])) {
                ?>
                    <h5 id="cartSuccessMessage"><?php echo $_SESSION['cartSuccessMessage'];
                                                unset($_SESSION['cartSuccessMessage']);  ?></h5>
                <?php
                }
                ?>


                <?php
                if (isset($_SESSION['carterrorMessage'])) {
                ?>
                    <h5 id="cartErrorMessage"><?php echo $_SESSION['carterrorMessage'];
                                                unset($_SESSION['carterrorMessage']);  ?></h5>
                <?php
                }
                ?>




                <div class="row shop_wrapper">

                    <?php

                    include 'conn.php';

                    $sql = "SELECT * FROM  `products` ORDER BY `pro_id` DESC";
                    $query = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                        <div class="col-lg-3 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="<?php echo "admin/" . $row[4];  ?>" style="width:220px; height: 250px;" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="<?php echo "admin/" . $row[4];  ?>" style="width:220px; height: 250px;" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="addtocart.php?id=<?php echo $row[0];  ?>" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="price_box">
                                            <span class="old_price"><?php echo "Rs: " . $row[2] + 500;  ?></span>
                                            <span class="current_price"><?php echo "Rs: " . $row[2];  ?></span>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="product_name grid_name"><a href="product-details.html"><?php echo "Rs: " . $row[3];  ?></a></h3>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                            <div class="price_box">
                                                <span class="old_price"><?php echo "Rs: " . $row[2] + 500;  ?></span>
                                                <span class="current_price"><?php echo "Rs: " . $row[2];  ?></span>
                                            </div>
                                            <h3 class="product_name"><a href="product-details.html"><?php echo "Rs: " . $row[3];  ?></a></h3>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                    ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="add to cart">Add to cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span> Compare</a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="ion-ios-search-strong"></span> Quick View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>

                    <?php
                    }

                    ?>
                </div>

                <div class="shop_toolbar t_bottom">
                    <div class="pagination">
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">next</a></li>
                            <li><a href="#">>></a></li>
                        </ul>
                    </div>
                </div>
                <!--shop toolbar end-->
                <!--shop wrapper end-->
            </div>
        </div>
    </div>
</div>
<!--shop  area end-->



<?php
if (isset($_SESSION['orderMessage'])) {
?>
    <h5 id="orderMessage" style="display: none;"><?php echo $_SESSION['orderMessage'];
                                    unset($_SESSION['orderMessage']);  ?></h5>
<?php
}
?>



<?php

include 'footer.php';

?>


<script type="text/javascript">
    $(document).ready(function() {
        var cartSuccessmessage = $("#cartSuccessMessage").text();
        var cartErrormessage = $("#cartErrorMessage").text();
        if (cartSuccessmessage != '') {

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                width: '400px',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: cartSuccessmessage
            })
        }

        if (cartErrormessage != '') {

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                width: '400px',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: cartErrormessage
            })
        }

        var orderMessage = $("#orderMessage").text();
        if (orderMessage != '') {


            Swal.fire({
                icon: 'success',
                title: 'Good job!' ,
                text: orderMessage
            })
        }


    });
</script>