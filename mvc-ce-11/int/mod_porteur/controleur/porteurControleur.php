<?php

class PorteurControleur {

	private $oVue; //Object
	private $oModele; //Object
	private $parametre; //array
	private $comboSta; //array statut pdp
	private $comboTyp; //array type de pdp
	private $comboSea; //array secteur d'activité de pdp

	public function __construct($parametre) {

		$this->parametre = $parametre;
		
		// Création d'un objet modèle. 
		$this->oModele = new PorteurModele($this->parametre);
		// Création d'un objet vue. 
		$this->oVue = new PorteurVue($this->parametre);
		
	}

	public function liste() {

		$valeurs = $this->oModele->getListePorteurs();

		$this->oVue->genererAffichageListe($valeurs);
	}

	public function form_consulter() {

		$valeurs = $this->oModele->getUnPorteur();

		$this->oVue->genererAffichageFiche($valeurs);
	}

	public function form_ajouter() {

		$preparePorteur = new PorteurTable();

		$this->oVue->genererAffichageFiche($preparePorteur);
	}

	public function ajouter() {

		$controlePorteur= new PorteurTable($this->parametre);

		if ($controlePorteur->getAutorisationBD() == false) {

			$this->oVue->genererAffichageFiche($controlePorteur);
			
		} else {

			$this->oModele->addPorteur($controlePorteur);

			$this->liste();
		}
	}

	public function form_modifier() {

		$valeurs = $this->oModele->getUnPorteur();

		$this->oVue->genererAffichageFiche($valeurs);
	}
	
	public function modifier() {


		$controlePorteur = new PorteurTable($this->parametre);

		if ($controlePorteur->getAutorisationBD() == false) {

			$this->oVue->genererAffichageFiche($controlePorteur);
		} else {

			$this->oModele->editPorteur($controlePorteur);

			$this->liste();
		}
	}
	
	
	public function form_supprimer() {

		$valeurs = $this->oModele->getUnPorteur();

		$this->oVue->genererAffichageFiche($valeurs);
	}
	
	public function supprimer() {

		// Penser à faire le contrôle d'intégrité référentielle Réunion / réunion par exemple

		$this->oModele->deletePorteur();

		$this->liste();
	}

}
