<?php

require_once('Recette.class.php');
require_once('Etape.class.php');

switch ($_GET['action']) {
    case 'ajoutRecette':
        new Recette(htmlspecialchars($_POST['nomRecette']), htmlspecialchars($_POST['difficulte']), htmlspecialchars($_POST['type']));
        header('Location: ../view/index.php');
        break;

    case 'ajoutEtapes':
        $i = 1;
        while (!empty($_POST['description' . $i])) {
            new Etape(htmlspecialchars($_POST['numero' . $i]), htmlspecialchars($_POST['description' . $i]), htmlspecialchars($_GET['id']));
            $i++;
        }
        header('Location: ../view/recette.view.php?id=' . $_GET['id']);
        break;
}
