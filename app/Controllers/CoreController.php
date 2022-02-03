<?php

namespace oShop\Controllers;

use oShop\Models\Brand;
use oShop\Models\Type;

class CoreController {

    protected function show($viewName, $viewData = [])
    {
        // Pour utiliser $altoRouter partout
        // on utilise une astuce que c'est pas bien de l'utiliser
        // le mot clé global CASSE la portée d'une variable
        global $altoRouter;

        //! Correction des CSS/affichage
        // On récupère l'URL absolue pour les URLs dans les views (css, images, etc.)
        // la variable $_SERVER contient plein d'information sur l'environement
        //var_dump($_SERVER);
        /*
        if (isset($_SERVER['BASE_URI'])) {
            $absoluteURL = $_SERVER['BASE_URI'];
        }
        else {
            $absoluteURL = '';
        }
        */

        $absoluteURL = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';
        

        require_once __DIR__.'/../views/header.tpl.php';

        /****************************************** */
        // exemples : require_once __DIR__."/views/{$viewName}.tpl.php";
        // si $viewName == 'home'   
        // require_once __DIR__."/views/home.tpl.php";
        // si $viewName == 'products'   
        // require_once __DIR__."/views/products.tpl.php";
        // si $viewName == 'store'   
        // require_once __DIR__."/views/store.tpl.php";
        /****************************************** */
        
        // ici je peux utiliser $viewData
        // donc dans le require aussi
        
        // Pour avoir des zoli noms de variable dans la vue
        // plutot que d'avoir un tableau
        // je veux transformer $viewData et autant de variable que de clé
        // exemple : j'ai une clé 'product' je veux une variable $product
        // Pour chaque clé du tableau, on a une variable avec le même nom
        extract($viewData);
        // merci PHP pour le truc facile :+1:
        /*
        c'est l'équivalent de faire :
        $product = $viewData['product'];
        $idProduct = $viewData['idProduct'];
        */

        require_once __DIR__."/../views/{$viewName}.tpl.php";

        // On a ici l'appel au Model car intimement lié au template footer.tpl
        // On a besoin des brand pour le footer
        // on va donc les chercher via le Model et la bonne méthode
        $brandModel = new Brand();
        $allBrandForFooter = $brandModel->findAllForFooter();

        //TODO faire la même chose pour les types
        // 1 . coder la méthode dans le bon Model
        // 2 . appeler cette méthode pour récupérer les listes de types
        // 3 . dans le footer, faire un zoli boucle et afficher le tout

        // On a ici l'appel au Model car intimement lié au template footer.tpl
        // On a besoin des types pour le footer
        // on va donc les chercher via le Model et la bonne méthode
        $typeModel = new Type();
        $allTypeForFooter = $typeModel->findAllForFooter();

        require_once __DIR__.'/../views/footer.tpl.php';

        /* A la manière de la Saison 4 */
        //require __DIR__.'/views/header.tpl.php';
        // require __DIR__."/views/{$currentPage}.tpl.php";
        // Autre manière de concatener notre variable
        // require __DIR__.'/views/'.$currentPage.'.tpl.php';
        //require __DIR__.'/views/footer.tpl.php';
    }
}