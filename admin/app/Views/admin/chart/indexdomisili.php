<?php 
include("menu.php");
$db = db_connect();
if(empty($_GET["prov"])){
    $kodeee = "16";
}else{
    
    $kodeee = $_GET["prov"];
}
// echo 'SELECT nama , kode FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=5 AND kode LIKE "'.$kodeee.'%"';
$querydata = $db->query('SELECT nama , kode FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=5 AND kode LIKE "'.$kodeee.'%"')->getResultArray();
$arraydata = array();
$countdata = array();
foreach ($querydata as $key => $value) {
 $MMMMMMM = $db->query("select count(*) as counter from member where kab_tinggal='".$value["kode"]."'");
 $row   = $MMMMMMM->getRow();
 $countdata[$key] = (int)$row->counter;
  $arraydata[$key] = $value["nama"]; 
}
?>
<div class="card">
    <div class="card-body">
        <form method="get">
            <select class="form-control" name="prov">
                <option>PILIH PROV</option>
            <?php
            $a = $db->query("SELECT * FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=2")->getResultArray();
            foreach ($a as $key => $value) {
                # code...
                $selected = "";
                if($kodeee==$value["kode"]){
                    $selected = "selected";
                
                }

                echo "<option $selected value=\"$value[kode]\">$value[nama]</option>";
            }
            ?>
            </select>
            <button class="btn btn-success">Search</button>
        </form>
    </div>
</div>


        <div id="chart">
          <div id="ssssssssssss">
          </div>
        </div>

<style>

#chart {
  min-height: 500px;
}
</style>

<script>
          var options = {
            chart: {
              type: 'pie',
              height:500,
            },
            series: <?=json_encode($countdata)?>, 
            labels : <?=json_encode($arraydata)?>,
          }

      var chart = new ApexCharts(document.querySelector("#ssssssssssss"), options);

      chart.render();
      
      </script>