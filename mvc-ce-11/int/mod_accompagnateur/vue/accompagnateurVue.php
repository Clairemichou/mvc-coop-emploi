<?php

/**
 * Description of Accompagnateur
 * Vue Accompagnateur
 *
 * @author tvosgiens
 */
class AccompagnateurVue{
	
	private $tpl; // Object
	private $valeurs; // Object
	private $parametre; // array

	public function __construct($parametre) {

		$this->parametre = $parametre;

		$this->tpl = new Smarty();
	}

	private function chargementValeurs() {

		$this->tpl->assign('titre', 'Gestion coop\'emploi');
		$this->tpl->assign('deconnexion', 'Déconnexion');
		$this->tpl->assign('piedPage', 'Exercice PHP MVC réalisé avec un moteur de template.');
	}

	public function genererAffichageListe($valeurs = null) {

		$this->valeurs = $valeurs;

		$this->chargementValeurs();

		$this->tpl->assign('titreGestion', 'Liste des accompagnateurs');
		
		$this->tpl->assign('message', AccompagnateurTable::getMessageSucces());

		$this->tpl->assign('listeAccompagnateurs', $this->valeurs);

		$this->tpl->display('mod_accompagnateur/vue/accompagnateurListeVue.tpl');
	}



	public function genererAffichageFiche($valeurs = null) {

		$this->chargementValeurs();
		
		
		switch ($this->parametre['action']) {

			case 'form_consulter':
				$this->valeurs = $valeurs;
				$this->tpl->assign('titreGestion', 'Consultation d\'un accompagnateur');
				$this->tpl->assign('comportement', 'disabled');
				$this->tpl->assign('action', 'consulter');
				$this->tpl->assign('unAccompagnateur', $this->valeurs);
				break;
			
			case 'form_modifier':
			case 'modifier':
				$this->valeurs = $valeurs;
				$this->tpl->assign('titreGestion', 'Modification d\'un accompagnateur');
				$this->tpl->assign('comportement', '');
				$this->tpl->assign('action', 'modifier');
				$this->tpl->assign('unAccompagnateur', $this->valeurs);
				break;

			case 'form_ajouter':
			case 'ajouter':
				$this->tpl->assign('titreGestion', 'Ajouter un accompagnateur');
				$this->tpl->assign('comportement', '');
				$this->tpl->assign('action', 'ajouter');
				$this->tpl->assign('unAccompagnateur', $valeurs);
				break;
			
			
			case 'form_supprimer':
				$this->valeurs = $valeurs;
				$this->tpl->assign('titreGestion', 'Suppression d\'un accompagnateur');
				$this->tpl->assign('comportement', 'disabled');
				$this->tpl->assign('action', 'supprimer');
				$this->tpl->assign('unAccompagnateur', $this->valeurs);
				break;
		}

		$this->tpl->display('mod_accompagnateur/vue/accompagnateurFicheVue.tpl');
	}
}