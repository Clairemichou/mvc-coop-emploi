<?php

class PorteurVue
{

    private $tpl; // Object
    private $valeurs; // Object
    private $parametre; // array

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

        $this->tpl = new Smarty();
    }

    private function chargementValeurs()
    {
        // Pour filtrage liste pdp
        if(isset($this->parametre['secteur']) && $this->parametre['secteur'] != null){
            $s = $this->parametre['secteur'];
        }  else{
            $s = '';
        }

        $this->tpl->assign('type', $this->parametre['type']);
        $this->tpl->assign('secteur', $s);

        $this->tpl->assign('titre', 'Gestion coop\'emploi');
        $this->tpl->assign('deconnexion', 'Déconnexion');
        $this->tpl->assign('piedPage', 'Exercice PHP MVC réalisé avec un moteur de template.');
    }

    public function genererAffichageListe($valeurs = null)
    {

        $this->valeurs = $valeurs;

        $this->chargementValeurs();

        $this->tpl->assign('titreGestion', 'Liste des porteurs de projet');

        $this->tpl->assign('message', porteurTable::getMessageSucces());

        $this->tpl->assign('listePorteurs', $this->valeurs);

        //var_dump($this->valeurs);

        $this->tpl->display('mod_porteur/vue/porteurListeVue.tpl');
    }


    public function genererAffichageFiche($valeurs = null)
    {

        $this->chargementValeurs();

        switch ($this->parametre['action']) {

            case 'form_consulter':
                $this->valeurs = $valeurs;
                $this->tpl->assign('titreGestion', 'Consultation d\'un porteur de projet');
                $this->tpl->assign('comportement', 'disabled');
                $this->tpl->assign('action', 'consulter');

                $this->tpl->assign('statuts', $valeurs->getPdp_comboSta());
                $this->tpl->assign('secteurs', $valeurs->getPdp_comboSea());
                $this->tpl->assign('types', $valeurs->getPdp_comboTyp());
//var_dump($this->valeurs);
                $this->tpl->assign('lePorteur', $this->valeurs);
                break;

            case 'form_modifier':
            case 'modifier':
                $this->valeurs = $valeurs;
                $this->tpl->assign('titreGestion', 'Modification d\'un porteur de projet');
                $this->tpl->assign('comportement', '');
                $this->tpl->assign('action', 'modifier');
                $this->tpl->assign('statuts', $valeurs->getPdp_comboSta());
                $this->tpl->assign('secteurs', $valeurs->getPdp_comboSea());
                $this->tpl->assign('types', $valeurs->getPdp_comboTyp());

                $this->tpl->assign('lePorteur', $this->valeurs);
                break;

//			case 'form_ajouter':
//			case 'ajouter':
//				$this->tpl->assign('titreGestion', 'Ajouter une réunion d\'information collective');
//				$this->tpl->assign('comportement', '');
//				$this->tpl->assign('action', 'ajouter');
//				$this->tpl->assign('accompagnateurs', $valeurs->getReu_comboAcc());
//				$this->tpl->assign('lieux', $valeurs->getReu_comboLie());
//				$this->tpl->assign('laReunion', $valeurs);
//				break;
//
//
//			case 'form_supprimer':
//				$this->valeurs = $valeurs;
//				$this->tpl->assign('titreGestion', 'Suppression d\'une réunion d\'information collective ');
//				$this->tpl->assign('comportement', 'disabled');
//				$this->tpl->assign('action', 'supprimer');
//				$this->tpl->assign('accompagnateurs', $valeurs->getReu_comboAcc());
//				$this->tpl->assign('lieux', $valeurs->getReu_comboLie());
//				$this->tpl->assign('laReunion', $this->valeurs);
//				break;
        }

        $this->tpl->display('mod_porteur/vue/porteurFicheVue.tpl');
    }

}
