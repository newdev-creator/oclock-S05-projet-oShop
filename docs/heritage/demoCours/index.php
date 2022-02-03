<?php
require "classes/Animal.php";
require "classes/Chien.php";
require "classes/Labrador.php";

echo '--------------------------------------------------<br/>';
echo "<h3>Animal</h3><br/>";
echo '--------------------------------------------------<br/>';

$unAnimal = new Animal();
$unAnimal->taille = 10;

if ($unAnimal->getEstVivant()) {
    echo "Alive, it's Alive<br>";
}else {
    echo "c'est fini pour lui :'(<br>";
}


$unAnimal->manger();
$unAnimal->dormir();
// ne fonctionne pas car cette méthode est interdite à l'extérieur comme le PRIVATE
//$unAnimal->methodeProtected();
echo $unAnimal->taille."cm<br>";

echo '--------------------------------------------------<br/>';
echo "<h3>Chien</h3><br/>";
echo '--------------------------------------------------<br/>';
$monChien = new Chien();
$monChien->Bark();

// j'ai hérité de la méthode manger de la classe Animal
$monChien->manger();
// j'ai hérité de la méthode dormir de la classe Animal
$monChien->dormir();
// j'ai hérité de la propriété publique taille
$monChien->taille = 80;
echo $monChien->taille."cm<br>";

if ($monChien->getEstVivant()) {
    echo "Alive, it's Alive<br>";
}else {
    echo "c'est fini pour lui :'(<br>";
}

$monChien->accesPrivateProperty();

echo '--------------------------------------------------<br/>';
echo "<h3>Animal</h3><br/>";
echo '--------------------------------------------------<br/>';

$monLabrador = new Labrador();
$monLabrador->dormir();