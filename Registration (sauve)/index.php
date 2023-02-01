<?php

require_once "Controllers/login.controller.php";
$controller = new Logincontroller();


define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

try {
    if (empty($_GET['page'])) {
        require "views/accueil.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);

        switch ($url[0]) {
            case "accueil":
                require "views/accueil.view.php";
                break;
            case "vr":
                echo $controller->envoieData();
                break;
            case "i":
                // echo "registration";
                require_once "views/template.php";
                break;
            case "l":
                require_once "views/login.views.php";
                break;
            case "la":
                // echo "je suis la validatio";
                echo $controller->loginValidation();
                break;
            case "idem":
                // echo "je suis la validatio";
                echo $controller->ajoutValidationImages();
                break;
            case "liam":
                // echo "je suis la validatio";
                // echo "You're really connected";
                require_once "views/landing_login.views.php";
                break;
            case "session":
                $controller->detruit();
                break;
            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
