<?= $this->extend('admin/template/index') ?>
<?= $this->section('content') ?>
<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>


<div id="content" class="app-content">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-10">

                <div class="row">

                    <div class="col-xl-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/') ?>">DASHBOARD</a></li>
                            <li class="breadcrumb-item active">BOOKING</li>
                        </ul>
                        <h1 class="page-header">
                            Data Booking
                            <a href="<?= base_url('admin/booking/add'); ?>" style="float: right" class="btn btn-theme">Tambah</a>
                        </h1>
                        <hr class="mb-4" />

                        <div id="datatable" class="mb-5">
                          <div class="card">
                                <div class="card-body">
                                    <table id="datatableDefault" class="table text-nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Hotel</th>
                                                <th>Tipe</th>
                                                <th>Harga</th>
                                                <th>Mulai - Selesai</th>
                                                <th>Bukti</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php $no=1; foreach($book as $u):?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $u['name'] ?></td>
                                                <td><?= $u['item_name'] ?></td>
                                                <td><?= $u['item_type'] ?></td>
                                                <td>Rp. <?= $u['booking_price'] ?></td>
                                                <td><?= $u['booking_date_start'] ?> - <?= $u['booking_date_start'] ?></td>
                                                <td><img src="<?= base_url('assets/images/proof/'.$u['booking_proof_of_payment']) ?>" alt="<?= $u['booking_proof_of_payment'] ?>" width="150" class="rounded" /></td>
                                                <td>
                                                    <?php if($u['booking_status'] == 'pending'){ ?>
                                                        <span class="badge bg-success"><?= $u['booking_status'] ?></span> <br> 
                                                        <a href="<?= base_url('admin/booking/'.$u['booking_id'].'/17/ongoing') ?>"><span class="badge bg-secondary">ongoing</span></a> <br> 
                                                        <a href="<?= base_url('admin/booking/'.$u['booking_id'].'/17done') ?>#"><span class="badge bg-secondary">done</span></a>
                                                    <?php } else if($u['booking_status'] == 'ongoing'){ ?>
                                                        <a href="<?= base_url('admin/booking/'.$u['booking_id'].'/17/pending') ?>"> <span class="badge bg-secondary">Pending</span> </a> <br>
                                                        <span class="badge bg-success"><?= $u['booking_status'] ?></span> <br> 
                                                        <a href="<?= base_url('admin/booking/'.$u['booking_id'].'/17/done') ?>"><span class="badge bg-secondary">done</span></a>
                                                    <?php } else if($u['booking_status'] == 'done'){ ?>
                                                        <a href="<?= base_url('admin/booking/'.$u['booking_id'].'/17/pending') ?>"> <span class="badge bg-secondary">pending</span> </a> <br> 
                                                        <a href="<?= base_url('admin/booking/'.$u['booking_id'].'/17/ongoing') ?>"><span class="badge bg-secondary">ongoing</span></a> <br>
                                                        <span class="badge bg-success"><?= $u['booking_status'] ?></span>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                  <a href="<?= base_url('admin/booking/edit/'.$u['booking_id']) ?>" class="btn btn-info">Ubah</a>
                                                  <a href="<?= base_url('admin/booking/delete/'.$u['booking_id']) ?>" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                          <?php $no++; endforeach;?>
                                        </tbody>
                                    </table>
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