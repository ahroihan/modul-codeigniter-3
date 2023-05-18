<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Laporan Mahasiswa
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Laporan</a></li>
            <li class="active">Mahasiswa</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <a href="<?php echo site_url($uriKu . 'laporan/cetak_mahasiswa/'); ?>" type="button" class="btn btn-flat btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Cetak Data" target="_blank">
                    <i class="glyphicon glyphicon-print"> <b>Cetak</b></i>
                </a>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="bg-green">
                            <th width="5%">No</th>
                            <th width="10%">NIM</th>
                            <th width="25%">Nama</th>
                            <th width="25%">Prodi</th>
                            <th width="20%">Tanggal Yudisium</th>
                            <th width="10%">Status Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($mahasiswa) :
                            $number = 1;
                            foreach ($mahasiswa as $row) :
                        ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $row['nim']; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo $row['prodi']; ?></td>
                                    <td><?php echo date('d-M-Y', strtotime($row['tanggal_yudisium'])); ?></td>
                                    <td><?php echo $row['status_bayar']; ?></td>
                                </tr>
                            <?php endforeach;
                        else : ?>
                            <td class="ctr" colspan="6">
                                <p class="bg-danger padding-medium">Tidak ada data</p>
                            </td>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>
</div>