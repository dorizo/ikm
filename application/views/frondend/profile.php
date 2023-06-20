<?php include("header.php")?>


      <!--start to page content-->
      <div class="page-content">
<?php $xxxx = $this->db->query("select * from konfigurasi")->row(); ?>
      <h4><?=$xxxx->singkatan?></h4>
      <p><?=$xxxx->tentang?></p>

<div class="mb-3">
<a class="profile-item" href="my-profile.html">
 <div class="card rounded-3">
  <div class="card-body py-2">
      <div class="d-flex align-items-center gap-3 fs-6">
         <div><i class="bi bi-person"></i></div>
         <div class="flex-grow-1">My Profile</div>
         <div><i class="bi bi-chevron-right"></i></div>
      </div>
  </div>
 </div>
</a>
</div>


<div class="mb-3">
<a class="profile-item" href="addresses.html">
 <div class="card rounded-3">
  <div class="card-body py-2">
      <div class="d-flex align-items-center gap-3 fs-6">
         <div><i class="bi bi-geo"></i></div>
         <div class="flex-grow-1">Kebijakan Privasi</div>
         <div><i class="bi bi-chevron-right"></i></div>
      </div>
  </div>
 </div>
</a>
</div>


<div class="mb-3">
<a class="profile-item" href="<?=base_url("loginfrondend/logout")?>">
 <div class="card rounded-3">
  <div class="card-body py-2">
      <div class="d-flex align-items-center gap-3 fs-6">
         <div><i class="bi bi-box-arrow-right"></i></div>
         <div class="flex-grow-1">Logout</div>
         <div><i class="bi bi-chevron-right"></i></div>
      </div>
  </div>
 </div>
</a>
</div>

</div>
<!--end to page content-->
<?php include("menubawah.php")?>