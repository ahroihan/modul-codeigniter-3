<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Manajemen Pengguna
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url($uriKu . 'pengguna'); ?>"> Pengguna</a></li>
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
						<label for="username" class="col-sm-3 control-label">Username</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name' => 'username',
								'id' => 'username',
								'class' => 'form-control required',
								'placeholder' => 'Username',
								'maxlength' => '30',
								'value' => $pengguna['username']
							));
							?>
						</div>
					</div>
					<?php if ($action == base_url() . $uriKu . 'pengguna/save') : ?>
						<div class="form-group">
							<label for="password" class="col-sm-3 control-label">Password</label>
							<div class="col-sm-9">
								<?php
								echo form_password(array(
									'name' => 'password',
									'id' => 'password',
									'class' => 'form-control',
									'placeholder' => 'Password',
									'maxlength' => '30',
									'value' => ''
								));
								?>
							</div>
						</div>
						<div class="form-group">
							<label for="password2" class="col-sm-3 control-label">Ulangi Password</label>
							<div class="col-sm-9">
								<?php
								echo form_password(array(
									'name' => 'ulangi_password',
									'id' => 'ulangi_password',
									'class' => 'form-control',
									'placeholder' => 'Ulangi Password',
									'maxlength' => '30',
									'data-parsley-equalto' => '#password',
								));
								?>
							</div>
						</div>
					<?php endif; ?>
					<div class="form-group">
						<label for="nama" class="col-sm-3 control-label">Nama</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name' => 'nama',
								'id' => 'nama',
								'class' => 'form-control required',
								'placeholder' => 'Nama',
								'maxlength' => '50',
								'value' => $pengguna['nama']
							));
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<div class="col-md-offset-5">
					<a href="<?php echo site_url($uriKu . 'pengguna'); ?>" class="btn btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Kembali">
						<i class="glyphicon glyphicon-chevron-left"></i> Kembali
					</a>
					<button type="submit" class="btn btn-flat btn-primary" data-toggle="tooltip" data-placement="top" title="Simpan Data" onclick="return checkSize(2097152)">
						<i class="glyphicon glyphicon-floppy-save"></i> Simpan
					</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</section>
</div>