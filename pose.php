<!DOCTYPE html>
<html>
<head>
  <?php
  include 'head.php';
  ?>
  <link rel="stylesheet" href="css/pose.css">
</head>
<body>
  <?php include 'tete.php'; ?>
  <div class="container-fluid">
    <div class="contact-jumbotron contact-jumbotron-sm">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-12">
            <h1 class="contact-titre">
              Prendre rendez-vous pour une pose
              <small> <br>&nbsp;&nbsp;&nbsp;Tous nos produits poses par nos professionnels chez vous !</small>
            </h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="well wel-sm">
            <!-- Adresse client -->
            <div class="row row-pose">
              <div class="col-md-4 text-right"><h5>Vos informations</h5></div>
              <div class="col-md-4">
                <form action="#">
                  <button type="submit" class="btn btn-info" id="btnLogin">
                    <small><em>Connexion ou inscription</em></small>
                  </button>
                </form>
              </div>
            </div>
            <div class="row row-pose">
              <div class="col-md-12 text-center border">
                <h4>
                  Proceder sans creer de compte
                </h4>
              </div>
            </div>
            <div class="row row-pose">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="name">
                    Nom
                  </label>
                  <input type="text" class="form-control" id="name" placeholder="Votre nom *" required="required" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="prenom">
                    Prenom
                  </label>
                  <input type="text" class="form-control" id="name" placeholder="Votre prenom *" required="required" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="raison">
                    Raison sociale
                  </label>
                  <input type="text" class="form-control" id="raison" placeholder="Raison sociale" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label for="numero">
                    Numero
                  </label>
                  <input type="text" class="form-control" id="numero" placeholder="123..." />
                </div>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <label for="rue">
                    Rue
                  </label>
                  <input type="text" class="form-control" id="rue" placeholder="Rue / lieu dit" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label for="code_postal">
                    Code Postal
                  </label>
                  <input type="text" class="form-control" id="code_postal" placeholder="Code Postal"/>
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <label for="ville">
                    Ville
                  </label>
                  <input type="text" class="form-control" id="ville" placeholder="Ville"/>
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <label for="pays">
                    Pays
                  </label>
                  <select id="pays" name="pays" class="form-control">
                    <option value="fr" selected="">France</option>
                    <option value="be">Belgique</option>
                    <option value="sw">Suisse</option>
                  </select>
                </div>

              </div>
            </div>
            <!-- !!Adresse client -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="row row-pose">
            <div class="col-md-12">
              <h5>Le rendez-vous</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="devis_perso">
                  Ajouter a un devis
                </label>
                <select id="devis_perso" name="devis_perso" class="form-control" required="required">
                  <option value="na" selected=""><small><em>Vous n'etes pas connecte !</em></small></option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="type_pose">
                  Type de pose
                </label>
                <select id="type_pose" name="type_pose" class="form-control" required="required">
                  <option value="na" selected="">Choisissez:</option>
                  <option value="carrelage">Carrelage</option>
                  <option value="exterieur">Exterieur</option>
                  <option value="parquet">Parquet</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 border">
              <form action="#" class="ws-validate">
                <h5>Date de rendez-vous :</h5>
                <div class="form-row">
                  <input type="date" class="hide-replaced col-md-8" />
                  <button type="submit" class="btn btn-info col-md-3" id="btnDate">
                    <small><em>valider</em></small>
                  </button>
                </div>
                <div class="form-row">
                  <select id="heure" name="heure" class="form-control col-md-8">
                    <option value="na">Selectionnez une plage horaire</option>
                    <option value="matin">Matin (9h-12h)</option>
                    <option value="aprem">Apres-midi (13h-17h)</option>
                  </select>
                  <button type="submit" class="btn btn-info col-md-3" id="btnHeure">
                    <small><em>valider</em></small>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>


<?php
include 'accueil_infos.php';
?>
</div>
<script src="js/pose.js"></script>
<?php
include 'js_inc.php';

?>

</body>
</html>
