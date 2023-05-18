<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            404 Error Page
        </h1>
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        </ul>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="error-page">
            <h2 class="headline text-yellow"><?php echo $title; ?></h2>
            <div class="error-content" style="padding-top:20px">
                <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
                <p><?php echo $content; ?></p>
                <p>
                    We could not find the page you were looking for.
                    Meanwhile, you may <a href="<?php echo base_url(); ?>">return to main page</a>
                </p>
            </div><!-- /.error-content -->
        </div><!-- /.error-page -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->