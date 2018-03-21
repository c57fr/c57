<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# [c57](http://c57.fr)
### Communauté des développeurs  giteurs francophones de différents OS

[C57, le dépôt](https://github.com/c57fr/c57) du site [c57.fr](http://c57.fr), le site de la communauté FR

l5     : Le dépôt francophone pour étudier ensemble PHP et Laravel

Votre site local pour travailler avec vos exemples et tests

# Installation
 En mode console, dans votre dossier www de votre serveur local (wamp, lampp, etc....) :
## 1/ **git clone git@github.com:c57fr/c57.git**
N.B.: Sous linux, donner les **droits en écriture aux  fichiers et dossiers contenus dans les dossiers bootstrap/cache/ et storage/**
## 2/ cd c57
## 3/ composer update
(Au besoin: https://getcomposer.org/)
## 4/ Copier .env.example en .env
(Dans la racine)
## 5/ php artisan key:generate
## ===> Avec votre navigateur, visiter le dossier correspondant

## http://localhost/c57

Pour avoir accès aux pages quand logué:
## 6/ Avec phpMyAdmin de votre serveur local, créer une BdD et renseigner le .env (généré lors de l'étape 4 à la racine de votre site) selon les paramètres adaptés.

(Exemple: laravel / root / '')

## Lancer en console:
## php artisan migrate:refresh --seed
Pour utiliser ainsi les fichiers situés dans database/migrations et database/seeds

Ceci rendra fonctionnel la partie /posts (Articles)

## php artisan make:auth
Pour pouvoir utiliser le back-end (Login et register).


N.B.: Pour activer SSL, décommenter les 2 lignes qui suivent " # Force SSL " dans le .htaccess de la racine (En ce cas, faites pointer votre virtual host local directement dans public/).


# Action recommandée:
 Mettre à jour vos fichiers
  - /etc/hosts et
  - httpd.conf

afin de créer un hôte vituel et travailler ainsi avec http://c57**


# Les Références (Début de l'étude recommandé):
- http://laravel.sillo.org/laravel-5
- https://www.grafikart.fr/formations/laravel/routes

# Outils conseillés:

- [Sublime Text 3](https://www.sublimetext.com) et [Package Manager](https://packagecontrol.io/browse)
- [ungit](http://dbottiau.azurewebsites.net/utiliser-git-facilement-avec-ungit) *(Excellent pour s'initier)* ou [GitKraken](https://www.gitkraken.com/)
- [Extension LivePage](https://chrome.google.com/webstore/detail/livepage/pilnojpmdoofaelbinaeodfpjheijkbh?hl=fr) (Chromium ([Win](https://chromium.woolyss.com/download/fr/)/[Linux](http://www.linuxpedia.fr/doku.php/lmde/les_outils_specifiques_a_mint#le_gestionnaire_de_logiciels_mintinstall))



Rappel:
 -
 Si besoin d'aide, ou remarque &/ou suggestion et quelconque requête:

[New Issue](https://github.com/c57fr/c57/issues/new)


@ bi1tô !
##### -------------------------------------------------------------------------------------------------------------------------------------------------

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
