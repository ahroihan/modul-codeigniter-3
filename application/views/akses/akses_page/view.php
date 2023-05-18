<div class="content-wrapper">
	<section class="content-header">
		<h1>
			HALAMAN AKSES LEVEL
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Level</li>
		</ol>
	</section>
	<section class="content">
		<div class="box">
			<div class="box-header with-border">
				INI AKSES LEVEL Untuk: <u><?php echo $level['akses']; ?></u>
			</div>
			<div class="box-body">
				AKSES LEVEL Bisa Akses Halaman: <p><u><?php echo ($level['akses_page']) ? $level['akses_page'] : 'Silahkan minta admin untuk ubah Hak Akses untuk bisa melanjutkan aplikasi ini'; ?></u></p>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</section>
</div>