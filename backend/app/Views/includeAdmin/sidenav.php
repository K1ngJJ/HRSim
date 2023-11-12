<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Shop</div>
                            <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                <form action="/save" method="post">
                <div class="form-floating mb-3">
                  <input type="hidden" name="id" value="<?php if (isset($pro['id'])) {echo $pro['id'];} ?>">
                  <input type="file" class="form-control" name="roomImg" value="<?php if (isset($pro['roomImg'])) {echo $pro['roomImg'];} ?>">
                  <label for="floatingInput">Room Image</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="roomName" value="<?php if (isset($pro['roomName'])) {echo $pro['roomName'];} ?>">
                  <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="roomDescription" value="<?php if (isset($pro['roomDescription'])) {echo $pro['roomDescription'];} ?>">
                  <label for="floatingInput">Room Description</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" name="roomPrice" value="<?php if (isset($pro['roomPrice'])) {echo $pro['roomPrice'];} ?>">
                  <label for="floatingPassword">Room Price</label>
                </div>
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Add Room</button>
                  <div class="text-center">
                  </div>
                </div>
              </form>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Room Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($product as $pr): ?>
                                        <tr>
                                            <td><?= $pr['roomImg'] ?></td>
                                            <td><?= $pr['roomName'] ?></td>
                                            <td><?= $pr['roomPrice'] ?></td>
                                            <td><?= $pr['roomDescription'] ?></td>
                                            <td><a href="/delete/<?= $pr['id'] ?>"><i class='fas fa-trash' style='font-size:20px'></i></a> | <a href="/edit/<?= $pr['id'] ?>"><i class='fas fa-pen' style='font-size:20px'></i></a></td>
                                        </tr>
                                        <?php endforeach; ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        