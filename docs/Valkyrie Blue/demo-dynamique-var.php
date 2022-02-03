<?php

echo "tagada";
// tagada

$variable = "tagada";
echo $variable;
// tagada

//////////////////////////////////////////////////////////////
require "../app/Controllers/MainController.php";

$controller = new MainController();
echo $controller->maPropriete;
// ValeurDeLaPropriété

// j'ai une variable qui contient, coincidence, 
// le nom de ma propriété de mon controller
// je le fait expres, ça m'arrange
$proprieteDynamique = "maPropriete";

// Et là, de la magie noire 😈
echo $controller->$proprieteDynamique;
// PHP se dit : tiens, j'ai deux variables :
// $controller et $proprieteDynamique
// $proprieteDynamique est la plus à droite, 
// je dois la remplacer par sa valeur en PREMIER
// $controller->$proprieteDynamique ==> $controller->maPropriete

// ensuite je vais utiliser l'objet $controller pour lire la propriété demandé
// echo $controller->maPropriete
// donc le résultat est : "ValeurDeLaPropriété"

$nomDeLaMathode = "affichePageHome";
$controller->$nomDeLaMathode();
// ça va exécuter la méthode affichePageHome()

// De la même manière que les propriété et les méthodes
// on peut aussi s'en servir pour le nom d'une classe
$nomController = "MainController";
$controllerDynamique = new $nomController();

echo $controllerDynamique->maPropriete;
// va écrire : ValeurDeLaPropriété