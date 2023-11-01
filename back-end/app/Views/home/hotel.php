<?= $this->extend('home/template/index') ?>
<?= $this->section('content') ?>
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-7">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title text-white"><?= $hotel[0]['item_type'] ?></h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START CARD AREA
================================= -->
<section class="card-area section--padding">
    <div class="container">
        <div class="row">
            <?php foreach ($hotel as $h) : ?>
            <div class="col-lg-4 responsive-column">
                <div class="card-item">
                    <div class="card-img">
                        <a href="<?= base_url('detail/'.$h['item_id']) ?>" class="d-block">
                            <img style="height: 220px" src="<?= base_url('assets/images/'.$h['item_thumbnail']) ?>" alt="<?= $h['item_thumbnail'] ?>">
                        </a>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="hotel-single.html"><?= $h['item_name'] ?></a></h3>
                        <p class="card-meta"><?= $h['item_address'] ?></p>
                        <div class="card-price d-flex align-items-center justify-content-between">
                            <p>
                                <span class="price__from">From</span>
                                <span class="price__num">Rp. <?= $h['item_price'] ?></span>
                                <span class="price__text">Per night</span>
                            </p>
                            <a href="<?= base_url('detail/'.$h['item_id']) ?>" class="btn-text">See details<i class="la la-angle-right"></i></a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <?php endforeach; ?>
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box mt-3 text-center">
                    <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>Load More</button>
                    <p class="font-size-13 pt-2">Showing 1 - 6 of 2224 Hotels</p>
                </div><!-- end btn-box -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->
<?= $this->endSection() ?>