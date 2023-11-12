<?= $this->include('include/top')?>
<?= $this->include('include/navbar')?>
<div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Welcome back!</h3>
              <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-warning">
                  <?= session()->getFlashdata('msg')?>
                </div>
                <?php endif;?>

              <!-- Sign In Form -->
              <form action="/LoginAuth" method="post">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="username" value="<?= set_value('username')?>" placeholder="username">
                  <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>

                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Sign in</button>
                  <div class="text-center">
                    <a class="small" href="/registerview">Don't have an account? Sign up</a>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->include('include/end')?>