<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mdb.min.css') }}">
    <style>
      .icon-hover:hover {
        border-color: #3b71ca !important;
        background-color: white !important;
      }

      .icon-hover:hover i {
        color: #3b71ca !important;
      }
    </style>
  </head>
  <body>
    <!--Main Navigation-->
    <header>
      <!-- Jumbotron -->
      <div class="p-4 text-center bg-white border-bottom shadow mb-3">
        <div class="container">
          <div class="row gy-3">
            <!-- Left elements -->
            <div class="col-lg-2 col-sm-4 col-4">
              <a href="{{ route('index') }}"  class="float-start">
                <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="35" />
              </a>
            </div>
            <!-- Left elements -->

            <!-- Center elements -->
            <div class="order-lg-last col-lg-5 col-sm-8 col-8">
              <div class="d-flex float-end">
                <a href="{{ route('cart') }}" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center"> <i class="fas fa-shopping-cart m-1 me-md-2"></i><p class="d-none d-md-block mb-0">My cart</p> </a>
                @if (Auth::check())
                <a href="{{ route('logout') }}" class="border rounded py-1 px-3 nav-link d-flex align-items-center"> <i class="fas fa-sign-out m-1 me-md-2"></i><p class="d-none d-md-block mb-0">Sign Out</p> </a>                    
                @else
                <a href="{{ route('login') }}" class="border rounded py-1 px-3 nav-link d-flex align-items-center"> <i class="fas fa-user-alt m-1 me-md-2"></i><p class="d-none d-md-block mb-0">Sign in</p> </a>                    
                @endif
              </div>
            </div>
            <!-- Center elements -->

            <!-- Right elements -->
            <div class="col-lg-5 col-md-12 col-12">
              <div class="input-group float-center">
                <div class="form-outline border">
                  <input type="search" id="form1" class="form-control " />
                  <label class="form-label" for="form1">Search</label>
                </div>
                <button type="button" class="btn btn-primary shadow-0">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
            <!-- Right elements -->
          </div>
        </div>
      </div>
      <!-- Jumbotron -->
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted pt-5">
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5 mb-4">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-12 col-lg-3 col-sm-12">
              <!-- Content -->
              <a href="https://mdbootstrap.com/" target="_blank" class="ms-md-2">
                <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="35" />
              </a>
              <p class="mt-3">
                © 2023 Copyright. Theme by MDBootstrap.com.
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-6 col-sm-4 col-lg-2">
              <!-- Links -->
              <h6 class="text-uppercase text-dark fw-bold mb-2">
                Store
              </h6>
              <ul class="list-unstyled mb-4">
                <li><a class="text-muted" href="#">About us</a></li>
                <li><a class="text-muted" href="#">Find store</a></li>
                <li><a class="text-muted" href="#">Categories</a></li>
                <li><a class="text-muted" href="#">Blogs</a></li>
              </ul>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-6 col-sm-4 col-lg-2">
              <!-- Links -->
              <h6 class="text-uppercase text-dark fw-bold mb-2">
                Information
              </h6>
              <ul class="list-unstyled mb-4">
                <li><a class="text-muted" href="#">Help center</a></li>
                <li><a class="text-muted" href="#">Money refund</a></li>
                <li><a class="text-muted" href="#">Shipping info</a></li>
                <li><a class="text-muted" href="#">Refunds</a></li>
              </ul>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-6 col-sm-4 col-lg-2">
              <!-- Links -->
              <h6 class="text-uppercase text-dark fw-bold mb-2">
                Support
              </h6>
              <ul class="list-unstyled mb-4">
                <li><a class="text-muted" href="#">Help center</a></li>
                <li><a class="text-muted" href="#">Documents</a></li>
                <li><a class="text-muted" href="#">Account restore</a></li>
                <li><a class="text-muted" href="#">My orders</a></li>
              </ul>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-12 col-sm-12 col-lg-3">
              <!-- Links -->
              <h6 class="text-uppercase text-dark fw-bold mb-2">Our apps</h6>
              <a href="#" class="mb-2 d-inline-block"> <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/misc/btn-appstore.webp" height="38" /></a>
              <a href="#" class="mb-2 d-inline-block"> <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/misc/btn-market.webp" height="38" /></a>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
      <div class="container">
        <div class="py-4 border-top">
          <div class="d-flex justify-content-between">
            <!--- payment --->
            <div class="text-dark">
              <i class="fab fa-lg fa-cc-visa"></i>
              <i class="fab fa-lg fa-cc-amex"></i>
              <i class="fab fa-lg fa-cc-mastercard"></i>
              <i class="fab fa-lg fa-cc-paypal"></i>
            </div>
            <!--- payment --->
          </div>
        </div>
      </div>
    </footer>

    @if (session('msg'))
    <div class="toast-container position-fixed top-0 end-0 p-3 " >
      <div id="liveToast" class="toast show border border-2 border-dark" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header border-bottom border-2 border-dark bg-primary text-light">
          <i class="bi bi-bell-fill"></i> 
          <strong class="me-auto ms-2">Notification</strong>
          <small>Now</small>
          <button type="button" class="btn-close bg-light p-2" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          {{ session('msg') }}
        </div>
      </div>
    </div>
    @endif

    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
      setTimeout(function () {
        $("#liveToast").removeClass("show");
      }, 3000);
    </script>
  </body>
</html>