<?php

class AccueilControleur {

	private $oVue; //Object

	public function __construct() {

		// require_once('mod_accueil/vue/accueilVue.php');

		// Création d'un objet vue. 
		$this->oVue = new AccueilVue();
	}

	public function liste() {

		$this->oVue->genererAffichage();
	}

}
