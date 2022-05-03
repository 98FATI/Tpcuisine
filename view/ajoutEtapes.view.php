<?php
require_once('../controller/connexion_bdd.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="../public/images/Logo.jpg" type="image/jpg">
    <title>Ajout recette</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="../public/images/Logo.png" alt="" id="logo">
            <a class="navbar-brand" href="index.php">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="recettesSalees.view.php">Recettes Salées</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="recettesSucrees.view.php">Recettes Sucrées</a>
                    </li>

                </ul>
                <a class="navbar-text nav-link" aria-current="page" href="#">Ajout recette</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Ajouter des étapes</h1>
        <form class="row g-3" action="../controller/action.php?action=ajoutEtapes&id=<?= $_GET['id'] ?>" method="POST">
            <?php for ($cpt = 1; $cpt <= 5; $cpt++) : ?>
                <div class="col-md-4">
                    <label for="numero<?= $cpt ?>" class="form-label">Numéro de l'étape</label>
                    <input class="form-control" type="text" value="<?= $cpt ?>" name="numero<?= $cpt ?>" readonly>
                </div>
                <div class="col-md-8">
                    <label for="description<?= $cpt ?>" class="form-label">Préparation</label>
                    <textarea class="form-control" id="description<?= $cpt ?>" rows="2" name="description<?= $cpt ?>"></textarea>
                </div>
            <?php endfor; ?>


            <div class="col-12">
                <button type="submit" class="btn btn-light">Ajouter</button>
            </div>
        </form>
    </div>

</body>

</html>