<?php

    include '../includes/settings.php';
    error_reporting(0);
    
    $isConnected = 0;
    if (!isset($_SESSION))
    {
        session_start();
    }
    
    if (isset($_SESSION['username']))
    {
        $isConnected = 1;
    }
    


?>

<html lang="en">
    <style>
        html {
          scroll-behavior: smooth;
        }
        </style>
    <head>
    <title>SamzyAuth - A Secure Licensing Solution</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="SamzyAuth - A Secure Licensing Solution">
	<meta name="description" content="A Secure Licensing Solution for Developers">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://auth.samzy.dev">
	<meta property="og:title" content="SamzyAuth - A Secure Licensing Solution">
	<meta property="og:description" content="A Secure Licensing Solution for Developers">
	<meta property="og:image" content="">
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://auth.samzy.dev">
	<meta property="twitter:title" content="SamzyAuth - A Secure Licensing Solution">
	<meta property="twitter:description" content="A Secure Licensing Solution for Developers">
	<meta property="twitter:image" content="">
    <link rel="icon" type="image/jpg" href="https://samzy.dev/profile.jpg"/>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/progressbar.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
        <script src="https://kit.fontawesome.com/fe49a7dc3e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
        <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
        <script src="https://cdn.sellix.io/static/js/embed.js" ></script>
        <link href="https://cdn.sellix.io/static/css/embed.css" rel="stylesheet" />
    </head>

    <body>

        <div class="navbar-area">
            <div class="labto-mobile-nav">
                <div class="logo">
                    <a href="index.php"><img width="256px"src="https://auth.samzy.dev/auth/assets/img/logo_long.png" alt="logo"></a>
                </div>
            </div>

            <div class="labto-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.php"><img width="256px" src="https://auth.samzy.dev/auth/assets/img/logo_long.png" alt="logo"></a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">

                                <li class="nav-item"><a href="#principal" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
                                <li class="nav-item"><a href="#pricing" class="nav-link">Pricing</a></li>
                                <li class="nav-item"><a href="https://github.com/YungSamzy/SamzyAuth" target="_blank" class="nav-link">GitHub</a></li>
                                <li class="nav-item"><a href="../tos.php" class="nav-link">Terms</a></li>

                                <!-- <li class="nav-item"><a href="#" class="nav-link">Services <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="services-1.html" class="nav-link">Services Style 1</a></li>

                                        <li class="nav-item"><a href="services-2.html" class="nav-link">Services Style 2</a></li>

                                        <li class="nav-item"><a href="single-services.html" class="nav-link">Services Details</a></li>
                                    </ul>
                                </li> -->

                              
                            </ul>

                            <div class="others-options">
                                <!-- <div class="languages-list">
                                    <select>
                                        <option value="1">En</option>
                                        <option value="2">Ge</option>
                                        <option value="3">Spa</option>
                                    </select>
                                </div> -->


                                <?php
                                    if ($isConnected)
                                    {
                                        echo '<a href="../account/login.php" class="btn btn-secondary"> Dashboard | <i class="fas fa-sign-in-alt"></i></a>';
                                    }
                                    else
                                    {
                                        echo '<a href="../account/login.php" class="btn btn-secondary"> Sign In | <i class="fas fa-sign-in-alt"></i></a>';
                                    }
                                ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Main Banner Area -->
        <div class="main-banner" id="principal">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="main-banner-content">
                            <span>New and Improved!</span> <!--Documentation: <a style="color: aquamarine;" href="https://docs.auth.samzy.dev" target="_blank">docs.auth.samzy.dev</a> -->
                            <h1>SamzyAuth</h1>
                            <p>A Secure Licensing Solution for Developers</p>

                            <a href="../account/register.php" class="btn btn-primary">Get started</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="banner-image">
                            <img src="assets/img/back.png" alt="image">
                            <img src="assets/img/bg-shape2.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape-img1 rotateme"><img src="assets/img/shape-image/1.png" alt="image"></div>
            <div class="shape-img2"><img src="assets/img/shape-image/2.png" alt="image"></div>
            <div class="shape-img3 rotateme"><img src="assets/img/shape-image/3.png" alt="image"></div>
            <div class="shape-img4"><img src="assets/img/shape-image/4.png" alt="image"></div>
            <div class="shape-img5"><img src="assets/img/shape-image/5.png" alt="image"></div>
            <div class="shape-img6"><img src="assets/img/shape-image/6.png" alt="image"></div>
            <div class="shape-img7"><img src="assets/img/shape-image/7.png" alt="image"></div>
            <div class="shape-img8"><img src="assets/img/shape-image/8.png" alt="image"></div>
        </div>
        <!-- End Main Banner Area -->

    
        
        <!-- Start Services Area -->
        <section class="services-area ptb-120 pt-0" id="features">
            <div class="container">
                <div class="section-title">
                    <span>Features</span>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <h3>Secure</h3>
                            <p>Our services our encrypted with End to End Encryption for the maximum security. All of our data is encrypted on the cloud with military grade encryption.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <h3>Easy to Use</h3>
                            <p>Although we do everything for you, you still have full control, you can create, delete, edit variables, users and much more in one click from the control panel.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <h3>Easy to Integrate</h3>
                            <p>It will take you less than 2 minutes to integrate our system to your program and be able to manage your licenses, easy, don't you think?</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <h3>Client Obfuscation</h3>
                            <p>Our Premium users can obfuscate their programs on our dashboard for the maximum security for their projects! So your project will be encrypted and protected client side and server side. Making it very difficult for anyone to bypass.</p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">

                            <h3>Opensourced</h3>
                            <p>SamzyAuth is opensourced. Meaning that anyone can take a look at how we work. If you think that something can be improved or worked on, you can open a pull request!  <a style="color: aquamarine;" href="https://github.com/YungSamzy/SamzyAuth" target="_blank">GitHub</a></p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">

                            <h3>Multi-Lingual</h3>
                            <p>We have multiple APIs for different languages. Our most secure one is for .NET, but we also support PHP and more are coming soon!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <!-- Start Pricing Area -->
                <section class="pricing-area ptb-120 pb-0" id="pricing">
            <div class="container">
                <div class="section-title text-center">
                    <span class="bg-ff5d24">Pricing</span>
                    <p>Servers aren't cheap ya know...
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-md-2">
                        <div class="single-pricing-box bg-3fc581">
                            <!--<div class="icon">
                                <i class="fas fa-socks"></i>
                            </div>-->
                            <h3>Free</h3>
                            <ul class="pricing-features-list">
                                <li><i class="fas fa-check"></i> 1 Program</li>
                                <li><i class="fas fa-check"></i> 50 Users per program</li>
                                <li><i class="fas fa-check"></i> 75 Licenses per program</li>                                
                                <li><i class="fas fa-check"></i> 5 Server-side variables</li>                                                                                                                                                    
                                <li><i style="color: red;" class="fas fa-times"></i> Change license prefix</li>
                                <li><i style="color: red;" class="fas fa-times"></i> Client Obfuscation</li>
                                <li><i style="color: red;" class="fas fa-times"></i> Admin API Access</li>
                                <li><i style="color: red;" class="fas fa-times"></i> Prioritised Support</li>
                            </ul>
                            <div class="price">
                                FREE <span>/Lifetime</span>
                            </div>
                            <a href="../account/register.php" class="default-btn">Start for free</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 col-sm-6 offset-sm-3 offset-md-2">
                        <div class="single-pricing-box bg-f59f00">
                            <!--<div class="icon">
                                <i class="flaticon-health-check"></i>
                            </div>-->
                            <h3>Premium</h3>
                            <ul class="pricing-features-list">
                                <li><i class="fas fa-check"></i> 60 Programs</li>
                                <li><i class="fas fa-check"></i> Unlimited Users per program</li>
                                <li><i class="fas fa-check"></i> 10,000 Licenses per program</li>                                
                                <li><i class="fas fa-check"></i> Unlimited server sided variables</li>    
                                <li><i class="fas fa-check"></i> Change license prefix</li>
                                <li><i class="fas fa-check"></i> Client Obfuscation</li>
                                <li><i class="fas fa-check"></i> Admin API Key access</li>
                                <li><i class="fas fa-check"></i> Support the project</li>
                                <li><i class="fas fa-check"></i> Prioritised Support</li>
                            </ul>
                            
                            <div class="price">
                                $10 <span>/Lifetime</span>
                            </div>
                            <!--<a href="#" class="default-btn">Buy Now</a>-->
                            <a class="default-btn" data-sellix-product="6178a3b48fd21" type="submit" alt="Buy Now with sellix.io">Buy Now</a> <!-- CHANGE_HERE -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pricing Area -->
    </br>
    </br>
    </br>
    </br>    
    </br>
    </br>
<?php
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
?>


        <footer class="footer-area">
            <div class="container">
                

                <div class="copyright-area">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <p><a href="https://auth.samzy.dev" target="_blank">SamzyAuth | <small>© 2021 SamzyDev</small></a></p>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <ul>
                                <li><a href="https://github.com/YungSamzy" target="_blank"><i class="fab fa-github"></i></a></li>
                                <li><a href="https://samzy.dev/donate" target="_blank"><i class="fas fa-hand-holding-usd" style="solid"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.meanmenu.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/parallax.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/progressbar.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.js"></script>
        <script src="assets/js/labto-map.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>