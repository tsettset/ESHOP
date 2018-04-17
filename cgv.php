<?php require('breadcrumb.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <?php
  include 'head.php';
  ?>
  <style >
  #cgv{
    font-size: 0.7em;
  }
  #cgv h1 {
    padding: 28px 0 10px 0px;
    font-size: 18px;
    font-family: Arial, sans-serif;
    line-height: 18px;
    color: #48b3aa;
    text-transform: uppercase;
    border-bottom: solid 1px #48b3aa;
    background: url(/media/ressources/images/cgv.png) no-repeat;
  }
  #cgv h2 {
    margin: 20px 0 10px 0;
    font-size: 16px;
    font-family: Arial, sans-serif;
    line-height: 18px;
    color: #48b3aa;
    font-weight: normal;
    border-bottom: solid 1px #48b3aa;
  }
  #cgv h3 {
    margin: 20px 0 10px 0;
    font-size: 16px;
    font-family: Arial, sans-serif;
    line-height: 18px;
    color: #48b3aa;
    font-weight: normal;
  }
  </style>
</head>
<body>
  <?php include 'tete.php'; ?>
  <div class="container-fluid">
    <!--breadcrumb-->
    <?php
    $bc = array('Accueil','Conditions generales de vente');
    $bcLinks = array('index.php','cgv.php');
    afficheBreadcrumb($bc,$bcLinks);
    ?>
    <!--/breadcrumb-->

    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-1" id="cgv">
          <h1 >CONDITIONS G&Eacute;N&Eacute;RALES DE VENTE</h1>
          <ol >
            <li><a href="#1">Modalit&eacute;s de commande</a></li>
            <li><a href="#2">Produits</a></li>
            <li><a href="#3">Prix</a></li>
            <li><a href="#4">Modalit&eacute;s de paiement</a></li>
            <li><a href="#5">Disponibilit&eacute;s</a></li>
            <li><a href="#6">Remboursement d'un produit moins cher chez un concurrent du vendeur</a></li>
            <li><a href="#7">Annulation</a></li>
            <li><a href="#8">R&eacute;tractation</a></li>
            <li><a href="#9">Frais de port</a></li>
            <li><a href="#10">Livraison</a></li>
            <li><a href="#11">Force majeure</a></li>
            <li><a href="#12">Retourner un produit</a></li>
            <li><a href="#13">Litiges &ndash; M&eacute;diation</a></li>
            <li><a href="#14">Garanties</a></li>
            <li><a href="#15">Donn&eacute;es personnelles</a></li>
          </ol>
          <h2>PR&Eacute;AMBULE</h2>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper viverra orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum urna molestie, tempus metus et, dignissim orci. Aliquam sed pulvinar tortor. Aenean nec risus fermentum, imperdiet magna id, laoreet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut efficitur lorem quis felis convallis semper. Vivamus eu venenatis sem.

          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc.
          <h2><a id="1" name="1"></a>1. MODALIT&Eacute;S DE COMMANDE</h2>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper viverra orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum urna molestie, tempus metus et, dignissim orci. Aliquam sed pulvinar tortor. Aenean nec risus fermentum, imperdiet magna id, laoreet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut efficitur lorem quis felis convallis semper. Vivamus eu venenatis sem.

          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h2><a id="2" name="1"></a>2. PRODUITS</h2>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper viverra orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum urna molestie, tempus metus et, dignissim orci. Aliquam sed pulvinar tortor. Aenean nec risus fermentum, imperdiet magna id, laoreet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut efficitur lorem quis felis convallis semper. Vivamus eu venenatis sem.
          <h2><a id="3" name="1"></a>3. PRIX</h2>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper viverra orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum urna molestie, tempus metus et, dignissim orci. Aliquam sed pulvinar tortor. Aenean nec risus fermentum, imperdiet magna id, laoreet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut efficitur lorem quis felis convallis semper. Vivamus eu venenatis sem.
          <h2><a id="4" name="1"></a>4. MODALIT&Eacute;S DE PAIEMENT</h2>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper viverra orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum urna molestie, tempus metus et, dignissim orci. Aliquam sed pulvinar tortor. Aenean nec risus fermentum, imperdiet magna id, laoreet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut efficitur lorem quis felis convallis semper. Vivamus eu venenatis sem.
          <h3>4.1 : Carte bancaire</h3>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper viverra orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum urna molestie, tempus metus et, dignissim orci. Aliquam sed pulvinar tortor. Aenean nec risus fermentum, imperdiet magna id, laoreet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut efficitur lorem quis felis convallis semper. Vivamus eu venenatis sem.
          <h2><a id="5" name="1"></a>5. DISPONIBILIT&Eacute;S</h2>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper viverra orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum urna molestie, tempus metus et, dignissim orci. Aliquam sed pulvinar tortor. Aenean nec risus fermentum, imperdiet magna id, laoreet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut efficitur lorem quis felis convallis semper. Vivamus eu venenatis sem.
          <h2><a id="6" name="1"></a>6. REMBOURSEMENT D'UN PRODUIT MOINS CHER CHEZ UN CONCURRENT DU VENDEUR</h2>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper viverra orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum urna molestie, tempus metus et, dignissim orci. Aliquam sed pulvinar tortor. Aenean nec risus fermentum, imperdiet magna id, laoreet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut efficitur lorem quis felis convallis semper. Vivamus eu venenatis sem.

          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.

          <h2><a id="7" name="1"></a>7. ANNULATION</h2>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin semper viverra orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris condimentum urna molestie, tempus metus et, dignissim orci. Aliquam sed pulvinar tortor. Aenean nec risus fermentum, imperdiet magna id, laoreet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut efficitur lorem quis felis convallis semper. Vivamus eu venenatis sem.

          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.

          Proin pretium tincidunt tincidunt. Sed maximus varius rhoncus. Aliquam consectetur varius tempus. Nulla dolor mi, interdum ac euismod nec, imperdiet eget lorem. Pellentesque id scelerisque ex. Vivamus accumsan sollicitudin justo, id tempor neque pulvinar a. Integer hendrerit sem libero, in dictum nibh feugiat vel. Vestibulum in nunc scelerisque massa faucibus efficitur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla sed elementum ex. Maecenas maximus erat eget lectus sagittis, quis lobortis lectus sollicitudin. In finibus molestie enim, vitae suscipit arcu. Aliquam gravida tortor eget velit hendrerit, vitae placerat sapien tincidunt. Donec iaculis elementum justo. Nunc elementum nisl eget felis laoreet, et facilisis diam cursus. Aenean fermentum nec magna sed consequat.           <h2><a id="8" name="1"></a>8. R&Eacute;TRACTATION</h2>
          <h3>8.1 - Livraison &agrave; domicile :</h3>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h3>8.2 Livraison en magasin</h3>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h3>8.3 - Retrait 2 heures</h3>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h2><a id="9" name="1"></a>9 - FRAIS DE PORT</h2>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h3>9 1 - Livraison &agrave; domicile</h3>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h3>9.2 - Livraison Magasin</h3>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h2><a id="10" name="1"></a>10 - LIVRAISON - RETRAIT</h2>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h3>10.1 Livraison en magasin &laquo; Mr.Bricolage &raquo;</h3>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h3>10.2 Livraison &agrave; domicile</h3>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h3>10.2.1 La livraison par envoi postal</h3>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h3>10.2.2 La livraison par transporteur</h3>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h2><a id="11" name="1"></a>11- FORCE MAJEURE</h2>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h2><a id="12" name="1"></a>12- RETOURNER UN PRODUIT</h2>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h2><a id="13" name="1"></a>13 &ndash; LITIGES &ndash; M&Eacute;DIATION</h2>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h2><a id="14" name="1"></a>14 - GARANTIES</h2>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.
          <h2><a id="15" name="1"></a>15 - DONN&Eacute;ES PERSONNELLES</h2>
          Curabitur vel tempus lorem, quis fermentum nibh. Duis non lorem elit. Nullam accumsan dictum molestie. Donec sodales, nisi quis tempus convallis, diam elit bibendum sem, eget aliquet enim sapien ut mauris. Phasellus sodales ipsum tellus, sit amet rutrum ligula auctor in. Donec rhoncus nulla eget libero aliquam, nec sodales arcu lobortis. Donec consequat lectus nibh, a fringilla mi vulputate vel. Proin posuere imperdiet bibendum. Sed in nisi vitae est condimentum dapibus id et nunc. Cras a ultrices turpis. Aenean non orci rutrum, vulputate magna nec, aliquet quam. Interdum et malesuada fames ac ante ipsum primis in faucibus.

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
