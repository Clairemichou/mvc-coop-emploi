<?php


class AccueilVue
{

    private $tpl; //Objet


    public function __construct()
    {
        $this->tpl = new Smarty();

    }

    public function chargementValeurs()
    {

        $this->tpl->assign('deconnexion', 'Deconnexion');
        $this->tpl->assign('titre', 'Gestion Coop\'emploi');
        $this->tpl->assign('piedPage', 'Exercice PHP MVC réalisé avec le moteur de template Smarty');

    }

    public function genererAffichage()
    {
        $this->chargementValeurs();

        $this->tpl->display('mod_accueil/vue/accueilVue.tpl');
    }
}