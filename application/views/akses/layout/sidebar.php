<?php
$hak_akses = $this->session->userdata('akses');
$dashboard = "";

$first_uri = ($uriKu) ? $this->uri->segment(2) : $this->uri->segment(1);
$second_uri = ($uriKu) ? $this->uri->segment(3) : $this->uri->segment(2);

if (($first_uri == "home") || ($first_uri == "")) {
    $dashboard = "active";
}

$data = "";
$sub_page = "";
if ($first_uri == "page") {
    $data = "active";
    $sub_page = "active";
}

$data_akses = "";
$sub_data_akses = "";
if ($first_uri == "level") {
    $data_akses = "active";
    $sub_data_akses = "active";
}

$pengguna = "";
if ($first_uri == "pengguna") {
    $pengguna = "active";
}
?>
<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="<?php echo $dashboard; ?>"><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li class="treeview <?php echo $data; ?>">
        <a href="#">
            <i class="fa fa-database"></i>
            <span>Data</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo $sub_page; ?>">
                <a href="<?php echo site_url($uriKu . 'page'); ?>"><i class="fa fa-circle-o"></i> Akses Halamanku</a>
            </li>
        </ul>
    </li>
    <?php if (in_array('level', $ha)) : ?>
        <li class="treeview <?php echo $data_akses; ?>">
            <a href="#">
                <i class="fa fa-database"></i>
                <span>Akses Level</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo $sub_data_akses; ?>">
                    <a href="<?php echo site_url($uriKu . 'level'); ?>"><i class="fa fa-circle-o"></i> Akses</a>
                </li>
            </ul>
        </li>
    <?php endif; ?>
    <?php if (in_array('pengguna', $ha)) : ?>
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
    <?php endif; ?>
</ul>