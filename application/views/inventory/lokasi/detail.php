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
			Manajemen Lokasi
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url($uriKu . 'lokasi'); ?>"> Lokasi</a></li>
			<li class="active"><?php echo $lokasi['id']; ?></li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h4><?php echo $lokasi['id']; ?></h4>
			</div>
			<div class="box-body">
				<div class="col-md-12">
					<table class="table table-bordered">
						<tr>
							<td width="20%" valign="top" align="right"><b>ID : </b></td>
							<td><?php echo $lokasi['id']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Plant : </b></td>
							<td><?php
								if (!array_key_exists($lokasi['plant'], $plant)) {
									echo '<span style="color: red;">Plant sudah dihapus</span>';
								} else {
									echo $plant[$lokasi['plant']];
								}
								?>
							</td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Desc. of Storage Loc. : </b></td>
							<td><?php echo $lokasi['desc_storage']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Rack : </b></td>
							<td><?php echo $lokasi['rack']; ?></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="box-footer">
				<div class="col-md-6 col-md-offset-5">
					<a href="<?php echo site_url($uriKu . 'lokasi'); ?>" class="btn btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Kembali">
						<i class="glyphicon glyphicon-chevron-left"></i> Kembali
					</a>
					<a href="<?php echo site_url($uriKu . 'lokasi/edit/' . $lokasi['id']); ?>" class="btn btn-flat btn-success" data-toggle="tooltip" data-placement="top" title="Ubah Data">
						<i class="glyphicon glyphicon-edit"></i> Ubah
					</a>
				</div>
			</div>
		</div>
	</section>
</div>