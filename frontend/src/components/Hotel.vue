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
        <!-- Hero Start -->
  <div class="container-fluid bg-offer py-5 mb-5">
    <div class="container py-5">
      <div class="row justify-content-start">
        <div class="col-lg-8">
          <div class="border-start border-5 border-dark ps-5 mb-5">
            <h6 class="text-dark text-uppercase">Special Offer</h6>
            <h1 class="display-5 text-uppercase text-white mb-0">Save 50% off of your first Reservation!</h1>
          </div>
          <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
          <router-link to="#shop" class="btn btn-light py-md-3 px-md-5 me-3">Book Now</router-link>
          <router-link to="" class="btn btn-outline-light py-md-3 px-md-5">Read More</router-link>
        </div>
      </div>
    </div>
  </div>
    <!-- Hero End -->
<div>
    <!-- Products Start -->
    <div id="shop" class="container-fluid py-5">
      <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
          <h6 class="text-primary text-uppercase">Rooms</h6>
          <h1 class="display-5 text-uppercase mb-0">Search for the Best Deal!</h1>
        </div>
        <div class="owl-carousel product-carousel">
          <div v-for="pr in product" :key="pr.id" class="pb-5">
            <div class="product-item position-relative bg-light d-flex flex-column text-center">
              <img class="img-fluid mb-4" :src="getImageUrl(pr.roomImg)" alt="">
              <h6 class="text-uppercase">{{ pr.roomName }}</h6>
              <h6 class="text-primary mb-0">{{ pr.roomDescription }}</h6>
              <label><i class="bi bi-heart"></i></label>
              <h6 class="text-primary mb-0">{{ pr.roomHeart }}</h6>
              <label>Price</label>
              <h6 class="text-primary mb-0">{{ pr.roomPrice }}</h6>
              <div class="btn-action d-flex justify-content-center">
                <router-link class="btn btn-primary py-2 px-3" :to="'/book/' + pr.id"><i class="bi bi-book"></i></router-link>
                <button class="btn btn-primary py-2 px-3" @click="addToFavorites(pr.id)"><i class="bi bi-heart"></i></button>
                <router-link class="btn btn-primary py-2 px-3" :to="'/productview/' + pr.id"><i class="bi bi-eye"></i></router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Products End -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Your modal content goes here -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
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
      product: [], // Make sure to initialize or fetch the product data
    };
  },
  methods: {
    getImageUrl(img) {
      // Assuming you have a function to get the image URL
      return `${process.env.BASE_URL}img/${img}`;
    },
    addToFavorites(productId) {
      // Add logic to add product to favorites
    },
  },
};
</script>

<style scoped>
/* Add your component-specific styles here */
</style>