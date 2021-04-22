<?php

/**
 * Description of TypeModel
 * 	Classe héritée de la classe abstraite Modele (modele.php)
 * @author tvosgiens
 */
class TypeModele extends Modele
{

    private $parametre;

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
    }

    public function getComboTypes(){

        // Requete attendue type SELECT (liste des types de porteur)
        $sql = "SELECT typ_ide, typ_lib FROM " . P . "type_pdp";

        $this->result = $this->executeRequete($sql); // Requête simple

        return $this->result->fetchall(PDO::FETCH_ASSOC);
    }

}