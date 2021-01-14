<section class="bg-info">
  <?php
      if (isset($info_client)) {
          ?>
          <div class="alert alert-success text-center">
              <h4> <?php echo $info_client; ?></h4>
          </div>
          <?php
      }?>
    <div class="row">
        <div class="col-sm-12 text-center well">
          <h1 style="font-family: 'Century Gothic'; font-weight: bold;">
             Formulaire de connexion de <br> Reservation des salles de fête <br> dans la ville de Lubumbashi.
        </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-3  card-heading">
            <?php echo form_open('Connexion/login'); ?>
                <form action="" method="post" class="card border-primary" id="formlogin">
                    <?php
                        if (isset($info)) {
                            ?>
                            <div class="alert alert-danger text-center">
                                <h4> <?php echo $info; ?></h4>
                            </div>
                            <?php
                        }?>
                    <div class="panel-body  card border-primary card-body">
                        <div class="form-group">
                            <label class="control-label sr-only" for="pseudo_utilisateur">Nom utilisateur :</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input type="text" name="pseudo_utilisateur" id="pseudo_utilisateur"
                                minlength="3" maxlength="30" class="form-control" autofocus required
                                placeholder="saisissez votre pseudo utilisateur ">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only" for="code_utilisateur">Mot de passe :</label>
                            <div class="input-group" id="inputgroup">
                                <span class="input-group-addon">
                                    <i class="fa fa-key"></i>
                                </span>
                                <input type="password" name="code_utilisateur" id="pseudo_utilisateur"
                                minlength="6" maxlength="12" class="form-control" required
                                placeholder="saisissez votre mot de passe">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-sm formsubmit btn-success">&emsp;
                            <i class="fa fa-lock"></i>&emsp;&emsp; Se connecter&emsp;</button>
                            <a class="btn btn-sm  btn-info" href="<?= base_url('connexion/inscription') ?>">
                                Créez votre compte candidat</a>
                        </div>
                        <?php echo form_close(); ?>
                        <div class="form-group text-center">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

  </section>
