<?= $this->include('include/top')?>
<?= $this->include('include/navbar')?>
<?php foreach ($product as $pr): ?>
    <div class="container">
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <center><img style="max-width: 400px;" class="img-fluid mb-4" src="<?php echo base_url() . "/img/" . $pr['productImg']; ?>" alt=""></center>
                        <h6 class="text-uppercase"><?= $pr['productName']; ?></h6>
                        <h6 class="text-primary mb-0"><?= $pr['productDescription'] ?></h6>
                        <label>Category</label>
                        <h6 class="text-primary mb-0"><?= $pr['productCategory'] ?></h6>
                        <label>Quantity</label>
                        <h6 class="text-primary mb-0"><?= $pr['productQuantity'] ?></h6>
                        <label>Price</label>
                        <h6 class="text-primary mb-0"><?= $pr['productPrice'] ?></h6>
                        <div class="btn-action d-flex justify-content-center">
                        </div>
                    </div>
                </div>
    </div>
                <?php endforeach; ?>
<?= $this->include('include/end')?>