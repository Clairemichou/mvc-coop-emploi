<?php


class AuthentificationVue
{
    private $tpl; // objet smarty
    private $valeurs;
    private $parametre = array();

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
        $this->tpl = new Smarty();
    }

    public function chargementValeurs()
    {

        $this->tpl->assign('deconnexion', 'Deconnexion');
        $this->tpl->assign('titre', 'Gestion Coop\'Emploi');
        $this->tpl->assign('titreGestion', 'Authentification');
        $this->tpl->assign('piedPage', 'Exercice  PHP MVC réalisé avec le moteur de template Smarty');
        $this->tpl->assign('message', AuthentificationTable::getMessageErreur());
    }

    public function genererAffichageFiche($valeurs)
    {
        $this->valeurs = $valeurs;
        $this->chargementValeurs();
        $this->tpl->assign('authentification', $this->valeurs);
        $this->tpl->assign('action', 'creer');


        $this->tpl->display('mod_authentification/vue/authentificationVue.tpl');

    }

}