<?php

class ReunionControleur {

    private $parametre = array();
    private $oModele; //objet
    private $oVue; //objet

    public function __construct($parametre) {
        $this->parametre = $parametre;
        $this->oModele = new ReunionModele($this->parametre);
        $this->oVue = new ReunionVue($this->parametre);
    }

    public function liste() {
        $valeurs = $this->oModele->getListeReunions();
        $this->oVue->genererAffichageListe($valeurs);
    }

    public function form_consulter() {
        $valeurs = $this->oModele->getUneReunion();
        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function form_supprimer() {
        $valeurs = $this->oModele->getUneReunion();
        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function supprimer() {
        //penser à faire un controle d'intégrité référentielle réunion / réunion / ...
        //Cela imposera une alternative pour ne pas accepter la suppression

        $this->oModele->deleteReunion();
        $this->liste();
    }

    public function form_ajouter() {

        $prepareReunion = new ReunionTable();

        $this->oVue->genererAffichageFiche($prepareReunion);
    }

    public function ajouter() {
        $controleReunion = new ReunionTable($this->parametre);
        if ($controleReunion->getAutorisationBD() == false) {

            $this->oVue->genererAffichageFiche($controleReunion);
        } else {
            $this->oModele->addReunion($controleReunion);

            $this->liste();
        }
    }

    public function form_modifier() {
        $valeurs = $this->oModele->getUneReunion();
        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function modifier() {
        $controleReunion = new ReunionTable($this->parametre);
        if ($controleReunion->getAutorisationBD() == false) {

            $this->oVue->genererAffichageFiche($controleReunion);
        } else {
            $this->oModele->editReunion($controleReunion);

            $this->liste();
        }
    }

}
