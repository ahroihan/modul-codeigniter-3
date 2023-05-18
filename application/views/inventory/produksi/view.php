<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Manajemen Produksi
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Produksi</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<a <?php if ($this->session->userdata('level') == "gudang") : ?> href="<?php echo site_url($uriKu . 'produksi/add-accept/'); ?>" <?php else : ?> href="<?php echo site_url($uriKu . 'produksi/add/'); ?>" <?php endif; ?> type="button" class="btn btn-flat btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Tambah Data">
					<i class="glyphicon glyphicon-plus"> <b>Tambah</b></i>
				</a>
			</div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr class="bg-green">
							<th width="5%" class="text-center">No</th>
							<th width="40%" class="text-center">Nama Barang</th>
							<th width="10%" class="text-center">Jumlah Produksi</th>
							<th width="10%" class="text-center">Tanggal</th>
							<th width="10%" class="text-center">Tanggal Expired</th>
							<th width="15%"></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$number = 1;
						foreach ($produksi as $row) :
						?>
							<tr>
								<td><?php echo $number++; ?></td>
								<td><?php echo $row['material_desc']; ?></td>
								<td class="text-center"><?php echo $row['jumlah']; ?></td>
								<td class="text-center"><?php echo getTanggal($row['tanggal']); ?></td>
								<td class="text-center"><?php echo getTanggal($row['tanggal_expired']); ?></td>
								<td align="center">
									<?php if ($row['status'] == 0) : ?>
										<a href="<?php echo site_url($uriKu . 'produksi/edit/' . $row['id']); ?>" type="button" class="btn btn-flat btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Ubah Data">
											<i class="glyphicon glyphicon-edit"></i>
										</a>
										<span data-toggle="modal" data-target="#confirm-delete" data-href="<?php echo site_url($uriKu . 'produksi/delete/' . $row['id']); ?>">
											<a type="button" class="btn btn-flat btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data">
												<i class="glyphicon glyphicon-trash"></i>
											</a>
										</span>
									<?php else : ?>
										<i class="glyphicon glyphicon-ok" style="font-size: 18px;"></i>
									<?php endif; ?>
								</td>
							<?php endforeach; ?>
							</tr>
					</tbody>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</section>
</div>