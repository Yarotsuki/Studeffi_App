<?php
session_start();

if (!isset($_SESSION['validiteConnexion']) || $_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit;
}

// Contenu réservé aux administrateurs
echo "Bienvenue dans le panel admin !";