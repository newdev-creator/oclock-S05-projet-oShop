# SQL

## En tant que visiteur, je veux pouvoir visualiser les produits par catégorie afin d'accéder intuitivement aux chaussures désirées

category_id 1 fonctionne

```SQL
SELECT * FROM `product` WHERE `category_id` = ?
```

## En tant que visiteur, je veux pouvoir visualiser les produits par marque afin d'accéder intuitivement aux chaussures désirées

brand_id 7 fonctionne

```SQL
SELECT * FROM `product` WHERE `brand_id` = ?
```

## En tant que visiteur, je veux pouvoir visualiser les produits par type afin d'accéder intuitivement aux chaussures désirées

type_id 4 fonctionne

```SQL
SELECT * FROM `product` WHERE `type_id` = ?
```

## En tant que visiteur, je veux pouvoir accéder à une description détaillée de chaque produit

id 1 fonctionne

```SQL
SELECT * FROM `product` WHERE `id` = ?
```

## En tant que visiteur, je veux pouvoir accéder à 5 marques mises en avant sur toutes les page afin de naviguer plus rapidement sur le site

```SQL
SELECT * FROM `brand`
-- WHERE `footer_order` > 0
-- WHERE `footer_order` != 0
WHERE `footer_order` <> 0
ORDER BY `footer_order` ASC
```

## En tant que visiteur, je veux pouvoir accéder à 5 types de produit mises en avant sur toutes les page afin de naviguer plus rapidement sur le site

```SQL
SELECT * FROM `type`
-- WHERE `footer_order` > 0
-- WHERE `footer_order` != 0
WHERE `footer_order` <> 0
ORDER BY `footer_order` ASC
```

## toutes les informations d'une catégorie

```SQL
SELECT *
FROM `category`
-- WHERE `name` = 'Cérémonie' 
WHERE `id` = ?
```

## toutes les informations d'une marque

```SQL
SELECT *
FROM `brand`
WHERE `id` = ?
```

## toutes les informations d'un type

```SQL
SELECT *
FROM `type`
WHERE `id` = ?
```

## Exploration SQL

### exemple de INNER JOIN

je cherche à récupere tout les produits d'une category
mais je veux aussi le nom de la catégorie auquel ils appartiennent

```SQL
SELECT `product`.* , `category`.`name`
FROM `product`
INNER JOIN `category` ON `product`.`category_id` = `category`.`id`
WHERE `category_id` = 1
```

je cherche à récupere tout les produits (sans filtre)
mais je veux aussi le nom de la catégorie auquel ils appartiennent

```SQL
-- le hic c'est que * dit tout les champs de toutes les tables
-- il faut donc préciser ce que l'on veux comme champs
SELECT product.* , category.name
FROM product 
-- je défini la relation entre mes tables
INNER JOIN category ON product.category_id = category.id
```

### Multiple WHERE

Je veux tout les produits (`SELECT * FROM product`)
qui sont SOIT (`OR` dans la requete) :

* de la marque ID=8 (`brand_id`= 8 )
* de la category ID=6 (`category_id`= 6)

```SQL
SELECT * 
FROM `product`
WHERE 
`brand_id`= 8 
OR 
`category_id`= 6
```
