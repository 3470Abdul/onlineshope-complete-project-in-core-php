<?php

$activePage = basename($_SERVER['PHP_SELF'], '.php');

?>


<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/junko/junko/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jul 2022 15:10:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Junko - Electronics eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS 
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!--header area start-->

    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="support_info">
                            <p>Telephone Enquiry: <a href="tel:0123456789">0123456789</a></p>
                        </div>
                        <div class="top_right text-right">
                            <ul>
                                <li><a href="login.php"> Login </a></li>
                                <li><a href="checkout.html"> Checkout </a></li>
                            </ul>
                        </div>
                        <div class="search_container">
                            <form action="#">
                                <div class="hover_category">
                                    <select class="select_option" name="select" id="categori">
                                        <option selected value="1">All Categories</option>
                                        <option value="2">Accessories</option>
                                        <option value="3">Accessories & More</option>
                                        <option value="4">Butters & Eggs</option>
                                        <option value="5">Camera & Video </option>
                                        <option value="6">Mornitors</option>
                                        <option value="7">Tablets</option>
                                        <option value="8">Laptops</option>
                                        <option value="9">Handbags</option>
                                        <option value="10">Headphone & Speaker</option>
                                        <option value="11">Herbs & botanicals</option>
                                        <option value="12">Vegetables</option>
                                        <option value="13">Shop</option>
                                        <option value="14">Laptops & Desktops</option>
                                        <option value="15">Watchs</option>
                                        <option value="16">Electronic</option>
                                    </select>
                                </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>

                        <div class="middel_right_info">
                            <div class="header_wishlist">
                                <a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                <span class="wishlist_quantity">3</span>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)"><i class="fa fa-shopping-bag"
                                        aria-hidden="true"></i>$147.00 <i class="fa fa-angle-down"></i></a>
                                <span class="cart_quantity"><?php
                                
                                if(isset($_SESSION['cart']))
                                {
                                    $c = count($_SESSION['cart']); 
                                    echo $c;
                                }
                                else
                                {
                                    $h = 0;
                                    echo $h;
                                }  ?></span>
                                <!--mini cart-->
                                <div class="mini_cart">
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">Sit voluptatem rhoncus sem lectus</a>
                                            <p>Qty: 1 X <span> $60.00 </span></p>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">Natus erro at congue massa commodo</a>
                                            <p>Qty: 1 X <span> $60.00 </span></p>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>Sub total:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                        <div class="cart_total mt-10">
                                            <span>total:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                    </div>

                                    <div class="mini_cart_footer">
                                        <div class="cart_button">
                                            <a href="cart.html">View cart</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="checkout.html">Checkout</a>
                                        </div>

                                    </div>

                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children">
                                    <a href="index.php" class="<?php if($activePage == 'index'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.php" class="<?php if($activePage == 'about'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop.php" class="<?php if($activePage == 'shop'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>">Shop</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.php" class="<?php if($activePage == 'contact'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>">Contact Us</a>
                                </li>
                                <li><a href="cart.php" class="<?php if($activePage == 'cart'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>"> View Cart</a></li>
                            </ul>
                        </div>

                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->

    <header>
        <div class="main_header">
            <!--header top start-->
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="support_info">
                                <p>Telephone Enquiry: <a href="tel:0123456789">0123456789</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-right">
                                <ul>
                                    <li><a href="login.php"> Login </a></li>
                                    <li><a href="checkout.html"> Checkout </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->
            <!--header middel start-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6">
                            <div class="middel_right">
                                <div class="search_container">
                                    <form action="#">
                                        <div class="hover_category">
                                            <select class="select_option" name="select" id="categori1">
                                                <option selected value="1">All Categories</option>
                                                <option value="2">Accessories</option>
                                                <option value="3">Accessories & More</option>
                                                <option value="4">Butters & Eggs</option>
                                                <option value="5">Camera & Video </option>
                                                <option value="6">Mornitors</option>
                                                <option value="7">Tablets</option>
                                                <option value="8">Laptops</option>
                                                <option value="9">Handbags</option>
                                                <option value="10">Headphone & Speaker</option>
                                                <option value="11">Herbs & botanicals</option>
                                                <option value="12">Vegetables</option>
                                                <option value="13">Shop</option>
                                                <option value="14">Laptops & Desktops</option>
                                                <option value="15">Watchs</option>
                                                <option value="16">Electronic</option>
                                            </select>
                                        </div>
                                        <div class="search_box">
                                            <input placeholder="Search product..." type="text">
                                            <button type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="middel_right_info">
                                    <div class="header_wishlist">
                                        <a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        <span class="wishlist_quantity">3</span>
                                    </div>
                                    <div class="mini_cart_wrapper">
                                        <a href="javascript:void(0)"><i class="fa fa-shopping-bag"
                                                aria-hidden="true"></i>$147.00 <i class="fa fa-angle-down"></i></a>
                                        <span class="cart_quantity"><?php
                                
                                if(isset($_SESSION['cart']))
                                {
                                    $c = count($_SESSION['cart']); 
                                    echo $c;
                                }
                                else
                                {
                                    $h = 0;
                                    echo $h;
                                }  ?></span>
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Sit voluptatem rhoncus sem lectus</a>
                                                    <p>Qty: 1 X <span> $60.00 </span></p>
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Natus erro at congue massa commodo</a>
                                                    <p>Qty: 1 X <span> $60.00 </span></p>
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="mini_cart_table">
                                                <div class="cart_total">
                                                    <span>Sub total:</span>
                                                    <span class="price">$138.00</span>
                                                </div>
                                                <div class="cart_total mt-10">
                                                    <span>total:</span>
                                                    <span class="price">$138.00</span>
                                                </div>
                                            </div>

                                            <div class="mini_cart_footer">
                                                <div class="cart_button">
                                                    <a href="cart.html">View cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a href="checkout.html">Checkout</a>
                                                </div>

                                            </div>

                                        </div>
                                        <!--mini cart end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->
            <!--header bottom satrt-->
            <div class="main_menu_area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-12">
                            <div class="categories_menu">
                                <div class="categories_title">
                                    <h2 class="categori_toggle">ALL CATEGORIES</h2>
                                </div>
                                <div class="categories_menu_toggle">
                                    <ul>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM `cateogory`";
                                    $run = mysqli_query($con, $sql);
                                    while($row = mysqli_fetch_array($run )) 
                                    {
                                        ?>
                                            <li><a href="#"> <?php echo $row[1];  ?></a></li>
                                        <?php
                                    } 
                                ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="main_menu menu_position">
                                <nav>
                                    <ul>
                                        <li class="menu-item-has-children">
                                            <a href="index.php" class="<?php if($activePage == 'index'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>">Home</a>
                                        </li>
                                        <li><a href="about.php" class="<?php if($activePage == 'about'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>">about Us</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.php" class="<?php if($activePage == 'shop'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>">Shop</a>
                                        </li>
                                        <li><a href="contact.php" class="<?php if($activePage == 'contact'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>"> Contact Us</a></li>
                                        <li><a href="cart.php" class="<?php if($activePage == 'cart'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>"> View Cart</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div>
    </header>
    <!--header area end-->

    <!--sticky header area start-->
    <div class="sticky_header_area sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="sticky_header_right menu_position">
                        <div class="main_menu">
                            <nav>
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="index.php" class="<?php if($activePage == 'index'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>">Home</a>
                                    </li>
                                    <li><a href="about.php" class="<?php if($activePage == 'about'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>">about Us</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="shop.php" class="<?php if($activePage == 'shop'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>">Shop</a>
                                    </li>
                                    <li><a href="contact.php" class="<?php if($activePage == 'contact'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>"> Contact Us</a></li>
                                    <li><a href="cart.php" class="<?php if($activePage == 'cart'){
                                        echo 'active';
                                    }else{
                                        echo '';
                                    }    ?>"> View Cart</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="middel_right_info">
                            <div class="header_wishlist">
                                <a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                <span class="wishlist_quantity">3</span>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)"><i class="fa fa-shopping-bag"
                                        aria-hidden="true"></i>$147.00 <i class="fa fa-angle-down"></i></a>
                                <span class="cart_quantity"><?php
                                
                                if(isset($_SESSION['cart']))
                                {
                                    $c = count($_SESSION['cart']); 
                                    echo $c;
                                }
                                else
                                {
                                    $h = 0;
                                    echo $h;
                                }  ?></span>
                                <!--mini cart-->
                                <div class="mini_cart">
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">Sit voluptatem rhoncus sem lectus</a>
                                            <p>Qty: 1 X <span> $60.00 </span></p>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">Natus erro at congue massa commodo</a>
                                            <p>Qty: 1 X <span> $60.00 </span></p>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>Sub total:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                        <div class="cart_total mt-10">
                                            <span>total:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                    </div>

                                    <div class="mini_cart_footer">
                                        <div class="cart_button">
                                            <a href="cart.html">View cart</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="checkout.html">Checkout</a>
                                        </div>

                                    </div>

                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sticky header area end-->

    