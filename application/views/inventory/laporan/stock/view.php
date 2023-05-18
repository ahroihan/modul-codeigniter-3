<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Laporan Stock Barang
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Laporan</a></li>
            <li class="active">Stock Barang</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <a href="<?php echo site_url($uriKu . 'laporan/cetak_stock/'); ?>" type="button" class="btn btn-flat btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Cetak Data" target="_blank">
                    <i class="glyphicon glyphicon-print"> <b>Cetak</b></i>
                </a>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="bg-green">
                            <th width="5%" class="text-center">No</th>
                            <th width="50%" class="text-center">Nama Barang</th>
                            <th width="15%" class="text-center">Unit</th>
                            <th width="10%" class="text-center">Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $number = 1;
                        foreach ($stock as $row) : ?>
                            <tr>
                                <td><?php echo $number++; ?></td>
                                <td><?php echo $row['barang']; ?></td>
                                <td class="text-center"><?php echo $row['base'] . " " . $row['unit'] . " @pack"; ?></td>
                                <td class="text-center"><?php echo $row['stock']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>
</div>