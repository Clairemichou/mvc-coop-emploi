<?php
/**
 * Class LieuModele
 */

class LieuModele extends Modele
{
    private $parametre = array();

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
    }

    public function getListeLieux()
    {
        $sql = 'SELECT * FROM ' . P . 'lieu';
        $resultat = $this->executeRequete($sql); //Requête simple, non préparée
        return $resultat->fetchAll(PDO::FETCH_ASSOC);
    }
}