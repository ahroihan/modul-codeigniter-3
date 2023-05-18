<?php
$hak_akses = $this->session->userdata('level');
$dashboard = "";

$first_uri = ($uriKu) ? $this->uri->segment(2) : $this->uri->segment(1);
$second_uri = ($uriKu) ? $this->uri->segment(3) : $this->uri->segment(2);

if (($first_uri == "home") || ($first_uri == "")) {
    $dashboard = "active";
}

$data = "";
$sub_mahasiswa = "";
if ($first_uri == "mahasiswa") {
    $data = "active";
    $sub_mahasiswa = "active";
}

$pengguna = "";
if ($first_uri == "pengguna") {
    $pengguna = "active";
}

$laporan = "";
$sub_lap_mahasiswa = "";

if ($first_uri == "laporan") {
    $laporan = "active";
}
if (($first_uri == "laporan") && ($second_uri == "mahasiswa")) {
    $sub_lap_mahasiswa = "active";
}

?>
<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="<?php echo $dashboard; ?>"><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <?php if ($hak_akses != "staf") : ?>
        <li class="treeview <?php echo $data; ?>">
            <a href="#">
                <i class="fa fa-database"></i>
                <span>Data</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo $sub_mahasiswa; ?>">
                    <a href="<?php echo site_url($uriKu . 'mahasiswa'); ?>"><i class="fa fa-circle-o"></i> Mahasiswa</a>
                </li>
            </ul>
        </li>
        <li class="treeview <?php echo $pengguna; ?>">
            <a href="#">
                <i class="fa fa-users"></i>
                <span>Pengguna</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
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
                <li class="<?php echo $sub_lap_mahasiswa; ?>">
                    <a href="<?php echo site_url($uriKu . 'laporan/mahasiswa'); ?>"><i class="fa fa-circle-o"></i> Mahasiswa</a>
                </li>
            </ul>
        </li>
    <?php else : ?>
        <li class="treeview <?php echo $laporan; ?>">
            <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Laporan</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo $sub_lap_mahasiswa; ?>">
                    <a href="<?php echo site_url($uriKu . 'laporan/mahasiswa'); ?>"><i class="fa fa-circle-o"></i> Mahasiswa</a>
                </li>
            </ul>
        </li>
    <?php endif; ?>
</ul>