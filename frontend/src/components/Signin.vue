<template>
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hotel and Restaurant Booking Simulator</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="assets_hotel/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets_hotel/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets_hotel/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets_hotel/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets_hotel/css/style.css" rel="stylesheet">
    <link href="assets_hotel/css/signin.css" rel="stylesheet">
</head>
<body>
        <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <router-link to="/" class="navbar-brand ms-lg-5">
      <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>Hotel del Resto Simulator</h1>
    </router-link>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-0">
        <router-link to="/" class="nav-item nav-link" :class="{ active: currentRoute === '/' }">Home</router-link>
        <router-link to="/service" class="nav-item nav-link" :class="{ active: currentRoute === '/service' }">Service</router-link>
        <router-link to="/restaurant" class="nav-item nav-link" :class="{ active: currentRoute === '/restaurant' }">Restaurant</router-link>
        <router-link to="/signin" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Log out <i class="bi bi-arrow-right"></i></router-link>
      </div>
    </div>
    </nav>
    <!-- Navbar End -->
      
     <div class="container-fluid ps-md-0">
    <div class="row g-0">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4">Welcome back!</h3>
                <div v-if="flashMsg" class="alert alert-warning">
                  {{ flashMsg }}
                </div>

                <!-- Sign In Form -->
                <form @submit.prevent="login">
                  <div class="form-floating mb-3">
                    <input v-model="username" type="text" class="form-control" placeholder="Username">
                    <label for="floatingInput">Username</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input v-model="password" type="password" class="form-control" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>

                  <div class="d-grid">
                    <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">
                      Sign in
                    </button>
                    <div class="text-center">
                      <router-link to="/Signup" class="small">Don't have an account? Sign up</router-link>
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
</body>
</html>
</template>

<script>
export default {
  data() {
    return {
      username: '',
      password: '',
      flashMessage: '',
    };
  },
  methods: {
    async login() {
      // Add your login logic here
      // You can use this.username and this.password to get the entered values
      // Set this.flashMessage based on the login result or show error messages
    },
  },
};
</script>

<style scoped>
/* Add your component-specific styles here */
</style>