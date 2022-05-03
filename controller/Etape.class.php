<?php

require_once('connexion_bdd.php');

class Etape
{
    public function __construct($numero, $description, $idRecette)
    {
        global $connexion;

        $requete = "INSERT INTO `etape`(`numero`, `description`, `idRecette`) 
        VALUES (?, ?, ?)";
        $result = $connexion->prepare($requete);
        $result->bind_param("ssi", $numero, $description, $idRecette);
        $result->execute();
    }
}
