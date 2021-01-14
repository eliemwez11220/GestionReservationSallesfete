

<main class="app-content bg-info">
    <div class="app-title">
        <div class="text-center text-danger">
            <h1><i class="fa fa-house"></i> Listing  de consultation des salles</h1>
            <p>
            Plateforme de réservation des salles de fete dans la ville de Lubumbashi.
            </p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row card border-primary text-center bg-primary">
              <table id="table"
              class="table table-sm table-striped table-hover table-bordered card-body">
                            <thead>
                            <tr class="bg-success">
                              <th class="text-center">#</th>
                              <th>Nom salle</th>
                              <th>Prix fixé</th>
                              <th>Capacité d'accueil</th>
                              <th>Telephone</th>
                              <th>Adresse</th>
                              <th>Etat salle</th>
                              <th>Responsable</th>
                              <th>Reservation</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr class="bg-success">
                                <th class="text-center">#</th>
                                <th>Nom salle</th>
                                <th>Prix fixé</th>
                                <th>Capacité d'accueil</th>
                                <th>Telephone</th>
                                <th>Adresse</th>
                                <th>Etat salle</th>
                                <th>Responsable</th>
                                <th>Reservation</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php

                             foreach ($salle as $ligne){?>
                                <tr class="">
                                    <td class="text-center"><?= $nombre; ?></td>
                                    <td class="text-uppercase"><?= $ligne->nom_salle; ?></td>
                                    <td class="text-lowercase"><?= $ligne->prix_salle; ?></td>

                                    <td class="text-uppercase"><?= $ligne->capacite; ?></td>
                                    <td class="text-uppercase"><?=  $ligne->telephone; ?></td>
                                    <td class="text-uppercase"><?=  $ligne->adresse; ?></td>
                                    <td class="text-lowercase"><?= $ligne->etat_salle; ?></td>
                                    <td class="text-uppercase"><?=  $ligne->gerant_responsable; ?></td>
                                    <td class="text-uppercase">
                                    <?php if($ligne->etat_salle=="reservee"){?>
                                        <a class="btn btn-block btn-danger btn-lg disabled"
                                           href="<?= base_url( 'connexion/'); ?>">Réserver</a>
                                     <?php }elseif ($ligne->etat_salle=="disponible"){?>
                                        <a class="btn btn-block btn-success btn-lg"
                                           href="<?= base_url('connexion/'); ?>">Réserver</a>
                                     <?php }else{?>
                                        <a class="btn btn-block btn-warning btn-lg"
                                           href="<?= base_url('connexion/'); ?>">Réserver</a>
                                     <?php }?>
                                    </td>
                                </tr>
                                <?php $nombre++; } ?>
                            </tbody>
                        </table>
        </div>
    </div>
</main>
