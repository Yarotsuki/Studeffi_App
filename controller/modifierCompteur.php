<?php
include_once('model/compteur.php');

// Vérification des droits d'admin
if (!isset($okConnexion) || !isset($role) || $role !== 'admin') {
    header('Location: index.php');
    exit();
}

// Récupération de l'ID du compteur
if (!isset($_GET['id'])) {
    header('Location: index.php?section=adminCompteur');
    exit();
}

$compteur = get_compteur_by_id($_GET['id']);
if (!$compteur) {
    header('Location: index.php?section=adminCompteur');
    exit();
}

include_once('view/modifCompteur.php');