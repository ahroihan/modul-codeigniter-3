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
			Manajemen Akses Level
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url($uriKu . 'level'); ?>"> Akses Level</a></li>
			<li class="active"><?php echo $level['id']; ?></li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h4><?php echo $level['id']; ?></h4>
			</div>
			<div class="box-body">
				<div class="col-md-12">
					<table class="table table-bordered">
						<tr>
							<td width="20%" valign="top" align="right"><b>Nama Akses Level : </b></td>
							<td><?php echo $level['akses']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Akses Page : </b></td>
							<td><?php echo $level['akses_page']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Keterangan : </b></td>
							<td><?php echo $level['keterangan']; ?></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="box-footer">
				<div class="col-md-6 col-md-offset-5">
					<a href="<?php echo site_url($uriKu . 'level'); ?>" class="btn btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Kembali">
						<i class="glyphicon glyphicon-chevron-left"></i> Kembali
					</a>
					<a href="<?php echo site_url($uriKu . 'level/edit/' . $level['id']); ?>" class="btn btn-flat btn-success" data-toggle="tooltip" data-placement="top" title="Ubah Data">
						<i class="glyphicon glyphicon-edit"></i> Ubah
					</a>
				</div>
			</div>
		</div>
	</section>
</div>