# Portail_cactif

systeme d'authentification complet php avec integration d'une bas de donnée mySQL

## Table des matières

- [Aperçu](#aperçu)
- [Demo](#Demo)
- [Test en ligne](#test-en-ligne)
- [Fonctionnalités](#fonctionnalités)
- [Comment jouer](#comment-jouer)
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Contribuer](#contribuer)
- [Licence](#licence)

## Aperçu
creation et connexion connexion d'un utiisateur sur une session
![Capture du syteme](/demo/board.png)
# Register Error code
    -   1000: le mot de passe et la valeur saisir dans le champ de confirmation ne sont pas identique
    -   1001: erreur de connexion a la base de donnée
    -   1002: erreur lors de la creation du compte (utilisateur existe deja)
    -   1003: mot de passe trop court

#Login Error Code
    -   1001: erreur de connexion a la base de donnée
    -   1004: l'utiliateur n'existe
    -   1005: mot de passe incoorect
