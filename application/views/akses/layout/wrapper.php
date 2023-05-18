<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="id-ID">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <title><?php echo (isset($title)) ? $title : 'Aplikasi CI'; ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.jpg') ?>" />
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.css'); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css'); ?>">
    <!-- Parsley -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/parsley/parsley.css'); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/select2.css'); ?>">
    <!-- DatePicker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/bootstrap-datetimepicker.css'); ?>">
    <!-- DateRangePicker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker-bs3.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.css'); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script>
</head>

<body class="hold-transition skin-green sidebar-mini">
    <?php require "helper.php"; ?>
    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo base_url(); ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img src="<?php echo base_url('assets/img/logo.jpg') ?>" width="30px" /></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg" style="font-size: 16px;">
                    <b>Aplikasi Hak Akses Pengguna</b>
                </span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <?php
                            if (!$this->session->userdata('foto')) {
                                $this->session->set_userdata(array('foto' => '../profile.gif'));
                            }
                            ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url('assets/img/upload/' . $this->session->userdata('foto')); ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $this->session->userdata('nama') ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url('assets/img/upload/' . $this->session->userdata('foto')); ?>" class="img-circle" alt="User Image">
                                    <p>
                                        <?php echo $this->session->userdata('nama') ?>
                                        <br>
                                        <strong>(<?php echo ucfirst($this->session->userdata('akses')); ?>)</strong>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo site_url($uriKu . 'user/profile') ?>" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo site_url($uriKu . 'home/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo base_url('assets/img/upload/' . $this->session->userdata('foto')); ?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $this->session->userdata('nama') ?></p>
                        <i class="fa fa-circle text-success"></i> Online
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <?php $this->load->view($uriKu . 'layout/sidebar'); ?>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <?php require "content.php"; ?>

        <footer class="main-footer">
            <strong>Copyright &copy; <?php echo date('Y'); ?></strong> All rights reserved.<br>
            Available donation: Mandiri 1550003762294 & BCA 7110867489 & BSI 4182402570 & BNI 1333291890 & BRI 092001003926500
        </footer>
    </div><!-- ./wrapper -->

    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/plugins/fastclick/fastclick.min.js'); ?>"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url('assets/plugins/parsley/parsley.min.js'); ?>"></script>
    <!-- Select -->
    <script src="<?php echo base_url('assets/plugins/select2/select2.min.js'); ?>"></script>
    <!-- Moment -->
    <script src="<?php echo base_url('assets/plugins/moment/moment.min.js'); ?>"></script>
    <!-- Date Picker -->
    <script src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datetimepicker.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datepicker/locale/id.js'); ?>"></script>
    <!-- Date Range Picker -->
    <script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
    <!-- MD5 Javascript -->
    <script src="<?php echo base_url('assets/plugins/md5/md5.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/dist/js/app.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
</body>

</html>