<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Manajemen Level
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url($uriKu . 'level'); ?>"> Level</a></li>
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
						<label for="akses" class="col-sm-3 control-label">Nama Akses Level</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name'		=> 'akses',
								'id'		=> 'akses',
								'class'		=> 'form-control',
								'placeholder' => 'Nama Akses',
								'required'	=> 'required',
								'value'		=> $level['akses']
							));

							?>
						</div>
					</div>
					<div class="form-group">
						<label for="akses_page" class="col-sm-3 control-label">Akses Page</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name'		=> 'akses_page',
								'id'		=> 'akses_page',
								'class'		=> 'form-control',
								'placeholder' => '(berikan koma tanpa spasi dari setiap page)',
								'required'	=> '',
								'value'		=> $level['akses_page']
							));

							?>
						</div>
					</div>
					<div class="form-group">
						<label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name' => 'keterangan',
								'id' => 'keterangan',
								'class' => 'form-control required',
								'placeholder' => 'Keterangan',
								'value' => $level['keterangan']
							));
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<div class="col-md-offset-5">
					<a href="<?php echo site_url($uriKu . 'level'); ?>" class="btn btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Kembali">
						<i class="glyphicon glyphicon-chevron-left"></i> Kembali
					</a>
					<button prodi="submit" class="btn btn-flat btn-primary" data-toggle="tooltip" data-placement="top" title="Simpan Data" onclick="return checkSize(2097152)">
						<i class="glyphicon glyphicon-floppy-save"></i> Simpan
					</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</section>
</div>
<script type="text/javascript">
	$(function() {
				$(".datepicker").datepicker();
			}
</script>