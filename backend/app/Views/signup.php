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
              <h3 class="login-heading mb-4">Get Started!</h3>
              <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                  <?= $validation->listErrors()?>
                </div>
                <?php endif;?>

              <!-- Sign In Form -->
              <form action="/register" method="post">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" value="<?= set_value('username')?>" name="username" placeholder="username">
                  <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" value="<?= set_value('email')?>" name="email" placeholder="email">
                  <label for="floatingEmail">Email</label>
                </div>
                <div class="form-floating mb-3">
                  <select class="form-control" name="usertype" id="usertype">
                    <option value="student">Student</option>
                    <option value="instructor">Instructor</option>
                    <option value="admin">Admin</option>
                  </select>
                  <label for="usertype">User Type</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="password" placeholder="password">
                  <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" placeholder="confirmpassword" name="confirmpassword">
                  <label for="floatingConfirmPassword">Confirm Password</label>
                </div>


                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Sign up</button>
                  <div class="text-center">
                    <a class="small" href="/signin">Already have an account? Sign in</a>
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