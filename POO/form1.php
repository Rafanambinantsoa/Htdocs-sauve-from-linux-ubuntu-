<?php

/**
 * Class permettant de generer des formulaire
 */
class Form1
{
    /**
     * [Donnée utilliser par le Formulaire]
     *
     * @var $data array
     */
    private $data;
    /**
     * tag pour entourer les champs
     *
     * @var string
     */
    private $tag = "p";

    /**
     * Permet de recuperer les donnée
     * @param mixed $data string
     * 
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Getter pour afficher les donnée du Data
     *
     * @param mixed $index
     * 
     * @return string
     * 
     */
    public function getData($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * Permet d'Entourer les inputs
     *
     * @param mixed html code Html à entourer
     *
     * @return string
     */
    private function para($html)
    {
        return "<{$this->tag}>$html </{$this->tag}>";
    }

    /**
     * input
     *
     * @param mixed name
     * @param mixed placeholder
     *
     * @return string
     */
    public function input($name, $placeholder)
    {
        return $this->para('<input type="text" name="' . $name . '" placeholder="' . $placeholder . '" value="' . $this->getData($name) .  '">');
    }

    /**
     * [Description for submit]
     * Valider le formulaire
     * @return [type]
     * 
     */
    public function submit()
    {
        return $this->para('<input type="submit" value="Enregistrer">');
    }
}
