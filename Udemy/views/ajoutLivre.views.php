<?php ob_start(); ?>
<form action="<?= URL ?>livre/av" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="titre">Titre : </label>
        <input type="text" class="form-control" id="titre" name="titre">
    </div>

    <div class="form-group">
        <label for="nbPages">Nombre de Pages : </label>
        <input type="text" class="form-control" id="nbPages" name="nbPages">
    </div>

    <div class="form-group">
        <label for="image">Images : </label>
        <input type="file" name="kim" id="image">
        <!-- <input type="file" class="form-control-file" id="image" name="image"> -->
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php
$titre = "Ajout d'un Livre ";
$content = ob_get_clean();
require 'views/template.php';
?>