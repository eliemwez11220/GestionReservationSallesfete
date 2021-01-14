<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php if (isset($title)){ echo "KIWELE | ".$title;}
        else{echo "KIWELE | ". $this->session->role_utilisateur;}?>
    </title>

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" media="screen">
<link rel="stylesheet" href="<?= base_url(); ?>assets/styles/style_recrutement.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/font-awesome/css/font-awesome.css">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/weblabs.png">


    <?php if (isset($this->session->role_utilisateur))
    {
        foreach ($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>"/>
    <?php endforeach; }?>
</head>

<body>
