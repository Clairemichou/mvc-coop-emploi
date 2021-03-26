<?php

class Reunion
{

    private $parametre = array();
    private $oControleur; // objet

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        $this->oControleur = new ReunionControleur($this->parametre);
    }

    public function choixAction()
    {

        // Switch avec les différentes actions.
        // Par défaut on affiche la liste
        if (isset($this->parametre['action'])) {

            switch ($this->parametre['action']) {

                case 'form_consulter':
                    //var_dump($this->parametre);
                    $this->oControleur->form_consulter();
                    break;

                case 'form_ajouter':
                    //var_dump($this->parametre);
                    $this->oControleur->form_ajouter();
                    break;

                case 'ajouter':
                    //var_dump($this->parametre);
                    $this->oControleur->ajouter();
                    break;

                case 'form_modifier':
                    //var_dump($this->parametre);
                    $this->oControleur->form_modifier();
                    break;

                case 'modifier':
                    //var_dump($this->parametre);
                    $this->oControleur->modifier();
                    break;

                case 'form_supprimer':
                    //var_dump($this->parametre);
                    $this->oControleur->form_supprimer();
                    break;

                case 'supprimer':
                    //var_dump($this->parametre);
                    $this->oControleur->supprimer();
                    break;

                case 'inscription':
                    //var_dump($this->parametre);
                    $this->oControleur->inscription();
                    break;

                case 'PDF':
                    $this->oControleur->PDF();
                    break;

            }
        } else {

            $this->oControleur->liste();
        }
    }

}
