<?php

include_once('model/compteur.php');

if (isset($_POST['proprietaire']) && isset($_POST['numero_voie']) && isset($_POST['nom_voie']) && isset($_POST['code_postal']) && isset($_POST['ville']) && isset($_POST['code_insee'])) {
    try {
        $proprietaire = $_POST['proprietaire'];
        $numero_voie = $_POST['numero_voie'];
        $nom_voie = $_POST['nom_voie'];
        $code_postal = $_POST['code_postal'];
        $ville = $_POST['ville'];
        $code_insee = $_POST['code_insee'];

        // Log des données reçues
        error_log("Données reçues : " . print_r($_POST, true));

        // Appel de la fonction pour ajouter le compteur
        $id_compteur = ajouter_compteur($proprietaire, $numero_voie, $nom_voie, $code_postal, $ville, $code_insee);

        if ($id_compteur) {
            error_log("Compteur ajouté avec succès. ID : " . $id_compteur);
            header('Location: index.php?section=compteurs');
            exit();
        } else {
            error_log("Erreur lors de l'ajout du compteur");
            echo "Erreur lors de l'ajout du compteur";
        }
    } catch (Exception $e) {
        error_log("Erreur : " . $e->getMessage());
        echo "Une erreur est survenue : " . $e->getMessage();
    }
} else {
    error_log("Données manquantes dans le formulaire");
    echo "Erreur : Données manquantes.";
}

