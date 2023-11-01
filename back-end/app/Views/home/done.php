<?= $this->extend('home/template/index') ?>
<?= $this->section('content') ?>
<section class="payment-area section-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-box payment-received-wrap mb-0">
                    <div class="form-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="payment-received-list">
                                    <h3 class="title font-size-24"><?= $book->item_name ?></h3>
                                    <ul class="list-items list-items-2 py-3">
                                        <li><span>Location:</span><?= $book->item_address ?></li>
                                        <li><span>Check-in:</span><?= $book->booking_date_start ?></li>
                                        <li><span>Check-out:</span><?= $book->booking_date_end ?></li>
                                        <li><span>Booking details:</span><?= $total ?> day</li>
                                        <li><span>Type:</span><?= $book->item_type ?></li>
                                        <li><span>Client:</span><?= $book->name ?></li>
                                    </ul>
                                </div><!-- end card-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="card-item card-item-list payment-received-card">
                                    <div class="card-img">
                                        <img src="<?= base_url('assets/images/'.$book->item_thumbnail) ?>" alt="hotel-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-price pb-3">
                                            <span class="price__num">Rp. <?= $book->item_price ?></span>
                                            <span class="price__text">Per night</span>
                                        </div>
                                        <div class="section-block"></div>
                                        <p class="card-text pt-3">Hotel tax Rp. 15000 not included</p>
                                    </div>
                                </div><!-- end card-item -->
                            </div><!-- end col-lg-6 -->
                        </div><!-- end row -->
                         <div class="row">
                            <div class="col-lg-6">
                                <div class="payment-received-list">
                                    <h3 class="title">Received</h3>
                                    <p>Thank you. Your order has been received</p>
                                    <div class="table-form table-responsive pt-3 pb-3">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Order</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">#<?= $book->booking_id ?></th>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title"><?= $book->booking_date_start ?></h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-content">
                                                        <h3 class="title"><?= $totalPrice ?></h3>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p>Make your payment derectly into our bank account. Please ues your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account</p>
                                </div><!-- end card-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="payment-received-list">
                                    <h3 class="title">Payment Detail</h3>
                                    <div class="table-form table-layout-2 table-responsive pt-3">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Hotel</th>
                                                <th scope="col" class="text-right">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="table-content">
                                                        <p class="title pb-2"><?= $book->item_name ?></p>
                                                        <p class="font-size-13 text-gray line-height-20 font-weight-medium"><span class="mr-2 color-text-2">Start Date:</span><?= $book->booking_date_start ?></p>
                                                        <p class="font-size-13 text-gray line-height-20 font-weight-medium"><span class="mr-2 color-text-2">End Date:</span><?= $book->booking_date_end ?></p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="table-content text-right">
                                                        <h3 class="title color-text">Rp. <?= $book->item_price ?></h3>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="table-content">
                                                        <p class="title">Subtotal</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="table-content text-right">
                                                        <h3 class="title color-text">Rp. <?= $book->item_price ?></h3>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="table-content">
                                                        <p class="title">Order Total</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="table-content text-right">
                                                        <h3 class="title color-text">Rp. <?= $totalPrice ?></h3>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end card-item -->
                            </div><!-- end col-lg-6 -->
                             <div class="col-lg-12">
                                 <div class="section-block mt-3"></div>
                                 <div class="btn-box text-center pt-4">
                                     <a href="<?= base_url('/') ?>" class="theme-btn">Book Complete</a>
                                 </div>
                             </div>
                        </div><!-- end row -->
                    </div>
                </div><!-- end payment-card -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<?= $this->endSection() ?>