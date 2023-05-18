<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Manajemen Lokasi
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Lokasi</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<a href="<?php echo site_url($uriKu . 'lokasi/add/'); ?>" type="button" class="btn btn-flat btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Tambah Data">
					<i class="glyphicon glyphicon-plus"> <b>Tambah</b></i>
				</a>
			</div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr class="bg-green">
							<th width="5%">No</th>
							<th width="5%">Plant</th>
							<th width="20%">Desc. of Storage Loc.</th>
							<th width="15%"></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$number = 1;
						?>
						<?php foreach ($lokasi as $row) : ?>
							<tr>
								<td><?php echo $number++; ?></td>
								<td>
									<?php
									if (!array_key_exists($row['plant'], $plant)) {
										echo '<span style="color: red;">Plant sudah dihapus</span>';
									} else {
										echo $plant[$row['plant']];
									}
									?>
								</td>
								<td><?php echo $row['desc_storage']; ?></td>
								<td align=" center">
									<a href="<?php echo site_url($uriKu . 'lokasi/detail/' . $row['id']); ?>" type="button" class="btn btn-flat btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Detail Data">
										<i class="glyphicon glyphicon-eye-open"></i>
									</a>

									<a href="<?php echo site_url($uriKu . 'lokasi/edit/' . $row['id']); ?>" type="button" class="btn btn-flat btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Ubah Data">
										<i class="glyphicon glyphicon-edit"></i>
									</a>

									<span data-toggle="modal" data-target="#confirm-delete" data-href="<?php echo site_url($uriKu . 'lokasi/delete/' . $row['id']); ?>">
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