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
                                    <li class="breadcrumb-item"><a href="<?= base_url('admin/image/'.$id) ?>">IMAGE</a></li>
                                    <li class="breadcrumb-item active">TAMBAH DATA</li>
                                </ul>
                                <h1 class="page-header">
                                    Tambah data gambar
                                </h1>
                                <hr class="mb-4" />

                                <div id="formControls" class="mb-5">
                                    <div class="card">
                                        <div class="card-body pb-2">
                                            <form method="post" action="<?= base_url('admin/image/addProcess') ?>" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-xl-3">
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
                                                            <div class="alert alert-success">
                                                                <?php echo session()->getFlashdata('berhasil');?>
                                                            </div>
                                                        <?php } ?>
                                                        <input type="hidden" name="id" value="<?= $id ?>">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="exampleFormControlFile1">Masukan gambar</label>
                                                            <input type="file" name="image_name"  class="form-control" id="exampleFormControlFile1" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3">
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