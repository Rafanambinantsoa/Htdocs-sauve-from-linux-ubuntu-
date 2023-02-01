<?php
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controllers/LivresController.controller.php";
$livreController = new LivresController;

try{
    if(empty($_GET['page'])){
        require "views/accueil.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page']),FILTER_SANITIZE_URL);

        switch($url[0]){
            case "accueil" : require "views/accueil.view.php";
            break;
            case "livres" : 
                if(empty($url[1])){
                    $livreController->afficherLivres();
                } else if($url[1] === "l") {
                    echo $livreController->afficherLivre($url[2]);
                } else if($url[1] === "a") {
                    echo "ajouter d'un livre";
                } else if($url[1] === "m") {
                    echo "modifier un livre";
                } else if($url[1] === "s") {
                    echo "suppression d'un livre";
                } else {
                    throw new Exception("La page n'existe pas");
                }
            break;
            default : throw new Exception("La page n'existe pas");
        }
    }
}
catch(Exception $e){
    echo $e->getMessage();
}
