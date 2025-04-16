<?php

include_once('model/connexion.php');

function get_all_compteurs() {
    global $bdd;

    $sql = "SELECT * FROM compteurs";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_compteur_by_id($id) {
    global $bdd;

    $sql = "SELECT * FROM compteurs WHERE id = :id";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([':id' => $id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function ajouter_compteur($proprietaire, $numero_voie, $nom_voie, $code_postal, $ville, $code_insee) {
    global $bdd;

    $sql = "INSERT INTO compteurs (proprietaire, numero_voie, nom_voie, code_postal, ville, code_insee)
            VALUES (:proprietaire, :numero_voie, :nom_voie, :code_postal, :ville, :code_insee)";

    $stmt = $bdd->prepare($sql);
    $stmt->execute([
        ':proprietaire' => $proprietaire,
        ':numero_voie' => $numero_voie,
        ':nom_voie' => $nom_voie,
        ':code_postal' => $code_postal,
        ':ville' => $ville,
        ':code_insee' => $code_insee
    ]);

    return $bdd->lastInsertId();
}

function modifier_compteur($id, $proprietaire, $numero_voie, $nom_voie, $code_postal, $ville, $code_insee) {
    global $bdd;

    $sql = "UPDATE compteurs
            SET proprietaire = :proprietaire,
                numero_voie = :numero_voie,
                nom_voie = :nom_voie,
                code_postal = :code_postal,
                ville = :ville,
                code_insee = :code_insee
            WHERE id = :id";

    $stmt = $bdd->prepare($sql);
    $stmt->execute([
        ':id' => $id,
        ':proprietaire' => $proprietaire,
        ':numero_voie' => $numero_voie,
        ':nom_voie' => $nom_voie,
        ':code_postal' => $code_postal,
        ':ville' => $ville,
        ':code_insee' => $code_insee
    ]);
}

function supprimer_compteur($id) {
    global $bdd;

    try {
        var_dump($id); // ← pour vérifier que l'ID est bien reçu
        $sql = "DELETE FROM compteurs WHERE id = :id";
        $stmt = $bdd->prepare($sql);
        $result = $stmt->execute([':id' => $id]);

        var_dump($result, $stmt->rowCount()); // ← pour voir ce qui se passe
        exit(); // ← pour stopper ici et voir les résultats

        return $result && $stmt->rowCount() > 0;
    } catch (PDOException $e) {
        echo "Erreur SQL : " . $e->getMessage();
        exit();
    }
}

