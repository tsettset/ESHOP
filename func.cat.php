<?php
$breadcrumbItem1 = 'Accueil';
$breadcrumbItem2 = 'Sanitaires';
$breadcrumbLink1 = 'index.php';
$breadcrumbLink2 = 'catalogue.php?page=sanitaires';
$titreH1 = 'Sanitaires';
$bgImgTitre = 'img/bgSanitaires.jpg';
$sousTitre = 'Découvrez nos produits Sanitaires<br>Ainsi que leurs accessoires pour vous débarasser des nuisibles';
$slidesTitle = array('Découvrez nos suggestions', 'Des combinaisons imaginées par nos équipes', 'Personnalisez nos idees a votre décoration', 'Voila voila', 'sinon ca va vous ?');
$slidesImgs = array ('img/combo-sdb-1.jpg', 'img/combo-sdb-2.jpg', 'img/combo-sdb-3.jpg', 'img/combo-sdb-4.jpg', 'img/combo-sdb-5.jpg');
$slidesAlts = array ('combinaisons salle de bain', 'combinaisons salle de bain', 'combinaisons salle de bain',
                          'combinaisons salle de bain', 'combinaisons salle de bain');
$colCategoriesTitles = array ('Carrelage salle de bain et WC', 'Evacuation des eaux usees', 'Amenagement salle de bain',
                                'Amenagement cuisine', 'Amenagement WC', 'Accessoires deco sanitaires');
$colCategoriesImgs = array( 'img/carr_sdb_01.jpg', 'img/sani-eaux-usees.jpg', 'img/combo-sdb-2.jpg',
                              'img/sani-cuisine-1.jpg', 'img/sani-amenagement-wc.jpg', 'img/sani-deco-1.jpg');
$colCategoriesAlts = array('Sanitaires categorie image', 'Sanitaires categorie image', 'Sanitaires categorie image',
                            'Sanitaires categorie image', 'Sanitaires categorie image', 'Sanitaires categorie image');

if (isset($_GET['page'])){
    switch ($_GET['page']) {
      case 'carrelage':
        setCarrelage();
        break;
      case 'parquet':
        setParquet();
        break;
      case 'exterieur':
        setExterieur();
        break;
      case 'mur':
        setMur();
        break;
      case 'accessoires':
        setAccessoires();
        break;
      case 'sanitaires':
        setSanitaires();
        break;
      default:
        setSanitaires();
        break;
    }
}else setSanitaires();

function setSanitaires(){
  global $breadcrumbItem1, $breadcrumbItem2, $breadcrumbLink1, $breadcrumbLink2, $titreH1, $bgImgTitre, $sousTitre, $slidesTitle, $slidesImgs, $slidesAlts, $colCategoriesTitles;
  $breadcrumbLink1 = 'index.php';
  $breadcrumbLink2 = 'catalogue.php?page=sanitaires';
  $titreH1 = 'Sanitaires';
  $breadcrumbItem1 = 'Accueil';
  $breadcrumbItem2 = 'Sanitaires';
  $bgImgTitre = 'img/bgSanitaires.jpg';
  $sousTitre = 'Découvrez nos produits Sanitaires<br>Ainsi que leurs accessoires pour vous débarasser des nuisibles';
  $slidesTitle = array('Découvrez nos suggestions', 'Des combinaisons imaginées par nos équipes', 'Personnalisez nos idees a votre décoration', 'Voila voila', 'sinon ca va vous ?');
  $slidesImgs = array ('img/combo-sdb-1.jpg', 'img/combo-sdb-2.jpg', 'img/combo-sdb-3.jpg', 'img/combo-sdb-4.jpg', 'img/combo-sdb-5.jpg');
  $slidesAlts = array ('combinaisons salle de bain', 'combinaisons salle de bain', 'combinaisons salle de bain',
                            'combinaisons salle de bain', 'combinaisons salle de bain');
  $colCategoriesTitles = array ('Carrelage salle de bain et WC', 'Evacuation des eaux usees', 'Amenagement salle de bain',
                                  'Amenagement cuisine', 'Amenagement WC', 'Accessoires deco sanitaires');
  $colCategoriesImgs = array( 'img/carr_sdb_01.jpg', 'img/sani-eaux-usees.jpg', 'img/combo-sdb-2.jpg',
                                'img/sani-cuisine-1.jpg', 'img/sani-amenagement-wc.png', 'img/sani-deco-1.jpg');
  $colCategoriesAlts = array('Sanitaires categorie image', 'Sanitaires categorie image', 'Sanitaires categorie image',
                              'Sanitaires categorie image', 'Sanitaires categorie image', 'Sanitaires categorie image');
}

