<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Manajemen Plant
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url($uriKu . 'lokasi/plant'); ?>"> Lokasi</a></li>
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
							echo form_input(array(
								'name'		=> 'plant',
								'id'		=> 'plant',
								'class'		=> 'form-control',
								'placeholder' => 'Plant',
								'required'	=> 'required',
								'value'		=> $plant['plant']
							));

							?>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<div class="col-md-offset-5">
					<a href="<?php echo site_url($uriKu . 'lokasi/plant'); ?>" class="btn btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Kembali">
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