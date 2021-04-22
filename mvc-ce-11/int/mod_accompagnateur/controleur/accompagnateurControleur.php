<?php

/**
 * Description of Accompagnateur
 * Controller Accompagnateur
 *
 * @author tvosgiens
 */
class AccompagnateurControleur {

	private $oVue; //Object
	private $oModele; //Object
	private $parametre; //array

	public function __construct($parametre) {

		$this->parametre = $parametre;
		// Création d'un objet modèle. 
		$this->oModele = new AccompagnateurModele($this->parametre);
		// Création d'un objet vue. 
		$this->oVue = new AccompagnateurVue($this->parametre);
	}

	public function liste() {
		
		//var_dump($this->parametre);

		$valeurs = $this->oModele->getListeAccompagnateurs();

		$this->oVue->genererAffichageListe($valeurs);
	}

	public function form_consulter() {

		$valeurs = $this->oModele->getUnAccompagnateur();

		$this->oVue->genererAffichageFiche($valeurs);
	}

	public function form_ajouter() {


		$prepareAccompagnateur = new AccompagnateurTable($this->parametre);

		$this->oVue->genererAffichageFiche($prepareAccompagnateur);
	}

	public function form_modifier() {

		$valeurs = $this->oModele->getUnAccompagnateur();

		$this->oVue->genererAffichageFiche($valeurs);
	}

	public function form_supprimer() {

		$valeurs = $this->oModele->getUnAccompagnateur();

		$this->oVue->genererAffichageFiche($valeurs);
	}

	public function ajouter() {
		//var_dump($this->parametre);
		$controleAccompagnateur = new AccompagnateurTable($this->parametre);

		if ($controleAccompagnateur->getAutorisationBD() == false) {

			$this->oVue->genererAffichageFiche($controleAccompagnateur);
		} else {

			$this->oModele->addAccompagnateur($controleAccompagnateur);

			$this->liste();
		}
	}

	public function modifier() {

		$controleAccompagnateur = new AccompagnateurTable($this->parametre);

		if ($controleAccompagnateur->getAutorisationBD() == false) {

			$this->oVue->genererAffichageFiche($controleAccompagnateur);
			
		} else {

			$this->oModele->editAccompagnateur($controleAccompagnateur);

			$this->liste();
		}
	}

	public function supprimer() {

		// Penser à faire le contrôle d'intégrité référentielle accompagnateur / réunion par exemple

		$this->oModele->deleteAccompagnateur();

		$this->liste();
	}

}
