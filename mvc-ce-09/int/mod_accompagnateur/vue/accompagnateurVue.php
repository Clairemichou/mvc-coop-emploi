<?php

class AccompagnateurVue {

    private $tpl; // objet smarty
    private $valeurs;
    private $parametre = array();

    public function __construct($parametre) {

        $this->parametre = $parametre;
        $this->tpl = new Smarty();
    }

    public function chargementValeurs() {

        $this->tpl->assign('deconnexion', 'Deconnexion');
        $this->tpl->assign('titre', 'Gestion Coop\'Emploi');
        $this->tpl->assign('piedPage', 'Exercice  PHP MVC réalisé avec le moteur de template Smarty');
    }

    public function genererAffichageListe($valeurs) {
        $this->valeurs = $valeurs;

        $this->chargementValeurs();

        $this->tpl->assign('titreGestion', 'Liste des accompagnateurs');

        $this->tpl->assign('listeAccompagnateurs', $this->valeurs);

        $this->tpl->display('mod_accompagnateur/vue/accompagnateurListeVue.tpl');
    }

    public function genererAffichageFiche($valeurs) {

        $this->valeurs = $valeurs;

        switch ($this->parametre['action']) {

            case 'form_consulter' :

                $this->tpl->assign('titreGestion', 'Consultation d\'un accompagnateur');

                $this->tpl->assign('unAccompagnateur', $this->valeurs);


                $this->tpl->assign('comportement', 'disabled');

                $this->tpl->assign('action', 'consulter');

                break;


            case 'form_ajouter' :
            case 'ajouter' :

                $this->tpl->assign('titreGestion', 'Ajout d\'un accompagnateur');

                $this->tpl->assign('unAccompagnateur', $this->valeurs);

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('action', 'ajouter');

                break;

            case 'form_modifier' :
            case 'modifier' :

                $this->tpl->assign('titreGestion', 'Modification d\'un accompagnateur');

                $this->tpl->assign('unAccompagnateur', $this->valeurs);

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('action', 'modifier');

                break;

            case 'form_supprimer' :
            case 'supprimer':

                $this->tpl->assign('titreGestion', 'Suppression d\'un accompagnateur');

                $this->tpl->assign('unAccompagnateur', $this->valeurs);

                $this->tpl->assign('comportement', 'disabled');

                $this->tpl->assign('action', 'supprimer');

                break;
        }

        $this->chargementValeurs();

        $this->tpl->display('mod_accompagnateur/vue/accompagnateurFicheVue.tpl');
    }

}
