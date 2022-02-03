<?php

class BorderCollie extends Chien {

    private function troupeauter() {
        echo 'Pas bouger les moutons !<br>';
    }

    public function visMaVie() {
        $this->aboyer(); // J'essaie de dire quelque chose à mon maître mais il ne comprend jamais rien
        $this->troupeauter(); // C'est mon activité favorite
        $this->manger(); // Ca fait du bien de reprendre des forces
        $this->dormir(); // Ca fait du bien de se reposer
        $this->mourir(); // J'ai eu une vie bien remplie mais toutes les bonnes choses ont une fin...
    }
}
