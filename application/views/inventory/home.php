<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
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
                        <div id="stok" style="height: 350px"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Highchart -->
<script src="<?php echo base_url('assets/plugins/highcharts/highcharts.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/highcharts/highcharts-3d.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/highcharts/modules/exporting.js'); ?>"></script>
<script>
    $('#stok').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Jumlah Stok Barang'
        },
        xAxis: {
            categories: <?php echo json_encode($stok['name']); ?>,
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y} unit</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            },
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y} unit'
                }
            }
        },
        credits: {
            enabled: false
        },
        legend: {
            enabled: false
        },
        series: [{
            name: 'Stok',
            colorByPoint: true,
            data: <?php echo json_encode($stok['data']); ?>
        }]
    });
</script>