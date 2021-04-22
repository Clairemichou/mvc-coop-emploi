<?php

class ReunionControleur {

	private $oVue; //Object
	private $oPdf; //Object
	private $oModele; //Object
	private $parametre; //array
	private $comboAcc; //array

	public function __construct($parametre) {

		$this->parametre = $parametre;

		// Création d'un objet modèle.
		$this->oModele = new ReunionModele($this->parametre);
		// Création d'un objet vue.
		$this->oVue = new ReunionVue($this->parametre);

	}

	public function liste() {

		$valeurs = $this->oModele->getListeReunions();

		$this->oVue->genererAffichageListe($valeurs);
	}

	public function form_consulter() {

		$valeurs = $this->oModele->getUneReunion();

		$this->oVue->genererAffichageFiche($valeurs);
	}

	public function form_ajouter() {

		$prepareReunion = new ReunionTable();

		$this->oVue->genererAffichageFiche($prepareReunion);
	}

	public function ajouter() {

		$controleReunion = new ReunionTable($this->parametre);

		if ($controleReunion->getAutorisationBD() == false) {

			$this->oVue->genererAffichageFiche($controleReunion);

		} else {

			$this->oModele->addReunion($controleReunion);

			$this->liste();
		}
	}

	public function form_modifier() {

		$valeurs = $this->oModele->getUneReunion();

		$this->oVue->genererAffichageFiche($valeurs);
	}

	public function modifier() {

		$controleReunion = new ReunionTable($this->parametre);

		if ($controleReunion->getAutorisationBD() == false) {

			$this->oVue->genererAffichageFiche($controleReunion);
		} else {

			$this->oModele->editReunion($controleReunion);

			$this->liste();
		}
	}


	public function form_supprimer() {

		$valeurs = $this->oModele->getUneReunion();

		$this->oVue->genererAffichageFiche($valeurs);
	}

	public function supprimer() {

		$this->oModele->deleteReunion();

		$this->liste();
	}

	public function listeInscrits(){

        $valeurs = $this->oModele->getListeInscrits();

        $this->oVue->genererAffichageListeInscrits($valeurs);

    }

	public function etatPresence(){

        $valeurs = $this->oModele->editEtatPresence();

        $this->listeInscrits();

    }
	public function listeInscritsPdf(){

        $valeurs = $this->oModele->getListeInscrits();

        $this->oVue->genererAffichageListeInscritsPdf($valeurs);

    }

}
