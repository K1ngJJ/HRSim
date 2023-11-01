<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Hotel de Resto | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link href="<?= base_url('admin_assets/css/vendor.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('admin_assets/css/app.min.css') ?>" rel="stylesheet" />


    <link href="<?= base_url('admin_assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('admin_assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('admin_assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('admin_assets/plugins/bootstrap-table/dist/bootstrap-table.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('admin_assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>

<body data-bs-spy='scroll' data-bs-target='#sidebar-bootstrap' data-bs-offset='200'>

    <div id="app" class="app">

        <div id="header" class="app-header">

            <div class="desktop-toggler">
                <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>


            <div class="mobile-toggler">
                <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>


            <div class="brand">
                <a href="#" class="brand-logo">
                    <span class="brand-img">
                        <span class="brand-img-text text-theme">H</span>
                    </span>
                    <span class="brand-text">HRS ADMIN</span>
                </a>
            </div>


            <div class="menu">
                <div class="menu-item dropdown dropdown-mobile-full">
                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
                        <div class="menu-img online">
                            <img src="<?= base_url('admin_assets/img/user/profile.jpg') ?>" height="60px" />
                        </div>
                        <div class="menu-text d-sm-block d-none"><span class="__cf_email__" data-cfemail="c1b4b2a4b3afa0aca481a0a2a2aeb4afb5efa2aeac"><?= $_SESSION['email'] ?></span></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
                        <a href="<?= base_url('admin/logout') ?>" class="dropdown-item d-flex align-items-center" href="#">LOGOUT <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
                    </div>
                </div>
            </div>


            <form class="menu-search" method="POST" name="header_search_form">
                <div class="menu-search-container">
                    <div class="menu-search-icon"><i class="bi bi-search"></i></div>
                    <div class="menu-search-input">
                        <input type="text" class="form-control form-control-lg" placeholder="Search menu..." />
                    </div>
                    <div class="menu-search-icon">
                        <a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i class="bi bi-x-lg"></i></a>
                    </div>
                </div>
            </form>

        </div>


        <div id="sidebar" class="app-sidebar">

            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

                <div class="menu">
                    <div class="menu-header">Table</div>
                    <div class="menu-item">
                        <a href="<?= base_url('admin') ?>" class="menu-link">
                            <span class="menu-icon"><i class="bi bi-grid-3x3"></i></span>
                            <span class="menu-text">Customer</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="<?= base_url('admin/admin') ?>" class="menu-link">
                            <span class="menu-icon"><i class="bi bi-grid-3x3"></i></span>
                            <span class="menu-text">Admin</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="<?= base_url('admin/hotel') ?>" class="menu-link">
                            <span class="menu-icon"><i class="bi bi-grid-3x3"></i></span>
                            <span class="menu-text">Hotel</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="<?= base_url('admin/booking') ?>" class="menu-link">
                            <span class="menu-icon"><i class="bi bi-grid-3x3"></i></span>
                            <span class="menu-text">Booking</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>




        <?= $this->renderSection('content') ?>



        
        <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>


        <div class="app-theme-panel">
            <div class="app-theme-panel-container">
                <a href="javascript:;" data-toggle="theme-panel-expand" class="app-theme-toggle-btn"><i class="bi bi-sliders"></i></a>
                <div class="app-theme-panel-content">

                    <div class="app-theme-list">
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-warning" data-theme-class="theme-warning" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
                        <div class="app-theme-list-item active"><a href="javascript:;" class="app-theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-info" data-theme-class="theme-info" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-primary" data-theme-class="theme-primary" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-gray-100" data-theme-class="theme-gray-200" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray">&nbsp;</a></div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="<?= base_url('admin_assets/js/vendor.min.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/js/app.min.js') ?>" ></script>


    <script src="<?= base_url('admin_assets/plugins/highlight.js/highlight.min.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/js/demo/highlightjs.demo.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/plugins/datatables.net/js/jquery.dataTables.min.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/plugins/datatables.net-buttons/js/buttons.flash.min.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/plugins/datatables.net-buttons/js/buttons.html5.min.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/plugins/datatables.net-buttons/js/buttons.print.min.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/plugins/bootstrap-table/dist/bootstrap-table.min.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/js/demo/table-plugins.demo.js') ?>" ></script>
    <script src="<?= base_url('admin_assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>

    <script >
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-53034621-1', 'auto');
        ga('send', 'pageview');
        
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
        });
    </script>
    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js'" data-cf-settings="f7b55e10a696a08f320af0fa-|49" defer=""></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b840638ab90483a","version":"2021.11.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
</body>

</html>