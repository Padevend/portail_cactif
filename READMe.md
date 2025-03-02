# Portail_cactif

systeme d'authentification complet php avec integration d'une bas de donnée mySQL

## Table des matières

- [Aperçu](#aperçu)
- [Demo](#Demo)
- [Fonctionnalités](#fonctionnalités)
- [Installation](#installation)
- [Code d'erreur](#code_d'erreur)
- [Contribuer](#contribuer)

## Aperçu
creation et connexion connexion d'un utilisateur sur une nouvelle session qui lui est dedier
![Capture du syteme](/demo/board.png)

## Demo
[Voir la vidéo de démonstration](https://media-hosting.imagekit.io//4252bca9a1dc4a3d/demo.mp4?Expires=1835544471&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=DW~9fZZp06fs04EJPUQXG~LHiqAljz-h-zSCjT6FAs8nxQKz-Cfu37hCbHpx4iWtn5oQqXa68~J4rhkuvSlMQnNOm~FFyD4MMmpyWKFnQ5xH2I3BLMIuOleQXHD0xIUjMJVWU3cBRwVxsQIVKqhET45k8GJmNGnxRajx-cMes9c4Jm1T2kzaeoNAolLGZnAgwwwEcRq2wOzNJlc5i5yEE2MpCE~t2rXlcHvW6L892L8EqdXDidl1j~5ZzO~rcb7zkw46B6uKUGLOuFON9LbuiPN0M7ad5Snv54ao3x2-4t19CcgpIr9O8CHudnnJUBl0Cc3cqj5XXHwd6J~~DSNnvg__)

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
  CREATE DATABASE gi_user;
  ```
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
  `
  php -S localhost:8000
  `
### Utilisateur d'un environnement de developpent local(Xampp)

- Telecharger et installer xampp [telechargement de xampp](https://www.apachefriends.org/fr/download.html)
- cloner ce depot dans le dossier htdocs de xampp souvent sous
`C:\xampp\htdocs\`
- lancer la panneau de control xampp:
![xampp control panel icon](/demo/control_icon.png)
- lancer les module Apache et mySQL:
![xampp module](/demo/xampp_control_panel.png)
- aller a l'adresse `localhost` ou `127.0.0.1` dans votre navigateur
- dans la barre de recherche effacer dashboard/ et remplacer par le nom du clone du depot
    
## Code d'erreur
### code d'erreur de la page d'enregistrement

- 1000: le mot de passe et la valeur saisir dans le champ de confirmation ne sont pas identique
- 1001: erreur de connexion a la base de donnée
- 1002: erreur lors de la creation du compte (l'utilisateur existe deja)
- 1003: mot de passe trop court

### code d'erreur de la page de connexion

- 1001: erreur de connexion a la base de donnée
- 1004: l'utiliateur n'existe
- 1005: mot de passe incoorect

## Contribuer

Les contributions à ce projet sont les bienvenues ! N'hésitez pas à soumettre des problèmes, suggestions ou améliorations via GitHub.
