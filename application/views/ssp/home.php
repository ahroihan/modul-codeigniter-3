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
                    <div class="box-body">
                        <?php if ($this->session->flashdata('msg')) : ?>
                            <div class="alert alert-primary">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <i class="fa fa-ban-circle"></i><?php echo $this->session->flashdata('msg'); ?>
                            </div>
                        <?php endif; ?>
                        <h2 style="text-align: center;"><?php echo $title; ?></h2>
                        <div class="col-md-10">
                            <form action="<?php echo base_url() . $uriKu . 'home/update/' . $id; ?>" enctype="multipart/form-data" class="form-horizontal" id="form_example" method="post" role="form">
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Provinsi :</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="id_provinces" id="id_provinces" required>
                                            <optgroup label='Pilih Provinsi'>
                                                <option value="<?php echo ($id) ? $wilayah['id_provinces'] : '0'; ?>" selected><?php echo ($id) ? $wilayah['provinces'] : 'Pilih Provinsi'; ?></option>
                                                <?php if ($select_provinces) : ?>
                                                    <?php foreach ($select_provinces as $item) : ?>
                                                        <option value="<?php echo $item->id_provinces; ?>"><?php echo $item->provinces; ?></option>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <option value="">Tidak ada data</option>
                                                <?php endif; ?>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Kabupaten/ Kota :</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="id_regencies" id="id_regencies" required disabled>
                                            <option value="<?php echo ($id) ? $wilayah['id_regencies'] : '0'; ?>" selected><?php echo ($id) ? $wilayah['regencies'] : 'Pilih Kabupaten/ Kota'; ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Kecamatan :</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="id_districts" id="id_districts" required disabled>
                                            <option value="<?php echo ($id) ? $wilayah['id_districts'] : '0'; ?>" selected><?php echo ($id) ? $wilayah['districts'] : 'Pilih Kecamatan'; ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Kelurahan/ Desa :</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="id_villages" id="id_villages" required disabled>
                                            <option value="<?php echo ($id) ? $wilayah['id_villages'] : '0'; ?>" selected><?php echo ($id) ? $wilayah['villages'] : 'Pilih Kelurahan/ Desa'; ?></option>
                                        </select>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary" value="SAVE">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <?php if ($example) : ?>
                    <table id="datatables" class="table table-bordered table-striped">
                        <thead>
                            <tr class="bg-blue">
                                <th width="5%">No</th>
                                <th width="20%">ID Example</th>
                                <th width="32%">Tempat Tinggal</th>
                                <th width="18%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <?php
                                    $number = 1;
                                    ?>
                            <?php foreach ($example as $row) : ?>
                                <tr>
                                    <td><?php echo $number++; ?></td>
                                    <td><?php echo $row->id_example; ?></td>
                                    <td><?php echo ucfirst($row->villages . '-' . $row->districts . '-' . $row->regencies . '-' . $row->provinces); ?></td>
                                    <td align="center">
                                        <a href="<?php echo site_url($uriKu . 'home/index/' . $row->id_example); ?>" type="button" class="btn btn-flat btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Ubah Data">
                                            <i class="glyphicon glyphicon-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?> -->
                        </tbody>
                    </table>
                    <script type="text/javascript" charset="utf-8">
                        $(document).ready(function() {
                            var table;
                            table = $('#datatables').DataTable({

                                "processing": true,
                                "serverSide": true,
                                "order": [
                                    [1, 'desc']
                                ],

                                "ajax": {
                                    "url": "<?php echo base_url() . $uriKu; ?>home/ListTabel",
                                    "type": "POST"
                                },


                                "columnDefs": [{
                                    "targets": [0, 3],
                                    "orderable": false,
                                }, ],

                            });

                            setInterval(function() {
                                table.ajax.reload();
                            }, 30000);
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
        $.ajaxSetup({
            type: "POST",
            url: "<?php echo base_url() . $uriKu; ?>home/ajax",
            cache: false,
        });

        $("#id_provinces").change(function() {
            $("#id_districts").html('<option value=""></option>');
            $("#id_villages").html('<option value=""></option>');
            var value = $(this).val();
            if (value != '0') {
                $.ajax({
                    data: {
                        modul: 'regencies',
                        id: value
                    },
                    success: function(respond) {
                        $("#id_regencies").html(respond);
                        $("#id_regencies").removeAttr("disabled");
                        $("#id_regencies").select2().select2("val", '0');
                        $("#id_districts").prop("disabled", true);
                        $("#id_villages").prop("disabled", true);
                    }
                })
            }
        });

        $("#id_regencies").change(function() {
            $("#id_villages").html('<option value=""></option>');
            var value = $(this).val();
            if (value != '0') {
                $.ajax({
                    data: {
                        modul: 'districts',
                        id: value
                    },
                    success: function(respond) {
                        $("#id_districts").html(respond);
                        $("#id_districts").removeAttr("disabled");
                        $("#id_districts").select2().select2("val", '0');
                        $("#id_villages").prop("disabled", true);
                    }
                })
            }
        });

        $("#id_districts").change(function() {
            var value = $(this).val();
            if (value != '0') {
                $.ajax({
                    data: {
                        modul: 'villages',
                        id: value
                    },
                    success: function(respond) {
                        $("#id_villages").html(respond);
                        $("#id_villages").removeAttr("disabled");
                        $("#id_villages").select2().select2("val", '0');
                    }
                })
            }
        });

        /* $("form").submit(function() {
            var value = $(this).val();
            if (value != '0') {
                $.ajax({
                    data: {
                        modul: 'submit',
                        id: value
                    },
                    success: function(respond) {
                        $('.content-wrapper').load(" .content-wrapper > *");
                    }
                })
            }
        }); */
        $(".alert").fadeTo(3000, 500).slideUp(500, function() {
            $(".alert").slideUp(500);
        });

    });
</script>