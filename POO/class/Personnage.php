<?php
class Personnage
{

    //Propriété
    protected $vie = 80;
    protected $atk = 20;
    protected $nom;

    //pour acceder à des propriété private
    public function getNom()
    {
        return $this->nom;
    }
    public function getAtk()
    {
        return $this->atk;
    }
    public function getVie()
    {
        return $this->vie;
    }

    //pour ajouté la valeur, inverse de gettet == setter
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    // Méthode ou bien foncition
    public function crier()
    {
        echo "Karim Akutagawa";
    }

    //Pour remettre le point de vie à 100;
    public  function regenerer($vie = null)
    {
        if (is_null($vie)) {
            $this->vie = 100;
        } else {
            $this->vie += $vie;
            // $this->vie = $this->vie + $vie;
        }
    }

    //Pour recuperer le nom du personnage par exemple
    public function __construct($nom)
    {
        $this->nom = $nom;
    }
    //verification si le personnage est mort ; false si vivant true si mort
    public function mort()
    {
        return $this->vie <= 0;
    }
    protected function empeche_vie_negatif()
    {
        if ($this->vie < 0) {
            $this->vie = 0;
        }
    }

    public function attaque($cible)
    {
        // var_dump($cible);
        //this = attaquant
        //cible = defenseur
        $cible->vie -= $this->atk;
        $cible->empeche_vie_negatif();
    }
}
