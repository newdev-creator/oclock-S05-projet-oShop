<?php 

class EpagneulBreton extends Chien {

    // Comme aucun chien ne peut hériter de l'Epagneul Breton
    // on peut laisser la méthode chasser en private
    private function chasser() {
        echo "Ca sent le gibier, je vais suivre la piste.<br>";
    }

    // Pour utiliser cette méthode en dehors du code interne à la classe
    // on laisse en public
    public function visMaVie() {
        // Ici, on a accès à toutes les propriétés et méthodes (public ou 
        // protected) des classes dont on hérite (celles de nos ancêtres)
        $this->aboyer(); // J'essaie de dire quelque chose à son maître mais il comprend jamais rien
        $this->chasser(); // C'est mon activité favorite
        $this->manger(); // Ca fait du bien de reprendre des forces
        $this->dormir(); // Ca fait du bien de se reposer
    }
}
