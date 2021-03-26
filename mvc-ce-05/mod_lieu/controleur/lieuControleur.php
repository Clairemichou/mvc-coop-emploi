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

    public function form_consulter()
    {
        $valeurs = $this->oModele->getUnLieu();
//        var_dump($valeurs);
        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function form_supprimer()
    {
        $valeurs = $this->oModele->getUnLieu();
        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function supprimer()
    {
        //penser à faire un controle d'intégrité référentielle lieu / réunion / ...
        //Cela imposera une alternative pour ne pas accepter la suppression

        $this->oModele->deleteLieu();
        $this->liste();
    }

    public function form_ajouter()
    {

        $prepareLieu = new LieuTable();
        $this->oVue->genererAffichageFiche($prepareLieu);
    }

    public function ajouter()
    {
        $controleLieu = new LieuTable($this->parametre);
        if ($controleLieu->getAuthorisationBD() == false) {

            $this->oVue->genererAffichageFiche($controleLieu);
        } else {
            $this->oModele->addLieu($controleLieu);

            $this->liste();
        }
    }

    public function form_modifier()
    {
        $valeurs = $this->oModele->getUnLieu();
        $this->oVue->genererAffichageFiche($valeurs);
    }

    public function modifier()
    {
        $controleLieu = new LieuTable($this->parametre);
        if ($controleLieu->getAuthorisationBD() == false) {

            $this->oVue->genererAffichageFiche($controleLieu);
        } else {
            $this->oModele->editLieu($controleLieu);

            $this->liste();
        }
    }

}