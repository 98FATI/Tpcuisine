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
        <h1>Ajouter une recette</h1>
        <form class="row g-3" action="../controller/action.php?action=ajoutRecette" method="POST">
            <div class="col-md-4">
                <label for="nomRecette" class="form-label">Nom de la recette</label>
                <input type="text" class="form-control" id="nomRecette" name="nomRecette" required>
            </div>
            <div class="col-md-4">
            <label for="difficulte" class="form-label">Difficulté</label>
                <select id="difficulte" class="form-select" name="difficulte" required>
                    <option disabled selected>Choisir la difficulté...</option>
                    <option value="Facile">Facile</option>
                    <option value="Moyen">Moyen</option>
                    <option value="Difficile">Difficile</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="type" class="form-label">Type de la recette</label>
                <select id="type" class="form-select"  name="type" required>
                    <option disabled selected>Choisir le type...</option>
                    <option value="1">Salées</option>
                    <option value="0">Sucrées</option>
                </select>
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-light">Ajouter</button>
            </div>
        </form>
    </div>

</body>

</html>