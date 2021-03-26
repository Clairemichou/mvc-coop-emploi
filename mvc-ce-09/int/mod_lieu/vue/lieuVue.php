<?php

/**
 * Class LieuVue
 */
class LieuVue {

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

        $this->tpl->assign('titreGestion', 'Liste des lieux');

        $this->tpl->assign('listeLieux', $this->valeurs);

        $this->tpl->display('mod_lieu/vue/lieuListeVue.tpl');
    }

    public function genererAffichageFiche($valeurs) {

        $this->valeurs = $valeurs;

        switch ($this->parametre['action']) {

            case 'form_consulter' :

                $this->tpl->assign('titreGestion', 'Consultation d\'un lieu');

                $this->tpl->assign('leLieu', $this->valeurs);

                $this->tpl->assign('comportement', 'disabled');

                $this->tpl->assign('action', 'consulter');

                break;


            case 'form_ajouter' :
            case 'ajouter' :

                $this->tpl->assign('titreGestion', 'Ajout d\'un lieu');

                $this->tpl->assign('leLieu', $this->valeurs);

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('action', 'ajouter');

                break;

            case 'form_modifier' :
            case 'modifier' :

                $this->tpl->assign('titreGestion', 'Modification d\'un lieu');

                $this->tpl->assign('leLieu', $this->valeurs);

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('action', 'modifier');

                break;

            case 'form_supprimer' :

                $this->tpl->assign('titreGestion', 'Suppression d\'un lieu');

                $this->tpl->assign('leLieu', $this->valeurs);

                $this->tpl->assign('comportement', 'disabled');

                $this->tpl->assign('action', 'supprimer');

                break;
        }

        $this->chargementValeurs();

        $this->tpl->display('mod_lieu/vue/lieuFicheVue.tpl');
    }

}
