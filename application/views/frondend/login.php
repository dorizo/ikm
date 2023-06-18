<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Synrok - Mobile HTML Template</title>

    <!--CSS Files-->
    <link href="<?=base_url("thames")?>/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="<?=base_url("thames")?>/css/style.css" rel="stylesheet"/>
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
            <!-- <div class="nav-button" onclick="history.back()"><a href="javascript:;"><i class="bi bi-arrow-left"></i></a></div> -->
            <div class="account-profile">
              <h6 class="mb-0 fw-bold text-dark">IKATAN KELUARGA MANDALA</h6>
            </div>
        </nav>
       </header>
        <!--end to header-->

      <!--start to page content-->
       <div class="page-content">

         <div class="login-body">
            <h5 class="fw-bold">Welcome Back</h5>
            <p class="mb-0">Login to your account to continue your shopping</p>
            <form class="mt-4" method="post">

              <div class="form-floating mb-3">
                <input type="tel" class="form-control rounded-3"  name="phone" >
                <label for="floatingInputEmail">PHONE</label>
              </div>

              <div class="input-group mb-3" id="show_hide_password">
                <div class="form-floating flex-grow-1">
                  <input type="password" class="form-control rounded-3 rounded-end-0 border-end-0" name="password">
                  <label for="floatingInputPassword">Password</label>
                </div>
                <span class="input-group-text bg-transparent rounded-start-0 rounded-3"><i class="bi bi-eye-slash"></i></span>
              </div>

              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Remember</label>
                </div>
                <div class=""><a href="authentication-otp-varification.html" class="forgot-link">Forgot Password?</a></div>
              </div>
              <div class="mb-0 d-grid">
                <button class="btn btn-dark btn-ecomm rounded-3">Log In</button>
              </div>
            </form>
         </div>

       </div>
     <!--end to page content-->


     <!--start to footer-->
    <footer class="page-footer fixed-bottom border-top d-flex align-items-center justify-content-center">
      <p class="mb-0 rounded-0">Don't have an account? <a href="<?=base_url("register")?>" class="text-danger">Register</a></p>
    </footer>
    <!--end to footer-->

    

    </div>
   <!--end wrapper-->


    <!--JS Files-->  
    <script src="<?=base_url("thames")?>/js/bootstrap.bundle.min.js"></script>

    <script src="<?=base_url("thames")?>/js/jquery.min.js"></script>
    <script src="<?=base_url("thames")?>/js/show-hide-password.js"></script>
    <script src="<?=base_url("thames")?>/js/loader.js"></script>

  


  </body>
</html>