<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/contra/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Sep 2022 16:17:33 GMT -->
<head>
<meta charset="utf-8">
<title>Contra - Interior Creator HTML Template | Login Page</title>
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
                    <h1>Login</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Login Section-->
    <section class="login-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <h2>Login</h2>
                    
                    <!-- Login Form -->
                    <div class="login-form">
                        <!--Login Form-->
                        <form method="post" action="https://expert-themes.com/html/contra/contact.html">
                            <div class="form-group">
                                <label>Username or Email Address</label>
                                <input type="text" name="username" placeholder="Name or Email " required>
                            </div>
                            
                            <div class="form-group">
                                <label>Enter Your Password</label>
                                <input type="email" name="email" placeholder="Password" required>
                            </div>
                            
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="form-group check-box">
                                        <input type="checkbox" name="shipping-option" id="account-option-1">&nbsp; <label for="account-option-1">Remember me</label>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">LOGIN</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="#" class="psw">Lost your password?</a>
                            </div>
                        </form>
                    </div>
                    <!--End Login Form -->
                </div>
                
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <h2>Register</h2>
                    
                    <!-- Register Form -->
                    <div class="login-form register-form">
                        <!--Login Form-->
                        <form method="post" action="https://expert-themes.com/html/contra/contact.html">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" name="username" placeholder="Your Email" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Enter Your Password</label>
                                <input type="email" name="email" placeholder="Password" required>
                            </div>
                            
                            <div class="form-group text-right">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form">Register</button>
                            </div>
                        </form>      
                    </div>
                    <!--End Register Form -->
                </div>
            </div>
        </div>
    </section>
    <!--End Login Section-->

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
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
</body>

<!-- Mirrored from expert-themes.com/html/contra/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Sep 2022 16:17:33 GMT -->
</html>