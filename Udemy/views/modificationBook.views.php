<?php ob_start(); ?>

<form action="<?= URL ?>livre/mv" method="post" enctype="multipart/form-data">

    <div class="row">
        <div class="col-6"><img src="<?= URL ?>/Public/images/<?= $livre->getImages() ?>" alt=""></div>
        <div class="col-6">
            <div class="form-group">
                <label for="titre">Titre : </label>
                <input type="text" class="form-control" value="<?= $livre->getTitre() ?>" id="titre" name="titre">
            </div>

            <div class="form-group">
                <label for="nbPages">Nombre de Pages : </label>
                <input type="text" class="form-control" value="<?= $livre->getNbPages(); ?>" id="nbPages" name="nbPages">
            </div>

            <div class="form-group">
                <label for="image">Changer l'images : </label>
                <input type="file"  name="kim" id="image">
                <!-- <input type="file" class="form-control-file" id="image" name="image"> -->
            </div>
            <input type="hidden" name="identifiant" value="<?= $livre->getId();?>" >
        </div>
    <button type="submit" class="btn btn-primary d-block">Update</button>

    </div>


</form>



<?php
$titre = " Modification du Livre" . $livre->getId();
$content = ob_get_clean();
require 'views/template.php';
?>