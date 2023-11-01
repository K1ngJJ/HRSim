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
                                    <li class="breadcrumb-item"><a href="<?= base_url('admin/hotel') ?>">HOTEL</a></li>
                                    <li class="breadcrumb-item active">UBAH DATA</li>
                                </ul>
                                <h1 class="page-header">
                                    Ubah data
                                </h1>
                                <hr class="mb-4" />

                                <div id="formControls" class="mb-5">
                                    <div class="card">
                                        <div class="card-body pb-2">
                                            <form method="post" action="<?= base_url('admin/hotel/editProcess') ?>" enctype="multipart/form-data">
                                                <input type="hidden" name="id" value="<?= $item[0]['item_id'] ?>">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlInput1">Nama</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nama" name="item_name" value="<?= $item[0]['item_name'] ?>" required/>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlInput1">Tipe</label><br>
                                                            <div class="form-check form-check-inline">
                                                                <?php if($item[0]['item_type'] == 'hotel'): ?>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" name="item_type" type="radio" id="inlineRadio1" value="hotel" checked/>
                                                                        <label class="form-check-label" for="inlineRadio1">Hotel</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" name="item_type" type="radio" id="inlineRadio2" value="villa" />
                                                                        <label class="form-check-label" for="inlineRadio2">Villa</label>
                                                                    </div>
                                                                <?php else: ?>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" name="item_type" type="radio" id="inlineRadio1" value="hotel"/>
                                                                        <label class="form-check-label" for="inlineRadio1">Hotel</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" name="item_type" type="radio" id="inlineRadio2" value="villa" checked/>
                                                                        <label class="form-check-label" for="inlineRadio2">Villa</label>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlInput1">Kota</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan kota" name="item_city" value="<?= $item[0]['item_city'] ?>" required/>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlTextarea1">Alamat</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="item_address"required placeholder="Masukan alamat"><?= $item[0]['item_address'] ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlInput1">Harga</label>
                                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukan harga" name="item_price" value="<?= $item[0]['item_price'] ?>" required/>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlTextarea1">Deskripsi</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="item_desc" placeholder="Masukan deskripsi" required><?= $item[0]['item_desc'] ?></textarea>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlTextarea1">Fasilitas</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="item_facility" placeholder="Masukan fasilitas" required><?= $item[0]['item_facility'] ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlFile1">Masukan gambar</label>
                                                            <input type="file" name="item_thumbnail"  class="form-control" id="exampleFormControlFile1" />
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