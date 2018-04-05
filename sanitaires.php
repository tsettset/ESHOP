<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <Title>ESHOP</Title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">        
        <link rel="stylesheet" type="text/css" href="css/accueil_infos.css">
        <link rel="stylesheet" type="text/css" href="css/categorie.css">

    </head>
    <body>

		<div class="container-fluid">
			<div class="row">
				<!--breadcrumb-->
				<nav aria-label="breadcrumb" class="col-sm-12">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Accueil</a></li>
					<li class="breadcrumb-item active" aria-current="page">Sanitaires</li>
				  </ol>
				</nav>
				<!--/breadcrumb-->
			</div>
			<div class="row">
				<div class="col-sm-12" style="background-image: url('img/bgSanitaires.jpg'); color: white;">
					<h1>Sanitaires</h1>
					<h5>Découvrez nos produits Sanitaires<br>
					Ainsi que leurs accessoires pour vous débarasser des nuisibles</h5>
				</div>
			</div>
			<div class="row" style="background-color: #e9ecef;">
				<div class="row">
					<div class="col-sm-8 offset-4 wrap-mod">
						<h2>Découvrez nos suggestions </h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 offset-3">
						<h6>Des combinaisons imaginées par nos équipes
						pour inspirer votre décoration</h6>
					</div>
					<div class="col-sm-3">
						<div id="carouselBS" class="carousel slide " data-ride="carousel" data-interval="3000"  >
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img class="d-block w-100 img-fluid" src="img/focus1.jpg" alt="First slide">
								<span class="carousel-control-prev-icon" style="background-color: black;" aria-hidden="true"></span>
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100 img-fluid" src="img/focus2.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100 img-fluid" src="img/focus3.jpg" alt="Third slide">
							</div>
						  </div>
							<a class="carousel-control-prev" href="#carouselBS" role="button" data-slide="prev">
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselBS" role="button" data-slide="next">
								<span class="carousel-control-next-icon" style="background-color: black;" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<form>
				    <div class="form-group">
				      <label for="type_produit_sanitaire">Produit</label>
							<select class="custom-select my-1 mr-sm-2" id="type_produit_sanitaire">
						    <option selected>Choisissez...</option>
								<option value="1">Carrelage</option>
								<option value="2">Traitement de l'eau</option>
								<option value="3">Aménagement douche</option>
								<option value="4">Aménagement baignoire</option>
								<option value="5">Autre aménagement salle de bain</option>
								<option value="6">Aménagement WC</option>
								<option value="7">Aménagement cuisine</option>
								<option value="8">Accessoire déco-sanitaire</option>
								<option value="9">Alimentation de l'eau en intérieur</option>
								<option value="10">Alimentation de l'eau en extérieur</option>
								<option value="11">Evacuation des eaux usées</option>
						  </select>
				    </div>
						<h4>Affinez votre recherche</h4>
					  <div class="form-group">
					    <label for="disponibilite">Disponibilite</label>
					    <select class="custom-select my-1 mr-sm-2" id="disponibilite">
								<option selected></option>
							</select>
					  </div>
					  <div class="form-group">
					    <label for="inputAddress2">Address 2</label>
					    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputCity">City</label>
					      <input type="text" class="form-control" id="inputCity">
					    </div>
					    <div class="form-group col-md-4">
					      <label for="inputState">State</label>
					      <select id="inputState" class="form-control">
					        <option selected>Choose...</option>
					        <option>...</option>
					      </select>
					    </div>
					    <div class="form-group col-md-2">
					      <label for="inputZip">Zip</label>
					      <input type="text" class="form-control" id="inputZip">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="form-check">
					      <input class="form-check-input" type="checkbox" id="gridCheck">
					      <label class="form-check-label" for="gridCheck">
					        Sauvegarder mes preferences
					      </label>
					    </div>
					  </div>
					  <button type="submit" class="btn btn-primary">Appliquer vos criteres de recherche</button>
					</form>
				</div>
				<div class="col-sm-9">
					<img class="d-block w-100 img-fluid" src="img/focus1.jpg" alt="First slide">
				</div>
			</div>
		</div>
		<?php
			include 'accueil_infos.php';
		?>
		<?php
			include 'js_inc.php';
		?>
	</body>
</html>
