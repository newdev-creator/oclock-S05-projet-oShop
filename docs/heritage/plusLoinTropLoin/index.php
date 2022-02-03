<?php

echo "J'instancie un Animal : <br>";
$chien = new Animal();
/**
 * Ici je suis passé par le constructeur de la classe Animal
 * et par la méthode WhoIam() de la classe Animal
 */
echo "<hr>";

echo "J'instancie un Chien : <br>";
$chien = new Dog();
/**
 * Ici je suis passé par le constructeur de la classe Dog
 * et pas par le constructeur de la classe Animal
 */
echo "<hr>";

echo "J'instancie un Pug : <br>";
$chien = new Pug();
/**
 * Ici je suis passé par le constructeur de la classe Dog
 * car je n'ai pas de constructeur Pug
 */

echo "<hr>";
echo "J'instancie un Chat : <br>";
$chat = new Cat();
/**
 * Ici je suis passé par le constructeur de la classe Animal
 * car je n'ai pas de constructeur Cat
 * et donc je passe par la méthode WhoIam() de la classe Animal car je l'hérite
 */

echo "<hr>";
echo "J'instancie un Angora : <br>";
$chat = new Angora();
/**
 * Ici je suis passé par le constructeur de la classe Angora
 * et par la méthode WhoIam() de la classe Cat car je l'hérite
 */

echo "<hr>";
echo "J'instancie un Siamois : <br>";
$chat = new Siamois();
/**
 * Ici je suis passé par le constructeur de la classe Siamois
 * Mais aussi par le contructeur Animal car j'appelle explicitement le constructeur parent
 * Mais comme le premier parent Cat n'a pas de constructeur, on remonte au parent du parent, ainsi de suite
 */


 // ======================================================
 //  Déclaration des classes
 // ======================================================

 /**
 * Classe parent avec un constructeur
 */
class Animal {
    public function __construct()
    {
        echo "Je suis le constructeur d'un animal<br>";
        $this->WhoIam();
    }
    protected function WhoIam(){echo "Je suis de la classe ".self::class."<br>";}
}
/**
 * Classe sans constructeur
 */
class Cat extends Animal {
    protected function WhoIam(){echo "Je suis de la classe ".self::class."<br>";}
}
/**
 * Classe enfant avec constructeur ET parent sans constructeur
 */
class Angora extends Cat {
    public function __construct()
    {
        echo "Je suis le constructeur de l'Angora<br>";
        $this->WhoIam();
    }
}
/**
 * Classe qui appelle explicitement le constructeur parent
 */
class Siamois extends Cat {
    public function __construct()
    {
        echo "Je suis le constructeur du Siamois<br>";
        // il est possible d'appeller volontairement le constructeur parent
        // on peut appeller tout du parent avec `parent::`
        parent::__construct();
    }
}
/**
 * classe avec son constructeur qui écrase le constructeur parent
 */
class Dog extends Animal {
    public function __construct()
    {
        echo "Je suis le constructeur du chien<br>";
    }
}

/**
 * Classe sans constructeur
 */
class Pug extends Dog {
    /**
     * Cette fonction n'est jamais appellée car on ne passe pas par le constructeur Animal
     * je passe par le constructeur de mon parent Dog qui n'appelle pas cette méthode
     */
    protected function WhoIam(){echo "Je suis de la classe ".self::class."<br>";}
}