<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/contra/shoping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Sep 2022 16:17:32 GMT -->
<head>
<meta charset="utf-8">
<title>Contra - Interior Creator HTML Template | Shopping Cart</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">   
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <?php include './includes/header.php' ?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/10.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Shopping Cart</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Shopping Cart</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

     <!--Cart Section-->
    <section class="cart-section">
        <div class="auto-container">
            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th>Preview</th>
                                <th class="prod-column">product</th>
                                <th class="price">Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="prod-column">
                                    <div class="column-box">
                                        <figure class="prod-thumb"><a href="#"><img src="images/resource/products/12.jpg" alt=""></a></figure>
                                    </div>
                                </td>
                                <td><h4 class="prod-title">Patient Ninja</h4></td>
                                <td class="sub-total">$35.00</td>
                                <td class="qty"><div class="item-quantity"><input class="quantity-spinner" type="text" value="2" name="quantity"></div></td>
                                <td class="total">$35.00</td>
                                <td><a href="#" class="remove-btn"><span class="fa fa-remove"></span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="cart-options clearfix">
                    <div class="pull-left">
                        <div class="apply-coupon clearfix">
                            <div class="form-group clearfix">
                                <input type="text" name="coupon-code" value="" placeholder="Coupon Code">
                            </div>
                            <div class="form-group clearfix">
                                <button type="button" class="theme-btn coupon-btn">Apply Coupon</button>
                            </div>
                        </div>
                    </div>

                    <div class="pull-right">
                        <button type="button" class="theme-btn cart-btn">update cart</button>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-between">
                <div class="column pull-left col-lg-5 col-md-6 col-sm-12">
                    <div class="shipping-block">
                        <div class="inner-box">
                            <h3>Free Shipping</h3>
                            <h4>Calculate Shipping</h4>
                            
                            <!-- Shipping Form -->
                            <div class="shipping-form">
                                <!--Shipping Form-->
                                <form method="post" action="https://expert-themes.com/html/contra/contact.html">
                                    <div class="row clearfix">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <input type="text" name="text" placeholder="Pakistan" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12">
                                            <input type="text" name="text" placeholder="Postcode / ZIP" required>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12">
                                            <input type="text" name="text" placeholder="State / County" required>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12">
                                            <button class="theme-btn totals-btn" type="submit" name="submit-form">Update Totals</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="column pull-right col-lg-6 col-md-6 col-sm-12">
                    <!--Totals Table-->
                    <ul class="totals-table">
                        <li><h3>Cart Totals</h3></li>
                        <li class="clearfix total"><span class="col">Sub Total</span><span class="col price">$35.00</span></li>
                        <li class="clearfix total"><span class="col">Total</span><span class="col price">$35.00</span></li>
                        <li class="text-right"><button type="submit" class="theme-btn proceed-btn">Proceed to Checkout</button></li>
                    </ul>
                </div>  
            </div>
        </div>
    </section>
    <!--End Cart Section-->


    <?php include './includes/footer.php' ?>

</div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate blue-color" data-theme-file="css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>
    <ul class="box-version option-box"> <li>Full width</li> <li class="box">Boxed</li> </ul>
    <ul class="rtl-version option-box"> <li>LTR Version</li> <li class="rtl">RTL Version</li> </ul>
    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>
    <a href="#" class="purchase-btn">Purchase now $17</a>
</div><!-- End Color Switcher -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-o-up"></span></div>
<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script> 
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
</body>

<!-- Mirrored from expert-themes.com/html/contra/shoping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Sep 2022 16:17:33 GMT -->
</html>