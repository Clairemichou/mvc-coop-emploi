<?php

class LieuControleur {

	private $oVue; //Object
	private $oModele; //Object
	private $parametre; //array

	public function __construct($parametre) {

		$this->parametre = $parametre;
		// Création d'un objet modèle. 
		$this->oModele = new LieuModele($this->parametre);
		// Création d'un objet vue. 
		$this->oVue = new LieuVue($this->parametre);
	}

	public function liste() {


		$valeurs = $this->oModele->getListeLieux();

		$this->oVue->genererAffichageListe($valeurs);
	}

	public function form_consulter() {

		$valeurs = $this->oModele->getUnLieu();

		$this->oVue->genererAffichageFiche($valeurs);
	}

	public function form_ajouter() {

		$prepareLieu = new LieuTable();

		$this->oVue->genererAffichageFiche($prepareLieu);
	}

	public function ajouter() {

		$controleLieu = new LieuTable($this->parametre);

		if ($controleLieu->getAutorisationBD() == false) {

			$this->oVue->genererAffichageFiche($controleLieu);
		} else {

			$this->oModele->addLieu($controleLieu);

			$this->liste();
		}
	}

	public function form_modifier() {

		$valeurs = $this->oModele->getUnLieu();

		$this->oVue->genererAffichageFiche($valeurs);
	}
	
	public function modifier() {

		$controleLieu = new LieuTable($this->parametre);

		if ($controleLieu->getAutorisationBD() == false) {

			$this->oVue->genererAffichageFiche($controleLieu);
		} else {

			$this->oModele->editLieu($controleLieu);

			$this->liste();
		}
	}
	
	
	public function form_supprimer() {

		$valeurs = $this->oModele->getUnLieu();

		$this->oVue->genererAffichageFiche($valeurs);
	}
	
	public function supprimer() {

		// Penser à faire le contrôle d'intégrité référentielle lieu / réunion par exemple

		$this->oModele->deleteLieu();

		$this->liste();
	}

}
