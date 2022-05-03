<?php
require_once('../controller/connexion_bdd.php');
require_once('../controller/traitement.php');

$idRecette = $_GET['id'];
$tabInfo = infoRecette($idRecette);
$tabEtape = infoEtape($idRecette);
$tabIngredient = infoIngredient($idRecette);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $tabInfo['nom'] ?></title>
    <link rel="icon" href="../public/images/Logo.jpg" type="image/jpg">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
                <a class="navbar-text nav-link" aria-current="page" href="ajoutRecette.view.php">Ajout recette</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center">Recette pour <?= $tabInfo['nom'] ?></h1>
        <div class="photoRecette">
            <img class="img-fluid" src="..\public\images\<?= file_exists("..\public\images\\" . $tabInfo['nom'] . ".jpg") ?  $tabInfo['nom'] : "Pas_image"  ?>.jpg" class="card-img-top" alt="<?= $tabInfo['nom'] ?>">
        </div>
        <div class="row">
            <div class="col-6">
                <h5>Liste des ingrédients</h5>
                <ul class="list-group">
                    <?php if (empty($tabIngredient)) : ?>
                        <a href="#">Ajouter des ingrédients</a>
                    <?php else : ?>
                        <?php foreach ($tabIngredient as $key => $value) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $key ?>
                                <span class="badge bg-light rounded-pill"><?= $value ?></span>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-6">
                <h5>Étapes de la recette</h5>
                <?php if (empty($tabEtape)) : ?>
                    <a href="ajoutEtapes.view.php?id=<?= $idRecette ?>">Ajouter des étapes</a>
                <?php else : ?>
                    <?php foreach ($tabEtape as $key => $value) : ?>
                        <p> <?= $key . ". " . $value ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>