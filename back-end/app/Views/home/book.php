<?= $this->extend('home/template/index') ?>
<?= $this->section('content') ?>
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">Booking</h2>
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
    START BOOKING AREA
================================= -->
<section class="booking-area padding-top-100px padding-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title">Your Personal Information</h3>
                    </div><!-- form-title-wrap -->
                    <form method="post" action="<?php echo base_url('book/process'); ?>" enctype="multipart/form-data">
                    <div class="form-content ">
                        <div class="contact-form-action">
                            <input required type="hidden" name="item_id" value="<?= $item_id ?>">
                            <input required type="hidden" name="booking_price" value="<?= $totalPrice2 ?>">
                            <input required type="hidden" name="booking_date_start" value="<?= $start ?>">
                            <input required type="hidden" name="booking_date_end" value="<?= $end ?>">
                                <div class="row">
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Name</label>
                                            <div class="form-group">
                                                <span class="la la-user form-icon"></span>
                                                <?php if(isset($_SESSION['logged_in'])) { ?>
                                                <input disabled required class="form-control" type="text" name="name" placeholder="Full Name" value="<?= $user->name ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Phone Number</label>
                                            <div class="form-group">
                                                <span class="la la-phone form-icon"></span>
                                                <?php if(isset($_SESSION['logged_in'])) { ?>
                                                <input required type="hidden" name="user_id" value="<?= $user->user_id ?>">
                                                <input disabled required class="form-control" type="number" name="telp" placeholder="Phone Number" value="<?= $user->telp ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Your Email</label>
                                            <div class="form-group">
                                                <span class="la la-envelope-o form-icon"></span>
                                                <?php if(isset($_SESSION['logged_in'])) { ?>
                                                <input disabled required class="form-control" type="email" name="email" placeholder="Email address" value="<?= $user->email ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Password</label>
                                            <div class="form-group">
                                                <span class="la la-user form-icon"></span>
                                                <?php if(isset($_SESSION['logged_in'])) { ?>
                                                <input disabled required class="form-control" type="password" name="password" placeholder="Password" value="<?= $user->password ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Address Line</label>
                                            <div class="form-group">
                                                <span class="la la-map-marked form-icon"></span>
                                                <?php if(isset($_SESSION['logged_in'])) { ?>
                                                <input disabled required class="form-control" type="text" name="address" placeholder="Address line" value="<?= $user->address ?>">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <?php if(!isset($_SESSION['logged_in'])) { 
                                    
                                    echo '<script>
                                            alert("Harap login dahulu.");
                                            window.location="'.base_url('/').'"
                                        </script>';
                                    } ?>
                                </div>
                        </div><!-- end contact-form-action -->
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <?php if(isset($_SESSION['logged_in'])) : ?>
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title">Select Payment Method</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content">
                        <div class="section-tab check-mark-tab text-center pb-4">
                            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="credit-card-tab" data-toggle="tab" href="#credit-card" role="tab" aria-controls="credit-card" aria-selected="false">
                                        <i class="la la-check icon-element"></i>
                                        <img src="<?= base_url('assets/images/payment-img.png') ?>" alt="">
                                        <span class="d-block pt-2">Payment</span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end section-tab -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="credit-card" role="tabpanel" aria-labelledby="credit-card-tab">
                                <div class="contact-form-action">
                                        <div class="row">
                                            <div class="col-lg-12 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Silahkan bayar ke no berikut</label>
                                                    <div class="form-group">
                                                        <span class="la la-credit-card form-icon"></span>
                                                        <!-- <input required class="form-control" type="text" name="booking_payment_method" placeholder="Payment method (Ovo/Dana/Gopay)"> -->
                                                        <div class="form-group select-contain w-100">
                                                            <select class="form-control" name="booking_payment_method" id="" required>
                                                                <?php foreach ($payment as $p): ?>
                                                                <option value="<?= $p['payment_name'] ?>"><?= $p['payment_name'] ?> - <?= $p['payment_number'] ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <label class="label-text">Bukti pembayaran</label>
                                                    <div class="col-lg-12">
                                                        <div class="file-upload-wrap">
                                                            <input required type="file" name="booking_proof_of_payment" class="multi file-upload-input with-preview" multiple maxlength="3">
                                                            <span class="file-upload-text"><i class="la la-upload mr-2"></i>Click or drag images here to upload</span>
                                                        </div>
                                                    </div><!-- end col-lg-12 -->
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-12">
                                                <div class="btn-box">
                                                    <button class="theme-btn" type="submit">Confirm Booking</button>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </div>
                                </div><!-- end contact-form-action -->
                            </div><!-- end tab-pane-->
                        </div><!-- end tab-content -->
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <?php endif ?>
            </div><!-- end col-lg-8 -->

            </form>

            <div class="col-lg-4">
                <div class="form-box booking-detail-form">
                    <div class="form-title-wrap">
                        <h3 class="title">Booking Details</h3>
                    </div><!-- end form-title-wrap -->
                    <div class="form-content">
                        <div class="card-item shadow-none radius-none mb-0">
                            <div class="card-img pb-4">
                                <a href="tour-details.html" class="d-block">
                                    <img src="<?= base_url('assets/images/img11.jpg') ?>" alt="tour-img">
                                </a>
                            </div>
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3 class="card-title"><?= $hotel[0]['item_name'] ?></h3>
                                    </div>
                                </div>
                                <div class="section-block"></div>
                                <ul class="list-items list-items-2 list-items-flush py-2">
                                    <li class="font-size-15"><span class="w-auto d-block mb-n1"><i class="la la-calendar mr-1 text-black font-size-17"></i>Check in</span><?= $start ?></li>
                                    <li class="font-size-15"><span class="w-auto d-block mb-n1"><i class="la la-calendar mr-1 text-black font-size-17"></i>Check out</span><?= $end ?></li>
                                    <li class="font-size-15"><span class="w-auto d-block mb-n1"><i class="la la-clock-o mr-1 text-black font-size-17"></i>Duration</span><?= $total ?> day</li>
                                    <li class="font-size-15"><span class="w-auto d-block mb-n1"><i class="la la-map-marker mr-1 text-black font-size-17"></i>Location</span><?= $hotel[0]['item_address'] ?></li>
                                </ul>
                                <h3 class="card-title pb-3">Order Details</h3>
                                <div class="section-block"></div>
                                <div class="section-block"></div>
                                <ul class="list-items list-items-2 pt-3">
                                    <li><span>Sub Total:</span>Rp. <?= $totalPrice ?></li>
                                    <li><span>Taxes And Fees:</span>Rp. 15.000</li>
                                    <li><span>Total Price:</span>Rp. <?= $totalPrice2 ?></li>
                                </ul>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end booking-area -->
<!-- ================================
    END BOOKING AREA
================================= -->

<div class="section-block"></div>

<?= $this->endSection() ?>