<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Admin | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="<?= base_url('admin_assets/css/vendor.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('admin_assets/css/app.min.css') ?>" rel="stylesheet" />
  </head>
  <body class='pace-top'>
    <div id="app" class="app app-full-height app-without-header">
      <div class="login">
        <div class="login-content">
          <form action="<?= base_url('admin/loginProcess') ?>" method="POST">
            <h1 class="text-center">Sign In</h1>
            <div class="text-white text-opacity-50 text-center mb-4"> For your protection, please verify your identity. </div>
            <div class="mb-3">
              <label class="form-label">Email Address <span class="text-danger">*</span>
              </label>
              <input required type="email" name="email" class="form-control form-control-lg bg-white bg-opacity-5" value="" placeholder="" />
            </div>
            <div class="mb-3">
              <div class="d-flex">
                <label class="form-label">Password <span class="text-danger">*</span>
                </label>
                <a href="#" class="ms-auto text-white text-decoration-none text-opacity-50">Forgot password?</a>
              </div>
              <input required type="password" name="password" class="form-control form-control-lg bg-white bg-opacity-5" value="" placeholder="" />
            </div>
            <button required type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
          </form>
        </div>
      </div>
      <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade">
        <i class="fa fa-arrow-up"></i>
      </a>
      <div class="app-theme-panel">
        <div class="app-theme-panel-container">
          <a href="javascript:;" data-toggle="theme-panel-expand" class="app-theme-toggle-btn">
            <i class="bi bi-sliders"></i>
          </a>
          <div class="app-theme-panel-content">
            <div class="app-theme-list">
              <div class="app-theme-list-item">
                <a href="javascript:;" class="app-theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a>
              </div>
              <div class="app-theme-list-item">
                <a href="javascript:;" class="app-theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a>
              </div>
              <div class="app-theme-list-item">
                <a href="javascript:;" class="app-theme-list-link bg-warning" data-theme-class="theme-warning" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a>
              </div>
              <div class="app-theme-list-item">
                <a href="javascript:;" class="app-theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a>
              </div>
              <div class="app-theme-list-item">
                <a href="javascript:;" class="app-theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a>
              </div>
              <div class="app-theme-list-item">
                <a href="javascript:;" class="app-theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a>
              </div>
              <div class="app-theme-list-item active">
                <a href="javascript:;" class="app-theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a>
              </div>
              <div class="app-theme-list-item">
                <a href="javascript:;" class="app-theme-list-link bg-info" data-theme-class="theme-info" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a>
              </div>
              <div class="app-theme-list-item">
                <a href="javascript:;" class="app-theme-list-link bg-primary" data-theme-class="theme-primary" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a>
              </div>
              <div class="app-theme-list-item">
                <a href="javascript:;" class="app-theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a>
              </div>
              <div class="app-theme-list-item">
                <a href="javascript:;" class="app-theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a>
              </div>
              <div class="app-theme-list-item">
                <a href="javascript:;" class="app-theme-list-link bg-gray-100" data-theme-class="theme-gray-200" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray">&nbsp;</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?= base_url('admin_assets/js/vendor.min.js') ?>" type="01784fb063fbaca1b5cf8d8b-text/javascript"></script>
    <script src="<?= base_url('admin_assets/js/app.min.js') ?>" type="01784fb063fbaca1b5cf8d8b-text/javascript"></script>
    <script type="01784fb063fbaca1b5cf8d8b-text/javascript">
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
    </script>
    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') ?>" data-cf-settings="01784fb063fbaca1b5cf8d8b-|49" defer=""></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b840654cd5e483a","version":"2021.11.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
  </body>
</html>