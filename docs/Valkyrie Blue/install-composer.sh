php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

sudo mv composer.phar /usr/local/bin/composer

composer --version

# create composer.json with at least {}

# Quand on récupère un nouveau projet avec un fichier composer.json
# on doit immédiatement lance la commande : 'composer install'
# pour que composer aille récupérer tout les package requis.

# pour utiliser nos packages/outils installés par composer
# il faudrait faire tout les require :'(
# composer est gentile, il nous fournit un seul fichier pour tout les requires
# le fichier de composer qui va automatiquement charger tout nos packages
# require __DIR__.'/../vendor/autoload.php';