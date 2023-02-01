<?php
require_once "BD.models.php";

class User extends Model  {
    private $nom;
    private $prenom;
    private $age;
    private $gmail;
    private $img;

    public function __construct($identifiantImg)
    {
        $req = "SELECT * from registration where nom = :nom";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":nom" , $identifiantImg , PDO::PARAM_STR);
        $stmt->execute();
        while($donne = $stmt->fetch()){
            $this->nom = $donne['nom'];
            $this->prenom = $donne['prenom'];
            $this->age = $donne['age'];
            $this->gmail = $donne['gmail'];
            $this->img = $donne['img'];
        }
    }

    // public function getImg($identifiantImg)
    // {
    //     $req = "SELECT * from registration where nom = :nom";
    //     $stmt = $this->getBdd()->prepare($req);
    //     $stmt->bindValue(":nom" , $identifiantImg , PDO::PARAM_STR);
    //     $stmt->execute();
    //     while($donne = $stmt->fetch()){
    //         return $donne['img'];
    //     }
    // }
    

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
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     */
    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of gmail
     */
    public function getGmail()
    {
        return $this->gmail;
    }

    /**
     * Set the value of gmail
     */
    public function setGmail($gmail): self
    {
        $this->gmail = $gmail;

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