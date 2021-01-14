
<div class="wrapper bg-info">

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
                        <a href="<?php echo base_url('gerant/') ?>">
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
                <h1 class="text-center">
                    Validation de réservation et de gestion de paiement de frais des salles de fete dans la ville de lubumbashi
                </h1>
                <a class="btn btn-primary btn-lg text-center offset-5"
                   href="<?php echo base_url('gerant/lister_reservations') ?>">
                    <i class="fa fa-pencil"></i> <span>Gérer réservations</span></a>
                <a class="btn btn-success btn-lg text-center offset-5"
                   href="<?php echo base_url('gerant/enregistrer_paiement') ?>">
                    <i class="fa fa-bookmark"></i> <span>Gérer paiements</span></a>
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
