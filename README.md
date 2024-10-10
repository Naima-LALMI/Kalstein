<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Documentation du Test Technique

Ce document présente les étapes suivies pour créer une API avec Laravel, ainsi que l'intégration d'une base de données MySQL existante. Les instructions sont détaillées pour une meilleure compréhension.

# Étapes pour la configuration du projet

# 1. Créer une nouvelle base de données MySQL
* Ouvrir Laragon et accéder à MySQL ou à phpMyAdmin.
* Créer une nouvelle base de données :
    * Nom de la base de données : kalstein.
    * 
# 2. Importer le fichier SQL
* Aller dans MySQL et sélectionner la base de données kalstein.
* Cliquer sur l'onglet Importer.
* Choisir le fichier SQL téléchargé (contenant la table wp_k_products).
* Lancer l'importation en cliquant sur Exécuter.
* Une fois l'importation réussie, la table wp_k_products sera disponible dans la base de données kalstein.

# 3. Créer et démarrer une application Laravel
* Créer une nouvelle application Laravel :
```laravel new example-app```
* Aller dans le répertoire du projet :
```cd example-app```
* Démarrer le serveur de développement local :
```php artisan serve```
* Accéder à l'application en local à l'adresse : **http://localhost:8000.**

# 4. Intégrer une base de données MySQL existante dans Laravel
* Configurer les informations de la base de données MySQL importée :
    * Ouvrir le fichier ```.env.```
    * Modifier la ligne 14 pour remplacer DB_DATABASE par le nom de ta base de données MySQL :
```.env``` --> ```DB_DATABASE=kalstein```

# 5. Création d’un modèle Eloquent
* Créer un modèle :
```php artisan make:model Product```
Pas besoin de faire la migration car la table existe déjà dans la base de données.

# 6. Création du contrôleur pour les produits
* Créer un contrôleur API :
```php artisan make:controller ProductController --api```
    * Créer les fonctions pour les actions CRUD :
        * Méthodes de récupération :
            * all()
            * find($id)
            * findOrFail($id)
        * Méthodes de création :
            * create($data)
            * update($data)
        * Méthode de suppression :
            * destroy($id)
            * delete()

# 7. Création des routes fichier api.php
Définir les routes dans le fichier routes/api.php :
Utiliser les méthodes GET, POST, PUT, DELETE pour définir les points d'accès à l'API.

# 8. Utilisation de l’outil Postman
Vérifier les chemins de l’API en utilisant Postman pour s'assurer que toutes les routes fonctionnent correctement.

# 9. Création des routes fichier web.php
 route create / store

# 10. Creation d'un formulaire dans le fichier produit.blade.php
Qui permettra de créer un nouveau produit 
