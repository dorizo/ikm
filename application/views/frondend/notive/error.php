<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Synrok - Mobile HTML Template</title>

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?=base_url("thames")?>/plugins/metismenu/metisMenu.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url("thames")?>/plugins/metismenu/mm-vertical.css" />
     <link rel="stylesheet" type="text/css" href="<?=base_url("thames")?>/plugins/slick/slick.css" />
     <link rel="stylesheet" type="text/css" href="<?=base_url("thames")?>/plugins/slick/slick-theme.css" />

    <!--CSS Files-->
    <link href="<?=base_url("thames")?>/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="<?=base_url("thames")?>/css/style.css" rel="stylesheet"/>
    <link href="<?=base_url("thames")?>/css/dark-theme.css" rel="stylesheet"/>
  </head>
  <body>

    <!--page loader-->
    <div class="loader-wrapper">
      <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
        <div class="spinner-border text-white" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>
   <!--end loader-->

   <!--start wrapper-->
    <div class="wrapper">

       <!--start to header-->
       <header class="top-header fixed-top border-bottom d-flex align-items-center">
        <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
          <!-- <div class="nav-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidenav"><a href="javascript:;"><i class="bi bi-list"></i></a></div> -->
            <div class="nav-button" onclick="history.back()"><a href="javascript:;"><i class="bi bi-arrow-left"></i></a></div>
            <!-- <div class="shop-Completed">
              <h6 class="mb-0 fw-bold text-dark">Payment Completed</h6>
            </div>
            <form class="searchbar">
              <div class="position-absolute top-50 translate-middle-y search-icon start-0 ms-4"><i class="bi bi-search"></i></div>
              <input class="form-control px-5" type="text" placeholder="Search for anything">
              <div class="position-absolute top-50 translate-middle-y end-0 search-close-icon me-4"><i class="bi bi-x-lg"></i></div>
            </form>
            <ul class="navbar-nav ms-auto d-flex align-items-center top-right-menu">
              <li class="nav-item mobile-search-button">
                <a class="nav-link" href="javascript:;"><i class="bi bi-search"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="wishlist.html"><i class="bi bi-heart"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link position-relative" href="cart.html">
                  <div class="cart-badge">8</div>
                  <i class="bi bi-bag"></i>
                </a>
              </li>
            </ul> -->
        </nav>
       </header>
        <!--end to header-->

      <!--start to page content-->
       <div class="page-content">

         <div class="page-content">

            <div class="card rounded-3 border-0 bg-transparent">
            <div class="card-body">
                <div class="text-center error-img">
                    <img src="assets/images/social-icons/error.webp" width="80" alt="">
                    <h5 class="text-dark mt-4 fw-bold">Error!</h5>
                    <p class="mb-0"><?=$title?></p>
                </div>
            </div>
            </div>

            </div>
