<?php

/**
 * Description of StatutModel
 * 	Classe héritée de la classe abstraite Modele (modele.php)
 * @author tvosgiens
 */
class SecteurModele extends Modele
{

    private $parametre;

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
    }

    public function getComboSecteurs(){

        // Requete attendue type SELECT (liste des secteurs d'activité)
        $sql = "SELECT sea_ide, sea_lib FROM " . P . "secteur_activite";

        $this->result = $this->executeRequete($sql); // Requête simple

        return $this->result->fetchall(PDO::FETCH_ASSOC);
    }

}