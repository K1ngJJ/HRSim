<?= $this->extend('admin/template/index') ?>
<?= $this->section('content') ?>
<div id="content" class="app-content">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-xl-10">

                        <div class="row">

                            <div class="col-xl-12">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('admin/') ?>">DASHBOARD</a></li>
                                    <li class="breadcrumb-item"><a href="<?= base_url('admin/booking') ?>">BOOKING</a></li>
                                    <li class="breadcrumb-item active">UBAH DATA</li>
                                </ul>
                                <h1 class="page-header">
                                    Ubah data
                                </h1>
                                <hr class="mb-4" />

                                <div id="formControls" class="mb-5">
                                    <div class="card">
                                        <div class="card-body pb-2">
                                            <form method="post" action="<?= base_url('admin/booking/editProcess') ?>" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group mb-3">
                                                            <input type="hidden" name="id" value="<?= $book->booking_id ?>">
                                                            <label class="form-label" for="exampleFormControlInput1">Nama Hotel/Villa</label>
                                                            <select class="form-select" name="item_id" required>
                                                                <option value="<?= $book->item_id ?>" selected><?= $hotel[0]['item_name'] ?></option>
                                                                <option disabled>-----------------------</option>
                                                                <?php foreach ($hotels as $h): ?>
                                                                <option value="<?= $h['item_id'] ?>"><?= $h['item_name'] ?></option>
                                                                <?php endforeach; ?> 
                                                            </select>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlInput1">Nama Customer</label>
                                                            <select class="form-select" name="user_id" required>
                                                                <option value="<?= $user[$book->item_id]['user_id'] ?>" selected><?= $user[$book->item_id]['name'] ?></option>
                                                                <option disabled>-----------------------</option>
                                                                <?php foreach ($users as $u): ?>
                                                                <option value="<?= $u['user_id'] ?>"><?= $u['name'] ?></option>
                                                                <?php endforeach; ?> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlInput1">Mulai - Akhir</label>
                                                            <div class="input-group input-daterange" id="datepicker">
                                                                <input type="text" class="form-control" name="booking_date_start" placeholder="start date" required value="<?= $book->booking_date_start ?>" />
                                                                <span class="input-group-text">to</span>
                                                                <input type="text" class="form-control" name="booking_date_end" placeholder="end date" required value="<?= $book->booking_date_end ?>"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlFile1">Bukti Pembayaran</label>
                                                            <input type="file" name="booking_proof_of_payment" required class="form-control" id="exampleFormControlFile1" value="<?= $book->booking_date_start ?>"/>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div>
                                                    <button type="submit" class="btn btn-theme btn-lg" style="display: inline-block; width: 100%;">Ubah data</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-arrow">
                                            <div class="card-arrow-top-left"></div>
                                            <div class="card-arrow-top-right"></div>
                                            <div class="card-arrow-bottom-left"></div>
                                            <div class="card-arrow-bottom-right"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
<?= $this->endSection() ?>