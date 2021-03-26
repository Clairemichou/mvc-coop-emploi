<?php

/**
 * Class Accueil
 * Routeur du module Accueil
 * @author cmichel
 */
class Accueil
{
    private $parametre = array();
    private $oControleur;

    public function __construct($parametre){
        //require_once ('mod_accueil/controleur/accueilControleur.php');
        $this->parametre = $parametre;
        $this->oControleur = new AccueilControleur($this->parametre);
    }

    public function choixAction(){

        $this->oControleur->liste();
    }
}