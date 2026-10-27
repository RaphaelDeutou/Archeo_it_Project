# Archéo-IT

Site web réalisé pour augmenter la visibilité de l'association Archéo-IT : présentation de l'association, inscription aux stages et conférences, et un espace d'administration pour gérer les demandes.

## Fonctionnalités

- Pages publiques : accueil, conférences, stages, revue de presse
- Formulaires d'inscription (stages, conférences) avec confirmation
- Espace admin (`admin.php`) avec tableaux de bord (`dashboard_contact.php`, `dashboard_stage.php`) pour suivre les inscriptions
- Authentification et déconnexion (`membres.php`, `deconnexion.php`)

## Stack

PHP + MySQL (base `archeoit`), front-end HTML/CSS.

## Déploiement

Le projet a été hébergé sur un serveur Linux (Apache2, MariaDB, phpMyAdmin) — voir les captures dans `images hebergement linux/` pour le détail de la mise en place, ainsi qu'une variante sur hébergement mutualisé dans `images hebergement webhostapp/`.

## Lancer en local

1. Créer une base MySQL nommée `archeoit` (le schéma n'est pas versionné dans ce dépôt)
2. Démarrer un serveur PHP (Apache/XAMPP) avec `index.php` comme point d'entrée
3. Adapter les identifiants de connexion en haut de chaque fichier PHP concerné (`$servername`, `$username`, `$server_pass`, `$db_name`)
