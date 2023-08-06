<?php include("header.php")?>
<div class="page-content p-0">


<ul class="list-group list-group-flush rounded-0">
  <li class="list-group-item py-3">
    <form>
      <div class="position-relative">
        <input type="text" class="form-control ps-5 rounded-3" placeholder="Search Product...">
        <span class="position-absolute top-50 product-show translate-middle-y"><i class="bi bi-search ms-3"></i></span>
     </div>
     </form>
  </li>
  <?php
  $EEEE= $this->db->query("select * from berita order by id_berita desc")->result_array();
  foreach ($EEEE as $key => $value) {
  ?>
  <li class="list-group-item py-3">
    <div class="d-flex flex-row align-items-start align-items-stretch gap-3">
      <div class="product-img">
         <img src="<?=base_url("admin/assets/upload/image/thumbs")."/".$value["gambar"]?>" class="rounded-3" width="100" alt="">
      </div>
      <div class="product-info flex-grow-1">
         <h6 class="fw-bold mb-1 text-dark"><?=$value["judul_berita"]?></h6>
         <p class="mb-0"> <?php print_r($value["ringkasan"])?></p>
        <div class="mt-3 hstack gap-2">
          <a type="button" href="<?=base_url("berita/detail/".$value["id_berita"])?>" class="btn btn-sm btn-danger border rounded-3">DETAIL</a>
       </div>
      </div>
     </div>
  </li>
  <?php } ?>
</ul>
</div>

<?php 
  include("menubawah.php");
  ?>