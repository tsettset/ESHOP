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
    $bc = array('Accueil', 'Plan du site');
    $bcLinks = array('index.php','plan.php');
    afficheBreadcrumb($bc,$bcLinks);
    ?>
    <!--/breadcrumb-->
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-10 offset-1 ">
          <ul class="list-group">
            <a href="index.php"><li class="list-group-item">Accueil</li></a>
            <a href="nosboutiques.php"><li class="list-group-item">Nos boutiques</li></a>
            <a href="#"><li class="list-group-item">Qui sommes-nous ?</li></a>
            <a href="#"><li class="list-group-item">Conseils et questions</li></a>
            <a href="professionnel.php"><li class="list-group-item">Professionnels</li></a>
            <a href="catalogue.php?page=carrelage"><li class="list-group-item">Carrelage</li></a>
            <a href="catalogue.php?page=parquet"><li class="list-group-item">Parquet</li></a>
            <a href="catalogue.php?page=exterieur"><li class="list-group-item">Exterieur</li></a>
            <a href="catalogue.php?page=mur"><li class="list-group-item">Mur</li></a>
            <a href="catalogue.php?page=accessoires"><li class="list-group-item">Accessoires</li></a>
            <a href="pose.php"><li class="list-group-item">Pose</li></a>
            <a href="catalogue.php?page=sanitaires"><li class="list-group-item">Sanitaires</li></a>
            <a href="contact.php"><li class="list-group-item">Contact</li></a>
            <a href="cgv.php"><li class="list-group-item">Conditions generales de vente</li></a>
            <a href="mentionslegales.php"><li class="list-group-item">Mentions legales</li></a>
            <a href="moncompte.php"><li class="list-group-item">Connexion ou inscription</li></a>
            <a href="monpanier.php"><li class="list-group-item">Mon Panier</li></a>
            <a href="nosproduits.php"><li class="list-group-item">Nos produits</li></a>
            <a href="devis.php"><li class="list-group-item">Devis personnalisé</li></a>
          </ul>
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
