<style>
	.table th,
	.table td {
		border: 0px !important;
	}

	.fixed-table-container {
		border: 0px !important;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Manajemen Mahasiswa
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url($uriKu . 'mahasiswa'); ?>"> Mahasiswa</a></li>
			<li class="active"><?php echo $mahasiswa['id']; ?></li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h4><?php echo $mahasiswa['id']; ?></h4>
			</div>
			<div class="box-body">
				<div class="col-md-2">
					<?php
					if (!$mahasiswa['foto']) {
						$foto = base_url('assets/img/box.png');
					} else {
						$foto = base_url('/assets/img/upload/' . $mahasiswa['foto']);
					}
					?>
					<img src="<?php echo $foto; ?>" width="100%">
				</div>
				<div class="col-md-10">
					<table class="table table-bordered">
						<tr>
							<td width="20%" valign="top" align="right"><b>NIM : </b></td>
							<td><?php echo $mahasiswa['nim']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Nama : </b></td>
							<td><?php echo $mahasiswa['nama']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>TTL : </b></td>
							<td><?php echo $mahasiswa['ttl']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Prodi : </b></td>
							<td><?php echo $mahasiswa['prodi']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Fakultas : </b></td>
							<td><?php echo $mahasiswa['fakultas']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Telepon : </b></td>
							<td><?php echo $mahasiswa['telepon']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Email : </b></td>
							<td><?php echo $mahasiswa['email']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Nama Ayah : </b></td>
							<td><?php echo $mahasiswa['nama_ayah']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Nama Ibu : </b></td>
							<td><?php echo $mahasiswa['nama_ibu']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Tanggal Yudisium : </b></td>
							<td><?php echo $mahasiswa['tanggal_yudisium']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>IPK : </b></td>
							<td><?php echo $mahasiswa['ipk']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Judul Skripsi : </b></td>
							<td><?php echo $mahasiswa['judul_skripsi']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Status Bayar : </b></td>
							<td>
								<?php echo $mahasiswa['status_bayar']; ?>
							</td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Alamat : </b></td>
							<td>
								<?php echo $mahasiswa['alamat']; ?>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="box-footer">
				<div class="col-md-6 col-md-offset-5">
					<a href="<?php echo site_url($uriKu . 'mahasiswa'); ?>" class="btn btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Kembali">
						<i class="glyphicon glyphicon-chevron-left"></i> Kembali
					</a>
					<a href="<?php echo site_url($uriKu . 'mahasiswa/edit/' . $mahasiswa['id']); ?>" class="btn btn-flat btn-success" data-toggle="tooltip" data-placement="top" title="Ubah Data">
						<i class="glyphicon glyphicon-edit"></i> Ubah
					</a>
				</div>
			</div>
		</div>
	</section>
</div>