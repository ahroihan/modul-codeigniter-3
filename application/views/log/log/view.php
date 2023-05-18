<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Manajemen Log Activity
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Log Activity</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr class="bg-green">
							<th width="5%">No</th>
							<th width="7%">ID Pengguna</th>
							<th width="13%">Akses Page</th>
							<th width="7%">Datetime</th>
							<th width="15%"></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$number = 1;
						?>
						<?php foreach ($log as $row) : ?>
							<tr>
								<td><?php echo $number++; ?></td>
								<td><?php echo $row['id_pengguna']; ?></td>
								<td><?php echo $row['akses_page']; ?></td>
								<td><?php echo $row['datetime']; ?></td>
								<td align="center">
									<a href="<?php echo site_url($uriKu . 'log/detail/' . $row['id']); ?>" type="button" class="btn btn-flat btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Detail Data">
										<i class="glyphicon glyphicon-eye-open"></i>
									</a>

									<span data-toggle="modal" data-target="#confirm-delete" data-href="<?php echo site_url($uriKu . 'log/delete/' . $row['id']); ?>">
										<a type="button" class="btn btn-flat btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data">
											<i class="glyphicon glyphicon-trash"></i>
										</a>
									</span>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</section>
</div>