# Portail_cactif

systeme d'authentification complet php avec integration d'une bas de donnée mySQL

## Table des matières

- [Aperçu](#aperçu)
- [Demo](#Demo)
- [Fonctionnalités](#fonctionnalités)
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Contribuer](#contribuer)
- [Licence](#licence)

## Aperçu
creation et connexion connexion d'un utilisateur sur une nouvelle session qui lui est dedier
![Capture du syteme](/demo/board.png)

## Demo
[Voir la vidéo de démonstration](/demo/demo.gif)

## Fonctionnalités

- creation d'un utilisateur (nom, email, mot de passe).
- connexion a un utilisateur.
- redirection vers la page d'accueil une fois connecter.
- redirection automatique vers la page de connexion si aucune session d'un utilisateur n'est trouvée.

## Installation
### Installation de mysql et php separement
- Installer php sur le site officiel [telechargement php](https://www.php.net/downloads.php)
- Telecharger et installer mySQL [telechargement mysql](https://dev.mysql.com/downloads/windows/)
- executer cet commande pour creer un base de donnee du nom de 'gi_user' dans le terminal:
  ```
  mysql
  CREATE DATABASE gi_user;```
- ensuite creer une table 'user'
  ```
  USE gi_user;
  CREATE TABLE user(
      nom TEXT(255) NOT NULL UNIQUE,
      email TEXT(255) NOT NULL UNIQUE,
      password TEXT(255) NOT NULL
  );
  ```
- cloner ce depot et executer cette commamde dans le project pour demarer le server php:
  `php -S localhost:8000`

# Register Error code
    -   1000: le mot de passe et la valeur saisir dans le champ de confirmation ne sont pas identique
    -   1001: erreur de connexion a la base de donnée
    -   1002: erreur lors de la creation du compte (utilisateur existe deja)
    -   1003: mot de passe trop court

#Login Error Code
    -   1001: erreur de connexion a la base de donnée
    -   1004: l'utiliateur n'existe
    -   1005: mot de passe incoorect
