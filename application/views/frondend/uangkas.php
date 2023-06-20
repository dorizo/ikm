<?php include("header.php")?>

      <!--start to page content-->
      <div class="page-content">

        <div class="card rounded-3 border-0 bg-transparent">
          <div class="card-body">
              <div class="mb-3 border p-3 rounded-3">
                  <div class="d-flex align-items-center flex-row flex-wrap flex-fill justify-content-between gap-3">
                      <h6>Uang Kas : </h6>
                      <p><?=rupiah($query->j)?></p>
                  </div>
              </div>

              <ul class="timeline-with-icons">
          <?php
          foreach ($dataresult as $key => $value) {
           
          ?>
                <li class="timeline-item mb-5">
                  <span class="timeline-icon active">
                    <i class="bi bi-check-lg"></i>
                  </span>
                  <h6 class="fw-bold text-dark"><?php print_r($value["nama_lengkap"])?></h6>
                  <p class="text-muted mb-0 fw-bold"><?=rupiah($value["jumlah"])?></p>
                </li>
          <?php 
          }
          ?>
                
              </ul>

          </div>
        </div>
      </div>
<!--end to page content-->
<?php include("menubawah.php")?>