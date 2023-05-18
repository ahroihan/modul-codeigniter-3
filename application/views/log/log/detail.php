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
			Manajemen Log Activity
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url($uriKu . 'log'); ?>"> Log Activity</a></li>
			<li class="active"><?php echo $log['id']; ?></li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h4><?php echo $log['id']; ?></h4>
			</div>
			<div class="box-body">
				<div class="col-md-12">
					<table class="table table-bordered">
						<tr>
							<td width="20%" valign="top" align="right"><b>Username : </b></td>
							<td><?php echo $log['username']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Akses Page : </b></td>
							<td><?php echo $log['akses_page']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>From Page : </b></td>
							<td><?php echo $log['from_page']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>IP Address : </b></td>
							<td><?php echo $log['ip_address']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Datetime : </b></td>
							<td><?php echo $log['datetime']; ?></td>
						</tr>
						<tr>
							<td width="20%" valign="top" align="right"><b>Keterangan : </b></td>
							<td><?php echo $log['keterangan']; ?></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="box-footer">
				<div class="col-md-6 col-md-offset-5">
					<a href="<?php echo site_url($uriKu . 'log'); ?>" class="btn btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Kembali">
						<i class="glyphicon glyphicon-chevron-left"></i> Kembali
					</a>
					<span data-toggle="modal" data-target="#confirm-delete" data-href="<?php echo site_url($uriKu . 'log/delete/' . $log['id']); ?>">
						<a type="button" class="btn btn-flat btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data">
							<i class="glyphicon glyphicon-trash"></i>
						</a>
					</span>
				</div>
			</div>
		</div>
	</section>
</div>