<?php

include 'head.php';
include 'tete.php';

?>
<style>
 h1, h4,p{
        
        text-align: center;
        
    }
    
    h1{
        
        color : #DC1767;
        
    }
    
    h4{
        
        font-style: italic;
    }
    
    .col{
        display: flex;
        justify-content: center;
        
    }
    
    .select{
        
        display: flex;
        justify-content: center;
    }
    
    textarea{
        
        width : 55%;
        height: 200px;
        
    }
    
</style>

<br><br>
<div class="container">
    <div class="jumbotron">
        <h1>RECEVEZ VOTRE DEVIS PERSONNALISE</h1>
        <h4>Description de vos besoins</h4>
        <br><br>
        <div class="row">
            <div class="col">
                <input type="text"  name="prenom" placeholder="Votre prénom"/>
            </div>  
            <div class="col">
                <input type="text" name="nom" placeholder="Votre nom"/>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col">
                <input type="email" name="email" placeholder="Votre email"/>
            </div>  
            <div class="col">
                <input type="text" name="tel" placeholder="Votre numéro de téléphone"/>
            </div>
        </div><br><br>
        <p>Où souhaitez vous réaliser vos travaux ?</p><br><br>
        <div class="row">
            <div class="col">
                <input type="text" name="cp" placeholder="Votre code postal"/>
            </div>  
            <div class="col">
                <input type="text" name="ville" placeholder="Votre ville"/>
            </div>
        </div><br><br>
        <div class="row">
        <div class="col">
        <select>
            <option value="travaux" selected>Pour quel type de travaux ?</option>
            <optgroup label="Carrelage">
            <option value="carrelage sol">Carrelage sol</option>
            <option value="carrelage mural">Carrelage mural</option>
            </optgroup>
            <optgroup label="Parquet">
            <option value="parquet contrecolle">Parquet contrecollé</option>
            <option value="sol stratifié">Sol stratifié</option>
            </optgroup>
            </select>
        </div>
        </div><br><br>
            <div class="row">
            <div class="col">
            <textarea placeholder="Précisez-nous les travaux envisagés"></textarea>
            </div>
            </div><br><br>
            <div class="row">
            <div class="col">
            <button role="button" class="btn btn-secondary">Recevoir mes devis</button>  
            </div>
            </div><br><br>
        
    </div>


</div>


































<?php

include 'pied.php';

?>