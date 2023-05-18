<?php
$hak_akses = $this->session->userdata('level');
$dashboard = "";

$first_uri = ($uriKu) ? $this->uri->segment(2) : $this->uri->segment(1);
$second_uri = ($uriKu) ? $this->uri->segment(3) : $this->uri->segment(2);

if (($first_uri == "home") || ($first_uri == "")) {
    $dashboard = "active";
}

$pengguna = "";
if ($first_uri == "pengguna") {
    $pengguna = "active";
}

?>
<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="<?php echo $dashboard; ?>"><a href="<?php echo base_url() . $uriKu; ?>"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
    <li class="<?php echo $pengguna; ?>"><a href="<?php echo site_url($uriKu . 'pengguna'); ?>"><i class="fa fa-users"></i> Pengguna</a></li>
</ul>