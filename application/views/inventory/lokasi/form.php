<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Manajemen Lokasi
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url($uriKu . 'lokasi'); ?>"> Lokasi</a></li>
			<li class="active"><?php echo $title; ?></li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<?php echo form_open_multipart($action, 'class="form-horizontal" data-parsley-validate'); ?>
			<div class="box-header with-border">
				<h4><?php echo $title; ?></h4>
			</div>
			<div class="box-body">
				<div class="col-md-8">
					<div class="form-group">
						<label for="kategori" class="col-sm-3 control-label">Plant</label>
						<div class="col-sm-9">
							<?php
							if ($lokasi['plant']) {
								if (!array_key_exists($lokasi['plant'], $plant)) {
									$plant[$lokasi['plant']] = 'Plant sudah dihapus';
								}
							}
							echo form_dropdown('plant', $plant, (isset($lokasi['plant'])) ? $lokasi['plant'] : '', 'class="autocomplete form-control required"');
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="desc_storage" class="col-sm-3 control-label">
							Desc. of Storage Loc.
						</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name' => 'desc_storage',
								'id' => 'desc_storage',
								'class' => 'form-control',
								'placeholder' => 'Description of Storage Location',
								'maxlength' => '50',
								'value' => $lokasi['desc_storage']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="rack" class="col-sm-3 control-label">Rack</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name' => 'rack',
								'id' => 'rack',
								'class' => 'form-control required',
								'placeholder' => 'Rack',
								'maxlength' => '5',
								'onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 45 || event.charCode == 13)',
								'value' => $lokasi['rack']
							));
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<div class="col-md-offset-5">
					<a href="<?php echo site_url($uriKu . 'lokasi'); ?>" class="btn btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Kembali">
						<i class="glyphicon glyphicon-chevron-left"></i> Kembali
					</a>
					<button material="submit" class="btn btn-flat btn-primary" data-toggle="tooltip" data-placement="top" title="Simpan Data" onclick="return checkSize(2097152)">
						<i class="glyphicon glyphicon-floppy-save"></i> Simpan
					</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</section>
</div>