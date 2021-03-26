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
        require_once ('mod_accueil/controleur/accueilControleur.php');
        $this->oControleur = new AccueilControleur();
    }

    public function choixAction(){

        $this->oControleur->liste();
    }
}