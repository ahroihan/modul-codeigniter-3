<style>
    .inputfile {
        /* visibility: hidden etc. wont work */
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
        cursor: pointer;
    }

    .inputfile:focus+label {
        /* keyboard navigation */
        outline: 1px dotted #000;
        /* outline: -webkit-focus-ring-color auto 5px; */
    }

    .inputfile+label * {
        pointer-events: all;
        background-color: #173547;
        border-color: #367fa9;
        -webkit-appearance: button;
        cursor: pointer;
        margin: 6px;
        color: #fff;
        border-radius: 5px;
        height: 30px;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Home
        </h1>
        <ol class="breadcrumb">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <form method="post" action="<?php echo base_url() . $uriKu . 'home/import'; ?>" enctype="multipart/form-data">
                            <a href="<?php echo base_url() . 'assets/upload/template.xlsx'; ?>"" class=" btn btn-flat btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Download" id="download" target="_blank">
                                <i class="glyphicon glyphicon-download"> <b>Download template File xlsx/xls</b></i>
                            </a>
                            <input type="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="file" id="file" class="inputfile">
                            <label for="file" id="labelFile"><i class="glyphicon glyphicon-file"> <b style="background-color: transparent;">Choose File</b></i></label>
                            <button type="submit" class="btn btn-flat btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Upload" id="upload" disabled>
                                <i class="glyphicon glyphicon-upload"> <b>Upload</b></i>
                            </button>
                        </form>
                    </div>
                    <div class="box-body">
                        <?php if ($this->session->flashdata('msg')) : ?>
                            <div class="alert alert-primary">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <i class="fa fa-ban-circle"></i><?php echo $this->session->flashdata('msg'); ?>
                            </div>
                        <?php endif; ?>
                        <h2 style="text-align: center;"><?php echo $title; ?></h2>
                        <?php echo form_open_multipart($action, 'class="form-horizontal" data-parsley-validate'); ?>
                        <div class="col-md-offset-5">
                            <div class="form-group">
                                <label for="nama" class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-9">
                                    <?php
                                    echo form_input(array(
                                        'name' => 'nama',
                                        'id' => 'nama',
                                        'class' => 'form-control required',
                                        'placeholder' => 'Nama',
                                        'maxlength' => '30',
                                        'value' => (isset($data['nama'])) ? $data['nama'] : ''
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                                <div class="col-sm-9">
                                    <?php
                                    echo form_input(array(
                                        'name' => 'alamat',
                                        'id' => 'alamat',
                                        'class' => 'form-control',
                                        'placeholder' => 'Alamat',
                                        'maxlength' => '50',
                                        'value' => (isset($data['alamat'])) ? $data['alamat'] : ''
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
                                        'class' => 'form-control',
                                        'placeholder' => 'Telepon',
                                        'maxlength' => '30',
                                        'value' => (isset($data['telepon'])) ? $data['telepon'] : ''
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="col-md-offset-5">
                            <button type="submit" class="btn btn-flat btn-primary" data-toggle="tooltip" data-placement="top" title="Simpan Data" onclick="return checkSize(2097152)">
                                <i class="glyphicon glyphicon-floppy-save"></i> Simpan
                            </button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <a href="<?php echo site_url($uriKu . 'home/cetak_laporan'); ?>" type="button" class="btn btn-flat btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Cetak Data" target="_blank">
                    <i class="glyphicon glyphicon-print"> <b>Cetak</b></i>
                </a>
            </div>
            <div class="box-body">
                <?php if ($example) : ?>
                    <table id="datatables" class="table table-bordered table-striped">
                        <thead>
                            <tr class="bg-blue">
                                <th width="5%">No</th>
                                <th width="20%">Nama</th>
                                <th width="32%">Alamat</th>
                                <th width="15%">Telepon</th>
                                <th width="18%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $number = 1;
                            foreach ($example as $row) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo ucfirst($row['alamat']); ?></td>
                                    <td><?php echo $row['telepon']; ?></td>
                                    <td align="center">
                                        <a href="<?php echo site_url($uriKu . 'home/index/' . $row['id']); ?>" type="button" class="btn btn-flat btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Ubah Data">
                                            <i class="glyphicon glyphicon-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <script type="text/javascript" charset="utf-8">
                        $(document).ready(function() {
                            var table;
                            table = $('#datatables').DataTable({
                                "columnDefs": [{
                                    "targets": [4],
                                    "orderable": false,
                                }, ],

                            });
                        })
                    </script>
                <?php else : ?>
                    <p class="bg-danger padding-medium">Tidak ada data</p>
                <?php endif; ?>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>
</div>
<script type="text/javascript">
    $(function() {
        $(".alert").fadeTo(3000, 500).slideUp(500, function() {
            $(".alert").slideUp(500);
        });

        $('#download').click(function() {
            $('#upload').removeAttr('disabled');
        });
        $('#file').change(function() {
            if ($(this).val()) {
                $('#upload').removeAttr('disabled');
                $("#labelFile i").css("background-color", "green");
            }
        });

    });
</script>