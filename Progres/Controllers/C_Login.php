<?php
require_once "../Models/M_Login.php";
require_once "../Models/util.php";
init_session();

if(isset($_POST['connex'])){
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];

    $a  = new uti($nom , $mdp);
    $res = $a->get_one($nom);
    if(gettype($res)){
        if($res['mdp'] ==$mdp){
            $_SESSION['utilisateur'] = $nom;
            header("Location : ../Vues/redirection.php");
            
        }else{
            header("Location : ../Vues/index.php");
    
        }
    }else{
        header("Location : ../Vues/index.php");
    }
    
}

if(isset($_GET['dec'])){
    end_session();
    header("Location : ../Vues/index.php");
}