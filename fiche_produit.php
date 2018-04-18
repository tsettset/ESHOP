<?php
include 'head.php';
include 'tete.php';

?>


<style>



	.conteneur { max-width: 1000px; margin: 0 auto; }
	.clear { clear: both; }
	.haut{ width: 90%; margin-left : 30px; padding: 5px; box-sizing: border-box; }
	.bas { width: 50%;  margin-left: 35px;}
	.haut img { width: 100%;  box-sizing: border-box; border: 5px solid #efefef;  }
	.bas a { width: 49%; }
	.bas a img { width: 100%; height: 100px; box-sizing: border-box; border: 5px solid #efefef;  }
	.legend { color: white; font-size: 28px; text-align: center; }
	tr>td:last-child{text-align: center; color : rgb(97, 97, 97); }
	td{ padding : 10px;}
	.zoomer {display:inline-block; position: relative;}
	.zoomer img {display: block;}
</style>
<br>
<br>
<h1 class="text-center">Carrelage sol beige Clair effet bois</h1>
<br>
<br>
<div class="container">
	<p>
		<?php
		for($i=0; $i<5; $i++){

			echo '<img src="img/etoilej.png" alt="etoile jaune">&nbsp;';
		}
		?>
		(9)&nbsp;&nbsp;<img src="img/crayon.png" alt="avis">Donnez nous votre avis! &nbsp;&nbsp; Questions et réponses (2)
	</p>
	<hr style="border: 3px solid black">
	<br>
	<div class="row">
		<div class="col-md-2">
			<p>Réf 122055</p>
		</div>
		<div class="col">
			<p>Usage du produit: <strong>Très intensif</strong></p>
			<p>Largeur de joint conseillée (en mm) : <strong>Fin (2mm)</strong></p>
		</div>
		<div class="col">
			<p><a href="" style="color:#DC1767;">Faire estimer mon projet par un professionnel</a></p>
			<p><a href="" style="color:#DC1767;">Ajouter mon panier</a></p>
		</div>
	</div>
	<hr>
	<br>
	<div class="row">
		<div class="col-md-8 text-center">
			<div class="haut">
			<span class="zoomer" id="zoom">
				<img src="carrsol1.jpg" alt="image principale" class="img-fluid" id="principale">
				</span>		
			</div>
			<div class="bas">
				<div class="row">
					<div class="col">
						<a href="carrsol1.jpg" title="Mon image 1" class="thumbnail"><img class=img-fluid src="carrsol1.jpg" alt="un alt très important"></a></div>
					<div class="col">
						<a href="carrsol2.jpg" title="Mon image 2" class="thumbnail"><img class="img-fluid" src="carrsol2.jpg"></a></div>
					<div class="col">
						<a href="carrsol3.jpg" title="Mon image 3" class="thumbnail"><img class="img-fluid" src="carrsol3.jpg"></a></div>
				</div>

				<div class="clear"></div>
			</div>

			<script>
				var mesElem = document.getElementsByClassName("thumbnail");

				var tailleTableau = mesElem.length;

				for(var i = 0; i < tailleTableau; i++) {
					mesElem[i].addEventListener("click", function (evenement) {
						evenement.preventDefault();
						document.getElementById('principale').src = this.href;
						document.getElementsByClassName('legend')[0].textContent = this.title;
					});
				}

			</script>

		</div>

		<div class="col-md-3">
			<div>
				<p style="color: #DC1767; font-size: 30px;"><strong>PRIX IMBATTABLES !</strong></p>
				<p><strong>11,90€/m² <span style="color: #DC1767">SEULEMENT !!</span></strong></p>
			</div>

			<hr style="border : 3px solid #DC1767">
			<br>
			<p><img src="img/check.png" alt="validation"><a href="">&nbsp;&nbsp; Retrait gratuit en magasin</a></p>
			<p><img src="img/check.png" alt="validation"><a href="">&nbsp;&nbsp; Livré chez vous sous 48h</a></p>
			<hr>
			<br>
			<p><img src="img/e-devis.png"><a href=""> Demander un e-devis</a></p>
			<br>
			<button type="button" class="btn btn-default" style="background-color: #DC1767; font-size: 25px; color: white;"><img src="img/basket.png" alt="panier"> AJOUTER AU PANIER</button>
			<br>
			<br>
			<img src="img/flecheb.png" alt="fleche">&nbsp;&nbsp;Voir la disponibilité en magasin
			<hr>
			<br>
			<div class="row">
				<div class="col text-center">
					<img src="img/flechedo.png" alt="fleche double"><br>
					<strong>Retour gratuit </strong>en magasin
				</div>	
				<div class="col text-center">
					<img src="img/satisfait2.png" alt="fleche double"><br>
					<strong>6 mois </strong>pour changer d'avis
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<h2>Caractéristiques</h2>
	<hr style="border: 3px solid black">
	<br>

	<table border="1" style="width : 100%;  border : 2px solid black">

		<tr>
			<td>Destination principale</td>
			<td>Interieur</td>
		</tr>
		<tr>
			<td>Destination du carrelage</td>
			<td>Sol et mur</td>
		</tr>
		<tr>
			<td>Aspect</td>
			<td>Bois</td>
		</tr>
		<tr>
			<td>Niveau de qualité</td>
			<td>Qualité premium</td>
		</tr>
		<tr>
			<td>Usage du produit</td>
			<td>Très intensif</td>
		</tr>
		<tr>
			<td>Largeur (en cm)</td>
			<td>20</td>
		</tr><tr>
		<td>Longueur (en cm)</td>
		<td>60</td>
		</tr>
		<tr>
			<td>Epaisseur carrelage (en mm)</td>
			<td>8.2</td>
		</tr>
		<tr>
			<td>Surface</td>
			<td>Structurée</td>
		</tr>
		<tr>
			<td>Finition du produit</td>
			<td>Mat</td>
		</tr>
		<tr>
			<td>Matière principale</td>
			<td>Grès cérame émaillé teinté dans la masse</td>
		</tr>
		<tr>
			<td>Bords</td>
			<td>Rectifiés pour joints fins</td>
		</tr>
		<tr>
			<td>Largeur de joint conseillée (en mm)</td>
			<td>Fin (2 mm)</td>
		</tr>
		<tr>
			<td>Plinthe</td>
			<td>A la dimension du carrelage</td>
		</tr>
		<tr>
			<td>Pays de fabrication</td>
			<td>Italie</td>
		</tr>

	</table>
</div>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script src='jquery.zoom.js'></script>
	<script>
		$(document).ready(function(){
			$('#zoom').zoom();
		});
	</script>
























<?php
include'accueil_infos.php';
include 'pied.php';

?>