
# 🧠 STUDEFFI – Application de gestion des compteurs d'énergie

## 📋 Présentation

Ce projet est une application web développée en PHP (sans framework) selon le modèle MVC. Elle permet la gestion de différents compteurs d’énergie (électricité, gaz, eau...) à travers une interface sécurisée. L’utilisateur peut se connecter via un système d’authentification, gérer les compteurs, et retrouver automatiquement le code INSEE d’une commune grâce à l’API officielle du gouvernement.

## 🚀 Fonctionnalités principales

- Authentification sécurisée (login / mot de passe)
- Système CRUD pour les compteurs d’énergie (ajout, modification, suppression, consultation)
- Récupération automatique du **code INSEE** à partir de la **ville** et du **code postal** via une API
- Interface dynamique avec **AJAX**, **jQuery**, **JavaScript**
- Architecture MVC claire (Model – View – Controller)

## 📁 Structure du projet

Le projet est structuré en dossiers selon l’approche MVC :

- **controller/** : contient la logique de traitement des actions (ajout, login, modification, etc.)
- **model/** : gère les interactions avec la base de données (connexion, modèles utilisateur/compteur)
- **view/** : gère l’affichage des pages web
- **css/** : styles CSS
- **js/** : scripts JavaScript

## 🔧 Technologies utilisées

- PHP (>= 7.x)
- HTML5 / CSS3
- JavaScript (AJAX, jQuery)
- API REST : [API Geo - api.gouv.fr](https://api.gouv.fr/api/api-geo.html)
- MySQL (ou MariaDB)

## 📌 Champs gérés pour les compteurs

- Nom du propriétaire
- Numéro de voie
- Nom de voie
- Code postal
- Ville
- Code INSEE *(obtenu automatiquement depuis l’API, non saisi manuellement)*

## 🛠 Installation

1. Cloner le projet ou déposer les fichiers dans le dossier de votre serveur local (`htdocs` ou `www`).
2. Créer une base de données MySQL et importer le fichier SQL fourni (ou créer les tables selon les champs décrits ci-dessus).
3. Modifier les paramètres de connexion à la base de données dans `model/connexion.php`.
4. Lancer le serveur et accéder à l’application via : `http://localhost/STUDEFFI_APP/`.

## 📤 API utilisée

Le code INSEE est récupéré via l'API officielle du gouvernement :  
👉 [https://api.gouv.fr/api/api-geo.html](https://api.gouv.fr/api/api-geo.html)

Cette API permet d'obtenir le code INSEE à partir d’une **ville** et d’un **code postal**.


## ✨ Recommandations

- Interface agréable, claire, responsive
- Code propre, bien structuré (MVC)
- Validation côté client et côté serveur
- Utilisation de jQuery, AJAX et JavaScript recommandée

---


