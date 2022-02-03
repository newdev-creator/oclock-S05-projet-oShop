<?php

namespace oShop\Controllers;

use oShop\Models\Brand;

/************* MainController ******************* 
  
Je suis le seul controller (pour l'instant)

Mon rôle est de donner les informations nécéssaires
à l'affichage d'une vue.

C'est aussi moi qui fait les require
je suis donc en charge de la méthode show()

Je m'appelle MainController, car je m'occupe UNIQUEMENT de la partie Main
c'est à dire, la page "home"

*******************************************/

class MainController extends CoreController{

    // demo dynamique variable
    public $maPropriete = "ValeurDeLaPropriété";

    public function affichePageTest()
    {
        //TODO NE DOIT SERVIR QUE PENDANT LES TEST
        //! A SUPPRIMER DES QUE POSSIBLE
        // je veux afficher des categories, j'utilise le bon Model
        $model = new Brand();
        
        // je veux récupérer toutes les catégories, j'utilise la bonne méthode
        $allBrand = $model->findAllForFooter();

        // je prépare un tableau contenant toutes les informations necessaire
        // à l'affichage de la vue
        $dataForView = [
            "allBrand" => $allBrand,
            "quelquechoseAutre" => 'tagada'
        ];
        
        //je donne le tableau pour ma vue
        $this->show('test', $dataForView);
    }

    public function affichePageHome(){
        // j'utilise la méthode show avec les bons paramètres
        // je sais que cette méthode doit affiche la page home, obvious, le nom de la méthode
        $this->show('home');
    }

    public function affichePageMentionLegales()
    {
        $this->show('legalNotice');
    }

    public function affichePageAbout()
    {
        $this->show('about');
    }

}