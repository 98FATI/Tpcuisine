<?php
require_once('../controller/connexion_bdd.php');

$request = "SELECT `id`, `nom`, `difficulte` FROM `recette` WHERE `type` = 1 ORDER BY `nom`";
$allRecipes = $connexion->query($request);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="../public/images/Logo.jpg" type="image/jpg">
    <title>Recettes Salées</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container-fluid">
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

        <?php if ($allRecipes->num_rows == 0 ): ?>
            Aucune recettes ! venez en ajouter en <a href="ajoutRecette.view.php">cliquant ici</a>
        <?php else : ?>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php while ($row = $allRecipes->fetch_array(MYSQLI_ASSOC)) : ?>
                    <div class="col-6 col-sm-4 col-md-3 p-2">
                        <div class="card">
                            <a class="lienRecette" href="recette.view.php?id=<?= $row['id']; ?>">
                                <img src="..\public\images\<?= file_exists("..\public\images\\" . $row['nom'] . ".jpg") ?  $row['nom'] : "Pas_image"  ?>.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['nom']; ?></h5>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>

</body>

</html>