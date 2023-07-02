<?php 

$router = service('router'); 
// $controller  = $router->controllerName();  

$router = service('router');
// $method = $router->methodName();

?>
<div class="row mb-5">
                    <a class="col-3 bg-gray p-2 text-center <?=$router->methodName()=="index"?"pilihan":"";?>" href="<?=base_url("admin/chart")?>">ASAL KABUPATEN </a>
                    <a class="col-3 bg-gray p-2  text-center  <?=$router->methodName()=="kat"?"pilihan":"";?>"  href="<?=base_url("admin/chart/kat")?>">ASAL KECAMATAN</a>
                    <a class="col-3 bg-gray p-2  text-center  <?=$router->methodName()=="witel"?"pilihan":"";?>"  href="<?=base_url("admin/chart/witel")?>">DOMISILI KABUPATEN</a>
                    <a class="col-3 bg-gray p-2  text-center  <?=$router->methodName()=="outstanding"?"pilihan":"";?>"  href="<?=base_url("admin/chart/outstanding")?>">DOMISILI KECAMATAN</a>
                </div>

                <style>
                    .pilihan{
                        background:#0556BF !important;
                    }
                </style>