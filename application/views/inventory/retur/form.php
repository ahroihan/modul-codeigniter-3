<?php
$segment3 = ($uriKu) ? $this->uri->segment(4) : $this->uri->segment(3);
$segment4 = ($uriKu) ? $this->uri->segment(5) : $this->uri->segment(4);
?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Manajemen Retur Barang
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url($uriKu . 'retur'); ?>"> Retur Barang</a></li>
			<li class="active"><?php echo $title; ?></li>
		</ol>
	</section>
	<section class="content">
		<?php echo form_open($action, 'class="form-horizontal" data-parsley-validate'); ?>
		<div class="box">
			<div class="box-header with-border">
				<h4><?php echo $title; ?></h4>
			</div>
			<div class="box-body">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6 col-centered">
							<div class="form-group">
								<label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
								<div class="col-sm-9">
									<div class="input-group date" id="datepicker">
										<?php
										echo form_input(array(
											'name' => 'tanggal',
											'id' => 'tanggal',
											'class' => 'form-control required',
											'placeholder' => 'Tanggal',
											'onkeypress' => 'return (event.charCode == 13 && event.charCode != 8)',
											'value' => $return['tanggal'],
										));
										?>
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="permintaan_detail" class="col-sm-3 control-label">Pilih Aset Produksi</label>
								<div class="col-sm-9">
									<?php
									if ($segment4) {
										$jmlAttrb = intval($return['jminta'] - $return['jumlah']);
										$data = array(
											// site_url($uriKu . 'retur/edit/' . $return['id'] . '/01') => 'PILIH',
											site_url($uriKu . 'retur/edit/' . $return['id'] . '/' . $return['permintaan_detail']) =>  $return['material_desc'] . " (" . $jmlAttrb . ")"
										);
										// foreach ($penerimaan as $row) {
										// 	if ($penerimaan) {
										// 		$data[site_url($uriKu . 'retur/add/' . $return['id'])] = $row['material_desc'] . " (" . $row['jumlah'] . ")";
										// 		$jmlAttrb = $row['jumlah'];
										// 	}
										// }

										echo form_dropdown(
											'permintaan_detail',
											$data,
											site_url($uriKu . 'retur/edit/' . $return['id'] . '/' . $segment4),
											'onChange="window.location.replace(this.options[this.selectedIndex].value)" class="autocomplete form-control required" id="asetJumlah" attrJumlah="' . $jmlAttrb . '" attrMax="' . $return['jminta'] . '"'
										);
									} else {
										$data = array(site_url($uriKu . 'retur/add') => ($segment3) ? 'PILIH LAINNYA' : 'PILIH');
										$jmlAttrb = 0;
										foreach ($penerimaan as $row) {
											foreach ($retur as $row2) {
												if ($row2['permintaan_detail'] != $row['id']) {
													$data[site_url($uriKu . 'retur/add/' . $row['id'])] = $row['material_desc'] . " (" . $row['jumlah'] . ")";
													$jmlAttrb = $row['jumlah'];
												}
											}
										}
										echo form_dropdown(
											'permintaan_detail',
											($segment3) ? $data : array_slice($data, -11),
											site_url($uriKu . 'retur/add/' . $segment3),
											'onChange="window.location.replace(this.options[this.selectedIndex].value);" class="autocomplete form-control required" id="asetJumlah" attrJumlah="' . $jmlAttrb . '"'
										);
									}
									?>
								</div>
							</div>
							<div class="form-group">
								<label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
								<div class="col-sm-9">
									<?php
									echo form_input(array(
										'name' => 'jumlah',
										'id' => 'jumlah',
										'class' => 'form-control required',
										'onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 13);',
										'maxlength' => '4',
										'placeholder' => 'Jumlah barang yang diretur',
										'value'	=> $return['jumlah']
									));
									?>
								</div>
							</div>
							<div class="form-group">
								<label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
								<div class="col-sm-9">
									<textarea name="keterangan" id="keterangan" cols="3" rows="3" class="form-control" placeholder="Keterangan" style="resize: none;"><?php echo $return['keterangan']; ?></textarea>
								</div>
							</div>
						</div>
						<?php if ($this->session->flashdata('error')) :
						?>
							<div class="form-group">
								<div class="col-sm-6 col-sm-offset-3">
									<font color="red">
										<?php echo $this->session->flashdata('error'); ?>
									</font>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<table class="table table-bordered table-striped">
								<thead>
									<tr class="bg-green">
										<th width="5%">No</th>
										<th width="10%">ID Aset</th>
										<th width="10%">Tanggal Permintaan</th>
										<th width="35%">Nama Barang</th>
										<th width="15%">Jumlah Permintaan Produksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if ($segment3) :
										$number = 1; ?>
										<?php foreach ($penerimaan as $data) : ?>
											<tr>
												<td><?php echo $number++; ?></td>
												<td><?php echo $data['aset']; ?></td>
												<td><?php echo getTanggal($data['tanggal']); ?></td>
												<td><?php echo $data['material_desc']; ?></td>
												<td class="text-center"><?php echo $data['jumlah']; ?></td>
											</tr>
									<?php endforeach;
									endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<div class="col-md-offset-5">
					<a href="<?php echo site_url($uriKu . 'retur'); ?>" class="btn btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Kembali">
						<i class="glyphicon glyphicon-chevron-left"></i> Kembali
					</a>
					<button type="submit" class="btn btn-flat btn-success" data-toggle="tooltip" data-placement="top" title="Simpan Data">
						<i class="glyphicon glyphicon-floppy-save"></i> Simpan
					</button>
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
	</section>
</div>
<script>
	// document.getElementById("jumlah").addEventListener("change", function() {
	// document.getElementById("asetJumlah").options[document.getElementById("asetJumlah").selectedIndex].value
	var jml = document.getElementById('asetJumlah').getAttribute("attrJumlah");
	var max = document.getElementById('asetJumlah').getAttribute("attrMax");
	document.getElementById("jumlah").setAttribute("max", max);
	if ((document.getElementById("jumlah").value == "") && (window.location.pathname.split("/").pop() != "add")) {
		document.getElementById("jumlah").value = jml;
		document.getElementById("jumlah").setAttribute("max", jml);
	} else if (document.getElementById("jumlah").value != jml) {
		document.getElementById("jumlah").setAttribute("max", max);
	}
	// });
</script>