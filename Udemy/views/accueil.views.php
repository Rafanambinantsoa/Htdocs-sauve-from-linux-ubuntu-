<?php ob_start();?>

ici l'accueil

<?php
$titre = "Bibliothèque Kim ";
$content = ob_get_clean();
require 'views/template.php';
?>