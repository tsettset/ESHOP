<?php
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
?>
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
			<div class="row">
				<nav aria-label="breadcrumb" class="col-sm-12">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php"><?= $breadcrumbItem1; ?></a></li>
					<li class="breadcrumb-item active" aria-current="page"><?= $breadcrumbItem2; ?></li>
				  </ol>
				</nav>
			</div>
     <!--/breadcrumb-->
     <!--Titre de page-->
			<div class="row">
				<div class="col-sm-12" style="background-image: url('<?= $bgImgTitre;?>'); color: white;">
					<h1><?= $titreH1; ?></h1>
					<h5><?= $sousTitre; ?></h5>
				</div>
			</div>
     <!--/Titre de page-->
     <!--Suggestions-->
			<div class="row" style="background-color: #e9ecef;">
				<!--<div class="row">
					<div class="col-sm-8 offset-1">
           <h2>Découvrez nos suggestions </h2>
						<h6>Des combinaisons imaginées par nos équipes
						pour inspirer votre décoration</h6>
					</div>
       </div>-->
         <!--Carousel-->
       <div class="row container">
         <div class="col-sm-6 offset-4">
             <div id="MagicCarousel" class="carousel slide " data-ride="carousel" data-interval="false">
                 <ol class="carousel-indicators">
                     <li data-target="#MagicCarousel" data-slide-to="0"></li>
                     <li data-target="#MagicCarousel" data-slide-to="1"></li>
                     <li data-target="#MagicCarousel" data-slide-to="2"></li>
                     <li data-target="#MagicCarousel" data-slide-to="3"></li>
                     <li data-target="#MagicCarousel" data-slide-to="4"></li>
                 </ol>
                 <div class="carousel-inner" role="listbox">
                     <div class="carousel-item">
                         <img class="img-responsive" src="<?= $slidesImgs[0]; ?>" alt="<?= $slidesAlts[0]; ?>">
                         <div class="carousel-caption" style="bottom :0;left :0; right:0;">
                             &nbsp; &nbsp; &nbsp;<?= $slidesTitle[0];?>
                         </div>
                     </div>
                     <div class="carousel-item active ">
                       <img class="img-responsive" src="<?= $slidesImgs[1]; ?>" alt="<?= $slidesAlts[1]; ?>">
                       <div class="carousel-caption" style="bottom :0;left :0; right:0;">
                           &nbsp; &nbsp; &nbsp;<?= $slidesTitle[1];?>
                       </div>
                     </div>
                     <div class="carousel-item ">
                       <img class="img-responsive" src="<?= $slidesImgs[2]; ?>" alt="<?= $slidesAlts[2]; ?>">
                       <div class="carousel-caption" style="bottom :0;left :0; right:0;">
                           &nbsp; &nbsp; &nbsp;<?= $slidesTitle[2];?>
                       </div>
                     </div>
                     <div class="carousel-item ">
                       <img class="img-responsive" src="<?= $slidesImgs[3]; ?>" alt="<?= $slidesAlts[3]; ?>">
                       <div class="carousel-caption" style="bottom :0;left :0; right:0;">
                           &nbsp; &nbsp; &nbsp;<?= $slidesTitle[3];?>
                       </div>
                     </div>
                     <div class="carousel-item ">
                       <img class="img-responsive" src="<?= $slidesImgs[4]; ?>" alt="<?= $slidesAlts[4]; ?>">
                       <div class="carousel-caption" style="bottom :0;left :0; right:0;">
                           &nbsp; &nbsp; &nbsp;<?= $slidesTitle[4];?>
                       </div>
                     </div>
                 </div>

             </div>
         <!--/Carousel-->
         </div>
       </div>
			</div>
     <!--/Suggestions-->
     <!--Sous Categories-->
     <div class="jumbotron">
         <div class="row">
             <div class="col mr-6">
                 <div class="ajuster text-center">
                     <img class="img-fluid" src="img/img4.jpg" alt="imag4">
                     <div class="container-fluid">
                         <div class="col categorie-title">
                             <?= $colCategoriesTitles[0]; ?>
                         </div>
                         <div class="row">
                             <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
                         </div>

                     </div>
                 </div>
                 <div class="ajuster text-center">
                     <img class="img-fluid" src="img/img4.jpg" alt="imag4">
                     <div class="container-fluid">
                         <div class="col categorie-title">
                             <?= $colCategoriesTitles[1]; ?>
                         </div>
                         <div class="row">
                             <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
                         </div>
                     </div>
                 </div>
                 <div class="ajuster text-center">
                     <img class="img-fluid" src="img/img4.jpg" alt="imag4">
                     <div class="container-fluid">
                         <div class="col categorie-title">
                             <?= $colCategoriesTitles[2]; ?>
                         </div>
                         <div class="row">
                             <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col ml-6">
               <div class="ajuster text-center">
                   <img class="img-fluid" src="img/img4.jpg" alt="imag4">
                   <div class="container-fluid">
                       <div class="col categorie-title">
                             <?= $colCategoriesTitles[3]; ?>
                       </div>
                       <div class="row">
                           <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
                       </div>
                   </div>
               </div>
               <div class="ajuster text-center">
                   <img class="img-fluid" src="img/img4.jpg" alt="imag4">
                   <div class="container-fluid">
                       <div class="col categorie-title">
                           <?= $colCategoriesTitles[4]; ?>
                       </div>
                       <div class="row">
                           <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
                       </div>
                   </div>
               </div>
               <div class="ajuster text-center">
                   <img class="img-fluid" src="img/img4.jpg" alt="imag4">
                   <div class="container-fluid">
                       <div class="col categorie-title">
                             <?= $colCategoriesTitles[5]; ?>
                       </div>
                       <div class="row">
                           <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
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
		<?php
			include 'js_inc.php';
		?>
	</body>
</html>
