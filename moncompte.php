<!DOCTYPE html>
<html>
<head>
  <?php
  include 'head.php';
  ?>
</head>
<body>
  <?php include 'tete.php'; ?>
  <div class="container-fluid">
    <div class="row" >
      <div class="col-md-8 offset-2 text-center" style="margin-top:15px;margin-bottom:15px;" >
        <ul class="list-group">
          <li class="list-group-item list-group-item-dark"><h1> Mon compte </h1></li>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <!-- menu gauche-->
        <div class="col-md-4">
          <ul class="list-group">
            <li class="list-group-item list-group-item-dark">
              <a href="?page=accueil">Accueil </a>
            </li>
            <li class="list-group-item list-group-item-dark">
              <a href="?page=email_param">Parametres email</a>
            </li>
            <li class="list-group-item list-group-item-dark">
              <a href="?page=mod_address">Modifier mon adresse</a>
            </li>
            <li class="list-group-item list-group-item-dark">
              <a href="?page=paiement">Modifier mon moyen de paiement</a>
            </li>
          </ul>
        </div>

        <!-- page selectionnee -->
        <div class="col-md-8">
          <h4 class="text-center">Georges Dupont</h4>
          <hr>
          <?php
          if (isset($_GET['page'])){
            switch($_GET['page']){
              case 'email_param':
              affiche_param_email();
              break;
              case 'mod_address':
              affiche_mod_address();
              break;
              case 'paiement':
              affiche_paiement();
              break;
              case 'check_commandes':
              affiche_check_commandes();
              break;
              case 'check_devis':
              affiche_check_devis();
              break;
              case 'accueil' :
              default:
              affiche_accueil();
              break;
            }
          } else {affiche_accueil();}
          ?>
        </div>
      </div>
      <div class="row" style="min-height:10px;"></div>
    </div><!-- container -->
    <?php include 'accueil_infos.php'; ?>
  </div><!-- container-fluid -->
  <?php include 'js_inc.php'; ?>
</body>
</html>

<?php
function affiche_accueil(){
  ?>
  <div class="row">
    <div class="col-md-4 offset-1 text-center">
      georgesdupont@placeholder.ph
    </div>
    <div class="col-md-4 offset-1 text-center">
      74210 Doussard
    </div>
  </div>
  <hr>
  Vous avez actuellement <strong>2</strong> commandes en cours.
  <hr>
  Vous avez actuellement <strong>1</strong> devis en cours de traitement.
  et <strong>4</strong> enregistres.
  <?php
}
?>
<?php
function affiche_param_email(){
  ?>
  <form class="form-inline ">
    <input type="text" class="form-control mb-2 mr-sm-2" id="nom_email" placeholder="georges.dupont">
    <div class="input-group mb-2 mr-sm-2">
      <div class="input-group-prepend">
        <div class="input-group-text">@</div>
      </div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="placeholder.fr">
    </div>
  </form>
  <hr>
  <h5 class="text-center">Abonnements : </h5>
  <hr>
  <div class="text-center">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
      <label class="form-check-label" for="inlineCheckbox1">Newsletter</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
      <label class="form-check-label" for="inlineCheckbox2">Etat de commande modifie</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
      <label class="form-check-label" for="inlineCheckbox3">Devis modifie</label>
    </div>
  </div>
  <form class="form-row align-items-center">
    <button type="submit" class="btn btn-primary mb-2">enregistrer mes modifications</button>
  </form>

  <?php
}
function affiche_mod_address(){
  ?>
  <form>
    <div class="form-group">
      <label for="inputAddress">Numero / rue</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 rue ...">
    </div>
    <div class="form-group">
      <label for="inputAddress2">complement d'adresse</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="lieu dit ou residence">
    </div>
    <div class="row">
      <div class="form-group col-md-5 offset-1  ">
        <label for="inputCity">Ville</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-3">
        <label for="inputState">Pays</label>
        <select id="inputState" class="form-control">
          <option selected>France</option>
          <option>Belgique</option>
          <option>Suisse</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">code postal</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Modifier</button>
      </div>
    </div>
  </form>
  <?php
}
function affiche_paiement(){?>
  <div class="row">
    <div class="col-md-12 text-center">
      <img src="img/credit_card_logo.jpg" class="img-fluid" alt="credit cards">
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 offset-2">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="num_carte">Numero de carte</label>
            <input type="text" class="form-control" id="num_carte" placeholder="1234 5678 ...">
          </div>
          <div class="form-group col-md-4">
            <label for="secu_carte">Code de securite</label>
            <input type="text" class="form-control" id="secu_carte" placeholder="123">
          </div>
        </div>
        <div class="form-group col-md-10 offset-1">
          <label for="id_carte">Nom du detenteur de la carte</label>
          <input type="text" class="form-control" id="id_carte" placeholder="Georges Dupont">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="mois_expi">Date d'expiration : mois</label>
            <select id="inputState" class="form-control">
              <option selected>janvier (01)</option>
              <option>fevrier (02)</option>
              <option>mars (03)</option>
              <option>avril (04)</option>
              <option>mai (05)</option>
              <option>juin (06)</option>
              <option>juillet (07)</option>
              <option>aout (08)</option>
              <option>septembre (09)</option>
              <option>octobre (10)</option>
              <option>novembre (11)</option>
              <option>decembre (12)</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="annee_expi">Annee</label>
            <input type="text" class="form-control" id="secu_carte" placeholder="2020">
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Modifier</button>
    </div>
  </div>
  <?php
}
function affiche_check_commandes(){

}
function affiche_check_devis(){

}
?>
