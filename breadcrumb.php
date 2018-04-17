<?php
function afficheBreadcrumb($bcArray){
  if (!empty($bcArray)){?>
  <div class="row">
      <nav aria-label="breadcrumb" class="col-sm-12">
        <ol class="breadcrumb">
          <?php foreach ($bcArray as $value) {
            echo '<li class="breadcrumb-item"><a href="index.php">'.$value.'</a></li>';
          }?>
        </ol>
      </nav>
    </div>
    <?php
  }
}
?>
