<!doctype html>
<html lang="fr">

<!-- Mirrored from getbootstrap.com/docs/4.1/examples/album/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 23:41:42 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description">
    <meta name="author">
    <link rel="icon" href="<?= base_url(); ?>assets/img/logo_cece.png">
    <title><?php echo $title; ?></title>
    <!-- importation des fichiers de Bootstrap-->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/main_styles.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/fonts/css/font-awesome.css">
</head>

<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top" style="font-size:36px;">

        <a href="<?php echo base_url('welcome/index'); ?>" class="navbar-brand logo">
            <img src="<?php echo base_url(''); ?>assets/img/logo_cece.png" alt="CECE LOGO" width="200px" height="100px">
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
                    <a class="nav-link" href="<?php echo base_url('welcome/index'); ?>">Accueil <span class="sr-only">(current)</span></a>
                </li>
                |
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url('welcome/gerer_predications'); ?>">Prédications</a>
                </li>
                |
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('welcome/gerer_evenements'); ?>">Evénements</a>
                </li>
                |
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="http://cece-eglise.com/"
                       id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Renseignez-vous
                        sur</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="<?php echo base_url('welcome/decouvrir_doctrine'); ?>">Notre
                            commmunauté</a>
                        <a class="dropdown-item" href="<?php echo base_url('welcome/gerer_eglises'); ?>">Nos
                            paroisses</a>
                        <a class="dropdown-item" href="<?php echo base_url('welcome/gerer_adresses'); ?>">Nos adresse et
                            contacts</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-brand">
                <li class="nav-item btn btn-success btn-lg">
                    <a class="nav-link " href="<?php echo base_url('authentification/index'); ?>">
                        Se connecter </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="jumbotron">

