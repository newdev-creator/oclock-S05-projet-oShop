# AltoRouter

## Merci redrokh

1)tu crées un objet de la classe AltoRouteur
2)tu définies le chemin de base (setBasePath) , c'est ton chemin jusqu'à /public/
l'idée c'est que tu vas omettre dans la comparaison des URL cette partie de l'URL pour la comparaison de l'URL et des routes que tu vas définir
3)tu définies tes routes (la méthode, la syntaxe du chemin en générique (avec la spécification des paramètres), en 3 tu donnes les informations qui vont te permettre de faire la redirection (c'est le $tableauInfo qu'on récupère plus tard, le dernier paramètre cherches pas à comprendre pour l'instant
4)avec ->match() tu vas comparer ton URL après ..../public/ avec les routes que tu as spécifié et tu récupères un tableau qui va contenir les infos dont tu as besoin pour faire la redirection
5) tu utilises ses infos pour faire la redirection