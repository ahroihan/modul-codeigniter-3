<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Manajemen Mahasiswa
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url($uriKu . 'mahasiswa'); ?>"> Mahasiswa</a></li>
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
				<div class="col-md-2 col-md-offset-1">
					<div class="form-group" style="margin:20px 10px 0 0">
						<?php
						if (!$mahasiswa['foto']) {
							$foto = base_url('assets/img/box.png');
						} else {
							$foto = base_url('/assets/img/upload/' . $mahasiswa['foto']);
						}
						?>
						<img id="blah" src="<?php echo $foto; ?>" style="width: 100%;" />
						<div class="input-group">
							<?php
							echo form_input(array(
								'name' => 'fotonya',
								'id' => 'fotonya',
								'class' => 'form-control input-sm',
								'placeholder' => 'Picture',
								'readOnly' => TRUE,
							));
							?>
							<span class="input-group-btn">
								<span class="btn btn-flat btn-primary btn-file btn-sm">
									<?php
									echo form_upload(array(
										'name' => 'foto',
										'id' => 'foto',
										'accept' => '.jpg,.png,.gif,',
									));
									?>Browse
								</span>
							</span>
						</div>Filesize Max 2MB
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="nim" class="col-sm-3 control-label">NIM</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name'		=> 'nim',
								'id'		=> 'nim',
								'class'		=> 'form-control',
								'placeholder' => 'NIM',
								'required'	=> 'required',
								'value'		=> $mahasiswa['nim']
							));

							?>
						</div>
					</div>
					<div class="form-group">
						<label for="nama" class="col-sm-3 control-label">Nama</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name' => 'nama',
								'id' => 'nama',
								'class' => 'form-control required',
								'placeholder' => 'Nama',
								'value' => $mahasiswa['nama']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="ttl" class="col-sm-3 control-label">
							TTL
						</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name' => 'ttl',
								'id' => 'ttl',
								'class' => 'form-control',
								'placeholder' => 'TTL',
								'maxlength' => '50',
								'value' => $mahasiswa['ttl']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="prodi" class="col-sm-3 control-label">Prodi</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name' => 'prodi',
								'id' => 'prodi',
								'class' => 'form-control',
								'placeholder' => 'Prodi',
								'value' => $mahasiswa['prodi']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="fakultas" class="col-sm-3 control-label">Fakultas</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name' => 'fakultas',
								'id' => 'fakultas',
								'class' => 'form-control',
								'placeholder' => 'Fakultas',
								'value' => $mahasiswa['fakultas']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="telepon" class="col-sm-3 control-label">Telepon</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name' => 'telepon',
								'id' => 'telepon',
								'class' => 'form-control required',
								'placeholder' => 'Telepon',
								'value' => $mahasiswa['telepon']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name' => 'email',
								'id' => 'email',
								'class' => 'form-control required',
								'placeholder' => 'Email',
								'value' => $mahasiswa['email']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="nama_ayah" class="col-sm-3 control-label">Nama Ayah</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name'	=> 'nama_ayah',
								'id'	=> 'nama_ayah',
								'class'	=> 'form-control',
								'placeholder' => 'Nama Ayah',
								'value'	=> $mahasiswa['nama_ayah']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="nama_ibu" class="col-sm-3 control-label">Nama Ibu</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name'	=> 'nama_ibu',
								'id'	=> 'nama_ibu',
								'class'	=> 'form-control',
								'placeholder' => 'Nama Ibu',
								'value'	=> $mahasiswa['nama_ibu']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="tanggal_yudisium" class="col-sm-3 control-label">Tanggal Yudisium</label>
						<div class="col-sm-9">
							<input type="date" name="tanggal_yudisium" class="form-control" id="tanggal_yudisium" value="<?php echo $mahasiswa['tanggal_yudisium']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="ipk" class="col-sm-3 control-label">IPK</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name'	=> 'ipk',
								'id'	=> 'ipk',
								'class'	=> 'form-control required',
								'placeholder' => 'IPK',
								'value'	=> $mahasiswa['ipk']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="judul_skripsi" class="col-sm-3 control-label">Judul Skripsi</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name'	=> 'judul_skripsi',
								'id'	=> 'judul_skripsi',
								'class'	=> 'form-control required',
								'placeholder' => 'Judul Skripsi',
								'value'	=> $mahasiswa['judul_skripsi']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="status_bayar" class="col-sm-3 control-label">Status Bayar</label>
						<div class="col-sm-9">
							<?php
							$data = array(
								'' => '-- Pilihan Status Bayar --',
								'Sudah' => 'Sudah',
								'Belum' => 'Belum',
							);
							echo form_dropdown('status_bayar', $data, $mahasiswa['status_bayar'], "class='autocomplete form-control'");
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="alamat" class="control-label col-sm-3">Alamat</label>
						<div class="col-sm-9">
							<?php
							echo form_textarea(array(
								'name' => 'alamat',
								'id' => 'alamat',
								'class' => 'form-control',
								'style' => 'resize: none',
								'placeholder' => 'Alamat',
								'rows' => '3',
								'cols' => '10',
								'value' => $mahasiswa['alamat']
							));
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<div class="col-md-offset-5">
					<a href="<?php echo site_url($uriKu . 'mahasiswa'); ?>" class="btn btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Kembali">
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