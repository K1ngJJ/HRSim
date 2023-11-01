<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/imagesfavicon.png') ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-select.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/line-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.fancybox.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/daterangepicker.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animated-headline.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/flag-icon.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link href="<?= base_url('admin_assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" />
</head>
<body>
<!-- start cssload-loader -->
<div class="preloader" id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area">
    <div class="header-menu-wrapper padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-wrapper justify-content-between">
                        <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                        <div class="logo">
                            <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/images/logo.png') ?>" alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div><!-- end menu-toggler -->
                        </div><!-- end logo -->
                        <div class="main-menu-content pr-0 ml-0">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="<?= base_url('/') ?>">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('/item/hotel') ?>">Hotel</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('/item/villa') ?>">Villa</a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end main-menu-content -->
                        <div class="nav-btn">
                        <?php if(!isset($_SESSION['logged_in'])){ ?>
                            <div class="header-right-action">
                                <a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-1" data-toggle="modal" data-target="#signupPopupForm">Sign Up</a>
                                 <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#loginPopupForm">Login</a>
                            </div>
                        <?php } else { ?>
                            <div class="header-right-action">
                                <label>Selamat datang <?= $_SESSION['email'] ?></label>
                                <a href="<?= base_url('user/logout') ?>" class="theme-btn theme-btn-small">Logout</a>
                            </div>
                        <?php } ?>
                        </div><!-- end nav-btn -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->



<?= $this->renderSection('content') ?>



<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area section-bg padding-top-40px padding-bottom-30px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="term-box footer-item">
                    <ul class="list-items list--items d-flex align-items-center">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="footer-social-box text-right">
                    <ul class="social-profile">
                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div>
    <div class="section-block mt-4 mb-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <div class="footer-logo padding-bottom-30px">
                        <a href="<?= base_url('/'); ?>" class="foot__logo"><img src="<?= base_url('assets/images/logo.png') ?>" alt="logo"></a>
                    </div><!-- end logo -->
                    <p class="footer__desc">Morbi convallis bibendum urna ut viverra. Maecenas consequat</p>
                    <ul class="list-items pt-3">
                        <li>3015 Grand Ave, Coconut Grove,<br> Cerrick Way, FL 12345</li>
                        <li>+123-456-789</li>
                        <li><a href="#">trizen@yourwebsite.com</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Company</h4>
                    <ul class="list-items list--items">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="blog-grid.html">News</a></li>
                        <li><a href="contact.html">Support</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Links</h4>
                    <ul class="list-items list--items">
                        <li><a href="#">USA Vacation Packages</a></li>
                        <li><a href="#">USA Flights</a></li>
                        <li><a href="#">USA Hotels</a></li>
                        <li><a href="#">USA Car Hire</a></li>
                        <li><a href="#">Create an Account</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Payment Methods</h4>
                    <p class="footer__desc pb-3">Pay any way you choose, we support all payment options.</p>
                    <img src="<?= base_url('assets/images/payment-img.png') ?>" alt="">
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="section-block"></div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copy-right padding-top-30px text-center">
                    <p class="copy__desc">
                        &copy; Copyright Trizen 2020. Made with
                        <span class="la la-heart"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                    </p>
                </div><!-- end copy-right -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post" action="<?= base_url('user/register'); ?>">
                            <div class="input-box">
                                <label class="label-text">Full Name</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="name" placeholder="Type your name">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="email" name="email" placeholder="Type your email">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="password" name="password" placeholder="Type password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Address</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="address" placeholder="Type your address">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Telephone</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="number" name="telp" placeholder="Type your telephone number">
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="submit" class="theme-btn w-100">Register Account</button>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                        <p class="font-size-14">Hello! Welcome to your account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post" action="<?= base_url('user/login') ?>">
                            <div class="input-box">
                                <label class="label-text">Email</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="email" name="email" placeholder="Type your email">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group mb-2">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="password" name="password" placeholder="Type your password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="submit" class="theme-btn w-100">Login Account</button>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->


<!-- Template JS Files -->
    <script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-select.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/moment.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/daterangepicker.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.fancybox.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.countTo.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/animated-headline.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.ripples-min.js') ?>"></script>
    <script src="<?= base_url('assets/js/quantity-input.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.superslides.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/superslider-script.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script src="<?= base_url('admin_assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>
    
    <script >
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
        });
    </script>
</body>
</html>