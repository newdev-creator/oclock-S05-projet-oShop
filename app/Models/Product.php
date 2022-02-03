<?php
namespace oShop\Models;

use \oShop\Utils\Database;
use \PDO;

/*
id	int(10) unsigned Auto Increment	
name	varchar(45)	Le nom du produit
description	text NULL	La description du produit
picture	varchar(128) NULL	L'URL de l'image du produit
price	decimal(10,2) [0.00]	Le prix du produit
rate	tinyint(1) [0]	L'avis sur le produit, de 1 à 5
status	tinyint(1) [0]	Le statut du produit (1=dispo, 2=pas dispo)
created_at	timestamp [current_timestamp()]	La date de création du produit
updated_at	timestamp NULL	La date de la dernière mise à jour du produit
brand_id	int(10) unsigned	
category_id	int(10) unsigned NULL	
type_id	int(10) unsigned	

*/

class Product extends CoreModel {
    
    public $description;
    public $picture;
    public $price;
    public $rate;
    public $status;
    public $brand_id;
    public $category_id;
    public $type_id;

    /**
     * méthode qui va chercher un produit, par son ID
     */
    public function find($idProduct)
    {
        //TODO faire la requete SQL
        // je récupère ma connexion à la BDD
        $pdo = Database::getPDO();
        
        // je créer ma requete SQL
        $sql = "SELECT * FROM `product` WHERE `id` = {$idProduct}";

        // je demande à PDO de faire la requete
        $pdoStatement = $pdo->query($sql);

        // je demande à récupérer les données au format objet de type Product
        $produitDeLaBase = $pdoStatement->fetchObject(Product::class);
        

        //! ne marche pas, mais c'est bon pour la réflexion/compréhension
        // $produitDeLaBase = $pdoStatement->fetch(PDO::FETCH_CLASS, 'Product');
        

        //var_dump($produitDeLaBase);

        //TODO renvoyer le produit trouvé
        return $produitDeLaBase;
    }

    /**
     * Je cherche tout les produits d'une catégorie
     *
     * @param int $idCategory
     */
    public function findAllByCategory($idCategory) 
    {
        //TODO faire la requete SQL
        // je récupère ma connexion à la BDD
        $pdo = Database::getPDO();
        
        // je créer ma requete SQL
        $sql = "SELECT * FROM `product` WHERE `category_id` = {$idCategory}";
        // $sql = "SELECT * FROM `product` WHERE `category_id` = ".$idCategory." ";

        // je demande à PDO de faire la requete
        $pdoStatement = $pdo->query($sql);

        // je demande à récupérer les données au format objet de type Product
        // comme je fait un FetchAll() je vai récupérer plusieurs résulats dans un tableau
        $produitsDeLaBase = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Product::class);
        

        //var_dump($produitsDeLaBase);

        //TODO renvoyer les produits trouvés
        return $produitsDeLaBase;
    }
}