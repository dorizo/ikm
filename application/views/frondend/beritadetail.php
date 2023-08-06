<?php include("header.php")?>
<div class="page-content p-0">


  <?php
  $EEEE= $this->db->query("select * from berita where id_berita=$idberita   order by id_berita desc")->result_array();
  foreach ($EEEE as $key => $value) {
  ?>
    <div class="card">
        <div class="card-body">
          <h6 class="fw-bold mb-1 text-dark"><?=$value["judul_berita"]?></h6>
         <img src="<?=base_url("admin/assets/upload/image/thumbs")."/".$value["gambar"]?>" class="rounded-3" width="100%" alt=""> <br />
         <p class="mb-0"> <?php print_r($value["isi"])?></p>
        </div>
    </div>
     
  <?php } ?>    
</div>

<?php 
  include("menubawah.php");
  ?>