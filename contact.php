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
    $bc = array('Accueil','Contact');
    $bcLinks = array('index.php', 'contact.php');
    afficheBreadcrumb($bc, $bcLinks);
    ?>
    <!--/breadcrumb-->
    <!------ Include the above in your HEAD tag ---------->

    <div class="contact-jumbotron contact-jumbotron-sm">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-12">
            <h1 class="contact-titre">
              Nous contacter
              <small>
                <br>&nbsp;&nbsp;&nbsp;Nos equipes vous repondront dans les plus brefs delais !
              </small>
            </h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="well well-sm">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">
                      Nom</label>
                      <input type="text" class="form-control" id="name" placeholder="Votre nom (requis)" required="required" />
                    </div>
                    <div class="form-group">
                      <label for="email">
                        Adresse Email client </label>
                        <div class="input-group">
                          <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input type="email" class="form-control" id="email" placeholder="Votre adresse email (requis)" required="required" /></div>
                      </div>
                      <div class="form-group">
                        <label for="subject">
                          Sujet :</label>
                          <select id="subject" name="subject" class="form-control" required="required">
                            <option value="na" selected="">Choisissez:</option>
                            <option value="svc_client">Service client</option>
                            <option value="svc_apres_vente">Service apres-vente</option>
                            <option value="suggestions">Suggestions</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">
                            Votre message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                            placeholder="Message"></textarea>
                          </div>
                        </div>
                        <div class="col-md-3 offset-5" >
                          <button type="submit" class="btn btn-info" id="btnContact">
                            Envoyer</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <form>
                      <legend><span class="glyphicon glyphicon-globe"></span> Nos locaux:</legend>
                      <address>
                        <strong>Eshop</strong><br>
                        Avenue Leclerc<br>
                        75015 Paris<br>
                        <abbr title="Phone">
                          Tel:</abbr>
                          01 28 02 29 45
                          <abbr title="Phone">
                            Fax:</abbr>
                            01 60 05 12 33
                          </address>
                          <address>
                            <strong>Adresse de contact</strong><br>
                            <a href="mailto:contact@eshop.fr">contact@eshop.fr</a>
                          </address>
                        </form>
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
