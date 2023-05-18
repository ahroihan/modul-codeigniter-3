<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Manajemen Aset
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url($uriKu . 'aset'); ?>"> Aset</a></li>
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
						if (!$aset['picture']) {
							$picture = base_url('assets/img/upload/logo_transparent.png');
						} else {
							$picture = base_url('/assets/img/upload/' . $aset['picture']);
						}
						?>
						<img id="blah" src="<?php echo $picture; ?>" style="width: 100%;" onerror="imgError(this);" />
						<div class="input-group">
							<?php
							echo form_input(array(
								'name' => 'picture',
								'id' => 'picture',
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
						<label for="material" class="col-sm-3 control-label">Nama Material</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name' => 'material',
								'id' => 'material',
								'class' => 'form-control',
								'placeholder' => 'Nama Material',
								'value' => $aset['material']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="material_desc" class="col-sm-3 control-label">Deskripsi Material</label>
						<div class="col-sm-9">
							<?php
							echo form_textarea(array(
								'name' => 'material_desc',
								'id' => 'material_desc',
								'class' => 'form-control',
								'style' => 'resize: none',
								'placeholder' => 'Deskripsi Material',
								'rows' => '3',
								'cols' => '10',
								'value' => $aset['material_desc']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="base_unit" class="col-sm-3 control-label">Base Unit</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name' => 'base_unit',
								'id' => 'base_unit',
								'class' => 'form-control',
								'placeholder' => 'Base Unit (pcs/kg)',
								'value' => $aset['base_unit']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="base" class="col-sm-3 control-label">Base</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name'	=> 'base',
								'id'	=> 'base',
								'class'	=> 'form-control',
								'placeholder' => 'Base',
								'onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 45 || event.charCode == 13)',
								'value'	=> $aset['base']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="correct" class="col-sm-3 control-label">Data Stock</label>
						<div class="col-sm-9">
							<?php
							$data = array(
								'' => '-- Pilih Data Stock --',
								1 => 'BENAR',
								2 => 'SALAH',
							);
							echo form_dropdown('correct', $data, $aset['correct'], "class='autocomplete form-control'");
							?>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="stock">Stock</label>
						<div class="col-sm-9">
							<?php
							echo form_input(array(
								'name' => 'stock',
								'id' => 'stock',
								'class' => 'form-control required',
								'placeholder' => 'Stock',
								'maxlength' => '4',
								'onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57 || event.charCode == 45 || event.charCode == 13)',
								'value' => $aset['stock']
							));
							?>
						</div>
					</div>
					<div class="form-group">
						<label for="desc_storage" class="col-sm-3 control-label">
							Lokasi
						</label>
						<div class="col-sm-9">
							<?php
							if ($aset['id_lokasi']) {
								if (!array_key_exists($aset['id_lokasi'], $lokasi)) {
									$lokasi[$aset['id_lokasi']] = 'lokasi sudah dihapus';
								}
							}
							echo form_dropdown('id_lokasi', $lokasi, (isset($aset['id_lokasi'])) ? $aset['id_lokasi'] : '', 'class="autocomplete form-control required"');
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<div class="col-md-offset-5">
					<a href="<?php echo site_url($uriKu . 'aset'); ?>" class="btn btn-flat btn-default" data-toggle="tooltip" data-placement="top" title="Kembali">
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