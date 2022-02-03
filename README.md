# Projet _Dans les shoe_

## Description du projet

Un client veut créer un site de e-commerce, en l'occurence une boutique en ligne de chaussures.  
Le site va probablement s'appeller _Dans les shoe_, mais le nom de code du projet est pour l'instant : **oShop**.

Oui, il y a déjà beaucoup de concurrence sur le marché, mais le client est en fait un groupement de plusieurs marques de chaussures qui ne sont pas encore présentes sur internet. Et ces marques ne souhaitent pas dépendre d'une autre société pour la distribution, telle que [Sarenza](https://fr.wikipedia.org/wiki/Sarenza) ou un de ses concurrents.

## Brief client

### Sur toutes les pages

En bas de chaque page, il y aura :

- le nom de la boutique
- le slogan
- les liens vers les pages de la boutique sur les réseaux sociaux
- 5 types de produits
- 5 marques de produits
- la mise en avant du fait que livraison et retours sont gratuits, que les clients ont 30 jours pour renvoyer leur produit, que les internautes peuvent contacter notre service client au 01 02 03 04 05 de 8h à 19h, du lundi au vendredi
- un formulaire d'inscription à la newsletter

### Catalogue

Voici le contenu du site prévu pour l'instant :

- une page d'accueil (avec 5 catégories mises en avant)
- une page des produits pour chaque catégorie (détente, en ville, pour le sport)
- une page produit
- une page des produits pour chaque type de produits (chaussons, escarpins, talons aiguilles)
- une page des produits pour chaque marque

### Panier d'achat

- les produits pourront être ajoutés au panier depuis :
  - la liste de produits de la page "catégorie"
  - la page du produit
- le client voit un résumé du panier dans l'entête de chaque page
- le client peut aller sur une page panier dédiée (accessible depuis le résumé)

### Commande

Après avoir cliqué sur le bouton "Valider ma commande" présent sur la page panier :

- [si besoin] le client se connecte à son compte client ou s'inscrit
- sur une seule page, il renseigne :
  - adresse de facturation
  - adresse de livraison
  - choix de la méthode livraison
  - méthode de paiement
- puis il arrive sur un résumé de sa commande affichant :
  - les informations de la page précédente
  - le contenu du panier
  - un bouton de paiement amenant sur notre prestataire de paiement en ligne sécurisé
- au retour du paiement en ligne,
  - si le paiement est accepté, on affiche la page de confirmation de commande
  - sinon, on affiche la page de commande annulée avec la possibilité de revenir en arrière (au choix du paiement)

### BackOffice

Zone réservée aux administrateurs _business_ et techniques du site.

- l'accès à cette zone nécessite de se connecter avec son compte
- les échanges entre le navigateur et le serveur Web sont chiffrés par soucis de confidentialité & sécurité
- gestion des catégories (liste, ajout, modification, suppression)
- gestion des produits (liste, ajout, modification, suppression)
- gestion des types de produits (liste, ajout, modification, suppression)
- gestion des marques (liste, ajout, modification, suppression)
- gestion des commandes (liste + changement du statut payé-envoyé-annulé-retourné)
- gestion des 5 catégories en page d'accueil
- gestion des 5 types de produits en bas de page
- gestion des 5 marques en bas de page
- gestion des utilisateurs du BackOffice
- 3 types d'utilisateurs :
  - `catalog manager` pouvant gérer les données sur les produits du site (y compris catégories, types et marque)
  - `admin` pouvant, en plus de ce que peut faire un `catalog manager`, modifier le statut des commandes
  - `superadmin` pouvant, en plus de ce que peut faire un `admin`, modifier le statut des commandes et créer des utilisateurs

## Documents techniques

- [User stories](docs/user_stories.md)
- [Product backlog](docs/product_backlog.md)
- [Intégration HTML/CSS](docs/html-css/)

## Organisation

L'organisation pour le développement du site est horizontale, et suit la méthode agile _Scrum_ (développement itératif par _Sprints_).

Il y a des rôles prédéfinis. Quel que soit son rôle, on ne donne d'ordre à personne : chaque personne qui assume un rôle s'occupe de sa partie, de ses responsabilités, et se coordonne avec les autres si besoin.

### Product Owner

Fiche récap : https://kourou.oclock.io/ressources/fiche-recap/scrum/#product-owner

Le Product Owner est Adrien.

Le Product Owner est l'unique rédacteur du _Product Backlog_.  
Le Product Owner peut aider les développeurs pour clarifier certaines fonctionnalités, répondre aux questions sur le projet.

### Scrum Master

Fiche récap : https://kourou.oclock.io/ressources/fiche-recap/scrum/#scrum-master

Le prof de chaque cockpit tiendra le rôle de Scrum Master.

Le Scrum Master est une aide, un support aux autres membres de l'équipe, pour s'assurer que tout le monde suive bien la méthodologie _Scrum_.

### Developer

Fiche récap : https://kourou.oclock.io/ressources/fiche-recap/scrum/#%c3%a9quipe

Le prof de chaque cockpit et les étudiants tiennent le rôle de développeur.

Lors du _Sprint Planning_, les développeurs sont les seuls à décider quels éléments du _Product Backlog_ sont à intégrer au _Sprint Backlog_. Pour cela, ils prennent en compte l'importance de chaque élément pour essayer de les réaliser en priorité.  
Lors du _Sprint Planning_, les développeurs peuvent utiliser le _Planning Poker_ ([fiche récap](https://kourou.oclock.io/ressources/fiche-recap/scrum/#sprint-planning)) pour déterminer l'effort (la difficulté, la complexité) pour chaque élément du _Product Backlog_ (il n'est pas nécessaire de passer sur toutes les user stories).

### Sprints

Chaque _Sprint_ va durer une "saison", soit 8 jours.

À la fin de chaque _Sprint_ sera livré un _Incrément_ du projet, contenant les fonctionnalités mises en place pendant ce _Sprint_ (_Sprint Backlog_).

### Daily Scrum

Chaque début de journée, les _Developers_ organisent un _Daily Scrum_ "lite" (léger) afin de savoir :

- ce que chacun a fait la veille
- ce que chacun compte faire aujourd'hui
- ce qui nous bloque, si quelque chose nous bloque

## Versions du projet

Le logiciel de versionning pour ce projet sera _Git_.

Chaque fonctionnalité sera codée dans une branche séparée.  
Lorsque la fonctionnalité est terminée, une _Pull Request_, avec 3 à 4 reviewers parmi les _Developers_, sera créée afin de garantir la qualité du code. Une fois validée, la _Pull Request_ pourra être fusionnée dans la branche `master`.

## Documentation

La documentation technique devra être rédigée **en anglais**.
