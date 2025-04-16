
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-success bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php">StudEffi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="index.php?section=Ajoutercompteur">Ajouter Compteur</a>
                    </li>
                    
                    <li class="nav-item">
                        <?php if ($okConnexion && $role == 'admin') {
                            echo '<a class="nav-link text-white" href="index.php?section=adminCompteur">Admin</a>';
                        } ?>
                    </li>
                </ul>
                <?php if ($okConnexion){
                echo '<a href="index.php?section=monCompte" class="text-white m-2" >Mon Compte</a>';
                echo '<a href="index.php?section=deconnexion" class="text-white m-2">Deconnexion</a>';
                }else{
                  echo " <a href='index.php?section=login' class='text-white m-2'>Connexion</a>";
                  echo " <a href='index.php?section=register' class='text-white'>S'inscrire</a>";
                }
 
            ?>
            </div>
        </div>
    </nav>
</body>
</html>