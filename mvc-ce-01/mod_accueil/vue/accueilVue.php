<?php


class AccueilVue
{
    private $deconnexion;
    private $titre;
    private $piedPage;

    public function __construct()
    {

        $this->deconnexion = 'Deconnexion';
        $this->titre = 'Gestion Coop\'emploi';
        $this->piedPage = 'Exercice PHP MVC réalisé avec le moteur de template Smarty';

        require_once('mod_accueil/vue/vue.php');
    }
}