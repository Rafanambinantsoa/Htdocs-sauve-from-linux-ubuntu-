<?php
require_once "Model.class.php";
require_once "Livre.class.php";

class LivreManager extends Model
{

    private $livres;

    public function AjoutLivre($livre)
    {
        $this->livres[] = $livre;
    }

    public function getLivre()
    {
        return $this->livres;
    }

    public function chargementLivre()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM livres");
        $req->execute();
        $mesLivres = $req->fetchAll(PDO::FETCH_ASSOC);
        //Fermeture anle requte ou bien base de donnée ts aiko
        $req->closeCursor();

        //Affichage anle boky rehatra , apres anle requte tany amin lay BD , stockena  anaty tableau et ainsi de suite
        foreach ($mesLivres as $livre) {
            $l = new Livre($livre['id'], $livre['titre'], $livre['nbpages'], $livre['images']);
            $this->AjoutLivre($l);
        }
        //Mampisaraka anle tableau refa manao var__dump na print_r (tsy mitambatra2 be le  tableau ) === balise pre
        // echo "<pre>";
        // print_r($meslivres);
        // echo "</pre>";
    }

    public function getLivreById($id)
    {
        // $this->livres[] = $id;
        // var_dump($id);
        // print_r($this->livres);
        for ($i = 0; $i < count($this->livres); $i++) {
            if ($this->livres[$i]->getId() == $id) {
                return $this->livres[$i];
            }
        }
    }
    public function ajoutLivreBD($titre, $nbPage, $image)
    {
        $requete = "INSERT INTO livres (titre , nbpages , images) values(:titre , :nbPage , :images)";
        $stmt = $this->getBdd()->prepare($requete);
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
        $stmt->bindValue(":nbPage", $nbPage, PDO::PARAM_INT);
        $stmt->bindValue(":images", $image, PDO::PARAM_STR);

        $resultat = $stmt->execute();

        if ($resultat > 0) {
            $livre = new Livre($this->getBdd()->lastInsertId(), $titre, $nbPage, $image);
            $this->AjoutLivre($livre);
        }



        //Bindvalue est une fonction permettant de securiser les donnée d'ajout (il fait partie de la PDO enfin je crois);
    }

    //Fonction pemettant de supprimer le chemin permettant d'acceder à l'image dans la BD
    public function supressionLivreBD($id)
    {
        $requete = "DELETE FROM livres where id = :id";
        $stmt = $this->getBdd()->prepare($requete);
        $stmt->bindValue(":id", $id);
        $resultat =  $stmt->execute();
        $stmt->closeCursor();
        if ($resultat > 0) {
            $livre = $this->getLivreById($id);
            unset($livre);
        }
    }

    public function modificationLivreBD($id, $titre, $nbPages, $image)
    {
        $requete = "UPDATE livres set titre = :titre , nbpages =  :nbPages , images = :images  where id = :id";
        $stmt = $this->getBdd()->prepare($requete);
        $stmt->bindValue(":id" , $id , PDO::PARAM_INT);
        $stmt->bindValue(":nbPages" , $nbPages , PDO::PARAM_INT);
        $stmt->bindValue(":titre" , $titre , PDO::PARAM_STR);
        $stmt->bindValue(":images" , $image, PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $this->getLivreById($id)->setTitre($titre);
            $this->getLivreById($id)->setTitre($nbPages);
            $this->getLivreById($id)->setTitre($image);
        }
    }
}
