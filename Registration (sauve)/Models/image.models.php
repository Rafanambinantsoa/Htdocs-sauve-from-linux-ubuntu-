<?php


class Image extends Model  {
    private $images;

    public function getImg($identifiantImg)
    {
        $req = "SELECT img from registration where nom = :nom";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":nom" , $identifiantImg , PDO::PARAM_STR);
        $stmt->execute();
        while($donne = $stmt->fetch()){
            return $donne['img'];
        }
    }
    
}