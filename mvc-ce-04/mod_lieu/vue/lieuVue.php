<?php
/**
 * Class LieuVue
 */

class LieuVue
{
    private $tpl; //objet Smarty
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
        $this->tpl->assign('titre', 'Gestion Coop\'emploi');
        $this->tpl->assign('piedPage', 'Exercice PHP MVC réalisé avec le moteur de template Smarty');

    }

    public function genererAffichageListe($valeurs)
    {
        $this->valeurs = $valeurs;

        $this->chargementValeurs();

        $this->tpl->assign('titreGestion', 'Liste des Lieux');
        $this->tpl->assign('listeLieux', $this->valeurs);

        $this->tpl->display('mod_lieu/vue/lieuListeVue.tpl');
    }
}