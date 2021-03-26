<?php

class AccueilControleur
{

    private $oVue; //objet

    public function __construct()
    {

        //require_once('mod_accueil/vue/accueilVue.php');
        $this->oVue = new AccueilVue();

    }

    public function liste(){

        $this->oVue->genererAffichage();
    }
}