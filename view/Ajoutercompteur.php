<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ajout des liens Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ajouter un compteur</title>
</head>
<body class="bg-light">
    <?php
    include_once("view/entetes.php");

    ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h3 class="card-title mb-0">Ajouter un compteur</h3>
                    </div>
                    <div class="card-body">
                        <form action="index.php?section=validerAjoutCompteur" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="proprietaire" placeholder="Nom du propriétaire" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="numero_voie" placeholder="N° de voie" required>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="nom_voie" placeholder="Nom de voie" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="code_postal" id="code_postal" placeholder="Code Postal" required>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="ville" id="ville" placeholder="Ville" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control bg-light" name="code_insee" id="code_insee" placeholder="Code INSEE" readonly>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Ajouter le compteur</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
</body>
</html>