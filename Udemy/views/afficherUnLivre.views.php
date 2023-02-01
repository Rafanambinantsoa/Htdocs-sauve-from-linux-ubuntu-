<?php ob_start();?>


<div class="row">
    <div class="col-6">
        <img src="<?= URL ?>Public/images/<?= $book->getImages(); ?> " alt="">
    </div>
    <div class="col-6">
            <ul style="list-style: none ;">
                <li>Titre  : <?= $book->getTitre() ?> Pages</li>
                <li>Nombre de Page : <?= $book->getNbPages() ?></li>
            </ul>
        
    </div>
</div>


<?php
$titre = $book->getTitre();
$content = ob_get_clean();
require_once 'views/template.php';
?>