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

    <title>Page d'authentification</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo site_url('dist/css/bootstrap.min.css'); ?>">
    <!-- Custom styles for this template -->
    <link href="." rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_url('assets/signin.css'); ?>">
</head>

<body style="background-color: silver; background-image: url('<?php echo site_url('dist/images/img1.jpg'); ?>')">

<div class="container-fluid">
    <div class="text-center">
        <div class="form-signin">
            <img class="mb-4" src="dist/images/face8.jpg" alt="" width="100" height="100" style="border-radius:100px">
            <div class="well">
                <h2>
                    Authentification
                </h2>
                <p>Veuillez saisir les coordonnées d'identification.</p>
                <?php echo form_open('authentification/connexion'); ?>

                <?php

                if (isset($info)) {
                    ?>
                    <div class="alert alert-danger text-center">
                        <h4> <?php echo $info; ?></h4>';
                    </div>
                    <?php
                }
                ?>
                <label for="inputEmail" class="sr-only">Saisissez votre nom d'utilisateur</label>
                <input type="text" name="user_pseudo" value="<?php echo $this->input->post('user_name'); ?>"
                       class="form-control"
                       placeholder="Saisissez votre pseudo comme nom d'utilisateur" required autofocus>
                <label for="inputPassword" class="sr-only">Mot de passe</label>
                <input type="password" id="inputPassword" class="form-control" name="user_code"
                       value="<?php echo $this->input->post('user_password'); ?>"
                       placeholder="Saisissez votre mot de passe" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
                <?php echo form_close(); ?>
                <br>
            </div>
        </div>
      
        <footer class="container">
            <p>&copy; INSPAF Flora 2018-2019 by <a href="http://www.emar-31.webself.net">EMAR IT PRO</a></p>
        </footer>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- jQuery 2.2.3 -->
<script src="<?php echo site_url('assets/js/vendor/jquery-slim.min.js'); ?>"></script>

<script>window.jQuery || document.write('<script src="<?php echo site_url('assets/js/vendor/jquery-slim.min.js');?>"><\/script>')</script>
<script src="<?php echo site_url('assets/js/vendor/popper.min.js'); ?>"></script>
<script src="<?php echo site_url('dist/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/js/vendor/holder.min.js'); ?>"></script>
</body>
<!-- Mirrored from getbootstrap.com/docs/4.1/examples/sign-in/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 23:41:53 GMT -->
</html>
