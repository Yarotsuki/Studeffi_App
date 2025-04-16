<?php

include_once 'credentials.php';

try {
    // Utilisation des variables définies dans credentials.php
    $bdd = new PDO('mysql:host=localhost;dbname=studeffiBdd;charset=utf8', $user, $password);

} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}