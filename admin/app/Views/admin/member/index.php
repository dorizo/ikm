
<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="20%">Nama</th>
			<th width="15%">Jabatan</th>
			<th width="15%">Kontak</th>
			<th width="25%">Alamat</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;

$db      = \Config\Database::connect();
foreach ($staff as $staff) { ?>
		<tr>
			<td><?= $no ?></td>
			<td>
                <?= $staff['nama_lengkap'] ?>
				<small>
					<br><i class="fa fa-sitemap"></i> Jenis Kelamin: <?= $staff['jenis_kelamin'] ?>
					<br><i class="fa fa-home"></i> Status: <?= $staff['status'] ?>
				</small>
			</td>
			<td>
            <br><i class="fa fa-users"></i> <?= $staff['Pekerjaan'] ?>
            <br><i class="fa fa-users"></i> <?= $staff['tempat_bekerja'] ?>
                
            </td>
			<td><small><i class="fa fa-phone"></i> <?= $staff['no_telp'] ?>
            <br><i class="fa fa-user"></i> <?= $staff['no_ktp'] ?>
				<br><i class="fa fa-globe"></i> <?= $staff['akun_instagram'] ?>
				</small>
			</td>
            <td>

            Alamat Tinggal <br />
            <i class="fa fa-globe"></i> <?=$db->query("SELECT * FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=2 AND kode='".$staff["prov_tinggal"]."'")->getRow()->nama ?>
            - </i> <?=$db->query("SELECT * FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=5 AND kode='".$staff["kab_tinggal"]."'")->getRow()->nama ?>
            -</i> <?=$db->query("SELECT * FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=8 AND kode='".$staff["kec_tinggal"]."'")->getRow()->nama ?>
            -</i> <?=$db->query("SELECT * FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=13 AND kode='".$staff["desa_tinggal"]."'")->getRow()->nama ?>
			<hr />
            Alamat Asal <br />	
            <i class="fa fa-globe"></i> <?=$db->query("SELECT * FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=2 AND kode='".$staff["prov_asal"]."'")->getRow()->nama ?>
            -</i> <?=$db->query("SELECT * FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=5 AND kode='".$staff["kab_asal"]."'")->getRow()->nama ?>
            -</i> <?=$db->query("SELECT * FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=8 AND kode='".$staff["kec_asal"]."'")->getRow()->nama ?>
            -</i> <?=$db->query("SELECT * FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=13 AND kode='".$staff["desa_asal"]."'")->getRow()->nama ?>
			 </td>
			<td>
				<a href="<?= base_url('admin/staff/edit/' . $staff['memberCode']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
				<a href="<?= base_url('admin/staff/delete/' . $staff['memberCode']) ?>" class="btn btn-dark btn-sm" onclick="confirmation(event)"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>