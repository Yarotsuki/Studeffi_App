<?php
include_once('model/compteur.php');

if (isset($_POST['id']) && isset($_POST['proprietaire']) && isset($_POST['numero_voie']) && 
    isset($_POST['nom_voie']) && isset($_POST['code_postal']) && isset($_POST['ville']) && 
    isset($_POST['code_insee'])) {
    
    try {
        $id = $_POST['id'];
        $proprietaire = $_POST['proprietaire'];
        $numero_voie = $_POST['numero_voie'];
        $nom_voie = $_POST['nom_voie'];
        $code_postal = $_POST['code_postal'];
        $ville = $_POST['ville'];
        $code_insee = $_POST['code_insee'];

        modifier_compteur($id, $proprietaire, $numero_voie, $nom_voie, $code_postal, $ville, $code_insee);
        
        header('Location: index.php?section=adminCompteur');
        exit();
    } catch (Exception $e) {
        echo "Une erreur est survenue : " . $e->getMessage();
    }
} else {
    header('Location: index.php?section=adminCompteur');
    exit();
}