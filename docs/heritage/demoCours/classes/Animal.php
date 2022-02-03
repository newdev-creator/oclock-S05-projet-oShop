<?php

class Animal {

    public $taille;

    /*  PROTECTED
    protected signifie PRIVE sauf pour les enfants !
    Donc avec l'héritage, les enfants obtiennent la propriété PROTECTED
    celle ci seras considéré comme PRIVE dans la classe ENFANT
    */
    protected $estVivant = true;

    // Cette propriété est privé, mes enfant n'y auront pas accès
    private $laProprietePrivate = 132;

    public function manger(){
        echo "Miam, Miam<br>";
    }

    public function dormir(){
        echo "zZzZ²<br>";
    }
    /**
     * Cette méthode est PRIVE à l'extérieur, et DISPONIBLE avec l'HERITAGE
     * Elle restera PRIVE depuis la classe Enfant
     */
    protected function methodeProtected(){
        echo "ceci est une méthode protected<br>";
    }

    /**
     * Get the value of estVivant
     */ 
    public function getEstVivant()
    {
        return $this->estVivant;
    }

    /**
     * Set the value of estVivant
     */ 
    public function setEstVivant($estVivant)
    {
        $this->estVivant = $estVivant;
    }
}