function setCarrelage(){
  global $breadcrumbItem1, $breadcrumbItem2, $breadcrumbLink1, $breadcrumbLink2, $titreH1, $bgImgTitre, $sousTitre, $slidesTitle, $slidesImgs, $slidesAlts, $colCategoriesTitles;
  $breadcrumbLink1 = 'index.php';
  $breadcrumbLink2 = 'catalogue.php?page=carrelage';
  $breadcrumbItem1 = 'Accueil';
  $breadcrumbItem2 = 'Carrelage';
  $titreH1 = 'Carrelage';
  $bgImgTitre = 'img/bgCarrelage.jpg';
  $sousTitre = 'Découvrez nos carrelages<br>Et leurs outillages, accessoires, on a tout pas cher wallah !';
  /*$slidesTitle = array('Découvrez nos suggestions', 'Des combinaisons imaginées par nos équipes', 'Personnalisez nos idees a votre décoration', 'Voila voila', 'sinon ca va vous ?');
  $slidesImgs = array ('img/img1.jpg', 'img/img2.jpg', 'img/img3.jpg', 'img/img4.jpg', 'img/img5.jpg');
  $slidesAlts = array ('first slide', 'second slide', 'third slide', 'fourth slide', 'fifth slide');
  $colCategoriesTitles = array ('Carrelage salle de bain et WC', 'Carrelage Mural', 'Carrelage sol',
                                'Carrelage cuisine','Joint carrelage','Produits et accessoires de pose pour carrelage');
  $colCategoriesImgs = array( 'img/carr_sdb_01.jpg', 'img/sani-eaux-usees.jpg', 'img/combo-sdb-2.jpg',
                                'img/sani-cuisine-1.jpg', 'img/sani-amenagement-wc.png', 'img/sani-deco-1.jpg');
  $colCategoriesAlts = array('Carrelage categorie image', 'Carrelage categorie image', 'Carrelage categorie image',
                              'Carrelage categorie image', 'Carrelage categorie image', 'Carrelage categorie image');
*/
}

