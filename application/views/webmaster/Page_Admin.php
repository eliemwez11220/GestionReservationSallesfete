<!doctype html>
<html lang="fr">

<!-- Mirrored from getbootstrap.com/docs/4.1/examples/album/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 23:41:42 GMT -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Tourisme - Page admin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php //echo base_url('dist/css/bootstrap.min.css'); ?>">
    <!-- Custom styles for this template -->
      <link rel="stylesheet"
          href="<?php echo base_url('admin_lite/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="<?php echo base_url('admin_lite/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('admin_lite/bower_components/Ionicons/css/ionicons.min.css'); ?>">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url('assets/album.css'); ?>">
    <link rel="stylesheet" href="<?php //echo base_url('assets/signin.css'); ?>">
       <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('admin_lite/dist/css/AdminLTE.min.css'); ?>">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="<?php echo base_url('admin_lite/dist/css/skins/skin-blue.min.css'); ?>">
</head>

<body class="">
<div class="container">
<!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo site_url() . '/authentification/index' ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>STAGIAIRE </b> APPS</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>GESTION</b> STAGIAIRE</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Menu</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href=" <?php echo site_url() . '/authentification/index_admin' ?>"
                           class="btn btn-success btn-lg">Admin</a>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>

    <div class="text-center jumbotron bg-info">
        <div class="row">
        </div>
        <hr>
        <div class="form-signin row">
            <div class="col-md-3"></div>
            <div class="col-md-6 jumbotron bg-success">
                <h1>Administrateur</h1>
                <h3>Bienvenue cher administrateur. Veuillez introduire vos coordonnées
                    d'identification pour accèder au systeme de gestion des stagiaires.</h3>
                 <?php echo form_open('authentification/connexion_admin'); ?>

                <?php

                if (isset($admin)) {
                    ?>
                    <div class="alert alert-danger text-center">
                        <h4> <?php echo $admin; ?></h4>
                    </div>
                    <?php
                }
                ?>
            
                <label for="inputPassword" class="control-label sr-only">Saisissez votre Mot de passe</label>
                <input type="password" id="inputPassword" class="form-control" name="code_admin"
                       value="<?php echo $this->input->post('admin_code'); ?>"
                       placeholder="Saisissez votre mot de passe" required autofocus><br>
                <button class="btn btn-lg btn-success btn-block" type="submit">Se connecter</button>
                <?php echo form_close(); ?>
            </div>
        </div>

        <footer class="container">
            <p>&copy; 2018-2019 Developped by <a href="http://www.emar-31.webself.net"><b>EMAR IT PRO</b></a></p>
        </footer>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/js/vendor/jquery-slim.min.js'); ?>"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/vendor/jquery-slim.min.js');?>"><\/script>')</script>
<script src="<?php echo base_url('assets/js/vendor/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('dist/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendor/holder.min.js'); ?>"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>admin_lite/dist/js/adminlte.min.js"></script>
</body>
<!-- Mirrored from getbootstrap.com/docs/4.1/examples/sign-in/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 23:41:53 GMT -->
</html>