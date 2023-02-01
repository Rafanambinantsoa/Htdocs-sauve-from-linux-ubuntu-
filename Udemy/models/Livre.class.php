<?php

class Livre
{
    private $id;
    private $titre;
    private $nbPages;
    private $images;
//Tableau contenant tous les livres
    // public static $livres;

    public function __construct($id, $titre, $nbPages, $images)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->images = $images;
        //Stockage de nouveau livre dans un tableau
        //self::$livres[] = $this;
    }
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getTitre(){
        return $this->titre;
    }
    public function setTitre($titre){
        $this->titre = $titre;
    }
    
    public function getNbPages(){
        return $this->nbPages;
    }
    public function setNbPages($nbPages){
        $this->nbPages = $nbPages;
    }

    public function getImages(){
        return $this->images;
    }
    public function setImage($images){
        $this->id = $images;
    }
}
