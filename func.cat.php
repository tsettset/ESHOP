<?php
$breadcrumbItem1 = 'Accueil';
$breadcrumbItem2 = 'Sanitaires';
$titreH1 = 'Sanitaires';
$bgImgTitre = 'img/bgSanitaires.jpg';
$sousTitre = 'Découvrez nos produits Sanitaires<br>Ainsi que leurs accessoires pour vous débarasser des nuisibles';
$slidesTitle = array('Découvrez nos suggestions', 'Des combinaisons imaginées par nos équipes', 'Personnalisez nos idees a votre décoration', 'Voila voila', 'sinon ca va vous ?');
$slidesImgs = array ('img/img1.jpg', 'img/img2.jpg', 'img/img3.jpg', 'img/img4.jpg', 'img/img5.jpg');
$slidesAlts = array ('first slide', 'second slide', 'third slide', 'fourth slide', 'fifth slide');
$colCategoriesTitles = array ('Carrelage salle de bain et WC', 'Evacuation des eaux usees', 'Amenagement salle de bain',
                                'Amenagement cuisine', 'Amenagement WC', 'Accessoires deco sanitaires');

function setSanitaires(){
  global $breadcrumbItem1, $breadcrumbItem2, $titreH1, $bgImgTitre, $sousTitre, $slidesTitle, $slidesImgs, $slidesAlts, $colCategoriesTitles;
  $breadcrumbItem1 = 'Accueil';
  $breadcrumbItem2 = 'Sanitaires';
  $titreH1 = 'Sanitaires';
  $bgImgTitre = 'img/bgSanitaires.jpg';
  $sousTitre = 'Découvrez nos produits Sanitaires<br>Ainsi que leurs accessoires pour vous débarasser des nuisibles';
  $slidesTitle = array('Découvrez nos suggestions', 'Des combinaisons imaginées par nos équipes', 'Personnalisez nos idees a votre décoration', 'Voila voila', 'sinon ca va vous ?');
  $slidesImgs = array ('img/img1.jpg', 'img/img2.jpg', 'img/img3.jpg', 'img/img4.jpg', 'img/img5.jpg');
  $slidesAlts = array ('first slide', 'second slide', 'third slide', 'fourth slide', 'fifth slide');
  $colCategoriesTitles = array ('Carrelage salle de bain et WC', 'Evacuation des eaux usees', 'Amenagement salle de bain',
                                  'Amenagement cuisine', 'Amenagement WC', 'Accessoires deco sanitaires');
}

function setCarrelage(){
  global $breadcrumbItem1, $breadcrumbItem2, $titreH1, $bgImgTitre, $sousTitre, $slidesTitle, $slidesImgs, $slidesAlts, $colCategoriesTitles;
  $breadcrumbItem1 = 'Accueil';
  $breadcrumbItem2 = 'Carrelage';
  $titreH1 = 'Carrelage';
  $bgImgTitre = 'img/bgSanitaires.jpg';
  $sousTitre = 'Découvrez nos carrelages<br>Et leurs outillages, accessoires, on a tout pas cher wallah !';
  $slidesTitle = array('Découvrez nos suggestions', 'Des combinaisons imaginées par nos équipes', 'Personnalisez nos idees a votre décoration', 'Voila voila', 'sinon ca va vous ?');
  $slidesImgs = array ('img/img1.jpg', 'img/img2.jpg', 'img/img3.jpg', 'img/img4.jpg', 'img/img5.jpg');
  $slidesAlts = array ('first slide', 'second slide', 'third slide', 'fourth slide', 'fifth slide');
  $colCategoriesTitles = array ('Carrelage salle de bain et WC', 'Carrelage Mural', 'Carrelage sol',
                                'Carrelage cuisine','Joint carrelage','Produits et accessoires de pose pour carrelage');

}

if (isset($_GET['page'])){
    switch ($_GET['page']) {
      case 'carrelage':
        setCarrelage();
        break;
      case 'parquet':
        break;
      case 'exterieur':
        break;
      case 'mur':
        break;
      case 'accessoires':
        break;
      case 'pose':
        break;
      case 'sanitaires':
      default:
        setSanitaires();
        break;
    }
}else setSanitaires();
?>
