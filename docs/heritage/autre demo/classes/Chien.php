<?php

// extends indique que la classe Chien aura accès à toutes les propriétés
// et méthodes de la classe Animal, sauf celles qui sont déclarées private
class Chien extends Animal {

    protected $nombreDePattes = 4;

    protected function aboyer() {
        echo 'Ouaf !<br>';
    }
}
