<?php
require_once "Models/BD.models.php";
require_once "Models/image.models.php";
class Register extends Model
{
    private $pico;
    public function __construct()
    {
        $this->pico = new Image;
    }

    public function ajoutBD($nom, $prenom, $age, $mail, $password)
    {
        $requete = "INSERT INTO registration (nom , prenom , age , gmail , motdepass) values (:nom , :prenom , :age , :gmail , :pass) ";
        $stmt = $this->getBdd()->prepare($requete);
        $stmt->bindValue(":nom", $nom, PDO::PARAM_STR);
        $stmt->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $stmt->bindValue(":age", $age, PDO::PARAM_INT);
        $stmt->bindValue(":gmail", $mail, PDO::PARAM_STR);
        $stmt->bindValue(":pass", $password, PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        // if($resultat > 0){

        // }

    }
    public function loginValidationBD($nom, $mdp)
    {
        $req = $this->getBdd()->prepare("SELECT * FROM registration where nom = :nom and motdepass = :mdp");
        $req->bindValue(":nom", $nom, PDO::PARAM_STR);
        $req->bindValue(":mdp", $mdp, PDO::PARAM_STR);
        $req->execute();
        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
        //Fermeture anle requte ou bien base de donnée ts aiko
        $req->closeCursor();

        $count = count($resultat);

        if ($count > 0) {
            session_start();
            $_SESSION['name'] = $nom;
            header('Location:' . URL . 'liam');
        } else {
            echo "nope";
        }
    }

    public function ajoutLivreBD($image , $nom)
    {
        $requete = "UPDATE registration set img = :images where nom = :nom";
        $stmt = $this->getBdd()->prepare($requete);
        $stmt->bindValue(":images", $image, PDO::PARAM_STR);
        $stmt->bindValue(":nom", $nom, PDO::PARAM_STR);

        $resultat = $stmt->execute();

        // if ($resultat > 0) {
        //     $livre = new Livre($this->getBdd()->lastInsertId(), $titre, $nbPage, $image);
        //     $this->AjoutLivre($livre);
        // }



        //Bindvalue est une fonction permettant de securiser les donnée d'ajout (il fait partie de la PDO enfin je crois);
    }
}
