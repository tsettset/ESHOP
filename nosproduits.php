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
          <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
          <li class="breadcrumb-item"><a href="catalogue.php?page=sanitaires">Sanitaires</a></li>          
          <li class="breadcrumb-item active" aria-current="page">Carrelage Salle de bain - WC</li>
        </ol>
      </nav>
    </div>
    <!--/breadcrumb-->
    <!--Titre de page-->
    <div class="row">
      <div class="col-sm-12 text-center" style="background-image: url('img/bgSanitaires.jpg'); color: white;">
        <h1>Produits carrelage salle de bain et WC</h1>
        <h5>Viens chercher bonheur</h5>
      </div>
    </div>
    <!--/Titre de page-->
    <!--Sous Categories-->
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-3">
          <ul class="list-group-item">
            <div class="row">
              <div class="col-auto ">
                <li class="list-group-item list-group-item-dark text-center">Formulaire de recherche</li>
              </div>
            </div>
            <div class="row border">
              <div class="col-auto">
                <div class="form-group">
                  <label for="plage_prix">Que recherchez-vous ?</label><br>
                  <input type="text" placeholder="entrez votre recherche">
                  </div>
              </div>
            </div>
            <div class="row border">
              <div class="col-auto">
                <div class="form-group">
                  <label for="plage_prix">Selectionnez une plage de prix :</label>
                  <select class="form-control form-control-sm" id="plage_prix">
                    <option>indifferent</option>
                    <option>10$ .. 100$</option>
                    <option>100$ .. 1000$</option>
                    <option> > 1000$ </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row border">
              <div class="col-auto">
                <div class="form-group">
                  <label >Disponibilite :</label><br>
                  <div class="form-check ">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">En magasin</label>
                  </div>
                  <div class="form-check ">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">En ligne</label>
                  </div>
                  <div class="form-check ">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label" for="inlineCheckbox3">Passer commande</label>
                  </div>
                </div>
              </div>
            </div>
          </ul>
        </div>
        <div class="col-md-3">
          <div class="ajuster text-center">
            <img class="img-fluid" src="img/factory_grafito.jpg" alt="faience byron grafito">
            <div class="container-fluid">
              <div class="col categorie-title">
                FACTORY 45x45 GRAFITO
              </div>
              <div class="row">
                <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
              </div>
            </div>
          </div>
          <div class="ajuster text-center">
            <img class="img-fluid" src="img/faience_base-byron_gris.jpg" alt="BYRON GRIS">
            <div class="container-fluid">
              <div class="col categorie-title">
                BYRON GRIS 20X60
              </div>
              <div class="row">
                <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
              </div>
            </div>
          </div>
          <div class="ajuster text-center">
            <img class="img-fluid" src="img/faience-byron_grafito.jpg" alt="FAIENCE BYRON GRAFITO 20X60">
            <div class="container-fluid">
              BYRON GRAFITO 20X60
              <div class="col categorie-title">
              </div>
              <div class="row">
                <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="ajuster text-center">
            <img class="img-fluid" src="img/base-decor_howe_grey.jpg" alt="FAIENCE DECOR HOWE GREY 20X60">
            <div class="container-fluid">
              <div class="col categorie-title">
                FAIENCE HOWE 20X60
              </div>
              <div class="row">
                <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
              </div>
            </div>
          </div>
          <div class="ajuster text-center">
            <img class="img-fluid" src="img/base-carrelage_sol_blanc.jpg" alt="33.3x33.3 white satin">
            <div class="container-fluid">
              <div class="col categorie-title">
                33x33 WHITE SATIN
              </div>
              <div class="row">
                <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
              </div>
            </div>
          </div>
          <div class="ajuster text-center">
            <img class="img-fluid" src="img/visuel_produit_base-carrelage_sol_noir.jpg" alt="Carrelage sol Black satin - 33,3 x 33,3 cm">
            <div class="container-fluid">
              <div class="col categorie-title">
                BLACK SATIN - 33x33
              </div>
              <div class="row">
                <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="ajuster text-center">
            <img class="img-fluid" src="img/factory_grafito.jpg" alt="faience byron grafito">
            <div class="container-fluid">
              <div class="col categorie-title">
                FACTORY 45x45 GRAFITO
              </div>
              <div class="row">
                <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
              </div>
            </div>
          </div>
          <div class="ajuster text-center">
            <img class="img-fluid" src="img/base-carrelage_sol_blanc.jpg" alt="33.3x33.3 white satin">
            <div class="container-fluid">
              <div class="col categorie-title">
                33x33 WHITE SATIN
              </div>
              <div class="row">
                <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
              </div>
            </div>
          </div>
          <div class="ajuster text-center">
            <img class="img-fluid" src="img/base-decor_howe_grey.jpg" alt="FAIENCE DECOR HOWE GREY 20X60">
            <div class="container-fluid">
              <div class="col categorie-title">
                FAIENCE HOWE 20X60
              </div>
              <div class="row">
                <div class="col bg-dark text-white"><img class="img-fluid" src="img/loupe2.png" alt="vue">&nbsp;&nbsp;Aller sur la page</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      include 'accueil_infos.php';
      ?>
    </div>

  </div>
  <?php
  include 'js_inc.php';
  ?>
</body>
</html>
