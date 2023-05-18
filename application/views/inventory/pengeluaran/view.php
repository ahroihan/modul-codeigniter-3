<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Manajemen Pengeluaran
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Pengeluaran</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<a href="<?php echo site_url($uriKu . 'pengeluaran/add/'); ?>" type="button" class="btn btn-flat btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Tambah Data">
					<i class="glyphicon glyphicon-plus"> <b>Tambah</b></i>
				</a>
			</div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr class="bg-green">
							<th width="5%">No</th>
							<th width="20%">Tanggal</th>
							<th width="40%">Nama Pengguna</th>
							<th width="20%">Status</th>
							<th width="15%"></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$number = 1;
						?>
						<?php foreach ($permintaan as $row) : ?>
							<?php
							$status;
							$hak_akses = $this->session->userdata('level');
							if ($hak_akses == "produksi") {
								if ($row['status'] == 1) {
									$status = "Berhasil di Acc";
								} else {
									$status = "Menunggu Acc gudang";
								}
							} else {
								if ($row['status'] == 1) {
									$status = "Telah di Acc";
								} else {
									$status = "Menunggu Acc";
								}
							}
							?>
							<tr>
								<td><?php echo $number++; ?></td>
								<td><?php echo getTanggal($row['tanggal']); ?></td>
								<td><?php echo $row['pengguna']; ?></td>
								<td><?php echo $status; ?></td>
								<td align="center">
									<a href="<?php echo site_url($uriKu . 'pengeluaran/detail/' . $row['id']); ?>" type="button" class="btn btn-flat btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Detail Data">
										<i class="glyphicon glyphicon-eye-open"></i>
									</a>
									<span data-toggle="modal" data-target="#confirm-delete" data-href="<?php echo site_url($uriKu . 'pengeluaran/delete/' . $row['id']); ?>">
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