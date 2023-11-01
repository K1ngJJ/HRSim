<?= $this->extend('home/template/index') ?>
<?= $this->section('content') ?>

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-7 py-0">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-btn">
                        <div class="btn-box">
                            <a class="theme-btn" data-src="<?= base_url('assets/images/'.$hotel[0]['item_thumbnail']) ?>"
                               data-fancybox="gallery"
                               data-caption="Showing image - 01"
                               data-speed="700">
                                <i class="la la-photo mr-2"></i>More Photos
                            </a>
                        </div>
                        <?php foreach ($image as $i): ?>
                        <a class="d-none"
                             data-fancybox="gallery"
                             data-src="<?= base_url('assets/images/'.$i['image_name']) ?>"
                             data-caption="Showing image - 02"
                             data-speed="700"></a>
                        <?php endforeach ?>
                    </div><!-- end breadcrumb-btn -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START TOUR DETAIL AREA
================================= -->
<section class="tour-detail-area padding-bottom-90px">
    <!-- end single-content-navbar-wrap -->
    <div class="single-content-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content-wrap padding-top-60px">
                        <div id="description" class="page-scroll">
                            <div class="single-content-item pb-4">
                                <h3 class="title font-size-26"><?= $hotel[0]['item_name'] ?></h3>
                                <div class="d-flex align-items-center pt-2">
                                    <p class="mr-2"><?= $hotel[0]['item_address'] ?></p>
                                </div>
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                            <!-- end single-content-item -->
                            <div class="section-block"></div>
                            <div class="single-content-item padding-top-40px padding-bottom-40px">
                                <h3 class="title font-size-20">About <?= $hotel[0]['item_name'] ?></h3>
                                <p class="py-3"><?= $hotel[0]['item_desc'] ?></p>
                            </div><!-- end single-content-item -->
                            <div class="section-block"></div>
                        </div><!-- end description -->
                    </div><!-- end single-content-wrap -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar single-content-sidebar mb-0">
                        <div class="sidebar-widget single-content-widget">
                            <div class="sidebar-widget-item">
                                <div class="sidebar-book-title-wrap mb-3">
                                    <h3>Popular</h3>
                                    <p><span class="text-form">Rp. </span><span class="text-value ml-2 mr-1"><?= $hotel[0]['item_price'] ?></span></p>
                                </div>
                            </div><!-- end sidebar-widget-item -->
                            <div class="sidebar-widget-item">
                                <div class="contact-form-action">
                                    <form action="<?= base_url('book/'.$hotel[0]['item_id']) ?>" method="post">
                                        
                                    <div class="input-group input-daterange" id="datepicker">
                                        <input type="text" class="form-control" name="booking_date_start" placeholder="start date" required/>
                                        <span class="input-group-text">to</span>
                                        <input type="text" class="form-control" name="booking_date_end" placeholder="end date" required/>
                                    </div>
                                </div>
                            </div><!-- end sidebar-widget-item -->
                            <div class="btn-box pt-2">
                                <button type="submit" class="theme-btn text-center w-100 mb-2"><i class="la la-shopping-cart mr-2 font-size-18"></i>Book Now</button>
                            </div>
                                    </form>
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end single-content-box -->
</section><!-- end tour-detail-area -->
<!-- ================================
    END TOUR DETAIL AREA
================================= -->

<div class="section-block"></div>

<?= $this->endSection() ?>