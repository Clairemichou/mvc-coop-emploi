<?php

class LieuVue {

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

		$this->tpl->assign('titreGestion', 'Liste des lieux');
		
		$this->tpl->assign('message', lieuTable::getMessageSucces());

		$this->tpl->assign('listeLieux', $this->valeurs);

		$this->tpl->display('mod_lieu/vue/lieuListeVue.tpl');
	}



	public function genererAffichageFiche($valeurs = null) {

		$this->chargementValeurs();
		
		
		switch ($this->parametre['action']) {

			case 'form_consulter':
				$this->valeurs = $valeurs;
				$this->tpl->assign('titreGestion', 'Consultation d\'un lieu');
				$this->tpl->assign('comportement', 'disabled');
				$this->tpl->assign('action', 'consulter');
				$this->tpl->assign('leLieu', $this->valeurs);
				break;
			
			case 'form_modifier':
			case 'modifier':
				$this->valeurs = $valeurs;
				$this->tpl->assign('titreGestion', 'Modification d\'un lieu');
				$this->tpl->assign('comportement', '');
				$this->tpl->assign('action', 'modifier');
				$this->tpl->assign('leLieu', $this->valeurs);
				break;

			case 'form_ajouter':
			case 'ajouter':
				$this->tpl->assign('titreGestion', 'Ajouter un lieu');
				$this->tpl->assign('comportement', '');
				$this->tpl->assign('action', 'ajouter');
				$this->tpl->assign('leLieu', $valeurs);
				break;
			
			
			case 'form_supprimer':
				$this->valeurs = $valeurs;
				$this->tpl->assign('titreGestion', 'Suppression d\'un lieu');
				$this->tpl->assign('comportement', 'disabled');
				$this->tpl->assign('action', 'supprimer');
				$this->tpl->assign('leLieu', $this->valeurs);
				break;
		}

		$this->tpl->display('mod_lieu/vue/lieuFicheVue.tpl');
	}

}
