<!DOCTYPE html>
<html>
<head>
  <?php
  include 'head.php';
  ?>
</head>
<body>
  <?php include 'tete.php'; ?>
  <div class="container-fluid" style="padding-top:15px;">


    <div class="row">
      <div class="col-md-8 offset-2">
        <div class="alert alert-dark text-center" ><h3>PANIER</h3></div>
        <div class="table-responsive">
          <table class="table" align="center">
            <tr>
              <th>Titre</th>
              <th>Quantité</th>
              <th>Prix Unitaire</th>
              <th>Total</th>
              <th>Action</th>
            </tr>
            <tr>
              <td>Planche parquet rouge ref:123ABC </td>
              <td>2</td>
              <td>45</td>
              <td>90</td>
              <td><a href="#"><i class="fas fa-trash"></i></a></td>
            </tr>
            <tr>
              <td>Accessoire Salle de bain ref:123ABC</td>
              <td>5</td>
              <td>5</td>
              <td>25</td>
              <td><a href="#"><i class="fas fa-trash"></span></a></td>
              </tr>
              <tr>
                <td>Tuyauterie sanitaires ref:123ABC</td>
                <td>1</td>
                <td>56</td>
                <td>56</td>
                <td><a href="#"><i class="fas fa-trash"></span></a></td>
                </tr>
                <tr><th colspan="3"></th><td colspan="2">171 neuros </td></tr>
                <tr><td colspan="5" align="right"><a href="#" onclick="return(confirm('Sur et certain ?'));">
                  <span class="fas fa-trash"></span> Vider mon panier </a></td></tr>
                </table>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 offset-2 text-right">
              <button type="submit" class="btn btn-secondary">Payer</button>
            </div>
            <div class="col-md-4">
              <button type="submit" class="btn btn-secondary">Creer un devis</button>
            </div>
          </div>
          <?php include 'accueil_infos.php'; ?>
        </div><!-- container-fluid -->
        <?php include 'js_inc.php'; ?>
      </body>
      </html>
