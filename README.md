# Installation

## Process en français

### 1) Récupération du dépôt

En console, dans le dossier de votre serveur local:

```ruby
git clone https://github.com/c57fr/c57.git

cd c57
```
### 2) Paramétrer .env

Renommer ".env_sample" en ".env" et compléter les paramètres inclus (En partculier ceux de votre email personnel).

    NB: Ce fichier .env n'est jamais 'gitté'...

### 3) Base de Données (BdD)

Avec PhpMyAdmin, HeidiSQL ou tout autre outils de gestion de BdD que vous préférez:

1) Créer une BdD nommée **admin_c57**.

2) Ouvrir et executer/Importer dedans le fichier **admin_c57.sql** (Que vous trouvez @ la racine de votre projet c57)

    ( Sous systèmes linux: chmod 777 -R bootstrap/, storage/ and vendor/ )

### 4) Installer les librairies PHP nécessaires

Toujours en console:

```ruby
composer update
```
----
**Note**: Accès au backend: http://localhost/c57/be

(NB: Le mieux est de définir un VirtualHost c57 [Sous Windows, automatique avec Laragon]) et l'URL du backend est alors: **http://c57/be**

Avec **login**/*password* = **admin**/*admin*

----

**Pour aller + loin:**

En installant les dépendances npm, voilà la genre d'outils que l'on peut avoir:


Plusieurs fichiers SASS concaténés pour n'en avoir qu'un qui est minifisé (Suppression de tout ce qui n'est pas utile au code comme les commentaires, les lignes et espaces divers) et enfin purgé (Si une même propriété est affectées plusieurs fois, quelque soit le fichier SASS, elle n'apparaîtra au final qu'une seule fois dans l'unique fichier .css appelé par le code source HTML). Enfin, le navigateur est automatiquement rafraîchi, à chaque modification du code; Couplé à la fonction auto-save de votre éditeur, cet automatiqme vous permet de ne saisr que le nécessaire et de voir immédiatement le résultat ! :-)

Et ces fonctionnamités s'appliquent de façon similaire pour les fichiers **j**ava**s**cript.

![gg](/themes/c57/assets/videos/demo_webpack.gif)

Voir le fichier original du [visuel de Webpack](https://www.c57.fr/demo-webpack)
---
----

## English process

In console, folder of your local server:

```bash
git clone https://github.com/c57fr/c57.git

cd c57
```

Rename .env_sample in .env and complete it with your own email parameters.

With your HeidiSQL, PhpMyAdmin or any other database tool:

Create a database named **admin_c57**.

Populate it with load/import of the **admin_c57.sql** (In folder o)

( If linux system: chmod 777 -R bootstrap/, storage/ and vendor/ )

Again in console:

```bash
composer update
```

**Note**: Backend access: http://localhost/c57/be
with login/password : admin/admin

----

In console, folder of your local server:

```bash
git clone https://github.com/chemin2bonheur/o.git

cd o
```

Rename .env_sample in .env and complete it with your own email parameters.

With your HeidiSQL, PhpMyAdmin or any other database tool:

Create a database named **o**.

Populate it with load/import of the **o.sql** (In folder o)

( If linux system: chmod 777 -R bootstrap/, storage/ and vendor/ )

Again in console:

```bash
composer update
```

**Note**: Backend access: [http://localhost/o/be](http://localhost/o/be)

with login/password : admin/admin

----

**Optionnal:**

If this above command fails:

```bash
npm run watch
```

Try:
This script is configured with laravel-elixir (Auto-compilation and combination of your less ou sass/scss files and automatic live-reload of your browser when any change)
Just, have nodejs and npm installed and, always in console:

```bash
npm update
```

And do a virtual host called o pointing in your o folder of your localhost

To use this:

```bash
npm run watch
```

NB.:

If the synchroniation with your browser fails, you can do:

```bash
npm install --save-dev browser-sync
```

----

<div align="center"><img src="https://github.com/octobercms/october/blob/master/themes/demo/assets/images/october.png?raw=true" alt="October" width="25%" height="25%" /></div>

[October](http://octobercms.com) is a Content Management System (CMS) and web platform whose sole purpose is to make your development workflow simple again. It was born out of frustration with existing systems. We feel building websites has become a convoluted and confusing process that leaves developers unsatisfied. We want to turn you around to the simpler side and get back to basics.

October's mission is to show the world that web development is not rocket science.

[![Build Status](https://travis-ci.org/octobercms/october.svg?branch=develop)](https://travis-ci.org/octobercms/october)
[![License](https://poser.pugx.org/october/october/license.svg)](https://packagist.org/packages/october/october)

### Learning October

The best place to learn October is by [reading the documentation](http://octobercms.com/docs) or [following some tutorials](http://octobercms.com/support/articles/tutorials).

You may also watch these introductory videos for [beginners](https://vimeo.com/79963873) and [advanced users](https://vimeo.com/172202661).

### Installing October

Instructions on how to install October can be found at the [installation guide](http://octobercms.com/docs/setup/installation).

### Quick start installation

For advanced users, run this in your terminal to install October from command line:

```shell
php -r "eval('?>'.file_get_contents('https://octobercms.com/api/installer'));"
```

If you plan on using a database, run this command:

```shell
php artisan october:install
```

### Development Team

October was created by [Alexey Bobkov](http://ca.linkedin.com/pub/aleksey-bobkov/2b/ba0/232) and [Samuel Georges](https://www.linkedin.com/in/samuel-georges-0a964131/), who both continue to develop the platform.

### Foundation library

The CMS uses [Laravel](http://laravel.com) as a foundation PHP framework.

### Contact

You can communicate with us using the following mediums:

* [Follow us on Twitter](http://twitter.com/octobercms) for announcements and updates.
* [Follow us on Facebook](http://facebook.com/octobercms) for announcements and updates.
* [Join us on IRC](http://octobercms.com/chat) to chat with us.

### License

The OctoberCMS platform is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

### Contributing

Before sending a Pull Request, be sure to review the [Contributing Guidelines](CONTRIBUTING.md) first.

### Coding standards

Please follow the following guides and code standards:

* [PSR 4 Coding Standards](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md)
* [PSR 2 Coding Style Guide](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)
* [PSR 1 Coding Standards](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md)
