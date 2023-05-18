<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Manajemen Retur Barang
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Retur Barang</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<a href="<?php echo site_url($uriKu . 'retur/add'); ?>" type="button" class="btn btn-flat btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Tambah Data">
					<i class="glyphicon glyphicon-plus"> <b>Tambah</b></i>
				</a>
			</div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr class="bg-green">
							<th width="5%">No</th>
							<th width="10%">ID Retur</th>
							<th width="10%">Tanggal</th>
							<th width="30%">Nama Barang</th>
							<th width="10%">Jumlah Retur</th>
							<th width="15%">Keterangan</th>
							<th width="10%"></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$number = 1;
						?>
						<?php foreach ($return as $row) :
						?>
							<tr>
								<td><?php echo $number++; ?></td>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo getTanggal($row['tanggal']); ?></td>
								<td><?php echo $row['aset']; ?></td>
								<td class="text-center"><?php echo $row['jrt'] ?></td>
								<td><?php echo $row['keterangan']; ?></td>
								<td align="center">
									<a href="<?php echo site_url($uriKu . 'retur/edit/' . $row['id'] . '/' . $row['permintaan_detail']); ?>" type="button" class="btn btn-flat btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Ubah Data">
										<i class="glyphicon glyphicon-edit"></i>
									</a>
									<span data-toggle="modal" data-target="#confirm-delete" data-href="<?php echo site_url($uriKu . 'retur/delete/' . $row['id']); ?>">
										<a type="button" class="btn btn-flat btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data">
											<i class="glyphicon glyphicon-trash"></i>
										</a>
									</span>
								</td>
							<?php endforeach; ?>
							</tr>
					</tbody>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</section>
</div>