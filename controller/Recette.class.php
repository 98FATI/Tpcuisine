<?php
require_once('connexion_bdd.php');

class Recette{

    
    public function __construct($nom, $difficulte, $type)
    {
        global $connexion;

        $requete = "INSERT INTO `recette`(`nom`, `difficulte`, `type`) 
        VALUES (?, ?, ?)";
        $result = $connexion->prepare($requete);
        $result->bind_param("ssi", $nom, $difficulte, $type);
        $result->execute();

    }
}