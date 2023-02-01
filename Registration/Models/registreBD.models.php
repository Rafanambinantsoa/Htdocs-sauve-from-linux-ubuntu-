<?php
require_once "Models/BD.models.php";
require_once "Models/actif.class.php";
// require_once "Models/image.models.php";
class Register extends Model
{
    // private $pico;
    private $actif;

    public function Ajoutactif($livre)
    {
        $this->actif[] = $livre;
    }
    public function getaCTIF()
    {
        return $this->actif;
    }
    public function chargementActif()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM registration where status = 'online'");
        $req->execute();
        $tab = $req->fetchAll(PDO::FETCH_ASSOC);
        //Fermeture anle requte ou bien base de donnée ts aiko
        $req->closeCursor();

        //Affichage anle boky rehatra , apres anle requte tany amin lay BD , stockena  anaty tableau et ainsi de suite
        foreach ($tab as $tableau) {
            $l =new  Online ($tableau['id'], $tableau['nom'] , $tableau['img'] );
            
            $this->Ajoutactif($l);
        }
        //Mampisaraka anle tableau refa manao var__dump na print_r (tsy mitambatra2 be le  tableau ) === balise pre
        // echo "<pre>";
        // print_r($meslivres);
        // echo "</pre>";
    }

    public function ajoutBD($nom, $prenom, $age, $mail, $password , $random , $img)
    {
        $requete = "INSERT INTO registration (nom , prenom , age , gmail , motdepass , unique_id , img  , status ) values (:nom , :prenom , :age , :gmail , :pass , :random , :img , 'Active now') ";
        $stmt = $this->getBdd()->prepare($requete);
        $stmt->bindValue(":nom", $nom, PDO::PARAM_STR);
        $stmt->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $stmt->bindValue(":age", $age, PDO::PARAM_INT);
        $stmt->bindValue(":gmail", $mail, PDO::PARAM_STR);
        $stmt->bindValue(":pass", $password, PDO::PARAM_STR);
        $stmt->bindValue(":random", $random, PDO::PARAM_INT);
        $stmt->bindValue(":img", $img, PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            header('Location:' . URL . 'accueil');

        }
        else{
            return "nope";
        }

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
            $jesa = $this->getaCTIF();
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