</div>
<main role="main" class="container-fluid home_container">
    <section style="background-color: silver; background-image: url('<?php echo base_url('assets/img/img1.jpg'); ?>')">
        <div class="content">
            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="<?php echo base_url(''); ?>assets/img/paroisse_cece/cece_eden.jpg?auto=yes&bg=777&fg=555&text=First slide"
                             alt="First slide" height="600px" width="500px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="<?php echo base_url(''); ?>assets/img/paroisse_cece/eglise.jpg?auto=yes&bg=555&fg=333&text=Second slide"
                             alt="Second slide" height="600px" width="500px">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100"
                             src="<?php echo base_url(''); ?>assets/img/paroisse_cece/Intérieur.jpg?auto=yes&bg=666&fg=444&text=Third slide"
                             alt="Third slide" height="600px" width="500px">
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100"
                             src="<?php echo base_url(''); ?>assets/img/paroisse_cece/pasteur.jpg?auto=yes&bg=777&fg=555&text=Fourth slide"
                             alt="Quatre slide" height="600px" width="500px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="<?php echo base_url(''); ?>assets/img/paroisse_cece/louange.jpg?auto=yes&bg=777&fg=555&text=Five slide"
                             alt="Cinq slide" height="600px" width="500px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="<?php echo base_url(''); ?>assets/img/paroisse_cece/pasteurs.jpg?auto=yes&bg=777&fg=555&text=Six slide"
                             alt="Six slide" height="600px" width="500px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="<?php echo base_url(''); ?>assets/img/paroisse_cece/apotre_mbayo.jpg?auto=yes&bg=777&fg=555&text=Seven slide"
                             alt="Seven slide" height="600px" width="500px">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <article class="col-md-4 text-justify">
                    <h2>Notre doctrine</h2>
                    <p>
                        Nous croyons en un seul Dieu, Père de tous, qui est au-dessus de tous et parmi tous, et en
                        tous;
                        Créateur de toute chose.<br>
                        Nous croyons en Jésus comme notre Seigneur et Sauveur. C'est Lui le seul et unique chemin
                        qui
                        mène vers le Père. <strong>(Jean 14 : 6).</strong>
                        Il est le seul médiateur entre Dieu et nous; c'est pourquoi nous adressons nos prières <em>
                            à
                            Dieu au Nom précieux et glorieux de notre Seigneur
                        </em> <strong>Jésus. (1 Timothée 2 : 5 - 6; Jean 14 : 12 - 14; 16 : 23 - 24)</strong><br>
                        Nous croyons en un seul baptême au Nom de Jésus <strong>( Acts 19 : 3 - 5)</strong>,
                        plongeant
                        entièrement le nouveau baptisé dans un cours d'eau.<strong>
                            (Ephésiens 4 : 5 - 6; Matthieu 3 : 13)</strong><br>
                        Nous ne croyons pas au ministère de la femme, mais nous croyons à tous les dons du Saint
                        Esprit.<br>
                        Nous sommes basés sur le fondement des apôtres et des prophètes, et Jésus-Christ étant
                        lui-même
                        la pierre angulaire.
                        <strong>( Ephésiens 2 : 20.)</strong>
                    </p>

                </article>
                <article class="col-md-4 text-justify">
                    <h2>Notre mission</h2>
                    <h3>Annoncer l'évangile de Jésus-Christ pour le salut des âmes.</h3>
                    <h4>Matthieu 28 : 19-20</h4><br>
                    <p> 19 Allez, faites de toutes les nations des disciples, les baptisant au nom du Père, du Fils
                        et
                        du Saint Esprit,<br>
                        20 et enseignez-leur à observer tout ce que je vous ai prescrit. Et voici,je suis avec vous
                        tous
                        les jours, jusqu'à la fin du monde.
                    </p>

                </article>
                <article class="col-md-4 text-justify">
                    <h2>Notre vision</h2>
                    <p>
                        Ramener toute âme à Christ par l’évangile.
                        Sonder et croire à la Parole de Dieu telle que connue dans la Bible, de Genèse à Apocalypse.
                        Equiper les fidèles pour es rendre utiles à la société dans laquelle ils vivent.
                        Préparer les fidèles à l’enlèvement de l’Eglise.
                        Adorer l’Unique Dieu Créateur en Le mettant au centre de toute chose.
                        Orienter les fidèles dans beaucoup de domaines de leur vie par un bon coaching.
                        Miser sur le progrès intégral de la personne rachetée par Christ.
                        Collaborer avec d’autres églises chrétiennes qui s’assignent les mêmes objectifs que
                        nous.</p>

                </article>
            </div>
            <div class="row">
                <article class="col-sm-4">
                    <img src="<?php echo base_url(''); ?>assets/img/portfolio1.jpg" alt="Historique photo"
                         height="200px"
                         width="350px">
                </article>
                <article class="col-sm-4">
                    <img src="<?php echo base_url(''); ?>assets/img/portfolio1.jpg" alt="Historique photo"
                         height="200px"
                         width="350px">
                </article>
                <article class="col-sm-4">
                    <img src="<?php echo base_url(''); ?>assets/img/portfolio1.jpg" alt="Historique photo"
                         height="200px"
                         width="350px">
                </article>
            </div>
        </div>
    </section>
    <br/><br/>

    <footer class="text-muted footer">
        <div class="container-fluid">
            <div class="row">
                <!-- Footer Column -->
                <div class="col-sm-3">
                    <!-- Logo -->
                    <div class="container">
                        <div class="logo">
                            <a href="<?php echo base_url('welcome/index'); ?>">
                                <img src="<?php echo base_url(''); ?>assets/img/logo_cece.png" alt="CECE LOGO"
                                     width="200px">
                            </a>
                        </div>
                    </div>
                    <div class="footer_social">
                        <ul>
                            <li><a href="https://www.youtube.com/channel/UCL3Kt8mj9vDOO2ZQwjUfZCQ"><i
                                        class="fa fa-youtube" aria-hidden="true"></i> Youtube</a></li>
                            <li><a href="https://www.facebook.com/eglise.ceceeden"><i class="fab fa-facebook-f"
                                                                                      aria-hidden="true"></i>
                                    Facebook</a></li>
                            <li><a href="https://twitter.com/eden_cece"><i class="fa fa-twitter"
                                                                           aria-hidden="true"></i>
                                    Twitter</a></li>
                            <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i>
                                    LinkedIN</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Column -->
                <div class="col-sm-3">
                    <div class="footer_links">
                        <div class="footer_title">Menu rapide</div>
                        <ul class="">
                            <li class="nav-item active">
                                <a href="<?php echo base_url('welcome/index'); ?>" class="nav-link"> Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('welcome/decouvrir_doctrine'); ?>" class="nav-link"> A
                                    propos</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('welcome/gerer_eglises'); ?>" class="nav-link"> Nos
                                    églises</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('welcome/gerer_predications'); ?>" class="nav-link">
                                    Prédications</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('welcome/gerer_evenements'); ?>" class="nav-link">
                                    Evènements</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('welcome/gerer_adresses'); ?>" class="nav-link">
                                    Adresses</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('authentification/index'); ?>" class="nav-link">
                                    <i class="fa fa-user"></i> Connexion</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Column -->
                <div class="col-sm-6">
                    <div class="footer_contact">
                        <div class="footer_title">Communiqué & contact</div>
                        <ul>
                            <li><span>Infos : </span>
                                infos générale
                            </li>
                            <li class="footer_contact_phone">
                                <span>Téléphone : </span>
                                <div>
                                    <div>+243 99 585 35 73</div>
                                </div>
                            </li>
                            <li><span>Email: </span>cecemmanuel1985@gmail.com</li>
                            <div class="footer_grid_left">
                                <h5>Ecrivez-nous</h5>
                                <a href="mailto:info@example.com"
                                   class="fa fa-mail-reply-all">info@cece-eglise.org</a> </br>
                                <a href="mailto:info@example.com">cecemmanuel1985@gmail.com</a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <a href="https://web.facebook.com/groups/2079177265721239/"><i class="fab fa-facebook-f"
                                                                           aria-hidden="true"></i>
                <img src="<?php echo base_url(''); ?>assets/img/facebook.png" style="border-radius: 50px" alt=""
                     height="40px" width="40px">

            </a>
            <a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i>
                <img src="<?php echo base_url(''); ?>assets/img/twitter.pjpgng" style="border-radius: 50px" alt=""
                     height="40px" width="40px">
            </a>
            <a href="#" class="sociaux">
                <img src="<?php echo base_url(''); ?>assets/img/whatsapp1.jpg" style="border-radius: 50px" alt=""
                     height="40px" width="40px">
            </a>
            <a href="https://www.youtube.com/channel/UCL3Kt8mj9vDOO2ZQwjUfZCQ" class="sociaux"><i
                    class="fa fa-youtube"
                    aria-hidden="true"></i>
                <img src="<?php echo base_url(''); ?>assets/img/youtube.jpg" style="border-radius: 50px" alt=""
                     height="40px" width="40px">
            </a>
            <a href="https://www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i>
                <img src="<?php echo base_url(''); ?>assets/img/linkedin.png" style="border-radius: 50px" alt=""
                     height="40px" width="40px">
            </a>
        </div>

        <!-- Copyright -->
        <div class="copyright text-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script>
            Tous droits réservés | Website developped by <a href="https://emar-31.webself.net" target="_blank">EMAR
                IT PRO</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
</main>

<script src="<?php echo base_url('assets/js/vendor/jquery-slim.min.js'); ?>"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/vendor/jquery-slim.min.js'); ?>"><\/script>')</script>
<script src="<?php echo base_url('assets/js/vendor/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/vendor/holder.min.js'); ?> "></script>
</body>
</html>
