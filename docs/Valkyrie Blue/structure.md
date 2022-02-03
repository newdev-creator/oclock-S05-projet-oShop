# Structure

## Dossier `public`

Ce dossier contient tous les fichiers "public".  
C'est-à-dire les fichiers qui peuvent être accédés par le client (navigateur).

- `index.php` (_FrontController_)
- fichiers CSS
- fichiers JS
- fichiers images
- `.htaccess` (parce qu'il fait partie du _FrontController_)

## Dossier `app`

Contient tous les fichiers qui n'ont pas besoin d'être accédés par le client (navigateur).  
Ils sont inclus par du code PHP.

- les _Controllers_
- les _Classes_
- les _Templates_ / _Views_
- => tous les fichiers "inclus"

## `app/Controllers`

La bonne pratique à suivre pour les dossiers dans `app` qui vont contenir des classes, est de nommer ces dossiers en _UpperCamelCase_.

## "public" dans l'URL ?

En local, pour nos tests, ok  
En prod => NON !

### Mauvaise configuration en prod :x:

```text
monsite.com
=> dossier /var/www/html/monsite-site.com-en-prod

mon-second-site.com
=> dossier /var/www/html/mon-site-numero2
```

### Bonne configuration en prod :heavy_check_mark:

```text
monsite.com
=> dossier /var/www/html/monsite-site.com-en-prod/public

mon-second-site.com
=> dossier /var/www/html/mon-site-numero2/public
```

## `public/assets`

Dossier contenant tous les "atouts" de nos pages HTML.  
C'est la convention/bonne pratique à suivre pour organiser nos dossiers.

- fichiers CSS
- fichiers JS
- fichiers images
- etc.
