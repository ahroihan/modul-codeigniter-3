<?php
$hak_akses = $this->session->userdata('level');
$dashboard = "";

$first_uri = ($uriKu) ? $this->uri->segment(2) : $this->uri->segment(1);
$second_uri = ($uriKu) ? $this->uri->segment(3) : $this->uri->segment(2);

if (($first_uri == "home") || ($first_uri == "")) {
    $dashboard = "active";
}

$master = "";
$sub_aset = "";
$tempat = "";
$sub_lokasi = "";
$sub_plant = "";
if ($first_uri == "aset") {
    $master = "active";
    $sub_aset = "active";
}
if (($first_uri == "lokasi") && ($second_uri == "plant")) {
    $master = "active";
    $tempat = "active";
    $sub_plant = "active";
} elseif (($first_uri == "lokasi") && ($second_uri != "plant")) {
    $master = "active";
    $tempat = "active";
    $sub_lokasi = "active";
}

$transaksi = "";
$sub_purchasing = "";
$sub_penerimaan = "";
$sub_permintaan = "";
$sub_pengeluaran = "";
$sub_retur = "";
$sub_pemakaian = "";
$sub_produksi = "";
$sub_finish = "";
if (($first_uri == "purchasing") || ($first_uri == "penerimaan") || ($first_uri == "permintaan") || ($first_uri == "pengeluaran") || ($first_uri == "retur") || ($first_uri == "pemakaian") || ($first_uri == "produksi") || ($first_uri == "finishgood")) {
    $transaksi = "active";
}
if ($first_uri == "purchasing") {
    $sub_purchasing = "active";
} else if ($first_uri == "penerimaan") {
    $sub_penerimaan = "active";
} else if ($first_uri == "permintaan") {
    $sub_permintaan = "active";
} elseif ($first_uri == "pengeluaran") {
    $sub_pengeluaran = "active";
} elseif ($first_uri == "retur") {
    $sub_retur = "active";
} elseif ($first_uri == "pemakaian") {
    $sub_pemakaian = "active";
} elseif ($first_uri == "produksi") {
    $sub_produksi = "active";
} elseif ($first_uri == "finishgood") {
    $sub_finish = "active";
}

$pengguna = "";
if ($first_uri == "pengguna") {
    $pengguna = "active";
}

$laporan = "";
$sub_lap_aset = "";
$sub_lap_purchasing = "";
$sub_lap_penerimaan = "";
$sub_lap_permintaan = "";
$sub_lap_pengeluaran = "";
$sub_lap_retur = "";
$sub_lap_pemakaian = "";
$sub_lap_produksi = "";
$sub_lap_stock = "";

