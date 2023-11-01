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
                                    <li class="breadcrumb-item"><a href="<?= base_url('admin/') ?>">CUSTOMER</a></li>
                                    <li class="breadcrumb-item active">TAMBAH DATA</li>
                                </ul>
                                <h1 class="page-header">
                                    Tambah data
                                </h1>
                                <hr class="mb-4" />

                                <div id="formControls" class="mb-5">
                                    <div class="card">
                                        <div class="card-body pb-2">
                                            <form method="post" action="<?= base_url('admin/customer/addProcess') ?>">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlInput1">Email</label>
                                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan email" name="email" required/>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlInput1">Password</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan password" name="password" required/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlInput1">Nama</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nama lengkap" name="name" required/>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlInput1">No Telepon</label>
                                                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukan no telepon" name="telp" required/>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlTextarea1">Alamat</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" placeholder="Masukan alamat" required></textarea>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div>
                                                    <button type="submit" class="btn btn-theme btn-lg" style="display: inline-block; width: 100%;">Tambah data</button>
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