# Namespace

Un namespace est un "dossier virtuel" dans lequel est rangé une classe

- permet d'avoir plusieurs classes du même nom
- doit être déclaré au début du fichier
- n'est valable que pour le fichier
- le séparateur de "dossiers" est le `\`

## Placer une classe dans un _Namespace_

La classe `Joconde` est "rangée" dans le "dossier virtuel" `Terre\Europe\France\Paris\Louvre`

```php
<?php

namespace Terre\Europe\France\Paris\Louvre;

class Joconde {
    // [...]

    public function smile() {
        // [...]
    }
}
```

:warning: Toute classe "utilisée" dans ce code :arrow_up: sera considérée comme faisant partie du _Namespace_ de la classe (chemin relatif).

```php
<?php

namespace Terre\Europe\France\Paris\Louvre;

class Joconde {
    // [...]

    public function smile() {
        // [...]
        $mouth = new Mouth(); // => \Terre\Europe\France\Paris\Louvre\Mouth
    }
}
```

Pour éviter cela, il faudra spécifier le FQCN de la classe (chemin absolu, voir plus bas).

## Utiliser une classe d'un _Namespace_

### Fully Qualified Class Name

C'est le "chemin absolu" de la classe => le _Namespace_ + le nom de la classe

```php
<?php

$tableau = new \Terre\Europe\France\Paris\Louvre\Joconde();
$tableau->smile();
```

### Mot-clé `use`

Dès qu'on "utilise" au moins deux fois la classe dans un fichier PHP, il est intéressant de ne pas avoir à stipuler le FQCN

- comme le mot-clé `namespace`, `use` n'est valable que pour le fichier courant
- le premier `\` est optionnel car il est implicite
- il doit être placé en haut du fichier, après le mot-clé `namespace` s'il y en a un

```php
<?php

use Terre\Europe\France\Paris\Louvre\Joconde;

$tableau1 = new Joconde();
$tableau1->smile();

$tableau2 = new Joconde();
```

## Classes natives PHP & Classes d'autres _Namespaces_

Toutes les classes natives de PHP ne sont dans aucun _Namespace_.  
Ainsi, elles se trouvent à la racine des _Namespace_.

```php
<?php

namespace Terre\Europe\France\Paris\Louvre;

use Animals\Human\Face\Mouth;

class Joconde {
    // [...]

    public function smile() {
        // [...]
        $mouth = new Mouth(); // => \Animals\Human\Face\Mouth

        // Utilisation de la classe PDO, native à PHP (donc hors namespace)
        $pdo = new \PDO();
    }
}
```