<?php

class AuthentificationControleur {

    private $parametre = array();
    private $oModele; //objet
    private $oVue; //objet

    public function __construct($parametre) {
        $this->parametre = $parametre;
        $this->oModele = new AuthentificationModele($this->parametre);
        $this->oVue = new AuthentificationVue($this->parametre);
    }

    public function form_authentification() {

        $prepareAuthentification = new AuthentificationTable($this->parametre);
        $this->oVue->genererAffichageFiche($prepareAuthentification);
    }

    public function deconnexion() {
        session_destroy();
        $_SESSION = array();
        header('Location:index.php');
    }

    public function authentification() {
        $controleAuthentification = new AuthentificationTable($this->parametre);
        //var_dump($controleAuthentification);
        //Alternative à écrire :
        //Vérification des données du formulaire + controle en base de donnée
        if ($controleAuthentification->getAutorisationSession() == false || $this->oModele->rechercheUtilisateur($controleAuthentification) == false) {
            $this->oVue->genererAffichageFiche($controleAuthentification);
        } else {
            header('Location:index.php');
        }
    }

}
