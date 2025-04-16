<?php
include_once('model/compteur.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    try {
        if (supprimer_compteur($id)) {
            header('Location: index.php?section=adminCompteur&message=Compteur supprimé avec succès');
            exit();
        } else {
            header('Location: index.php?section=adminCompteur&error=Compteur introuvable');
            exit();
        }
    } catch (Exception $e) {
        header('Location: index.php?section=adminCompteur&error=Erreur lors de la suppression');
        exit();
    }
} else {
    header('Location: index.php?section=adminCompteur&error=ID non spécifié');
    exit();
}
?>
