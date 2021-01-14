
<div class="wrapper hold-transition skin-blue sidebar-mini  bg-info">

    <!-- Main Header -->
    <header class="main-header">
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Menu</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <div class="user-panel">
                    <div class="pull-left info">
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i>
                            <b> <?php echo $this->session->userdata('pseudo_utilisateur'); ?></b> <br>
                            <?php echo $this->session->userdata('role_utilisateur'); ?></a>
                        <br>
                        <!-- Menu Toggle Button -->
                        <a href=" <?= base_url() . '/connexion/deconnexion' ?>" class="btn btn-danger btn-lg">Déconnexion</a>
                    </div>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu btn btn-danger ">

                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <a href="<?php echo site_url('webmaster/') ?>" class="btn btn-lg btn-primary">
                <i class="fa fa-home"></i> <span>Accueil</span></a>
            <a href="<?php echo site_url('webmaster/gerer_utilisateur') ?>" class="btn btn-lg btn-success">
                        <i class="fa fa-user-plus"></i> <span>Gérer compte utilisateur</span></a>
            <a href="<?php echo site_url('webmaster/gerer_salles') ?>" class="btn btn-lg btn-danger">
                                    <i class="fa fa-user-plus"></i> <span>Gérer salles de fete</span></a>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="jumbotron bg-info text-center">
                <h1>Geston de comptes utilisateurs</h1>
                <hr>
                <div style="padding: 5px">
                    <?php echo $output; ?>
                </div>
            </div>
        </section>
      </div>
</div>
