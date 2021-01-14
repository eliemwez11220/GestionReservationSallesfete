<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= "SONAS | " . $this->session->role_utilisateur; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet"
          href="<?php echo base_url('admin_lite/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="<?php echo base_url('admin_lite/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('admin_lite/bower_components/Ionicons/css/ionicons.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('admin_lite/dist/css/AdminLTE.min.css'); ?>">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="<?php echo base_url('admin_lite/dist/css/skins/skin-blue.min.css'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- GroceryCRUD files core CSS -->
    <?php
    foreach ($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>"/>
    <?php endforeach; ?>

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href=" <?php echo base_url() . '/connexion/deconnexion' ?>"
                           class="btn btn-danger btn-flat">Déconnexion</a>
                    </li>

                    <li class=" btn btn-success btn-flat">
                        <a href="<?php echo base_url('comptable/') ?>">
                            <i class="fa fa-home"></i> <span>Accueil</span></a>
                    </li>
                    <!-- User Account Menu -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image text-uppercase text-light">
                    <h1>Bienvenue <b> <?php echo $this->session->userdata('pseudo_utilisateur'); ?></b></h1>
                    <h3>
                        <a href="#"><i class="fa fa-circle text-success"></i>
                            <b> <?php echo $this->session->userdata('role_utilisateur'); ?>
                            </b> </a></h3>
                </div>
            </div>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="jumbotron bg-dark text-light">
                <h1 class="text-center">GESTION STOCKS DE PAIEMENTS</h1>
                <a class="btn btn-danger btn-lg text-center offset-5"
                   href="<?php echo base_url('comptable/lister_paiements') ?>">
                    <i class="fa fa-dollar"></i> <span>Gérer paiements</span></a>
                    <hr>
                    <div style="padding: 5px">
                        <?php echo $output; ?>
                    </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <?php foreach ($js_files as $file): ?>
                <script src="<?php echo $file; ?>"></script>
            <?php endforeach; ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

</div>


<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php //echo base_url('assets/js/vendor/jquery-slim.min.js'); ?>"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/vendor/jquery-slim.min.js'); ?>"><\/script>')</script>
<script src="<?php echo base_url('assets/js/vendor/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('dist/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendor/holder.min.js'); ?> "></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>admin_lite/dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': true
        })
    })

</script>
</body>
</html>