<?php require('breadcrumb.php'); ?>
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
    <!--breadcrumb-->
    <?php
    $bc = array('Accueil', 'Professionnel');
    $bcLinks = array('index.php','professionnel.php');
    afficheBreadcrumb($bc,$bcLinks);
    ?>
    <!--/breadcrumb-->
    <div class="container">
      <div class="row">
        <div class="col-md-3 mt-3 pr-2">
          <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header"><i class="fas fa-shipping-fast"></i>
              <span>
                Livraisons
              </span>
            </div>
            <div class="card-body text-dark">
              <h5 class="card-title"></h5>
              <p class="card-text">Des solutions logistiques pour les professionnels.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 offset-1 mt-3 pr-2">
          <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header"><i class="fas fa-pallet"></i>
              <span>
                Gestion des stocks
              </span>
            </div>
            <div class="card-body text-dark">
              <h5 class="card-title"></h5>
              <p class="card-text">Des solutions de partenariat pour gerer vos stocks en temps reel.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 offset-1 mt-3 pr-2">
          <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header"><i class="fas fa-headphones"></i>
              <span>
                Suivi personnalisé
              </span>
            </div>
            <div class="card-body text-dark">
              <h5 class="card-title"></h5>
              <p class="card-text">Nos equipes a votre disposition.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 mt-3 pr-2">
          <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header"><i class="fas fa-warehouse"></i>
              <span>
                Titre 3
              </span>
            </div>
            <div class="card-body text-dark">
              <h5 class="card-title"></h5>
              <p class="card-text">Texte 3.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 offset-1 mt-3 pr-2">
          <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header"><i class="fas fa-id-card"></i>
              <span>
                Programme de fidelite.
              </span>
            </div>
            <div class="card-body text-dark">
              <h5 class="card-title"></h5>
              <p class="card-text">Texte 4.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 offset-1 mt-3 pr-2">
          <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header"><i class="fas fa-hourglass-half"></i>
              <span>
                Titre 5
              </span>
            </div>
            <div class="card-body text-dark">
              <h5 class="card-title"></h5>
              <p class="card-text">Texte 5.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3">
          <div class="col">
              <p><img class="img-fluid" src="img/cadenas.png" alt="paiement securise"> Paiement sécurisé</p>
              <p><img class="img-fluid" src="img/camion.png" alt="paiement securise"> Livraison à domicile</p>
          </div>
          <div class="col">
              <p><img class="img-fluid" src="img/casse.png" alt="anti casse"> Garantie anti-casse</p>
              <p><img class="img-fluid" src="img/echantillon.png" alt="paiement securise"> Echantillon gratuit</p>
          </div>
          <div class="col">
              <p><img class="img-fluid" src="img/satisfait.png" alt="paiement securise"> Satisfait ou remboursé</p>
              <p><img class="img-fluid" src="img/echange.png" alt="paiement securise"> Echange et retour facile</p>
          </div>
          <div class="col">
              <p><img class="img-fluid" src="img/euros.png" alt="paiement securise"> Facilité de paiement 3x sans frais dès xxx €</p>
          </div>

          <br>
          <br>
      </div>
    </div>
    <?php
    include 'accueil_infos.php';
    ?>
  </div>

  <?php
  include 'js_inc.php';
  ?>
</body>
</html>
