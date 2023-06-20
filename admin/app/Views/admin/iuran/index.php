
<div class="row">
  
</div>


<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="5%">NAMA </th>
			<th width="20%">Jumlah</th>
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
			<td><?= $staff['jumlah'] ?></td>
			<td>
				<small><i class="fa fa-phone"></i> <?= $staff['no_telp'] ?>
				
				</small>
			</td>
			
			<td>
			<small><a target="_BLANK" href="<?=base_url("/")."/../pembayaran/".$staff['foto'] ?>"> <img src="<?=base_url("/")."/../pembayaran/".$staff['foto'] ?>" width="100px" /></a>
				
				</small>
			</td>
			<td>
				<a href="<?= base_url('admin/iuran/edit/' . $staff['iuranCode']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>