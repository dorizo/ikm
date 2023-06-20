<?php include("header.php")?>

      <!--start to page content-->
       <div class="page-content">

       <div class="card bg-success" style="height:200px">
       <div class="card-body">
        <div class="row">
            <div class="col-4 d-flex flex-grow-1 justify-content-center align-items-center" style="height:160px">
            <img src="https://via.placeholder.com/551X551" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="col-8 d-flex flex-grow-1 justify-content-center align-items-center" style="height:160px">
                <div class="col-12">
                <h5><?=$this->session->userdata("nama_lengkap")?></h5>
                <h6><?php print_r($this->session->userdata("mamberkta"))?></h6>    
                </div>
            </div>
        </div>
       </div>


        </div>

         <!--start banner slider-->
          <!-- <div class="banner-slider">
            <div class="banner-item">
              <a href="shop.html"><img src="https://via.placeholder.com/1200X675" class="img-fluid rounded-3" alt=""></a>
            </div>
            <div class="banner-item">
              <a href="shop.html"><img src="https://via.placeholder.com/1200X675" class="img-fluid rounded-3" alt=""></a>
            </div>
            <div class="banner-item">
              <a href="shop.html"><img src="https://via.placeholder.com/1200X675" class="img-fluid rounded-3" alt=""></a>
            </div>
            <div class="banner-item">
              <a href="shop.html"><img src="https://via.placeholder.com/1200X675" class="img-fluid rounded-3" alt=""></a>
            </div>
            <div class="banner-item">
              <a href="shop.html"><img src="https://via.placeholder.com/1200X675" class="img-fluid rounded-3" alt=""></a>
            </div>
            <div class="banner-item">
              <a href="shop.html"><img src="https://via.placeholder.com/1200X675" class="img-fluid rounded-3" alt=""></a>
            </div>
          </div> -->
         <!--end banner slider-->


         <div class="py-2"></div>

            <div class="features-section">
            <div class="row row-cols-2 row-cols-md-4 g-3">
              <div class="col d-flex">
                <div class="card rounded-3 w-100">
                  <div class="card-body">
                    <div class="icon-wrapper text-center">
                      <div class="noti-box mb-1 mx-auto bg-purple">
                        <i class="bi bi-credit-card"></i>
                      </div>
                      <p class="fw-bold mb-0 text-dark">Pembayaran Iuaran</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col d-flex">
                <div class="card rounded-3 w-100">
                  <div class="card-body">
                    <div class="icon-wrapper text-center">
                      <div class="noti-box mb-1 mx-auto bg-green">
                        <i class="bi bi-headset"></i>
                      </div>
                      <p class="fw-bold mb-0 text-dark">Konfirmasi <br/> Iuaran</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          <!--end features-->

          

          <div class="py-2"></div>

          <!--start reviews section-->
          <div class="reviews-section">
            <h4 class="my-2 text-center fw-bold section-title">IKM BERBICARA</h4>

            <div class="review-slider">
              <?php
              $variable = $this->db->query("select * from client")->result_array();
              foreach ($variable as $key => $value) {
              
              ?>
             <div class="review-item p-3 border rounded-3 bg-light">
                  <h6 class="client-name fw-bold"><?=$value["pimpinan"]?></h6>
                
                <div class="review-text">
                  <p><?php print_r($value["isi_testimoni"])?></p>
                  <p class="text-end mb-0 reviw-date"><?=$value["tanggal"]?></p>
                </div>
            </div>
            <?php
            }
            ?>
            </div>
          </div>
          <!--end reviews section-->

         

       </div>
     <!--end to page content-->


       <!--end to footer-->

<?php include("menubawah.php")?>
     
