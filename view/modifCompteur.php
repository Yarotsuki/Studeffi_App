<?php include_once('view/entetes.php'); ?>

<div class="container mt-4">
    <h2>Modifier le compteur</h2>
    <form action="index.php?section=validerModifCompteur" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($compteur['id']); ?>">
        
        <div class="mb-3">
            <label for="proprietaire" class="form-label">Propriétaire</label>
            <input type="text" class="form-control" id="proprietaire" name="proprietaire" 
                   value="<?php echo htmlspecialchars($compteur['proprietaire']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="numero_voie" class="form-label">Numéro de voie</label>
            <input type="text" class="form-control" id="numero_voie" name="numero_voie" 
                   value="<?php echo htmlspecialchars($compteur['numero_voie']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="nom_voie" class="form-label">Nom de voie</label>
            <input type="text" class="form-control" id="nom_voie" name="nom_voie" 
                   value="<?php echo htmlspecialchars($compteur['nom_voie']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="code_postal" class="form-label">Code Postal</label>
            <input type="text" class="form-control" id="code_postal" name="code_postal" 
                   value="<?php echo htmlspecialchars($compteur['code_postal']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="ville" class="form-label">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" 
                   value="<?php echo htmlspecialchars($compteur['ville']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="code_insee" class="form-label">Code INSEE</label>
            <input type="text" class="form-control" id="code_insee" name="code_insee" 
                   value="<?php echo htmlspecialchars($compteur['code_insee']); ?>" readonly  >
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="index.php?section=adminCompteur" class="btn btn-secondary">Annuler</a>
        </div>
    </form>
</div>

<script>
document.getElementById("code_postal").addEventListener("change", fetchINSEE);
document.getElementById("ville").addEventListener("change", fetchINSEE);

function fetchINSEE() {
    const ville = document.getElementById("ville").value;
    const cp = document.getElementById("code_postal").value;

    if (ville.length > 1 && cp.length > 3) {
        fetch(`https://geo.api.gouv.fr/communes?nom=${ville}&codePostal=${cp}&fields=code&format=json`)
        .then(response => response.json())
        .then(data => {
            if (data.length > 0) {
                document.getElementById("code_insee").value = data[0].code;
            } else {
                document.getElementById("code_insee").value = "Non trouvé";
            }
        });
    }
}
</script>