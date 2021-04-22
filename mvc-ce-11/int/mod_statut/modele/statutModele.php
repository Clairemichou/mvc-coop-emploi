<?php

/**
 * Description of StatutModel
 * 	Classe héritée de la classe abstraite Modele (modele.php)
 * @author tvosgiens
 */
class StatutModele extends Modele
{

    private $parametre;

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
    }

    public function getComboStatuts(){

        // Requete attendue type SELECT (liste des Statuts)
        $sql = "SELECT sta_ide, sta_lib FROM " . P . "statut";

        $this->result = $this->executeRequete($sql); // Requête simple

        return $this->result->fetchall(PDO::FETCH_ASSOC);
    }

}