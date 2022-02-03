<?php

// extends est le mot clé pour faire de l'héritage
// on peut le lire : Chien est une classe enfant de Animal
// on peut lire : Animal est la classe parent de Chien
class Chien extends Animal{
    
    public function Bark(){
        echo "Wouaf, Wouaf<br>";
        // ici j'appelle une méthode PROTECTED que j'hérite de mon parent
        $this->methodeProtected();
    }
    /**
     * Cette méthode va faire une erreur car la propriété est privé 
     * elle n'est donc pas accessible vie l'héritage
     */
    public function accesPrivateProperty()
    {
        echo "J'ai ton code de carte bleu : ";
        echo $this->laProprietePrivate;
        echo "<br>";
    }
}