if ($first_uri == "laporan") {
    $laporan = "active";
}
if (($first_uri == "laporan") && ($second_uri == "aset")) {
    $sub_lap_aset = "active";
} else if (($first_uri == "laporan") && ($second_uri == "purchasing")) {
    $sub_lap_purchasing = "active";
} else if (($first_uri == "laporan") && ($second_uri == "penerimaan")) {
    $sub_lap_penerimaan = "active";
} else if (($first_uri == "laporan") && ($second_uri == "permintaan")) {
    $sub_lap_permintaan = "active";
} else if (($first_uri == "laporan") && ($second_uri == "pengeluaran")) {
    $sub_lap_pengeluaran = "active";
} elseif ($first_uri == "laporan" && $second_uri == "retur") {
    $sub_lap_retur = "active";
} elseif ($first_uri == "laporan" && $second_uri == "pemakaian") {
    $sub_lap_pemakaian = "active";
} elseif ($first_uri == "laporan" && $second_uri == "produksi") {
    $sub_lap_produksi = "active";
} else if (($first_uri == "laporan") && ($second_uri == "pengguna")) {
    $sub_lap_pengguna = "active";
} elseif ($first_uri == "laporan" && $second_uri == "stock") {
    $sub_lap_stock = "active";
}
?>
<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="<?php echo $dashboard; ?>"><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <?php if ($hak_akses == "admin") : ?>
        <li class="treeview <?php echo $master; ?>">
            <a href="#"> <i class="fa fa-database"></i> <span>Master</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
                <li class="<?php echo $sub_aset; ?>"> <a href="<?php echo site_url($uriKu . 'aset'); ?>"><i class="fa fa-circle-o"></i> Aset</a> </li>
                <li class="treeview <?php echo $tempat; ?>">
                    <a href="#"><i class="fa fa-download"></i> Tempat Penyimpanan <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="<?php echo $sub_lokasi; ?>"> <a href="<?php echo site_url($uriKu . 'lokasi'); ?>"><i class="fa fa-circle-o"></i> Lokasi</a> </li>
                        <li class="<?php echo $sub_plant; ?>"> <a href="<?php echo site_url($uriKu . 'lokasi/plant'); ?>"><i class="fa fa-circle-o"></i> Plant</a> </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="treeview <?php echo $transaksi; ?>">
            <a href="#"> <i class="fa fa-exchange"></i> <span>Transaksi</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
                <li class="<?php echo $sub_purchasing; ?>"><a href="<?php echo site_url($uriKu . 'purchasing'); ?>"><i class="fa fa-circle-o"></i> Purchase Order</a></li>
                <li class="<?php echo $sub_penerimaan; ?>"><a href="<?php echo site_url($uriKu . 'penerimaan'); ?>"><i class="fa fa-circle-o"></i> Penerimaan Barang</a></li>
                <li class="<?php echo $sub_permintaan; ?>"><a href="<?php echo site_url($uriKu . 'permintaan'); ?>"><i class="fa fa-circle-o"></i> Permintaan</a></li>
                <li class="<?php echo $sub_pengeluaran; ?>"><a href="<?php echo site_url($uriKu . 'pengeluaran'); ?>"><i class="fa fa-circle-o"></i> Pengeluaran Barang</a></li>
                <li class="<?php echo $sub_retur; ?>"><a href="<?php echo site_url($uriKu . 'retur'); ?>"><i class="fa fa-circle-o"></i> Retur Barang</a></li>
                <li class="<?php echo $sub_pemakaian; ?>"><a href="<?php echo site_url($uriKu . 'pemakaian'); ?>"><i class="fa fa-circle-o"></i> Pemakaian Produksi</a></li>
                <li class="<?php echo $sub_produksi; ?>"><a href="<?php echo site_url($uriKu . 'produksi'); ?>"><i class="fa fa-circle-o"></i> Hasil Produksi</a></li>
                <li class="<?php echo $sub_finish; ?>"><a href="<?php echo site_url($uriKu . 'finishgood'); ?>"><i class="fa fa-circle-o"></i> Finish Good</a></li>
            </ul>
        </li>
        <li class="treeview <?php echo $pengguna; ?>">
            <a href="#"> <i class="fa fa-users"></i> <span>Pengguna</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
                <li class="<?php echo $pengguna; ?>"><a href="<?php echo site_url($uriKu . 'pengguna'); ?>"><i class="fa fa-circle-o"></i> Pengguna</a></li>
            </ul>
        </li>
        <li class="treeview <?php echo $laporan; ?>">
            <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Laporan</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo $sub_lap_aset; ?>"> <a href="<?php echo site_url($uriKu . 'laporan/aset'); ?>"><i class="fa fa-circle-o"></i> Aset</a> </li>
                <li class="<?php echo $sub_lap_penerimaan; ?>"> <a href="<?php echo site_url($uriKu . 'laporan/penerimaan'); ?>"><i class="fa fa-circle-o"></i> Penerimaan Barang</a> </li>
                <li class="<?php echo $sub_lap_pengeluaran; ?>"> <a href="<?php echo site_url($uriKu . 'laporan/pengeluaran'); ?>"><i class="fa fa-circle-o"></i> Pengeluaran Barang</a> </li>
                <li class="<?php echo $sub_lap_retur; ?>"> <a href="<?php echo site_url($uriKu . 'laporan/retur'); ?>"><i class="fa fa-circle-o"></i> Retur Barang</a> </li>
                <li class="<?php echo $sub_lap_pemakaian; ?>"> <a href="<?php echo site_url($uriKu . 'laporan/pemakaian'); ?>"><i class="fa fa-circle-o"></i> Pemakaian Produksi</a> </li>
                <li class="<?php echo $sub_lap_produksi; ?>"> <a href="<?php echo site_url($uriKu . 'laporan/produksi'); ?>"><i class="fa fa-circle-o"></i> Hasil Produksi</a> </li>
                <li class="<?php echo $sub_lap_stock; ?>"> <a href="<?php echo site_url($uriKu . 'laporan/stock'); ?>"><i class="fa fa-circle-o"></i> Stock Barang</a> </li>
            </ul>
        </li>
    <?php elseif ($hak_akses == "manager") : ?>
        <li class="treeview <?php echo $laporan; ?>">
            <a href="#"> <i class="fa fa-calendar"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
                <li class="<?php echo $sub_lap_aset; ?>"> <a href="<?php echo site_url($uriKu . 'laporan/aset'); ?>"><i class="fa fa-circle-o"></i> Aset</a> </li>
                <li class="<?php echo $sub_lap_penerimaan; ?>"><a href="<?php echo site_url($uriKu . 'laporan/penerimaan'); ?>"><i class="fa fa-circle-o"></i> Penerimaan Barang</a> </li>
                <li class="<?php echo $sub_lap_pengeluaran; ?>"><a href="<?php echo site_url($uriKu . 'laporan/pengeluaran'); ?>"><i class="fa fa-circle-o"></i> Pengeluaran Barang</a> </li>
                <li class="<?php echo $sub_lap_retur; ?>"> <a href="<?php echo site_url($uriKu . 'laporan/retur'); ?>"><i class="fa fa-circle-o"></i> Retur Barang</a> </li>
                <li class="<?php echo $sub_lap_pemakaian; ?>"> <a href="<?php echo site_url($uriKu . 'laporan/pemakaian'); ?>"><i class="fa fa-circle-o"></i> Pemakaian Produksi</a> </li>
                <li class="<?php echo $sub_lap_produksi; ?>"> <a href="<?php echo site_url($uriKu . 'laporan/produksi'); ?>"><i class="fa fa-circle-o"></i> Hasil Produksi</a> </li>
                <li class="<?php echo $sub_lap_stock; ?>"> <a href="<?php echo site_url($uriKu . 'laporan/stock'); ?>"><i class="fa fa-circle-o"></i> Stock Barang</a> </li>
            </ul>
        </li>
    <?php elseif ($hak_akses == "produksi") : ?>
        <li class="treeview <?php echo $transaksi; ?>">
            <a href="#"> <i class="fa fa-exchange"></i> <span>Transaksi</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
                <li class="<?php echo $sub_permintaan; ?>"><a href="<?php echo site_url($uriKu . 'permintaan'); ?>"><i class="fa fa-circle-o"></i> Permintaan</a></li>
                <li class="<?php echo $sub_pemakaian; ?>"><a href="<?php echo site_url($uriKu . 'pemakaian'); ?>"><i class="fa fa-circle-o"></i> Pemakaian Produksi</a></li>
                <li class="<?php echo $sub_produksi; ?>"><a href="<?php echo site_url($uriKu . 'produksi'); ?>"><i class="fa fa-circle-o"></i> Hasil Produksi</a></li>
            </ul>
        </li>
    <?php elseif ($hak_akses == "gudang") : ?>
        <li class="treeview <?php echo $master; ?>">
            <a href="#"> <i class="fa fa-database"></i> <span>Master</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
                <li class="<?php echo $sub_aset; ?>"> <a href="<?php echo site_url($uriKu . 'aset'); ?>"><i class="fa fa-circle-o"></i> Aset</a> </li>
                <li class="treeview <?php echo $tempat; ?>">
                    <a href="#"><i class="fa fa-download"></i> Tempat Penyimpanan <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="<?php echo $sub_lokasi; ?>"> <a href="<?php echo site_url($uriKu . 'lokasi'); ?>"><i class="fa fa-circle-o"></i> Lokasi</a> </li>
                        <li class="<?php echo $sub_plant; ?>"> <a href="<?php echo site_url($uriKu . 'lokasi/plant'); ?>"><i class="fa fa-circle-o"></i> Plant</a> </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="treeview <?php echo $transaksi; ?>">
            <a href="#"> <i class="fa fa-exchange"></i> <span>Transaksi</span> <i class="fa fa-angle-left pull-right"></i> </a>
            <ul class="treeview-menu">
                <li class="<?php echo $sub_penerimaan; ?>"><a href="<?php echo site_url($uriKu . 'penerimaan'); ?>"><i class="fa fa-circle-o"></i> Penerimaan</a></li>
                <li class="<?php echo $sub_pengeluaran; ?>"><a href="<?php echo site_url($uriKu . 'pengeluaran'); ?>"><i class="fa fa-circle-o"></i> Pengeluaran</a></li>
                <li class="<?php echo $sub_retur; ?>"><a href="<?php echo site_url($uriKu . 'retur'); ?>"><i class="fa fa-circle-o"></i> Retur Barang</a></li>
                <li class="<?php echo $sub_finish; ?>"><a href="<?php echo site_url($uriKu . 'finishgood'); ?>"><i class="fa fa-circle-o"></i> Finish Good</a></li>
            </ul>
        </li>
    <?php elseif ($hak_akses == "purchasing") : ?>
        <li class="treeview <?php echo $transaksi; ?>">
            <a href="#"> <i class="fa fa-exchange"></i> <span>Transaksi</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li class="<?php echo $sub_purchasing; ?>"><a href="<?php echo site_url($uriKu . 'purchasing'); ?>"><i class="fa fa-circle-o"></i> Purchase Order</a></li>
            </ul>
        </li>
    <?php endif; ?>
</ul>