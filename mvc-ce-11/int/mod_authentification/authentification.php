<?php
/**
 * Description of Accueil
 * Routeur du module Authentification
 * @author tvosgiens
 */
class Authentification {

	private $parametre = array();
	private $oControleur; // objet

	public function __construct($parametre) {

		//Récupération des paramètres
		$this->parametre = $parametre;

		//Création instance de la classe controleur métier
		$ctrlMetier = $parametre['gestion'] . 'Controleur';
		$this->oControleur = new $ctrlMetier($this->parametre);
	}

	public function choixAction() {

		if (isset($this->parametre['action'])) {

			switch ($this->parametre['action']) {

				case 'creer':
					$this->oControleur->authentification();
					break;

				case 'deconnexion':
					$this->oControleur->deconnexion();
					break;
			}
			
		} else {

			$this->oControleur->form_authentification();
		}
	}

}
