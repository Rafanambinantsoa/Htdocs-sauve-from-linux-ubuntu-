<?php
session_start();
class Online extends Model
{
    private $id;
    private $nom;
    private $img;
    private $try;

    public function getTry(){
        return $this->try;
    }

    //Tableau contenant tous les livres
    // public static $livres;

    public function __construct()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM registration where status = 'online' AND nom != :nom ");
        $req->bindValue(":nom", $_SESSION['name'], PDO::PARAM_STR);
        $req->execute();
        $tab = $req->fetchAll(PDO::FETCH_ASSOC);
        $this->try = $tab;
        //Fermeture anle requte ou bien base de donnée ts aiko
        $req->closeCursor();

        foreach ($tab as $tableau) {
            // $name = [$tableau]; 

            $this->id = $tableau['id'];
            $this->nom =  $tableau['nom'];
            $this->img =  $tableau['img'];
        }
    }
    //Stockage de nouveau livre dans un tableau
    //self::$livres[] = $this;


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     */
    public function setImg($img): self
    {
        $this->img = $img;

        return $this;
    }
}