<!--end to page content-->

     <!--end to page content-->

      <!--start to footer-->
      <footer class="page-footer fixed-bottom border-top d-flex align-items-center px-0">
        <div class="short-by w-100">
          <a onclick="history.back()" class="btn btn-ecomm p-0 block-button">KEMBALI</a>
        </div>
        <div class="filter-btn bg-dark w-100">
          <a href="<?=base_url("register")?>" class="btn btn-ecomm p-0 text-white block-button">DAFTAR</a>
        </div>
      </footer>
      <!--end to footer-->

      <!--start sidenav-->
     <div class="sidenav">
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidenav">
       <div class="offcanvas-header bg-dark border-bottom border-light">
          <div class="hstack gap-3">
              <div class="">
                <img src="https://via.placeholder.com/110X110" width="45" class="rounded-3 p-1 bg-white" alt=""/>
              </div>
              <div class="details">
                <h6 class="mb-0 text-white">Hi! Jhon Deo</h6>
              </div>
          </div>
         <div data-bs-dismiss="offcanvas"><i class="bi bi-x-lg fs-5 text-white"></i></div>
       </div>
       <div class="offcanvas-body p-0">
         <nav class="sidebar-nav">
           <ul class="metismenu" id="sidenav">
             <li>
               <a href="home.html">
                  <i class="bi bi-house-door me-2"></i>
                   Home
                </a>
             </li>
             <li>
               <a class="has-arrow" href="javascript:;">
                 <i class="bi bi-person-circle me-2"></i>
                   Account
               </a>
               <ul>
                 <li><a href="profile.html">Profile</a></li>
                 <li><a href="my-orders.html">My Orders</a></li>
                 <li><a href="my-profile.html">My Profile</a></li>
                 <li><a href="addresses.html">Addresses</a></li>
                 <li><a href="notification.html">Notification</a></li>
               </ul>
             </li>
             <li>
               <a class="has-arrow" href="javascript:;">
                  <i class="bi bi-basket3 me-2"></i>
                  Shop Pages
                </a>
               <ul>
                 <li><a href="shop.html">Shop</a></li>
                 <li><a href="cart.html">Cart</a></li>
                 <li><a href="wishlist.html">Wishlist</a></li>
                 <li><a href="product-details.html">Product Details</a></li>
                 <li><a href="checkout.html">Checkout</a></li>
                 <li><a href="order-tracking.html">Order Tracking</a></li>
               </ul>
             </li>
             <li>
               <a class="has-arrow" href="javascript:;">
                  <i class="bi bi-credit-card me-2"></i>
                  Payment
                </a>
               <ul>
                 <li><a href="payment-method.html">Payment Method</a></li>
                 <li><a href="payment-error.html">Payment Error</a></li>
                 <li><a href="payment-completed.html">Payment Completed</a></li>
               </ul>
             </li>
             <li>
               <a class="has-arrow" href="javascript:;">
                  <i class="bi bi-grid me-2"></i>
                  Category
                </a>
               <ul>
                 <li><a href="category-grid.html">Category Grid</a></li>
                 <li><a href="category-list.html">Category List</a></li>
               </ul>
             </li>
             <li>
               <a class="has-arrow" href="javascript:;">
                  <i class="bi bi-lock me-2"></i>
                  Authentication
                </a>
               <ul>
                 <li><a href="authentication-log-in.html">Log In</a></li>
                 <li><a href="authentication-sign-up.html">Sign Up</a></li>
                 <li><a href="authentication-otp-varification.html">Verification</a></li>
                 <li><a href="authentication-change-password.html">Change Password</a></li>
                 <li><a href="authentication-splash.html">Splash</a></li>
                 <li><a href="authentication-splash-2.html">Splash 2</a></li>
               </ul>
             </li>
             <li>
               <a class="has-arrow" href="javascript:;">
                  <i class="bi bi-star me-2"></i>
                  Customer Reviews
                </a>
               <ul>
                 <li><a href="reviews-and-ratings.html">Ratings & Reviews</a></li>
                 <li><a href="write-a-review.html">Write a Review</a></li>
               </ul>
             </li>
             <li>
               <a href="about-us.html">
                  <i class="bi bi-emoji-smile me-2"></i>
                  About Us
                </a>
             </li>
             <li>
               <a href="contact-us.html">
                  <i class="bi bi-headphones me-2"></i>
                  Contact Us
                </a>
             </li>

           </ul>
         </nav>
       </div>
       <div class="offcanvas-footer border-top p-3">
         <div class="form-check form-switch">
           <input class="form-check-input" type="checkbox" role="switch" id="DarkMode" onchange="toggleTheme()">
           <label class="form-check-label" for="DarkMode">Dark Mode</label>
         </div>
       </div>
     </div>
   </div>
  <!--end sidenav-->

    </div>
   <!--end wrapper-->


    <!--JS Files-->  
    <script src="<?=base_url("thames")?>/js/bootstrap.bundle.min.js"></script>

    <script src="<?=base_url("thames")?>/js/jquery.min.js"></script>
    <script src="<?=base_url("thames")?>/js/cookies-theme-switcher.js"></script>
    <script src="<?=base_url("thames")?>/plugins/metismenu/metisMenu.min.js"></script>
    <script src="<?=base_url("thames")?>/plugins/slick/slick.min.js"></script>
    <script src="<?=base_url("thames")?>/js/main.js"></script>
    <script src="<?=base_url("thames")?>/js/loader.js"></script>
  </body>
</html>