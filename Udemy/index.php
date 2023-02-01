<?php
session_start();



define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controllers/Livrescontroller.controller.php";
$livreController = new Livrecontroller;


try {
    if (empty($_GET['page'])) {
        require "views/accueil.views.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);

        switch ($url[0]) {
            case "accueil":
                require "views/accueil.views.php";
                break;
            case "livre":
                if (empty($url[1])) {
                    $livreController->afficherLivre();
                } else if ($url[1] === "l") {
                    echo $livreController->afficherUnLivre($url[2]);
                } else if ($url[1] === "a") {
                    $livreController->ajoutLivre();
                    // echo "ajouter d'un livre";
                } else if ($url[1] === "s") {
                    $livreController->supressionImage($url[2]);
                } else if ($url[1] === "av") {
                    // echo "Ajout validation du Livre";
                    $livreController->ajoutValidationImages();
                } else if ($url[1] === "m") {
                    // echo $url[2];
                    $livreController->modificationLivre($url[2]);
                } else if ($url[1] === "mv") {
                    // echo $url[2];
                    $livreController->modificationLivreValidation();
                } else {
                    throw new Exception("La page n'existe pas");
                }
                break;
            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
