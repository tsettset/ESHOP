<?php 

include 'tete.php';
?>


<div class="container-fluid">
<div class="jumbotron">
<form>
    <div class="row">
        <div class="col-sm-6">
            <label for="nom">Nom : </label>
            <input type="text" class="form-control" id="nom" placeholder="Nom">
            <label for="prenom">Prenom : </label>
            <input type="text" class="form-control" id="nom" placeholder="prenom"> 
            <label for="email">Email: </label>
            <input type="email" class="form-control" id="email" placeholder="Email">       
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Commentaire ...</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
               <button type="submit" class="btn btn-alert mb-2">Envoyer</button>
        </div>
        
    </div>
</form>
</div>
</div>
<!--<form action="#" method="post"/>
<label for="nom">Nom : </label>
<input type="text" name="nom" id="nom"/><br>
<label for="prenom">Prénom : </label>
<input type="text" name="prenom" id="prenom"/>
<label for="email">Email</label>
<input type="email" name="email" id="email"/>
<input type="submit" name="submit" value="Valider"/>-->
