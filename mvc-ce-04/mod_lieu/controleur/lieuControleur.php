<?php
/**
 * Class LieuControleur
 */

class LieuControleur
{
    private $parametre = array();
    private $oModele; //objet
    private $oVue; //objet

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        $this->oModele = new LieuModele($this->parametre);
        $this->oVue = new LieuVue($this->parametre);
    }

    public function liste()
    {

        $valeurs = $this->oModele->getListeLieux();
        $this->oVue->genererAffichageListe($valeurs);


    }
}