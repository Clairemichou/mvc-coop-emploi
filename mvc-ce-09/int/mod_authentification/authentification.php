<?php


class Authentification
{
    private $parametre = array();
    private $oControleur; //objet

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        $this->oControleur = new AuthentificationControleur($this->parametre);
    }

    public function choixAction()
    {
        //switch avec les différentes actions.

        if (isset($this->parametre['action'])) {
            switch ($this->parametre['action']) {
                case 'creer':
                    $this->oControleur->authentification();
                    break;
                case 'deconnexion':
                    $this->oControleur->deconnexion();
                    break;
            }

        } else {
            $this->oControleur->form_authentification();
        }
    }

}