<<<<<<< HEAD
||||||| merged common ancestors
=======
<?php
function afficheBreadcrumb($bcArray, $bcLinksArray){
  if (!empty($bcArray) && !empty($bcLinksArray)){?>
  <div class="row">
      <nav aria-label="breadcrumb" class="col-sm-12">
        <ol class="breadcrumb">
          <?php
          for($i=0; $i<count($bcArray); $i++){
            echo '<li class="breadcrumb-item"><a href="'.$bcLinksArray[$i].'">'.$bcArray[$i].'</a></li>';
          }
          /*foreach ($bcArray as $value) {
            echo '<li class="breadcrumb-item"><a href="index.php">'.$value.'</a></li>';
          }*/?>
        </ol>
      </nav>
    </div>
    <?php
  }
}
?>
>>>>>>> menu_haut
