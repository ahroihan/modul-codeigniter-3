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
			Manajemen Aset
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url($uriKu . 'aset'); ?>"> Aset</a></li>
			<li class="active"><?php echo $aset['id']; ?></li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h4><?php echo $aset['id']; ?></h4>
			</div>
			<div class="box-body">
				<div class="col-md-2">
					<?php
					if (!$aset['picture']) {
						$aset['picture'] = '../box.png';
					}
					if (!$aset['picture']) {
						$picture = base_url('assets/img/upload/logo_transparent.png');
					} else {
						$picture = base_url('/assets/img/upload/' . $aset['picture']);
					}
					?>
					<img src="<?php echo $picture; ?>" width="100%" onerror="imgError(this);">
				</div>
				<div class="col-md-10">
					<table class="table table-bordered">
						<tr>
							<td width="20%" valign="top" align="right"><b>ID : </b></td>
							<td><?php echo $aset['id']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Nama Material : </b></td>
							<td><?php echo $aset['material']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Deskripsi Material : </b></td>
							<td><?php echo $aset['material_desc']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Base Unit of Measure : </b></td>
							<td><?php echo $aset['base_unit']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Base : </b></td>
							<td><?php echo $aset['base']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Data Stock : </b></td>
							<td>
								<?php echo ($aset['correct'] == 1) ? "BENAR" : "SALAH"; ?>
							</td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Stock : </b></td>
							<td>
								<?php echo $aset['stock']; ?>
							</td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Lokasi : </b></td>
							<td>
								<?php
								if (!array_key_exists($aset['id_lokasi'], $lokasi)) {
									echo '<span style="color: red;">Lokasi sudah dihapus</span>';
								} else {
									echo $lokasi[$aset['id_lokasi']];
								}
								?>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="box-footer">
				<div class="col-md-6 col-md-offset-5">
					<a href="<?php echo site_url($uriKu . 'aset'); ?>" class="btn btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Kembali">
						<i class="glyphicon glyphicon-chevron-left"></i> Kembali
					</a>
					<a href="<?php echo site_url($uriKu . 'aset/edit/' . $aset['id']); ?>" class="btn btn-flat btn-success" data-toggle="tooltip" data-placement="top" title="Ubah Data">
						<i class="glyphicon glyphicon-edit"></i> Ubah
					</a>
				</div>
			</div>
		</div>
	</section>
</div>