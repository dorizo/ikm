<?php 
include("menu.php");
$db = db_connect();
$querydata = $db->query('SELECT nama , kode FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=5 AND kode LIKE "16%" ')->getResultArray();
$arraydata = array();
$countdata = array();
foreach ($querydata as $key => $value) {
 $MMMMMMM = $db->query("select count(*) as counter from member where kab_asal='".$value["kode"]."'");
 $row   = $MMMMMMM->getRow();
 $countdata[$key] = $row->counter;
  $arraydata[$key] = $value["nama"]; 
}
?>


<div id="chartEEEE">
</div>

<style>

#chart {
  min-height: 650px;
  
  border:1px solid #F00;
}
</style>

<script>
          var options = {
        chart: {
          type: 'bar'
        },
        series: [{
          name: 'sales',
          data: <?=json_encode($countdata)?>
        }],
        xaxis: {
          categories: <?=json_encode($arraydata)?>
        }
      }

      var chart = new ApexCharts(document.querySelector("#chartEEEE"), options);

      chart.render();
      
      </script>