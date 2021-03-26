<?php


class AccompagnateurControleur
{
    private $parametre = array();
    private $oModele; //objet
    private $oVue; //objet

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        $this->oModele = new AccompagnateurModele($this->parametre);
        $this->oVue = new AccompagnateurVue($this->parametre);
    }

    public function liste()
    {
        //echo'je suis dans le controleur accompagnateur';
        $valeurs = $this->oModele->getListeAccompagnateurs();
        $this->oVue->genererAffichageListe($valeurs);
    }

    public function form_consulter()
    {
        $valeurs = $this->oModele->getUnAccompagnateur();

        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function form_supprimer()
    {
        $valeurs = $this->oModele->getUnAccompagnateur();
        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function supprimer()
    {
        //penser à faire un controle d'intégrité référentielle Accompagnateur / réunion / ...
        //Cela imposera une alternative pour ne pas accepter la suppression

        $this->oModele->deleteAccompagnateur();
        $this->liste();
    }

    public function form_ajouter()
    {

        $prepareAccompagnateur = new AccompagnateurTable();
        $this->oVue->genererAffichageFiche($prepareAccompagnateur);
    }

    public function ajouter()
    {
        $controleAccompagnateur = new AccompagnateurTable($this->parametre);
        if ($controleAccompagnateur->getAutorisationBD() == false) {

            $this->oVue->genererAffichageFiche($controleAccompagnateur);
        } else {
            $this->oModele->addAccompagnateur($controleAccompagnateur);

            $this->liste();
        }
    }

    public function form_modifier()
    {
        $valeurs = $this->oModele->getUnAccompagnateur();
        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function modifier()
    {
        $controleAccompagnateur = new AccompagnateurTable($this->parametre);
        if ($controleAccompagnateur->getAutorisationBD() == false) {

            $this->oVue->genererAffichageFiche($controleAccompagnateur);
        } else {
            $this->oModele->editAccompagnateur($controleAccompagnateur);

            $this->liste();
        }
    }
}