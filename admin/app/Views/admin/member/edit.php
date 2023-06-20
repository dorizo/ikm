<form action="<?= base_url('admin/iuran/edit/' . $staff['iuranCode']) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?= csrf_field();
?>
<div class="form-group row">
	<label class="col-3">Nama Mamber</label>
	<div class="col-9">
    <input type="hidden"  name="iuranCode" class="form-control" placeholder="Nama staff" value="<?= $staff['iuranCode'] ?>" required>
	<input type="text" disabled name="nama_lengkap" class="form-control" placeholder="Nama staff" value="<?= $staff['nama_lengkap'] ?>" required>
	</div>
</div>
	
<div class="form-group row">
	<label class="col-3">Jumlah</label>
	
	<div class="col-9">
    <input type="text"  name="jumlah" class="form-control" placeholder="Nama staff" value="<?= $staff['jumlah'] ?>" required>
	</div>
</div>
<div class="form-group row">
	<label class="col-3">Status</label>
	
	<div class="col-9">
		<select name="konfirmasi" class="form-control">
			<option value="0">Prosess</option>
			<option value="1"  <?php if ($staff['konfirmasi'] == 1) {
    echo 'selected';
} ?>>Success</option>
		</select>
	</div>
</div>


<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
	</div>
</div>

<div class="form-group row">
<img src="<?=base_url("/")."/../pembayaran/".$staff['foto'] ?>" />
</div>


<?= form_close(); ?>