<main role="main" class="container-fluid">
    <section style="background-image: url('<?php echo base_url('assets/img/img1.jpg'); ?>')">
        <div class="content" style="height:400px;">
            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item card-img">
                        <img class="d-block w-100"
                             src="<?= base_url(); ?>assets/img/img15.jpg?auto=yes&bg=777&fg=555&text=First slide"
                             alt="First slide" style="height:400px;">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100"
                             src="<?= base_url(); ?>assets/img/img17.jpg?auto=yes&bg=666&fg=444&text=Third slide"
                             alt="Third slide" style="height:400px;">
                    </div>
                    <div class="carousel-item card-img">
                        <img class="d-block w-100"
                             src="<?= base_url(); ?>assets/img/img12.jpg?auto=yes&bg=777&fg=555&text=First slide"
                             alt="First slide" style="height:400px;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="<?= base_url(); ?>assets/img/img13.jpg?auto=yes&bg=666&fg=444&text=Third slide"
                             alt="Third slide" style="height:400px;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="<?= base_url(); ?>assets/img/img11.jpg?auto=yes&bg=666&fg=444&text=Third slide"
                             alt="Third slide" style="height:400px;">
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
    <div class="row jumbotron">
        <div class="col-sm-12 text-center well">
            <h1 style="font-family: 'Century Gothic'; font-weight: bold;">

            </h1>
        </div>
        <div class="col-sm-3 bg-info">
            <img class="well" height="300" width="100%" src="<?= base_url() ?>/assets/img/img15.jpg" alt="">
            <h3 class="text-uppercase text-danger text-center">Salle VIP </h3>
            <p class="text-justify">
                <b>
                    Cette salle est la meilleure salle pour vos fetes, manifestations, réeunions d'entreprise,
                    et plus ..., fites votre demande de réservation dès maintenant pour bénéficier des autres
                    services supplémentaires tels que le service client, le gardienage, ...
                </b> <br>
                <b>Prix de location : <i class="text-danger">$1500/jour</i></b>
                <br>
                <b>Capacité d'accueil : <i class="text-danger">2000 places</i></b>
                <br>
                <a class="btn btn-lg btn-success" href="<?= base_url('connexion/')?>">Reserver maintenant</a>
            </p>
        </div>
        <div class="col-sm-3 bg-success">
            <img class="well" height="300" width="100%" src="<?= base_url() ?>/assets/img/img13.jpg" alt="">
            <h3 class="text-uppercase text-danger text-center">Salle Ordinaire </h3>
            <p class="text-justify">
                <b>
                    Cette salle est la meilleure salle pour vos fetes, manifestations, réeunions d'entreprise,
                    et plus ..., fites votre demande de réservation dès maintenant pour bénéficier des autres
                    services supplémentaires tels que le service client, le gardienage, ...
                </b> <br>
                <b>Prix de location : <i class="text-danger">$1000/jour</i></b>
                <br>
                <b>Capacité d'accueil : <i class="text-danger">1500 places</i></b>
                <br>
                <a class="btn btn-lg btn-dark" href="<?= base_url('connexion/')?>">Reserver maintenant</a>
            </p>
        </div>
        <div class="col-sm-3 bg-primary">
            <img class="well" height="300" width="100%" src="<?= base_url() ?>/assets/img/img2.jpg" alt="">
            <h3 class="text-uppercase text-danger text-center">Salle Simple </h3>
            <p class="text-justify">
                <b>
                    Cette salle est la meilleure salle pour vos fetes, manifestations, réeunions d'entreprise,
                    et plus ..., fites votre demande de réservation dès maintenant pour bénéficier des autres
                    services supplémentaires tels que le service client, le gardienage, ...
                </b> <br>
                <b>Prix de location : <i class="text-danger">$700/jour</i></b>
                <br>
                <b>Capacité d'accueil : <i class="text-danger">1200 places</i></b>
                <br>
                <a class="btn btn-lg btn-success" href="<?= base_url('connexion/')?>">Reserver maintenant</a>
            </p>
        </div>
        <div class="col-sm-3 bg-warning">
            <img class="well" height="300" width="100%" src="<?= base_url() ?>/assets/img/img8.jpg" alt="">
            <h3 class="text-uppercase text-danger text-center">Salle autres </h3>
            <p class="text-justify">
                <b>
                    Cette salle est la meilleure salle pour vos fetes, manifestations, réeunions d'entreprise,
                    et plus ..., fites votre demande de réservation dès maintenant pour bénéficier des autres
                    services supplémentaires tels que le service client, le gardienage, ...
                </b> <br>
                <b>Prix de location : <i class="text-danger">$500/jour</i></b>
                <br>
                <b>Capacité d'accueil : <i class="text-danger">1000 places</i></b>
                <br>
                <a class="btn btn-lg btn-success" href="<?= base_url('connexion/')?>">Reserver maintenant</a>
            </p>
        </div>
    </div>
</div>
</main>
