
<?php

/**
 * Description of Accueil
 * Routeur du module Accueil
 * @author tvosgiens
 */
class Accueil {

	private $parametre = array();
	private $oControleur; // objet

	public function __construct($parametre) {

		//Récupération des paramètres
		$this->parametre = $parametre;

		//Création instance de la classe controleur métier
		$ctrlMetier = $parametre['gestion'] . 'Controleur';
		$this->oControleur = new $ctrlMetier();

	}

	public function choixAction() {

		$this->oControleur->liste();
		//var_dump($this->oControleur);
	}

}

