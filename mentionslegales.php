<?php require('breadcrumb.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <?php
  include 'head.php';
  ?>
  <style>
  .mg{
    font-size: 0.8em;
  }
  </style>
</head>
<body>
  <?php include 'tete.php'; ?>
  <div class="container-fluid">
    <!--breadcrumb-->
    <?php
    $bc = array('Accueil','Mentions legales');
    $bcLinks = array('index.php','mentionslegales.php');
    afficheBreadcrumb($bc,$bcLinks);
    ?>
    <!--/breadcrumb-->

    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-1" id="cgv">
          <h1 >MENTIONS LEGALES :</h1>
          <div class="mg">
            <strong>1. Le site internet www.eshop.fr</strong> (ci-après le « Site ») est un site web marchand ...<br>

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper viverra orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum urna molestie, tempus metus et, dignissim orci. Aliquam sed pulvinar tortor. Aenean nec risus fermentum, imperdiet magna id, laoreet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut efficitur lorem quis felis convallis semper. Vivamus eu venenatis sem.

            Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
            <br><br>
            <strong>2. Le Site permet à l'utilisateur d'acheter des produits présentés à la vente sur le Site.</strong>
            Seule la langue française fait foi dans le cadre de l'utilisation du Site.
            <br><br>
            <strong>3. La marque « ESHOP.FR » est une marque déposée ;</strong> <br> lLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper viverra orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum urna molestie, tempus metus et, dignissim orci. Aliquam sed pulvinar tortor. Aenean nec risus fermentum, imperdiet magna id, laoreet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut efficitur lorem quis felis convallis semper. Vivamus eu venenatis sem.

            Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
            <br><br>
            <strong>4. Le Site a fait l'objet d'une déclaration auprès de la CNIL (n°114887).</strong><br> L'utilisateur du Site peut exercer auprès du service client ESHOP.FR Avenue chaipukoi 75015 PARIS, son droit d'accès, de modification, de rectification et de suppression de données personnelles le concernant (article 40 de la loi « informatique et liberté » n°78-17 du 6 janvier 1978).
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row">
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
