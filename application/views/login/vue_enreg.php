
  <div class="container-fluid">
      <div class="row bg-primary">
          <div class="col-sm-6 offset-3">
                <?php
                if(isset($erreur)){?>
                    <div class="card card-body border-primary">
                        <h3 class="alert alert-danger text-center">
                            <?php echo $erreur ?>
                        </h3>
                    </div>
                <?php } ?>
                  <?php echo form_open(base_url('connexion/inscrire_utilisateur')); ?>
                <form action="" method="post" class="" id="formlogin">
                <div class="card-body card border-success">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group has-feedback
                            <?= (form_error('noms_souscripteur')) ? 'has-error' : NULL; ?>">
                                <label class="control-label" for="noms_complet">Votre nom complet <span
                                            class="text-red">*</span> :</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-edit"></i>
                                    </span>
                                    <input type="text" name="noms_complet" id="noms_complet"
                                    placeholder="Saisissez votre noms_complet ex: elie mwez rubuz"
                                           value="<?= set_value('noms_complet') ?>" minlength="3" maxlength="30"
                                           class="form-control" autofocus required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group has-feedback <?= (form_error('pseudo_utilisateur')) ? 'has-error' : NULL; ?> ">
                                <label class="control-label" for="pseudo_utilisateur">Nom utilisateur (pseudo)<span
                                            class="text-red">*</span> :</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input type="text" name="pseudo_utilisateur" id="pseudo_utilisateur"
                                           value="<?= set_value('pseudo_utilisateur') ?>"
                                           minlength="3" maxlength="30" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group has-feedback <?= (form_error('telephone')) ? 'has-error' : NULL; ?>">
                                <label class="control-label" for="telephone">Votre numéro de Téléphone:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <input type="text" name="telephone" id="telephone"
                                    placeholder="entrer votre numéro de Téléphone"
                                           value="<?= set_value('telephone') ?>" minlength="3" maxlength="30"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group has-feedback <?= (form_error('email')) ? 'has-error' : NULL; ?>">

                                <label class="control-label" for="email">Votre adresse E-mail :</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="text" name="email" id="email" placeholder="Entrer votre e-mail ex:elie@emar.com"
                                           value="<?= set_value('email') ?>" minlength="3" maxlength="30"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group has-feedback <?= (form_error('adresse')) ? 'has-error' : NULL; ?>">

                                <label class="control-label" for="adresse">Votre adresse de résidence :</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                    <input type="text" name="adresse" id="adresse"
                                    placeholder="Saisissez votre adresse de residence"
                                           value="<?= set_value('adresse') ?>" minlength="3" maxlength="30"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group has-feedback <?= (form_error('mot_pass')) ? 'has-error' : NULL; ?>">
                                <label class="control-label" for="code_utilisateur">Choisissez votre mot de passe <span class="text-red">*</span>
                                    :</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-key"></i>
                                    </span>
                                    <input type="password" name="code_utilisateur" id="code_utilisateur"
                                    placeholder="Choisissez votre mot de passe"
                                           value="<?= set_value('code_utilisateur') ?>" minlength="6" maxlength="12"
                                           class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group has-feedback <?= (form_error('code_confirmation')) ? 'has-error' : NULL; ?>">
                                <label class="control-label" for="code_confirmation">Confirmez mot de passe <span
                                            class="text-red">*</span> :</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-key"></i>
                                    </span>
                                    <input type="password" name="code_confirmation" id="code_confirmation"
                                    placeholder="Saisissez un mot de passe de confirmation"
                                           value="<?= set_value('code_confirmation') ?>" minlength="6" maxlength="12"
                                           class="form-control" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row offset-4">
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-sm btn-primary formsubmit">&emsp;<i
                                        class="fa fa-lock"></i>&emsp;&emsp;
                                Créer votre compte&emsp;
                            </button>
                        </div>

                    </div>
                </div>
              </form>
                  <?php echo form_close(); ?>
          </div>
      </div>
  </div>
