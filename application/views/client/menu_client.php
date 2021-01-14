<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php if (isset($title)){ echo "SONAS | ".$title;}
        else{echo "SONAS | ". $this->session->role_utilisateur;}?>
    </title>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/styles/style_recrutement.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/font-awesome/css/font-awesome.css">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/weblabs.png">

</head>

<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-md bg-info navbar-dark fixed-top" style="font-size:36px;">

        <a href="<?= base_url(); ?>assets/img/weblabs.png" class="navbar-brand logo">
            <img src="<?= base_url(); ?>assets/img/weblabs.png" alt="LOGO" width="100px" height="70px">
        </a>
        <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#barre_menu"
                aria-controls="barre_menu" aria-expanded="false" aria-label="Barre de menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="barre_menu">
            <ul class="navbar-nav mr-auto">
                <li></li>
            </ul>
            <ul class="navbar-nav navbar-brand">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('client/index'); ?>">Accueil <span class="sr-only">(current)</span></a>
                </li> |

                <li class="nav-item btn btn-success btn-sm">
                    <a class="nav-link" href="<?php echo base_url('client/'); ?>">Reservation salle</a>
                </li>|
            </ul>
            <ul class="navbar-nav navbar-brand">
                <li class="nav-item btn btn-danger btn-sm">
                    <a class="nav-link " href="<?php echo base_url('connexion/deconnexion'); ?>">
                       Déconnexion </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<br><br><br><br><br>
<div class="container-fluid bg-info">
    <div class="row">
        <div class="col-sm-6">
            <div class="card-body">
                <div class="card border-primary">
                    <h4>
                        Bienvenue sur l'espace de réservation des salles de fete dans la ville de Lubumbashi.
                        Sur cette interface, vous pouvez effectuer vos demandes de réservation de salles
                        répondant à vos préférences et vos moyens.
                        Vous êtes actuellement connecté en tant que
                        <b class="text-danger"><?= $this->session->userdata('role_utilisateur') ?></b>.
                        <br>
                        Vous vous  appellez <b class="text-success"><?= $this->session->userdata('pseudo_utilisateur') ?></b>.
                    </h4>
                    <h3 class="text-center">Veuillez remplir le Formulaire de réservation ci-contre pour passer votre réservation</h3>
                    <hr>
                </div>
                <div class="card border-primary">
                    <h3>
                        <?php
                        if(isset($erreur)){?>
                            <div class="card card-body border-primary">
                                <h3 class="alert alert-danger text-center">
                                    <?php echo $erreur ?>
                                </h3>
                            </div>
                        <?php }
                        if(isset($info)){?>
                        <div class="card card-body border-primary">
                            <h3 class="alert alert-success text-center">
                                <?php echo $info ?>
                            </h3>
                        </div>
                        <?php } ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card-header">
                <div class="card border-primary bg-info">

                    <?php echo form_open(base_url('client/enregistrer_demande')); ?>
                    <div class="card-body">
                        <select name="salle_id" id="salle_id" class="form-control">
                            <option class="disabled">Selectionnez une salle de fete</option>
                             <?php
                             foreach ($salle as $ligne){?>
                            <option value="<?= $ligne->nom_salle;?>">
                            <?= $ligne->id_salle.'-'.$ligne->nom_salle;?> </option>
                             <?php }?>
                        </select>
                        <label for="client_id" class="control-label">Votre nom complet</label>
                        <input type="text" name="client_id" class="form-control"
                        value="<?= $this->session->userdata('pseudo_utilisateur') ?>">
                        <label for="ville" class="control-label">Votre ville de residence actuelle</label>
                        <input type="text" name="ville" class="form-control"
                        value="<?php echo $this->input->post('ville'); ?>">
                        <label for="province" class="control-label">Votre province de residence actuelle</label>
                        <input type="text" name="province" class="form-control"
                        value="<?php echo $this->input->post('province'); ?>">
                        <label for="date_debut" class="control-label">date du debut de la réservation</label>
            						<div class="form-group">
            							<input type="date" name="date_debut"
                                        value="<?php echo $this->input->post('date_debut'); ?>" class="form-control" id="date_debut" />
            							<span class="text-danger"><?php echo form_error('date_debut');?></span>
            						</div>
                                    <label for="date_fin" class="control-label">date du fin de la réservation</label>
            						<div class="form-group">
            							<input type="date" name="date_fin"
                                        value="<?php echo $this->input->post('date_fin'); ?>" class="form-control" id="date_fin" />
            							<span class="text-danger"><?php echo form_error('date_fin');?></span>
            						</div>
                        <hr>
                        <button type="submit" class="btn btn-success btn-lg">
                            Valider votre réservation
                        </button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
