<?php

class Animal {

    // Avec protected, on indique aux classes qui héritent d'Animal
    // qu'elles peuvent accéder à cette propriété
    protected $estVivant = true;

    // Avec protected, on indique aux classes qui héritent d'Animal
    // qu'elles peuvent accéder à cette méthode
    protected function manger() {
        echo 'Miam' . '<br>';
    }

    protected function dormir() {
        echo 'Rrrrrrrrr Pfffffff'.'<br>';
    }

    protected function mourir() {
        $this->estVivant = false;
        echo "Je crois que c'est la fin...sniff...<br>";
    }
}
