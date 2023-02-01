<?php
class form
{
    //par défaut tableau de valeur vide
    protected $data = array();
    protected $tag = "p";


    //recupere le donné et, SAUVEGARDER le donnée
    public function __construct($data = array())
    {
        $this->data = $data;
    }
    //générer le paragraphe auto
    protected function surround($html)
    {
        return "<{$this->tag}>$html</{$this->tag}>";
    }
    public function nada($ka)
    {
        return "<p>$ka</p>";
    }
    // pour afficher le donner qui est stocker dans le chambre le tableau
    protected function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    public function input($name)
    {
        return  $this->surround('<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">');
    }

    public function submit()
    {
        return   $this->surround("<input type='submit'>");
    }


    /**
     * Get the value of data
     */
    public function getData()
    {
        return $this->data;
    }
}
