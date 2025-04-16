<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  <?php
  include_once('view/entetes.php');
  ?>

  <div class="container text-center">
    <h1>Bienvenue sur le site de Studefi</h1>

    <?php if(isset($_SESSION['validiteConnexion']) && $_SESSION['validiteConnexion'] == true) { ?>
      <div class="mt-4">
        <p>Pour ajouter un compteur cliquer ici</p>
        <button type="button" class="btn btn-primary mb-4">
          <a href="index.php?section=ajouterCompteur" class="text-white text-decoration-none">Ajouter un compteur</a>
        </button>
      </div>

      <div class="mt-4">
        <p>Pour consulter vos compteurs cliquer ici</p>
        <button type="button" class="btn btn-success">
          <a href="index.php?section=adminCompteur" class="text-white text-decoration-none">Voir les compteurs</a>
        </button>
      </div>
    <?php } else { ?>
      <div class="mt-4">
        <p>Veuillez vous connecter pour accéder aux fonctionnalités</p>
        <button type="button" class="btn btn-primary">
          <a href="index.php?section=login" class="text-white text-decoration-none">Se connecter</a>
        </button>
      </div>
    <?php } ?>
  </div>

</body>
</html>