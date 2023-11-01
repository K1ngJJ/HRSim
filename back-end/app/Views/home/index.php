<?= $this->extend('home/template/index') ?>
<?= $this->section('content') ?>
<!-- ================================
    START HERO-WRAPPER AREA
================================= -->
<section class="hero-wrapper hero-wrapper2">
    <div class="hero-box pb-0">
        <div id="fullscreen-slide-contain">
            <ul class="slides-container">
                <li><img src="<?= base_url('assets/images/hero-bg2.jpg') ?>" alt=""></li>
                <li><img src="<?= base_url('assets/images/hero--bg2.jpg') ?>" alt=""></li>
                <li><img src="<?= base_url('assets/images/hero--bg3.jpg') ?>" alt=""></li>
            </ul>
        </div><!-- End background slider -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content pb-5">
                        <div class="section-heading">
                            <p class="sec__desc pb-2">Hotel stays, Dream getaways</p>
                            <h2 class="sec__title">Find the Perfect Place to Stay <br> for Your Next Trip</h2>
                        </div>
                    </div><!-- end hero-content -->
                    
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section><!-- end hero-wrapper -->
<!-- ================================
    END HERO-WRAPPER AREA
================================= -->

<!-- ================================
    START INFO AREA
================================= -->
<section class="info-area info-bg info-area2 padding-top-80px padding-bottom-45px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                        <i class="las la-radiation"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Unique Atmosphere</h4>
                        <p class="info__desc">
                            Varius quam quisque id diam vel quam
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
             <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                        <i class="la la-tree"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Environment</h4>
                        <p class="info__desc">
                            Varius quam quisque id diam vel quam
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                        <i class="las la-map-marked-alt"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Great Location</h4>
                        <p class="info__desc">
                            Varius quam quisque id diam vel quam
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-4 text-color-5">
                        <i class="las la-bed"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Homey Comfort</h4>
                        <p class="info__desc">
                            Varius quam quisque id diam vel quam
                        </p>
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end info-area -->
<!-- ================================
    END INFO AREA
================================= -->

<!-- ================================
    START ABOUT AREA
================================= -->
<section class="about-area section--padding overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content pr-5">
                    <div class="section-heading">
                        <h4 class="font-size-16 pb-2">Our Story</h4>
                        <h2 class="sec__title">Atmosphere and Design</h2>
                        <p class="sec__desc pt-4 pb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                        <p class="sec__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus amet consectetur ipsa officia. Doloremque error porro sit soluta totam! A iste nobis vel voluptatem!</p>
                    </div><!-- end section-heading -->
                    <div class="btn-box pt-4">
                        <a href="about.html" class="theme-btn">Read More <i class="la la-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="image-box about-img-box">
                    <img src="<?= base_url('assets/images/img5.jpg') ?>" alt="about-img" class="img__item img__item-1">
                    <img src="<?= base_url('assets/images/tripadvisor.png') ?>" alt="about-img" class="img__item img__item-2">
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
    END ABOUT AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
    START ROOM TYPE AREA
================================= -->
<section class="room-type-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Find a Room Type</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-6">
                <div class="room-type-content">
                    <div class="image-box">
                        <a href="<?= base_url('item/hotel') ?>" class="d-block">
                            <img src="<?= base_url('assets/images/img27.jpg') ?>" alt="room type img" class="img__item">
                            <div class="room-type-link">
                                Hotel <i class="la la-arrow-right ml-2"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="room-type-content">
                    <div class="image-box">
                        <a href="<?= base_url('item/villa') ?>" class="d-block">
                            <img src="<?= base_url('assets/images/img28.jpg') ?>" alt="room type img" class="img__item">
                            <div class="room-type-link">
                                Villa <i class="la la-arrow-right ml-2"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
    END ROOM TYPE AREA
================================= -->

<!-- ================================
    START HOTEL AREA
================================= -->
<section class="hotel-area section-bg padding-top-100px padding-bottom-200px overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title line-height-55">Popular Hotel Destinations <br> You Might Like</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-12">
                <div class="hotel-card-wrap">
                    <div class="hotel-card-carousel-2 carousel-action">
                        <?php foreach ($hotel as $h): ?>
                        <div class="card-item">
                            <div class="card-img">
                                <a href="<?= base_url('detail/'.$h['item_id']) ?>" class="d-block">
                                    <img style="height: 220px" src="<?= base_url('assets/images/'.$h['item_thumbnail']) ?>" alt="<?= $h['item_thumbnail'] ?>">
                                </a>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="<?= base_url('detail/'.$h['item_id']) ?>"><?= $h['item_name'] ?></a></h3>
                                <p class="card-meta"><?= $h['item_address'] ?></p>
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    <p>
                                        <span class="price__num">Rp. <?= $h['item_price'] ?></span>
                                        <span class="price__text">Per night</span>
                                    </p>
                                    <a href="<?= base_url('detail/'.$h['item_id']) ?>" class="btn-text">See details<i class="la la-angle-right"></i></a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                        <?php endforeach; ?>
                    </div><!-- end hotel-card-carousel -->
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container-fluid -->
</section><!-- end hotel-area -->
<!-- ================================
    END HOTEL AREA
================================= -->

<!-- ================================
    START DISCOUNT AREA
================================= -->
<section class="discount-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="discount-box">
                    <div class="discount-img">
                        <img src="<?= base_url('assets/images/discount-hotel-img.jpg') ?>" alt="discount img">
                    </div><!-- end discount-img -->
                    <div class="discount-content">
                        <div class="section-heading">
                            <p class="sec__desc text-white">Hot deal, save 50%</p>
                            <h2 class="sec__title mb-0 line-height-50 text-white">Discount 50% for the <br> First Booking</h2>
                        </div><!-- end section-heading -->
                        <div class="btn-box pt-4">
                            <a href="#" class="theme-btn border-0">Learn More <i class="la la-arrow-right ml-1"></i></a>
                        </div>
                    </div><!-- end discount-content -->
                    <div class="company-logo">
                        <img src="<?= base_url('assets/images/logo2.png') ?>" alt="">
                        <p class="text-white font-size-14 text-right">*Terms applied</p>
                    </div><!-- end company-logo -->
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end discount-area -->
<!-- ================================
    END DISCOUNT AREA
================================= -->

<div class="section-block"></div>
<?= $this->endSection() ?>