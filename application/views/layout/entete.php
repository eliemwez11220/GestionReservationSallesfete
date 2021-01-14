<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php if (isset($title)){ echo "SALLE BOOK | ".$title;}
        else{echo "SALLE BOOK | ". $this->session->role_utilisateur;}?>
    </title>

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" media="screen">
<link rel="stylesheet" href="<?= base_url(); ?>assets/styles/style_recrutement.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/font-awesome/css/font-awesome.css">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/EmarSoft.png">


    <?php if (isset($this->session->role_utilisateur))
    {
        foreach ($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>"/>
    <?php endforeach; }?>
</head>

<body>
<div class="container-fluid">
  <nav class="navbar navbar-expand-md bg-danger navbar-dark fixed-top" style="font-size:36px;">

      <a href="<?= base_url(); ?>assets/img/EmarSoft.png" class="navbar-brand logo">
          <img src="<?= base_url(); ?>assets/img/EmarSoft.png" alt="LOGO" width="100px" height="70px">
      </a>
      <button class="navbar-toggler bg-success" type="button" data-toggle="collapse" data-target="#barre_menu"
              aria-controls="barre_menu" aria-expanded="false" aria-label="Barre de menu">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="barre_menu">
          <ul class="navbar-nav mr-auto">
              <li></li>
          </ul>
          <ul class="navbar-nav navbar-brand">
            <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url('welcome/index'); ?>">Accueil <span class="sr-only">(current)</span></a>
              </li> |
              <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url('welcome/decouvrir_platforme'); ?>">Notre plateforme <span class="sr-only">(current)</span></a>
              </li> |

              <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url('welcome/gamme_salle'); ?>">Salle de fete <span class="sr-only">(current)</span></a>
              </li> |

              <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url('welcome/contactez_nous'); ?>">Contact</a>
              </li>
          </ul>
          <ul class="navbar-nav navbar-brand">
              <li class="nav-item active">
                  <a class="nav-link " href="<?php echo base_url('connexion/'); ?>">
                      Se connecter </a>
              </li>|
              <li class="nav-item active">
                  <a class="nav-link " href="<?php echo base_url('connexion/inscription'); ?>">
                      Créer compte client</a>
              </li>
          </ul>
      </div>
  </nav>
</div>
<br><br><br><br><br>
