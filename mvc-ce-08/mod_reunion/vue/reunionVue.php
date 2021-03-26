<?php

class ReunionVue {

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
        $this->tpl->assign('statut', $this->parametre['statut']);
    }

    public function genererAffichageListe($valeurs) {
        $this->valeurs = $valeurs;

        $this->chargementValeurs();

        $this->tpl->assign('titreGestion', 'Liste des Reunions');

        $this->tpl->assign('listeReunions', $this->valeurs);



        $this->tpl->display('mod_reunion/vue/reunionListeVue.tpl');
    }

    public function genererAffichageFiche($valeurs) {

        $this->valeurs = $valeurs;
//        var_dump($this->valeurs);
        switch ($this->parametre['action']) {

            case 'form_consulter' :

                $this->tpl->assign('titreGestion', 'Consultation d\'une réunion');

                $this->tpl->assign('laReunion', $this->valeurs);

                $this->tpl->assign('comportement', 'disabled');

                $this->tpl->assign('action', 'consulter');
                
                $this->tpl->assign('accompagnateurs', $this->valeurs->getReu_comboAcc());
                
                $this->tpl->assign('lieux', $this->valeurs->getReu_comboLie());

                break;


            case 'form_ajouter' :
            case 'ajouter' :

                $this->tpl->assign('titreGestion', 'Ajout d\'une Réunion');

                $this->tpl->assign('laReunion', $this->valeurs);

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('action', 'ajouter');

                $this->tpl->assign('accompagnateurs', $this->valeurs->getReu_comboAcc());
                
                $this->tpl->assign('lieux', $this->valeurs->getReu_comboLie());
                break;

            case 'form_modifier' :
            case 'modifier' :

                $this->tpl->assign('titreGestion', 'Modification d\'une Réunion');

                $this->tpl->assign('laReunion', $this->valeurs);

                $this->tpl->assign('comportement', '');

                $this->tpl->assign('action', 'modifier');
                
                $this->tpl->assign('accompagnateurs', $this->valeurs->getReu_comboAcc());
                
                $this->tpl->assign('lieux', $this->valeurs->getReu_comboLie());

                break;

            case 'form_supprimer' :

                $this->tpl->assign('titreGestion', 'Suppression d\'une Réunion');

                $this->tpl->assign('laReunion', $this->valeurs);

                $this->tpl->assign('comportement', 'disabled');

                $this->tpl->assign('action', 'supprimer');
                
                $this->tpl->assign('accompagnateurs', $this->valeurs->getReu_comboAcc());
                
                $this->tpl->assign('lieux', $this->valeurs->getReu_comboLie());

                break;
        }

        $this->chargementValeurs();

        $this->tpl->display('mod_reunion/vue/reunionFicheVue.tpl');
    }

}
