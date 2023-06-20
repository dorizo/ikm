<!doctype html>
<html lang="en" class="light-theme">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>

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
            <div class="brand-logo">
                <!-- <img src="<?=base_url("thames")?>/images/logo.webp" width="95" alt=""></a> -->
                <h6><?=$title?></h6>
            </div>
        </nav>
       </header>
        <!--end to header-->