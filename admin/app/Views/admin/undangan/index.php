
<div class="row">
  <div class="col-12 col-sm-6 col-md-2">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-newspaper"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">LAMPUNG</span>
        <span class="info-box-number">
			<?=$satu;?><br />
          <small>ORANG</small>
        </span>
      </div>
    </div>
  </div>
  
  <div class="col-12 col-sm-6 col-md-2">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-newspaper"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">BENGKULU</span>
		
		<?=$dua;?>
        <span class="info-box-number">
          <small>ORANG</small>
        </span>
      </div>
    </div>
  </div>

  <div class="col-12 col-sm-6 col-md-2">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-newspaper"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">JAMBI</span>
		
		<?=$tiga;?>
        <span class="info-box-number">
          <small>ORANG</small>
        </span>
      </div>
    </div>
  </div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-newspaper"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">SUMATERA SELATAN</span>
		
		<?=$empat;?>
        <span class="info-box-number">
          <small>ORANG</small>
        </span>
      </div>
    </div>
  </div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-newspaper"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">KEPULAUAN BANGKA BELITUNG</span>
		
		<?=$lima;?>
        <span class="info-box-number">
          <small>ORANG</small>
        </span>
      </div>
    </div>
  </div>
</div>


<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="5%">NAMA </th>
			<th width="20%">KOTA ASAL</th>
			<th width="20%">PHONE</th>
			<th width="30%">ALAMAT</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;

foreach ($staff as $staff) { ?>
		<tr>
			<td><?= $no ?></td>
			<td><?= $staff['nama_lengkap'] ?>
			</td>
			<td><?php 
			if($staff['kotaasal']==1){
				echo "LAMPUNG";
			}elseif($staff['kotaasal']==2){
				echo "BENGKULU";
			  }if($staff['kotaasal']==3){
				echo "JAMBI";
			    }if($staff['kotaasal']==4){
					echo "SUMATERA SELATAN";
				  }if($staff['kotaasal']==5){
					echo "KEPULAUAN BANGKA BELITUNG";

				  }
				    ?></td>
			<td>
				<small><i class="fa fa-phone"></i> <?= $staff['telp'] ?>
				
				</small>
			</td>
			
			<td>
			<small> <?= $staff['alamat'] ?>
				
				</small>
			</td>
			<td>
				<a href="<?= base_url('admin/staff/edit/' . $staff['id_anggota']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
				<a href="<?= base_url('admin/staff/delete/' . $staff['id_anggota']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>