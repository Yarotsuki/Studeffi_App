<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


  <?php include_once('view/entetes.php'); ?>

  <div class="container mt-4">
        <h2>Liste des Compteurs</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Propriétaire</th>
                    <th>Numéro de voie</th>
                    <th>Nom de voie</th>
                    <th>Code postal</th>
                    <th>Ville</th>
                    <th>Code INSEE</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($compteurs) && !empty($compteurs)): ?>
                    <?php foreach ($compteurs as $compteur): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($compteur['id']); ?></td>
                            <td><?php echo htmlspecialchars($compteur['proprietaire']); ?></td>
                            <td><?php echo htmlspecialchars($compteur['numero_voie']); ?></td>
                            <td><?php echo htmlspecialchars($compteur['nom_voie']); ?></td>
                            <td><?php echo htmlspecialchars($compteur['code_postal']); ?></td>
                            <td><?php echo htmlspecialchars($compteur['ville']); ?></td>
                            <td><?php echo htmlspecialchars($compteur['code_insee']); ?></td>
                            <td>
                                <a href="index.php?section=modifierCompteur&id=<?php echo $compteur['id']; ?>" 
                                   class="btn btn-warning btn-sm">Modifier</a>
                                   <a href="index.php?section=supprimerCompteur&id=<?php echo $compteur['id']; ?>" 
   class="btn btn-danger btn-sm" 
   onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce compteur ?')">Supprimer</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" class="text-center">Aucun compteur trouvé</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php 
    // Ajout de Bootstrap JS à la fin du body si nécessaire
    if (!defined('BOOTSTRAP_LOADED')): ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php endif; ?>

</body>
</html>