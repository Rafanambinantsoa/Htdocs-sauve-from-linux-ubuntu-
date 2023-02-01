<?php
class archer extends Personnage
{
    protected $vie = 100;

    public function attaque($cible)
    {
        // var_dump($cible);
        //this = attaquant
        //cible = defenseur
        $cible->vie -=  2 * $this->atk;
        $cible->empeche_vie_negatif();
    }
}