function setParquet(){
  global $breadcrumbItem1, $breadcrumbItem2, $breadcrumbLink1, $breadcrumbLink2, $titreH1, $bgImgTitre, $sousTitre, $slidesTitle, $slidesImgs, $slidesAlts, $colCategoriesTitles;
  $breadcrumbLink1 = 'index.php';
  $breadcrumbLink2 = 'catalogue.php?page=parquet';
  $breadcrumbItem1 = 'Accueil';
  $breadcrumbItem2 = 'Parquet';
  $titreH1 = 'Parquet';
  $bgImgTitre = 'img/bgParquet.jpg';
  $sousTitre = 'Découvrez nos parquets<br>Et leurs outillages, accessoires, on a tout pas cher wallah !';
  /*$slidesTitle = array('Découvrez nos suggestions', 'Des combinaisons imaginées par nos équipes', 'Personnalisez nos idees a votre décoration', 'Voila voila', 'sinon ca va vous ?');
  $slidesImgs = array ('img/img1.jpg', 'img/img2.jpg', 'img/img3.jpg', 'img/img4.jpg', 'img/img5.jpg');
  $slidesAlts = array ('first slide', 'second slide', 'third slide', 'fourth slide', 'fifth slide');
  $colCategoriesTitles = array ('Carrelage salle de bain et WC', 'Carrelage Mural', 'Carrelage sol',
                                'Carrelage cuisine','Joint carrelage','Produits et accessoires de pose pour carrelage');
  $colCategoriesImgs = array( 'img/carr_sdb_01.jpg', 'img/sani-eaux-usees.jpg', 'img/combo-sdb-2.jpg',
                                'img/sani-cuisine-1.jpg', 'img/sani-amenagement-wc.png', 'img/sani-deco-1.jpg');
  $colCategoriesAlts = array('Carrelage categorie image', 'Carrelage categorie image', 'Carrelage categorie image',
                              'Carrelage categorie image', 'Carrelage categorie image', 'Carrelage categorie image');
*/
}
function setExterieur(){
  global $breadcrumbItem1, $breadcrumbItem2, $breadcrumbLink1, $breadcrumbLink2, $titreH1, $bgImgTitre, $sousTitre, $slidesTitle, $slidesImgs, $slidesAlts, $colCategoriesTitles;
  $breadcrumbLink1 = 'index.php';
  $breadcrumbLink2 = 'catalogue.php?page=exterieur';
  $breadcrumbItem1 = 'Accueil';
  $breadcrumbItem2 = 'Exterieur';
  $titreH1 = 'Exterieur';
  $bgImgTitre = 'img/bgExterieur.jpg';
  $sousTitre = 'Découvrez nos decorations d\'exterieur<br>Ainsi que les meubles, accessoires, on a tout pas cher wallah !';
  /*$slidesTitle = array('Découvrez nos suggestions', 'Des combinaisons imaginées par nos équipes', 'Personnalisez nos idees a votre décoration', 'Voila voila', 'sinon ca va vous ?');
  $slidesImgs = array ('img/img1.jpg', 'img/img2.jpg', 'img/img3.jpg', 'img/img4.jpg', 'img/img5.jpg');
  $slidesAlts = array ('first slide', 'second slide', 'third slide', 'fourth slide', 'fifth slide');
  $colCategoriesTitles = array ('Carrelage salle de bain et WC', 'Carrelage Mural', 'Carrelage sol',
                                'Carrelage cuisine','Joint carrelage','Produits et accessoires de pose pour carrelage');
  $colCategoriesImgs = array( 'img/carr_sdb_01.jpg', 'img/sani-eaux-usees.jpg', 'img/combo-sdb-2.jpg',
                                'img/sani-cuisine-1.jpg', 'img/sani-amenagement-wc.png', 'img/sani-deco-1.jpg');
  $colCategoriesAlts = array('Carrelage categorie image', 'Carrelage categorie image', 'Carrelage categorie image',
                              'Carrelage categorie image', 'Carrelage categorie image', 'Carrelage categorie image');
*/
}
function setMur(){
  global $breadcrumbItem1, $breadcrumbItem2, $breadcrumbLink1, $breadcrumbLink2, $titreH1, $bgImgTitre, $sousTitre, $slidesTitle, $slidesImgs, $slidesAlts, $colCategoriesTitles;
  $breadcrumbLink1 = 'index.php';
  $breadcrumbLink2 = 'catalogue.php?page=mur';
  $breadcrumbItem1 = 'Accueil';
  $breadcrumbItem2 = 'Mur';
  $titreH1 = 'Mur';
  $bgImgTitre = 'img/bgMur.jpg';
  $sousTitre = 'Découvrez nos amenagements muraux<br>outillages, accessoires, on a tout pas cher wallah !';
  /*$slidesTitle = array('Découvrez nos suggestions', 'Des combinaisons imaginées par nos équipes', 'Personnalisez nos idees a votre décoration', 'Voila voila', 'sinon ca va vous ?');
  $slidesImgs = array ('img/img1.jpg', 'img/img2.jpg', 'img/img3.jpg', 'img/img4.jpg', 'img/img5.jpg');
  $slidesAlts = array ('first slide', 'second slide', 'third slide', 'fourth slide', 'fifth slide');
  $colCategoriesTitles = array ('Carrelage salle de bain et WC', 'Carrelage Mural', 'Carrelage sol',
                                'Carrelage cuisine','Joint carrelage','Produits et accessoires de pose pour carrelage');
  $colCategoriesImgs = array( 'img/carr_sdb_01.jpg', 'img/sani-eaux-usees.jpg', 'img/combo-sdb-2.jpg',
                                'img/sani-cuisine-1.jpg', 'img/sani-amenagement-wc.png', 'img/sani-deco-1.jpg');
  $colCategoriesAlts = array('Carrelage categorie image', 'Carrelage categorie image', 'Carrelage categorie image',
                              'Carrelage categorie image', 'Carrelage categorie image', 'Carrelage categorie image');
*/
}
function setAccessoires(){
  global $breadcrumbItem1, $breadcrumbItem2, $breadcrumbLink1, $breadcrumbLink2, $titreH1, $bgImgTitre, $sousTitre, $slidesTitle, $slidesImgs, $slidesAlts, $colCategoriesTitles;
  $breadcrumbLink1 = 'index.php';
  $breadcrumbLink2 = 'catalogue.php?page=accessoires';
  $breadcrumbItem1 = 'Accueil';
  $breadcrumbItem2 = 'Accessoires';
  $titreH1 = 'Accessoires';
  $bgImgTitre = 'img/bgAccessoires.jpg';
  $sousTitre = 'Découvrez nos accessoires<br>et d\'autres trucs, on a tout pas cher wallah !';
  /*$slidesTitle = array('Découvrez nos suggestions', 'Des combinaisons imaginées par nos équipes', 'Personnalisez nos idees a votre décoration', 'Voila voila', 'sinon ca va vous ?');
  $slidesImgs = array ('img/img1.jpg', 'img/img2.jpg', 'img/img3.jpg', 'img/img4.jpg', 'img/img5.jpg');
  $slidesAlts = array ('first slide', 'second slide', 'third slide', 'fourth slide', 'fifth slide');
  $colCategoriesTitles = array ('Carrelage salle de bain et WC', 'Carrelage Mural', 'Carrelage sol',
                                'Carrelage cuisine','Joint carrelage','Produits et accessoires de pose pour carrelage');
  $colCategoriesImgs = array( 'img/carr_sdb_01.jpg', 'img/sani-eaux-usees.jpg', 'img/combo-sdb-2.jpg',
                                'img/sani-cuisine-1.jpg', 'img/sani-amenagement-wc.png', 'img/sani-deco-1.jpg');
  $colCategoriesAlts = array('Carrelage categorie image', 'Carrelage categorie image', 'Carrelage categorie image',
                              'Carrelage categorie image', 'Carrelage categorie image', 'Carrelage categorie image');
*/
}

?>
