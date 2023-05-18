<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Manajemen Finish Good
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Finish Good</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				<h4>Finish Good</h4>
			</div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr class="bg-green">
							<th width="5%">No</th>
							<th width="40%">Nama Barang</th>
							<th width="10%" class="text-center">Jumlah</th>
							<th width="10%" class="text-center">Tanggal</th>
							<th width="10%" class="text-center">Tanggal Expired</th>
							<th width="15%" class="text-center">Status</th>
							<th width="10%"></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$number = 1;
						?>
						<?php foreach ($produksi as $row) : ?>
							<?php
							$status = ($row['status'] == 1) ? "Berhasil diterima" : "Menunggu acc gudang"
							//$hak_akses = $this->session->userdata('level');

							?>
							<tr>
								<td><?php echo $number++; ?></td>
								<td><?php echo $row['material_desc']; ?></td>
								<td class="text-center"><?php echo $row['jumlah']; ?></td>
								<td class="text-center"><?php echo getTanggal($row['tanggal']); ?></td>
								<td class="text-center"><?php echo getTanggal($row['tanggal_expired']); ?></td>
								<td><?php echo $status; ?></td>
								<td align="center">
									<?php if ($row['status'] == 1) : ?>
										<i class="glyphicon glyphicon-ok" style="font-size: 18px;"></i>
									<?php else : ?>
										<a href="<?php echo site_url($uriKu . 'finishgood/accept/' . $row['id']); ?>" type="button" class="btn btn-flat btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Accept Barang">
											<i class="glyphicon glyphicon-check"></i>
										</a>
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