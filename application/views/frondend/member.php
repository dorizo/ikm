<?php include("header.php")?>

      <!--start to page content-->
      <div class="page-content">

        <div class="card rounded-3 border-0 bg-transparent">
          <div class="card-body">
            <div class="card p-3 mb-2">
              <form method="get">
                <div class="row">
                  <div class="col-9"><input type="text" name="search" class="form-control" /></div>
                  <div class="col-2"><input type="submit"  class="btn btn-success" value="cari" /></div>
                  
                </div>
              </form>
            </div>
              
          <?php
          foreach ($dataresult as $key => $value) {
           
          ?>
                <div class="card p-3 mb-2">
                  <h6 class="fw-bold text-dark"><?php print_r($value["nama_lengkap"])?></h6>
                  <p class="text-muted mb-0 fw-bold"><?=$value["no_ktp"]?></p>
                </div>
          <?php 
          }
          ?>
                

          </div>
        </div>
      </div>
<!--end to page content-->
<?php include("menubawah.php")?>